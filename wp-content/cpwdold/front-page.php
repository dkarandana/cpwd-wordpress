<?php get_header(); ?>
<?php //echo the_meta(); ?>
	<section class="banner">
		<h1><?php echo get_field('page_title') ;?></h1>
		<p> <?=get_field('intro');?> </p>
		<a class="btn" href="<?=get_field('home_intro_btn_url');?>">Read More</a>
		
	</section>
	<section class="content">
<?php

	/* Category Slug is profile*/
	$PROFILE_SLUG = 'profile';
	$args = array(
		'posts_per_page'   => 3, // Limitation
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
$profiles = get_posts( $args ); // I have profile posts 

/* Get Category data by providing slug( code) name */
$slugData = get_category_by_slug( $PROFILE_SLUG );

/* Yepiii! I got Category full name now its - PHP Author profiles */
echo "<h2>{$slugData->name}</h2>";

/* looping process to get posts! Im sure its less than 3 */
foreach ($profiles as $profile):
echo <<<PROF
	
PROF;

/* ---- Need to access profile pic and there is way to do it :) -- 
	
	has_post_thumbnail( $profile->ID ) <- Conditional check  
	wp_get_attachment_image_src( $profile->ID ) <- get src

*/
if ( has_post_thumbnail( $profile->ID ) ) {
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($profile->ID), array( 160,160 ), false, '' );
	$cls = 'profile-pic';
	$profileH3 ="h3 style='background-image:url($src[0])'";
}else{
	$profileH3 ="h3";
	$cls = 'no-profile-pic';
}

/* All set ~ lets print Authors  to DOM */
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
		<p><?=get_field('sign_up_content');?></p>
		
		<form id="newsletter">
				<input type="text" placeholder="Sign up for free Emails.."/>
		</form>
	</section>
<?php get_footer(); ?>