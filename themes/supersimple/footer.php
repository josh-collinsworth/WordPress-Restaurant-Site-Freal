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
</footer>
</body>
</html>