<?php get_header(); ?>


<div class="container tourCont">
  <div class="row">
    <h2>Upcoming Dates</h2>
    <!--Table-->
      <table class="table table-striped table-dark table-responsive-md btn-table">

      <!--Table body-->
      <tbody>
        <?php 
          $productFields = new WP_Query(array(
            'post_type' => 'tour_dates'
          ));

          while($productFields->have_posts()) {
            $productFields->the_post(); 
            
          ?>
          <tr>
              <td class="tourDate"><?php
                $tourDate = new DateTime(get_field('tour_date'));
                echo $tourDate->format('M j')
               ?></td>
              <td class="tourVenue"><?php the_field('tour_venue'); ?></td>
              <td class="tourLoc"><?php the_field('tour_location'); ?></td>
              <td class="ticketBTN"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0">Tickets &amp; VIP</button></td>
          </tr>
          <?php } ?>
      </tbody>
      <!--Table body-->

      </table>
      <!--Table-->
  </div>
</div>




<?php get_footer(); ?>