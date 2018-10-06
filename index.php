<?php get_header() ?>

<!-- Page Content -->
<div class="container storeCont">
  <div class="row">
    <?php 
    $productFields = new WP_Query(array(
      'post_type' => 'product'
    ));

    while($productFields->have_posts()) {
      $productFields->the_post(); 
      
    ?>
    
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <a href="<?php the_field("product_link"); ?>" target="_blank">
          <?php if( get_field('product_image') ): ?>

          <img class="card-img-top" src="<?php the_field('product_image'); ?>" alt="sowEPAlbum">

          <?php endif; ?>

        </a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="<?php the_field("product_link"); ?>" target="_blank">
              <?php the_title(); ?>
            </a>
          </h4>
          <h5>$
            <?php the_field('product_price'); ?>
          </h5>
          
        </div>
        <!-- <div class="card-footer">
          <small class="text-muted"></small>
        </div> -->
      </div>
    </div>

    <?php } ?>

  </div>
  <!-- /.row -->

</div>
<!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
<?php get_footer() ?>