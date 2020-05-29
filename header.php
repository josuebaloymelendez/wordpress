<?php
/**
 * Header file for the Noesist WordPress default theme.
 *
 * @package WordPress
 * @subpackage noesist
 * @since Noesist 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header id="header_main" class="site-header1a site-header" aria-label="Main Site Header">
        <div class="header-main-inner">
            <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

            <nav id="nav_top" class="nav-top" aria-label="Main Site Navigation">
                <button id="sitenav_main_mobile_toggle" class="nav-mobile-toggle accessible-megamenu-toggle animated"><span class="nav-mobile-toggle-inner">Main Menu Toggle</span></button>
                <ul class="nav-menu">

                    <?php
                    if ( has_nav_menu( 'top' ) ) {

                        wp_nav_menu(
                            array(
                                'container'  => '',
                                'items_wrap' => '%3$s',
                                'theme_location' => 'top',
                            )
                        );

                    } 
                    ?>   
                </ul>
            </nav>   
            
        </div>

        <div class="call-to-action">
            <button class="call-to-action-button c-white bg-blue">Contáctanos <svg xmlns="http://www.w3.org/2000/svg" width="18.675" height="18.675" viewBox="0 0 18.675 18.675"><path d="M18.675,9.1a9.184,9.184,0,0,1-13.6,7.966L0,18.675l1.655-4.882A9,9,0,0,1,.34,9.1a9.168,9.168,0,0,1,18.335,0ZM9.506,1.451A7.686,7.686,0,0,0,1.8,9.1a7.566,7.566,0,0,0,1.468,4.483L2.3,16.422l2.961-.941A7.716,7.716,0,0,0,17.214,9.1,7.686,7.686,0,0,0,9.506,1.451Zm4.63,9.742c-.057-.092-.207-.148-.431-.26s-1.33-.651-1.535-.724-.357-.113-.507.111-.579.725-.711.875-.262.168-.487.058a6.2,6.2,0,0,1-1.808-1.106A6.708,6.708,0,0,1,7.408,8.6c-.132-.223-.013-.343.1-.454s.225-.261.337-.392a1.487,1.487,0,0,0,.225-.371.415.415,0,0,0-.019-.392c-.056-.112-.5-1.208-.693-1.655s-.374-.372-.505-.372-.281-.018-.431-.018a.823.823,0,0,0-.6.278,2.5,2.5,0,0,0-.786,1.86,4.311,4.311,0,0,0,.917,2.306,9.2,9.2,0,0,0,3.839,3.366c2.285.892,2.285.594,2.7.557a2.267,2.267,0,0,0,1.516-1.059A1.853,1.853,0,0,0,14.136,11.193Z" transform="translate(0 0)"/></svg></button>
            <div class="call-to-action-content">
                <a href=""></a>
            </div>
        </div>
    </header>

    <main id="content_main" class="site-content" aria-label="Main Site Content" tabindex="-1">