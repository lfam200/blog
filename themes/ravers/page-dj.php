<?php
/*
Template Name: Página DJ 
*/
?>
<?php get_header(); ?>
<div class="green">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj10.png" alt="" class="img img-responsive" width="100%">
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
    echo $idObj;
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
        <th class="cal_1 text-center cal-dj-head text-large a_nolink">Sun</th>
        <th class="cal_2 text-center cal-dj-head text-large a_nolink">Mon</th>
        <th class="cal_3 text-center cal-dj-head text-large a_nolink">Tue</th>
        <th class="cal_4 text-center cal-dj-head text-large a_nolink">Wed</th>
        <th class="cal_5 text-center cal-dj-head text-large a_nolink">Thu</th>
        <th class="cal_6 text-center cal-dj-head text-large a_nolink">Fri</th>
        <th class="cal_7 text-center cal-dj-head text-large a_nolink">Sat</th>
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
          <div class="col-xs-12">
          <?php $the_query = new WP_Query( 'cat='.$category->term_id.'&showposts=1' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            
          <?php the_post_thumbnail('destacado_dj', array('class' => 'img img-responsive img-circle center-block', 'width' => '50%')); ?>
          <?php endwhile;?>
          <?php echo "</td></tr><tr>"; ?> 
        <?php 
        }else{
          echo "<td class ='cal_".$id." text-right cal-dj'><a class='a_nolink' href=".$rest."-".strtolower($mes).">".$rest."</a><br>";
        ?>  
          <?php $the_query = new WP_Query( 'cat='.$category->term_id.'&showposts=1' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <?php the_post_thumbnail('destacado_dj', array('class' => 'img img-responsive img-circle center-block', 'width' => '50%')); ?>
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
<div class="green">
  <img src="<?php bloginfo('template_directory'); ?>/img/dj11.png" alt="" class="img img-responsive" width="100%">
  <div class="container">
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
  <img src="<?php bloginfo('template_directory'); ?>/img/dj12.png" alt="" class="img img-responsive" width="100%">
  <div class="container">
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
</body>
</html>