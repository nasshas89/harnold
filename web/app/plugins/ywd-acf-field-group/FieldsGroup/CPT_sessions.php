<?php
namespace YwdAcfFieldsGroup\FieldsGroup;

// Use it for security
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WordPlate\Acf\Fields\Url;
use YwdAcfFieldsGroup\SingletonInit;
use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\PostObject;
use WordPlate\Acf\Fields\DatePicker;


/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class CPT_sessions extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Sessions',
			'location' => [
				Location::if('post_type', 'session')
			],
			'fields' => [
                
                DatePicker::make('Date de début','begin_date_session'),
                DatePicker::make('Date de fin','end_date_session'),
                PostObject::make('Formation','post_formation_testimony')->instructions('Choisir la formation')->postTypes(['formations']),
			]
		]);
	}
}