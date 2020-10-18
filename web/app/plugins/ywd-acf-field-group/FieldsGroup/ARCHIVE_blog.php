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
use WordPlate\Acf\Fields\Wysiwyg;


/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class ARCHIVE_blog extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Archive Option Blog',
			'location' => [
				Location::if('options_page', '-blog-options')
			],
			'fields' => [
                Text::make('Titre Archive Blog','title_archive_blog'),
                Wysiwyg::make('Sous-titre','content_archive_option_blog'),
                Image::make('Bannière','banner_archive_blog')->returnFormat('array')
               
			]
        ]);
	}
}