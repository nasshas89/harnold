<?php
function create_blog_cpt() {

	$labels = array(
		'name' => _x( 'Actualités', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Actualité', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Actualités', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Ajouter Actualité', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Archives Actualités', 'textdomain' ),
		'attributes' => __( 'Attributs Actualité', 'textdomain' ),
		'parent_item_colon' => __( 'Parents Actualité:', 'textdomain' ),
		'all_items' => __( 'Actualité', 'textdomain' ),
		'add_new_item' => __( 'Ajouter Actualité', 'textdomain' ),
		'add_new' => __( 'Ajouter', 'textdomain' ),
		'new_item' => __( 'Nouveau Actualité', 'textdomain' ),
		'edit_item' => __( 'Modifier Actualité', 'textdomain' ),
		'update_item' => __( 'Mettre à jour trust', 'textdomain' ),
		'view_item' => __( 'Voir Actualité', 'textdomain' ),
		'view_items' => __( 'Voir Actualité', 'textdomain' ),
		'search_items' => __( 'Rechercher dans les Actualité', 'textdomain' ),
		'not_found' => __( 'Aucun Actualité trouvé.', 'textdomain' ),
		'not_found_in_trash' => __( 'Aucun Actualité trouvé dans la corbeille.', 'textdomain' ),
		'featured_image' => __( 'Image mise en avant', 'textdomain' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
		'insert_into_item' => __( 'Insérer dans trust', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Actualité', 'textdomain' ),
		'items_list' => __( 'Liste Actualité', 'textdomain' ),
		'items_list_navigation' => __( 'Navigation de la liste Actualité', 'textdomain' ),
		'filter_items_list' => __( 'Filtrer la liste Actualité', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'blog', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-aside',
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
	register_post_type( 'blog', $args );

}
add_action( 'init', 'create_blog_cpt', 0 );