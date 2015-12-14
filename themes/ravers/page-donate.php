<?php
/*
Template Name: Página Donar
*/
?>
<?php get_header(); ?>
<div class="white">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 margin-bottom-lg margin-top-lg">
      <h3 class=" text-center visible-md visible-lg"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBER OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVALS WORLDWIDE.</strong></h3>
      <h4 class=" text-center visible-xs visible-sm"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBER OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVALS WORLDWIDE.</strong></h4>
      <h2 class="text-center "><strong>WE CAN DO ANYTHING?</strong></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 bg-kandi">
      <h3 class="texto-blanco text-center text-shadow margin-top-lg">Make a Kandi Trade</h3>
      <h4 class="texto-blanco text-center text-shadow">Water accesibility program</h4>
      
      <form action="/donate" method="POST">
      <input type="hidden" name="amount" id="amount" value="100"/>
      <div class="bg-form margin-top col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        <div class="form-group col-xs-12 margin-top">
          <label class="texto-blanco text-shadow" for="inputRave">Last EDM Festival or Club you attended</label>
          <input type="text" class="form-control" id="inputRave" autofocus required>
        </div>
        <div class="form-group col-xs-5">
          <label class="texto-blanco text-shadow" for="inputDays">How many days (or nights)</label>
          <input type="number" class="form-control" id="inputDays" value="1" min="1" max="4">
        </div>
        <div class="form-group col-xs-7">
          <label class="texto-blanco text-shadow" for="inputLiter">Average of water you drank in the Rave daily</label>
          <input type="number" class="form-control" id="inputLiter" value="1" min="1" max="4">
        </div>
        <div class="form-group col-xs-12">
          <label class="texto-blanco text-shadow" for="inputAmmount">Ammount of money you want to donate per liter consumed</label>
          <div class="input-group">
            <div class="input-group-addon">$</div>
            <input type="number" class="form-control" id="inputAmmount" value="1.00" min="0.50" step="0.50">
          </div>
        </div>
        <div class="form-group col-xs-12">
          <label class="texto-blanco text-shadow" for="inputTotal">Total</label>
          <div class="input-group">
            <div class="input-group-addon">$</div>
            <input type="number" class="form-control" id="inputTotal" value="1.00" disabled>
          </div>
        </div>
        <div class="form-group col-xs-12">
          <p class="text-justify texto-blanco text-shadow">* Our research about the average of water that a raver drinks on a festival day is 3.7 lts of water. For this reason is impossible  donate more than 4 lts daily.</p>
        </div>
        <div class="checkbox form-group col-xs-12">
         <label>
            <input type="checkbox" id="terms"><span class="texto-blanco text-shadow">I have read and agree to the</span> <a class="text-shadow a-color" href="<?php bloginfo('home'); ?>/terms-of-use">Terms of Use</a>.
          </label>
        </div>
        <div class="text-center margin-bottom-lg" id="kandi"> 
         
        </div>
      </div>
    </form>
  </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 bg-help">
          <h3 class="texto-blanco text-center text-shadow margin-top-lg">Help Little Warriors</h3>
          <h4 class="texto-blanco text-center text-shadow">Sanitation & hygiene program</h4>
          <form action="/donate" method="POST">
          <div class="bg-form margin-top col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <div class="form-group col-xs-12 margin-top">
              <label class="texto-blanco text-shadow" for="inputAmmountH">You can donate one time or monthly</label>
              <div class="input-group">
                <div class="input-group-addon">$</div>
                <input type="number" class="form-control" id="inputAmmountH" value="1.00">
              </div>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"><span class="texto-blanco text-shadow">Make this a recurring monthly gift</span>
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" id="terms"required><span class="texto-blanco text-shadow">I have read and agree to the</span> <a class="text-shadow a-color" href="<?php bloginfo('home'); ?>/terms-of-use">Terms of Use</a>.
              </label>
            </div>
            <div class="text-center margin-bottom-lg" id="warriors">
              
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
</body>
</html>