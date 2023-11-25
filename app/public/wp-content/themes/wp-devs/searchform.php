<form role="search" method="get" action=<?php echo esc_url(home_url('/'));?>>
    <div>
        <div class="screen-reader-text" for="s"><?php esc_html_e('Search for', 'wp-devs') ?>:</div>
        <input type="text" value="<?php get_search_query()?>" name="s" id="s">
        <input type="submit" id="searchsubmit" value='<?php esc_html_e('Search', 'wp-devs'); ?>'>
        <!-- <input type="hidden" value="post" name="post_type" id="post_type"/> -->
    </div>
</form>
