<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Include Saras style cheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">
		<!-- jQuery CDN -->
		<script src="http://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script>

		<!-- Include Saras JavaScripts -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>

		<!-- Section snap plugin // https://github.com/rkuhl/sectionsnap -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/sectionsnap.js" type="text/javascript"></script>

		 <!-- Compiled and minified CSS -->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		

		

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

		<div class="grid-x frontpart" id="topdiv">

				<div id="mobilediv" class="hide-on-large-only">
		

							<!-- Mobil meny -->
							<ul id="slide-out" class="side-nav">
								<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
								<li><a href="#!">Second Link</a></li>
								
								<li><div class="divider"></div></li>
								<li><a class="subheader">Subheader</a></li>
								<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
							</ul>

							<a href="#" data-activates="slide-out" class="whitetext button-collapse"><i class="hide-on-hide-on-large-only small material-icons">menu</i></a>
							<a href="#" class="whitetext brand-logo mobile-logo hide-on-med-only">THE RAW MAN</a>
							<a href="index.php" class="whitetext brand-logo show-on-medium hide-on-small-only medlogo">THE RAW MAN</a>
				</div>

				
				<div class="navbar-fixed hide-on-med-and-down">
				<!-- Dropdown Structure -->
					<ul id="mainmenu" class="dropdown-content">
					<li><a href="#!">The Raw Man Intensive</a></li>
					<li><a href="#!">Raw Tantra</a></li> 
					</ul>
					<nav>
					<div class="nav-wrapper">
						<a href="index.php" class="brand-logo">THE RAW MAN</a>
						<ul class="right hide-on-med-and-down">
						<li><a class="dropdown-button" href="#!" data-activates="mainmenu">Kurser</a></li>
						<li><a href="single.php">Kalender</a></li>
						<li><a href="sass.html">Kontakt</a></li>
						<!-- Dropdown Trigger -->
						</ul>
					</div>
					</nav>
				</div>

				<!-- Mobile Menu -->
				
		



					
					
				<div id="topdivimage-wrapper" class="cell">
					<img id="topdivimage" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiger-front.jpg">
				</div>
			</div>
		</div>


	
	 	
				