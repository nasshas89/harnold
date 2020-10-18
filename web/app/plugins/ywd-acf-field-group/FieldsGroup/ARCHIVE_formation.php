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


/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class ARCHIVE_formation extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Archive Option Formation',
			'location' => [
				Location::if('options_page', '-formation-options')
			],
			'fields' => [
				Text::make('Titre Bannière','banner-title_archive_formation'),
                Image::make('Bannière','banner_archive_formation')->returnFormat('array'),
                Text::make('Titre seo Formation','title_seo_formation'),
				Text::make('Contenu SEO','content_archive_option_formation'),

               
			]
        ]);
	}
}