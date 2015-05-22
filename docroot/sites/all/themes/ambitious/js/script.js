/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.ambitious = {
  attach: function(context, settings) {     
	//implementation of apache solr redirect to search result page -  this is for ajax
	$('#edit-search-community').keypress(function (e) {
	  var key = e.which;
	  if (key == 13) {
	    e.stopPropagation();
	    e.preventDefault();
	    location.href = '/search/forum-discussion/'+ $(this).val();
	  }
	});
		   
	//navigate to donate page with the value from give what you can
	$("input[name='submitted[give_what_you_can]']").click(function () {
	   window.location = $("input[name='submitted[donate_page]']").val() + '?amt='+$(this).val();
	});		
 
 	// start document.ready
	$(document).ready(function(){          
          
		// == Check Cookie in home page step forms ==//
		// Start
		 $("body.front").ready(function() { 
		  if ($.cookie("homepageform")=="yes") {
		     $(".slider-block .holder").hide();
		     $(".header_banner").addClass("no-overlay");
		  } 
		 });
		// End 
		
    // == Check if the user registered or not in home page step forms ==//
    // Start
    if($("body").hasClass("webform-registered-home")){
        $(".slider-block .holder").hide();
        $(".header_banner").addClass("no-overlay");  
    }
    // End

		$(".fourm-order-date").append(
			"<select><option data-href='forums/community-champions?sort=desc&order=created' data-order='desc'>Show Latest</option><option data-href='forums/community-champions?sort=asc&order=created' data-order='asc'>Show Oldest</option></select>"
		);

		// in case of a stream set the intro card height to the same height
		// as of the first card in the stream. 
		var stream_intro_div = $('div.js-stream-intro:nth-of-type(1)');

		if(stream_intro_div.length){
			stream_intro_div.height($('div.post:nth-of-type(2)').first().outerHeight());
		}
    	     
		var forum_order = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&')[0].split('=')[1];
	        	     
		$(".fourm-order-date select").change(function (e) { 
	       window.location.href = window.location.origin +  Drupal.settings.basePath + $(this).find('option:selected').attr('data-href'); 
	       e.preventDefault();
		}); 
       
		var fourmlist = $(".fourm-order-date select option");
		$.each(fourmlist, function(i, field){  
		     curselectvalue = $(field).attr("data-order");
		      if(curselectvalue == forum_order){
		         $(field).attr("selected", "selected")
		         curval="";
		      }
		});
    	      
		initCustomForms(); 
		$('.view-display-id-stream_forum_page').mobileNav({ 
		  hideOnClickOutside: true,
		  menuActiveClass: 'filter-active',
		  menuOpener: '.filterbutton',
		  menuDrop: '.filter-slide'
		});

		$('.view-display-id-voices_from_the_spectrum_page').mobileNav({ 
		  hideOnClickOutside: true,
		  menuActiveClass: 'filter-active',
		  menuOpener: '.filteroption',
		  menuDrop: '.filter-slide'
		});

		$('.view-display-id-my_voice_blog').mobileNav({ 
		  hideOnClickOutside: true,
		  menuActiveClass: 'filter-active',
		  menuOpener: '.filterbutton',
		  menuDrop: '.filter-slide'
		});

		$(".view .bef-checkboxes input[type=checkbox]:checked").parent().addClass('checked').children('label').addClass('label-checked');
                    
		// views filter opiton
		$(".view .bef-checkboxes :checkbox").once('check-processed').on('click', function(){
		 var crtcheck = $(this).parent();
		 crtcheck.toggleClass("checked").removeClass("highlight"); 
		 crtcheck.children('label').toggleClass('label-checked'); 
		});  
	}); 
	// end document.ready
         
	$( document ).ajaxComplete(function() {

		$('.view-display-id-stream_forum_page').mobileNav({
			hideOnClickOutside: true,
			menuActiveClass: 'filter-active',
			menuOpener: '.filterbutton',
			menuDrop: '.filter-slide'
	    });

		$('.view-display-id-voices_from_the_spectrum_page').mobileNav({ 
			hideOnClickOutside: true,
			menuActiveClass: 'filter-active',
			menuOpener: '.filteroption',
			menuDrop: '.filter-slide'
		}); 
	}); 

    $("form#views-exposed-form-stream-stream-forum-page select").change(function() {          
        //$('.button-holder .form-submit').trigger( "click" ); 
        $('.button-holder .form-submit').click();      
    });
        
    $("form#views-exposed-form-stream-voices-from-the-spectrum-page select").change(function() {
		$('#edit-submit-stream').trigger( "click" );
    });
        
	$("form#views-exposed-form-stream-understanding-autism-page #edit-sort-by").change(function() {
      $('#edit-submit-stream').trigger( "click" );
    });

	$("form#views-exposed-form-stream-understanding-autism-page-age #edit-sort-by").change(function() {
      $('#edit-submit-stream').trigger( "click" );
    });

	/* my voice page filter  */
	var arr = $(".page-node-224746 .sort-block .filter-slide .bef-checkboxes fieldset"); 
    $(".myvoice-list span").remove();
     
	$.each(arr, function(i, field){ 
		var ne = $(field).children("label").clone().html();
		var select = "";
           
		if($(field).hasClass("checked")){
			select = "selected";
		}
           var chval = $(field).children("input").clone().val();         
           $(".myvoice-list").append("<span class='voice-list "+ select +"'" + "data-nid='" +chval+"'>" + ne + "<em class='icon-Close'></em></span>"); 
         }); 
         
          $("span.voice-list").on('click', function(){
            var nid = $(this).data("nid"); 
            var curval = ""; 
            $.each(arr, function(i, field){ 
              curval = $(field).children("input").val();
              if(curval == nid){
                 $(field).children("input").attr('checked', false);
                 curval="";
              }
            }); 
            $('#edit-submit-stream').trigger( "click" );
          });

 	/* fourm page filter clear button  */
    var fourm_list  = $(".page-node-221561 .sort-block .filter-slide .bef-checkboxes fieldset"); 
    $(".clear-all").on('click', function(){
       	$.each(fourm_list, function(i, field){ 
			$(field).removeClass('checked');
			$(field).removeClass('highlight');
			$(field).children("input").attr('checked', false);
		});
	}); 
        
	// Understanding autism added filter to load understanding autism page   	
	//==Close button==//
	$('.block-close').on("click", function () {
	    $(this).parent('div').fadeOut();
	});

	$(".block-close").click(function(){
	    $("section.visual").addClass("no-overlay");
	});
		
	// ==Close button with Cookie for home page step form==//
	// Start
	$('.ask_me_in_a_week').on("click", function () { 
		var date = new Date();

		date.setTime(date.getTime() + (7 * 24 * 60 * 60 * 1000));
		
		$.cookie("homepageform", "yes", { expires: date }); 
		$(".slider-block .holder").hide();
		$(".header_banner").addClass("no-overlay");
	});

	$(".front .block-close").click(function(){
		$.cookie("homepageform", "yes");
	});
	// End
	// Change Position when click on close on Home page form

	$(".block-close").click(function(){		  
	  
	  $("#main").addClass("no-form");
	    
	});

	if ($("form").hasClass('webform-client-form-74671')) {  
	  
	  var username = $(".username").text();
	  
	  $(".form_firstname").text("");
	  $(".form_firstname").append(username);
	}

	$('#not_right_now').on("click", function () {
	    $('.block-close').trigger( "click" );
	});
      
	jQuery(window).on('load', function(){
        $('.card-stream .view-content').masonry ({
          //columnWidth: 100,
            "itemSelector": ".post",
            "columnWidth": ".post",
            "percentPosition": true
        }); 

        var $columnWidth = $('.card--width').outerWidth();
	  	var $gutter = $('.card--gutter').width();

	  	console.log($columnWidth);
	  	console.log($gutter);

	  	$('.card-layout .view-content').masonry ({
            "itemSelector": ".card--item",
            "columnWidth": $columnWidth,
            "gutter" : $gutter,
        	"percentPosition" : true
        });

	  	// implementation for isotope, commenting out till we move to the isotope 
	  	// implementation.
		//  var $container = $('.card-layout .view-content').imagesLoaded(function(){
		// 	$container.isotope({
		// 		itemSelector: '.card--item',
		//            layoutMode: 'masonry',
		//            masonry: {
		// 	      columnWidth: $columnWidth,
		// 	      gutter: $gutter
		// 	    }
		// 	});
		// });
    });

	// Container for masonry (the view wrapper)
	$views_container = $('.card-layout .view-content');

	// debug statements for the column width.
	var $columnWidth = $('.card--width').outerWidth();
	var $gutter = $('.card--gutter').width();

	// console.log($columnWidth);
	// console.log($gutter);

	// Apply masonry when all images in the view have loaded
	imagesLoaded($('.card-layout .view-content'), function() {
		if ($views_container) {
		  $views_container.masonry({
		    // options
		    columnWidth: '.card--item',
		    itemSelector: '.card--item',
		    gutterWidth: $gutter,
		    transitionDuration: '0.2s'
		  });
		  
		  // Add a class to each item to prevent them from being
		  // processed by masonry again.
		  // $('.card--item').addClass('js-masonry-processed');
		}
	});

	// When new content has been loaded, find it and add them to masonry
	$(window).bind('views_load_more.new_content', function(){
		// Find the new items
		// newItems = $views_container.find('.card--item:not(.js-masonry-processed)');

		imagesLoaded($views_container, function() {
		  // $views_container.masonry('appended', newItems);
		  $views_container.masonry('reloadItems');
		});

		// Add a class to each item to prevent them from being
		// processed by masonry again.
		// newItems.each(function() {
		//   $(this).addClass('js-masonry-processed');
		// });
	});

	$(window).resize(function(){
		// Get the document offset :
		var offset = $(document).scrollTop(),

		// Get the window viewport height
		viewportHeight = $(window).height(),

		// cache the model element
		$myDialog = $('#modalContent');

		// now set the model position
		$myDialog.css('top',  (offset  + (viewportHeight/2)) - ($myDialog.outerHeight()/2));
    });

	$(document).ready(function (){
		// Get the document offset :
		var offset = $(document).scrollTop(),

		// Get the window viewport height
		viewportHeight = $(window).height(),

		// cache the model element
		$myDialog = $('#modalContent');

		// now set the model position
		$myDialog.css('top',  (offset  + (viewportHeight/2)) - ($myDialog.outerHeight()/2));
    });

	$(document).ready(function () {
	
		// Sets default class for understanding-autism grid view 
		// and toggles class when changing view.
		var Uautism = $('.understanding-autism');
	      
		if (Uautism.length > 0){
		      var view = Uautism.parent().attr('data-view');
		     if (view != undefined) {
			    $(".view").addClass(view); // Sets .grid-view as default class on the view
			    if (view == 'list-view') {
			      $('#list').addClass('active');
			      $('#grid').removeClass('active');
			    } else {
			      $('#grid').addClass('active');
			      $('#list').removeClass('active');
			    }
			   } else {
			     Uautism.addClass("grid-view"); // Sets .grid-view as default class on the view
			   }
			    $(".list").click(function() {
				    if (Uautism.hasClass("grid-view")) {
					    Uautism.addClass("list-view"); // adds .list-view to the view class
					    Uautism.removeClass("grid-view"); // removes .grid-view from the view class
					     Uautism.parent().attr('data-view','list-view');
				    }
				   $(this).addClass('active');
				   $(".grid").removeClass('active');
			    });

			    $(".grid").click(function() {
				    if (Uautism.hasClass("list-view")) {
					    Uautism.addClass("grid-view"); // adds .grid-view to the view class
					    Uautism.removeClass("list-view"); // removes .list-view from the view class
					    Uautism.parent().attr('data-view','grid-view');
				    }
				    $(this).addClass('active');
				   $(".list").removeClass('active');
			    });
    }
    $('.search-opener').click(function (){
      $('.search-form input[type=search]').focus();
    });

		//Sets the width of masonry when click on toggle list and grid
		$("a.list, a.grid").click(function(){
		  setTimeout(function(){ $('.view-content').masonry() }, 400);
		});

		$("form#views-exposed-form-stream-understanding-autism-page .autism-age").change(function (e) {
		window.location.href = window.location.origin +  Drupal.settings.basePath + $(this).find('option:selected').attr('data-href');;
		e.preventDefault();
		});
		$("form#views-exposed-form-stream-understanding-autism-page-age .autism-age").change(function (e) {
		  	window.location.href = window.location.origin +  Drupal.settings.basePath + $(this).find('option:selected').attr('data-href');;
		    e.preventDefault();	
		});

		// Placeholders for login box
		$('.form-item-name input.form-text').attr("placeholder", "Username*");
		$('.not-logged-in #user-login input[type="password"]').attr("placeholder", "Password*");
		$('.not-logged-in #user-login--2 input[type="password"]').attr("placeholder", "Password*");
		$('.not-logged-in .form-item-mail input').attr("placeholder", "E-mail address*");

	});
}
};

//share this buttons - this snippet help to build the share button on ajax load
 Drupal.behaviors.osShareThis = {
    attach: function(context, settings) {
    if (typeof stLight === 'object' ){
      stLight.options({
        publisher: settings.publisherId
      });
    }
    if (typeof stButtons === 'object' ){
      // In case we're being attached after new content was placed via Ajax,
      // force ShareThis to create the new buttons.
      stButtons.locateElements();
    }
    }
  };  

	/*load more button with masonry - masonry was not applied when new content loads
	* here is fix to apply or reload the masonry items and apply the style
	* here is the discussion https://www.drupal.org/node/2201335 comment #12
	*/
 	$(window).bind('views_load_more.new_content', function(){
	    // Reload the masonry view after "load more"
	    if (typeof Drupal.settings.masonry === 'object'){
			var viewids = Object.keys(Drupal.settings.masonry);
			
			for(i=0;i<viewids.length; i++) {
				$(viewids[i]).masonry('reloadItems');
			}
	    }
	});

	// $(window).bind('views_load_more.new_content', function(){
	//     if ($('.card-layout .view-content').isotope != undefined) {
	// 	    $('.card-layout .view-content').isotope('reloadItems'); 
	// 	};		
	// });

	$(window).bind('views_load_more.new_content', function(){
	    if ($('.card-layout .view-content').masonry != undefined) {

	    	// console.log('Loading more masonry reset.');

		    $('.card-layout .view-content').masonry('reloadItems'); 
		    $('.card-layout .view-content').masonry('layout');
		};		
	});

	$(window).resize(function () {
		if ($('.masonry').masonry != undefined) {
		    $('.masonry').masonry('reloadItems'); 
		}; 

		var $columnWidth = $('.card--width').outerWidth();
	  	var $gutter = $('.card--gutter').width();

	  	// console.log($columnWidth);
	  	// console.log($gutter);

	  	// $('.card-layout .view-content').masonry ({
    //         "itemSelector": ".card--item",
    //         "columnWidth": $columnWidth,
    //         "gutter" : $gutter,
    //     	"percentPosition" : true
    //     });

		if ($('.card-layout .view-content').masonry != undefined) {

			// console.log('Resizing masonry reset.');

		    $('.card-layout .view-content').masonry('reloadItems'); 
		}; 

		// if ($('.card-layout .view-content').isotope != undefined) {
		//     $('.card-layout .view-content').isotope('reloadItems'); 
		// };
	});
})(jQuery, Drupal, this, this.document);
