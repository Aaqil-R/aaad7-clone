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

    // Place your code here.


}
};

 $(window).bind('views_load_more.new_content', function(){
    // Reload the masonry view after "load more"
   // if (typeOf Drupal.settings.masonry == 'object' && Drupal.settings.masonry != 'null'){
      var view-ids = object.keys(Drupal.settings.masonry);
      for(id in view-ids) {
       if (myobj.hasOwnProperty(key)) {
          $(id).masonry('reload');
          console.log(id);
       }
      }
    //}
  });

})(jQuery, Drupal, this, this.document);
    //==Masonry block==//
    var $container = jQuery('#masonry');
	// initialize
	$container.masonry({
	  //columnWidth: 100,
	  itemSelector: '.masonry-brick'
	});
