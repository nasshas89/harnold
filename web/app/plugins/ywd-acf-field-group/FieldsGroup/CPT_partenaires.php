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
class CPT_partenaires extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Partenaires',
			'location' => [
				Location::if('post_type', 'partenaires')
			],
			'fields' => [
                Url::make('Lien', 'link')->instructions('Lien du site partenaire'),
                Image::make('Logo','logo')->returnFormat('array')
			]
		]);
	}
}