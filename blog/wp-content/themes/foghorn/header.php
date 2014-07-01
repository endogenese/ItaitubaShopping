<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Foghorn
 * @since Foghorn 0.1
 */
?><!DOCTYPE html>
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'foghorn' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
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

		<!-- Le styles -->
	    <link href="/css/bootstrap.css" rel="stylesheet">

		<link href="/css/template.css" rel="stylesheet">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->


</head>

<body> <?php /*<?php body_class(); ?>>

	
<div id="page" class="hfeed">
	<header id="branding" role="banner" class="clearfix">
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php if ( of_get_option('logo', false) ) { ?>
					<img src="<?php echo of_get_option('logo'); ?>" alt="<?php bloginfo( 'name' ) ?>" />
				<?php } else {
					bloginfo( 'name' );
				}?>
				</a></span></h1>
                <?php if ( of_get_option('tagline',false) ) { ?>
					<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
                <?php } ?>
			</hgroup>

			<nav id="access" role="navigation">
				<h1 class="section-heading"><?php _e( 'Main menu', 'foghorn' ); ?></h1>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. * ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'foghorn' ); ?>"><?php _e( 'Skip to content', 'foghorn' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. *?>
				<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->
	*/?>

	<div class="container">

			<div class="row" id="menu">

				<div class="col-md-12">
					<nav class="navbar navbar-default" role="navigation">

						<!-- menu justificado -->
						<div id="menu_justificado" class="container-fluid hidden-xs">
					        <ul class="nav navbar-nav ">
						        <li><a href="/"><strong>HOME</strong></a></li>
						        <li><a href="/lojas/"><strong>LOJAS</strong></a></li>
						        <li><a href="/cinema.html"><strong>CINEMA</strong></a></li>
						        <li class="active"><a href="/blog"><strong>NOVIDADES</strong></a></li>
						        <li><a href="/quem_somos.html"><strong>QUEM SOMOS</strong></a></li>
					        </ul>
						</div>

						<!-- menu moblie -->
						<div class="container-fluid visible-xs">

							<div class="navbar-header">		        

				        		<!-- Menu responsivo-->
				        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						            <span class="sr-only">Toggle navigation</span>
						            <span class="icon-bar"></span>
						        	<span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						        </button>
								
								<!-- Esse brand será exibido na versão para phone -->
								<a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#">Itaituba Shopping</a>
							</div><!--/.navbar-header -->

							<div class="collapse navbar-collapse">
						        <ul class="nav navbar-nav ">
							        <li><a href="/"><strong>HOME</strong></a></li>
							        <li><a href="/lojas/"><strong>LOJAS</strong></a></li>
							        <li><a href="/cinema.html"><strong>CINEMA</strong></a></li>
							        <li class="active"><a href="/blog"><strong>NOVIDADES</strong></a></li>
							        <li><a href="/quem_somos.html"><strong>QUEM SOMOS</strong></a></li>
						        </ul>
						    </div><!--/.nav-collapse -->			
						
						</div><!---/.container-fluid-->
					</nav>
				</div>

			</div><!--/#menu-->

			<div class="row">

				<div class="col-md-12">
					<img class="banner_page" src="http://placehold.it/1138x300" alt="...">
					<!--  -->


				</div>

			</div><!--/#BANNER_NOVIDADES-->


	<div id="main" class="clearfix">