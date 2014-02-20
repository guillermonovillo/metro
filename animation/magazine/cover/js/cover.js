(function (window, $) {

    // $(document).ready(function(){});
    var keyboard_avail  = false;
    lexusMagazineReady = function () {
        var mod = window.Modernizr,
            modCSSAnimations  = mod && mod.cssanimations,
            modCSSTransforms  = mod && mod.csstransforms,
            modCSSTransitions = mod && mod.csstransitions,
            modTouch          = mod && mod.touch,
            modAnim           = modCSSAnimations && modCSSTransitions;

        keyboard_avail = true;
        var $splitWrapper   = $('#split-wrapper'),
            $splitLeft      = $('#split-left'),
            $splitRight     = $('#split-right'),
            $window         = $(window),
            w               = $window.width(),
            h               = $window.height(),
            pos             = (w + h / Math.tan(Math.PI / 180 * 57.5)) / 2 / w * 100 + 50 + '%';

        $splitLeft.css({ 
            "-webkit-transform"   : "skewX(0deg) translateX(-100%)",
            "-ms-transform"       : "skewX(0deg) translateX(-100%)",
            "-moz-transform"      : "skewX(0deg) translateX(-100%)",
            "-o-transform"        : "skewX(0deg) translateX(-100%)",
            "transform"           : "skewX(0deg) translateX(-100%)"
        });
        $splitRight.css({ 
            "-webkit-transform"   : "skewX(0deg) translateX(100%)",
            "-ms-transform"       : "skewX(0deg) translateX(100%)",
            "-moz-transform"      : "skewX(0deg) translateX(100%)",
            "-o-transform"        : "skewX(0deg) translateX(100%)",
            "transform"           : "skewX(0deg) translateX(100%)"
        });
        $splitWrapper.on('transitionend webkitTransitionEnd', function (event) {
            $splitWrapper.remove();
        });

    }
})(this, jQuery);


$(window).on('load', function () {
    $('#cover-slides').find('img').fullscreenImage();
});

$.fn.fullscreenImage = function () {
    this.each(function () {
        var $image = $(this),
            imageAspectRatio = $image.attr('width') / $image.attr('height'),
            $screen = $image.offsetParent();
        $(window).on('resize', resizeImage).trigger('resize');
        function resizeImage () {
            var screenWidth = $screen.width(),
                screenHeight = $screen.height(),
                style;
            if (imageAspectRatio > screenWidth / screenHeight) {
                style = {
                    width: 'auto',
                    height: '100%',
                    top: 0,
                    left: -(screenHeight * imageAspectRatio - screenWidth) / 2
                };
            } else {
                style = {
                    width: '100%',
                    height: 'auto',
                    top: -(screenWidth / imageAspectRatio - screenHeight) / 2,
                    left: 0
                };
            }
            $image.css(style);
        }
    });
    return this;
};

function css3_XYZ(tx,ty,tz){
    var css3 = "translateX("+tx+"px) translateY("+ty+"px) translateZ("+tz+"px)"
    return{
        "-webkit-transform" : css3,
        "-moz-transform"    : css3,
        "-o-transform"      : css3,
        "-ms-transform"     : css3,
        "transform"         : css3
    };
}
