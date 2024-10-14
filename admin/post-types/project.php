<?php
$labels = [
    'name' => 'Nos projets',
    'singular_name' => 'Projet',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter un projet',
    'edit_item' => 'Modifier un projet',
    'new_item' => 'Nouveau projet',
    'view_item' => 'Voir le projet',
    'view_items' => 'Voir les projets',
    'search_items' => 'Rechercher un projet',
    'not_found' =>  'Pas de projet trouvé.',
    'all_items' => 'Tous les projets',
    'not_found_in_trash' => 'Pas de projet trouvé dans la corbeille.',
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
    'capability_type' => 'post',
    'supports' => [
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
    ],
    'taxonomies' => [],
    'has_archive' => true,
    'rewrite' => ['slug' => 'nos-projets', 'with_front' => true],
    'menu_position' => 20,
    'menu_icon' => 'dashicons-sticky',
];

register_post_type('avs_project', $args);
