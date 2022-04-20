<?php
$title = "About Me | jsm33t";
$description = "Basic flex stuffs and all";
$logo = "white";
$me = ' href="/me" onClick="return false;" class="active" ';
$cur_stroke = "#747c71";
$prog_color = "#747c71";
$logo_visibility = "d-none d-md-block d-lg-block";
include $_SERVER['DOCUMENT_ROOT'] . "/includes/head.php";
?>      
    <main id="main">
        <section class="home-section bg-dark-alfa-30 parallax-2" data-background="cover.jpg" id="home">
        <div class="js-height-full container">
            <div class="home-content">
                <div class="home-text">
                <div class="font-alt mod-breadcrumbs">
                    <h3 class="hs-line-8 font-alt mb-50 mb-xs-30">
                        <center>  <a href="/">Home</a>&nbsp;/&nbsp;<span>ME</span></center>
                    </h3>
                </div>
                <h2 class="hs-line-14 ind_14 font-alt mb-50 mb-xs-0">
                    <span ">
                    MY SPACE
                    </span>
                </h2>
                <span class="d-lg-none d-md-none d-lg-inline-block"><br></span>
                <div class="local-scroll">
                    <a href="https://www.youtube.com/watch?v=I6jmZ5plZ3o" class="btn btn-mod btn-border-w btn-circle btn-medium lightbox mfp-iframe d-none d-sm-inline-block">PLAY REEL</a>
                    <span class="d-none d-sm-inline-block">&nbsp;</span>
                    <a  href="#about"  class="btn btn-mod btn-border-w btn-circle btn-medium ">ABOUT ME</a>
                </div>
                </div>
            </div>
            <div class="local-scroll">
                <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i><span class="sr-only">Scroll to the next section</span></a>
            </div>
        </div>
        </section>
                <!-- End Home Section -->
        <section class="page-section bg-dark-alfa-90 parallax-9" id="about">
            <div class="container relative">
                <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                    About Me
                </h2>
                <div class="section-text mb-50 mb-sm-20">
                    <div class="row">
                        <div class="col-md-4">
                            <blockquote>
                                <p>
                                ' Exploring Music beyond the genres '
                                </p>
                                <footer>
                                    YA YOU GOT IT, I SUCK AT CONTENT WRITING
                                </footer>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30 justify">
                            Jasmeet Singh a.k.a JSM33T is an electronic music producer from Jharsuguda, IN. known for his rendition and fusion of Bollywood with various genres which gained support from DJ nYk, Asad Gujral, DJ Richard, Akbar Sami, KSW and many more.
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30 justify">
                            His recent original "Melancholy" released worldwide gaining support from     great names from the industry including Angus Powel.
                            The guy behind one of the official soundtracks from the netflix series "Elementary"
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    </main>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/foot_dark.php"; ?>