<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MahaCode
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--Start Menu-->
    <div class="all-menu">
        <div class="container">
            <a href="<?= esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?= get_template_directory_uri() ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
            <div class="menu-content">
                <div class="menu-button"><i class="menu-icon"></i></div>
                <!--Buttons-->
				<?php
				wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'container' => 'ul',
                    'container_class' => 'menu'
				) );
				?>
            </div>
            <div class="social">
                <ul class="list-inline">
                    <li>
                        <a href="#" class="fa fa-facebook"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-instagram"></a>
                    </li>

                </ul>
            </div>
            <div class="languge">
                <select>
					<option>English</option>
					<option>العربية</option>
				</select>
            </div>
        </div>
    </div>
	<!--End Menu-->