<?php
$labels = [
    'name' => 'Nos métiers',
    'singular_name' => 'Métier',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter un métier',
    'edit_item' => 'Modifier un métier',
    'new_item' => 'Nouveau métier',
    'view_item' => 'Voir le métier',
    'view_items' => 'Voir les métiers',
    'search_items' => 'Rechercher un métier',
    'not_found' =>  'Pas de métier trouvé.',
    'all_items' => 'Tous les métiers',
    'not_found_in_trash' => 'Pas de métier trouvé dans la corbeille.',
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
    'rewrite' => ['slug' => 'nos-métiers', 'with_front' => true],
    'menu_position' => 20,
    'menu_icon' => 'dashicons-admin-tools',
];

register_post_type('avs_job', $args);
