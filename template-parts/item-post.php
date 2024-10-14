<a href="<?php esc_url(the_permalink()); ?>" class="element post">
    <?php if (has_post_thumbnail()) : ?>
        <div class="image">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <div class="content">
        <h3 class="h4-size title"><?php echo get_the_title(); ?></h3>
        <div class="date"><span><?php echo get_the_date('d/m/Y'); ?></span></div>
        <?php if (has_excerpt()) : ?>
            <p><?php echo get_the_excerpt(); ?></p>
        <?php endif; ?>
        <span class="btn"><?php echo __('Lire la suite', 'new-maubeuge'); ?></span>
    </div>
</a>