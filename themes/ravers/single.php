
<?php get_header(); ?>
<div class="white">
  <div class="container">
    <div class="row padding-top-lg padding-bottom">
      <div class="col-xs-12 rowsombra">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-xs-10 col-xs-offset-1 margin-top">
            <h2 class="text-center"><?php the_title(); ?></h2>
            <p class="text-center">
              <small>
                <a href="<?php bloginfo('home'); ?>/blog">Blog Home</a> | <?php the_time('m.s.Y'); ?> By <?php the_author(', '); ?> | Updates
               </small>
            </p>
            <div class="col-xs-12">
            <figure class="img-responsive">
              <?php the_post_thumbnail('destacado_post', array('class' => 'img img-responsive')); ?>
            </figure>
              
            </div>
            <div class="col-xs-10 col-xs-offset-1 margin-top-lg margin-bottom-lg">
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
      <div class="nav-previous col-xs-6 text-right"><?php previous_post_link('&#8249; %link', '%title', 'Previous post in category', TRUE); ?> </div>
      <div class="nav-next col-xs-6 text-left"><?php next_post_link('%link &#8250;', '%title', 'Next post in category', TRUE); ?> </div>
    </div>           
             
  </div><!-- end of #nav-single -->
</div>   
<?php get_footer(); ?>
</body>
</html>