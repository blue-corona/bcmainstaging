<?php
/**
 * Template for displaying content featured in the showcase.php page template
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */

global $feature_class;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $feature_class ); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<div class="entry-meta">
			<?php bluecorona2015_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'bluecorona2015' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'bluecorona2015' ) );
			if ( '' != $tag_list ) {
				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'bluecorona2015' );
			} else {
				$utility_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'bluecorona2015' );
			}
			printf(
				$utility_text,
				/* translators: used between list items, there is a space after the comma */
				get_the_category_list( __( ', ', 'bluecorona2015' ) ),
				$tag_list,
				esc_url( get_permalink() ),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'bluecorona2015' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->