<?php
namespace YwdAcfFieldsGroup\FieldsGroup;

// Use it for security
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WordPlate\Acf\Fields\Repeater;
use YwdAcfFieldsGroup\SingletonInit;
use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Tab;
use WordPlate\Acf\Fields\Url;

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
                
				Image::make('Logo Header','logo_header')->returnFormat('array'),

				Tab::make('Item menu up'),
				Text::make('Title Header-up 1','info_1_header_up'),
				Text::make('Texte Header-up 1','text_1_header_up'),

				Tab::make('Social Network'),
				Text::make('Title Social','text_2_header_up'),
                Repeater::make('Elements descriptif', 'picto_repeater')->fields([
                    Url::make('Lien du Réseau social', 'link_social'),
                    Image::make('Image Réseau social', 'picto_image_social')->returnFormat('array'),
				])->max(3),

				


                
                
			]
		]);
	}
}