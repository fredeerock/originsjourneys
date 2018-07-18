<?php get_header(); ?>

one

<!-- START the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php the_content(); ?>

<?php endwhile; endif; ?>
<!-- END the Loop. -->

<?php get_footer(); ?>
