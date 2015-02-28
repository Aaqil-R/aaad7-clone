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
     
     
        // load more button first loads the content only on click, so removed the waypoint binding.
        //
  		// var settings = Drupal.settings;
		// $.each(settings.viewsLoadMore, function(i, setting) {
		// var view = '.view-id-' + setting.view_name + '.view-display-id-' + setting.view_display_id + ' .pager-next a';
		//  	$(window).load(function () {           
		//     		$(view).waypoint('destroy');
		//   	});
		// });
		   
		   //navigate to donate page with the value from give what you can
		   $("input[name='submitted[give_what_you_can]']").click(function () {
         window.location = location.origin + $("input[name='submitted[donate_page]']").val() + '?amt='+$(this).val();
		   });
		
 
    	     $(document).ready(function(){ 
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
	            $(".view .bef-checkboxes input[type=checkbox]:checked").parent().addClass('checked');
	                  // views filter opiton
              $(".view .bef-checkboxes :checkbox").once('check-processed').on('click', function(){
                 var crtcheck = $(this).parent();
                 crtcheck.toggleClass("checked").removeClass("highlight"); 
               });  
	    }); 
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
          $('#edit-submit-stream').trigger( "click" );
        });
        $("form#views-exposed-form-stream-voices-from-the-spectrum-page select").change(function() {
          $('#edit-submit-stream').trigger( "click" );
        });
        
    	
    // ==Close button==//
		$('.block-close').on("click", function () {
		    $(this).parent('div').fadeOut();
		});

		$(".block-close").click(function(){
		    $("section.visual").addClass("no-overlay");
		});

	// Change Position when click on close on Home page form

		$(".block-close").click(function(){		  
		  
		  
		  if($(window).width() < 767){
		  	$("#main").css("top","100px");
		  }else{
		  	$("#main").css("top","50px");
		  }
		    
		});
    

	// ==Masonry block==//
	var $container = $('.masonry');
	
	if ($container.masonry != undefined) {
	  // initialize
	  $container.masonry({
	  //columnWidth: 100,
	    itemSelector: '.masonry-brick'
	  }); 
	   
	}


	  //Sets default class for understanding-autism grid view and toggles class when changing view.
	  $('#main').once('understanding-autism', function() {
		  if ($(".view").hasClass("understanding-autism")) {
		    var view = $('.view').parent().attr('data-view');
		   if (view != 'undefined') {
			  $(".view").addClass(view); // Sets .grid-view as default class on the view
			  if (view == 'list-view') {
			    $('#list').addClass('active');
			    $('#grid').removeClass('active');
			  } else {
			    $('#grid').addClass('active');
			    $('#list').removeClass('active');
			  }
			 } else {
			   $(".view").addClass("grid-view"); // Sets .grid-view as default class on the view
			 }

			  $(".list").click(function() {
				  if ($(".view").hasClass("grid-view")) {
					  $(".view").addClass("list-view"); // adds .list-view to the view class
					  $(".view").removeClass("grid-view"); // removes .grid-view from the view class
					   $(".view").parent().attr('data-view','list-view');
				  }
				 
			  });

			  $(".grid").click(function() {
				  if ($(".view").hasClass("list-view")) {
					  $(".view").addClass("grid-view"); // adds .grid-view to the view class
					  $(".view").removeClass("list-view"); // removes .list-view from the view class
					 $(".view").parent().attr('data-view','grid-view');
				  }
				  
			  });
		  }
	  });

	  //Sets the width of masonry when click on toggle list and grid
	  $("a.list, a.grid").click(function(){
		  setTimeout(function(){ $('.view-content').masonry() }, 400);
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
		    if (typeof Drupal.settings.masonry === 'object' ){
			 var viewids = Object.keys(Drupal.settings.masonry);
			 for(i=0;i<viewids.length; i++) {
				$(viewids[i]).masonry('reloadItems');
			 }
		    }
		  });

$(window).resize(function () {
if ($('.masonry').masonry != undefined) {
    $('.masonry').masonry('reloadItems'); 
      }; 
});
})(jQuery, Drupal, this, this.document);
