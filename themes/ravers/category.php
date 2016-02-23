<?php get_header(); ?>
<?php 
  $id_cat = get_query_var('cat');
  function get_cat_slug($cat_id) {
    $cat_id = (int) $cat_id;
    $category = &get_category($cat_id);
    return $category->slug;
  };
  $slug = get_cat_slug($id_cat);
  $cat_name = single_cat_title("",false); 

?>
<!-- Imagen principal y descripcion de la categoria-->
<div class="bg_blog bg_<?php echo $slug; ?> ">
  <input type="hidden" id="edm_country" value="<?php echo $slug; ?>">
  <input type="hidden" id="href" value="<?php bloginfo('template_directory'); ?>">
  <div class="container ">

    <div class="col-xs-12 desc-cat hidden-xs hidden-sm"><?php echo category_description();?></div>
    <div class="col-xs-12 desc-cat-sm visible-xs visible-sm"><?php echo category_description();?></div>
  </div>
</div>

<!-- Area Hashtag y boton retorno a gategorias -->
<div class="blue">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 margin-bottom">
        <div class="col-xs-6">
          <h2 class="texto-blanco text-left texto_sombra visible-md visible-lg">#HashTag</h2>
          <h4 class="texto-blanco text-left texto_sombra visible-xs visible-sm">#HashTag</h4>
        </div>
        <div class="col-xs-6">
          <h3 class="texto-blanco text-right visible-md visible-lg">
            <a href="<?php bloginfo('home');?>/blog" class="a_nolink">Categories</a>
          </h3>
          <h5 class="texto-blanco text-right visible-xs visible-sm">
            <a href="<?php bloginfo('home');?>/blog" class="a_nolink">Categories</a>
          </h5>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Contenido Categorias -->
<div class="white">
  <div class="container">
    <div class="row rowsombra-total">
      <!-- Comparacion de categorias -->
      <?php 
        if(is_category('water-sanitation-programs')){ 
      ?>
      <div class="col-xs-12">
        <!-- videos water sanitation programs -->
        <div class="cat col-xs-12 col-sm-12 col-md-4 col-lg-4 texto-blanco text-left">Water accesibility program</div>
        <div class="col-md-4 col-lg-4 visible-md visible-lg"></div>
        <div class="cat col-md-4 col-lg-4 col-md-offset-2 col-lg-offset-2 texto-blanco text-right visible-md visible-lg">Sanitation & hygiene project</div>
        <div class="title_border col-xs-12"></div>
        <!-- video 1 -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 margin-top">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/qOLZTZpjXQo" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 text-center margin-top-lg ">
              <a href="<?php bloginfo('home'); ?>/programs#green">
                <button type="button" class="btn btn-success btn-lg btn-custom">Ver mas</button>
              </a>
          </div>
        </div>
        <div class="col-xs-2 visible-md visible-lg"></div> 
        <!-- video 2 -->
        <div class="cat  texto-blanco col-xs-12 col-sm-12 col-md-4 col-lg-4 text-left visible-xs visible-sm">Sanitation & hygiene project</div>
        <div class="title_border col-xs-12 visible-xs visible-sm"></div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 margin-top">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 text-center margin-top-lg ">
            <a href="<?php bloginfo('home'); ?>/programs#green">
              <button type="button" class="btn btn-success btn-lg btn-custom">Ver mas</button>
            </a>
          </div>
        </div>

        <!-- <div class="col-xs-12"> -->
      <?php
          $idObj = get_query_var('cat');
          $args = array(
                        'type'                     => 'post',
                        'child_of'                 => $idObj,
                        'parent'                   => '',
                        'orderby'                  => 'name',
                        'order'                    => 'DESC',
                        'hide_empty'               => 0,
                        'hierarchical'             => 1,
                        'exclude'                  => '',
                        'include'                  => '',
                        'number'                   => '',
                        'taxonomy'                 => 'category',
                        'pad_counts'               => false 
                       ); 
          $categories = get_categories($args); 
          // Por ejemplo, imprimimos el nombre de las subcategorias
          foreach ($categories as $category) : 
              $name = $category->name;
          ?>
          <div class="cat col-xs-12 col-sm-12 col-md-4 col-lg-4 texto-blanco text-left">
            <a class="a_nolink" href="<?php bloginfo('home') ?>/category/<?php echo get_cat_slug($id_cat); ?>/<?php echo $category->slug ?>"><?php echo $name;?></a>
          </div>
          <div class="title_border col-xs-12"></div>
          <!-- <div class="col-xs-12"> -->
          <!-- Start the Loop. -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php if ( in_category( $category->slug ) ) : ?>
            
              
                <div class="padding-top-lg">
                  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 padding-top-lg">
                    <?php the_post_thumbnail('my-size',array('class' => 'center-block')); ?>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <h4 class="text-left visible-md visible-lg"> <?php the_title(); ?></h4> 
                      <h4 class="text-center hidden-md hidden-lg"> <?php the_title(); ?></h4> 
                      <div class="visible-md visible-lg"><?php the_excerpt();?></div>
                    </div>
                    <div class="col-xs-12">
                      <div class="col-xs-12">
                        <a href="<?php the_permalink(); ?>">
                          <button type="button" class="btn btn-success">Read More</button>
                        </a>
                      </div>
                      <div class="col-xs-8">
                        <small><?php the_time('m.j.Y'); ?> by <?php the_author_posts_link(); ?></small>
                      </div>
                    </div>
                  </div>
                </div>
             
           
          <?php else : ?>
            <div class="post"></div>
          <?php endif; ?>
          <?php endwhile; else : ?>
                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <!-- REALLY stop The Loop. -->
          <?php endif; ?>
          <!-- </div> -->
          <?php  endforeach; ?>
          <div class="cat col-xs-12 col-sm-12 col-md-4 col-lg-4 texto-blanco text-left">OUR COMPLETED PROJECTS</div>
          <div class="title_border col-xs-12"></div>
          <div class="col-xs-12 margin-top margin-bottom-lg">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Map')) : ?>
            <?php endif; ?>
          </div>
        <!-- </div> -->
      </div> 

      <?php
        }
        else{
          if(is_category('dj-birthday-calendar')){
      ?>
      <div class="white">
        <div class="container">
          <div class="row rowsombra">
            <h1 class="text-center margin-bottom-lg margin-top">
            <?php 
              echo single_cat_title("",false); 
            ?>
            </h1>
            <div class="col-xs-12">

              <?php
              // Obtenemos la informacion de las subcategorias contenidas en la categoria "work"
                $idObj = get_query_var('cat');
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
              foreach ($categories as $category) : 
                  $cat = $category->name;
                  $len = strlen($cat);
                  if($len > 2){
                    echo "<div class='col-xs-6 col-sm-6 col-md-3 col-lg-3'><div class='center-block month-dj'><p class='text-center text-vertical texto-blanco'><a class='a_nolink' href='".$cat."'>";
                    $rest = substr($cat, 0, 3);
                    echo $rest;
                    echo "</a></p></div></div>";
                  }
                  
              endforeach;
              ?>
            </div>
            <div class="col-xs-11 margin-bottom-lg">
              <p class="text-right text-large">Suscribe to our <strong>DJ Birthday Calendar</strong></p>
            </div>
          </div>
        </div>
      </div>

      <?php      
          }
          else{
            if(is_category('January') || is_category('February') || is_category('March') || is_category('April') || is_category('May') || is_category('June') || is_category('July') || is_category('August') || is_category('September') || is_category('October') || is_category('November') || is_category('December')){
                
                $idObj = get_query_var('cat');

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
                <h1 class="text-center"><?php echo single_cat_title("",false); ?></h1>
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
                date_default_timezone_set('UTC');
                $mes = single_cat_title("",false);
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
              <?php
            }else{
              $g = substr($slug, 2,1);

              if($g == '-'){
              ?>
              <div class="col-xs-12">
                <div class="cat col-xs-12 col-sm-12 col-md-4 col-lg-4 texto-blanco text-left">TODAY'S BIRTHDAYS</div>
                <div class="title_border col-xs-12"></div>
                <div class="col-xs-12">
                <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="padding-top-lg">
                  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 padding-top-lg">
                    <?php the_post_thumbnail('my-size',array('class' => 'center-block')); ?>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <h4 class="text-left visible-md visible-lg"> <?php the_title(); ?></h4> 
                      <h4 class="text-center hidden-md hidden-lg"> <?php the_title(); ?></h4> 
                      <div class="visible-md visible-lg"><?php the_excerpt();?></div>
                    </div>
                    <div class="col-xs-12">
                      <div class="col-xs-12">
                        <a href="<?php the_permalink(); ?>">
                          <button type="button" class="btn btn-success">Read Post</button>
                        </a>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <?php endwhile; else : ?>
                      <!-- The very first "if" tested to see if there were any Posts to -->
                      <!-- display.  This "else" part tells what do if there weren't any. -->
                      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                      <!-- REALLY stop The Loop. -->
                <?php endif; ?>
                </div>
                <div class="col-xs-12 margin-top">
                  <p class="text-right">TOTAL OF THIS MONTH: <br>$0.00</p>
                </div>
                <div class="cat col-xs-12 col-sm-12 col-md-4 col-lg-4 texto-blanco text-left">FREE WATER REFILL</div>
                <div class="title_border col-xs-12"></div>
                <div class="col-xs-12">
                <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if(is_category('water-refill')){ ?>
                  <div class="post">
                    <div class="entry">
                      <div class="col-xs-12 padding-top-lg">
                        <div class="col-xs-3 padding-top-lg">
                          <?php the_post_thumbnail('my-size'); ?>
                        </div>
                        <div class="col-xs-6">
                          <div class="col-xs-12">
                            <h4 class="text-left "> <?php the_title(); ?></h4> 
                            <?php the_excerpt();?>
                          </div>
                          <div class="col-xs-12">
                            <div class="col-xs-4">
                              <a href="<?php the_permalink(); ?>">
                                <button type="button" class="btn btn-success">Read More</button>
                              </a>
                            </div>
                            <div class="col-xs-8">
                              <small><?php the_time('m.j.Y'); ?> by <?php the_author_posts_link(); ?></small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>  
                <?php endwhile; else : ?>
                      <!-- The very first "if" tested to see if there were any Posts to -->
                      <!-- display.  This "else" part tells what do if there weren't any. -->
                      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                      <!-- REALLY stop The Loop. -->
                <?php endif; ?>
                </div>
                <div class="cat col-xs-12 col-sm-12 col-md-4 col-lg-4 texto-blanco text-left">OUR COMPLETED PROJECTS</div>
                <div class="title_border col-xs-12"></div>
                <div class="col-xs-12 margin-top margin-bottom-lg">
                  <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Map')) : ?>
                  <?php endif; ?>
                </div>
              </div>
              <?php   
              }else{
                // echo $slug;
                include TEMPLATEPATH . "/templates/category-template.php";
              }
              
            }
            
          }
          
        }
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
<script type="text/javascript">
    $(document).ready(function(){

      var color = '#'; // hexadecimal starting symbol
      var letters = ['0075FF','FFBD00','1BC659','FD0054']; //Set your colors here
      
      
      $('.month-dj').each(function(){
        color += letters[Math.floor(Math.random() * letters.length)];
        // alert(color)

        $(this).css('background',color);
        color = '#'
      })
      

      function UrlExists(url)
      {
          var http = new XMLHttpRequest();
          http.open('HEAD', url, false);
          http.send();
          return http.status!=404;
      }

      var directorio = $('#href').val();
      var country = $('#edm_country').val();

      var clave = ".bg_"+country;
      
      if(country.indexOf('-edm-clubs-around-the-world') > 0)
      {
        // alert("encontrado")
        country = country.replace("-edm-clubs-around-the-world","")
      }
      var dir = directorio+"/img/banderas/"+country+".jpg";
      
      
      // alert(dir)
      var status = UrlExists(dir);
     
      if(status){
        $(clave).css({
          "background" : "url('"+directorio+"/img/banderas/"+country+".jpg') center no-repeat",
          "background-size" : "cover"

        })
      }
      
    })
        
</script>
</body>
</html>