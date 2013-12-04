(function () {
    'use strict';

    require.config({
        baseUrl: "./scripts/",
        paths: {
            // Libraries
            "typekit": "lib/typekit",

            "jquery": [
                'http://code.jquery.com/jquery-2.0.3.min',
                'lib/jquery.min'
            ],
            "history": "lib/jquery.history.min",
            "waypoints": "lib/jquery.waypoints.min",
            "scrollspy": "lib/jquery.scrollspy.min",

            "easing": "lib/jquery.easing.min",
            "color": "lib/jquery.color.min",    
            
            "carousel": "lib/jquery.carouFredSel.min",
            "touchswipe": "lib/jquery.touchSwipe.min", 
            "skrollr": "lib/skrollr.min",

            // Modules
            "global": "modules/global",
            "navigation": "modules/navigation",
            "ajaxtransition": "modules/ajaxtransition",

            "home": "modules/home",
            "portrait": "modules/portrait",

            "foodsters": "modules/foodsters",
            "gallery": "modules/gallery",
            "twitter": "https://platform.twitter.com/widgets"
        },

        shim: {
            // Libraries
            "jquery": {
                exports: "$"
            },
            "history": {
                deps: ["jquery"]
            },
            "waypoints": {
                deps: ["jquery"]
            },
            "scrollspy": {
                deps: ["jquery"]
            },
            "easing": {
                deps: ["jquery"]
            },
            "color": {
                deps: ["jquery"]
            },
            "carousel": {
                deps: ["jquery"]
            },

            // Modules
            "global": {
                deps: ["jquery", "history"]
            },
            "portrait": {
                deps: ["global"]
            },
            "navigation": {
                deps: ["jquery", "color", "waypoints"]
            },
            "ajaxtransition": {
                deps: ["jquery", "history", "waypoints"]
            },
            "gallery": {
                deps: ["carousel", "touchswipe"]
            },
        }
    });

    require([
        "global",
        "navigation",
        "ajaxtransition",
        "easing"
    ],
        function (global, navigation, ajaxtransition) {
            $.Color.hook('fill stroke backgroundColor');

            // Mobile 
            if (window.innerWidth < 480 || /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || $('body').hasClass('mobile')) {
                var isMobile = true;
            }
            
            global.init(isMobile);
            navigation.init();

            // Load page modules
            var currentPageModuleName = $("script[data-main][data-start]").attr("data-start");

            if (currentPageModuleName) {
                require([currentPageModuleName], function (currentPageModuleName) {
                    var currentPageModule = currentPageModuleName;
                    currentPageModule.init(isMobile);
                    ajaxtransition.init(currentPageModule, isMobile);
                });
            }

            else {
                ajaxtransition.init();
            }
        });
}());


