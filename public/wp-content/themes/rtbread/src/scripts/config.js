jQuery( function( $ ) {
	var map = L.map( 'map' );
	var googlemap = new L.Google( 'ROADMAP' );
	map.addLayer( googlemap );
	map.setView( [31.933494, 131.399489], 15 );
	console.log( "map" );
} );
