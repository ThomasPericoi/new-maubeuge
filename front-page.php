<?php get_header(); ?>

<?php get_template_part('template-parts/home-hero-slider'); ?>
<?php get_template_part('template-parts/home-numbers'); ?>
<?php get_template_part('template-parts/jobs-tabs', '', array(
    'button_style' => 'normal',
    'section_title' => get_field("home_jobs_tabs_title"),
    'section_text' => false,
    'jobs' => 'all'
)); ?>
<?php get_template_part('template-parts/partners-grid'); ?>
<?php get_template_part('template-parts/row-2-columns', 'regular', array(
    'title' => get_field("home_join_title"),
    'content' => get_field("home_join_content"),
    'cta' => get_field("home_join_cta"),
    'image' => get_field("home_join_image"),
    'color-theme' => "endeavour",
    'direction' => 'normal',
)); ?>
<?php get_template_part('template-parts/home-workshops'); ?> 
<?php get_template_part('template-parts/latest-posts', '', array(
    'amount' => get_field("home_posts_amount"),
    'section_title' => get_field("home_posts_title")
)); ?>
<?php get_template_part('template-parts/home-commitments'); ?>

<?php get_footer(); ?>