/**
 * Pelagios search map library
 * @license GPL v3(see LICENSE.txt)
 */
 define(['app/loadGMaps!lib/async!http://maps.google.com/maps/api/js?sensor=false'], function () {
    function SearchMap(id) {
        
        // check ID exists 
        if (!document.getElementById(id)) {
            throw Error('ERROR: Invalid ID for search map');
        }
        
        try {
            var map = new google.maps.Map(
                        document.getElementById(id), 
                        {mapTypeId: google.maps.MapTypeId.TERRAIN});
        } catch (err) {
            console.log('ERROR: Failed to create Google Map');
        }
        var markerBounds = new google.maps.LatLngBounds();
        var infoWindow   = new google.maps.InfoWindow(); 

        this.refresh = function() {
            google.maps.event.trigger(map,'resize');
            map.fitBounds(markerBounds);
        } 
        
        this.addMarker = function(geojson, title, content, onClickHander) {
            // Only add points at the moment
            if (geojson.hasOwnProperty('geometry') && 
                geojson.geometry != null &&
                geojson.geometry.hasOwnProperty('type') &&
                geojson.geometry.type == 'Point') {
                var location = new google.maps.LatLng(geojson.geometry.coordinates[1], 
                                                      geojson.geometry.coordinates[0]);
                
                var marker = new google.maps.Marker({
                  position: location,
                  map:      map,
                  title:    title
              });
              
              markerBounds.extend(location);
              
              google.maps.event.addListener(marker, 'click', (function() {
                return function() {
                    infoWindow.close();
                    infoWindow.setContent(content);
                    infoWindow.open(map, marker);
                    onClickHander();
                }
              })());
            }        
        }
  
    }
    
   
    
    return {SearchMap:SearchMap}
 });