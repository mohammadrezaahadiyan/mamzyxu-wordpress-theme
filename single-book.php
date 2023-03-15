<?php get_header(); ?>
<?php get_template_part('templates/page-header'); ?>
<?php get_template_part('templates/page-navbar'); ?>
<?php get_template_part('templates/page-navitems'); ?>
<?php get_template_part('templates/page-navmsg'); ?>
<?php get_template_part('templates/page-navuser'); ?>
<?php
if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <h1> <?php the_title(); ?> </h1>
        <p><?php the_content(); ?></p>

    <?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>