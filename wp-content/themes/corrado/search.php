<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<div class="pagetemplate">
	<div class="pagepadding">

		<h1>Search</h1>

		<?php get_search_form(); ?>

		<p>Search results for <em>&ldquo;<?php echo get_search_query(); ?>&rdquo;</em></p>

		<?php while (have_posts()) : the_post(); ?>

			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>

		<?php endwhile; ?>

	</div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>
