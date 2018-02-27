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
                                <h2>Find Us</h2>
                                <h3 class="title">Contact Us</h3>
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

                    <form class="row form-Style">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <input type="text" placeholder="Your Name">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <input type="text" placeholder="Your Email">
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <input type="text" placeholder="Your Phone number">
                        </div>

                        <div class="col-sm-12 ">
                            <textarea placeholder="Your Massge"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <input type="submit" placeholder="Send">
                        </div>
                    </form>
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
                            <h3 class="stitle">Our location</h3>
                            <p><?=get_field("address", 'options')['address_en']?></p>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55251.37709964616!2d31.223444832512136!3d30.05948381032293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1516794747498"
                                    width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End First Page =3= -->

<?php get_footer();