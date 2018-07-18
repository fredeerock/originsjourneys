<?php get_header(); ?>

<div id="primary">

<?php

foreach (get_pages() as $page) {
    echo '<div class="page-item"> <a href="' . get_page_link( $page->ID ) . '">' . $page->post_title . '</a> </div>';
}

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                   
            <a class="post-item-title-link" href="<?php the_permalink(); ?>">
                <div class="post-item-title"><?php the_title(); ?></div>
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'thumbnail' );
                } ?>
            </a>

<?php endwhile; endif; ?>


</div><!-- #primary -->

<?php get_footer(); ?>