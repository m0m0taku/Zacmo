<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="content">
	<?php 
	get_sidebar('left-'.qtrans_getLanguage()); 
	// Start the Loop.
	?>
	<div id="right">
		<?php
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// Previous/next post navigation.
			//twentyfourteen_post_nav();
		endwhile;
		?>
	</div>
</div>
<?php
get_footer();