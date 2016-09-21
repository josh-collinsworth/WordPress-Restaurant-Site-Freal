<?php get_header(); ?>

<div id="mainbody">

<?php get_template_part( 'partials/every-page' ) ?>

          <img id="shaker" src="/wp-content/uploads/2016/08/Shaker.png" alt="Haywire Dash salt shaker icon">
      	<h1 class="pagehead"><?php the_title(); ?></h1>
          <p class="italics subhead">Last updated: <br>
              <script src="js/currentdate.js" type="text/javascript"> </script> at
              <script src="js/currenttime.js" type="text/javascript"> </script>
          </p>
      

          <a href="#pricing"><p class="italics fineprint" id="clickforprice">(Click here for pricing information)</p></a>

          
               
              <div id="menu">   

                  <section class="menu-section">

                  <?php 
                  // WP_Query arguments
					$args = array (
						'post_type'              => array( 'menu_item' ),
						'post_status'            => array( 'publish' ),
					);

					// The Query
					$menuloop = new WP_Query( $args );
          
					// The Loop
					if ( $menuloop->have_posts() ) {
						while ( $menuloop->have_posts() ) {
							$menuloop->the_post();
							?>

							<div class="menucolumn">
          			<a href="<?php the_permalink();?>"><p class="italics menuitemtitle"><?php the_title(); ?></p></a>
              		<hr>
              		<p><?php the_field('menu_item_description')?> 
              			<span class="item-price">
              				$<?php the_field('menu_item_price'); ?>
              			</span>
              		</p>
          		</div>
					<?php }
					} else {
						// no posts found
					}

					// Restore original Post Data
					wp_reset_postdata(); ?>
                      
                  </section>

              </div>
      
              <h5 class="bold bigger subhead" id="pricing">Pricing <br></h5>
              <ul class="pricetable"> 
              	<li>One course: $15</li>
              	<li>Two courses: $24</li>
              	<li>Three courses: $28</li>
                <li>Dinner for two*: $40</li>
                <li>Drinks: $7 each </li>
                <span class="fineprint">*Two first plates, one main course and one dessert to share.</span>
              </ul>
      
       <p class="backtotop"><a href="#top"><strong>[Back to top]</strong></a></p>
      
      </div>
    </div>
</div>


<?php get_footer(); ?>