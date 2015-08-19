<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pramod lapi
 * Date: 7/25/15
 * Time: 6:13 PM
 * To change this template use File | Settings | File Templates.
 */


/* Add Menu Support */
add_theme_support('menus');

/* Add Post Support */
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );


register_nav_menus(
    array(
        'main-menu' => __('Main Menu', 'framework')
    )
);

function get_Menu(){

    $args = array(
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'post_type'              => 'nav_menu_item',
        'post_status'            => 'publish',
        //'output'                 => ARRAY_A,
        'output_key'             => 'menu_order',
        'nopaging'               => true,
        'update_post_term_cache' => false );
    $items = wp_get_nav_menu_items( 'Main_Menu', $args );

    $navStr =  '<ul id="" class="right hide-on-med-and-down">';
    foreach($items as $k=>$navObj){

        $navStr .= '<li><a href="'.$navObj->url.'">'.$navObj->title.'</a></li>';
    }
    $navStr .='</ul>';
    $navStr .=  '<ul id="mobile-demo" class="side-nav">';
    foreach($items as $k=>$navObj){

        $navStr .= '<li><a href="'.$navObj->url.'">'.$navObj->title.'</a></li>';
    }
    $navStr .='</ul>';
    echo $navStr;
}

?>