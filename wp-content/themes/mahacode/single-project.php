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
	<?php $images = get_field("gallery") ?>
	<?php foreach ($images as $index => $image) : ?>
	<!--Start First Page =<?=$index?>= -->
	<div class="section" data-anchor="button">
		<div data-src="<?=$image['url']?>" class="background"></div> 
	</div>
	<!--End First Page =<?=$index?>= -->
	<?php endforeach; ?>


	<?php $slider = get_field("slider") ?>
	<?php if (count($slider) > 0): ?>
	<div class="section">
		<?php foreach ($slider as $image) : ?>
			<div class="slide" data-src="<?=$image['url']?>"></div>
		<?php endforeach; ?>
	</div>
	<?php endif; ?>

<?php get_footer();
