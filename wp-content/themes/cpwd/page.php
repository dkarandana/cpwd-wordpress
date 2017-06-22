<?php get_header(); ?>
	<section class="banner">
		ccc<h1>MOST IMPORTANT TITLE (SEO h1)This is the main title for this documnet</h1>
		<?php
		if (have_posts()) :
		   while (have_posts()) :
			the_post();
			the_content();
		   endwhile;
		endif;
		?>
		<a class="btn" href="http://www.pace.lk">Button</a>
		
	</section>
	<section class="content">
		<h2>This is main title for this section</h2>
		<section>
			<h3>Profile one</h3>
			<p> with multiple file selection, drag&drop support, progress bar, validation and preview images, audio and video for jQuery.
Supports cross-domain, chunked and resumable file with multiple file selection, drag&drop support, progress bar, validation and preview images, audio and video for jQuery.
Supports cross-domain, chunked and resumable file</p>
		</section>
		<section>
			<h3>Profile one</h3>
			<p> with multiple file selection, drag&drop support, progress bar, validation and preview images, audio and video for jQuery.
Supports cross-domain, chunked and resumable file with multiple file selection, drag&drop support, progress bar, validation and preview images, audio and video for jQuery.
Supports cross-domain, chunked and resumable file</p>
		</section>
		<section>
			<h3>Profile one</h3>
			<p> with multiple file selection, drag&drop support, progress bar, validation and preview images, audio and video for jQuery.
Supports cross-domain, chunked and resumable file with multiple file selection, drag&drop support, progress bar, validation and preview images, audio and video for jQuery.
Supports cross-domain, chunked and resumable file</p>
		</section>
	</section>
	<section class="feature-boxes">
		<h2>This is main title for this section</h2>
		<section class="boxes">
			<h5>User Profiles</h5>
			<section>
				<h4>Profile one</h4>
			</section>
			<section>
				<h4>Profile one</h4>
			</section>
			<section>
				<h4>Profile one</h4>
			</section>
			<section>
				<h4>Profile one</h4>
			</section>
		</section>
	</section>
	<section class="sign-up">
		<h2>Sign UP</h2>
		<p>get with multiple file selection, drag&drop support, progress bar, validation and preview images, audio and video for jQuery.
Supports cross-domain, chunked and resumable file uploads and client-side image resizing.
Works with any- server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, </p>
		
		<form id="newsletter">
				<input type="text" placeholder="Sign up for free Emails.."/>
		</form>
	</section>
	
ddd	<?php the_post(); ?>
 
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
<?php edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
                    </div><!-- .entry-content -->
                </div><!-- #post-<?php the_ID(); ?> -->           
 
<?php if ( get_post_custom_values('comments') ) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>            
 
   
		<?php get_sidebar(); ?>
     
<?php get_footer(); ?>