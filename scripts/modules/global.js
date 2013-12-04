define(function (require, exports, module) {
    'use strict';

    var global = (function () {    
        var $body,
            $header,
            $main,
            $video,
            $modal,
            mobile;

        // Public Functions
        var init = function (isMobile) {  
            $body = $('body');
            $header = $('header');
            $main = $('#main');
            $video = $('video');
            $modal = $('.modal');
            mobile = isMobile;

            bindUI();
        };

        // Private Functions
        var bindUI = function () {
            // Fields SVG hovers
            $body.on('focus', 'input, textarea', function() {
                $(this).prev().addClass('focus');
            });

            $body.on('blur', 'input, textarea', function() {
                $(this).prev().removeClass('focus');
            });

            // Gif clicks
            $body.on('click', '.gif', function() {
                var src = $(this).find('img').attr('src');

                var img = src.replace('.gif', '.jpg');
                var gif = src.replace('.jpg', '.gif');

                if ($(this).hasClass('playing') === false) {
                    $(this).find('img').attr("src", gif);

                    $(this).find('.play').stop(true, true).fadeOut();
                    $(this).addClass('playing');
                } else {
                    $(this).find('img').attr('src', img);
                    $(this).find('.play').stop(true, true).fadeIn();
                    $(this).removeClass('playing');
                }
            });

            // Videos
            $body.on('click', '.video', function() {

                // Create a modal
                var videoURL = $(this).data('video');
                $modal = $('.modal');
                $video = $('video');


                if (mobile) {
                    window.location.href = $(this).attr('href');
                    return false;
                }

                else {
                    $video[0].pause();
                    $modal.find('.video-wrapper .iframe').html('<object width="750" height="422"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.wf?clip_id=' + videoURL + '&amp;force_embed=1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=1&amp;color=00adef&amp;fullscreen=1&amp;autoplay=0&amp;loop=0" /><embed src="http://vimeo.com/moogaloop.swf?clip_id=' + videoURL + '&amp;force_embed=1&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=1&amp;show_portrait=1&amp;color=00adef&amp;fullscreen=1&amp;autoplay=0&amp;loop=0" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="750" height="422"></embed></object>');                    
                }

                $modal.fadeIn(function() {                   
                   $modal.find('button').addClass('loaded');
                });

                return false;
            });

            $body.on('click', 'button, .modal', function() {  
                $video[0].play();   
                $modal.find('button').removeClass('loaded');

                $modal.fadeOut(function() {
                    $modal.find('iframe').remove();
                });
            });
        };

        return {
            init: init
        };
    })();
    
    return global;
});