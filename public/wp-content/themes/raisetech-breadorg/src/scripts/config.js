jQuery( function( $ ) {
	let timer = 0;
	jQuery( "#sidebar-bt--open" ).on( "click", function() {
		$( "#sidebar" ).addClass( "is-open" );
		$( "#sidebar" ).after( '<div class="l-sidebar__bg js-sidebar-bg is-open"></div>' );
		$( "body" ).addClass( "is-open" );
	} );
	jQuery( "#sidebar-bt--close" ).on( 'click', function() {
		$( "#sidebar" ).removeClass( "is-open" );
		$( ".js-sidebar-bg" ).remove();
		$( "body" ).removeClass( "is-open" );
	} );
	$( window ).on( "resize", function() {
		let pcWidth = 961;
		if( timer > 0 ) {
			clearTimeout( timer );
		}
		timer = setTimeout( function() {
			let resizedWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
			if( resizedWidth >= pcWidth ) {
				$( "body" ).removeClass( "is-open" );
				$( ".js-sidebar-bg" ).remove();
				$( "#sidebar" ).removeClass( "is-open" );
			}
		}, 200 );
	} );
} );
