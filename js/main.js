$(document).ready(function() {
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