<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
  <title>
    <?php 
      if ( is_home()) { 
        echo 'Home'; 
      }else{ 
        if(the_title()){
          the_title();
        }
        else{
          echo 'Blog';
        }
      } 
    ?> | International Ravers Charity.
  </title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/css/app.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="International Ravers Charity" height="70"></a>
    </div>
    
    <?php include TEMPLATEPATH . "/templates/nav.php" ?>
    <?php include TEMPLATEPATH . "/templates/nav-sm.php" ?>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
