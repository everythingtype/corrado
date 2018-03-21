<?php /* Template Name: Homepage Template */  ?>

<?php get_header(); ?>


<h1>We are the Corrado Financial Group.</h1>

<p>We help our clients plan and chart
their financial futures—so they can live
more fully in the present.</p>

<p>We began as an accounting firm.
In the two decades since, we’ve come
to understand that many of our clients
needed more than someone to file
their tax returns—they needed advisors
who understand the full scope of their
financial lives.</p>

<p>They needed guidance on their investment
portfolio, help with planning for
retirement, direction on writing their
wills, their pre-nups, their insurances.</p>

<p>We’ve found that our relationships-first
approach to financial planning gives
our clients the freedom to realize their
best selves. We help our clients plan
for their financial future—so that they
can live more fully in the present.</p>

<?php

$args = array(
	'post_type' => 'page',
	'name' => 'why-work-with-us',
);

$the_query = new WP_Query($args); ?>
<?php if ( $the_query->have_posts() ) : ?>
	<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
	<?php echo get_template_part('parts/contents-whywork'); ?>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>