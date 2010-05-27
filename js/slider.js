	//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
$(document).ready(function() {
    //Caption Sliding (Partially Hidden to Visible)
/*    $('.boxgrid.caption').hover(function(){
      $(".cover", this).stop().animate({top:'75px'},{queue:false,duration:160});
      }, function() {
      $(".cover", this).stop().animate({top:'140px'},{queue:false,duration:160});
    });*/
    $("ul.sf-menu").supersubs({ 
          minWidth:    12,   // minimum width of sub-menus in em units 
          maxWidth:    27,   // maximum width of sub-menus in em units 
          extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
                               // due to slight rounding differences and font-family 
      }).superfish();  // call supersubs first, then superfish, so that subs are 
                      // not display:none when measuring. Call before initialising 
                      // containing tabs for same reason. 
    $("#upper_front").cycle({
      fx: 'scrollRight',
      delay: -5000
    });
});
