<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION



// menu specifique admin connecté

// function my_wp_nav_menu_args( $args = '' ) {
//     if( is_user_logged_in() ) { 
//         $args['menu'] = 'logged-in';
//     } else { 
//         $args['menu'] = 'header';
//     } 
//         return $args;
// }



// add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

// $menu_items = wp_get_nav_menu_items( 'header' );

// foreach ( $menu_items as $menu_item ) 
// {
//     echo '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
// }



// $menu_items = wp_get_nav_menu_items('header');
// if ($menu_items) 
// {
//  $first_item = $menu_items[0];
// }




add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        
        $items .= '<li class="admin"><a href="http://planty.local/nous-rencontrer/">Nous rencontrer</a></li>';
        $items .= '<li class="admin"><a href="'. get_admin_url() .'">Admin</a></li>';
        $items .= '<li class="commande"><a href="http://planty.local/commander/">Commander</a></li>';
        
    }
    return $items;
}




// add_filter( 'wp_nav_menu_header-menu_items', 'prefix_add_menu_item', 10, 2 );
// function prefix_add_menu_item ( $items, $args ) {
        
//         if (is_user_logged_in()) {
            
//             $items_array = array();
            
//             while ( false !== ( $item_pos = strpos ( $items, '<li', 10 ) ) ) {
                
//                 $items_array[] = substr($items, 0, $item_pos);
                
//                 $items = substr($items, $item_pos);
//             }
            
//             $items_array[] = $items;
           
//             array_splice($items_array, 1, 0, '<li class="menu-item"><a class="menu-admin" href="'. get_site_url() .'/wp-admin/">Admin</a></li>'); // insert custom item after 9th item one
           
//             $items = implode('', $items_array);
//         }
       
//        return $items;    
// }


// function ajout_element_menu($items, $args) {
//     $element = $items;
//     if ($args->theme_location == 'topbar-menu')
//     {
//         $admin = get_admin_url();
//         $elements= $items."<li><a href= '{$admin}'>Admin</a></li>";
//     }
//     return $element;
// }