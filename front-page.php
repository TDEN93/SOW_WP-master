<?php get_header(); ?>


<!-- <div class="videoWrapper">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/shmMepU64H4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div> -->

<div class="modal" id="splashModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-full modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
                <h5 class="modal-title">Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div> -->
      <div class="modal-body p-4" id="result">
        <div class="row">

          <div class="col-sm-6 col-lg-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/album.jpg" alt="">
          </div>
          <div class="col-sm-6 col-lg-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/SOWBackOutside2.jpg" alt="">
          </div>

        </div>

      </div>
      <div class="modal-body text-center">
        <h4>Subscribe to our newsletter</h4>
        <p>Join our subscribers list to get the latest news, updates and special offers delivered directly in your inbox.</p>
        <div class="input-group">
          <input type="email" class="form-control" placeholder="Enter your email" required>
          <span class="input-group-btn">
            <input type="submit" class="btn btn-primary" value="Subscribe">
          </span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue to Website</button>
      </div>
    </div>
  </div>
</div>



<!-- <img class="bandPic mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/press1.jpg" alt="bandPic"> -->

<!--  Home Page Content / Video -->



  <div class="video-background">
    <div class="video-foreground">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/shmMepU64H4?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>


<?php get_footer(); ?>