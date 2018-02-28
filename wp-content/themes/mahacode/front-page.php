<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MahaCode
 */

get_header(); ?>

<!-- Start Home Page-->
<div id="fullpage">
    <?php $images = get_field("gallery") ?>
	<?php foreach ($images as $index => $image) : ?>
    <!--Start Page =<?=$index?>= -->
    <div class="section" data-anchor="button">
    <div data-src="<?=$image['url']?>" class="background"> </div> 
    </div>
    <!--End Page =<?=$index?>= -->
    <?php endforeach; ?>


    <?php $projects = new WP_QUERY(array('post_type'=>'project','posts_per_page'=>5)) ?>
    <?php foreach ($projects->posts as $index => $project) : ?>
    <div class="section">
        <div data-src="<?=get_field("cover_image", $project->ID)?>" class="background"></div>
        <div class="footer">
            <div class="container">
                <ul>
                    <li>
                        <p><?=get_the_title($project->ID)?></p>
                    </li>
                    <li><a href="<?=get_the_permalink($project->ID)?>"><?php pll_e("View More Details")?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <?php $slider = get_field("slider") ?>
	<?php if (count($slider) > 0): ?>
    <div class="section">
        <?php foreach ($slider as $image) : ?>
            <div class="slide" data-src="<?=$image['url']?>"></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

<?php
get_footer();
