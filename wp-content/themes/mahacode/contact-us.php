<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>


    <!-- Start Home Page-->
    <div id="fullpage">
        <!--Start First Page =1= -->
        <div class="section overlay contact-us" data-anchor="button">
            <div class=" page" data-src="<?=get_template_directory_uri()?>/img/contact3.png">
                <div class="container ">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <h2><?php pll_e("Find Us") ?></h2>
                                <h3 class="title"><?php pll_e("Contact Us") ?></h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 block">
                            <i class="fa fa-phone"></i>
                            <h4><?=get_field("phone_1", 'options')?></h4>
                            <h4><?=get_field("phone_2", 'options')?></h4>
                        </div>

                        <div class="col-sm-6 col-md-4 block">
                            <i class="fa fa-envelope "></i>
                            <h4><?=get_field("email_1", 'options')?></h4>
                            <h4><?=get_field("email_2", 'options')?></h4>
                        </div>

                        <div class="col-sm-6 col-md-4 block">
                            <i class="fa fa-map-marker"></i>
                            <p><?=get_field("address", 'options')['address_en']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End First Page =1= -->

        <!--Start First Page =2= -->
        <div class="section contact-us " data-anchor="button">

            <div class=" page" id="form" data-src="<?=get_template_directory_uri()?>/img/form-bg.png">
                <div class="container">
                    <?=do_shortcode('[hf_form slug="contact-us"]')?>
                </div>
            </div>
        </div>
        <!--End First Page =2= -->

        <!--Start First Page =3= -->
        <div class="section overlay map" data-anchor="button" data-src="<?=get_template_directory_uri()?>/img/contact.png">
            <div class=" page">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <h3 class="stitle"><?php pll_e("Our location") ?></h3>
                            <p><?=get_field("address", 'options')['address_en']?></p>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <?php $location = get_field('map', 'options');
                            if( !empty($location) ):
                            ?>
                            <div class="acf-map map">
                                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End First Page =3= -->
<style type="text/css">
.acf-map {
    width: 100%;
    height: 400px;
}

/* fixes potential theme css conflict */
.acf-map img {
max-width: inherit !important;
}
</style>
<script>
var address = '<?=get_field("address", "options")["address_en"]?>';

jQuery("input[name='NAME']").attr("placeholder", "<?=pll__("Your Name") ?>");
jQuery("input[name='EMAIL']").attr("placeholder", "<?=pll__("Your Email") ?>");
jQuery("input[name='PHONE']").attr("placeholder", "<?=pll__("Your Phone number") ?>");
jQuery("textarea[name='MESSAGE']").attr("placeholder", "<?=pll__("Your Message") ?>");
jQuery("input[type='submit']").attr("value", "<?=pll__("Send") ?>");   
</script>

<?php get_footer();