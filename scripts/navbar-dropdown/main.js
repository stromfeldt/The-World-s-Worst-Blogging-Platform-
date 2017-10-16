(function() {
	$(function() {


		var $nav = $('.navigation');
		var $fixed = $nav.clone();
		$fixed.addClass('fixed');
		$nav.parent().append($fixed);



		var navigationTrigger = $nav.offset().top;
		var fixed = false;
		var navbar = function() {
			var scrollTop = $(window).scrollTop();
			if (scrollTop >= navigationTrigger && !fixed) {
				$fixed.addClass('visible');
				fixed = true;
			}
			else if (scrollTop < navigationTrigger && fixed) {
				$fixed.removeClass('visible');
				fixed = false;
			}
		}

		setTimeout(function() {
			navbar();
		},10);
		$(window).scroll(function() {
			navbar();
		});


		$('a.nav').click(function() {
			var parts = $(this).attr('href').split('#');
			var page = parts[parts.length-1];

			var scrollTop = 0;
			var title = $(this).text();
			if (page == '') {
				title = 'BLOG TITLE';
			}
			else {
				var d = $('#'+page);
				scrollTop = d.offset().top;
			}

	 		if (window.history.pushState) {
	 			window.history.pushState({page:page},title,'#'+page);
	 		}

			$('html, body').animate({
			    scrollTop: scrollTop
			 }, 500);


			return false;
		});



	});
})(jQuery);