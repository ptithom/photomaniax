(function ($, root, undefined) {






	$(function () {


		/**
		 * INIT
		 */

		up_full_height();
		var order = "DESC";
		var current_slide_number = 0;
		var count_slide = $(".wrapper_slider").children().length;
		var tmp_scrool = true;


		/**
		 * Loader
		 */


		var loader_conf = {
			'conteneur': $('body'),
			'loader': $('<div class="loaderajax"><svg width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-double-ring" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;">\n' +
				'    <circle cx="50" cy="50" ng-attr-r="{{config.radius}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.c1}}" ng-attr-stroke-dasharray="{{config.dasharray}}" fill="none" stroke-linecap="round" r="40" stroke-width="4" stroke="#a2151e" stroke-dasharray="62.83185307179586 62.83185307179586">\n' +
				'      <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>\n' +
				'    </circle>\n' +
				'    <circle cx="50" cy="50" ng-attr-r="{{config.radius2}}" ng-attr-stroke-width="{{config.width}}" ng-attr-stroke="{{config.c2}}" ng-attr-stroke-dasharray="{{config.dasharray2}}" ng-attr-stroke-dashoffset="{{config.dashoffset2}}" fill="none" stroke-linecap="round" r="35" stroke-width="4" stroke="#003444" stroke-dasharray="54.97787143782138 54.97787143782138" stroke-dashoffset="54.97787143782138">\n' +
				'      <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;-360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>\n' +
				'    </circle>\n' +
				'  </svg></div>'),
		};
		/**/
		var loader_setup = function () {
			$('body').prepend(loader_conf.loader);
		};
		loader_toggle = function (state) {
			if (!state) {
				loader_conf.loader.fadeOut();
			} else {
				loader_conf.loader.fadeIn();
			}
		};
		loader_setup();


		/**
		 * EVENT
		 */

		$( window ).resize(function() {
			up_full_height()
		});

		$(document).on('click','.close-section',function(){
			if($(this).hasClass('closest')){
				var element = $('.'+ $(this).closest('.section-toggle').data('class_toggle'));
			}else{
				var element = $(this).parent();
			}

			element.slideUp( "100", function() {
				element.removeClass('d-block').addClass('d-none');
			});
		});

		$('.slick_slider_cat').slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 4,
			dots: true,
			arrows: false,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
					}
				}

			]
		});


		$(document).on('click','.section-toggle',function(){
			var element = $('.'+ $(this).data('class_toggle'));

			if(element.hasClass('d-none')) {
				$(this).addClass('active');
				element.removeClass('d-none').addClass('d-block');
				if($(this).data('class_toggle') == "box_slide_cat"){
					$('.slick_slider_cat').slick({
						infinite: true,
						slidesToShow: 4,
						slidesToScroll: 4
					});
				}
			}else {
				$(this).removeClass('active');
				element.slideUp("100", function () {
					element.removeClass('d-block').addClass('d-none');
				});
			}

		});

		$(document).on('click', '.select-cat', function() {

			$(".select-cat").removeClass('active');
			$(this).addClass('active');


			var content = $('.content-posts');
			content.html("");
			loader_toggle(true);

			offset = 0;
			var idcat = $(this).data('idcat');

			load_ajax(order,0,idcat ,'6',function(response){
				content.html(response);
				loader_toggle(false);
				//update_display_load_more();
			});
		});



		$(document).bind('mousewheel', function(e) {

			if (tmp_scrool){

				tmp_scrool = false;

				if (e.originalEvent.wheelDelta / 120 > 0 ) {
					if(count_slide > current_slide_number){
						current_slide_number = current_slide_number + 1;
					}
				}
				else {
					if (current_slide_number != 1 ) {
						current_slide_number = current_slide_number - 1;
					}
				}

				update_nav_home();

				setTimeout(function(){
					tmp_scrool = true;
				}, 200);

			}

		});

		$(document).on('click', '.nav_slide', function() {

			if($(this).hasClass('next') && count_slide > current_slide_number){
				current_slide_number = current_slide_number + 1;
			}else if($(this).hasClass('prev') && current_slide_number != 1){
				current_slide_number = current_slide_number - 1;
			}else if($(this).data("num_slide")){
				current_slide_number = parseInt($(this).data("num_slide"));
			}

			update_nav_home();


		});


		function load_ajax(order,offset,idcat ,ppp,callback){
			jQuery.post(
				ajaxurl,
				{
					'action': 'load_ajax',
					'offset': offset,
					'order': order,
					'idcat': idcat,
					'ppp': ppp,
				},
				function(response){
					callback(response)
				}
			);
		}


		function up_full_height(){
			if($(".full-height").length){
				$('html').css('height','100%');
				$('body').css('height','100%');
				var h = window.innerHeight;
				var hHeader = $('header').innerHeight();
				var hSubfooter = $('subfooter').innerHeight();

				var sectionFullHeight = h - (hHeader + hSubfooter );


				$(".full-height").css('height',sectionFullHeight+'px');
			}
		}

		function update_nav_home(){
			$(".nav_slide[data-num_slide]").removeClass("active");
			$(".nav_slide[data-num_slide='" + current_slide_number + "']").addClass("active");

			if (current_slide_number == 1) {
				$(".nav_slide.prev").hide("faste");
			} else {
				$(".nav_slide.prev").show("faste");
			}
			if (current_slide_number == count_slide) {
				$(".nav_slide.next").hide("faste");
			} else {
				$(".nav_slide.next").show("faste");
			}

			$('.wrapper_slider').css('top', '-' + (current_slide_number - 1) + '00%');

		}





	});




})(jQuery, this);
