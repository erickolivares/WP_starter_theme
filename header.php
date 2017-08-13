<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

	<?php do_action('wp_head'); ?>

</head>
<body <?php body_class(); ?>>
<header>
	<a href="<?php echo site_url(); ?>">
		<div class="logo">Alta Velocita</div>
	</a>
	<?php 
		wp_nav_menu(array(
		    'theme_location' => 'main_menu'
		));
	?>
</header>