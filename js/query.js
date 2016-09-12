$(window).resize(function(){
	$widhtWindows = $( window ).width();

	if ($widhtWindows >= 1000) {
		$( "#menu" ).removeClass( "menu-element-mobile" ).addClass( "menu-element-desktop" );
	} else {
		$( "#menu" ).removeClass( "menu-element-desktop" ).addClass( "menu-element-mobile" );		
	}
});