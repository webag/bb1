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
});
/***********************
 отправка формы в php END
 ***********************/


/***********************
 Input mask BEGIN
 ***********************/
$(function () {
	$("input[type='tel']").mask("+7 (999) 999-99-99");
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
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn: true,
		backFocus: false
	});
}

function init_fancy__video() {
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn: true,
		backFocus: false,
		animationEffect: "zoom-in-out",
		animationDuration: 300,
		transitionEffect: "slide",
		youtube: {
			controls: 1,
			showinfo: 0,
			autoplay: 1
		},
		onUpdate: function (instance, current) {
			var width,
				height,
				ratio = 16 / 9,
				video = current.$content;
			if (video) {
				video.hide();
				width = current.$slide.width() - 30;
				height = current.$slide.height() - 100;
				if (height * ratio > width) {
					height = width / ratio;
				} else {
					width = height * ratio;
				}
				video.css({
					width: width,
					height: height
				}).show();
			}
		}
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
	var delay = 150;

	$('[data-sub]').on('pointerenter touchstart',function () {
		var id = $(this).data('sub');
		timer = setTimeout(function() {
			closeSubMenu();
			openSubMenu(id);
		}, delay);
	});

	$('.s-menu').on('pointerleave',function () {
		closeSubMenu();
		clearTimeout(timer);
	});

	$('.top-menu li').not('[data-sub]').on('pointerenter touchstart',function () {
		closeSubMenu();
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
	var topBasket = $('.top-basket');
	var btnBasket = $('.top-btn--basket');
	btnBasket.addClass('active');
	topBasket.addClass('opened');
}

function closeTopBasket() {
	var topBasket = $('.top-basket');
	var btnBasket = $('.top-btn--basket');
	btnBasket.removeClass('active');
	topBasket.removeClass('opened');
}

$(function($){
	$('.top-btn--basket').on('click',function () {
		var topBasket = $('.top-basket');
		if (topBasket.hasClass('opened')){
			closeTopBasket();
		} else {
			openTopBasket();
		}
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
		dots: true
	});
});
/***********************
Home slider END
***********************/


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