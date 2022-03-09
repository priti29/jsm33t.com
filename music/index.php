<?php
$title = "Music";
$description = "Basic flex stuffs and all";
$logo = "white";
$music = ' href="/music" onClick="return false;" class="active" ';
$cur_stroke = "#1d978d";
$logo_visibility = "d-none d-md-block d-lg-block";
include $_SERVER['DOCUMENT_ROOT'] . "/includes/head.php";
?>      
    <main id="main">
        <section class="home-section bg-dark-alfa-70 parallax-2" data-background="/resources/images/music.jpg" id="home">
            <div class="js-height-full container">
                <div class="home-content">
                    <div class="home-text">
                        <div class="font-alt mod-breadcrumbs">
                            <h3 class="hs-line-8 font-alt mb-50 mb-xs-30">
                                <center> <span class="d-lg-none d-md-none d-lg-inline-block">&nbsp;</span><span><a href="/">HOME</span>&nbsp;/<span><a href="/music">&nbsp;MUSIC</a></span></center>
                            </h3>
                        </div>
                        <h2 class="hs-line-14 ind_14 font-alt mb-50 mb-xs-0">
                            <span class="text-rotate">
                                Soundtracks,
                                Bootlegs,
                                Originals
                            
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

        <section class="page-section bg-light-alfa-90 parallax-9" data-background="/resources/images/music.jpg" id="about">
        <div class="container relative">
                        
                        <!-- Works Filter -->                    
                        <div class="works-filter font-alt align-center" role="tablist">
                            <a href="#" class="filter active" role="tab" aria-selected="true" data-filter="*">All</a>
                            <a href="#urbex" class="filter" role="tab" aria-selected="false" data-filter=".albums">Albums</a>
                            <a href="#mobile" class="filter" role="tab" aria-selected="false" data-filter=".originals">Originals</a>
                        </div>                    
                        <!-- End Works Filter -->
                        
                        <!-- Works Grid -->
                        <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white" id="work-grid">
                            
                            <!-- Work Item (Lightbox) -->
                            <li class="work-item mix originals">
                                <a href="/music/melancholy" class="work-ext-link">
                                    <div class="work-img rcorner10">
                                    <img src="/music/melancholy/thumb.jpg" alt="Work" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Melancholy</h3>
                                        <div class="work-descr">
                                            -Jsm33t
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->

                            <!-- Work Item (Lightbox) -->
                            <li class="work-item mix albums">
                                <a href="/music/recuerdos_1" class="work-ext-link">
                                    <div class="work-img rcorner10">
                                        <img src="/music/recuerdos_1/thumb.jpg" alt="Work" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Recuerdos Ep. 1</h3>
                                        <div class="work-descr">
                                        -Jsm33t
                                        </div>
                                    </div>
                                </a>
                            </li>

                              <!-- Work Item (Lightbox) -->
                            <li class="work-item mix albums">
                                <a href="#" class="work-ext-link">
                                    <div class="work-img rcorner10">
                                    <img src="/music/recuerdos_2/thumb.jpg" alt="Work" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Recuerdos Ep. 2</h3>
                                        <div class="work-descr">
                                        -Jsm33t
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <!-- Work Item (Lightbox) -->
                            <li class="work-item mix albums">
                            <a href="/music/recuerdos_3" class="work-ext-link">
                                    <div class="work-img rcorner10">
                                    <img src="/music/recuerdos_3/thumb.jpg" alt="Work" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Recuerdos Ep. 3</h3>
                                        <div class="work-descr">
                                        -Jsm33t
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>        
        </section>
    </main>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/foot.php"; ?>