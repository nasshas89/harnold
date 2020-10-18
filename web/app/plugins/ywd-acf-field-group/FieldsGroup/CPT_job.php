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
use WordPlate\Acf\Fields\Textarea;
use WordPlate\Acf\Fields\Wysiwyg;


/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class CPT_job extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Offres d\'emplois',
			'location' => [
				Location::if('post_type', 'job')
			],
			'fields' => [
                Image::make('Image du job','image_job')->returnFormat('array'),
                Text::make('Statut','statut_job'),
                Text::make('Lieu','lieu_job'),
                Text::make('Formation souhaitée','need_it_job'),
                Textarea::make('Courte d\'éscription du job')->instructions('400 caractères maximum'),
                Wysiwyg::make('Missions','mission_job'),
                Wysiwyg::make('Profil Recherché','content_job'),


                
                
			]
        ]);
	}
}