(function ($, root, undefined) {
	
	$(function () {

		if($(".full-height").length){
			$('html').css('height','100%');
			$('body').css('height','100%');
			var h = window.innerHeight;
			var hHeader = $('header').innerHeight();
			var hSubfooter = $('subfooter').innerHeight();

			console.log(h);
			console.log(hHeader);
			console.log(hSubfooter);

			var sectionFullHeight = h - (hHeader + hSubfooter );

			console.log(sectionFullHeight);

			$(".full-height").css('height',sectionFullHeight+'px');
		}


		$(document).on('click','.close-section',function(){


			$(this).parent().removeClass('d-block').addClass('d-none');

		});

		$(document).on('click','.section-toggle',function(){
			var element = $('.'+ $(this).data('class_toggle'));
			console.log(element);
			if(element.hasClass('d-none'))
				element.removeClass('d-none').addClass('d-block');
			else
				element.removeClass('d-block').addClass('d-none');

		});

	});



	
})(jQuery, this);
