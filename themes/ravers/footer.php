<div class="footer">
    <div class="container">
      <div class="row margin-top visible-md visible-lg">
        <div class="col-xs-2">
           <ul class="list-unstyled menu-footer">
            <li><a class="texto-blanco" href="#"><strong>FOLLOW US</strong></a></li>
            <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/blog">Read our blog</a></li>
            <li><a class="texto-oscuro" href="https://www.facebook.com/internationalravers" target="_blank">Facebook</a></li>
            <li><a class="texto-oscuro" href="https://twitter.com/intravers" target="_blank">Twitter</a></li>
            <li><a class="texto-oscuro" href="https://instagram.com/internationalraverscharity" target="_blank">Instagram</a></li>
           </ul>
        </div>
        <div class="col-xs-2">
           <ul class="list-unstyled menu-footer">

               <li><a class="texto-blanco" href="#"><strong>GET INVOLVED</strong></a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/category/donate">Donate</a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/category/donate#edm_name">Kandi Trade</a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/category/donate#sc_uea_custom_amount_2">Help Little Warriors</a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/dj-birthday">DJ Birthday Challenge</a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/volunteers">International Ravers Volunteer</a></li>

           </ul>
        </div>
        <div class="col-xs-2">
          <ul class="list-unstyled menu-footer">

               <li><a class="texto-blanco" href="<?php bloginfo('home'); ?>/programs"><strong>PROGRAMS</strong></a></li>
               <li><a class="texto-oscuro" href="#">Water accesability program</a></li>
               <li><a class="texto-oscuro" href="#">Sanitation & higiene program</a></li>

           </ul>
        </div>
        <div class="col-xs-3">
          <ul class="list-unstyled menu-footer">

               <li><a class="texto-blanco" href="<?php bloginfo('home'); ?>/about-us"><strong>ABOUT US</strong></a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/about-us#team">Our Team</a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/volunteers">Join Us</a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/contact-us">Send us a email:</a></li>
               <li><a class="texto-oscuro" href="mailto:charity@internationalravers.org">charity@internationalravers.org</a></li>


           </ul>
        </div>
        <div class="col-xs-3">
          <ul class="list-unstyled menu-footer">

               <li><a class="texto-blanco" href="<?php bloginfo('home'); ?>/contact-us"><strong>CONTACT US</strong></a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/contact-us">Questions?</a></li>
               <li><a class="texto-oscuro" href="<?php bloginfo('home'); ?>/contact-us">give us a shot:</a></li>
               <li><a class="texto-oscuro" href="mailto:charity@internationalravers.org">charity@internationalravers.org</a></li>


           </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <p class="texto-oscuro">
          International Ravers Charity is a 501 (c)(3) Non Profit Organization under the sponsorship of Green Wave • <a href="<?php bloginfo('home'); ?>/privacy-policy">Privacy Policy</a> • <a href="<?php bloginfo('home'); ?>/terms-of-use">Terms of Use</a> • ©2015 • Made with ❤ in CA. </p></div>
      </div>
    </div>
  </div>
  <div class="titulo" id="<?php the_title(); ?>"></div>
  <?php wp_footer(); ?>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.js"></script>
  <script>
  $(document).ready(function(){
    var a = $('.titulo').attr('id');
    if(a == 'Donate'){
      $('.menu-item-25').addClass('active');
    }
    if(a == 'Why Water'){
      $('.menu-item-24').addClass('active');
    }
    if(a == 'Why Ravers'){
      $('.menu-item-23').addClass('active');
    }
    if(a == 'Programs'){
      $('.menu-item-22').addClass('active');
    }
    if(a == 'DJ Birthday'){
      $('.menu-item-21').addClass('active');
    }
    if(a == 'About Us'){
      $('.menu-item-20').addClass('active');
    }
    if(a == 'Blog'){
      $('.menu-item-19').addClass('active');
    }
    
  })
  </script>
