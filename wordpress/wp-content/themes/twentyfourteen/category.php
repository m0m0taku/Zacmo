<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
	<div id="right" class="category_news">
		<?php 
			if ( have_posts() ) : 
				while ( have_posts() ) : 
					?>
				<div class="news">
					<?php the_post(); ?>
					<div class="stick_5 title"><?php the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a>'); ?> (<?php the_date(get_option('date_format')); ?>)</div>
					<div class="indent content">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<?php
					//get_template_part( 'content', get_post_format() );
				endwhile;
				twentyfourteen_paging_nav();
			endif;
		?>
	</div>
</div>
<?php
get_footer();