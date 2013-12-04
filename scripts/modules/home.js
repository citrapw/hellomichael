define(['navigation'], function (navigation) {
    'use strict';
    
    var home = (function () {   
        var $window,
        $nav,
        portraitModule,
        submitForm;

        // Public Functions
        var init = function (isMobile) {
            $window = $(window);
            $nav = $('nav');
            submitForm = false;

            require([
                "portrait",
            ], function (portrait) {  

                /**************************************
                Waypoints
                **************************************/
                setTimeout(function(){
                    $('#about').waypoint(function () {
                        navigation.activateNav($nav.find('.about'));
                    }, {
                        offset: '84'
                    });

                    $('#work').waypoint(function () {
                        navigation.activateNav($nav.find('.work'));
                    }, {
                        offset: '84'
                    });

                    $('#contact').waypoint(function () {
                        navigation.activateNav($nav.find('.contact'));
                    }, {
                        offset: '84'
                    });
                }, 1500);

                /**************************************
                Portrait
                **************************************/
				portraitModule = portrait;
                portraitModule.init(isMobile);

                /**************************************
                Contact Form
                **************************************/
                var $error = $('form .error');
                var $form = $("#contact-form");

                $form.submit(function() {
                    if (submitForm === false) {
                        submitForm = true;

                        $.ajax({
                            type: "post",
                            url: "scripts/mailer",
                            data: $form.serialize(),

                            success: function(data) {
                                if (data == 'true') {
                                    $error.html("Thanks for the message. I'll get back to you asap.").hide().fadeIn();
                                    $form.find('button').fadeOut();
                                }

                                else {
                                    $error.html("Please check that all the fields are filled in correctly.").hide().fadeIn();
                                }

                                submitForm = false;
                           },
                           error: function(data) {
                                $error.html("Please check that all the fields are filled in correctly.").hide().fadeIn();
                           }
                         });

                        return false;
                    }
                });
			});
        };

        var destroy = function () {
            portraitModule.destroy();
            $('#about, #work, #contact').waypoint('destroy');
        };

        return {
            path: "modules/home",
            init: init,
            destroy: destroy
        };
    })();
    
    return home;
});