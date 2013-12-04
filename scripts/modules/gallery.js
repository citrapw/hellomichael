define(function (require, exports, module) {
    'use strict';

    var gallery = (function () {
        var $window,
        $gallery,
        $gallery_nav;

        // Public Functions
        var init = function () {
            $window = $(window);
            $gallery = $('.ux .gallery');
            $gallery_nav = $('.ux .gallery-nav');
            bindUI();
        };

        var destroy = function () {
            $gallery.trigger('destroy');
        };

        // Private Functions
        var bindUI = function () {
            $gallery.carouFredSel({
                auto        : false,
                infinite    : false,
                responsive  : true,
                scroll      : 1,
                width       : '100%',
                items       : {
                    visible     : 1,
                    start       : 0,
                    width       : true
                },
                prev: {
                    onBefore: function(data) {
                        highlightGallery(data);
                    }
                },
                next: {
                    onBefore: function(data) {
                        highlightGallery(data);
                    }
                },
                swipe: {
                    onMouse: true,
                    onTouch: true,
                }
            }).css('visibility', 'visible'); 

            $gallery.find('img').on("click", function () {
                $gallery.trigger('next');

                return false;
            });

            $gallery_nav.find('a').on("click", function () {
                var current_slide = $(this).parent().index();
                var next_slide = current_slide;

                if (next_slide == -1) {
                    next_slide = $gallery_nav.find('li').length - 1;
                }

                $gallery.trigger('slideTo', next_slide);

                return false;
            });

            $window.resize(function() {
                //$gallery.trigger("updateSizes");
                
                $gallery.add($gallery.parent()).css('height', $gallery.find('img').height());

                return false;
            });
        };

        var highlightGallery = function(data) {
            var current_slide = $gallery.triggerHandler("currentPosition");
            var next_slide = current_slide;

            if (next_slide == $gallery_nav.find('li').length) {
                next_slide = 0;
            }

            data.items.old.removeClass('current');
            data.items.visible.eq(1).addClass('current');
            data.items.visible.eq(0).addClass('current');

            $gallery_nav.find('li').removeClass('current').eq(next_slide).addClass('current');
        };

        return {
            init: init,
            destroy: destroy
        };
    })();

    return gallery;
});