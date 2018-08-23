<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <?php wp_head(); ?>
</head>
<body>
    <div class="banner-container body-banner">
    
    </div>
    <div class="bannerText">
        <a id="bannerText" href="https://open.spotify.com/artist/53vrAdxV1ZNqoWbHKbZ1dr" target="_blank">New Album!</a>
    </div>



  <!-- NAVIGATION -->
 
  <div class="bandLogo d-block text-center w-100">
    <a href="<?php echo site_url() ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="sowLogo" width="300" height="300">
    </a>
  </div>

  <nav class="navbar navbar-expand-md justify-content-between  ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
          <span class="navbar-toggler-icon"><i class="fas fa-bars fa-2x"></i></span>
      </button>
      <div class="navbar-collapse collapse dual-nav mainMenu">
          <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                  <a class="nav-link pl-0" href="<?php echo site_url() ?>">Home <span class="sr-only">Home</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('/about-page') ?>">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('/music') ?>">Music</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('/videos') ?>">Videos</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('/tour-dates') ?>">Tour Dates</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('/store') ?>" target="_blank">Store / Tickets</a>
              </li>
          </ul>
        </div>
</nav>

  <ul class='social'>
    <!-- <li id="mailingList">
        <a href="https://www.facebook.com/shadowofwhales" target="_blank"><i class="far fa-envelope-open"></i>
        <span>Follow Us!</span>
        </a> 
    </li> -->
    <li>
        <a href="https://www.facebook.com/shadowofwhales" target="_blank"><i class="fab fa-facebook"></i>
        <span>Follow Us!</span>
        </a> 
    </li>
    
    <li>
        <a href="https://twitter.com/ShadowOfWhales" target="_blank"><i class="fab fa-twitter"></i>
        <span>Follow Us!</span>
        </a>
    </li>
    
    <li>
        <a href="https://www.instagram.com/shadowofwhales/" target="_blank"><i class="fab fa-instagram"></i>
        <span>Follow Us!</span>
        </a>
    </li>
    
    <li>
        <a href="https://www.youtube.com/shadowofwhalesband" target="_blank"><i class="fab fa-youtube"></i>
        <span>Watch Our Videos!</span>
        </a> 
    </li>

    <li>
        <a href="https://open.spotify.com/artist/53vrAdxV1ZNqoWbHKbZ1dr" target="_blank"><i class="fab fa-spotify"></i>
        <span>Listen On Spotify!</span>
        </a> 
    </li>
  
</ul>


    

  