<?php
$title = "Orient Colony | Gallery";
$description = "Into the abandoned colony in Jharsugida";
$logo = "white";
$home = "active";
$cur_stroke = "#fff";
$logo_visibility = "d-none d-md-block d-lg-block";
include $_SERVER['DOCUMENT_ROOT'] . "/includes/head.php";
?>      

<main id="main">
  <!-- Head Section -->
  <section class="page-section bg-dark-alfa-70 parallax-3" data-background="header.jpg">
                    <div class="relative container align-left">
                        
                        <div class="row">
                            
                            <div class="col-md-8">
                                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Orient Colony</h1>
                             
                            </div>
                            
                            <div class="col-md-4 mt-30">
                                <div class="mod-breadcrumbs font-alt align-right">
                                    <a href="/">Home</a>&nbsp;/&nbsp;<a href="/gallery">Gallery</a>&nbsp;/&nbsp;<span>Orient Colony</span>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </section>
                <!-- End Head Section -->

 <section class="page-section bg-dark-alfa-90 pt-80 pt-sm-60 pt-xs-40" data-background="header.jpg">
                    <div class="container relative">
                        <!-- Title -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-10 offset-sm-1">
                                    <h1 class="section-title font-alt mb-80 mb-sm-50">PICTURES</h1>
                                </div>
                            </div>
                        </div>
                        <!-- End Title -->
                        
                        <!-- Works Grid -->
                        <ul class="works-grid work-grid-gut hide-titles hide-titles hover-black ">
                            
                            <!-- Work Item (Lightbox) -->
                            <?php
												$files = array();
												$dir = opendir('images'); // open the cwd..also do an err check.
												while(false != ($file = readdir($dir))) {
														if(($file != ".") and ($file != "..") and ($file != "index.php") and ($file != ".htpasswd") and ($file != ".htaccess") and ($file != "thumbs")
														
														 ) {
																$files[] = $file; 
														}   
												}
												
												natsort($files); // sort.
												$nam=1;
												foreach($files as $file) 
												{
													
                           echo("
                           <li class='work-item mix photography'>
                           <a href='images/$file' class='work-lightbox-link mfp-image rcorner10 '>
                               <div class='work-img'>
                               <img class='img-lazy' src='thumbs/$file' id='rcorner' data-original='thumbs/$file' alt='' /> 
                               </div>
                               <div class='work-intro'>
                                   <h3 class='work-title'>$nam $file</h3>
                                   <div class='work-descr'>
                                       Open The Photo
                                   </div>
                               </div>
                           </a>
                       </li>"
                      );
                            $nam++;
											 }
											 $file_num = $nam - 1;
											
											 ?>
                   
                            
                            
                        </ul>
                        <!-- End Works Grid -->
                        
                        
                        
                    </div>
                </section>
                
                
             
                </main>    
<?php

include $_SERVER['DOCUMENT_ROOT'] . "/includes/foot_dark.php";
 
?>