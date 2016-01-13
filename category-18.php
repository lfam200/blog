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

<div class="content">
  <div class="container">
    <div class="row rowsombra">
      <div class="col-xs-12">
      <?php
      // Obtenemos la informacion de las subcategorias contenidas en la categoria "work"
      $idObj = get_query_var('cat');
      $args = array(
                    'type'                     => 'post',
                    'child_of'                 => $idObj,
                    'parent'                   => '',
                    'orderby'                  => 'name',
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
          echo $category->name;
      endforeach;
      ?>
      </div> 
    </div>  

      
        
      </div>
  </div>
</div>        

<?php get_footer(); ?>
</body>
</html>