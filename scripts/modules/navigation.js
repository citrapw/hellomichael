define(function (require, exports, module) {
    'use strict';

    var navigation = (function () {
        var $header,
            $nav,
            $navbar;

        // Public Functions
        var init = function () {
            $nav = $('nav'); 
            $navbar = $('.navbar'); 
            $header = $('header');
            $header.css("left", "0");

            bindUI();
        };

        // Private Functions
        var bindUI = function () {           
            // Hovers
            $nav.find('a').hover(function () {               
                focusNav($(this));

            }, function () {
                if (!$(this).parent().hasClass('active')) {
                    blurNav($(this));
                }

                return false;
            });

            // Clicks
            $nav.on('click', '.ajax' ,function(){
                activateNav($(this));
                $navbar.next('ul').addClass('collapsed');
            });

            // Mobile
            $navbar.on('click', 'button' ,function(){
                $(this).parent().next('ul').toggleClass('collapsed');
            });
        };

        var activateNav = function (element) {
            if (!element.parent().hasClass('active')) {
                // Deactivate correct section
                deactivateNav();

                // Add/remove active class
                focusNav(element);
                element.parent().addClass('active');
            }
        };

        var deactivateNav = function () {
            blurNav($nav.find('.active'));
            $nav.find('li.active').removeClass('active');
        };

        var focusNav = function (element) { // Animate via javascript since css transitions not working
            element.find('svg').stop().animate({
                'fill': '#C33'
            }, 200);

            element.find('svg line').stop().animate({
                'stroke': '#C33'
            }, 200);
        };

        var blurNav = function (element) { // Animate via javascript since css transitions not working
            element.find('svg').stop().animate({
                'fill': 'black'
            }, 200);
            element.find('svg line').stop().animate({
                'stroke': 'black'
            }, 200);
        };
        
        return {
            init: init,
            activateNav: activateNav,
            deactivateNav: deactivateNav
        };
    })();

    return navigation;
});