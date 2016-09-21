<?php get_header(); ?>

<?php get_template_part( 'partials/loop' ); ?>

<?php get_template_part( 'partials/every', 'page') ?>

                <img id="shaker" src="/wp-content/uploads/2016/08/Shaker.png" alt="lightning salt shaker thingy">
                <h1 class="pagehead">A Dash of Something <span class="highlight">Special.</span></h1>
                <p class="intro-subhead"><em>Welcome to <span class="">Haywire&nbsp;Dash</span>, a dining experience unlike any&nbsp;other.</em></p>

                <div class="timebox">
                    <hr class="thinline" />
                    <p class="italics">Tuesday through Saturday, <br />5:00 <span class="smallcaps">pm</span> &ndash; 11:00 <span class="smallcaps">pm</span></p>
                </div>
            </div>
        </div>

    <!-- =============== Bio =============-->
        
        <div class="container">
            <h2 id="chef">About <span class="highlight">Tonight's Chef</span></h2>
            <p class="italics subhead">
                <script src="js/currentdate.js" type="text/javascript"></script>
            </p>

            <section id="bio">
                <article class="bodycopy">
                    <?php the_content(); ?>
                </article>

            </section>
        </div>

<?php get_footer(); ?>