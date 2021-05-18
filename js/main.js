/***********************
 отправка формы в php BEGIN
 ***********************/
$(function () {
	$(".ajax-form").on("submit", function (event) {
		var form = $(this);
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function () {
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')) {
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')) {
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function () {
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label').toString();
			form_data.append(input_label__name, input_label__value)
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function (result) {
					var response = JSON.parse(result);
					console.log(response);
					$.fancybox.close();
					if (response["MAILER_ERROR"] !== undefined) {
						$.fancybox.open({src: '#modal-error'});
					} else {
						$.fancybox.open({src: '#modal-thanks'});
						setTimeout(function () {
							$.fancybox.close();
						}, 4500);
						form[0].reset();
					}
				})
			});
		}
	});

	$("input.error").on('focus', function () {
		$(this).removeClass('error');
	});
});
/***********************
 отправка формы в php END
 ***********************/


/***********************
 Input mask BEGIN
 ***********************/
$(function () {
	$(".ajax-form input[type='tel']").mask("+7 (999) 999-99-99");
});

/***********************
 Input mask END
 ***********************/


/***********************
 fancybox BEGIN
 ***********************/
function init_fancy() {
	$().fancybox({
		selector: '.fancy',
		buttons: ['close'],
		backFocus: false
	});
	$().fancybox({
		selector: '.fancy-modal',
		backFocus: false,
		touch: false
	});
	$().fancybox({
		selector: '.fancy-gal',
		backFocus: false,
		buttons: ['close'],
		smallBtn: true,
		thumbs: {
			autoStart: true,
			axis: "x"
		}
	});
	$().fancybox({
		selector: '.fancy-map',
		toolbar: false,
		smallBtn: true,
		backFocus: false
	});
}

function init_fancy__video() {
	$().fancybox({
		selector: '.fancy-video',
		toolbar: false,
		smallBtn: true,
		backFocus: false
	});
}

$(function () {
	init_fancy();
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(function () {
	$('.scrollto').on('click', function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').stop().animate({scrollTop: destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
 ***********************/


/***********************
 Waypoints BEGIN
 ***********************/
$(function () {
	$('.anim').waypoint(function () {
		$(this.element).toggleClass('animated');
	}, {
		offset: '85%'
	});
});
/***********************
 Waypoints END
 ***********************/


/***********************
Top search interactions BEGIN
***********************/
function openSearch() {
	var searchForm = $('.top-panel-search__form');
	var input = searchForm.find('.js-search-input');
	var btnSearch = $('.top-btn--search');
	btnSearch.addClass('active');
	searchForm.addClass('opened');
	setTimeout(function () {
		input.eq(0).focus();
	},300);
}

function closeSearch() {
	var searchForm = $('.top-panel-search__form');
	var btnSearch = $('.top-btn--search');
	searchForm.removeClass('opened');
	btnSearch.removeClass('active');
}

$(function($){
	$('.top-btn--search').on('click',function () {
		var searchForm = $('.top-panel-search__form');
		if (searchForm.hasClass('opened')){
			closeSearch();
		} else {
			openSearch();
		}
	});

	$(document).on('mouseup touchstart',function (e){
		var searchForm = $(".top-panel-search");
		if (!searchForm.is(e.target) && searchForm.has(e.target).length === 0) {
			closeSearch()
		}
	});
});
/***********************
Top search interactions END
***********************/


/***********************
top-menu BEGIN
***********************/
$(function($){

	function openSubMenu(id) {
		var self = $('[data-sub='+id+']');
		self.addClass('active');
		$('#'+id).addClass('active');
		$('.top-menu-panel').addClass('active');
	}

	function closeSubMenu() {
		$('[data-sub]').removeClass('active');
		$('.top-menu-panel').removeClass('active');
		$('.top-menu-sub').removeClass('active');
	}

	var timer;
	var timer2;
	var delay = 150;

	$('[data-sub]').on('mouseenter touchstart',function () {
		var id = $(this).data('sub');
		timer = setTimeout(function() {
			closeSubMenu();
			openSubMenu(id);
		}, delay);
	});

	$('.s-menu').on('mouseleave',function () {
		clearTimeout(timer);
		setTimeout(function() {
			closeSubMenu();
		}, delay);
	});

	$('.top-menu-panel').on('mouseenter touchstart',function () {
		clearTimeout(timer);
		clearTimeout(timer2);
	});

	$('.top-menu li').not('[data-sub]').on('mouseenter touchstart',function () {
		timer2 = setTimeout(function() {
			closeSubMenu();
		}, delay);
		clearTimeout(timer);
	});

	$(document).on('mouseup touchstart',function (e){
		var searchForm = $(".s-menu");
		if (!searchForm.is(e.target) && searchForm.has(e.target).length === 0) {
			closeSubMenu();
			clearTimeout(timer);
		}
	});
});
/***********************
top-menu END
***********************/


/***********************
Fixed header BEGIN
***********************/
$(function($){
	var topPanelHeight = $('.s-top-panel').outerHeight();
	var menu = $('.s-menu__fixed');

	$('.s-menu').waypoint(function () {
		menu.toggleClass('s-menu__fixed--fixed');
		menu.toggleClass('compensate-for-scrollbar');
	}, {
		offset: topPanelHeight
	});

});
/***********************
Fixed header END
***********************/


/***********************
 Mob menu BEGIN
 ***********************/
$(function(){
	$('.burger').on('click',function () {
		$(this).toggleClass('active');
		$('.s-mob-panel').toggleClass('active');
	});

	$(document).on('click touchstart',function (e){
		var div = $(".s-mob-panel,.burger");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			$('.burger').removeClass('active');
			$('.s-mob-panel').removeClass('active');
		}
	});

	$('.mob-menu figure').on('click',function () {
		var self = $(this);
		var thisSub = self.next('.mob-menu-sub');

		$('.mob-menu-sub').not(thisSub).slideUp();
		thisSub.slideToggle();

		$('.mob-menu .i-right-ar').not(self).removeClass('active');
		self.toggleClass('active');
	})
});
/***********************
 Mob menu END
 ***********************/


/***********************
Top basket BEGIN
***********************/
function openTopBasket() {
	var topBasket = $('.top-panel-basket');
	var btnBasket = $('.top-btn--basket');
	btnBasket.addClass('active');
	topBasket.addClass('opened');
}

function closeTopBasket() {
	var topBasket = $('.top-panel-basket');
	var btnBasket = $('.top-btn--basket');
	btnBasket.removeClass('active');
	topBasket.removeClass('opened');
}

$(function($){
	$('.add_to_cart').on('click',function () {
		var topBasket = $('.top-basket');
		openTopBasket();
		setTimeout(function(){
			closeTopBasket();},
			2000);

		/*if (topBasket.hasClass('opened')){
			closeTopBasket();
		} else {
			openTopBasket();
		}*/
	});

	$(document).on('mouseup touchstart',function (e){
		var topBasket = $(".top-panel-basket");
		if (!topBasket.is(e.target) && topBasket.has(e.target).length === 0) {
			closeTopBasket()
		}
	});
});
/***********************
Top basket END
***********************/


/***********************
 Top user BEGIN
 ***********************/
function openLogin() {
	var topLogin = $('.s-login');
	var btnLogin = $('.top-btn--user');
	btnLogin.addClass('active');
	topLogin.addClass('opened');
}

function closeLogin() {
	var topLogin = $('.s-login');
	var btnLogin = $('.top-btn--user');
	btnLogin.removeClass('active');
	topLogin.removeClass('opened');
}

$(function($){
	$('.top-btn--user').on('click',function () {
		var topLogin = $('.s-login');
		if (topLogin.hasClass('opened')){
			closeLogin();
		} else {
			openLogin();
		}
	});

	$(document).on('mouseup touchstart',function (e){
		var topBasket = $(".s-login,.top-btn--user");
		if (!topBasket.is(e.target) && topBasket.has(e.target).length === 0) {
			closeLogin();
		}
	});
});
/***********************
Top user END
 ***********************/


/***********************
Home slider BEGIN
***********************/
$(function($){
	$('.s-home-slider').slick({
		infinite: true,
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 1000
	});
});
/***********************
Home slider END
***********************/


/***********************
Home slider BEGIN
 ***********************/
$(function($){
	$('.s-home-slider').slick({
		infinite: true,
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 1000
	});
});
/***********************
Home slider END
 ***********************/


/* Second slider BEGIN */
$(function($){
	$('.second-slider').slick({
		infinite: false,
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 1000
	});
});
/* Second slider END */


/***********************
 Nice select BEGIN
 ***********************/
$(function($){
	$('.select-style').niceSelect();
});
/***********************
 Nice select END
 ***********************/


/***********************
Catalog BEGIN
***********************/
$(function($){
	var btnFilterOpen = $('.mob-open-filter');
	var filterPanel = $('.filter-block');
	var filterPanelClose = $('.filter-block-close');

	function closeMobFilter() {
		filterPanel.removeClass('active');
		btnFilterOpen.removeClass('active');
		filterPanelClose.removeClass('visible');
	}
	function openMobFilter() {
		filterPanel.addClass('active');
		btnFilterOpen.addClass('active');
		filterPanelClose.addClass('visible');
	}

	btnFilterOpen.on('click',function () {
		openMobFilter();
	});

	filterPanelClose.on('click',function () {
		closeMobFilter();
	});

	$(document).on('click touchstart',function (e){
		var div = $(".mob-open-filter,.filter-block,.filter-block-close");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			closeMobFilter();
		}
	});


	$('.filter__title').on('click',function (e) {
		e.preventDefault();
		var thisTitle = $(this);
		var thisFilter = thisTitle.parents('.filter');
		var thisValues = thisFilter.find('.filter__values');
		if (thisFilter.hasClass('opened')){
			thisValues.slideUp(function () {
				thisFilter.removeClass('opened');
			});
		} else {
			thisValues.slideDown(function () {
				thisFilter.addClass('opened');
			});
		}
	});
});
/***********************
Catalog END
***********************/


/***********************
Catalog-detail BEGIN
***********************/
function initProductSliders() {
	$('.product-slider-small').slick({
		arrows: true,
		dots: false,
		vertical: true,
		verticalSwiping: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: false,
		asNavFor: '.product-slider-big',
		focusOnSelect: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="i-up"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="i-down"></i></button>',
		responsive: [
			{
				breakpoint: 1290,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 3
				}
			}
		]
	});

	$('.product-slider-big').slick({
		arrows: false,
		dots: false,
		infinite: false,
		asNavFor: '.product-slider-small'
	});
}


$(function($){
	// initProductSliders();

	var relatedNavBtns = $('.related-nav button');
	var relatedTabs = $('.related-tab');

	function selectRelatedTab(index) {
		relatedNavBtns.removeClass('active');
		relatedNavBtns.eq(index).addClass('active');
		relatedTabs.removeClass('active');
		relatedTabs.eq(index).addClass('active');
	}

	relatedNavBtns.on('click',function () {
		var index = $(this).index();
		selectRelatedTab(index);
		$('.related-slider').slick('setPosition');
	});

	selectRelatedTab(0);

	$('.related-slider').slick({
		arrows: true,
		dots: false,
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 4,
		prevArrow: '<button type="button" class="slick-prev"><i class="i-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="i-right"></i></button>',
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 680,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
});
/***********************
Catalog-detail END
***********************/


/***********************
Preview Ajax BEGIN
***********************/
function initModalSliders() {
	$('.modal-slider-small').slick({
		arrows: true,
		dots: false,
		vertical: true,
		verticalSwiping: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: false,
		asNavFor: '.modal-slider-big',
		focusOnSelect: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="i-up"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="i-down"></i></button>',
		responsive: [
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}
		]
	});

	$('.modal-slider-big').slick({
		arrows: false,
		dots: false,
		infinite: false,
		asNavFor: '.modal-slider-small'
	});
}

function updateModalSliders() {
	var modalSliders = $('.modal-slider-small,.modal-slider-big');
	modalSliders.slick('setPosition');
	modalSliders.addClass('modal-ready');
}

function openModalPreview(src) {
	$.fancybox.open({
		src: src,
		type: 'ajax',
		opts: {
			afterLoad : function() {
				initModalSliders();
			},
			afterShow : function() {
				$('.modal-slider-small,.modal-slider-big').imagesLoaded({},
					function() {
						updateModalSliders();
					}
				);
			}
		}
	});
}

$(function($){
	$(document).on('click','[data-preview]',function (e) {
		e.preventDefault();
		var productId = $(this).data('preview');
		openModalPreview('/preview-ajax.php?productID=' + productId);
	})
});
/***********************
Preview Ajax END
***********************/


/***********************
 soa radio checkboxes BEGIN
 ***********************/
function StyleSoaCheckboxes() {
	$('.s-order .radio-inline,.bx-soa-pp-company').each(function (){
		var thisInput = $(this).find('input');
		var thisFigure = thisInput.next('figure');
		if (!thisFigure.length){
			$('<figure></figure>').insertAfter(thisInput)
		}
	})
}

$(function($){
	StyleSoaCheckboxes();
});


try {
	BX.addCustomEvent('onAjaxSuccess', function () {
		StyleSoaCheckboxes();
	});
} catch (err) {}


/***********************
 soa radio checkboxes END
 ***********************/


/* Video intersections BEGIN */
document.addEventListener("DOMContentLoaded", function (event) {
	const videos1 = document.querySelectorAll(".s-home-slider video");
	const videos2 = document.querySelectorAll(".second-slider video");
	const videos3 = document.querySelectorAll(".promo-full__img video");
	const videos4 = document.querySelectorAll(".product-slider-small video");
	const videos5 = document.querySelectorAll(".product-slider-big video");
	const config = {
		rootMargin: '0px -100px',
		threshold: 0
	}
	const callback = (entries) => {
		entries.forEach(entry => {
			if (!entry.isIntersecting) {
				entry.target.pause();
			} else {
				entry.target.play();
			}
		});
	}

	const observer = new IntersectionObserver(callback, config);

	videos1.forEach(element => {
		observer.observe(element);
	});
	videos2.forEach(element => {
		observer.observe(element);
	});
	videos3.forEach(element => {
		observer.observe(element);
	});
	videos4.forEach(element => {
		observer.observe(element);
	});
	videos5.forEach(element => {
		observer.observe(element);
	});
});
/* Video intersections END */


/* Cursor BEGIN */
function Cursor(t) {
	this.cursor = t,
	this.mouseX = 0,
	this.mouseY = 0,
	this.prevMouseX = 0,
	this.prevMouseY = 0,
	this.assets = ["butterfly1.png", "butterfly2.png", "butterfly3.png", "butterfly4.png", "butterfly5.png", "butterfly6.png", "butterfly7.png"],
	this.obCount = 0,
	this.$container = $(".cursor"),
	this.adding = !1,
	this.timer = 150,
	this.touchInt = null,
	this.init()
}

$(document).ready(function() {
	if ($('.cursor').length){
		let cursorAnimation = new Cursor;
	}
})
	Cursor.prototype.init = function() {
		$(window).on("mousemove", $.proxy(this.onMouseMove, this));
		$(window).on("touchmove", $.proxy(this.onTouchMove, this));
	}

	Cursor.prototype.onMouseMove = function(t) {
		this.mouseX = t.clientX;
		this.mouseY = t.clientY;
		this.addGraphic(this.mouseX, this.mouseY, !1);
	}

	Cursor.prototype.onTouchMove = function(t) {
		let e = t.originalEvent.touches[0];
		this.mouseX = e.clientX,
			this.mouseY = e.clientY,
			this.addGraphic(this.mouseX, this.mouseY, !1)
	}

	Cursor.prototype.onTouchStart = function(t) {
		let e = t.originalEvent.touches[0];
		this.mouseX = e.clientX;
		this.mouseY = e.clientY;
		for (let n = 0; n < 10; n++) {
			setTimeout($.proxy(this.addGraphic, this, this.mouseX + n, this.mouseY + n, !0), .2 * n);
		}

	}

	Cursor.prototype.onTouchEnd = function(t) {
		clearInterval(this.touchInt);
	}

	Cursor.prototype.addGraphic = function(t, e, n) {
		let i, r, o, s, a, l, c, u, h;
		this.adding || (this.obCount = this.obCount + 1,
			i = this.getRandomInt(0, this.assets.length - 1),
			r = '<img id="ob' + this.obCount + '" class="cursor__object" src="/bitrix/templates/bb1/img/birds/' + this.assets[i] + '">',
			this.$container.append(r),
			o = $("#ob" + this.obCount),
			s = n ? 50 : 20,
			newXPos = t - 20 + this.getRandomInt(-s, s),
			newYPos = e - 20 + this.getRandomInt(-s, s),
			l = !0 !== n ? (a = this.prevMouseX - t,
			this.prevMouseY - e) : (a = t - newXPos,
			e - newYPos),
			c = 180 * Math.atan2(l, a) / Math.PI - 90,
			u = this.getRandomArbitrary(.2, .8),
			TweenMax.set(o, {
				// rotation: c,
				x: newXPos,
				y: newYPos,
				scale: 0
			}),
			(h = new TimelineMax).to(o, {
				scale: u,
				duration: this.getRandomArbitrary(.7, 1.2),
				ease: Power1.easeOut
			}),
			h.to(o, {
				scale: 0,
				duration: this.getRandomArbitrary(.5, 1),
				onCompleteParams: [o],
				ease: Power1.easeIn,
				onComplete: function(t) {
					t.remove()
				}
			}),
		!0 !== n && (this.adding = !0,
			setTimeout($.proxy(this.reset, this), this.timer),
			this.prevMouseX = t,
			this.prevMouseY = e))
	}

	Cursor.prototype.reset = function(t, e) {
		this.adding = !1
	}

	Cursor.prototype.getRandomInt = function(t, e) {
		return t = Math.ceil(t),
			e = Math.floor(e),
		Math.floor(Math.random() * (e - t + 1)) + t
	}

	Cursor.prototype.getRandomArbitrary = function(t, e) {
		return Math.random() * (e - t) + t
	}
;
/* Cursor END */