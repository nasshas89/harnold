<?php
function create_recette_cpt() {

	$labels = array(
		'name' => _x( 'Recettes', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Recette', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Recettes', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Ajouter Recette', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Archives Recettes', 'textdomain' ),
		'attributes' => __( 'Attributs Recette', 'textdomain' ),
		'parent_item_colon' => __( 'Parents Recette:', 'textdomain' ),
		'all_items' => __( 'Recette', 'textdomain' ),
		'add_new_item' => __( 'Ajouter Recette', 'textdomain' ),
		'add_new' => __( 'Ajouter', 'textdomain' ),
		'new_item' => __( 'Nouveau Recette', 'textdomain' ),
		'edit_item' => __( 'Modifier Recette', 'textdomain' ),
		'update_item' => __( 'Mettre à jour trust', 'textdomain' ),
		'view_item' => __( 'Voir Recette', 'textdomain' ),
		'view_items' => __( 'Voir Recette', 'textdomain' ),
		'search_items' => __( 'Rechercher dans les Recette', 'textdomain' ),
		'not_found' => __( 'Aucun Recette trouvé.', 'textdomain' ),
		'not_found_in_trash' => __( 'Aucun Recette trouvé dans la corbeille.', 'textdomain' ),
		'featured_image' => __( 'Image mise en avant', 'textdomain' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
		'insert_into_item' => __( 'Insérer dans trust', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Recette', 'textdomain' ),
		'items_list' => __( 'Liste Recette', 'textdomain' ),
		'items_list_navigation' => __( 'Navigation de la liste Recette', 'textdomain' ),
		'filter_items_list' => __( 'Filtrer la liste Recette', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'recette', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-carrot',
		'supports' => array(),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
        'capability_type' => 'post',
        'supports' => array( 'title', 'editor'),
        
	);
	register_post_type( 'recette', $args );

}
add_action( 'init', 'create_recette_cpt', 0 );