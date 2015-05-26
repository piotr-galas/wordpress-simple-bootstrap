<!doctype html>  

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>

	<div id="content-wrapper">

		<header>
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
		  
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-responsive-collapse">
		    				<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" title="<?php bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</div>

					<div id="navbar-responsive-collapse" class="collapse navbar-collapse">
						<?php
						    simple_bootstrap_display_main_menu();
						?>

					</div>

				</div>
			</nav>
		</header>
		
		<div id="page-content">
			<div class="container">
