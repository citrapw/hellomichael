define(function (require, exports, module) {
    'use strict';

    var portrait = (function () {
        var $window, 
            $document, 
            $main, 
            $header, 
            $footer,
            $nav,
            $content,
            $video, 
            $leftHand, 
            $rightHand, 
            documentHeight, 
            windowHeight;

        // Public Functions
        var init = function (isMobile) {
            $window = $(window);
            $document = $(document);

            $main = $('#main');
            $header = $('header');
            $footer = $('footer');
            $nav = $('nav'); 
            $content = $('.home .content');
            $video = $('.feature video');
            $leftHand = $('.leftHand');
            $rightHand = $('.rightHand');         

            documentHeight = $document.height();
            windowHeight = $window.height();
            
            bindUI();
            animateIntro(isMobile);
            centerPortrait();
            parallaxPortrait();
        };

        var destroy = function () {
            $content.add($video).add($leftHand).add($rightHand).add($footer).removeClass('loaded');
            $window.off('resize', centerPortrait);
            $window.off('scroll', parallaxPortrait);
        };

        // Private Functions
        var bindUI = function () {
            $window.resize(centerPortrait);
            $window.scroll(parallaxPortrait);
        };

        var animateIntro = function (isMobile) {
            var initial_section = getSection(location.href); // Jump to the correct section of the url

            if (isMobile) {
                if (initial_section) { // Scroll to a section of the page w/out animations                    
                    $content.add($video).add($leftHand).add($rightHand).add($footer).addClass('no-transition loaded');
                    $nav.find('.active').removeClass();
                    $nav.find("." + initial_section).trigger('click');
                }

                else { 
                    $content.scrollTop(0).add($video).add($leftHand).add($rightHand).add($footer).addClass('loaded');
                }
            }

            else {
                window.scrollTo(0, 0);

                if (initial_section) { // Scroll to a section of the page w/out animations                    
                    $content.scrollTop(0).add($video).add($leftHand).add($rightHand).add($footer).addClass('no-transition loaded');
                    $nav.find('.active').removeClass();
                    $nav.find("." + initial_section).trigger('click');
                }

                else { 
                    $content.add($video).add($leftHand).add($rightHand).add($footer).addClass('loaded');
                }
            }
        };

        var centerPortrait = function () {
            var center_video;

            if (window.innerWidth >= 960) {
                center_video = ($main.width() - $video.width())/2 + $header.children('nav').width();
            }

            else {
                center_video = ($main.width() - $video.width())/2;
            }

            $video.css('left', center_video);
        };

        var parallaxPortrait = function () {
            var scrollTop = $window.scrollTop();       
            var scrollPercentage = scrollTop / (documentHeight - windowHeight);

            $video.css('top', range(80, -580, scrollPercentage));
            $footer.css('bottom', range(350, 50, scrollPercentage));

            function range(start, end, percentage) {
                var distance = Math.abs(start - end);
                var offset = distance * percentage;

                if (start > end) {
                    return Math.round(start - offset);
                }

                return Math.round(start + offset);
            }
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
            init: init,
            destroy: destroy
        };
    })();

    return portrait;
});