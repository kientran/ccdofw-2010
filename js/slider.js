	//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
$(document).ready(function() {
    //Caption Sliding (Partially Hidden to Visible)
    $('.boxgrid.caption').hover(function(){
      $(".cover", this).stop().animate({top:'100px'},{queue:false,duration:160});
      }, function() {
      $(".cover", this).stop().animate({top:'150px'},{queue:false,duration:160});
    });
});
