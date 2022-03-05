<?php
$title = "About Me | jsm33t";
$description = "Basic flex stuffs and all";
$logo = "white";
$me = "active";
$cur_stroke = "#1d978d";
$logo_visibility = "d-none d-md-block d-lg-block";



include $_SERVER['DOCUMENT_ROOT'] . "/includes/head.php";
?>      
    <main id="main">
        <section class="home-section bg-dark-alfa-70 parallax-2" data-background="/resources/images/home.jpg" id="home">
            <div class="js-height-full container">
                <div class="home-content">
                    <div class="home-text">
                        <div class="font-alt mod-breadcrumbs">
                            <h3 class="hs-line-8 font-alt mb-50 mb-xs-30">
                                <center> <span class="d-lg-none d-md-none d-lg-inline-block">&nbsp;</span><span>HOME</span></center>
                            </h3>
                        </div>
                        <h2 class="hs-line-14 ind_14 font-alt mb-50 mb-xs-0">
                            <span class="text-rotate">
                                Soundtracks,
                                Codes,
                                Archives,
                                People
                            </span>
                        </h2>
                        <span class="d-lg-none d-md-none d-lg-inline-block"><br></span>
                        <div class="local-scroll">
                            <a href="https://www.youtube.com/watch?v=mTWvfrzzgTI" class="btn btn-mod btn-border-w btn-circle btn-medium lightbox mfp-iframe d-none d-sm-inline-block">PLAY REEL</a>
                            <span class="d-none d-sm-inline-block">&nbsp;</span>
                            <a  href="#about"  class="btn btn-mod btn-border-w btn-circle btn-medium ">SEE MORE</a>
                        </div>
                    </div>
                </div>
                <div class="local-scroll">
                    <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i><span class="sr-only">Scroll to the next section</span></a>
                </div>
            </div>
        </section>
        <section class="page-section bg-light-alfa-90 parallax-9" data-background="/resources/images/home.jpg" id="about">
            <div class="container relative">
                <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
                    About Me
                </h2>
                <div class="section-text mb-50 mb-sm-20">
                    <div class="row">
                        <div class="col-md-4">
                            <blockquote>
                                <p>
                                    Some random mental gymnastics quote from a random place
                                </p>
                                <footer>
                                    Lorem Ipsum
                                </footer>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30 justify">
                        Jasmeet Singh a.k.a JSM33T is an electronic music producer from Jharsuguda, IN. known for his rendition and fusion of Bollywood with various genres which gained support from DJ nYk, Asad Gujral, DJ Richard, Akbar Sami and many more.
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30 justify">
                        His recent original "Melancholy" released worldwide and gained support from some great names from the industry including Angus Powel.
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        
          <!-- Call Action Section -->  
          <section class="page-section pt-0 pb-0 banner-section bg-dark-alfa-70" data-background="/resources/images/home.jpg">
                    <div class="container relative">
                        <div class="row">
                            <div class="col-sm-6"> 
                                <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                                    <div class="banner-content">
                                        <h3 class="banner-heading font-alt">Did you check my latest composition??</h3>
                                        <div class="banner-decription">
                                            Melancholy , an original soundtrack , is out now on various platforms worldwide.
                                        </div>
                                        <div class="local-scroll">
                                            <a href="/music/melancholy" class="btn btn-mod btn-w btn-medium btn-round">DOWNLOAD / STREAM</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 banner-image wow fadeInUp">
                                <img src="/resources/images/promo.png"" alt="" />
                            </div>
                            
                        </div>
                        
                    </div>
                </section>
             

    </main>
      
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/foot.php"; ?>