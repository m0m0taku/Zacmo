<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		</div>
	</div>
	<div id="footer">
		<a href="#top" class="topscroll"><div>&nbsp;</div></a>
		<div id="content_footer">
		<?php wp_nav_menu( array( 'theme_location' =>
							'primary', 'menu_class' => '', 'container_class' => '', 'container_id' =>'footer_menu' ) ); ?>
						
			<div class="copyright">Copyright(C)2013 TISK VIETNAM.All Rights Reserved.</div>
		</div>
	</div>	
</body>
</html>