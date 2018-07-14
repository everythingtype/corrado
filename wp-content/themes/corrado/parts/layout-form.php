<div class="formtemplate">
  <div class="formtemplatepadding stoppropagation">

    <?php $parenttitle = get_the_title($post->post_parent); ?>

    <?php if ( $parenttitle != '' ) : ?>
      <div class="breadcrumbtitle">
        <?php echo wpautop($parenttitle); ?></p>
        <h1><?php the_title(); ?></h1>
      </div>
    <?php else : ?>
      <h1><?php the_title(); ?></h1>
    <?php endif; ?>

    <div class="formcontent">
      <?php the_content(); ?>
    </div>

  </div>
</div>
