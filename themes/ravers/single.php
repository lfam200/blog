
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
      <div class="entry-post-nav group">
          <?php $prev_post = get_previous_post(); ?>

          <?php if ( !empty( $prev_post ) ) : ?>  
              <div class="post-prev">
                  <a href="<?php echo get_permalink( $prev_post->ID ); ?>">? Prev Posts</a>
                  <h4><a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?></a></h4>
              </div>
          <?php endif; ?>

          <?php $next_post = get_next_post(); ?>

          <?php if ( !empty( $next_post ) ) : ?>  
              <div class="post-next">
                  <a href="<?php echo get_permalink( $next_post->ID ); ?>">Next Posts ?</a>
                  <h4><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a></h4>
              </div>
          <?php endif; ?>
      </div>
    </div>
    
  </div>
</div>    
<?php get_footer(); ?>
</body>
</html>