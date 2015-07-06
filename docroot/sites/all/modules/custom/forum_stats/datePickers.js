(function ($) {
  Drupal.behaviors.custom_js = {
	    attach: function(context) { 
	    $( document ).ready(function() {
	      $( "input[name*='date_from']" ).datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths:1, 
          dateFormat : "d M, yy",
          onClose: function( selectedDate ) {
            $( "input[name*='date_to']" ).datepicker( "option", "minDate", selectedDate );
          }
        });
        $( "input[name*='date_to']" ).datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths:1, 
          dateFormat : "d M, yy",
          onClose: function( selectedDate ) {
            $( "input[name*='date_from']" ).datepicker( "option", "maxDate", selectedDate );
          }
        });
        });
	    }
	  };
	})(jQuery); 
