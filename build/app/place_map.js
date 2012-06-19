/**
 * Pelagios place map library
 * @license GPL v3(see LICENSE.txt)
 */

define(["lib/async!http://maps.google.com/maps/api/js?sensor=false"],function(){function PlaceMap(id){if(!document.getElementById(id))throw Error("ERROR: Invalid ID for place map");var map=new google.maps.Map(document.getElementById(id),{zoom:8,mapTypeId:google.maps.MapTypeId.TERRAIN}),marker=new google.maps.Marker({map:map});this.refresh=function(){google.maps.event.trigger(map,"resize"),map.setCenter(marker.getPosition())},this.setMarker=function(coordinates,title){var location=new google.maps.LatLng(coordinates[1],coordinates[0]);marker.setPosition(location),marker.setTitle(title),map.setCenter(location),google.maps.event.trigger(map,"resize")}}return{PlaceMap:PlaceMap}})