<?php /* Template Name: Form */  ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<div class="formtemplate">
			<div class="formtemplatepadding">

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

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
