<?php get_header(); ?>
<div class="white">
  <div class="container">
    <div class="row">
      <div id="vmap" style="width: 100%; height: 40em;"></div>
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
        backgroundColor: '#a5bfdd',
        borderColor: '#818181',
        borderOpacity: 0.25,
        borderWidth: 1,
        color: '#f4f3f0',
        enableZoom: true,
        hoverColor: '#c9dfaf',
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#b6d6ff', '#005ace'],
        selectedColor: '#c9dfaf',
        selectedRegions: [],
        showTooltip: true,
        onRegionClick: function(element, code, region)
        {
            var message = 'You clicked "'
                + region
                + '" which has the code: '
                + code.toUpperCase();

            alert(message);
        }
    }

  );
});
</script>
</body>
</html>