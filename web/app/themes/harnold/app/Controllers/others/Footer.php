<?php

namespace App\Controllers\others;

trait Footer {

    public function footer(){
        return [
            'picto_repeater' =>option('picto_repeater_reassurance'),
        ];
    }

    

}