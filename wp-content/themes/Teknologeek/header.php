<nav>
    <a href="<?php bloginfo('url'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/teknologeek.png" />
    </a>
    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'id' => 'primary-nav' ) ); ?>
</nav>