<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MahaCode
 */

get_header(); ?>

<!-- Start Home Page-->
<div id="fullpage">
	<?php $images = get_field("images") ?>
	<?php foreach ($images as $index => $image) : ?>
	<!--Start First Page =<?=$index?>= -->
	<div class="section" data-anchor="button">
		<div data-src="<?=$image?>" class="background"></div> 
	</div>
	<!--End First Page =<?=$index?>= -->
	<?php endforeach; ?>


	<div class="section">
		<?php $images = get_field("images") ?>
		<?php foreach ($slider as $image) : ?>
			<div class="slide" data-src="<?=$image?>"></div>
		<?php endforeach; ?>
	</div>

<?php get_footer();
