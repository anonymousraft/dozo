<div class="container">
  <div>
    <div class="col-md-12">
	       <?php get_header();?>
            <?php
              if( have_posts() ):
                while( have_posts() ): the_post(); ?>

                    <h3><?php the_title(); ?></h3>
                    <p>Category: <?php single_cat_title(); ?></p>
                    <p>This article was published on: <?php the_time('m/j/y g:i A') ?></p>
                    <p>This article was written by <?php the_author(); ?></p>
                    <p>Tags: <?php the_tags(); ?></p>
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
