// Генератор случайного цвета (HEX). | Generator random color (HEX).
function colorGenerator() {
    return (0x1000000 + (Math.random()) * 0xffffff).toString(16).substr(1, 6);
}

var mainSliderCaps = {
	init: function () {
		this.slider = jQuery('#mainSlider');
		this.len = this.slider.find('.carousel-inner > .item').length;
		if (this.slider.find('.carousel-inner > .item').length <= 1) {
			this.buildList(this.len);
			this.initListner();
		}
	},
	buildList: function (len) {
		var w = this.slider.outerWidth(),
			h = this.slider.outerHeight();

		if (len) {
			this.slider.find('.carousel-inner > *').eq(0).siblings().remove();
			this.slider.find('.carousel-indicators > *').eq(0).siblings().remove();
		}
		else {
			this.slider.find('.carousel-inner, .carousel-indicators').empty();	
		}

		for (var i = 0; i < 5 - len; i++) {
			this.slider.find('.carousel-inner').append(
				'<div class="item">'																																+
					'<img src="http://placehold.it/' + w + 'x' + h + '/' + colorGenerator() + '/' + colorGenerator() + '" alt="Image cap ' + (i + len) + '">' 	+
				'</div>'
			);
			this.slider.find('.carousel-indicators').append(
				'<li data-target="#mainSlider" data-slide-to="' + (i + len) + '"></li>'
			);
		}
		this.slider.find('.carousel-inner .item').eq(0).addClass('active').siblings().removeClass('active');
		this.slider.find('.carousel-indicators > *').eq(0).addClass('active').siblings().removeClass('active');
	},
	initListner: function () {
		var slider = this;
		jQuery(window).resize(function () {
			slider.buildList(slider.len);
		});
	}
};

var footer = {
	init: function () {
		this.footer  = jQuery('footer');
		this.padding();
		this.initListner();
	},
	padding: function () {
		jQuery('.body').css('padding-bottom', this.footer.outerHeight());
	},
	initListner: function () {
		var self = this;
		jQuery(window).resize(function () {
			self.padding();
		});
	}
};

jQuery(document).ready(function () {
	mainSliderCaps.init();
	new WOW().init();
	footer.init();
});