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
use WordPlate\Acf\Fields\Wysiwyg;


/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class ARCHIVE_centers extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Archive Option Centers',
			'location' => [
				Location::if('options_page', '-centers-options')
			],
			'fields' => [
                Text::make('Titre ','option_title_centers'),
                Image::make('Visuel hero','center_archive_hero')->returnFormat('array'),
                Text::make('Titre SEO','option_title_centers_seo'),
                Wysiwyg::make('Contenu SEO','seo_content_centers'),
               
			]
        ]);
	}
}