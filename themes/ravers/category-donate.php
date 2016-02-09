<?php get_header(); ?>
<div class="white">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 margin-bottom-lg margin-top-lg">
      <h3 class=" text-center visible-md visible-lg"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBER OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVALS WORLDWIDE.</strong></h3>
      <h4 class=" text-center visible-xs visible-sm"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBER OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVALS WORLDWIDE.</strong></h4>
      <h2 class="text-center "><strong>WE CAN DO ANYTHING?</strong></h2>
    </div>
  </div>
  <div class="row bg-kh">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <h3 class="texto-blanco text-center text-shadow margin-top-lg"><?php the_title(); ?></h3>
      <h4 class="texto-blanco text-center text-shadow"><?php
           $meta = get_post_meta( get_the_ID(), 'subtitle' );
           if( !empty($meta) ) {
           echo $meta[0];
           }
          ?></h4>
      <div class="bg-form margin-top col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        prueba 
      </div>
    </div>
    <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <h3 class="texto-blanco text-center text-shadow margin-top-lg">Make a Kandi Trade</h3>
      <h4 class="texto-blanco text-center text-shadow">Water accesibility program</h4>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <h3 class="texto-blanco text-center text-shadow margin-top-lg">Help Little Warriors</h3>
      <h4 class="texto-blanco text-center text-shadow">Sanitation & hygiene program</h4>
    </div>
  </div>
</div>

<?php get_footer(); ?>
</body>
</html>