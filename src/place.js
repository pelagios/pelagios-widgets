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
    var baseURL = src.replace(/place.js/g, '');

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
             }
        }        
    })

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
                    var widgetContext = {
                         baseURL:            baseURL, 
                         widgetID:           $(this).attr('id'), 
                         pleiadesID:         $(this).attr('data-pleiades_id'), 
                         displayMap:         $(this).attr('data-display_map') ? 
                                             !($(this).attr('data-display_map') === 'false'):
                                             true,
                         onMouseOver:         $(this).attr('data-mouseover') ? 
                                             ($(this).attr('data-mouseover') === 'true'):
                                             false,
                         debug:              $(this).attr('data-debug') ? 
                                             ($(this).attr('data-debug') === 'true') :true,
                         icon:               $(this).attr('data-icon') ? 
                                             ($(this).attr('data-icon') === 'true') :true,
                         newTab:             $(this).attr('data-new_tab') ? 
                                             ($(this).attr('data-new_tab') === 'true'):false,
                         templateDir:        baseURL+'template/',
                         imageDir:           baseURL+'images/',
                         iconDir:            baseURL+'images/partner_icons/',
                         scriptDir:          baseURL+'scripts/',
                         cssDir:             baseURL+'css/',
                         pleiadesFlickrGroupOnly:  false
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

