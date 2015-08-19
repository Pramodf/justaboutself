<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ascent
 */
?>
        </div><!-- close .*-inner (main-content) -->
    </div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container animated fadeInLeft">
        <div class="row">
            <div class="site-footer-inner col-sm-12 clearfix">
            <?php get_sidebar( 'footer' ); ?>
            </div>  
        </div>
    </div><!-- close .container -->
    <div id="footer-info">
        <div class="container">
            <div class="site-info">
                <?php do_action( 'ascent_credits' ); ?>
                <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'ascent' ); ?>" ><?php printf( __( '&copy; 2015 http://www.justaboutself.com. All rights reserved', 'http://justaboutself.com' ), 'WordPress' ); ?></a>	
                <span class="sep"> | </span>
                
            </div><!-- close .site-info -->
        </div>
    </div>
</footer><!-- close #colophon -->
<?php if(of_get_option('enable_scroll_to_top')): ?>
    <a href="#top" id="scroll-top"></a>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>