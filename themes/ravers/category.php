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
        <h3 class="texto-blanco text-right"><a href="http://localhost:8888/iravers/blog/" class="a_nolink">Categories</a></h3>
      </div>
    </div>
  </div>
</div>
<div class="white">
  <div class="container">
    <div class="row rowsombra">
      
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
        </div> 

      <?php
        }

      ?>
      
      <div class="col-xs-12">
      
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
</body>
</html>