<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage noesist
 * @since Noesist 1.0
 * @version 1.0
 */

get_header();
?>

<?php
while ( have_posts() ) :
    the_post();

        get_template_part( 'template-parts/post/content', get_post_format() );

endwhile; 
?>

<?php
get_footer();