<!doctype html>
<html>
<head>
<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>

<header>
    <h1 id="page-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <h2 id="page-description"><?php bloginfo( 'description' ); ?></h2>
</header>

