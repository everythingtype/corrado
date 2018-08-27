<!doctype html>
<html>
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-180.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-167.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-152.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-120.png" />
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-120.png" />
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon.svg" color="black">
	<meta name="application-name" content="<?php bloginfo( 'name' ); ?>"/>
	<meta name="msapplication-TileColor" content="#000000"/>
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-180.png"/>

	<?php wp_head(); ?>

</head>

<?php
	$color = 'white';
	if ( is_page_template('page-services.php') ) $color = 'black';
	if ( is_page_template('page-whywork.php') ) $color = 'black';
	if ( is_subpage_of('advisors') ) $color = 'gray';
//	$color = 'black';

	$lightboxcolor = 'whitelightbox';
	if ( is_page_template('page-advisors.php') ) $lightboxcolor = 'graylightbox';

?>

<body class="<?php echo $color; ?> <?php echo $lightboxcolor; ?>">

<header>
	<div class="inner visible">

		<div class="adminspacer"></div>
		<div class="alittlebitofpadding"></div>

		<a href="/" class="logo topstyle">
			<span class="wordmark graphic"><?php echo get_template_part('images/corrado-wordmark'); ?></span>
			<span class="stacked graphic"><?php echo get_template_part('images/corrado-stacked'); ?></span>
			<span class="monogram graphic"><?php echo get_template_part('images/corrado-monogram'); ?></span>
		</a>

		<ul class="controls">
			<li class="contactbutton hidden"><a href="/contact-us/">Contact Us</a></li>
			<li class="menubutton">
				<button>
					<span class="hamburger"><?php echo get_template_part('images/hamburger'); ?></span>
					<span class="screen-reader-text">Menu</span>
				</button>
			</li>
		</ul>

	</div>
</header>

<div class="scrollingcontent">
<div class="pagebodywrap">
<div class="pagebody">

	<div class="headerspacer"></div>
