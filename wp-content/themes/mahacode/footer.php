<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MahaCode
 */

?>

    <!--Start Footer-->
    <div class="section footer-style">
        <div data-src="<?=get_template_directory_uri()?>/img/footer.png" class="background ">
        </div>
        <div class="last-footer">

            <div class="container">
                <p class="copy"> All Copy Right Resived</p>
                <a href="#button" class="button-scrool"></a>
                <div class="mahacode-copyrights">
                    <a href="http://mahacode.com/" class="logo"><img src="<?=get_template_directory_uri()?>/img/maha.png" alt=""></a>

                    <div class="mc-tooltip">
                        <h3>تصميم وتطوير شركة مها كود</h3>
                        <h4 class="fa fa-envelope">info@mahacode.com</h4>
                        <h4 class="fa fa-phone">002 0109 367 8012</h4>
                        <h4 class="fa fa-phone">002 0100 771 7974</h4>
                        <div class="btns-icons">
                            <a href="http://mahacode.com/" class="fa fa-home"></a>
                            <a href="#" class="fa fa-whatsapp"></a>
                            <a href="https://www.behance.net/mahacode" class="fa fa-behance"></a>
                            <a href="https://www.instagram.com/maha.code/" class="fa fa-instagram"></a>
                            <a href="http://www.twitter.com/mahacode" class="fa fa-twitter"></a>
                            <a href="https://www.facebook.com/MahaCode/" class="fa fa-facebook"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Footer-->

</div>
<!--End Home Page-->
<?php wp_footer(); ?>
</body>

</html>