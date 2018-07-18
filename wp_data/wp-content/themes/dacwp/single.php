<?php get_header(); ?>

<!-- START the Loop. -->
<?php while ( have_posts() ) : the_post(); ?>

    <h3 id="post-title"><?php the_title(); ?></h3>
    
    <h4 id="post-author"><?php the_author(); ?></h4>

    <h5 id="gallery-heading">Media</h5>

    <div id="image-gallery">
        <?php if ( get_post_gallery() ) : 
            $gallery = get_post_gallery( get_the_ID(), false );

            foreach( $gallery['src'] as $src ) : ?>
            <img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />

        <?php endforeach; endif; ?>
    </div>

    <h5 id="description-heading">Work Description</h5>

    <?php echo apply_filters('the_content',strip_shortcodes(get_the_content())); ?>
    
    <h5 id="bio-heading">Artist Bio</h5>    

    <div id="author-description"><?php the_author_meta('description'); ?></div>

<?php endwhile;?>
<!-- END the Loop. -->

<?php get_footer(); ?>
