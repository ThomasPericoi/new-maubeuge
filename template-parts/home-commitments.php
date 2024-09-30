<!-- Home Commitments -->
<section id="home-commitments-<?php echo uniqid(); ?>" class="home-commitments">
    <div class="container">
        <?php if (get_field("home_commitments_title")) : ?>
            <h2 class="h3-size"><?php echo get_field("home_commitments_title"); ?></h2>
        <?php endif; ?>
        <?php if (have_rows('home_commitments_commitments')) : ?>
            <div class="commitments-grid">
                <?php while (have_rows('home_commitments_commitments')) : the_row();
                    $label = get_sub_field('label');
                    $icon = get_sub_field('icon'); ?>
                    <div class="element commitment">
                        <?php if ($icon) : ?>
                            <div class="icon">
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        <?php if ($label) : ?>
                            <p><?php echo $label; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>