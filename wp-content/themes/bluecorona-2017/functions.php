<?php
/**
 * Bluecorona 2015 functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, bluecorona2015_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'bluecorona2015_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */
@ini_set( 'upload_max_size' , '64M' );@ini_set( 'post_max_size', '64M');@ini_set( 'max_execution_time', '300' );
// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 584;

/*
 * Tell WordPress to run bluecorona2015_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'bluecorona2015_setup' );

if ( ! function_exists( 'bluecorona2015_setup' ) ):
/**
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override bluecorona2015_setup() in a child theme, add your own bluecorona2015_setup to your child theme's
 * functions.php file.
 *
 * @uses load_theme_textdomain()    For translation/localization support.
 * @uses add_editor_style()         To style the visual editor.
 * @uses add_theme_support()        To add support for post thumbnails, automatic feed links, custom headers
 * 	                                and backgrounds, and post formats.
 * @uses register_nav_menus()       To add support for navigation menus.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size()  To set a custom post thumbnail size.
 *
 * @since Bluecorona 2015 1.0
 */
function bluecorona2015_setup() {

	/*
	 * Make Bluecorona 2015 available for translation.
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Bluecorona 2015, use
	 * a find and replace to change 'bluecorona2015' to the name
	 * of your theme in all the template files.
	 */
	load_theme_textdomain( 'bluecorona2015', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Load up our theme options page and related code.
	require( get_template_directory() . '/inc/theme-options.php' );

	// Grab Bluecorona 2015's Ephemera widget.
	require( get_template_directory() . '/inc/widgets.php' );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'bluecorona2015' ) );
	register_nav_menu( 'landing', __( 'Menu for Landing page', 'bluecorona2015' ) );

	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

	$theme_options = bluecorona2015_get_theme_options();
	if ( 'dark' == $theme_options['color_scheme'] )
		$default_background_color = '1d1d1d';
	else
		$default_background_color = 'e2e2e2';

	// Add support for custom backgrounds.
	add_theme_support( 'custom-background', array(
		/*
		 * Let WordPress know what our default background color is.
		 * This is dependent on our current color scheme.
		 */
		'default-color' => $default_background_color,
	) );

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );

	// Add support for custom headers.
	$custom_header_support = array(
		// The default header text color.
		'default-text-color' => '000',
		// The height and width of our custom header.
		/**
		 * Filter the Bluecorona 2015 default header image width.
		 *
		 * @since Bluecorona 2015 1.0
		 *
		 * @param int The default header image width in pixels. Default 1000.
		 */
		'width' => apply_filters( 'bluecorona2015_header_image_width', 1000 ),
		/**
		 * Filter the Bluecorona 2015 default header image height.
		 *
		 * @since Bluecorona 2015 1.0
		 *
		 * @param int The default header image height in pixels. Default 288.
		 */
		'height' => apply_filters( 'bluecorona2015_header_image_height', 288 ),
		// Support flexible heights.
		'flex-height' => true,
		// Random image rotation by default.
		'random-default' => true,
		// Callback for styling the header.
		'wp-head-callback' => 'bluecorona2015_header_style',
		// Callback for styling the header preview in the admin.
		'admin-head-callback' => 'bluecorona2015_admin_header_style',
		// Callback used to display the header preview in the admin.
		'admin-preview-callback' => 'bluecorona2015_admin_header_image',
	);

	add_theme_support( 'custom-header', $custom_header_support );

	if ( ! function_exists( 'get_custom_header' ) ) {
		// This is all for compatibility with versions of WordPress prior to 3.4.
		define( 'HEADER_TEXTCOLOR', $custom_header_support['default-text-color'] );
		define( 'HEADER_IMAGE', '' );
		define( 'HEADER_IMAGE_WIDTH', $custom_header_support['width'] );
		define( 'HEADER_IMAGE_HEIGHT', $custom_header_support['height'] );
		add_custom_image_header( $custom_header_support['wp-head-callback'], $custom_header_support['admin-head-callback'], $custom_header_support['admin-preview-callback'] );
		add_custom_background();
	}

	/*
	 * We'll be using post thumbnails for custom header images on posts and pages.
	 * We want them to be the size of the header image that we just defined.
	 * Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	 */
	set_post_thumbnail_size( $custom_header_support['width'], $custom_header_support['height'], true );

	/*
	 * Add Bluecorona 2015's custom image sizes.
	 * Used for large feature (header) images.
	 */
	add_image_size( 'large-feature', $custom_header_support['width'], $custom_header_support['height'], true );
	// Used for featured posts if a large-feature doesn't exist.
	add_image_size( 'small-feature', 500, 300 );

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'wheel' => array(
			'url' => '%s/images/headers/wheel.jpg',
			'thumbnail_url' => '%s/images/headers/wheel-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Wheel', 'bluecorona2015' )
		),
		'shore' => array(
			'url' => '%s/images/headers/shore.jpg',
			'thumbnail_url' => '%s/images/headers/shore-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Shore', 'bluecorona2015' )
		),
		'trolley' => array(
			'url' => '%s/images/headers/trolley.jpg',
			'thumbnail_url' => '%s/images/headers/trolley-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Trolley', 'bluecorona2015' )
		),
		'pine-cone' => array(
			'url' => '%s/images/headers/pine-cone.jpg',
			'thumbnail_url' => '%s/images/headers/pine-cone-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Pine Cone', 'bluecorona2015' )
		),
		'chessboard' => array(
			'url' => '%s/images/headers/chessboard.jpg',
			'thumbnail_url' => '%s/images/headers/chessboard-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Chessboard', 'bluecorona2015' )
		),
		'lanterns' => array(
			'url' => '%s/images/headers/lanterns.jpg',
			'thumbnail_url' => '%s/images/headers/lanterns-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Lanterns', 'bluecorona2015' )
		),
		'willow' => array(
			'url' => '%s/images/headers/willow.jpg',
			'thumbnail_url' => '%s/images/headers/willow-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Willow', 'bluecorona2015' )
		),
		'hanoi' => array(
			'url' => '%s/images/headers/hanoi.jpg',
			'thumbnail_url' => '%s/images/headers/hanoi-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Hanoi Plant', 'bluecorona2015' )
		)
	) );
}
endif; // bluecorona2015_setup

if ( ! function_exists( 'bluecorona2015_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @since Bluecorona 2015 1.0
 */
function bluecorona2015_header_style() {
	$text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	if ( $text_color == HEADER_TEXTCOLOR )
		return;

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css" id="bluecorona2015-header-css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $text_color ) :
	?>
		#site-title,
		#site-description {
			position: absolute !important;
			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo $text_color; ?> !important;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // bluecorona2015_header_style

if ( ! function_exists( 'bluecorona2015_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_theme_support('custom-header') in bluecorona2015_setup().
 *
 * @since Bluecorona 2015 1.0
 */
function bluecorona2015_admin_header_style() {
?>
	<style type="text/css" id="bluecorona2015-admin-header-css">
	.appearance_page_custom-header #headimg {
		border: none;
	}
	#headimg h1,
	#desc {
		font-family: "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif;
	}
	#headimg h1 {
		margin: 0;
	}
	#headimg h1 a {
		font-size: 32px;
		line-height: 36px;
		text-decoration: none;
	}
	#desc {
		font-size: 14px;
		line-height: 23px;
		padding: 0 0 3em;
	}
	<?php
		// If the user has set a custom color for the text use that
		if ( get_header_textcolor() != HEADER_TEXTCOLOR ) :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo get_header_textcolor(); ?>;
		}
	<?php endif; ?>
	#headimg img {
		max-width: 1000px;
		height: auto;
		width: 100%;
	}
	</style>
<?php
}
endif; // bluecorona2015_admin_header_style

if ( ! function_exists( 'bluecorona2015_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_theme_support('custom-header') in bluecorona2015_setup().
 *
 * @since Bluecorona 2015 1.0
 */
function bluecorona2015_admin_header_image() { ?>
	<div id="headimg">
		<?php
		$color = get_header_textcolor();
		$image = get_header_image();
		if ( $color && $color != 'blank' )
			$style = ' style="color:#' . $color . '"';
		else
			$style = ' style="display:none"';
		?>
		<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>" tabindex="-1"><?php bloginfo( 'name' ); ?></a></h1>
		<div id="desc" class="displaying-header-text"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="" />
		<?php endif; ?>
	</div>
<?php }
endif; // bluecorona2015_admin_header_image

/**
 * Set the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove
 * the filter and add your own function tied to
 * the excerpt_length filter hook.
 *
 * @since Bluecorona 2015 1.0
 *
 * @param int $length The number of excerpt characters.
 * @return int The filtered number of characters.
 */
function bluecorona2015_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'bluecorona2015_excerpt_length' );

if ( ! function_exists( 'bluecorona2015_continue_reading_link' ) ) :
/**
 * Return a "Continue Reading" link for excerpts
 *
 * @since Bluecorona 2015 1.0
 *
 * @return string The "Continue Reading" HTML link.
 */
function bluecorona2015_continue_reading_link() {
	return ' ';
}
endif; // bluecorona2015_continue_reading_link

/**
 * Replace "[...]" in the Read More link with an ellipsis.
 *
 * The "[...]" is appended to automatically generated excerpts.
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @since Bluecorona 2015 1.0
 *
 * @param string $more The Read More text.
 * @return The filtered Read More text.
 */
function bluecorona2015_auto_excerpt_more( $more ) {
	if ( ! is_admin() ) {
		return ' &hellip;' . bluecorona2015_continue_reading_link();
	}
	return $more;
}
add_filter( 'excerpt_more', 'bluecorona2015_auto_excerpt_more' );

/**
 * Add a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 *
 * @since Bluecorona 2015 1.0
 *
 * @param string $output The "Continue Reading" link.
 * @return string The filtered "Continue Reading" link.
 */
function bluecorona2015_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() && ! is_admin() ) {
		$output .= bluecorona2015_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'bluecorona2015_custom_excerpt_more' );

/**
 * Show a home link for the wp_nav_menu() fallback, wp_page_menu().
 *
 * @since Bluecorona 2015 1.0
 *
 * @param array $args The page menu arguments. @see wp_page_menu()
 * @return array The filtered page menu arguments.
 */
function bluecorona2015_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'bluecorona2015_page_menu_args' );

/**
 * Register sidebars and widgetized areas.
 *
 * Also register the default Epherma widget.
 *
 * @since Bluecorona 2015 1.0
 */
function bluecorona2015_widgets_init() {

	register_widget( 'Bluecorona_2015_Ephemera_Widget' );

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'bluecorona2015' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Showcase Sidebar', 'bluecorona2015' ),
		'id' => 'sidebar-2',
		'description' => __( 'The sidebar for the optional Showcase Template', 'bluecorona2015' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area One', 'bluecorona2015' ),
		'id' => 'sidebar-3',
		'description' => __( 'An optional widget area for your site footer', 'bluecorona2015' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Two', 'bluecorona2015' ),
		'id' => 'sidebar-4',
		'description' => __( 'An optional widget area for your site footer', 'bluecorona2015' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Three', 'bluecorona2015' ),
		'id' => 'sidebar-5',
		'description' => __( 'An optional widget area for your site footer', 'bluecorona2015' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'bluecorona2015_widgets_init' );

if ( ! function_exists( 'bluecorona2015_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable.
 *
 * @since Bluecorona 2015 1.0
 *
 * @param string $html_id The HTML id attribute.
 */
function bluecorona2015_content_nav( $html_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo esc_attr( $html_id ); ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'bluecorona2015' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'bluecorona2015' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'bluecorona2015' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // bluecorona2015_content_nav

/**
 * Return the first link from the post content. If none found, the
 * post permalink is used as a fallback.
 *
 * @since Bluecorona 2015 1.0
 *
 * @uses get_url_in_content() to get the first URL from the post content.
 *
 * @return string The first link.
 */
function bluecorona2015_get_first_url() {
	$content = get_the_content();
	$has_url = function_exists( 'get_url_in_content' ) ? get_url_in_content( $content ) : false;

	if ( ! $has_url )
		$has_url = bluecorona2015_url_grabber();

	/** This filter is documented in wp-includes/link-template.php */
	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Return the URL for the first link found in the post content.
 *
 * @since Bluecorona 2015 1.0
 *
 * @return string|bool URL or false when no link is present.
 */
function bluecorona2015_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;

	return esc_url_raw( $matches[1] );
}

/**
 * Count the number of footer sidebars to enable dynamic classes for the footer.
 *
 * @since Bluecorona 2015 1.0
 */
function bluecorona2015_footer_sidebar_class() {
	$count = 0;

	if ( is_active_sidebar( 'sidebar-3' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-4' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-5' ) )
		$count++;

	$class = '';

	switch ( $count ) {
		case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
	}

	if ( $class )
		echo 'class="' . $class . '"';
}

if ( ! function_exists( 'bluecorona2015_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own bluecorona2015_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Bluecorona 2015 1.0
 *
 * @param object $comment The comment object.
 * @param array  $args    An array of comment arguments. @see get_comment_reply_link()
 * @param int    $depth   The depth of the comment.
 */
function bluecorona2015_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'bluecorona2015' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'bluecorona2015' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'bluecorona2015' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'bluecorona2015' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'bluecorona2015' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'bluecorona2015' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'bluecorona2015' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for bluecorona2015_comment()

if ( ! function_exists( 'bluecorona2015_posted_on' ) ) :
/**
 * Print HTML with meta information for the current post-date/time and author.
 *
 * Create your own bluecorona2015_posted_on to override in a child theme
 *
 * @since Bluecorona 2015 1.0
 */
function bluecorona2015_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'bluecorona2015' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'bluecorona2015' ), get_the_author() ) ),
		get_the_author()
	);
}
endif;

/**
 * Add two classes to the array of body classes.
 *
 * The first is if the site has only had one author with published posts.
 * The second is if a singular post being displayed
 *
 * @since Bluecorona 2015 1.0
 *
 * @param array $classes Existing body classes.
 * @return array The filtered array of body classes.
 */
function bluecorona2015_body_classes( $classes ) {

	if ( function_exists( 'is_multi_author' ) && ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
		$classes[] = 'singular';

	return $classes;
}
add_filter( 'body_class', 'bluecorona2015_body_classes' );

/**
 * Retrieve the IDs for images in a gallery.
 *
 * @uses get_post_galleries() First, if available. Falls back to shortcode parsing,
 *                            then as last option uses a get_posts() call.
 *
 * @since Bluecorona 2015 1.6
 *
 * @return array List of image IDs from the post gallery.
 */
function bluecorona2015_get_gallery_images() {
	$images = array();

	if ( function_exists( 'get_post_galleries' ) ) {
		$galleries = get_post_galleries( get_the_ID(), false );
		if ( isset( $galleries[0]['ids'] ) )
		 	$images = explode( ',', $galleries[0]['ids'] );
	} else {
		$pattern = get_shortcode_regex();
		preg_match( "/$pattern/s", get_the_content(), $match );
		$atts = shortcode_parse_atts( $match[3] );
		if ( isset( $atts['ids'] ) )
			$images = explode( ',', $atts['ids'] );
	}

	if ( ! $images ) {
		$images = get_posts( array(
			'fields'         => 'ids',
			'numberposts'    => 999,
			'order'          => 'ASC',
			'orderby'        => 'menu_order',
			'post_mime_type' => 'image',
			'post_parent'    => get_the_ID(),
			'post_type'      => 'attachment',
		) );
	}

	return $images;
}
include('functions-extend.php');
include('functions-like.php');





function custom_unregister_theme_post_types() {
    global $wp_post_types;
    foreach( array( 'casestudy' ) as $post_type ) {
        if ( isset( $wp_post_types[ $post_type ] ) ) {
            unset( $wp_post_types[ $post_type ] );
        }
    }
}
add_action( 'init', 'custom_unregister_theme_post_types', 20 );

add_action('init', 'cptui_register_my_taxes_casestudy_categories');
function cptui_register_my_taxes_casestudy_categories() {
register_taxonomy( 'casestudy_categories',array (
  0 => 'case-portfolio',
),
array( 'hierarchical' => true,
	'label' => 'Categories',
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'casestudycategories' , 'with_front' => false),
	'show_admin_column' => false,
	'labels' => array (
  'search_items' => 'Category',
  'popular_items' => '',
  'all_items' => '',
  'parent_item' => '',
  'parent_item_colon' => '',
  'edit_item' => '',
  'update_item' => '',
  'add_new_item' => '',
  'new_item_name' => '',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
}


add_action('init', 'cptui_register_my_taxes_project_categories');
function cptui_register_my_taxes_project_categories() {
register_taxonomy( 'project_categories',array (
  0 => 'projects',
),
array( 'hierarchical' => true,
	'label' => 'Categories',
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'projectcategories' , 'with_front' => false),
	'show_admin_column' => false,
	'labels' => array (
  'search_items' => 'Category',
  'popular_items' => '',
  'all_items' => '',
  'parent_item' => '',
  'parent_item_colon' => '',
  'edit_item' => '',
  'update_item' => '',
  'add_new_item' => '',
  'new_item_name' => '',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
}
add_action('init', 'cptui_register_my_taxes_faq');
function cptui_register_my_taxes_faq() {
register_taxonomy( 'faq',array (
  0 => 'faq-post',
),
array( 'hierarchical' => true,
	'label' => 'Faq Categories',
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'faq' , 'with_front' => false),
	'show_admin_column' => false,
	'labels' => array (
  'search_items' => 'Faq Category',
  'popular_items' => '',
  'all_items' => '',
  'parent_item' => '',
  'parent_item_colon' => '',
  'edit_item' => '',
  'update_item' => '',
  'add_new_item' => '',
  'new_item_name' => '',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
}
add_action('init', 'cptui_register_my_taxes_hvac_categories');
function cptui_register_my_taxes_hvac_categories() {
register_taxonomy( 'hvac_categories',array (
  0 => 'hvac',
),
array( 'hierarchical' => true,
	'label' => 'Categories',
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'hvaccategories' , 'with_front' => false),
	'show_admin_column' => false,
	'labels' => array (
  'search_items' => 'Category',
  'popular_items' => '',
  'all_items' => '',
  'parent_item' => '',
  'parent_item_colon' => '',
  'edit_item' => '',
  'update_item' => '',
  'add_new_item' => '',
  'new_item_name' => '',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'project-slider', 161, 161 ); //(scaled)
	add_image_size( 'project-slider-thum', 161, 161, false ); //(scaled)
	add_image_size( 'blog-page', 398, 165, true ); //(scaled)
	add_image_size( 'feture-img', 399, 9999 ); //(scaled)
	add_image_size( 'custom-size', 399, 175, array( 'left', 'right' ) ); // Hard crop left top
	
}
if ( ! function_exists( 'my_pagination' ) ) :
	function my_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'next_text'    => 'Next Page',
			'prev_text'    => 'Previous Page'
    
		) );
	}
endif;

function substr_word( $string, $len = 35 ) {
	if(strlen($string) > $len){
		return substr( ( $str = wordwrap( $string, $len, '$$' ) ), 0, strpos( $str, '$$' ) ).'...';
	}else{
		return $string;
	}
}
//* ability to upload svgs 
 
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
function bluecorona2015_scripts() {
	wp_enqueue_script( 'bluecorona2015-accordion', get_template_directory_uri() . '/js/jquery-ui.tabs.accordion.min.js', array('jquery'), null ,true);
	wp_enqueue_script( 'bluecorona2015-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js', array('jquery'), null,true );
	wp_enqueue_script( 'bluecorona2015-slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null,true );
	wp_enqueue_script( 'bluecorona2015-mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.min.js', array('jquery'), null,true );
	wp_enqueue_script( 'bluecorona2015-isotope', get_template_directory_uri() . '/js/jquery.isotope.js', array('jquery'), null,true );
	wp_enqueue_script( 'bluecorona2015-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), null,true );
	wp_enqueue_script( 'bluecorona2015-selectric', get_template_directory_uri() . '/js/jquery.selectric.min.js', array('jquery'), null ,true);
	wp_enqueue_script( 'bluecorona2015-print', get_template_directory_uri() . '/js/jQuery.print.js', array('jquery'), null ,true);
	wp_enqueue_script( 'pie-chart', get_template_directory_uri() . '/bc-2016/js/pie-chart.js', array('jquery'), null ,true);	
	wp_enqueue_script( 'jquery-asProgress', get_template_directory_uri() . '/bc-2016/js/jquery-asProgress.js', array('jquery'), null ,true);
	wp_enqueue_script( 'pie-chart', get_template_directory_uri() . '/bc-2017/js/pie-chart.js', array('jquery'), null ,true);
	wp_enqueue_script( 'jquery.mousewheel', get_template_directory_uri() . '/bc-2017/js/jquery.mousewheel.js', array('jquery'), null ,true);	
	wp_enqueue_style( 'select-style', get_template_directory_uri() . '/select-style.css', array(), null );
	wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/css/animate.css', array(), null );
	wp_enqueue_style( 'popupwindow-style', get_template_directory_uri() . '/css/popupwindow.css', array(), null );
	wp_enqueue_style( 'mCustomScrollbar-style', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css', array(), null );
	wp_enqueue_style( 'like-style', get_template_directory_uri() . '/css/like-styles.min.css', array(), null );

	
}
add_action( 'wp_enqueue_scripts', 'bluecorona2015_scripts' );

if ( ! function_exists( 'bluecorona2015_search_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable.
 *
 * @since Bluecorona 2015 1.0
 *
 * @param string $html_id The HTML id attribute.
 */
function bluecorona2015_search_nav( $html_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo esc_attr( $html_id ); ?>">
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> See more search results', 'bluecorona2015' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'See newer search results <span class="meta-nav">&rarr;</span>', 'bluecorona2015' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // bluecorona2015_search_nav




function infographic_section() {
$media_s = '<div class="media-container">';
	$header = '<div class="row-m media-header">';
		$header .= '<div class="media-site-title">';
			$header .= '<span>DOES</span>';
			$header .= '<strong>SOCIAL MEDIA <br/>MARKETING</strong>';
			$header .= '<span>MATTER FOR SMALL BUSINESSES?</span>';
	        $header .= '</div>';
	      $header .= '<div class="media-salogan">';
			$header .= 'How consumers actually feel about small businesses on social media.';
	      $header .= '</div>';
	$header .= '</div>';
	
	$media_1 = '<div class="row-m media-section media-section-one">';
		$media_1 .= '<div class="row-m animated-sec">';
			$media_1 .= '<div class="animated-map">';
			
			$media_1 .= '<img src="'.get_template_directory_uri().'/bc-2016/images/animated-map.png">';
			$media_1 .= '</div>';
			$media_1 .= '<div class="animated-text">';
				$media_1 .= '<div class="people-count">';
					$media_1 .= '<strong>50</strong>';
					$media_1 .= '<label>MILLION</label>';
				$media_1 .= '</div>';
				$media_1 .= '<p>There are 50 million small business pages active on <br/> Facebook, and counting. </p>';
			$media_1 .= '</div>';
		$media_1 .= '</div>';
		$media_1 .= '<div class="row-m animated-area animate-lines">';
			$media_1 .= '<div class="dotted-line">';
				$media_1 .= '<div class="divanimate">';
					$media_1 .= '<div class="div1"></div>';
					$media_1 .= '<div class="div2"></div>';
					$media_1 .= '<div class="div3"></div>';
				$media_1 .= '</div>';
			$media_1 .= '</div>';
		$media_1 .= '</div>';
		$media_1 .= '<div class="row-m bottom-sec">';
			$media_1 .= '<div class="sectitle">';
				$media_1 .= '<span class="toppos">Of them, more than</span>';
				$media_1 .= '<strong>2 MILLION</strong>';
				$media_1 .= '<span class="bottompos">small business pages are advertising on Facebook each year.</span>';
			$media_1 .= '</div>';
			$media_1 .= '<p>They’re advertising through boosted posts and Facebook ads. That’s only 4% of small businesses - but the number is growing each year!</p>';
		$media_1 .= '</div>';
		
		
	$media_1 .= '</div>';
	
	$media_2 = '<div class="row-m media-section media-section-two">';
		$media_2 .= '<div class="computer-row row-m">';
			$media_2 .= '<div class="computer-cont">';
				$media_2 .= '<img src="'.get_template_directory_uri().'/bc-2016/images/computer-img.png">';
				$media_2 .= '<div class="computer-overlay">';
					$media_2 .= '<img src="'.get_template_directory_uri().'/bc-2016/images/computerscreen.gif">';
				$media_2 .= '</div>';
			$media_2 .= '</div>';
			$media_2 .= '<div class="comp-refrence">';
				$media_2 .= '<div class="comp-percent">';
					$media_2 .= '<span class="value">30</span>';
					
					$media_2 .= '<span class="unit"><sup>%</sup>of';
						$media_2 .= '<span class="info">CONSUMERS</span>';
					$media_2 .= '</span>';
				$media_2 .= '</div>';
				$media_2 .= '<p>surveyed say they may choose not to purchase from a company that doesn’t have a social media presence.</p>';
			$media_2 .= '</div>';
		$media_2 .= '</div>';
		$media_2 .= '<div class="row-m gender-row">';
			$media_2 .= '<div class="gender-title">Gender could play a role in keeping customers using social media.</div>';
			$media_2 .= '<div class="gender-descp">';
				$media_2 .= '<div class="gender-onehalf">';
					$media_2 .= '<span class="gender-icon"><img src="'.get_template_directory_uri().'/bc-2016/images/gender-icon1.png"></span>';
					$media_2 .= '<p>More than 46% of women <br/>surveyed said that being <br/>active on Facebook is <br/>important when it comes to<br/> keeping them as a customer.</p>';
				$media_2 .= '</div>';
				$media_2 .= '<div class="gender-onehalf">';
					$media_2 .= '<span class="gender-icon"><img src="'.get_template_directory_uri().'/bc-2016/images/gender-icon2.png"></span>';
					$media_2 .= '<p>Compared to women,<br/> only 32% of men felt that<br/> companies need to be<br/> active for them to remain<br/> a customer.</p>';
				$media_2 .= '</div>';
			$media_2 .= '</div>';
		$media_2 .= '</div>';
	$media_2 .= '</div>';
	
	$media_3 = '<div class="row-m media-section media-section-three">';
		$media_3 .= '<div class="md-title">';
			$media_3 .= 'On average, <span>39%</span> of those surveyed prefer <br/>businesses who regularly post to their Facebook profiles.';
		$media_3 .= '</div>';
		
		$media_3 .= '<div class="average-container">';
			if(have_rows('add_pie_chart', 13796)):
			  $c=1; 
				while(have_rows('add_pie_chart', 13796)): the_row();
					$media_3 .= '<div id="demo-pie-'.$c.'" class="pie-title-center" data-percent="'.get_sub_field('data_percent', 13796).'">';
					$media_3 .= '<span class="value"><label>AGES</label>'.get_sub_field('ages', 13796).'</span>';
					$media_3 .= '<span class="pie-value">Deve</span> </div>';
				$c++;
				endwhile;
			endif;
		$media_3 .= '</div>';
		
	$media_3 .= '</div>';
	
	$media_4 = '<div class="row-m media-section media-section-four">';
		$media_4 .= '<div class="md-title">SOCIAL MEDIA AND REVIEWS</div>';
		$media_4 .= '<div class="md-subtitle">(Hover over each phone to learn more)</div>';
		$media_4 .= '<div class="review-container">';
		
			$media_4 .= '<div class="review-onehalf">';
				$media_4 .= '<div class="iphone"></div>';
				$media_4 .= '<div class="iphone-cont">';
				     $media_4 .= '<div class="iphone-inner">';
				         $media_4 .= '<div class="slide-cont">';
						$media_4 .= '<img src="'.get_template_directory_uri().'/bc-2016/images/reviews-mobile.png" class="view-img">';
						$media_4 .= '<img src="'.get_template_directory_uri().'/bc-2016/images/view-cont1-hv.png" class="hv-img">';
					  $media_4 .= '</div>';
				     $media_4 .= '</div>';
				     
				$media_4 .= '</div>';
			$media_4 .= '</div>';
			$media_4 .= '<div class="review-onehalf">';
				$media_4 .= '<div class="iphone"></div>';
				$media_4 .= '<div class="iphone-cont">';
				     $media_4 .= '<div class="iphone-inner">';
				         $media_4 .= '<div class="slide-cont">';
						$media_4 .= '<img src="'.get_template_directory_uri().'/bc-2016/images/social-mobile.png" class="view-img">';
						$media_4 .= '<img src="'.get_template_directory_uri().'/bc-2016/images/view-cont2-hv.png" class="hv-img">';
					  $media_4 .= '</div>';
				     $media_4 .= '</div>';
				     
				$media_4 .= '</div>';
			$media_4 .= '</div>';
			
		$media_4 .= '</div>';
		
	$media_4 .= '</div>';
	
	$media_5 = '<div class="row-m media-section media-section-five">';
	
	$media_5 .= '<div class="animatedblock">';
		$media_5 .= '<div class="market-image">';
			$media_5 .= '<img src="'.get_template_directory_uri().'/bc-2016/images/market-img.png">';
		$media_5 .= '</div>';
		$media_5 .= '<div class="market-info">';
			$media_5 .= '<div class="md-subtitle">more than</div>';
			$media_5 .= '<div class="md-title">92%</div>';
			$media_5 .= '<p>of small businesses think that social media is important to the success of their business.</p>';
		$media_5 .= '</div>';
	$media_5 .= '</div>';
		
	$media_5 .= '</div>';
	
	$media_6 = '<div class="row-m media-section media-section-six">';
		$media_6 .= '<div class="md-title">COMMON CHALLENGES IN<br/>SOCIAL MEDIA MARKETING</div>';
		$media_6 .= '<div class="show">';
		$media_6 .= '<div class="progress-bar progress-green">';
			$media_6 .= '<label>60% of marketers say they have a hard time<br/><span class="green-color"> MEASURING ROI</span> when it comes to social media.</label>';
				$media_6 .= '<div class="progress" role="progressbar" data-goal="60">';
				$media_6 .= '<div class="progress__bar" style="width: 60%"><span class="progress__label"></span></div>';
			$media_6 .= '</div>';
		$media_6 .= '</div>';
		
		$media_6 .= '<div class="progress-bar progress-orange">';
			$media_6 .= '<label>50% said they struggle to accurately tie <span class="orange-color">SOCIAL<br/> MEDIA ACTIVITIES</span> to <span class="orange-color">BUSINESS OUTCOMES.</span></label>';
			$media_6 .= '<div class="progress" role="progressbar" data-goal="50">';
				$media_6 .= '<div class="progress__bar" style="width: 50%"><span class="progress__label"></span></div>';
			$media_6 .= '</div>';
		$media_6 .= '</div>';
		
		$media_6 .= '<div class="progress-bar progress-pink">';
			$media_6 .= '<label>48% admitted that they have difficulty developing a<br/> <span class="pink-color">SOCIAL MEDIA STRATEGY</span> in the first place.</label>';
			
			$media_6 .= '<div class="progress" role="progressbar" data-goal="48">';
				$media_6 .= '<div class="progress__bar" style="width: 48%"><span class="progress__label"></span></div>';
			$media_6 .= '</div>';
		$media_6 .= '</div>';
		$media_6 .= '</div>';
		$media_6 .= '<button id="button_start">start()</button>';
		
	$media_6 .= '</div>';
	
	$media_7 = '<div class="row-m media-section media-section-seven">';
		$media_7 .= '<div class="questions-sec">';
			$media_7 .= '<div class="md-title">DO YOU FACE SIMILAR CHALLENGES</div>';
			$media_7 .= '<div class="salogan">IN MANAGING YOUR OWN SOCIAL MEDIA MARKETING?</div>';
			$media_7 .= '<div class="md-subtitle">(Click each answer to learn more)</div>';
		$media_7 .= '</div>';
		$media_7 .= '<div class="challenge-info">';
			$media_7 .= '<ul class="tabs-menu">';
				$media_7 .= '<li class="current"><a href="#yes">Yes</a></li>';
				$media_7 .= '<li><a href="#no">No</a></li>';
			$media_7 .= '</ul>';
			$media_7 .= '<div class="challenge-data">';
				$media_7 .= '<div id="yes" class="challenge-view" style="display: block;">';
					$media_7 .= 'Don’t worry, we can help! Click here to request a free social media analysis for your company so we can figure out where your social media channels are right now and how to get them where they need to be.';
					$media_7 .= '<a href="#" class="getanalysis-btn">GET FREE ANALYSIS</a>';
				$media_7 .= '</div>';
				$media_7 .= '<div id="no" class="challenge-view">';
					$media_7 .= 'Good for you! If you’re interested in a free social media analysis (where we help you figure out what’s working and what isn’t in terms of your social media strategy), click here!';
					$media_7 .= '<a href="#" class="getanalysis-btn">GET FREE ANALYSIS</a>';
				$media_7 .= '</div>';
			$media_7 .= '</div>';
		$media_7 .= '</div>';
		
	$media_7 .= '</div>';
	
	$footer = '<div class="row-m media-footer">';
		$footer .= '<div class="mediaft-logo">';
			$footer .= '<a href="#"><img src="'.get_template_directory_uri().'/bc-2016/images/Blue Corona Logo_Tagline_300dpi.jpg"></a>';
		$footer .= '</div>';
		$footer .= '<ul class="media-continfo">';
			$footer .= '<li>bluecorona.com </li>  | <li>  (800)-696-4690</li>';
		$footer .= '</ul>';
	$footer .= '</div>';
	
	
	$footer .= '<div class="row-m view-project-source">';
			$footer .= '<a href="javascript:void(0)" class="toggle-link">VIEW PROJECT SOURCES <span>+</span></a>';
			$footer .= '<ul class="toggle-list" style="display:none;">';
				$footer .= '<li><a href="http://www.adweek.com/socialtimes/50-million-small-businesses-pages-new-communications-tools/631156">50 Million Small Businesses Using Facebook Pages; New Communication Tools Launched</a> - Social Times</li>';
				$footer .= '<li><a href="https://www.facebook.com/business/news/two-million-advertisers">Two Million Active Advertisers on Facebook </a> – Facebook Business</li>';
				$footer .= '<li><a href="https://business.timewarnercable.com/resource-center/news/national-small-business-week-survey-press-release-twcbc-2016.html"> National Small Business Week Survey Results Announced</a> – Time Warner Cable Business Class</li>';
				$footer .= '<li><a href="https://www.zendesk.com/resources/why-companies-should-invest-in-the-customer-experience/">Why Companies Should Invest in the Customer Experience</a> – ZenDesk</li>';
				$footer .= '<li><a href="http://www.socialmediaexaminer.com/social-media-marketing-trends-for-small-business/">12 Social Media Marketing Trends for Small Business</a> – Social Media Examiner</li>';
				$footer .= '<li><a href="http://simplymeasured.com/blog/60-of-marketers-say-measuring-roi-is-top-challenge-in-trustradius-survey/#sm.0000iaapbupoxefupda28cffhnks9">60% of Social Marketers Say Measuring ROI Is a Top Challenge in TrustRadius Survey</a> – Simply Measured</li>';
			$footer .= '</ul>';
	$footer .= '</div>';
	
	
$media_e .= '</div>';
$variable= $media_s.$header.$media_1.$media_2.$media_3.$media_4.$media_5.$media_6.$media_7.$footer.$media_e;
return $variable;
}
add_shortcode( 'infographic', 'infographic_section' );
function infographic_code() {
$media_s = '<div class="mobile-container">';

	$header = '<div class="rowdiv mobile-header text-center">';
		$header .= '<div class="title-main">mobile site design</div>';
		$header .= '<div class="sub-title-main">what you need to know</div>';
	$header .= '</div>';

	$media_1 = '<div class="rowdiv section-1">';
		$media_1 .= '<div class="title-main">be there</div>';
		$media_1 .= '<div class="sec1-part">';
		$media_1 .= '<div class="lft-part"><img src="'.get_template_directory_uri().'/bc-2017/images/animation1.gif"></div>';
		$media_1 .= '<div class="rght-part">';
		$media_1 .= '<p>Studies have shown that <strong>you <br>can increase brand awareness</strong> <br>by 6.9 percentage points—or<br>';
		$media_1 .= '<span>BY 46%</span><br>—simply <strong>by showing up in mobile<br> search ad results</strong></p>';
		$media_1 .= '</div>';
		$media_1 .= '</div>';
		
	$media_11 .= '</div>';

	$media_2 = '<div class="rowdiv section-2">';
		$media_2 .= '<div class="sec2-part">';
		$media_2 .= '<div class="lft-part"><p><span>“Near me” searches</span><br>have <span><span>grown</span> 2X</span> in the past year</p></div>';
		$media_2 .= '<div class="rght-part">';
		$media_2 .= '<img src="'.get_template_directory_uri().'/bc-2017/images/map.png">';
		$media_2 .= '<div class="container-pin">';
       $media_2 .= '<div class="marker"></div>';
       $media_2 .= '<div class="pulse"></div>';	
		$media_2 .= '</div>';
		$media_2 .= '</div>';
		$media_2 .= '</div>';
		
	$media_2 .= '</div>';

	$media_3 = '<div class="rowdiv section-3">';
		$media_3 .= '<div class="sec3-part">';
		$media_3 .= '<div class="lft-part" id="hnd-move"><img src="'.get_template_directory_uri().'/bc-2017/images/hand-phone.png"></div>';
		$media_3 .= '<div class="rght-part">';
		$media_3 .= '<p>When people use mobile search <br>to help make a decision, they are<br>';
		$media_3 .= '<span>40% <span>more likely </span></span><br>to make a phone call</p>';
		$media_3 .= '</div>';
		$media_3 .= '</div>';
		
	$media_3 .= '</div>';

	$media_4 = '<div class="rowdiv section-4">';
	$media_4 .= '<div class="inner-part-sec">';
		$media_4 .= '<div class="title-main">be useful</div>';
			$media_4 .= '<div id="dotss" class="dotstyle dotstyle-fillup">';
				$media_4 .= '<ul>';
                    $media_4 .= '<li class="nav1"><img src="'.get_template_directory_uri().'/bc-2017/images/phone-active-1.png"></li>';
                    $media_4 .= '<li class="nav2"><img src="'.get_template_directory_uri().'/bc-2017/images/phone-img-2.png"></li>';
                    $media_4 .= '<li class="nav3"><img src="'.get_template_directory_uri().'/bc-2017/images/phone-img-3.png"></li>';
                $media_4 .= '</ul>';
			$media_4 .= '</div>';
					$media_4 .= '<div class="sec4-part">';
						$media_4 .= '<div class="sec4-first time-gap1" id="timeline-1">';
						$media_4 .= '<div class="lft-part"><img src="'.get_template_directory_uri().'/bc-2017/images/mob-icon1.png"></div>';
							$media_4 .= '<div class="rght-part">';
								$media_4 .= '<p><span><span>1 in 3 </span>smartphone users</span> <br>have purchased from a company or brand other than the one they intended to<strong> because of information provided in the moment they needed it</strong></p>';
							$media_4 .= '</div>';
						$media_4 .= '</div>';
			
					$media_4 .= '</div>';
				$media_4 .= '</div>';
				$media_4 .= '</div>';

	$media_5 = '<div class="rowdiv section-5">';
		$media_5 .= '<div class="sec5-part">';
		$media_5 .= '<div class="lft-part"><p><span><span>69%</span> of online consumers</span>';
			$media_5 .= 'agree that the quality, timing, or relevance of a company’s message influences their perception of a brand</p></div>';
		$media_5 .= '<div class="rght-part">';
		$media_5 .= '<img src="'.get_template_directory_uri().'/bc-2017/images/animation2.gif">';
		$media_5 .= '</div>';
		$media_5 .= '</div>';
	$media_5 .= '</div>';

	$media_6 = '<div class="rowdiv  section-6">';
		$media_6 .= '<div class="mid-title text-center">how it works makes a difference</div>';
		$media_6 .= '<div class="average-container">';
		$media_6 .= '<div class="third">';
		$media_6 .= '<div class="fix-s">';
			$media_6 .= '<div id="demo-pie-1" class="pie-title-center" data-percent="79"><span class="value">of PEOPLE</span>';
			$media_6 .= '<span class="pie-value"></span> ';
			$media_6 .= '</div>';
			$media_6 .= '</div>';
			$media_6 .= '<p><span>who don&apos;t like what they find</span> on one site will go back and <span>search for another site</span></p>';
		$media_6 .= '</div>';
			$media_6 .= '<div class="third">';
			$media_6 .= '<div class="fix-s">';
			$media_6 .= '<div id="demo-pie-2" class="pie-title-center" data-percent="48"> <span class="value">of users</span><span class="pie-value"></span>';
			$media_6 .= '</div>';
			$media_6 .= '</div>';
			$media_6 .= '<p>said that <span>if a site didn&apos;t work well on their smartphones,</span> it made them feel like <span>the company didn&apos;t care</span> about their business</p>';
			$media_6 .= '</div>';
			$media_6 .= '<div class="third">';
			$media_6 .= '<div class="fix-s">';
				$media_6 .= '<div id="demo-pie-3" class="pie-title-center" data-percent="52"><span class="value">of users</span> <span class="pie-value"></span>';
				$media_6 .= '</div>';
			$media_6 .= '</div>';
				$media_6 .= '<p>said that <span>a bad mobile experience</span> made them <span>less likely to engage</span> with a company</p>';
			$media_6 .= '</div>';
		$media_6 .= '</div>';
	$media_6 .= '</div>';
	
	$media_7 = '<div class="rowdiv section-7">';
		$media_7 .= '<div class="title-main">be quick</div>';
		$media_7 .= '<div class="sec7-part">';
		$media_7 .= '<div class="lft-part"><img src="'.get_template_directory_uri().'/bc-2017/images/animation3.gif"></div>';
		$media_7 .= '<div class="rght-part">';
		$media_7 .= '<div class="rght-11"><p><span><span>91%</span> prioritize need and speed</span><br>';
			$media_7 .= 'Only 9% of users will stay on a mobile site or app if it doesn’t satisfy their needs (i.e. to find information or navigate quickly).</p></div>';
					$media_7 .= '<div class="rght-12"><p><span><span>61%</span> don’t hesitate to move on</span><br>';
			$media_7 .= 'Users said that if they didn&apos;t find what they were looking for right away on a mobile site, they&apos;d quickly move on to another site.</p></div>';
					$media_7 .= '<div class="rght-13"><p><span><span>50%</span> demand mobile-friendly </span>';
			$media_7 .= 'People said that even if they like a business, they will use them less often if the website isn&apos;t mobile-friendly.</p></div>';
		$media_7 .= '</div>';
		$media_7 .= '</div>';
	$media_7 .= '</div>';

	$footer = '<div class="rowdiv media-footer">';
		$footer .= '<div class="mediaft-logo">';
			$footer .= '<a href="#"><img src="'.get_template_directory_uri().'/bc-2017/images/Blue Corona Logo_Tagline_300dpi.jpg"></a>';
		$footer .= '</div>';
		$footer .= '<ul class="media-continfo">';
			$footer .= '<li>bluecorona.com </li>  | <li>  800-696-4690</li>';
		$footer .= '</ul>';
	$footer .= '</div>';
	$footer .= '<div class="rowdiv view-project-source">';
		$footer .= '<a href="javascript:void(0)" class="toggle-link">VIEW PROJECT SOURCES <span>+</span></a>';
			$footer .= '<ul class="toggle-list" style="display:none;">';
				$footer .= '<li><a href="http://wwwimages.adobe.com/content/dam/Adobe/en/max/2015/pdfs/state-of-content-oct.pdf">50 State of Content</a> - Adobe</li>';
				$footer .= '<li><a href="https://www.thinkwithgoogle.com/intl/en-gb/research-studies/what-users-want-most-from-mobile-sites-today.html">What users Want Most from Mobile Sites Today </a> – Google </li>';
				$footer .= '<li><a href="https://www.thinkwithgoogle.com/marketing-resources/micro-moments/micromoments-guide-pdf-download/"> Your Guide to Winning the Shift to Mobile</a> – Google</li>';
			$footer .= '</ul>';
	$footer .= '</div>';
$media_e = '</div>';
$mobile_con ='</div>';
$variable= $media_s.$header.$media_1.$media_2.$media_3.$media_4.$media_5.$media_6.$media_7.$footer.$media_e.$mobile_con;
return $variable;
}
add_shortcode( 'mobile_site_design', 'infographic_code' );



// Defer Javascripts
// Defer jQuery Parsing using the HTML5 defer property
if (!(is_admin() )) {
    function defer_parsing_of_js ( $url ) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        // return "$url' defer ";
        return "$url' defer onload='";
    }
    add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}
if ( function_exists( 'add_image_size' ) ) { 
 add_image_size( 'post-size', 343, 426, true ); //(scaled)

}
if ( function_exists( 'add_image_size' ) ) { 
add_image_size( 'old-post-size', 321, 194, true );

}
function posts_orderby_lastname ($orderby_statement) 
{
  $orderby_statement = "RIGHT(post_title, LOCATE(' ', REVERSE(post_title)) - 1) ASC";
    return $orderby_statement;
}


add_shortcode( 'add_form', 'rmcc_post_listing_shortcode1' );
function rmcc_post_listing_shortcode1( $atts ) {
    ob_start(); ?>
	<style>
.alert.warning {
    display: none;
}
.alert.warning.validation-warning {
    display: block;
}
</style>
<div class="steps-main">
<div class="step-form-main">
<form name="RegForm" onsubmit="return GEEKFORGEEKS()">
<div class="gform_body">
<ul class="gform_fields">
<li class="gfield multisteps-graphic"><span>LET’S TALK</span></li>
<li class="gfield multisteps-txts">Enter your website below to get started</li>
<li class="gfield margin-22"><label class="gfield_label">http://www.<span class="gfield_required">*</span></label>
<div class="alert warning"> Please Enter Website  </div>
<div class="ginput_container ginput_container_text">
<input name="input_3" id="input-url" type="text" value="" tabindex="49" required></div>
</li>
</ul>
<div class="step-btn">
<div class="button">Go</div>
</div>
</div>
</form>
</div>
<div class="gravity-multisteps"><div class="close-form"><i class="fa fa-close"></i></div>
<?php echo do_shortcode('[gravityform id=96 title=false description=false ajax=true tabindex=49]'); ?>
</div>
</div>

    <?php $myvariable = ob_get_clean();
    return $myvariable; 
}

$footer_id = 19026;

// Adding micro data schema attributes to main menu elements
function um_schema_filter( $nav_menu , $args ){
  if( isset( $args->uber_integration_type ) ){
     $nav_menu = str_replace( 
       array('<nav ','<li ', '<span '),
       array('<nav role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" ','<li itemprop="hasPart" itemscope itemtype="http://schema.org/SiteNavigationElement" ', '<span itemprop="name" '),
       $nav_menu
     );
  }
  return $nav_menu;
}
add_filter( 'wp_nav_menu' , 'um_schema_filter' , 20 , 2 );

function add_menu_attributes( $atts, $item, $args ) {
  $atts['itemprop'] = 'url';
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_attributes', 10, 3 );

function change_phone_anchor_responsive ( $content ) {
	$replace = array('555-555-5555' => '<a href="tel:5555555555">555-555-5555</a>',
	'(555) 555-5555' => '<a href="tel:5555555555">(555) 555-5555</a>',
'555.555.5555' => '<a href="tel:5555555555">555.555.5555</a>');
    if ( wonderplugin_is_device('iPhone,android') ) {
		$content = str_replace(array_keys($replace), $replace, $content);
        return $content;
    }
	return $content;
}
add_filter( 'the_content', 'change_phone_anchor_responsive');