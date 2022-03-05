<?php
$title = "Home";
$description = "Basic flex stuffs and all";
$logo = "black";
$home = "active";
$cur_stroke = "#1d978d";
$logo_visibility = "d-none d-md-block d-lg-block";
include $_SERVER['DOCUMENT_ROOT'] . "/includes/head.php";
?>      
    <main id="main">
        
       
         
		   <section class="page-section bg-light parallax-6 bg-light-alfa-90"id="menu"data-background="/svg/sprinkle.svg">
		    <div class="container relative">
			<h2 class="font-alt mb-70 mb-sm-40 section-title">J_DORK TOOL</h2>

								<form class="form">
								<div class="row">
								<div class="col-sm-12 mb-40">
									<div class="mb-20 mb-md-10">              
													<input type="text" class="input-md form-control"  placeholder="STRING.. '[' FOR HINTS" onkeyup="showResult2(this.value)">
													<div id="dorker" class="" ></div>

												
                                                    
                                              </div>
									</div>
									</div>
							</form>
								
                                <form method="post" autocomplete="off" action="#" id="form" class="form">
									
								<div class="row">
									
								
								
                                    <div class="col-sm-4 mb-40">
										<div class="mb-20 mb-md-10">
											<!-- Name -->
                                 <div class="autocomplete" >
											<input type="text" name="name" id="filename" class="input-md form-control" placeholder="KEYWORD/SPACE=HINT" maxlength="100">
                                 </div>
                              </div>
									 </div>	
									  <div class="col-sm-4 mb-40">
										<div class="mb-20 mb-md-10">
											<!-- Name -->
											<input type="text" name="name" id="act" class="input-md form-control" placeholder="TYPE" maxlength="100">
										</div>
									 </div>	
                               
                                   <div class="col-sm-4 mb-40">
                                        <select class="input-md form-control" id="ext2">
                                            <option value=" ">......</option>
                                    <option value="| xml">.XML</option>
                                    <option value="| pdf">.PDF</option>
                                    <option value="| jpeg | jpg | png">IMAGES</option>
                                    <option value="| mp3 | flac | wav | aac">AUDIO FILES</option>
                                    <option value="| mp4 | mkv | mov | avi | flv">VIDEO FILES</option>
                                    <option value="| apk">ANDROID APKS</option>
                                    <option value="| xls | xlsx | xlsm | xltx | xlsb">EXCEL FILES</option>
                                    <option value="| pptx | ppt | pptm | ppt ">POWER PPT FILES</option>
                                    <option value="| sql">.SQL (DATABASES)</option>
                                        </select>
                                    </div>
				
									
								</div>
								<div clas="row">
								
								
								
									<div class="col-sm-12 mb-40">
									<center>
											 <a class="btn btn-mod btn-medium btn-circle" onclick="javascript:execcustom();">
											 <i class="fa fa-search"></i>&nbsp; SEARCH !!</a>
									</center> 
											 
												
											 
									</div>
                                 </div>                               
                                </form>
    							<!-- End Form -->
                                     
                    
                        <!-- Our Story -->
                    
		  </div>
</section>
        
        
    </main>
    <script type="text/javascript">
   
   function execcustom() {
                               if ($('#filename').val() != '') execFilenamecustom();
                         }
   function execFilenamecustom() 
           {
               var filename = encodeURIComponent($('#filename').val());
               var act = encodeURIComponent($('#act').val());
               var ext2 = encodeURIComponent($('#ext2').val());
               var newUrl = 'https://www.google.com/search?q=-inurl%3Ahtm+-inurl%3Ahtml+intitle%3A"index+of"+' + filename + " (" + act +" " + ext2 + ") -html -htm -php -asp -jsp"+ '&oq=-inurl%3Ahtm+-inurl%3Ahtml+intitle%3A"index+of"+' + filename ;
           
             window.open(newUrl); 
           }
         document.getElementById("filename").addEventListener("keydown", function(e)
         {
             if (!e) { var e = window.event; }                
             if (e.keyCode == 13)
             {
                 execFilename();
             }
         }, false);    
 </script>
      
<?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/foot.php"; ?>