<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travelsite
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-container">
			<div class="logo-flex">
				<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/footer-logo.png' ?>" alt="footer-logo">
				</div>
				<div class="logo-text">
					<p>Book your trip in minute, get full Control for much longer.</p>
				</div>
			</div>
			<div class="footer-links">
				<div class="footer-link">
					<h3>Company</h3>
					<div class="link-flex">
						<a href="" class="link">About</a>
						<a href="" class="link">Creers</a>
						<a href="" class="link">Mobile</a>
					</div>
				</div>
				<div class="footer-link">
					<h3>Contact</h3>
					<div class="link-flex">
						<a href="" class="link">Help/FAQ</a>
						<a href="" class="link">Press</a>
						<a href="" class="link">Affilates</a>
					</div>
				</div>
				<div class="footer-link">
					<h3>More</h3>
					<div class="link-flex">
						<a href="" class="link">Airlinefees</a>
						<a href="" class="link">Airline</a>
						<a href="" class="link">Law fare tips</a>
					</div>
				</div>
			</div>
			<div class="footer-last-section">
				<div class="footer-icons">
					<a href="">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/fb.png' ?>" alt="fb">
					</a>
					<a href="">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/insta.png' ?>" alt="insta">
					</a>
					<a href="">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.png' ?>" alt="twitter">
					</a>
				</div>
				<p class="footer-paragraph">Discover our app</p>
				<div class="footer-buttons">
					<button class="footer-button">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/google-play.png' ?>" alt="google-play">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/play.png' ?>" alt="play">
					</button>
					<button class="footer-button">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/apple.png' ?>" alt="apple">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/ios.png' ?>" alt="ios">
					</button>
				</div>
			</div>
		</div>
		<div class="rights">
			<p>All rights reserved@travelgoo.co</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
