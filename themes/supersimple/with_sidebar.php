<?php /* Template Name: Page with Rad Sidebar */  ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/loop' ); ?>

<div id="mainbody">

	<div class="bg" style="background-image: url(<?php the_field('page_background_image') ?>);">
		<div class="container sidebar-added">

			<section>

				<h1 class="pagehead"><?php the_title(); ?></h1>
					
				<?php the_content(); ?>

			</section>
			
			<?php get_sidebar( 'rad' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>