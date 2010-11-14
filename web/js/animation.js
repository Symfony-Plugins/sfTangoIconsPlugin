function TangoIconsAnimation(selector, size, speed) {
    this._selector = selector;
    this._size = size;
    this._timer = null;
    this._x = 0;
    this._y = 0;
    $(this._selector).css({
        display : 'block',
        width : size+'px',
        height : size+'px',
        background : 'url(images/'+size+'x'+size+'/animations/process-working.png) no-repeat -'+size+'px 0'
    });

    this.start = function() {
		if(this._timer != null) return;
        var self = this;
        this._timer = window.setInterval(function() {
            self._x -= self._size;
            if(self._x == -(8*self._size)) {
                self._x = 0;
                self._y -= self._size;
            }
            if(self._y == -(4*self._size)) {
                self._x = -self._size;
                self._y = 0;
            }
            $(self._selector).css('background-position', self._x+'px '+self._y+'px');
        }, speed);
    }

    this.stop = function() {
        window.clearInterval(this._timer);
		this._timer = null;
    }
}