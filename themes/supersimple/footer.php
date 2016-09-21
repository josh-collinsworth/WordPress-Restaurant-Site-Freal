<footer>
	<div class="container">
        <?php 
            $args = array(
                'theme_location'    =>  'haywire-menu',
                'container'         =>  'nav'
                );

            wp_nav_menu( $args );
        ?>
    </div>
	<?php wp_footer(); ?>
    <small>Designed by Josh Collinsworth</small>
</footer>
</body>
</html>