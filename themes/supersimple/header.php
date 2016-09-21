<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	
        <header id="top"> 
            <div class="container">
                <div class="shifter">

                <div id="logo">
                    <a href="<?php bloginfo( 'url' ); ?>"> <img src="/wp-content/uploads/2016/08/HeaderLogo.png" alt="Haywire Dash Logo" /></a>
                </div>

                <?php 
                    $args = array(
                        'theme_location'    =>  'haywire-menu',
                        'container'         =>  'nav'
                        );

                    wp_nav_menu( $args );
                ?>

                <input type="checkbox" id="nav-trigger" />
                <label for="nav-trigger"><img src="/wp-content/uploads/2016/08/hamburger-menu-icon-01.png" id="hamburger" alt="Hamburger Menu"></label>

                <!--Main nav ends; mobile nav begins -->

                <?php 
                    $args = array(
                        'theme_location'    =>  'haywire-menu',
                        'container'         =>  'nav',
                        'container_id'      =>  'mobilemenu'
                        );

                    wp_nav_menu( $args );
                ?>

                </div>
            </div>

        </header>

