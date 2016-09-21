<?php get_header(); ?>

<?php get_template_part( 'partials/loop' ); ?>

<div id="mainbody">

	<?php get_template_part( 'partials/every', 'page') ?>

		<section id="">
			<?php
				// WP_Query arguments
				$args = array (
					'post_type'              => array( 'post' ),
				);

				// The Query
				$query = new WP_Query( $args );

				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						// do something?>
						<h1><?php the_title(); ?> </h1>
						<div><?php the_content(); ?> </div>
					<?php }
				} else {
					// no posts found
				}

				// Restore original Post Data
				wp_reset_postdata(); 
			?>
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>