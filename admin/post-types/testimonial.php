<?php
$labels = [
    'name' => 'Témoignages',
    'singular_name' => 'Témoignage',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter un témoignage',
    'edit_item' => 'Modifier un témoignage',
    'new_item' => 'Nouveau témoignage',
    'view_item' => 'Voir le témoignage',
    'view_items' => 'Voir les témoignages',
    'search_items' => 'Rechercher un témoignage',
    'not_found' =>  'Pas de témoignage trouvé.',
    'all_items' => 'Tous les témoignages',
    'not_found_in_trash' => 'Pas de témoignage trouvé dans la corbeille.',
    'parent_item_colon' => ''
];

$args = [
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => false,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'hierarchical' => false,
    'capability_type' => 'page',
    'supports' => [
        'title',
        'custom-fields',
    ],
    'taxonomies' => [],
    'has_archive' => false,
    'rewrite' => false,
    'menu_position' => 20,
    'menu_icon' => 'dashicons-format-status',
];

register_post_type('avs_testimonial', $args);
