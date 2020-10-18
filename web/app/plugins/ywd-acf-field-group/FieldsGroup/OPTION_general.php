<?php
namespace YwdAcfFieldsGroup\FieldsGroup;

// Use it for security
if( ! defined( 'ABSPATH' ) ) {
	exit;
}


use YwdAcfFieldsGroup\SingletonInit;
use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;

/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class OPTION_general extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Field Option Header',
			'location' => [
				Location::if('options_page', 'general')
			],
			'fields' => [
                
                Image::make('Logo Header transparent','logo_header_transparent')->returnFormat('array'),
                Image::make('Logo Header couleur','logo_header_color')->returnFormat('array'),
                Image::make('Logo Bannière Home','image_hero_home')->returnFormat('array'),
                Text::make('Titre Bannière Home','title_hero_home'),
                
			]
		]);
	}
}