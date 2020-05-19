<?php
/**
 * Template for displaying posts in the Gallery Post Format
 *
 * Used on index and archive pages.
 *
 * @link http://codex.wordpress.org/Post_Formats
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<hgroup>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<h3 class="entry-format"><?php _e( 'Gallery', 'bluecorona2015' ); ?></h3>
		</hgroup>

		<div class="entry-meta">
			<?php bluecorona2015_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php if ( post_password_required() ) : ?>
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bluecorona2015' ) ); ?>
			<?php else :
				$images = bluecorona2015_get_gallery_images();
				if ( $images ) :
					$total_images = count( $images );
					$image = array_shift( $images );
			?>
				<figure class="gallery-thumb">
					<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image, 'thumbnail' ); ?></a>
				</figure><!-- .gallery-thumb -->

				<p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'bluecorona2015' ),
						'href="' . esc_url( get_permalink() ) . '" title="' . esc_attr( sprintf( __( 'Permalink to %s', 'bluecorona2015' ), the_title_attribute( 'echo=0' ) ) ) . '" rel="bookmark"',
						number_format_i18n( $total_images )
					); ?></em></p>
			<?php endif; // end bluecorona2015_get_gallery_images() check ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'bluecorona2015' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php $show_sep = false; ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'bluecorona2015' ) );
			if ( $categories_list ):
		?>
		<span class="cat-links">
			<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'bluecorona2015' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
			$show_sep = true; ?>
		</span>
		<?php endif; // End if categories ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', __( ', ', 'bluecorona2015' ) );
			if ( $tags_list ):
			if ( $show_sep ) : ?>
		<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
		<span class="tag-links">
			<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'bluecorona2015' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
			$show_sep = true; ?>
		</span>
		<?php endif; // End if $tags_list ?>

		<?php if ( comments_open() ) : ?>
		<?php if ( $show_sep ) : ?>
		<span class="sep"> | </span>
		<?php endif; // End if $show_sep ?>
		<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'bluecorona2015' ) . '</span>', __( '<b>1</b> Reply', 'bluecorona2015' ), __( '<b>%</b> Replies', 'bluecorona2015' ) ); ?></span>
		<?php endif; // End if comments_open() ?>

		<?php edit_post_link( __( 'Edit', 'bluecorona2015' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->