<a href="<?php esc_url(the_permalink()); ?>" class="element project">
    <?php if (has_post_thumbnail()) : ?>
        <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
    <?php endif; ?>
    <?php if (get_field("date")) : ?>
        <div class="date">
            <?php echo get_field("date"); ?>
        </div>
    <?php endif; ?>
    <h3 class="title"><?php echo get_the_title(); ?></h3>
    <?php if (has_excerpt()) : ?>
        <p><?php echo get_the_excerpt(); ?></p>
    <?php endif; ?>
    <?php if (have_rows("team_members")) : ?>
        <div class="team">
            <?php while (have_rows('team_members')) : the_row();
                $portrait = get_sub_field('portrait'); ?>
                <div class="member" style="background-image: url('<?php echo $portrait["url"]; ?>');">
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <span class="btn btn-secondary"><?php echo __('Découvrir', 'new-maubeuge'); ?></span>
</a>