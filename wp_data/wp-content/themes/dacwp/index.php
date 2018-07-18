<?php get_header(); ?>

<h2 id="page-title">Hi!</h2>

<div id="primary">

<!-- START the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php the_content(); ?>

<?php endwhile; endif; ?>
<!-- END the Loop. -->

</div><!-- #primary -->

<?php get_footer(); ?>