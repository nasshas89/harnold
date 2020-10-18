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
class CPT_trust extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Trust',
			'location' => [
				Location::if('post_type', 'trust')
			],
			'fields' => [
                Url::make('Lien', 'link_trust')->instructions('Lien du partenaire'),
                Image::make('Logo','logo_trust')->returnFormat('array')
			]
		]);
	}
}