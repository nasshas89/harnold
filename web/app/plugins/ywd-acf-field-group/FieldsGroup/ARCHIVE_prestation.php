<?php
namespace YwdAcfFieldsGroup\FieldsGroup;

// Use it for security
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WordPlate\Acf\Fields\Url;
use YwdAcfFieldsGroup\SingletonInit;
use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\Image;


/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class ARCHIVE_prestation extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Archive Option Prestation',
			'location' => [
				Location::if('options_page', '-prestation-options')
			],
			'fields' => [
                Image::make('Héro','banner_archive_prestation')->returnFormat('array')
               
			]
        ]);
	}
}