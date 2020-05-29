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

    <h1 class="index-title">Noesist</h1>
    <div class="content-grid">
        
        <div id="shuffle_row" class="content-row bg-image" style="background-image: url(<?php echo get_theme_file_uri( 'assets/img/main-shuffle.jpg' ); ?>)">
            <div class="content-row-inner">
                <section class="content-container shuffle-container" id="shuffle_container" aria-labelledby="shuffle_header">
                    <div class="item-summary c-white">
                        <h2 class="item-name title title-large" id="shuffle_header">Lorem ipsum dolor sit</h2>
                        <p class="item-text">Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit</p>
                        <div class="read-more-links-group">
                            <a href="" class="btn btn-large c-blue bg-yellow c-blue__hover bg-white__hover">Contactar</a>
                            <span>o</span>
                            <a href="" class="c-white c-yellow__hover">conocer más</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div id="category_1_row" class="content-row width-constrain-row padded-row">
            <div class="content-row-inner">
                <section class="content-container categories-1-container" id="category_1_container" aria-labelledby="category_1_header">
                    <div class="title-container">
                        <h2 class="title title-middle c-blue" id="category_1_header">Lo que hacemos</h2>
                        <span class="sub-title c-blue">Conoce nuestros servicios</span>
                        <a href="#category_1_list"><svg xmlns="http://www.w3.org/2000/svg" width="38.807" height="39.448" viewBox="0 0 38.807 39.448"><g transform="translate(-42.468 -51.349)"><g transform="translate(36 47.037)"><g transform="translate(0)"><path d="M129.81,244.1v-10.4L110.7,244.946a.588.588,0,0,1-.6,0L91,233.708v10.4l19.4,11.414Z" transform="translate(-84.535 -211.756)"/><path d="M129.81,94.1v-10.4L110.7,94.946a.588.588,0,0,1-.6,0L91,83.708V94.1l19.4,11.414Z" transform="translate(-84.535 -79.396)"/></g></g></g></svg></a>
                    </div>

                    <div id="category_1_list">
                        <ul class="items-list">
                            <li class="item">
                                <a href="" style="background-image: url(<?php echo get_theme_file_uri( 'assets/img/category-1.jpg' ); ?>)">
                                    <div class="item-summary">
                                        <h3 class="item-name section-title c-white">Infraestructura</h3>
                                        <div class="item-text">
                                            <div class="item-text c-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. In impedit non neque, facere quam beatae quasi quibusdam mollitia officia architecto nihil quidem expedita harum aliquam. Dignissimos facere ipsa incidunt perspiciatis.</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="item">
                                <a href="" style="background-image: url(<?php echo get_theme_file_uri( 'assets/img/category-2.jpg' ); ?>)">
                                    <div class="item-summary">
                                        <h3 class="item-name section-title c-white">Gestión Documental</h3>
                                        <div class="item-text">
                                            <div class="item-text c-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. In impedit non neque, facere quam beatae quasi quibusdam mollitia officia architecto nihil quidem expedita harum aliquam. Dignissimos facere ipsa incidunt perspiciatis.</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div id="motto_1_row" class="content-row motto-container padded-row">
            <div class="content-row-inner">
                <div class="motto">Habitant morbi tristique senectus et netus et malesuada fames. Scelerisque eu ultrices vitae auctor eu augue. Sed sed risus pretium quam vulputate dignissim suspendisse in est.</div>
            </div>
        </div>

        <div id="category_2_row" class="content-row padded-row">
            <div class="content-row-inner">
                <section class="content-container categories-2-container" id="category_2_container" aria-labelledby="category_2_header">
                    <h2 class="hidden" id="category_2_header">Categoria 2</h2>

                    <div id="category_1_list">
                        <ul class="items-list">
                            <li class="item">
                                <div class="item-image-holder"><img src="<?php echo get_theme_file_uri( 'assets/img/category-3.jpg' ); ?>" class="item-image" alt=""></div>
                                <div class="item-summary">
                                    <div class="item-inner">
                                        <h3 class="item-name section-title">Venta y arriendo</h3>
                                        <ul>
                                            <li>Gestión De Contenido Empresarial.</li>
                                            <li>Clasificacion y extraccion.</li>
                                        </ul>
                                        <div class="read-more-links-group">
                                            <a href="" class="btn btn-link c-white bg-blue c-white__hover bg-green__hover">información</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-image-holder"><img src="<?php echo get_theme_file_uri( 'assets/img/category-4.jpg' ); ?>" class="item-image" alt=""></div>
                                <div class="item-summary">
                                    <div class="item-inner">
                                        <h3 class="item-name section-title">Infraestructura</h3>
                                        <ul>
                                            <li>Cableado Estructurado.</li>
                                            <li>Montaje De Redes.</li>
                                            <li>Administración de Servidores LINUX y Windows.</li>
                                        </ul>
                                        <div class="read-more-links-group">
                                            <a href="" class="btn btn-link c-white bg-blue c-white__hover bg-green__hover">información</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div id="motto_2_row" class="content-row motto-container padded-row">
            <div class="content-row-inner">
                <div class="motto section-title text-center">Soluciones de software para cumplimiento y excelencia en procesos</div>
                <div class="read-more-links-group">
                    <a href="" class="btn btn-large c-white bg-blue c-white__hover bg-green__hover">Cotizar</a>
                </div>
            </div>
        </div>

        <div id="category_3_row" class="content-row padded-row">
            <div class="content-row-inner">
                <section class="content-container tabs-container" id="category_3_container" aria-labelledby="category_3_header">                    
                    <?php get_template_part( 'template-parts/categories/content', 'premium' ); ?> 
                </section>
            </div>
        </div>

        <div id="motto_3_row" class="content-row motto-container padded-row">
            <div class="content-row-inner">
                <div class="motto">Habitant morbi tristique senectus et netus et malesuada fames. Scelerisque eu ultrices vitae auctor eu augue. Sed sed risus pretium quam vulputate dignissim suspendisse in est.</div>
            </div>
        </div>

        <div id="category_4_row" class="content-row padded-row">
            <div class="content-row-inner">
                <section class="content-container categories-4-container" id="category_4_container" aria-labelledby="category_4_header">
                    <div class="title-container">
                        <?php the_title( '<h2 class="title title-general c-black" id="category_4_header">', '</h2>' ); ?>
                        <span class="sub-title"><?php echo get_the_excerpt( ); ?></span>
                    </div>

                    <div id="category_4_list"> 
                        <?php get_template_part( 'template-parts/categories/content', 'services' ); ?> 
                    </div>
                </section>
            </div>
        </div>

        <div id="partners_row" class="content-row padded-row">
            <div class="content-row-inner">
                <section class="content-container slick-container partners-container" id="partners_container" aria-labelledby="partners_header">
                    <div class="title-container">
                        <h2 class="title title-general c-black" id="partners_header">Nuestros Clientes</h2>
                    </div>

                    <div id="logos" class="logos">
                        <ul class="items-list" data-slick='{
                            "mobileFirst": true,
                            "slidesToShow": 1,
                            "adaptiveHeight": false,
                            "arrows": true,
                            "dots": false,
                            "swipeToSlide": true,
                            "responsive": [
                                {
                                    "breakpoint": 767,
                                    "settings": {
                                        "slidesToShow": 2
                                    } 
                                },
                                {
                                    "breakpoint": 1023,
                                    "settings": {
                                        "slidesToShow": 4
                                    }
                                }
                            ]
                        }'>
                            <li class="item">
                                <a href=""><img src="<?php echo get_theme_file_uri( 'assets/img/logo1.png') ?>" alt=""></a>
                            </li>
                            <li class="item">
                                <a href=""><img src="<?php echo get_theme_file_uri( 'assets/img/logo2.png') ?>" alt=""></a>
                            </li>
                            <li class="item">
                                <a href=""><img src="<?php echo get_theme_file_uri( 'assets/img/logo3.png') ?>" alt=""></a>
                            </li>
                            <li class="item">
                                <a href=""><img src="<?php echo get_theme_file_uri( 'assets/img/logo4.png') ?>" alt=""></a>
                            </li>
                            <li class="item">
                                <a href=""><img src="<?php echo get_theme_file_uri( 'assets/img/logo1.png') ?>" alt=""></a>
                            </li>
                            <li class="item">
                                <a href=""><img src="<?php echo get_theme_file_uri( 'assets/img/logo2.png') ?>" alt=""></a>
                            </li>
                            <li class="item">
                                <a href=""><img src="<?php echo get_theme_file_uri( 'assets/img/logo3.png') ?>" alt=""></a>
                            </li>
                            <li class="item">
                                <a href=""><img src="<?php echo get_theme_file_uri( 'assets/img/logo4.png') ?>" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div> 

    <?php
get_footer(); 