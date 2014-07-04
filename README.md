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

About
=================

The code for the widgets needs to be built useing the Rakefile before being used. This takes the code in 
the src directory and puts the built code in the build directory. 

To do this
- Install ruby (if not already installed)
- Install rake (if not already installed)
- Install node and npm (if not already installed)
- Install handlebars via 'npm install handlebars -g' (if not already installed)
- At the ruby prompt run 'rake'

The rakefile currently does two things - it precompiles the handlebars templates (putting them in src/template) and then uses require.js (which the code uses as its module loader) to optimise the javascript. The pelagios.build.js file provides the information necessary for require.js to do this optimisation (and move the code into the build directory).

If you are doing development, then you will want to do this with the code in the src directory (as you do not want to use the optimised files)




