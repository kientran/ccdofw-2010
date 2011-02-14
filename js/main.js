$(document).ready(function() {
	$("ul.sf-menu").supersubs({ 
		minWidth:    12,  // minimum width of sub-menus in em units 
	    maxWidth:    27,  // maximum width of sub-menus in em units 
	    extraWidth:  1    // extra width can ensure lines don't sometimes turn over 
	                      // due to slight rounding differences and font-family 
	  }).superfish();     // call supersubs first, then superfish, so that subs are 
	                      // not display:none when measuring. Call before initialising 
	                      // containing tabs for same reason.

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

	$('.calendarPopup').click(function (e) {
		jQuery.modal('<iframe src="'+this.href+'" width="800" height="540"></iframe><p style="text-align:center; padding-bottom:20px; color:black;"><a target="_blank" href="'+this.href+'">View larger</a> - <a href="javascript:$.modal.close();">Close</a></p>', {   
			containerCss: {
			    height: 600,
			    width: 800,
				background: 'white',				
			},
			onOpen: function (dialog) {
				dialog.overlay.fadeIn('slow', function () {
					dialog.container.slideDown('slow', function () {
						dialog.data.fadeIn('slow');
					});
				});
			},
			onClose: function (dialog) {
				dialog.data.fadeOut('slow', function () {
					dialog.container.slideUp('slow', function () {
						dialog.overlay.fadeOut('slow', function () {
							$.modal.close(); // must call this!
						});
					});
				});
			},
			closeHTML:""
		});
		return false;
	});
});