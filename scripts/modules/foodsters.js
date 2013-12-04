define(['navigation'], function (navigation) {
    'use strict';

    var foodsters = (function () {   
        var $window,
        $nav,
        $main,
        galleryModule,
        skroll,
        mobile;

        // Public Functions
        var init = function (isMobile) {
            $window = $(window);
            $main = $('#main');
            $nav = $('nav');
            mobile = isMobile;            

            require([
                "gallery",
                "skrollr",
                "touchswipe",
                "twitter"
            ], function (gallery) {
                /**************************************
                Gallery
                **************************************/
                galleryModule = gallery;
                galleryModule.init();

                if (!mobile) {
                    /**************************************
                    WayPoints
                    **************************************/
                    $('.ribbon').waypoint(function () {
                        $(this).addClass('visible');
                    }, {
                        offset: '50%'
                    });

                    $('.outcomes').waypoint(function () {
                        $(this).addClass('visible');
                    }, {
                        offset: '50%'
                    });

                    $('.event').waypoint(function () {
                        $(this).addClass('visible');
                    }, {
                        offset: '75%'
                    });                    

                    /**************************************
                    Knolling
                    **************************************/
                    $(".knoll span").each(function () {
                        var knoll_x = parseInt($(this).css('left').replace(/px/, ""));
                        var knoll_width = parseInt($(this).css('width').replace(/px/, ""));
                        var knoll_offset = 500;
                        var knoll_min = 0 - knoll_offset;
                        var knoll_max = 940 + knoll_offset;
                        var knoll_range = knoll_max - knoll_min;
                        var knoll_percentage = (knoll_x + knoll_width / 5) / 940;
                        var knoll_rotation = '-15deg';
                        var knoll = Math.round(knoll_range * knoll_percentage) + knoll_min;

                        if (knoll_percentage > 0.5) {
                            knoll_rotation = '15deg';
                        }

                        $(this).attr('data-20p-center', 'top:' + $(this).css('top') + ';' + 'left:' + $(this).css('left') + ';' + 'transform:rotate(0deg);');
                        $(this).attr('data-bottom', 'top:' + addPixels($(this).css('top'), "300") + ';' + 'left:' + knoll + "px" + ';' + 'transform:rotate(' + knoll_rotation + '); transform-origin:center;');
                    });
                
                    skroll = skrollr.init({
                        forceHeight: false
                    });
                }

                else {
                    $('.ribbon, .outcomes, .event').addClass('visible', 'no-transition');
                }

                twttr.widgets.load();

                if (!$main.hasClass('ajax')) {
                    navigation.activateNav($nav.find('.work'));
                }
                
            });
            
            bindUI();
        };

        var  addPixels = function (val1, val2) {
            return (parseInt(val1.replace(/px/, "")) + parseInt(val2.replace(/px/, ""))) + "px";
        };

        var destroy = function () {
            galleryModule.destroy();

            if (!mobile) {
                skroll.destroy();
            }
        };

        // Private Functions
        var bindUI = function () {
            $window.resize(function() {
                twttr.widgets.load();
            });
        };

        return {
            path: "modules/foodsters",
            init: init,
            destroy: destroy
        };
    })();
    
    return foodsters;
});