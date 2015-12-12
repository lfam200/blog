<?php get_header(); ?>
<div class="homepage-hero-module">
  <div class="video-container">
    <div class="title-container">
      <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 " >
        <h2 class="textvideo visible-lg">International Ravers Charity represents the EDM Community worldwide to help in solving one of the most critical problems on the planet today: Water Scarcity in Developing Countries</h2>
        <h3 class="textvideo visible-sm visible-md">International Ravers Charity represents the EDM Community worldwide to help in solving one of the most critical problems on the planet today: Water Scarcity in Developing Countries</h3>
        <h3 class="textvideo visible-xs">International Ravers Charity represents the EDM Community worldwide to help in solving one of the most critical problems on the planet today: Water Scarcity in Developing Countries</h3>
      </div>
      <div class="col-xs-12 text-center margin-bottom-lg margin-top-lg">
        <a href="{{ route('programs') }}#warriors">
          <button type="button" class="btn btn-success btn-lg textvideo">WATCH OUR VIDEOS</button>
        </a>
      </div>
    </div>
    <div class="filter"></div>
    <video autoplay loop class="fillWidth hidden-xs">
      <source src="<?php bloginfo('template_directory'); ?>/video/heroes_short.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
    </video>
    <div class="poster hidden">
        <img src="<?php bloginfo('template_directory'); ?>/img/videoframe.jpg" alt="Heroes - Alesso // International Ravers Charity">
    </div>
  </div>
</div>
<div class="c_programs">
  <div class="container">
    <h2 class="text-center title-white margin-top">Our <strong>charity</strong> programs</h2>
    <div class="row margin-top-lg margin-bottom-lg">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h4 class="title-white text-center" >Water accessibility program</h4>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="center-block shadow embed-responsive-item" src="https://www.youtube.com/embed/qOLZTZpjXQo" frameborder="0" allowfullscreen></iframe>
        </div>
        <h4 class="title-white text-center">This program aims to bring free water refill for every community in need.</h4>
        <div class="col-xs-12 text-center margin-top-lg ">
          <a href="{{ route('donate' )}}"><button type="button" class="btn btn-success btn-lg btn-custom">Make a Kandi Trade</button></a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h4 class="title-white text-center" >Sanitation & hygiene program</h4>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="center-block shadow embed-responsive-item" src="https://www.youtube.com/embed/7x0Y9eIwurw" frameborder="0" allowfullscreen></iframe>
        </div>
        <h4 class="title-white text-center">The dignity  of a toilet, sink and a shower must be for everyone!</h4>
        <div class="col-xs-12 text-center margin-top-lg ">
            <a href="{{ route('donate' )}}"><button type="button" class="btn btn-success btn-lg btn-custom">Help Little Warriors</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="yellow">
  <div class="container">
    <h2 class="text-center title-white margin-top-lg"><strong>How</strong> we invest your <strong>Donations</strong></h2>
    <div class="row margin-bottom-lg">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <h3 class="title-white text-center" >EXPLORE</h3>
        <img src="<?php bloginfo('template_directory'); ?>/img/explore.png" alt="Explore" width="60%" class="center-block" >
        <h4 class="title-white text-center">We explore new causes to make strategic alliance with organizations working more than 2 years in the field.</h4>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <h3 class="title-white text-center" >CHARITIES</h3>
        <img src="<?php bloginfo('template_directory'); ?>/img/billete.png" alt="Charities" width="60%" class="center-block" >
        <h4 class="title-white text-center">Our team analyze their projects and once approved we proceed to fund and maintain over time.</h4>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <h3 class="title-white text-center" >KANDI TRADE</h3>
        <img src="<?php bloginfo('template_directory'); ?>/img/isologo.png" alt="Kandi Trade" width="60%" class="center-block" >
        <h4 class="title-white text-center">Yes...<br>WE CAN DO ANYTHING!!!</h4>
      </div>
    </div>
  </div>
</div>
<div class="white margin-bottom">
  <div class="container">
    <h2 class="text-center title-green margin-top-lg margin-bottom-lg"><strong>Donate</strong> the same amount of<strong> water</strong> that <br>you <strong>drank</strong> in your last <strong>rave.</strong><br>(<small class="from">from</small> $0.50 per liter)</h2>
    <div class="row visible-md visible-lg">
      <div class="col-sm-3">
        <img src="https://pbs.twimg.com/profile_images/609101118136823809/z6jR8lye.jpg" alt="@janarubiomiller" width="70%" class="center-block img-circle" >
        <h4 class="text-center"><a href="https://twitter.com/janarubiomiller">@janarubiomiller</a></h4>
        <h5 class=" text-center">I really like this idea!! that song Heroes is just amazing. <strong class="hashtag">@IntRavers #FreeWaterRefill</strong> for every community in need! I love It!</h5>
      </div>
      <div class="col-sm-3">
        <img src="https://pbs.twimg.com/profile_images/3314948403/13fc87b5224b432a41bfdf278965a9c7.jpeg" alt="Charities" width="70%" class="center-block img-circle" >
        <h4 class="text-center"><a href="https://twitter.com/alevittoriag">@alevittoriag</a></h4>
        <h5 class=" text-center">Me encanta la música electronica. <strong class="hashtag">@IntRavers</strong> ... No hay forma de sobrevivir sin agua a un rave. <strong class="hashtag">#FreeWaterRefill</strong> is <strong class="hashtag">#PLUR #Bolivia #Perú</strong></h5>
      </div>
      <div class="col-sm-3">
        <img src="{{ asset('img/claudiotw.png')}}" width="70%" class="center-block img-circle" >
        <h4 class="text-center"><a href="https://twitter.com/Claudioiam">@Claudioiam</a></h4>
        <h5 class=" text-center">Eu fui a Tomorrowland Brasil este ano e foi incrível.<strong class="hashtag">@IntRavers</strong> eu gostaria de compartilhar água para crianças de países em desenvolvimento.</h5>
      </div>
      <div class="col-sm-3 margin-bottom-lg">
        <img src="https://pbs.twimg.com/profile_images/1301175628/161257_1467441613_5932411_q.jpg" alt="Candy Trade" width="70%" class="center-block img-circle" >
        <h4 class="text-center"><a href="https://twitter.com/Claudioiam">@Claudioiam</a></h4>
        <h5 class=" text-center"><strong class="hashtag">@IntRavers</strong> I went to <strong class="hashtag">@tomorrowworld</strong> this year and I agree with share water with communities in need- <strong class="hashtag">@IntRavers</strong> <strong class="hashtag">#FreeWaterRefill</strong> is <strong class="hashtag">#PLUR</strong>!!</h5>
      </div>
    </div>
    <div class="row sliderbody visible-xs visible-sm">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="col-sm-3">
              <img src="https://pbs.twimg.com/profile_images/609101118136823809/z6jR8lye.jpg" alt="@janarubiomiller" width="70%" class="center-block img-circle" >
              <h4 class="text-center"><a href="https://twitter.com/janarubiomiller">@janarubiomiller</a></h4>
              <h5 class=" text-center">I really like this idea!! that song Heroes is just amazing. <strong class="hashtag">@IntRavers #FreeWaterRefill</strong> for every community in need! I love It!</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="col-sm-3">
              <img src="https://pbs.twimg.com/profile_images/3314948403/13fc87b5224b432a41bfdf278965a9c7.jpeg" alt="Charities" width="70%" class="center-block img-circle" >
              <h4 class="text-center"><a href="https://twitter.com/alevittoriag">@alevittoriag</a></h4>
              <h5 class=" text-center">Me encanta la música electronica. <strong class="hashtag">@IntRavers</strong> ... No hay forma de sobrevivir sin agua a un rave. <strong class="hashtag">#FreeWaterRefill</strong> is <strong class="hashtag">#PLUR #Bolivia #Perú</strong></h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="col-sm-3">
              <img src="{{ asset('img/claudiotw.png')}}" width="70%" class="center-block img-circle" >
              <h4 class="text-center"><a href="https://twitter.com/Claudioiam">@Claudioiam</a></h4>
              <h5 class=" text-center">Eu fui a Tomorrowland Brasil este ano e foi incrível.<strong class="hashtag">@IntRavers</strong> eu gostaria de compartilhar água para crianças de países em desenvolvimento.</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="col-sm-3 margin-bottom-lg">
              <img src="https://pbs.twimg.com/profile_images/1301175628/161257_1467441613_5932411_q.jpg" alt="Candy Trade" width="70%" class="center-block img-circle" >
              <h4 class="text-center"><a href="https://twitter.com/Claudioiam">@Claudioiam</a></h4>
              <h5 class=" text-center"><strong class="hashtag">@IntRavers</strong> I went to <strong class="hashtag">@tomorrowworld</strong> this year and I agree with share water with communities in need- <strong class="hashtag">@IntRavers</strong> <strong class="hashtag">#FreeWaterRefill</strong> is <strong class="hashtag">#PLUR</strong>!!</h5>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
</div>
<div class="blue-escuela">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-5 col-lg-6">
        <h2 class="toilet text-left visible-md visible-lg text-shadow   ">It wouldn't be possible to make a rave with no toilets or sinks. Would you like to join us in providing the dignity of a toilet for those people in developing countries</h2>
        <h3 class="toilet text-left visible-xs visible-sm text-shadow    ">It wouldn't be possible to make a rave with no toilets or sinks. Would you like to join us in providing the dignity of a toilet for those people in developing countries</h3>
        <div class="col-xs-12 text-center margin-bottom-lg">
          <a href="{{ route('programs') }}#warriors">
            <button type="button" class="btn btn-success btn-lg ">Help Little Warriors</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.videoBG.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<!-- Swiper JS -->
<script src="<?php bloginfo('template_directory'); ?>/js/swiper.min.js"></script>
<!-- Initialize Swiper -->
<script>
$(document).ready(function () {
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 4500,
        autoplayDisableOnInteraction: false
    });
});  
</script>
</body>
</html>