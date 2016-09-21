<?php /* Template Name: Fullwidth (and also rad) Page */  ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/loop' ); ?>

<div id="mainbody">

	<?php get_template_part( 'partials/every', 'page') ?>

			<section>

					<h1 class="pagehead"><?php the_title(); ?></h1>
					
				<?php the_content(); ?>

			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>