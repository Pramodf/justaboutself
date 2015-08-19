<?php
/**
 * @package upTown
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemType="http://schema.org/BlogPosting">
	<header class="entry-header">
		<div class="page-title entry-title title">
			<h1 itemprop="headline"><?php the_title(); ?></h1>
		</div>
        <div class="entry-meta" style="margin-bottom:10px;" itemprop="datePublished"><?php uptown_posted_on(); ?></div>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="description">
	
		<?php if( has_post_thumbnail() ) { ?>
		
			<div class="entry-image" itemprop="image"><?php the_post_thumbnail( 'big', array( 'alt' => get_the_title(), 'title' => get_the_title() ) ); ?></div>
		
		<?php } ?>
        <p itemprop="articleBody">
		<?php the_content(); ?>
        </p>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'uptown' ),
				'after'  => '</div>',
			) );
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry-meta">

		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( ', ' );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', ', ' );

			if ( ! uptown_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s.', 'uptown' );
				} else {
					$meta_text = false;
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'tags: %2$s.', 'uptown' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s.', 'uptown' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>
	</footer><!-- .entry-meta -->
	
</article><!-- #post-## -->
