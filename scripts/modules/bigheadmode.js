define(['navigation'], function (navigation) {
    'use strict';

    var bigheadmode = (function () {   
        var $main,
        $nav,
        mobile,
        skroll;

        // Public Functions
        var init = function (isMobile) {
            $main = $('#main');
            $nav = $('nav');
            mobile = isMobile;            

            require([
                "skrollr"
            ], function () {

                if (!mobile) {
                    skroll = skrollr.init({
                        forceHeight: false
                    });
                }

                if (!$main.hasClass('ajax')) {
                    navigation.activateNav($nav.find('.work'));
                }
            });
            
            bindUI();
        };

        var destroy = function () {
            if (!mobile) {
                skroll.destroy();
            }
        };

        // Private Functions
        var bindUI = function () {

        };

        return {
            path: "modules/bigheadmode",
            init: init,
            destroy: destroy
        };
    })();
    
    return bigheadmode;
});