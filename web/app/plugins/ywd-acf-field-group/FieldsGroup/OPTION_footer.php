<?php

namespace YwdAcfFieldsGroup\FieldsGroup;

// Use it for security
if (!defined('ABSPATH')) {
    exit;
}

use WordPlate\Acf\Fields\Url;
use YwdAcfFieldsGroup\SingletonInit;
use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Tab;
use WordPlate\Acf\Fields\Repeater;
use WordPlate\Acf\Fields\Number;

/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class OPTION_footer extends SingletonInit
{

    protected function __construct()
    {
        register_extended_field_group([
            'title' => 'Field Option Footer',
            'location' => [
                Location::if('options_page', 'footer')
            ],
            'fields' => [
                Text::make('Titre Menu Footer 1', 'title_footer_un'),
                Text::make('Titre Menu Footer 2', 'title_footer_deux'),
                Text::make('Titre Menu Footer 3', 'title_footer_trois'),
                Text::make('Titre Menu Footer 4', 'title_footer_quatre'),
                

                Tab::make('Présentation'),
                Repeater::make('Elements descriptif', 'picto_repeater')->fields([
                    Url::make('Lien du Réseau social', 'link_social'),
                    Image::make('Image Réseau social', 'picto_image_social')->returnFormat('array'),
                ])->max(3),

                Tab::make('Ajout des chiffres clés'),
                Repeater::make('Elements', 'number_excel')->fields([
                    Number::make('Chiffre', 'number_footer_banner'),
                    Text::make('Légende', 'add_legende'),
                ])->max(4),

            ]
        ]);
    }
}
