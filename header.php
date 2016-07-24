<? global $wf; ?>
<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <? get_template_part('parts/meta', 'favicons') ?>

		<?php wp_head(); ?>
		<title><?php wp_title(''); ?></title>
	</head>

	<body <?php body_class(); ?>>
		<div id="container">
			<header class="header site-header js-site-header" role="banner">
				<div class="header-main">
					<div class="inner">
						<div class="logo" class="h1">
							<a href="<?php echo home_url(); ?>">
								<?= $wf->theme_image("logo.png", "library/images")->resize("w=500"); ?>
							</a>
						</div>

            <nav role="navigation">
              <?php bones_main_nav(); ?>
            </nav>

            <a class="mobile-nav-icon js-mobile-nav-icon" href="#">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
					</div>
				</div>

        <nav class="mobile-nav-menu js-mobile-nav-menu">
          <?php bones_main_nav(); ?>
        </nav>
			</header>
