<?php get_header(); ?>
<div class="white">
  <div class="container">
    <div class="row">
      <div id="vmap" style="width: 100%; height: 40em;"></div>
      <input type="hidden" id="home" value="<?php bloginfo('home');  ?>/category/">
    </div>
  </div>
</div>  

<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/dist/jquery.vmap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/dist/maps/jquery.vmap.world.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#vmap').vectorMap(
    {
        map: 'world_en',
        backgroundColor: '#ffffff',
        borderColor: '#818181',
        borderOpacity: 0.25,
        borderWidth: 1,
        color: '#0080FF',
        enableZoom: true,
        hoverColor: '#c9dfaf',
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#b6d6ff', '#005ace'],
        selectedColor: '#FF00FF',
        selectedRegions: [],
        showTooltip: true,
        onRegionClick: function(element, code, region)
        {

          region = region.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'')
          var direccion = $('#home').val()
          direccion = direccion + region +"-edm-clubs-around-the-world"
          // alert(direccion);
          window.location.href = direccion;
          //   var message = 'You clicked "'
          //       + region
          //       + '" which has the code: '
          //       + code.toUpperCase();

            // alert(message);
        }
    }

  );
});
</script>
</body>
</html>