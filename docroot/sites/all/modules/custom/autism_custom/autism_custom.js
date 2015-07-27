(function ($) {  
    function ReplaceNumberWithCommas(yourNumber) { 
        var n= yourNumber.toString().split("."); 
        n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");  
        return n.join(".");
     } 
    Drupal.behaviors.autism_custom = {
    attach: function (context, settings) {  
     urlval = false;
       if (Drupal.settings.autism_custom.supporters_url != 0) {
        $.get(Drupal.settings.autism_custom.supporters_url, function( data ) {
          if (isNaN(data) == false){ 
            $('.member-count').attr('data-sp',data); 
             urlval = true;
          }
        }); 
      }  
      $(window).load(function () {
        if(urlval == true){
          var spdata = parseInt($('.member-count').data('sp'));
        }  
        var spcount = parseInt(Drupal.settings.autism_custom.supporter_count);
        var valuetype = Drupal.settings.autism_custom.supporters_value_type;
        
        if(valuetype == 'web' && urlval == true){
          $("span.numbers").html(ReplaceNumberWithCommas(spdata));
        }
        if(valuetype == 'both' && urlval == true){
          var nval = spdata + spcount;
          $("span.numbers").html(ReplaceNumberWithCommas(nval));
        }
        if(valuetype == 'offset'){
          $("span.numbers").html(ReplaceNumberWithCommas(spcount));
        } 
        
      });
      
    }
  };  
}(jQuery));
