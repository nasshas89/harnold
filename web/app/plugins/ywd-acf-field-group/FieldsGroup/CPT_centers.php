<?php
namespace YwdAcfFieldsGroup\FieldsGroup;

// Use it for security
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

use YwdAcfFieldsGroup\SingletonInit;
use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Wysiwyg;
use WordPlate\Acf\Fields\ButtonGroup;
use WordPlate\Acf\Fields\PostObject;
use WordPlate\Acf\Fields\Tab;
use WordPlate\Acf\Fields\Repeater;
use WordPlate\Acf\Fields\GoogleMap;
use WordPlate\Acf\Fields\Select;
use WordPlate\Acf\Fields\TimePicker;
/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class CPT_centers extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Centre',
			'location' => [
				Location::if('post_type', 'centers')
			],
			'fields' => [
                Image::make('Bannière centre','image_center')->returnFormat('array'),
                GoogleMap::make('Addresse google map', 'address')->instructions('Ajout adresse google map'),
                Select::make('Accès handicapé','acces_pedica')
                    ->instructions('Séléctionner les différents accès handicapés')->choices([
                        'sound' => 'Malentendant',
                        'motor' => 'Moteur',
                    ])->allowMultiple()->required(),
                ButtonGroup::make('Affiliation','orga_affiliate')->choices([
                        'afec' => 'AFEC',
                        'pointF' => 'Point F',
                    ]),
  
                Tab::make('Horaires','time_programme'),
                Repeater::make('Choisir un jour')->fields([
                        Text::make('Jour','day_prez'),
                    ]),                    
                Repeater::make('Pèriode')->fields([
                    TimePicker::make('Heure début', 'time_begin')->displayFormat('H:i')->returnFormat('H:i'),
                    TimePicker::make('heure fin', 'time_finish')->displayFormat('H:i')->returnFormat('H:i'),
                ]),
                Tab::make('Centre de formation','center_training'),
                Text::make('Titre Centre de formation','center_name'),
                Wysiwyg::make('Contenu centre de formation','content_center_formation'),

                Tab::make('Mot du directeur / de la directrice','citation_director'),
                Text::make('Titre Mot du directeur / de la directrice','center_title_director'),
                Image::make('Photo directeur/directrice','photo_director')->returnFormat('array'),
                Text::make('Nom directeur / de la directrice','center_name_director'),
                Wysiwyg::make('Contenu Mot du directeur / de la directrice','content_words_director'),
                
                Tab::make('Formation','formation_center'),
                Text::make('Titre Formations','center_title_formation'),
                PostObject::make('Formations','post_center_formation')->instructions('Choisir une ou plusieurs formation')->postTypes(['formation']),    
                Tab::make('Emplacement','localisation_center'),
                Text::make('Titre Emplacement','center_title_localisation'),

			]
        ]);
	}
}