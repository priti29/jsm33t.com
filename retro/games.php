
<?php
 include('header.php');
?>

<div class="main-content" id="<?php echo empty($_GET['page'])?'pageContent':''; ?>">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Games</h1>
    </div>
    <div class="container">
        <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://en.wikipedia.org/wiki/File:Pac-man.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Pacman</h5>
        <p class="card-text">Description</p>
        <a href="game_pacman" class="btn btn-primary">Play</a>
      </div>
    </div> 
    </div>

     <footer class="taskbar">
      <div class="row" style="margin-right: 0px;">
          <div class="col-8">
          <button class="btn start-button" onclick="crt()"><img src="/retro/assets/icons/fs.png" class="icon-16"> CRT Mode</button>
              <button class="btn start-button" onclick="openFullscreen();"><img src="/retro/assets/icons/fs.png" class="icon-16">Open Fullscreen</button>
            <button class="btn start-button" onclick="closeFullscreen();"><img src="/retro/assets/icons/no_fs.png" class="icon-16">Close Fullscreen</button>
           
          </div>
          <div class="col-4 time">Side</div>
      </div>
 
  </footer>


<?php include('footer.php'); ?>

