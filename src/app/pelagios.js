 /**
 * Pelagios common library
 * @license GPL v3(see LICENSE.txt)
 */
 define(['jquery', 'app/dataset', 'app/util', 'app/search_map', 'app/place_map'], 
        function ($, dataset, util, search_map, place_map) {   
    var config = {
        URL_PELAGIOS_SEARCH_V1:      'http://pelagios.dme.ait.ac.at/graph-explorer/places/search',
        URL_PELAGIOS_SEARCH_V2:      'http://pelagios.dme.ait.ac.at/api/search.json',
        URL_PELAGIOS_ANNOTATIONS_V1: 'http://pelagios.dme.ait.ac.at/graph-explorer/annotations',
        URL_PELAGIOS_REFERENCES_V1:   'http://pelagios.dme.ait.ac.at/graph-explorer/places/referencesTo',
        URL_PELAGIOS_REFERENCES_V2: 'http://pelagios.dme.ait.ac.at/graph-explorer/places/referencesTo',
        API_KEY_FLICKR:              'ddf82df2aba035bfcf14c12a4eff3335',
        TIMEOUT_PLEIADES:            6000,
        TIMEOUT_PELAGIOS:            60000,
        TIMEOUT_FLICKR:              6000,
        URL_PLEIADES:                'http://pleiades.stoa.org/places/',
        URL_FLICKR_SEARCH:           'http://api.flickr.com/services/rest/?format=json&method=flickr.photos.search',
        MAX_PHOTOS_FLICKR:           30,
        MSG_PLACE_NOT_FOUND:         'The place specified for this widget does not exist in the Pleiades gazetteer.',
        MSG_TITLE_PLACE_NOT_FOUND:   'Error: Unknown Place',
        MSG_PLEIADES_TIMEOUT:        'We cannot display the place name and map at the moment because the Pleiades website is not responding. Apologies for the inconvenience and please try again later.',
        MSG_TITLE_PLEIADES_TIMEOUT:  'Error: Pleiades not responding'
    }
    
    function Widget(widgetContext) {
        var placeMap = {};
        var searchMap = {};
        var searchString = "";
        
        if (typeof($('#'+widgetContext.widgetID)) == undefined) {
            debug('ERROR: $(#'+widgetContext.widgetID+') is undefined');
        }
        // console.log(document.compatMode);
        // Load the style sheet 
        $('head').append('<link rel="stylesheet" type="text/css" href="'+
                         widgetContext.cssDir+
                         'pelagios.css" media="screen" />');
        // Add the basic widget structure to hang things off 
        addTemplate(widgetContext.widgetID, 'widget_container', 
                   {widgetContext: widgetContext});
                 
        this.setTypePlace = function() { 
            debug('SETTING WIDGET TYPE: PLACE');
            
            addTemplate(widgetContext.widgetID+'-content', 'place', {widgetContext: widgetContext});  
            hidePlace();
        
            if (widgetContext.overlay == true) {
                // Position the widget
                $('#'+widgetContext.widgetID+'-container').hide();
                $('#'+widgetContext.widgetID+'-icon').click(function() {
                    // Hide any currently open Pelagios widgets so that we don't
                    // have more than one widget open at once
                    $('.pelagios-container').hide(); 
                    
                    // Position the widget
                    $('#'+widgetContext.widgetID+'-container').show();
                    var icon_offset = $('#'+widgetContext.widgetID+'-icon').offset();
                    var container_offset = {top: $(window).scrollTop(), left: 200}
                    $('#'+widgetContext.widgetID+'-container').offset(container_offset);
                    
                    // Refresh the map for it to display properly
                    // Need to check that the refresh method exists as the 
                    // widget might be opened before the google maps api has 
                    // loaded and the map created
                    if (widgetContext.displayMap && 
                        placeMap.hasOwnProperty('refresh')) {   
                        placeMap.refresh();
                    }
                });
                $('#'+widgetContext.widgetID+'-close-widget').click(function() {
                    $('#'+widgetContext.widgetID+'-container').hide();
                });
            }
            
            displayPlace(widgetContext.pleiadesID);
        }
        

        
        this.setTypeSearch = function() {
            debug('SETTING WIDGET TYPE: SEARCH');

            // Add the template for the search form, search results, and template for displaying a place
            // then hide everything apart from the search form
            addTemplate(widgetContext.widgetID+'-content', 'search', {widgetContext: widgetContext});
            addTemplate(widgetContext.widgetID+'-content', 'place', {widgetContext: widgetContext});
            hidePlace();
            hideSearchResults();
            
            // Add a handler for the search form
            $('#'+widgetContext.widgetID+'-search-form').submit(function() {
                searchString = $('input:first').val();
                displaySearchResults();
                return false;
            });

        }
        
        function displayPlace(pleiadesID) {
            debug('DISPLAYING PLACE: pleiadesID: '+pleiadesID);
            placeMap = {};
            clearPlace();
            showPleiadesData(pleiadesID);
            showPelagiosData(pleiadesID);   
            showFlickrData(pleiadesID);
        }
        
       /**
        * Clear all the place information from the widget
        */     
        function clearPlace() {
            $('#'+widgetContext.widgetID+'-pleiades').empty();
            $('#'+widgetContext.widgetID+'-sections').empty();
        }

        
        function showFlickrData(pleiadesID) {
            var flickrURL = config.URL_FLICKR_SEARCH+
                            "&machine_tags=pleiades:depicts="+pleiadesID+
                            "&group_id=1876758@N22&tag_mode=all&api_key="+
                            config.API_KEY_FLICKR+"&jsoncallback=?";  
            util.getAPIData(flickrURL, displayFlickrData, false, config.TIMEOUT_FLICKR, 
                       false);

            /**
            * Callback to display all the photos from flickr for the specified 
            * place
            */         
            function displayFlickrData(json) {        
                // If photos returned, add a flickr section
                if (json.hasOwnProperty('photos') && 
                    json.photos.hasOwnProperty('photo') && 
                    json.photos.photo.length > 0) { 
                    
                    addSection('flickr', 'flickr', 
                               widgetContext.imageDir+'icons/flickr-logo.png',
                               'Photo sharing website')
                    // Render the Handlebars template for the flickr data  
                    var data = {photo: json.photos.photo.slice(0, 
                                                     config.MAX_PHOTOS_FLICKR - 1), 
                                  //Flickr only lets us display 30 images at a time
                                pleiadesID: pleiadesID}
                                
                    addTemplate(widgetContext.widgetID+'-content-flickr', 'flickr', data)

                }
            }     
        }

        function showPleiadesData(pleiadesID) {
            var pleiadesURI    = config.URL_PLEIADES+pleiadesID;
            var pleiadesAPIURL = config.URL_PLEIADES+pleiadesID+'/json';
            util.getAPIData(pleiadesAPIURL, displayPleiadesData, displayPleiadesError, 
                       config.TIMEOUT_PLEIADES, true);
           /** 
            * Displays an error message if the call to the Pleiades API results in 
            * an error
            */        
            function displayPleiadesError(jqXHR, textStatus, errorThrown) {
                $('#'+widgetContext.widgetID+'-content').empty();
                if (jqXHR.status == '404') { 
                    var data = {title: config.MSG_TITLE_PLACE_NOT_FOUND,
                                msg: config.MSG_PLACE_NOT_FOUND};       
                } else { 
                    var data = {title: config.MSG_TITLE_PLEIADES_TIMEOUT,
                                msg: config.MSG_PLEIADES_TIMEOUT};                
                }
                
                addTemplate(widgetContext.widgetID+'-content', 'error', data);
            }

           /**
            * Callback to use display the data from Pleiades, including
            * plotting the location on the Google Map
            */ 
            function displayPleiadesData(data) {
                var altNames = false;
                if (data.names.length > 1) {
                    altNames = data.names.join(', '); 
                }
               
                var placeData= {title: data.names[0] ? data.names[0] : 'Untitled',
                                description: data.description,
                                altNames: altNames, 
                                pleiadesID: data.id,
                                widgetContext: widgetContext};

                addTemplate(widgetContext.widgetID+'-pleiades', 'pleiades', placeData);

            // Add the Google map - we need to do this here so that we can refresh#
            // it when the widget is opened
            if (widgetContext.displayMap) {  
                placeMap = new place_map.PlaceMap(widgetContext.widgetID+'-map_canvas');
                placeMap.setMarker(data.reprPoint, data.names[0]);
            }
                
            showPlace();
            }   
        }
        
    

   
       /**
        * Add Pelagios partner data to a Pelagios widget
        */    
        function showPelagiosData(pleiadesID) {                   
            if (widgetContext.pelagiosAPIversion == 1) {                     
                var pelagiosURL = config.URL_PELAGIOS_REFERENCES_V1 +"?place="+
                                  config.URL_PLEIADES+pleiadesID+"&callback=?";
            } else {
                var pelagiosURL = config.URL_PELAGIOS_REFERENCES_V1 +"?place="+
                                  config.URL_PLEIADES+pleiadesID+"&callback=?";
            }
                 
            util.getAPIData(pelagiosURL, displayPelagiosData, false, 
                       config.TIMEOUT_PELAGIOS, false);  

           /**
            * Display data from Pelagios partners
            * json - the data returned by the Pelagios Graph Explorer API for the
            * specified location
            */        
            function displayPelagiosData(json) {
                // We need to sort the subdatasets into their root datasets so that
                // we can display them together
                var items = [];
                var data = {};

                $.each(json, function(key, val) { 
                    data[val.rootDataset] = data[val.rootDataset] || [];   
                    data[val.rootDataset].push(val);
                });

                // Loop through the root datasets - lots of room for making this 
                // more efficient!
                $.each(data, function(rootDataset, info) {
                    var rootDatasetID = util.createID(rootDataset);
                   
                    // Add a section for the current root dataset
                    addSection(rootDatasetID, rootDataset, 
                               widgetContext.iconDir+dataset.getDatasetIconURL(rootDataset), 
                               dataset.getDatasetStrapline(rootDataset)) ;
                    
                    var subdataset = new Array();    
                    for (var i = 0; i < info.length; i++) {
                        subdataset[i] = {};
                        subdataset[i].widgetContext      = widgetContext;
                        subdataset[i].title              = info[i].dataset;
                        subdataset[i].id                 = util.createID(info[i].dataset); 
                        subdataset[i].references         = info[i].referencesTo; 
                        subdataset[i].multipleReferences = (subdataset[i].references > 1 ? true : false);
                    }

                    var data = {subdataset: subdataset, 
                                rootDatasetID: rootDatasetID,
                                widgetContext: widgetContext};
                    addTemplate(widgetContext.widgetID+'-content-'+rootDatasetID, 'pelagios_partner', data);
                    $('#'+widgetContext.widgetID+'-subdatasets-'+rootDatasetID).
                      css('list-style-image', 
                      'url('+widgetContext.imageDir+'icons/bullet.png)');
                    // Add the handler to open and close the subdataset 
                    // content and start with the content hidden
                    for (var i = 0; i < subdataset.length; i++) {   
                        $('#'+widgetContext.widgetID+'-toggle-subdataset-'+
                          subdataset[i].id).click(
                                                 {subdataset: subdataset[i].title},
                                                 clickDisplaySubdataset);                            
                        $('#'+widgetContext.widgetID+'-subdataset_content-'+
                          subdataset[i].id).hide();                    
                    }                      
                });
            } 

           /**
            * Callback function when somebody clicks to view hits for a subdataset
            */
            function clickDisplaySubdataset(data) {   
                var subdataset = data.data.subdataset;
                var subdatasetID= util.createID(subdataset); 
                
                // Show the loading message and hide the annotations pane until we 
                // get the results to display
                $('#'+widgetContext.widgetID+'-annotations_pane-'+
                  subdatasetID).hide(); 
                var loadingElement = $('#'+widgetContext.widgetID+'-loading-'+
                                       subdatasetID);
                loadingElement.append('<p>Loading</p>');
                loadingElement.show();
                
                // If the annotations pane is open, underline the number of hits, 
                // if it is closed, remove the underline
                toggleSelectedLink(widgetContext.widgetID+'-subdataset_hits-'+
                                    subdatasetID)
                // Show or hide the subdataset content
                $('#'+widgetContext.widgetID+'-subdataset_content-'+
                  subdatasetID).toggle();  
                toggleIcon(widgetContext.widgetID+'-toggle-subdataset-'+
                           subdatasetID);
                
                // Get the subdataset results from the Pelagios Graph Explorer API
                var url = config.URL_PELAGIOS_ANNOTATIONS_V1+"?place="+
                              config.URL_PLEIADES+pleiadesID+ "&dataset="
                              +encodeURIComponent(subdataset) 
                              +"&callback=?";                                               
                $.getJSON(url, function(json) {
                                    displaySubdataset(subdatasetID, json);
                });
            }

            
           /**
            * Display the data from a subdataset using the json data obtained
            */        
            function displaySubdataset(subdatasetID, json) {
                // Hide the 'loading' message and display the annotations pane
                // where we will put the annotations
                $('#'+widgetContext.widgetID+'-loading-' + subdatasetID).hide();            
                var paneElement = $('#'+widgetContext.widgetID+
                                    '-annotations_pane-'+subdatasetID);
                paneElement.show();
                paneElement.text('');
               
                // Loop through the subdataset and display the items as a list
                var annotation = new Array();
                $.each(json, function(key, val) {
                    annotation[key] = {};
                    
                    // If the label says something useful then display it
                    // otherwise display Item 1, Item 2, Item 3 etc. 
                    if (dataset.hasDatasetMeaningfulLabel(json[0].rootDataset)) {
                        annotation[key].label = val.label ? val.label: 
                                                            'Item '+ (key + 1);
                    } else {
                        annotation[key].label = 'Item '+ (key + 1); 
                    }

                    annotation[key].uri = val.uri;
                });
                 
                var data = {subdatasetID: subdatasetID, 
                            annotation: annotation,
                            widgetContext: widgetContext};
                addTemplate(widgetContext.widgetID+'-annotations_pane-'+subdatasetID, 'annotations', data);
            }
            
           /**
            * Hide a subdataset pane
            */
            function hideSubdataset(id) {
                $('#'+widgetID+'-subdataset_content-'+id).hide(); 
            }
        }
 
        function displaySearchResults() {
            if (widgetContext.pelagiosAPIversion == 1) { 
                var pelagiosURL = config.URL_PELAGIOS_SEARCH_V1+'?q='+searchString+'&callback=?';
            } else if (widgetContext.pelagiosAPIversion == 2) {
                var pelagiosURL = config.URL_PELAGIOS_SEARCH_V2+'?query='+searchString+'&callback=?';
            }
            
            debug('RETRIEVING SEARCH DATA: searchString: '+searchString+' URL:'+pelagiosURL);        
            util.getAPIData(pelagiosURL, displaySearchResultsData, 
                            false, config.TIMEOUT_PELAGIOS, false);
        }
      
        function displaySearchResultsData(json) {
            debug('SEARCH DATA RECEIVED');
            
             $('#'+widgetContext.widgetID+'-search-map').empty();
             $('#'+widgetContext.widgetID+'-search-results').empty();
             $('#'+widgetContext.widgetID+'-pleiades').empty();
             $('#'+widgetContext.widgetID+'-sections').empty();
            
            // Put the data into a more useful form
            var places = new Array();
            $.each(json, function(key, val) { 
                place = {};
                place.label = val.label;
                place.pleiadesID = val.uri.replace(/.*places.*F/g, '');
                place.geojson = val;
                place.content = '<h2>'+place.label+'</h2>';
                place.content += '<p id="'+widgetContext.widgetID+'-info-'+
                                 place.pleiadesID+'">View info</p>';
                place.widgetID = widgetContext.widgetID;  //Hack                             
                places[key] = place;
            });
            
            var data = {place: places, widgetContext: widgetContext, searchString: searchString}
            // Display the search results
            addTemplate(widgetContext.widgetID+'-search-results', 'search_results', data);
            if (widgetContext.displayMap) {            
                searchMap = new search_map.SearchMap(widgetContext.widgetID +
                                "-search-map_canvas");  
            }
                       
            $.each(places, function(key, place) {
                if (widgetContext.displayMap) {    
                    searchMap.addMarker(place.geojson, place.label, 
                                        place.content, function() {
                                            onClickHandler(place.pleiadesID);
                                        }); 
                }

                $('#'+widgetContext.widgetID+'-place-'+place.pleiadesID).click(
                    function() {
                        onClickHandler(place.pleiadesID);
                    }); 
                   
            });
            
            function onClickHandler(pleiadesID) {
                $('.pelagios-search-result-list li').css('text-decoration', 'none');
                 $('.pelagios-search-result-list li').css('font-weight', 'normal');
                $('#'+widgetContext.widgetID+'-place-'+pleiadesID).css('text-decoration', 'underline');
                $('#'+widgetContext.widgetID+'-place-'+pleiadesID).css('font-weight', 'bold');
                displayPlace(pleiadesID);
            }
            
            showSearchResults();
        }
        
        function hideSearchResults() {
             $('#'+widgetContext.widgetID+'-search-results-map').hide();
             $('#'+widgetContext.widgetID+'-search-results').hide();
        }
        
        function showSearchResults() {
            if (widgetContext.displayMap) {
                
                $('#'+widgetContext.widgetID+'-search-results-map').show();
                searchMap.refresh();
            }
            $('#'+widgetContext.widgetID+'-search-results').show();
        }
        
        function hidePlace() {
            $('#'+widgetContext.widgetID+'-map').hide();
            $('#'+widgetContext.widgetID+'-place').hide();
        }
        
        function showPlace() {
            $('#'+widgetContext.widgetID+'-place').show();
            
            //Display the search map
            if (widgetContext.displayMap) {
                $('#'+widgetContext.widgetID+'-map').show();
                placeMap.refresh();
            }
        }
        
        /**
         * Add a new section to the widget
         * name - the name of the section to use in the HTML id for the section
         * title - title to be displayed for the section
         * iconURL - URL of the icon to be displayed
         * strapline - strapline to display for the section
         */          
         function addSection(name, title, iconURL, strapline) {
             var data = {name:name, 
                         title:title, 
                         iconURL: iconURL, 
                         strapline:strapline,
                         widgetContext: widgetContext};
             addTemplate(widgetContext.widgetID+'-sections', 'section', data);
             // Start with the contents hidden
             $('#'+widgetContext.widgetID+'-content-'+name).hide();             
             // Handler to toggle section open and closed
             $('#'+widgetContext.widgetID+'-header-'+name).click(function() {
                 $('#'+widgetContext.widgetID+'-content-'+name).toggle();
                 toggleIcon(widgetContext.widgetID+'-toggle-'+name)  
             })
         }    



         function toggleIcon(id) {
             var current_icon = $('#'+id).attr("src"); 
             var new_icon = (current_icon == widgetContext.imageDir+'icons/down-arrow.png' ? 
                         widgetContext.imageDir+'icons/right-arrow.png' : 
                         widgetContext.imageDir+'icons/down-arrow.png');
             $('#'+id).attr("src", new_icon); 
         }


         function toggleSelectedLink(id) {
             var element = $('#'+ id);
             var current_style = element.css('text-decoration');
             var new_style = current_style  == 'underline' ? 'none' : 
                                                             'underline';
             element.css('text-decoration', new_style);
         }

        function addTemplate(id, template, data) {
            if (typeof($('#'+id)) == undefined) {
                debug('ERROR: $(#'+id+') not defined');
            }
            $('#'+id).append('<script src="'+widgetContext.templateDir+
                                                 template+'.tmpl">'); 
            try {                                        
                var html = Handlebars.templates[template](data);
            } catch (error) {
                debug('Handlebars.templates[template](data) failed');
                console.log(Handlebars);
                console.log(template);
                console.log(data);
            }
            $('#'+id).append(html);
        }
        
        function debug(msg) {
            if (widgetContext.debug) {
                console.log(msg);
            }
        }
    }

    return {Widget: Widget};    

});

