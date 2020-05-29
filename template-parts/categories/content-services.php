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

<?php
    $categoriesSolutions = new WP_Query(array(
        'posts_per_page' => 6,
        'post_type'      => 'servicio',
        'order'          => 'ASC'
    ));
?>      

<div id="module_solutions"> 
    <ul class="grid items-list">
        <?php while ($categoriesSolutions->have_posts() ) :
        $categoriesSolutions->the_post(); 
        $index = $categoriesSolutions->current_post;
        ?>
        <li class="grid-item grid-item-<?php echo $index ?>">
            <a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                <div class="item-summary"> 
                    <h3 class="item-name c-white"><?php the_title(); ?></h3>
                </div>
            </a>
        </li>
        <?php endwhile; ?>
    </ul>
</div>
