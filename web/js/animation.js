var TangoIconsAnimation = {

    _el : null,
    _size : null,
    _timer : null,
    _x : 0,
    _y : 0,

    run : function(el, size, speed) {
        this._el = el;
        this._size = size;
        $(this._el).css({
            display : 'block',
            width : size+'px',
            height : size+'px',
            background : 'url(images/'+size+'x'+size+'/animations/process-working.png) no-repeat -'+size+'px 0'
        });
        this._timer = setInterval(function() {
            TangoIconsAnimation._x -= TangoIconsAnimation._size;
            if(TangoIconsAnimation._x == -(8*TangoIconsAnimation._size)) {
                TangoIconsAnimation._x = 0;
                TangoIconsAnimation._y -= TangoIconsAnimation._size;
            }
            if(TangoIconsAnimation._y == -(4*TangoIconsAnimation._size)) {
                TangoIconsAnimation._x = -TangoIconsAnimation._size;
                TangoIconsAnimation._y = 0;
            }
            $(TangoIconsAnimation._el).css('background-position', TangoIconsAnimation._x+'px '+TangoIconsAnimation._y+'px');
        }, speed);
    }
}

//(function($){
//    $.fn.TangoIconsAnimation = function(size, speed) {
//        return this.each(function(){
//            $(this).css({
//                display : 'block',
//                width : size+'px',
//                height : size+'px',
//                background : 'url(images/'+size+'x'+size+'/animations/process-working.png) no-repeat -'+size+'px 0'
//            });
//            setInterval(function() {
//                console.debug(this);
//            }, speed);
//        })
//    }
//})(jQuery)