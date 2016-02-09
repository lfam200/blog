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
        <?php the_content(); ?> 
        <div class="form-group col-xs-12">
          <p class="text-justify texto-blanco text-shadow">
            <?php
             $meta = get_post_meta( get_the_ID(), 'pd' );
             if( !empty($meta) ) {
             echo $meta[0];
             }
            ?> 
          </p>
        </div>
      </div>
    </div>
    <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
<script>
  $(document).ready(function(){
    $('.sc-form-group').addClass("form-group col-xs-12 margin-top group-form")
    $('.group-form').removeClass("sc-form-group")
    $('.group-form>label').addClass("texto-blanco text-shadow")
    $('.group-form>input').addClass("form-control")
    
    $('#average_number').wrap("<div class='input-group'></div>")
    $('#average_number').before("<div class='input-group-addon'>$</div> ")
    $('.sc-uea-container').addClass("input-group")
    $('.sc-uea-currency').wrap("<div class='input-group-addon'></div>")
    $('#sc_uea_custom_amount_1').addClass("form-control")
    $('#sc_uea_custom_amount_1').prop('disabled', true);

    var a = $('#days_number').val();
    var b = $('#average_water').val();
    var c = $('#average_number').val();

    var total = a*b*c;

    $('#days_number').change(function(){
      a = $('#days_number').val();
      b = $('#average_water').val();
      c = $('#average_number').val();

      total = a*b*c;
      $('#sc_uea_custom_amount_1').val(total)
    })
    $('#average_water').change(function(){
      a = $('#days_number').val();
      b = $('#average_water').val();
      c = $('#average_number').val();

      total = a*b*c;
      $('#sc_uea_custom_amount_1').val(total)
    })
    $('#average_number').change(function(){
      a = $('#days_number').val();
      b = $('#average_water').val();
      c = $('#average_number').val();

      total = a*b*c;
      $('#sc_uea_custom_amount_1').val(total)
    })
  });
</script>
</body>
</html>