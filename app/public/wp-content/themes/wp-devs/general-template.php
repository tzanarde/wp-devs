<?php
/*
Template Name: General Template
*/
?>

<?php get_header(); ?>
    <!-- DINAMIC AREA -->
    <?php get_template_part('parts/content', 'header-image'); ?>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                    <div class="container">
                        <div class="general-template">
                            <?php
                            if(have_posts()):
                                while(have_posts()): the_post();
                                ?>
                                    <article>
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                    </article>
                                <?php
                                endwhile;
                            else: ?>
                                <p><?php esc_html_e('Nothing yet to be displayed!', 'wp-devs'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
            </main>
        </div>
    </div>
    <!-- DINAMIC AREA -->
<?php get_footer(); ?>
