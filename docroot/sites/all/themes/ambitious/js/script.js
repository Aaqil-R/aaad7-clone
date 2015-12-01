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
    
	//implementation of apache solr redirect to search result page -  this is for ajax
	$('#edit-search-job-vacancies').keypress(function (e) {
	  var key = e.which;
	  if (key == 13) {
	    e.stopPropagation();
	    e.preventDefault();
	    location.href = '/search/job-vacancies/'+ $(this).val();
	  }
	});
		   
	//navigate to donate page with the value from give what you can
	$("input[name='submitted[give_what_you_can]']").click(function () {
	   window.location = $("input[name='submitted[donate_page]']").val() + '?amt='+$(this).val();
	});		
 
  // checking page loaded or not
  $("body.front").addClass('page-loaded');
   
 	// start document.ready
	$(document).ready(function(){          
          
		// == Check Cookie in home page step forms ==//
		// Start
		 $("body.front").ready(function() { 
		  if ($.cookie("homepageform")=="yes" || $.cookie("Drupal.visitor.registereduser")=="yes") {
		     $(".slider-block .holder").hide();
		     $(".header_banner").addClass("no-overlay");
		  } 
		 });
		// End 
		
    // == Check if the user registered or not in home page step forms ==//
    // Start
    $(".webform-registered-home").ready(function() { 
        $(".webform-registered-home .slider-block .holder").hide();
        $(".webform-registered-home .header_banner").addClass("no-overlay");  
    });
    // End

		$(".fourm-order-date").append(
			"<select><option data-href='forums/community-champions?sort=desc&order=created' data-order='desc'>Show Latest</option><option data-href='forums/community-champions?sort=asc&order=created' data-order='asc'>Show Oldest</option></select>"
		);

		// in case of a stream set the intro card height to the same height
		// as of the first card in the stream. 
		var stream_intro_div = $('div.js-stream-intro:nth-of-type(1)');

		if(stream_intro_div.length){
			stream_intro_div.height($('div.post:nth-of-type(2)').first().innerHeight());
		}

		//amalan new codes
		var stream_intro_div1 = $('div.js-stream-intronew:nth-of-type(1)');
		//defining the secondstream variable
		var stream_div2=$('div.card:nth-of-type(2)');
		var stream_div3=$('div.card:nth-of-type(3)');
		var stream_lastdiv=$('div.navigation-block');
		if(stream_intro_div1.length){
			//console.log($('div.card:nth-of-type(2)').first().height());
			//if(stream_intro_div1.width() / window.innerWidth > 0.6667){
				//console.log("I am here");
				//stream_intro_div1.width($('div.card:nth-of-type(2)').first().width());
				//stream_lastdiv.width($('div.card:nth-of-type(2)').last().width());
			//}
			if(stream_intro_div1.height()>stream_div2.height()){
				// stream_div2.height($('div.js-stream-intronew:nth-of-type(1)').height());
				// if((stream_intro_div1.width()/window.innerWidth) < 0.4){
				// 	stream_div3.height($('div.js-stream-intronew:nth-of-type(1)').height());
				// }
				// //if the width is less than 33 the add height of the third as well
				// //if((stream_intro_div1.width()/window.innerWidth) < 0.333){
				// 	//stream_div3.height($('div.js-stream-intronew:nth-of-type(1)').height());
				// //}
			}
			else{
				//console.log("I am not here");
				stream_intro_div1.height($('div.card:nth-of-type(2)').first().height());
				stream_lastdiv.height($('div.card:nth-of-type(2)').last().height());
			}
		}
		// console.log("i am here");
		// if(stream_lastdiv.length){
		// 	console.log($('div.card:nth-of-type(2)').last().height());
		// 	stream_lastdiv.height($('div.card:nth-of-type(2)').last().height());
		// }
//end of amalan new codes

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
	
  // menu height	
	var windowhei = $(window).height(); 
   
    if($(window).width() < 768){
        $(".nav-holder").css('height',  windowhei + 10);
    }
    else{
        $(".nav-holder").css('height',  windowhei - 25);
    } 
	
	//anchor links
	//why is this function there????????? 
	//the reason for commenting this code is when the external links are created in events / courses 
	//and if the link contains the letter "ft" for example www.ft.com / www.software.com it does not 
	//navigate - Amalan

	// $(".node a[href*='ft']").click(function(event){
 //          event.preventDefault();  
 //          var myval = $(this).attr('href');  
 //            if(myval.replace('_','') != "undefined"){
 //              myval = myval.replace('_',''); 
 //            }
 //          $('html, body').animate({scrollTop: $(myval).offset().top - 120}, 'slow'); 
 //       });
 //       $("a[href*='ftn']").each(function(){
 //         var name =  $(this).attr('name');  
 //             name = name.replace('_','');   
 //         $(this).attr('id', name);
 //       });
       
	// on click video popup
	$(".node .view-display-id-stream_topic_page .views-row, .view-display-id-my_voice_blog .views-row, .view-display-id-voices_from_the_spectrum_page .views-row").each(function( index ) { 
     $('.video-1 .icon-Playbutton').on("click", function () {
       $(".img-holder.video-1").removeClass("sel");
       $(this).parent().addClass("sel");
       if ($('.img-holder.video-1').hasClass('sel')) {
         $('.img-holder.video-1.sel a').trigger( "click" ); 
       }
     });
   
  }); 
  
    //new codes on sorting testing
    $(document).ready(function(){  
    	if($("#edit-created-min").length){
    		if(document.getElementById('edit-created-min').value.length == 0){
    		 	//document.getElementById('edit-created-min').value = 'Select the date';
    		 	document.getElementById('edit-created-min').setAttribute("placeholder", "Select the date");

    	 	}
    	}
    	 
    	if($("#edit-field-event-date-value-1-value-datepicker-popup-0").length){
    		if(document.getElementById('edit-field-event-date-value-1-value-datepicker-popup-0').value.length == 0){
    		 	//document.getElementById('edit-field-event-date-value-1-value-datepicker-popup-0').value = 'Select the date';
    		 	document.getElementById('edit-field-event-date-value-1-value-datepicker-popup-0').setAttribute("placeholder", "Select the date");
    	 	}
    	}
    });

	$('#edit-created-min').on("change", function () { 
    	//console.log(document.getElementById('edit-created-min').value);
    	var date = new Date(document.getElementById('edit-created-min').value);
    	var tomdate = new Date(date)
    	tomdate.setDate(date.getDate()+1);
    	// console.log(date);
    	// console.log(tomdate);

    	//formating the date
    	var dd = tomdate.getDate();
		var mm = tomdate.getMonth() + 1;
		var y = tomdate.getFullYear();

		var someFormattedDate = mm + '/'+ dd + '/'+ y;
		// console.log(someFormattedDate);
    	document.getElementById('edit-created-max').value = someFormattedDate;
	});

    //end of the new codes
	
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

 
      
	jQuery(window).on('load', function(){
//start of the commented code
    //     $('.card-stream .view-content').masonry ({
    //       //columnWidth: 100,
    //         "itemSelector": ".post",
    //         "columnWidth": ".post",
    //         "percentPosition": true
    //     }); 

    //     var $columnWidth = $('.card--width').outerWidth();
	  	// var $gutter = $('.card--gutter').width();

	  	// console.log($columnWidth);
	  	// console.log($gutter);

	  	// $('.card-layout .view-content').masonry ({
    //         "itemSelector": ".card--item",
    //         "columnWidth": $columnWidth,
    //         "gutter" : $gutter,
    //     	"percentPosition" : true
    //     });

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
//end of the commented codes
    });

//amalan new codes
//jQuery(window).on('load', function(){
	$(document).ready(function(){
		var $columnWidth = $('.card--width').outerWidth();
	  	var $gutter = $('.card--gutter').width();

        $('.card-stream .view-content').masonry ({
          	"columnWidth": $columnWidth,
            "itemSelector": ".card",
            "columnWidth": ".card",
            "percentPosition": true
        });

	  	// console.log($columnWidth);
	  	// console.log($gutter);

	  	$('.card-layout .view-content').masonry ({
            "itemSelector": ".card--item",
            "columnWidth": $columnWidth,
            "gutter" : $gutter,
        	"percentPosition" : true
        });

        $('.job-card-layout').masonry ({
            "itemSelector": ".card--item",
            "columnWidth": $columnWidth,
            "gutter" : $gutter,
        	"percentPosition" : true
        });
    });
//end of the new codes amalan
$(window).resize(function () {
	$('.card-stream .view-content').masonry('reloadItems');
	$('.card-layout .view-content').masonry('reloadItems');
});
//testing code end

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
		  //$views_container.masonry('reloadItems');
		  	$('.card-stream .view-content').masonry('reloadItems');
			$('.card-layout .view-content').masonry('reloadItems');
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
		//var Uautism = $('.understanding-autism');
	      var Uautism = $('.js-switch-layout');
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
  } ;
    $('.search-opener').click(function (){
      $('.search-form input[type=search]').focus();
    });

		//Sets the width of masonry when click on toggle list and grid
		$("a.list, a.grid").click(function(){
		  setTimeout(function(){ $('.card-layout .view-content').masonry() }, 400);
		});

		$("form#views-exposed-form-stream-understanding-autism-page .autism-age").change(function (e) {
		window.location.href = Drupal.settings.basePath + $(this).find('option:selected').attr('data-href');;
		e.preventDefault();
		});
		$("form#views-exposed-form-stream-understanding-autism-page-age .autism-age").change(function (e) {
		  	window.location.href = Drupal.settings.basePath + $(this).find('option:selected').attr('data-href');;
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
    
/*----- Grid List View -----*/      
//The grid view in the Talk to others page
	function initialise(){
        $('#grid-forum').click(function () {
                if ($('.grid-view-forum').hasClass('view-hidden')) {
                    $('.card-layout').addClass('new-grid');
                    $('body').addClass('new-grids');
                    return 'view-hidden';
                }else{ 
                    $('.grid-view-forum').addClass('view-hidden');
                     } 
        });
//The list view in the Talk to others page    
        $('#list-forum').click(function () {
            $('.grid-view-forum').toggleClass(function () {
                if ($(this).is('.view-visible')) {
                    $('.card-layout').removeClass('new-grid');
                    $('body').removeClass('new-grids');
                    return 'view-hidden';
                } else{
                     $('.grid-view-forum').addClass('view-visible');
                      }
            });
        });
	}
    
	$(document).ready(function () {
		initialise();
	}); 
    
	$(document).ajaxComplete(function () {
        initialise();
	});
    
/*----- Grid List View End -----*/ 
    
/*----- Sticky Nav Bar -----*/
    var didScroll;
    var lastScrollTop = 0;
    var delta = 100;
    var navbarHeight = $('.header-top').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);


	function hasScrolled() {
		//It checks the width of the window & whether the 'body' does not have a class called 'nav-active'
		if($(window).width() < 767 && !$("body").hasClass("nav-active") && !$("body").hasClass("search-active") && !$("body").hasClass("school-active") ) {
			var st = $(this).scrollTop();
			// Make sure they scroll more than delta
			if(Math.abs(lastScrollTop - st) <= delta)
			return;
			// If they scrolled down and are past the navbar, add class .nav-up.
			// This is necessary so you never see what is "behind" the navbar.
				if (st > lastScrollTop && st > navbarHeight){
				// Scroll Down
				$('.header-top').fadeOut();
				} else {
				// Scroll Up
				if(st + $(window).height() < $(document).height()) {
					$('.header-top').fadeIn();
					}
				}
				lastScrollTop = st;
		}
   	
	}

//Sticky Nav back on window resize 
    setInterval(function() {
        var mobile = 767;
            if($(window).width() > mobile){
                $('.header-top').show();
            }
    }, 1);

/*----- Sticky Nav Bar End -----*/

//Job Vacancy Sticky Cards
	// $(document).ready(function() {
	// 		console.log('resize');
	// 		var $sidebar   = $("#content_bottom"), 
	//         	$window    = $(window),
	//         	$div_height = $("#content_bottom"),
	//         	offset     = $sidebar.offset(),
	//         	topPadding = 220;
	// 	    $window.scroll(function() {
	// 	        if ($window.scrollTop() > offset.top) {
	// 	            $sidebar.stop().animate({
	// 	                marginTop: $window.scrollTop() - offset.top + $div_height.height() 
	// 	            });
	// 	        } else {
	// 	            $sidebar.stop().animate({
	// 	                marginTop: 0
	// 	            });
	// 	        }
	// 	    });	
	// }); 
/*----- Job Vacancy Sticky Cards -----*/

//Donation Page Hover 
$(document).ready(function () {

	console.log("Entering the document.ready function on line 753.");

	// We are assuming that the option buttons are using the configuration
	// value_of_{n}
	// Lets see what amount has been selected
	var selectedAmount = $('input[type=radio]:checked').val();

		console.log("Selected Amount: " + selectedAmount);

		if (selectedAmount) {	    		
	    	// Reset the other message selections
	    	$("[class*=webform-component--value-of-]").removeClass("js-active"); 

	    	// Based on this lets activate the appropriate message
	    	var messageId = ".webform-component--value-of-" + selectedAmount;

	    	// Activate the appropriate message
	    	$(messageId).toggleClass("js-active");
		}
	

	$('.form-item-submitted-select-an-amount label.option').on({
	    click: function(){
	    	
	    	//The variable selectedAmount gets the value of the radio button selected
	    	$('input[type=radio]').change(function() {
		        var selectedAmount = this.value;

		        // Lets see what amount has been selected
		    	console.log("Selected Amount: " + selectedAmount);

		    	if (selectedAmount) {	    		
			    	// Reset the other message selections
			    	$("[class*=webform-component--value-of-]").removeClass("js-active"); 

			    	// Based on this lets activate the appropriate message
			    	var messageId = ".webform-component--value-of-" + selectedAmount;

			    	// Activate the appropriate message
			    	$(messageId).toggleClass("js-active");
		    	}

		    });
	    }
	});

	// $(".form-item-submitted-select-an-amount label.option").mouseover(
	//   function () {
	//   	$('input[type=radio]').change(function() {
	// 	        var selectedAmount = this.value;
	// 	        console.log(selectedAmount);
	// 	});
	//   }
	// );

	$(".form-item-submitted-select-an-amount label.option").hover(
	  function () {
	    var selectedAmount = $('input[type=radio]').val();

		console.log("Selected Amount: " + selectedAmount);

		if (selectedAmount) {	    		
	    	// Reset the other message selections
	    	$("[class*=webform-component--value-of-]").removeClass("js-active"); 

	    	// Based on this lets activate the appropriate message
	    	var messageId = ".webform-component--value-of-" + selectedAmount;

	    	// Activate the appropriate message
	    	$(messageId).toggleClass("js-active");
		}
	  }
	);


	function handleAmountSelection(){

	};
});

function pricepoint(){
	var selectedAmount = $('input[type=radio]:checked').val();

	console.log("Selected Amount: " + selectedAmount);

	if (selectedAmount) {	    		
    	// Reset the other message selections
    	$("[class*=webform-component--value-of-]").removeClass("js-active"); 

    	// Based on this lets activate the appropriate message
    	var messageId = ".webform-component--value-of-" + selectedAmount;

    	// Activate the appropriate message
    	$(messageId).toggleClass("js-active");
	}

    };


$(document).ajaxComplete(function () {
    pricepoint();
});

})(jQuery, Drupal, this, this.document);