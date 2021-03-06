<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48087704-1', 'twoluckycats.com');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<div id="header_icons">
<ul>
<li><a href="http://www.facebook.com/twoluckycats"><img src="/../wp-content/uploads/2013/01/facebook.png" alt="facebook" width="36" height="36" /></a></li>
<li><a href="http://pinterest.com/twoluckycats/"><img src="/../wp-content/uploads/2013/01/pintererst.png" alt="pinterest" width="36" height="36" /></a></li>
<li><a href="http://twitter.com/twoluckycats"><img src="/../wp-content/uploads/2013/01/twitter.png" alt="twitter" width="36" height="36" /></a></li>
<li><a href="http://www.twoluckycats.com/feed/"><img src="/../wp-content/uploads/2013/01/rss.png" alt="rss" width="36" height="36" /></a></li>
<li><a href="http://plus.google.com/101435613480149768749"><img src="/../wp-content/uploads/2013/01/google+.png" alt="google+" width="36" height="36" /></a></li>
<li><a href="http://www.flickr.com/photos/63774483@N07/"><img src="/../wp-content/uploads/2013/01/flickr.png" alt="flickr" width="36" height="36" /></a></li>
<li><a href="http://www.youtube.com/user/twoluckycatsdesigns"><img src="/../wp-content/uploads/2013/01/youtube.png" alt="youtube" width="36" height="36" /></a></li></ul></div>
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="site-title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>

<div id="access" role="navigation">
			  <?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->

			<?php 
				if (is_front_page()) {
				    echo get_royalslider(2);
				} else { ?>
				<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
				<?php } ?>
	
				
			</div><!-- #branding -->

		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">