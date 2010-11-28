(function($){
	var methods = {
		_timer: null,

		init: function(size) {
			this.each(function() {
				$(this).
					addClass('tango_icons_animation tango_icons_process_working_'+size).
					attr('ti_size', size);
			})
		},
		start: function(speed) {
			var self = this;
			this.each(function() {
				if(this._timer != null) window.clearInterval(this._timer);
				this._timer = window.setInterval(function() {
					var bp = new String(self.css('background-position')).split(' ');
					var x = parseInt(bp[0].slice(0, -2));
					var y = parseInt(bp[1].slice(0, -2));
					var size = parseInt($(self).attr('ti_size'));
					x -= size;
					if(x == -(8*size)) {
						x = 0;
						y -= size;
					}
					if(y == -(4*size)) {
						x = -size;
						y = 0;
					}
					self.css('background-position', x+'px '+y+'px');
				}, speed);
			});
		},
		stop: function() {
			this.each(function() {
				window.clearInterval(this._timer);
				this._timer = null;
			});
		}
	};

	$.fn.processWorking = function(method) {
		// Method calling logic
		if (methods[method]) {
			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if (typeof method === 'object' || ! method) {
			return methods.init.apply( this, arguments );
		} else {
			$.error('Method ' +  method + ' does not exist on jQuery.processWorking');
			return false;
		}
	};
})(jQuery);