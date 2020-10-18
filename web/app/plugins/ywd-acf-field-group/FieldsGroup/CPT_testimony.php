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
use WordPlate\Acf\Fields\Oembed;
use WordPlate\Acf\Fields\PostObject;

/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class CPT_testimony extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Temoignages',
			'location' => [
				Location::if('post_type', 'testimony')
			],
			'fields' => [
                Text::make('Poste','job_testimony'),
                Image::make('Image','image_testimony')->returnFormat('array'),
                Wysiwyg::make('Contenu','content_testimony'),
                Oembed::make('Video','video_testimony'),
                PostObject::make('Centres de formation','post_centre_testimony')->instructions('Choisir le centre de formation')->postTypes(['centers']),
                PostObject::make('Formation','post_formation_testimony')->instructions('Choisir la formation')->postTypes(['formations']),
			]
		]);
	}
}