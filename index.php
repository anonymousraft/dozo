<div class="container">
  <div>
    <div class="col-md-12">
	       <?php get_header();?>
		    <?php wp_head(); ?>
            <?php
              if( have_posts() ):
                while( have_posts() ): the_post(); ?>

                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>

              <?php  endwhile;
              endif;
            ?>


    </div>
 </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php  get_footer();?>
    </div>
  </div>
</div>
