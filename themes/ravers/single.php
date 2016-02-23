
<?php get_header(); ?>
<?php 
  $categoria = get_the_category();
  $parent = get_cat_name($categoria[0]->category_parent);
  // echo $parent;
  if($parent == 'January' || $parent == 'February' || $parent == 'March' || $parent == 'April' || $parent == 'May' || $parent == 'June' || $parent == 'July' || $parent == 'August' || $parent == 'September' || $parent == 'October' || $parent == 'November' || $parent == 'December'){
?>
<div class="pinki img-bg-cal">
  <div class="container">
    <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col-xs-12 border-dj margin-top-lg margin-bottom-lg">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <figure class="margin-center-vert">
            <?php the_post_thumbnail('destacado_dj', array('class' => 'img img-responsive img-circle')); ?>
          </figure>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <h2 class="text-center margin-top-center"><?php the_title(); ?></h2>
          <p class="text-center"><small>
          <?php
           $meta = get_post_meta( get_the_ID(), 'born' );
           if( !empty($meta) ) {
           echo $meta[0];
           }
          ?>

          </small>
          </p>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <?php the_content(); ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="t-blue col-xs-4 texto-blanco text-left">FOLLOW ME</div>
          <div class="title_border col-xs-12"></div>
          <div class="col-xs-12 margin-bottom-lg">
            <?php
           $meta = get_post_meta( get_the_ID(), 'social' );
           if( !empty($meta) ) {
            $i = 0;
            while ($i < count($meta)) {
              echo "<br><a href='".$meta[$i]."'>".$meta[$i]."</a><br>";
              $i++;
            }
           
           }
          ?>
          </div>
          <div class="title_border col-xs-12"></div>
          <div class="col-xs-12 margin-bottom-lg margin-top">
            <?php
           $meta = get_post_meta( get_the_ID(), 'aside' );
           if( !empty($meta) ) {
            $i = 0;
            while ($i < count($meta)) {
              echo "<img class='img img-responsive' src=".$meta[$i].">";
              $i++;
            }
           
           }
          ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
         
            <?php else : ?>
         
                <h2>pagina no encontrada</h2>
         
            <?php endif; ?>  
    </div>
  </div>  
</div>
<div class="bg-calendar">
  <img src="<?php bloginfo('template_directory'); ?>/img/fc.png" alt="" width="100%">
</div>
<div class="prev-next">
  <div class="container">
    <div class="row">
      <div class="nav-previous col-xs-6 text-right">
        <?php previous_post_link('&#8249; %link', '%title', 'Previous post in category', TRUE); ?>
      </div>
      <div class="nav-next col-xs-6 text-left">
        <?php next_post_link('%link &#8250;', '%title', 'Next post in category', TRUE); ?>
      </div>
    </div>           
  </div><!-- end of #nav-single -->
</div>
<?php
  }else{
    if($parent == "EDM festivals around the world"){ 
?>
<div class="pinki img-bg-cal">
  <div class="container">
    <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col-xs-12 border-dj margin-top-lg margin-bottom-lg">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <figure class="margin-center-vert">
            <?php the_post_thumbnail('destacado_dj', array('class' => 'img img-responsive img-circle')); ?>
          </figure>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <h2 class="text-center margin-top-center"><?php the_title(); ?></h2>
          <p class="text-center"><small>
          <?php
           $meta = get_post_meta( get_the_ID(), 'born' );
           if( !empty($meta) ) {
           echo $meta[0];
           }
          ?>

          </small>
          </p>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <?php the_content(); ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="t-blue col-xs-4 texto-blanco text-left">SOCIAL MEDIA</div>
          <div class="title_border col-xs-12"></div>
          <div class="col-xs-12 margin-bottom-lg">
            <?php
           $meta = get_post_meta( get_the_ID(), 'social' );
           if( !empty($meta) ) {
            $i = 0;
            while ($i < count($meta)) {
              echo "<br><a href='".$meta[$i]."'>".$meta[$i]."</a><br>";
              $i++;
            }
           
           }
          ?>
          </div>
          <div class="title_border col-xs-12"></div>
          <div class="col-xs-12 margin-bottom-lg margin-top">
            <?php
           $meta = get_post_meta( get_the_ID(), 'aside' );
           if( !empty($meta) ) {
            $i = 0;
            while ($i < count($meta)) {
              echo "<img class='img img-responsive' src=".$meta[$i].">";
              $i++;
            }
           
           }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
<div class="bg-calendar">
  <img src="
  <?php 
  $meta = get_post_meta( get_the_ID(), 'img-final' );
  if( !empty($meta) ) {
  echo $meta[0];
  }
   ?>

  " alt="" width="100%">
</div>
<?php endwhile; ?>
         
            <?php else : ?>
         
                <h2>pagina no encontrada</h2>
         
            <?php endif; ?> 
<div class="prev-next">
  <div class="container">
    <div class="row">
      <div class="nav-previous col-xs-6 text-right">
        <?php previous_post_link('&#8249; %link', '%title', 'Previous post in category', TRUE); ?>
      </div>
      <div class="nav-next col-xs-6 text-left">
        <?php next_post_link('%link &#8250;', '%title', 'Next post in category', TRUE); ?>
      </div>
    </div>           
  </div><!-- end of #nav-single -->
</div>
<?php 
  }else{
 ?>
<div class="white">
  <div class="container">
    <div class="row padding-top-lg padding-bottom">
      <div class="col-xs-12 rowsombra">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-xs-10 col-xs-offset-1 margin-top">
            <h2 class="text-center visible-md visible-lg"><?php the_title(); ?></h2>
            <h4 class="text-center hidden-md hidden-lg"><?php the_title(); ?></h4>
            <p class="text-center">
              <small class="visible-md visible-lg">
                <a href="<?php bloginfo('home'); ?>/blog">Blog Home</a> | <?php the_time('m.d.Y'); ?> By <?php the_author(', '); ?> | Updates
              </small>
              <small class="hidden-md hidden-lg">
                <a href="<?php bloginfo('home'); ?>/blog">Blog Home</a> | <?php the_time('m.d.Y');?> | Updates
              </small>
            </p>
            <div class="visible-xs visible-sm">
              <?php the_post_thumbnail('destacado_post', array('class' => 'img img-responsive')); ?>
            </div>
            <div class="col-xs-12 visible-md visible-lg">
              
                <?php the_post_thumbnail('destacado_post', array('class' => 'img img-responsive')); ?>
              
            </div>
            <div class="col-xs-10 text-justify col-xs-offset-1 margin-top-lg margin-bottom-lg visible-md visible-lg">
              <?php the_content(); ?>
              By <?php the_author(', '); ?>
            </div>
            <div class="row text-justify margin-top-lg margin-bottom-lg hidden-md hidden-lg">
              <?php the_content(); ?>
              By <?php the_author(', '); ?>
            </div>
            
          </div>
                
            <?php endwhile; ?>
         
            <?php else : ?>
         
                <h2>pagina no encontrada</h2>
         
            <?php endif; ?>
            
      </div> 
      

    </div>
    
  </div>
</div> 
<div class="prev-next">
  <div class="container">
    <div class="row">
      <div class="nav-previous col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right"><?php previous_post_link('&#8249; %link', '%title', 'Previous post in category', TRUE); ?> </div>
      <div class="nav-next col-xs-12 col-sm-12 col-md-6 col-lg-6 text-left"><?php next_post_link('%link &#8250;', '%title', 'Next post in category', TRUE); ?> </div>
    </div>                    
  </div><!-- end of #nav-single -->
</div>
<?php } }?>   
<?php get_footer(); ?>
</body>
</html>