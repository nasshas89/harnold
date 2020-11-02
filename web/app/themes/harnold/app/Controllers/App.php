<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class App extends Controller
{

    use ArchiveProduct;
    use others\General;

    public function siteName()
    {
        return get_bloginfo('name');
    }


    public function cat_product()
    {
        $args = array(
            'taxonomy' => 'product_cat',
            'orderby' => 'name',
            'order'   => 'ASC'
        );

        $cats = get_categories($args);
        return $cats;
    }

    function get_authors()
    {
        $args = array(
            'name__like' => 'fruit',
        );
        return get_terms('product_cat', $args);
    }



    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function productByFruits()
    {
        $args = array(
            'name__like' => 'fruit',
        );
        $product_categories = get_terms('product_cat', $args);
        
        $count = count($product_categories);

        if ($count > 0) {
            foreach ($product_categories as $product_category) {

                $args = array(
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            'terms' => $product_category->slug
                        )
                    ),
                    'post_type' => 'product',
                );
                
                $wpqueryarticles_formation = new \WP_Query($args);

                $posts = [];

                if ($wpqueryarticles_formation->have_posts()) :
                    while ($wpqueryarticles_formation->have_posts()) : $wpqueryarticles_formation->the_post();
                    

                        $post = [
                            'ID'            => get_the_ID(),
                            'title'         => get_the_title(),
                            'permalink'     => get_the_permalink(),
                            'excerpt'       => get_the_excerpt(),
                            'content'       => get_the_content(),
                            'date' => get_the_date('j F Y'),
                            'thubnail'      => get_the_post_thumbnail_url(),

                        ];

                        $posts[] = $post;
                        
                    endwhile;
                    wp_reset_query();
                endif;
                
                return   $posts;
            }
        }
    }
    public function productByLegumes()
    {
        $args = array(
            'name__like' => 'legumes',
        );
       
        $product_categories = get_terms('product_cat', $args);
        
        $count = count($product_categories);

        if ($count > 0) {
            foreach ($product_categories as $product_category) {

                $args = array(
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            'terms' => $product_category->slug
                        )
                    ),
                    'post_type' => 'product',
                );
                
                $wpqueryarticles_formation = new \WP_Query($args);

                $posts = [];

                if ($wpqueryarticles_formation->have_posts()) :
                    while ($wpqueryarticles_formation->have_posts()) : $wpqueryarticles_formation->the_post();
                    

                        $post = [
                            'ID'            => get_the_ID(),
                            'title'         => get_the_title(),
                            'permalink'     => get_the_permalink(),
                            'excerpt'       => get_the_excerpt(),
                            'content'       => get_the_content(),
                            'date' => get_the_date('j F Y'),
                            'thubnail'      => get_the_post_thumbnail_url(),

                        ];

                        $posts[] = $post;
                        
                    endwhile;
                    wp_reset_query();
                endif;
                
                return   $posts;
            }
        }
    }

    public function header() {
        if(wp_get_nav_menu_items('Menu Header')) {
            $menu = wp_get_nav_menu_items('Menu Header');

            foreach($menu as $menu_item) {
                if($menu_item->menu_item_parent == '0') {
                    $nav_items[$menu_item->ID] = [
                        'ID' => $menu_item->ID,
                        'title' => $menu_item->title,
                        'url' => $menu_item->url,
                        'children' => [],
                        'current' => get_the_ID() == $menu_item->object_id
                    ];
                } else {

                    if($menu_item->menu_item_parent == $nav_items[$menu_item->menu_item_parent]['ID']) {
                        $nav_items[$menu_item->menu_item_parent]['children'][] = [
                            'ID' => $menu_item->ID,
                            'title' => $menu_item->title,
                            'url' => $menu_item->url,
                            'parent_id' => $menu_item->menu_item_parent,
                            'current' => get_the_ID() == $menu_item->object_id
                        ];
                    }
                }
            }

            $nav_items = array_values($nav_items);
           

            return $nav_items;
        }
    }
}
