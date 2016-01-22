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
<div class="bg_blog">
  <div class="container ">
    <div class="col-xs-12 desc-cat">
      <?php echo category_description();?>
    </div>
  </div>
</div>

<div class="blue">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 margin-bottom">
        <h3 class="texto-blanco text-right">
          <a href="<?php bloginfo('home');?>/blog" class="a_nolink">Categories</a>
        </h3>
      </div>
    </div>
  </div>
</div>
<div class="white">
  <div class="container">
    <div class="row rowsombra-total">
      
      <?php 
        if(is_category('water-sanitation-programs')){
      ?>
        <div class="col-xs-12">
          <div class="cat col-xs-4 texto-blanco text-left">Water accesibility program</div>
          <div class="col-xs-4"></div>
          <div class="cat col-xs-4 col-xs-offset-2 texto-blanco text-right">Sanitation & hygiene project</div>
          <div class="title_border col-xs-12"></div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 margin-top">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/qOLZTZpjXQo" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="col-xs-12 text-center margin-top-lg ">
                  <a href="<?php bloginfo('home'); ?>/donate">
                      <button type="button" class="btn btn-success btn-lg btn-custom">Ver mas</button>
                  </a>
              </div>
          </div>
          <div class="col-xs-2"></div> 
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 margin-top">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="col-xs-12 text-center margin-top-lg ">
                  <a href="<?php bloginfo('home'); ?>/donate"><button type="button" class="btn btn-success btn-lg btn-custom">Ver mas</button></a>
              </div>
          </div>
          <div class="col-xs-12">
          <?php
          // Obtenemos la informacion de las subcategorias contenidas en la categoria "work"
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
           
          // print_r($categories);  // para ver toda la informacion contenida en el array $categories
              
          // Por ejemplo, imprimimos el nombre de las subcategorias
          foreach ($categories as $category) : 
              $name = $category->name;
          ?>

            <div class="cat col-xs-4 texto-blanco text-left">
              <a class="a_nolink" href="<?php bloginfo('home') ?>/category/<?php echo get_cat_slug($id_cat); ?>/<?php echo $category->slug ?>"><?php echo $name;?></a>
            </div>
            <div class="title_border col-xs-12"></div>
            <div class="col-xs-12">
              <!-- Start the Loop. -->
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( in_category( $category->slug ) ) : ?>
                  <div class="post">
                    <div class="entry">
                      <div class="col-xs-12 padding-top-lg">
                        <div class="col-xs-3 padding-top-lg">
                          <?php the_post_thumbnail('my-size'); ?>
                        </div>
                        <div class="col-xs-6">
                          <div class="col-xs-12">
                            <h4 class="text-left ">
                              <?php the_title(); ?>
                            </h4> 
                            <?php 
                              the_excerpt(); 
                            ?>
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
                <?php else : ?>
                  <div class="post">

                  </div>
                <?php endif; ?>
              <?php endwhile; else : ?>
                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <!-- REALLY stop The Loop. -->
               <?php endif; ?>
            </div>
          <?php  endforeach; ?>
            <div class="cat col-xs-4 texto-blanco text-left">OUR COMPLETED PROJECTS</div>
            <div class="title_border col-xs-12"></div>
            <div class="col-xs-12 margin-top margin-bottom-lg">
              <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Map')) : ?>
              <?php endif; ?>
            </div>
          </div>

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
                  echo "<div class='col-xs-3'><div class='center-block month-dj'><p class='text-center text-vertical texto-blanco'><a class='a_nolink' href='".$cat."'>";
                  $rest = substr($cat, 0, 3);
                  echo $rest;
                  echo "</a></p></div></div>";
              endforeach;
              ?>
            </div>
            <div class="col-xs-11">
              <p class="text-right text-large">Suscribe to our <strong>DJ Birthday Calendar</strong></p>
            </div>
            <div class="col-xs-12">
              <div class="cat col-xs-4  text-left"><p class="texto-blanco text-large">Birthday's wishes</p></div>
            </div>
            <div class="col-xs-8">
              <div class="title_border col-xs-12">
                <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <!-- Test if the current post is in category 3. -->
                  <!-- If it is, the div box is given the CSS class "post-cat-three". -->
                  <!-- Otherwise, the div box is given the CSS class "post". -->

                  <?php if ( in_category( '18' ) ) : ?>
                    <div class="post-cat-three">
                  <?php else : ?>
                    <div class="post">
                  <?php endif; ?>


                  <!-- Display the Title as a link to the Post's permalink. -->

                  <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


                  <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

                  <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


                  <!-- Display the Post's content in a div box. -->

                  <div class="entry">
                    <?php the_content(); ?>
                  </div>


                  <!-- Display a comma separated list of the Post's Categories. -->

                  <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                  </div> <!-- closes the first div box -->


                  <!-- Stop The Loop (but note the "else:" - see next line). -->

                <?php endwhile; else : ?>


                  <!-- The very first "if" tested to see if there were any Posts to -->
                  <!-- display.  This "else" part tells what do if there weren't any. -->
                  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


                  <!-- REALLY stop The Loop. -->
                <?php endif; ?>
              </div>
              
            </div> 
             
          </div>
        </div>
      </div>

      <?php      
          }
          else{
            include TEMPLATEPATH . "/templates/category-template.php";
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
      
    })
        
</script>
</body>
</html>