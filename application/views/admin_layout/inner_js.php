<?php 
/*
* ++++++++++++++++++++++++++++++++++++++++++++++++++
*++++++++++++++++ Services +++++++++++++++++++++++++
*+++++++++++++++++++++++++++++++++++++++++++++++++++
*/
?>
<script type="text/javascript" src="<?php echo $this->assets_uri; ?>plugins/isotope/isotope.pkgd.min.js"></script>
<script>
	$(document).ready(function(){


	  function leftMenuHeight(){
	    var nbHeight = $('.vd_navbar-left .navbar-tabs-menu').outerHeight();
	    var hdrHeight = $('.vd_navbar-left h3.menu-title').outerHeight();
	    var nbrPadding = $('.vd_navbar-left').css('padding-top').replace("px", "");
	    var btmHeight = $('.vd_navbar-left .vd_navbar-bottom-widget').outerHeight();
	    var navbrHeight = $('.vd_navbar-left').height();
	    var menuRowHeight = $('.scrolled-menu li').outerHeight() + 1;//1 for border
	    var unusedHeight = (navbrHeight - nbHeight - hdrHeight - btmHeight - nbrPadding) % menuRowHeight;
	    var placeForMenu = (navbrHeight - nbHeight - hdrHeight - btmHeight - nbrPadding) - unusedHeight; //1

	    $('.scrolled-menu').height(placeForMenu);
	  };

	  leftMenuHeight();

	  $(window).resize(function() {
	    leftMenuHeight();
	  });

	  $('.nav-medium-button').click(function(){
	    leftMenuHeight();
	  });

	});
</script>
<script type="text/javascript">
$(window).load(function ()
	{



		$('.scrolled-menu').mCustomScrollbar({
		scrollInertia:300,
		autoDraggerLength: false,
		advanced:{ updateOnContentResize: true }

		});

		$('.scrolled-comments').mCustomScrollbar({
		scrollInertia:300,
		autoDraggerLength: false,
		advanced:{ updateOnContentResize: true }

		});

	});
</script>
<script type="text/javascript">
$(document).ready(function() {
	"use strict";

  // init Isotope
  var $container = $('.isotope').isotope({
    itemSelector: '.gallery-item',
    layoutMode: 'fitRows'
  });


	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  $container.isotope('layout');
	});

  // bind filter button click
  $('#filters').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
	$('#filters li').removeClass('active');
	$(this).parent().addClass('active');
    $container.isotope({ filter: filterValue });
  });


});
</script>
<script>
$(function()
{
    $(document).on('click', '.add-more', function(e)
    {
        e.preventDefault();

        var controlForm = $(this).parents('form'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .add-more')
            .removeClass('add-more').addClass('btn-remove')
            .html('--');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});
</script>
?>