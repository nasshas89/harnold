<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchiveRecette extends Controller
{
    use CPT\Recette;

    // public function post_recette_home(){

    //     $args = [
    //         'order' => 'DESC',
    //         'post_type' => 'recette',
    //         'posts_per_page' => 8,
    //     ];
    
    //     $wpqueryarticles_recette = new \WP_Query( $args );
    
    //     $posts_recette = [];
    
    //     if($wpqueryarticles_recette->have_posts()):
    //         while ($wpqueryarticles_recette->have_posts()) : $wpqueryarticles_recette->the_post();
    
    
    //             $post = [
    //                 'ID'            => get_the_ID(),
    //                 'title'         => get_the_title(),
    //                 'permalink'     => get_the_permalink(),
    //                 'date' => get_the_date('j F'),
    //                 'image_card_recette' => (object) field('image_card_recette'),
    //                 'name_autor' => field('name_autor'),
    //                 'image_autor' => field('image_autor'),
    //                 'color' => field('color'),
    
    //             ];
    
    //             $posts_recette[] = $post;
    //         endwhile;
    //         wp_reset_query();
    //     endif;
    //     return   $posts_recette;
    // }

}