<?php
/* Template Name: Page de contact */
get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-simple">
    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</section>

<!-- Contact -->
<section id="contact-<?php echo uniqid(); ?>" class="contact">
    <div class="container">
        <div class="cols-wrapper">
            <div class="col form">
                <?php if (get_field("contact_form_title")) : ?>
                    <h2 class="h4-size"><?php echo get_field("contact_form_title"); ?></h2>
                    <?php $shortcode_contact = '[contact-form-7 id="' . get_field("contact_form_shortcode") . '"]';
                    echo do_shortcode($shortcode_contact); ?>
                <?php endif; ?>
            </div>
            <div class="col">
                <div id="contact-map">
                </div>
                <div class="informations">
                    <div class="location">
                        <?php get_template_part('assets/icons/location-circled.svg'); ?><div><?php echo get_field("contact_informations_address"); ?></div>
                    </div>
                    <div class="telephone">
                    <?php get_template_part('assets/icons/telephone-circled.svg'); ?><div><?php echo get_field("contact_informations_telephone"); ?></div>
                    </div>
                    <div class="mail">
                    <?php get_template_part('assets/icons/email-circled.svg'); ?><div><?php echo get_field("contact_informations_email"); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>