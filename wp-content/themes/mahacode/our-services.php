<?php /* Template Name: Our Services */ ?>

<?php get_header(); ?>


<!-- Start Home Page-->
<div id="fullpage">
    <?php $slides = get_field("slides"); ?>
    <?php foreach ($slides as $index => $slide): ?>
    <!--Start First Page =<?=$index?>= -->
    <div class="section overlay our-services <?= $index % 2 == 0 ? "reverse" : "" ?>" data-anchor="button" data-anchor="button" data-src="<?=$slide['image_bg']?>">
    <?php if ($index % 2 == 0) :?>
        <div class="page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <h3 class="title"><?=$slide['title']?></h3>
                        <p><?=$slide['content']?></p>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <div class="services-img" data-src="<?=$slide['image']?>"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="services-img" data-src="<?=$slide['image']?>"></div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h3 class="title"><?=$slide['title']?></h3>
                        <p><?=$slide['content']?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>
    <!--End First Page =<?=$index?>= -->
    <?php endforeach; ?>
<!--End Home Page-->

<?php get_footer();