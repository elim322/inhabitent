<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="contact">
				<h1 class="contact-info">CONTACT INFO</h1>
				<p>
					<i class="far fa-envelope">
						::before
					</i> 
				<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
				</p>
				<p>
					<i class="fa fa-phone">
						::before
					</i>
				<a href="tel:5553434567891">778-456-7891</a>
				</p>
				</div>
				<div class="business">
				<h1 class="business-hours">BUSINESS HOURS</h1>
				<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
				<p><strong>Saturday:</strong> 10am to 2pm</p>
				<p><strong>Sunday:</strong> Closed</p>
				</div>
				<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri() ?>/logos/inhabitent-logo-text.svg">
				</div>
				<div class="copyright">
				<p>COPYRIGHT © 2018 INHABITENT</p>
				</div> 

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
