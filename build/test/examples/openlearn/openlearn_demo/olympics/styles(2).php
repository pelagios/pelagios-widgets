/**************************************
 * THEME NAME: oci
 *
 * Files included in this sheet:
 *
 *   oci/ocilayout.css
 **************************************/

/***** oci/ocilayout.css start *****/

/**
 * OCI LearningSpace theme stylesheet.
 *
 * @copyright &copy; 2006 The Open University
 * @author j.beedell@open.ac.uk
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package theme
 *
 * Note this stylesheet inherits from VLE.
 * Note IE6 does not recognise '//' comments so only use '/star star/'.
 */

/* General */
.paradefault, .sourcereference, .activity, .listitem {
   font-family: Tahoma,"Lucida Grande",Arial,Helvetica,sans-serif;

}
h1, h2, h3 {
   font-weight:bold;
   font-family: "Myriad Pro",candara,tahoma,"Lucida Grande",arial,helvetica,sans-serif;
}
h1 {
    font-size:1.05em;
    margin-bottom:1px;
    color:#4B5F4B;
}
h2 {
    font-size:1em;
    margin-bottom:3px;
    margin-top:1px;
    color:#005aa4;
}
h3 {
    font-size:0.95em;
    margin-bottom:3px;
    margin-top:1px;
    color:#005aa4;
}
p {
    margin:12px 0;
}
ul, ol, pre {
    margin-bottom:0.5em;
    margin-top:0.5em;
}
#page {
    margin-left: auto;
    margin-right: auto;
    width: 980px !important;
}

#content {
    margin:5px 5px 0px 5px;
    font-family: Tahoma,"Lucida Grande",Arial,Helvetica,sans-serif;
}
.ie#mod-oucontent-view #content {
    margin-top:5px;
}
.oucontent-copyright {
    display:none;
}
.paradefault {
    font-size:0.95em;
    font-weight:normal;
    text-align:justify;
    margin-bottom:6px;
    margin-top:2px;
    color:#333333;
}
.sourcereference  {
    font-size: 1em;
    text-align:right;
    margin-bottom: 3px;
    margin-top: 2px;
    color:#333333;
}
.activity {
    font-weight:normal;
    text-align:justify;
    margin-right:20px;
    margin-left:20px;
    margin-bottom:2px;
    margin-top:3px;
    color:#4B5F4B;
}
.listitem {
    font-size:0.95em;
    font-weight:normal;
    text-align:justify;
    margin-right:15px;
    margin-bottom:1px;
    margin-top:2px;
    color:#333333;
}
.gap2 {
    text-align:center;
    margin-top:2px;
    margin-bottom:2px;
}
.boxcontent {
    border:outset 1pt black;
    margin-bottom:10px;
    margin-top:10px;
    padding:6px;
    background-color:#D9F3F3;
}
.generalbox, .generalboxcontent {
    border-color:#DDDDDD;
}
.box .categorybox {
    border:1px solid #DDDDDD;
    margin:0 auto;
    padding:10px;
    text-align:left;
    width:90%;
}
.heading-with-help {
    text-align:center;
}
.generaltable {
    border:1px solid #EEEEEE;
}
.indent {
    padding-left:20px;
}


/* Header */
#ociheadermargin {
    margin:0px;
    margin-right:0px;
    height:175px;
    background-image:url(olympics/banner_bg02.jpg);
    /*background-repeat:repeat-x;
    background-position:top left;*/
}
.header_logo{
  /*  background:white;
    background-image:url(olympics/learningspacebanner_repeat.gif);
    background-repeat:repeat-x;
    background-position:bottom left;
    margin-bottom:3px;
  */
    float:left;
}
.header_logo_div{
    margin-left:167px;
    float:left;
}
.header_logo img {
    margin-right:0px;
    margin-left:auto;
    display:block;
}
.breadcrumb {
    font-family: Tahoma,"Lucida Grande",Arial,Helvetica,sans-serif;
    color:black;
}
#header clearer {
    font-size:0;
    height:auto;
}
#header .headermain {
    color:black;
    font-size:1.4em;
    font-size:1.65em; /*Myraid Pro */
    font-weight:normal;
    border-bottom:none;
    margin:0;
    padding:4px 6px 4px 6px;
}
.hidden_logo{
    width: 182px;
    height: 24px;
    background-image: url(images/under_review_min.png);
    margin-top: 5px;
    position: absolute;
    top: 140px;
}
#badge-logo.oci_archive {
    width: 150px;
    height: 25px;
    margin-top: 8px;
    margin-left: 4px;
    background-image: url(olympics/archive-text-icon.png);
}
#acct-header {
    font-weight: bold;
    font-size: 2em;
    color: red;
    position: absolute;
    top: 100px;
}
.logindetails {
    margin:6px 2px 2px 2px;
}
.myMoodleLink {
    padding:0 0 0 6px;
}
#navbar.navbar {
    /*background-image:url(olympics/crumb.jpg);
    background-repeat:repeat-x;
    background-position:right bottom;
    background-color:#F0F4F7;*/
    border:none;
    border-top:1px solid #CCCCCC;
    margin:0;
    /* min-height:40px; */
    padding:3px 0.5em;
}
ie6 #navbar.navbar { /* hack for ie6 - note it requires both position and display to work */
    position:relative;
    display:inline-block;
}
.navbar .breadcrumb {
    margin:0 0 2px 7px;
    font-weight:bold;
    font-size:0.95em;
}
.breadcrumb .sep {
   /*  color:#F0F4F7;  note change to using vle breadcrumb separator*/
    color:#aaaaaa;
}
.breadcrumb .arrow {
    background:none;
    margin-right: 0px;
    padding-left:0px;
    top:0px;
}
#header img.iconhelp, .navbar img.iconhelp, #coursesearchform img.iconhelp, #coursesearchform2 img.iconhelp {
    /*could consider just having img.iconhelp as the selector here, and setting position:static for forms*/
    position:relative; 
    top:-3px;
}
.adv_search_link {
    display:none;
    margin-left:5px;
}

#course-search .adv_search_link {
    display:inline-block;

}
#coursesearchform {
    /*white-space:nowrap;
    text-align:right;*/
    display:inline-block;
    margin-top:3px;
    margin-right:10px;
}
#mod-oucontent-view .adv_search_link {
    display:none;
}


/* Footer */
.noshade {
    background-color:#9E9E9E;
    border:0 none;
    height:1px;
}
.div_right {
    text-align:right;
}
#creativeCommonsFooter {
    padding-right:15px;
    text-align:right;
}
#creativeCommonsFooter img {
    border-width:0;
    float:right;
    margin-left:5px;
}


/* Blocks */
.sideblock {
    border:none;
    background:none;
    margin:0 0 10px 0;

}
.sideblock li {
    font-size:0.9em;
}
.sideblock.oucontent-contents li{
    font-size:1em;
}

.sideblock .title, #mod-oucontent-view .sideblock.oucontent-contents .header  {
    margin:0;
    background-image:none;
    background-color:transparent;
}
.sideblock .header, .sideblock.oucontent-contents .header{
    background-color:transparent;
    background-image:none;
    background-repeat:repeat-x;
    background-position:left bottom;
    border: 1px solid #f7f7f7;
    border-top:1px solid #EEEEEE;
    border-bottom:none;
    padding:5px 5px 5px 5px;
    margin:0;
}
.sideblock .content, .sideblock.oucontent-contents {
    background-color:transparent;
    background: url("images/aroundTheSiteBg.gif") repeat-x scroll left bottom transparent;
    border: 1px solid #f7f7f7;
    border-top: none;
    -moz-border-radius-bottomleft:0;
    -moz-border-radius-bottomright:0;
    padding-bottom:10px !important;
    font-family:Tahoma,"Lucida Grande",Arial,Helvetica,sans-serif;
    line-height:1.5em;
    font-size:1em;
}
.sideblock h2,  .sideblock.oucontent-contents  h2 {
    background:none;
    font-family:"Myriad Pro", Verdana;
    color: #171F21;
    padding:0;
    font-size:1em;
    font-weight:normal;
    display:inline;
    line-height: 1.2em;
    font-size: 1.5em;
    width:160px;
}
.yui_menu_tree .highlight {
    background-color:white;
}
.sideblock .header .commands {
    background-image:none; 
    padding:0;
}
.sideblock .header .hide-show-image {
    margin:4px 0 0 0;
    height:18px;
    width:20px;
    display:inline-block;
    float:right;
}


/* Links */
a:link, a.dimmed:link {
    color:#005aa4;
    text-decoration:none;
}
a:visited, a.dimmed:visited {
    color:#005aa4;
    text-decoration:none;
}
a:hover, a.dimmed:hover {
    text-decoration:underline;
}
a:visited:hover { /*IE6 hover - only one hover colour enabled*/
    color:#005aa4;
    text-decoration:underline;
}
#header a, #navbar a {
    color:black;
}
#header .headermain a {
    color:black;
}
.sideblock a {
    line-height:1.4em;
}
.sideblock .list .column a, #mod-oucontent-view .sideblock ul a {
    color:#005aa4;
}
.studyplan-format li.activity a, a.arrow_link:link, a.arrow_link:visited {
    color:#4b82d1;
}
#mod-oucontent-view #middle-column .arrow_text, #mod-oucontent-view #middle-column .arrow  {
    color:#005aa4;
}
table.forumpost td.content .commands a, #mod-forum-view table a, .generaltable td.cell a {
    color:#005aa4;
}
#mod-forum-view .subscription .helplink a, #mod-forum-view .subscription .helplink a:hover {
    color:#005aa4;
    background:white none; /*removes the nice vle arrows*/
}
.tabrow0 a, .tabrow0 a:visited {
    color:#005aa4;
}
.tabtree a.nolink {
    font-weight:bold;
}


/* Forms */
form.mform {
    background:white none repeat scroll 0 0;
    padding:0;
}
form div.ou-corner-tr, form div.ou-corner-bl, form div.ou-corner-br {
    background:transparent none;
}
form.mform fieldset {
    border:1px solid #DDDDDD;
}
form.mform .fdescription.required {
    text-align:right;
    color:#AA0000;
}
form, .invisiblefieldset {
    display:inline;
}


/* OUBlog and ForumNG and OUWiki */
.forumng-post {
    border:1px solid #AAAAAA;
    margin-bottom:1em;
    padding:0.5em;
}
.forumng-post.forumng-read, 
.generaltable th.header.c0, .generaltable th.header, .generaltable th.header.lastcol {
    background:white none;
}
.generaltable td.cell, .generaltable td.cell.c0, .generaltable td.cell.lastcol,
.generaltable th.header.c0, .generaltable th.header, .generaltable th.header.lastcol {
    border:1px solid #DDDDDD;
    padding:1px;
}
.oublog-post-links, .oublog-post-date {
    float:right;
}
.oublog-postedby {
    display:inline;
}
.ouw_topheading {
    background-color:#D9F3F3; 
}


/* Oucontent*/
#mod-oucontent-view .oucontent-title-0 {
    font-size: 1.55em; /* Myrade Pro */
    font-weight:normal;
}
#mod-oucontent-view .oucontent-title-1 {
    font-size: 1.2em;
    font-size: 1.45em; /* Myrade Pro */
}
.oucontent-prev {
    float:right;
    margin-bottom:0.1em;
}


/* Tables */
#mod-resource-view #content .tableprop td.tablerowvalues,
#mod-resource-view #content .tableprop td.tablerowtitle,
#mod-resource-view #content th, #mod-resource-view #content td {
    border:0px;
}
#mod-resource-view #content table.tableprop td, #mod-resource-view #content table.accounts td {
    padding:1px 10px;
}
table.tableprop, table.accounts {
    border: outset 1pt black;
    background-color:#003300;
    margin-bottom: 12px;
}
td.tablerowtitle {
    font-family: verdana, sans-serif;
    font-size: 1em;
    font-weight: bold;
    vertical-align:top;
    color: #FFFFFF;
    background-color:#4B5F4B;
}
td.tablerowvalues, #mod-oucontent-view .oucontent-table td {
    font-family: verdana, sans-serif;
    font-size: 1em;
    font-weight: normal;
    vertical-align:top;
    color: #4B5F4B;
    background-color: #D9F3F3;
}


/* Other pages - mainly overwriting the ou theme */
.search_holder {
    margin-bottom:10px;
    margin-top:10px;
    text-align:center;
}
.categorylist {
    width:100%;
}
.coursebox .info {
    width:42%;
}
.coursebox .summary {
    width:54%;
}
#content #middle-column.has-left-column {
    padding-left:15px;
    padding-right:15px;
}
#middle-column .outline {
    display:none;
}
#course-view #middle-column .section .side, #course-view .section td.content {
    background:none;
    border:none;
}
#course-view #middle-column .topics .oddrow td.content {
    border-bottom:1px solid #EAEAD5;
    border-top:1px solid #EAEAD5;
    padding:4px;
}
#course-view ul.section li.label_header {
    font-size:0.95em;
}
#course-view ul.section li.label_text {
    font-size:1.1em;
    line-height:1.2em;
    margin-top:0.5em;
}
#course-view .studyplan-format h2.studyplantop, 
#course-format-studyplan-calendars h2.studyplantop, 
#course-view .studycal-format h2.studycaltop, 
#course-format-studycal-calendars h2.studycaltop {
    /*background:#666666 none repeat scroll 0 0;*/
    background: none;
    color:#333333;
    font-size:1.6em;
    font-weight: normal;
    margin:0 0 0 3px;
    padding:0 4px 0 4px;
}
#mod-resource-view #content #middle-column {
    padding-left:50px;
    padding-right:100px;
}
#mod-resource-view #content table {
    margin:0;
}
#mod-resource-view #content td, #mod-resource-view #content th {
    line-height:1.4em;
    padding:0;
}
.studyplan-format .studyplantopbar {
    background: none;
    border:none;
    padding-top:0px;
}
.studyplan-format h2.studyplantop .studyplancorner,
.studyplan-format .studyplantopbar div.studyplancorner, 
.studyplan-format .studyplanbottombar div.studyplancorner,
.studyplan-format .studyplancontentbg1,
.studyplan-format.editing .studyplantopbar .studyplancorner,
.studyplan-format.editing .studyplantopbar .studyplancorner2,
.studyplan-format.editing .studyplantopbar .studyplancorner3 {
    background-image:none;
}
.studyplan-format #middle-column li.studyplansection,
.studyplan-format tr.studyplansection, 
.studycal-format #middle-column li.studycalsection, 
.studycal-format tr.studycalsection,
.studyplan-format td.studyplancontent,
.studyplan-format .studyplancontentdeco2,
.studyplan-format .studyplancontentdeco3,
.studyplan-format .studyplancontentdeco4 {
    background:#FFFFFF none repeat scroll 0 0;
}
.studyplan-format .studyplanheadingbar {
    background:transparent none;
    border-color:transparent;
    margin:-8px;
    padding:0;
}
.studyplan-format .studyplancontentbg2 {
    display:none;
}
h1.main, h2.main, h3.main, h4.main, h5.main, h6.main {
    text-align:center;
}
.main, .heading-with-help, .block_questions_navigation .qn_summary, .qn_nextlink a, .qn_showall a {
    color:#005aa4;
}
div.singlebutton {
    text-align:center;
}
.studyplan-format .activity.label img {
    max-width:360px; /*ou theme is max-width:247px;*/
}
.tabrow0 {
    font-size:1em;
}
.padded {
    padding:0 20px;
}
.force-right, .singlebutton {
    text-align:right;
}
#course-category .force-right .singlebutton {
    text-align:right;
}
.activity.label_text {
    text-align:left;
}
#mod-oucontent-view .sideblock.oucontent-contents {
    background-color:transparent;
}
#mod-oucontent-view #oucontent-autobookmark,
#oucontent-autobookmark,
#mod-oucontent-view #oucontent-autobookmark .oucontent-deco1,
#mod-oucontent-view #oucontent-autobookmark .oucontent-deco2,
#mod-oucontent-view #oucontent-autobookmark .oucontent-deco3
{
    background:#D9F3F3 none;
}
#mod-oucontent-view h1,
#mod-oucontent-view h2,
#mod-oucontent-view h1.oucontent-second-heading {
    color:#005aa4;
}
#mod-oucontent-view .oucontent-s-heavybox1 .oucontent-inner-box,
#mod-oucontent-view .oucontent-s-normal {
    background:#D9F3F3;
    border:none;
}
#mod-oucontent-view .sideblock h2, #mod-oucontent-view .sideblock.oucontent-contents h2 {
    color:#171F21;
}
#mod-oucontent-view .oucontent-s-heavybox1 h3, #mod-oucontent-view .oucontent-s-gradient {
    background:none;
}
#mod-oucontent-view .oucontent-matching-focus  {
    border:none;
}
#mod-oucontent-view .oucontent-saq-toggle-link {
    background:#FFFFFF none;
}
#mod-oucontent-view .oucontent-s-siderule {
    border-left-color:#D9F3F3;
}
#mod-oucontent-view .oucontent-s-hollowbox h3, 
#mod-oucontent-view .oucontent-s-box .oucontent-reading.oucontent-s-box h3 {
    border-bottom-color:#005aa4;
    color:#005aa4;
}
#mod-oucontent-view .oucontent-reading h3, 
#mod-oucontent-view .oucontent-reading .oucontent-inner-box h4, 
#mod-oucontent-view .oucontent-reading .oucontent-inner-box h5 {
    color:#005aa4;
}
.search_dashed_line {
    border-bottom : 1px dashed #000;
    border-top    : 0px;
    border-left   : 0px;
    border-right  : 0px;
}
.search_result_container {
    line-height : 20px;
}
.search_full_width {
    width : 100%;
}
.search_inner_container {
    margin    : 0 auto;
    width     : 80%;
    min-width : 600px
}
.search_keyword_col {
    padding : 5px;
    width   : 28%;
    float   : left;
    margin  : 10px
}
.search_margin_bottom {
    margin-bottom : 5px;
}
.search_icon {
    float        : left;
    margin-right : 5px
}
.search_delete {
    float        : left;
}


/* Old Blog and Forum - Maybe not needed */
.forumheaderlist, .forumpost {
    border-color:#DDDDDD;
}
table.forumpost tr.header td.topic {
    background:#DDDDDD none;
}
table.forumpost td.content {
    border-color:#DDDDDD;
    border-style:none solid solid;
    border-width:medium 1px 1px 5px;
}
#page .forumpost .content, #page .forumpost.unread .content, #page .forumpost .topic {
    border-left:10px solid #DDDDDD;
}
#page .forumpost .content {
    padding:4px 8px 8px;
}
#mod-forum-view #intro {
    border:1px solid #DDDDDD;
    margin:0 auto 15px auto;
    padding:10px;
    width:70%;
}
#mod-forum-view .forumheaderlist {
    margin-top:1em;
}
.forumheaderlist, .forumpost, #mod-forum-view table {
    border:1px solid #DDDDDD;
    background:white none;
}
#mod-forum-view th {
    font-size:1em;
    font-weight:bold;
    padding-bottom:1px;
}
#mod-forum-view td.topic {
    background:#DDDDDD none;
}
#mod-forum-view td {
    background-image:none;
}
#mod-forum-view .forumheaderlist th, #mod-forum-view .forumheaderlist td {
    border:0 none;
    padding:2px 4px;
}
#mod-forum-view td.picture .userpicture {
    display:block;
}
#mod-forum-view .subscription {
    margin:5px 0;
    text-align:right;
}
#mod-forum-view .subscription .helplink {
    font-size:0.8em;
}
.rightsinfo_hide {
    display:none;
}


/* Login - Probably not be needed at all??? */
.loginbox fieldset {
    border-style:solid;
    border-width:1px;
    margin:20px;
    padding:10px;
}
.loginbox fieldset {
    background-color:#FCFCFC;
}
.loginbox legend {
    font-weight:bold;
}
.loginbox label.neat {
    display:block;
    float:left;
    font-weight:bold;
    margin-right:10px;
    padding-left:10px;
    padding-top:0.2em;
    text-align:right;
    width:170px;
}
.loginbox .fieldhelp {
    color:#414141;
    font-size:smaller;
    padding-left:180px;
}
.loginbox .actiondivbutton {
    margin-left:35%;
}
.loginbox .actiondiv {
    text-align:center;
}


/* New stuff */
body.ie7 tr.studyplansection td.studyplancontent .studyplancontentdeco1 div {
    border:none;
}
#footer, #ou-row6, #ou-footerf {
    background-color:#ffffff;
}
#div_header #header {
    background-image:url(olympics/head_bar_bg.jpg);
    background-position:center top;
    background-repeat:repeat-x;
    padding:2px 5px 0;
    background-color:transparent !important;
}
body {
    background-color:white !important;
    }
/*body {
    background-image  : url(olympics/banner_bg01.jpg) !important;
    background-repeat : no-repeat  !important;
    background-position:center top !important;
    background-attachment:scroll !important;
}*/
div#footer {
    margin-top:0;
    padding-top:40px;
    padding-bottom:10px;
    margin-left: auto;
    margin-right: auto;
    width: 980px !important;
}
#org-footer {
    margin-left: auto;
    margin-right: auto;
    width: 980px !important;
}
#mod-resource-view div#footer {
   margin-top:0;
}
div#footer p {
    padding-top:10px;
    margin:0;
}
div#ou-footerf {
    margin:0 !important;
    padding:30px 20px 0 20px;
}
.holder {
    padding-top:0;
    padding-bottom:12px;
}
#ouheader2 {
    font-weight:bold;
}
table, td, th, li, input, select, optgroup {
    font-family:Tahoma,"Lucida Grande",Arial,Helvetica,sans-serif;
}
.extra_buttons {
    float:right;
    margin-top:48px;
}
body.ie7 .search_forms {
    float:right;
}

body.ie7  .navbar .breadcrumb {
    display:block;
    width:900px;
}

body.ie7  #coursesearchform {
    float:right;
}
#hsheader {
    margin-bottom:5px !important;
}
#site-index  .mceItemTable td {
    padding-right:10px;
}
.embedfilter {
    float:right;

}
.embedcontent.embedhidden {
    float:right;
    display:none;
}
#sbhstools {
    margin-bottom:0.9em !important;
}

.studyplantopbar {
    display:none;
}

.mod-oucontent .crumb_1 a {
    background: none repeat scroll 0 0 #285E6F;
    color: #FFFFFF !important;
    -moz-border-radius: 3px 3px 3px 3px;
    padding: 2px 0.7em;
}
.oucontent-altcontent {
    display:block;
}
.oucontent-alternatives h3 {
    font-weight:bold;
}
body.ie .borderlessimg {
    border:none;
}
.extra_buttons {
    margin-right: 5px;
}


/* Home page */
.ou-teaser {
    background:url("http://www.open.ac.uk/openlearn/sites/all/themes/ole/images/divider.gif") no-repeat scroll left bottom transparent;
    float: left;
    min-height: 110px;
    padding: 15px 0; 
    position: relative; 
    width: 100%; 
} 
.ou-teaser-image-wrap {
    width:185px;
    height:106px;
}
#ole-content {
    text-align: left;
}
.ou-teaser .teaser-col2 {
    left: 0;
    position: absolute;
    top: 15px;
    width: 195px;
}
.ou-teaser-image-wrap {
    float: left;
    margin: 0;
    overflow: hidden;
    position: relative;
    width: 185px;
}
.ou-teaser .teaser-col1 {
    margin: 0 0 0 215px; 
}
#ole-content a {
    color: #005AA4;
    outline: medium none;
    text-decoration: none;
}
#ole-content .ou-teaser h2, #ole-content .views-field-title h2 {
    font-size: 1.4em;
    font-weight: normal;
    margin: 0;
    padding: 0 70px 0 0;
}
#ole-content h1, #ole-content h2, #ole-content h3 {
    color: #333333;
    font-family: "Myriad Pro",candara,tahoma,"Lucida Grande",arial,helvetica,sans-serif;
    font-size: 1.5em;
    font-weight: normal;
    line-height: 1.2em;
    margin: 0 0 0 0;
}
#site-index .breadcrumb  li{
    display:none;
}
/***** oci/ocilayout.css end *****/

