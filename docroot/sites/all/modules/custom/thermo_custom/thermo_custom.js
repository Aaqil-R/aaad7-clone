(function ($) {  
    Drupal.behaviors.thermo_custom = {
    attach: function (context, settings) { 

      var collectedamount = parseInt(Drupal.settings.thermo_custom.supporter_count);
      var definedamount = parseInt(Drupal.settings.thermo_custom.definedamount);

      console.log("I am here");
      console.log(definedamount);
      console.log(collectedamount);

      $('#donation_goal').goalProgress({
        goalAmount: 2000,
        currentAmount: collectedamount,
        textBefore: '£',
        textAfter: ' raised so far'
      });
    }
  };  
}(jQuery));



