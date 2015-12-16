<?php get_header(); ?>
<div class="bg_blog">
  <div class="container ">
    <div class="col-xs-12 ">
        <p class="text-center text-blog">international ravers charity : BLOG</p>
    </div>
  </div>
</div>
<div class="blue">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 margin-bottom">
        <div class="col-xs-4">
           <h3 class="texto-blanco">#HashTagHashTag</h3>
        </div>
        <div class="col-xs-4 col-xs-offset-4">
           <h3 class="texto-blanco"><a href="" class="a_nolink">Categories</a></h3>
        </div>
      </div>
    </div>
  </div>
</div>
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
        $idObj = get_query_var('cat');

        if($idObj>=23 && $idObj<=34){
          echo "estamos dentro";
        }
        else{
          echo "estamos fuera";
        }

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
         
        // print_r($categories);  // para ver toda la informacion contenida en el array $categories
         
        // Por ejemplo, imprimimos el nombre de las subcategorias
        foreach ($categories as $category) : 
            $cat = $category->name;
            echo "<div class='col-xs-3'><div class='center-block month-dj'><p class='text-center text-vertical'><a href='".$cat."'>";
            
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

            <?php if ( in_category( '3' ) ) : ?>
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
      <div class="col-xs-12 dot_border margin-bottom-lg">
        <h2 class="text-center margin-bottom">Suscribe DJs</h2>
        <figure>
          <img src="<?php bloginfo('template_directory'); ?>/img/ir-col.png" alt="International Ravers" class="center-block img-responsive margin-top-lg margin-bottom-lg" width="50%">
        </figure>
        <div class="col-xs-12 margin-bottom-lg">
          <div class="col-xs-9">
            <p class="text-large"># of suscribes:</p>
          </div> 
          <div class="col-xs-3 text-right">
            <button class="btn btn-success text-large">Go to our DJs</button>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="col-xs-12 margin-bottom-lg">
          <div class="col-xs-4 content-blue">
            <p class="text-center margin-top texto-blanco text-large">invite you<br> DJ</p>
            <p class="text-center margin-top margin-bottom-lg ">
              <a href="https://www.facebook.com/internationalravers" class="icon-green"><i class="fa fa-facebook-official fa-4x"></i></a>
              <a href="https://www.facebook.com/internationalravers" class="icon-green"><i class="fa fa-twitter-square fa-4x"></i></a>
            </p>  
          </div>
          <div class="col-xs-4">
            <p class="text-center margin-top texto-blanco text-large">or</p>
          </div>
          <div class="col-xs-4 content-blue">
            <p class="text-center margin-top texto-blanco text-large">suscribe to our  <br>DJ calendar</p>
            <p class="text-center margin-top margin-bottom-lg">
              <button class="btn btn-success text-large">send us an a mail</button>
            </p>
          </div>
        </div>
      </div> 
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