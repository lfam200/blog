<?php
/*
Template Name: Página Blog
*/
?>
<?php get_header(); ?>
<div class="bg_blog">
  <div class="container ">
    <div class="col-xs-12 ">
        <p class="text-center text-blog hidden-xs hidden-sm">international ravers charity : BLOG</p>
        <p class="text-center text-blog-sm visible-xs visible-sm">international ravers charity : BLOG</p>
    </div>
  </div>
</div>
<div class="content">
  <div class="container">
    <div class="row rowsombra">
      <div class="col-xs-12">
        <div class="cat col-xs-12 col-sm-12 col-md-6 col-lg-3 texto-blanco text-center">Categories</div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

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
              'exclude'            => '1,874',
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
        
      </div>

      <div class="col-md-4 col-lg-4 hidden-xs hidden-sm ">
        <div class="col-xs-12">
          <div class="margin-top embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="70%" src="https://www.youtube.com/embed/qOLZTZpjXQo" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="margin-top embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="70%" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="margin-top embed-responsive embed-responsive-16by9">
            <iframe class="center-block shadow embed-responsive-item" width="70%" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        
      </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>

<script>
  $(document).ready(function(){
    $('.cat-item').addClass("col-xs-12 col-sm-12 col-md-4 col-lg-4")
  });
</script>
</body>
</html>