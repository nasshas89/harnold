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
use WordPlate\Acf\Fields\Textarea;


/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class CPT_recette extends SingletonInit
{

	protected function __construct()
	{
		register_extended_field_group([
			'title' => 'Fields CPT  Recettes',
			'location' => [
				Location::if('post_type', 'recette')
			],
			'fields' => [
				Image::make('Image article', 'image_recette')->returnFormat('array'),
				Textarea::make('Extrait Article')->instructions('120 caractères maximum'),


			]
		]);
	}
}
