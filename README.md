pelagios-widgets
================

Embeddable Javascript widgets to access Pelagios ancient history data

There are two widgets:

* The Pelagios Place Widget - to show data about a specific place
* The Pelagios Search Widget - allows searching for places, and then showing
data about them

Both widgets are currently in beta. For demonstrations of the widgets and instructions on how to embed them
see http://pelagios.github.com/pelagios-widgets/

The code uses 
- JQuery 
- RequireJS for module loading requirejs.org
- Handlebars for templating handlebarsjs.com

Directories
===========

* build - code for a release is placed here by the build script
* src - source code 
* src/app - the widget libraries - the core code behind the widgets is in here
* src/css - CSS for the widgets 
* src/demo - Demos for http://pelagios.github.com/pelagios-widgets/
* src/docs - Docs for http://pelagios.github.com/pelagios-widgets/
* src/images - Images for the widgets 
* src/lib - Third party libraries 
* src/template - Handlebars templates, both non-compiled and compiled
* src/index.html - Index page for http://pelagios.github.com/pelagios-widgets/
* src/place.js - main script for the Place Widget
* src/search.js - main script for the Search Widget
* pelagios.build.js - settings for running r.js see 
https://github.com/jrburke/r.js
* r.js - optimiser 
* Rakefile - build script, pre-compiles Handlebars templates and runs the r.js
optimiser 

Included libraries
==================

The Pelagios Widgets includes libraries from these projects

* Require.js
* r.js 
* Handlebars.js
* Text.js And async.js plug-ins for require.js 
* Jquery.pagination


