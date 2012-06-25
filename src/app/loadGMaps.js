// Require.js plugin to conditionally load a library only if Google Maps v2 is 
// not present
define(function(){

    var _noGMaps2;

    function noGMaps2(){        
        if (_noGMaps2 != null) return _noGMaps2;
       
        _noGMaps2 = (typeof GMap2 == 'undefined');
    }

    return {
        load : function(name, req, onLoad, config){
            if(config.isBuild || noGMaps2()){
                //don't load during build or if browser supports canvas
                onLoad(null);
            } else {
                window.setTimeout(function() {
                //load stuff if canvas isn't supported
                req([name], onLoad);
                }, 500);
            }
        }
    };

})