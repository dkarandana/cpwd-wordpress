<?php wp_footer(); ?>
	<section class="footer">
		<h2>Footer</h2>
		<?php 
			//https://codex.wordpress.org/Function_Reference/wp_nav_menu
			$menu = array(
				'menu'    		  => 'footer-menu',
				'menu_class'      => 'menu',
				'menu_id'         => 'footer-menu',
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
		<!--<ul class="menu">
			<li><a href="">Fotter Menu item</a></li>
			<li><a href="">Fotter Menu item</a></li>
			<li><a href="">Fotter Menu item</a></li>
			<li><a href="">Fotter Menu item</a></li>
		</ul>-->
		<p>Copyright © <?php echo date('Y');?> <a href="mailto:<?=bloginfo( 'admin_email' );?>">
			PACE Institute</a> 
		</p>
	</section>
</body>
</html>