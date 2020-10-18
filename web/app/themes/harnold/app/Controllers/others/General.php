<?php

namespace App\Controllers\others;

trait General {

    public function header(){
        return (object) [
            'logo_header_transp' => (object) option('logo_header_transparent'),
            'logo_header_color' => (object) option('logo_header_color'),
            'hero_banniere' => (object) option('image_hero_home'),
            'title_hero_home' => option('title_hero_home'),

        ];
    }

    

}