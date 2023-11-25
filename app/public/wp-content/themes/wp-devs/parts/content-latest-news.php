<section class="home-blog">
    <h2><?php esc_html_e('Latest News', 'wp-devs'); ?></h2>
    <div class="container">
        <?php

        $posts_per_page = get_theme_mod('set_per_page', 3);
        $category_include = get_theme_mod('set_category_include');
        $category_exclude = get_theme_mod('set_category_exclude');

        $args = array('post_type' => 'post',
                      'posts_per_page' => esc_html($posts_per_page),
                      'category__in' => explode(",", esc_html($category_include)),
                      'category__not_in' => explode(",", esc_html($category_exclude)));

        $postlist = new WP_Query($args);

        if($postlist->have_posts()):
            while($postlist->have_posts()):
                $postlist->the_post();
                ?>

                <article class='latest-news'>
                <?php if(has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                <?php endif; ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="meta-info">
                        <p>
                            <?php esc_html_e('by', 'wp-devs') ?> <span><?php the_author_posts_link() ?></p></span>
                            <?php esc_html_e('Categories', 'wp-devs') ?>: <span><?php the_category(' '); ?></p></span>
                            <?php esc_html_e('Tags', 'wp-devs') ?>: <?php the_tags('', ', '); ?></p>
                        </p>
                        <p><span><?php echo esc_html_e(get_the_date()); ?></span></p>
                    </div>
                    <?php the_excerpt(); ?>
                </article>

                <?php
            endwhile;
            wp_reset_postdata();
        else: ?>
            <p><?php esc_html_e('Nothing yet to be displayed!', 'wp-devs'); ?></p>
        <?php endif; ?>
    </div>
</section>
