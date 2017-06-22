<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title><?php
       if( is_home() || is_front_page() ) {
         	bloginfo('name'); 
        	print ' | ';
        	bloginfo('description');
        }
        elseif ( is_page() ) { 
        	single_post_title(''); 
        }
        elseif ( is_404() ) { 
        	bloginfo('name'); print ' | Not Found'; 
        }
        else { 
        	bloginfo('name'); wp_title('|');
        	get_page_number(); 
        }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body>
<header>
Header
</header>