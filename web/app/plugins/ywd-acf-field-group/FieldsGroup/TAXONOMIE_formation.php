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
use WordPlate\Acf\Fields\Text;

/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class TAXONOMIE_formation extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields Taxonomie Formation',
			'location' => [
				Location::if('taxonomy', 'formations_tax')
			],
			'fields' => [
                Text::make('Titre', 'title_taxo_formation'),
                Image::make('Picto','logo_tax_formation')->returnFormat('array')
			]
		]);
	}
}