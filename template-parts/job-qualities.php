<!-- Home Numbers -->
<section id="job-qualities-<?php echo uniqid(); ?>" class="job-qualities">
    <div class="container container-lg">
        <?php if (get_field("qualities_title")) : ?>
            <h2><?php echo get_field("qualities_title"); ?></h2>
        <?php endif; ?>
        <?php if (get_field("qualities_text")) : ?>
            <p><?php echo get_field("qualities_text"); ?></p>
        <?php endif; ?>
        <?php if (have_rows('qualities_qualities')) : ?>
            <div class="qualities-grid">
                <?php while (have_rows('qualities_qualities')) : the_row();
                    $label = get_sub_field('label'); ?>
                    <div class="element quality">
                        <?php if ($label) : ?>
                            <p><?php echo $label; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>