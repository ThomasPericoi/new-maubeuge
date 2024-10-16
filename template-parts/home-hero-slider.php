<?php if (have_rows('home_hero_slider')) : ?>
    <!-- Home Hero Slider -->
    <section id="home-hero-slider-<?php echo uniqid(); ?>" class="home-hero-slider">
        <div class="swiper-wrapper">
            <?php while (have_rows('home_hero_slider')) : the_row();
                $type = get_sub_field('type');
            ?>

                <!-- Simple / Numbers -->
                <?php if (($type == "simple") || ($type == "numbers")) : ?>
                    <div class="slider-element swiper-slide <?php echo $type; ?>" style="background-image: url('<?php echo get_sub_field("background"); ?>');">
                        <div class="container">
                            <div class="inner-slider">
                                <?php if (get_sub_field("title")) : ?>
                                    <div class="h1-size title"><?php echo get_sub_field("title"); ?></div>
                                <?php endif; ?>
                                <?php if (get_sub_field("subtitle")) : ?>
                                    <div class="subtitle h5-size"><?php echo get_sub_field("subtitle"); ?></div>
                                <?php endif; ?>
                                <?php if (get_sub_field("text")) : ?>
                                    <div class="text"><?php echo get_sub_field("text"); ?></div>
                                <?php endif; ?>
                                <?php if (($type == "simple") && (get_sub_field("cta"))) : ?>
                                    <a href="<?php echo get_sub_field("cta")["url"]; ?>" class="btn btn-secondary"><?php echo get_sub_field("cta")["title"]; ?></a>
                                <?php endif; ?>
                                <?php if (($type == "numbers") && (have_rows("numbers"))) : ?>
                                    <div class="numbers-grid">
                                        <?php while (have_rows('numbers')) : the_row(); ?>
                                            <div class="element number">
                                                <div class="h3-size title number-title"><?php echo get_sub_field("number"); ?></div>
                                                <div class="number-label"><?php echo get_sub_field("label"); ?></div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Post -->
                <?php if ($type == "pinned-post") :
                    $pinned_post = get_sub_field('post');
                    foreach ($pinned_post as $post): setup_postdata($post); ?>
                        <div class="slider-element swiper-slide <?php echo $type; ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                            <div class="container">
                                <div class="inner-slider">
                                    <div class="h2-size title"><?php echo get_the_title(); ?></div>
                                    <div class="date"><?php echo get_the_date('d/m/Y'); ?></div>
                                    <div class="excerpt"><?php echo get_the_excerpt(); ?></div>
                                    <a href="<?php echo  get_the_permalink(); ?>" class="btn btn-white"><?php echo __("Lire la suite", "new-maubeuge"); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            <?php endwhile; ?>
        </div>
        <div class="swiper-button-next">
            <?php get_template_part('assets/icons/arrow-left-circled.svg'); ?>
        </div>
        <div class="swiper-button-prev">
            <?php get_template_part('assets/icons/arrow-left-circled.svg'); ?>
        </div>
        <div class="swiper-pagination"></div>
    </section>
<?php endif; ?>