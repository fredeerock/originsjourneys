<?php get_header(); ?>

<div id="primary">

<!-- START the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<?php endwhile; endif; ?>
<!-- END the Loop. -->

</div><!-- #primary -->

<?php get_footer(); ?>