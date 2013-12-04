define(['navigation'], function (navigation) {
    'use strict';

    var asr = (function () {   
        var $main,
        $nav;

        // Public Functions
        var init = function (isMobile) {
            $main = $('#main');
            $nav = $('nav');

            if (!isMobile) {
                /**************************************
                WayPoints
                **************************************/
                $('.event').waypoint(function () {
                    $(this).addClass('visible');
                }, {
                    offset: '75%'
                });  
            }

            else {
                $('.event').addClass('visible', 'no-transition');
            }

            if (!$main.hasClass('ajax')) {
                navigation.activateNav($nav.find('.work'));
            }
        };

        var destroy = function () {
           
        };

        // Private Functions
        var bindUI = function () {

        };

        return {
            path: "modules/asr",
            init: init,
            destroy: destroy
        };
    })();
    
    return asr;
});