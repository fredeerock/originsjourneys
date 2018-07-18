<?php get_header(); ?>

<div id="primary">

<?php 
//   $pages = get_pages(); 
//   foreach ( $pages as $page ) {
//   	$option = '<option value="' . get_page_link( $page->ID ) . '">';
// 	$option .= $page->post_title;
// 	$option .= '</option>';
// 	echo $option;
//   }



 ?>

<!-- START the Loop. -->
<ul>

<?php
foreach (get_pages() as $page) {
    echo '<li> <a href="' . get_page_link( $page->ID ) . '">' . $page->post_title . '</a> </li>';
}

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php endwhile; endif; ?>

</ul>
<!-- END the Loop. -->

</div><!-- #primary -->

<?php get_footer(); ?>