<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<div class="pagetemplate">
	<div class="pagepadding">

		<?php while (have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

		<?php endwhile; ?>

	</div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>
