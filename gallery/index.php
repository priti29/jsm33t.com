<?php
$title = "Orient Paper Mills | Gallery";
$description = "Into the abandoned Paper Mills in Jharsuguda";
$logo = "white";
$home = ' href="/" onClick="return false;" class="active" ';
$cur_stroke = "#b4a084";
$prog_color = "#1d978d";
$logo_visibility = " d-none";
include $_SERVER['DOCUMENT_ROOT'] . "/includes/head.php";
?>      

<main id="main">

        <section class="home-section bg-dark-alfa-30 parallax-2" data-background="cover.jpg" id="home">
                    <div class="js-height-full container">
                        <div class="home-content">
                            <div class="home-text">
                                <div class="font-alt mod-breadcrumbs">
                                    <h3 class="hs-line-8 font-alt mb-50 mb-xs-30">
                                        <center>  <a href="/">Home</a>&nbsp;/&nbsp;<span>GALLERY</span></center>
                                    </h3>
                                </div>
                                <h2 class="hs-line-14 ind_14 font-alt mb-50 mb-xs-0">
                                    <span class="text-rotate">
                                        Photo Gallery,
                                        Urbex,
                                        Mobile Photography
                                    </span>
                                </h2>
                                <span class="d-lg-none d-md-none d-lg-inline-block"><br></span>
                                <div class="local-scroll">
                                    <a href="https://www.youtube.com/watch?v=I6jmZ5plZ3o" class="btn btn-mod btn-border-w btn-circle btn-medium lightbox mfp-iframe d-none d-sm-inline-block">PLAY REEL</a>
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
                
                
                <!-- Portfolio Section -->
                <section class="page-section bg-light-alfa-90 parallax-9" data-background="cover.jpg" id="about">
                    <div class="container relative">
                        
                        <!-- Works Filter -->                    
                        <div class="works-filter font-alt align-center" role="tablist">
                            <a href="#" class="filter active" role="tab" aria-selected="true" data-filter="*">All</a>
                            <a href="#urbex" class="filter" role="tab" aria-selected="false" data-filter=".urbex">Urbex</a>
                            <a href="#mobile" class="filter" role="tab" aria-selected="false" data-filter=".mobile">Mobile</a>
                        </div>                    
                        <!-- End Works Filter -->
                        
                        <!-- Works Grid -->
                        <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white" id="work-grid">
                            
                            <!-- Work Item (Lightbox) -->
                            <li class="work-item mix urbex">
                                <a href="/gallery/asansol_glass_factory/" class="work-ext-link">
                                    <div class="work-img rcorner10">
                                        <img src="/gallery/asansol_glass_factory/cover.jpg" alt="Work" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Asansol Glass Factory</h3>
                                        <div class="work-descr">
                                            -Jsm33t
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->

                             <!-- Work Item (Lightbox) -->
                             <li class="work-item mix urbex ">
                                <a href="/gallery/orient_paper_mills/" class="work-ext-link">
                                    <div class="work-img rcorner10">
                                        <img src="/gallery/orient_paper_mills/cover.jpg" alt="Work" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Orient Paper Mills</h3>
                                        <div class="work-descr">
                                        -Jsm33t
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                       
                            <!-- Work Item (External Page) -->
                            <li class="work-item mix mobile">
                                <a href="/gallery/garden_state/" class="work-ext-link">
                                    <div class="work-img rcorner10">
                                        <img class="work-img" src="garden_state/cover.jpg" alt="Work" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Garden State</h3>
                                        <div class="work-descr">
                                            -Jsm33t
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                              <!-- Work Item (External Page) -->
                              <li class="work-item mix mobile">
                                <a href="/gallery/orient_colony/" class="work-ext-link">
                                    <div class="work-img rcorner10">
                                        <img class="work-img" src="orient_colony/cover.jpg" alt="Work" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Orient Colony</h3>
                                        <div class="work-descr">
                                            -Jsm33t
                                        </div>
                                    </div>
                                </a>
                            </li>

                       
                             <!-- Work Item (External Page) -->
                             <li class="work-item mix urbex">
                                <a href="/gallery/into_the_woods_1/" class="work-ext-link">
                                    <div class="work-img rcorner10">
                                        <img class="work-img" src="into_the_woods_1/cover.jpg" alt="Work" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Into The Woods Ep.1</h3>
                                        <div class="work-descr">
                                            -Pratidnya Mhatre
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
  
                    </div>
                </section>
                <!-- End Portfolio Section -->
                
                
             
                </main>    
<?php

include $_SERVER['DOCUMENT_ROOT'] . "/includes/foot.php";
 
?>