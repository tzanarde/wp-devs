<?php get_header(); ?>
    <!-- DINAMIC AREA -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <section class="home-blog">
                    <div class="container">
                        <div class="blog-items">
                            <?php
                            if(have_posts()):
                                while(have_posts()): the_post();
                                ?>
                                    <article>
                                        <h2><?php the_title(); ?></h2>
                                        <div class="meta-info">
                                            <p>Posted in <?php echo esc_html_e(get_the_date()); ?> by <?php the_author_posts_link(); ?></p>
                                            <?php if(has_category()): ?>
                                                <p>Categories: <?php the_category(' '); ?></p>
                                            <?php endif; ?>
                                            <?php if(has_tag()): ?>
                                                <p>Tags: <?php the_tags('', ', '); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php the_content(); ?>
                                    </article>
                                <?php
                                endwhile;
                            else: ?>
                                <p><?php esc_html_e('Nothing yet to be displayed!', 'wp-devs'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <!-- DINAMIC AREA -->
<?php get_footer(); ?>
