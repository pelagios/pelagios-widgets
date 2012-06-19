<!DOCTYPE html>

<html>
  <head>
  <link rel="stylesheet" type="text/css" href="../styles.css" media="screen" />
  <meta name="robots" content="noindex, nofollow">
      <link rel="stylesheet" type="text/css" href="http://clas-lgpn2.classics.ox.ac.uk/css/lgpn.css" />
    <link href="http://clas-lgpn2.classics.ox.ac.uk/css/lgpn_print.css" media="print" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://clas-lgpn2.classics.ox.ac.uk/css/lgpn_tabs.css" />
    <link rel="stylesheet" type="text/css" href="http://clas-lgpn2.classics.ox.ac.uk/css/keyboardstyle.css" />
      <script type="text/javascript" src="http://clas-lgpn2.classics.ox.ac.uk/js/jquery.js">
<!--JQuery-->
    </script>
    <script type="text/javascript" src="http://clas-lgpn2.classics.ox.ac.uk/js/jquery-ui-personalized-1.5.2.min.js">
<!-- JQuery: required by virtual keyboard-->
    </script>
    <script type="text/javascript" src="http://clas-lgpn2.classics.ox.ac.uk/js/jquery-fieldselection.js">
<!-- JQuery: required by virtual keyboard-->
    </script>
    <script type="text/javascript" src="http://clas-lgpn2.classics.ox.ac.uk/js/vkeyboard.js">
<!-- JQuery: virtual keyboard-->
    </script>
    <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAXWaYpACABYqQEjTJ7Xh76RQCizA5zk1MYGqBur_GVycbw3p5VxRaQA1CYGdPRW2M6pdJdTQ2cum1lg">
<!--Google  AJAX API for Google Maps-->
    </script>
    <script type="text/javascript" src="http://clas-lgpn2.classics.ox.ac.uk/js/lgpn_tabs.js">
<!--tab jquery-->
    </script>
    <script type="text/javascript">

	  var queryparams = 'id=V1-14255';

	  
	  google.load("maps", "2");
	  google.setOnLoadCallback(initialize);	    
	  
	  
	  $(document).ready(function(){

	  
	    $('#advanced_search').hide();
	    $('#adv_search_showhide').show();
	      
	    $('#adv_search_showhide').click(function(){ 

	       $('#advanced_search').toggle();
		if ($('#advanced_search').is(':hidden')) { $('#showhide_status').html('show'); }
		else { $('#showhide_status').html('hide'); }
	    });

	  });

	  function htmlDecode(query) {
	     return $('&lt;div/&gt;').html(query).text(); 
          }

	  function _initInfo() {
     var hideInfo = '&lt;span class="hideInfo"&gt; (click to hide this info)&lt;/span&gt;'; 
	     $('p[id^=info_]').hide().append(hideInfo);
	     
	     $('a[href^=#info_]').each(function(i){
	        var thisId = $(this).attr('href').replace('#','');
		$(this).removeAttr('href').click(function(){
		   $('p[id^=info_]').hide().css({'background':'#faf8cc','border':'1px solid #ccc','padding':'5px'});
		   $('p#'+thisId).show().click(function() { $(this).hide() });
		}).css({'cursor':'pointer','text-decoration':'none','color':'blue','font-size':'80%'}); 
	     }); 
	  }

	  function initInfo() {
	  
	  var hideInfo = '<span class="hideInfo"> (click to hide this info)</span>';
	  $('p.infobox').hide().append(hideInfo);

	     $('a[href^=#info_]').each(function(i){
	        var thisId = $(this).attr('href').replace('#','');
		$(this).removeAttr('href').click(function(){
		   $('p.infobox').not('#'+thisId).hide();
		   if ($('p#'+thisId).is(':hidden')) { $('p#'+thisId).show(); }
		   else if ($('p#'+thisId).is(':visible')) { $('p#'+thisId).hide(); }
		   $('p#'+thisId).click(function() { $(this).hide(); });
		});
	     });

	  }






/*	  function initSearch() {

	  $('#advanced_search').before('&lt;span id="adv_search_showhide" title="Search on floruit, region,
		 settlement, deme, status, full name, transliterated
		 name, and unique IDs"&gt; &lt;span id="showhide_status"&gt;&lt;xsl:comment&gt;show/hide
		 toggle&lt;/xsl:comment&gt;show&lt;/span&gt; advanced search options&lt;/span&gt;'); 


	     $('#advanced_search').hide();
	     $('#adv_search_showhide').show();
	     
	     $('#adv_search_showhide').click(function(){ 
	     
	     $('#advanced_search').toggle();
	        if ($('#advanced_search').is(':hidden')) { $('#showhide_status').html('show'); }
	        else { $('#showhide_status').html('hide'); }
	     });


	  }  */

	  function initialize() 
	  {
	  
	     if (queryparams != '')
	     {
	        getLGPN('http://clas-lgpn2.classics.ox.ac.uk/cgi-bin/lgpn_search.cgi?' + queryparams + ';style=gjson;callback=lgpnMap');
	     }
	  
	     initTabs();
	     initInfo();
	  }

	</script>
    <script type="text/javascript" src="http://clas-lgpn2.classics.ox.ac.uk/js/lgpnMap.js">
<!--Google maps script-->
    </script>
<!--debug is 0-->
    <link rel="stylesheet" type="text/css" href="http://clas-lgpn2.classics.ox.ac.uk/css/datatables_page.css" />
<!--dataTables default page styles-->
    <link rel="stylesheet" type="text/css" href="http://clas-lgpn2.classics.ox.ac.uk/css/datatables_table.css" />
    <script type="text/javascript" src="http://clas-lgpn2.classics.ox.ac.uk/js/jquery.dataTables.js">
<!-- JQuery: data tables-->
    </script>
    <script xml:space="preserve" type="text/javascript" charset="utf-8">
	      $(document).ready(function() {
		
		
                var queryparams = "id=V1-14255";
//		alert(queryparams);

		$('#lgpn').dataTable( {
		"bProcessing": true,
                "sAjaxSource": 'http://clas-lgpn2.classics.ox.ac.uk/cgi-bin/lgpn_search.cgi?' + queryparams + ';style=dtjson',
		"aoColumns": [ 
		{ "fnRender": function ( oObj ) { return htmlDecode(oObj.aData[0]) } }, /* 0 = ID */
		null,                  /* 1 = volume */
		{ "fnRender": function ( oObj ) { return htmlDecode(oObj.aData[2]) } }, /* 2 = pubID */
		{ "iDataSort": 4, 
		"fnRender" : function ( oObj ) { return htmlDecode(oObj.aData[3]) }
		},    /* 3 = Greek name - sort by translit */
		{ "bVisible": false }, /* 4 = translit name - invisible */
		null,                  /* 5 = sex */
		{ "fnRender": function ( oObj ) { return htmlDecode(oObj.aData[6]) } }, /* 6 = place */
		{ "bVisible": false }, /* 7 = notBefore - invisible */
		{ "bVisible": false }, /* 8 = notAfter - invisible */
                { "iDataSort": 7,
		"fnRender": function ( oObj ) { return htmlDecode(oObj.aData[9]) }},    /* 9 = floruit - sort by notBefore */
		{ "fnRender": function ( oObj ) { return htmlDecode(oObj.aData[10]) }}  /* 10 = references */
		],
		"bStateSave": false,
		"bAutoWidth": false,
		"iDisplayLength": 50,
		"bLengthChange": true,
		"oLanguage": {
		"sZeroRecords": "Fetching data...",
		"sProcessing": "Processing...",
		"sLengthMenu": 'Display <select>\
		<option value="10">10</option>\
		<option value="25">25</option>\
		<option value="50">50</option>\
		<option value="75">75</option>\
		<option value="100">100</option>\
		<option value="-1">All</option>\
	      </select> records' 
	      }
	      
	      });
	      
	      });
	      
	      function htmlDecode(value){ 
	        return $('<div></div>').html(value).text(); 
	      }
	      
	    </script>

  </head>
  <body >

<a href="/place/Nisyros">Nisyros</a> <a href="http://pleiades.stoa.org/places/599830">?</a><script type="text/javascript" src="http://pelagios.open.ac.uk/place_widget/pelagios.js?pleiadesID=599830&amp;widgetID=id2399207"></script><div id="id2399207-pelagios-widget" class="pelagios-widget"></div>
 </body>
</html>