<div class="meta-info">
    <p><?php esc_html_e('Posted in', 'wp-devs') ?> <?php echo esc_html_e(get_the_date()); ?> <?php esc_html_e('by', 'wp-devs'); ?> <?php the_author_posts_link(); ?></p>
    <?php if(has_category()): ?>
        <p><?php esc_html_e('Categories', 'wp-devs') ?>: <?php the_category(' '); ?></p>
    <?php endif; ?>
    <?php if(has_tag()): ?>
        <p><?php esc_html_e('Tags', 'wp-devs') ?>: <?php the_tags('', ', '); ?></p>
    <?php endif; ?>
</div>
