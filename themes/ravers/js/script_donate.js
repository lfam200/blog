/** Document Ready Functions **/
/********************************************************************/

$( document ).ready(function() {

    

    $('#inputDays').change(function(event){
        vD = $(this).val();
        if(vD>21)
        {
            alert("The longest EDM festival is:  21 days.");
            $(this).val(21);
        }
        if(vD<=0)
        {
            alert("Insert a valid number of days")
            $(this).val(1);
        }

        days = $('#inputDays').val();
        liter = $('#inputLiter').val();
        ammount = $('#inputAmmount').val();

        total = days*liter*ammount
        total = parseFloat(total).toFixed(2)
        $('#inputTotal').val(total)
        amount = total*100
        $('#amount').val(amount)
        $('#script_donate').attr('data-amount',amount)
       
    })
    $('#inputLiter').change(function(event){
        vL = $(this).val();

        if(vL>4)
        {
            alert("Our research about the average of water that a raver drinks on a festival day is 3.7 lts of water. for this reason is impossible  donate more than 4 lts daily");
            $(this).val(4);
        }
        if(vL<=0)
        {
            alert("ingresa un numero de dias valido")
            $(this).val(1);
        }

        days = $('#inputDays').val();
        liter = $('#inputLiter').val();
        ammount = $('#inputAmmount').val();
        
        total = days*liter*ammount
        total = parseFloat(total).toFixed(2)
        $('#inputTotal').val(total)
        amount = total*100
        $('#amount').val(amount)
       
    })

    $('#inputAmmount').change(function(event){
        vA = $(this).val();
        vA = parseFloat(vA).toFixed(2);
        $(this).val(vA);

        // if(vL>4)
        // {
        //     alert("El numero de dias maximo permitido es 4");
        //     $(this).val(4);
        // }
        if(vA<=0)
        {
            alert("ingresa un numero de dias valido")
            $(this).val(0.50);
        }

        days = $('#inputDays').val();
        liter = $('#inputLiter').val();
        ammount = $('#inputAmmount').val();
        
        total = days*liter*ammount
        total = parseFloat(total).toFixed(2)
        $('#inputTotal').val(total)
        amount = total*100
        $('#amount').val(amount)
       
    })

    $('#inputAmmountH').change(function(event){
        total = $(this).val();
        amount = total*100
        $('#amountH').val(amount)

    })


      var handler = StripeCheckout.configure({
        key: 'pk_test_kaeIHcdpm0HqX1eb50jqvztA',
        image: 'img/128x128.png',
        locale: 'auto',
        token: function(token) {
          // Use the token to create the charge with a server-side script.
          // You can access the token ID with `token.id`
        }
      });

      $('#customButton').on('click', function(e) {
        var amount = $('#inputTotal').val()
        amount = amount*100
        // Open Checkout with further options
        handler.open({
          name: 'International Ravers, Inc.',
          description: '2 widgets',
          amount: amount
        });
        e.preventDefault();
      });

      // Close Checkout on page navigation
      // $(window).on('popstate', function() {
      //   handler.close();
      // });

    
    $('#kandi > .stripe-button-el').click(function(){
        var edm = $('#inputRave').val();
        var check;
        if($('#terms').is(':checked')){
            check = 1;
        }
        else{
            check = 0;
        }
        if(edm == ''){
            if(check=='0'){
                alert("To donate is required to fill all the fields and accept the terms of use.");

                location.reload();
            }else{
                alert("This field is required")
                location.reload();
            }
        }else{
            if(check==0){
                alert("To donate is required agree the Terms of Use.")
                location.reload();
            }
        }
    });
    $('#warriors > .stripe-button-el').click(function(){
        var check;
        if($('#terms1').is(':checked')){
            check = 1;
        }
        else{
            check = 0;
        }
        
        if(check=='0'){
            alert("To donate is required to fill all the fields and accept the terms of use.");
        location.reload();
        }
    });


});
