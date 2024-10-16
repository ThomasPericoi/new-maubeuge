<?php
$labels = [
    'name' => 'Nos implantations',
    'singular_name' => 'Implantation',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter une implantation',
    'edit_item' => 'Modifier une implantation',
    'new_item' => 'Nouvelle implantation',
    'view_item' => 'Voir l\'implantation',
    'view_items' => 'Voir les implantations',
    'search_items' => 'Rechercher une implantation',
    'not_found' =>  'Pas d\'implantation trouvées.',
    'all_items' => 'Toutes les implantations',
    'not_found_in_trash' => 'Pas d\'implantation trouvée dans la corbeille.',
    'parent_item_colon' => ''
];

$args = [
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'hierarchical' => true,
    'capability_type' => 'page',
    'supports' => [
        'title',
        'editor',
        'thumbnail',
        'custom-fields',
    ],
    'taxonomies' => [],
    'has_archive' => true,
    'rewrite' => ['slug' => 'nos-ateliers', 'with_front' => true],
    'menu_position' => 20,
    'menu_icon' => 'dashicons-location-alt',
];

register_post_type('avs_workshop', $args);
