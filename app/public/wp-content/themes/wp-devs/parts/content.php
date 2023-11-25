<article>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb'); ?></a>
    <?php endif; ?>
    <div class="meta-info">
        <p>Posted in <?php echo esc_html_e(get_the_date()); ?> by <?php the_author_posts_link(); ?></p>
        <?php if(has_category()): ?>
            <p>Categories: <?php the_category(' '); ?></p>
        <?php endif; ?>
        <?php if(has_tag()): ?>
            <p>Tags: <?php the_tags('', ', '); ?></p>
        <?php endif; ?>
    </div>
    <?php the_excerpt(); ?>
</article>
