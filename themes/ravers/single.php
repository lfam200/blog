
<?php get_header(); ?>
<div class="white">
  <div class="container">
    <div class="row padding-top-lg padding-bottom">
      <div class="col-xs-12 rowsombra">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-xs-10 col-xs-offset-1">
            <h2 class="text-center"><?php the_title(); ?></h2>
            <p class="text-center">
              <small>
                              Blog Home | <?php the_time('m.s.Y'); ?> By <?php the_author(', '); ?> | Updates
                          </small>
            </p>
            <div class="col-xs-8 col-xs-offset-2">
              <?php the_post_thumbnail(); ?>
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
<?php get_footer(); ?>
</body>
</html>