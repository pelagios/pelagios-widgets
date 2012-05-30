 /**
 * Pelagios dataset library - will move into a json file eventually, 
 * however need to think about how to handle the async loading of the json 
 * first
 * @license GPL v3(see LICENSE.txt)
 */
 
 define(function () {   

   /**
    * Get the description for a dataset - will eventually be replaced by
    * VoID information
    */        
    function getDatasetStrapline(dataset) {
        var straplines = {
            'Arachne'                 : 'A web research tool of the German Archaeological Institute for searching mass archaeological records',
            'Google Ancient Places'   : 'A Geographic Annotation Platform for reading texts spatially',
            'nomisma'                 : 'Representing ancient coins online',
            'SPQR'                    : 'From Roman inscriptions to resource descriptions',
            'Regnum Francorum Online' : 'Interactive Maps and Sources of Late Antique and Early Medieval Europe',
            'Perseus'                 : 'Annotated occurrences of place entities in texts from the Perseus Digital Library',
            'CLAROS'                  :'Aggregated search of art and archaeology data from the classical world and the far east across four millennia',
            'FASTI Online'            : 'A database of archaeological excavations since the year 2000',
            'flickr'                  : 'Photo sharing website'
        };
        var strapline = straplines[dataset] ? straplines[dataset] : '';
        return strapline;
    }
    

    
   /**
    * Get the URL of the icon for each dataset - will eventually be 
    * replaced by VoID information
    */        
    function getDatasetIconURL(dataset) {
        var icons = {'CLAROS' :               'CLAROS.png',
                    'FASTI Online':           'FASTI.png',
                    'Google Ancient Places':  'gap_logo.png',
                    'Arachne':                'arachne.png',
                    'Open Context':           'open-context.png',
                    'SPQR':                   'SPQR.png',
                    'Ure Museum':             'URE.png',
                    'nomisma':                'Greek.jpeg',
                    'Perseus':                'Perseus.png',
                    'Regnum Francorum Online':'Regnum.png'
        };
        // If no logo, then use the Pelagios icon
        var icon= icons[dataset] ? icons[dataset] : 'pelagios.png';
        return icon;
    }
    
    function hasDatasetMeaningfulLabel(dataset) {
        var meaningful = false;
        switch(dataset) {
            case 'Google Ancient Places': meaningful = true;
        }
        return meaningful;
    }
        
    return { 
            getDatasetStrapline: getDatasetStrapline,
            getDatasetIconURL:   getDatasetIconURL,
            hasDatasetMeaningfulLabel: hasDatasetMeaningfulLabel
            };    

});



 

