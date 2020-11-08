<?php

namespace YwdAcfFieldsGroup\FieldsGroup;

// Use it for security
if (!defined('ABSPATH')) {
	exit;
}

use WordPlate\Acf\Fields\Tab;
use WordPlate\Acf\Fields\Url;
use YwdAcfFieldsGroup\SingletonInit;
use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\ButtonGroup;

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
				Image::make('Image Card Recette', 'image_card_recette')->returnFormat('array'),

				Tab::make('Image Auteur'),
				Text::make('Auteur Recette','name_autor'),
				Image::make('Image Auteur', 'image_autor')->returnFormat('array'),

				Tab::make('Couleur catégorie','cat_color'),
                ButtonGroup::make('Couleur','color')->choices([
                    '#F29489' => 'Fruits',
					'#f6a11c' => 'Légumes',
					'#ffff' => 'Fruits et légumes',
				]),
				ButtonGroup::make('Nom catégorie','name_cat_recette')->choices([
                    'Fruits' => 'fruits',
					'Légumes' => 'légumes',
					'Fruits et légumes' => 'fruits et légumes',
                ]),

			]
		]);
	}
}
