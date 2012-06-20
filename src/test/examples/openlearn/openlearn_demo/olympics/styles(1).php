/**************************************
 * THEME NAME: ou
 *
 * Files included in this sheet:
 *
 *   ou/outheme.css
 **************************************/

/***** ou/outheme.css start *****/

@CHARSET "UTF-8";

/*
 * OU theme.
 *
 * Organisation:
 *
 * 1 Global styles - overall page layout and global changes to Moodle theme.
 * 2 Header
 * 3 Blocks (general)
 * 4 Individual blocks (labelled 'Block: name')
 * 5 Individual course formats (labelled 'Format: name')
 * 6 Individual modules (labelled 'Module: name')
 * 7 Miscellaneous chunks of styles (labelled 'Misc: name')  
 */

/* Basic global styles */
body {
	background: white;
	margin:0;
	font-family:Verdana, sans-serif;
	font-size:0.8em;
    color:#333333;
}
h1.main,
h2.main,
h3.main,
h4.main,
h5.main,
h6.main {
  text-align: left;
}
.heading-with-help {
  text-align: left;
}



table,td,th,li,input,select,optgroup {
    font-family:Verdana, sans-serif;
}
p {
	margin:0.5em 0;
}
input, select {
    font-size:1em;
}
.ie7 form select {
    font-size:12px;
}
/* Default table styling (note, cannot apply this everywhere, it makes a mess) */ 
.forumpost table td,
.ouwiki_content table td,
.rp_description table td {
	border:1px dotted #003366;
	padding:4px;
}
.forumpost table,
.ouwiki_content table,
.rp_description table {
	margin:1em 0;
	border:1px solid #003366;
}

/* Weird style in standard causes stretched 'scale' form field helpicon */
.helplink img {
	width: auto;
}

/* Improved styling for notice */
#notice.generalbox {
	margin-top: 10px;
}
/* continue button looks silly with notify/error boxes without this */
.continuebutton {
    margin-left: 20%;
}

/* Global link styles */
a:link,a:visited,a:active,a:hover {
  color: #003366;
  text-decoration: underline;
}
a.arrow_link:link,a.arrow_link:visited {
	color:black;
	text-decoration:none;
}
a.arrow_link:hover .arrow_text {
	text-decoration:underline;
}

/* Tabs */
.ie6 .tabrow0 div, 
.ie6 .tabrow0 ul {
  font-size:110%;
}
.ie7 .tabrow0 div, 
.ie7 .tabrow0 ul {
  font-size:101%;
}
.tabrow0 a,	.tabrow0 a:visited {
	text-decoration:none;
	color:black;
}
.gecko19 .tabrow0 {
	line-height:1.85em;
}
.tabrow0 .here a {
	border-bottom:1px solid #e2e2e2;
}
.ie6 .tabrow0 li a {
	border-bottom:2px solid #e2e2e2;
}
.tabrow0 .here a.nolink {
	color:black;
}
.tabtree a.nolink {
	color:#888;
}
.tabrow0 a.nolink:hover {
  background-image: url(http://openlearn.open.ac.uk/theme/standard/pix/tab/left.gif);
}

.tabrow0 a.nolink:hover span {
  background-image: url(http://openlearn.open.ac.uk/theme/standard/pix/tab/right.gif);
}

/* Home link that displays as a button in core */
.homelink {
	text-align:left;
	border-bottom:10px solid white;
	margin-top:0;
	margin-left:20px;
}

.homelink a {
	background: url('img/arrow-left.gif') no-repeat center left;
	padding-left:20px;
	min-height:16px;
	color:black;
	text-decoration:none;	
}
.homelink a:hover {
	text-decoration:underline;
	background-image: url('img/arrow-left-hover.gif');
}


.homelink a:link,
.homelink a:visited {
	border:none;
	text-decoration:underline;
	color:black;
}
.homelink a:hover {
	text-decoration:underline;
}


/* Left-align single buttons */
div.singlebutton {
	text-align:left;
}

/* Make ou-content div not visible */
#ou-content {
  position: absolute;
}

/* Form styling */ 
form.mform .fdescription.required {
	text-align:left;
	font-size:0.85em;
	color:#555;
}
.ie6 form.mform .fdescription.required label {
	font-size:1.18em;
}
form.mform .hidden .fdescription.required {
	display:none;
}
.ie6 form.mform .hidden .fdescription.required {
	display:block;
	margin-top:2em;
}
form.mform img.iconhelp {
	vertical-align:bottom;
}
/* round corners with background color for all forms created using MoodleQuickForm */
form.mform {
    background-color:#dbedff;
    background-image: url('img/ftblue-corner-tl.png');
    background-position: top left;
    background-repeat:no-repeat;
    border:none;
    padding:10px;
    position:relative;
}

form div.ou-corner-tr,
form div.ou-corner-bl,
form div.ou-corner-br
{
    position:absolute;
    background-repeat:no-repeat;
    width:5px;
    height:5px;
    font-size:0;
}
form div.ou-corner-tr{
    background-image: url('img/ftblue-corner-tr.png');
    right:0;
    top:0;
}
form div.ou-corner-bl{
    bottom:0;
    left:0;
    background-image: url('img/ftblue-corner-bl.png');
}
form div.ou-corner-br{
    bottom:0;
    right:0;
    background-image: url('img/ftblue-corner-br.png');
}
form.mform legend.ftoggler{	
    color:black;
}
fieldset.clearfix {
    border:none;
}
.fitemtitle img.iconhelp {
    margin:0;
}

.mform span.error, .mform span.required {
    color:#aa0000;
}

/* House style warning on module editing form */
.housestyle-warning {
    font-style: italic;
    font-size: 0.85em;
    margin-top: 4px;
}

/* Error boxes */
.errorbox {
    background: white;
    color: black;
    text-align: left;
    border: 1px dotted red;
    margin: 1em 20%;
    width: auto;
}


/* Group selector for when it's just text */
div.groupselector {
	font-size:0.85em;
}


/* Person selector */

.ps_mainbit {
margin-left:auto;
margin-right:auto;
width:935px;
}

xxx.ps_setup {
	float:left;	
	width:615px;	
}

.personselector {
	width:615px;
}

.personselector .ps_section_content {
	margin-top:0;
	border-left:5px solid #B8DBFF;
	border-bottom:1px solid #B8DBFF;
	border-right:1px solid #B8DBFF;
	padding-top:6px;
	background:white;
}
.personselector .ps_section {
	background:#B8DBFF url('img/ltblue-corner-tl.png') no-repeat top left; 	
    margin:10px 0;
}

.personselector .ps_sectionhead {
  background:url('img/ltblue-corner-tr.png') no-repeat top right;
  padding-left:1em;
  padding-top:5px;
  padding-bottom:5px;
  margin:0;  
}

.personselector .ps_line {	
	border-bottom:1px solid #B8DBFF;	
}

.personselector #left {
	float:left;
	width:250px;
	position:relative;
	margin-left:10px;
}
.ie6 .ps_section_content,
.ie6 .ps_section,
.ie6 .personselector #left,
.ie6 .personselector #left .indent,
.ie6 .personselector .main,
.ie6 .personselector #container {
	height:0;
}
.ie6 .personselector #left {
	margin-left:5px;
}
	
.personselector .searchbox {
	padding-right:4px;
}
.personselector .searchbox .ps_line {
	margin-bottom:5px;
}
.personselector .ps_wait {
	float:right;
	width:16px;
	height:16px;
	padding-top:3px;
}
.personselector .ps_searchbox {
	margin-right:25px;
}

	
.personselector .searchbox input {
	width:100%;
}

.personselector .ps_main {
	margin-left:270px;
	width:330px;
}

.personselector #left .indent {
	margin-left:2em;
	margin-top:5px;
}
.personselector .userselect {
	margin-top:5px;
}
.personselector #left .unindent {
	position:absolute;
	left:0;
}

.personselector .groupselect {
	width: 100%;
	height:118px;
}
.ie6 .personselector .groupselect {
	height:121px;
}

.personselector #container {
	margin-bottom:10px;
}


/* IE6 can't handle special characters */
.ie6 span.charset_standard,
.ie6 span.charset_greek,
.ie6 span.charset_phonetic {
    font-family: 'Arial Unicode MS';
}


/* Overall page layout */
#page {
  min-width: 763px;
  letter-spacing:0;
}
@media print {
        #page {
            width:640px;
                min-width:0;
        }
        .rp {
            width:600px;
        }
        
        #mod-resourcepage-view #left-column {
          display:none;
        }
        
        
        #ou-topbars,
        #ioemenu,
        #ioemenu2,
        #navbar div.navbutton,
        #ou-footerf .ou-footrow ul {
            display:none;
        }
}
#help #page {
  min-width: 0;
}
#content {
	margin:0 20px;
}
#content #left-column, #content #right-column {
	width:200px;
}
#content #middle-column {
	margin:0;
}
.ie6 #content #middle-column {
	height:0;
}
#content #middle-column.has-right-column {
	margin-right:210px;
}
#content #middle-column.has-left-column {
	margin-left:210px;
}
.ie6 #page #content .has-left-column {
	margin-left:210px;
}



/* Header and top navigation */
#ioemenu a {
	text-decoration:none;
}	
h1.headermain,
.breadcrumb,
.breadcrumb h1 {
	font-size:1.0em;
	margin:0;
	font-weight:normal;
	color: #003366;
}
.navbar {
	border:none;	
  padding:4px 20px 2px;
}
h1.headermain {
	color:black;
	margin:4px 20px 0px;
	padding-bottom:3px;
	border-bottom:1px solid #B8DBFF; 
}
#navbar .breadcrumb a {
	text-decoration:none;
}
#navbar .breadcrumb a:hover {
	text-decoration:underline;		
}
.breadcrumb .arrow {
	background:url('img/breadcrumb.gif') no-repeat left bottom;
	color:white;
	padding-left:7px;
	margin-right:-8px;
	position:relative;
	top:-3px;
}
.ie .breadcrumb .arrow {
	margin-left:5px;
}
/* IE6 wouldn't show the background properly, so I just made it use the default arrow */
.ie6 .breadcrumb .arrow {
	background:white;
	margin:0 0 0 6px;
	padding:0;
	position:static;
	color:#003366;
}

.ou-readonly-student {
	font-size:0.85em;
	margin:0 20px 10px;
}

/* IE6 font overrides */
.ie6 span.charset_standard,
.ie6 span.charset_greek,
.ie6 span.charset_phonetic {
    font-family: 'Arial Unicode MS';
}

/* Calendar */
#calendar .maincalendar .eventlist .event .description .commands {
	margin-top:5px;
	text-align:left;
}

/* Blocks */
.sideblock .header {
    background-color:#edf6ff;
    background-image:url('img/sideblock_bg_lefthand.png');
    background-position:top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    margin:0;
    padding:0;
    font-size:1.0em;
}
.sideblock.block_student .header {
    background-image:url('img/sideblock_bg_righthand.png');
    background-color:#ebebeb;
}
.ie6 .sideblock .header {
	height:0;
}
.sideblock h2 {
	font-weight:normal;
	font-size:1.0em;
	font-weight: bold;
	padding:5px 10px 6px;
}
.ie6 .sideblock h2 {
	padding-bottom:6px;
}

.sideblock .header .feedicon {
    margin: 1px 0 0;
    float: right;
}

.ie7 .sideblock .header .feedicon {
    position:relative;
    top:-21px;
    left: -10px;
}

.block_with_controls.sideblock h2 {
	background-image: none;
	padding-bottom:0;
}
.block_with_controls.sideblock.block_adminblock h2 {
	background-image: url('img/ltblue-corner-bl.png');
	padding-bottom:6px;
}
.block_adminblock select {
    width: 100%;
    padding: 0;
}
.sideblock .content {
	background-color:white;
	border:none;
	padding:6px 10px 0;
	font-size:1.0em;
	line-height:1.4;
}

.ie .sideblock .content {
	padding-bottom:1px;
}

.block_questions_navigation .sideblock .content {
    background:yellow;
    border:none;
    padding:6px 10px 0;
    font-size:1.0em;
    line-height:1.4;
}

.sideblock a { /* Override standard rule */
	line-height:1.4; 
}
.sideblock .header .commands {	
	padding:0 10px 6px;		
}
.sideblock .list .column a {
	color:black;
	text-decoration:none;
}
.sideblock .list .column a:hover {
	text-decoration:underline;
}

.skip-block-to {
	position:absolute;
}

/* Block: html */
.ou-contains-only-image .content {
    padding: 0;
}
.ou-contains-only-image .header {
    margin-bottom:6px;
}
.ou-contains-only-image.block_with_controls .content {
    padding-top: 6px;
}
.ou-contains-only-image p {
    margin-top: 0;
}

/* Block: admin_tree */
.block_admin_tree a {
	color:black;
	text-decoration:none;
}
.block_admin_tree a:hover {
	text-decoration:underline;
}

/* Block: navigation */
.block_navigation ul.section {
	margin:0;
}
.block_navigation li.activity {
	margin-bottom:4px;
}
.block_navigation .content {
	padding-left:0;
	padding-right:0;
}
.block_navigation .navigationlist {
    background-color:#ffffff;
    background-image:url('img/studyplan_content_bg.png');
    background-position:top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -khtml-border-radius:5px;
}
.ie6 .navigationlist {
	height:0;
}

.block_navigation .studyplanactivities li.activity {
    text-indent:-20px;
    margin-left:20px;
}
ie6 .block_navigation .studyplanactivities li.activity {
    text-indent:0;
    margin-left:0;
}
.block_navigation ul.section {
	padding:5px 10px;
}

.block_navigation .navigationlist a {
	color:black;
	text-decoration:none;
}
.block_navigation .navigationlist a:hover span {
	text-decoration:underline;
}
.ie6 .block_navigation .navigationlist a:hover {
	text-decoration:underline;
}

/* Block: forums, course_resources */
#course-view .studyplan-format .block_forum li.activity,
#course-view .studyplan-format .block_course_resources li.activity {
		padding-right:0;
}

/* Block: newsfeed */
h3.newsfeed_title, div.newsfeed_date {
	display:inline;	
}
.newsfeed_content {
	margin-top:0.5em;
}
.ie .newsfeed_space {
	margin-left:0.3em;
}
#blocks-newsfeed-ui-viewfeed #content, 
#blocks-newsfeed-ui-entryhistory #content {
	margin:0 auto;
}
#blocks-newsfeed-ui-viewfeed .newsfeed_entry {
    background:#B8DBFF url('img/ltblue-corner-tl.png') no-repeat top left;
    margin:0 0 20px;
    border:none;
    padding:0;
}
#blocks-newsfeed-ui-viewfeed .newsfeed_entry_header {
	background:url('img/ltblue-corner-tr.png') no-repeat top right;
	padding: 4px 0 2px 10px; 	
}
#blocks-newsfeed-ui-viewfeed .newsfeed_entry_main {
	margin-top:0;
	border-left:5px solid #B8DBFF;
	border-bottom:1px solid #B8DBFF;
	border-right:1px solid #B8DBFF;
	padding:6px 5px;
	background:white;	
}
#blocks-newsfeed-ui-viewfeed h3.newsfeed_title {
	font-weight:normal;
}
#blocks-newsfeed-ui-viewfeed .newsfeed_content {
	margin-top:0;
}
.block_newsfeed .newsfeed_entry .newsfeed_date {
	color: #555;
	font-size:0.85em;
}
.block_newsfeed .newsfeed_content {
	margin-top:0px;
}
/* Block: block_rfmarker */
.block_rfmarker .content { 
    background: #efe;
    border-top:5px solid #FFFFFF;
    border-bottom:5px solid #efe;
}
/* All styles only applied for studyplan should go to course/format/studyplan/styles.php */

form.togglecompletion img.iconhelp,
span.autocompletion img.iconhelp {
	position:relative;
	top:-2px;
}

body#course-view .unread,
#mod-resourcepage-view .unread,
body#course-view .rpname,
.block_navigation .unread,
.studyplan-format .unread {
	font-size:0.85em;
	font-weight:normal;
	background:transparent;
	margin-left:0.4em;
	padding-right:0;
	color:#555;
}
body#course-view .rpname a {
    color:#555;
}

/* Box: generalbox */
.generalbox {
    border:1px solid #BBDBFF;
}

/* Table : generaltable */
.generaltable {
    border: 0px solid white;
}
.generaltable th.header.c0 {
    padding:5px 10px 5px 10px;
    background-image: url('img/ltblue-corner-tl.png');
    background-position: top left;
    background-repeat:no-repeat;
    border-right:1px solid white;
    border-bottom:1px solid #BBDBFF;
}
.generaltable th.header {
    background-color:#BBDBFF;
    color:  #003366;
    padding:5px 10px 5px 10px;
    vertical-align:top;
    border-right:1px solid white;
    border-bottom:1px solid #BBDBFF;
}
.generaltable th.header.lastcol {
    padding:5px 10px 5px 10px;
    background-image: url('img/ltblue-corner-tr.png');
    background-position: top right;
    background-repeat:no-repeat;
    border-bottom:1px solid #BBDBFF;
}

.generaltable th {
    text-align: left;
}

.generaltable td.cell {
    padding:5px 10px 5px 10px;
    background:white;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
}
.generaltable td.cell a {
    color: #003366;
}
.generaltable td.cell.c0 {
    padding:5px 10px 5px 10px;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
    border-left:1px solid #BBDBFF;
}
.generaltable td.cell.lastcol {
    padding:5px 10px 5px 10px;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
}

.generaltable tr.lastrow {
    padding:5px 10px 5px 10px;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
}
.generaltable .bestrow td {
  background-color: #e8e8e8;
}

/* Table: flexibletable */
.flexibletable {
    border: 0px solid white;
}

.flexibletable th.header.c0 {
    padding:5px 10px 5px 10px;
    background-image: url('img/ltblue-corner-tl.png');
    background-position: top left;
    background-repeat:no-repeat;
    border-right:1px solid white;
    border-left:1px solid white;
    border-bottom:1px solid #BBDBFF;
}
.flexibletable th.header {
    background-color:#BBDBFF;
    color: #003366;
    padding:5px 10px 5px 10px;
    vertical-align:top;
    border-right:1px solid white;
    border-bottom:1px solid #BBDBFF;
}
.flexibletable th.header.lastcol {
    padding:5px 10px 5px 10px;
    background-image: url('img/ltblue-corner-tr.png');
    background-position: top right;
    background-repeat:no-repeat;
    border-right:1px solid white;
    border-left:1px solid white;
    border-bottom:1px solid #BBDBFF;
}

.flexibletable td.cell.c0 {
    padding:5px 10px 5px 10px;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
    border-left:1px solid #BBDBFF;
}
.flexibletable td.cell {
    background:white;
    padding:5px 10px 5px 10px;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
}
.flexibletable td.cell a {
    color: #003366;
}
.flexibletable td.cell.lastcol {
    padding:5px 10px 5px 10px;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
}

.flexibletable tr.footer td.cell.c0 {
    padding:5px 10px 5px 10px;
    -background-image: url('img/ltblue-corner-bl.png');
    -background-position: bottom left;
    -background-repeat:no-repeat;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
    border-left:1px solid #BBDBFF;
}
.flexibletable tr.footer td.cell {
    padding:5px 10px 5px 10px;
    vertical-align:top;
    border-top:3px solid #BBDBFF;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
}
.flexibletable tr.footer td.lastcol {
    padding:5px 10px 5px 10px;
    -background-image: url('img/ltblue-corner-br.png');
    -background-position: bottom right;
    -background-repeat:no-repeat;
    border-right:1px solid #BBDBFF;
    border-bottom:1px solid #BBDBFF;
}
.flexibletable .bestrow td {
  background-color: #e8e8e8;
}


/* Module: forum */

#mod-forum-view .block_adminblock {
	display:none;
}
	
#mod-forum-view td {
	border:none;
}	
#mod-forum-view td.picture {
	width:0;
}
#mod-forum-view td.picture .userpicture {
	display:none;
}
#mod-forum-view th {
	text-align:left;
	font-size:1.2em;
	font-weight:normal;
	padding-bottom:5px;
}
#mod-forum-view table a {
	color:black;
	text-decoration:none;
}
#mod-forum-view table a:hover {
	text-decoration:underline;
}
#mod-forum-view th.topic {
	padding-left:10px;
}
#mod-forum-view th.author {
	padding-left:8px;
}
#mod-forum-view td.replies,
#mod-forum-view td.lastpost {
	text-align:left;
}
#mod-forum-view td.replies .unread {
	background:none;
}
#mod-forum-view table {
  background:url('img/cccccc-16by1.png') repeat-x bottom left;
}
#mod-forum-view td {
  background:url('img/cccccc-16by1.png') repeat-x top left;
}
#mod-forum-view td.topic {
  background:#DBEDFF url('img/white-16by1.png') repeat-x top left;
  padding-left:10px;
}
#mod-forum-view .unread-discussion td {
  background-color:#DBEDFF;
}
#mod-forum-view .unread-discussion td.topic {
  background-color:#B8DBFF;
}
#mod-forum-view tbody tr.firstrow td.topic {
  background-image:none;
}
#mod-forum-view table {
	border:none;
}
#mod-forum-view #intro {
	border:none;
	margin:0 0 10px;
	width:auto;
	padding:1px 0 0;	
}
#mod-forum-view br { /* argh <br> kill kill */
	display:none;
}
#mod-forum-view #intro br,
#mod-forum-view table br {
	display:inline;
}
#mod-forum-view .subscription .helplink {
	display:block;
	margin:4px 0;
}
#mod-forum-view .subscription {
	float:none;
	text-align:left;
	margin-top:20px;
}
#mod-forum-view .subscription .helplink {
	font-size:1.0em;
}
#mod-forum-view .subscription .helplink {
	margin-top:5px;	
}
#mod-forum-view .subscription .helplink a {
	background: url('img/arrow.gif') no-repeat center left;
	padding-left:20px;
	min-height:16px;
	color:black;
	text-decoration:none;
}
#mod-forum-view .subscription .helplink a:hover {
	text-decoration:underline;
	background-image: url('img/arrow-hover.gif');
}

table.forumpost {
	width:100%;
}
table.forumpost {
	margin-top:10px;
}
.forumpost .content img {
	max-width:498px;
}
.indent .forumpost .content img {
	max-width:468px;
}
.indent .indent .forumpost .content img {
	max-width:438px;
}
.indent .indent .indent .forumpost .content img {
	max-width:408px;
}
.indent .indent .indent .indent .forumpost .content img {
	max-width:388px;
}
table.forumpost td.topic {
	padding-left:10px;
}
table.forumpost td.content {
	padding-left:5px;
	padding-bottom:5px;
}
table.forumpost td.left {
	display:none;
}
table.forumpost .starter {
	background:none;
}
table.forumpost tr.header td.topic {
	background:#DBEDFF url('img/ftblue-corner-tr.png') no-repeat top right;
}
table.forumpost tr.header td.topic .themecorner {
	position:absolute;
	width:5px;
	height:5px;
  background:url('img/ftblue-corner-tl.png'); 
  margin-left:-10px;
  margin-top:-4px;
}

table.forumpost.unread tr.header td.topic {
  background:#B8DBFF url('img/ltblue-corner-tr.png') no-repeat top right; 
}
table.forumpost.unread tr.header td.topic .themecorner {
  background-image:url('img/ltblue-corner-tl.png'); 
}
table.forumpost {
	border: none;
}
table.forumpost .topic {
	border:none;
}
table.forumpost td.content {
	border-top:none;
	border-left:5px solid #DBEDFF;
	border-bottom:1px solid #DBEDFF;
	border-right:1px solid #DBEDFF;
}
#mod-forum-discuss table.forumpost.unread .content {
	border-top:none;
	border-left:5px solid #B8DBFF;
	border-bottom:1px solid #B8DBFF;
	border-right:1px solid #B8DBFF;
	background: #DBEDFF;
}
table.forumpost td.content .commands a {
	text-decoration:none;
	color:black;
}
table.forumpost td.content .commands a:hover {
	text-decoration:underline;
}
table.forumpost div.author a {
	text-decoration:none;
	color:black;
}
table.forumpost div.author a:hover {
	text-decoration:underline;
}
table.forumpost.draft .content, 
#mod-forum-view tr.draft td,
#mod-forum-view tr.draft td a {
	color: #707070;
}
table.forumpost td.topic div.draft,
#mod-forum-view tr.draft td.topic div.details {
	color:black;
	font-size:0.85em;	
}
input#id_savedraft, input#id_savedraft1 {
	font-size:0.85em;
	vertical-align:bottom;
}
	
.deletedforumpost .deletedby {
	padding-bottom:10px;
	border-bottom:1px solid #DBEDFF;
	font-weight:bold;
}	

.ou_backtoforum a {
	margin-left:20px;
	background: url('img/arrow-left.gif') no-repeat center left;
	padding-left:20px;
	min-height:16px;	
	text-decoration:none;
	color:black;
}
.ou_backtoforum a:hover {
	text-decoration:underline;
	background-image: url('img/arrow-left-hover.gif');
}

#mod-forum-view .groupselector {
	float:none;
}

/* Module: forumng */
#mod-forumng-view .block_adminblock {
    display: none;
}

.forumng-divider {
    background: #B8DBFF;
    border-left: 1px solid #B8DBFF; 
    border-right: 1px solid #B8DBFF;
    height:4px; 
}

.forumng-post {
    border-top: 1px solid #DBEDFF;
    border-left: none;
    border-right: none;
    border-bottom: none;
    position: relative;
    padding: 3px 5px 5px 5px;
}

.forumng-post.forumng-read {
    background-image: url(img/ftblue-forumpost.png);
    background-repeat: repeat-y;
    background-position: top left;
}
/* Necessary because if you don't specify this, IE 7/8 puts in a white background
   colour when in 'override specified colours' mode. Crazy. */
.ie .forumng-post {
	  background-color: white;
}

.forumng-post.forumng-unread {
    border-top: 1px solid #003366;
    background-color: #DBEDFF;
    background-repeat: repeat-y;
    background-position: top left;
    background-image: url(img/dkblue-forumpost.png);
}

.forumng-post.forumng-important,
.forumng-post.forumng-important.forumng-unread {
    background-color: #F0E1B3;
}

.forumng-lockmessage .forumng-post {
    border-top: 1px solid #CC9900;
    background-color: white;
    background-image: url(img/dkyellow-forumpost.png);
    background-repeat: repeat-y;
    background-color: #F7F0D9;
}

.forumng-post h2.accesshide {
    border-bottom-color: #B8DBFF;
}

.forumng-subject,
.forumng-info,
.forumng-summary,
.forumng-deleted-info {
    padding-left:10px;
}
.forumng-info .forumng-flag {
    right: -5px;
}

.forumng-subject,
h3.forumng-subject {
      margin-top:5px;
}

.forumng-postmain {
    padding-left:10px;
    padding-top:5px;
}

.forumng-post .forumng-1 {
    background-image: url('img/ftblue-corner-tl.png');
    width:5px;
    height:5px;
    position:absolute;
    top: -1px;
    left: 0px;
}
.forumng-post .forumng-2 {
    background-image: url('img/ftblue-corner-bl.png');
    width:5px;
    height:5px;
    position:absolute;
    bottom: 0px;
    left: 0px;
}
.forumng-post.forumng-unread .forumng-1 {
    background-image: url('img/dkblue-corner-tl.png');
}
.forumng-post.forumng-unread .forumng-2 {
    background-image: url('img/dkblue-corner-bl.png');
}
.forumng-lockmessage .forumng-post .forumng-1 {
    background-image: url('img/dkyellow-corner-tl.png');
}
.forumng-lockmessage .forumng-post .forumng-2 {
    background-image: url('img/dkyellow-corner-bl.png');
}

#mod-forumng-feature-print-print .forumng-post,
#mod-forumng-feature-print-print .forumng-post.forumng-read,
#mod-forumng-feature-print-print .forumng-post.forumng-unread ,
#mod-forumng-feature-print-print .forumng-lockmessage .forumng-post,
#mod-forumng-feature-print-print .forumng-post .forumng-1,
#mod-forumng-feature-print-print .forumng-post .forumng-2,
#mod-forumng-feature-print-print .forumng-post.forumng-unread .forumng-1,
#mod-forumng-feature-print-print .forumng-post.forumng-unread .forumng-2,
#mod-forumng-feature-print-print .forumng-lockmessage .forumng-post .forumng-1,
#mod-forumng-feature-print-print .forumng-lockmessage .forumng-post .forumng-2,
#mod-forumng-feature-print-print .forumng-post h2.accesshide {
    background-color: white;
    background-image: none;
    border:none;
}
#mod-forumng-feature-print-print .forumng-author a,
#mod-forumng-feature-print-print .forumng-subject a,
#mod-forumng-feature-print-print a.forumng-parentlink,
#mod-forumng-feature-print-print .forumng-deleted-info a {
    text-decoration:none;
}

#mod-forumng-discuss .mform {
    margin-left: 45px;
    margin-right: 0;
    width: auto;
}
#mod-forumng-discuss .forumng-unread .mform {
    background-color: white;
    background-image: url('img/w-on-ftblue-corner-tl.png');
    margin-bottom: 0;
}
#mod-forumng-discuss .forumng-unread .mform .ou-corner-tr {
    background-image: url('img/w-on-ftblue-corner-tr.png');
}
#mod-forumng-discuss .forumng-unread .mform .ou-corner-br {
    background-image: url('img/w-on-ftblue-corner-br.png');
}
#mod-forumng-discuss .forumng-unread .mform .ou-corner-bl {
    background-image: url('img/w-on-ftblue-corner-bl.png');
}

.forumng-highlightbox {
    border: 2px solid #CC9900;
}
.forumng-confirmdialog {
    border: 2px solid #F7F0D9;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
}

.forumng-features .forumng-highlight {
    background: #F0E1B3;
}

form.forumng-paste-buttons {
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -khtml-border-radius: 5px;
}

.forumng-switchlinkblock {
    background: #DBEDFF;
    padding:6px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -khtml-border-radius: 5px;
    clear: right;
}
/* Module: resource */
#mod-resource-view #left-column {
	float:left;
}
#mod-resource-view .box {
	clear:none;
}
#mod-resource-view .block_adminblock {
	display:none;
}

/* Module: resourcepage */
.rp_header a:link,
.rp_header a:visited {
	text-decoration:none;
	color:black;
}

.rp_editoff .rp_section_content {
	margin-top:0;
	border-left:5px solid #B8DBFF;
	border-bottom:1px solid #B8DBFF;
	border-right:1px solid #B8DBFF;
	padding-top:6px;
	padding-right:4px;
	background:white;
}
.rp_editoff .rp_section {
	background:#B8DBFF url('img/ltblue-corner-tl.png') no-repeat top left; 	
    margin:10px 0;
}
.rp_editoff .rp_sectionhead {
  background:url('img/ltblue-corner-tr.png') no-repeat top right; 
}

.rp_editoff .rp_sectionnohead {
  background:url('img/ltblue-corner-tr.png') no-repeat top right;
  height:6px; 
  font-size:0;
}

#mod-resourcepage-view .rp_editoff .rp_sectionhead {
  font-weight:normal;
  margin-bottom:0px;
  padding-bottom:6px;
  padding-top:5px;
}

#mod-resourcepage-view .block_adminblock {
	display:none;
}

.ie6 .rp_header a:hover {
	text-decoration:underline;
}

.ie#mod-resourcepage-view .editing #left-column {
	height:20px;
}
.ie#mod-resourcepage-view .editing .rp_cannedtop {
	margin-bottom:0;
}
.ie#mod-resourcepage-view	.editing .rp_cannedbuttons {
	margin-top:0;
}
/* All the styles regarding SC are now moved to mod/oucontent/styles.php */

/* Module: quiz */

#mod-quiz-view .quizinfo {
  text-align: left;
}
#mod-quiz-view #intro {
  margin: 0;
  padding: 0;
  width: auto;
  border: none;
}

#mod-quiz-view #page .quizattemptsummary {
  margin-left: 0;
}
#mod-quiz-view #page .quizgradefeedback,
#mod-quiz-view #page .quizattempt
{
  text-align: left;
}
#mod-quiz-view .generalbox#feedback {
  margin-left: 0;
  margin-top: 1em;
}
body#mod-quiz-view .generalbox#feedback .overriddennotice {
  text-align: left;
}
#mod-quiz-attempt #page {
  text-align: left;
}
#mod-quiz-review #left-column,
#mod-quiz-attempt #left-column {
    float:left;
}
body#question-preview .quemodname,
body#question-preview .controls
{
  text-align: left;
}
body#question-preview .quemodname, body#question-preview .controls {
  text-align: left;
}
#mod-quiz-attempt #page .controls,
#mod-quiz-review #page .controls {
  text-align: left;
}
#mod-quiz-edit #page .controls,
#mod-quiz-edit #page .quizattemptcounts
{
  text-align: left;
}
.quizquestionlistcontrols {
  text-align: left;
}
#mod-quiz-report table#attempts,
#mod-quiz-report table#commands,
#mod-quiz-report .mform,
#mod-quiz-report .boxaligncenter {
  margin-left: 0;
}
#mod-quiz-report .mdl-align {
  text-align: left;
}
#mod-quiz-report table.titlesleft td {
  text-align: left !important;
}
#mod-quiz-report table#attempts .picture {
  text-align: left;
}
#mod-quiz-report .controls {
  text-align: left;
}
.quizattemptcounts {
  text-align: left;
}
.heading-with-help,
.block_questions_navigation .qn_summary,
.qn_nextlink a,
.qn_showall a {
    color:  #003366;
}

#quiznavigation .content {
    padding-right: 0;
}
#quiznavigation .qnbutton {
  width: 1.9em;
  height: 1.9em;
  line-height: 1.9em !important;
}

#mod-quiz-quizsummary .heading-with-help {
    text-align: center;
}

table.quizreviewsummary {
  margin-bottom: 1.8em;
  width: 100%;
}

table.quizreviewsummary th.cell {
  padding: 3px 0.5em 3px 1em;
  font-weight: bold;
  text-align: right;
  width: 10em;
  background:  #B8DBFF;
  border-top: 0 none #B8DBFF;
  border-bottom: 0 none #B8DBFF;
  border-left: 0 none #B8DBFF;
  border-right: 5px solid white;
}
table.quizreviewsummary td.cell {
  padding: 3px 1em 3px 0.5em;
  background: #DBEDFF;
  border: 0 none #DBEDFF;
}

table.quizattemptsummary th.cell {
  border: 1px solid #73003C;
  font-size: 1em;
  font-weight: bold;
  color: red;
  background-color:#bbb;
  background-image: url('img/ltblue-corner-br.png');
  background-repeat: repeat-x;
  background-position: top left;
}   


table#attempts th,
table#responses th {
  font-size: 1em;
  font-weight: bold;
}

.que .prompt {
  display: none;
}
.que .info .grade {
  margin-top: 1.5em;
}
.que div.qtext{
  padding-top: 5px;
}
.que.multichoice .prompt {
  display: block;
}
.que.oumultiresponse .prompt {
  display: block;
}
.que .adaptive_feedback {
  margin-top: 0.5em;
}
.que .feedback
{
  border: none;
  padding: 0;
}
.calculated .answer input,
.numerical .answer input,
.shortanswer .answer input {
  width: 35em;
}
body#mod-quiz-attempt #QuizTimer {
  display: none;
  float: left;
  clear: left;
  margin-top:0.5em;
  text-align: left;
  width: 100%
}
body#mod-quiz-attempt #QuizTimer #time {
  width: 5em;
}

body#mod-quiz-attempt #middle-column,
body#mod-quiz-review #middle-column {
  padding-right: 0;
}
#mod-quiz-attempt #layout-table,
#mod-quiz-attempt #responseform,
#mod-quiz-review #responseform {
    margin: 0;
}
#mod-quiz-attempt .tabtree,
#mod-quiz-review .tabtree {
    margin-bottom: 1.8em;
}
#mod-quiz-attempt h2.main,
#mod-quiz-review h2.main {
    margin-top: 0;
}
#mod-quiz-attempt #footer {
    margin-top: 15em;
}

#mod-quiz-report .groupselector {
    float: none;
}

/* Module: oublog */
#mod-oublog-view .block_adminblock {
    display:none;
}
.oublog-title {
    font-size: 1.5em;
    font-weight:normal;
    padding-bottom:4px;
    border-bottom:#aaa 1px solid;
    margin:0 0 2px;
}
.oublog-post, 
.oublog-comment {
    border:none;
    padding: 0 0 1px;
}
.oublog-post-links a {
	  margin-right:10px;
}
.oublog-deleted,
.oublog-deleted .oublog-post-content a {
    color: #aaa;
	  padding-bottom:5px; 
}

#oublog-tags a:link,
#oublog-tags a:visited,
#oublog-tags a:active {
	  color:black;
}
#oublog-tags .oublog-tagcount {
    color: #707070;
}
#mod-oublog-viewpost h2 {
    font-size:100%;
}
.oublog-comment .oublog-comment-date,
.oublog-comment .oublog-posted-by {
    font-size: 0.85em;
    display:inline;
}
.oublog-comment h3 {
    font-weight: normal;
    padding-bottom: 4px;
    border-bottom: 1px dotted #aaa;
    margin: 0 0 0.5em;
}


/* Module: grade */

.grade-edit-scale .buttons {
  text-align: left;
}
.grade-edit-outcome .buttons {
  text-align: left;
}
.importoutcomenofile .singlebutton {
    text-align: left;
}
.grade-edit-tree .gradetreebox {
  margin-left: 0;
}
.grade-edit-tree .buttons {
    text-align: left;
}
#grade-report-toggles {
  text-align: left;
}

.gradeexportlink {
  text-align: left;
  margin-left: 0;
}
table#user-grade,
table.user-grade {
  margin-left: 0;
}

#hiddentooltiproot, .tooltipDiv {
    display: none;
}

/* Module: MyReferences*/
#refcontent .main-title{
	color: #003366;
}
#refcontent .ref_list table td, #refcontent .ref_list table th{
	border: 1px solid #B8D8FF;
}
#refcontent .foldercontainer{
	border: 1px solid #B8D8FF;
}
#refcontent #dormant_accounts_table, #refcontent #dormant_accounts_table td{
	border-color: #B8D8FF;
}
#refcontent .sharedaccountstable td, #refcontent .sharedaccountstable th{
	border-color: #B8D8FF;
}

/* Misc: References filter */
.reference_filter{
}
.reference_filter_item{
	padding-bottom:1em;
}
.reference_filter_item h2{
	font-size: 1.2em;
}
.reference_filter_item select{
	margin-right:.5em;
}
.ie6 .reference_filter_item input{
	height:auto;	
}
/* Misc: Audio resources */
.audioresources_track a {
  text-decoration:none;
  color:black;
  font-weight:bold;
}
.audioresources_track a:hover {
  text-decoration:underline;
}
.audioresources_track span.mediaplugin {
  display:block;
  margin:2px 0 0;
}
.audioresources_size {
  font-size:0.85em;
}

/* Module: glossary */
.singlebutton.glossaryaddentry {
	text-align:center;
}

#mod-glossary-showentry #page {
	min-width:0;
}
#mod-glossary-showentry #ou-topbar,
#mod-glossary-showentry #ioemenu,
#mod-glossary-showentry #ioemenu2,
#mod-glossary-showentry #navbar,
#mod-glossary-showentry #ou-footerf {
	display:none;
}

a.autolink.glossary{
    border-bottom:1px dotted #003366;
    text-decoration: none;
    background:none;
    color:#003366;
}

/* Misc: Filesize */
small.filesize {
	font-size:0.85em;
	color:#555;
}

/* Misc: server name */
.debug-servername {
  position:absolute; 
  top:42px; 
  left:90px; 
  z-index:10; 
  color:#d8d8d8; 
  font:bold 40px Verdana, sans-serif;
}
#mod-glossary-showentry .debug-servername {
	display:none;
}

/* Misc: availability */
#course-view .availabilityinfo, 
.dimmed_text, 
.dimmed_text a {
  color:#4e4e4e;
}

/* Shared activity header link */
a.sharedactv_headerlink:link,
a.sharedactv_headerlink:visited {
	text-decoration:none;
}
a.sharedactv_headerlink:hover {
	text-decoration:underline;
}

/* Misc: user profile */
.profile-infobox {
  width: 500px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 1em;
  background: #F7F0D9;
  background-image: url('img/ftyellow-corner-tl.png');
  background-position: top left;
  background-repeat:no-repeat;
  padding:10px;
  position:relative;
}
.profile-infobox ul {
  line-height: 1.5;
  margin: 2px 0 0;
  padding-left: 0;
  margin-left:0;
}
.profile-infobox li {
  margin-left: 1.3em;
  padding-left: 0;
}
.profile-infobox p {
  font-style: italic;
}
.profile-infobox .outheme-corner1 {
  position: absolute;
  right: 0;
  top: 0;
  background-image: url('img/ftyellow-corner-tr.png');
  width: 5px;
  height: 5px;
}
.profile-infobox .outheme-corner2 {
  position: absolute;
  right: 0;
  bottom: 0;
  background-image: url('img/ftyellow-corner-br.png');
  width: 5px;
  height: 5px;
}
.profile-infobox .outheme-corner3 {
  position: absolute;
  left: 0;
  bottom: 0;
  background-image: url('img/ftyellow-corner-bl.png');
  width: 5px;
  height: 5px;
}
.profile-infobox h3 {
  font-size: 100%;
  margin: 0;
}
.profile-infobox p {
  margin-bottom: 0;
}

/* Misc: External dashboard buttons */
.external-dashboard-favourites {
    margin: 1em 0;
}
#external-dashboard-add {
    background: #B8DBFF;
    background-image: url('img/ltblue-corner-tl.png');
    background-position: top left;
    background-repeat: no-repeat;
    padding: 6px 7px ;
    float: left;
    position: relative;
    font-size: 0.85em;
}
#external-dashboard-add div {
    position: absolute;
    width: 5px;
    height: 5px;
}
.external-dashboard-1 {
    top: 0;
    right: 0;
    background-image: url('img/ltblue-corner-tr.png');
}
.external-dashboard-2 {
    bottom: 0;
    right: 0;
    background-image: url('img/ltblue-corner-br.png');
}
.external-dashboard-3 {
    bottom: 0;
    left: 0;
    background-image: url('img/ltblue-corner-bl.png');
}
#external-dashboard-add a {
    color: black;
    text-decoration: none;
    background-position: center left;
    background-repeat: no-repeat;
    padding-top:2px;
    padding-bottom:2px;
}
#external-dashboard-add a:hover {
    text-decoration: underline;
}

.computing-guide{
    float:right;
    margin-bottom: 5px;
}
.computing-guide a {
    text-decoration: none;
}
.computing-guide a span{
    text-decoration: underline;
}

#footer .mobile-footer {
    margin:0 7px;
    text-align:left;
}

#admin-report-externalquiz-index .aborted,
#admin-report-externalquiz-index .active,
#admin-report-externalquiz-index .ready,
#admin-report-quiz-index .aborted,
#admin-report-quiz-index .active,
#admin-report-quiz-index .ready {
        color: #aaa;
}
#admin-report-externalquiz-index .wfname,
#admin-report-quiz-index .wfname {
        font-size: 0.7em;
}

/* Admin page styling */ 

.ie7#admin-user #id_realname_op {
    margin-right: 0.8em;
}

/* styles for use with collapsable and expanding menus in the course/index.php */

SPAN.dimmed {
    color:#555;
}

.categorytree {
  text-align:left;
}

.categorytree .ptcell{
    text-align:center;
}

.categorytree .depth1 {
  padding-left: 16px;
}

.categorytree .depth2 {
  padding-left: 32px;
}

.categorytree .depth3 {
  padding-left: 48px;
}

.categorytree .depth4 {
  padding-left: 64px;
}

.categorytree .depth5 {
  padding-left: 80px;
}

.categorytree .depth6 {
  padding-left: 96px;
}

.ie9sigh {
    font-size: 0.85em;
    max-width: 50em;
    margin: 1em auto;
    background: #ccc;
    color: black;
    padding: 10px;
    text-align: left;
}/***** ou/outheme.css end *****/

