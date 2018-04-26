<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>la Pizzeria</title>
	<?php wp_head(); ?>

</head>
<!-- body_class para magkaroon ng automatic class sa kada page. -->
<body <?php body_class() ?>>
<header class="site-header">
	<div class="container">
	<div class="logo">
			<!-- home url function of wordpress that will link to home page  -->
			<a href="<?php echo esc_url(home_url('/')); ?>">
			<!-- to call the image  -->
		<img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logo-image">
	</a>
	</div> <!-- .logo -->

	<div class="header-information">
		<div class="socials">
			<!-- to display the social menu in website -->
			<?php
$args = array(
	'theme_location'=>'social-menu',
	'container'     =>'nav',
	'container_class'=>'socials',
	'container_id'	=>'socials',

	'link_before'   => '<span class="sr-text">',
		'link_after' => '</span>'
);
wp_nav_menu($args);
?>
<!-- link_before and link after para sa malagay sa loob ng span ang text at para pwedeng mahide gamit clas -->
		</div> <!-- .social -->

		<div class="address">
					<p>Pulilan bulacan</p>
					<p>phone number: 09173260429</p>
		</div>
	</div> <!-- header-information -->
</div> <!-- .container -->
</header>

<div class="main-menu">
	<!-- to add mobile menu -->
	<div class="mobile-menu">
<!-- 		to add burger and name -->
<a href="#" class="mobile"><i class="fa fa-bars"></i> Menu</a>
	</div>


	<div class="navigation container">
 <!-- to display menu in website -->
<?php
$args = array(
	'theme_location'=>'header-menu',
	'container'     =>'nav',
	'container_class'=>'site-nav'

);
wp_nav_menu($args);

?>

</div>
<!-- <form>
	<button>Default Button</button>
	<button>Default Button</button>
	</form>
 -->
		
		
	</div>