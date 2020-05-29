<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage noesist
 * @since Noesist 1.0
 * @version 1.0
 */

?>

<section class="content-pages-banner" style="background-color: tan; background-image: url(<?php the_post_thumbnail_url(); ?>);" aria-label="Content Pages Image Banner"></section>

<div class="page-title-holder">
    <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    <span class="page-title-motto"><?php echo get_the_excerpt( ); ?></span>
</div>

<div class="content-grid">
    <div class="content-grid-inner">   

        <div class="content-row">
            <div class="content-row-inner">
                <section class="content-container" aria-label="<?php echo get_the_title(); ?>">  
                    <div class="summary">
                        <?php the_content(); ?>
                    </div>  
                </section>
            </div>
        </div>
    
    </div>
</div> 
