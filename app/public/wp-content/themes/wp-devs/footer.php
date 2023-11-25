        <!-- FOOTER -->
        <footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p><?php echo esc_html(get_theme_mod('set_copyright', 'Copyright X - ' . __('All Right Reserved', 'wp-devs'))); ?></p>
                </div>
                <div class="footer-menu">
                    <?php wp_nav_menu(array('theme_location' => 'wp_devs_footer_menu',
                                            'depth' => 1)); ?>
                </div>
            </div>
        </footer>
        <!-- FOOTER -->
    </div>
    <?php wp_footer(); ?>
</body>
</html>
