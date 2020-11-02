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

        ];
    }

    

}