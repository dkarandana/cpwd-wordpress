<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <?php wp_head(); ?>
</head>
<body>
	<section class="top-header">
		<div class="wrapper">
			<h2>Top Header</h2>
			
			<form id="search">
			<script>
			  (function() {
				var cx = '006111902401670103539:rt87tmhqiii';
				var gcse = document.createElement('script');
				gcse.type = 'text/javascript';
				gcse.async = true;
				gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
					'//cse.google.com/cse.js?cx=' + cx;
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(gcse, s);
			  })();
			</script>
			<gcse:search></gcse:search>
			<input placeholder="Find me on" type="hidden"/>
			</form>
			<?php 
			//https://codex.wordpress.org/Function_Reference/wp_nav_menu
			$menu = array(
				'menu'    		  => 'main-menu',
				'menu_class'      => 'menu',
				'menu_id'         => 'main-menu',
				'container'       => '',
				//'container_class' => 'main-menu',
				//'container_id'    => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
			);

			wp_nav_menu( $menu ); ?>
		</div>
	</section>