<?php get_header(); ?>
    <!-- DINAMIC AREA -->
    <?php get_template_part('parts/content', 'header-image'); ?>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container">
                    <div class="page-items">
                        <?php
                        while(have_posts()):
                            the_post();
                            get_template_part('parts/content', 'page');
                            if(comments_open() || get_comments_number()){
                                comments_template();
                            }

                            endwhile;
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- DINAMIC AREA -->
<?php get_footer(); ?>
