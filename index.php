<?php get_header() ?>

<!-- Page Content -->
<div class="container storeCont">
  <div class="row">
    <?php 
    $productFields = new WP_Query(array(
      'post_type' => 'merch'
    ));

    while($productFields->have_posts()) {
      $productFields->the_post(); 
      
    ?>

    <div class="col-xs-18 col-sm-6 col-md-3">
        <div class="thumbnail">
        <?php if( get_field('merch_image') ); ?>

          <img src="<?php the_field('merch_image'); ?>" alt="">
            <div class="caption">
              <h4><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
              
              <?php echo print_wp_cart_button_for_product('<?php the_title(); ?>', 2.99 ) ?>
          </div>
        </div>
      </div>

    <?php } ?>

  </div>
</div>
<!-- /.container -->
<?php get_footer() ?>