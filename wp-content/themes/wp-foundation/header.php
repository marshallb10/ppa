<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('', true, 'right'); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


    <script type='text/javascript' src='http://localhost/ppa/wp-content/themes/wp-foundation/javascripts/jquery.min.js '></script>

				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

		<!-- bring in theme options styles -->
		<?php


		$suppress_comments_message = of_get_option('suppress_comments_message');
		if ($suppress_comments_message){
			$theme_options_styles .= '
			#main article {
				border-bottom: none;
			}';
		}

		if($theme_options_styles){
			echo '<style>'
			. $theme_options_styles . '
			</style>';
		}
		
		?>
				
	</head>
	
	<body <?php body_class(); ?>>

		<div class="row container">
			<div class="twelve columns header">
				<header role="banner" id="top-header">

					<div class="four columns siteinfo">
						<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ppa-logo.gif" /></a>
					</div>

          <?php
          $header_dynamic_image = get_post_meta($post->ID, "header-image", true);
          $header_dynamic_quote = get_post_meta($post->ID, "header-quote", true);
          $header_dynamic_quote_source = get_post_meta($post->ID, "header-quote-source", true);
          if ($header_dynamic_image) {
            echo '<div class="eight columns header-image">';
            echo '<img src="'. $header_dynamic_image . '" />';
            echo '</div>';
          }
          else if ($header_dynamic_quote || $header_dynamic_quote_source) {
            echo '<div class="eight columns callout">';
            if ($header_dynamic_quote) {
              echo '<p class="head">' . $header_dynamic_quote . '</p>';
            }
            if ($header_dynamic_quote_source) {
              echo '<p class="sub-text">' . $header_dynamic_quote_source . '</p>';
            }
            echo '</div>';
          } else { ?>
          <div class="eight columns callout">
            <p class="head">The bottom line is that insurance companies make money when they don't pay claims.</p>
            <p class="sub-text">--Senior Executor, National Association of Insurance Commissioners</p>
          </div>
          <?php
          }
          ?>
				</header> <!-- end header -->
      </div>
      <hr />

      <div class="twelve columns mini-menu">
        <div class="show-for-small menu-action">
          <a href="#sidebar" id="mobile-nav-button" class="sidebar-button small secondary button">
            <svg xml:space="preserve" enable-background="new 0 0 48 48" viewBox="0 0 48 48" height="18px" width="18px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1">
              <line y2="8.907" x2="48" y1="8.907" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
              <line y2="24.173" x2="48" y1="24.173" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
              <line y2="39.439" x2="48" y1="39.439" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
              Menu
            </svg>
          </a>
        </div>
        <?php bones_mobile_nav(); ?>
      </div>


      <div class="twelve columns main-nav">
        <?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
			</div>
