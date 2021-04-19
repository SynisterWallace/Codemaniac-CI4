(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

  $(document).ready(function () {
		var url = window.location;
		$('ul.sidebar a[href="'+ url +'"]').parent().addClass('active');
		$('ul.sidebar a').filter(function() {
			return this.href == url;
		}).parent().addClass('active');
  });



})(jQuery);
