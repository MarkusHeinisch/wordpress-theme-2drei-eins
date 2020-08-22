<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 2DREI.EINS
 * @subpackage 2DREI.EINS
 * @since 2DREI.EINS
 * @version 0.1
 */

?>

		<footer class="footer">
			<div class="container content has-text-centered">				
				<?php get_footer();?>
				<p>
					<strong>Anton Gruner Schule</strong> ipsum dolor sit amet, cons <a href="">sadipscing elitr</a>. ed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat <a href="">sed diam</a>. tempor invidunt ut labore et dolore magna aliquyam erat, sed diam <a href="">lorem</a>.
				</p>					
				<?php wp_nav_menu(array(
						'theme_location' => 'footer'
				)); ?>				
			</div>
		</footer>
	</body>
</html>