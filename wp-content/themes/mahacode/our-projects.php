<?php /* Template Name: Our Projects */ ?>

<?php get_header(); ?>


    <!-- Start Home Page-->
    <div id="fullpage">
    <!--Start First Page =1= -->

    <div class="section overlay our-project" data-anchor="button">
        <div class="page " data-src="img/bg-about3.png">
            <div class="container">
                <div class="col-sm-12">
                    <h1 class="title">Our Best Project</h1>
                    <h3>Amazing Projects For You</h3>
                </div>
                <div class="project">
                    <?php $projects = new WP_QUERY(array(
                        "post_type" => "project"
                    ));
                    ?>
                    <?php if ($projects->have_posts()) : ?>
                    <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
                    <a href="<?=the_permalink()?>" class="box">
                        <div class="block-img">
                            <img src="<?=get_field("main_image")?>" alt="<?=get_field("title")?>">
                        </div>
                        <h6><?=get_field("title")?></h6>
                    </a>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!--End First Page =1= -->

<?php get_footer();