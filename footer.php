</main>

<!-- Footer -->
<?php $locations = get_nav_menu_locations(); ?>

<footer id="footer">
    <div id="main-footer">
        <div class="container">
            <div class="informations">
                <?php if (function_exists('the_custom_logo')) :
                    if (has_custom_logo()) :  the_custom_logo();
                    else : ?>
                        <a href="<?php echo site_url(); ?>" class="custom-logo-link h5-size">
                            <?php echo get_bloginfo(); ?>
                        </a>
                <?php endif;
                endif; ?>
                <?php if (get_field("footer_cta_primary", "options")) : ?>
                    <a class="btn btn-secondary btn-icon-<?php echo get_field("footer_cta_primary_icon", "options"); ?>" href="<?php echo get_field("footer_cta_primary", "options")["url"]; ?>"><?php echo get_field("footer_cta_primary", "options")["title"]; ?></a>
                <?php endif; ?>
                <?php if (get_field("footer_cta_secondary", "options")) : ?>
                    <a class="btn btn-icon-<?php echo get_field("footer_cta_secondary_icon", "options"); ?>" href="<?php echo get_field("footer_cta_secondary", "options")["url"]; ?>"><?php echo get_field("footer_cta_secondary", "options")["title"]; ?></a>
                <?php endif; ?>

                <?php if (have_rows('footer_socials', 'options')) : ?>
                    <div class="socials">
                        <?php while (have_rows('footer_socials', 'options')) : the_row();
                            $icon = get_sub_field('icon');
                            $link = get_sub_field('link'); ?>
                            <a href="<?php echo $link; ?>" target="_blank" class="social">
                                <?php get_template_part('assets/icons/socials/' . $icon . '.svg'); ?>
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php if (has_nav_menu('footer-menu-1')) : ?>
                <div class="menu menu-footer">
                    <h3 class="h6-size title"><?php echo wp_get_nav_menu_object($locations['footer-menu-1'])->name; ?></h3>
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu-1', 'container' => false, 'depth' => 1)); ?>
                </div>
            <?php endif; ?>
            <?php if (has_nav_menu('footer-menu-2')) : ?>
                <div class="menu menu-footer">
                    <h3 class="h6-size title"><?php echo wp_get_nav_menu_object($locations['footer-menu-2'])->name; ?></h3>
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu-2', 'container' => false, 'depth' => 1)); ?>
                </div>
            <?php endif; ?>
            <?php if (has_nav_menu('footer-menu-3')) : ?>
                <div class="menu menu-footer">
                    <h3 class="h6-size title"><?php echo wp_get_nav_menu_object($locations['footer-menu-3'])->name; ?></h3>
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu-3', 'container' => false, 'depth' => 1)); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div id="subfooter">
        <div class="container container-lg">
            <?php if (has_nav_menu('footer-submenu')) : ?>
                <div class="menu menu-footer">
                    <?php wp_nav_menu(array('theme_location' => 'footer-submenu', 'container' => false, 'depth' => 1)); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>