<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
				<div class="contact">
				<h1 class="contact-info">CONTACT INFO</h1>
				<p>info@inhabitent.com</p>
				<p>778-456-7891</p>
				</div>
				<div class="business">
				<h1 class="business hours">BUSINESS HOURS</h1>
				<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
				<p><strong>Saturday:</strong> 10am to 2pm</p>
				<p><strong>Sunday</strong>Closed</p>
				</div>
				<div class="copyright">
				<p>COPYRIGHT © 2018 INHABITENT</p>
				</div> 

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
