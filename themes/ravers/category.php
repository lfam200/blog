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
      <div >
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