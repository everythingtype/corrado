<?php $name = get_field('name'); ?>
<?php if ( $name && $name != '' ) : ?>
	<h1><?php echo $name; ?></h1>
<?php endif; ?>

<?php $title = get_field('title'); ?>
<?php if ( $title && $title != '' ) : ?>
	<?php echo wpautop($title); ?>
<?php endif; ?>

<?php $photo = get_field('photo'); ?>
<?php if ( $photo && $photo != '' ) : ?>
<?php echo spellerberg_get_image($photo) ?>
<?php endif; ?>

<?php $email = get_field('email'); ?>
<?php if ( $email && $email != '' ) : ?>
	<p>Contact:<br />
	<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
<?php endif; ?>

<?php $bio = get_field('bio'); ?>
<?php if ( $bio && $bio != '' ) : ?>
	<?php echo wpautop($bio); ?>
<?php endif; ?>