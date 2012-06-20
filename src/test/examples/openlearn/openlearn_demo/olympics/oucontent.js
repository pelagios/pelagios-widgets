// This is an external script, included here, and in one line, for performance.
/* PluginDetect v0.6.1 [ onWindowLoaded isMinVersion Java(OTF) Flash ] by Eric Gerds www.pinlady.net/PluginDetect */ if(!PluginDetect){var PluginDetect={getNum:function(b,c){if(!this.num(b)){return null}var a;if(typeof c=="undefined"){a=/[\d][\d\.\_,-]*/.exec(b)}else{a=(new RegExp(c)).exec(b)}return a?a[0].replace(/[\.\_-]/g,","):null},hasMimeType:function(c){if(PluginDetect.isIE){return null}var b,a,d,e=c.constructor==String?[c]:c;for(d=0;d<e.length;d++){b=navigator.mimeTypes[e[d]];if(b&&b.enabledPlugin){a=b.enabledPlugin;if(a.name||a.description){return b}}}return null},findNavPlugin:function(g,d){var a=g.constructor==String?g:g.join(".*"),e=d===false?"":"\\d",b,c=new RegExp(a+".*"+e+"|"+e+".*"+a,"i"),f=navigator.plugins;for(b=0;b<f.length;b++){if(c.test(f[b].description)||c.test(f[b].name)){return f[b]}}return null},AXO:window.ActiveXObject,getAXO:function(b,a){var f=null,d,c=false;try{f=new this.AXO(b);c=true}catch(d){}if(typeof a!="undefined"){delete f;return c}return f},num:function(a){return(typeof a!="string"?false:(/\d/).test(a))},compareNums:function(g,e){var d=this,c,b,a,f=window.parseInt;if(!d.num(g)||!d.num(e)){return 0}if(d.plugin&&d.plugin.compareNums){return d.plugin.compareNums(g,e)}c=g.split(",");b=e.split(",");for(a=0;a<Math.min(c.length,b.length);a++){if(f(c[a],10)>f(b[a],10)){return 1}if(f(c[a],10)<f(b[a],10)){return -1}}return 0},formatNum:function(b){if(!this.num(b)){return null}var a,c=b.replace(/\s/g,"").replace(/[\.\_]/g,",").split(",").concat(["0","0","0","0"]);for(a=0;a<4;a++){if(/^(0+)(.+)$/.test(c[a])){c[a]=RegExp.$2}}if(!/\d/.test(c[0])){c[0]="0"}return c[0]+","+c[1]+","+c[2]+","+c[3]},initScript:function(){var $=this,userAgent=navigator.userAgent;$.isIE=/*@cc_on!@*/false;$.IEver=$.isIE&&((/MSIE\s*(\d\.?\d*)/i).exec(userAgent))?parseFloat(RegExp.$1,10):-1;$.ActiveXEnabled=false;if($.isIE){var x,progid=["Msxml2.XMLHTTP","Msxml2.DOMDocument","Microsoft.XMLDOM","ShockwaveFlash.ShockwaveFlash","TDCCtl.TDCCtl","Shell.UIHelper","Scripting.Dictionary","wmplayer.ocx"];for(x=0;x<progid.length;x++){if($.getAXO(progid[x],1)){$.ActiveXEnabled=true;break}}$.head=typeof document.getElementsByTagName!="undefined"?document.getElementsByTagName("head")[0]:null}$.isGecko=!$.isIE&&typeof navigator.product=="string"&&(/Gecko/i).test(navigator.product)&&(/Gecko\s*\/\s*\d/i).test(userAgent)?true:false;$.GeckoRV=$.isGecko?$.formatNum((/rv\s*\:\s*([\.\,\d]+)/i).test(userAgent)?RegExp.$1:"0.9"):null;$.isSafari=!$.isIE&&(/Safari\s*\/\s*\d/i).test(userAgent)?true:false;$.onWindowLoaded(0)},init:function(c,a){if(typeof c!="string"){return -3}c=c.toLowerCase().replace(/\s/g,"");var b=this,d;if(typeof b[c]=="undefined"){return -3}d=b[c];b.plugin=d;if(typeof d.installed=="undefined"||a==true){d.installed=null;d.version=null;d.version0=null;d.getVersionDone=null;d.$=b}b.garbage=false;if(b.isIE&&!b.ActiveXEnabled){if(b.plugin!=b.java){return -2}}return 1},isMinVersion:function(g,e,c,b){var f=PluginDetect,d=f.init(g);if(d<0){return d}if(typeof e=="number"){e=e.toString()}if(typeof e!="string"){e="0"}if(!f.num(e)){return -3}e=f.formatNum(e);var a=-1,h=f.plugin;if(h.getVersionDone!=1){h.getVersion(c,b);if(h.getVersionDone==null){h.getVersionDone=1}}if(h.version!=null||h.installed!=null){if(h.installed<=0.5){a=h.installed}else{a=(h.version==null?0:(f.compareNums(h.version,e)>=0?1:-1))}}f.cleanup();return a;return -3},getVersion:function(e,b,a){return null},getInfo:function(f,c,b){var a={};return a},cleanup:function(){var a=this;if(a.garbage&&typeof window.CollectGarbage!="undefined"){window.CollectGarbage()}},isActiveXObject:function(b){},codebaseSearch:function(c){var e=this;if(!e.ActiveXEnabled){return null}if(typeof c!="undefined"){return e.isActiveXObject(c)}},dummy1:0}}PluginDetect.onDetectionDone=function(g,e,d,a){return -1};PluginDetect.onWindowLoaded=function(c){var b=PluginDetect,a=window;if(b.EventWinLoad===true){}else{b.winLoaded=false;b.EventWinLoad=true;if(typeof a.addEventListener!="undefined"){a.addEventListener("load",b.runFuncs,false)}else{if(typeof a.attachEvent!="undefined"){a.attachEvent("onload",b.runFuncs)}else{if(typeof a.onload=="function"){b.funcs[b.funcs.length]=a.onload}a.onload=b.runFuncs}}}if(typeof c=="function"){b.funcs[b.funcs.length]=c}};PluginDetect.funcs=[0];PluginDetect.runFuncs=function(){var b=PluginDetect,a;b.winLoaded=true;for(a=0;a<b.funcs.length;a++){if(typeof b.funcs[a]=="function"){b.funcs[a](b);b.funcs[a]=null}}};PluginDetect.java={mimeType:"application/x-java-applet",classID:"clsid:8AD9C840-044E-11D1-B3E9-00805F499D93",DTKclassID:"clsid:CAFEEFAC-DEC7-0000-0000-ABCDEFFEDCBA",DTKmimeType:"application/npruntime-scriptable-plugin;DeploymentToolkit",JavaVersions:[[1,9,2,25],[1,8,2,25],[1,7,2,25],[1,6,2,25],[1,5,2,25],[1,4,2,25],[1,3,1,25]],searchJavaPluginAXO:function(){var i=null,a=this,c=a.$,h=[],g,k=[1,5,0,14],j=[1,6,0,2],f=[1,3,1,0],e=[1,4,2,0],d=[1,5,0,7],b=false;if(!c.ActiveXEnabled){return null};if(c.IEver>=a.minIEver){h=a.searchJavaAXO(j,j,b);if(h.length>0&&b){h=a.searchJavaAXO(k,k,b)}}else{if(h.length==0){h=a.searchJavaAXO(f,e,false)}}if(h.length>0){i=h[0]}a.JavaPlugin_versions=[].concat(h);return i},searchJavaAXO:function(l,i,m){var n,f,h=this.$,p,k,a,e,g,j,b,q=[];if(h.compareNums(l.join(","),i.join(","))>0){i=l}i=h.formatNum(i.join(","));var o,d="1,4,2,0",c="JavaPlugin."+l[0]+""+l[1]+""+l[2]+""+(l[3]>0?("_"+(l[3]<10?"0":"")+l[3]):"");for(n=0;n<this.JavaVersions.length;n++){f=this.JavaVersions[n];p="JavaPlugin."+f[0]+""+f[1];g=f[0]+"."+f[1]+".";for(a=f[2];a>=0;a--){b="JavaWebStart.isInstalled."+g+a+".0";if(h.compareNums(f[0]+","+f[1]+","+a+",0",i)>=0&&!h.getAXO(b,1)){continue}o=h.compareNums(f[0]+","+f[1]+","+a+",0",d)<0?true:false;for(e=f[3];e>=0;e--){k=a+"_"+(e<10?"0"+e:e);j=p+k;if(h.getAXO(j,1)&&(o||h.getAXO(b,1))){q[q.length]=g+k;if(!m){return q}}if(j==c){return q}}if(h.getAXO(p+a,1)&&(o||h.getAXO(b,1))){q[q.length]=g+a;if(!m){return q}}if(p+a==c){return q}}}return q},minIEver:7,getFromMimeType:function(a){var h,f,c=this.$,j=new RegExp(a),d,k,i={},e=0,b,g=[""];for(h=0;h<navigator.mimeTypes.length;h++){k=navigator.mimeTypes[h];if(j.test(k.type)&&k.enabledPlugin){k=k.type.substring(k.type.indexOf("=")+1,k.type.length);d="a"+c.formatNum(k);if(typeof i[d]=="undefined"){i[d]=k;e++}}}for(f=0;f<e;f++){b="0,0,0,0";for(h in i){if(i[h]){d=h.substring(1,h.length);if(c.compareNums(d,b)>0){b=d}}}g[f]=i["a"+b];i["a"+b]=null}if(!/windows|macintosh/i.test(navigator.userAgent)){g=[g[0]]}return g},queryJavaHandler:function(){var b=PluginDetect.java,a=window.java,c;b.hasRun=true;try{if(typeof a.lang!="undefined"&&typeof a.lang.System!="undefined"){b.value=[a.lang.System.getProperty("java.version")+" ",a.lang.System.getProperty("java.vendor")+" "]}}catch(c){}},queryJava:function(){var c=this,d=c.$,b=navigator.userAgent,f;if(typeof window.java!="undefined"&&navigator.javaEnabled()&&!c.hasRun){if(d.isGecko){if(d.hasMimeType("application/x-java-vm")){try{var g=document.createElement("div"),a=document.createEvent("HTMLEvents");a.initEvent("focus",false,true);g.addEventListener("focus",c.queryJavaHandler,false);g.dispatchEvent(a)}catch(f){}if(!c.hasRun){c.queryJavaHandler()}}}else{if(/opera.9\.(0|1)/i.test(b)&&/mac/i.test(b)){}else{if(!c.hasRun){c.queryJavaHandler()}}}}return c.value},VENDORS:["Sun Microsystems Inc.","Apple Computer, Inc."],init:function(){var a=this,b=a.$;if(typeof a.app!="undefined"){a.delJavaApplets(b)}a.hasRun=false;a.value=[null,null];a.useTag=[2,2,2];a.app=[0,0,0,0,0,0];a.appi=3;a.queryDTKresult=null;a.OTF=0;a.BridgeResult=[[null,null],[null,null],[null,null]];a.JavaActive=[0,0,0];a.All_versions=[];a.DeployTK_versions=[];a.MimeType_versions=[];a.JavaPlugin_versions=[];a.funcs=[];var c=a.NOTF;if(c){c.$=b;if(c.javaInterval){clearInterval(c.javaInterval)}c.EventJavaReady=null;c.javaInterval=null;c.count=0;c.intervalLength=250;c.countMax=40}a.lateDetection=b.winLoaded;if(!a.lateDetection){b.onWindowLoaded(a.delJavaApplets)}},getVersion:function(f,l){var h,d=this,g=d.$,j=null,n=null,e=null,c=navigator.javaEnabled();if(d.getVersionDone==null){d.init()}var k;if(typeof l!="undefined"&&l.constructor==Array){for(k=0;k<d.useTag.length;k++){if(typeof l[k]=="number"){d.useTag[k]=l[k]}}}if(d.getVersionDone==0){if(!d.version||d.useAnyTag()){h=d.queryExternalApplet(f);if(h[0]){e=h[0];n=h[1]}}d.EndGetVersion(e,n);return}var i=d.queryDeploymentToolKit();if(typeof i=="string"&&i.length>0){j=i;n=d.VENDORS[0]}if(!g.isIE){var q,m,b,o,a;a=g.hasMimeType(d.mimeType);o=(a&&c)?true:false;if(d.MimeType_versions.length==0&&a){h=d.getFromMimeType("application/x-java-applet.*jpi-version.*=");if(h[0]!=""){if(!j){j=h[0]}d.MimeType_versions=h}}if(!j&&a){h="Java[^\\d]*Plug-in";b=g.findNavPlugin(h);if(b){h=new RegExp(h,"i");q=h.test(b.description)?g.getNum(b.description):null;m=h.test(b.name)?g.getNum(b.name):null;if(q&&m){j=(g.compareNums(g.formatNum(q),g.formatNum(m))>=0)?q:m}else{j=q||m}}}if(!j&&a&&/macintosh.*safari/i.test(navigator.userAgent)){b=g.findNavPlugin("Java.*\\d.*Plug-in.*Cocoa",false);if(b){q=g.getNum(b.description);if(q){j=q}}}if(j){d.version0=j;if(c){e=j}}if(!e||d.useAnyTag()){b=d.queryExternalApplet(f);if(b[0]){e=b[0];n=b[1]}}if(!e){b=d.queryJava();if(b[0]){d.version0=b[0];e=b[0];n=b[1];if(d.installed==-0.5){d.installed=0.5}}}if(d.installed==null&&!e&&o&&!/macintosh.*ppc/i.test(navigator.userAgent)){h=d.getFromMimeType("application/x-java-applet.*version.*=");if(h[0]!=""){e=h[0]}}if(!e&&o){if(/macintosh.*safari/i.test(navigator.userAgent)){if(d.installed==null){d.installed=0}else{if(d.installed==-0.5){d.installed=0.5}}}}}else{if(!j&&i!=-1){j=d.searchJavaPluginAXO();if(j){n=d.VENDORS[0]}}if(!j){d.JavaFix()}if(j){d.version0=j;if(c&&g.ActiveXEnabled){e=j}}if(!e||d.useAnyTag()){h=d.queryExternalApplet(f);if(h[0]){e=h[0];n=h[1]}}}if(d.installed==null){d.installed=e?1:(j?-0.2:-1)}d.EndGetVersion(e,n)},EndGetVersion:function(b,d){var a=this,c=a.$;if(a.version0){a.version0=c.formatNum(c.getNum(a.version0))}if(b){a.version=c.formatNum(c.getNum(b));a.vendor=(typeof d=="string"?d:"")}if(a.getVersionDone!=1){a.getVersionDone=0}},queryDeploymentToolKit:function(){var d=this,f=d.$,h,b,g=null,a=null;if((f.isGecko&&f.compareNums(f.GeckoRV,f.formatNum("1.6"))<=0)||f.isSafari||(f.isIE&&!f.ActiveXEnabled)){d.queryDTKresult=0}if(d.queryDTKresult!=null){return d.queryDTKresult}if(f.isIE&&f.IEver>=6){d.app[0]=f.instantiate("object",[],[]);g=f.getObject(d.app[0])}else{if(!f.isIE&&f.hasMimeType(d.DTKmimeType)){d.app[0]=f.instantiate("object",["type",d.DTKmimeType],[]);g=f.getObject(d.app[0])}}if(g){if(f.isIE&&f.IEver>=6){try{g.classid=d.DTKclassID}catch(h){}}try{a=g.jvms.getLength();if(a!=null&&a>0){var c;for(b=0;b<a;b++){c=g.jvms.get(a-1-b).version;if(!f.getNum(c)){continue}d.DeployTK_versions[b]=c}}}catch(h){}try{if(g.object&&g.readyState!=4){f.garbage=true;f.uninstantiate(d.app[0])}}catch(h){}}f.hideObject(g);d.queryDTKresult=d.DeployTK_versions.length>0?d.DeployTK_versions[0]:(a==0?-1:0);return d.queryDTKresult},queryExternalApplet:function(d){var c=this,e=c.$,h=c.BridgeResult,b=c.app,g=c.appi,a="&nbsp;&nbsp;&nbsp;&nbsp;";if(typeof d!="string"||!(/\.jar\s*$/).test(d)){return[null,null]}if(c.OTF<1){c.OTF=1}if(!e.isIE){if(e.isGecko&&!e.hasMimeType(c.mimeType)&&!c.queryJava()[0]){return[null,null]}}if(c.OTF<2){c.OTF=2}if(!b[g]&&c.canUseObjectTag()&&c.canUseThisTag(0)){b[1]=e.instantiate("object",[],[],a);b[g]=e.isIE?e.instantiate("object",["archive",d,"code","A.class","type",c.mimeType],["archive",d,"code","A.class","mayscript","true","scriptable","true"],a):e.instantiate("object",["archive",d,"classid","java:A.class","type",c.mimeType],["archive",d,"mayscript","true","scriptable","true"],a);h[0]=[0,0];c.query1Applet(g)}if(!b[g+1]&&c.canUseAppletTag()&&c.canUseThisTag(1)){b[g+1]=e.instantiate("applet",["archive",d,"code","A.class","alt",a,"mayscript","true"],["mayscript","true"],a);h[1]=[0,0];c.query1Applet(g+1)}if(e.isIE&&!b[g+2]&&c.canUseObjectTag()&&c.canUseThisTag(2)){b[g+2]=e.instantiate("object",["classid",c.classID],["archive",d,"code","A.class","mayscript","true","scriptable","true"],a);h[2]=[0,0];c.query1Applet(g+2)};var j,f=0;for(j=0;j<h.length;j++){if(b[g+j]||c.canUseThisTag(j)){f++}else{break}}if(f==h.length){c.getVersionDone=1}return c.getBR()},canUseAppletTag:function(){return((!this.$.isIE||navigator.javaEnabled())?true:false)},canUseObjectTag:function(){return((!this.$.isIE||this.$.ActiveXEnabled)?true:false)},useAnyTag:function(){var b=this,a;for(a=0;a<b.useTag.length;a++){if(b.canUseThisTag(a)){return true}}return false},canUseThisTag:function(c){var a=this,b=a.$;if(a.useTag[c]==3){return true}if(!a.version0||!navigator.javaEnabled()||(b.isIE&&!b.ActiveXEnabled)){if(a.useTag[c]==2){return true}if(a.useTag[c]==1&&!a.getBR()[0]){return true}}return false},getBR:function(){var b=this.BridgeResult,a;for(a=0;a<b.length;a++){if(b[a][0]){return[b[a][0],b[a][1]]}}return[b[0][0],b[0][1]]},delJavaApplets:function(b){var c=b.java.app,a;for(a=c.length-1;a>=0;a--){b.uninstantiate(c[a])}},query1Applet:function(g){var f,c=this,d=c.$,a=null,h=null,b=d.getObject(c.app[g]);try{if(b){a=b.getVersion()+" ";h=b.getVendor()+" ";if(a){c.BridgeResult[g-c.appi]=[a,h];d.hideObject(c.app[g])}if(d.isIE&&a&&b.readyState!=4){d.garbage=true;d.uninstantiate(c.app[g])}}}catch(f){}},NOTF:{isJavaActive:function(){}},append:function(e,d){for(var c=0;c<d.length;c++){e[e.length]=d[c]}},getInfo:function(){var o={};return o},JavaFix:function(){}};PluginDetect.flash={mimeType:["application/x-shockwave-flash","application/futuresplash"],progID:"ShockwaveFlash.ShockwaveFlash",classID:"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000",getVersion:function(){var c=function(i){if(!i){return null}var e=/[\d][\d\,\.\s]*[rRdD]{0,1}[\d\,]*/.exec(i);return e?e[0].replace(/[rRdD\.]/g,",").replace(/\s/g,""):null};var j,g=this.$,h,f,b=null,a=null,d=null;if(!g.isIE){j=g.findNavPlugin("Flash");if(j&&j.description&&g.hasMimeType(this.mimeType)){b=c(j.description)}}else{for(f=15;f>2;f--){a=g.getAXO(this.progID+"."+f);if(a){d=f.toString();break}}if(d=="6"){try{a.AllowScriptAccess="always"}catch(h){return"6,0,21,0"}}try{b=c(a.GetVariable("$version"))}catch(h){}if(!b&&d){b=d}}this.installed=b?1:-1;this.version=g.formatNum(b);return true}};PluginDetect.div=null;PluginDetect.DOMbody=null;PluginDetect.uninstantiate=function(a){var c,d,b=this;if(!a){return}try{if(a[0]&&a[0].firstChild){a[0].removeChild(a[0].firstChild)}if(a[0]&&b.div){b.div.removeChild(a[0])}if(b.div&&b.div.childNodes.length==0){b.div.parentNode.removeChild(b.div);b.div=null;if(b.DOMbody&&b.DOMbody.parentNode){b.DOMbody.parentNode.removeChild(b.DOMbody)}b.DOMbody=null}a[0]=null}catch(c){}};PluginDetect.getObject=function(a){var b;try{if(a[0]&&a[0].firstChild){return a[0].firstChild}}catch(b){}return null};PluginDetect.hideObject=function(a){var b=this.getObject(a);if(b&&b.style){b.style.height="0"}};PluginDetect.instantiate=function(h,b,c,a){var q=function(d){var e=d.style;if(!e){return}e.border="0px";e.padding="0px";e.margin="0px";e.fontSize="5px";e.height="5px";if(d.tagName&&d.tagName.toLowerCase()=="div"){e.width="100%";e.display="block"}else{if(d.tagName&&d.tagName.toLowerCase()=="span"){e.width="1px";e.display="inline"}}};var j,k=document,g=this,p,m,f,i=(k.getElementsByTagName("body")[0]||k.body),o=k.createElement("span"),n,l="/";if(typeof a=="undefined"){a=""}p="<"+h+' width="1" height="1" ';for(n=0;n<b.length;n=n+2){p+=b[n]+'="'+b[n+1]+'" '}p+=">";for(n=0;n<c.length;n=n+2){p+='<param name="'+c[n]+'" value="'+c[n+1]+'" />'}p+=a+"<"+l+h+">";if(!g.div){g.div=k.createElement("div");if(i){try{if(i.firstChild&&typeof i.insertBefore!="undefined"){i.insertBefore(g.div,i.firstChild)}else{i.appendChild(g.div)}}catch(j){}}else{try{k.write("<div>o<"+l+"div>");i=(k.getElementsByTagName("body")[0]||k.body);i.appendChild(g.div);i.removeChild(i.firstChild)}catch(j){try{g.DOMbody=k.createElement("body");k.getElementsByTagName("html")[0].appendChild(g.DOMbody);g.DOMbody.appendChild(g.div)}catch(j){}}}q(g.div)}if(g.div&&g.div.parentNode&&g.div.parentNode.parentNode){g.div.appendChild(o);try{o.innerHTML=p}catch(j){}q(o);return[o]}return[null]};PluginDetect.initScript();

var oucontent_str = new Object;
var oucontent_pixpath;

var oucontentJavaInstalled = -99, oucontentFlashInstalled = -99;

var oucontentNextAppletId = 1;
var oucontentLoadedApplets = 0;

var oucontentDoneIE6Focus = 0, oucontentDoneIE6FocusApplets = 0;

function oucontentAddOnLoad(fn) {
  var oldHandler=window.onload;
  window.onload=function() {
    if(oldHandler) oldHandler();
    fn();
  }
}

function oucontentForceIERepaint() {
  // IE needs a forced repaint
  if(navigator.appName == 'Microsoft Internet Explorer') {
    var mc=document.getElementById('middle-column');
    if (!mc) {
      // Used on other pages
      return;
    }
    if(mc.className.indexOf('evilfrog')==-1)
      mc.className+=" evilfrog";
    else
      mc.className=mc.className.replace(' evilfrog','');
  }
}

/*
 * is the passed object an array
 * http://www.breakingpar.com/bkp/home.nsf/0/87256B280015193F87256C720080D723
 * @param obj object object to be checked
 * @return bool
 */
function oucontent_isArray(obj) {
  if (!obj.constructor || obj.constructor.toString().indexOf("Array") == -1){
     return false;
  }

  return true;
}

function oucontentToggleFunction(link, targets, targetStyle) {
  return function(e) {
    if (e != 'programmatic') {
      var ev = e ? e : window.event;
      if(ev.type=='keypress' && ev.which!=32 && ev.which!=13) return true;
    }

    if(!oucontent_isArray(targets)){
      targets = [targets];
    }
    
    if (!targetStyle) {
      targetStyle = 'block';
    }
    // Check if hiding and mess about with the button
    var hide;
    if (link.firstChild == link.flag) {
        hide = true;
        link.appendChild(link.reveal);
        link.removeChild(link.flag);
    } else {
        hide = false;
        link.appendChild(link.flag);
        link.removeChild(link.reveal);
    }
    // Hide or show all targets
    for(var i=0;i<targets.length;i++){
        target = targets[i];
        if (hide) {
          target.style.display='none';
        } else {
          target.style.display=targetStyle;
        }
    }

    oucontentForceIERepaint();
    return false;
  };
}

/*
* function to get a correct previous sibling node from the dom
* http://v3.thewatchmakerproject.com/journal/329/finding-html-elements-using-javascript-nextsibling-and-previoussibling
*/
function oucontentPreviousSibling(node){
	do {
 		node = node.previousSibling;
 	}	while (node && node.nodeType != 1);
	return node;
}

/*
 * function to get a correct next sibling node from the dom
 * http://v3.thewatchmakerproject.com/journal/329/finding-html-elements-using-javascript-nextsibling-and-previoussibling
 */
function oucontentNextSibling(node) {  
  do {
  	node = node.nextSibling;
  } while (node && node.nodeType != 1);
  return node;
}

function oucontentOnLoad() {
  // Check for reload - certain dynamic content requires that pages are
  // reloaded if you go Back or Forward to them
  var reload = document.getElementById('oucontent_require_reload');
  if(reload)
  {
    if(reload.value == 1)
    {
      reload.value = 0;
      window.location.reload();
      return;
    }
    else
    {
      reload.value = 1;
    }
  }

  // Find referenced anchor tag and its parents
  var hash=document.location.hash;
  var hashParents=new Array();
  if(hash) {
    var hashEl=document.getElementById(hash.substring(1));
    if(hashEl) {
      for(;hashEl;hashEl=hashEl.parentNode) {
        hashParents.push(hashEl);
      }
    }
  }
  
  // Create toggle links for SAQ items
  var divs=document.getElementsByTagName('div');
  oucontent_dynamicLinks(divs, hashParents, 'saq'); 
  
  // Create toggle links for ITQ items
  var elements=document.getElementsByTagName('li');
  oucontent_dynamicLinks(elements, hashParents, 'itq');
  
  // Find rights info links
  var links=document.getElementsByTagName('a');
  for(var i=0;i<links.length;i++) {
    var link=links[i];
    if(link.className=='oucontent-rightslink') {
      link.href='#';
      link.onclick=doRightsLink(link);
      // Hide box if visible (CSS means it won't be anyway except on export)
      var box=link.nextSibling;
      box.style.display='none';
    }
  }

  // Init any free-text responses
  oucontentFreeResponseInit();

  // Init alternative formats
  oucontentAlternativeFormatsInit();

  // If they are using IE6, do horrible hacks. This is because sometimes the
  // middle column jumps down to appear below the contents, even though it
  // isn't floated, and I've put height:1px on everything! I was spending too
  // long clutching at straws so I've done this JS 'fix' instead.
  if(document.body.className.indexOf('ie6')!=-1) {
    oucontentIE6Timer();
  }
  if(document.body.className.indexOf('ie7')!=-1) {
    oucontentIE7BotchedTables();
  }
  if(document.body.className.indexOf('ie')!=-1) {
    setTimeout('oucontentForceIERepaint()',500);
    window.onresize = function() { setTimeout('oucontentForceIERepaint()',50); };
  }  
}

function oucontentIE7BotchedTables() {
  var tablesArray = [];
  var tables = document.getElementsByTagName('table');
  for(var i=0; i<tables.length; i++) {
    tablesArray[i] = tables[i];
  }  
  for(var i=0; i<tablesArray.length; i++) {
    var table = tablesArray[i];
    var div = table.parentNode;
    
    if(div.className.indexOf('oucontent-table') != -1) {
      var desiredWidth = div.scrollWidth;
      if (div.clientWidth < desiredWidth) {
        var desiredTable = table.clientWidth;
        
        // Create parent container
        var container = document.createElement('div');
        container.style.position = 'relative';
        table.parentNode.insertBefore(container, table);
        container.style.minHeight = table.offsetHeight + 'px';
        table.parentNode.removeChild(table);
        
        // Clone table and stick it into right place
        table.style.width = (desiredTable) + 'px';
        table.style.position = 'absolute';
        table.style.top = '0px';
        table.style.left = '0px';
        container.appendChild(table);
      }
    }    
  }
}

function oucontent_dynamicLinks(elements, hashParents, type) {

  for (var i=0;i<elements.length;i++) {
    var element = elements[i];
    var isInHash=false;
    for (var j=0;j<hashParents.length;j++) {
      if (hashParents[j]==element) {
        isInHash = true;
        break;
      }
    }
    var 
      isDiscussion=element.className=='oucontent-saq-discussion',
      isAnswer=element.className=='oucontent-saq-answer';
    if (isDiscussion || isAnswer) {
      // in CSS, but needed for export
      element.style.display = 'none';
      
   // detect whether a discussion is next
      if (isDiscussion && element.hasRevealLink) {
        continue;
      }
      
      var newElement=document.createElement('div');
      newElement.className = 'oucontent-'+type+'-toggle';
      var newLink=document.createElement('a');
      newLink.href='#';
      
      newLink.className = 'oucontent-'+type+'-toggle-link';
      newElement.appendChild(newLink);
      var hidetext = document.createElement('span');
      
      
      // The word we're using after 'Reveal' or 'Hide'
      if (isDiscussion) {
          // check if the discussion has a alias
          var discussionclassname = element.firstChild.className;
          if (discussionclassname.indexOf("oucontent-discussionhasalias")== -1) {
              newLink.reveal = document.createElement('span');
              newLink.reveal.innerHTML = oucontent_str.interaction_reveal_discussion;
              newLink.appendChild(newLink.reveal);
              hidetext.innerHTML = oucontent_str.interaction_hide_discussion;
          } else {
              var answerName = element.firstChild.firstChild.nodeValue.toLowerCase();
              newLink.reveal = document.createElement('span');
              newLink.reveal.innerHTML = oucontent_str.interaction_reveal.replace(
                '#1',answerName);
              newLink.appendChild(newLink.reveal);
              hidetext.innerHTML = oucontent_str.interaction_hide.replace(
                      '#1',answerName);
          }

      } else {
          newLink.reveal = document.createElement('span');
          newLink.reveal.innerHTML = oucontent_str.interaction_reveal_answer;
          newLink.appendChild(newLink.reveal);
          hidetext.innerHTML = oucontent_str.interaction_hide_answer;
      }
      newLink.flag = hidetext;

      var targetStyle = null;
      if (type == 'itq') {
        targetStyle = 'list-item';
      }
      var toggleFunction = oucontentToggleFunction(newLink,element, targetStyle);
      if (isAnswer) {
        sibling = oucontentNextSibling(element);
        if (sibling && sibling.className=='oucontent-saq-discussion') {
          sibling.hasRevealLink = true;
          targets = [element, sibling];
          toggleFunction = oucontentToggleFunction(newLink, targets, targetStyle);
        }
      }
      
      newLink.onclick = toggleFunction;
      newLink.tabIndex = 0;
      newLink.onkeypress = newLink.onclick;
      switch (type) {
        case 'itq':
       // append to previous list item
          var previousElement = oucontentPreviousSibling(element);
          previousElement.appendChild(newElement);
          break;
        default:
          element.parentNode.insertBefore(newElement,element);
          break;
      }
      
      element.parentNode.className += ' oucontent-'+type+'-withtoggle';
      i++; // To account for the element we just added
      
      if (isInHash) {
        newLink.onclick('programmatic');
        // The below line looks stupid but works, because previously the
        // browser didn't jump to the hash on account that it was hidden
        location.hash = location.hash;
      }
    }
    
    if (element.className=='oucontent-closewindow') {
      var a=document.createElement('a');
      a.onclick = function() { window.close(); };
      a.href = '#';
      a.innerHTML = oucontent_str.close_transcript;
      element.appendChild(a);
    }
  }
}

var oucontentLastSize=0;

function oucontentIE6Timer() {
  var currentSize=document.body.clientWidth;
  if(oucontentLastSize!=currentSize ) {
    oucontentLastSize=currentSize;
    oucontentIE6CheckBorked();
  }
  setTimeout('oucontentIE6Timer()',100);  
}

function oucontentIE6CheckBorked() {
  var middle=document.getElementById('middle-column');
  var left=document.getElementById('left-column');
  
  middle.style.position='static';
  
  var middleTop=middle.offsetTop;
  var leftTop=left.offsetTop;
  
  if(middleTop != leftTop) {
    var value = (leftTop-middleTop);
    if(middle.alreadyAdjusted)
    {
      value += middle.alreadyAdjusted;
    }
    var adjust = value + "px";
    middle.style.marginTop = adjust;
    middle.alreadyAdjusted = value;
  }
  
  if(leftTop > middleTop) {
  }
}

function doRightsLink(link) {
  return function() {
    var box=link.nextSibling;
    if(box.style.display=='block') {
      box.style.display='none';
      link.title = oucontent_str.show_rights_info.replace(/(<([^>]+)>)/ig,"");
    } else {
      box.style.display='block';
      link.title = oucontent_str.hide_rights_info.replace(/(<([^>]+)>)/ig,"");
    }
    return false;
  }  
}

function oucontentTranscript(url) {
  window.open(url,'transcript','width=450,height=550,location=yes,status=yes,resizable=yes,scrollbars=yes');
  return false;
}

function oucontentNewWindow(a) {
  window.open(a.href,'_blank');
  return false;
}

function oucontentShowFlash(moodleroot,id,movie,width,height,flashvars) {
  if (oucontentFlashInstalled == -99 ) {
    oucontentFlashInstalled = PluginDetect.isMinVersion('Flash', 9) == 1;
  }
  if (!oucontentFlashInstalled) {
    return;
  }

  var xilocation;
  if(moodleroot) {
    xilocation=moodleroot+"/filter/mediaplugin/expressinstall.swf";
  } else {
    xilocation=oucontentSupportFileLocation+"/expressinstall.swf";
  }
  var FO= { movie:movie, width:width, height:height, id:id + "_swf", 
    majorversion:"9", build:"0", allowscriptaccess:"sameDomain", quality: "high",
    allowfullscreen:"true", xi:"true", ximovie:xilocation };
  if(flashvars) {
    FO.flashvars=flashvars;
  }
  UFO.create(FO,id);
}

// Note: This method is also called from mod/audiorecorder
function oucontentShowJava(id,java,width,height,appletclass,javavars) {
  if (oucontentJavaInstalled == -99 ) {
    oucontentJavaInstalled = PluginDetect.isMinVersion(
      'Java', 1.5, 'plugindetect.getjavainfo.jar', [0, 2, 0]) == 1;
  }
  if (!oucontentJavaInstalled) {
    return;
  }

  var newApplet=document.createElement("applet");
  newApplet.code=appletclass;
  newApplet.archive=java;
  newApplet.width=width;
  newApplet.height=height;
  newApplet.tabIndex = -1; // Not directly tabbable
  newApplet.mayScript = true;
  newApplet.id = "oucontentJava" + (oucontentNextAppletId++);
  // In case applet supports the focushack system, we
  // pass in its id as a parameter.
  javavars[javavars.length] = 'focushackid';
  javavars[javavars.length] = newApplet.id;
  for (var i=0;i<javavars.length;i+=2) {
      var param=document.createElement('param');
      param.name=javavars[i];
      param.value=javavars[i+1];
      newApplet.appendChild(param);
  }
  var warningDiv = document.getElementById(id);
  warningDiv.style.display="none";
  newApplet.warningDiv = warningDiv;
  newApplet.warningDiv.parentNode.insertBefore(newApplet, warningDiv);
  
  if(document.body.className.indexOf('ie6')!=-1 && !oucontentDoneIE6Focus) {
    var fixFocus = function()
    {
      if(document.activeElement && 
        document.activeElement.nodeName.toLowerCase()=='applet')
      {
        setTimeout(fixFocus, 100);
        oucontentDoneIE6Focus = 1;
        oucontentDoneIE6FocusApplets ++;
        window.focus();
      }
      else
      {
        oucontentDoneIE6Focus++;
        if(oucontentDoneIE6Focus == 2 && oucontentDoneIE6FocusApplets > 0)
        {
          // Focus one extra time after applet gets it
          window.focus();
        }
        if(oucontentDoneIE6Focus < 50)
        {
          setTimeout(fixFocus, 100);        
        }
      }
    };
    window.arghApplets = 0;
    setTimeout(fixFocus, 100);
    oucontentDoneIE6Focus=1;
  }  
}

// Called by Java applets when loaded - only if the Java version/applet supports
// the focushack system.
function appletLoaded(id) {
  var applet = document.getElementById(id);
  
  // These autofocus divs before and after the applet allow focus
  // to be correctly moved to the front/back end of the applet's
  // controls when the user tabs.
  var beforeFocus = document.createElement('div');
  beforeFocus.tabIndex = 0;
  beforeFocus.className = 'oucontentJavaAutofocusBefore';
  beforeFocus.onfocus = function() { oucontentScrollIntoView(applet); applet.initFocus(false); }
  applet.parentNode.insertBefore(beforeFocus, applet);
  
  var afterFocus = document.createElement('div');
  afterFocus.tabIndex = 0;
  afterFocus.className = 'oucontentJavaAutofocusAfter';
  afterFocus.onfocus = function() { oucontentScrollIntoView(applet); applet.initFocus(true); }
  applet.parentNode.insertBefore(afterFocus, applet.warningDiv);
  
  // After all applets are loaded, focus the window to deal with bug
  oucontentLoadedApplets++;
  if(oucontentLoadedApplets == oucontentNextAppletId-1) {
    oucontentLoadedApplets = -1;
    setTimeout(function() { window.focus(); }, 100);
  }
}

// If the element is not fully in view, scroll so that it is
function oucontentScrollIntoView(target) {
  var region = YAHOO.util.Dom.getRegion(target);
  var y = YAHOO.util.Dom.getDocumentScrollTop();
  var height = YAHOO.util.Dom.getViewportHeight();

  if (y + height < region.bottom) {
    window.scroll(0, region.bottom - height);
  } else if (y > region.top) {
    window.scroll(0, region.top);
  }
}

// Called by Java applets when they want to lose focus
function appletDitchFocus(id, forward) {
  // Get the applet
  var applet = document.getElementById(id);
  
  // Get list of everything that can be focused
  var allFocusable = [];
  oucontentBuildFocusableList(allFocusable, document.documentElement);
  
  // Find applet on list
  var found = -1;
  for (var i=0; i<allFocusable.length; i++) {
    if (allFocusable[i]==applet) {
      found=i;
      break;
    }
  }
  if (found==-1)
  {
    return; 
  }
  
  // Move to next/previous thing
  if (forward)
  {
    found+=2; // Including skipping the special autofocus div
    if (found==allFocusable.length)
    {
      found = 0;
    }
  }
  else
  {
    found-=2; // Again skip the 'before' focus div
    if (found<0)
    {
      found = allFocusable.length-1;
    }
  }
  var x = allFocusable[found];
  setTimeout(function(){x.focus()},0);
}

function oucontentBuildFocusableList(list, element)
{
  // Exclude items that are invisible or disabled
  if (element.style.visibility.toLowerCase() == 'hidden' ||
    element.style.display.toLowerCase() == 'none' ||
    (typeof element.disabled != 'undefined' && element.disabled)) {
    return;
  }
  
  // Tabindex check: see 
  // http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
  var attr = element.getAttributeNode("tabindex");
  var specifiedTabIndex = attr ? attr.specified : false;
  
  // Include elements with manually specified tabindex; links; form controls    
  if(specifiedTabIndex ||
    (element.nodeName.toLowerCase()=='a' && typeof element.href!='undefined' && element.href) ||
    (element.nodeName.toLowerCase()=='input' && element.type.toLowerCase()!='hidden') ||
    (element.nodeName.toLowerCase()=='textarea')) {
    list[list.length] = element;
  }

  // Do children
  for (var child = element.firstChild; child!=null; child=child.nextSibling) {
    if (child.nodeType==1) {
      oucontentBuildFocusableList(list, child);
    }
  }
}

function oucontentShowOpenmark(id,omquestion,width,height) {
    document.getElementById("page").style.minWidth="1050px";
    var newIframe=document.createElement("iframe");
    newIframe.setAttribute("src", omquestion + '/?autofocus=off');
    newIframe.setAttribute("width", width+20);
    newIframe.setAttribute("height", height+41);
    newIframe.frameBorder = 0;
    newIframe.className="oucontent-omquestion";
    var my_div = document.getElementById(id);
    my_div.style.display="none";
    my_div.parentNode.insertBefore(newIframe, my_div);
}

// For compatibility with older documents
function oucontentShowVideo(moodleroot,id,video,width,height) {
  oucontentShowVideo2(moodleroot,id,video,width,height,'','');
}
function oucontentShowVideo2(moodleroot,id,video,width,height,
  subtitles,audiodescription) {
  oucontentShowVideo3(moodleroot, id, video, width, height,
  subtitles, audiodescription, 'false');
}

// note: 'stretch' option is ignored
function oucontentShowVideo3(moodleroot, id, video, width, height,
  subtitles, audiodescription, stretch) {
  var heightWithBar=height+30; // Height of Flash player bar
  if(typeof oucontentSupportItemsLocation != 'undefined') {
    video = oucontentSupportItemsLocation+'/'+video;
  }
  var flashvars='file='+video+'&width='+width+'&height='+heightWithBar;
  if(subtitles!='') {
    flashvars+='&captions='+subtitles;
  }
  if(audiodescription!='') {
    flashvars+='&audio='+audiodescription;
  }
  var playerLocation;
  if(!moodleroot) {
    playerLocation=oucontentSupportFileLocation+'/mediaplayer.swf';
  } else {
    playerLocation=moodleroot+'/local/mediaplayer.swf';
  }
  oucontentShowFlash(moodleroot,id,playerLocation,
    width,heightWithBar,flashvars);
}

function oucontentShowAudio(moodleroot,id,audio) {
  var width=342,height=30;
  var flashvars='file='+audio+'&width='+width+'&height='+height;
  var playerLocation;
  if(moodleroot==null) {
    playerLocation=oucontentSupportFileLocation+'/mediaplayer.swf';
  } else {
    playerLocation=moodleroot+'/local/mediaplayer.swf';
  }
  oucontentShowFlash(moodleroot,id,playerLocation,
    width,height,flashvars);
}


//
// Single Choice Question Javascript
//

function oucontentToggleChoiceAnswers(id) {
  my_div=document.getElementById(id);
  my_div.style.display="block";
}

function oucontentInitSingleChoice(id) {
	// Display it (default for non-JS is to hide it)
  var container = document.getElementById(id);
  container.style.display = "block";

  var form = container.getElementsByTagName('form')[0];
  form.lastmouseaction = 0;
  
  // Get all the inputs to initialise special treatment
	var inputs = container.getElementsByTagName('input');
	for (var i=0; i<inputs.length; i++) {
		var input = inputs[i];
		if (input.type == 'radiobutton') {
			// Initialise radio to unchecked after a reload
			input.checked = false;
			input.disabled = false;
		} else if (input.name == 'answerbutton') {
			// Track if user activates button with mouse or keyboard
			input.onmousedown = function() {
		  	form.lastmouseaction = new Date().getTime();
		  };
        } else if (input.name == 'revealbutton') {
            // Track if user activates button with mouse or keyboard
            input.onmousedown = function() {
            form.lastmouseaction = new Date().getTime();
            };
        }
		// Note: Ordinarily we would initialise the answer/reveal button onclick
		// handlers here too but for legacy reasons this is done in the HTML.
	}
}

function oucontentRevealChoiceAnswer(formid,correctanswers) {
    //  Get the form
    thisform=document.getElementById("form"+formid);
    var groupname = 'choice' + formid;
    
    //  Uncheck all!
    var grouplength = thisform[groupname].length-1;
    if(grouplength) {
        for (i=grouplength; i > -1; i--) {
            thisform[groupname][i].checked = 0;
            thisform[groupname][i].disabled = 1;
        }
    } else {
        thisform[groupname].checked = 0;
        thisform[groupname].disabled = 1;
    }
    
    //  Check if we only have one element
    if(thisform[groupname].id) {
        //  Check if the input we have is the right answer
        if(correctanswers) {
            if(correctanswers != '') {
                thisform[groupname].checked = 1;
            }
            thisform.answerbutton.onclick();
            thisform.answerbutton.disabled = true;
            if (thisform.revealbutton) {
                thisform.revealbutton.disabled = true;
            }
        }
    } else {
        //  Check if the input we have is the right answer
        if(correctanswers) {
            var cor_len = correctanswers.length-1;
            for(i=cor_len; i > -1; i--) {
                thisform[groupname][correctanswers[i]-1].checked = 1;
            }
            thisform.answerbutton.disabled = true;
            if (thisform.revealbutton) {
                thisform.revealbutton.disabled = true;
            }
            thisform.answerbutton.onclick();
        }
    }
    
    return false;
}

function oucontentProcessSingleChoice(formid,answerid,correctanswer,feedback) {
  var choice = -1;
  thisform = document.getElementById("form" + formid);
  var groupname = 'choice' + formid;

  var grouplength = thisform[groupname].length-1;
  for (i=grouplength; i > -1; i--) {
    if (thisform[groupname][i].checked) {
      choice=i+1;
      i=-1;
    }
  }

  for (i=grouplength; i > -1; i--) {
    feedbackdiv=document.getElementById(feedback[i]);
    feedbackdiv.style.display="none";
  }

  my_div=document.getElementById(answerid);

  // If this was not a mouse action (the last mouse action was > 250ms ago)
  // then change focus to help screenreader
  if (new Date().getTime() - thisform.lastmouseaction > 250) {
      window.location.hash = answerid;
  }

  var array = new Array();
  array = find_print_answer_discussion(thisform.parentNode);
  
  var print_tag      = array[0];
  var answer_tag     = array[1];
  var discussion_tag = array[2];
  
  if (choice != -1) {
    if (choice == correctanswer) {
      my_div.innerHTML="<p>" + oucontent_str.interaction_correct + "</p>";

      if(answer_tag) {
        answer_tag.style.display='block';
      }
      if(discussion_tag) {
        discussion_tag.style.display='block';
      }
    } else {
      my_div.innerHTML="<p>" + oucontent_str.interaction_not_correct + " " + 
        oucontent_str.interaction_try_again + "</p>";
      if(answer_tag) {
        answer_tag.style.display='none';
      }
      if(discussion_tag) {
        discussion_tag.style.display='none';
      }
    }
    feedbackdiv=document.getElementById(feedback[choice-1]);
    feedbackdiv.style.display="block";
  } else {
    my_div.innerHTML="<p><strong>" + 
      oucontent_str.interaction_please_choose_one + "</strong></p>";
  }
  if (!thisform.revealbutton || !thisform.revealbutton.disabled) {
      my_div.style.display='block';
  } else {
    my_div.style.display='none';
  }
}

function oucontentProcessMultipleChoice(formid,answerid,correctanswers,feedback) {
	  var choice = -1;
	  thisform=document.getElementById("form"+formid);
    var groupname = 'choice' + formid;
	  var choices = new Array()

	  //  Check if we only have one element (shouldn't happen, but it's only a minor
	  //  change to be able to handle only one input!)
	  if(thisform[groupname].id) {
	    if (thisform[groupname].checked) {
	      choices[0]=1;
	    }
	    feedbackdiv=document.getElementById(feedback[0]);
	    feedbackdiv.style.display="none";
	  } else {
	    var grouplength = thisform[groupname].length-1;
	    for (i=grouplength; i > -1; i--) {
	      if (thisform[groupname][i].checked) {
	        choices[choices.length]=i+1;
	      }
	      feedbackdiv=document.getElementById(feedback[i]);
	      feedbackdiv.style.display="none";
	    }
	  }
	  
	  var choiceslength = choices.length;
	  var correctlength = correctanswers.length;
	  
	  my_div=document.getElementById(answerid);
	  
	  var array = new Array();
	  array = find_print_answer_discussion(thisform.parentNode);
	  
	  var print_tag      = array[0];
	  var answer_tag     = array[1];
	  var discussion_tag = array[2];
	  
	  //  Hide the answer and discussion
	  if(answer_tag) {
	    answer_tag.style.display='none';
	  }
	  if(discussion_tag) {
	    discussion_tag.style.display='none';
	  }
	  
	  //  First thing we want to do is if no choices selected, but no right choices
	  //  say the user is correct!
	  if(choiceslength == 0 && correctlength == 0) {
	    var msg = "<p>"+oucontent_str.interaction_correct+"</p>";
	    my_div.innerHTML=msg;
	    my_div.style.display="block";
	    oucontentForceIERepaint();
        if(answer_tag) {
            answer_tag.style.display='block';
        }
        if(discussion_tag) {
            discussion_tag.style.display='block';
        }
        if (!thisform.revealbutton || !thisform.revealbutton.disabled) {
            my_div.style.display='block';
        } else {
            my_div.style.display='none';
        }
	    return false;
	  }

	  if (choiceslength > 0) {
	  //  Now we need to loop through all the answers and make sure we have all of
	  //  them correct
	  var correct=0;
	    for(i=correctlength-1; i > -1; i--) {
	    for (y=choiceslength-1; y > -1; y--) {
	      if (choices[y] == correctanswers[i]) {
	        correct+=1
	      }
	      }
	    }
	    
	    var msg="<p>";
	    var incorrect = choiceslength - correct;

	    if (correct == correctlength && incorrect==0) {
	        msg += oucontent_str.interaction_correct;
	        //  Show the answer and discussion
	        if(answer_tag) {
	          answer_tag.style.display='block';
	        }
	        if(discussion_tag) {
	          discussion_tag.style.display='block';
	        }
	    } else {
	        if (correct ==0 && incorrect==1) {
	            msg += oucontent_str.interaction_wrong_singular;
	        } else if (correct ==0 && incorrect!=1) {
	            msg += oucontent_str.interaction_wrong_plural;
	        } else if (correct ==1 && incorrect==0) {
	            msg += oucontent_str.interaction_correct_incomplete_singular;
	        } else if (correct !=1 && incorrect==0) {
	            msg += oucontent_str.interaction_correct_incomplete_plural;
	        } 
	        else if (correct ==1 && incorrect==1) {
	            msg += oucontent_str.interaction_correct_wrong_singular_singular;
	        } else if (correct !=1 && incorrect==1) {
	            msg += oucontent_str.interaction_correct_wrong_plural_singular;
	        } else if (correct ==1 && incorrect!=1) {
	            msg += oucontent_str.interaction_correct_wrong_singular_plural;
	        } else if (correct !=1 && incorrect!=1) {
	            msg += oucontent_str.interaction_correct_wrong_plural_plural;
	        }
	        msg += " " + oucontent_str.interaction_try_again;
	        msg = msg.replace("#1", "<b>"+correct+"</b>");
	        msg = msg.replace("#2", "<b>"+incorrect+"</b>");
	    }

	    msg+="</p>";
	    my_div.innerHTML=msg;

	    //  Now loop through all the choices and show feedback
	  for (y=choiceslength-1; y > -1; y--) {
	    choiceval = choices[y]-1;
	      feedbackdiv=document.getElementById(feedback[choiceval]);
	      feedbackdiv.style.display="block";
	    }
	  } else {
	    my_div.innerHTML="<p><b>"+oucontent_str.interaction_please_choose_n+"</b></p>";
	  }
    if (!thisform.revealbutton || !thisform.revealbutton.disabled) {
        my_div.style.display='block';
    } else {
        my_div.style.display='none';
    }
	  oucontentForceIERepaint();  
	}



// 
// Matching question interaction JavaScript
// 

// Our custom drag and drop implementation, extending YAHOO.util.DD
var oucontentDragDrop = function(id, sGroup, config) {
    oucontentDragDrop.superclass.constructor.apply(this, arguments);
};

var highestZ=10;

YAHOO.util.DDM.mode = YAHOO.util.DDM.INTERSECT;

YAHOO.lang.extend(oucontentDragDrop, YAHOO.util.DD, {
    startDrag: function(x, y) {
        oucontentInitXy(this.getEl());
        YAHOO.util.Dom.setStyle(this.getEl(),'z-index','999');
    },

    endDrag: function(e) {
        YAHOO.util.Dom.setStyle(this.getEl(),'z-index',highestZ++);
    },

    onInvalidDrop: function(e) {
      // Remove from existing slot, if any, and move back
      var optionEl=this.getEl();
      oucontentPutBoxInSlot(optionEl,null);
    },

    onDragDrop: function(e, targets) {
      // Set up variables to the HTML element for slot and option concerned
      var optionEl=this.getEl(),slotEl;
      
      var slots=new Array();
      for(var i=0;i<targets.length;i++) {
        if(targets[i].getEl().className=='oucontent-matching-slot') {
          slots.push(targets[i]);
        }
      }
      if(slots.length==0) {
        return this.onInvalidDrop(e);
      }
      slotEl = YAHOO.util.DDM.getBestMatch(slots).getEl();

      // Move to new slot and update data
      oucontentPutBoxInSlot(optionEl,slotEl);
    }
});
//check if the user has already started answering questions
function oucontentUpdateRevealButton(items) {
  var missing=false;
  for(var i=0;i<items.length;i++) {
    if(items[i].slotEl.holdsOption) {
      missing=true;
      break;
    }
  }
 
 items.revealButton.disabled=missing;
}

function oucontentInitXy(el) {
  if(!el.originalXY) {
    el.originalXY = YAHOO.util.Dom.getXY(el);
  }
}

function oucontentPutBoxInSlot(optionEl,slotEl) {
  oucontentInitXy(optionEl);

  // Remove from existing slot, if any
  if (optionEl.slot) {
    optionEl.slot.holdsOption=null;
    optionEl.slot=null;
    optionEl.className=optionEl.className.substring(0,optionEl.className.indexOf(' '));
  }

  if(slotEl) {
    // If slot is occupied, move that option back to where it was before
    if(slotEl.holdsOption) {
      oucontentPutBoxInSlot(slotEl.holdsOption,null);
    } 

    YAHOO.util.DDM.moveToEl(optionEl, slotEl);
    optionEl.slot = slotEl;
    slotEl.holdsOption = optionEl;
    optionEl.className+=' oucontent-interaction-inslot';
  } else {
    YAHOO.util.Dom.setXY(optionEl,optionEl.originalXY);
  }

  oucontentUpdateRevealButton(optionEl.allItems);
}

function oucontentAddDecoration(el) {
  var deco1=document.createElement('div');
  deco1.className='oucontent-deco1';
  el.appendChild(deco1);
  var deco2=document.createElement('div');
  deco2.className='oucontent-deco2';
  el.appendChild(deco2);
  var deco3=document.createElement('div');
  deco3.className='oucontent-deco3';
  el.appendChild(deco3);
}

//new YAHOO.widget.LogReader(); 

function oucontentGetHeightOffset(item) {
  var result= 
    parseInt(YAHOO.util.Dom.getStyle(item,'padding-top'))+
    parseInt(YAHOO.util.Dom.getStyle(item,'padding-bottom'))
    parseInt('0'+YAHOO.util.Dom.getStyle(item,'border-top-width'))+
    parseInt('0'+YAHOO.util.Dom.getStyle(item,'border-bottom-width'));
  return result;  
}

function oucontentGetWidthOffset(item) {
  var result= 
    parseInt(YAHOO.util.Dom.getStyle(item,'padding-left'))+
    parseInt(YAHOO.util.Dom.getStyle(item,'padding-right'))+
    parseInt('0'+YAHOO.util.Dom.getStyle(item,'border-left-width'))+
    parseInt('0'+YAHOO.util.Dom.getStyle(item,'border-right-width'));
  return result;  
}

function oucontentInteractionMatching(id,items) {
  oucontentAddOnLoad(function() {
    var container=document.getElementById(id);
    container.style.display='block';

    // Set up metrics and stupid stuff from CSS (so it works differently for
    // different themes) 
    var tempSlot=document.createElement('div');
    tempSlot.className='oucontent-matching-slot';
    container.appendChild(tempSlot);
    var tempFocus=document.createElement('div');
    tempFocus.className='oucontent-matching-focus';
    container.appendChild(tempFocus);
    var 
      gap=8,
      optionHeightOffset=oucontentGetHeightOffset(items[0].option),
      optionWidthOffset=oucontentGetWidthOffset(items[0].option),
      matchWidthOffset=oucontentGetWidthOffset(items[0].match),
      slotWidthOffset=oucontentGetWidthOffset(tempSlot);
    items.focusBefore=YAHOO.util.Dom.getStyle(tempFocus,'border-left-color');
    container.removeChild(tempSlot);
    container.removeChild(tempFocus);

    // Init data and set up widths for everything
    var region=YAHOO.util.Dom.getRegion(container);
    var containerWidth=region.right-region.left;
    var optionWidth=Math.floor((containerWidth-gap)/2);

    for(var i=0;i<items.length;i++) {
      items[i].matchEl=document.getElementById(items[i].match);
      items[i].optionEl=document.getElementById(items[i].option);
      items[i].optionEl.allItems=items;      
      YAHOO.util.Dom.setStyle(items[i].matchEl,'width',(optionWidth-matchWidthOffset-gap*2)+"px");
      YAHOO.util.Dom.setStyle(items[i].optionEl,'width',(optionWidth-optionWidthOffset)+"px");
      YAHOO.util.Dom.setStyle(items[i].matchEl,'display','block');
      YAHOO.util.Dom.setStyle(items[i].optionEl,'display','block');
    }

    // Create help string and measure it
    var help=document.createElement('div');
    help.innerHTML = oucontent_str.interaction_matching_info;
    help.className='oucontent-interactionhelp';
    container.appendChild(help);
    var helpRegion=YAHOO.util.Dom.getRegion(help);
    var helpHeight=helpRegion.bottom-helpRegion.top;

    // 1. Work out the biggest option height and total match height
    var optionHeight=0;
    for(var i=0;i<items.length;i++) {
      var region=YAHOO.util.Dom.getRegion(items[i].option);
      var height=region.bottom-region.top;
      if(height > optionHeight) optionHeight=height;
    }
    var slotsHeight=-gap; // So the first gap doesn't count
    for(var i=0;i<items.length;i++) {
      var match=items[i].matchEl;
      region=YAHOO.util.Dom.getRegion(match);
      match.originalHeight=region.bottom-region.top;
      slotsHeight+=gap;
      // Apart from the margin, this match takes up the larger of its own
      // height and the general option height.
      if(match.originalHeight > optionHeight) {
        slotsHeight+=match.originalHeight;
      } else {
        slotsHeight+=optionHeight;
      }
    }

    // Total option height (slotsHeight is already a total)
    //   #rows = (#options + 1 ) / 2
    var rows=(items.length+1) >> 1;
    var optionsHeight=rows*optionHeight+(rows-1)*gap;

    // Also an extra gap between slots and options, one gap at the bottom,
    // the help height and one more gap there    
    YAHOO.util.Dom.setStyle(container,'height',(optionsHeight+slotsHeight+helpHeight+3*gap)+"px");

    // Get help text into place
    YAHOO.util.Dom.setStyle(help,'position','absolute');
    YAHOO.util.Dom.setStyle(help,'width',containerWidth+'px');
    YAHOO.util.Dom.setStyle(help,'left','0');
    YAHOO.util.Dom.setStyle(help,'top',(optionsHeight+gap)+'px');

    // Box around lower area (slots)    
    var lowerArea=document.createElement('div');
    lowerArea.className='oucontent-interaction-lower';
    YAHOO.util.Dom.setStyle(lowerArea,'position','absolute');
    YAHOO.util.Dom.setStyle(lowerArea,'width',containerWidth+'px');
    YAHOO.util.Dom.setStyle(lowerArea,'height',(slotsHeight+gap)+'px');
    YAHOO.util.Dom.setStyle(lowerArea,'left','0');
    YAHOO.util.Dom.setStyle(lowerArea,'top',(optionsHeight+helpHeight+gap*2)+'px');
    container.insertBefore(lowerArea,container.firstChild);  
    oucontentAddDecoration(lowerArea);
    
    // 3. Initialise position of options (in rows at top, random order)
    var shuffledOptions=new Array(items.length);
    for(var i=0;i<items.length;i++) {
      shuffledOptions[i]=items[i].optionEl;
      YAHOO.util.Dom.setStyle(shuffledOptions[i],'height',(optionHeight-optionHeightOffset)+"px");
      shuffledOptions[i].sortOrder=Math.random();
      oucontentAddDecoration(shuffledOptions[i]);
    }
    shuffledOptions.sort(function(a,b) {
      return (a.sortOrder<b.sortOrder) ? -1 : 1; 
    });
    var row=0,rowPos=0;
    for(var i=0;i<shuffledOptions.length;i++) {
      items[i].allOptions=shuffledOptions;
      YAHOO.util.Dom.setStyle(shuffledOptions[i],'position','absolute');
      YAHOO.util.Dom.setStyle(shuffledOptions[i],'left',(rowPos ? optionWidth+gap : 0)+"px");
      YAHOO.util.Dom.setStyle(shuffledOptions[i],'top',(row*(optionHeight+gap))+"px");
      shuffledOptions[i].slot=null;
      shuffledOptions[i].yuiObj=new oucontentDragDrop(shuffledOptions[i]);
      rowPos++;
      if(rowPos>1) {
        rowPos=0;
        row++;
      }
    }

    // 4. Position the matches and create the slots.
    var y=optionsHeight+helpHeight+gap;
    for(var i=0;i<items.length;i++) {
      y+=gap;

      YAHOO.util.Dom.setStyle(items[i].matchEl,'position','absolute');
      YAHOO.util.Dom.setStyle(items[i].matchEl,'left',"0px");
      YAHOO.util.Dom.setStyle(items[i].matchEl,'top',y+"px");

      var slot=document.createElement('div');
      slot.className='oucontent-matching-slot';
      YAHOO.util.Dom.setStyle(slot,'position','absolute');
      YAHOO.util.Dom.setStyle(slot,'left',(optionWidth+gap)+"px");
      YAHOO.util.Dom.setStyle(slot,'top',y+"px");
      YAHOO.util.Dom.setStyle(slot,'height',(optionHeight-2)+"px");
      YAHOO.util.Dom.setStyle(slot,'width',(optionWidth-slotWidthOffset)+"px");
      container.appendChild(slot);
      items[i].slotEl=slot;
      slot.holdsOption=null;
      slot.target=new YAHOO.util.DDTarget(slot);
      oucontentAddDecoration(slot);

      var focus=document.createElement('div');
      focus.className='oucontent-matching-focus';
      YAHOO.util.Dom.setStyle(focus,'position','absolute');
      YAHOO.util.Dom.setStyle(focus,'left',(optionWidth+gap-1)+"px");
      YAHOO.util.Dom.setStyle(focus,'top',(y-1)+"px");
      YAHOO.util.Dom.setStyle(focus,'width',(optionWidth)+"px");
      YAHOO.util.Dom.setStyle(focus,'height',(optionHeight)+"px");
      container.appendChild(focus);
      items[i].focusEl=focus;
      focus.tabIndex=0;
      YAHOO.util.Event.addListener(focus,'focus',oucontentFocusHandler,items[i]);
      YAHOO.util.Event.addListener(focus,'blur',oucontentBlurHandler,items[i]);
      YAHOO.util.Event.addListener(focus,'keydown',oucontentKeyDownHandler,items[i]);

      var rowHeight=items[i].matchEl.originalHeight;
      if(optionHeight>rowHeight) {
        rowHeight=optionHeight;
      }
      y+=rowHeight;
    }

    var array = new Array();
    array = find_print_answer_discussion(container);

    items.print      = array[0];
    items.answer     = array[1];
    items.discussion = array[2];

    // 6. Add the right/wrong response box
    items.rightwrong=document.createElement('div');
    items.rightwrong.className='oucontent-interactionrightwrong';
    YAHOO.util.Dom.setStyle(items.rightwrong,'display','none');
    if(container.nextSibling) {
      container.parentNode.insertBefore(items.rightwrong,container.nextSibling);
    } else {
      container.parentNode.appendChild(items.rightwrong);
    }

    // 7. Add the buttons
    items.buttons=document.createElement('div');
    items.buttons.className='oucontent-interactionbuttons';
    container.parentNode.insertBefore(items.buttons,items.rightwrong);

    items.checkButton=document.createElement('input');
    items.checkButton.type='button';
    oucontentSetInputValue(items.checkButton, 
      oucontent_str.interaction_check_your_answer);
    items.checkButton.disabled=false;
    YAHOO.util.Event.addListener(items.checkButton,'click',oucontentCheckHandler,items);
    items.buttons.appendChild(items.checkButton);
    items.buttons.appendChild(document.createTextNode(' '));    

    items.revealButton=document.createElement('input');
    items.revealButton.type='button';
    oucontentSetInputValue(items.revealButton, 
      oucontent_str.interaction_reveal_answer);
    items.revealButton.disabled=false;
    YAHOO.util.Event.addListener(items.revealButton,'click',oucontentRevealHandler,items);
    items.buttons.appendChild(items.revealButton);

    // Add skip link
    var skiplink = document.createElement('a');
    skiplink.style.position = 'absolute';
    skiplink.style.left = '-1000px';
    skiplink.href = '#matching_access_' + id;
    skiplink.onclick = function() {
      var e = 'x';
      oucontentRevealHandler(e, items);
      container.style.display = 'none';
      var divs = YAHOO.util.Dom.getElementsByClassName(
          'oucontent-interaction-print', 'div', container.parentNode);
      divs[0].style.display = 'block';
      divs[0].id = 'matching_access_' + id;
      return true;
    };
    skiplink.appendChild(document.createTextNode(oucontent_str.interaction_skip_matching));
    skiplink.onfocus = function() {
      skiplink.style.position = 'static';
    };
    skiplink.onblur = function() {
      skiplink.style.position = 'absolute';
    };
    container.parentNode.insertBefore(skiplink, container);
  });
}

function oucontentSetInputValue(input, string) {
  // Get rid of any HTML codes from string
  var safe = string.replace(/<[^>]+>/g,'');
  safe = safe.replace('&amp;','&');
  safe = safe.replace('&lt;','<');
  safe = safe.replace('&gt;','>');
  safe = safe.replace('&quot;',"'");
  input.value = safe;
  
  // Set language code
  var match = string.match(/<span lang='([a-z]+)'/);
  if(match)
  {
    input.lang = match[1];
  }  
}

function oucontentCheckHandler(e,items) {
  // Get rid of existing children
  while(items.rightwrong.firstChild) {
    items.rightwrong.removeChild(items.rightwrong.firstChild);
  }
  
  // Add response
  var correct=true; 
  var zeroanswered=true;
  var correctanswers = 0;
  for(var i=0;i<items.length;i++) {
    if(items[i].slotEl.holdsOption) {
      zeroanswered=false;
    }
    if(items[i].optionEl.slot!=items[i].slotEl) {
      var a = new YAHOO.util.Motion (
          items[i].optionEl, {
                points: {to: items[i].optionEl.originalXY} 
                },  
                0.6,  
                YAHOO.util.Easing.easeOut
      ); 
      a.animate(); 
      correct=false;
    }
    else {
      correctanswers++;
    }
  }
  var msg="";
  var response=new Array();
  if(zeroanswered) {
    msg = oucontent_str.interaction_please_choose_n;
  }
  else if (correct) {
    msg = oucontent_str.interaction_correct;
    oucontentRevealHandler(e,items);
  }
  else if (correctanswers==0){
    msg = oucontent_str.interaction_not_correct;
    items.revealButton.disabled=false;
  }
  else if (correctanswers==1) {
    msg =oucontent_str.interaction_correct_incomplete_singular;
  }
  else {
    msg =oucontent_str.interaction_correct_incomplete_plural;
  }
  items.rightwrong.innerHTML = msg.replace("#1", "<b>"+correctanswers+"</b>");
  for(var i=0;i<response.length;i++) {
    items.rightwrong.appendChild(response[i]);
  } 
  
  // Show box if it wasn't already
  YAHOO.util.Dom.setStyle(items.rightwrong,'display','block');  
}

function oucontentRevealHandler(e,items) {
  // Move all answers to right place
  for(var i=0;i<items.length;i++) {
    YAHOO.util.DDM.moveToEl(items[i].optionEl, items[i].slotEl);
    items[i].optionEl.slot=items[i].slotEl;
    items[i].slotEl.holdsOption=items[i].optionEl;
    items[i].optionEl.yuiObj.lock();
  }

  // Get rid of UI bits and pieces
  items.buttons.parentNode.removeChild(items.buttons);  
  YAHOO.util.Dom.setStyle(items.rightwrong,'display','none');
  
  // Show text answer if provided  
  if(items.answer) {
    YAHOO.util.Dom.setStyle(items.answer,'display','block');
  }
  // Show text discussion if provided  
  if(items.discussion) {
    YAHOO.util.Dom.setStyle(items.discussion,'display','block');
  }
}

function oucontentFocusHandler(e,item) {
  YAHOO.util.Dom.setStyle(item.focusEl,'border-color','black');
}
function oucontentBlurHandler(e,item) {
  YAHOO.util.Dom.setStyle(item.focusEl,'border-color',item.optionEl.allItems.focusBefore);
}
function oucontentKeyDownHandler(e,item) {
  var key=YAHOO.util.Event.getCharCode(e);
  
  // Get option currently in slot (if any)
  var currentOption=item.slotEl.holdsOption,currentOptionIndex=-1;
  if(currentOption) {
    for(var i=0;i<item.allOptions.length;i++) {
      if(item.allOptions[i]==currentOption) {
        currentOptionIndex=i;
        break;      
      }    
    }
  }
  
  var newOption;
  
  if(key==39 || key==32 || key==13) {
    // 'Forward' keys cycle through the options and blank
    // 39 Right-arrow
    // 32 Space
    // 13 Return
    var i;
    for(i=currentOptionIndex+1;i!=currentOptionIndex;i++) {
      if(i==item.allOptions.length) {
        i=-1;
      }
      if(i==-1) break; // Yep you can do blank
      if(!item.allOptions[i].slot) {
        // This item is not in a slot, so use it
        break;
      }
    }
    
    newOption=(i==-1) ? null : item.allOptions[i]; 
  } else if(key==37) {
    // 'Back' key cycles through the options and blank
    // 37 Left-arrow
    var i;
    for(i=currentOptionIndex-1;i!=currentOptionIndex;i--) {
      if(i<-1) {
        i=item.allOptions.length-1;
      }
      if(i==-1) break; // Yep you can do blank
      if(!item.allOptions[i].slot) {
        // This item is not in a slot, so use it
        break;
      }
    }
    
    newOption=(i==-1) ? null : item.allOptions[i]; 
  } else if(key==46||key==8||key==27) {
    // 'Delete' keys switch to blank
    // 46 Delete
    // 8 Backspace
    // 27 Escape
    newOption=null; 
  } else {
    // They pressed some other key, don't do anything
    return;
  }
  
  // Move current option back
  if(currentOption) {
    oucontentPutBoxInSlot(currentOption,null);
  }
  
  // Set new option if any
  if(newOption) {
    oucontentPutBoxInSlot(newOption,item.slotEl);
  }
}



function find_print_answer_discussion(container) {
  var answer=null;
  var discussion=null;
  var print=null;
  var n=null;

  //  Get the next sibling that isn't an empty text element!
  n = container;
  do  n = n.nextSibling;
  while (n && n.nodeType != 1);

  //  Check to see if the next sibling is print
  if(n && is_print_node(n)) {
    print = n;

    //  If we have a print node check if the next sibling is a answer node
    n = print;
    do  n = n.nextSibling;
    while (n && n.nodeType != 1);

    if(n && is_answer_node(n)) {
      answer = n;

      //  Get the next node and see if it's a discussion
      n = answer;
      do  n = n.nextSibling;
      while (n && n.nodeType != 1);
      
      if(n && is_discussion_node(n)) {
        discussion = n;
      }
    }
    //  If we have a print node but no answer node, check if the next sibling is a discussion node
    else if(n && is_discussion_node(n)) {
      discussion = n;
    }
  }
  //  If it's not print check to see if it's an answer
  else if(n && is_answer_node(n)) {
    answer = n;

    //  Get the next node and see if it's a discussion
    n = answer;
    do  n = n.nextSibling;
    while (n && n.nodeType != 1);

    if(n && is_discussion_node(n)) {
      discussion = n;
    }
  } 
  //  If it's not print and not answer check to see if it's a discussion
  else if(n && is_discussion_node(n)) {
    discussion = n;
  }

  return [print,answer,discussion];
}

function is_print_node(node) {
  return node.className == 'oucontent-interaction-print';
}

function is_discussion_node(node) {
  return node.className == 'oucontent-saq-interactivediscussion';
}

function is_answer_node(node) {
  return node.className == 'oucontent-saq-interactiveanswer';
}

//
// Free-text response
//
function oucontentFreeResponseInit() {
  var forms = document.getElementsByTagName("form");
  for (var i=0; i<forms.length; i++) {
    var form = forms[i];
    // See if this form matches the right class
    if (form.className.indexOf('oucontent-freeresponse') != -1) {
      oucontentFreeResponseInitOne(form);
    }
  }
}

function oucontentFreeResponseInitOne(form) {
  // Set up basic data regarding form elements
  form.freeResponse = form.getAttributeNode('id').value.replace('freeresponse_','');
  form.waitIcon = document.getElementById('freeresponsewait_' +
    form.freeResponse);
  form.fieldContent = form.elements['content']; 
  form.fieldSubmitS = form.elements['submit_s'];
  form.fieldSubmitR = form.elements['submit_r'];
  form.fieldSubmitReset = form.elements['submit_reset'];
  form.fieldDefaultValue = form.elements['defaultvalue'];
  form.gotValue = form.elements['gotvalue'].value == 1 ? true : false;
  
  // Firefox: turn off spellchecking by default if the field is not English 
  // (this is a hack and we need to stop doing it if they ever fix Firefox 
  // bug 338427)
  if(form.fieldContent.lang && form.fieldContent.lang.indexOf('en')!=0)
  {
    form.fieldContent.setAttribute('spellcheck','false');
  }
  
  if(typeof(form.elements['id'])=='object') {
    form.documentIdentifier = "id=" + form.elements['id'].value;
  } else {
    form.documentIdentifier = "preview=" + form.elements['preview'].value;
  }
  
  // Set change and submit handlers
  form.fieldContent.onkeyup = function() {
    oucontentFreeResponseChanged(form);
  };
  form.fieldSubmitReset.onclick = function() {
	  // Get data for AJAX request
	  var postData = form.documentIdentifier + 
	    "&ajax=1&freeresponse=" + form.freeResponse + "&content=" + 
	    encodeURIComponent(form.fieldContent.value) + "&submit_reset=" + form.fieldSubmitReset.value;
	  // Grey out the set button again
	  form.previousOriginal = form.originalValue;
	  form.fieldContent.value = form.defaultValue;
	  form.originalValue = form.fieldContent.value;
	  oucontentFreeResponseChanged(form);
	  
	  // Enable the progress image
	  form.waitIcon.style.display = 'inline';
	  
	  // Make AJAX request
	  YAHOO.util.Connect.asyncRequest('POST', 'freeresponse.php', {
	    success: function(t) {
	      // Is it really success?
	      if (t.responseText != 'ok') {
	        this.failure(t);
	        return;
	      }
	      // Hide wait icon
	      form.waitIcon.style.display = 'none';
	    },
	    failure: function(t) {
	      // Hide wait icon
	      form.waitIcon.style.display = 'none';
	      form.originalValue = form.previousOriginal;
	      oucontentFreeResponseChanged(form);
	      // Display error
	      window.alert('There was an error reseting your entry.');
	    }
	  },postData);
	    return false;
  };
  form.fieldContent.onkeypress = form.fieldContent.onkeyup;  
  form.onsubmit = function() {
    return oucontentFreeResponseSubmit(form);
  };
  
  // Go find Answer and Discussion, if any
  form.answer = null;
  form.discussion = null;
  var 
    first = oucontentNextSibling(form.parentNode), 
    second = first ? oucontentNextSibling(first) : null;
  if (first && is_answer_node(first)) {
    form.answer = first;
    if (second && is_discussion_node(second)) {
      form.discussion = second;
    }
  } else if (first && is_discussion_node(first)) {
    form.discussion = first;
  }
  
  if (form.gotValue) {
    // We already have a value, show the answer box etc
    oucontentFreeResponseShow(form, true);
  } else {
    oucontentFreeResponseShow(form, false);
  }
  
  // Remember the original value
  form.originalValue = form.fieldContent.value.toString();
  form.defaultValue = form.fieldDefaultValue.value.toString();
  // Grey out the save button until they type something
  oucontentFreeResponseChanged(form);      
}

function oucontentFreeResponseChanged(form) {
  var unchanged = form.fieldContent.value == form.originalValue;
  var isdefault = form.fieldContent.value == form.defaultValue;
  form.fieldSubmitS.disabled = unchanged;
  if(form.fieldSubmitR) {
    form.fieldSubmitR.disabled = unchanged;
  }
  form.fieldSubmitReset.disabled = isdefault;
}

function oucontentFreeResponseSubmit(form) {
  // Get data for AJAX request
  var postData = form.documentIdentifier + 
    "&ajax=1&freeresponse=" + form.freeResponse + "&content=" + 
    encodeURIComponent(form.fieldContent.value);
  
  // Grey out the button again
  form.previousOriginal = form.originalValue;
  form.originalValue = form.fieldContent.value;
  oucontentFreeResponseChanged(form);
  
  // Show the answer
  oucontentFreeResponseShow(form, form.fieldContent.value!=='');
  
  // Enable the progress image
  form.waitIcon.style.display = 'inline';
  
  // Make AJAX request
  YAHOO.util.Connect.asyncRequest('POST', 'freeresponse.php', {
    success: function(t) {
      // Is it really success?
      if (t.responseText != 'ok') {
        this.failure(t);
        return;
      }
      // Hide wait icon
      form.waitIcon.style.display = 'none';
    },
    failure: function(t) {
      // Hide wait icon
      form.waitIcon.style.display = 'none';
      
      // Enable save button again
      form.originalValue = form.previousOriginal;
      oucontentFreeResponseChanged(form);
      
      // Display error
      window.alert('There was an error saving your entry. Try again, or make a copy elsewhere.');
    }
  },postData);
  
  return false;
}

function oucontentFreeResponseShow(form, show) {
  var style = show ? 'block' : 'none';
  if(form.answer) {
    form.answer.style.display = style;
  }
  if(form.discussion) {
    form.discussion.style.display = style;
  }

  // Choose the appropriate submit button - 'save and reveal' or just 'save'.
  if(form.fieldSubmitR) {
    form.fieldSubmitS.style.display = show ? 'inline' : 'none';
    form.fieldSubmitR.style.display = show ? 'none' : 'inline';
  }
  oucontentForceIERepaint();
}

function oucontent_remove_px(string) {
  return parseInt(string.replace(/px$/, ''));
}
// Expands an object. Construct with original object (to determine the initial
// size) then add something into it or replace it, then call go() with the
// new object.
function oucontent_expander(originalobj) {
  this.shrinkheight = originalobj==null ? 0 : oucontent_remove_px(
      YAHOO.util.Dom.getStyle(originalobj, 'height'));
  this.lastheight = -1;
  this.speed = 20;

  this.setspeed = function(newspeed) {
    this.speed = newspeed;
  }

  this.go = function(newobj) {
    // Some browsers don't return current actual height, which means this
    // logic fails to work, so don't do the effect. Also IE7 glitches and
    // shows a stupid blue box unless you make it repaint, so killing that
    // individually.
    if(isNaN(this.shrinkheight) || navigator.userAgent.indexOf('MSIE 7') != -1) {
      return;
    }
    newobj.style.maxHeight = this.shrinkheight + 'px';
    newobj.style.overflow = 'hidden';
    var outer = this;

    var timeoutid = setInterval(function() {
      var currentheight = newobj.offsetHeight;
      if (outer.lastheight == currentheight) {
        newobj.style.maxHeight = '';
        newobj.style.overflow = 'visible';
        clearInterval(timeoutid);
        return;
      }
      outer.lastheight = currentheight;
      outer.shrinkheight += outer.speed;
      newobj.style.maxHeight = outer.shrinkheight + 'px';
    }, 20);
  }
}

function oucontent_shrinker(originalobj) {
  this.shrinkheight = oucontent_remove_px(
      YAHOO.util.Dom.getStyle(originalobj, 'height'));
  this.lastheight = -1;
  this.speed = 20;

  this.setspeed = function(newspeed) {
    this.speed = newspeed;
  }

  this.go = function(newobj) {
    // Some browsers don't return current actual height, which means this
    // logic fails to work, so don't do the effect.
    if(isNaN(this.shrinkheight)) {
      newobj.style.maxHeight = '';
      newobj.style.overflow = 'visible';
      newobj.style.display = 'none';
      return;
    }
    newobj.style.maxHeight = this.shrinkheight + 'px';
    newobj.style.overflow = 'hidden';
    var outer = this;

    var timeoutid = setInterval(function() {
      var currentheight = newobj.offsetHeight;
      if (outer.lastheight == currentheight) {
        newobj.style.maxHeight = '';
        newobj.style.overflow = 'visible';
        newobj.style.display = 'none';
        clearInterval(timeoutid);
        return;
      }
      outer.lastheight = currentheight;
      outer.shrinkheight -= outer.speed;
      if (outer.shrinkheight < 0) {
        outer.shrinkheight = 0;
      }
      newobj.style.maxHeight = outer.shrinkheight + 'px';
    }, 20);
  }
}


function oucontentAlternativeFormatsInit() {
  var divs = YAHOO.util.Dom.getElementsByClassName(
    'oucontent-alternatives', 'div');
  if(divs.length != 1) {
    return;
  }
  var div = divs[0];
  var heading = div.getElementsByTagName('h3')[0];
  var a = document.createElement('a');
  a.href = '#';
  a.className = 'oucontent-alternatives-switch';
  var img = document.createElement('img');
  img.alt = '';
  img.src = oucontent_pixpath + '/t/switch_plus.gif';
  a.appendChild(img);
  a.appendChild(document.createTextNode(' '));
  a.hide = div.getElementsByTagName('div')[0];
  a.img = img;
  a.on = false;
  var span = document.createElement('span');
  a.appendChild(span);
  while(heading.firstChild) {
    var child = heading.firstChild;
    heading.removeChild(child);
    span.appendChild(child);
  }
  heading.appendChild(a);

  a.onclick = function() {
    if (!this.on) {
      this.img.src = this.img.src.replace(/_plus/, '_minus');
      var expander = new oucontent_expander(null);
      expander.setspeed(10);
      this.hide.style.display = 'block';
      expander.go(this.hide);
      this.on = true;
    } else {
      this.img.src = this.img.src.replace(/_minus/, '_plus');
      var shrinker = new oucontent_shrinker(this.hide);
      shrinker.setspeed(10);
      shrinker.go(this.hide);
      this.on = false;
    }
    return false;
  };
  
}

// 
// Initial setup
//

oucontentAddOnLoad(oucontentOnLoad);
if(document.getElementsByTagName) {
  var body = document.getElementsByTagName("body")[0];
  if(body && body.id == 'mod-resource-view') {
    document.write('<link rel="stylesheet" type="text/css" href="'+oucontentSupportFileLocation+'/olympics/oucontent-js.css" />');
  } else {
    document.write('<link rel="stylesheet" type="text/css" href="olympics/oucontent-js.css" />');
  }
}

