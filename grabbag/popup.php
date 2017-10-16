<script>
		$(document).ready(function () {
			$('.image-popup-vertical-fit').magnificPopup({
				type: 'image',
				delegate: 'a',
				closeOnContentClick: true,
				mainClass: 'mfp-img-mobile',
				image: {
					verticalFit: true
				}
			});
			$('.parent-container').magnificPopup({
				delegate: 'a', // child items selector, by clicking on it popup will open
				type: 'image'
				// other options
			});
			$('.image-popup-vertical-fit').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				mainClass: 'mfp-img-mobile',
				image: {
					verticalFit: true
				}

			});

			$('.image-popup-fit-width').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				image: {
					verticalFit: false
				}
			});

			$('.image-popup-no-margins').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				closeBtnInside: false,
				fixedContentPos: true,
				mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
				image: {
					verticalFit: true
				},
				zoom: {
					enabled: true,
					duration: 300 // don't foget to change the duration also in CSS
				}
			});
		});
	</script>