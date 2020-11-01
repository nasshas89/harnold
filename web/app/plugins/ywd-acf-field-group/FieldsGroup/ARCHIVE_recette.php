<?php
namespace YwdAcfFieldsGroup\FieldsGroup;

// Use it for security
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WordPlate\Acf\Fields\Url;
use YwdAcfFieldsGroup\SingletonInit;
use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Wysiwyg;


/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class ARCHIVE_recette extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Archive Option Recette',
			'location' => [
				Location::if('options_page', '-recette-options')
			],
			'fields' => [
                Text::make('Titre Archive Recette','title_archive_Recette'),
                Wysiwyg::make('Sous-titre','content_archive_option_Recette'),
                Image::make('Bannière','banner_archive_Recette')->returnFormat('array')
               
			]
        ]);
	}
}