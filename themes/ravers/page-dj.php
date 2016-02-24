<?php
/*
Template Name: Página DJ 
*/
?>
<?php get_header(); ?>
<div class="green">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bg-djbirthday-main.png" alt="" class="img img-responsive center-block visible-md visible-lg" width="100%">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bg-djbirthday-main-sm.png" alt="" class="img img-responsive center-block visible-xs visible-sm" width="100%">
</div>
<div class="blue">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bg-hashtag.png" alt="" class="img img-responsive center-block" width="80%">
</div>
<div class="white">
  <div class="container">
    
  
  <?php 
    date_default_timezone_set('UTC');
    $mes = date("F");
    function get_category_id($cat_name){
      $term = get_term_by('name', $cat_name, 'category');
      return $term->term_id;
    }
    
    $idObj = get_category_id($mes);
    // echo $idObj;
    $args = array(
                'type'                     => 'post',
                'child_of'                 => $idObj,
                'parent'                   => '',
                'orderby'                  => 'id',
                'order'                    => 'ASC',
                'hide_empty'               => 0,
                'hierarchical'             => 1,
                'exclude'                  => '',
                'include'                  => '',
                'number'                   => '',
                'taxonomy'                 => 'category',
                'pad_counts'               => false 

               ); 
    $categories = get_categories($args);
  ?>  
  
  <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
    <h1 class="text-center"><?php echo $mes; ?></h1>

    <table width="100%" border="1" id="calendario_tabla" class="margin-bottom-lg"> 
      <tr>
        <th class="cal_1 text-center cal-dj-head text-large a_nolink visible-xs visible-sm">S</th>
        <th class="cal_2 text-center cal-dj-head text-large a_nolink visible-xs visible-sm">M</th>
        <th class="cal_3 text-center cal-dj-head text-large a_nolink visible-xs visible-sm">T</th>
        <th class="cal_4 text-center cal-dj-head text-large a_nolink visible-xs visible-sm">W</th>
        <th class="cal_5 text-center cal-dj-head text-large a_nolink visible-xs visible-sm">T</th>
        <th class="cal_6 text-center cal-dj-head text-large a_nolink visible-xs visible-sm">F</th>
        <th class="cal_7 text-center cal-dj-head text-large a_nolink visible-xs visible-sm">S</th>
        <th class="cal_1 text-center cal-dj-head text-large a_nolink visible-md visible-lg">Sun</th>
        <th class="cal_2 text-center cal-dj-head text-large a_nolink visible-md visible-lg">Mon</th>
        <th class="cal_3 text-center cal-dj-head text-large a_nolink visible-md visible-lg">Tue</th>
        <th class="cal_4 text-center cal-dj-head text-large a_nolink visible-md visible-lg">Wed</th>
        <th class="cal_5 text-center cal-dj-head text-large a_nolink visible-md visible-lg">Thu</th>
        <th class="cal_6 text-center cal-dj-head text-large a_nolink visible-md visible-lg">Fri</th>
        <th class="cal_7 text-center cal-dj-head text-large a_nolink visible-md visible-lg">Sat</th>
      </tr>
  <?php 
    echo "<tr>"; 
    // $mes = single_cat_title("",false);
    $f = 0;
    if($mes == 'January'){ $f = 1;}
    if($mes == 'February'){ $f = 2;}
    if($mes == 'March'){ $f = 3;}
    if($mes == 'April'){ $f = 4;}
    if($mes == 'May'){ $f = 5;}
    if($mes == 'June'){ $f = 6;}
    if($mes == 'July'){ $f = 7;}
    if($mes == 'August'){ $f = 8;}
    if($mes == 'September'){ $f = 9;}
    if($mes == 'October'){ $f = 10;}
    if($mes == 'November'){ $f = 11;}
    if($mes == 'December'){ $f = 12;}
    $a = date('Y');
    $d = date("D", mktime(0, 0, 0, $f, 1, $a));
    if($d == 'Sun'){
      $v = 1;  
    }
    if($d == 'Mon'){
      echo "<td class='cal_1 text-right cal-dj'></td>";
      $v = 2;  
    }
    if($d == 'Tue'){
      echo "<td class='cal_1 text-right cal-dj'></td><td class='cal_2 text-right cal-dj'></td>";
      $v = 3;  
    }
    if($d == 'Wed'){
      echo "<td class='cal_1 text-right cal-dj'></td><td class='cal_2 text-right cal-dj'></td><td class='cal_3 text-right cal-dj'></td>";
      $v = 4;  
    }
    if($d == 'Thu'){
      echo "<td class='cal_1 text-right cal-dj'></td><td class='cal_2 text-right cal-dj'></td><td class='cal_3 text-right cal-dj'></td><td class='cal_4 text-right cal-dj'></td>";
      $v = 5;  
    }
    if($d == 'Fri'){
      echo "<td class='cal_1 text-right cal-dj'></td><td class='cal_2 text-right cal-dj'></td><td class='cal_3 text-right cal-dj'></td><td class='cal_4 text-right cal-dj'></td><td class='cal_5 text-right cal-dj'></td>";
      $v = 6;  
    }
    if($d == 'Sat'){
      echo "<td class='cal_1 text-right cal-dj'></td><td class='cal_2 text-right cal-dj'></td><td class='cal_3 text-right cal-dj'></td><td class='cal_4 text-right cal-dj'></td><td class='cal_5 text-right cal-dj'></td><td class='cal_6 text-right cal-dj'></td>";
      $v = 7;  
    }
    
    foreach ($categories as $clave => $category) : 
        
        $cat = $category->name;
        
        $rest = substr($cat, 0, 3);
        $mod = ($clave+$v) % 7;
        $id = $clave+$v;
        if($id > 7){
          $id = $id % 7;
          if($id == 0){
            $id = 7;
          }
        }
        if($mod == 0){
          echo "<td class ='cal_".$id." text-right cal-dj'><a class='a_nolink' href=".$rest."-".strtolower($mes).">".$rest."</a><br>"; 
         
        ?>
          
          <?php $the_query = new WP_Query( 'cat='.$category->term_id.'&showposts=1' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <?php the_post_thumbnail('destacado_dj', array('class' => 'img img-responsive img-circle center-block')); ?>
          <?php endwhile;?>
          <?php echo "</td></tr><tr>"; ?> 
        <?php 
        }else{
          echo "<td class ='cal_".$id." text-right cal-dj'><a class='a_nolink' href=".$rest."-".strtolower($mes).">".$rest."</a><br>";
        ?>  
          <?php $the_query = new WP_Query( 'cat='.$category->term_id.'&showposts=1' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <?php the_post_thumbnail('destacado_dj', array('class' => 'img img-responsive img-circle center-block')); ?>
          <?php endwhile;?>
          
        <?php
          echo "</td>";
        }
        
        
    endforeach;
  ?>
    </tr>
  </table>
  
  </div>
  </div>
</div>
<div class="white">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/dj-div-green.png" alt="" class="img img-responsive center-block visible-md visible-lg" width="100%">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/dj-div-green-sm.png" alt="" class="img img-responsive center-block visible-xs visible-sm" width="100%">
</div>
<div class="green">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="texto-blanco text-center margin-top visible-md visible-lg margin">The Challenge is to Develop 300 water <br>projects in 2016.</h1>
        <h3 class="texto-blanco text-center margin-top visible-sm visible-xs">The Challenge is to Develop 300 water projects in 2016.</h3>
      </div>
    </div>
    <div class="row margin-top-lg visible-md visible-lg">
      <div class="col-xs-3 col-xs-offset-2">
        <h3 class="text-center texto-blanco margin-bottom">Build Wells + water purifiers</h3>
        <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/dj-wells.jpg" alt="Build Wells" width="80%" class="center-block img-circle" >
        <h4 class=" text-center texto-blanco margin-top-lg margin-bottom-lg">There is thousands of water well projects  stalled because other organizations run out of funds. Let's help fulfill those water projects with your gifts.</h4>
      </div>
      
      <div class="col-xs-3 col-xs-offset-2">
        <h3 class="text-center texto-blanco margin-bottom">Free water refill stations</h3>
        <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/dj-elkay.jpg" alt="Refill Stations" width="80%" class="center-block img-circle" >
        <h4 class=" text-center texto-blanco margin-top-lg margin-bottom-lg">There is thousands of water well projects  stalled because other organizations run out of funds. Let's help fulfill those water projects with your gifts.</h4>
      </div>
    </div>
    <div class="row margin-top sliderbody visible-xs visible-sm">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="col-sm-3">
              <h3 class="text-center texto-blanco">Build Wells + water purifiers</h3>
              <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/dj-wells.jpg" alt="@janarubiomiller" width="70%" class="center-block img-circle" >
              <h4 class=" text-center texto-blanco">There is thousands of water well projects  stalled because other organizations run out of funds. Let's help fulfill those water projects with your gifts.</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="col-sm-3">
              <h3 class="text-center texto-blanco">Free water refill stations</h3>
              <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/dj-elkay.jpg" alt="@alevittoriag" width="70%" class="center-block img-circle" >
              <h4 class=" text-center texto-blanco">There is thousands of water well projects  stalled because other organizations run out of funds. Let's help fulfill those water projects with your gifts.</h4>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 margin-top-lg margin-bottom-lg">
        <a href="<?php bloginfo('home'); ?>/dj-birthday/dj-birthday-pledge">
          <button class="btn btn-lg btn-primary text-center center-block btn-lg">I ACCEPT THE CHALLENGE</button>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="white">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/dj-div-green-inv.png" alt="" class="img img-responsive center-block visible-md visible-lg" width="100%">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/dj-div-green-sm-inv.png" alt="" class="img img-responsive center-block visible-xs visible-sm" width="100%">
</div>

<div class="white">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="text-blue text-center margin-top visible-md visible-lg margin">Here Is What You Will Get When You Fully <br>Fund A Water Project</h1>
        <h3 class="text-blue text-center margin-top visible-sm visible-xs">Here Is What You Will Get When You Fully Fund A Water Project</h3>
      </div>
    </div>
    <div class="row margin-top-lg visible-md visible-lg">
      <div class="col-md-3 col-lg-3">
        <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-info-icon.png" alt="" class="img img-responsive center-block" width="60%">
        <h4 class="text-center">PROJECT AND COMMUNITY INFORMATION</h4>
      </div>
      <div class="col-md-3 col-lg-3">
        <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-gps-icon.png" alt="" class="img img-responsive center-block" width="60%">
        <h4 class="text-center">GPS COORDINATES OF THE PROJECT</h4>
      </div>
      <div class="col-md-3 col-lg-3">
        <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-tap-icon.png" alt="" class="img img-responsive center-block" width="60%">
        <h4 class="text-center">PHOTOS OF THE PROJECT AND COMMUNITY</h4>
      </div>
      <div class="col-md-3 col-lg-3">
        <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-plaque-icon.png" alt="" class="img img-responsive center-block" width="60%">
        <h4 class="text-center">A PERSONALIZED PLAQUE ON YOUR WATER PROJECT</h4>
      </div>
      <div class="col-md-3 col-lg-3 margin-top-lg">
        <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-gift-icon.png" alt="" class="img img-responsive center-block" width="20%">
        <h4 class="text-center">THE COMMUNITY THAT YOU HELPED 
          <br>WILL SEND YOU A HANDCRAFT MADE 
          <br>BY THEM IN GRATITUDE AND AS A 
          <br>PRESENT FOR YOUR BIRTHDAY.</h4>
      </div>
    </div>
    <div class="row margin-top sliderbody visible-xs visible-sm">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="col-sm-3">
              <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-info-icon.png" alt="" class="img img-responsive center-block" width="70%">
              <h4 class="text-center">PROJECT AND COMMUNITY INFORMATION</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="col-sm-3">
              <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-gps-icon.png" alt="" class="img img-responsive center-block" width="70%">
              <h4 class="text-center">GPS COORDINATES OF THE PROJECT</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="col-sm-3">
              <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-tap-icon.png" alt="" class="img img-responsive center-block" width="70%">
              <h4 class="text-center">PHOTOS OF THE PROJECT AND COMMUNITY</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="col-sm-3">
              <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-plaque-icon.png" alt="" class="img img-responsive center-block" width="70%">
              <h4 class="text-center">A PERSONALIZED PLAQUE ON YOUR WATER PROJECT</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="col-sm-3">
              <img src="<?php bloginfo('template_directory'); ?>/img/dj-challenge/bc-gift-icon.png" alt="" class="img img-responsive center-block" width="80%">
              <h4 class="text-center">THE COMMUNITY THAT YOU HELPED WILL SEND YOU A HANDCRAFT MADE BY THEM IN GRATITUDE AND AS A PRESENT FOR YOUR BIRTHDAY.</h4>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 margin-top-lg margin-bottom-lg">
        <a href="<?php bloginfo('home'); ?>/dj-birthday/dj-birthday-pledge">
          <button class="btn btn-lg btn-primary text-center center-block btn-lg">PLEDGE MY BIRTHDAY</button>
        </a>
        
      </div>
      <div class="col-xs-12 margin-top-lg margin-bottom-lg">
        
            <button class="btn btn-lg btn-primary text-center center-block btn-lg">READ THE BIRTHDAY FAQS</button>
     
      </div>

    </div>
  </div>
</div>
<div class="white">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj13.png" alt="" class="img img-responsive" width="100%">
</div>

<div class="blue">
  <img src="<?php bloginfo('template_directory'); ?>/img/bg-dj.jpg" alt="" class="img img-responsive" width="100%">

</div>


<?php get_footer(); ?>
<!-- Swiper JS -->
<script src="<?php bloginfo('template_directory'); ?>/js/swiper.min.js"></script>
<!-- Initialize Swiper -->
<script>
$(document).ready(function () {
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 4500,
        autoplayDisableOnInteraction: false
    });

  
});  
</script>
</body>
</html>