<?php
/* Template Name: Notre écosystème */
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
    'subtitle' => get_field("our_ecosystem_hero_subtitle"),
    'title' => get_field("our_ecosystem_hero_title"),
    'content' => false,
    'details' => get_field("our_ecosystem_hero_content"),
    'cta' => false,
    'image' => get_field("our_ecosystem_hero_image"),
    'color-theme' => "var(--apple)",
    'direction' => 'normal'
)); ?>

<?php get_template_part('template-parts/testimonials-slider', '', array(
    'title' => get_field("our_ecosystem_testimonials_title"),
    'testimonials' => get_field("our_ecosystem_testimonials_testimonials"),
)); ?>

<?php get_template_part('template-parts/partners-grid'); ?>

<!-- Become Partner -->
<section id="become-partner-<?php echo uniqid(); ?>" class="become-partner">
    <div class="container">
        <?php if (get_field("our_ecosystem_become_partner_title")) : ?>
            <h2><?php echo get_field("our_ecosystem_become_partner_title"); ?></h2>
        <?php endif; ?>
        <?php if (get_field("our_ecosystem_become_partner_text")) : ?>
            <p class="h5-size"><?php echo get_field("our_ecosystem_become_partner_text"); ?></p>
        <?php endif; ?>
        <?php if (get_field("our_ecosystem_become_partner_cards")) : ?>
            <div class="cards-grid">
                <?php while (have_rows('our_ecosystem_become_partner_cards')) : the_row();
                    $title = get_sub_field('title');
                    $text = get_sub_field('text'); ?>
                    <div class="element card">
                        <?php if ($title) : ?>
                            <h3 class="h5-size"><?php echo $title; ?></h3>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                            <p><?php echo $text; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="btn-wrapper">
            <?php if (get_field("our_ecosystem_become_partner_button_1")["label"]) : ?>
                <a class="btn btn-secondary" href="<?php echo get_field("our_ecosystem_become_partner_button_1")["link"]; ?>"><?php echo get_field("our_ecosystem_become_partner_button_1")["label"]; ?></a>
            <?php endif; ?>
            <?php if (get_field("our_ecosystem_become_partner_button_2")["label"]) : ?>
                <a class="btn" href="<?php echo get_field("our_ecosystem_become_partner_button_2")["link"]; ?> " target="_blank"><?php echo get_field("our_ecosystem_become_partner_button_2")["label"]; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php if (get_field("our_ecosystem_cta_address")["address"]) : ?>
    <!-- CTA -->
    <section id="cta-<?php echo uniqid(); ?>" class="cta">
        <div class="container container-sm">
            <?php if (get_field("our_ecosystem_cta_title")) : ?>
                <h2 class="h3-size"><?php echo get_field("our_ecosystem_cta_title"); ?></h2>
            <?php endif; ?>
            <?php if (get_field("our_ecosystem_cta_text")) : ?>
                <p><?php echo get_field("our_ecosystem_cta_text"); ?></p>
            <?php endif; ?>
            <div class="address-wrapper">
                <?php get_template_part('assets/icons/location-circled.svg'); ?>
                <?php if (get_field("our_ecosystem_cta_address")["title"]) : ?>
                    <h3><?php echo get_field("our_ecosystem_cta_address")["title"]; ?></h3>
                <?php endif; ?>
                <?php if (get_field("our_ecosystem_cta_address")["address"] && get_field("our_ecosystem_cta_address")["link"]) : ?>
                    <a href="<?php echo get_field("our_ecosystem_cta_address")["link"]; ?>" target="_blank"><?php echo get_field("our_ecosystem_cta_address")["address"]; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_template_part('template-parts/association-discover'); ?>

<?php get_footer(); ?>