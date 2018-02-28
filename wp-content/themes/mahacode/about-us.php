<?php /* Template Name: About Us */ ?>

<?php get_header(); ?>


<!-- Start Home Page-->
<div id="fullpage">
    <?php $slides = get_field("slides"); ?>
    <?php foreach ($slides as $index => $slide): ?>
        <?php if ($index % 2 == 0) :?>
            <!--Start First Page =<?=$index?>= -->
            <div class="section  overlay about-us" data-anchor="button" data-anchor="button" data-src="<?=$slide['image_bg']?>">
                <div class="page">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <h3 class="title"><?=$slide['title']?></h3>
                                <p><?=$slide['content']?></p>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="about-img" data-src="<?=$slide['image']?>">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End First Page =<?=$index?>= -->
        <?php else: ?>
            <!--Start First Page =<?=$index?>= -->
            <div class="section  overlay about-us" data-anchor="button" data-anchor="button" data-src="<?=$slide['image_bg']?>">
                <div class="page">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="about-img" data-src="<?=$slide['image']?>"></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <h3 class="title"><?=$slide['title']?></h3>
                                <p><?=$slide['content']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End First Page =<?=$index?>= -->
        <?php endif; ?>
    <?php endforeach; ?>
    
<!--End Home Page-->

<?php get_footer();