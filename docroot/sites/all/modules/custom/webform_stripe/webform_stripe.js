(function($) {

  /**
   * Ajax command to open Stripe Checkout, store result, and submit form.
   */
  Drupal.ajax.prototype.commands.stripeCheckout = function(ajax, data, status) {
    console.log(data.params);
    // Open Stripe Checkout.
    StripeCheckout.open($.extend(data.params, {
      // Payment was successful.
      token: function(token) {
        // Set token and email in token field.
        $(data.selector, ajax.form.context).val(token.id + ':' + token.email);

        // Submit form.
        ajax.form[0].submit();
      }
    }));
  };

  /**
   * Ajax command to proceed without a stripe checkout.
   */
  Drupal.ajax.prototype.commands.proceedWithoutCheckout = function(ajax, data, status) {
    console.log(data.params);
    ajax.form[0].submit();
  };

}(jQuery));
