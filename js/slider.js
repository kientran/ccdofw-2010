	//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
$(document).ready(function() {


  //$('.boxcaption').stop().hide();

  function onAfter() {
    $('.boxcaption', this).stop().slideToggle('slow');
  }

  $("#upper_front").after('<div id="pager">').cycle({
    fx: 'fade',
    timeout: 7000,
    pause: true,
    pager: '#pager',
    pagerAnchorBuilder: function(idx, slide) {
      return '<a href="#">' + (idx + 1).toString() + '</a>';
    }
  });

  
    
});
