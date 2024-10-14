<?php get_header(); ?>

<!-- Hero -->
<section id="hero-<?php echo uniqid(); ?>" class="hero hero-project">
    <?php if (get_field("cover_image_alt")) :
        $background_url = get_field("cover_image_alt")["url"];
    elseif (has_post_thumbnail()) :
        $background_url = get_the_post_thumbnail_url();
    else :
        $background_url = false;
    endif; ?>
    <?php if ($background_url) : ?>
        <div class="thumbnail" style="background-image: url('<?php echo $background_url; ?>');"></div>
    <?php endif; ?>

    <div class="container">
        <div class="breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>

        <button class="btn-back">
            <?php get_template_part('assets/icons/arrow-left-circled.svg'); ?>
        </button>

        <?php if (get_field("date")) : ?>
            <div class="date">
                <?php echo get_field("date"); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Content -->
<section id="content">
    <div class="container formatted">
        <h1 class="h2-size"><?php echo get_the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</section>

<!-- Team -->
<section id="team-<?php echo uniqid(); ?>" class="team">
    <div class="container">
        <?php if (get_field("team_title")) : ?>
            <h3><?php echo get_field("team_title"); ?></h3>
        <?php endif; ?>
        <?php if (get_field("team_text")) : ?>
            <div class="text"><?php echo get_field("team_text"); ?></div>
        <?php endif; ?>
        <?php if (have_rows("team_members")) : ?>
            <div class="team-grid">
                <?php while (have_rows('team_members')) : the_row();
                    $portrait = get_sub_field('portrait');
                    $name = get_sub_field('name');
                    $description = get_sub_field('description'); ?>
                    <div class="item member">
                        <img src="<?php echo $portrait["url"]; ?>" alt="<?php echo $name; ?>">
                        <h4><?php echo $name; ?></h4>
                        <p><?php echo $description; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>