<?php
$labels = [
    'name' => 'Ateliers',
    'singular_name' => 'Atelier',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter un atelier',
    'edit_item' => 'Modifier un atelier',
    'new_item' => 'Nouveau atelier',
    'view_item' => 'Voir le atelier',
    'view_items' => 'Voir les ateliers',
    'search_items' => 'Rechercher un atelier',
    'not_found' =>  'Pas de atelier trouvé.',
    'all_items' => 'Tous les ateliers',
    'not_found_in_trash' => 'Pas d\'atelier trouvé dans la corbeille.',
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
