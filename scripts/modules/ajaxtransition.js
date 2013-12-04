define(['navigation'], function (navigation) {
    'use strict';

    var ajaxTransition = (function () {
        var $window,
            $main,
            $body,
            $cover,  
            $progress_bar,
            $nav,
            $modal,
            localPush,
            currentModule,
            loadedModules,
            scrolling,
            mobile;

        // Public Functions
        var init = function (currentPageModule, isMobile) {
            $window = $(window);
            $main = $('#main');
            $body = $('body');  
            $cover = $('.cover');     
            $progress_bar = $(".progress-bar");
            $nav = $('nav'); 
            $modal = $('.modal');
            localPush = false;
            scrolling = false;
            loadedModules = [];
            mobile = isMobile;

            if (currentPageModule) {
                currentModule = currentPageModule;
                loadedModules.push(currentModule);
            }
            
            if (!$main.hasClass('ajax')) {  // Wait for navigation to animate first
                $cover.delay(250).fadeOut();
            }

            bindUI();
        };

        // Private Functions
        var bindUI = function () {
            // Ajax Links
            $body.on('click', 'a.ajax' ,function(){
                var href = $(this).attr("href");

                // Navigation Links
                if ($(this).parents("nav").length == 1 || $(this).hasClass("scroll")) {
                    if (document.location.hostname == "localhost") { // Fix for localhost links
                        href = "hellomichael/" + href;
                    }

                    if ($body.hasClass('home')) { 
                        scrollSection({section: getSection(href)}, null, href, true); // Scroll to navigation link
                        return false;
                    }

                    loadAjax({section: getSection(href)}, null, href, true); // Load navigation as regular link
                    return false;
                }
                
                // Hightlight work section in navigation
                if ($(this).parent().hasClass('project')) {
                    navigation.activateNav($nav.find('.work'));
                }

                else {
                    navigation.deactivateNav();
                }

                loadAjax(null, null, href, true); // Load regular link
                
                return false;
            });

            // Browser back + Forward buttons
            $window.on('statechange', function(){
                var state = History.getState();

                if (state.data.waypoint || mobile) { // Disable pushstates for ie and mobile
                    return false;
                }

                if (!localPush) {
                    if (state.url) {
                        loadAjax(state.data, false, state.url, false);
                    }

                    else {
                        loadAjax(state.data, false, 'index.html', false);
                    }
                }

                else {
                    localPush = false;
                }
            });
        };

        var scrollSection = function (data, title, url, push) {
            // Fires pushstate only for clicks 
            scrollToSection($('#' + data.section));

            if (push) {
                localPush = true;
                History.pushState(data, $main.children('.wrapper').data('title'), url);
            }
        };

        var loadAjax = function (data, title, url, push) {
            if (History.pushState) {
                var duration = 750;

                if(!$window.scrollTop()) {
                    duration = 0;
                }           

                // Show progress bar/preloader
                $progress_bar.removeClass('loaded').css('height', '0');

                var progress = setInterval (function() {
                    $progress_bar.css('height', '+=10');
                    //percentage += $window.height()/2;
                }, 50);
                
                //$('html, body').animate({scrollTop: 0}, duration, 'easeInOutCubic', function () { //Callback being called twice
                    $cover.fadeIn(function () {
                        window.scrollTo(0, 0); // Jump to top of page
                        
                        // Destroy current module
                        if (currentModule) {
                            currentModule.destroy();
                        }

                        // Load actual content
                        $main.load(url + " #main .wrapper", function() {    
                            // Fires pushstate only for clicks  
                            if (push) {
                                localPush = true;
                                History.pushState(data, $main.children('.wrapper').data('title'), url);
                            }
                                
                            // Load page modules
                            var currentPageModuleName = $main.children('.wrapper').data('start');

                            if (require.defined(currentPageModuleName)) { // Module is already loaded  
                                // Find module in loadModules and initialize it
                                var results = $.grep(loadedModules, function(module) {return module.path === currentPageModuleName;});
                                currentModule = results[0];
                                currentModule.init(mobile);
                            }

                            else { // Load new module
                                if (currentPageModuleName) {
                                    require([currentPageModuleName], function (currentPageModuleName) {
                                        currentModule = currentPageModuleName;
                                        currentModule.init(mobile);
                                        loadedModules.push(currentModule);
                                    });
                                }
                            }

                            // Add correct class to body
                            $body.removeClass();
                            $main.addClass('ajax');

                            if (mobile) {
                                $body.addClass('mobile');
                            }

                            if (currentPageModuleName) {
                                $body.addClass(currentPageModuleName.replace('modules/', ''));
                            }

                            else {
                                $body.addClass(url.replace('.php', ''));
                            }

                            if ($main.children('.wrapper').data('type') == 'casestudy') {
                                $body.addClass('casestudy');
                            }

                            if ($main.find('video').length) {
                                $('video').on('canplay canplaythrough', function() {
                                    preloadImages($main, progress);
                                });
                            }

                            else {
                                preloadImages($main, progress);
                            }
                        });
                    });
                //});
                return true;
            }

            window.location.href = url;
            return false;
        };

        var preloadImages = function ($main, progress) {
            // Preload the images, now that the html is inserted
            var imageCount = Math.floor($main.find('img').length/2); // Preload only half the images
            var imagesLoaded = 0;

            if (imageCount) {
                $main.find('img').slice(imageCount).one('load', function() { // Fix load from cache
                    imagesLoaded ++;

                    if (imagesLoaded >= imageCount) {
                        clearInterval(progress);
                        $progress_bar.addClass('loaded').css('height', $(window).height());
                        $cover.fadeOut();
                    }
                }).each(function() {if(this.complete) $(this).load();});

                return true;
            }

            clearInterval(progress);
            $progress_bar.addClass('loaded').css('height', $(window).height());
            $cover.fadeOut();
        };

        var scrollToSection = function ($element) {
            scrolling = true;
            $.waypoints('disable');

            $('html, body').stop().animate({scrollTop: $element.offset().top - 80}, 750, 'easeInOutCubic', function () {
                scrolling = false;
                $.waypoints('enable');
            });

/*          if (mobile) {
                $('html, body').stop().animate({scrollTop: $element.offset().top - 120}, 0); // Account for navbar
            }

            else {
                scrolling = true;

                $('html, body').stop().animate({scrollTop: $element.offset().top - 80}, 750, 'easeInOutCubic', function () {
                    scrolling = false;
                });
            }*/
        };

        var getSection = function (url) {
            var name = 'section'.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");

            var results = regex.exec(url);

            if (results) {
                return results[1];
            }

            return false;
        };

        return {
            init: init
        };
    })();

    return ajaxTransition;
});