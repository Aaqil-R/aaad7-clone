(function ($) {
  Drupal.behaviors.forumstats = {
	    attach: function(context) { 
	    $( document ).ready(function() {
	    	$('.formright').hide();
	    	$('.formright .button').prepend('<button id="edit-close" class="webform-submit">Cancel</button>');
	    	$('#edit-close').click(function (e) {
	    	   e.preventDefault();
	    		    	$('.formright').hide();
	    	});
	      $( "#selected_date_form" ).datepicker({
          numberOfMonths:1, 
          defaultDate : "-1m",
          dateFormat : "d-M-yy",
          onSelect: function( selectedDate ) {
            console.log(selectedDate);
            $( "#selected_date_to" ).datepicker( "option", "minDate", selectedDate );
          }
        });
        $( "#selected_date_to" ).datepicker({
          numberOfMonths:1, 
          dateFormat : "d-M-yy",
          onSelect: function( selectedDate ) {
            console.log(selectedDate);          
            $( "#selected_date_form" ).datepicker( "option", "maxDate", selectedDate );
          }
        }); 
	       if (location.search != '') {
	         selected = location.search.split('&');console.log(selected.length + 'l');
	         if (selected.length > 0) {
	         if (selected[0].indexOf('?page') != -1) {
               selected.shift();
           }
           console.log(selected +  ' ' + selected[1]);
	         selectopt = selected[0].split('=')[1];console.log(selectopt);
	         } else {
	         selectopt = location.search.split('=')[1];
	         }
	         if (selectopt == 4) {
	           	$('#forum-stats-settings-form #edit-submit').show();
	            $('#forum-stats-settings-form .calendars').show(); 
	            $( "#selected_date_form" ).datepicker( "setDate", decodeURI(selected[1].split('=')[1]) );
	            $( "#selected_date_to" ).datepicker( "setDate", decodeURI(selected[2].split('=')[1]) );
	            $( "#selected_date_to" ).datepicker( "option", "minDate",  decodeURI(selected[1].split('=')[1]));
	            $( "#selected_date_form" ).datepicker( "option", "maxDate", decodeURI(selected[2].split('=')[1]) ); 
	            $('#forum-stats-settings-form').addClass('custom_option');
	         }
	         else{
	            $('#forum-stats-settings-form').removeClass('custom_option');
	         }
	       }

         $('#forum-stats-settings-form #edit-selected').change(function () {
         if($(this).val() != 4){
	    	$('.formright').hide();          
           location.href = location.origin + location.pathname + '?selected=' + $(this).val();
            $('#forum-stats-settings-form').removeClass('custom_option');
         } else {
	        $('#forum-stats-settings-form').addClass('custom_option');
	    	$('.formright').show();          
         }
       });
    
        $('#forum-stats-settings-form').submit(function (e) {
        e.preventDefault();
        from = $.datepicker.formatDate( "d-M-yy", $( "#selected_date_form" ).datepicker('getDate') );
        to = $.datepicker.formatDate( "d-M-yy", $( "#selected_date_to" ).datepicker('getDate') );
        location.href = location.origin + location.pathname + '?selected=4&from=' + from + '&to='+ to ;
        

		// var div = document.getElementById('content-header');
		// div.innerHTML = div.innerHTML + 'selected from '+from + 'to ' +to;

        });
        
        var from = GetParameterValues('from');
        console.log(from)  ;
        var to = GetParameterValues('to'); 
        if(typeof from != 'undefined' && typeof to != 'undefined'){ 
			var p = document.createElement("p");   // Create with DOM
			p.className = "calendar_text";
    		p.innerHTML = 'selected from '+from + ' to ' +to;

   			var parent = document.getElementById("content-header");
			parent.appendChild(p);

    		//dojo.query(".form-item.form-type-select.form-item-selected").addClass("testing");
    		var x = document.getElementsByClassName("form-item form-type-select form-item-selected");
    		for(var i = 0; i < x.length; i++)
			{
    			x[i].className += " customclass";
			}
    		console.log("element found");
		}

		//get the data from the url passed.
        function GetParameterValues(param) {  
            var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');  
            for (var i = 0; i < url.length; i++) {  
                var urlparam = url[i].split('=');  
                if (urlparam[0] == param) {  
                    return urlparam[1];  
                }  
            }  
        }



	    });
	    }
	  };
	})(jQuery);

