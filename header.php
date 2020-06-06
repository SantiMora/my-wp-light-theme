<!DOCTYPE html> 
<html <?php language_attributes();?>> 
<head>
	<meta charset="<?php bloginfo( 'charset' );?>"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 

	<?php wp_head();?> 

</head>
<body <?php body_class();?>>

	<?php wp_body_open();?>

	<div id="site-top"></div>

	<header id="site-header">
		
		<nav class="toolbar">

			<?php if (has_custom_logo()) {
				the_custom_logo();
			} ?>

			<a class="home-link" href="<?=home_url()?>">
				<?=bloginfo("name");?>
			</a>
			  	
			<div class="expand-secondary-menu">
				<a href="javascript:;" onclick="document.getElementById('collapsed-menu').classList.toggle('active')">
					<i class="fa fa-bars"></i>
				</a>
			</div>

	  		<div class="socials">
				<a href='https://feedly.com/i/subscription/feed%2F<?=urlencode_deep(get_site_url())?>%2Ffeed%2F' target='_blank'>
					<img id='feedlyFollow' src='https://s3.feedly.com/img/follows/feedly-follow-circle-flat-green_2x.png' alt='Seguir en Feedly' width='17' height='17'>
				</a>
				<a href='<?=get_site_url()?>/feed/' target="_blank">
					<i class="fa fa-rss" style="color: #ee802f;"></i>
				</a>
			</div>

		  	<?php // site_header menu (registered on functions.php:5) 
			if (has_nav_menu('site_header')):?>
				<?php wp_nav_menu([
					"menu" => "site_header",
					"container_class" => "header-menu"
				]);
			endif;?>

		</nav>


	</header>
	<div id="site-header-shadow"></div>

	<?php // site_header menu (registered on functions.php:5) 
	if (has_nav_menu('site_header')):?>
		<?php wp_nav_menu([
			"menu" => "site_header",
			"container_id" => "collapsed-menu"
		]);
	endif;?>