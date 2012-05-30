/** @license
* RequireJS plugin for async dependency load like JSONP and Google Maps
* Author: Miller Medeiros
* Version: 0.1.1 (2011/11/17)
* Released under the MIT license
*/

define([],function(){function c(a){var b,c;b=document.createElement("script"),b.type="text/javascript",b.async=!0,b.src=a,c=document.getElementsByTagName("script")[0],c.parentNode.insertBefore(b,c)}function d(b,c){var d=/!(.+)/,e=b.replace(d,""),f=d.test(b)?b.replace(/.+!/,""):a;return e+=e.indexOf("?")<0?"?":"&",e+f+"="+c}function e(){return b+=1,"__async_req_"+b+"__"}var a="callback",b=0;return{load:function(a,b,f,g){if(g.isBuild)f(null);else{var h=e();window[h]=f,c(d(a,h))}}}})