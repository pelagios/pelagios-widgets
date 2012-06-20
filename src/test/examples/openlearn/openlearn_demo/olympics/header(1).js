    function showcontent(content)
    {
        document.getElementById(content).style.display="block";
    }
    var newwindow;
    function popupinfo(url,windowName, windowFeatures)
    {
        popupclose();
        newwindow= window.open (url, windowName, windowFeatures);
        newwindow.focus();
    }
    function popupclose() {
        if (newwindow != null) {
            if (!newwindow.closed) {
                newwindow.close();
            }
        }
    }
    
	function getElementsByClassName2(classname, node) {
	    if(!node) node = document.getElementsByTagName("body")[0];
	    var a = [];
	    var re = new RegExp('\\b' + classname + '\\b');
	    var els = node.getElementsByTagName("*");
	    for(var i=0,j=els.length; i<j; i++) {
	        if(re.test(els[i].className)) {
	            a.push(els[i]);
	        }
	    }
	    return a;
	}
	
	
	function hide_rights_info() {
	    //  Hide all the rightsinfos
	    nodes = getElementsByClassName2('rightsinfo_nohide', false);
	    for( var i in nodes )
	    {
	        nodes[i].className = 'rightsinfo_hide';
	    }
	    
	    //  Change all the non js styles to the normal styles
	    nodes = getElementsByClassName2('rightsinfo_nojs', false);
	    for( var i in nodes )
	    {
	        nodes[i].className = 'rightsinfo';
	    } 
	}
	
	function showhide_source_ref(node) {
	    rightsnode = false;
	        
	    c = 0;
	    //  Get the text node... then it's sibling (which should be the div)
	    while(testnode = node.nextSibling) {
	        c++;
	        if(testnode.className == 'rightsinfo_hide' || testnode.className == 'rightsinfo_nohide') {
	            rightsnode = testnode
	            break;
	        }
	        node = testnode;
	        //  Infinate loop check(ish) shouldn't ever really be bigger than 5...
	        if(c>100) {
	            break;
	        }
	    }
	    
	    //  Make sure we have the rightsnode
	    if(rightsnode) {
	        //  Now check if it's already hidden, if it is show, if not hide!
	        if(rightsnode.className == 'rightsinfo_nohide') {
	            rightsnode.className = 'rightsinfo_hide';        
	        } else {
	            rightsnode.className = 'rightsinfo_nohide';
	        }    
	    }
	}

	function openNewWindow(a) {
	  window.open(a,'_blank');
	  return false;
	}