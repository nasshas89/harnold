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

                $post = [
                    'ID'            => get_the_ID(),
                    'taxs' => $taxs,
                    'title'         => get_the_title(),
                    'permalink'     => get_the_permalink(),
                    'excerpt'       => get_the_excerpt(),
                    'content'       => get_the_content(),
                    'date' => get_the_date('j F Y'),
                    'thubnail'      => get_the_post_thumbnail_url(),

                ];

                $posts_formations[] = $post;
            endwhile;
            wp_reset_query();
        endif;
        return   $posts_formations;
    }
}
