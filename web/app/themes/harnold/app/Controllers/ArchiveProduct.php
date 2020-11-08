<?php

namespace App\Controllers;

trait ArchiveProduct
{


    public function product()
    {
        $args = [
            'order' => 'DESC',
            'post_type' => 'product',
            'posts_per_page' => -1,

        ];

        $wpqueryarticles_formation = new \WP_Query($args);

        $posts_formations = [];

        if ($wpqueryarticles_formation->have_posts()) :
            while ($wpqueryarticles_formation->have_posts()) : $wpqueryarticles_formation->the_post();

                $field_taxo = get_the_terms(get_the_ID(), 'product_cat');
                $taxs = [];

                if ($field_taxo) {
                    foreach ($field_taxo as $tax) {
                        $tax_tab = [
                            'slug' => $tax->slug,
                            'name' => $tax->name,
                        ];
                        $taxs[] = (object)$tax_tab;
                    }
                }
                $product = wc_get_product(get_the_ID());

                $post = [
                    'ID'            => get_the_ID(),
                    'taxs' => $taxs,
                    'title'         => get_the_title(),
                    'permalink'     => get_the_permalink(),
                    'excerpt'       => get_the_excerpt(),
                    'content'       => get_the_content(),
                    'date' => get_the_date('j F Y'),
                    'thubnail'      => get_the_post_thumbnail_url(),
                    'price' => $product->get_price(),
                    'sku' => $product->get_regular_price(),


                ];

                $posts_formations[] = $post;
            endwhile;
            wp_reset_query();
        endif;
        return   $posts_formations;
    }

    public function post_recette_home(){

        $args = [
            'order' => 'DESC',
            'post_type' => 'recette',
            'posts_per_page' => 8,
        ];
    
        $wpqueryarticles_recette = new \WP_Query( $args );
    
        $posts_recette = [];
    
        if($wpqueryarticles_recette->have_posts()):
            while ($wpqueryarticles_recette->have_posts()) : $wpqueryarticles_recette->the_post();
    
    
                $post = [
                    'ID'            => get_the_ID(),
                    'title'         => get_the_title(),
                    'permalink'     => get_the_permalink(),
                    'date' => get_the_date('j M'),
                    'image_card_recette' => field('image_card_recette'),
                    'name_autor' => field('name_autor'),
                    'image_autor' => field('image_autor'),
                    'color' => field('color'),
                    'name_cat_recette' => field('name_cat_recette'),
    
                ];
                
    
                $posts_recette[] = $post;
            endwhile;
            wp_reset_query();
        endif;
        return   $posts_recette;
    }
}
