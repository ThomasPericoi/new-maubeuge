<section id="job-cta-form-<?php echo uniqid(); ?>" class="job-cta-form">
    <div class="container container-lg">
        <div class="inner" style="background-image: url('<?php echo get_field("cta_form_background"); ?>');">
            <?php if (get_field("cta_form_title")) : ?>
                <h2><?php echo get_field("cta_form_title"); ?></h2>
            <?php endif; ?>
            <?php if (get_field("cta_form_text")) : ?>
                <p><?php echo get_field("cta_form_text"); ?></p>
            <?php endif; ?>
            <?php if (get_field("cta_form_cta_label")) : ?>
                <a class="btn btn-secondary" href="#job-form"><?php echo get_field("cta_form_cta_label"); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>