<?php
/* Template Name: Nos équipes */
get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <div class="h4-size parent-title"><?php echo __("L'association"); ?></div>
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</section>

<?php get_template_part('template-parts/row-2-columns', 'large', array(
    'logo' => false,
    'subtitle' => get_field("our_teams_hero_subtitle"),
    'title' => get_field("our_teams_hero_title"),
    'content' => get_field("our_teams_hero_content"),
    'details' => false,
    'cta' => false,
    'image' => get_field("our_teams_hero_image"),
    'color-theme' => "var(--apple)",
    'direction' => 'reverse'
)); ?>

<!-- Workers -->
<section id="workers-<?php echo uniqid(); ?>" class="workers">
    <div class="container container-lg">
        <div class="cols-wrapper">
            <div class="col formatted">
                <div>
                    <?php if (get_field("our_teams_workers_subtitle")) : ?>
                        <span class="subtitle"><?php echo get_field("our_teams_workers_subtitle"); ?></span>
                    <?php endif; ?>
                    <?php if (get_field("our_teams_workers_title")) : ?>
                        <h2><?php echo get_field("our_teams_workers_title"); ?></h2>
                    <?php endif; ?>
                </div>
                <?php if (get_field("our_teams_workers_content")) : ?>
                    <?php echo get_field("our_teams_workers_content"); ?>
                <?php endif; ?>
            </div>
            <div class="col">
                <?php if (get_field("our_teams_workers_sectors")) : ?>
                    <div class="sectors-grid">
                        <?php while (have_rows('our_teams_workers_sectors')) : the_row();
                            $job = get_sub_field('job');
                            $number = get_sub_field('number');
                            $label = get_sub_field('label');
                            $title = get_sub_field('title'); ?>
                            <a class="element sector" href="<?php echo get_the_permalink($job[0]); ?>">
                                <?php if (get_field('block_picto', $job[0])) : ?>
                                    <img src="<?php echo get_field('block_picto', $job[0])["url"]; ?>" />
                                <?php endif; ?>
                                <p>
                                    <?php if ($number) : ?>
                                        <span class="title h3-size"><?php echo $number; ?></span>
                                    <?php endif; ?>
                                    <?php if ($label) : ?>
                                        <?php echo $label; ?>
                                    <?php endif; ?> <br />
                                    <?php if ($title) : ?>
                                        <strong><?php echo $title; ?></strong>
                                    <?php endif; ?>
                                </p>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/join-us', '', array(
    'title' => get_field("our_teams_join_title"),
    'cards' => get_field("our_teams_join_cards"),
)); ?>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>