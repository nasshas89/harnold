<?php

namespace App\Controllers\others;

trait General {

    public function header_menu(){
        return (object) [
            'logo_header' => (object) option('logo_header'),
            'info_1_header_up' => option('info_1_header_up'),
            'text_1_header_up' => option('text_1_header_up'),
            'text_2_header_up' => option('text_2_header_up'),
            'picto_repeater' => (object) option('picto_repeater'),
            'title_home_1' => option('title_home_1'),
            'title_home_2' => option('title_home_2'),
            'title_home_3' => option('title_home_3'),
            'img_hero_home' => option('img_hero_home'),

        ];
    }

    

}