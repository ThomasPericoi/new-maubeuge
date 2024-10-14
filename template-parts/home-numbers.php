<!-- Home Numbers -->
<section id="home-numbers-<?php echo uniqid(); ?>" class="home-numbers">
    <div class="container container-lg">
        <?php if (get_field("home_numbers_title")) : ?>
            <h2><?php echo get_field("home_numbers_title"); ?></h2>
        <?php endif; ?>
        <?php if (get_field("home_numbers_text")) : ?>
            <div class="text"><?php echo get_field("home_numbers_text"); ?></div>
        <?php endif; ?>
        <?php if (have_rows('home_numbers_numbers')) : ?>
            <div class="numbers-grid">
                <?php while (have_rows('home_numbers_numbers')) : the_row();
                    $icon = get_sub_field('icon');
                    $number = get_sub_field('number');
                    $label = get_sub_field('label'); ?>
                    <div class="element number">
                        <?php if ($icon) : ?>
                            <div class="icon">
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                            </div>
                        <?php endif; ?>
                        <?php if ($number) : ?>
                            <div class="number"><?php echo $number; ?></div>
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