<?php
/**
 * The template for displaying the footer
 */

?>
<?php
$footer_menu_1 = wp_get_menu_array('footer_1');
$footer_menu_2 = wp_get_menu_array('footer_2');
$footer_menu_3 = wp_get_menu_array('footer_2');

$footer_content = get_field('footer_content', 'option', true);
$footer_address = get_field('footer_address', 'option', true);
$footer_mobile_number = get_field('footer_mobile_number', 'option', true);
$footer_form_heading = get_field('footer_form_heading', 'option', true);
$footer_copyright = get_field('footer_copyright', 'option', true);

$mobile_number = get_field('mobile_number', 'option');
$address = get_field('addres', 'option');
$email = get_field('email', 'option');
$facebook_link = get_field('facebook_link', 'option', true);
$instagram_link = get_field('instagram_link', 'option', true);
$twitter_link = get_field('twitter_link', 'option', true);
$youtube_link = get_field('youtube_link', 'option', true);

?>


<footer class="footer">
	<div class="footer_wrapper">
		<div class="footer-top">
			<div class="boxWrap">
				<div class="box-left">
					<a href="#" class="brand-logo">
						<img src="images/logo.png" alt="" class="footer-logo">
						Dr. Hafeez
					</a>
					<p class="common-conetnt">
						<?php echo $footer_content; ?>
					</p>
					<ul class="footer-links">
						<li><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 21 30"
								fill="currentColor">
								<path id="Icon_material-location-on" data-name="Icon material-location-on"
									d="M18,3A10.492,10.492,0,0,0,7.5,13.5C7.5,21.375,18,33,18,33S28.5,21.375,28.5,13.5A10.492,10.492,0,0,0,18,3Zm0,14.25a3.75,3.75,0,1,1,3.75-3.75A3.751,3.751,0,0,1,18,17.25Z"
									transform="translate(-7.5 -3)" fill="currentColor"></path>
							</svg>
							<a href="#!">
								<?php echo $footer_address; ?>
							</a>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
								<path id="Icon_material-call" data-name="Icon material-call"
									d="M9.93,16.185a22.723,22.723,0,0,0,9.885,9.885l3.3-3.3a1.491,1.491,0,0,1,1.53-.36A17.11,17.11,0,0,0,30,23.265a1.5,1.5,0,0,1,1.5,1.5V30A1.5,1.5,0,0,1,30,31.5,25.5,25.5,0,0,1,4.5,6,1.5,1.5,0,0,1,6,4.5h5.25A1.5,1.5,0,0,1,12.75,6a17.041,17.041,0,0,0,.855,5.355,1.505,1.505,0,0,1-.375,1.53l-3.3,3.3Z"
									transform="translate(-4.5 -4.5)" fill="currentColor"></path>
							</svg>
							<a href="tel:+8882075969">
								<?php echo $footer_mobile_number; ?>
							</a>
						</li>
					</ul>
					<a href="#" class="contact-btn desktop-hide">Contact Us</a>
				</div>
				<div class="box-right">
					<div class="box-right-top">
						<ul class="footer-links">

							<?php foreach ($footer_menu_1 as $footer_item_1): ?>
								<li><a href="<?php echo $footer_item_1['url'] ?>">
										<?php echo $footer_item_1['title']; ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
						<ul class="footer-links">

							<?php foreach ($footer_menu_2 as $footer_item_1): ?>
								<li><a href="<?php echo $footer_item_1['url'] ?>">
										<?php echo $footer_item_1['title']; ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
						<ul class="footer-links">

							<?php foreach ($footer_menu_3 as $footer_item_1): ?>
								<li><a href="<?php echo $footer_item_1['url'] ?>">
										<?php echo $footer_item_1['title']; ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="box-right-search">
						<p>
							<?php echo $footer_form_heading; ?>
						</p>
						<form class="search-form">
							<label for="">E-mail address</label>
							<input type="text" name="search2">
							<div class="common-btn">
								<button class="theme-btn-primary" type="submit">BOOK AN APPOINTMENT</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">

			<div class="footer-row">
				<div class="footer-bottom-left">
					<span>
						<?php echo $footer_copyright; ?>
					</span>
				</div>
				<div class="footer-bottom-right">
					<ul>
						<li>Follow us on</li>
						<li>
							<a href="">
								<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
									<g id="Group_6" data-name="Group 6" transform="translate(-1486 -6008)">
										<g id="Group_233" data-name="Group 233"
											transform="translate(1285.354 5615.554)">
											<g id="Group_232" data-name="Group 232"
												transform="translate(212.646 404.446)">
												<path id="Union_1" data-name="Union 1"
													d="M-4323.106-8671v-10.4c0-2.853-1.083-4.447-3.338-4.447-2.457,0-3.74,1.66-3.74,4.447v10.4h-5.885v-19.819h5.885v2.67a6.911,6.911,0,0,1,5.972-3.272c4.2,0,7.211,2.565,7.211,7.874V-8671Zm-23.3,0v-19.819h6.136V-8671Zm-.59-26.343a3.642,3.642,0,0,1,3.628-3.657,3.642,3.642,0,0,1,3.627,3.657,3.642,3.642,0,0,1-3.627,3.657A3.642,3.642,0,0,1-4347-8697.343Z"
													transform="translate(4344 8698)" fill="#fff" />
											</g>
										</g>
										<rect id="Rectangle_130" data-name="Rectangle 130" width="48" height="48"
											transform="translate(1486 6008)" fill="none" />
									</g>
								</svg>
							</a>

						</li>
						<a href="<?php echo $instagram_link; ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
								<g id="Group_8" data-name="Group 8" transform="translate(-1385 -6009)">
									<g id="Group_235" data-name="Group 235">
										<g id="Group_228" data-name="Group 228"
											transform="translate(1386.686 5662.861)">
											<path id="Subtraction_6" data-name="Subtraction 6"
												d="M23.436,30H6.557A6.57,6.57,0,0,1-.005,23.44V6.566A6.57,6.57,0,0,1,6.557,0H23.436A6.57,6.57,0,0,1,30,6.566V23.44A6.57,6.57,0,0,1,23.436,30ZM15,7.957A7.046,7.046,0,1,0,22.044,15,7.055,7.055,0,0,0,15,7.957Zm8.442-3.885a1.675,1.675,0,1,0,1.676,1.676A1.678,1.678,0,0,0,23.439,4.072Z"
												transform="translate(7.314 355.138)" fill="#fff" />
										</g>
										<rect id="Rectangle_128" data-name="Rectangle 128" width="48" height="48"
											transform="translate(1385 6009)" fill="none" />
									</g>
								</g>
							</svg>
						</a>

						<li>

						<li>
							<a href="<?php echo $youtube_link; ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
									<g id="Group_7" data-name="Group 7" transform="translate(-1540 -6009)">
										<path id="Path_137" data-name="Path 137"
											d="M289.085,407.671a3.863,3.863,0,0,0-2.718-2.736c-2.4-.646-12.01-.646-12.01-.646s-9.612,0-12.009.646a3.862,3.862,0,0,0-2.718,2.736,43.5,43.5,0,0,0,0,14.893,3.862,3.862,0,0,0,2.718,2.736c2.4.646,12.009.646,12.009.646s9.613,0,12.01-.646a3.863,3.863,0,0,0,2.718-2.736,43.5,43.5,0,0,0,0-14.893Zm-17.872,12.018v-9.142l8.035,4.571Z"
											transform="translate(1290.212 5618.294)" fill="#fff" />
										<rect id="Rectangle_131" data-name="Rectangle 131" width="48" height="48"
											transform="translate(1540 6009)" fill="none" />
									</g>
								</svg>
							</a>
						</li>

						<li>
							<a href="<?php echo $twitter_link; ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
									<g id="Group_5" data-name="Group 5" transform="translate(-1438 -6008)">
										<g id="Group_230" data-name="Group 230" transform="translate(1293.49 5663.081)">
											<path id="Path_134" data-name="Path 134"
												d="M153.515,378.094a17.413,17.413,0,0,0,9.432,2.764c11.423,0,17.877-9.649,17.488-18.3a12.46,12.46,0,0,0,3.07-3.185,12.235,12.235,0,0,1-3.533.968,6.159,6.159,0,0,0,2.7-3.4,12.323,12.323,0,0,1-3.907,1.494,6.157,6.157,0,0,0-10.485,5.613,17.459,17.459,0,0,1-12.681-6.43,6.161,6.161,0,0,0,1.9,8.217,6.134,6.134,0,0,1-2.788-.77,6.16,6.16,0,0,0,4.935,6.111,6.14,6.14,0,0,1-2.777.1,6.154,6.154,0,0,0,5.747,4.274A12.369,12.369,0,0,1,153.515,378.094Z"
												transform="translate(0)" fill="#fff" stroke="#fff"
												stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
										</g>
										<rect id="Rectangle_129" data-name="Rectangle 129" width="48" height="48"
											transform="translate(1438 6008)" fill="none" />
									</g>
								</svg>
							</a>

						</li>

						<li>
							<a href="<?php echo $facebook_link; ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
									<g id="Group_4" data-name="Group 4" transform="translate(-1350 -6071)">
										<g id="Group_229" data-name="Group 229" transform="translate(1322.937 5727.58)">
											<path id="Path_133" data-name="Path 133"
												d="M47.089,382.42h5.816V367.292h4.058l.433-5.065H52.905v-2.884c0-1.194.231-1.666,1.343-1.666H57.4V352.42H53.369c-4.329,0-6.28,1.979-6.28,5.768v4.038H44.063v5.129h3.026Z"
												transform="translate(0 0)" fill="#fff" stroke="#fff"
												stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
										</g>
										<rect id="Rectangle_127" data-name="Rectangle 127" width="48" height="48"
											transform="translate(1350 6071)" fill="none" />
									</g>
								</svg>
							</a>

						</li>






						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>




<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery3.5.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-new.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.timepicker.min.js"></script>
<script>

	// jQuery('.play_bnt').on('click', function () {
	// // 	//console.log('asdfasdfsdfasdfsdf',$(this));
	// // 	let vidSrc = $(this).siblings('iframe');
	// // 	let cover = $(this).siblings('img');
	// // 	vidSrc.trigger('play');
	// // 	cover.hide();
	// // 	$(this).hide()
	// // })

	// $(document).ready(function () {
	// 	$('.accordion-list > li > .answer').hide();

	// 	$('.accordion-list > li').click(function () {
	// 		if ($(this).hasClass("active")) {
	// 			$(this).removeClass("active").find(".answer").slideUp();
	// 		} else {
	// 			$(".accordion-list > li.active .answer").slideUp();
	// 			$(".accordion-list > li.active").removeClass("active");
	// 			$(this).addClass("active").find(".answer").slideDown();
	// 		}
	// 		return false;
	// 	});

	// });









</script>
<?php wp_footer(); ?>
</body>

</html>