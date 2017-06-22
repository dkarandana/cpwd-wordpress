<?php get_header(); ?>
<?php echo the_meta(); ?>
	<section class="banner">
		<h1>MOST IMPORTANT TITLE (SEO h1)This is the main title for this documnet</h1>
		<p> widget with multiple file selection, drag&drop support, progress bar, validation and preview images, audio and video for jQuery.
Supports cross-domain, chunked and resumable file uploads and </p>	
		<a class="btn" href="http://www.pace.lk">Button</a>
		
	</section>
	<section class="content">
<?php
	$PROFILE_SLUG = 'profile';
	$args = array(
		'posts_per_page'   => 3,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => $PROFILE_SLUG,
		'orderby'          => 'date',
		'order'            => 'DSC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
$profiles = get_posts( $args );

$slugData = get_category_by_slug( $PROFILE_SLUG );

echo "<h2>{$slugData->name}</h2>";

foreach ($profiles as $profile):
echo <<<PROF
	
PROF;

if ( has_post_thumbnail( $profile->ID ) ) {
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($profile->ID), array( 160,160 ), false, '' );
	$cls = 'profile-pic';
	$profileH3 ="h3 style='background-image:url($src[0])'";
}else{
	$profileH3 ="h3";
	$cls = 'no-profile-pic';
}
echo <<<PROF
	<section class="$cls">
			<$profileH3>{$profile->post_title}</h3>
			<p>{$profile->post_content}</p>
	</section>
PROF;


endforeach;
?>
	</section>
	<section class="feature-boxes">
<?php
	$NEWS_SLUG = 'news-and-press';
	$args = array(
		'posts_per_page'   => 4,
		'category_name'    => $NEWS_SLUG,
		'order'            => 'DSC',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);
$newsArray = get_posts( $args );
$slugData = get_category_by_slug( $NEWS_SLUG );
echo <<<EOD
	<h2>{$slugData->name}</h2>
	<section class="boxes">
		<h5>User Profiles</h5>
EOD;


foreach ($newsArray as $news):
echo <<<EOD
	<section>
EOD;

echo <<<EOD
			<h4>{$news->post_title}</h4>
	</section>
EOD;


endforeach;
echo "</section>";

?>
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
<?php get_footer(); ?>