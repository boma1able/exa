<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<title><?php bloginfo();?></title>

	<?php wp_head(); ?>

</head>
<body>


		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="title">
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo home_url('/wp-content/themes/exa/', 'http');?>img/logo-dark.png" alt=""></a></h1>
					</div>
				</div>


				<?php
				wp_nav_menu( array(
					'theme_location'  => '',
					'menu'            => 'navbar navbar-default',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'main-menu',
					'menu_class'      => 'nav navbar-nav navbar-right',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				) );
				?>

			</div>
		</nav>
