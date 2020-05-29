<?php
/**
 * The template for displaying all pages
 *
 * @package WordPress
 * @subpackage noesist
 * @since Noesist 1.0
 */

get_header();
?>

<?php
while ( have_posts() ) :
    the_post();

        get_template_part( 'template-parts/page/content', 'page' );

endwhile; // End the loop.
?>

<?php
get_footer();