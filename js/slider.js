	//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
$(document).ready(function() {
  $("ul.sf-menu").supersubs({ 
    minWidth:    12,  // minimum width of sub-menus in em units 
    maxWidth:    27,  // maximum width of sub-menus in em units 
    extraWidth:  1    // extra width can ensure lines don't sometimes turn over 
                      // due to slight rounding differences and font-family 
  }).superfish();     // call supersubs first, then superfish, so that subs are 
                      // not display:none when measuring. Call before initialising 
                      // containing tabs for same reason. 
  $("#upper_front").after('<div id="pager">').cycle({
    fx: 'fade',
    timeout: 7000,
    pause: true,
    pager: '#pager',
    pagerAnchorBuilder: function(idx, slide) {
      return '<a href="#">' + (idx + 1).toString() + '</a>';
    }
  });

  $.fn.search = function() {
    return this.focus(function() {
      if( this.value == this.defaultValue ) {
        this.value = "";
        $(this).toggleClass('faded');
      }
    }).blur(function() {
      if( !this.value.length ) {
        this.value = this.defaultValue;
        $(this).toggleClass('faded');
      }
    });
  };

  $("#searchfield").search();
    
});
