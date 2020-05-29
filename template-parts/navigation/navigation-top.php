<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage noesist
 * @since Noesist 1.0
 * @version 1.0
 */

?> 

<?php
	$menu_name = 'top'; 
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list = '<nav id="sitenav_main" class="sitenav sitenav-main nav-group column" aria-label="Main Site Navigation">' ."\n";		
        $menu_list .= "\t\t". '<button id="sitenav_main_mobile_toggle" class="nav-mobile-toggle accessible-megamenu-toggle animated"><span class="nav-mobile-toggle-inner">Main Menu Toggle</span></button>' ."\n";	
        $menu_list .= "\t\t". '<ul class="nav-menu">' ."\n";

        foreach ((array) $menu_items as $key => $menu_item) {
            if ( ! $menu_item->menu_item_parent ) {                
                $menu_list .= "\t\t". '<li class="nav-item"><a href="'. $menu_item->url .'"  class="' .noesist_check_active_menu($menu_item). '" data-name="'. str_replace(' ','-', strtolower($menu_item->title )). '">' ."\n";
                $menu_list .= "\t\t". '<span class="nav-item-inner">'. $menu_item->title .'</span>' ."\n";
                $menu_list .= "\t\t". '</a></li>' ."\n";
            } 
        }

        $menu_list .= "\t\t\t". ' <li class="nav-item icon-only"><a href=""><span class="nav-item-inner"><svg xmlns="http://www.w3.org/2000/svg"><path d="M5.271 0a5.271 5.271 0 105.271 5.271A5.271 5.271 0 005.271 0zm0 8.709a3.438 3.438 0 113.438-3.438 3.438 3.438 0 01-3.438 3.438z"/><path d="M12.564 11.271L10.73 9.437a.92.92 0 10-1.3 1.3l1.833 1.833a.92.92 0 101.3-1.3z"/></svg> Search</span></a></li>' ."\n";
        $menu_list .= "\t\t". '</ul>' ."\n";
        $menu_list .= "\t". '</nav>' ."\n";
    } else {
        // $menu_list = '<!-- no list defined -->';
    }
    echo $menu_list;
