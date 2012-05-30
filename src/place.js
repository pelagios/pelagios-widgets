/**
 * Pelagios place widget
 * @license GPL v3(see LICENSE.txt)
 */

if (!PELAGIOS_PLACE_MAIN_JS_RUN) { // Only run this script once per page
    var PELAGIOS_PLACE_MAIN_JS_RUN = true;
    /* 
     * Wrap the code in an anonymous function to avoid namespace clashes
     */
    (function(){

    // Get the baseURL by assuming this script is the last to have been run
    var scripts = document.getElementsByTagName('script');
    var src = scripts[scripts.length - 1].src;
    var baseURL = src.replace(/build\/place.js/g, '');

    require.config({
                    paths: {
                        jquery: 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min',
                    },
                    priority: ['jquery'],
                    jQuery: "1.7.1",
                    waitSeconds : 5,
                    baseUrl: baseURL+'build/scripts'            
    });

    require(    
        ['app/pelagios',
         'app/util',
         'lib/handlebars'], 
        function(pelagios, util) {
            $(document).ready(function($) {
                var debug = true;
                if (debug) {
                    var msg = 'FINDING PLACE WIDGETS ON PAGE: ';
                    $('.pelagios-place').each(function() {
                        msg += ' ' + $(this).attr('id');
                    });
                    console.log(msg);
                }
            
                // Find everything on the page with the right class
                // Get its widget ID and create the widget
                // Make sure this script is only run once
                $('.pelagios-place').each(function() {
                    var widgetContext = {baseURL:            baseURL, 
                                     widgetID:           $(this).attr('id'), 
                                     pleiadesID:         $(this).attr(
                                                         'data-pleiades_id'), 
                                     displayMap:         true,
                                     pelagiosAPIversion: 1,
                                     debug:              true,
                                     overlay:            true,
                                     templateDir:        baseURL+
                                                         'build/template/',
                                     imageDir:           baseURL+'images/',
                                     iconDir:            baseURL+'images/partner_icons/',
                                     scriptDir:          baseURL+'build/scripts/',
                                     cssDir:             baseURL+'build/css/'
                                    };

                    if (util.includesGoogleMaps2()) {
                        widgetContext.displayMap = false;
                    }
                    if (widgetContext.debug) {
                        console.log('CREATING WIDGET pleiadesID:'+
                                    widgetContext.pleiadesID+' widgetID:'+
                                    widgetContext.widgetID+' baseURL:'
                                    +widgetContext.baseURL);
                    }
                    
                    widget = new pelagios.Widget(widgetContext);
                    widget.setTypePlace();
                });
            });
        }
    );
    })();
}

