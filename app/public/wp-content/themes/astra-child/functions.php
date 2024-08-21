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


add_filter( 'wp_nav_menu_header_items', 'prefix_add_menu_item', 10, 2 ); //Récupère les items du menu header

// Ajoute un item du menu à une place précise

function prefix_add_menu_item ( $items, $args ) {
       
    // Condition= admin connecté

        if (is_user_logged_in()) {
            
            $items_array = array(); //Création du tableau d'item
            
            while ( false !== ( $item_pos = strpos ( $items, '<li', 10 ) ) ) //Ajoute la position souhaitée de l'item
            {
                
                $items_array[] = substr($items, 0, $item_pos);
                
                $items = substr($items, $item_pos);
            }
            
            $items_array[] = $items;

            // insère le lien Admin à la 2ème place
            array_splice($items_array, 1, 0, '<li class="menu-item"><a class="menu-admin" href="'. get_site_url() .'/wp-admin/">Admin</a></li>');
           
            $items = implode('', $items_array); //renvoie le tableau en chaine de caractère
        }
       
       return $items;    
}


