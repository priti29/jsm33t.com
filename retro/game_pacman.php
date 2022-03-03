
<?php

include('header.php');
?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">




    <div class="container">
  <center><iframe src="https://jsm33t.com/retro/pacman_files/index.html" class="screen" width="800" height="500"></iframe></center>
  </div>


   


    <footer class="taskbar">
     <div class="row" style="margin-right: 0px;">
         <div class="col-8">
         <button class="btn start-button" onclick="crt()"><img src="../assets/icons/fs.png" class="icon-16"> CRT Mode</button>
             <button class="btn start-button" onclick="openFullscreen();"><img src="../assets/icons/fs.png" class="icon-16">Open Fullscreen</button>
           <button class="btn start-button" onclick="closeFullscreen();"><img src="../assets/icons/no_fs.png" class="icon-16">Close Fullscreen</button>
          
         </div>
         <div class="col-4 time">Side</div>
     </div>

 </footer>





<?php include('footer.php'); ?>

