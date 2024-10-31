<!-- Testimonials Slider -->
<?php
$testimonials = get_posts(array(
    'post_type' => 'avs_testimonial',
    'post__in' => $args['testimonials'],
    'posts_per_page' => -1,
)); ?>

<section id="testimonials-slider-<?php echo uniqid(); ?>" class="testimonials-slider">
    <div class="container">
        <?php if ($args['title']) : ?>
            <h2><?php echo $args['title']; ?></h2>
        <?php endif; ?>
        <div class="testimonials-list swiper">
            <div class="swiper-wrapper">
                <?php foreach ($testimonials as $post) :
                    setup_postdata($post); ?>
                    <div class="element swiper-slide">
                        <header>
                            <img src="<?php echo get_field("logo")["url"]; ?>" alt="<?php echo get_field("logo")["title"]; ?>">
                            <div>
                                <h6><?php echo get_the_title(); ?></h6>
                                <?php if (get_field("workshop")) : ?>
                                    <?php echo get_field("workshop"); ?>
                                <?php endif; ?>
                            </div>
                        </header>
                        <?php if (get_field("testimonial")) : ?>
                            <blockquote>
                                <?php echo get_field("testimonial"); ?>
                            </blockquote>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="pagination-wrapper">
                <div class="swiper-button-prev">
                    <?php get_template_part('assets/icons/arrow-left-circled.svg'); ?>
                </div>
                <div class="swiper-button-next">
                    <?php get_template_part('assets/icons/arrow-left-circled.svg'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>