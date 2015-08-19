<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package upTown
 */
?>

		</div><!-- #content -->
		
	</div><!-- #content-wrap -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">

			<?php do_action( 'uptown_credits' ); ?>
			
			<a href="" rel="generator"><?php echo "copyright 2014 www.justaboutself.com"; ?></a>
			<span class="sep"> | </span>
			<?php echo "All rights reserved"; ?>

		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>