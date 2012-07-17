/**
 * Pelagios utility functions
 * @license GPL v3(see LICENSE.txt)
 */

define(["jquery"],function(e){function t(e){var t=e.replace(/ /g,"");return t=t.replace(/[\.,-\/#!$%\^&\*;:{}=\-_`~()]/g,""),t}function n(){return typeof GMap2!="undefined"}function r(t,n,r,i,s){var o={type:"POST",dataType:"json",timeout:i,success:n,error:r};r||(o.error=function(e,n,r){console.log("ERROR: Call to "+t+" failed: "+n),console.log(e)});if(!s)e.ajax(t,o);else{try{var u=new XMLHttpRequest}catch(r){var u={}}if("withCredentials"in u)e.ajax(t,o);else if(typeof XDomainRequest!="undefined"){var a=new XDomainRequest;a.timeout=i,a.open("get",t),a.onload=function(){n(e.parseJSON(a.responseText),"",a)},a.onerror=r,a.send()}}}return{createID:t,includesGoogleMaps2:n,getAPIData:r}})