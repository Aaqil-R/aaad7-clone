$(function() {
  $('#sidebar > ul').ReSmenu({
    menuClass:    'responsive-menu',   // Responsive menu class
    selectId:     'resmenu',          // select ID
    textBefore:   false,               // Text to add before the mobile menu
    selectOption: false,               // First select option
    activeClass:  'active', // Active menu li class
    maxWidth:     767                  // Size to which the menu is responsive
  });
});
