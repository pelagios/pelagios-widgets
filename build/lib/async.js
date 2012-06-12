/** @license
* RequireJS plugin for async dependency load like JSONP and Google Maps
* Author: Miller Medeiros
* Version: 0.1.1 (2011/11/17)
* Released under the MIT license
*/

define([],function(){function injectScript(src){var s,t;s=document.createElement("script"),s.type="text/javascript",s.async=!0,s.src=src,t=document.getElementsByTagName("script")[0],t.parentNode.insertBefore(s,t)}function formatUrl(name,id){var paramRegex=/!(.+)/,url=name.replace(paramRegex,""),param=paramRegex.test(name)?name.replace(/.+!/,""):DEFAULT_PARAM_NAME;return url+=url.indexOf("?")<0?"?":"&",url+param+"="+id}function uid(){return _uid+=1,"__async_req_"+_uid+"__"}var DEFAULT_PARAM_NAME="callback",_uid=0;return{load:function(name,req,onLoad,config){if(config.isBuild)onLoad(null);else{var id=uid();window[id]=onLoad,injectScript(formatUrl(name,id))}}}})