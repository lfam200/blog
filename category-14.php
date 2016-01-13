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
        <div class="cat col-xs-2 texto-blanco text-center">Categories</div>
      </div>

      <div class="col-xs-8">

        <div class="title_border col-xs-12"></div>
      </div>
    </div>
  </div>
</div>        
<div class="white">
  <div class="container">
    <div class="row">
      <h1 class="text-center">
      <?php 
        echo single_cat_title("",false); 
        

      ?>
      </h1>
      <div>
       
      </div>
      
    </div>
  </div>
</div>
<?php get_footer(); ?>
</body>
</html>