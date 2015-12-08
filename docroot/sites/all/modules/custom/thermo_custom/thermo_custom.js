(function($) {
    Drupal.behaviors.thermo_custom = {
        attach: function(context, settings) {

            var collectedamount = parseInt(Drupal.settings.thermo_custom.supporter_count);
            var definedamount = parseInt(Drupal.settings.thermo_custom.definedamount);

            $('#donation_goal').goalProgress({
                goalAmount: definedamount,
                currentAmount: collectedamount,
                textBefore: '£',
                textAfter: ' Raised so far'
            });
        }
    };
}(jQuery));