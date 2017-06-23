<section class="content">
<?php
	$PROFILE_SLUG = 'php-author-profiles';
	$args = array(
		'posts_per_page'   => 3,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => $PROFILE_SLUG,
		'orderby'          => 'date',
		'order'            => 'ASC',
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