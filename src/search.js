/**
 * Pelagios search widget
 * @license GPL v3(see LICENSE.txt)
 */
if (!PELAGIOS_SEARCH_MAIN_JS_RUN) { // Only run this script once per page
    var PELAGIOS_SEARCH_MAIN_JS_RUN = true;
    /* 
     * Wrap the code in an anonymous function to avoid namespace clashes
     */
    (function(){

    // Get the baseURL by assuming this script is the last to have been run
    var scripts = document.getElementsByTagName('script');
    var src = scripts[scripts.length - 1].src;
    var baseURL = src.replace(/search.js/g, '');

    require.config({
        paths: {
            jquery: 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min',
            jqueryui: 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min'
       },
        priority: ['jquery'],
        jQuery: "1.7.1",
        waitSeconds : 5,
        baseUrl: baseURL,
        shim: {
            'jqueryui': {
                deps: ['jquery'],
             },
             'lib/jquery_pagination' : {
                deps: ['jquery']
             }
        }                        
    });

    require(    
        ['app/pelagios',
         'app/util',
         'lib/handlebars'], 
        function(pelagios, util) {
            var jQuery = window.jQuery.noConflict(true);
            jQuery(document).ready(function($) {
                // Find everything on the page with the right class
                // Get its widget ID and create the widget
                // Make sure this script is only run once
                       
                $('.pelagios-search').each(function() {
                    var widgetContext = {baseURL:            baseURL, 
                        widgetID:           $(this).attr('id'), 
                        displayMap:         $(this).attr('data-display_map') ? 
                                            !($(this).attr('data-display_map') === 'false'):
                                            true,
                        debug:              $(this).attr('data-debug') ? 
                                            ($(this).attr('data-debug') === 'true') :false,
                        overlay:            false,
                        templateDir:        baseURL+'template/',
                        imageDir:           baseURL+'images/',
                        iconDir:            baseURL+'images/partner_icons/',
                        scriptDir:          baseURL+'scripts/',
                        cssDir:             baseURL+'css/' ,

                        containerWidth:    $(this).attr('data-container_width') ? $(this).attr('data-container_width')
                                            : '550',
                        mapWidth:          $(this).attr('data-container_width') ? $(this).attr('data-container_width') - 125
                                            : '425',                    
                        pleiadesFlickrGroupOnly:  false,
                        type:               'search'                        
                                    };
                    if (util.includesGoogleMaps2()) {
                        widgetContext.displayMap = false;
                    }
                    if (widgetContext.debug) {
                        console.log('CREATING WIDGET widgetID:'+
                                    widgetContext.widgetID+' baseURL:'
                                    +widgetContext.baseURL);
                    }
                    
                    widget = new pelagios.Widget(widgetContext);
                    widget.setTypeSearch();
                });
            });
        }
    );
    })();
}

