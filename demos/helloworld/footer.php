<script type="text/javascript" src="../../Blapy.js"></script>
<script type="text/javascript" src="../../Blapy_AnimationPlugins.js"></script>
<script>
	$( document ).ready(function() {

		//start Blapy
		$('#myBlapy').Blapy();

		//catch errors
		$( "#myBlapy" ).on( "Blapy_ErrorOnPageChange", function(event,anError) {
			  alert( anError );
			});
		
		//this way to apply the event binding will assure we get event when DOM changed
		$(document).on( "Blapy_beforeContentChange","#mainContainer", function(event,previousObject) {
			  //alert( 'Blapy_beforeContentChange' +$(this).html() );
			});
		$( document ).on( "Blapy_doCustomChange","#mainContainer", function(event,aBlapyContainer) {
			  //alert( 'Blapy_doCustomChange'+$(this).html() );
			  $("#mainContainer").animate({opacity:0},{duration:200, complete	: function(){
				  $(aBlapyContainer).css({opacity:0});
				  $("#mainContainer").replaceWith(aBlapyContainer);//replace content with the new one
				  $("#mainContainer").animate({opacity:1},{duration:200});
			  }});
			});
		$(document).on( "Blapy_afterContentChange","#mainContainer", function(event,previousObject) {
			  //alert( 'Blapy_afterContentChange' +$(this).html() );
			});
	});

	$("body").append('<h3>HTML code of the page</h3>').append(jQuery('<pre />').text($('html').html()));
</script>

</html>
