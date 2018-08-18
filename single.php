<?php get_header();

  while(have_posts()) {
    the_post();
    $colors = get_field('product_colors');
    $sizes = get_field('product_sizes');
    ?>

<div class="container product-containter">
  <br>
  <div class="card">
    <div class="row">
      <aside class="col-sm-5">
        <article class="gallery-wrap">
          <div class="img-big-wrap">
            <div id="product-img">
              <a href="#">
                <?php if( get_field('product_image') ): ?>

                  <img class="card-img-top" src="<?php the_field('product_image'); ?>" alt="sowEPAlbum">

                <?php endif; ?>
              </a>
            </div>
          </div>
          <!-- slider-product.// -->
          <!-- <div class="img-small-wrap">
          <?php if( get_field('thumb1') ): ?>
            <div class="item-gallery">
              

              <img class="card-img-top" src="<?php the_field('thumb1'); ?>" alt="sowEPAlbum">

              
            </div>
            <?php endif; ?>

            <?php if( get_field('thumb2') ): ?>
            <div class="item-gallery">
              

              <img class="card-img-top" src="<?php the_field('thumb2'); ?>" alt="sowEPAlbum">

              
            </div>
            <?php endif; ?>


            <?php if( get_field('thumb3') ): ?>
            <div class="item-gallery">
              

              <img class="card-img-top" src="<?php the_field('thumb3'); ?>" alt="sowEPAlbum">

              
            </div>
            <?php endif; ?>

            <?php if( get_field('thumb4') ): ?>
            <div class="item-gallery">
              

              <img class="card-img-top" src="<?php the_field('thumb4'); ?>" alt="sowEPAlbum">

              
            </div>
            <?php endif; ?>
          </div> -->
          <!-- slider-nav.// -->
        </article>
        <!-- gallery-wrap .end// -->
      </aside>
      <aside class="col-sm-7">
        <article class="card-body p-5">
          <h3 class="title mb-3"><?php the_title(); ?></h3>

          <p class="price-detail-wrap">
            <span class="price h3 text-warning">
              <span class="currency">$</span>
              <span class="num"><?php the_field('product_price'); ?></span>
            </span>
          </p>
          <!-- price-detail-wrap .// -->
          <dl class="item-property">
            <dt>Description</dt>
            <dd>
              <p><?php the_content(); ?></p>
            </dd>
          </dl>
          <!-- item-property-hor .// -->
          <?php if( $colors ): ?>
            <dl class="param param-feature">
              <dt>Color</dt>
              <select class="form-control form-control-sm" style="width:100px;">
                <?php if( $colors ): ?>
                  <?php foreach($colors as $color): ?>
                    <option><?php echo $color; ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>

              </select>
              
            </dl>
          <?php endif; ?>

          
          <div class="row">
            <!-- <div class="col-sm-5">
              <dl class="param param-inline">
                <dt>Quantity: </dt>
                <dd>
                  <select class="form-control form-control-sm" style="width:70px;">
                    <option> 1 </option>
                    <option> 2 </option>
                    <option> 3 </option>
                  </select>
                </dd>
              </dl> -->
              <!-- item-property .// -->
            <!-- </div> -->
            <!-- col.// -->
            <?php if( $sizes ): ?>
              <div class="col-sm-7">
                <dl class="param param-inline">
                  <dt>Size: </dt>
                  <dd>
                    <?php if( $sizes ): ?>
                      <?php foreach($sizes as $size): ?>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <span class="form-check-label"><?php echo $size; ?></span>
                        </label>
                        
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </dd>
                </dl>
                <!-- item-property .// -->
              </div>
            <?php endif; ?>
            <!-- col.// -->
          </div>
          <!-- row.// -->
          <a href="<?php the_field("product_link"); ?>" class="btn btn-lg btn-primary text-uppercase" target="_blank"> Buy now </a>
          <!-- <a href="#" class="btn btn-lg btn-outline-primary text-uppercase">
            <i class="fas fa-shopping-cart"></i> Add to cart </a> -->
        </article>
        <!-- card-body.// -->
      </aside>
      <!-- col.// -->
    </div>
    <!-- row.// -->
  </div>
  <!-- card.// -->


</div>
<!--container.//-->


<br>
<br>
<br>

<?php }
  
  get_footer();
?>