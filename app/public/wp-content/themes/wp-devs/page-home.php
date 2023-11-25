<?php get_header(); ?>
    <!-- DINAMIC AREA -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php get_template_part('parts/content', 'home-hero'); ?>
                <?php get_template_part('parts/content', 'home-services'); ?>
                <?php get_template_part('parts/content', 'latest-news'); ?>
            </main>
        </div>
    </div>
    <!-- DINAMIC AREA -->
<?php get_footer(); ?>
