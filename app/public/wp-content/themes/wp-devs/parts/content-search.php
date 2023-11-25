<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <header>
        <h2><a href="<?php the_ID(); ?>"><?php the_title(); ?></a></h2>
        <?php
            if(get_post_type() == 'post'):
            get_template_part('parts/content', 'post-summary');
            endif;
        ?>
    </header>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</article>
