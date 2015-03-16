<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php bloginfo('name') ?> <?php echo wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,600' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
  <link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png-114x114.png">

  <?php wp_head(); ?>

</head>
<body>

<!--Header-->
  <div class="band">
	  <header class="container main">

		  <!--Header Include-->
		  <!--<?php include_once 'includes/header.php' ?>-->
				<div class="row">

					<div class="one-third column">
						<a href="index.php"><img class="u-max-full-width logo" src="<?php echo get_template_directory_uri(); ?>/images/logo_header.png" alt="Ryan France" /></a>
					</div>

					<div class="two-thirds column">
						<h1 class="name"><a href="">Ryan France</a></h1>
						<h6 class="u-pull-right quote">When life gives you lemonade - make lemons&semi; life will be all like whaaaaat?!</h6>
					</div>
					
				</div>

	  </header><!--end container-->
  </div><!--end band-->

  <!--Navigation-->
  <div class="band navigation">
	  <nav class="container main">

		  <!--Navigation Include-->
		  <!--<?php include_once 'includes/nav_bar.php' ?>-->

		  <div class="row">

		  	<div class="twelve columns">

		  		<ul class="u-full-width">
		  			<li><a href="#">Home</a></li>
		  			<li><a href="#">Me...</a></li>
		  			<li><a href="#">Portfolio</a></li>
		  			<li><a href="#">Ramblings</a></li>
		  		</ul>

		  	</div>
		  
		  </div>

	  </nav><!--end container-->
  </div><!--end band-->