<?php get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <div class="h4-size parent-title"><?php echo __("Ateliers du Val de Sambre de"); ?></div>
        <h1><?php echo get_the_title(); ?></h1>
        <div class="addresses-wrapper">
            <?php if (get_field("address")) : ?>
                <div class="element address">
                    <?php echo get_field("address"); ?>
                </div>
            <?php endif; ?>
            <?php if (get_field("phone")) : ?>
                <a href="tel:<?php echo get_field("phone"); ?>" class="element phone">
                    <?php echo get_field("phone"); ?>
                </a>
            <?php endif; ?>
            <?php if (get_field("mail")) : ?>
                <a href="mailto:<?php echo get_field("mail"); ?>" class="element mail">
                    <?php echo get_field("mail"); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Presentation -->
<section id="presentation-<?php echo uniqid(); ?>" class="presentation">
    <div class="container container-lg">
        <div class="cols-wrapper">
            <div class="col">
                <?php if (have_rows("gallery")) : ?>
                    <div class="gallery-wrapper">
                        <?php while (have_rows('gallery')) : the_row();
                            $element = get_sub_field('element'); ?>
                            <div class="element" style="background-image: url('<?php echo esc_url($element); ?>');">
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col presentation-wrapper">
                <h2><?php echo __("Présentation", "new-maubeuge"); ?></h2>
                <?php if (get_field("presentation_text")) : ?>
                    <p><?php echo get_field("presentation_text"); ?></p>
                <?php endif; ?>
                <?php if (get_field("teachers_amount") || get_field("employees_amount")) : ?>
                    <div class="team-wrapper">
                        <h3 class="h4-size"><?php echo __("L'équipe", "new-maubeuge"); ?></h3>
                        <div class="team">
                            <?php if (get_field("teachers_amount") && get_field("teachers")) : ?>
                                <div><strong><?php echo get_field("teachers_amount"); ?></strong> <?php echo get_field("teachers"); ?></div>
                            <?php endif; ?>
                            <?php if (get_field("employees_amount") && get_field("employees")) : ?>
                                <div><strong><?php echo get_field("employees_amount"); ?></strong> <?php echo get_field("employees"); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (have_rows("schedules")) : ?>
                    <div class="schedule-wrapper">
                        <h3 class="h4-size"><?php echo __("Horaires", "new-maubeuge"); ?></h3>
                        <div class="schedules">
                            <?php while (have_rows('schedules')) : the_row();
                                $day = get_sub_field('day');
                                $hours = get_sub_field('hours'); ?>
                                <div><?php echo $day; ?> : <strong><?php echo $hours; ?></strong></div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/jobs-tabs', '', array(
    'button_style' => 'alternate',
    'section_title' => false,
    'section_text' => false,
    'jobs' => get_field("related_jobs"),
)); ?>

<!-- Content -->
<section id="content">
    <div class="container container-sm formatted">
        <?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>