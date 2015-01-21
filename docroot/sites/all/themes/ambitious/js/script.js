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
  	// Place your code here

    // ==Close button==//
		$('.block-close').on("click", function () {
		    $(this).parent('div').fadeOut();
		});

		$(document).ready(function(){
		  $(".block-close").click(function(){
		    $("section.visual").addClass("no-overlay");
		  });
		});

	// ==Masonry block==//
	var $container = $('#masonry');
	// initialize
	$container.masonry({
	  //columnWidth: 100,
	  itemSelector: '.masonry-brick'
	});

}
};

 $(window).bind('views_load_more.new_content', function(){
    // Reload the masonry view after "load more"
    if (typeof Drupal.settings.masonry === 'object' ){
      var viewids = Object.keys(Drupal.settings.masonry);
      for(i=0;i<viewids.length; i++) {
          $(viewids[i]).masonry('reloadItems');
      }
    }
  });


})(jQuery, Drupal, this, this.document);




