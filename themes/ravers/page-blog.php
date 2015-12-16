<?php
/*
Template Name: Página Blog
*/
?>
<?php get_header(); ?>
<div class="bg_blog">
  <div class="container ">
    <div class="col-xs-12 ">
        <p class="text-center text-blog">international ravers charity : BLOG</p>
    </div>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="row rowsombra">
      <div class="col-xs-12">
        <div class="cat col-xs-2 texto-blanco text-center">Categories</div>
      </div>

      <div class="col-xs-8">

        <div class="title_border col-xs-12"></div>
        <div class="col-xs-12 categories_blog">
          <ul class="list-unstyled">
          <?php
          $args = array(
              'show_option_all'    => '',
              'orderby'            => 'id',
              'order'              => 'ASC',
              'style'              => 'list',
              'show_count'         => 0,
              'hide_empty'         => 0,
              'use_desc_for_title' => 1,
              'feed'               => '',
              'feed_type'          => '',
              'feed_image'         => '',
              'exclude'            => '1',
              'exclude_tree'       => '13',
              'include'            => '',
              'hierarchical'       => 1,
              'title_li'           => __( '' ),
              'show_option_none'   => __( '' ),
              'number'             => null,
              'echo'               => 1,
              'depth'              => 0,
              'current_category'   => 0,
              'pad_counts'         => 0,
              'taxonomy'           => 'category',
              'walker'             => null
          );

          wp_list_categories( $args );
          ?>
          </ul>
        </div>
        <div class="cat col-xs-4 texto-blanco text-center">DJ BIRTHDAY CALENDAR</div>
        <div class="title_border col-xs-12"></div>
        <div class="col-xs-12 margin-top">
          <?php rewind_posts(); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <!-- post -->
          <?php endwhile; ?>
            <!-- post navigation -->
          <?php else: ?>
            <h3 class="Notice-title">No se encontraron Calendarios...</h3>
            <!-- no posts found -->
          <?php endif; ?>
        </div>

      </div>

      <div class="col-xs-4">
        <div class="col-xs-12">
          <div class="margin-top embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/qOLZTZpjXQo" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="margin-top embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="margin-top embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="margin-top embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="margin-top embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="margin-top embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="80%" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>

<script>
  $(document).ready(function(){
    $('.cat-item').addClass("col-xs-4")
  });
</script>
</body>
</html>