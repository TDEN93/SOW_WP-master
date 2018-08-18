<?php 

  get_header();

  while(have_posts()) {
    the_post(); ?>
 
    <div class="container-fluid aboutContainer">
      <div class="row contentRow">
        <div class="col-lg-9 aboutContent">
          
            <?php the_content() ?>

        </div>
        <div class="col-lg-3 bandContainer">
          <div class="band-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_0054.jpg" alt="">
          </div>
          <div class="band-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_0107.jpg" alt="">
          </div>
          <div class="band-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_9992.jpg" alt="">
          </div>
          <div class="band-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/624A4728.jpg" alt="">
          </div>
        </div>
      </div>
    </div>

  <?php }

    get_footer();

  ?>