<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="banner">
	<a href="<?php echo get_permalink(90); ?>"><img src="<?php bloginfo('template_directory');?>/images/tisk_top_<?php echo qtrans_getLanguage(); ?>.jpg" width="962" height="320" alt="banner" /></a>
</div>
<div id="content">
	<?php 
	get_sidebar('left-'.qtrans_getLanguage()); 
	include_once('page-templates/'.qtrans_getLanguage().'/home.php');
	?>
</div>
<?php
get_footer();