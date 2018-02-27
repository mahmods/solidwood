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
    <!--Start First Page =1= -->
    <div class="section  " data-anchor="button">
    <div data-src="<?=get_template_directory_uri()?>/img/home3.png" class="background "> </div> 
    </div>

    <!--End First Page =1= -->
    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/closet3.png" class="background"></div>
    </div>

    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/closet.png" class="background"></div>
    </div>

    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/closet2.png" class="background"></div>
    </div>

    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/home3.png" class="background"></div>
    </div>


    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/home.png" class="background"></div>
    </div>


    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/home8.png" class="background"></div>
        <div class="footer">
            <div class="container">
                <ul>
                    <li>
                        <p>Closet</p>
                    </li>
                    <li><a href="projects-closts.html">view More Detailes</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/home2.png" class="background"></div>
        <div class="footer">
            <div class="container">
                <ul>
                    <li>
                        <p>Closet</p>
                    </li>
                    <li><a href="projects-closts.html">view More Detailes</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/home9.png" class="background"></div>
        <div class="footer">
            <div class="container">
                <ul>
                    <li>
                        <p>Closet</p>
                    </li>
                    <li><a href="projects-closts.html">view More Detailes</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/door1.png" class="background"></div>
        <div class="footer">
            <div class="container">
                <ul>
                    <li>
                        <p>Doors</p>
                    </li>
                    <li><a href="projects-doors.html">view More Detailes</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/door2.png" class="background"></div>
        <div class="footer">
            <div class="container">
                <ul>
                    <li>
                        <p>Doors</p>
                    </li>
                    <li><a href="projects-doors.html">view More Detailes</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/door3.png" class="background"></div>
        <div class="footer">
            <div class="container">
                <ul>
                    <li>
                        <p>Doors</p>
                    </li>
                    <li><a href="projects-doors.html">view More Detailes</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section">
        <div data-src="<?=get_template_directory_uri()?>/img/door.png" class="background"></div>
        <div class="footer">
            <div class="container">
                <ul>
                    <li>
                        <p>Doors</p>
                    </li>
                    <li><a href="projects-doors.html">view More Detailes</a></li>
                </ul>
            </div>
        </div>
    </div>



    <div class="section">
        <div class="slide" data-src="<?=get_template_directory_uri()?>/img/bg1.png"></div>
        <div class="slide" data-src="<?=get_template_directory_uri()?>/img/bg2.png"></div>
        <div class="slide" data-src="<?=get_template_directory_uri()?>/img/bg3.png"></div>
        <div class="slide" data-src="<?=get_template_directory_uri()?>/img/bg4.png"></div>
        <div class="slide" data-src="<?=get_template_directory_uri()?>/img/bg5.png"></div>

    </div>

<?php
get_sidebar();
get_footer();
