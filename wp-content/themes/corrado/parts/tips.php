<?php

  $tipsargs = array(
    'post_type' => 'corrado_tips',
    'posts_per_page' => 3,
    'orderby' => 'rand'
  );

  $tips_query = new WP_Query( $tipsargs );

?>

<?php if ( $tips_query->have_posts() ) : ?>
  <div class="tipswrap">
  <div class="tips">
  <div class="tipsborder">
    <div class="carousel">

    <?php while ( $tips_query->have_posts() ) : $tips_query->the_post(); ?>
      <div class="slide">
      <div class="tip"><div class="tippadding">

        <h2><? the_title(); ?></h2>

        <?php the_content(); ?>

      </div></div>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    </div>


  </div>
  </div>
  </div>

<?php endif; ?>
