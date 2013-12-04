define(['navigation'], function (navigation) {
    'use strict';

    var conductivethread = (function () {   
        var $main,
        $nav;

        // Public Functions
        var init = function (isMobile) {
            $main = $('#main');
            $nav = $('nav');

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
            path: "modules/conductivethread",
            init: init,
            destroy: destroy
        };
    })();
    
    return conductivethread;
});