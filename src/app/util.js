/**
 * Pelagios utility functions
 * @license GPL v3(see LICENSE.txt)
 */

 define(['jquery'], function ($) {  
 
    /**
    * Converts a string into a string which can be used as an HTML id
    * by removing punctation, whitespace etc
    */
    function createID(dataset) {
        // remove whitespace
         var id = dataset.replace(/ /g,''); 
         // remove punctuation
         id = id.replace(/[\.,-\/#!$%\^&\*;:{}=\-_`~()]/g,""); 

         return id;
    }
    
      /**
   * Determines if Google Maps API v2 is included on the current page. 
   * Returns true if it is, false otherwise.  
   */       
   function includesGoogleMaps2() {
        return (typeof GMap2 != 'undefined');
    }
    
        
   /**
    * Wrapper to get API data as JSON via an http request
    * If cors, set to true, then assumes CORS is used to circumvent
    * same origin restriction, otherwise assumes uses JSONP
    */
    function getAPIData(url, success, error, timeout, cors) {
        
        var settings = {type:"POST",
                        dataType:"json",
                        timeout: timeout,
                        success: success,
                        error: error};
               
        if (!error) {
            settings.error = function(jqXHR, textStatus, errorThrown) {
                            console.log('ERROR: Call to '+url+ ' failed: '+textStatus);
                            console.log(jqXHR);
            };
        }    
        if (!cors) {
            $.ajax(url, settings); 
        } else {
            try {
                var xhr = new XMLHttpRequest();   
            } catch (error) { // IE throws an exception for some reason...
                var xhr = {};
            }

            if ("withCredentials" in xhr) { // Browsers with full CORS support   
                $.ajax(url, settings);        
            } else if (typeof XDomainRequest !== "undefined") { 
                // Internet Explorer only supports CORS via XDomainRequest
                var xdr = new XDomainRequest();
                xdr.timeout = timeout;
                xdr.open("get", url);
                xdr.onload = function(){
                                success($.parseJSON(xdr.responseText), '', 
                                        xdr);
                };
                xdr.onerror = error;
                
                xdr.send();
            }
        }
    }
    
    return {createID:createID, 
            includesGoogleMaps2:includesGoogleMaps2,
            getAPIData: getAPIData
    }
 });