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
use WordPlate\Acf\Fields\Number;
use WordPlate\Acf\Fields\TrueFalse;
use WordPlate\Acf\Fields\Select;
use WordPlate\Acf\ConditionalLogic;
use WordPlate\Acf\Fields\ButtonGroup;
use WordPlate\Acf\Fields\PostObject;
use WordPlate\Acf\Fields\Tab;
use WordPlate\Acf\Fields\Repeater;

/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class CPT_formation extends SingletonInit {

	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields CPT  Formation',
			'location' => [
				Location::if('post_type', 'formation')
			],
			'fields' => [
                Image::make('Héro Formation','image_formation')->returnFormat('array'),

                Image::make('Image Card Formation','image_card_formation')->returnFormat('array'),

                Text::make('Certification','certificate_degree'),
                Text::make('Durée prévu','durate'),
                

                Repeater::make('Tag Compétence','type_competence')->fields([
                    Text::make('Titre compétence','title_tag_competence'),
                ]) ,  
                    
                ButtonGroup::make('Organisme','organisme')
                ->choices([
                    'afec' => 'Afec',
                    'pointF' => 'Point F',
                ]),

                PostObject::make('Partenariat','post_formation_partenaires')->instructions('Choisir un partenaire')->allowMultiple()->postTypes(['partenaires']),
                
                ButtonGroup::make('Présence','presence')
                ->choices([
                    'continu' => 'Continu',
                    'mixte' => 'Mixte',
                    'alternance' => 'Alternance',
                ]),
                TrueFalse::make('CPF', 'cpf')
                ->defaultValue(false),


                Tab::make('Présentation','presentation_programme'),
                Repeater::make('Elements descriptif','repeater_brief')->fields([
                        Text::make('Titre','title_repeter_prez'),
                        Text::make('Sous-Titre','subTitleH3'),
                        Image::make('Picto','picto_repeter'),
                        Wysiwyg::make('Contenu','content_formation'),
                    ]),


                Tab::make('Programme','programme'),
                Repeater::make('Elements descriptif','progr_descri')->fields([
                    Text::make('Titre','title_repeter_programme'),
                    Image::make('Picto Titre','picto_repeter_programme'),
                    Wysiwyg::make('Contenu','content_programme_tab'),
                ]),

                Tab::make('Sub-Programme','suBprogramme'),
                Repeater::make('Elements descriptif','Sub_progr_descri')->fields([
                    Text::make('Texte du Sub-programme', 'text_Subprogramme'),
                    
                ]),

                Tab::make('Financement ','financement')->placement('top'),
                Wysiwyg::make('Contenu','content_finance_tab'),
                
                Tab::make('Témoignages','testimony_prezz'),
                Repeater::make('Elements descriptif','repeater_testimony')->fields([
                    Number::make('Pourcentage','testinmony_number'),
                    Text::make('Texte Témoignage','testimony_forma'),
                    ])->max(4),


			]
        ]);
	}
}