/**************************************
 * THEME NAME: standard
 *
 * Files included in this sheet:
 *
 *   standard/styles_layout.css
 *   standard/styles_fonts.css
 *   standard/styles_color.css
 *   standard/styles_moz.css
 *   /mod/assignment/styles.php
 *   /mod/audiorecorder/styles.php
 *   /mod/choice/styles.php
 *   /mod/data/styles.php
 *   /mod/dataplus/styles.php
 *   /mod/elluminatelive/styles.php
 *   /mod/forum/styles.php
 *   /mod/forumng/styles.php
 *   /mod/lesson/styles.php
 *   /mod/oublog/styles.php
 *   /mod/oucontent/styles.php
 *   /mod/ouelluminate/styles.php
 *   /mod/ouwiki/styles.php
 *   /mod/questionnaire/styles.php
 *   /mod/quiz/styles.php
 *   /mod/repeatactivity/styles.php
 *   /mod/repository/styles.php
 *   /mod/resourcepage/styles.php
 *   /mod/scorm/styles.php
 *   /mod/vielluminate/styles.php
 *   /mod/workshop/styles.php
 *   /blocks/assessment/styles.php
 *   /blocks/blog_tags/styles.php
 *   /blocks/calendar_month/styles.php
 *   /blocks/calendar_upcoming/styles.php
 *   /blocks/choice_menu/styles.php
 *   /blocks/course_summary/styles.php
 *   /blocks/glossary_reuse/styles.php
 *   /blocks/hawthorn/styles.php
 *   /blocks/login/styles.php
 *   /blocks/navigation/styles.php
 *   /blocks/news_items/styles.php
 *   /blocks/newsfeed/styles.php
 *   /blocks/oufeedbackform/styles.php
 *   /blocks/ousearch/styles.php
 *   /blocks/quiz_results/styles.php
 *   /blocks/related_units/styles.php
 *   /blocks/rss_client/styles.php
 *   /blocks/search_forums/styles.php
 *   /blocks/studenthome/styles.php
 *   /blocks/tags/styles.php
 *   /blocks/workflow/styles.php
 *   /blocks/yui_menu/styles.php
 *   /course/format/sharedactv/styles.php
 *   /course/format/studycal/styles.php
 *   /course/format/studyplan/styles.php
 *   /grade/report/grader/styles.php
 *   /grade/report/ouuser/styles.php
 *   /grade/report/user/styles.php
 **************************************/

/***** standard/styles_layout.css start *****/

/*******************************************************************
 styles_layout.css

 This CSS file contains all layout definitions like positioning,
 floats, margins, padding, borders etc.

 Styles are organised into the following sections:
  core
  forms
  header
  footer

  admin
  blocks
  blog
  calendar
  course
  doc
  grades
  login
  message
  notes
  mymoodle
  question
  tabs
  tags
  user

  various modules

*******************************************************************/


/***
 *** Core
 ***/

h1.main,
h2.main,
h3.main,
h4.main,
h5.main,
h6.main {
  text-align: center;
}

#layout-table {
  width:100%;
  border-collapse:separate;
  margin-top: 8px;
}

#layout-table #left-column,
#layout-table #middle-column,
#layout-table #right-column
{
  vertical-align:top;
}

#layout-table #middle-column {
  padding-left:12px;
  padding-right:12px;
}

.clearer {
  clear:both;
  margin:0;
  padding:0;
  height:1px;
  border:none;
  background:transparent;
  display:block;
}

.clearfix {
  min-width: 0;
  /* overflow: hidden; */
}

.clearfix:after {
  /* content: "<!-- -->";  */
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

#redirect {
  text-align: center;
  margin-top:10%;
}

#redirect #message {

}

#redirect #continue {

}

/* .clearfix {display: inline-table;} */

/* Hides from IE-mac \*/
/* ou-specific begins */
/* Comment out Moodle core code
* html .clearfix {height: 1%;}
.clearfix {display: block;}
*/
* html .clearfix {
  height: 1%;
  overflow: visible;
}
.clearfix {
  display: block;
}
/* ou-specific ends */
/* End hide from IE-mac */

.mdl-align {
  text-align: center;
}
.mdl-left {
  text-align: left;
}
.mdl-right {
  text-align: right;
}

.continuebutton {
  text-align: center;
}

form {
  margin-bottom:0;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

a img {
  border:none;
}

img.userpicture,
img.grouppicture {
  border: 0;
}

#grouppicture {
  text-align: center;
}

div.groupselector {
  float: left;
  margin-top: 3px;
  margin-bottom: 3px;
}

#addmembersform table {
  margin-left: auto;
  margin-right: auto;
}

.notifyproblem {
  text-align: center;
  padding: 10px;
}

.notifysuccess {
  text-align:center;
  padding: 10px;
}

.notifytiny {
  text-align:left;
  padding: 0;
}

.singlebutton form,
.singlebutton div {
  display:inline;
}

.box {
  clear: both;
}

.generalbox {
  border-width:1px;
  border-style:solid;
  margin-bottom: 15px;
  padding:10px;
}

.generalbox#intro {
  width:70%;
  margin-left:auto;
  margin-right:auto;
  padding-bottom:15px;
}

.boxaligncenter {
  margin-left:auto;
  margin-right:auto;
}

.boxalignright {
  margin-left:auto;
  margin-right:0;
}

.boxalignleft {
  margin-left:0;
  margin-right:auto;
}

.boxwidthnarrow {
  width: 30%
}

.boxwidthnormal {
  width: 50%
}

.boxwidthwide {
  width: 80%
}

.centerpara {
  text-align:center
}

.noticebox {
  border-width:1px;
  border-style:solid;
  padding:10px;
}

#notice.generalbox {
  width: 60%;
  margin-left:auto;
  margin-right:auto;
}

#notice .buttons {
  text-align:center
}

#notice .buttons div,
#notice .buttons form {
  display:inline;
}

#notice .singlebutton {
  text-align:center;
  padding: 5px;
  margin: 0px;
}

.errorbox {
  border-width:1px;
  border-style:solid;
  margin: 1em 15%;
  width: 70%;
  padding:10px;
}

.errorbox .title {
  padding: 5px;
}

.informationbox {
  border-width:1px;
  border-style:solid;
  padding: 10px;
}

.feedbackbox {
  border-width:1px;
  border-style:solid;
}

.feedbackby {
}

.feedback {
}

.rsslink {
  padding:  0 0 0 0.3em;
}

.printicon {
  padding:  0 0 0 0.3em;
}

.generaltable {
  border-width: 1px;
  border-style: solid;
}

.generaltable .cell {
  border-width: 1px;
  border-style: solid;
  border-collapse: collapse;
}

#participationreport .reporttable {
  text-align: center;
  margin-left:auto;
  margin-right:auto;
}

#participationreport {
  text-align: center;
}

#participationreport .modulename {
  font-weight: bold;
}

#participationreportselector {
  text-align: center;
}

#participationreportactions {
  text-align: center;
}

.initialbar {
  text-align: center;
}

#help .indent {
  margin-left:3em;
}

.closewindow,
#help .helpindex {
  text-align: center;
}

.tabledivider {
  border-width:1px;
  border-style:solid;
  border-left:0;
  border-right:0;
  border-top:0;
}

.sitetopic {
  margin-bottom:20px;
}

.sitetopiccontent {
  border-width:1px;
  border-style:solid;
}

.pagingbar {
  text-align:center;
}

table.formtable {
  margin: auto;
}

table.formtable tbody th {
  vertical-align: top;
}

table.formtable tbody td,
table.formtable tbody th
{
  padding: 5px;
}

table.formtable tbody .htmlarea td,
table.formtable tbody .htmlarea th
{
  padding: 0;
}

.flexible th
{
  white-space: nowrap;
}

.paging {
  text-align: center;
  margin: 10px 0 10px 0;
}

.unread {
  padding-right:2px;
}

.cell {
  vertical-align: top;
}

/* ou-specific begins (until 2.0) */
.heading-with-help {
  text-align:center;
  margin:0.83em 0;
}

.heading-with-help h2 {
  margin:0;
  display:inline;
}
/* ou-specific ends */


/* ou-specific begins */
/* Comment out Moodle core code
.helplink img {
  vertical-align: middle;
  margin: 0 2px;
  width: 17px;
  height: 17px;
}
*/

.invitehelp {
  text-align:center;
  display:inline;
}

.helplink img {
  vertical-align: middle;
  margin: 0 2px;
  width: 50px;
  height: 17px;
}

/* ou-specific ends */

img.emoticon {
  vertical-align: middle;
  width: 15px;
  height: 15px;
}

form.popupform,
form.popupform div {
  display: inline;
}

form.popupform label {
  margin-right: 0.5em;
}

.arrow_button {
  margin-top:3em;
}

.arrow_button input {
  padding:0.3em;
  overflow:hidden;
}

.groupmanagementtable td {
  vertical-align: top;
}

.groupmanagementtable p {
  text-align: center;
}

.groupmanagementtable select {
  width: 18em;
}

#group-groupings .buttons {
  margin: 20px;
  text-align:center;
}

#group-groupings .buttons .singlebutton {
  display: inline;
  padding: 5px;
}

#group-usersummary {
  width: 14em;
}

img.icon {
  vertical-align:middle;
  margin-right:4px;
  width:16px;
  height:16px;
  border:0px;
}

img.iconsmall {
  vertical-align:middle;
  margin-right:1px;
  width:11px;
  height:11px;
  border:0px;
}

img.iconhelp {
  vertical-align:middle;
  margin-right:4px;
/* ou-specific begins */
/* Comment out Moodle core code
  width:17px;
  height:17px;
*/
  width:16px;
  height:16px;
/* ou-specific ends */
  border:0px;
}

img.iconkbhelp {
  width:49px;
  height:17px;
  border:0px;
}

/*Accessibility: text 'seen' by screen readers but not visual users. Fixed for RTL languages, example Farsi. */
.accesshide {
  position:absolute;
  left:-10000px;
  font-weight:normal;
  font-size:1em;
}
.dir-rtl .accesshide {
  top:-30000px;
  left:auto;
}

.invisiblefieldset {
  display:inline;
  border:0px;
  padding:0px;
  margin:0px;
}

span.hide,
div.hide {
  display:none;
}

/***
 *** Forms
 ***/

.mform {
  margin: 0 auto;
  padding: 0;
  width: 80%;
}
.mform fieldset {
  border: 1px solid #DDDDDD;
  padding: 10px 0;
  margin: 0.7em 0;
  width:100%;
}
.mform fieldset.hidden, .mform fieldset.felement {
  border: 0;
}
.mform fieldset.felement {
  width: auto;
}
.mform fieldset legend {
  font-weight: bold;
  margin-left: 0.5em;
}
.mform fieldset .advancedbutton{
   width:100%;
   text-align:right;
}
.mform div.fitem {
  clear: both;
  width: 100%;
  min-height: 1.5em;
}

.mform .fitemtitle {
  display: block;
  float: left;
  width: 30%;
  padding: 0;
  margin: 5px 0 0 10px;
  text-align: right;
}

.mform .fitemtitle div{
  display: inline;
}

div.fitem fieldset.fgroup label, div.fradio label,  div.fcheckbox label,
fieldset.fdate_selector label {
  display:inline;
  float: none;
  width: auto;
}

.mform div.felement,  .mform fieldset.felement{
  display: block;
  float: left;
  margin: 5px 0 0 10px;
  padding: 0;
  text-align:left;
  width: 60%;
}

.mform div.fdescription {
  clear: both;
  min-height: 1.5em;
}

.mform .fdescription.required {
  text-align:right;
}

.mform input, .mform select {
  width: auto;
}
.mform .ftextarea #id_alltext {
    width: 100%;
}
.mform br {
  clear: left;
}
.mform div.fhtmleditor {
  margin: 0 auto 10px auto;
  width : 600px;
  clear:both;
  float:none;
  padding: 25px 0 20px 0;
}
.mform span.error, .mform span.required {
  color: red;
}
.mform div.error,.mform fieldset.error {
  border: 1px solid red;
  padding: 5px;
  color: inherit;
}
.mform .fcheckbox input {
  margin-left: 0px;
}
.mform .fpassword .unmask {
  display:inline;
}
.mform .fpassword .unmask input {
  margin-left:5px;
  margin-right:3px;
}

.mform label .req, .mform label .adv {
  cursor: help;
}

/* form frozen */
div.mform div.fitem div.fstatic{
 border-color : #D3D3D3;
 border-style : dashed;
 border-width : thin;
}

#admin-register .mform .fsubmit {
  padding:20px;
  text-align:center;
}

div.phpinfo .center{
  text-align: center;
}

div.phpinfo .center table {
  margin-left: auto;
  margin-right: auto;
  text-align: left;
}

div.phpinfo .center th {
  text-align: center;
}

.backup-form-instances {
   margin:0px 20px 0px 20px;
}
.restore-form-instances {
   margin:0px 20px 0px 20px;
}


/***
 *** Header
 ***/

#header-home {
}

#header {
}

.headermain, h1.headermain {
  float:left;
  margin:0;
  padding:0;
}

.headermenu {
  float:right;
  text-align:right;
}

.navigation li,
.navigation div,
.navigation button,
.navigation form {
  display: inline;
}

.navbar {
  width:auto;
  padding:3px 0.5em;
  border-width:1px;
  border-style:solid;
}

.navbar .langmenu {
  text-align:right;
}

table.navbar {
  width: 100%;
}

.navbar .navbutton {
  margin-top: 3px;
  float: left;
}

.navbar .navbutton div,
.navbar .navbutton form {
  display:inline;
  margin:0px;
  padding:0px;
}

.navbar .breadcrumb {
  float:left;
  margin:0.2em 0;
}

.breadcrumb ul {
  padding:0;
  margin:0;
  text-indent:0;
  list-style:none;
}
.breadcrumb li {
  display:inline;
}

.navbar .navbutton,
.navbar .menu {
  float:right;
}

#footer .navbar {
  margin-top: 4em;
}

.reportlink {
  text-align:right;
}

.navigation {
  margin-bottom: 4px;
}

.navigation ul {
  margin:0px;
  padding:0px;
  list-style-type:none;
}

.navigation ul li form,
.navigation ul li {
  display:inline;
  margin:0px;
  padding:0px;
  margin-left:2px;
}

.navigation ul li form fieldset,
.navigation ul li form div select {
  vertical-align: middle;
}

.navigation optgroup {
  text-align:center;
  padding-top:4px;
}

.navigation option {
  text-align:left;
}

.navigation optgroup option {
  padding:0px;
}

#navmenupopup option,
#navmenufooterpopup option {
  padding: 2px 0 2px 20px;
  background-repeat: no-repeat;
  background-position: 1px 2px;
  vertical-align: middle;
}

/***
 *** Footer
 ***/

#footer {
  text-align:center;
  margin-top: 40px;
}

.homelink {
  margin: 1em 0;
}

.homelink a {
  padding-left:1em;
  padding-right:1em;
}

.sitelink {
  padding-top:1em;
}

.performanceinfo {
  margin: 2em;
}

.performanceinfo span {
  display: block;
}

#footer .validators {
  margin-top:40px;
  padding-top:5px;
  border-top: 1px dotted gray;
}

#footer .validators ul {
  margin:0px;
  padding:0px;
  list-style-type:none;
}

#footer .validators ul li {
  display:inline;
  margin-right:10px;
  margin-left:10px;
}

/***
 *** Filters
 ***/
.mediaplugin {
  display:block;
  clear:both;
  margin-top:5px;
  margin-bottom:5px;
}

.mediaplugin_mp3, .mediaplugin_swf, .mediaplugin_flv {
  display:inline;
  clear:none;
  margin:0px;
  margin-left:0.5em;
}
.texrender {
  border:0px;
  vertical-align:middle;
}


/***
 *** Admin
 ***/

body#admin-index .c0 {
  vertical-align: top;
}

body#admin-index .c1 {
  vertical-align: middle;
}

body#admin-blocks table.generaltable th,
body#admin-filters table.generaltable th,
body#admin-modules table.generaltable th,
body#admin-auth table.generaltable th
{
  white-space: nowrap;
}

body#admin-modules .generaltablecell
{
  padding-top: 2px;
  padding-bottom: 2px;
}

body#admin-blocks table.generaltable th,
body#admin-blocks table.generaltable td.cell,
body#admin-filters table.generaltable th,
body#admin-filters table.generaltable td.cell,
body#admin-modules table.generaltable th,
body#admin-modules table.generaltable td.cell,
body#admin-auth table.generaltable th,
body#admin-auth table.generaltable td.cell
{
  padding: 4px;
  text-align: center;
  vertical-align: middle;
}

body#admin-blocks table.generaltable th.c0,
body#admin-blocks table.generaltable td.c0,
body#admin-filters table.generaltable th.c0,
body#admin-filters table.generaltable td.c0,
body#admin-modules table.generaltable th.c0,
body#admin-modules table.generaltable td.c0,
body#admin-auth table.generaltable th.c0,
body#admin-auth table.generaltable td.c0
{
  text-align: left;
}

body#admin-modules table.generaltable td.c0
{
  white-space: nowrap;
}

#admin-blocks
#admin-config .confighelp {
  display: block;
  padding-bottom: 20px;
}

#admin-roles-manage table.generalbox {
  margin: auto;
}

#admin-stickyblocks .generalbox {
  text-align:center;
}

#admin-index .copyrightnotice {
  margin: auto;
  text-align: center;
}

#admin-maintenance .buttons {
  text-align:center;
}

#admin-report-unittest-index .exception pre {
  padding: 8px;
}

#admin-report-unittest-index .unittestsummary {
  padding: 8px;
  margin-top: 1em;
}

#admin-report-security-index #timewarning {
  text-align:center;
}

#admin-report-security-index .timewarninghidden {
  display:none;
}

#admin-roles-allowassign .buttons,
#admin-roles-allowoverride .buttons,
#admin-roles-manage .buttons,
#admin-roles-override .buttons {
  margin: 20px;
  text-align:center;
}

#admin-roles-manage .buttons .singlebutton,
#admin-roles-override .buttons .singlebutton {
  display: inline;
  padding: 5px;
}

#admin-roles-manage .selector,
#admin-roles-assign .selector,
#admin-roles-override .selector {
  text-align:center;
  margin-bottom:1em;
}

#admin-roles-manage table.roledesc,
#admin-roles-override table.roledesc {
  margin-left:auto;
  margin-right:auto;
}

#admin-roles-manage table.rolecap,
#admin-roles-override table.rolecap {
  margin-left:auto;
  margin-right:auto;
}

.rolecap .inherit,
.rolecap .allow,
.rolecap .prevent,
.rolecap .prohibit {
  text-align:center;
}

#admin-roles-manage .rolecap .cap-desc .cap-name,
#admin-roles-override .rolecap .cap-desc .cap-name {
  display: block;
}

#admin-roles-override .cell.c1,
#admin-roles-assign .cell.c3,
#admin-roles-assign .cell.c1 {
  padding-top: 0.75em;
}

#admin-roles-override .sefeoverridenotice {
  text-align:center;
}

#admin-lang .generalbox {
  text-align:center;
  margin:auto;
  border-width: 1px;
  border-style: solid;
}

#admin-langimport .generalbox {
  text-align:center;
  margin:auto;
  border-width: 1px;
  border-style: solid;
}

#admin-langimport .generalbox table {
  text-align:center;
  margin:auto;
}

#admin-mnet-index .generalbox table{
  width:100%;
}

#admin-index .adminerror,
#admin-index .adminwarning {
  text-align:center;
  border-width: 1px;
  border-style: solid;
  margin:20px;
}

#admin-index .adminerror .singlebutton,
#admin-index .adminwarning .singlebutton,
#admin-index #layout-table .singlebutton {
  text-align:center;
  margin:20px;
}

#admin-user-user_bulk #users .fgroup {
  white-space: nowrap;
}

.plugincompattable caption {
  text-align: center;
  width: 100%;
  font-weight: bold;
  font-size: 130%;
}

.plugincheckwrapper td{
  border: 1px #bbbbbb solid;
}

.plugincheckwrapper{
    width: 100%;
}
/* Admin settings */
#adminsettings div.form-item {
  clear: both;
  margin: 1em 0 2em 0;
}

#adminsettings .form-label {
  display: block;
  float: left;
  width: 12.5em;
  text-align: right;
}

#adminsettings .form-shortname {
  display: block;
}

#adminsettings .form-setting {
  display: block;
  margin-left: 13em;
  text-align: left;
}

#adminsettings .form-defaultinfo {
  display: inline;
}

#adminsettings .defaultsnext {
  margin-right: 0.5em;
  display: inline;
}

#adminsettings .form-description {
  display: block;
  margin: 0.5em 0 0em 13em;
  text-align: left;
}

#adminsettings fieldset {
  margin-top: 1em;
  padding: 1em 0.5em;
}

#adminsettings legend {
  display: none;
}

#adminsettings fieldset.error {
  margin: 0.2em 0 0.5em 0;
  padding: 0.5em 0 0 0;
}

#adminsettings fieldset.error legend {
  display: block;
}

#adminsettings .form-multicheckbox li {
  list-style: none;
}

#adminsettings .form-multicheckbox ul {
  padding:0;
  margin:0;
}

#adminsettings .form-item .pathok,
#adminsettings .form-item .patherror {
  margin-left: 0.5em;
}

#adminsettings .form-htmlarea {
  width:  640px;
  display:inline;
}

#adminsettings .form-htmlarea .htmlarea {
  width:  640px;
  display:block;
}

.environmentbox {
  margin-top: 1em;
}

.form-buttons {
  margin: 10px 0 0 13em;
}

.adminsearchform {
  padding-top:10px;
}

.block_admin_tree .admintree {
  text-align:left;
}

.block_admin_tree .admintree .depth1 {
  padding-left: 16px;
}

.block_admin_tree .admintree .depth2 {
  padding-left: 32px;
}

.block_admin_tree .admintree .depth3 {
  padding-left: 48px;
}

.block_admin_tree .admintree .depth4 {
  padding-left: 64px;
}

#admin-lang .translator {
  border-width: 1px;
  border-style: solid;
}

#adminsettings #admin-calendar_weekend table {
  width: 100%;
}

#adminsettings #admin-calendar_weekend table td {
  text-align: center;
}

#adminsettings #admin-calendar_weekend table td label {
  width: 100%;
  text-align: center;
  float: none;
}

#trustedhosts .generaltable {
  margin-left: auto;
  margin-right: auto;
  width: 500px;
}

#trustedhosts .standard {
  width: auto;
}

#mnetconfig table {
  margin-left: auto;
  margin-right: auto;
}

#admin-report-courseoverview-index .graph,
#course-report-stats-index .graph,
#admin-report-stats-index .graph {
  text-align: center;
  margin-bottom: 1em;
}

#admin-uploaduser table#uuresults {
  margin-bottom: 2em;
}

#admin-uploaduser table#uupreview,
#admin-uploaduser table#uuresults td.cell {
  padding-left: 3px;
  padding-right: 3px;
}

/***
 *** Blocks
 ***/

/*Accessibility: Skip block link, for keyboard-only users. */
a.skip-block, a.skip {
  position: absolute;
  top: -1000em;
  font-size: 0.85em;
}
a.skip-block:focus, a.skip-block:active,
a.skip:focus, a.skip:active {
  position: static;
  display: block;
}
.skip-block-to, #maincontent {
  display: block;
  height: 1px;
}

.sideblock {
  margin-bottom:1em;
  width: 100%;
}

.sideblock .header, .sideblock h2.header {
  text-align: left;
  margin:0;
  padding:4px;
  padding-top:0;
  border-width: 1px;
  border-style: solid;
/* ou-specific begins */
/* Comment out Moodle core code
  border-bottom: none;
*/
/* ou-specific ends */
}
.sideblock h2 {
  margin:0;
  padding:0;
}

.sideblock .header .hide-show-image {
/* ou-specific begins */
/* Comment out Moodle core code
  float:right;
*/
  float:left;
/* ou-specific ends */
  height:11px;
  width:11px;
/* ou-specific begins */
/* Comment out Moodle core code
  margin-top:0.25em;
*/
  margin:8px 5px 0px 5px;
/* ou-specific ends */
}

.sideblock .header .commands {
  margin-top: 0.3em;
  clear: both;
  height: 16px;
}

.sideblock .header .commands a {
  margin: 0px 2px;
}

/* ou-specific begins */
/* Comment out Moodle core code
#left-column .hidden .header,
#right-column .hidden .header
{
  border-bottom-width: 1px;
  border-bottom-style: solid;
}
*/
/* ou-specific ends */

#left-column .hidden .content,
#right-column .hidden .content
{
  display: none;
}

.sideblock .header .icon.hide,
.sideblock .header .icon.edit {
  margin-right: 6px;
}

.sideblock .content {
  padding: 4px;
  border-width: 1px;
  border-style: solid;
}

.sideblock .content h3,
.sideblock .content h2 {
  text-align: left;
}

.sideblock .content h2 {
  margin:1.5em 0 0;
  padding:0;
}

.sideblock .content .head {
  margin-top: 10px;
}

.sideblock .content hr {
  height:1px;
  margin-top:4px;
  margin-bottom:4px;
  border:none;
  border-top:1px solid;
}

.sideblock div.column {
  margin:0px;
  margin-right:4px;
  padding:0px;
}

.sideblock div.column.c0 {
  float: left;
}

.sideblock div.column.c1 {
  display: inline;
}

.sideblock .content .c0 img.icon {
  margin:0px;
}

.sideblock .content .list, .unlist, .inline-list {
  list-style:none;
  padding:0;
  margin:0;
}

.sideblock .content .list {
  width: 100%;
}

.sideblock .content .list li {
  clear: left;
}

.sideblock .content .inline-list li, .inline-list li {
  display: inline;
}

.sideblock .content ul.list li.listentry {
  clear:both;
}

.sideblock .content div.info {
  text-align:center;
}

.sideblock .footer {
  margin-bottom: 4px;
  text-align:center;
  clear:both;
}

.sideblock img.userpicture {
  width:16px;
  height:16px;
  margin-right:4px;
}

.blockconfigtable {
  margin-top: 0;
  margin-right: auto;
  margin-left: auto;
}

.blockconfigtable td.label {
  text-align: right;
  width: 50%;
}

.blockconfigtable td.value {
  text-align: left;
  width: 50%;
}

.blockconfigtable td.submit {
  text-align: center;
}

.blockconfiginstancecontent .tabs {
  margin-bottom: 0px;
  margin-left: auto;
  margin-right: auto;
}

.block_adminblock {
  width: 180px;
}

.block_messages .content {
  text-align:left;
  font-size:0.75em;
  padding-top:5px;
}

.block_recent_activitysideblock .h3 {
  padding-top:5px;
}

.block_online_users .listentry div.user,
.block_messages .listentry div.user {
  float:left;
}

.block_online_users .listentry div.message,
.block_messages .listentry div.message {
  float:right;
}

.block_course_list .footer {
  margin-top: 5px;
}

#rssfeeds {
  margin-left: auto;
  margin-right: auto;
}

#block_rss {
  text-align: center;
}

.block_search_forums .invisiblefieldset {
  display: block;
}

.block_tag_youtube .youtube-thumb {
  padding: 3px;
  padding-bottom: 0.5em;
  display: block;
  float: left;
}
.block_tag_youtube .yt-video-entry li {
  clear: left;
}

.block_tag_flickr .flickr-photos {
 padding:3px;
}

.tempblockhandler, .tempblockhandler .content{
    height: 3px;
    margin-bottom: -3px;
    visibility: hidden;
}

/***
 *** Blogs
 ***/
.addbloglink {
  text-align: center;
}

.blogpost .audience {
  text-align: right;
}

.blogpost .tags {
  margin-top: 15px;
}


/***
 *** Calendar
 ***/

#calendar {
  width: 100%;
  border-spacing: 5px;
  border-collapse: separate;
}

#calendar h2,
#calendar h3
{
  text-align: center;
}
#calendar .sideblock h2 {
  text-align: left;
}

#calendar .maincalendar,
#calendar .sidecalendar
{
  vertical-align: top;
  border: 1px solid;
  padding: 0px;
}

#calendar .maincalendar {
  height: 100%;
}

#calendar .maincalendar .heightcontainer {
  height: 100%;
  position: relative;
}

#calendar .maincalendar .bottom {
  width: 100%;
  text-align: center;
  padding:5px 0 0;
}

#calendar .sidecalendar {
  width: 25%;
}

#calendar .maincalendar table.calendarmonth {
  border-collapse: separate;
  margin: 0px auto;
  width: 98%;
}

#calendar .maincalendar table.calendarmonth th {
  padding:10px;
  border-bottom:2px solid;
}

#calendar .maincalendar table.calendarmonth td {
  height: 5em;
  padding-left: 4px;
  padding-top: 4px;
  line-height:1.2em;
}

#calendar .maincalendar table.calendarmonth td,
table.minicalendar td,
table.minicalendar th {
  width:14%;
  vertical-align:top;
}
table.minicalendar td {
  text-align: center;
}
#calendar .maincalendar table.calendarmonth td table td {
  height: auto;
}

/* ou-specific begins (until 2.0) */
/* Comment out Moodle core code
#calendar div.header
*/
#calendar .maincalendar div.header
/* ou-specific ends (until 2.0) */
{
  padding: 5px;
}

/* ou-specific begins (until 2.0) */
/* Deleted rule #calendar .sideblock div.header */
/* Comment out Moodle core code
#calendar .sideblock div.header
{
  border:none;
}
*/
/* ou-specific ends (until 2.0) */

#calendar .maincalendar .buttons {
  float: right;
}

#calendar .maincalendar .filters table,
#calendar .sidecalendar .filters table,
.sideblock.block_calendar_month .filters table
{
  border-collapse:separate;
  border-spacing: 2px;
  padding: 2px;
  width: 100%;
}

#calendar .maincalendar .filters {
  padding: 0px 10px;
}

#calendar .sidecalendar .filters {
  padding: 5px;
}

#calendar .maincalendar .controls {
  clear:both;
  padding:10px;
}

#calendar .maincalendar table.calendarmonth ul.events-new,
#calendar .maincalendar table.calendarmonth ul.events-underway
{
  padding:0px;
  margin:0px;
  list-style-type:none;
}

#calendar .maincalendar table.calendarmonth ul li {
  margin-top: 4px;
}

.minicalendarblock {
  padding: 0px 4px;
}

table.minicalendar {
  width: 100%;
  margin: 10px auto;
  padding:2px;
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
  border-spacing:1px !important;
}

table.minicalendar th {
  padding: 0px 2px;
}

#calendar .maincalendar .eventlist {
  padding: 10px;
}

#calendar .maincalendar .eventlist .topic {
  padding: 5px;
  border-style:solid;
  border-width: 0px;
  border-bottom-color: #EEEEEE;
  border-bottom-width: 1px;
}

#calendar .maincalendar .eventlist .event {
  width:100%;
  margin-bottom:10px;
  border-spacing:0px;
  border-collapse:separate;
  border-width:1px;
  border-style:solid;
}

#calendar .maincalendar .eventlist .event .name {
  float:left;
}

#calendar .maincalendar .eventlist .event .course {
  float:left;
  clear:left;
}

#calendar .maincalendar .eventlist .event .date {
  float:right;
}

#calendar .maincalendar .eventlist .event .description .commands {
  width:100%;
}

#calendar .maincalendar .eventlist .event .description {
  padding:5px;
}

#calendar .maincalendar .eventlist .event .picture {
  padding:8px;
}

#calendar .maincalendar .eventlist .event .side {
  width:32px;
}

#calendar #selecteventtype table {
  margin:auto;
}

#calendar .event_global,
#calendar .event_course,
/* ou-specific begins */
#calendar .event_course0,
#calendar .event_course1,
#calendar .event_course2,
/* ou-specific ends */
#calendar .event_group,
#calendar .event_user,
.minicalendar .event_global,
.minicalendar .event_course,
/* ou-specific begins */
.minicalendar .event_course0,
.minicalendar .event_course1,
.minicalendar .event_course2,
/* ou-specific ends */
.minicalendar .event_group,
.minicalendar .event_user {
  border:2px solid !important;
}

#calendar .duration_global,
#calendar .duration_course,
/* ou-specific begins */
#calendar .duration_course0,
#calendar .duration_course1,
#calendar .duration_course2,
/* ou-specific ends */
#calendar .duration_group,
#calendar .duration_user,
.minicalendar .duration_global,
.minicalendar .duration_course,
/* ou-specific begins */
.minicalendar .duration_course0,
.minicalendar .duration_course1,
.minicalendar .duration_course2,
/* ou-specific ends */
.minicalendar .duration_group,
.minicalendar .duration_user
{
  border-top:2px solid !important;
  border-bottom:2px solid !important;
}

#calendar .today,
.minicalendar .today {
  border:2px solid;
}

#calendar .nottoday,
.minicalendar .today {
  border:1px solid;
}

.cal_popup_bg {
  padding:0px;
  margin:0px;
  border:1px solid;
}

.cal_popup_close {
  margin-right:5px;
}

.cal_popup_caption {
  border-width:0px 0px 1px 0px;
  border-style:solid;
  padding-bottom:2px;
}

/*Accessibility: controls now div and span, 20:58:20% or 12:74:12% */
.calendar-controls .previous,
.calendar-controls .next,
.calendar-controls .current {
  display: block;
  float: left;
  width: 12%;
}
.calendar-controls .previous {
  text-align: left;
}
.calendar-controls .current {
  text-align: center;
  width: 76%;
}
.calendar-controls .next {
  text-align: right;
}

#calendar .maincalendar .calendar-controls .previous,
#calendar .maincalendar .calendar-controls .next
{
  width: 30%;
}
#calendar .maincalendar .calendar-controls .current {
  width: 39.95%;
}

#calendar .indent {
  padding-left: 20px;
}

#calendar td.sidecalendar {
border-width:0px;
}

/* ou-specific begins (until 2.0) */
/* Deleted rule #calendar td.sidecalendar .sideblock */
/* Comment out Moodle core code
#calendar td.sidecalendar .sideblock {
  border: 1px solid;
  margin-bottom:10px;
}
*/
/* ou-specific ends (until 2.0) */

#calendar td.sidecalendar .minicalendartop {
  padding-top:10px;
}

.sideblock .content h3.eventskey {
  margin-top:0.5em;
  margin-bottom:0;
  margin-left:0.5em;
}

/***
 *** Course
 ***/

.activitydate, .activityhead {
  text-align:center;
}

#course-view .section td {
  vertical-align:top;
}

#course-view .section td.content {
  padding:5px;
  border-style:solid;
  border-width:1px;
  border-left:0px;
  border-right:0px;
}

#course-view .section td.side {
  padding:5px;
  border-style:solid;
  border-width:1px;
}

#course-view .section td.left {
  border-right:0px;
  text-align:center;
  width: 1.5em;
}

#course-view .section td.right {
  border-left:0px;
  text-align:center;
  width: 1.5em;
}

#course-view .current .side {
}

#course-view .section .spacer {
  height:0.5em;
}

#course-view .section .weekdates {
}

/* ou-specific begins (until 2.0) */
li.activity {
  margin-right:20px; /* Space allowed for completion icons if enabled */
  position:relative;
}
li.activity form.togglecompletion,
li.activity span.autocompletion {
  display:inline;
  position:absolute;
  right:-18px;
  top:0;
  z-index:10;
  padding:0.2em 0;
  text-indent:0;
}
li.activity form.togglecompletion div {
  display:inline;
}
.completion-saved-display {
  position:absolute;
  top:0;
  left:0px;
  padding: 1px 20px;
  font-size:0.85em; 
}
.completionprogress {
    float:right;
    padding:8px 33px 5px 5px;
}
.completionprogress img.iconhelp {
  margin-top:-3px;
}
/* ou-specific ends (until 2.0) */

#course-view ul.section,
#site-index ul.section {
  margin: 0;
  padding: 0;
  list-style: none;
}

.section_add_menus {
  text-align:right;
}

.section_add_menus .horizontal div {
  display:inline;
}


/*#course-view ul.section li.activity ul li,
#site-index ul.section li.activity ul li {
  list-style: disc;
}*/

/*Accessibility: No-tables course format. */
#course-view ul.weekscss {
  margin: 0;
  padding: 0;
  list-style: none;
}
/* Window-width: 800 pixels.
   IE doesn't support, see inline IE conditional comment. */
.weekscss-format {
  min-width: 763px;
}
.weekscss-format .block_adminblock select,
.weekscss-format .block_calendar_month .minicalendar {
  width: 100%;
  padding: 0;
}
.weekscss-format .block_calendar_month .minicalendar th,
.weekscss-format .block_calendar_month .minicalendar td {
  padding: 0.1em 0 0.1em 1px;
}
.weekscss-format #middle-column {
  margin: 0 12.5em 0 12.5em;
}
.weekscss-format #left-column,
.weekscss-format #right-column {
  width: 11.5em;
}
.weekscss-format #left-column {
  float: left;
}
.weekscss-format #right-column {
  float: right;
}
.weekscss li.section {
  margin-bottom: 0.5em;
  border-style:solid;
  border-width:1px;
}
.weekscss .content,
.weekscss .side {
  padding: 5px;
}
.weekscss .content {
  margin: 0 1.7em 0 1.7em;
}
.weekscss .right {
  width: 1.6em;
  float: right;
  text-align:center;
}

.section .activity img.activityicon {
  vertical-align:middle;
  height:16px;
  width:16px;
}

.section img.movetarget {
  height:16px;
  width:80px;
}

body#course-view .unread {
  margin-left: 3em;
}

body#course-view .sideblock.drag .header {
  cursor: move;
}

body#course-enrol .generalbox {
  margin-top: 20px;
}

body#course-enrol .coursebox {
  margin-top: 20px;
}

body#course-user .graph {
  text-align: center;
}

body#course-user .section,
body#course-user .content {
  margin-left: 30px;
  margin-right: 30px;
}

body#course-user .section {
  border-width:1px;
  border-style:solid;
  padding:10px;
  margin-bottom: 20px;
}

body#course-user .section h2 {
  margin-top: 0;
}


.headingblock, h2.headingblock {
  border-width:1px;
  border-style:solid;
  padding:5px;
  margin:0;
}

#site-index .subscribelink,
#course-view .subscribelink {
  text-align:right;
}

body#site-index .headingblock,
body#course-view .headingblock {
  margin-bottom: 9px;
}

body#course-category .courseboxes,
body#course-index .courseboxes {
  padding:20px;
}

body#course-category .rolelink {
  text-align:right;
  padding:10px;
}

body#course-category .addcategory {
  text-align: center;
  padding: 10px;
}

body#course-index .buttons .singlebutton,
body#course-category .buttons .singlebutton {
  display: inline;
}

body#course-index .buttons,
body#course-category .buttons {
  text-align: center;
  margin-bottom: 15px;
}

body#course-index #middle-column .editcourse {
  margin-left:auto;
  margin-right:auto;
  margin-top:20px;
  margin-bottom:20px;
}

body#course-index #middle-column .editcourse th,
body#course-index #middle-column .editcourse td {
  padding-left:10px;
  padding-right:10px;
}

body#course-index #middle-column .editcourse .count {
  text-align:right;
}

body#course-index .singlebutton,
body#course-index .addcategory {
  text-align: center;
}

body#course-info .generalbox.icons {
  text-align: center;
}

body#course-info .generalbox.info {
  margin-left:auto;
  margin-right:auto;
}

.coursebox {
  width: 100%;
  /* float:left; */
  margin-bottom: 15px;
  border-width:1px;
  border-style:solid;
}

.coursebox .summary {
  float: right;
  text-align:left;
  width: 48%;
  padding:5px;
}

.coursebox .info {
  float: left;
  text-align:left;
  width: 48%;
  padding:5px;
}

#my-index .coursebox .info {
  float: none;
}

#my-index .name {
  margin-left: 5px;
}
#course-pending .pendingcourserequests {
  margin-bottom: 1em;
}
#course-pending .pendingcourserequests .singlebutton {
  display: inline;
}
#course-pending .pendingcourserequests .cell {
  padding: 0 5px;
}
#course-pending .pendingcourserequests .cell.c6 {
  white-space: nowrap;
}
#course-pending .singlebutton {
  text-align: center;
}
.categorylist {
  width: 90%;
  margin-left: auto;
  margin-right: auto;
}

.categorylist .category.image {
  width: 20px;
}

.categorylist .category.number {
  text-align: right;
}

.categorylist .category.indentation {
  width: 1px;
}

.categoryboxcontent {
  border-width:1px;
  border-style:solid;
}

.categorypicker {
  text-align:center;
  padding-bottom:10px;
}

#coursesearch,
#coursesearch2 {
  margin-top: 1em;
  text-align:center;
}

.addcoursebutton {
  text-align:center;
}

.coursebox .cost {
  padding-top: 20px;
}

.coursebox ul.teachers li {
  list-style-type:none;
  padding:0;
  margin:0;
}

#course-category #renameform {
  text-align:center;
}

#course-category #themeform {
  text-align: center;
}

#course-category .singlebutton {
  text-align:center;
}

#course-category #coursesearch {
  text-align:center;
}


#course-report #content {
  padding-top:15px;
  padding-bottom:15px;
}

#course-report p {
  text-align:center;
}

#course-report .logselectform,
#course-report .participationselectform,
#course-report-log-index .logselectform,
#course-report-participation-index .participationselectform {
  margin-left:auto;
  margin-right:auto;
  text-align:center;
  margin-top:10px;
  margin-bottom:10px;
}

#course-report .participationselectform label,
#course-report-participation-index .participationselectform label {
  margin-left:15px;
  margin-right:5px;
}

#course-report-log-index .info,
#course-report-log-indexlive .info {
  margin-left:auto;
  margin-right:auto;
  text-align:center;
  margin:10px;
}

.course-report-outline td.numviews {
  text-align:right;
}

.course-report-outline div.loginfo {
  text-align:center;
  margin: 1em;
}

#content .coursebox .summary .category {
  text-align:right;
}

#course-editsection .singlebutton {
  text-align:center;
}

.jumpmenu {text-align:center}

/***
 *** Group
 ***/
body#group-index #groupeditform {
  text-align: center;
}

#add, #remove{
    text-align:center;
}

/***
 *** Doc
 ***/

body#doc-contents h1 {
  margin: 1em 0px 0px 0px;
}

body#doc-contents ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 90%;
}


/***
 *** Grades
 ***/

/* scales edit */

.grade-edit-scale .buttons {
  margin: 20px;
  text-align:center;
}

.grade-edit-scale .buttons .singlebutton {
  display: inline;
  padding: 5px;
}
/* outcomes edit */

.grade-edit-outcome .buttons {
  margin: 20px;
  text-align:center;
}

.grade-edit-outcome .buttons .singlebutton {
  display: inline;
  padding: 5px;
}

div.allcoursegrades {
    width: 100%;
    text-align: right;
    padding: 4px 0px 5px 0px;
}

.importoutcomenofile .singlebutton {
    text-align: center;
    margin-top: 5px;
}
/* gradebook edit tree */

.grade-edit-tree .gradetreebox {
  width:70%;
  margin-left:auto;
  margin-right:auto;
  margin-top:10px;
  padding-bottom:15px;
}

.grade-edit-tree .buttons {
  margin: 20px;
  text-align:center;
}

.grade-edit-tree .idnumber {
  margin-left: 15px;
}

.grade-edit-tree .buttons .singlebutton {
  display: inline;
  padding: 5px;
}

.grade-edit-tree .movetarget {
  position: relative;
  width: 80px;
  height: 16px;
}

.grade-edit-tree ul#grade_tree {
  width: auto;
}

.grade-edit-tree ul#grade_tree li {
  list-style: none;
}

.grade-edit-tree ul#grade_tree li.category {
  margin-bottom: 6px;
}

.grade-edit-tree .iconsmall {
  margin-left: 4px;
}

#grade-report-toggles {
  text-align: center;
}

.gradeexportlink {
  padding: 2em;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

#grade-aggregation-help dt {
    margin-top: 15px;
}

#grade-aggregation-help dd.example {
    margin-top: 7px;
}

#grade-aggregation-help code {
    display: block;
    margin-top: 7px;
}

/***
 *** Login
 ***/

.loginbox {
  margin-top:15px;
  margin-bottom:15px;
  border:1px solid;
  width:50%;
  margin-left:25%;
  overflow:hidden;
}

.loginbox form {
  margin:0px;
  padding:0px;
}

.loginbox.twocolumns {
  width:90%;
  margin-left:5%;
  /* background: #faa; */
}

.loginbox h2,
.loginbox .subcontent {
  margin:5px;
  padding:10px;
  text-align:center;
}

.loginbox .loginpanel .subcontent {
  text-align:center;
}

.loginbox .loginpanel .desc {
  margin:0px;
  padding:0px;
  margin-bottom:5px;
}

.loginbox .signuppanel .subcontent {
  text-align:left;
}

.loginbox .loginsub {
  margin-left:0%;
  margin-right:0%;
}

.loginbox .guestsub,
.loginbox .forgotsub {
  border-top:1px solid;
  margin-left:12%;
  margin-right:12%;
  margin-bottom:5px;
}

.loginbox .loginform {
  margin-top:1em;
  text-align:left;
}

.loginbox .loginform .form-label {
  float:left;
  text-align:right;
  width:40%;
}

.loginbox .loginform .form-input {
  float:right;
  width:59%;
}

.loginbox .loginform .form-input input {
  width: 6em;
}

.loginbox .signupform {
  margin-top:1em;
  text-align:center;
}

.loginbox.twocolumns .loginpanel {
  float:left;
  width:49.5%;
  border-right: 1px solid;
  margin-bottom:-2000px;
  padding-bottom:2000px;
  /* background: #afa; */
}

.loginbox.twocolumns .signuppanel {
  float:right;
  width:50%;
  margin-bottom:-2000px;
  padding-bottom:2000px;
}


/***
 *** Message
 ***/


#message-user .userpicture,
#message-history .userpicture {
  width: 100px;
  height: 100px;
}

.message-discussion-noframes #userinfo .userpicture {
  float:left;
}

.message-discussion-noframes #userinfo .name h1 {
  margin:0px;
}

.message-discussion-noframes #userinfo .name {
  text-align:center;
  margin-left:60px;
}

.message-discussion-noframes #userinfo .commands {
  text-align:left;
  margin-left:60px;
}

.message-discussion-noframes #userinfo .commands ul {
  margin:0px;
  padding:0px;
  list-style-type:none;
}

.message-discussion-noframes #userinfo .commands ul li {
  display:inline;
  padding-right:16px;
}

.message-discussion-noframes #send {
  padding-top:10px;
  clear:both;
}

.message-discussion-noframes #send h1 {
  margin:0px;
}

.message-discussion-noframes #messages {
  padding-top:10px;
}

.message-discussion-noframes #messages ul.messagelist {
  margin:0px;
  padding:0px;
}

.message-discussion-noframes #send h1 {
  margin:0px;
}

.message .noframesjslink {
  margin-top:20px;
}

.message .link {
  vertical-align:middle;
}

table.message .searchresults td {
  padding:5px;
  border-width:1px;
  border-style:solid;
  border-collapse:collapse;
  border-spacing:0px;
}
.message .summary .link {
  text-align:right;
}
.message .heading {
  text-align:center;
}

.message .note {
  text-align:center;
  padding:10px;
}

#message-user .commands span {
  margin-left:10px;
  margin-right:10px;
}

body#message-messages {
  padding:10px;
}

body#message-send .notifysuccess {
  padding:1px;
}

body#message-send td.fixeditor {
  text-align:center;
}

/***
 *** Notes
 ***/
.notepost {
  margin-bottom: 1em;
  background-color: #EEE;
}
.sitenotepost {
}
.coursenotepost {
}
.draftnotepost {
}

.ownnotepost .info {
}

.notepost .header {
  background: #DDD;
  padding: 5px;
}

.notepost .user {
  font-weight: bolder;
}

.notepost .userpicture {
  float: left;
  margin-right: 5px;
}

.notepost .info {
  font-size: smaller;
}

.notepost .content {
  clear: both;
}

.notepost .footer {
  clear: both;
}

body.notes .generalbox {
  margin-left:auto;
  margin-right:auto;
  width:90%;
}

body.notes .notesgroup {
  margin-left:20px;
}

/***
 *** MyMoodle
 ***/

.my .coursebox .overview .info {
  margin-left:20px;
}

.my .coursebox .overview {
  margin-bottom:10px;
}


/***
 *** Question
 ***/
.questionbank h2 {
  margin-top: 0;
}

.questioncategories h3 {
  margin-top: 0;
}

/* ou-specific begins */
#combinedfeedbackhdr div.fhtmleditor {
    padding: 0;
}
#combinedfeedbackhdr div.fcheckbox {
    margin-bottom: 1em;
}
/* ou-specific ends */

/* ou-specific begins new question engine */
/* Comment out core code.
.que {
  text-align: left;
  margin: 0 auto 1.8em auto;
  border: 1px solid;
  clear: both;
}
.que .info {
  float: left;
  margin: 0.5em 0 0.5em 1.2em;
  width: 8%;
}
.que .content {
  float: left;
  margin: 0.5em 1.2em 0.5em 0;
  width: 85%;
}
.que.description .info {
  margin: 0.5em 0 0.5em 0.2em;
  width: 1em;
}
.que.description .content,
.que.description .generalfeedback {
  margin-left: 1.2em;
  margin-bottom: 0.5em;
  float: none;
  width: auto;
}
.que.description .qtext {
  margin-bottom: 0;
}
.que .qtext {
  margin-bottom: 1.5em;
}
.que .ablock {
  margin: 0.7em 0 0.3em 0;
}
.que .prompt {
  float: left;
  width: 15%;
  height: 2em;
  padding-top: 0.3em;
}
.que .control {
  width: 5%;
}
.que .answer {
  float: left;
  width: 83%;
  margin-bottom: 0.5em;
}
.que .submit {
  position: relative;
  clear: both;
  float: left;
}
/* MSIE Hack *//*
* html .que .submit {
  float: none;
}
.multianswer .submit {
  margin-top: 1em;
}
.que .c0,
.que .c1 {
  padding: 0.3em 0 0.3em 0.3em;
  vertical-align: top;
}
.que .feedback {
  clear: both;
  padding: 0 0 0.3em 0.3em;
  margin-bottom: 0.5em;
  border: 1px solid;
}
.multichoice td.feedback {
  width: auto;
  vertical-align: top;
  padding-top: 0.3em;
  border-style: none;
}
.essay .feedback {
  border-style: none;
}
.multichoice .text {
  width: auto;
}
.calculated .answer,
.numerical .answer,
.shortanswer .answer {
  padding: 0.3em;
  width: auto;
}
.truefalse .answer span {
  float: left;
  clear: left;
  padding: 0.3em;
  width: 100%;
}
.que .grading,
.que .comment,
.que .commentlink,
.que .generalfeedback,
.que .history {
  margin-top: 0.5em;
}
.que .grade {
  margin-top: 0.5em;
}
End of comment out core code. */

.que {
  text-align: left;
  margin: 0 auto 1.8em auto;
  clear: both;
}
.que .info {
  float: left;
  width: 6em;
  padding: 0.5em;
  margin-bottom: 1.8em;
}
.que .info .questionflag {
  margin-top: 1em;
  margin-right: 1em;
  text-align: center;
}
.que h2.no {
    margin: 0 0 0.5em;
}
.que .content {
    margin: 0 0 0 7.5em;
}
.que .formulation,
.que .outcome,
.que .comment,
.que .history {
    padding: 0.5em;
    margin: 0 0 0.5em;
}
.que .history h3 {
    margin: 0 0 0.2em;
}
.que .history table {
    width: 100%;
    margin: 0;
}
.que .history .current {
    font-weight: bold;
}
.que .ablock {
    margin: 0.7em 0 0.3em 0;
}
.que .im-controls {
    margin-top: 0.5em;
    text-align: left;
}
.que.numerical .answer,
.que.shortanswer .answer {
    display: inline;
}
.multianswer .submit {
    margin-top: 1em;
}
.que .c0,
.que .c1 {
  vertical-align: top;
}
.que .specificfeedback,
.que .generalfeedback,
.que .rightanswer,
.que .im-feedback,
.que .feedback,
.que p {
  margin: 0 0 0.5em;
}
.multichoice td.feedback {
  width: auto;
  vertical-align: top;
  padding-top: 0.3em;
  border-style: none;
}
.multichoice .text {
    width: auto;
}
.calculated .answer,
.numerical .answer,
.shortanswer .answer {
    padding: 0.3em;
    width: auto;
}
.multichoice .answer span.r0,
.multichoice .answer span.r1,
.truefalse .answer span.r0,
.truefalse .answer span.r1 {
    display: block;
    padding: 0.3em;
}
.que .grading,
.que .comment,
.que .commentlink,
.que .history {
    margin-top: 0.5em;
}
.que .grade {
    margin-top: 0.5em;
}
/* ou-specific ends */

.importerror {
  margin-top: 10px;
  border-bottom: 1px solid #555;
}

/* ou-specific begins (until 2.0) */
/*** 
 *** Completion progress report
 ***/ 
 
#course-report-progress-index th,
#course-report-progress-index td {
	padding:2px 4px;
	font-weight:normal;
	border-right: 1px solid #EEE;
}
.completion-expired {
	background:#fdd;
} 
.completion-expected {
	font-size:0.75em;
} 
.completion-sortchoice {
	font-size:0.75em;
	vertical-align:bottom;
} 
.completion-progresscell {
	text-align:right;
} 
.completion-expired .completion-expected {
	font-weight:bold;
} 
#course-report-progress-index .progress-actions {
	text-align:center;
}
#course-report-progress-index .completion_pagingbar {
	margin:1em 0;
	text-align:center;
}
#course-report-progress-index .completion_prev {
	display:inline;
	margin-right:2em;
}
#course-report-progress-index .completion_pagingbar p {
	display:inline;
	margin:0;
}
#course-report-progress-index .completion_next {
	display:inline;
	margin-left:2em;
}
/* ou-specific ends (until 2.0) */

/***
 *** Logs
 ***/

.logtable {
  margin-left:auto;
  margin-right:auto;
}

.logtable td,
.logtable th {
  padding-left: 10px;
  padding-right: 10px;
}

.logtable th {
  text-align:left;
}

#course-user .info {
  margin-left:auto;
  margin-right:auto;
  text-align:center;
  margin:10px;
}

/***
 *** Tabs
 ***/


/*globalnav*/
.tabtree {
  position:relative;
}

.tabrow0 {
  text-align: center;
  width:100%;
  margin:0;
  margin-top: 10px;
  padding:0 0 1.75em 0;
  list-style:none;
  line-height:1.8em;
  font-size: 84%;
}

.tabrow0 li {
  display: inline;
  margin: 0 -4px 0 0;
  padding: 0;
}

.tabrow0 a span {
  padding: 10px 14px 0.35em 0;
  background: transparent url(pix/tab/right.gif) no-repeat right top;
}

.tabrow1 li a span {
  background: none !important;
}

.tabrow0 a {
  text-decoration: none;
  background: transparent url(pix/tab/left.gif) no-repeat left top;
  margin: 0 -1px 0 0;
  padding: 10px 0 0.35em 13px;
}

.tabrow0 a:hover {
  background-image: url(pix/tab/left_hover.gif);
}

.tabrow0 .here a:hover {
  background-image: url(pix/tab/left.gif);
}

.tabrow0 a:hover span {
  background-image: url(pix/tab/right_hover.gif);
}

.tabrow0 .here a:hover span {
  background-image: url(pix/tab/right.gif);
}

.tabrow0 .here a {
  color:#444;
}


.tabrow0 .here a:link,
.tabrow0 .here a:visited,
.tabrow0 .here a.nolink {
  position:relative;
  z-index:102;
}

/*subnav*/
.tabrow0 .empty {
  height: 1px;
  overflow: hidden;
  padding: 0;
}

.tabrow0 div,
.tabrow0 ul {
  position: absolute;
  left: 0;
  top: 1.95em;
  width: 100%;
  margin: 0;
  padding: 0.25em 0;
  list-style: none;
  border-top: 1px solid #aaa;
  line-height: normal;
  background: transparent url(pix/tab/tabrow1.gif) repeat-x center left;
  font-size: 90%;
}

.tabrow0 ul li {
  display:inline;
  margin-top:1px;
  background-image: none;
}

.tabrow0 ul a {
  background-image: none;
  color:#00c;
  margin:0;
  padding:0 1em;
  border:0
}

.tabrow0 ul a span {
  padding: 0;
  background-image: none;
}

.tabrow0 ul .last span,
.tabrow0 ul li a:hover, .tabrow0 ul li a:hover span,
.tabrow0 ul .here a:hover, .tabrow0 ul .here a:hover span {
  background-image: none !important;
}

.tabrow0 ul div {
  display: none;
}

ul.tabrow1 li a,
ul.tabrow1 li a:link,
ul.tabrow1 li a:visited {
  color:#00c;
  font-size: 110%;
}

ul.tabrow1 li.here.selected a {
  color:#444;
}

/***
 *** Tags
 ***/

h2.tag-heading {
 text-align:center;
 margin-left:auto;
 margin-right:auto;
 display:block;
 width:95%;
 padding: 5px 5px 5px 5px;

}

div#tag-description,
div#tag-blogs {
 width:95%;
 padding: 5px 5px 5px 5px;
 margin-left:auto;
 margin-right:auto;
 display:block;
}

body#tag-index .moreblogs {
 text-align:center;
}

div#tag-management-box {
 margin-bottom:10px;
 text-align:center;
 line-height:20px;
 display:block;
 font-size:12px;
}

div#tag-user-table {
 padding:3px;
 width:95%;
 clear: both;
 margin-left:auto;
 margin-right:auto;
 display:block;
}

body.tag .managelink {
  text-align:right;
  padding:10px;
}

/* small css hack for firefox*/
div#tag-user-table:after{
 content:".";
 display:block;
 clear:both;
 visibility:hidden;
 height:0;
 overflow:hidden;
}
/* end hack*/

div.user-box {
 margin-left:8px;
 margin-right:8px;
 margin-top:8px;
 margin-bottom:8px;
 width:115px;
 height:160px;
 text-align:center;
 display:block;
 float:left;
 clear: none;
}

img.user-image {
 border:0px;
 height:100px;
 width:100px;
}

div#small-tag-cloud-box {
 width:300px;
 margin-left:auto;
 margin-right:auto;
 margin-bottom:0px;
 margin-top:0px;
}

div#big-tag-cloud-box {
 width:600px;
 margin-left:auto;
 margin-right:auto;
 margin-bottom:0px;
 margin-top:0px;
 display:block;
 float:none;
}

ul#tag-cloud-list {
 list-style:none;
 padding:5px;
 margin:0px;
 list-style-type:none;
}
ul#tag-cloud-list li {
 margin:0px;
 display:inline;
}

/* search start*/

div#tag-search-box {
 text-align:center;
 margin-left:auto;
 margin-right:auto;
 margin-top:10px;
 margin-bottom:10px;
}

div#tag-search-results-container {
 padding:0px;
 width:100%;
}

ul#tag-search-results {
 padding:0px;
 margin-left:20%;
 margin-right:20%;
 margin-top:15px;
 margin-bottom:0px;
 float:left;
 width:60%;
 display:block;
 list-style:none;
}

ul#tag-search-results li{

 width:30%;
 float:left;
 padding-left:1%;
 text-align:left;
 line-height:20px;
 padding-right:1%;

}

div#tags-management-links {
 text-align:right;
 display:block;
 font-size:12px;

}
/* search end*/

/* tag management start*/
span.flagged-tag {
 color:#FF0000;
}
span.flagged-tag a{
 color:#FF0000;
}

table#tag-management-list {
 text-align:left;
 margin-left:auto;
 margin-right:auto;
}

table#tag-management-list tr td{
 padding-left:4px;
 padding-right :4px;
}

.tag-management-form {
 text-align:center;
}
/* tag management end*/

/* autocomplete start*/
#relatedtags-autocomplete-container
{
 margin-left:auto;
 margin-right:auto;
 min-height:4.6em;
 width:100%;
}

#relatedtags-autocomplete {
 position:relative;
 display:block;
 width:60%;
 margin-left:auto;
 margin-right:auto;
}
#relatedtags-autocomplete .yui-ac-content
{
 position:absolute;
 width:420px;
 left:20%;
 border:1px solid #404040;
 background:#fff;
 overflow:hidden;
 z-index:9050;
}
#relatedtags-autocomplete .ysearchquery
{
 position:absolute;
 right:10px;
 color:#808080;
 z-index:10;
}
#relatedtags-autocomplete .yui-ac-shadow {
 position:absolute;
 margin:.3em;
 width:100%;
 background:#a0a0a0;
 z-index:9049;
}
#relatedtags-autocomplete ul {
 padding:0;width:100%;
 margin:0;
 list-style-type:none;
}

#relatedtags-autocomplete li {
 padding:0 5px;
 cursor:default;
 white-space:
 nowrap;
}
#relatedtags-autocomplete li.yui-ac-highlight
{
 background:#FFFFCC;
}
/* autocomplete end*/

/***
 *** User
 ***/

.userinfobox {
  margin-bottom:5px;
  border-width: 1px;
  border-style: solid;
  border-collapse: separate;
}

.userinfobox .left,
.userinfobox .side {
  padding: 10px;
  width: 100px;
  vertical-align: top;
}

.userinfobox .userpicture {
  width: 100px;
  height: 100px;
}

.userinfobox .content {
  padding: 10px;
  vertical-align: top;
}

.userinfobox .links {
  width: 100px;
  padding: 5px;
  vertical-align: bottom;
}

.userinfobox .list td {
  padding: 3px;
}

.userinfobox .username {
  padding-bottom: 20px;
}

.userinfobox td.label {
  text-align:right;
  white-space: nowrap;
  vertical-align: top;
}

table.userinfobox {
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
}

table.groupinfobox {
  width: 60%;
  margin-left: 20%;
  margin-right: 20%;
  border-width:1px;
  border-style:solid;
  margin-bottom: 20px;
}

.groupinfobox .left {
  padding: 10px;
  width: 100px;
  vertical-align: top;
}

body#user-index h2 {
  text-align: center;
}

#user-view .buttons,
#user-index .buttons {
  text-align: center;
}

#user-view .buttons form,
#user-view .buttons form div {
  display:inline;
}

body#user-index #longtimenosee,
body#user-index #showall {
  text-align: center;
}

body#user-index #showall {
  margin: 10px 0px;
}

body#user-index table#participants,
body#tag-manage table#tag-management-list {
  margin: auto;
  width: 80%;
}

body#tag-manage table#tag-management-list td,
body#tag-manage table#tag-management-list th,
body#user-index table#participants td,
body#user-index table#participants th {
  vertical-align: middle;
  text-align: left;
  padding: 4px;
}

body#user-index table.controls {
  width: 100%;
}
body#user-index table.controls tr {
  vertical-align: top;
}
body#user-index table.controls td.right,
body#user-index table.controls td.left {
  padding: 4px;
}
body#user-index table.controls .right {
  text-align: right;
}
body#course-participation h2 {
  text-align:center;
}
body#course-participation #showall {
  text-align:center;
  margin: 10px 0px;
}
body#user-index .rolesform {
  text-align:center;
}

#user-policy .noticebox {
  text-align:center;
  margin-left:auto;
  margin-right:auto;
  margin-bottom:10px;
  width:80%;
  height:250px;
}

#user-policy #policyframe {
  width:100%;
  height:100%;
}

.iplookup #map {
  margin:auto;
}

.iplookup #note {
  text-align:center;
}

/***
 *** Modules: Assignment
 ***/

.userpicture,
.picture user,
.picture teacher {
  width:35px;
  height:35px;
  vertical-align:top;
}
.modform {
  text-align:center;
}
#wordcount {
  text-align: right;
}

/***
 *** Modules: Chat
 ***/

.nextchatsession {
  text-align:center;
}

#mod-chat-gui_header_js-jsupdate {
  margin:10px
}
#mod-chat-gui_header_js-jsupdate .chat-event,
#mod-chat-gui_header_js-jsupdate .chat-message {
  width:100%;
  padding:0;
  margin-top:7px
}

#mod-chat-view #chatcurrentusers .chatuserdetails {
  vertical-align: middle;
}

#mod-chat-view #enterlink {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.chat-event .picture,
.chat-message .picture {
  width:40px;
  vertical-align:top;
}
.chat-event .text,
.chat-message .text {
  text-align: left;
}

#mod-chat-gui_basic #participants ul {
  margin:0px;
  padding:0px;
  list-style-type:none;
}

#mod-chat-gui_basic #participants ul li {
  display:inline;
  margin-right:10px;
}

#mod-chat-gui_basic #participants ul li .userinfo {
  display:inline;
}

#mod-chat-gui_basic #messages dl {
  padding:0px;
  margin:1px;
}

#mod-chat-gui_basic #messages dd,
#mod-chat-gui_basic #messages dt {
  margin-left:0px;
  margin-right:5px;
  padding:0px;
  display:inline;
}

/***
 *** Modules: Choice
 ***/
.button {
  text-align:center;
}

.attemptcell {
  width:5px;
  white-space: nowrap;
}

.anonymous,
.names {
  margin-left:auto;
  margin-right:auto;
}

.downloadreport {
  border:0px;
  margin-left:auto;
  margin-right:auto;
}

.choiceresponse {
  width:100%;
}
.choiceresponse .picture {
  width:10px;
  white-space: nowrap;
}

.choiceresponse .fullname {
  width:100%;
  white-space: nowrap;
}


.results.data {
  vertical-align:top;
  white-space: nowrap;
}

/***
 *** Modules: Data
 ***/
.fieldadd,
.sortdefault,
.defaulttemplate {
  text-align:center;
}
.datapreferences {
  text-align:center;
}

table.presets {
  margin-left: auto;
  margin-right: auto;
}

/***
 *** Modules: Forum
 ***/

#mod-forum-view .forummode {
  text-align:center;
}

.forumheaderlist,
.forumpost {
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
}

.forumpost {
  margin-top: 15px;
}

.forumpost .topic {
  padding: 4px;
  border-style:solid;
  border-width: 0px;
  border-bottom-width: 1px;
}

.forumpost .commands {
  padding-top: 0.5em;
  text-align:right;
  clear: both;
}

.forumpost .ratings {
  padding-top: 1em;
  text-align:right;
}

.forumpost .attachments {
  padding: 7px;
  text-align:right;
}

.forumpost .content {
  padding: 4px;
}

.forumpost .footer {
  padding-top: 0.5em;
  text-align:right;
}

.forumpost .link {
  padding-top: 0.5em;
  text-align:right;
}

.forumpost .left {
  width: 35px;
  padding: 4px;
  text-align: center;
  vertical-align: top;
}

.mod-forum .indent {
  margin-left: 30px;
}

body#user-view .forumpost,
.course .forumpost {
  width: 100%;
}

body#mod-forum-search .c0 {
  text-align: right;
}

body#mod-forum-search .introcontent {
  padding: 15px;
}

.forumolddiscuss {
  text-align: right;
}

.forumheaderlist {
  width: 100%;
}

.forumheaderlist td {
  border-width:1px 0px 0px 1px;
  border-style:solid;
}

.forumheaderlist .replies {
  text-align: center;
  white-space: nowrap;
}

.forumheaderlist .picture {
  width: 35px;
}

.forumheaderlist .discussion .starter {
  vertical-align: middle;
}

.forumheaderlist .lastpost {
  white-space: nowrap;
  text-align: right;
}

.forumheaderlist .discussion .author {
  white-space: nowrap;
}
.forumolddiscuss {
  text-align:right;
}
.forumaddnew,
.forumnodiscuss,
.noticeboxcontent {
  text-align:center;
}

#mod-forum-view .forumaddnew {
  margin-bottom: 20px;
}

#mod-forum-view .forumcontrol .groupmenu {
  float: left;
  text-align:left;
  white-space: nowrap;
}

#mod-forum-view .groupmenu {
  float: left;
  text-align:left;
  white-space: nowrap;
}

#mod-forum-view .forumcontrol .subscription {
  float: right;
  text-align:right;
  white-space: nowrap;
}

#mod-forum-view .subscription {
  float: right;
  text-align:right;
  white-space: nowrap;
}

#mod-forum-index .subscription {
  float: right;
  text-align:right;
  white-space: nowrap;
}

#mod-forum-view .unread {
  padding-left: 3px;
  padding-right: 3px;
}
#mod-forum-discuss .forumpost.unread .content {
  border-style: solid;
  border-width: 2px;
}
#mod-forum-discuss .ratingsubmit {
  text-align:center;
  padding:10px;
}
#mod-forum-index .unread img,
#mod-forum-view .unread img
{
  margin-left: 5px;
}

#mod-forum-discuss .discussioncontrols td {
  width: 33%;
  text-align:center;
}

#email .unsubscribelink {
  margin-top:20px;
  border-width: 0px 1px 0px 0px;
  border-style: solid;
  text-align:center;
}

#mod-forum-view .subscription {
  margin: 5px 0;
}

/***
 *** Modules: Glossary
 ***/

.glossarypost .commands {
  width: 200px;
  white-space: nowrap;
}

#mod-glossary-comments .glossarypost,
#mod-glossary-comment .glossarypost {
  margin-top: 15px;
}

.entryboxheader {
  border-width: 1px 1px 0px 1px;
  border-style: solid;
}

.entrybox {
  width: 100%;
  border-width: 0px 1px 1px 1px;
  border-style: solid;
}

.entrybox hr {
  border-left:none;
  border-right:none;
}

.glossarypost {
  width: 95%;
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
  margin-left:auto;
  margin-right:auto;
  margin-bottom: 5px;
  text-align: left;
}

.entrylist {
  border-width:0px;
}

.entrylowersection {
  padding-top: 10px;
}

.entrylowersection table{
  width: 100%;
}

.entrylowersection .aliases {
  text-align:center;
}

.entrylowersection .icons,
.entrylowersection .ratings {
  text-align:right;
  padding-right: 5px;
}

.entrylowersection .ratings {
  padding-bottom: 2px;
}

.glossarycategoryheader {
  width: 95%;
  margin-left:auto;
  margin-right:auto;
}

.glossaryformatheader {
  width: 90%;
}

.glossarypost .entry {
  padding: 3px;
}

.glossarypost .picture {
  width: 35px;
}

.glossarycomment {
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
  margin-bottom: 5px;
  text-align: left;
}

.glossarycomment .entry {
  padding: 3px;
}

.glossarycomment .picture {
  width: 35px;
}

.glossarycomment .icons {
  text-align: right;
}

.glossarydisplay {
  width: 90%;
  margin-left:auto;
  margin-right:auto;
  text-align:center;
}

.glossarydisplay .tabs {
  width: 100%;
}

.glossarydisplay .separator {
  width: 4px;
}

.glossarydisplay .tabs .selected,
.glossarydisplay .tabs .inactive,
.glossarydisplay .tabs .general {
}

.glossaryimportexport {
  margin-left:auto;
  margin-right:auto;
  text-align:center;
}

.glossarypopup {
  width: 95%;
}

.glossaryapproval {
  width: 100%;
}

.mod-glossary .glossarydisplay .tabs {
  margin-bottom: 0px;
}

.mod-glossary .glossarydisplay .tabs .side {
  border-style: none;
  border-width: 0px;
  width: auto;
}

.glossaryexplain,
.glossaryaddentry {
  text-align: center;
}

.mod-glossary .tabrow0 {
  padding-bottom: 5px;
}

#mod-glossary-view .glossarycontrol {
  float: right;
  text-align:right;
  white-space: nowrap;
  margin: 5px 0;
}

/***
 *** Modules: Journal
 ***/
#mod-journal-view .lastedit,
#mod-journal-view .editend {
  margin: 5px;
  text-align: center;
}
#mod-journal-view .feedbackbox {
  width: 75%;
  border-collapse: separate;
}
#mod-journal-view .entrycontent {
  padding: 3px;
}
#mod-journal-view .picture {
  width: 35px;
}
#mod-journal-view .grade {
  text-align: right;
}
#mod-journal-view .info {
  margin-bottom: 5px;
  text-align: right;
}


/***
 *** Modules: Label
 ***/

/***
 *** Modules: Lesson
 ***/
#mod-lesson-lesson #page .addform {
  text-align: center;
}
#mod-lesson-edit #page .label {
  font-weight: bold;
}
#mod-lesson-edit #page .labelcorrect {
  text-decoration: underline;
  font-weight: bold;
}
.lessonmediafilecontrol {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

#mod-lesson-view #content .invisiblefieldset {
  display: block;
  text-align: left;
}

/***
 *** Modules: Quiz
 ***/

#mod-quiz-view .quizinfo {
  text-align: center;
}
#mod-quiz-view #page .quizgradefeedback,
#mod-quiz-view #page .quizattempt
{
  text-align: center;
}
#mod-quiz-view #page .quizattemptsummary td p {
  margin-top: 0;
}
#mod-quiz-view .generalbox#feedback {
  width:70%;
  margin-left:auto;
  margin-right:auto;
  padding-bottom:15px;
}
#mod-quiz-view .generalbox#feedback h2 {
  margin: 0 0;
}
body#mod-quiz-view .generalbox#feedback .overriddennotice {
  text-align: center;
  font-size: 0.7em;
}
#mod-quiz-view .generalbox#feedback h3 {
  text-align: left;
}

.generalbox#passwordbox { /* Should probably match .generalbox#intro above */
  width:70%;
  margin-left:auto;
  margin-right:auto;
}
#passwordform {
  margin: 1em 0;
}
/* ou-specific begins new question engine */
#mod-quiz-attempt #middle-column,
#mod-quiz-review #middle-column {
  text-align: center;
  margin: 0 0 0 12.5em;
}
#mod-quiz-attempt #middle-column-inner,
#mod-quiz-review #middle-column-inner {
  float: left;
  width: 100%
}
#mod-quiz-attempt #left-column,
#mod-quiz-review #left-column {
  width: 11.5em;
  float: left;
}
#mod-quiz-attempt .submitbtns,
#mod-quiz-review .submitbtns {
  clear: left;
  text-align: left;
  padding-top: 1.5em;
}
#mod-quiz-summary .submitbtns {
  margin-top: 1.5em;
}
#mod-quiz-summary #content {
  text-align: center;
}
#mod-quiz-summary .questionflag {
  width: 16px;
  height: 16px;
  vertical-align: middle;
}
#mod-quiz-attempt #quiz-timer,
#mod-quiz-summary #quiz-timer {
  display: none; /* Revealed by JavaScript if applicable */
}
#mod-quiz-summary #quiz-timer {
  margin-top: 1em;
}
#mod-quiz-attempt #quiz-time-left {
  font-weight: bold;
}
/* ou-specific ends */
#mod-quiz-attempt #page {
  text-align: center;
}
#mod-quiz-attempt .pagingbar {
  margin: 1.5em auto;
}
#mod-quiz-attempt #page {
    text-align: center;
}

#mod-quiz-attempt #timer .generalbox {
  width:150px
}
#mod-quiz-attempt.securewindow .que {
    margin-left: 155px;
    margin-right: 155px;
}

#mod-quiz-attempt #timer {
  position:absolute;
  /*top:100px; is set by js*/
  left:10px
}

body#question-preview .quemodname,
body#question-preview .controls
{
  text-align: center;
}
body#question-preview .quemodname, body#question-preview .controls {
  text-align: center;
}

#mod-quiz-attempt #page .controls,
/* ou-specific begins new question engine */
#mod-quiz-summary #page .controls,
/* ou-specific ends */
#mod-quiz-review #page .controls {
  text-align: center;
  margin: 8px auto;
}
#mod-quiz-review .pagingbar {
  margin: 1.5em auto;
}
#mod-quiz-review .pagingbar {
  margin: 1.5em auto;
}
/* ou-specific begins new question engine */

#mod-quiz-comment .mform {
  width: 100%;
}
#mod-quiz-report .mform fieldset,
#mod-quiz-comment .mform fieldset {
  margin: 0;
}
#mod-quiz-comment .que {
  margin: 0;
}

/* ou-specific ends */
table.quizreviewsummary {
/* ou-specific begins new question engine */
/* Comment out core code
  margin-bottom: 1.8em;
*/
/* ou-specific ends */
  width: 100%;
}
table.quizreviewsummary tr {
}
table.quizreviewsummary th.cell {
  padding: 1px 0.5em 1px 1em;
  font-weight: bold;
  text-align: right;
  width: 10em;
}
table.quizreviewsummary td.cell {
  padding: 1px 1em 1px 0.5em;
/* ou-specific begins new question engine */
  text-align: left;
/* ou-specific ends */
}

#mod-quiz-mod #reviewoptionshdr .fitem {
  float: left;
/* ou-specific begins new question engine */
/* Comment out core code
  width: 30%;
*/
  width: 23%;
/* ou-specific ends */
  margin-left: 10px;
  clear: none;
}
#mod-quiz-mod #reviewoptionshdr .fitemtitle {
  width: 100%;
  font-weight: bold;
  text-align: left;
  height: 2.5em;
 margin-left: 0;
}
#mod-quiz-mod #reviewoptionshdr fieldset.fgroup {
  width: 100%;
  text-align: left;
 margin-left: 0;
}
#mod-quiz-mod #reviewoptionshdr fieldset.fgroup span {
  float: left;
  clear: left;
}

#mod-quiz-edit #page .controls,
#mod-quiz-edit #page .quizattemptcounts
{
  clear : left;
  text-align: center;
}
#mod-quiz-edit .quizquestions h2 {
  margin-top: 0;
}
#mod-quiz-edit #showbreaks {
  margin-top: 0.7em;
}
.quizquestionlistcontrols {
  text-align: center;
}

#mod-quiz-report table#attempts,
#mod-quiz-report table#commands,
#mod-quiz-report table#itemanalysis
{
  width: 80%;
  margin: auto;
}
#mod-quiz-report table#attempts,
#mod-quiz-report h2.main {
  clear: both;
}
#mod-quiz-report table#attempts {
  margin: 20px auto;
}
#mod-quiz-report table#attempts .header,
#mod-quiz-report table#attempts .cell
{
  padding: 4px;
}
#mod-quiz-report table#attempts .header .commands {
  display: inline;
}
#mod-quiz-report table#attempts .picture {
  width: 40px;
}
/* ou-specific begins new question engine */
#mod-quiz-report table#attempts.grades span.que,
#mod-quiz-report table#attempts span.avgcell {
  white-space: nowrap;
}
#mod-quiz-report table#attempts span.que .requiresgrading {
  white-space: normal;
}
/* ou-specific ends */
#mod-quiz-report table#attempts td {
  border-left-width: 1px;
  border-right-width: 1px;
  border-left-style: solid;
  border-right-style: solid;
  vertical-align: middle;
}
#mod-quiz-report table#attempts .header {
  text-align: left;
}
#mod-quiz-report table#attempts .picture {
  text-align: center !important;
}
/* ou-specific begins new question engine */
#mod-quiz-report table#attempts .questionflag {
  width: 16px;
  height: 16px;
  vertical-align: middle;
}
/* ou-specific ends */
#mod-quiz-report .controls {
  text-align: center;
}

#mod-quiz-report table#itemanalysis {
  margin: 20px auto;
}
#mod-quiz-report table#itemanalysis .header,
#mod-quiz-report table#itemanalysis .cell
{
  padding: 4px;
}
#mod-quiz-report table#itemanalysis .header .commands {
  display: inline;
}
#mod-quiz-report table#itemanalysis td {
  border-width: 1px;
  border-style: solid;
}
#mod-quiz-report table#itemanalysis .header {
  text-align: left;
}
#mod-quiz-report table#itemanalysis .numcol {
  text-align: center;
  vertical-align : middle !important;
}

#mod-quiz-report table#itemanalysis .uncorrect {
  color: red;
}

#mod-quiz-report table#itemanalysis .correct {
  color: blue;
  font-weight : bold;
}

#mod-quiz-report table#itemanalysis .partialcorrect {
  color: green !important;
}

#mod-quiz-report table#itemanalysis .qname {
  color: green !important;
}

/* manual grading */
#mod-quiz-grading table#grading
{
  width: 80%;
  margin: auto;
}

#mod-quiz-grading table#grading
{
  margin: 20px auto;
}

#mod-quiz-grading table#grading .header,
#mod-quiz-grading table#grading .cell
{
  padding: 4px;
}

#mod-quiz-grading table#grading .header .commands
{
  display: inline;
}

#mod-quiz-grading table#grading .picture
{
  width: 40px;
}

#mod-quiz-grading table#grading td
{
  border-left-width: 1px;
  border-right-width: 1px;
  border-left-style: solid;
  border-right-style: solid;
  vertical-align: bottom;
}
/* ou-specific begins new question engine */
#manualgradingform.mform br {
  clear: none;
}
#manualgradingform.mform .clearfix:after {
  clear: none;
}
/* ou-specific ends */

.mod-quiz .gradingdetails {
  font-size: small;
}
.quizattemptcounts {
  text-align: center;
  clear : left;
  margin: 6px 0;
}
/* ou-specific begins new question engine */
#mod-quiz-attempt #left-column,
#mod-quiz-review #left-column {
  padding-top: 1px;
}
#quiznavigation .qnbutton {
  display: block;
  position: relative;
  float: left;
  width: 1.5em;
  height: 1.5em;
  overflow: hidden;
  margin: 0.3em 0.3em 0.3em 0;
  padding: 0;
  border: 1px solid #bbb;
  background: #eee no-repeat top right;
  text-align: center;
  vertical-align: middle;
}
#quiznavigation .qnbutton span {
    cursor: pointer;
    cursor: hand;
}
#quiznavigation .qnbutton .trafficlight,
#quiznavigation .qnbutton .thispageholder {
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}

#quiznavigation #user-picture {
    margin: 0.5em 0;
}
#quiznavigation #user-picture img {
    width: auto;
    height: auto;
    float: left;
}
#quiznavigation .othernav {
  clear: both;
  margin: 0.5em 0;
}
#quiznavigation .othernav a,
#quiznavigation .othernav input {
  display: block;
  margin: 0.5em 0;
}
.mod-quiz div.tabtree a span img.iconsmall {
  vertical-align: baseline;
}

/* ou-specific ends */
/***
 *** Modules: Resource
 ***/

#mod-resource-view .resourcecontent {
  text-align:center;
  margin:20px;
}

#mod-resource-view .resourcepdf {
  width: 100%;
  padding-top: 15px;
  text-align: center
}

.resourcecontent object {
  height:480px;
  width:600px;
}

.resourcepdf object{
  height: 800px;
  width: 800px;
}

.mod-resource .modified {
  text-align:center;
}

.mod-resource .popupnotice {
  text-align:center;
  margin:40px;
}

.ims-nav-bar {
  margin-top:0.2em;
  position: relative;
}

.ims-nav-button a,
.ims-nav-dimmed {
  padding-left:1em;
  padding-right:1em;
  padding-top:0.2em;
  padding-bottom:0.2em;
}

#ims-containerdiv {
  margin-top:0.2em;
}

#ims-menudiv {
  padding-top:1em;
  padding-right:0.2em;
  position:absolute;
  width:250px;
  overflow:auto;
}

#ims-menudiv ol {
  margin:0em;
  list-style-type:none;
  padding-left:1em;
}

#ims-contentframe {
  position:absolute;
  left:260px;
  border:1px solid;
  width:640px;
  height:480px;
}

#ims-contentframe-no-nav {
  position:absolute;
  border:1px solid;
  width:640px;
  height:480px;
}

#mod-resource-view div#footer {
  margin-top: 5px;
}

/***
 *** Modules: Scorm
 ***/

/***
 *** Modules: Survey
 ***/
.resultgraph {
  text-align:center;
  border:1px solid;
}

.reportsummary,
.studentreport,
.reportbuttons {
  text-align:center;
}

.centerpara {
  text-align:center;
}

.fullnamecell {
  width:10%;
  vertical-align:top;
  white-space: nowrap;
}

.questiontext {
  font-size:1em;
}

.smalltext {
  font-size: 0.75em;
}

#surveyform th {
  font-weight: normal;
  text-align: left;
}
#surveyform th.hresponse {
  text-align: center;
  width: 9%;
}

.rblock label {
  display: block;
  text-align: center;
}

.foundthat,
.preferthat {
  white-space: nowrap;
}

.qnummiddlecell {
  vertical-align:middle;
}

.optioncell {
  width: 50%;
  vertical-align: top;
}

.buttoncell {
  width:5%;
}

.questioncell {
  width:50%;
  vertical-align:top;
}

.whitecell {
  background-color:white;
}
/***
 *** Modules: Wiki
 ***/
.sideblockheading,
.howtowiki {
  text-align:right;
}

.wikisearchform,
.wikilinksblock,
wikiadminactions {
  text-align:center;
}

.wikilinkright{
  text-align:right;
  padding-bottom: 0.5em;
}

.wikiexportbox{
  margin-left:auto;
  margin-right:auto;
}
/***
 *** Modules: Workshop
 ***/
.redfont {
  color: red;
}

.workshopuploadform,
.workshopkey {
  text-align:center;
}


/***
 *** Help files (/lang/-/help)
 ***/
#help hr {
  border: none;
  height: 1px;
  background: #ccc;
}
#help .example1 {
  color: #a00;
}
#help .success {
  color: #080;
}
#help .center {
  text-align: center;
}
#help .moreinfo {
  text-align: right;
}
/* Equivalent to 1 and 5 nested blockquotes respectively. */
#help .indent {
  margin-left: 40px;
}
#help .indent-big {
  margin-left: 160px;
  margin-right:160px;
}
#help pre, #help code {
  background: #eee;
  border: 1px dashed #ddd;
  padding: 3px;
}

/* ou-specific begins */
 /***
 *** Workflow system
 ***/

.workflow {
	margin-top: 0.5em;
	padding: 0.5em;
}

#footer .workflow {
	margin-top: 1em;
}

.workflow h2 {
	margin: 0 0 0.5em;
}

.workflow p {
	margin: 0.5em 0 0;
}

div.buttons {
	margin-top: 1em;
}

#workflowsummary .overview,
#workflowdetails form {
	display: inline;
}

#workflowdetails .overview {
	position: absolute;
	right: 10px;
}

table.workflow-summary {
	margin: .5em 0;
	width: 100%;
    border-spacing: 0;
    border-collapse: collapse;
}

.workflow-summary th {
	text-align: left;
}

.workflow-summary .firstcol {
	width: 250px;/* fix column - width 12em; didnt work correctly in IE and FF*/
}

.workflow-summary td {
   /* fix column widths  width: width: 550px; */
}

.workflow-summary td, .workflow-summary th {
	padding: 0;
	border: 0;
}

.workflow-coursedates
{
	margin-top:1em;
}
.workflow-coursedates h3
{
  float:left;
  margin:0;
  padding:0;
  font-size:1em;
  margin-right:2em;
}
.workflow-coursedates dl,.workflow-coursedates dt,.workflow-coursedates dd
{
  margin:0; padding:0;
}
.workflow-coursedates dt
{
  float:left;
  margin-right:0.5em;
}
.workflow-coursedates dd
{
  float:left;
  margin-right:2em;
}

.changerolls {
	display: inline;
}

#workflow-report th {
    vertical-align: top;
    white-space: normal;
    text-align: left !important;
}

/***
 *** OU admin menu
 ***/
ul.course-admin-menu {
	clear:both;
	display:block;
	text-align:right;
	margin-right:8px;
	margin-top:2px;
	margin-bottom:3px;
	font-size:0.85em;
}
ul.course-admin-menu li {
	display:inline;
	margin-left:0.5em;
}
/* ou-specific ends */
/***** standard/styles_layout.css end *****/

/***** standard/styles_fonts.css start *****/

/*******************************************************************
 styles_fonts.css

 This CSS file contains all font definitions like family, size,
 weight, text-align, letter-spacing etc.

 Styles are organised into the following sections:
  core
  header
  footer

  admin
  blocks
  calendar
  course
  doc
  grades
  login
  message
  mymoodle
  question
  tabs
  user

  various modules

*******************************************************************/


/***
 *** Core
 ***/

.clearer {
  font-size:1px;
}

body, table, td, th, li {
  font-family:Arial, Verdana, Helvetica, sans-serif;
  font-size:100%;
  /*letter-spacing:0.02em;*/
}

th {
  font-weight: bold;
}

a:link,
a:visited {
  text-decoration:none;
}
a:hover {
  text-decoration: underline;
}

.img-text a:hover {
  text-decoration: none;
}
.img-text a:hover span {
  text-decoration: underline;
}

h1.main,
h2.main,
h3.main,
h4.main,
h5.main,
h6.main {
  font-weight:bold;
}

h1 {
  font-size:1.7em;
}

h2 {
  font-size:1.4em;
}
h3 {
  font-size:1.1em;
}
h4 {
  font-size:1.0em;
}

.bold {
  font-weight:bold;
}

.warning {
  font-weight: bold;
  font-style: italic;
}

.errorbox .title {
  font-weight: bold;
  font-size: 1.2em;
  text-align: center;
}

.errorboxcontent {
  text-align: center;
}

.errorcode {
  font-size: 0.7em;
}

.notifytiny {
  line-height : 100%;
  font-size: 0.7em;
}

.pagingbar .title {
  font-weight: bold;
}
.pagingbar .thispage {
  font-weight: bold;
}

.categorybox .category {
  font-size:1.2em;
  font-weight:bold;
}
/* ou-specific begins (until 2.0) */
.heading-with-help {
  font-size:1.4em;
}
 
.heading-with-help h2.main {
  font-size:1em;
}
/* ou-specific ends */

.helplink {
  font-size:0.8em;
}

.headingblock {
  font-weight: bold;
}

#site-index .subscribelink,
#course-view .subscribelink {
  font-size: 0.8em;
}

.files .file {
  font-size: 0.9em;
}

.files .folder {
  font-size: 0.9em;
}

.files .folder .size {
  font-weight: bold;
}

/* ou-specific begins */
.admin_note {
	font-size:0.8em;
}
/* ou-specific ends */

/*Accessibility: resizable icons. */
img.resize {
  width: 1em;
  height: 1em;
}

acronym, abbr {
  cursor: help;
}
a.useredit, a:hover.useredit, .blink {
  color: black;
  text-decoration: blink;
  cursor: help;
}

/***
 *** Header
 ***/

.headermain {
  font-weight:bold;
}

#header-home .headermain {
  font-size:1.5em;
}

#header .headermain {
  font-size:1.3em;
}

.breadcrumb {
  font-size:0.9em;
  font-weight:bold;
}

.logininfo,
#header-home .headermenu font {
  font-size:0.8em;
}

/* Accessibility: only certain fonts support Unicode chars like &#x25BA; in IE6 */
.arrow, .arrow_button input {
  font-family: Arial,Helvetica,Courier,sans-serif;
}

.navigation button {
  font-size: 80%;
}

/***
 *** Footer
 ***/

.homelink {
}


.performanceinfo {
  font-size: 0.6em;
}

#footer .validators {
  font-size: 0.6em;
}

/***
 *** Admin
 ***/

table.formtable tbody th {
  font-weight: normal;
  text-align: right;
}

body#admin-blocks table#incompatible td.c0 {
  font-weight: bold;
}

body#admin-index .explanation {
  font-size: 0.7em;
  vertical-align: bottom;
}

body#admin-index .copyright {
  text-align: center;
  font-size: 0.8em;
}

.environmenttable {
  font-size: 0.8em;
}

#admin-roles-manage .rolecap .cap-desc .cap-name,
#admin-roles-override .rolecap .cap-desc .cap-name {
  font-size: 0.75em;
}

#adminsettings .form-shortname {
  font-size: 0.75em;
}

#adminsettings .form-defaultinfo {
  font-size: 0.8em;
}

#admin-roles-override .cell.c1,
#admin-roles-assign .cell.c3,
#admin-roles-assign .cell.c1 {
  font-size: 0.7em;
}

#admin-lang .translator .strkey {
  font-size: 0.75em;
}

#admin-uploaduser table#uupreview {
  font-size: 0.8em;
}
#admin-uploaduser table#uuresults {
  font-size: 0.9em;
}

#adminsettings .form-warning,
#adminsettings .form-overridden {
  font-size: 0.8em;
}

.plugincompattable {
    font-size: 70%;
}

.plugincompattable td.standard {
    font-weight: normal;
}

.plugincompattable td.nonstandard {
    font-weight: bold;
}

.plugincompattable td.missingplugin {
    font-weight: bold;
}

.plugincompattable td.warning {
    font-style: normal;
}

.plugincompattable {
    text-align: left;
}

.plugincheckwrapper {
    text-align: center;
}

.course-report-outline td.lastaccess {
  font-size:0.8em;
}

.course-report-outline tr.section {
  text-align: center;
}


/***
 *** Blocks
 ***/
a.skip-block {
  text-decoration:none;
}

.sideblock img.resize,
.breadcrumb img.resize {
  width: 0.8em;
  height: 0.9em;
}
.sideblock .searchform img.resize {
  width: 1em;
  height: 1.1em;
}

.sideblock .header, .sideblock h2 {
  font-size:0.9em;
  font-weight: bold;
}

.sideblock .content {
  font-size:0.9em;
  line-height:1.2em;
}

.sideblock a {
  line-height:1.2em
}

.sideblock .content h3,
.sideblock .content h2 {
  font-size:1.0em;
}

.sideblock .content .message {
  font-size:0.9em
}

.sideblock .header .commands {
  font-size:0.9em;
}

.sideblock .footer {
  font-size:0.9em;
}

.sideblock .head,
.sideblock .info,
.sideblock .event {
  font-size: 0.9em;
}

.sideblock .date {
  font-style: italic;
}

.block_site_main_menu .footer select {
  font-size: 0.8em;
}

.block_messages .content .listentry,
.block_online_users .content .listentry {
  font-size:0.75em
}

/***
 *** Blogs
 ***/

.blogpost .audience {
  font-size: 0.85em;
}

.blogpost .tags {
  font-size: 0.85em;
}


/***
 *** Calendar
 ***/
#calendar .sidecalendar abbr,
.block_calendar_month abbr {
  border: none;
}
#calendar .eventnone a,
.block_calendar_month .eventnone a {
  text-decoration:none;
  color:black;
  cursor:text;
}

#calendar .maincalendar .eventlist .event .referer {
  font-weight:bold;
}

#calendar .maincalendar .eventlist .event .course {
  font-size:0.8em;
}

#calendar .maincalendar .eventlist .event .description .commands {
  text-align: right;
}

#calendar .maincalendar table.calendarmonth td {
  font-size:0.8em;
}

#calendar div.header
{
  font-weight:bold;
}

#calendar .sidecalendar .filters {
  font-size:0.8em;
}

.sideblock .filters td {
  font-size:1.1em;
}

#calendar .maincalendar .controls {
  font-size:1.2em;
}

#calendar .maincalendar .day {
  font-weight: bold;
}
 
/* ou-specific begins (until 2.0) MDL-15519 */ 
#calendar h1 {
  font-size:1.0em;
  margin:0;
}

#calendar .minicalendarblock h3 {
  font-size:1.0em;
  margin:0;
  font-weight:normal;
  text-align:center;
}
/* ou-specific ends */

table.minicalendar {
  font-size:0.85em;
}

.cal_popup_caption {
  font-family:sans-serif;
  font-size:0.8em;
  font-weight:bold;
}

.cal_popup_close {
  font-family:sans-serif;
  font-size:0.8em;
  font-weight:bold;
}
#calendar .maincalendar .calendar-controls .current {
  font-weight: bold;
}


/***
 *** Course
 ***/
#course-view .section {
  font-size:0.95em;
  line-height:1.2em;
}

#course-view .section .activity {
  padding:0.2em 0;
}

#course-view .section .activity a {
  line-height:1em;
}

#course-view .section .weekdates {
  margin: 0;
  font-weight: normal;
  font-size: 1em;
}

#course-view .section .left {
  font-weight:bold;
}

.activitydate, .activityhead {
  font-size:0.9em;
}

.weeklydatetext {
  font-size:0.9em;
  font-weight:bold;
}

.coursebox .info {
  font-size:1em;
}

.coursebox .teachers,
.coursebox .cost {
  font-size:0.9em;
}

.coursebox .summary {
  font-size:0.9em;
}

#course-recent h2.main {
  font-size:1.1em;
}

#course-recent .user {
  font-size:0.75em;
}

#course-recent .grade {
  font-style: italic;
  font-size:0.9em;
}

#course-recent .forum-recent .reply .title {
  font-style: italic;
  font-size:0.9em;
}

#course-recent .forum-recent .discussion .title {
  font-weight:bold;
  font-style: italic;
  font-size:0.9em;
}

h2.headingblock {
  font-size:1.1em;
}

.section_add_menus optgroup {
  font-weight:normal;
  font-style: italic;
}

.section .groupinglabel {
  color: #666666;
}

/* ou-specific begins (until 2.0) */
#course-view .availabilityinfo {
  font-size:0.85em;
  color:#aaa;
}
#course-view .availabilityinfo strong {
  font-weight:normal;
  color:black;
}
#course-view .dimmed_text img {
  opacity:0.3;
  filter: alpha(opacity='30'); 
}
/* ou-specific ends */

/***
 *** Doc
 ***/
body#doc-contents h1 {
  font-size: 0.9em;
}
body#doc-contents ul {
  font-size: 0.8em;
}


/***
 *** Grades
 ***/

body#grade-index .grades .header {
  font-weight: bold;
  font-size: 0.7em;
}

.grade-edit-scale .scale_options {
  font-size: 0.7em;
}

#grade-aggregation-help dt {
    font-weight: bold;
}


#grade-aggregation-help dd.example {
    font-style: italic;
}

#grade-aggregation-help code {
    font-style: normal;
}

/***
 *** Login
 ***/

#login-index #content {
  font-size: 0.85em;
}


/***
 *** Logs
 ***/

.logtable td {
  font-size: 0.8em;
}
.logtable th {
  font-size: 0.9em;
}


/***
 *** Message
 ***/

.message-discussion-noframes #userinfo .name h1 {
  font-weight: bold;
  font-size:1em;
}

.message-discussion-noframes #userinfo .commands {
  font-size:0.8em;
}

.message-discussion-noframes #send h1 {
  font-size:1em;
}

.message .noframesjslink {
  font-size:0.8em;
}

.message-discussion-noframes #messages h1 {
  font-size:1em;
}

.message .link {
  font-size:0.8em;
}

.message_form {
  font-size:0.8em;
}

.message .heading {
  font-size:1.0em;
  font-weight:bold;
}

.message .date,
.message .contact,
.message .summary {
  font-size:0.9em;
}

.message .note,
.message .pix {
  font-size:0.8em;
}

.message .author {
  font-weight: bold;
  font-size:0.8em;
}

.message .time {
  font-style: italic;
  font-size:0.8em;
}

.message .content {
  font-size:0.8em;
}

#message-user .commands span {
  font-size:0.7em;
  white-space:nowrap;
}

#message-user .name {
  font-weight: bold;
  font-size:1.1em;
}

/***
 *** MyMoodle
 ***/

.my .courseboxcontent .overview .info {
  font-size:0.7em;
}

/***
 *** Question
 ***/

/* ou-specific begins new question engine */
/* Comment out core code
.que .no {
  font-size: 1.2em;
  font-weight: bold;
}
*/
.que h2.no {
  font-size: 0.8em;
  font-weight: normal;
}
.que span.qno {
  font-size: 1.5em;
  font-weight: bold;
}
.que .state,
/* ou-specific ends */
.que .grade {
  font-size: 0.8em;
}
.que .history {
  font-size:75%;
}

/***
 *** Tabs
 ***/

.tabtree a.nolink:hover {
  text-decoration: none;
}

/***
 *** Tags
 ***/

.tag_cloud .s20 {
  font-size: 1.5em;
  font-weight: bold;
}

.tag_cloud .s19 {
  font-size: 1.5em;
}

.tag_cloud .s18 {
  font-size: 1.4em;
  font-weight: bold;
}

.tag_cloud .s17 {
  font-size: 1.4em;
}

.tag_cloud .s16 {
  font-size: 1.3em;
  font-weight: bold;
}

.tag_cloud .s15 {
  font-size: 1.3em;
}

.tag_cloud .s14 {
  font-size: 1.2em;
  font-weight: bold;
}

.tag_cloud .s13 {
  font-size: 1.2em;
}

.tag_cloud .s12,
.tag_cloud .s11 {
  font-size: 1.1em;
  font-weight: bold;
}

.tag_cloud .s10,
.tag_cloud .s9 {
  font-size: 1.1em;
}

.tag_cloud .s8,
.tag_cloud .s7 {
  font-size: 1em;
  font-weight: bold;
}

.tag_cloud .s6,
.tag_cloud .s5 {
  font-size: 1em;
}

.tag_cloud .s4,
.tag_cloud .s3 {
  font-size: 0.9em;
  font-weight: bold;
}

.tag_cloud .s2,
.tag_cloud .s1 {
  font-size: 0.9em;
}

.tag_cloud .s0 {
  font-size: 0.8em;
}

/***
 *** User
 ***/

.userinfobox .username {
  font-weight: bold;
}

.userinfobox .links {
  font-size: 0.7em;
}

.userinfobox td.label {
  font-weight: bold;
}

body#user-index #longtimenosee {
  font-size: 0.8em;
}

.iplookup #header h1.headermain {
  font-size:1em;
}

.iplookup #note {
  font-size:0.8em;
  font-style: italic;
}

/***
 *** Modules: Assignment
 ***/

#mod-assignment-index .cell {
  font-size:0.8em;
}

#wordcount {
  font-size: 0.8em;
}

/***
 *** Modules: Chat
 ***/

#mod-chat-index .cell {
  font-size:0.8em;
}


#mod-chat-gui_basic h1 {
  font-size:1.4em;
}

#mod-chat-gui_basic #participants .idle {
  font-size:0.6em;
}

#mod-chat-view #chatcurrentusers .chatuserdetails {
  font-size: 0.6em;
}
/***
 *** Modules: Choice
 ***/

#mod-choice-index .cell {
  font-size:0.8em;
}

/***
 *** Modules: Forum
 ***/

.forumnodiscuss{
  font-weight:bold;
}
.forumpost .topic .subject {
  font-weight: bold;
}
.forumpost .topic .author {
  font-size: 0.8em;
}
.forumpost .commands,
.forumpost .link,
.forumpost .footer {
  font-size: 0.9em;
}
.forumheaderlist .discussion .lastpost {
  font-size: 0.7em;
}
body#mod-forum-search .introcontent {
  font-weight:bold;
}
body#mod-forum-index .generalbox .cell {
  font-size: 0.80em;
}

.forumpost .edited {
  font-style: italic;
}


/***
 *** Modules: Glossary
 ***/

.glossarypost .commands {
  font-size: 0.8em;
}
.glossarypost .author {
  font-size: 0.8em;
}
.glossarypost .time {
  font-size: 0.8em;
}
.glossarycategoryheader h2,
.glossarypost .concept h3 {
  font-size: 1em;
  margin: 0;
}
.glossarypost div.concept h3,
.glossarypost.continuous .concept {
  display: inline;
}
.glossarypost .entryheader {
  font-weight: normal;
  text-align: left;
}
.glossarycomment .author {
  font-size: 0.8em;
}
.entrylowersection .aliases {
  font-size: 0.8em;
}
.entrylowersection .icons,
.entrylowersection .ratings {
  font-size: 0.8em;
}

#mod-glossary-index .cell {
  font-size:0.8em;
}


/***
 *** Modules: Journal
 ***/
#mod-journal-view .lastedit,
#mod-journal-view .editend {
  font-size: 0.7em;
}
#mod-journal-view .author {
  font-size: 1em;
  font-weight: bold;
}
#mod-journal-view .time {
  font-size: 0.7em;
  font-style: italic;
}
#mod-journal-view .grade {
  font-weight: bold;
  font-style: italic;
}

#mod-journal-index .cell {
  font-size:0.8em;
}

/***
 *** Modules: Label
 ***/

/***
 *** Modules: Lesson
 ***/

#mod-lesson-index .cell {
  font-size:0.8em;
}

/***
 *** Modules: Quiz
 ***/

/* ou-specific begins */
#quiznavigation .qnbutton {
  font-family: inherit;
  font-size: 1em;
  line-height: 1.5em !important;
  font-weight: bold;
  text-decoration: none;
}
#quiznavigation .qnbutton:hover {
  text-decoration: underline;
}
/* ou-specific ends */

/***
 *** Modules: Resource
 ***/

#mod-resource-index .cell {
  font-size:0.8em;
}

.mod-resource .modified {
  font-size:0.6em;
}

.ims-nav-dimmed,
.ims-nav-button {
  font-size:0.8em;
}

#ims-toc-selected {
  font-weight: bold;
}

#ims-menudiv {
  font-size:0.8em;
}

/***
 *** Modules: Scorm
 ***/

#mod-scorm-index .cell {
  font-size:0.8em;
}

/***
 *** Modules: Survey
 ***/

#mod-survey-index .cell {
  font-size:0.8em;
}

/***
 *** Modules: Wiki
 ***/

#mod-wiki-index .cell {
  font-size:0.8em;
}

/***
 *** Modules: Workshop
 ***/

#mod-workshop-index .cell {
  font-size:0.8em;
}


#thegroup, #thegrouping, #dummygrouping {
  font-size: 0.8em;
  /*letter-spacing: -0.01em;*/
  display: block;
}


/***
 *** Phpinfo display
 ***/
.phpinfo table {
  border-collapse: collapse;
}
.phpinfo .center {
  text-align: center;
}
.phpinfo .e, .v, .h {
  border: 1px solid #000000;
  font-size: 0.8em;
  vertical-align: baseline;
}
.phpinfo .e {
  background-color: #ccccff;
  font-weight: bold;
  color: #000000;
}
.phpinfo .h {
  background-color: #9999cc;
  font-weight: bold; color: #000000;
}
.phpinfo .v {
  background-color: #cccccc;
  color: #000000;
}

.sideblock .content h3.eventskey {
    font-size:0.8em;
}

/* ou-specific begins */
/***
 *** Help files
 ***/

#help h1 {
	text-align: center;
	font-size: 1em;			
}

/***
 *** Workflow system
 ***/

.workflow {
	text-align: left;
}

.workflow h2 {
	font-size: 1em;
}

p.comment {
	font-weight: bold;
}
/* ou-specific ends */
/***** standard/styles_fonts.css end *****/

/***** standard/styles_color.css start *****/

/*******************************************************************
 styles_color.css

 This CSS file contains all color definitions like
 background-color, font-color, border-color etc.

 Styles are organised into the following sections:

  core
  header
  footer

  admin
  blocks
  calendar
  course
  doc
  login
  message
  question
  tabs
  user

  various modules

*******************************************************************/

/***
 ***  Core
 ***/

a:link,
a:visited {
  color:#0000FF;
}

a.dimmed:link,
a.dimmed:visited {
  color:#AAAAAA;
}

a:hover {
  color:#FF0000;
}

a.autolink:link,
a.autolink:visited {
  color:#000000;
  background: #DDDDDD;
}

a.autolink.glossary:hover {
  cursor: help;
}

img.userpicture,
img.grouppicture {
  border-color:#000
}

.block_online_users .listentry img {
  border:#888
}

body {
  background-color:#FAFAFA;
  color:#000;
}

th.header,
td.header,
div.header {
  border-color:#DDDDDD;
}

.navbar {
  border-color:#DDDDDD;
}

table.formtable tbody th {
  background-color: transparent;
  background-image: none;
}

.highlight {
  background-color:#AAFFAA;
}

.highlight2 {
  color:#AA0000; /* highlight missing terms in forum search */
}

/* Alternate rows even */
.r0 {
}

/* Alternate rows odd */
.r1 {
}

/* notification messages (can be good or bad) */
.notifyproblem {
  color:#660000;
}
.notifysuccess {
  color:#006600;
}
.notifytiny {
  color:#000044;
}

#admin-auth_config .required {
  background-color:#DDDDDD;
}

.generalbox {
  border-color:#DDDDDD;
}
.informationbox {
  border-color:#DDDDDD;
}
.feedbackbox {
  border-color: #888888;
}
.feedbackby {
  background-color:#BBBBBB;
}

.noticebox {
  border-color:#DDDDDD;
}

.errorbox {
  color:#ffffff;
  border-color:#660000;
  background-color:#990000;
}

.errorboxcontent {
  background-color:#FFBBBB;
}

.tabledivider {
  border-color:#DDDDDD;
}

.sitetopic {
}

.sitetopiccontent {
  border-color:#DDDDDD;
  background-color:#FFFFFF;
}

.dimmed_text,
.dimmed_text a {
  color:#AAAAAA;
}

.teacheronly {
  color:#990000;
}

.unread {
  background: #FFD991;
}

.censoredtext {
  color:#000000;
  background:#000000;
}

/* ou-specific begins */
.admin_note {
	color:#c10031;
}
/* ou-specific ends */

/* kept for backward compatibility with some non-standard modules
   which use these classes for various things */
.generaltab, .generaltabinactive {
  background-color:#BBBBBB;
}
.generaltabselected {
  background-color:#DDDDDD;
}
.generaltabinactive {
  color:#CCCCCC;
}


.generaltable .cell {
  background-color:#FFFFFF;
  border-color:#EEEEEE;
}

.generaltable {
  border-color:#EEEEEE;
}



/***
 *** Header
 ***/

.breadcrumb .sep, #admin-report-unittest-index .sep {
  color:#aaa;
}

.navigation select {
  background-color:#FFFFFF;
}

.navigation optgroup {
  background-color:#EEEEEE;
}

.navigation optgroup option {
  background-color:#FFFFFF;
}

/***
 *** Footer
 ***/

/*Accessibility: .debugwarn */
.debugwarn {
  text-align: center;
  background: #FDD;
}

.homelink a:link,
.homelink a:visited,
.homelink a:hover {
  color: #000;
  text-decoration: none;
}
.homelink a:link,
.homelink a:visited {
  border-top: 1px solid #cecece;
  border-bottom: 2px solid #4a4a4a;
  border-left: 1px solid #cecece;
  border-right: 2px solid #4a4a4a;
}
.homelink a:hover {
  border-bottom: 1px solid #cecece;
  border-top: 2px solid #4a4a4a;
  border-right: 1px solid #cecece;
  border-left: 2px solid #4a4a4a;
}


/***
 *** Admin
 ***/

.admin .generalboxcontent {
  background-color:#EEEEEE;
}

.admin .generalbox {
  border-color:#BBBBBB;
  background-color:#EEEEEE;
}

.admin .informationbox {
  border-color:#BBBBBB;
  background-color:#FFFFFF;
}

#admin-index .adminerror {
  background-color:#ff6666;
}

body#admin-index .c0 {
  background-color: #FAFAFA;
}

body#admin-blocks table#blocks .r0,
body#admin-blocks table#incompatible .r0 {
  background-color: #f0f0f0;
}

body#admin-blocks table#blocks .r1,
body#admin-blocks table#incompatible .r1 {
  background-color: #fafafa;
}

body#admin-blocks table#incompatible td.c0 {
  color: #ff0000;
}

table.flexible  .r0 {
  background-color: #f0f0f0;
}

table.flexible .r1 {
  background-color: #fafafa;
}

#admin-report-unittest-index span.notice {
  color: teal;
}

#admin-report-unittest-index b.pass {
  color: green;
}

#admin-report-unittest-index b.fail, b.exception {
  color: red;
}

#admin-report-unittest-index .exception, .exception pre {
  background-color: #fdd;
}

#admin-report-unittest-index .unittestsummary {
  color: white;
}

#admin-report-unittest-index .unittestsummary.failed {
  background-color: red;
}

#admin-report-unittest-index .unittestsummary.passed {
  background-color: green;
}

#admin-report-security-index .statuswarning {
  background-color: #f0e000;
}

#admin-report-security-index .statusserious {
  background-color: #f07000;
}

#admin-report-security-index .statuscritical {
  background-color: #f00000;
}

.plugincompattable td.ok {
    color: #008000;
}

.plugincompattable td.warning {
    color: #DF7800;
}

.plugincompattable td.error {
    color: #DF0000;
}

/* Admin settings */

#adminsettings fieldset {
    background-color: #EEE;
    border-color: #BBB;
    color: #000;
}

#adminsettings fieldset.error {
  border: 1px solid red;
}

#adminsettings fieldset.error legend {
  color: red;
}

#adminsettings .form-shortname {
    color: #888;
}

#adminsettings .form-overridden {
    background-color: #ff6;
}

#adminsettings .form-warning {
    background-color: #f88;
}

#adminsettings .form-defaultinfo {
    color: #888;
}

#adminsettings .form-item .pathok {
    color: green;
}

#adminsettings .form-item .patherror {
    color: red;
}

.block_admin_tree.sideblock .link.current {
  background-color:#EEEEEE;
}

.block_admin_tree.sideblock .link.criticalnotification {
  background-color:#ff6666;
}

.block_admin_tree.sideblock .link.hidden {
  color:#999999;
}


#admin-lang .translator {
  border-color: #dddddd;
}

#admin-lang .translator tr.r0 {
  background-color: #f0f0f0;
}

#admin-lang .translator tr.r1 {
  background-color: #fafafa;
}

#admin-lang .translator .strkey {
  color: #666666;
}

#admin-lang .translator .bothmissing {
  background-color: #ef6868;
}

#admin-lang .translator .mastermissing {
  background-color: #feff7f;
}

#admin-lang .translator .localdifferent {
  background-color: #aaffaa;
}

.environmenttable .error {
    background-color : red;
    color : inherit;
}

.environmenttable .warn {
    background-color : yellow;
}

.environmenttable .ok {
    background-color : lime;
}

#admin-uploaduser .uuinfo {
    background-color: #8e8;
}

#admin-uploaduser .uuwarning {
    background-color: #ee8;
}

#admin-uploaduser .uuerror {
    background-color: #e99;
}

/***
 *** Blocks
 ***/

.sideblock .header {
  border-color: #dddddd;
}

.sideblock .content {
  border-color: #dddddd;
  background-color:#FCFCFC;
}

.sideblock .content hr {
  border-top-color:#999999;
}

#left-column .hidden .header,
#right-column .hidden .header
{
  border-bottom-color: #dddddd;
}


/***
 *** Blogs
 ***/

.blogpost.blogdraft .content {
  background-color:#EEEEEE;
}

.block_blog_tags .official {
  color: #0000cc;
}

.block_blog_tags .personal {
  color: #666699;
}


/***
 *** Calendar
 ***/

#calendar .maincalendar,
#calendar .sidecalendar {
  border-color: #DDDDDD;
}

#calendar .maincalendar table.calendarmonth th {
  border-color: #000000;
}

table.minicalendar {
  border-color: #DDDDDD;
}

#calendar .maincalendar .eventlist .event {
  border-color:#DDDDDD;
}

#calendar .maincalendar .eventlist .event .topic,
#calendar .maincalendar .eventlist .event .picture,
#calendar .maincalendar .eventlist .event .side {
  background-color:#EEEEEE;
}

#calendar .maincalendar table.calendarmonth ul.events-underway {
  color:#999999;
}

/*Accessibility: increase contrast, darker link/weekend colors, lighter event backgrounds. */
.minicalendar a,
.calendarmonth a {
  color:#000077;
}

#calendar .event_global,
.minicalendar .event_global,
.block_calendar_month .event_global {
  border-color:#D6F8CD !important; /* #C5E7BC */
  background-color:#D6F8CD;
}

#calendar .event_course,
.minicalendar .event_course,
.block_calendar_month .event_course {
  border-color:#FFD3BD !important; /* #EEC2AC */
  background-color:#FFD3BD;
}

/* ou-specific begins */
#calendar .event_course0,
.minicalendar .event_course0,
.block_calendar_month .event_course0 {
  border-color:#FFD3BD !important; /* #EEC2AC */
  background-color:#FFD3BD;
}
 
#calendar .event_course1,
.minicalendar .event_course1,
.block_calendar_month .event_course1 {
  border-color:#99CCFF !important; /* #EEC2AC */
  background-color:#99CCFF;
}
 
#calendar .event_course2,
.minicalendar .event_course2,
.block_calendar_month .event_course2 {
  border-color:#FFFFCC !important; /* #EEC2AC */
  background-color:#FFFFCC;
}
/* ou-specific ends */

#calendar .event_group,
.minicalendar .event_group,
.block_calendar_month .event_group {
  border-color:#FEE7AE !important; /* #EDD69D */
  background-color:#FEE7AE;
}

#calendar .event_user,
.minicalendar .event_user,
.block_calendar_month .event_user {
  border-color:#DCE7EC !important; /* #CBD6DB */
  background-color:#DCE7EC;
}

#calendar .duration_global,
.minicalendar .duration_global {
  border-top-color:#66D14D !important;
  border-bottom-color:#66D14D !important;
}

#calendar .duration_course,
.minicalendar .duration_course {
  border-top-color:#FF9966 !important;
  border-bottom-color:#FF9966 !important;
}

#calendar .duration_course0,
.minicalendar .duration_course0 {
  border-top-color:#FF9966 !important;
  border-bottom-color:#FF9966 !important;
}

#calendar .duration_course1,
.minicalendar .duration_course1 {
  border-top-color:#0099FF !important;
  border-bottom-color:#0099FF !important;
}

#calendar .duration_course2,
.minicalendar .duration_course2 {
  border-top-color:#FFFF00 !important;
  border-bottom-color:#FFFF00 !important;
}

#calendar .duration_group,
.minicalendar .duration_group {
  border-top-color:#FBBB23 !important;
  border-bottom-color:#FBBB23 !important;
}

#calendar .duration_user,
.minicalendar .duration_user {
  border-top-color:#A1BECB !important;
  border-bottom-color:#A1BECB !important;
}

#calendar .weekend,
.minicalendar .weekend {
  color:#990000;
}

#calendar .today,
.minicalendar .today {
  border-color:#444444;
}

#calendar .nottoday,
.minicalendar .nottoday {
  border-color:#eeeeee;
}

.cal_popup_fg {
  background-color:#FFFFFF;
}

.cal_popup_bg {
  border-color:#000000;
  background-color:#FFFFFF;
}

#calendar .maincalendar .filters table,
#calendar .sidecalendar .filters table,
.block_calendar_month .filters table {
  background-color: #EEEEEE;
}

/* ou-specific begins (until 2.0) */
/* Deleted rule #calendar td.sidecalendar .sideblock
#calendar td.sidecalendar .sideblock {
  border-color: #DDDDDD;
}
*/
/* ou-specific ends (until 2.0) */


/***
 *** Course
 ***/

/* course, entry-page, login */
.headingblock {
  border-color:#DDDDDD;
}

/* course */
.headingblock .outline {
  border-color:#DDDDDD;
}

#course-view .weekscss .section,
#course-view .section td {
  border-color:#DDDDDD;
}

/* .content should match the body background, sides are white. */
#course-view .weekscss .content {
  background: #FAFAFA;
}

#course-view .weekscss .section,
#course-view .section td.side {
  background: #FFFFFF;
}

#course-view .section .side {
}

#course-view .section .left {
}

#course-view .section .right {
}

#course-view .weekscss .current,
#course-view .current td.side {
  background: #FFD991;
}

#course-view .weekscss .hidden,
#course-view .hidden td.side {
  background: #DDDDDD;
}


#course-view .topics {
}

#course-view .weeks {
}

#course-view .section .spacer {
}

#course-view .section .weekdates {
  color: #777777;
}

#course-view .weekscss .weekdates {
  color: #333333;
}

.categoryboxcontent,
.coursebox {
  border-color:#DDDDDD;
}
body#course-user .section {
  border-color:#AAAAAA;
}

#admin-report .plugin,
#course-report .plugin,
#course-import .plugin {
  margin-bottom: 20px;
  margin-left:10%;
  margin-right:10%;

  border-bottom: 1px solid #cecece;
  border-top: 1px solid #cecece;
  border-right: 1px solid #cecece;
  border-left: 1px solid #cecece;

  background-color: #fdfdfd;
}

/**
 * unread count background on
 * course/view.php 
 **/
#course-view .unread{
	background: #9EBEFF; 
}


/***
 *** Doc
 ***/

/***
 *** Grades
 ***/

body#grade-index .grades {
  border-color:black;
}

body#grade-index .grades td {
  border-color:#e0e0e0;
}

body#grade-index .grades .r0 {
  background-color: #ffffff;
}

body#grade-index .grades .r1 {
  background-color: #f0f0f0;
}

td.grade div.overridden {
  background-color: #DDDDDD;
}

.grade-report-grader table#user-grades td.cell span.gradepass {
  background-color: #C2EBBD; 
}

.grade-report-grader table#user-grades td.cell span.gradefail {
  background-color: #EBC4BD; 
}

/* grade edit */

.grade-edit-tree .moving {
  background-color: #E8EEF7;
}

/***
 *** Login
 ***/

.loginbox,
.loginbox.twocolumns .loginpanel,
.loginbox .subcontent {
  border-color:#DDDDDD;
}


/***
 *** Message
 ***/

table.message_search_results td {
  border-color:#DDDDDD;
}

.message.other .author {
  color: #8888CC;
}

.message.me .author {
  color: #999999;
}

.message .time {
  color: #999999;
}

.message .content {
}

/***
 *** Question
 ***/

/* ou-specific begins new question engine */
/* Comment out core code.
.que {
    border-color: #DDD;
}
*/
.que .info {
    background: #eee;
}
.que .formulation {
    background: #E4F1FA;
}
.que .outcome {
    background: #FFF3BF;
}
/* ou-specific begins 10271 */
.que.multichoice .answer .specificfeedback {
    display: inline;
    padding: 0 0.7em;
    background: #FFF3BF;
}
.que.multichoice .answer .specificfeedback * {
    display: inline;
    background: #FFF3BF;
}
/* ou-specific ends 10271 */
.que .comment {
    background: #e0ffe0;
}
.que .history {
    background: #eee;
}
/* ou-specific ends */
.que .r0 {
    background-color: #F5F5F5;
}
.que .r1 {
    background-color: #EEE;
}
.calculated .answer,
.numerical .answer,
.shortanswer .answer {
    background-color: #EEE;
}
.essay .answerreview {
    background-color: #EEE;
}
.que .feedback {
  border-color: #DDD;
}

/* ou-specific begins new question engine */
.que .notanswered,
/* ou-specific ends */
.que .incorrect {
    background-color: #faa;
}

.que.multianswer .incorrect {
    background-color: #faa;
}
.que .partiallycorrect {
    background-color: #ff9;
}
.que .correct {
    background-color: #afa;
}
/* ou-specific begins new question engine */
.que .validationerror {
    color: #a00;
}
/* ou-specific ends */


/***
 *** Logs
 ***/

.logtable .r1 {
  background-color:#EEEEEE;
}


/***
 *** Tabs
 ***/



/***
 *** User
 ***/

.userpicture {
}

.userinfobox {
  border-color: #DDDDDD;
}
.groupinfobox {
  border-color: #DDDDDD;
}

/***
 *** Modules: Chat
 ***/

#mod-chat-gui_basic .text,
#mod-chat-gui_header_js-jsupdate .text {
  color:#000
}

#mod-chat-gui_basic .event,
#mod-chat-gui_basic .title,
#mod-chat-gui_header_js-jsupdate .event,
#mod-chat-gui_header_js-jsupdate .title {
  color:#888
}

#mod-chat-gui_header_js-chatinput .wait {
    background: #dddddd;
}

#mod-chat-view #chatcurrentusers .idletime {
  color: #888888;
}

/***
 *** Modules: Choice
 ***/

/***
 *** Modules: Forum
 ***/

/**
 * Patch MDL-18971 version 3 puts the forum classes
 * in page sequence. Also added one course class (above)
 * for course/view.php 
 **/

/** The location of these classes is unknown
 * Commented out with patch MDL-18971 version 3
 **/
/*.sideblock .post .head {
  color:#555555; 
}*/

/** Unread Posts count background on
 * mod/forum/index.php
 **/
#mod-forum-index .unread {
	background: #9EBEFF;
}

/** wire frame around cells in 
 * mod/forum/view.php 
 **/
.forumheaderlist td {
  border-color: #FFFFFF;
}

/** Discussion column background in 
 * mod/forum/view.php 
 * The inner class is actually "topic starter"
 **/
.forumheaderlist .discussion .starter {
  background:#DDDDDD;
}

/** unread column background on
 * mod/forum/view.php 
 **/
#mod-forum-view .unread{
	background: #9EBEFF;
}

/** border around posts in 
 * mod/forum/view.php (forumheaderlist) and 
 * mod/forum/discuss.php (forumpost)
 **/
.forumheaderlist,
.forumpost {
  border-color:#DDDDDD;
}

/** post body color in 
 * mod/forum/discuss.php 
 **/
.forumpost .content {
  background: #FFFFFF;
}

/** left photo section of each post in 
 * mod/forum/discuss.php 
 **/
.forumpost .left {
  background:#EEEEEE;
}

/** line between header and post body in 
 * mod/forum/discuss.php 
 **/
.forumpost .topic {
  border-bottom-color: #EEEEEE;
}

/** header of the first post in 
 * mod/forum/discuss.php 
 **/
.forumpost .starter {
  background:#DDDDDD;
}

/** header of reply posts and
 * lower corners of all posts in 
 * mod/forum/discuss.php 
 **/
#mod-forum-discuss .forumpost {
  background: none;
}

/** inside border of unread posts in nested format in
 * mod/forum/discuss.php 
 **/
#mod-forum-discuss .forumpost.unread .content {
  border-width:2px;
  border-color: #0046C7; 
}

/** headers of unread posts in threaded format in
 * mod/forum/discuss.php 
 **/
#mod-forum-discuss .forumthread.unread {
  background: #9EBEFF; 
}


/***
 *** Modules: Glossary
 ***/

.entryboxheader {
  border-color: #BBBBBB;
}

.entrybox {
  border-color: #BBBBBB;
}

.entry {
}

.glossarypost {
  border-color: #DDDDDD;
}

.glossarypost .entryheader,
.glossarypost .entryapproval,
.glossarypost .picture,
.glossarypost .entryattachment,
.glossarypost .left {
  background-color: #F0F0F0;
}

.glossarycomment {
  border-color: #DDDDDD;
}

.glossarycomment .entryheader,
.glossarycomment .picture,
.glossarycomment .left {
  background-color: #F0F0F0;

}

#mod-glossary-report .generalbox .teacher {
  background: #F0F0F0;
}

.glossarycategoryheader {
  background-color: #dddddd;
}

.glossaryformatheader {
  background-color: #dddddd;
}


/***
 *** Modules: Journal
 ***/

#mod-journal-view .feedbackbox .left,
#mod-journal-view .feedbackbox .entryheader {
  background-color: #dddddd;
}

/***
 *** Modules: Label
 ***/

/***
 *** Modules: Lesson
 ***/

/***
 *** Modules: Quiz
 ***/

table.quizattemptsummary .bestrow td {
  background-color: #e8e8e8;
}
/* ou-specific begins */
.mod-quiz .gradedattempt,
.mod-quiz tr.gradedattempt td {
  background-color: #e8e8e8;
}
/* ou-specific ends */

table.quizreviewsummary th.cell {
  background: #f0f0f0;
}
table.quizreviewsummary td.cell {
  background: #fafafa;
}
/* ou-specific begins new question engine */
/* Comment out core code.
.mod-quiz .highlightgraded {
    background:yellow;
}
*/
#quiznavigation .qnbutton {
  border-color: #bbb;
  background-color: #ddd;
}
#quiznavigation .qnbutton.thispage {
  border-color: #666;
}
#quiznavigation .qnbutton.thispage .thispageholder {
  border: 1px solid #666;
}
#quiznavigation .qnbutton.notyetanswered,
#quiznavigation .qnbutton.requiresgrading,
#quiznavigation .qnbutton.invalidanswer {
  background-color: white;
}
#quiznavigation .qnbutton.correct {
  background-color: #cfc;
}
#quiznavigation .qnbutton.correct .trafficlight {
  border-bottom: 3px solid #080;
}
#quiznavigation .qnbutton.partiallycorrect {
  background-color: #ffa;
}
#quiznavigation .qnbutton.notanswered,
#quiznavigation .qnbutton.incorrect {
  background-color: #fcc;
}
#quiznavigation .qnbutton.notanswered .trafficlight,
#quiznavigation .qnbutton.incorrect .trafficlight {
  border-top: 3px solid #800;
}
/* ou-specific ends */

/* ou-specific begins */
#mod-quiz-report .dubious {
  background-color: #fcc;
}
#mod-quiz-report .highlight {
  background-color: #ffa;
}
#mod-quiz-report .negcovar {
  border: medium solid pink;
}
/* ou-specific ends */

#quiznojswarning {color: red;}
#quiznojswarning {font-size: 0.7em;line-height: 1.1;}
.jsenabled #quiznojswarning {display: none;}

/***
 *** Modules: Resource
 ***/

.ims-nav-dimmed {
  color: #AAAAAA;
  text-decoration: none;
}

.ims-nav-button a:link,
.ims-nav-button a:visited,
.ims-nav-button a:hover {
  color: #000;
  text-decoration: none;
}

.ims-nav-dimmed,
.ims-nav-button a:link,
.ims-nav-button a:visited {
  border-top: 1px solid #cecece;
  border-bottom: 2px solid #4a4a4a;
  border-left: 1px solid #cecece;
  border-right: 2px solid #4a4a4a;
}

.ims-nav-button a:hover {
  border-bottom: 1px solid #cecece;
  border-top: 2px solid #4a4a4a;
  border-right: 1px solid #cecece;
  border-left: 2px solid #4a4a4a;
}

#ims-contentframe,
#ims-contentframe-no-nav {
  border-color: #cecece;
}


/***
 *** Modules: Scorm
 ***/

/***
 *** Modules: Survey
 ***/

#mod-survey-view .r0 {
  background-color: #EEEEEE;
}
#mod-survey-view .r1 {
  background-color: #DDDDDD;
}


/***
 *** Modules: Wiki
 ***/

/***
 *** Modules: Workshop
 ***/

.workshoppostpicture {
  background-color:#FEE6B9;
}

.workshopassessmentheading {
  background-color:#DDDDDD;
}

.error {
  color:#ff0000;
}

#admin-roles-override .capcurrent {
  background-color:#FFFFFF;
  border: 1px solid #cecece;
}

#admin-roles-manage .capdefault {
  background-color:#dddddd;
  border: 1px solid #cecece;
}

#admin-roles-manage .rolecap,
#admin-roles-override .rolecap {
  border:none;
  border-bottom:1px solid;
  border-bottom-color: #cecece;
}

#admin-roles-manage .rolecap .cap-desc .cap-name,
#admin-roles-override .rolecap .cap-desc .cap-name {
  color: #888;
}

form.mform .required label {
  color:#a00;
}
form.mform .fdescription.required {
  color:#a00;
}
form.mform .required .fgroup span label {
  color:#000;
}

/* ou-specific begins */
/***
 *** Workflow system
 ***/

.workflow {
	border-top: 1px solid green;
	border-bottom: 1px solid green;
	background: #efe;
	color: black;
}

.workflow-summary td, .workflow-summary th {
	border-bottom: 1px solid white;
    background: #eee;
} 

td.workflow-ready, .workflow-ready td, .workflow-ready th {
	background-color: #fea;
}

td.workflow-active, .workflow-active td, .workflow-active th {
	background-color: #fea;
	border: 2px solid #fc0;
}

td.workflow-complete, .workflow-complete td, .workflow-complete th {
	background-color: #cec;
}

td.workflow-aborted, .workflow-aborted td, .workflow-aborted th {
	background-color: #ecc;
}

td.workflow-unavail, .workflow-unavail td, .workflow-unavail th {
	background-color: #ddd;
}

.ou-editing-disabled {
	border-top: 1px solid red;
	border-bottom: 1px solid red;
	background: #fee;
	color: black;
}
/* ou-specific ends */
/***** standard/styles_color.css end *****/

/***** standard/styles_moz.css start *****/

/*******************************************************************
 styles_moz.css
  
 This CSS file uses the non-standard Mozilla CSS extensions
 to add round corners to the current theme.

 Styles are organised into the following sections:
  core
  header
  footer

  admin
  blocks
  calendar
  course
  doc
  login
  message
  tabs
  user

  various modules

*******************************************************************/



/***
 *** Core
 ***/

.headingblock {
  -moz-border-radius:3px;
}

.notifyproblem {
  -moz-border-radius:10px;
}

.notifysuccess {
  -moz-border-radius:10px;
}
.generalbox {
  -moz-border-radius-topleft:3px;
  -moz-border-radius-topright:3px;
  -moz-border-radius-bottomleft:15px;
  -moz-border-radius-bottomright:15px;
}

.generalboxcontent {
  -moz-border-radius-topleft:3px;
  -moz-border-radius-topright:3px;
  -moz-border-radius-bottomleft:15px;
  -moz-border-radius-bottomright:15px;
}

.noticebox {
  -moz-border-radius:5px;
}

.informationbox {
  -moz-border-radius-topleft:3px;
  -moz-border-radius-topright:3px;
  -moz-border-radius-bottomleft:15px;
  -moz-border-radius-bottomright:15px;
}

.informationboxcontent {
  -moz-border-radius-topleft:3px;
  -moz-border-radius-topright:3px;
  -moz-border-radius-bottomleft:15px;
  -moz-border-radius-bottomright:15px;
}

.sitetopiccontent {
  -moz-border-radius:15px;
}

.headingblock {
  -moz-border-radius:3px;
}

.categorybox, .categoryboxcontent, 
.coursebox {
  -moz-border-radius:10px;
}




/* kept for backward compatibility with some non-standard modules
   which use these classes for various things */
.generaltab, .generaltabinactive{
  -moz-border-radius-topleft:15px;
  -moz-border-radius-topright:15px;
}

.generaltabselected {
  -moz-border-radius-topleft:15px;
  -moz-border-radius-topright:15px;
}


/***
 *** Header
 ***/

/***
 *** Footer
 ***/

/***
 *** Admin
 ***/

/***
 *** Blocks
 ***/

.sideblock.hidden {
  -moz-border-radius: 0px;
}

.sideblock .content {
  -moz-border-radius-bottomleft:20px;
  -moz-border-radius-bottomright:20px;
}

.block_course_summary, .block_course_summary .content {
  -moz-border-radius:20px;
}

.editing .block_course_summary .content {
  -moz-border-radius-topleft:0;
  -moz-border-radius-topright:0;
}


/***
 *** Calendar
 ***/

#calendar .eventlist .event {
  -moz-border-radius-bottomleft:15px;
  -moz-border-radius-bottomright:15px;
}

#calendar .eventlist .event .side {
  -moz-border-radius-bottomleft:15px;
}

#calendar .eventlist .event .description {
  -moz-border-radius-bottomright:15px;
}

#calendar .maincalendar,
#calendar .sidecalendar
{
  -moz-border-radius-bottomright:20px;
  -moz-border-radius-bottomleft:20px;
}

#calendar td.sidecalendar .sideblock {
  -moz-border-radius-bottomright:20px;
  -moz-border-radius-bottomleft:20px;
}

#calendar .maincalendar .filters table,
#calendar .sidecalendar .filters table,
.sideblock.block_calendar_month .filters table
{
  -moz-border-radius:4px;
}

table.minicalendar {
  -moz-border-radius:10px;
}

table.minicalendar td {
  -moz-border-radius:4px;
}

#calendar .maincalendar li.event_course,
#calendar .maincalendar li.event_global,
#calendar .maincalendar li.event_user,
#calendar .maincalendar li.event_group,
#calendar .filters td.event_course,
#calendar .filters td.event_global,
#calendar .filters td.event_user,
#calendar .filters td.event_group {
  -moz-border-radius:4px;
}

/***
 *** Course
 ***/
body#course-user .section {
  -moz-border-radius:20px;
}


/***
 *** Doc
 ***/

/***
 *** Login
 ***/
.loginbox {
  -moz-border-radius-bottomleft:20px;
  -moz-border-radius-bottomright:20px;
}

.loginbox .content.left {
  -moz-border-radius-bottomleft:20px;
}
.loginbox .content.right {
  -moz-border-radius-bottomright:20px;
}

/***
 *** Message
 ***/

/***
 *** Tabs
 ***/

/***
 *** User
 ***/
.userinfobox {
  -moz-border-radius-bottomleft:20px;
  -moz-border-radius-bottomright:20px;
}

.groupinfobox {
  -moz-border-radius-bottomleft:20px;
  -moz-border-radius-bottomright:20px;
}
#user-view .left {
  -moz-border-radius-bottomleft:20px;
}

/***
 *** Modules: Assignment
 ***/

/***
 *** Modules: Chat
 ***/

/***
 *** Modules: Choice
 ***/

/***
 *** Modules: Forum
 ***/
.forumpost {
  -moz-border-radius-bottomleft:20px;
  -moz-border-radius-bottomright:20px;
}

.forumpost .side {
  -moz-border-radius-bottomleft:20px;
}

.forumpost .content {
  -moz-border-radius-bottomright:20px;
}

.forumpost .message {
  -moz-border-radius-bottomright:20px;
}


/***
 *** Modules: Glossary
 ***/
.glossarycategoryheader {
  -moz-border-radius-topleft:15px;
  -moz-border-radius-topright:15px;
}

.glossaryformatheader {
  -moz-border-radius-topleft:15px;
  -moz-border-radius-topright:15px;
}

.entryboxheader {
  -moz-border-radius-topleft:10px;
  -moz-border-radius-topright:10px;
}

.entrybox {
  -moz-border-radius-bottomleft:10px;
  -moz-border-radius-bottomright:10px;
}

.glossarypost {
  -moz-border-radius-bottomleft:15px;
  -moz-border-radius-bottomright:15px;
}

.glossarypost .side {
  -moz-border-radius-bottomleft:15px;
}

.encyclopedia .entrylowersection {
  -moz-border-radius-bottomright:15px;
}
.glossarycomment {
  -moz-border-radius-bottomleft:20px;
  -moz-border-radius-bottomright:20px;
}

.glossarycomment .side {
  -moz-border-radius-bottomleft:20px;
}

.glossarycomment .entry {
  -moz-border-radius-bottomright:20px;
}


/***
 *** Modules: Journal
 ***/

#mod-journal-view .feedbackbox {
  -moz-border-radius-bottomleft:15px;
  -moz-border-radius-bottomright:15px;
}
#mod-journal-view .feedbackbox .side {
  -moz-border-radius-bottomleft:15px;
}
#mod-journal-view .feedbackbox .entrycontent {
  -moz-border-radius-bottomright:15px;
}

/***** standard/styles_moz.css end *****/

/***** /mod/assignment/styles.php start *****/

#mod-assignment-submissions .feedback .content,
#mod-assignment-submissions .feedback .topic,
#mod-assignment-submissions .feedback .picture
{
  padding: 10px;
  border-width:1px;
  border-style:solid;
  border-color:#DDDDDD;
}

#mod-assignment-submissions form#options div {
  text-align:right;
  margin-left:auto;
  margin-right:20px;
}

.mod-assignment .feedback .files {
  float: right;
  background-color: #EFEFEF;
  padding:5px;
}

.mod-assignment .feedback .grade,
.mod-assignment .feedback .outcome,
.mod-assignment .feedback .finalgrade {
  float: right;
}

.mod-assignment .feedback .disabledfeedback {
  width: 500px;
  height: 250px;
}

.mod-assignment .feedback .from {
  float: left;
}

.mod-assignment .feedback .time {
  font-size: 0.8em;
}

.mod-assignment .late {
  color: red;
}

.mod-assignment .files img {
  margin-right: 4px;
}

.mod-assignment .files a {
  white-space:nowrap;
}

#mod-assignment-submissions .generaltable .r1 {
  background-color: #FFFFFF;
}

#mod-assignment-submissions .header .commands {
  display: inline;
}

#mod-assignment-submissions .s0 {
  background: #FFD991;
}

#mod-assignment-submissions table.submissions td,
#mod-assignment-submissions table.submissions th
{
  border-width: 1px;
  border-style: solid;
  border-color: #DDDDDD;
  vertical-align: middle;
  padding-left: 5px;
  padding-right: 5px;
}

#mod-assignment-submissions .submissions .grade {
  text-align: right;
  font-weight:bold;
}

#mod-assignment-submissions .picture {
  width: 35px;
}

#mod-assignment-submissions .fullname {
  text-align: left;
}

#mod-assignment-submissions .timemodified,
#mod-assignment-submissions .timemarked
{
  text-align: left;
  font-size: 0.9em;
}

#mod-assignment-submissions .status {
  text-align: center;
}

#mod-assignment-submissions .submissions .outcome,
#mod-assignment-submissions .submissions .finalgrade {
  text-align: right;
}

#mod-assignment-view #online .singlebutton {
  text-align: center;
}

#mod-assignment-view #dates {
  font-size: 0.8em;
  margin-top: 30px;
  margin-bottom: 30px;
}

#mod-assignment-view #dates .c0{
  text-align:right;
  font-weight:bold;
}

#mod-assignment-view .feedback {
  border-width:1px;
  border-style:solid;
  border-color:#DDDDDD;
  margin-top: 15px;
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
}

#mod-assignment-view .feedback .topic {
  padding: 4px;
  border-style:solid;
  border-width: 0px;
  border-bottom-width: 1px;
  border-color:#DDDDDD;
}

#mod-assignment-view .feedback .fullname {
  font-weight: bold;
}

#mod-assignment-view .feedback .date {
  font-size: 0.8em;
}

#mod-assignment-view .feedback .content {
  padding: 4px;
}

#mod-assignment-view .feedback .grade {
  text-align: right;
  font-weight:bold;
}

#mod-assignment-view .feedback .left {
  width: 35px;
  padding: 4px;
  text-align: center;
  vertical-align: top;
}

#mod-assignment-submissions .qgprefs #optiontable {
  text-align:right;
  margin-left:auto;
}

#mod-assignment-submissions .fgcontrols {
  margin-top: 1em;
  text-align:center;
}

#mod-assignment-submissions .fgcontrols .fastgbutton{
  margin-top: 0.5em;
}

/***** /mod/assignment/styles.php end *****/

/***** /mod/audiorecorder/styles.php start *****/

.audiorecorder-v {
    text-align: center;
    font-size: 0.85em;
    color: #333;
}
.audiorecorder-container {
    width: 512px;
    margin: 1em auto;
}
#mod-audiorecorder-view .computing-guide {
    display: block;
    float: none;
    text-align: right;
    width: 512px;
    margin: 1em auto;
}
/***** /mod/audiorecorder/styles.php end *****/

/***** /mod/choice/styles.php start *****/

.mod-choice .results {
  border-collapse: separate;
}

.mod-choice .results .data {
  border-width:1px;
  border-style:solid;
  border-color:#999;
}
/***** /mod/choice/styles.php end *****/

/***** /mod/data/styles.php start *****/

#mod-data-view #sortsearch .c0 {
  text-align: right;
}

#mod-data-view .approve img.icon {
  width:34px;
  height:34px;
}

#mod-data-preset .presetmapping {
  text-align: center;
}

#mod-data-preset .presetmapping table {
  text-align: left;
  margin-left: auto;
  margin-right: auto;
}

#mod-data-preset .overwritesettings {
  margin-bottom: 1em;
}

.mod-data-field .c0 {
  text-align: right;
}

.mod-data-field .fieldadd,
.mod-data-field .sortdefault {
  margin-bottom: 1em;
  margin-top: 1em;
}

.mod-data-field .fieldadd select,
.mod-data-field .sortdefault select {
  margin-left: 1em;
}

.mod-data-field .fieldname {
  width:300px;
}

.mod-data-field .fielddescription {
  width:300px;
}

.presetcontrols form {
  display: inline;
}
/***** /mod/data/styles.php end *****/

/***** /mod/dataplus/styles.php start *****/

div#dataplus_templateform{
	margin-left: 20%;
	width: 70%;
}

div.dataplus_templatemenu{
	position: absolute;
	width: 30%;
	left: -35%;
	margin-top: 2em;
	background:#DBEDFF;
	background-image: url('../../mod/dataplus/pix/ftblue-corner-tl.png');
	background-position: top left;
	background-repeat:no-repeat;
}

div.dataplus_templatemenu_topright {
	background-image: url('../../mod/dataplus/pix/ftblue-corner-tr.png');
	background-position: top right;
	background-repeat:no-repeat;

}

div.dataplus_templatemenu_bottomright {
	background-image: url('../../mod/dataplus/pix/ftblue-corner-br.png');
	background-position: bottom right;
	background-repeat:no-repeat;
}

div.dataplus_templatemenu_bottomleft {
	background-image: url('../../mod/dataplus/pix/ftblue-corner-bl.png');
	background-position: bottom left;
	background-repeat:no-repeat;
	padding: 8px;
}

div.dataplus_templatemenu_bottomleft ul{
	list-style-type: none;
}

div.dataplus_templatemenu_bottomleft a{
	color: #000000;
	text-decoration: none;
}

div.dataplus_template_buttons{
	display: block;
	width: 100%;
	text-align: center;
}

div.dataplus_template_buttons input{
    font-size: 0.9em;
    width: 24%;
}/***** /mod/dataplus/styles.php end *****/

/***** /mod/elluminatelive/styles.php start *****/

/* $Id$ */

.elluminateliveboundarytime {
    text-align: center;
    font-size: 0.8em;
}


.elluminateliverecordingmode {
    text-align: center;
    font-size: 0.7em;
}


.elluminateliveeditmoderators {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}


.elluminateliveeditparticipants {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}


.elluminatelivepreload {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}


.elluminatelivejoinmeeting {
    text-align: center;
    font-size: 1.7em;
    font-weight: bold;
}


.elluminateliveverifysetup {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}

.elluminateliverecording {
    text-align: center;
    font-size: 1em;
}

.elluminateliverecording .description {
    font-style: italic;
}

.elluminateliveattendance {
    text-align: center;
    font-size: 1em;
}
.elluminateliverecordingdescriptionedit {
    text-align: center;
}/***** /mod/elluminatelive/styles.php end *****/

/***** /mod/forum/styles.php start *****/

/* ou-specific: entire file is OU-specific */
.forumpost .summarycontent {
  margin: 0.5em 0 0.5em 4px;
}

/* Changes for adding block support */
#mod-forum-view #left-column,
#mod-forum-discuss #left-column {
	float:left;
}
#mod-forum-view .box {
	clear:none;
}

/* Blocks on discussion page do not work in backup so they should not be added.
   This feature is only for navblock/other ephemeral blocks. */
#mod-forum-discuss .block_adminblock {
	display:none;
}
/***** /mod/forum/styles.php end *****/

/***** /mod/forumng/styles.php start *****/

#mod-forumng-view #left-column {
    width:12em;
    float:left;
}
#mod-forumng-view #right-column {
    width:12em;
    float:right;
}
#mod-forumng-view #middle-column.has-right-column {
    margin-right:13em;
}
#mod-forumng-view #middle-column.has-left-column {
    margin-left:13em;
}
#mod-forumng-view .block_adminblock select {
    max-width:12em;
}
#mod-forumng-view #footer {
    clear:left;
}
a.forumng-iconlink:link,
a.forumng-iconlink:visited,
a.forumng-iconlink:active,
a.forumng-iconlink:hover {
    text-decoration: none;
    color: black;
}
.forumng-iconlink:hover .forumng-textbyicon {
    text-decoration: underline;
}

.forumng-iconlink img {
    position: relative;
    top: 4px;
}

.forumng-feedlinks a:link,
.forumng-feedlinks a:visited,
.forumng-feedlinks a:active {
    text-decoration: none;
    color: black;
}
.generaltable .forumng-feedlinks a:link,
.generaltable .forumng-feedlinks a:visited,
.generaltable .forumng-feedlinks a:active {
    color: black;
}

.forumng-feedlinks a:hover {
    text-decoration: underline;
}
.forumng-feedlinks a.forumng-iconlink:hover {
    text-decoration: none;
}


.forumng-errormessage {
    font-size:0.85em;
    color:#333;
    margin:1em 0;
}

.forumng-subscribecell form,
.forumng-subscribecell div {
    display:inline;
}
.forumng-subscribecell input,
.forumng-feedlinks {
    font-size:0.85em;
}
.forumng-subscribecell {
    white-space: nowrap;
}

#mod-forumng-index .generaltable {
    width: 100%;
    margin-top: 1em;
    margin-bottom: 1em;
}
.forumng-allsubscribe {
    text-align: center;
}
.forumng-allsubscribe form,
.forumng-allsubscribe div {
    display: inline;
}


#mod-forumng-view .generaltable {
    width: 100%;
}
#mod-forumng-view .generaltable th {
    text-align: left;
}
.forumng-startedby img {
    margin-right: 8px;
}

.forumng-intro {
    margin: 1em 0;
}

form.forumng-paste-buttons {
    margin-left: 0.85em;
    padding: 0.7em 0.5em;
    background: #FFD991;
}
.ie7 form.forumng-paste-buttons {
    padding: 0.5em 0.5em;
}

#forumng-buttons {
    margin:0 0 1em;
}
#mod-forumng-view #forumng-buttons {
    margin-top:0.6em;
}

#mod-forumng-subscribers #forumng-buttons {
    margin-bottom: 1em;
}

.forumng-subscribe-options p,
.forumng-subscribe-options form,
.forumng-subscribe-options form div {
    display:inline;
}
.forumng-subscribe-options form {
    margin-left: 1em;
}
.forumng-subscribe-admin {
    font-size: 0.85em;
}

.forumng-subscribe-options {
    margin-top: 2em;
}
.forumng-subscribe-options h3 {
    margin: 0em;
    font-size: 1em;
}

.forumng-archivewarning {
    margin:1em 0;
    color: red;
}

.forumng-timeout td.cell,
.forumng-timeout td.cell a:link,
.forumng-timeout td.cell a:visited,
.forumng-timeout td.cell a:active,
.forumng-deleted td.cell,
.forumng-deleted td.cell a:link,
.forumng-deleted td.cell a:visited,
.forumng-deleted td.cell a:active {
    color:#888;
}
.forumng-deleted .forumng-subject {
    text-decoration:line-through;
}

#mod-forumng-view .groupselector,
#mod-forumng-subscribers .groupselector,
#mod-forumng-feature-readers-readers .groupselector,
#mod-forumng-feature-userposts .groupselector {
    float:none;
}

.forumng-subject img {
  float:left;
  margin-right:8px;
}

.forumng-divider {
    height:8px;
}

.forumng-unreadcount form,
.forumng-unreadcount form div {
    display:inline;
}

a.forumng-sortlink:link,
a.forumng-sortlink:visited {
    text-decoration:none;
}
a.forumng-sortlink:hover {
    text-decoration:underline;
}

.forumng-sortcurrent {
    padding-left:0.3em;
}

#mod-forumng-view .forumng-feedlinks,
#mod-forumng-discuss .forumng-feedlinks {
    margin-top: 0.5em;
}

.forumng-draft-inreplyto {
    font-size: 0.85em;
}

.forumng-drafts {
    margin: 1em 0 2em;
}
.forumng-flagged {
    margin: 2em 0 1em;
}
.forumng-drafts h3,
.forumng-flagged h3 {
    margin:0 0 0.5em;
    font-size: 1em;
}

div.forumng-flag {
    display:inline;
}

.forumng-shareinfo {
    margin: 2em 0 2em;
}


#forumng-arrowback {
    margin: 1em 0;
}

.forumng-replies {
    margin-left: 40px;
}

h2.accesshide {
    margin: 0 0 5px 40px;
    padding-bottom: 5px;
    padding-left:0.5em;
    font-size: 0.85em;
    border-bottom: 1px dotted #aaa;
    top: auto;
    left: -10000px;
}

h2.forumng-author {
    font-size: 1.0em;
    padding-right:0.5em;
    display:inline;
}

.forumng-replies .forumng-replies .forumng-replies .forumng-replies .forumng-replies {
    margin-left: 30px;
}

.forumng-replies .forumng-replies .forumng-replies .forumng-replies .forumng-replies
.forumng-replies .forumng-replies .forumng-replies .forumng-replies .forumng-replies {
    margin-left: 20px;
}

#forumng-main .forumng-stop-indent .forumng-replies{
    margin-left: 0px;
}

.forumng-nojs
.forumng-replies .forumng-replies .forumng-replies .forumng-replies .forumng-replies
.forumng-replies .forumng-replies .forumng-replies .forumng-replies .forumng-replies
.forumng-replies .forumng-replies .forumng-replies .forumng-replies .forumng-replies
.forumng-replies .forumng-replies .forumng-replies .forumng-replies .forumng-replies {
    margin-left: 0px;
}

.forumng-post {
    margin-bottom:1em;
    border:1px solid #aaa;
    padding:0.5em;
    max-width:800px;
}

.forumng-pic {
    float:left;
    width:35px;
}
.forumng-subject,
.forumng-info,
.forumng-summary,
.forumng-deleted-info {
    margin-left:35px;
    padding-left:0.5em;
}

.forumng-info {
    position: relative;
    padding-right: 16px;
}
.forumng-info .forumng-flag {
    position: absolute;
    right: -0.5em;
}

.forumng-deleted .forumng-pic,
.forumng-deselected .forumng-pic{
    opacity:0.5;
    filter: alpha(opacity=50);
}
.forumng-deleted .forumng-info,
.forumng-deleted .forumng-summary .forumng-text,
.forumng-deleted .forumng-message,
.forumng-deleted .forumng-subject,
.forumng-deselected .forumng-info,
.forumng-deselected .forumng-summary .forumng-text,
.forumng-deselected .forumng-message,
.forumng-deselected .forumng-subject {
    color: #888;
}
.forumng-deselected a:link,
.forumng-deselected a:active,
.forumng-deselected a:visited,
.forumng-deselected a:hover {
    color: #7f98b2;
}

.forumng-summary .forumng-text {
    display:inline;
}

.forumng-info {
    font-size:0.85em;
}
.forumng-subject {
    margin-top:0.5em;
}
h3.forumng-subject {
    font-size:1em;
    margin-top:0.5em;
    margin-bottom:0;
}
.forumng-summary h3 {
    font-size:1em;
    margin:0;
    display:inline;
}
.forumng-summary {
    margin-top:0.5em;
}
.forumng-postmain {
    margin-left:35px;
    padding-left:0.5em;
    padding-top:0.5em;
}
.forumng-postfooter {
    margin:0.5em 0 0;
    text-align:right;
}
ul.forumng-commands {
    display: inline;
    margin: 0;
    padding: 0;
    white-space: nowrap;
}
ul.forumng-commands li {
    display:inline;
    list-style-type:none;
    margin:0 0 0 2em;
    padding:0;
}
ul.forumng-commands li {
    font-size: 0.85em;
}
ul.forumng-commands li.forumng-replylink {
    font-size: 1.0em;
}
.forumng-endpost {
    clear:left;
}

.forumng-post.forumng-important {
    background-color: #F0E1B3;
}

.forumng-post.forumng-read {
    color:#222;
}
.forumng-post.forumng-unread {
    background: #FFD991;
}

.forumng-post.forumng-unread .forumng-info {
    font-weight: bold;
}

.forumng-lockmessage .forumng-post {
    background: #FFBBBB;
    margin-bottom: 2em;
}

.forumng-attachments {
    display: block;
    text-align:right;
    font-size: 0.85em;
    margin: 0 0 0.5em;
    padding: 0;
}
.forumng-attachments li {
    display:inline;
    list-style-type:none;
    margin:0 0 0 2em;
    white-space: nowrap;
}
.forumng-attachments a:link,
.forumng-attachments a:visited,
.forumng-attachments a:hover {
    text-decoration: none;
}
.forumng-attachments img {
    vertical-align: -4px;
}
.forumng-attachments a:hover span {
    text-decoration: underline;
}


#forumng-expandall {
    text-align:right;
    margin-bottom:0.5em;
}

#forumng-saveallratings {
    font-size:0.85em;
}

.forumng-deleted-discussion .forumng-post {
    color: #888;
}

.forumng-bad-browser {
    font-size: 0.85em;
    margin-top: 2em;
}

.forumng-bad-browser h3 {
    display: inline;
    margin: 0;
    font-size: 1em;
}

.forumng-bad-browser p {
    display: inline;
    margin: 0;
}

.forumng-selectmode {
    background: #eee;
    padding: 0.5em 0 0;
}
.forumng-selectmode .forumng-feedlinks,
.forumng-selectmode #forumng-arrowback {
    display:none;
}

.forumng-selectintro {
    padding: 0.5em 0 0;
    margin: 0 0 1em;
}
.forumng-selectoutro {
    background:white;
    padding-top: 1em;
}


.forumng-selectmode .forumng-post {
    background-color:white;
}
.forumng-selectmode .forumng-post.forumng-deselected {
    background-color:transparent;
}


#mod-forumng-discuss .mform {
    width: 100%;
    padding: 0;
    display: none;
    margin-bottom: 1em;
}
.ie#mod-forumng-discuss .mform {
    margin-top: 0.5em;
}

#mod-forumng-discuss .mform fieldset {
    padding-top: 5px;
    margin-bottom: 0;
}
#mod-forumng-discuss .mform fieldset.hidden,
#mod-forumng-discuss .mform fieldset.hidden fieldset.fgroup {
    margin-top: 0;
    padding-top: 0;
}

#mod-forumng-discuss .mform fieldset .advancedbutton,
#mod-forumng-discuss .mform fieldset legend {
    display: none;
}

#mod-forumng-discuss fieldset#id_importance {
    margin-top: 0;
    padding-top: 0;
}
#mod-forumng-discuss fieldset#id_attachments {
    padding-bottom: 0;
}

#mod-forumng-discuss .mform .fhtmleditor {
    margin: 0;
    padding: 5px 14px 0 10px;
    width: auto;
}
#mod-forumng-discuss .mform .fhtmleditor textarea {
    width: 100%;
    margin: 0;
}
#mod-forumng-discuss .mform .fdescription.required {
    display: none;
}

a:link.forumng-disabled,
a:visited.forumng-disabled,
a:hover.forumng-disabled,
a:active.forumng-disabled {
    color: #888;
    text-decoration: none;
}

.forumng-timeoutover {
    color: red;
}


.forumng-form-attachments {
    margin: 0;
    display: block;
    padding: 0;
}
.forumng-form-attachments li {
    display: block;
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.forumng-deletefilecheck {
    font-size: 0.85em;
}

.forumng-draftexists {
    width: 80%;
    margin: 1em auto;
    font-weight: bold;
}



.forumng-ratings {
    display:inline;
    font-size: 0.85em;
}
.forumng-ratings select,
.forumng-ratings input {
    font-size: 1.0em;
}

.forumng-ratings .forumng-rating {
    display:inline;
    margin-right: 0.5em;
}

.forumng-ratings .forumng-editrating {
    display:inline;
}

.forumng-ratings img {
    vertical-align:-3px;
}
form.markread input {
    font-size: 0.85em;
}

.forumng-confirmdialog {
    width: 328px;
    background: white;
    border: 1px solid #aaa;
    padding: 10px;
}

.forumng-confirmdialog .forumng-message {
    margin-bottom: 10px;
}

.forumng-confirmdialog input {
    margin-right: 10px;
}

.forumng-confirmdialog h4 {
    margin: 0 0 0.5em;
    font-size: 100%;
}

.forumng-fadepanel {
    background: black;
}

.forumng-highlightbox {
    border: 2px solid yellow;
}


#forumng-features {
    font-size: 0.85em;
    margin-top: 2em;
    line-height: 3;
}
#mod-forumng-view #forumng-features {
    margin-top: 1em;
}

#forumng-features form {
    margin-right: 1em;
}
#forumng-features form,
#forumng-features div,
#forumng-buttons form,
#forumng-buttons div {
    display:inline;
}
#forumng-features .forumng-highlight {
    background: #FFD991;
    padding: 0.7em 0.5em;
}


.forumng-exampleposts {
    margin-top:2em;
}


#mod-forumng-history h2 {
    font-size: 1.0em;
    margin:1em 0;
}


#forumng-groupselector {
    margin-bottom: 1em;
    font-size: 0.85em
}
#forumng-groupselector input,
#forumng-groupselector select {
    font-size: 1.0em;
}
#mod-forumng-feature-readers-readers .generaltable {
    margin-top: 1em;
    margin-bottom: 1em;
}


#mod-forumng-subscribers .generaltable {
    margin-top: 1em;
    margin-bottom: 1em;
}

#mod-forumng-subscribers #forumng-buttons {
    margin-bottom: 1em;
}


#mod-forumng-addattachment,
#mod-forumng-addattachment #page {
    min-width: 370px;
}

.ie#mod-forumng-addattachment #page {
    width: auto;
}

#mod-forumng-addattachment h1 {
    font-size: 0.85em;
    margin: 0;
}

#mod-forumng-addattachment form {
  margin:0;
}

#mod-forumng-addattachment #content {
    margin: 4px;
}

.forumng-addattachment-file {
    float:left;
}

.forumng-addattachment-submit {
    float:left;
    margin-left: 8px;
}

.forumng-addattachment-max {
    clear:both;
    font-size:0.85em;
}

#mod-forumng-addattachment .notifyproblem {
    margin: 0 0 0.5em;
    padding: 0;
    text-align: left;
}

#mod-forumng-addattachment .notifyproblem br {
    display:none;
}


#mod-forumng-feature-forward-forward .generalbox {
    width:50%;
    margin:1em auto;
}
#mod-forumng-feature-forward-forward .generalbox h2 {
    margin:0;
    font-size:1em;
}
.forumng-showemail {
    margin: 2em 0;
}

#mod-forumng-feature-print-print .forumng-showprintable {
    margin: 2em 0;
}
#mod-forumng-feature-print-print .forumng-printable-header {
    border-bottom:1px dotted #aaa;
    padding-bottom:4px;
    margin-bottom:2em;
}
#mod-forumng-feature-print-print .forumng-printable-backlink {
    float:left;
}
#mod-forumng-feature-print-print .forumng-printable-date {
    float:right;
}


#mod-forumng-mod .forumng-convertoffer {
    margin-top: 2em;
}

.forumng-show-dates {
    margin-bottom: 0.5em;
    padding: 5px;
    border: 1px dotted #555;
}


#mod-forumng-search h2 {
clear: left;
margin-top: 0;
padding-top: 1em;
}

.forumng-userpostsheading {
    margin-bottom: 0.5em;
}
.forumng-userpoststable {
    margin-bottom: 0.5em;
}
.forumng-userposts {
    margin-bottom: 0.5em;
}

#mod-forumng-feature-userposts-user .forumng-post {
    margin: 0.5em 0 1em;
}

.ie7 .forumng-manualmark {
    position: relative;
    top: -0.4em;
}
.forumng-manualmark .iconhelp {
    vertical-align: -3px;
}/***** /mod/forumng/styles.php end *****/

/***** /mod/lesson/styles.php start *****/

/***
 *** General styles (scope: all of lesson)
 ***/
 
.mod-lesson .contents {
    text-align: left;
}

.mod-lesson #layout-table {
    width: 100%;
}

.mod-lesson .edit_buttons form,
.mod-lesson .edit_buttons input {
    display: inline;
}

.mod-lesson .clock .content {
    text-align: center;
}

.mod-lesson .addlinks {
    font-size: .8em;
}

.mod-lesson .userinfotable .cell,
.mod-lesson .userinfotable .userpicture {
    vertical-align: middle;
}

.mod-lesson .invisiblefieldset.fieldsetfix {
    display: block;
}

.mod-lesson .invisiblefieldset.fieldsetfix tr {
    text-align: left;
}

/***
 *** Style for view.php
 ***/

#mod-lesson-view .password-form {
    text-align: center;
    margin-top: 20px;
}

#mod-lesson-view .password-form .submitbutton {
    display: inline;
}

/***
 *** Style for essay.php
 ***/

#mod-lesson-essay .graded {
    color:#DF041E;
}

#mod-lesson-essay .sent {
    color:#006600;
}

#mod-lesson-essay .ungraded {
    color:#999999;
}

#mod-lesson-essay .gradetable {
    margin-bottom: 20px;
}

#mod-lesson-essay .buttons {
    text-align: center;
}

/***
 *** Style for responses
 ***/

/* .response style is applied for both .correct and .incorrect */
.mod-lesson .response {
    padding-top: 10px;
}

/* for correct responses (can override .response) */
.mod-lesson .correct {
    /*color: green;*/
}

/* for incorrect responses (can override .response) */
.mod-lesson .incorrect {
    /*color: red;*/
}

/* for highlighting matches in responses for short answer regular expression (can override .incorrect) */
.mod-lesson .matches {
    /*color: red;*/
}

/***
 *** Slide show Style
 ***/

/* NOTE: background color, height and width are set in the lesson settings */
.mod-lesson .slideshow {  
    overflow: auto;
    padding-right: 16px; /* for the benefit of macIE5 only */ 
    /* \ commented backslash hack - recover from macIE5 workarounds, it will ignore the following rule */
    padding-right: 0;
    padding: 15px;
}

/***
 *** Left Menu Styles
 ***/
.mod-lesson .menu .content {
    padding: 0px;
}

.mod-lesson .menu .menuwrapper {
    max-height: 400px;
    overflow: auto;
    vertical-align: top;
    margin-bottom: 10px;
}

.mod-lesson .menu ul {
    list-style: none;
    padding: 5px 0px 0px 5px;
    margin: 0px;
}

.mod-lesson .menu li {
    padding-bottom: 5px;
}

.mod-lesson .leftmenu_selected_link {
}

.mod-lesson .leftmenu_not_selected_link {
}

.mod-lesson .skip {
    position: absolute;
    left: -1000em;
    width: 20em;
}


/***
 *** Lesson Buttons
 ***/

.mod-lesson .lessonbutton a {
  padding-left:1em;
  padding-right:1em;
}

.mod-lesson .lessonbutton a:link,
.mod-lesson .lessonbutton a:visited, 
.mod-lesson .lessonbutton a:hover {
    color: #000;
    text-decoration: none;
}

.mod-lesson .lessonbutton a:link,
.mod-lesson .lessonbutton a:visited {
  border-top: 1px solid #cecece;
  border-bottom: 2px solid #4a4a4a;
  border-left: 1px solid #cecece;
  border-right: 2px solid #4a4a4a;
}

.mod-lesson .lessonbutton a:hover {
  border-bottom: 1px solid #cecece;
  border-top: 2px solid #4a4a4a;
  border-right: 1px solid #cecece;
  border-left: 2px solid #4a4a4a;
}

/* Branch table buttons when displayed horizontally */
.mod-lesson .branchbuttoncontainer.horizontal div,
.mod-lesson .branchbuttoncontainer.horizontal form {
    display: inline;
}

/* Branch table buttons when displayed vertically */
.mod-lesson .branchbuttoncontainer.vertical .lessonbutton {
    padding: 5px;
}

/***
 *** Lesson Progress Bar
 ***    Default styles for this are very basic right now.
 ***    User is supposed to configure this to their liking (like using pictures)
 ***/

.mod-lesson .progress_bar {
    padding: 20px;
}

.mod-lesson .progress_bar_table {
    width: 80%;
    padding: 0px;
    margin: 0px;
}

.mod-lesson .progress_bar_completed {
    /*  Example Use of Image
    background-image: url(http://openlearn.open.ac.uk/mod/lesson/completed.gif);
    background-position: center;
    background-repeat: repeat-x;
    */
    background-color: green;
    padding: 0px;
    margin: 0px;    
}

.mod-lesson .progress_bar_todo {
    /*  Example Use of Image
    background-image: url(http://openlearn.open.ac.uk/mod/lesson/todo.gif);
    background-repeat: repeat-x;
    background-position: center;
    */
    background-color: red;
    text-align: left;
    padding: 0px;
    margin: 0px;
}

.mod-lesson .progress_bar_token {
    /*  Example Use of Image
    background-image: url(http://openlearn.open.ac.uk/mod/lesson/token.gif);
    background-repeat: repeat-none;
    */
    background-color: #000000;
    height: 20px;
    width: 5px;
    padding: 0px;
    margin: 0px;
}
/***** /mod/lesson/styles.php end *****/

/***** /mod/oublog/styles.php start *****/

#oublog-tags a {
    text-decoration:none;
}
#oublog-tags a:hover .oublog-tagname{
    text-decoration:underline;
}

#oublog-feeds a {
    text-decoration:none;
}
#oublog-feeds a:hover .oublog-tagname{
    text-decoration:underline;
}

.oublog-tagcount {
    margin-left:2px;
    font-size: 0.85em;
}

.oublog-tag-cloud-0 .oublog-tagname {
    font-size: 0.85em;
}

.oublog-tag-cloud-1 .oublog-tagname {
    font-size: 0.95em;
}

.oublog-tag-cloud-2 .oublog-tagname {
    font-size: 1.1em;
}

.oublog-tag-cloud-3 .oublog-tagname {
    font-size: 1.25em;
}

.oublog-tag-cloud-4 .oublog-tagname {
    font-size: 1.4em;
}

#mod-oublog-view #middle-column .singlebutton {
    margin-bottom:1em;
} 


.oublog-post, .oublog-comment {
    border: 1px solid #ddd;
    margin: 0 0 1em;
    padding: 0.5em;
    background-color: #FCFCFC;
    min-height:0; /* ie7 */
}
.ie6 .oublog-post *, .ie6 .oublog-comment *,
.ie6 .oublog-post, .ie6 .oublog-comment {
    height:0;
}
.ie6 .oublog-post img,
.ie6 .oublog-comment img,
.ie6 .oublog-post ul,
.ie6 .oublog-comment ul,
.ie6 .oublog-post ol,
.ie6 .oublog-comment ol,
.ie6 .oublog-post li,
.ie6 .oublog-comment li {
    height:auto;
}

.oublog-post-date, .oublog-post-visibility, .oublog-post-tags, .oublog-post-links, .oublog-post-editsummary, .oublog-links {
    font-size: 0.85em;
}

.oublog-post-tags {
    margin-bottom:0.7em;
}

.oublog-post-links {
    margin-bottom:1.5em;
}

.oublog-postedby {
    font-size: 0.85em;
    margin-top: 0.4em;
    margin-bottom: 0.4em;
}

.oublog-post-visibility {
    margin-top: 0.4em;
    color:#aaa;
}

.oublog-post h2.oublog-title {
    margin: 0 0 0.5em 0;
    font-size:1em;
}

.oublog-post-content,
.oublog-comment-content {
    margin:0.4em 0;
    margin-bottom:1.2em;
    min-height:0; /* ie7... */
}
.ie6 .oublog-post-content,
.ie6 .oublog-comment-content {
    height:auto !important;
    width:99%; /* for some reason it actually believes 'height' on this element */
}

.oublog-deleted {
    color: #aaa;
}


#oublog-single-post-view .oublog-post {
    border: none;
    background-color: transparent;
    padding: 0;
}

.oublog-comment h2.oublog-comment-title {
    margin: 0 0 0.5em 0;
    font-size:1em;
    font-weight: normal;
    padding-bottom: 4px;
    border-bottom-width: 1px;
    border-bottom-style: dotted;
    border-bottom-color: #aaaaaa;
    
}

.oublog-comment h3, .oublog-comment h4 {
    margin: 0em;
}

.oublog-comment-date, .oublog-comment-visibility, .oublog-comment-tags, .oublog-comment-links, .oublog-comment-editsummary {
    font-size: 0.85em;
}

.oublog-views {
    text-align: center;
    font-size: 0.85em;
}

.feedicon {
    vertical-align: middle;
    margin-right: 4px;
    margin-left: 120px;
    border:0px;
 }

.oublog-post-deletedby, .oublog-comment-deletedby {
    color:#8D0047;
    font-weight: bold;
}
.oublog-comment-deletedby {
    margin-left: -42px;
    margin-bottom: 8px;
}

.oublog-topofpage {
    clear:both;
    padding-bottom:1em;
}

#mod-oublog-view #left-column, 
#mod-oublog-allposts #left-column {
  width:12em;
	float:left;
}
#mod-oublog-view #right-column,
#mod-oublog-viewpost #right-column,
#mod-oublog-viewedit #right-column,
#mod-oublog-allposts #right-column {
  width:12em;
	float:right;
}
#mod-oublog-view #middle-column.has-right-column,
#mod-oublog-viewpost #middle-column.has-right-column,
#mod-oublog-viewedit #middle-column.has-right-column,
#mod-oublog-allposts #middle-column.has-right-column {
  margin-right:13em;
}
#mod-oublog-view #middle-column.has-left-column,
#mod-oublog-viewpost #middle-column.has-left-column,
#mod-oublog-allposts #middle-column.has-left-column {
  margin-left:13em;
}

.oublog-post.oublog-hasuserpic,
.oublog-comment.oublog-hasuserpic {
  padding-left:50px;
  position:relative;
}
.oublog-userpic {
  position:absolute;
  left:8px;
}
/* I don't like CSS hacks, but unfortunately standard Moodle does not have the
   OU's .ie6 class on body. */
* html .oublog-hasuserpic {
  padding-left:0;
  margin-left:50px;
}
* html .oublog-userpic {
  left:-42px;
}

#mod-oublog-view .groupselector {
  float: none;
  display:inline;
  margin-right:1em;
  margin-bottom:0.5em;
}

.oublog-individualselector {
  font-size:0.85em;
  display:inline;
  margin-right:0.5em;
  margin-bottom:0.5em;
  white-space: nowrap;
}
div.oublog-individualselector {
  font-size:0.85em;
}
.oublog-groups-individual-selectors {
  margin-bottom:1.0em;
  line-height: 1.6em;
}

.oublog-post-content,.oublog-comment-content {
  overflow:hidden;
}

.oublog-awaiting {
    margin-top: 2em;
}
.oublog-awaiting .oublog-comment-content {
    margin-bottom: 0.5em;
}
.oublog-awaiting form {
    margin: 0 0 1.5em;
}
.oublog-awaiting input {
    font-size: 0.85em;
}

.oublog-rejected {
    color: #aaa;
}
.oublog-rejected-info {
    color: black;
    margin-bottom: 0.5em;
    font-size: 0.85em;
    display: inline;
}

.oublog-newerposts {
    margin: 1.5em 0 2em;
}
.oublog-olderposts {
    margin: 0 0 2em;
}/***** /mod/oublog/styles.php end *****/

/***** /mod/oucontent/styles.php start *****/


@media print {
    .ie7#mod-oucontent-view #page {
        width: 640px;
    }
    #mod-oucontent-view #page {
        min-width: 0;
    }
}

#mod-oucontent-view #content {
    margin-top:5px;
    word-wrap:break-word;
}
#mod-oucontent-view #content .oucontent-caption {
    word-wrap:normal;
}
.ie7#mod-oucontent-view #content .oucontent-caption {
    word-wrap:break-word;
}
.ie#mod-oucontent-view #content {
    margin-top:-3px;
}
.ie6#mod-oucontent-view #content,
.ie6#mod-oucontent-view #middle-column {
    height:1px;
}
.ie6#mod-oucontent-view #left-column {
    display:inline;
    height:1px;
}

#mod-oucontent-view p,
#mod-oucontent-view .oucontent-h1,
#mod-oucontent-view #middle-column .oucontent-h2,
#mod-oucontent-view .oucontent-caption,
#mod-oucontent-view .oucontent-h3,
#mod-oucontent-view #middle-column li,
#mod-oucontent-view #middle-column ul {
    margin:0.5em 0;
}

#mod-oucontent-view .oucontent-caption {
    font-weight:bold;
    color:#003366;
}

#mod-oucontent-view .oucontent-omquestion {
    margin-left:-8px;
}

#mod-oucontent-view .oucontent-title-0 {
    font-size: 1.5em;
    font-weight: bold;
    color: #003366;
    margin: 0.333em 0;
}
#mod-oucontent-view .oucontent-title-1 {
    font-size: 1.5em;
    font-weight: normal;
    color: #003366;
    margin: 0.333em 0;
}
#mod-oucontent-view .oucontent-title-2 {
    font-size: 1.3em;
    color: #0094af;
    font-weight: normal;
    margin: 0.384em 0;
}
#mod-oucontent-view .oucontent-title-3 {
    font-size: 1.2em;
    color: black;
    font-weight: normal;
    margin: 0.417em 0;
}

#mod-oucontent-view #middle-column .oucontent-h2 {
    font-size:1.0em;
}
#mod-oucontent-view .oucontent-h3 {
    color:#000000;
    font-size:1.05em;
}
#mod-oucontent-view #middle-column .oucontent-saq .oucontent-h2, #mod-oucontent-view .oucontent-saq .oucontent-h3{
    margin-bottom:0;
}

#mod-oucontent-view.oucontent-longdesc #middle-column,
#mod-oucontent-view.oucontent-transcript #middle-column {
    margin:0;
    padding-right:0;
}
#mod-oucontent-view #middle-column.oucontent-extrapage,
body#mod-oucontent-view.oucontent-longdesc #content,
body#mod-oucontent-view.oucontent-transcript #content {
    margin:5px;
}
body#mod-oucontent-view.oucontent-transcript .oucontent-dialogue {
    margin-top:0;
    width:auto;
    float:none;
}

#mod-oucontent-view.oucontent-longdesc #page,
#mod-oucontent-view.oucontent-transcript #page {
    width:auto;
    min-width:0;
}


#mod-oucontent-view .oucontent-contents .content {
    font-size:0.85em;
}
#mod-oucontent-view .sideblock .content {
    background:none;
}
#mod-oucontent-view .oucontent-contents ul,
#mod-oucontent-view .oucontent-contents li {
    list-style-type:none;
    margin:0 0 0.2em 0;
    padding:0;
}
#mod-oucontent-view .oucontent-contents ul ul {
    margin-top:0.2em;
    margin-left:1em;
}
#mod-oucontent-view .oucontent-contents ul ul ul {
    margin-top:0.2em;
    margin-left:2em;
}
#mod-oucontent-view #left-column {
    float:left;
}
.oucontent-prev {
    margin-bottom:1em;
    font-size:0.85em;
}
.oucontent-prev strong {
    font-weight:normal;
}
.oucontent-next {
    clear:right;
    margin-top:1em;
    text-align:right;
    font-size:0.85em;
}
#mod-oucontent-view table {
    text-align:left;
}
#mod-oucontent-view table .oucontent-tablemiddle {
    text-align:center;
}
#mod-oucontent-view table .oucontent-tableright {
    text-align:right;
}
#mod-oucontent-view table .oucontent-tabledecimal {
    text-align:right;
}

.oucontent-total-single.oucontent-total-below {
    border-bottom: 1px solid #333;
}
.oucontent-total-single.oucontent-total-above {
    padding-top: 4px;
    border-top: 1px solid #333;
}
.oucontent-s-type2 .oucontent-total-single.oucontent-total-above,
.oucontent-s-narrow .oucontent-total-single.oucontent-total-above,
.oucontent-s-landscape .oucontent-total-single.oucontent-total-above {
    padding-top: 5px;
    border-top: 2px solid black;
}
.oucontent-total-double.oucontent-total-below {
    border-bottom: 3px double #333;
}
.oucontent-total-double.oucontent-total-above {
    padding-top: 3px;
    border-top: 3px double #333;
}
.oucontent-s-type2 .oucontent-total-double.oucontent-total-above,
.oucontent-s-narrow .oucontent-total-double.oucontent-total-above,
.oucontent-s-landscape .oucontent-total-double.oucontent-total-above {
    padding-top: 4px;
    border-top: 3px double black;
}
.ie7 .oucontent-s-type2 .oucontent-total-above,
.ie7 .oucontent-s-narrow .oucontent-total-above,
.ie7 .oucontent-s-landscape .oucontent-total-above {
    position:relative;
    z-index: 100;
}
.ie8 .oucontent-s-type2 .oucontent-total-double.oucontent-total-above {
    padding-top: 3px;
}
.ie8 .oucontent-s-type2 .oucontent-total-single.oucontent-total-above {
    padding-top: 4px;
}

#mod-oucontent-view .oucontent-contents li.oucontent-tree-current {
    font-weight:bold;
    color:#003366;
}
#mod-oucontent-view .oucontent-contents li.oucontent-tree-current ul {
    font-weight:normal;
}

.oucontent-sidenote {
    float:right;
    clear:right;
    margin-right:-170px;
    margin-top: 1px;
    color:#003366;
}
.opera .oucontent-sidenote {
    overflow:hidden;
}
.ie7 .oucontent-sidenote {
    margin-top: -1.3em;
}
.ie7 .oucontent-sidenote.oucontent-resource-icons {
    margin-top: 1px;
}
.oucontent-s-box .oucontent-inner-box .oucontent-sidenote {
    margin-right: -180px;
}

.oucontent-sidenote-atstart {
    margin-top:0;
}
.oucontent-sidenote-intitle {
    margin-top:-2.3em;
}
.oucontent-sidenote-inner {
    display:block;
    padding-top:2px;
    padding-bottom:2em;
    position:relative;
    top:-3px;
    width:150px;
    margin-left:20px;
    line-height:140%;
}

.oucontent-media .oucontent-resource-icons {
    min-height: 32px;
}
.oucontent-media .oucontent-resource-icons .oucontent-sidenote-inner {
    position:absolute;
    right: 0px;
    width: 171px;
    top: auto;
}

.oucontent-sidenote-head {
    display:block;
    font-weight:bold;
}
.oucontent-sidenote-para {
    display:block;
    margin-bottom:0.5em;
}
.oucontent-linktip .oucontent-sidenote-inner {
    color: #555;
    font-size:0.85em;
    font-weight:normal;
}
#mod-oucontent-view #middle-column {
    padding-right:170px;
    line-height:1.4;
}

.oucontent-printable .oucontent-saq-timing {
   padding-left:0px;
}

.oucontent-itq-toggle-link {
    font-size:0.85em;
}

.oucontent-saq-interactiveanswer, .oucontent-saq-interactivediscussion, .oucontent-saq-printable-correct {
    margin-top:10px;
    border-top:1px dotted #aaa;
    padding-top:0.5em;
    padding-bottom:3px;
}
.oucontent-saq-discussion .oucontent-h4,.oucontent-saq-answer .oucontent-h4, .oucontent-saq-interactiveanswer .oucontent-h4, .oucontent-saq-interactivediscussion .oucontent-h4 {
    margin:0;
}

.oucontent-saq-head,
.oucontent-box-head,
.oucontent-figure-caption {
    margin-left:0.5em;
    font-weight:normal;
}
.oucontent-table-head {
    margin-left:5px;
}
.oucontent-nonumber .oucontent-saq-head,
.oucontent-nonumber .oucontent-box-head,
.oucontent-nonumber .oucontent-table-head {
    margin-left:0;
    font-weight:bold;
}

.oucontent-nonumber .oucontent-figure-caption {
    margin-left:0;
}

.oucontent-saq-withtoggle .oucontent-saq-question {
    padding-bottom:0;
}
.oucontent-saq-toggle {
    font-size:0.85em;
    text-align:right;
    padding-bottom:1em;
}
.oucontent-saq-toggle-link {
    text-decoration:underline;
    cursor:pointer;
}
a.oucontent-saq-toggle-link,a:visited.oucontent-saq-toggle-link {
    color:black;
}

.oucontent-box-source { /* SAVLE1 legacy */
    margin-top:1em;
    text-align:right;
}

.oucontent-figure,
.oucontent-itq,
.oucontent-table,
.oucontent-dialogue,
.oucontent-media,
.oucontent-equation {
    margin:10px 0;
}
.ie7 .oucontent-printable .oucontent-figure,
.ie7 .oucontent-printable .oucontent-itq,
.ie7 .oucontent-printable .oucontent-table,
.ie7 .oucontent-printable .oucontent-dialogue,
.ie7 .oucontent-printable .oucontent-media,
.ie7 .oucontent-printable .oucontent-equation {
    margin:5px 0;
}

#mod-oucontent-view .oucontent-figure-text .oucontent-h3,
#mod-oucontent-view .oucontent-figure-text .oucontent-caption {
    margin-top:0;
}


.oucontent-figure-source, /* SAVLE1 legacy (-source) */
.oucontent-thumbnaillink,
.oucontent-transcriptlink,
.oucontent-audiodownloadlink {
    float:right;
    margin-top:1px;
    margin-left:1em;
    font-size:0.85em;
}

.oucontent-table-thumbnaillink {
    font-size:0.85em;
}
#mod-oucontent-view #middle-column ul {
    padding-left:0;
    margin-left:0.9em;
}
#mod-oucontent-view #middle-column ol {
    margin-left:0.8em;
    padding-left:0;
}
.ie#mod-oucontent-view #middle-column ol {
    margin-left:0.85em;
    padding-left:0;
}
#mod-oucontent-view #middle-column ul li {
    margin-left:1.2em;
    padding-left:0.3em;
    margin-bottom:0.5em;
}
#mod-oucontent-view #middle-column ol li {
    margin-left:1.6em;
    padding-left:0em;
    margin-bottom:0.5em;
}

ul.oucontent-unnumbered,ul.oucontent-unnumbered li {
    list-style-type:none;
}

ul.oucontent-unnumbered ol.oucontent-numbered,
ul.oucontent-unnumbered ol.oucontent-numbered li {
    list-style-type:decimal;
}
ul.oucontent-unnumbered ul.oucontent-bulleted,
ul.oucontent-unnumbered ul.oucontent-bulleted li {
    list-style-type:disc;
}

.oucontent-authorcomment {
    color:#ff5500;
    font-style:italic;
}
.oucontent-editorcomment {
    color:#ff0077;
    font-style:italic;
}
.oucontent-comment {     color:red;
    font-style:italic;
}

.oucontent-warning {
    display:block;
    color:red;
    margin:1.5em 0;
    font-weight:normal;
}

.oucontent-flashjswarning {
    border:1px solid #ccc;
    padding:4px;
    margin-bottom:0.5em;
}


.oucontent-wide {
    width:512px;
}

#mod-oucontent-view #middle-column .oucontent-h2.oucontent-subsubsection,
#mod-oucontent-view #middle-column .oucontent-h2.oucontent-internalsection-head {
    margin-top:1em;
}

.oucontent-basic {
    padding-top:5px;
    margin:0;
}

/* This should be the same as pre in ou_layout.css. */
.oucontent-computerdisplay {
    font-family: "Andale Mono", "Arial Terminal", "Lucida Console", monospace;
    font-size:0.85em;
    margin:1.5em 0;
}
#mod-oucontent-view .oucontent-computerdisplay p {
    margin-bottom:0;
    white-space:pre;
}

.oucontent-dialogue {
    margin: 10px 0 10px 0;
    float:left;
    width:100%;
}

.oucontent-part-first {
    margin-top:0;
}
.oucontent-part-last {
    margin-bottom:0;
}
.oucontent-dialogue-line {
    clear:left;
    margin-left:10px;
    margin-right:10px;
}
.oucontent-dialogue-remark {
    margin-left:11em;
    margin-bottom:0.5em;
}
.oucontent-dialogue-speaker {
    float:left;
    width:10em;
}

.ie7#mod-oucontent-view .oucontent-printable .oucontent-dialogue-speaker {
    float:none;

}
.ie7#mod-oucontent-view .oucontent-printable .oucontent-dialogue-remark {
    margin-left:0;
}

#mod-oucontent-view .oucontent-printable .oucontent-dialogue {
    float:none;
}
.oucontent-glossary dt {
    padding-bottom:2px;
    color:#003366;
}

.oucontent-glossary dd {
    padding-bottom:6px;
}
.oucontent-glossaryterm {
    cursor:help;
}
.oucontent-glossaryterm:hover,
.oucontent-glossaryterm-notfound:hover {
    text-decoration:none;
}
/* This shoudl be the same as pre in ou_layout.css. */
.oucontent-computercode {
    font-family:Andale Mono, monospace;
}

.oucontent-problem {
    width:50em;
    margin-left:auto;
    margin-right:auto;
}

#mod-oucontent-view div.oucontent-longdesconly a {
    position:absolute;
    left:-1000px;
}
#mod-oucontent-view div.oucontent-longdesconly a:focus {
    position:static;
}

#mod-oucontent-view div.oucontent-longdescsecond {
    display:none;
}
.oucontent-problem li {
    margin-bottom:0.5em;
}
.oucontent-problem h1 {
    font-size:1.5em;
    font-weight:normal;
}
.oucontent-problem-footer {
    margin-top:1.5em;
}

#mod-oucontent-view .oucontent-contents ul.oucontent-savetolist {
    margin-top:0.5em;
    margin-bottom:0.5em;
}
.oucontent-save-noperm {
    color:#888;
}


#mod-oucontent-save h1 {
    font-size:1.5em;
    font-weight:normal;
    margin:0 0 0.5em 0;
}
#mod-oucontent-save .oucontent-saveoptions {
    margin-bottom:0.5em;
}
#mod-oucontent-save #content {
    width:50em;
    margin-left:auto;
    margin-right:auto;
}

#mod-oucontent-view .oucontent-haswarnings {
    color:red;
}

#mod-oucontent-preflight table {
    border:1px solid #ddd;
    margin:1em 0;
    width:100%;
}
#mod-oucontent-preflight th,
#mod-oucontent-preflight td {
    padding:2px 6px;
}
#mod-oucontent-preflight th {
    border-bottom:1px solid #aaa;
    text-align:left;
}
#mod-oucontent-preflight td {
    border-bottom:1px solid #ddd;
}
#mod-oucontent-preflight .oucontent-preflight-error {
    color:#800000;
}
#mod-oucontent-preflight .oucontent-preflight-ok {
    color:#008000;
}
#mod-oucontent-preflight .oucontent-preflight-notpage td {
    border-top:4px solid #ddd;
}


#mod-oucontent-preflight .oucontent-rerender {
    margin-top: 30px;
    border: 1px solid #aaa;
    padding: 2px 10px 5px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    font-size: 0.85em;
    color: #333;
    background-color:#e5f2ff;

}
#mod-oucontent-preflight .oucontent-rerender a {
    color: #333;
}

#mod-oucontent-view .oucontent-thumbnailpage {
    margin-top:1em;
}

#mod-oucontent-view .oucontent-longdescmessage,
#mod-oucontent-view .oucontent-savedinfo,
#mod-oucontent-view .oucontent-preflightlink,
#mod-oucontent-view .oucontent-copyright {
    margin:1em 0;
    font-size:0.85em;
}

#mod-oucontent-view .oucontent-content {
    color:#333333;
}
/*
.oucontent-content .oucontent-titlenumber {
    font-weight:normal;
}
.oucontent-content .oucontent-h1 .oucontent-titlenumber {
    font-size:0.8em;
}
*/
#mod-oucontent-view table p {
    margin-top:0;
}

.oucontent-rightsinfo {
    display:block;
    text-align:left;
    color:#888;
}
.oucontent-figure .oucontent-rightsinfo,
.oucontent-media .oucontent-rightsinfo {
    display:block;
    text-align:left;
    color:#888;
    width:150px;
}

.oucontent-figure .oucontent-source-reference,
.oucontent-media .oucontent-source-reference {
    float:right;
    margin-top:1px;
    margin-left:1em;
}

.oucontent-source-reference {
    text-align:left;
    font-size:0.85em;
    padding-top:5px;
    padding-right:5px;
}

.oucontent-media-mini .oucontent-figure-source,  /* SAVLE1 legacy (-source) */
.oucontent-media-mini .oucontent-source-reference,
.oucontent-media-mini .oucontent-transcriptlink,
.oucontent-media-mini .oucontent-audiodownloadlink,
.oucontent-media-mini .oucontent-thumbnaillink {
    margin-left:0;
    margin-top:0;
    float:none;
    text-align:left;
}

.oucontent-printablelink {
    border-top:1px solid #ddd;
    margin-top:10px;
    padding-top:8px;
}

a.oucontent-glossaryterm {
		border-bottom:1px dotted rgb(69,32,110);
}
a.oucontent-hyperlink,a.oucontent-olink,a.oucontent-crossref,a.oucontent-glossaryterm-notfound {
    text-decoration:underline;
}
.ie6 a:visited.oucontent-hyperlink,
.ie6 a:visited.oucontent-olink,
.ie6 a:visited.oucontent-crossref,
.ie6 a:visited.oucontent-glossaryterm-notfound {
    text-decoration:underline;
}

#mod-oucontent-view .oucontent-h3.oucontent-internalsection-head,
#mod-oucontent-view .oucontent-h4.oucontent-internalsection-head,
#mod-oucontent-view .oucontent-h5.oucontent-internalsection-head {
		font-weight:normal;
		font-style:italic;
		margin:1em 0 0.5em;
}

.oucontent-hidespace {
    font-size:0;
}

.ie6#mod-oucontent-view .block_navigation.sideblock ul ul {
    margin-left:0;
    margin-top:0.5em;
    margin-bottom:0.5em;
}

#mod-oucontent-view .oucontent-printable-header {
    border-bottom:1px dotted #aaa;
    padding-bottom:4px;
    margin-bottom:2em;
}
#mod-oucontent-view .oucontent-printable-footer {
    border-top:1px dotted #aaa;
    padding-top:4px;
    margin-top:2em;
}
#mod-oucontent-view .oucontent-printable-backlink {
    float:left;
}
#mod-oucontent-view .oucontent-printable-date,
#mod-oucontent-view .oucontent-printable-copyright {
    float:right;
}
#mod-oucontent-view .oucontent-printable-copyright p {
    margin-top:0;
    margin-bottom:0.5em;
}
#mod-oucontent-view #middle-column.oucontent-printable {
    margin-left:0;
}
.ie6#mod-oucontent-view #page #content .oucontent-printable {
    margin-left:0;
}


.ie#mod-oucontent-view .oucontent-printable .oucontent-saq {
    margin-left:2em;
    border:none;
}
#mod-oucontent-view .oucontent-printable .oucontent-rightsinfo {
    display:none;
}

/* Bug 5302 - Firefox printed images are too big */
@media print {
    .gecko#mod-oucontent-view .oucontent-printable img,
    .gecko#mod-oucontent-view .oucontent-printable .oucontent-figure-text {
        max-width:415px;
    }
}

#mod-oucontent-view .oucontent-interaction {
    position:relative;
    margin:0.5em 0px;
}
#mod-oucontent-view .oucontent-interactionbuttons {
    margin:0.5em 5px 0.5em 0;
    text-align:right;
}
#mod-oucontent-view .oucontent-interactionrightwrong {
    margin:0.5em 0;
}

/*Change the display from relative to inline to fix a bug in IE7 which makes it
always jump to the top of the page when the radio button receives focus by tabbing onto it*/
#mod-oucontent-view .oucontent-singlechoice-radio-answer,
#mod-oucontent-view .oucontent-multichoice-checkbox-answer{
    display:inline;
    margin-left:5px;
    vertical-align:3px;
}

.ie6#mod-oucontent-view .oucontent-singlechoice-answers,
.ie7#mod-oucontent-view .oucontent-singlechoice-answers {
    margin-top:-13px;
}

#mod-oucontent-view .oucontent-singlechoice-answer-button {
    margin:0.5em 0;
}

#mod-oucontent-view .oucontent-singlechoice-radio,
#mod-oucontent-view .oucontent-multichoice-checkbox {
    margin:4px 0 4px -3px;
    position:relative;
}

#mod-oucontent-view .oucontent-saq-printable-question {
    margin:3px 0 10px -3px;
    padding-top: 2px;
    position:relative;
}

#mod-oucontent-view .oucontent-checkbox,
#mod-oucontent-view .oucontent-radio-button,
.oucontent-saq-printable-number {
    left:0;
}
.ie#mod-oucontent-view .oucontent-checkbox,
.ie#mod-oucontent-view .oucontent-radio-button,
.ie .oucontent-saq-printable-number {
    top:-2px;
}


#mod-oucontent-view .oucontent-saq-printable-number {
  width:20px;
  text-align: right;
}

#mod-oucontent-view .oucontent-saq-printable-answer {
    xposition:relative;
    xmargin-left:25px;
}

.ie6#mod-oucontent-view .oucontent-multichoice-answers,
.ie7#mod-oucontent-view .oucontent-multichoice-answers {
    margin-top:-13px;
}

#mod-oucontent-view .oucontent-multichoice-answer-button {
    margin:0.5em 0;
}

#mod-oucontent-view .oucontent-choice-answer {
    display:block;
}

#mod-oucontent-view .oucontent-choice-feedback {
    margin:0.5em 0;

}

#mod-oucontent-view .oucontent-choice-answer-button {
    margin: 0.5em 0;

}

.ie#mod-oucontent-view sup,
.ie#mod-oucontent-view sub {
    line-height:2;
}

#mod-oucontent-medialib .generalbox .sysmsg {
    text-align:center;
}

#mod-oucontent-medialib .generalbox {
    margin-bottom: 30px;
}

#mod-oucontent-medialib .mediatable th.name, #mod-oucontent-medialib .mediatable td.name {
    width:17%;
}

#mod-oucontent-medialib .mediatable th.description, #mod-oucontent-medialib .mediatable td.description {
    width:40%;
}

#mod-oucontent-medialib .mediatable th.version, #mod-oucontent-medialib  .mediatable td.version {
    width:3%;
    text-align:center;
}

#mod-oucontent-medialib .mediatable th.maintainer, #mod-oucontent-medialib .mediatable td.maintainer {
    width:20%;
}

#mod-oucontent-medialib .mediatable th.filename, #mod-oucontent-medialib .mediatable td.filename {
    width:20%;
}

#mod-oucontent-medialib .mediatable td.titlecol {
    font-weight:bold;
}

#mod-oucontent-medialib label {
    width: 15em;
    float: left;
    text-align: right;
    margin-right: 0.5em;
    display: block
}

#mod-oucontent-medialib .submit input {
    margin-left: 14.8em;
}

#mod-oucontent-upload label {
    float:left;
    width:18em;
    padding-top:4px;
}
#mod-oucontent-upload .field,
#mod-oucontent-upload .button {
    clear:left;
    padding-top:0.5em;
}

#mod-oucontent-upload .button {
    text-align:left;
    margin-left:18em;
}

#mod-oucontent-view .oucontent_export {
    margin-top:0.5em;
}

#mod-oucontent-view .oucontent-smallcaps {
    font-variant:small-caps;
}

#mod-oucontent-view .oucontent-equation.oucontent-nocaption {
    margin-left:25px;
}
#mod-oucontent-view .oucontent-label {
    position:relative;
}
.ie6#mod-oucontent-view .oucontent-label {
    height:1px;
}

#mod-oucontent-view .oucontent-label .oucontent-inner {
    position:absolute;
    bottom:0px;
    right:0;
    background:transparent;
    padding-left:2px;
}

.oucontent-if-printable {
    display:none;
}
.oucontent-printable .oucontent-if-printable {
    display:block;
}
.oucontent-printable .oucontent-if-notprintable {
    display:none;
}

.span_div {
    display:block;
}

.span_paragraph {
    display:inline;
}
.oucontent-multichoice-answer-feedback .span_paragraph {
    padding-left:30px;
    color:#003366;
}

.saq_printable_list_item {
  float:left;
  margin-left:5px;
  line-height:1.2;
}
.saq_printable_list_item p {
  margin:0px;
}
.ie7 .saq_printable_list_item {
  float:none;
}

.clearall {
  clear:both;
}

.oucontent-freeresponse .oucontent-wait {
  display:inline;
}
.oucontent-freeresponse .oucontent-wait img {
  vertical-align: -3px;
}
.ie .oucontent-freeresponse .oucontent-wait img {
  vertical-align: 1px;
}

.oucontent-freeresponse .oucontent-freeresponse-field,
.oucontent-freeresponse textarea {
  width:95%;
}

#mystuffreferencesform {
    display:inline;
    margin:5px;
    margin-top:0px;
    margin-bottom:5px;
    margin-right:15px;
    padding-right:5px;
    vertical-align:top;
}

div.refimage1,
div.refimage2,
div.refimage3,
.mystuffreferenceform
 {
vertical-align:bottom;
display:inline;
margin-left:5px;
margin-right:10px;
display:inline;
}

div.refimage1,
.mystuffreferenceform{
margin-right:5px; /* lining up horizontally with 'buttons' */
padding-right:0px;
margin-left:10px;
display:inline;
}

.oucontent-mystuffreferences-block {
    display:inline;
}
.mystuffreferenceform{
margin-left:0px;
}

div.oucontent-referenceitem{
	margin-top:5px;
	padding-top:5px;
	text-align:left;
	text-indent:0;
}

div.oucontent-referenceitem form,
div.oucontent-referenceitem div {
display:inline;
text-align:left;
}

div.oucontent-referenceitem form,
div.oucontent-referenceitem a,
div.oucontent-referenceitem img{
padding-top:5px;
padding-left:3px;
}

div.oucontent-printable div.oucontent-reference img,
div.oucontent-printable .refimage1,
div.oucontent-printable .refimage2,
div.oucontent-printable .refimage3,
div.oucontent-printable #mystuffreferencesform,
div.oucontent-printable .mystuffreferenceform{
display:none;
}

div.oucontent-reference #refexportlink{
    display:inline;
}

div.oucontent-reference #refkeydiv{
	float:right;
    display:inline-block;
	font-size:0.8em;
	vertical-align:top;
	display:inline-block;
	margin-top:0px;
	padding-top:0px;
	clear:none;
}
.oucontent-printable div.oucontent-reference #refkeydiv,
.oucontent-printable div.oucontent-reference form,
.oucontent-printable div.oucontent-reference #refexportlink
.oucontent-printable div.oucontent-reference .mystuffreferenceform{
	display:none;
}

#mod-oucontent-editformats .oucontent-spacer {
    margin-top: 1em;
}
#mod-oucontent-view .oucontent-alternatives li {
    margin-left: 22px;
    text-indent: -22px;
}
#mod-oucontent-view .oucontent-alternatives li a span,
#mod-oucontent-view .oucontent-alternatives span.oucontent-size {
    position:relative;
    top: -3px;
}
#mod-oucontent-view .oucontent-alternatives ul li a:hover {
    text-decoration: none;
}
#mod-oucontent-view .oucontent-alternatives li a:hover span {
    text-decoration: underline;
}
#mod-oucontent-view .oucontent-alternatives span.oucontent-size {
    color: #5A595A;
}


#mod-oucontent-view .oucontent-alternatives-switch {
    text-decoration: none;
    color: black;
}


/* Module: oucontent from outheme.css */
#mod-oucontent-view .block_adminblock {
    display:none;
}

#mod-oucontent-view .sideblock ul a {
    text-decoration:none;
    color:black;
}
#mod-oucontent-view .sideblock ul a:hover {
    text-decoration:underline;
}
#mod-oucontent-view .sideblock.oucontent-contents {
    background-color:#F5F5F5;
    margin-bottom:0;
    padding-bottom:10px;
}
#mod-oucontent-view .sideblock.oucontent-contents .header {
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/sideblock_bg_righthand.png');
    background-color:#ebebeb;
}
#mod-oucontent-view .sideblock.oucontent-nextactivity .header {
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/sideblock_bg_lefthand_nextactivity.png');
    background-color:#efeff7;
    
}
#mod-oucontent-view .sideblock.oucontent-contents .oucontent-h2 {
    font-weight:normal;
    color:#333333;
}
.ie6#mod-oucontent-view #middle-column {
    margin-left:208px;
}
.ie6#mod-oucontent-view.oucontent-transcript #middle-column {
    margin-left:0;
}

#mod-oucontent-view #oucontent-autobookmark {
    padding:10px;
    margin-bottom:10px;
}
.ie6#mod-oucontent-view #oucontent-autobookmark {
  height:0;
}

#mod-oucontent-view .oucontent-matching-option p {
    margin:0;
}
#mod-oucontent-view .oucontent-matching-match p {
    margin:0;
}
#mod-oucontent-view .oucontent-matching-match {
    display:none;
}

#mod-oucontent-view .oucontent-matching-option {
    background-color:#B8DBFF;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -khtml-border-radius: 5px;
    padding:4px 8px;
    z-index:9;
}

#mod-oucontent-view .oucontent-matching-slot {
    background:white;
    border:none;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -khtml-border-radius: 5px;
}

#mod-oucontent-view .oucontent-matching-focus {
  border:1px solid #DBEDFF;
}

#mod-oucontent-view .oucontent-interaction-print p.oucontent-intro {
    margin-top: 1em;
}
#mod-oucontent-view .oucontent-interaction-print .oucontent-matching-lr {
    float: left;
    width: 49.9%;
}
.ie7#mod-oucontent-view .oucontent-interaction-print .oucontent-matching-lr, 
.ie6#mod-oucontent-view .oucontent-interaction-print .oucontent-matching-lr {
    float: none;
    width: 100%;
}
#mod-oucontent-view .oucontent-interaction-print ol {
    margin-top: 0;
    margin-right: 5px;
}

#mod-oucontent-view .oucontent-matching-matches {
    list-style-type: lower-alpha;
}
#mod-oucontent-view #middle-column ul.oucontent-matching-answers {
    display: inline;
    margin: 0;
}
#mod-oucontent-view #middle-column ul.oucontent-matching-answers li {
    list-style-type: none;
    display: inline;
    margin: 0 1em 0 0;
    padding-left: 0;
}

.ie6#mod-oucontent-view .oucontent-contents ul ul {
    padding-left:1em;
}
.ie6#mod-oucontent-view .oucontent-contents ul ul ul {
    padding-left:2em;
}

#mod-oucontent-view .oucontent-h4,
#mod-oucontent-view .oucontent-h5 {
    color: #333333;
    font-size:1em;
}
#mod-oucontent-view #middle-column .arrow_text,
#mod-oucontent-view #middle-column .arrow {
    color: #6a6ab5;
}

#mod-oucontent-view #middle-column .oucontent-table li,
#mod-oucontent-view #middle-column .oucontent-table ul {
    margin-top:0;
    margin-bottom:0;
}

.oucontent-saq-timing {
    font-size:0.85em;
    padding: 1px 0 0;
}


#mod-oucontent-view .oucontent-part-head {
    padding:0;
    margin:10px 0 0;
}
#mod-oucontent-view .oucontent-printable .oucontent-saq-question {
      padding:0;
}


.oucontent-tabledescription {
    padding: 5px 10px;
    margin: 0;
    text-align:right;
}
.oucontent-s-narrow .oucontent-tabledescription {
    text-align:left;
    padding-left:0;
}
#mod-oucontent-view .oucontent-s-type2 table,
#mod-oucontent-view .oucontent-s-normal table {
    width:100%;
    border:none;
}

#mod-oucontent-view .oucontent-s-normal .oucontent-source-reference {
    padding-left:10px;
}
#mod-oucontent-view .oucontent-s-landscape table {
    width:780px;
    border:none;
}

#mod-oucontent-view .oucontent-printable .oucontent-table-thumbnail .oucontent-s-landscape table {
    width:600px;
    font-size:75%;
}

#mod-oucontent-view .oucontent-table-thumbnail .oucontent-s-landscape,
#mod-oucontent-view .oucontent-printable .oucontent-table-thumbnail .oucontent-table-printhide {
    display:none;
}

#mod-oucontent-view .oucontent-printable  .oucontent-table-thumbnail .oucontent-s-landscape {
    display:block;
    margin-right: -170px;
}

#mod-oucontent-view td,#mod-oucontent-view th {
    padding:2px 10px;
    text-align:left;
    border:none;
}
#mod-oucontent-view .oucontent-table th,
#mod-oucontent-view .oucontent-table td {
    border-top:1px solid #999999;
    border-bottom:1px solid #999999;
    padding: 5px 5px 5px 0px;
    vertical-align:top;
}
.ie7#mod-oucontent-view .oucontent-table {
    overflow-x: hidden;
}

#mod-oucontent-view .oucontent-table.oucontent-s-normal th,
#mod-oucontent-view .oucontent-table.oucontent-s-normal td {
    border:none;
    padding-left:10px;
}
.oucontent-table-source {  /* SAVLE1 legacy */
    float:right;
    margin-top:2px;
    font-size:0.85em;
}
.oucontent-table-footnote {
    margin-top:2px;
    font-size:0.85em;
    padding: 5px 5px 5px 0px;
}
.oucontent-s-normal .oucontent-table-footnote {
    padding-left:10px;
}

#mod-oucontent-view .oucontent-saq-toggle-link{
    background-color:#ffffff;
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/oucontent-answer-button.png');
    background-position: top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    position:relative;
    vertical-align:top;
    padding: 4px;
    margin: 10px 10px 10px 10px;
    text-decoration:none;
}
#mod-oucontent-view .oucontent-saq-toggle {
    padding-top:0.5em;
}
#mod-oucontent-view .oucontent-saq-answer,
#mod-oucontent-view .oucontent-saq-interactiveanswer,
#mod-oucontent-view .oucontent-saq-discussion,
#mod-oucontent-view .oucontent-saq-interactivediscussion {
    padding: 5px 0px 2px;
    border-top:1px dotted #999999;
    margin-top:10px;
}
#mod-oucontent-view .oucontent-printable .oucontent-saq-interactiveanswer,
#mod-oucontent-view .oucontent-printable .oucontent-saq-discussion,
#mod-oucontent-view .oucontent-printable .oucontent-saq-interactivediscussion {
    border-top:1px dotted #AAA;
    padding:0;
}
#mod-oucontent-view .oucontent-saqtype-part .oucontent-saq-interactiveanswer,
#mod-oucontent-view .oucontent-saqtype-part .oucontent-saq-discussion,
#mod-oucontent-view .oucontent-saqtype-part .oucontent-saq-interactivediscussion {
    border-bottom:1px dotted #999999;
}
#mod-oucontent-view .oucontent-part-last .oucontent-saq-interactiveanswer,
#mod-oucontent-view .oucontent-part-last .oucontent-saq-discussion,
#mod-oucontent-view .oucontent-part-last .oucontent-saq-interactivediscussion {
    border-bottom: none;
}

#mod-oucontent-view .oucontent-saq-answer .oucontent-h4,
#mod-oucontent-view .oucontent-saq-interactiveanswer .oucontent-h4,
#mod-oucontent-view .oucontent-saq-discussion .oucontent-h4,
#mod-oucontent-view .oucontent-saq-interactivediscussion .oucontent-h4,
#mod-oucontent-view .oucontent-saqtype-part .oucontent-h4 {
    color:#003366;
}

#mod-oucontent-view .oucontent-dialogue .oucontent-dialogue-line .oucontent-dialogue-speaker{
    font-weight:bold;
}

.oucontent-prev strong {
    font-weight:bold;
}

a.oucontent-glossaryterm,
a.oucontent-glossaryterm:link,
a.oucontent-glossaryterm:visited {
    border-bottom:1px dotted #003366;
    text-decoration: none;
    cursor:help;
}

.oucontent-viewonlineactivity a {
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/breadcrumb.gif');
    background-position: right 2px;
    background-repeat: no-repeat;
    padding-right: 12px;
}

#mod-oucontent-view .oucontent-outer-box .oucontent-h3 {
    padding:5px 10px;
    margin:0;
}

.oucontent-box-byline {
    font-style:italic;
    padding:0 10px;
}
#mod-oucontent-view .oucontent-inner-box .oucontent-h4 {
    margin:0;
    padding:5px 0 0;
    font-size:1em;
}
#mod-oucontent-view .oucontent-inner-box .oucontent-h5 {
    font-size:0.95em;
}
#mod-oucontent-view .oucontent-s-siderule .oucontent-inner-box,
#mod-oucontent-view .oucontent-s-siderule .oucontent-inner-box .oucontent-h4 {
    padding-top:0;
}
#mod-oucontent-view .oucontent-inner-box {
    padding:1px 10px 5px;
    margin:0;
}
#mod-oucontent-view .oucontent-s-siderule,
#mod-oucontent-view .oucontent-s-heavybox1,
#mod-oucontent-view .oucontent-s-heavybox2,
#mod-oucontent-view .oucontent-s-lightbox1,
#mod-oucontent-view .oucontent-s-hollowbox,
#mod-oucontent-view .oucontent-s-hollowbox2,
#mod-oucontent-view .oucontent-s-gradient,
#mod-oucontent-view .oucontent-s-indent {
    margin:15px 0;
    padding:0;
}

#mod-oucontent-view .oucontent-s-siderule {
    border-left:8px solid #c1e0ff;
}
#mod-oucontent-view .oucontent-s-siderule .oucontent-h3 {
    padding-top:0;
}
#mod-oucontent-view .oucontent-s-siderule .oucontent-inner-box {
    margin-top:0;
    padding-bottom:0;
}

#mod-oucontent-view .oucontent-s-gradient,
#mod-oucontent-view #oucontent-autobookmark {
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/oucontent-s-gradient.png');
    background-position: top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -khtml-border-radius: 5px;
}
#mod-oucontent-view .oucontent-s-gradient .oucontent-h3 {
    padding-bottom:0;
}
#mod-oucontent-view .oucontent-s-heavybox1 .oucontent-h3 {
    background-color:#e5f2ff;
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/oucontent-s-heavybox1.png');
    background-position: top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
}

#mod-oucontent-view .oucontent-s-heavybox1 .oucontent-inner-box {
    background-color:#dcedff;
    border:1px solid #bedeff;
    border-top:2px solid #ececec;
    -moz-border-radius-bottomleft: 5px;
    -moz-border-radius-bottomright: 5px;
    -webkit-border-bottom-left-radius:5px;
    -webkit-border-bottom-right-radius:5px;
    border-bottom-right-radius:5px;
    border-bottom-right-radius:5px;
}

#mod-oucontent-view .oucontent-s-heavybox1.oucontent-s-noheading .oucontent-inner-box {
    border-top:1px solid #bedeff;
}

#mod-oucontent-view .oucontent-s-heavybox2 .oucontent-h3 {
    background-color:#fefefd;
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/oucontent-s-heavybox2.png');
    background-position: top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
}
#mod-oucontent-view .oucontent-s-heavybox2 .oucontent-inner-box {
    background-color:#ecedd8;
    border:1px solid #cccccc;
    border-top:2px solid #ececec;
    -moz-border-radius-bottomleft: 5px;
    -moz-border-radius-bottomright: 5px;
    -webkit-border-bottom-left-radius:5px;
    -webkit-border-bottom-right-radius:5px;
    border-bottom-right-radius:5px;
    border-bottom-right-radius:5px;
}
#mod-oucontent-view .oucontent-s-heavybox2.oucontent-s-noheading .oucontent-inner-box {
    border-top:1px solid #cccccc;
}
#mod-oucontent-view .oucontent-s-hollowbox,
#mod-oucontent-view .oucontent-s-box .oucontent-reading.oucontent-s-box .oucontent-outer-box {
    border:1px solid #999999;
    background-color:#ffffff;
    -moz-border-radius-bottomleft: 5px;
    -moz-border-radius-bottomright: 5px;
    -webkit-border-bottom-left-radius:5px;
    -webkit-border-bottom-right-radius:5px;
    border-bottom-right-radius:5px;
    border-bottom-right-radius:5px;
}
#mod-oucontent-view .oucontent-s-hollowbox .oucontent-h3,
#mod-oucontent-view .oucontent-s-hollowbox2 .oucontent-h3 {
    margin-left:10px;
    margin-right:10px;
    padding-left:0;
    padding-right:0;
}
#mod-oucontent-view .oucontent-s-hollowbox .oucontent-h3,
#mod-oucontent-view .oucontent-s-box .oucontent-reading.oucontent-s-box .oucontent-h3 {
    border-bottom:2px solid #66d0cc;
    color:#00b0ad;
}

#mod-oucontent-view .oucontent-s-hollowbox2 {
    border:2px solid #B8DBFF;
    -moz-border-radius-bottomleft: 5px;
    -moz-border-radius-bottomright: 5px;
    -webkit-border-bottom-left-radius:5px;
    -webkit-border-bottom-right-radius:5px;
    border-bottom-right-radius:5px;
    border-bottom-right-radius:5px;
}

#mod-oucontent-view .oucontent-s-hollowbox2 .oucontent-h3 {
    border-bottom:4px solid #DBEDFF;
}

#mod-oucontent-view .oucontent-s-box .oucontent-s-hollowbox2 .oucontent-h3 {
    margin-left:0px;
}

#mod-oucontent-view .oucontent-reading .oucontent-inner-box,
#mod-oucontent-view .oucontent-reading .oucontent-inner-box table,
#mod-oucontent-view .oucontent-reading .oucontent-inner-box td,
#mod-oucontent-view .oucontent-reading .oucontent-inner-box th,
#mod-oucontent-view .oucontent-reading .oucontent-inner-box li {
    font-family: "Palatino Linotype", Georgia, Verdana;
    font-size:1.1em;
}
#mod-oucontent-view .oucontent-reading .oucontent-h3,
#mod-oucontent-view .oucontent-reading .oucontent-inner-box .oucontent-h4,
#mod-oucontent-view .oucontent-reading .oucontent-inner-box .oucontent-h5 {
    color:#00b0ad;
    font-family: Verdana;
}
#mod-oucontent-view .oucontent-reading .oucontent-inner-box .oucontent-h4 {
    font-size:0.9em;
}
#mod-oucontent-view .oucontent-reading .oucontent-inner-box .oucontent-h5 {
    font-size:0.85em;
}

#mod-oucontent-view #middle-column .oucontent-itq ul {
    margin-left:0;
}
#mod-oucontent-view #middle-column ul li.oucontent-saq-question {
     padding-left: 20px;
     padding-bottom:0px;
     background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/bullet_itq.png');
     background-repeat: no-repeat;
     background-position: 0px 4px;
     margin-left: 0;
     list-style-type:none;
}

#mod-oucontent-view #middle-column ul li.oucontent-saq-answer {
     padding-left: 20px;
     padding-top:2px;
     padding-bottom:0;
     background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/bullet_ita.png');
     background-repeat: no-repeat;
     background-position: 0px 12px;
     margin-left: 0;
     list-style-type:none;
     border:none;
}

#mod-oucontent-view #middle-column .oucontent-saqtype-part li.oucontent-saq-answer {
    border-bottom:1px dotted #999999;
    padding-bottom:10px;
}
#mod-oucontent-view #middle-column .oucontent-part-last li.oucontent-saq-answer {
     border:none;
     padding-bottom:0;
}

#mod-oucontent-view .oucontent-table .oucontent-h3,
#mod-oucontent-view .oucontent-table-thumbnail .oucontent-h3 {
    color:#003366;
    padding-left:0;
}

#mod-oucontent-view .oucontent-s-normal {
    background-color:#dcedff;
    border:1px solid #cccccc;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -khtml-border-radius: 5px;
    padding-bottom:10px;
}
#mod-oucontent-view .oucontent-s-normal .oucontent-h3 {
    padding-left:10px;
}
.oucontent-quote,
.oucontent-verse {
    margin:10px 10px 10px 25px;
}
#mod-oucontent-view .oucontent-outer-box .oucontent-quote .oucontent-h3,
#mod-oucontent-view .oucontent-outer-box .oucontent-verse .oucontent-h3,
#mod-oucontent-view .oucontent-outer-box .oucontent-dialogue .oucontent-h3 {
    padding-left:0;
}

.oucontent-quote blockquote {
    margin:0;
}

#mod-oucontent-view .oucontent-s-box .oucontent-s-box .oucontent-h3 {
    border:none;
    background:none;
}

#mod-oucontent-view .oucontent-s-box .oucontent-s-box,
#mod-oucontent-view .oucontent-s-box .oucontent-s-box .oucontent-outer-box,
#mod-oucontent-view .oucontent-s-box .oucontent-s-box .oucontent-inner-box {
    border:none;
    background:none;
}

#mod-oucontent-view .oucontent-printable .oucontent-s-box,
#mod-oucontent-view .oucontent-printable .oucontent-s-box .oucontent-h3,
#mod-oucontent-view .oucontent-printable .oucontent-s-box .oucontent-inner-box {
    background:none;
    border:none;
}
#mod-oucontent-view .oucontent-nextactivity a {
    display:block;
    margin-left:10px;
    text-indent:-10px;
    color:#333333;
    font-size:0.85em;
    text-decoration:none;
}

#mod-oucontent-view .oucontent-nextactivity .oucontent_nexttext {
    font-weight: normal;
}

#mod-oucontent-view .oucontent-nextactivity a:hover .oucontent_nextactivityname {
    text-decoration:underline;
}
#mod-oucontent-view .oucontent-nextactivity a img {
    border:none;
    position:relative;
    top:2px;
}

/* MOBILE */
#oucontents-mobile-content{
    margin-bottom: 10px;
}

.oucontent-mobile-contents-link-top,
.oucontent-mobile-contents-link-bottom{
    width: 100%;
}

.oucontent-mobile-contents-link-top a,
.oucontent-mobile-contents-link-bottom a{
    font-size: 0.85em;
    text-decoration:none;
    font-weight: bold;
}

.oucontent-mobile-contents-link-bottom {
    text-align: right;
}

.oucontent-mobile-sidenote {
    width: 33%;
    display: block;
    float: right;
    padding: 6px;
    margin: 5px 0px 20px 5px;
    background: #e1e1e1;
}

.oucontent-mobile-sidenote .accesshide {
    display: none;
}

.oucontent-mobile-sidenote-head {
    display:block;
    font-weight:bold;
}

.oucontent-mobile-sidenote-para {
    display:block;
    margin-bottom:0.5em;
}

.oucontent-mobile-clear {
    height: 10px;
}

#ouncontent-mobile-left-column .hidden .content,
#ouncontent-mobile-left-column .skip-block{
    display: none;
}

sup.oucontent-footnote {
    margin-left: 1px;
}

#mod-oucontent-view #middle-column ul.oucontent-footnotes {
    margin: 3em 0 2.5em 0;
    padding: 2px 0 0 0;
    border-top: 1px dotted #0094af;
    font-size: 0.85em;
    display: block;
}
#mod-oucontent-view #middle-column li.oucontent-footnote {
    margin-top: 4px;
    margin-bottom: 0;
    margin-left: 1.5em;
    padding: 0;
    display: block;
    position: relative;
    list-style-type: none;
}
span.oucontent-footnote-num {
    position: absolute;
    left: -1.5em;
    top: 0;
}

#mod-oucontent-view .oucontent-printable#middle-column ul.oucontent-footnotes {
    margin: 0;
    padding: 0;
    border-top: none;
}
.oucontent-allfootnotes {
    margin-top: 10em;
    border-top: 1px dotted #aaa;
    padding-top: 1em;
    margin-bottom: 10em;
}

.oucontent-listitemspacer {
    margin-bottom: -2em;
}

.oucontent-multicol {
    margin: 10px -170px 10px 0; /* Uses full 512px */
}

#mod-oucontent-view .oucontent-multicol td,
#mod-oucontent-view .oucontent-multicol th {
    border-left: 10px solid white;
    padding: 2px 0;
    vertical-align: top;
    overflow: hidden;
}
#mod-oucontent-view .oucontent-multicol td.oucontent-firstcol,
#mod-oucontent-view .oucontent-multicol th.oucontent-firstcol {
    border-left: none;
}

.oucontent-multicol-2 .oucontent-narrowcol {
    width: 140px;
}
.oucontent-multicol-2 .oucontent-widecol {
    width: 362px;
}
.oucontent-multicol-2 .oucontent-equalcol {
    width: 251px;
}

.oucontent-multicol-3 .oucontent-narrowcol {
    width: 110px;
}
.oucontent-multicol-3 .oucontent-widecol {
    width: 191px;
}
.oucontent-multicol-3 .oucontent-equalcol {
    width: 164px;
}

.oucontent-multicol-4 .oucontent-narrowcol {
    width: 71px;
}
.oucontent-multicol-4 .oucontent-widecol {
    width: 137px;
}
.oucontent-multicol-4 .oucontent-equalcol {
    width: 120px;
}
.oucontent-multicol-4 .oucontent-equalcol.oucontent-firstcol {
    width: 122px;
}

.oucontent-s-box .oucontent-multicol-2 .oucontent-narrowcol {
    width: 130px;
}
.oucontent-s-box .oucontent-multicol-2 .oucontent-widecol {
    width: 352px;
}
.oucontent-s-box .oucontent-multicol-2 .oucontent-equalcol {
    width: 241px;
}

.oucontent-s-box .oucontent-multicol-3 .oucontent-narrowcol {
    width: 100px;
}
.oucontent-s-box .oucontent-multicol-3 .oucontent-widecol {
    width: 186px;
}
.oucontent-s-box .oucontent-multicol-3 .oucontent-equalcol {
    width: 157px;
}
.oucontent-s-box .oucontent-multicol-3 .oucontent-equalcol.oucontent-firstcol {
    width: 158px;
}

.oucontent-s-box .oucontent-multicol-4 .oucontent-narrowcol {
    width: 60px;
}
.oucontent-s-box .oucontent-multicol-4 .oucontent-widecol {
    width: 134px;
}
.oucontent-s-box .oucontent-multicol-4 .oucontent-equalcol {
    width: 115px;
}
.oucontent-s-box .oucontent-multicol-4 .oucontent-equalcol.oucontent-firstcol {
    width: 117px;
}

/***** /mod/oucontent/styles.php end *****/

/***** /mod/ouelluminate/styles.php start *****/

/* $Id$ */

.elluminateliveboundarytime {
    text-align: center;
    font-size: 0.8em;
}


.elluminateliverecordingmode {
    text-align: center;
    font-size: 0.7em;
}


.elluminateliveeditmoderators {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}


.elluminateliveeditparticipants {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}


.elluminatelivepreload {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}


.elluminatelivejoinmeeting {
    text-align: center;
    font-size: 1.7em;
    font-weight: bold;
}


.elluminateliveverifysetup {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}

.elluminateliverecording {
    text-align: center;
    font-size: 1em;
}

.elluminateliverecording .description {
    font-style: italic;
}

.elluminateliveattendance {
    text-align: center;
    font-size: 1em;
}
.elluminateliverecordingdescriptionedit {
    text-align: center;
}/***** /mod/ouelluminate/styles.php end *****/

/***** /mod/ouwiki/styles.php start *****/

/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
.yui-overlay,.yui-panel-container{visibility:hidden;position:absolute;z-index:2;}.yui-panel-container form{margin:0;}.mask{z-index:1;display:none;position:absolute;top:0;left:0;right:0;bottom:0;}.mask.block-scrollbars{overflow:auto;}.masked select,.drag select,.hide-select select{_visibility:hidden;}.yui-panel-container select{_visibility:inherit;}.hide-scrollbars,.hide-scrollbars *{overflow:hidden;}.hide-scrollbars select{display:none;}.show-scrollbars{overflow:auto;}.yui-panel-container.show-scrollbars,.yui-tt.show-scrollbars{overflow:visible;}.yui-panel-container.show-scrollbars .underlay,.yui-tt.show-scrollbars .yui-tt-shadow{overflow:auto;}.yui-panel-container.shadow .underlay.yui-force-redraw{padding-bottom:1px;}.yui-effect-fade .underlay{display:none;}.yui-tt-shadow{position:absolute;}.yui-override-padding{padding:0 !important;}.yui-panel-container .container-close{overflow:hidden;text-indent:-10000em;text-decoration:none;}.yui-skin-sam .mask{background-color:#000;opacity:.25;*filter:alpha(opacity=25);}.yui-skin-sam .yui-panel-container{padding:0 1px;*padding:2px;}.yui-skin-sam .yui-panel{position:relative;left:0;top:0;border-style:solid;border-width:1px 0;border-color:#808080;z-index:1;*border-width:1px;*zoom:1;_zoom:normal;}.yui-skin-sam .yui-panel .hd,.yui-skin-sam .yui-panel .bd,.yui-skin-sam .yui-panel .ft{border-style:solid;border-width:0 1px;border-color:#808080;margin:0 -1px;*margin:0;*border:0;}.yui-skin-sam .yui-panel .hd{border-bottom:solid 1px #ccc;}.yui-skin-sam .yui-panel .bd,.yui-skin-sam .yui-panel .ft{background-color:#F2F2F2;}.yui-skin-sam .yui-panel .hd{padding:0 10px;font-size:93%;line-height:2;*line-height:1.9;font-weight:bold;color:#000;background:url(../../../../assets/skins/sam/sprite.png) repeat-x 0 -200px;}.yui-skin-sam .yui-panel .bd{padding:10px;}.yui-skin-sam .yui-panel .ft{border-top:solid 1px #808080;padding:5px 10px;font-size:77%;}.yui-skin-sam .yui-panel-container.focused .yui-panel .hd{}.yui-skin-sam .container-close{position:absolute;top:5px;right:6px;width:25px;height:15px;background:url(../../../../assets/skins/sam/sprite.png) no-repeat 0 -300px;cursor:pointer;}.yui-skin-sam .yui-panel-container .underlay{right:-1px;left:-1px;}.yui-skin-sam .yui-panel-container.matte{padding:9px 10px;background-color:#fff;}.yui-skin-sam .yui-panel-container.shadow{_padding:2px 4px 0 2px;}.yui-skin-sam .yui-panel-container.shadow .underlay{position:absolute;top:2px;left:-3px;right:-3px;bottom:-3px;*top:4px;*left:-1px;*right:-1px;*bottom:-1px;_top:0;_left:0;_right:0;_bottom:0;_margin-top:3px;_margin-left:-1px;background-color:#000;opacity:.12;*filter:alpha(opacity=12);}.yui-skin-sam .yui-dialog .ft{border-top:none;padding:0 10px 10px 10px;font-size:100%;}.yui-skin-sam .yui-dialog .ft .button-group{display:block;text-align:right;}.yui-skin-sam .yui-dialog .ft button.default{font-weight:bold;}.yui-skin-sam .yui-dialog .ft span.default{border-color:#304369;background-position:0 -1400px;}.yui-skin-sam .yui-dialog .ft span.default .first-child{border-color:#304369;}.yui-skin-sam .yui-dialog .ft span.default button{color:#fff;}.yui-skin-sam .yui-dialog .ft span.yui-button-disabled{background-position:0pt -1500px;border-color:#ccc;}.yui-skin-sam .yui-dialog .ft span.yui-button-disabled .first-child{border-color:#ccc;}.yui-skin-sam .yui-dialog .ft span.yui-button-disabled button{color:#a6a6a6;}.yui-skin-sam .yui-simple-dialog .bd .yui-icon{background:url(../../../../assets/skins/sam/sprite.png) no-repeat 0 0;width:16px;height:16px;margin-right:10px;float:left;}.yui-skin-sam .yui-simple-dialog .bd span.blckicon{background-position:0 -1100px;}.yui-skin-sam .yui-simple-dialog .bd span.alrticon{background-position:0 -1050px;}.yui-skin-sam .yui-simple-dialog .bd span.hlpicon{background-position:0 -1150px;}.yui-skin-sam .yui-simple-dialog .bd span.infoicon{background-position:0 -1200px;}.yui-skin-sam .yui-simple-dialog .bd span.warnicon{background-position:0 -1900px;}.yui-skin-sam .yui-simple-dialog .bd span.tipicon{background-position:0 -1250px;}.yui-skin-sam .yui-tt .bd{position:relative;top:0;left:0;z-index:1;color:#000;padding:2px 5px;border-color:#D4C237 #A6982B #A6982B #A6982B;border-width:1px;border-style:solid;background-color:#FFEE69;}.yui-skin-sam .yui-tt.show-scrollbars .bd{overflow:auto;}.yui-skin-sam .yui-tt-shadow{top:2px;right:-3px;left:-3px;bottom:-3px;background-color:#000;}.yui-skin-sam .yui-tt-shadow-visible{opacity:.12;*filter:alpha(opacity=12);}

#mod-ouwiki-edit .ouw_preview {
    border:1px solid #ddd;
    padding:10px;
    margin:1em;
}
#mod-ouwiki-view .ouw_recentchanges {
    font-size:0.85em;
    color:#636363;
    margin-top:0.5em;
}
#mod-ouwiki-view .ouw_commentsinfo {
    color:#636363;
}
#mod-ouwiki-view .ouw_recentchanges h2 {
    margin:0 1em 0 0;
    display:inline;
    font-size:1.0em;
    font-weight:normal;
}
#mod-ouwiki-view .ouw_recentchanges ul,
#mod-ouwiki-view .ouw_recentchanges li {
    display:inline;
    margin:0;
    padding:0;
}
#mod-ouwiki-view .ouw_recentchanges li {
    margin-right:0.5em;
}
#mod-ouwiki-view .tabrow0 {
    padding-bottom:0.75em;
}
#mod-ouwiki-view ul.ouw_comments .ouw_recentnot {
    color:#444;
} 

#mod-ouwiki-edit #ouw_countdown {
    float:right;
    margin-left:2em;
    border:1px solid #ddd;
    padding:4px;
}
.dir-rtl#mod-ouwiki-edit #ouw_countdown {
    float: left;
}
#mod-ouwiki-edit form#ouw_edit {
    margin-top:1em;
}
#mod-ouwiki-edit #ouw_countdownurgent {
    font-weight:bold;
    color:red;
}

#mod-ouwiki-history table,
#mod-ouwiki-wikihistory table, 
#mod-ouwiki-contributions table {
    width:100%;
}

#mod-ouwiki-history .ouw_history th,
#mod-ouwiki-wikihistory th,
#mod-ouwiki-contributions th {
    text-align:left;
    padding: 5px 12px 5px 4px;
    background: #a7d2ff;
    border-left: 1px solid #a7d2ff;
    border-right: 1px solid #a7d2ff;
    border-top:1px solid #888;
    border-bottom:1px dotted #888;    
}
.dir-rtl#mod-ouwiki-history .ouw_history th,
.dir-rtl#mod-ouwiki-wikihistory th,
.dir-rtl#mod-ouwiki-contributions th {
    text-align: right;
}

#mod-ouwiki-history .ouw_history td,
#mod-ouwiki-wikihistory td,
#mod-ouwiki-contributions td {
    padding: 3px 12px 3px 4px;
    border-bottom:1px dotted #888;    
}
#mod-ouwiki-wikihistory td.ouw_rightcol,
#mod-ouwiki-contributions td.ouw_rightcol,
#mod-ouwiki-history .ouw_history td.ouw_rightcol {
    border-right:1px dotted #888;
}
#mod-ouwiki-wikihistory td.ouw_leftcol,
#mod-ouwiki-contributions td.ouw_leftcol,
#mod-ouwiki-history .ouw_history td.ouw_leftcol {
    border-left:1px dotted #888;
}
#mod-ouwiki-history .ouw_history td.check,
#mod-ouwiki-history .ouw_history td.comparebutton {
    padding-right:4px;
}
#mod-ouwiki-history .ouw_history td.comparebutton {
    padding-top:6px;
    border-bottom:none;
}
#mod-ouwiki-history .ouw_history tr.current,
#mod-ouwiki-wikihistory tr.current {
    background:#dcedff;
}
#mod-ouwiki-history .ouw_history td.comparebutton {
    text-align:right;
    padding-bottom:6px;
}
.dir-rtl#mod-ouwiki-history .ouw_history td.comparebutton {
    text-align:left;
}
#mod-ouwiki-history .ouw_history table,
#mod-ouwiki-wikihistory table{
    margin-top:1em;
}
#mod-ouwiki-contributions .ouw_contributionsgroups {
    background:#f0f0f0;
    padding:8px;
}


#ouwiki_belowtabs {
    max-width:55em;
    margin-left:auto;
    margin-right:auto;
}

#ouwiki_belowtabs_reports {
}

#mod-ouwiki-viewold .ouw_versionbox,
#mod-ouwiki-diff .ouw_versionbox {
    border-top:1px solid #888;
    background:#dcedff;
    padding:8px 8px 10px 8px;
}
#mod-ouwiki-diff .ouw_versionbox .ouw_date {
    font-weight:bold;
}
#mod-ouwiki-viewold .ouw_oldversion h1 {
    font-size:1em;
    margin:0;
}
#mod-ouwiki-viewold .ouw_oldversion .ouw_person {
    font-weight:normal;    
}

#mod-ouwiki-viewold .ouw_prev {
    float:left;
}
.dir-rtl#mod-ouwiki-viewold .ouw_prev {
    float: right;
}
#mod-ouwiki-viewold .ouw_next {
    float:right;
}
.dir-rtl#mod-ouwiki-viewold .ouw_next {
    float: left;
}

#ouwiki_indexlinks {
    margin:0 0 8px;
    padding:0;
    text-align:right;
}
.dir-rtl #ouwiki_indexlinks {
    text-align: left;
}

#ouwiki_indexlinks ul {
    margin:0;
    padding:0;
    display:inline;
}
#ouwiki_indexlinks form,
#ouwiki_indexlinks form div {
    display:inline;
}
#ouwiki_indexlinks form input {
    font-size:0.85em;
}
#ouwiki_indexlinks #ouw_searchbox {
    width:10em;
}

#ouwiki_indexlinks li {
    margin:0 0.5em 0 0;
    padding:0;
    list-style-type:none;
    display:inline;
}
#ouwiki_noindexlink {
    height:1em;
}
#ouwiki_indexlinks a {
    border:1px solid #aaa;
    padding:2px;
    font-size:84%;
}
#ouwiki_indexlinks span {
    border:1px solid black;
    padding:2px;
    font-size:84%;
}

#mod-ouwiki-wikiindex ul.ouw_index,
#mod-ouwiki-wikiindex ul.ouw_index li,
#mod-ouwiki-wikiindex ul.ouw_indextree,
#mod-ouwiki-wikiindex ul.ouw_indextree li {
    list-style-type:none;
    margin:0;
    padding:0;
}
#mod-ouwiki-wikiindex ul.ouw_index,
#mod-ouwiki-wikiindex ul.ouw_indextree {
    margin-bottom:2em;
}
#mod-ouwiki-wikiindex .ouw_title {
    display:block;
    font-weight:bold;
    background:#dcedff;
    padding:4px 8px 8px;
    border-top:1px solid #888;
    margin-top:-1px;
}
#mod-ouwiki-wikiindex a.ouw_title:link,
#mod-ouwiki-wikiindex a.ouw_title:visited{
    color:black;
}
#mod-ouwiki-wikiindex .ouw_indexinfo {
    border:1px dotted #888;
    border-top:none;
    padding:4px 8px 6px;
    font-size:0.85em;
    color:#888;
}
#mod-ouwiki-wikiindex .ouw_index .ouw_index_startpage .ouw_indexinfo {
    border-bottom:1px dotted #888;
}
.ie#mod-ouwiki-wikiindex .ouw_index_startpage .ouw_title {
    border-top:2px solid #888;
}



#mod-ouwiki-wikiindex .ouw_missingfrom {
    font-size:0.85em;
}
#mod-ouwiki-wikiindex h2 {
    font-size:1.0em;
    margin-bottom:0.5em;
    margin-top:2em;
}
#mod-ouwiki-wikiindex h2.ouw_orphans {
    margin-bottom:0.75em;
}

#mod-ouwiki-wikiindex ul.ouw_indextree ul {
    margin-left:3em;
    padding-left:0;
    margin-top:0;
    margin-bottom:0;
}
#mod-ouwiki-wikiindex ul.ouw_indextree li ul {
}
#mod-ouwiki-wikiindex ul.ouw_indextree ul ul {
    margin-left:2.75em;
}
#mod-ouwiki-wikiindex ul.ouw_indextree ul ul ul {
    margin-left:2.5em;
}
#mod-ouwiki-wikiindex ul.ouw_indextree ul ul ul ul {
    margin-left:2.25em;
}
#mod-ouwiki-wikiindex ul.ouw_indextree ul ul ul ul ul {
    margin-left:2em;
}
#mod-ouwiki-wikiindex ul.ouw_indextree ul ul ul ul ul ul {
    margin-left:1.75em;
}
#mod-ouwiki-wikiindex ul.ouw_indextree ul ul ul ul ul ul ul {
    margin-left:1.5em;
}
#mod-ouwiki-wikiindex ul.ouw_indextree ul ul ul ul ul ul ul ul {
    margin-left:1.25em;
}
#mod-ouwiki-wikiindex ul.ouw_indextree ul ul ul ul ul ul ul ul ul {
    margin-left:1em;
}

#mod-ouwiki-diff .ouw_left,
#mod-ouwiki-diff .ouw_right {
    float:left;
    width:50%;
}
.dir-rtl#mod-ouwiki-diff .ouw_left,
.dir-rtl#mod-ouwiki-diff .ouw_right {
    float:right;
}
#mod-ouwiki-diff .ouw_diff {
    background:#f0f0f0;
    color:#636363;
    border-left:1px dotted #888;
    border-right:1px dotted #888;
    border-bottom:1px dotted #888;
    padding:8px;
}
#mod-ouwiki-diff .ouw_left .ouw_diff, 
#mod-ouwiki-diff .ouw_left .ouw_versionbox {
    margin-right:1em;
}
#mod-ouwiki-diff .ouw_right .ouw_diff, 
#mod-ouwiki-diff .ouw_right .ouw_versionbox {
    margin-left:1em;
}
#mod-ouwiki-diff .ouw_deleted {
    background:white;
    color:red;
    text-decoration:line-through;    
}
#mod-ouwiki-diff .ouw_added {
    background:white;
    color:green;
}

#mod-ouwiki-diff .ouw_advice {
    margin-bottom:1em;
}

.ouw_subwiki {
    font-size:0.85em;
}
.ouw_subwiki form,
.ouw_subwiki div {
    display:inline;
}
#mod-ouwiki-view .ouw_summary {
    margin-top:1em;
}

#mod-ouwiki-view .ouw_byheading {
    display:inline;
    font-weight:normal;
    font-style:normal;
    font-size:0.85em;
    margin-left:1em;
}

#mod-ouwiki-view .ouw_editsection,
#mod-ouwiki-view .ouw_annotate,
#mod-ouwiki-view .ouw_makecomment {
    margin-right:1em;
}

.ouwiki_content h1,
.ouwiki_content h2 {
    font-size:1.5em;
    display:inline;
}
.ouwiki_content h3,
.ouwiki_content h4,
.ouwiki_content h5 {
    font-size:1em;
    display:inline;
}
.ouwiki_content h6 {
    font-size:0.85em;
    display:inline;
}

.ouwiki_content .ouw_heading1,
.ouwiki_content .ouw_heading2 {
    margin:0.6667em 0 0.3333em 0; 
}
.ouwiki_content .ouw_heading3,
.ouwiki_content .ouw_heading4,
.ouwiki_content .ouw_heading5 {
    margin:1em 0 0.5em 0;
}
.ouwiki_content .ouw_heading6 {
    margin:1.25em 0 0.625em 0; 
}

.ouwiki_content h1.ouw_fixedheading,
.ouwiki_content h2.ouw_fixedheading,
.ouwiki_content h3.ouw_fixedheading,
.ouwiki_content h4.ouw_fixedheading,
.ouwiki_content h5.ouw_fixedheading,
.ouwiki_content h6.ouw_fixedheading {
    font-size:1em;
    margin:1em 0 0.5em 0;
}

.ouwiki_content h1.ouw_fixedheading .ouw_headingtext,
.ouwiki_content h2.ouw_fixedheading .ouw_headingtext {
    font-size:1.5em;
}
.ouwiki_content h1 {
    padding-bottom:2px;
    border-bottom:1px dotted #888;
}
.ouwiki_content h6.ouw_fixedheading .ouw_headingtext {
    font-size:0.85em;
}
.ouwiki_content h3 {
    border-bottom:1px dotted #888;
    padding-bottom:2px;
}
.ouwiki_content h5,
.ouwiki_content h6 {
    font-weight:normal;
    font-style:italic;
}

.ouw_addcomment label {
    float:left;
    width:12em;
    padding-top:2px;
}
.dir-rtl .ouw_addcomment label {
    float:right;
}
.ouw_addcomment .ouw_ac_field {
    margin-bottom:0.5em;
}
.ouw_addcomment .ouw_ac_input {
    width:40em;
}
.ouw_addcomment table {
    border:0;
    padding:0;
    margin:0;
    font-size:1em;
    width:40em;
}
.ouw_addcomment tr,.ouw_addcomment td {
    border:0;
    margin:0;
    padding:0;
    
}
.ouw_addcomment textarea {
    font-size:1em;
    font-family:inherit;
    width:40em;
}
.ouw_addcomment .ouw_ac_submit {
    margin-left:12em;
}

ul.ouw_comments,    
ul.ouw_comments li.ouw_comment {
    list-style-type:none;
    display:block;
    margin:0;
    padding:0;
}
#mod-ouwiki-view .ouw_hiddencomments {
    margin:0 -9px 1em;
    background:#f0f0f0;
    font-size:0.85em;
    padding:4px 9px;
}
#mod-ouwiki-view #ouw_comments_ {
    margin-bottom:0;
}
#mod-ouwiki-comments ul.ouw_comments li.ouw_comment {
    margin:0 0 1em 0;
    border-top:1px dotted #888;
    padding-top:2px;
}
#mod-ouwiki-view ul.ouw_comments li.ouw_comment {
    margin-bottom:6px;
    border-bottom:1px dotted #888;
    padding-bottom:3px;
}
ul.ouw_comments .ouw_commentposter {
    float:left;
    padding-right:1em;
}
.dir-rtl ul.ouw_comments .ouw_commentposter {
    float: right;
}
ul.ouw_comments h3.ouw_commenttitle {
    margin:0.5em 0;
    font-size:1em;
    display:block;
    border-bottom:none;
}
ul.ouw_comments .ouw_commentsection {
    font-style:italic;
    margin-top:0.3em;
}
#mod-ouwiki-view ul.ouw_comments h3.ouw_commenttitle {
    margin-bottom:0;
}
#mod-ouwiki-view h4.ouw_oldercomments {
    margin:0;
    margin-bottom:4px;
}
ul.ouw_comments .ouw_commentposter,
ul.ouw_comments .ouw_commentdate,
ul.ouw_comments .ouw_commentsubmit input {
    font-size:0.85em;
}
#mod-ouwiki-view ul.ouw_comments .ouw_commentposter,
#mod-ouwiki-view ul.ouw_comments .ouw_commentdate,
#mod-ouwiki-view ul.ouw_comments .ouw_commentsubmit input {
    font-size:1em;
}

ul.ouw_comments .ouw_commentsubmit {
    text-align:right;
}
.dir-rtl ul.ouw_comments .ouw_commentsubmit {
    text-align:left;
}

#mod-ouwiki-comments h2 {
    margin-top:3em;
    font-size:1em;
}
.ouw_hiddencommentoptions span {
    margin-right:1em;
}
.ouw_hiddencomments {
    display:none;
}
#ouw_ac_formcontainer {
  margin-top:1.5em;
  clear:right;
}
.dir-rtl#ouw_ac_formcontainer {
    clear:left;
}
.ouw_nocomments #ouw_ac_formcontainer {
    margin-top:0;
} 

#mod-ouwiki-comments .ouw_deletedcommentinfo {
    margin-bottom:1.5em;
}
#mod-ouwiki-comments .ouw_deletedcomment .ouw_commentxhtml,
#mod-ouwiki-comments .ouw_deletedcomment .ouw_commenttitle {
    text-decoration:line-through;
    color:#888;
}
.ouw_deletedrow {
    background-color:#cccccc;
}
.ouw_deleted {
    color:#cc0000;
}
#mod-ouwiki-comments .ouw_deletedcomment form {
    text-decoration:none !important;
}

.ouw_recenter {
    font-weight:bold;
    color:black;
}
.ouw_recent {
    color:black;
}
.ouw_recentnot {
    color:#636363;
}

#mod-ouwiki-wikiindex .ouw_wikirecentchanges ul,
#mod-ouwiki-wikiindex .ouw_wikirecentchanges li {
    list-style-type:none;
    margin:0;
    padding:0;
    
}


#mod-ouwiki-wikihistory .ouw_paging {
    margin-top:1em;
}
#mod-ouwiki-wikihistory .ouw_paging_prev {
    float:left;
    width:50%;
    text-align:right;
}
.dir-rtl#mod-ouwiki-wikihistory .ouw_paging_prev {
    float: right;
    text-align: left;
}
#mod-ouwiki-wikihistory .ouw_paging_prev a {
    margin-right:2em;
}
#mod-ouwiki-wikihistory .ouw_paging_next {
    float:left;
    width:50%;
}
.dir-rtl#mod-ouwiki-wikihistory .ouw_paging_next {
    float:right;
}
#mod-ouwiki-wikihistory .ouw_paging_next a {
    margin-left:2em;
}


#mod-ouwiki-comments.ie .ouw_commentdate {
    line-height:1.2;
}
#mod-ouwiki-view.ie .ouw_commentdate {
    display:inline;
    line-height:1.2;
}

/* Hack because font-family:inherit doesn't work in IE */
#mod-ouwiki-view.ie textarea,
#mod-ouwiki-comments.ie textarea {
    font-family: Verdana,sans-serif;
}

#mod-ouwiki-view .ouw_linkedfrom {
    margin-top:1.5em;
    font-size:0.85em;
}
#mod-ouwiki-view .ouw_linkedfrom h3 {
    margin:0;
    font-size:1em;
    font-weight:normal;
}
#mod-ouwiki-view .ouw_linkedfrom ul,
#mod-ouwiki-view .ouw_linkedfrom li {
    margin:0;
    padding:0;
    list-style-type:none;
    display:inline;
}

#mod-ouwiki-wikiindex .ouw_missingpages ul,
#mod-ouwiki-wikiindex .ouw_missingpages li {
    margin:0;
    padding:0;
    list-style-type:none;
    display:inline;
}


.ouw_subwiki {
    float:left;
}
.dir-rtl .ouw_subwiki {
    float: right;
}
.ouwiki_notabs.ouwiki_gotselector {
    margin-top:1em;
}

.ouwiki_lockinfobuttons form {
    display:inline;
}

a.ouwiki_noshow:link,a.ouwiki_noshow:visited {
    color:inherit;
}

.ouw_index .ouw_index_startpage {
   margin-bottom:1em;
}

.ouw_timelocked {
    margin-top:3em;
    font-style:italic;
}

#mod-ouwiki-comments .ouw_returnlink {
    margin-top:2em;
}

#mod-ouwiki-wikiindex .ouw_savetemplate, 
#mod-ouwiki-wikihistory .ouw_contributionslink {
    margin-top:2em;
}

#mod-ouwiki-contributions h2, #mod-ouwiki-contributions h3 {
    font-size:1em;
    margin:1em 0 0.5em;
}
#mod-ouwiki-contributions small {
    font-size:1em;
    font-weight:normal;
}
#mod-ouwiki-contributions table {
    margin-bottom:2em;
}

#mod-ouwiki-entirewiki h1 a {
    color:black;
}
#mod-ouwiki-entirewiki .ouw_entry {
    margin-bottom:2em;
}

.ouw_subscribe {
    margin-top:2em;
    font-size:0.85em;
}
.ouw_subscribe img {
    vertical-align:bottom;
}
.ouw_subscribe span {
    position:relative;
    top:-1px;
}

.ouw_belowmainhead {
    border:1px dotted #888;
    border-top:none;
    padding:0px 8px 4px;
}
.ouw_topspacer {
     padding-top:4px;
}
.ouw_topheading {
    background:#dcedff;    
    padding:4px 8px 8px;
    border-top:1px solid #888;
    margin-top:1.5em;
}

.ouw_topheading h1 {
    border:none;
}

#mod-ouwiki-comments .ouwiki_allcomments {
    background:#f0f0f0;
    padding:0 8px 8px;
}

#mod-ouwiki-entirewiki .ouw_entry h1.ouw_entry_heading {
    background:#dcedff;
    padding:4px 8px 8px;
    border-top:1px solid #888;
    border-bottom:none;
    display:block;
    margin:0.5em 0 0;
}
#mod-ouwiki-entirewiki .ouw_entry .ouwiki_content {
    border:1px dotted #888;
    border-top:none;
    padding:4px 8px;
    margin-top:0;
}

#mod-ouwiki-reportsgroup .ouw_bar {    
	  float:left; 
    position:relative;
    margin-right:1px;         
    overflow:hidden; /* sigh IE6 */
}
.dir-rtl#mod-ouwiki-reportsgroup .ouw_bar {
    float: right;
}

#mod-ouwiki-reportsgroup .ouw_chartcontainer {
	position:relative; 	
}

#mod-ouwiki-reportsgroup .ouw_yaxis {
    position:absolute; 	
    text-align:right;
}
.dir-rtl#mod-ouwiki-reportsgroup .ouw_yaxis {
    text-align: left;
}

#mod-ouwiki-reportsgroup .ouw_graphtitle {
	float:left; 
    position:relative;             	
}
.dir-rtl#mod-ouwiki-reportsgroup .ouw_graphtitle {
    float: right;
}


#mod-ouwiki-reportsgroup div.ouw_groupreport {
    margin:2em 0;
    width:250px;
    float:left;
}
.dir-rtl#mod-ouwiki-reportsgroup div.ouw_groupreport {
    float:right;
}

#mod-ouwiki-reportssummary th,
#mod-ouwiki-reportsusers th,
#mod-ouwiki-reportsuser th,
#mod-ouwiki-reportsgroup th {
    text-align:left;
    padding: 5px 12px 5px 4px;
    background: #a7d2ff;
    border-left: 1px solid #a7d2ff;
    border-right: 1px solid #a7d2ff;
    border-top:1px solid #888;
    border-bottom:1px dotted #888;    
}
.dir-rtl#mod-ouwiki-reportssummary th,
.dir-rtl#mod-ouwiki-reportsusers th,
.dir-rtl#mod-ouwiki-reportsuser th,
.dir-rtl#mod-ouwiki-reportsgroup th {
    text-align: right;
}

#mod-ouwiki-reportssummary td,
#mod-ouwiki-reportsusers td,
#mod-ouwiki-reportsuser td,
#mod-ouwiki-reportsgroup td {
    padding: 3px 12px 3px 4px;
    border-bottom:1px dotted #888;    
}

#mod-ouwiki-reportssummary td.ouw_rightcol,
#mod-ouwiki-reportsusers td.ouw_rightcol,
#mod-ouwiki-reportsuser td.ouw_rightcol,
#mod-ouwiki-reportsgroup td.ouw_rightcol {
    border-right:1px dotted #888;
}
#mod-ouwiki-reportssummary td.ouw_leftcol,
#mod-ouwiki-reportsusers td.ouw_leftcol,
#mod-ouwiki-reportsuser td.ouw_leftcol,
#mod-ouwiki-reportsgroup td.ouw_leftcol {
    border-left:1px dotted #888;
}
#mod-ouwiki-reportsgroup tr.ouw_lastingroup {
    border-bottom:2px dotted #a7d2ff;
}
#mod-ouwiki-reportsgroup table h4 {
    margin:0;
}

#mod-ouwiki-reportsgroup .ouw_graphs {
    width:200px;
    margin-top:2em;
    margin-left:20px;
    float:left;
}
.dir-rtl#mod-ouwiki-reportsgroup .ouw_graphs {
    float:right;
}

#mod-ouwiki-reportsgroup .ouw_pagelist {
    clear:left;   
}
.dir-rtl#mod-ouwiki-reportsgroup .ouw_pagelist {
    clear: right;
}

 
#mod-ouwiki-reportsgroup .ouw_pagelist,
#mod-ouwiki-reportssummary .ouw_grouplist,
#mod-ouwiki-reportsgroup .ouw_userlist,
#mod-ouwiki-reportsuser .ouw_userlist,
#mod-ouwiki-reportsuser .ouw_usereditslist,
#mod-ouwiki-reportsuser .ouw_usercommentslist,
#mod-ouwiki-reportsuser .ouw_useractivitybydatelist {
	margin-top:2em;		
	margin-right:2em;
}

#mod-ouwiki-reportssummary .ouw_dodgyextrarow td,
#mod-ouwiki-reportsgroup .ouw_dodgyextrarow td {
    padding: 5px 12px 5px 4px;
    background: #a7d2ff;
    border-left: 1px solid #a7d2ff;
    border-right: 1px solid #a7d2ff;
    border-top:1px solid #888;
    border-bottom:none;
    font-weight:bold;
}

#mod-ouwiki-reportssummary .ouw_grouplist th,
#mod-ouwiki-reportsgroup .ouw_pagelist th {
    border-top:none;
}
#mod-ouwiki-reportsgroup .ouw_firstingroup,
#mod-ouwiki-reportsusers .ouw_firstingroup,
#mod-ouwiki-reportsuser .ouw_firstingroup,
#mod-ouwiki-reportssummary .ouw_firstingroup {
    border-left:2px dotted #a7d2ff;
}

#mod-ouwiki-reportssummary th.ouw_firstingroup, 
#mod-ouwiki-reportssummary .ouw_dodgyextrarow td.ouw_firstingroup,
#mod-ouwiki-reportsusers th.ouw_firstingroup, 
#mod-ouwiki-reportsuser th.ouw_firstingroup, 
#mod-ouwiki-reportsgroup th.ouw_firstingroup, 
#mod-ouwiki-reportsgroup .ouw_dodgyextrarow td.ouw_firstingroup {
    border-left:2px dotted #888;
}

#mod-ouwiki-reportsgroup .ouw_pagecolumn { 
    height:1px;
    width:8em;
}

#mod-ouwiki-reportssummary .ouw_groupcolumn { 
    height:1px;
    width:8em;
}

#mod-ouwiki-reportsusers .ouw_datecolumn,
#mod-ouwiki-reportsuser .ouw_datecolumn,
#mod-ouwiki-reportsgroup .ouw_datecolumn {
    height:1px;
    width:10em;
}
#mod-ouwiki-reportsusers .ouw_namecolumn,
#mod-ouwiki-reportsuser .ouw_namecolumn {
    height:1px;
    width:15em;
}

#mod-ouwiki-reportsgroup .ouw_lastdate {
	text-align:right;
}
.dir-rtl#mod-ouwiki-reportsgroup .ouw_lastdate {
    text-align: left;
}

#mod-ouwiki-reportsgroup .ouw_timelines_page {
	margin-top:2em;	
}

#mod-ouwiki-reportsgroup .ouw_timelines_page td {
    border-bottom:none;
    vertical-align:top;
}
#mod-ouwiki-reportsgroup .ouw_timelines_page tr.ouw_lastrow td {
    border-bottom: 1px dotted #888;
}
#mod-ouwiki-reportsgroup .ouw_bargraph1,
#mod-ouwiki-reportsgroup .ouw_bargraph2,
.ouw_bargraph1key,
.ouw_bargraph2key {
    border-top: 1px solid #888888;
    border-left: 1px solid #888888;
    border-right: 1px solid #888888;
    border-bottom: none;
}
.ie6#mod-ouwiki-reportsgroup .ouw_bargraph1.ouw_zero,
.ie6#mod-ouwiki-reportsgroup .ouw_bargraph2.ouw_zero {
    background:transparent !important;
    border-left:none !important;
    border-right:none !important;
}
#mod-ouwiki-reportsgroup .ouw_bargraph1,
.ouw_bargraph1key {
    background-color: #a7d2ff;
}
#mod-ouwiki-reportsgroup .ouw_bargraph2,
.ouw_bargraph2key {
    background-color: transparent;
}
.ouw_bargraph1key,
.ouw_bargraph2key {
    padding-left:5px;
    font-size:8px;
    border: 1px solid #888888;
    position:relative;
    top:-3px;
}

#mod-ouwiki-reportsgroup .ouw_graph {
    border-left: 1px solid #888888;
    border-bottom: 1px solid #888888;
}
#mod-ouwiki-reportsgroup .ouw_graph_y_mark,
#mod-ouwiki-reportsgroup .ouw_graph_max_pages {
    border-top: 1px solid #888888;
}
#mod-ouwiki-reportsgroup .ouw_graph_x_mark {
    border-left: 1px solid #888888;
}

#mod-ouwiki_addnew {
    display:inline;
}


#mod-ouwiki_addnew ul,
#mod-ouwiki_addnew li {
    margin:0;
    padding:0;
    display:inline;
    list-style-type:none;
}


.ouwiki_addnew_class {
    display:inline;
}

.ouwiki-annotation,
.ouwiki-orphaned-annotation {
    display:block;
    width:50%;
    min-height:42px;
    margin:0.3em;
    padding:0.3em;
    background-color:#F7F0D9;
}

.ouwiki-annotation h3,
.ouwiki-orphaned-annotation h3 {
    display:block;
    font-weight:bold;
    border:0;
    margin:0 0 0.2em;
}

.ouwiki-annotation .userpicture,
.ouwiki-orphaned-annotation .userpicture {
    float:left;
    margin: 0.2em 0.1em;
}
.dir-rtl .ouwiki-annotation .userpicture,
.dir-rtl .ouwiki-orphaned-annotation .userpicture {
    float: right;
}

.ouwiki-annotation .ouwiki-annotation-content,
.ouwiki-orphaned-annotation .ouwiki-annotation-content {
    display:block;
    margin-left:40px;
    padding-left:0.3em;
    font-weight:normal;
}

.ouwiki-annotation .ouwiki-annotation-content .ouwiki-annotation-content-title,
.ouwiki-orphaned-annotation .ouwiki-annotation-content .ouwiki-annotation-content-title {
    display:block;
    padding-bottom:0.3em;
    font-weight:bold;
}

.ouwiki-annotation-tag {
    padding:1px 1px 0 1px;
    margin:0;
    cursor:default;
}

.ouwiki-annotation-marker {
    padding:0;
    margin:0;
    cursor:default;
}

.ouwiki-annotation-marker img {padding:1px;}

.ouwiki-annotation-tag img {padding:0;}

.ouwiki-annotation-marker:hover{background-color:#99ccff;}

#showhideannotations {display:none;}
#showallannotations {display:inline;}
#hideallannotations {display:none;}

#ouwiki_addannotation label {
    display:block;
}

#ouwiki_addannotation_buttons {
}

#mod-ouwiki-annotate #mform1 {
    margin-top:2em;
}

.ouwiki_lock_div {margin-top:2em;}


/* Ugh, problems when resized, I can't get it to work */
.ie7 #wikiselect {
    font-size:11px;
}

#ouwiki-annotation-dialog label { 
    display:block;
    float:left;
    width:30%;
    clear:left;
}
.dir-rtl#ouwiki-annotation-dialog label {
    float: right;
    clear: right;
}

.clear {
    clear:both;
}

.yui-pe .yui-pe-content {
    display:none;
}

#yui-gen0-button {color:#000000;}

.ouwiki-notifyproblem {
    color: #ffffff;
    background-color: #ff0000;
    padding: 0 2em;
}

.ouwiki-sizewarning img {
    margin-right: 4px;
    position:relative;
    top: 3px;
}

.ouwiki-sizewarning {
    margin-top: 10px;
    margin-left: 20px;
    text-indent: -20px;
}/***** /mod/ouwiki/styles.php end *****/

/***** /mod/questionnaire/styles.php start *****/


.questionnaire_qbut {
    padding-right: 0.5em;
}

/** 
 ** Question editing formslib style changes:
 **/

#mod-questionnaire-questions div.qcontainer .fitemtitle {
    display: none;
}

#mod-questionnaire-questions .mform div.qcontainer fieldset.felement {
    width: 100%;
}

#mod-questionnaire-questions div.qcontainer div.qnums {
    display: block;
    font-weight: bold;
    width: 10%;
    float: left;
}

#mod-questionnaire-questions div.qcontainer div.qicons {
    display: block;
    width: 15%;
    float: left;
}

#mod-questionnaire-questions div.qcontainer div.qtype {
    display: block;
    width: 19%;
    float: left;
}

#mod-questionnaire-questions div.qcontainer div.qreq {
    display: block;
    width: 9%;
    float: left;
}

#mod-questionnaire-questions div.qcontainer div.qname {
    float: left;
    display: block;
    width: 45%;
}

#mod-questionnaire-questions div.qcontainer div.qheader {
    border-bottom: double #000000 4px;
    border-top: double #000000 4px;
    font-weight: bold;
    margin-top: 20px;
    padding-bottom:10px;
}

#mod-questionnaire-questions div.qcontainer div.fstatic {
    width: 97%;
    border-bottom: solid #000000 1px;
    margin-right: 1em;
    background-color: #FFFFFF;
}

#mod-questionnaire-questions div.qcontainer div.qcontent {
    margin-bottom:-1em;
}

div.qoptcontainer div.ftextarea {
    clear: both;
    float: none;
    width: 600px;
    margin: 0pt auto 10px;
}

div.qoptcontainer div.ftextarea textarea.qopts {
    width: 600px;
    height: 10em;
    margin-left: 1px;
}
#mod-questionnaire-report .nolink,
#mod-questionnaire-myreport .nolink {
	font-weight:bold;
	text-decoration:none;
}/***** /mod/questionnaire/styles.php end *****/

/***** /mod/quiz/styles.php start *****/

/*
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
*/


/**
 * Specific styles for the quiz module.
 *
 * @package mod_quiz
 * @copyright 2009 The Open University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

#quiznavigation .qnbutton.flagged .trafficlight {
  background: transparent url(http://openlearn.open.ac.uk/pix/smartpix.php/oci/i/ne_red_mark.png) no-repeat top right;
}
/***** /mod/quiz/styles.php end *****/

/***** /mod/repeatactivity/styles.php start *****/

.repeatactivity  .repeatactivity_info {
    display:none;
}
#course-view .editing .repeatactivity  .repeatactivity_info {
    display:inline;
}
/***** /mod/repeatactivity/styles.php end *****/

/***** /mod/repository/styles.php start *****/

table.reposearchtable td
{
  font-size: 0.9em;
  padding: 1px 1em;
  text-align: left;
  border: 1px solid #CCCCCC;
}

table.reposearchtable
{
  border: 1px solid #CCCCCC;
  width: 80%;
  margin-left:auto; 
  margin-right:auto;
}

th.reposearchtabletop
{
  font-size: 1em;
  font-weight: bold;
  color: #000000;
  background-color:#CCCCCC;
  background-image: url(http://openlearn.open.ac.uk/mod/repository/images/searchbg.jpg);
  background-position: top left;
  padding: 3px 1em;
  text-align: left;
}

th.reposearchtablebottom
{
  font-size: 0.9em;
  font-weight: bold;
  color: #666;
  background-color:#CCCCCC;
  background-image: url(http://openlearn.open.ac.uk/mod/repository/images/crumb.jpg);  
  background-repeat: repeat-x;
  background-position: top left;
  padding: 3px 1em;
  text-align: left;
  border: 0px;  
}

#hidedescription
{
  font-size: 0.8em;
  border: 1px solid #CCCCCC;
  float:right;
  background-image: url(http://openlearn.open.ac.uk/mod/repository/images/searchbg.jpg);
  background-repeat: repeat-x;
  padding: 0px 1em;
}

#showdescription
{
  font-size: 0.8em;
  border: 1px solid #CCCCCC;
  float:right;
  background-image: url(http://openlearn.open.ac.uk/mod/repository/images/searchbg.jpg);
  background-repeat: repeat-x;
  padding: 0px 1em;
}

div#noresultsmessage
{
  width: 100%; 
  text-align: center;
  font-size: 0.9em;
  font-weight: bold;
  color: #666;  
}

div#nonationsmessage
{
  width: 100%; 
  text-align: center;
  font-size: 0.9em;
  font-weight: bold;
  color: #666;  
}

.specialDefaultButton
{
  font-size: 0.8em;
}


/***** /mod/repository/styles.php end *****/

/***** /mod/resourcepage/styles.php start *****/

/* Copyright 2006 The Open University / s.marshall@open.ac.uk / GNU Public License */
.rp_item {
    margin-bottom:0.6em;
    clear:left;
}
.rp_mainbit {
    margin-left:80px;
}
.rp_editoff .rp_mainbit {
    margin-left:34px;
}
.rp_header {
    font-size:1em;
    font-weight:normal;
    text-indent:-24px;
    margin-top:0;
    margin-bottom:3px;
}
.rp_header a:hover {
    text-decoration:none;
}
.rp_header a:hover .rp_title {
    text-decoration:underline;
}

.rp_icon {
    border:0;
}
.rp_noflags {
    margin-right:8px;
}
.rp_files .rp_icon {
    margin-right:0;
}
.rp_noicon {
    padding-right:24px;
}
.rp_nomain {
    padding-left:16px;
}
.rp_extra {
    margin-top:2px;
    margin-bottom:2px;
    font-size:0.75em;
    color:#c10031;
}
.rp_placetitle {
	font-weight:normal;
}
.rp_title {
    font-weight:bold;
}
.rp_filedetails {
    font-size:0.75em;
}
ul.rp_files {
    margin:0.5em 0 0 0;    
    padding:0;
}
ul.rp_files li {
    list-style-type:none;
    margin:0;
    padding:0;
}
.rp_container {
    clear:left;
    background:#f2f2f2;
    margin-bottom:8px;
    padding:8px 0;
}
.rp_container .rp_item {
    clear:none;
}
.rp_container .rp_container {
    clear:none;
}

#rp_addbuttons,
#rp_buttons {
    margin:24px 0 24px 80px;
    border-top:1px solid #4e247b;
    padding:8px 0;
    border-bottom:1px solid #4e247b;
    clear:both;
}
#rp_addbuttons_inner,
#rp_buttons_inner {
    margin-left:8em;
}
#rp_addbuttons form,
#rp_addbuttons form div,
#rp_buttons form,
#rp_buttons div,
#rp_addplaceholderform div {
	margin:0;
	display:inline;
}
#rp_addbuttons button,
#rp_addbuttons select,
#rp_buttons button,
#rp_buttons select,
.rp_submit  {
    font-size:0.75em;
}
#rp_addbuttons span,
#rp_addbuttons span {
    float:left;
    width:8em;
}
#rp_addbuttons li:hover,.rp_expandcollapse:hover,
#rp_addbuttons li:hover,.rp_expandcollapse:hover {
	background:black;
	border:1px solid black;
	color:white;	
}

form.rp_printondemand {
    display:inline;
    margin-left:0.3em;
}
.rp_printondemand input {
    font-size:0.75em;
}

.rp_hidden .rp_mainbit,.rp_hidden .rp_mainbit a {
    color:#888;
}

.rp_draghandle {
    float:left;
    width:16px;  
    padding-top:19px;
    margin-right:8px;
}
.rp_draghandle.rp_twoicons {
    padding-top:11px;
}

.rp_stdicons {
    float:left;
    width:11px;
}
.rp_stdicons form {
	display:inline;
	margin:0;
}
.rp_stdicons img,.rp_img {
    margin-bottom:3px;
}

.rp_expandcollapse {
    margin-left:1em;
}
#rp_expand,#rp_collapse {
    font-size:0.75em;
}
#rp_deleted,#rp_collapse {
	display:none;
}
.rp_deletedfiles {
    text-align:right;
    font-size:0.75em;
}

.rp_edititem {
    background:#f2f2f2;
    width:600px;  
}
.rp_edititem h3 {
    background:white;    
    font-weight:normal;
    margin:0 0 6px;
    padding:2px 0 3px;
    border-bottom:2px solid #4e247b;
}
.rp_container .rp_edititem h3 {
    background:#f2f2f2;
}    
.rp_edititem h3 .rp_editlabel {
    background:#4e247b;
    font-weight:bold;
    color:white;
    padding:2px 6px 3px;
}
.rp_label {
    clear:left;
    float:left;
    width:156px;
    padding-left:4px;
    font-weight:bold;
}
.rp_field {
    margin-left:160px;
    padding-right:4px;
    margin-bottom:4px;
}
.rp_field_text {
    padding-right:8px;
}
.rp_fillwidth, .rp_field_html textarea {
	width:100%;
}
.rp_clear {
    clear:left;
}
.rp_savecancel {
    margin-top:4px;  
    background:#f2f2f2;
    padding:4px;
    border-bottom:2px solid #4e247b;
    text-align:right;
}
.rp_dragtarget {
	padding-bottom:1px;
}

#rp_pagemove {
    background:#eee;
	width:100px;
	padding:4px;
	font-size:0.6em;
	position:absolute;
    display:none;
}

#rp_pagemove h3 {
	font-size:100%;
	margin:0;
}
#rp_pagemove div {
	background:white;
	padding:4px;
	margin-top:4px;
    position:relative;
}

.rp_canned form,
.rp_cannedbuttons form,
.rp_cannedbuttons form div {
    display:inline;
}
.rp_canned input {
    vertical-align:bottom;
}
.rp_cannedbuttons {
    margin:1em 0 1em 80px;
}
.rp_cannedbuttons input {
    font-size:0.8em;  
}
.rp_cannedtop {
    margin:0 32px 1em; 
}
.rp_cannedbottom {
    margin:1em 32px; 
}

.rp_basevalue {
    margin-left:160px;
    font-size:0.8em;
    margin-top:-4px;
    margin-bottom:4px;
    color:#c10031;
}
.rp_basevalue span {
    color:black;
}

h1.rp_textitem {
    font-size:1.2em;  
    margin:1.5em 0 0;
    padding-bottom:2px;
    border-bottom:1px solid #eaead5;
}

h2.rp_textitem {
    font-size:1.2em;  
    margin:1.5em 0 0;
}

.rp_editon h1.rp_textitem,.rp_editon h2.rp_textitem,.rp_editon h3.rp_textitem {
    margin-top:0;
}

h3.rp_textitem {
    margin:1.5em 0 0;
}

.rp_canned {
    border:1px solid white;  /* used to resolve bug 3727 IE dependent*/
}

/* Nested section styling */
.rp_editoff .rp_section {
    margin:1em 0;
}
.rp_editoff h3.rp_sectionhead {
    padding:4px 34px 4px 34px;
    margin:0 0 1em 0;
    font-size:1em;
}
.rp_editoff .rp_section .rp_section {
    margin:0.5em 1em 1em 34px;
}
.rp_editon h3.rp_sectionhead {
    font-size:1em;
    margin:0;
    padding-bottom:2px;
    border-bottom:1px solid #ccc;
}

.rp_container .rp_edititem {
    position:relative;
    left:-80px;
} 


/* IE peekaboo workaround. IE5-mac commenthack \*/
* html .rp_container { height: 1px; }
* html .rp_description {height: 1px;}
/* End commenthack */

#mod-resourcepage-order #content {
    margin-top:2em;
    width:680px;
    margin-left:auto;
    margin-right:auto;
}
#mod-resourcepage-order h3 {
    font-size:1.0em;
    margin-bottom:0.5em;
}


.rp_sharedfrom {
    margin:2em 0;
}

#mod-resourcepage-view #left-column {
    min-height:1px;
    float:left;
}

#mod-resourcepage-view #left-column,
#mod-resourcepage-view #right-column {
    width:11.5em;
}

#mod-resourcepage-view #content #middle-column {
    float:left;
    margin-left:0;
    padding-left:10px;
    width:513px;
}

#mod-resourcepage-view #footer {
    clear:both;
}

#mod-resourcepage-view .rp_first h3.rp_textitem,
#mod-resourcepage-view .rp_section.rp_first {
    margin-top:0;
}

#mod-resourcepage-view .rp_selectsection {
    margin:0;
}
.ie#mod-resourcepage-view .rp_selectsection {
    position:relative;
    left:-4px;
    top:-3px;
}

#rp_podcast {
	padding: 1em 0 1em 0;
	text-align: center;
}
/***** /mod/resourcepage/styles.php end *****/

/***** /mod/scorm/styles.php start *****/

.structlist  {

  list-style-type: none;

  white-space: nowrap;

  font-size: small;

}

.orgtitle {

  font-weight: bold;

  font-size: small;

}

.mod-scorm .top {

  vertical-align: top;

}

.mod-scorm .scorm-left {

  text-align: left;

}

.mod-scorm .scorm-center {

  text-align: center;

}

.mod-scorm .scorm-right {

  text-align: right;

}

.mod-scorm .scoframe {

   position: relative;

   width: 100%;

   height: 100%;

}



#mod-scorm-player #scormpage {

  position: relative;

  width: 100%;

}

#mod-scorm-player #tochead {

  position: relative;

  text-align: center;

  top: 3px;

  height: 30px;  

}

#mod-scorm-player .toc {

  width: 80%; 

  margin-left: 20%; 

}

#mod-scorm-player .no-toc {

  width: 100%;

}

#mod-scorm-player #scormobject {

  height: 400px; 

}

#mod-scorm-player #scormtop {

  position: relative;

  width: 100%;

  height: 30px;

}

#mod-scorm-player #scormbrowse {

  position: absolute;

  left: 5px;

  top: 0px;

}

#mod-scorm-player #scormnav {

  position: absolute;

  right: 5px;

  top: 0px;

  text-align: center;

  top: 3px;

  width: 100%;

}



#mod-scorm-view .structurehead {

  text-align: center;

}



#mod-scorm-view .structurelist  {

  list-style-type: none;

  white-space: nowrap;

}



#mod-scorm-player #scormbox {

  width: 74%;

  position: absolute;

  right: 0px;

  top: 0px;

}



#mod-scorm-player #tocbox {

  position: relative;

  left: 0px;

  width: 24%;

  font-size: 0.8em;

}



#mod-scorm-player #tochead {

  position: relative;

  text-align: center;

  top: 3px;

  height: 30px;  

}



#toctree {

  position:relative;

  width:100%;

  overflow-x: auto;

  overflow-y: auto;

}

.structurelist  {

  list-style-type: none;

}

#mod-scorm-player .structurelist {

  position: relative;

  list-style-type: none;

  width: 96%;

  margin-left:0;
  
  padding-left: 0;
  
  margin-right:0;
  
  padding-right: 0;
  
  padding-top: 0;
  
  padding-bottom: 0;
  
  margin-top:0;
  
  margin-bottom:0;
  
}



#mod-scorm-player .structurelist ul{

  padding-left: 0.5em;

  margin-left: 0.5em;

}

#mod-scorm-view .structurelist  {

  list-style-type: none;

  white-space: nowrap;

}

a#mod-scorm-log-toggle {
    font-size: 0.7em;
    font-weight: bold;
}/***** /mod/scorm/styles.php end *****/

/***** /mod/vielluminate/styles.php start *****/

/* $Id: styles.php,v 1.1 2010/09/22 14:27:22 jas2328 Exp $ */

.elluminateboundarytime {
    text-align: center;
    font-size: 0.8em;
}


.elluminaterecordingmode {
    text-align: center;
    font-size: 0.7em;
}


.elluminateeditmoderators {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}


.elluminateeditparticipants {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}


.elluminatepreload {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}


.elluminatejoinmeeting {
    text-align: center;
    font-size: 1.7em;
    font-weight: bold;
}


.elluminateverifysetup {
    text-align: center;
    font-size: 1em;
    font-weight: bold;
}

.elluminaterecording {
    text-align: center;
    font-size: 1em;
}

.elluminaterecording .description {
    font-style: italic;
}

.elluminateattendance {
    text-align: center;
    font-size: 1em;
}
.elluminaterecordingdescriptionedit {
    text-align: center;
}/***** /mod/vielluminate/styles.php end *****/

/***** /mod/workshop/styles.php start *****/

.workshop_feedbackbox {
    margin-top: 5px;
    border-width: 1px;
    border-style: solid;
    border-color: #999999;
}

.workshop_feedbackbox .picture {
    vertical-align: top;
}

.workshop_feedbackbox .author {
    vertical-align: top;
    display: block;
}

.workshop_feedbackbox .time {
    vertical-align: top;
    display: block;
}

.workshop_feedbackbox .content {
    vertical-align: top;
}

.workshop_feedbackbox .comment {
    display: block;
}

.workshop_feedbackbox .teachercomment {
    display: block;
    font-weight: bold;
}
/***** /mod/workshop/styles.php end *****/

/***** /blocks/assessment/styles.php start *****/


.block_assessment.sideblock .content {
  padding:0;
}

.block_assessment ul,.block_assessment li {
  padding:0;
  margin:0;
  display:block;
}

.block_assessment.sideblock .content div.assessment_lastrun,
.block_assessment.sideblock .content div.assessment_errormsg,
.block_assessment.sideblock .content li  {
    padding:2px 4px;
}
.block_assessment li {
    font-weight:bold;
}

.block_assessment .assessment_past {
    color:grey;
    font-weight:normal;
}

.block_assessment .assessment_next {
    background:#666;
    color:white;
}

.block_assessment .assessment_date {
    float:right;
}

.block_assessment .assessment_lastrun {
    font-size:0.94em;
}

.block_assessment.sideblock .content div.separator  {
    border-top:1px solid rgb(221,221,221);
    margin:2px 4px;
}

.block_assessment.sideblock .content div.assessment_nodateevents  {
    margin:2px 4px 0px 4px;
    font-size:0.94em;
}

.block_assessment.sideblock .content div.assessment_info  {
    margin:2px 4px 0px 4px;
    font-size:0.94em;
}

.assessmentstrategybox  {
    margin-left:10%;
    margin-right:10%;
    max-width:40em;
}
/***** /blocks/assessment/styles.php end *****/

/***** /blocks/blog_tags/styles.php start *****/

.block_blog_tags .s20 {
  font-size: 1.5em;
  font-weight: bold;
}

.block_blog_tags .s19 {
  font-size: 1.5em;
}

.block_blog_tags .s18 {
  font-size: 1.4em;
  font-weight: bold;
}

.block_blog_tags .s17 {
  font-size: 1.4em;
}

.block_blog_tags .s16 {
  font-size: 1.3em;
  font-weight: bold;
}

.block_blog_tags .s15 {
  font-size: 1.3em;
}

.block_blog_tags .s14 {
  font-size: 1.2em;
  font-weight: bold;
}

.block_blog_tags .s13 {
  font-size: 1.2em;
}

.block_blog_tags .s12,
.block_blog_tags .s11 {
  font-size: 1.1em;
  font-weight: bold;
}

.block_blog_tags .s10,
.block_blog_tags .s9 {
  font-size: 1.1em;
}

.block_blog_tags .s8,
.block_blog_tags .s7 {
  font-size: 1em;
  font-weight: bold;
}

.block_blog_tags .s6,
.block_blog_tags .s5 {
  font-size: 1em;
}

.block_blog_tags .s4,
.block_blog_tags .s3 {
  font-size: 0.9em;
  font-weight: bold;
}

.block_blog_tags .s2,
.block_blog_tags .s1 {
  font-size: 0.9em;
}

/***** /blocks/blog_tags/styles.php end *****/

/***** /blocks/calendar_month/styles.php start *****/

.block_calendar_month .cal_popup_caption,
.block_calendar_month .cal_popup_fg div {
    font-size: 0.85em !important;
}

.block_calendar_month .filters {
    font-size:0.75em;
    padding: 5px;
}

.block_calendar_month .filters table {
    border-collapse:separate;
    border-spacing: 2px;
    padding: 2px;
}

.block_calendar_month .event_global,
.block_calendar_month .event_course,
.block_calendar_month .event_group,
.block_calendar_month .event_user {
    border-width: 2px;
    border-style: solid;
}
/***** /blocks/calendar_month/styles.php end *****/

/***** /blocks/calendar_upcoming/styles.php start *****/

.block_calendar_upcoming .event .date {
    text-align:right;
}
/***** /blocks/calendar_upcoming/styles.php end *****/

/***** /blocks/choice_menu/styles.php start *****/

.block_choice_menu.sideblock table.results td,
.block_choice_menu.sideblock table.boxaligncenter td{
    border: 1px solid white;
}
/***** /blocks/choice_menu/styles.php end *****/

/***** /blocks/course_summary/styles.php start *****/

.block_course_summary .content {
    padding:10px;
}

.block_course_summary .editbutton {
    text-align:right;
}
/***** /blocks/course_summary/styles.php end *****/

/***** /blocks/glossary_reuse/styles.php start *****/

.glossary-reuse-result {
    margin: 1em 0;
}
.glossary-reuse-result h3 {
    margin: 0.25em 0;
}

.glossary-reuse-form div div {
    clear: left;
    margin-bottom: 0.5em;
}

.glossary-reuse-form label {
    float:left;
    width: 13em;
    position: relative;
    top: 2px;

}

#mod-glossary-view .glossary-reuse-link {
    font-size: 0.85em;
    text-align: center;
    margin-top: 0.5em;
}

.glossary-reuse-result form {
    margin-top: 0.5em;
}/***** /blocks/glossary_reuse/styles.php end *****/

/***** /blocks/hawthorn/styles.php start *****/

.block_hawthorn h3
{
  font-size:100%;
	margin:0 0 0.5em;
}
.block_hawthorn h4
{
  font-size:100%;
	margin:0 0 0.5em;
	font-weight:normal;
	font-style:italic;
}
.block_hawthorn .hawthorn_secondheading
{
	margin-top:0.7em;
	border-top:1px solid #ddd;
	padding-top:0.5em;
}
#hawthorngroupselector
{
  display:block;
	margin: 0.5em 0;
}
#hawthorngroupselector_jump
{
  max-width: 100%;
}
.ie7 #hawthorngroupselector_jump
{
  width: 100%;
}
.hawthorn_recent_messages ul,
.hawthorn_recent_names ul
{
  margin:0 0 0.5em;
  padding:0;
  display:block;
}
.hawthorn_recent_messages li
{
  margin:0 0 0 0.5em;
  padding:0;
  text-indent: -0.5em;
  list-style-type:none;
  display:block;
}
.hawthorn_recent_time
{
  font-size:0.85em;
}
.hawthorn_recent_name
{
  font-weight:bold;
}
.hawthorn_recent_names li
{
  list-style-type:none;
  display:inline;
  padding: 0;
}
.hawthorn_recent_names .hawthorn_bullet
{
	padding-left: 12px;
	height: 12px;
  background: url(http://openlearn.open.ac.uk/blocks/hawthorn/bullet.png) no-repeat left;
}
.hawthorn_linktochat
{
  margin-bottom: 0.5em;
}
.hawthorn_logo
{
  margin-top: 0.5em;
  text-align: center;
}

.hawthorn_wrap_space
{
	position:absolute;
}
.ie8 .hawthorn_wrap_space
{
  position: static;
  font-size: 1px;
  margin-right: -1px;
}/***** /blocks/hawthorn/styles.php end *****/

/***** /blocks/login/styles.php start *****/

.block_login .logintable {
  text-align:center;
}

.block_login .loginform {
  display:inline;
}

.block_login .loginform .fld input {
  width:5em;
}

.block_login .loginform label {
  padding-right: 4px;
}

.block_login .loginform div {
  margin:0.3em 0.8em;
  text-align:right;
  display:block;
}

.block_login .loginform div.c1.btn {
  text-align:center;
}
/***** /blocks/login/styles.php end *****/

/***** /blocks/navigation/styles.php start *****/

/* IE6 - not required for firefox */
.block_navigation .studycalsection {
    background-color:transparent;
}

/* IE6 - not required for firefox */
.block_navigation .studycalcontent {
    font-weight:normal;
}

.block_navigation .studycalweekdivider  {
    display:inline;
    margin:4px;
}

.block_navigation .current .studycalentries  {
    border-top:1px solid rgb(221,221,221);
}

/* For nav block on resource page */
.block_navigation ul,
.block_navigation li  {
    list-style-type:none;
    padding-left:0;
    margin-left:0;
}
/***** /blocks/navigation/styles.php end *****/

/***** /blocks/news_items/styles.php start *****/

.block_news_items .newlink {
  text-align: center;
}
/***** /blocks/news_items/styles.php end *****/

/***** /blocks/newsfeed/styles.php start *****/

#blocks-newsfeed-ui-feedlist .feedlist-main {
    width: 40em;
    margin: 2em auto;
}
#blocks-newsfeed-ui-feedlist .xhierarchy {
    width:auto;
}

.xhierarchy {
     margin: 1em 0 0.5em;
     border:1px solid black;
     width:30em;
    
     height:20em;
     overflow:scroll;
     overflow-y:scroll;
     overflow-x:hidden;
     -moz-user-select:none;
     -khtml-user-select:none;
     user-select:none;     
     cursor:default;
}
.xhierarchy div {
    padding:4px;
}
.xhierarchy ul div {
    padding-left:16px;
}
.xhierarchy ul ul div {
    padding-left:28px;
}
.xhierarchy ul ul ul div {
    padding-left:40px;
}
.xhierarchy ul ul ul ul div {
    padding-left:52px;
}
.xhierarchy ul {
    padding:0;
    margin:0;
}
.xhierarchy li {
    display:block;
    margin:0;
    padding:0;
}
.xhierarchy .transparent {
    opacity:0.5;
    filter:alpha(opacity=50);
}
.ie6 .xhierarchy .transparent {
    height:1px;
    background-color:white;
}

#blocks-newsfeed-ui-feedlist form {
    margin:0;
    padding:0;
    display:inline;
}
#blocks-newsfeed-ui-editincludes #namepart h3 {
    display:inline;
}
#blocks-newsfeed-ui-editincludes #namepart a {
    margin-left:1em;
}

#blocks-newsfeed-ui-viewfeed  #content,#blocks-newsfeed-ui-entryhistory #content {
  width:50em;
  margin:2em auto;
  line-height:140%;
}

#blocks-newsfeed-ui-viewfeed .nf_feed,#blocks-newsfeed-ui-entryhistory .nf_info {
  background:#bbb;
  color:white;
  font-size:0.85em;
  padding:0 2px;
  margin-bottom:8px;
}
#blocks-newsfeed-ui-viewfeed .nf_entry {
    clear:both;
    margin-bottom:1em;
}
#blocks-newsfeed-ui-viewfeed .nf_date {
    font-size:0.85em;
    text-align:right;
}
#blocks-newsfeed-ui-viewfeed .nf_subject {
    font-weight:bold;
}
#blocks-newsfeed-ui-viewfeed .nf_topbuttons form {
    display:inline;
}
#blocks-newsfeed-ui-viewfeed .nf_topbuttons {
    margin-left:20px;
    margin-bottom:1.5em;
}
#blocks-newsfeed-ui-viewfeed .nf_toptext {
    margin-left:20px;
    margin-bottom:2em;
}
#blocks-newsfeed-ui-viewfeed .nf_entry .nf_buttons {
    float:left;
    width:20px;
    padding-top:2em;
}
.ie6#blocks-newsfeed-ui-viewfeed .nf_entry .nf_buttons { 
    margin-top:2px;
}
#blocks-newsfeed-ui-viewfeed .nf_entry .nf_buttons form {
    margin:0;
}
.ie6#blocks-newsfeed-ui-viewfeed .nf_entry .nf_buttons form {
    margin:-5px 0 0;
}
#blocks-newsfeed-ui-viewfeed .nf_entrychange {
    float:left;
    font-size:0.85em;
    color:#800;
    width:400px;
}
#blocks-newsfeed-ui-viewfeed .nf_authid {
    font-size:0.85em;
    color:#800;
}
#blocks-newsfeed-ui-viewfeed .nf_entrychange em {
    font-style:normal;
    font-weight:bold;
}
#blocks-newsfeed-ui-viewfeed .nf_admin .nf_buttons {
    float:right;
    width:auto;
    padding-top:0;
}
#blocks-newsfeed-ui-viewfeed .nf_admin .nf_buttons input {
    font-size:0.85em;
}
#blocks-newsfeed-ui-viewfeed .nf_admin .nf_buttons form {
    display:inline;
}
#blocks-newsfeed-ui-viewfeed .nf_entry .nf_buttons form {
    margin-bottom:4px;
}
#blocks-newsfeed-ui-viewfeed .nf_entry .nf_content {
    margin-left:20px;
    padding-bottom:1px;
}
#blocks-newsfeed-ui-viewfeed .nf_visiblepart {
    border:1px solid #bbb;
    padding:4px;
}
#blocks-newsfeed-ui-viewfeed .nf_admin {
    margin-top:4px;
}
#blocks-newsfeed-ui-viewfeed .nf_future .nf_visiblepart,
#blocks-newsfeed-ui-viewfeed .nf_deleted .nf_visiblepart,
#blocks-newsfeed-ui-viewfeed .nf_future .newsfeed_attachments span,
#blocks-newsfeed-ui-viewfeed .nf_faintexample {
    color:#888;
}
#blocks-newsfeed-ui-viewfeed .nf_unapproved .nf_entryblock, 
#blocks-newsfeed-ui-viewfeed .nf_unapprovedexample {
    background:#ffffdd;
}
#blocks-newsfeed-ui-viewfeed .nf_deleted .nf_feed {    
    margin-bottom:4px;
}
#blocks-newsfeed-ui-viewfeed .nf_deleted .nf_admin {    
    margin-top:0;
}
#blocks-newsfeed-ui-viewfeed .nf_deleted .nf_subject {    
    font-weight:normal;
}
#blocks-newsfeed-ui-viewfeed .nf_deleted .nf_subject span {    
    font-weight:bold;
    color:black;
}
#blocks-newsfeed-ui-viewfeed .nf_deleted .nf_visiblepart {
    border:none;
    padding:0;    
}

#blocks-newsfeed-ui-editentry ul.nf_appearsin {
    margin:0;
    margin-top:0.5em;
    padding:0;
}
#blocks-newsfeed-ui-editentry ul.nf_appearsin li {
    display:inline;
    padding:0; 
    margin:0;
    padding-right:12px;
    padding-left:9px;
    background:url(../../blocks/newsfeed/ui/bullet.gif) no-repeat left center;
}


.newsfeed_entry {
    border:1px solid #ccc;
    padding:4px;    
    margin-bottom:1em;
    line-height:140%;
}
.newsfeed_entry .newsfeed_date {
    font-size:0.85em;
    color:#555;
    text-align:right;   
}
.newsfeed_entry h3 {
    margin:0;
    font-size:1em;
}

.block_newsfeed .newsfeed_entry {
    border:none;
    padding:0;    
}
#course-view .block_newsfeed .newsfeed_entry h3 {
    margin:0 0 2px 0;
}
.block_newsfeed .newsfeed_entry .newsfeed_date {
    font-size:0.95em;
}

.newsfeed_attachments {
    margin-top:0.5em;
    margin-bottom:0;
    padding:0;
    margin-left:0;
}
.newsfeed_attachments li {
    margin-bottom:2px;
    display:block;
    padding:0;
    margin-left:0;
}
.newsfeed_attachments a span {
    color:black; 
}
.newsfeed_attachments a:hover {
    text-decoration:none;
}
.newsfeed_attachments a:hover .newsfeed_afilename {
    text-decoration:underline;
}
.newsfeed_attachments .newsfeed_adetails {
    font-size:0.75em;
}

#blocks-newsfeed-ui-editincludes h4 {
    margin:0.5em 0 0.5em;
}
#blocks-newsfeed-ui-editincludes #includes {
    float:left;
    padding-left:0.5em;
    width:42em;
}
#blocks-newsfeed-ui-editincludes #includes input {
    margin-top:0.5em;
}
#blocks-newsfeed-ui-editincludes #includeslist {
    width:100%;
}
#blocks-newsfeed-ui-editincludes #transfer {
    float:left;
    width:8em;
    text-align:center;
    padding:6em 0.5em;
}
#blocks-newsfeed-ui-editincludes #transfer input {
    width:100%;
    margin-top:0.5em;
}
#blocks-newsfeed-ui-editincludes #available {
    float:left;
    width:25em;
}
#blocks-newsfeed-ui-editincludes #available .xhierarchy{
    width:24.3em;
    margin-top:0.5em;
}
#blocks-newsfeed-ui-editincludes #including {
    clear:both;
    padding:0.5em 0.5em 0;
}

.nf_externalerror span {
    font-weight:bold;
    color: #800;
}

#blocks-newsfeed-ui-editfeed .newsfeed_roles {
    margin-left:10em;
}
#blocks-newsfeed-ui-editfeed .newsfeed_roles h3 {
    font-size:1em;
}
#blocks-newsfeed-ui-editfeed .newsfeed_roles h4 {
    font-size:1em;
    margin-top:0.5em;
    margin-bottom:0;
}


#course-view .newsfeed_form {
    width:50em;
    margin-left:auto;
    margin-right:auto;
}
#course-view .newsfeed_formline {
    margin:1em 0;
}
#course-view .newsfeed_label {
    float:left;
    width:12em;
}
#course-view .newsfeed_formfield {
    margin-left:12em;
}

.block_newsfeed .newsfeed_entry {
    margin-bottom:0.5em;
}


.boxconfirm {
    text-align:center;
}
/***** /blocks/newsfeed/styles.php end *****/

/***** /blocks/oufeedbackform/styles.php start *****/

.oufeedbackform_box {
    background: #E6E6E6;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -khtml-border-radius: 5px;
    padding: 6px 10px;
}

.oufeedbackform_box_link {
	margin: 0px -10px -1px -10px;
}

.oufeedbackform_box.oufeedbackform_box_content {
	width: 80%;
	margin-left: auto;
    margin-right: auto;
    background: #DBEDFF;
}

.sideblock.block_oufeedbackform .content {
    padding: 0;
}

.oufeedbackform_bottomleft_link {
	padding: 8px;
	font-size: 0.85em;
}

.oufeedbackform_bottomleft_content {
	padding: 8px 15px;
}
.oufeedbackform_bottomleft a:link,
.oufeedbackform_bottomleft a:visited,
.oufeedbackform_bottomleft a:active,
.oufeedbackform_bottomleft a:hover {
    color: #333333;
}
.oufeedbackform_bottomleft a:link, .oufeedbackform_bottomleft a:visited {
	text-decoration:none;

}

.oufeedbackform_bottomleft a:link.oufeedbackform_choice, .oufeedbackform_bottomleft a:visited.oufeedbackform_choice {
	color: #000000;
}

.oufeedbackform_bottomleft a:hover {
	text-decoration:underline;
}

.oufeedbackform_response a:link, .oufeedbackform_response a:visited {
	text-decoration:none;
}

.oufeedbackform_response a:hover {
	text-decoration:underline;
}


.oufeedbackform_bottomleft h1 {
	font-size: 1em;
}

.oufeedbackform_bottomleft li {
	margin-bottom: 0.5em;
}

.oufeedbackform_link {
    padding: 2px 0;
    font-size: 0.82em;
}

.oufeedbackform_link a:link,
.oufeedbackform_link a:visited {
    text-decoration:none;
}

.oufeedbackform_link a:hover,
.oufeedbackform_link a:active {
    text-decoration:underline;
}

#blocks-oufeedbackform-screens input#id_url,
#blocks-oufeedbackform-screens textarea#id_comments{
	width: 80%;
}

#blocks-oufeedbackform-screens textarea#id_comments{
	display: block;
	height: 150px;
}
/***** /blocks/oufeedbackform/styles.php end *****/

/***** /blocks/ousearch/styles.php start *****/

.ousearch_results {
    clear: both;
}
.ousearch_results h2 {
    font-size:1.2em;
    font-weight:normal;
}
.ousearch_results li .ous_number {
    float:left;
    width:2em;
}
.ousearch_results li h3 {
    font-size:1em;
    margin:0;
}
.ousearch_results li {
    margin:0 0 1em;
    list-style-type:none;
    padding:0;
}
.ousearch_results li .ous_summary {
    margin-left:2em;
}
.ousearch_results ul {
    margin:1em 0;
    padding:1em 0 0.2em;
    border-bottom:1px dotted #888;
    border-top:1px dotted #888;
}
.ous_searchtime {
    font-size:0.85em;
    color:#888;
}/***** /blocks/ousearch/styles.php end *****/

/***** /blocks/quiz_results/styles.php start *****/

.block_quiz_results {
    text-align: center;
}

.block_quiz_results table.grades .number, 
.block_quiz_results table.grades .grade {
    text-align: right;
    width: 10%;
}

.block_quiz_results table.grades {
    text-align: left;
    width: 100%;
}

.block_quiz_results table.grades caption {
    margin: 1em 0px 0px 0px;
    border-bottom: 1px solid;
    font-weight: bold;
}

.block_quiz_results h1 {
    margin: 4px;
    font-weight: bold;
    font-size: 1.1em;
}
/***** /blocks/quiz_results/styles.php end *****/

/***** /blocks/related_units/styles.php start *****/

.outer {
    padding : 20px
}

.centered {
    text-align : center;
}

.holder {
    padding-top : 12px;
}

.inlineheader {
    display : inline;
}

.deletecheck {
    height        : 10px;
    margin-bottom : 4px;
}

.rightfloated {
    float : right;
}

.viewall_links,
.notselected_links {
    margin      : 0 auto;
    width       : 30%;
    text-align  : left;
}

.viewall_links {
    padding-top : 20px;
}
/***** /blocks/related_units/styles.php end *****/

/***** /blocks/rss_client/styles.php start *****/

.block_rss_client .link {
  border-top:1px solid;
  border-top-color:#DDDDDD;
  padding-bottom:5px;
  font-size:0.82em;
}

.block_rss_client .description {
  color:#555555;
  font-size:0.78em;
  padding-left:10px;
  padding-bottom:8px;
}

.block_rss_client .title {
  font-size:1.0em;
}

.block_rss_client .image {
}

.blockconfigtable #rssfeeds {
    margin-left: auto;
    margin-right: auto;
    background-color: blue;
}

.blockconfigtable #rssfeeds td.actions {
    text-align: center;
    vertical-align: middle;
    padding: 10px;
}

.blockconfigtable #rssfeeds td.feed {
    vertical-align: middle;
    padding: 5px;
}

.blockconfigtable #rssfeeds .title {
    font-weight: bold;
    margin-bottom: 2px;
}

.blockconfigtable #rssfeeds .url, .blockconfigtable #rssfeeds .description {
    font-size: 0.8em;
}

.blockconfigtable #rssfeeds tr.r0 {
  background-color: #ffffff;
}

.blockconfigtable #rssfeeds tr.r1 {
  background-color: #f0f0f0;
}
/***** /blocks/rss_client/styles.php end *****/

/***** /blocks/search_forums/styles.php start *****/

.block_search_forums .searchform {
    text-align: center;
}

.block_search_forums .searchform img {
    vertical-align: middle;
}

/***** /blocks/search_forums/styles.php end *****/

/***** /blocks/studenthome/styles.php start *****/

.block_studenthome{
    margin-top: -7px;
}

.block_studenthome_bannertop {
    width:110%;
    margin-left: -5%;
    background-position:0 0;
    background-repeat:no-repeat;
    display: block;
}

.block_studenthome_cyantop {
    background-color:#b8dbff;
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/cyan-topleft.gif);
}


.block_studenthome_purpletop {
    background-color:#73003c;
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/purple-topleft.gif);
}

.block_studenthome_space0 { 
    margin-top:1px; 
}

img.block_studenthome_corner { 
    padding:0; margin:0; float:right; 
}

h3.block_studenthome_banner {
    margin: 0px;
    padding: 5px 8px 5px 9px;
    color:#000;
    font-size:100%;
}

.block_studenthome_bold {
    font-weight:bold;
}

.block_studenthome_normal {
    font-weight:normal;
}


div a.block_studenthome_white,
div h3.block_studenthome_white {
    color:#fff;
}

div a.block_studenthome_black {
    color:#000;
}

div a.block_studenthome_seemore,
div a.block_studenthome_seeall {
    text-decoration: none;
}


a.block_studenthome_seemore,
a.block_studenthome_seeall {
    width:100%;
    display:block;
    background-position:top right;
    background-repeat:no-repeat;
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/more3-off.gif);
}

a.block_studenthome_seemore {
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/more3-off.gif);
}

a.block_studenthome_seeall {
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/seeall-off.gif);
}

a:hover.block_studenthome_seemore,
a:hover.block_studenthome_seeall { 
    text-decoration: underline;
}

a:hover.block_studenthome_seemore { 
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/more3-on.gif); 
}

a:hover.block_studenthome_seeall {
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/seeall-on.gif);
} 

div.block_studenthome_bannerbot {
    width:110%;
    margin-left: -5%;
    height:3px;
    background-position:0 0;
    background-repeat:no-repeat;
}

div.block_studenthome_purplebot {
    background-color:#73003c;
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/purple-bottomleft.gif);
}

div.block_studenthome_cyanbot {
    background-color:#b8dbff;
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/cyan-bottomleft.gif);
}


div#block_studenthome_sAssessmentHTML table {
    margin:0;
    padding:0;
    width:100%;
}

div#block_studenthome_sAssessmentHTML table th {
    font-weight:bold;
    text-align:left;
    padding:0 0 4px 0;
    margin:0;
    color:#666;
}

div#block_studenthome_sAssessmentHTML table th.score {
    text-align:center;
    width:4em;
    padding-right:2px;
}

div#block_studenthome_sAssessmentHTML table td {
    font-weight:normal;
    text-align:left;
    padding:1px 8px 1px 0;
    margin:0;
}

div#block_studenthome_sAssessmentHTML table td.score {
    text-align:right;
    width:4em;
    padding-right:2px;
}

div#block_studenthome_sAssessmentHTML table td.feedback {
    text-align:right;
    padding-right:0;
    font-size:90%;
}

div#block_studenthome_sAssessmentHTML table td.score p {
    margin:0;
    padding:1px 0;
    text-align:center;
    border-top:1px solid #40668c;
    border-right:1px solid #036;
    border-bottom:1px solid #40668c;
    border-left:1px solid #7f99b2;
    width:100%;
    line-height:100%;
    background-image:url(../img/score-bg.jpg);
    background-repeat:repeat-x;
    color:#000;
}

div#block_studenthome_sAssessmentHTML {
    margin-bottom: 10px;
}

div#block_studenthome_sAssessmentHTML div,
div#block_studenthome_sOtherDetailsHTML div {
    margin:0 0 6px 0;
    padding:0 0 6px 0;
    border-bottom:1px solid #e0e6ed;
}

div#block_studenthome_sAssessmentHTML div h3, h3.ch3,
div#block_studenthome_sOtherDetailsHTML div h3, h3.ch3 {
    margin:0 0 4px 0;
    padding:0;
    font-weight:bold;
    font-size:100%;
}

div#block_studenthome_sAssessmentHTML div p,
div#block_studenthome_sOtherDetailsHTML div p {
    margin:0 0 4px 0;
    padding:0;
    line-height:120%;
}

div#block_studenthome_sAssessmentHTML h3 a,
div#block_studenthome_sOtherDetailsHTML h3 a {
    color:#000;
    text-decoration:none;
}

div#block_studenthome_sAssessmentHTML ul,
div#block_studenthome_sOtherDetailsHTML ul {
    list-style:none;
    padding: 0px;
    margin: 0px;
}

div#block_studenthome_sAssessmentHTML ul li a,
div#block_studenthome_sOtherDetailsHTML ul li a {
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/arrow-off.gif);
    background-position:0 2px;
    background-repeat:no-repeat;
    text-decoration:none;
    display: block;
    padding-left:24px;
    padding-bottom:4px;
    
}

div#block_studenthome_sAssessmentHTML  ul a:hover,
div#block_studenthome_sOtherDetailsHTML ul a:hover { 
    text-decoration:underline;
    background-image:url(http://openlearn.open.ac.uk/blocks/studenthome/images/arrow-on.gif); 
}

/***** /blocks/studenthome/styles.php end *****/

/***** /blocks/tags/styles.php start *****/

/*
 * CSS for course tags
 * @author j.beedell@open.ac.uk July07
 *
 * Styles for block_tags.php
 */

.coursetag_form_wrapper {
    margin: auto;
    width: 13em;
}

.coursetag_form_positioner {
    position: relative;
    margin: 5px 0 0 0;
    height: 25px;
}

.coursetag_form_input1 {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.coursetag_form_input2 {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
}

.coursetag_form_input3 {
    position: absolute;
    top: 3px;
    left: 12.7em;
    display: none;
}

.coursetag_form_input1a {
    background-color: white;
    border: 1px solid #999;
    width: 12em;
    padding: 2px;
}

.coursetag_form_input2a {
    background-color: white;
    color: #669954;
    border: 1px solid #999;
    width: 12em;
    padding: 2px;
}

.coursetag_morelink {
    float: right;
    font-size: 0.8em;
    margin: -5px 5px 5px 0;
}

.coursetag_list {
    padding-top: 4px;
}

/* Styles for coursetag_edit.php */

.coursetag_edit_centered {
    position: relative;
    width: 600px;
    margin: 20px auto;
}

.coursetag_edit_row {
    margin: 5px 0 5px 0;
    height: 30px;
}

.coursetag_edit_left {
    position: relative;
    float: left;
    padding: 3px 5px;
}

.coursetag_edit_right {
    position: relative;
    float: left;
    padding: 3px 0px;
}

.coursetag_edit_input3 {
    position: relative;
    left: 12.5em;
    display: none;
}

/* Styles for coursetag_more.php */

.coursetag_more_title {
    margin: 30px 30px -25px 30px;
}

.coursetag_more_tags {
    margin: 30px;
}

.coursetag_more_large {
    font-size: 120%
}

.coursetag_more_small {
    font-size: 80%
}

.coursetag_more_link {
    font-size: 80%;
}

/* This needs to be removed with the merge of core moodle 2.0.
Originally the print_tag_cloud() created a ul with id=tag-cloud-list
but multiple occurances of this in the block cause invalid xhtml.
Core 2.0 has this correctly in standard styles_layout.css*/
ul.tag-cloud-list {
 list-style:none;
 padding:5px;
 margin:0px;
 list-style-type:none;
}
ul.tag-cloud-list li {
 margin:0px;
 display:inline;
}/***** /blocks/tags/styles.php end *****/

/***** /blocks/workflow/styles.php start *****/

.block_workflow .workflow_boilerplate,
.block_workflow .workflow_roles {
  display:block;
  font-size:0.85em;
}
.block_workflow .workflow_owner {
  margin:0.5em 0 1em;
}
.block_workflow .workflow_username {
  font-size:0.85em;
}
.block_workflow h3 {
  font-size:1em;
  margin:1em 0 0.5em;
}
.block_workflow dl {
  font-size:0.85em;
  margin:0;
}
.block_workflow .buttons input {
  font-size:0.85em;
  margin: 0;
}
.block_workflow .buttons form {
  margin: 0.5em 0;
}/***** /blocks/workflow/styles.php end *****/

/***** /blocks/yui_menu/styles.php start *****/

/*
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

/**
 * YUI menu styles
 *
 * This CSS file is used by all yui menu pages.
 * The prefix 'yui_menu' is used for all classes and ids
 *
 * @author Alan Trick
 * @copyright Trinity Western University
 * @license http://www.gnu.org/copyleft/gpl-3.0.html
 */
#yui_menu_config_list {
    border: 0;
    margin: auto;
    border-collapse: collapse;
    padding: .5em;
    margin-bottom: 1em;
}
#yui_menu_config_list td {
    padding: 1em .3em 0;
}
.yui_menu_js_tree {
    clear: both;
    padding: 0;
}
.yui_menu_tree > .icon {
    /* dots behind the outine menu */
    background: url(http://openlearn.open.ac.uk/blocks/yui_menu/skin/l.gif) center bottom no-repeat;
}
/* Note: this is a CSS 2 selector pattern, it's not supported in
IE 6 and earlier, but the browser will degrade nicely */
.ygtvtm + td, .ygtvtmh + td,
.ygtvlm + td, .ygtvlmh + td {
    /* dots behind the section menus */
    background: url(http://openlearn.open.ac.uk/blocks/yui_menu/skin/l.gif) 7px bottom no-repeat;
}
.yui_menu_tree .highlight {
    font-weight: bold;
}
.yui_menu_icon_section {
    padding-left: 20px;
    display: block;
    min-height: 16px;
    background: no-repeat;
}
/* based of YUI library version 2.6
 * 
 * Warning: unneccesarily messy and ugly code ahead. This could
 * have been done in about half the size, but it looks like someone
 * at Yahoo hasn't heard of space separated classes (or :hover)
 */
/* Cells */
.ygtvtn, .ygtvtm, .ygtvtmh, .ygtvtp, .ygtvtph,
.ygtvln, .ygtvlm, .ygtvlmh, .ygtvlp, .ygtvlph,
.ygtvdepthcell, .ygtvblankdepthcell {
    width:16px; /* width of standard moodle icons*/
    height:22px; /* about the hight of the line */
}
/* Nodes */
.ygtvtm, .ygtvtmh, .ygtvtp, .ygtvtph,
.ygtvlm, .ygtvlmh, .ygtvlp, .ygtvlph {
    cursor: pointer;
}
/* Misc */
.ygtvrow { vertical-align: top; }
.ygtvlabel { margin-left:2px; }
.ygtvspacer {
    outline-style: none;
    display: block;
    text-decoration: none !important;
}
/* Cell backgrounds */
.ygtvdepthcell, .ygtvtn, .ygtvtm, .ygtvtmh, .ygtvtp, .ygtvtph {
    background: url(http://openlearn.open.ac.uk/blocks/yui_menu/skin/t.gif) center 0 repeat-y;
}
.ygtvln, .ygtvlm, .ygtvlmh, .ygtvlp, .ygtvlph {
    background: url(http://openlearn.open.ac.uk/blocks/yui_menu/skin/l.gif) center top no-repeat;
}
.ygtvtn .ygtvspacer, .ygtvln .ygtvspacer {
    background: url(http://openlearn.open.ac.uk/blocks/yui_menu/skin/n.gif) right center no-repeat;
}
.ygtvtm .ygtvspacer, .ygtvlm .ygtvspacer {
    background: url(http://openlearn.open.ac.uk/blocks/yui_menu/skin/m.gif) right center no-repeat;
}
.ygtvtmh .ygtvspacer, .ygtvlmh .ygtvspacer {
    background: url(http://openlearn.open.ac.uk/blocks/yui_menu/skin/mh.gif) right center no-repeat;
}
.ygtvtp .ygtvspacer, .ygtvlp .ygtvspacer {
    background: url(http://openlearn.open.ac.uk/blocks/yui_menu/skin/p.gif) right center no-repeat;
}
.ygtvtph .ygtvspacer, .ygtvlph .ygtvspacer {
    background: url(http://openlearn.open.ac.uk/blocks/yui_menu/skin/ph.gif) right center no-repeat;
}
/***** /blocks/yui_menu/styles.php end *****/

/***** /course/format/sharedactv/styles.php start *****/

.sa_activity {
    margin:1em 0;
    border:1px solid #aaa;
    padding:0.5em;
    min-height:1px;
}
.ie6 .sa_activity {
    height:1px;
}
.sa_activity .sa_main {
    float:left;
    width:155px;
}
.sa_activity .sa_info {
    margin-left:160px;
}
.ie .sa_youractivity .sa_activity .sa_info input {
    width: 15em;
}
.ie .sa_othersactivity .sa_activity .sa_main input {
    width: 12em;
}

#course-format-sharedactv-index input {
    font-size:0.85em;
    }
#course-format-sharedactv-index h2.sa_first,
.sa_activity h3,
.sa_activity h4 {
    margin:0 0 0.5em;
    font-size:1em;
}
#course-format-sharedactv-index h2 {
    margin:2.5em 0 0.5em;
    font-size:1em;
}
.sa_wrapper .sa_youractivity {
    margin:1.0em 1% 0 0;
    padding:0;
    float:left;
    width:49%;
}
.sa_wrapper .sa_othersactivity {
    margin:1.0em 0 0 1%;
    padding:0em;
    float:left;
    width:49%;   
}

#course-format-sharedactv-index .sa_othersactivity h2 {
    margin:0 0 0.5em;
}
.sa_wrapper .sa_searchactivity {
    clear:both;
    padding-top:1px;
}
.sa_activity h4 {
    font-weight:normal;
    margin:3px 0;
}
.sa_activity .sa_info ul {
    margin-bottom: 5px;
}
.sa_activity form,
.sa_activity form div {
    display:inline;
}
.sa_activity ul {
    margin:0; 
    padding:0;
}
.sa_activity li {
    display:inline;
    list-style-type:none;
    background-image:url(http://openlearn.open.ac.uk/course/format/sharedactv/bullet.png);
    background-repeat:no-repeat;
    background-position:bottom left;
    margin-left:0.5em;
    padding-left:0.7em;
}
.ie6 .sa_activity li,
.ie7 .sa_activity li {
    background-image:none;
    margin-left:1em;
    padding:0;
}
.sa_activity li.first {
    background-image:none;
    margin-left:0;
    padding:0;
}
#course-format-sharedactv-index .sa_viewingother,
#course-format-sharedactv-leave .sa_viewingother,
#course-format-sharedactv-delete .sa_viewingother,
#course-format-sharedactv-invite .sa_viewingother {
    border-bottom:1px solid #aaa;
    display:block;
    /* The next bits are OU-theme-specific, ah well */
    padding:6px 8px 6px;
    margin:-14px -8px 1.5em;
    background:#ffc;
}
#course-format-sharedactv-index .sa_viewingother input {
    margin-left:0.5em;
}

.ie6#course-format-sharedactv-invite .sa_mainbit {
    width:940px; 
}

#course-format-sharedactv-create li {
    margin-bottom:0.5em;
}
#course-format-sharedactv-create .mform {
    width:auto;
}  

#course-format-sharedactv-invite .sa_mainbit,
#course-format-sharedactv-leave .sa_mainbit,
#course-format-sharedactv-create .sa_mainbit,
#course-format-sharedactv-delete .sa_mainbit {
    width:640px;
    margin-left:auto;
    margin-right:auto;
}
#course-format-sharedactv-invite .sa_mainbit {
    width:940px;
}

.sa_formleft {
	float:left;
}

.sa_removeselected {
	height:210px;
}  

#course-format-sharedactv-invite form div.sa_block {
    display:block;
}
#course-format-sharedactv-invite .sa_existing {
    float:left;
    width:320px;
}
#course-format-sharedactv-invite .sa_existing select {
    width:300px;
    height:200px;
}
#course-format-sharedactv-invite .sa_donesomething {
    margin:1em 0;
    border:1px solid #aaa;
    padding:0.5em;
}
#course-format-sharedactv-invite .sa_new {
    float:left;
    width:320px;
}
#course-format-sharedactv-invite .sa_new textarea {
    margin-top:1em;
    width:100%;
}
#course-format-sharedactv-invite .sa_new.sa_nonames {
    float:none;
    margin-left:auto;
    margin-right:auto;
}
#course-format-sharedactv-invite .sa_linkback {
    margin-top:1em;
}
#course-format-sharedactv-invite pre {
    margin:1em 0;
    border:1px solid #aaa;
    background:#eee;
    padding:0.5em;
}
#course-format-sharedactv-invite pre h3 {
    margin-top:0;
}

#course-format-sharedactv-go h1 {
    font-size:1em;
    margin:1em 0 1em;
}
#course-format-sharedactv-go #content {
    width:640px;
    margin-left:auto;
    margin-right:auto;
}
#course-format-sharedactv-go .sa_agreecheckbox {
    margin-bottom:0.5em;
}


#course-format-sharedactv-index img.iconhelp {
    position:relative;
    top:-3px;
    margin-left:4px;
}

#course-format-sharedactv-index .sa_intro {
    margin-bottom:1.5em;
}

#course-format-sharedactv-index .sa_legal {
    font-size:0.85em;
    margin-bottom:1.18em;
}

#course-format-sharedactv-index .sharedactv-staffbumf {
    margin:1em 0;
    border:1px solid #AAA;
    padding:0.5em;
}


#course-format-sharedactv-staffbumf h4 {
    margin:0 0 0.5em;
}
/***** /course/format/sharedactv/styles.php end *****/

/***** /course/format/studycal/styles.php start *****/

/* Overall layout */
.studycal-format {
  min-width: 763px;
  margin-top:0.5em;
}
.studycal-format #middle-column {
  margin: 0 12.5em 0 12.5em;
}
.studycal-format #left-column,
.studycal-format #right-column {
  width: 11.5em;
}
.studycal-format #left-column {
  float: left;
}
.studycal-format #right-column {
  float: right;
}

.studycal-format .accesshide,
#course-format-studycal-calendars .accesshide {
    position:absolute;
    left:-10000px;
}

.studycal-format #middle-column h3.weeknum {
    font-size:1.0em;
    margin:0;
    font-weight:normal;
}

/* Progress */
#course-view .studycal-format li.activity,
#course-view .studycal-format ul.studycalentries li {
    position:relative;
    padding-right:2em;
}
#course-view .studycal-format.editing li.activity,
#course-view .studycal-format.editing ul.studycalentries li {
    padding-right:3em;
}
.studycal-format .studycalcheckbox {
    position:absolute;
    right:0;    
}
.studycal-format .studycalcheckbox input {
    margin-left:0;
}
.studycal-format .studycalcheckbox form {
    display:inline;
}

.studycal-format .viewprogress {
    text-align:right;
    font-size:0.8em;
    margin:0.2em 0 0.5em; 
}
.studycal-format .viewprogress h3 {
    display:inline;
    font-size:1.0em;
    font-weight:normal;
    margin:0;
}
.studycal-format .viewprogress li {
    display:inline;
    margin:0 0 0 0.5em;
}   
.studycal-format .viewprogress ul {
    display:inline;
}


/* Special-case overrides */
.studycal-format .block_adminblock select,
.studycal-format .block_calendar_month .minicalendar {
  width: 100%;
  padding: 0;
}
.studycal-format .block_calendar_month .minicalendar th,
.studycal-format .block_calendar_month .minicalendar td {
  padding: 0.1em 0 0.1em 1px;
}

/* Week entries and top entry */
.studycal-format li.section,
.studycal-format #section-0 {
}

/* IE 6 and 7 fixes */
* html #course-view .studycal-format li.activity,
* html .studycal-format ul.studycalentries li.studycalevent,
* html #course-view .studycal-format #middle-column li.studycalsection,
* html .studycal-format #middle-column div.studycalcontent {
    height:1px;
}
#course-view .studycal-format li.activity,
.studycal-format ul.studycalentries li.studycalevent,
.studycal-format #middle-column li.studycalsection,
.studycal-format #middle-column div.studycalcontent {
    min-height:1px;
}


/* Week entries */
.studycal-format ul,
.studycal-format #middle-column .studycalweeks li.studycalsection {
    display:block;
    margin:0;
    padding:0;   
    list-style-type:none;
}

.studycal-format #middle-column li.studycalsection {
    border-top:1px solid #ddd;
}

.studycal-format #middle-column div.studycalleft {
    float:left;
    width:2em;
    padding:4px;
}
.studycal-format #middle-column div.studycalcontent {
    margin-left:2.5em;
    padding: 4px;
    padding-bottom:4px;
    min-height:1px;
    margin-bottom:0;
}
.studycal-format.editing #middle-column div.studycalleft {
    width:72px;
}
.studycal-format.editing #middle-column div.studycalcontent {
    margin-left:76px;
}
.studycal-format.editing #middle-column div.studycalcontentdeco2 {
    min-height:3em;
}
* html .studycal-format.editing #middle-column div.studycalcontentdeco2 {
    height:3em;
} 
.studycal-format.editing #middle-column li.grouped div.studycalcontentdeco2 {
    min-height:5.5em;
}
* html .studycal-format.editing #middle-column li.grouped div.studycalcontentdeco2 {
    height:5.5em;
} 
.studycal-format #middle-column div.studycalcontentdeco2 {
    min-height:1.5em;
}
* html .studycal-format #middle-column div.studycalcontentdeco2 {
    height:1.5em;
}
.studycal-format #middle-column li.grouped div.studycalcontentdeco2 {
    min-height:4em;
}
* html .studycal-format #middle-column li.grouped div.studycalcontentdeco2 {
    height:4em;
}

.studycal-format #middle-column .studycalleft .controlicons {
    margin-top: 4px;
}
.studycal-format #middle-column .studycalleft form {
    display:inline;
}

.studycal-format #middle-column .current {
    background: #ffd991;    
}
.studycal-format #middle-column .current .studycalcontent {
    background:white;
}

.studycal-format.editing h2.studycaltop span.studycaltopleft {
    float:left;
    width:76px;
}
.studycal-format.editing h2.studycaltop span.studycaltopleft form {
    display:inline;
}

.studycal-format span.studycalentry {
    font-weight:bold;
}
.studycal-format #middle-column .studycalweekdivider {
    margin-left:1px;
}


#course-format-studycal-upload-upload #explanation p,
#course-format-studycal-upload-upload #explanation li {
  width:40em;
}

#course-format-studycal-upload-upload form ul,
#course-format-studycal-upload-upload form li {
  display:block;
  list-style-type:none;
  margin-top:2em; 
  padding:0;
  margin-left:1em;
}

#course-format-studycal-upload-upload form table {
    margin-top:0.5em;
}
#course-format-studycal-upload-upload form table th {
    text-align:left;
    font-weight:normal;
    font-style:italic;
}
#course-format-studycal-upload-upload form table th.left {
    padding-right:0.5em;
}
#course-format-studycal-upload-upload form table td {
    padding-top:0.5em;
}
#course-format-studycal-upload-upload form h3 {
    font-size:1em;
    margin:0 0 0.5em -2em;
    padding:1.5em 0 0 2em;
    border-top:1px solid #ddd;  
}

#course-format-studycal-upload-upload form ul {
    border-bottom:1px solid #ddd;
    margin-bottom:2em;
    padding-bottom:2em;
}

#course-format-studycal-upload-upload #savechanges {
    margin: 0 0 1.5em 1em;
}

#course-format-studycal-viewprogress th {
  text-align:left;
}
#course-format-studycal-viewprogress td {
  vertical-align:top;
}
#course-format-studycal-viewprogress .noticks {
  color:#aaa;
}
#course-format-studycal-viewprogress .yes {
  color:#393;
}
#course-format-studycal-viewprogress .no.hasticks {
  color:#a44;
}
#course-format-studycal-viewprogress .odd {
  background:#f4f4f4;
}
#course-format-studycal-viewprogress td,
#course-format-studycal-viewprogress th {
  padding:4px 8px;
}
#course-format-studycal-viewprogress #content {
  margin:0 8px;
}
#course-format-studycal-viewprogress h1 {
  font-size:1em;
  margin:0;
}

/* New course/format/studycal styles */
.studycal-format .studycaltopright {
    font-weight:normal;
    float:right;
}
.studycal-format .studycalheadertext {
    vertical-align:top;
}

.studycal-format .studycalimg {
    margin-left:3px;
    margin-right:3px;
}

#course-format-studycal-calendars table.sctable {
    border:0;
    border-collapse:separate;
    border-spacing:4px;
    position:relative;
    left:-4px;
    background:white;
}

#course-format-studycal-calendars th.week {
    vertical-align:top;
    padding:0.5em;
    border:1px solid #e7e7d6;
    background:#e7e7d6;
    text-align:left;
    font-weight:normal;
}

#course-format-studycal-calendars .current th.week {
    border:1px solid #a6caf0;
    background:#a6caf0;
}

#course-format-studycal-calendars th.content {
    vertical-align:top;
    padding:0.1em 0.5em;
    border:1px solid #e7e7d6;
    background:#e7e7d6;
    text-align:left;
    font-weight:normal;
}

#course-format-studycal-calendars td.filler {
    border:1px solid #e7e7d6;
    background:#e7e7d6;
}

#course-format-studycal-calendars td.content {
    vertical-align:top;
    padding:0.5em;
    border:1px solid #f1f1f1;
    background:#f1f1f1;
}

#course-format-studycal-calendars .current td.content {
    border:1px solid #a6caf0;
}

#course-format-studycal-calendars ul {
    display:block;
    margin:0;
    padding:0;   
    list-style-type:none;
}

#course-format-studycal-calendars .posright,
#course-format-studycal-calendars .studycalcheckbox {
    position:absolute;
    right:0;
}

#course-format-studycal-calendars .posrel,
#course-format-studycal-calendars li.activity,
.studycal-format ul.studycalentries li.studycalevent,
#course-format-studycal-calendars ul.studycalentries li {
    position:relative;
    padding-right:2em;
    padding-top:0.2em;
    padding-bottom:0.2em;
}

#course-format-studycal-calendars span.studycalentry {
    font-weight:bold;
}

#course-format-studycal-calendars .studycalentries {
    margin-top:4px;
    border-top:1px solid #e7e7d6;
    padding-top:4px;
}

#course-format-studycal-calendars .current .studycalentries {
    border-top-color: #a6caf0;
}

#course-format-studycal-calendars li.activity h3 {
    font-size:1em;
    color:#666666;
    margin:0;
}

#course-format-studycal-calendars .coursecheckbox {
    float:left;
    min-width:16%;
    width:16%;
}

#course-format-studycal-calendars .showbutton {
    float:left;
    margin-bottom:1em;
}
/***** /course/format/studycal/styles.php end *****/

/***** /course/format/studyplan/styles.php start *****/

/* Overall layout */
.studyplan-format {
  min-width: 763px;
  margin-top:0.5em;
}
.studyplan-format #middle-column {
  margin: 0 12.5em 0 12.5em;
}
.studyplan-format #left-column,
.studyplan-format #right-column {
  width: 11.5em;
}
.studyplan-format #left-column {
  float: left;
}
.studyplan-format #right-column {
  float: right;
}

h3.weektitle {
  font-size:1.0em;
  display:inline;
  margin:0;
}

.studyplan-format .accesshide,
#course-format-studyplan-calendars .accesshide {
    position:absolute;
    left:-10000px;
}

/* Progress */
#course-view .studyplan-format li.activity,
#course-view .studyplan-format ul.studyplanentries li {
    position:relative;
    padding-right:3em;
}
#course-view .studyplan-format ul.studyplanevents li {
    padding-right:3em;
    margin-right:20px;
}
#course-view .studyplan-format.editing li.activity,
#course-view .studyplan-format.editing ul.studyplanentries li {
    padding-right:3em;
}
.studyplan-format .studyplancheckbox,
.studyplan-format .studycalcheckbox {
    position:absolute;
    right:0;    
}
.studyplan-format .studyplancheckbox input,
.studyplan-format .studycalcheckbox input {
    margin-left:0;
}
.studyplan-format .studyplancheckbox form,
.studyplan-format .studycalcheckbox form {
    display:inline;
}

.studyplan-format .viewprogress {
    text-align:right;
    font-size:0.8em;
    margin:0.2em 0 0.5em; 
}
.studyplan-format .viewprogress h3 {
    display:inline;
    font-size:1.0em;
    font-weight:normal;
    margin:0;
}
.studyplan-format .viewprogress li {
    display:inline;
    margin:0 0 0 0.5em;
}   
.studyplan-format .viewprogress ul {
    display:inline;
}

.studyplan-format .studyplanofflinematerial img {
    margin-top:5px;
}

/* Special-case overrides */
.studyplan-format .block_adminblock select,
.studyplan-format .block_calendar_month .minicalendar {
  width: 100%;
  padding: 0;
}
.studyplan-format .block_calendar_month .minicalendar th,
.studyplan-format .block_calendar_month .minicalendar td {
  padding: 0.1em 0 0.1em 1px;
}

/* IE 6 and 7 fixes */
* html #course-view .studyplan-format li.activity,
* html .studyplan-format ul.studyplanentries li.studyplanevent {
    height:1px;
}
#course-view .studyplan-format li.activity,
.studyplan-format ul.studyplanentries li.studyplanevent {
    min-height:1px;
}
#course-view .studyplan-format li.activity {
    text-indent:-20px;
    margin-left:20px;
}
#course-view .studyplan-format li.activity.label {
    text-indent:0;
    margin-left:0;
}
#course-view .studyplan-format li.activity.label .activityicon {
    margin-left:5px;
}
.ie6#course-view .studyplan-format li.activity {
    text-indent: 0;
    margin-left: 0;
}
#course-view .studyplan-format li.label_header h3 {
    display:inline;
} 

/* Week entries */

.studyplan-format #middle-column h3.weeknum {
    font-size:1.0em;
    margin:0;
    font-weight:bold;
    color:#ffffff;
}
.studyplan-format .studyplanleft form {
    display:inline;
}

.studyplan-format.editing .studyplancontrols {
    float:left;
    width:76px;
}
.studyplan-format.editing .studyplancontrols form,
.studyplan-format.editing .studyplancontrols form div {
    display:inline;
}

.studyplan-format span.studyplanentry {
    font-weight:bold;
}
.studyplan-format #middle-column .studyplanweekdivider {
    margin-left:1px;
}


#course-format-studyplan-upload-upload #explanation p,
#course-format-studyplan-upload-upload #explanation li {
  width:40em;
}

#course-format-studyplan-upload-upload form ul,
#course-format-studyplan-upload-upload form li {
  display:block;
  list-style-type:none;
  margin-top:2em; 
  padding:0;
  margin-left:1em;
}

#course-format-studyplan-upload-upload form table {
    margin-top:0.5em;
}
#course-format-studyplan-upload-upload form table th {
    text-align:left;
    font-weight:normal;
    font-style:italic;
}
#course-format-studyplan-upload-upload form table th.left {
    padding-right:0.5em;
}
#course-format-studyplan-upload-upload form table td {
    padding-top:0.5em;
}
#course-format-studyplan-upload-upload form h3 {
    font-size:1em;
    margin:0 0 0.5em -2em;
    padding:1.5em 0 0 2em;
    border-top:1px solid #ddd;  
}

#course-format-studyplan-upload-upload form ul {
    border-bottom:1px solid #ddd;
    margin-bottom:2em;
    padding-bottom:2em;
}

#course-format-studyplan-upload-upload #savechanges {
    margin: 0 0 1.5em 1em;
}

#course-format-studyplan-viewprogress th {
  text-align:left;
}
#course-format-studyplan-viewprogress td {
  vertical-align:top;
}
#course-format-studyplan-viewprogress .noticks {
  color:#aaa;
}
#course-format-studyplan-viewprogress .yes {
  color:#393;
}
#course-format-studyplan-viewprogress .no.hasticks {
  color:#a44;
}
#course-format-studyplan-viewprogress .odd {
  background-color:#f4f4f4;
}
#course-format-studyplan-viewprogress td,
#course-format-studyplan-viewprogress th {
  padding:4px 8px;
}
#course-format-studyplan-viewprogress #content {
  margin:0 8px;
}
#course-format-studyplan-viewprogress h1 {
  font-size:1em;
  margin:0;
}

/* New course/format/studyplan styles */
.studyplan-format .studyplantopright {
    font-weight:normal;
    float:right;
}
.studyplan-format .studyplanheadertext {
    vertical-align:top;
}

.studyplan-format .studyplanimg {
    margin-left:3px;
    margin-right:3px;
}

#course-format-studyplan-calendars table.sctable {
    border:0;
    border-collapse:separate;
    border-spacing:5px;
    position:relative;
    left:-4px;
    background:white;
}

#course-format-studyplan-calendars th.week {
    vertical-align:top;
    padding:5px;
    background-color:#B8A7CB;
    border:1px solid #cccccc;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -khtml-border-radius: 5px;
    text-align:left;
    font-weight:bold;
    color:white;
}
#course-format-studyplan-calendars .current th.week{
    background-color:#C8C866;
}
#course-format-studyplan-calendars th.content {
    vertical-align:top;
    padding:0.1em 0.5em;
    border:1px solid #e7e7d6;
    background-color:#e7e7d6;
    text-align:left;
    font-weight:normal;
}

#course-format-studyplan-calendars td.filler {
    border:1px solid #e7e7d6;
    background-color:#e7e7d6;
}


#course-format-studyplan-calendars .current td.content {
    background-image:url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_current_content_bg.png');
}

#course-format-studyplan-calendars ul {
    display:block;
    margin:0;
    padding:0;   
    list-style-type:none;
}

#course-format-studyplan-calendars .posright,
#course-format-studyplan-calendars .studyplancheckbox {
    position:absolute;
    right:0;
}

#course-format-studyplan-calendars .posrel,
#course-format-studyplan-calendars li.activity,
.studyplan-format ul.studyplanevents li.studyplanevent,
#course-format-studyplan-calendars ul.studyplanentries li {
    position:relative;
    padding-right:2em;
    padding-top:0.2em;
    padding-bottom:0.2em;
}

#course-format-studyplan-calendars span.studyplanentry {
    font-weight:bold;
}

#course-format-studyplan-calendars .studyplanentries {
    margin-top:4px;
    padding-top:4px;
}

#course-format-studyplan-calendars .studyplan-calendars-events-outer {
    position:relative;
}
#course-format-studyplan-calendars .studyplan-calendars-events-outer .studyplan-calendars-events-bg {
    position:absolute;
    top:0px;
    bottom:-11px;
    right:-11px;
    left:-11px;
    background-color:#ffffff;
    background-image:url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_event_bg.png');
    background-position:top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    border-bottom:none;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -khtml-border-radius:5px;
}
.ie7#course-format-studyplan-calendars .studyplan-calendars-events-outer .studyplan-calendars-events-bg {
    bottom:-7px;
}
#course-format-studyplan-calendars li.activity h3 {
    font-size:1em;
    color:#666666;
    margin:0;
}

#course-format-studyplan-calendars .coursecheckbox {
    float:left;
    min-width:16%;
    width:16%;
}

#course-format-studyplan-calendars .showbutton {
    float:left;
    margin-bottom:1em;
}
#course-format-studyplan-calendars .sctable {
    clear:both;
}

#course-format-studyplan-calendars td.filler {
    background:white;
    border:none;
}

#course-format-studyplan-calendars td.content {
    background-color:#ffffff;
    background-image:url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_content_bg.png');
    background-position:top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -khtml-border-radius:5px;
    padding:5px 10px 6px;
    vertical-align:top;
}

#course-format-studyplan-calendars th.content {
    background-color:#e8e8f3;
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_topbar_bg.png');
    background-position: top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    padding:5px 10px 6px;
}

.ie6#course-format-studyplan-calendars form.togglecompletion,
.ie6#course-format-studyplan-calendars span.autocompletion,
.ie6#course-format-studyplan-calendars .studycalcheckbox {
    right:0;
}

.studyplan-format .viewprintable {
    font-size:0.85em;
    margin:0.5em 0;
}
.studyplan-printable.studyplan-format .viewprintable {
    padding-bottom:2em;
}
.studyplan-format .viewprintable a.studyplan-newlink {
    text-decoration: none;
}
.studyplan-format .viewprintable a.studyplan-newlink span{
    text-decoration: underline;
}
.studyplan-format .viewprintable a.studyplan-newlink img {
    vertical-align: middle;
}
#course-view.studyplan-printable div,
#course-view.studyplan-printable span,
#course-view.studyplan-printable h2,
#course-view.studyplan-printable h3,
#course-view.studyplan-printable th,
#course-view.studyplan-printable td {
    background:none;
    padding:0;
    margin:0 0 4px;
}
#course-view.studyplan-printable #middle-column h3.weeknum,
#course-view.studyplan-printable #middle-column .current h3.weeknum,
#course-view.studyplan-printable .weekdate {
    color:black;
}
#course-view.studyplan-printable {
    margin:0 1em;
}
#course-view.studyplan-printable #footer {
    display:none;
}
#course-view.studyplan-printable #page,
#course-view.studyplan-printable .studyplan-format {
    min-width:0;
} 

#course-view.studyplan-printable .studyplan-format .studyplanweeknumbercell,
#course-view.studyplan-printable .studyplan-format .studyplancontentbg1,
#course-view.studyplan-printable .studyplan-format .studyplancontentbg2 {
    border:none;
}
#course-view.studyplan-printable .studyplan-format .completionprogress {
    display:none;
}
#course-view.studyplan-printable .studyplan-format .studyplanupcoming,
#course-view.studyplan-printable .studyplan-format .studyplanevents-outer .studyplaneventsbg {
    border:none;
}
#course-view.studyplan-printable .studyplan-format .studyplanevents-outer .studyplaneventsbg {
    border-top:1px solid #B8A7CB;
    margin-top:5px;
}
#course-view.studyplan-printable td .studyplancontentdeco1,
#course-view.studyplan-printable th .studyplanweeknumberdeco1 {
    padding-top: 10px;
}
#course-view.studyplan-printable .studyplaneventsbg {
    left: -4px;
}
#course-view.studyplan-printable td .studyplancontentdeco1 {
    padding-bottom: 10px;
    border-bottom: 1px solid #B8A7CB;
}
#course-view.studyplan-printable #viewprintableid {
    margin-top: 4px;
}
@media print {
    #course-view .studyplan-printable.studyplan-format .viewprintable {
    display:none;
    }
}

.studyplan-format a.accesslink {
    font-size:0.85em;
    position:relative;
    left:-10000px;
}
.studyplan-format .accesslink:focus,
.studyplan-format .accesslink:active {
    display:inline;
    left:10px;
}

/* Moved here from outheme.css */
.studyplan-format {
    margin-top:0;
    padding-top:1px; /* don't know why this is needed but */
}
.studyplan-format #middle-column p {
    line-height:1.4;
}
.studyplan-format .completionprogress {
    padding:0 10px 0 0;
}
.ie7 .studyplan-format .completionprogress {
    margin-top:-23px;
}
.studyplan-format .studyplantopbar {
    background-color:#e8e8f3;
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_topbar_bg.png');
    background-position: top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    margin:0 0 5px 0px;
    padding:5px 0 6px;
    position:relative;

}
.studyplan-format .studyplanheadingbar {
    background-color:#e8e8f3;
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_headingbar_bg.png');
    background-position: top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    margin:0 0 5px 0px;
    padding:5px 0 6px 10px;
    position:relative;
}
.studyplan-format h2.studyplantop {
    display:inline;
    font-size:1.0em;
    font-weight:bold;
    padding:5px 0px 6px 10px;
    margin:0;
}
.studyplan-format .studyplanweeksviewingseparator {
    font-weight:normal;
}
.ie .studyplan-format h2.studyplantop {
    padding-top:0px;
    padding-bottom:0px;
}
.ie8 .studyplan-format h2.studyplantop {
    padding-top: 5px;
}

.ie6 .studyplanbottombar, 
.ie6 .studyplantopbar {
    height:0;
}

.studyplan-format .studyplanweeksviewing {
    position:absolute;
    top:0;
    right:5px;
    display:inline;
    padding:5px 10px 6px;
} 

.studyplan-format table.studyplanweeks {
    border-collapse:separate;
    width:100%;
    margin:0;
}
.ie7 .studyplan-format table.studyplanweeks {
    border-collapse: expression(cellSpacing = '0');
}
.studyplan-printable .studyplan-format table.studyplanweeks {
    width:auto;
}
.studyplan-format th.studyplanweeknumber {
    width:40px;
    padding:5px 10px 6px;
    vertical-align:top;
}
.studyplan-format .studyplanweeknumberdeco1 {
    z-index:1000;
    }
.studyplan-format .studyplanweeknumberdeco1,
.studyplan-format .studyplancontentdeco1 {
    position:relative;
    width:100%;
    margin-bottom:5px;
    min-height:20px;
}
.studyplan-format.editing  .studyplanweeknumberdeco1,
.studyplan-format.editing  .studyplancontentdeco1 {
    min-height:40px;
}
.studyplan-format .studyplanweeknumbercell {
    position:absolute;
    top:-5px;
    left:-75px;
    bottom:-6px;
    width:60px;
    background-color:#B8A7CB;
    border:1px solid #cccccc;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -khtml-border-radius: 5px;
}
.studyplan-format table.studyplan-noheadings .studyplanweeknumbercell {
    display:none;
}
.studyplan-format table.studyplan-noheadings  td.studyplancontent {
    padding-left:8px;
}
.studyplan-format .studyplancontentbg1 {
    position:absolute;
    top:-5px;
    bottom:-6px;
    right:0;
    left:-8px;
    background-color:#ffffff;
    background-image:url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_content_bg.png');
    background-position:top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -khtml-border-radius:5px;
    z-index:-10000;
    margin-right:49px;
}
.studyplan-format .studyplan-nocompletioncol .studyplancontentbg1 {
    margin-right:-18px;
}
.studyplan-format .current .studyplancontentbg1 {
    background-image:url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_current_content_bg.png');
}
.ie7 .studyplan-format .current .studyplancontentbg1 {
    background:none;
    background-color:#fcfcf5;
}
.studyplan-format .current .weekheader {
    font-weight:bold;
}

.studyplan-format .studyplancontentbg2 {
    position:absolute;
    top:-5px;
    bottom:-6px;
    right:-18px;
    width:60px;
    background-color:#B8A7CB;
    border:1px solid #cccccc;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius: 5px;
    -khtml-border-radius:5px;
    z-index:-10000;
}
.studyplan-format .studyplan-nocompletioncol .studyplancontentbg2 {
    display:none;
}

.studyplan-format td.studyplancontent { 
    padding:5px 18px 6px 15px;
    vertical-align:top;
}

.studyplan-format .current .studyplanweeknumbercell {
    background-color:#C8C866;
}

.studyplan-format .weekheader {
    color:#5555AA;
    margin-bottom:4px;
    padding-right:55px;
}
.studyplan-format.studyplan-topics .weektitle {
    font-weight:bold;
}

.studyplan-format ul.studyplanevents {
    margin:10px 0 0;
    padding:0;
}
.studyplan-format .studyplanevents-outer {
    position:relative;
}
.studyplan-format .studyplanevents-outer .studyplaneventsbg {
    position:absolute;
    top:-5px;
    bottom:-6px;
    right:0;
    left:-8px;
    background-color:#ffffff;
    background-image:url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_event_bg.png');
    background-position:top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -khtml-border-radius:5px;
    margin-right:49px;
}

.ie7 .studyplan-format .studyplanevents-outer .studyplaneventsbg {
    bottom:3px;
}
.studyplan-format li.studyplanevent {
    display:block;
    list-style-type:none;
    margin:0;
    padding:0;
}

.studyplan-format .studyplanbottombar {
    background-color:#eaeaea;
    background-image: url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_bottombar_bg.png');
    background-position: top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    padding:5px 0 6px;
    position:relative;
    text-align:right;
    font-weight:bold;
}
.studyplan-format h2.studyplantop a,
.studyplan-format .studyplanbottombar a {
    font-weight:normal;
    text-decoration:none;
    color:#333333;
}
.studyplan-format h2.studyplantop a:hover,
.studyplan-format .studyplanbottombar a:hover {
    text-decoration:underline;
}
.studyplan-format .studyplanshowall{
    display:inline;
    padding:5px 10px 6px;
    margin:0;
}

.studyplan-format .viewprogress {
    margin-top:1em;
    text-align:left;
}
.studyplan-format .viewprogress ul {
    padding:0;
}
.studyplan-format.editing .studyplantopbar {
    margin-top:1em;
}
.studyplan-format.editing .studyplancontrols {
    float:none;
    display:inline;
    padding:5px 10px 6px;
}
.studyplan-format.editing h2.studyplantop {
    background-image: none;
}

.studyplan-format.editing .studyplantopbar {
    padding-right:0;
}

.studyplan-format .studyplancheckbox div {
    display:inline;
}
.studyplan-format .controlicons form,
.studyplan-format .controlicons form div {
    display:inline;
}

.studyplan-format li.activity a {
    text-decoration:none;
    color:#333333;
}
.studyplan-format li.activity a.dimmed {
    color:#555;
}
.studyplan-format li.activity.label_text a {
  text-decoration: underline;
}
.studyplan-format li.activity.label_text a.autolink.glossary {
  text-decoration: none;
}
.studyplan-format li.activity a:hover span {
    text-decoration:underline;
}
.ie6 .studyplan-format li.activity a:hover {
    text-decoration:underline;
}

.studyplan-format.editing .studyplanupcoming {
    margin-top:1em;
}
.studyplan-format .studyplanupcoming {
    background-color:#ffffff;
    background-image:url('http://openlearn.open.ac.uk/pix/smartpix.php/oci/img/studyplan_upcoming_bg.png');
    background-position:top left;
    background-repeat:repeat-x;
    border:1px solid #cccccc;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -khtml-border-radius:5px;
    padding:4px 5px 0 10px;
    margin-bottom:10px;
}

.studyplan-format .studyplanupcoming h2 {
    font-size:1.0em;
    font-weight:bold;
    margin:0 0 10px;
}

.studyplan-format .studyplanupcoming ul.studyplanevents {
    border:0;
    padding:0;
    margin:5px 0 10px;
}

.studyplan-format .studyplanactivities {
    padding-bottom:1px;
}

.studyplan-format .label_header h3 {
    font-weight:bold;
    margin:0;
    margin-top:10px;
}
.studyplan-format.editing .label_header h3 {
    display:inline;
}
.studyplan-format .label_header .studyplancheckbox {
    padding-top:7px;
}
.studyplan-format.editing .label_header .studyplancheckbox {
    padding-top:0;
}

.studyplan-format .activity.label img {
    max-width:247px;
}

.studyplanheader,
.studycalheader {
    font-weight:bold;
    color:#224;
}

.studyplan-format span.studyplanentry,
.studyplan-format span.studycalentry {
    font-weight:normal;
}

.studyplancheckbox input {
    position:relative;
    top:-3px;
}
.editing .studyplancheckbox input {
    position:relative;
    top:-2px;
}

.studyplan-format .studycalcheckbox {
    right:-10px;
}
.studyplan-format .studyplanevent .studycalcheckbox {
    right:0;
}
.studyplan-format .section_add_menus {
    padding-right:60px;
}/***** /course/format/studyplan/styles.php end *****/

/***** /grade/report/grader/styles.php start *****/

.flexible th {
white-space:normal;
}

.gradestable th.user img {
width:20px;
height:20px;
}

.grade-report-grader table#user-grades .catlevel2 {
background-color:#f9f9f9;
}

.grade-report-grader table#user-grades td.overridden {
background-color:#ddd;
}

.grade-report-grader table#user-grades tr.avg td.cell {
background-color:#efefff;
font-weight:700;
color:#00008B;
}

.grade-report-grader table#user-grades tr.odd td.cell {
background-color:#efefef;
white-space:nowrap;
}

.grade-report-grader table#user-grades tr.even td.overridden {
background-color:#F3E4C0;
}

.grade-report-grader table#user-grades tr.odd td.overridden {
background-color:#EFD9A4;
}

.grade-report-grader table#user-grades tr.even td.excluded {
background-color:#EABFFF;
}

.grade-report-grader table#user-grades tr.odd td.excluded {
background-color:#E5AFFF;
}

.grade-report-grader table#user-grades tr.odd th.header {
background-color:#efefef;
background-image:none;
}

.grade-report-grader table#user-grades tr.groupavg td.cell {
background-color:#efffef;
font-weight:700;
color:#006400;
}

.grade-report-grader table#user-grades td.cat,.grade-report-grader table#user-grades td.course {
font-weight:700;
}

.grade-report-grader table#user-grades {
font-size:10px;
width:auto;
background-color:transparent;
border-style:solid;
border-width:1px;
margin:20px 0 0;
}

.grade-report-grader #overDiv table {
margin:0;
}

.grade-report-grader #overDiv table td.feedback {
border:0;
}

.grade-report-grader #overDiv .feedback {
font-size:70%;
background-color:#ABF;
color:#000;
font-family:Verdana;
font-weight:400;
}

.grade-report-grader #overDiv .caption {
font-size:70%;
background-color:#56C;
color:#CCF;
font-family:Arial;
font-weight:700;
}

.grade-report-grader #overDiv .intersection {
font-size:70%;
background-color:#ABF;
color:#000;
font-family:Verdana;
font-weight:400;
}

.grade-report-grader #overDiv .intersectioncaption {
background-color:#56C;
color:#CCF;
font-family:Arial;
font-weight:700;
}

.grade-report-grader div.submit {
margin-top:20px;
text-align:center;
}

.grade-report-grader table#user-grades td {
text-align:right;
border-style:solid;
border-width:0 1px 1px 0;
}

.grade-report-grader table#user-grades th.category {
vertical-align:top;
border-style:solid;
border-width:1px 1px 0;
}

.grade-report-grader table#user-grades th.user {
text-align:left;
border-style:solid;
border-width:0 0 1px;
}

.grade-report-grader table#user-grades th.useridnumber {
border-style:solid;
border-width:0 0 1px 1px;
}

.grade-report-grader table#user-grades th.categoryitem,.grade-report-grader table#user-grades th.courseitem,.grade-report-grader table#user-grades td.topleft {
vertical-align:top;
border-style:solid;
border-width:0 1px;
}

/* we don't want 25px height - at all
 * This causes the columns to fall out of line if Static Students Column is enabled
.grade-report-grader table#user-grades th.category,
.grade-report-grader table#user-grades th.item,
.grade-report-grader table#user-grades th.categoryitem,
.grade-report-grader table#user-grades th.courseitem {
height: 25px;
}
*/

.grade-report-grader td,.grade-report-grader th {
border-color:#CECECE;
}

.grade-report-grader table#participants th {
vertical-align:top;
width:auto;
}

.grade-report-grader table#user-grades td.fillerfirst {
border-style:solid;
border-width:0 0 0 1px;
}

.grade-report-grader table#user-grades td.fillerlast {
border-style:solid;
border-width:0 1px 0 0;
}

.grade-report-grader table#user-grades th.item ,
.grade-report-grader table#user-grades th.categoryitem ,
.grade-report-grader table#user-grades th.courseitem {
border-bottom-color:#000;
vertical-align:top;
border-style:solid;
border-width:1px;
}

.grade-report-grader div.gradertoggle {
display:inline;
margin-left:20px;
}

.grade-report-grader table#user-grades th.range {
text-align:right;
border-style:solid;
border-width:1px;
}

.grade-report-grader table#user-grades .userpic {
display:inline;
margin-right:10px;
}

.grade-report-grader table#user-grades .quickfeedback {
border:#000 1px dashed;
}

.grade-report-grader #siteconfiglink {
text-align:right;
}

.grade-report-grader table#user-grades .hidden,.grade-report-grader table#user-grades .hidden a {
color:#aaa;
}

.grade-report-grader table#user-grades .datesubmitted {
font-size:.7em;
}

.grade-report-grader table#user-grades td.cell {
padding-left:5px;
padding-right:5px;
vertical-align:middle;
}

.grade-report-grader table {
border-collapse:collapse;
background-color:#fff;
font-size:10px;
border-color:#cecece;
}

.grade-report-grader th {
padding:2px 10px 0;
}

.grade-report-grader span.inclusion-links {
margin:0 5px 0 10px;
}

.grade-report-grader table#user-grades .item {
background-color:#e9e9e9;
}

.grade-report-grader table tr.odd th.header {
background-color:#efefef;
background-image:none;
border-width:0 0 1px;
}

.grade-report-grader table tr.heading th.header {
border-top:1px solid #cecece;
}

.grade-report-grader table#user-grades tr.heading th.categoryitem,.grade-report-grader table#user-grades tr.heading th.courseitem {
border-width:0 0 0 1px;
}

.grade-report-grader table#user-grades th.category.header.catlevel1 {
vertical-align:top;
border-style:solid;
border-width:1px 1px 0 0;
}

.grade-report-grader div.left_scroller th.user a {
vertical-align:middle;
margin:0;
padding:0;
}

.grade-report-grader table#user-grades th.categoryitem,.grade-report-grader table#user-grades th.courseitem,.grade-report-grader table td.topleft {
vertical-align:top;
border-color:#cecece #cecece #000;
border-style:solid;
border-width:0 1px 1px;
}

.grade-report-grader table td.topleft {
border-bottom:none;
}

.grade-report-grader table#user-grades td.topleft {
background-color:#fff;
}

.grade-report-grader div.userpic {
margin-right:10px;
float:left;
}

.grade-report-grader div.userpic img {
border:3px double #cecece;
vertical-align:middle;
width:2.7em;
height:2.7em;
}

.grade-report-grader a.quickedit {
line-height:1em;
display:block;
float:right;
clear:none;
font-size:9px;
background-color:transparent;
margin:.1em 0 0;
}

.grade-report-grader a.quickedit2 {
display:block;
float:right;
clear:none;
background-color:transparent;
margin:1.3em 0 0;
}

.grade-report-grader table#quick_edit {
border:1px solid #cecece;
margin:0 auto;
}

.grade-report-grader table#quick_edit td {
vertical-align:middle;
border:1px solid #cecece;
text-align:left;
margin:0;
padding:5px;
}

.grade-report-grader table#quick_edit td img {
border:3px double #cecece;
vertical-align:middle;
padding:0;
}

.grade-report-grader td input {
border:1px solid #666;
margin-left:10px;
margin-right:10px;
}

.grade-report-grader table#quick_edit td.fullname {
border-left:none;
padding-left:5px;
}

.grade-report-grader table#quick_edit td.picture {
border-right:none;
}

.grade-report-grader table#quick_edit td.finalgrade input {
width:5em;
}

.grade-report-grader h1 {
text-align:center;
clear:both;
}

.grade-report-grader form {
text-align:center;
}

.grade-report-grader input.center {
margin:10px auto 0;
}

.grade-report-grader .lefttbody {
width:auto;
vertical-align:middle;
}

.grade-report-grader table#user-grades th.fixedcolumn {
border:1px solid #cecece;
vertical-align:middle;
}

.grade-report-grader table#fixed_column th {
border:1px solid #cecece;
vertical-align:middle;
border-right-color:#000;
}

.grade-report-grader table#fixed_column th.user{
border-right-color:#cecece;
}

.grade-report-grader table#fixed_column {
padding-top:20px;
border-top:1px solid #cecece;
background-color:#fff;
}

.grade-report-grader .left_scroller {
float:left;
clear:none;
padding-top:20px;
}

.grade-report-grader .right_scroller {
width:auto;
clear:none;
/*force horizontal scrollbar to appear or IE adds one over the bottom row of the table MDL-21088*/
overflow-x:scroll;
overflow-y:hidden;
}

.grade-report-grader table tr.avg,.grade-report-grader table tr.groupavg td,.grade-report-grader table tr.avg td,.grade-report-grader table tr.groupavg th,.grade-report-grader table tr.avg th,.grade-report-grader table tr.controls_row,.grade-report-grader table tr.controls_row th,.grade-report-grader table tr.range_row,.grade-report-grader table tr.range_row th,div.right_scroller tr {
height:2em;
}

.grade-report-grader table#user-grades tr.groupavg td.cell,.grade-report-grader tr.groupavg th.header {
background-color:#efffef;
}

.grade-report-grader form td.excluded {
color:red;
}

.grade-report-grader .excludedfloater {
font-weight:700;
color:red;
font-size:9px;
float:left;
}

.grade-report-grader span.gradepass {
color:#298721;
}

.grade-report-grader span.gradefail {
color:#890d0d;
}

.gradeweight {
color:#461d7c;
font-weight:700;
}

.grade-report-grader td select {
font-size:100%;
padding:0;
}

.grade-report-grader .righttest td select {
font-size:86%;
padding:0;
}

.grade-report-grader tr.avg,tr.controls,td.controls,th.controls,.grade-report-grader tr.groupavg,tr.range,th.range,td.range,tr.heading th.range {
height:2.8em!important;
white-space:nowrap;
}
.heading_name_row th {
white-space:nowrap;
width:2000px;
}

/*MDL-21088 - IE 7 ignores nowraps on tds or ths so we put a span within it with a nowrap on it*/
.heading_name_row th span {
white-space:nowrap;
}

.grade_icons img.ajax {
float:right;
}

.gradestable th.user,.gradestable th.range,.grade-report-grader .flexible th,.grade-report-grader .flexible td,.grade-report-grader .flexible th a,.grade-report-grader .flexible td a,.grade-report-grader .gradestable th.range,.grade-report-grader td {
white-space:nowrap;
}

.grade-report-grader table#user-grades .catlevel1,.grade-report-grader .r1,.grade-report-grader table tr.even td.cell,.grade-report-grader table tr.even th {
background-color:#fff;
}

.grade-report-grader table#user-grades .catlevel3,.grade-report-grader table tr.odd td.cell {
background-color:#efefef;
}

.grade-report-grader table#fixed_column tr.odd th ,
.grade-report-grader table#user-grades tr.odd th {
background-color:#efefef;
}

.grade-report-grader table#user-grades td.vmarked,.grade-report-grader table#user-grades tr.odd td.vmarked,.grade-report-grader table#user-grades td.vmarked,.grade-report-grader table#user-grades tr.odd td.vmarked,.grade-report-grader table#user-grades tr.even td.vmarked {
background-color:#fc3;
}

.grade-report-grader table#user-grades td.hmarked,.grade-report-grader table#user-grades tr.odd td.hmarked,.grade-report-grader table#user-grades td.hmarked,.grade-report-grader table#user-grades tr.odd td.hmarked,.grade-report-grader table#user-grades tr.even td.hmarked {
background-color:#ff9;
}

.grade-report-grader table#user-grades td.hmarked.vmarked,.grade-report-grader table#user-grades tr.odd td.hmarked.vmarked,.grade-report-grader table#user-grades td.hmarked.vmarked,.grade-report-grader table#user-grades tr.even td.hmarked.vmarked,.grade-report-grader table#user-grades tr.odd td.hmarked.vmarked {
background-color:#fc9;
}

.grade-report-grader table#user-grades tr.heading,.grade-report-grader table#user-grades .heading td {
border-style:solid;
border-width:0;
}

.grade-report-grader table#user-grades td.useridnumber,.grade-report-grader table#user-grades th,.grade-report-grader div.gradeparent,.grade-report-grader table#user-grades td.ajax {
text-align:left;
}

.grade-report-grader table tr.avg td.cell,.grade-report-grader table#user-grades td.controls,.grade-report-grader table tr.avg,.grade-report-grader table tr.avg td,.grade-report-grader table tr.avg th {
background-color:#f3ead8;
}

.grade-report-grader div.left_scroller tr,.grade-report-grader div.right_scroller tr,.grade-report-grader div.left_scroller td,.grade-report-grader div.right_scroller td,.grade-report-grader div.left_scroller th,.grade-report-grader div.right_scroller th {
height:4.4em;
font-size:10px;
}

.grade-report-grader table th.user,.grade-report-grader table td.useridnumber {
text-align:left;
vertical-align:middle;
}

/*
.grade-report-grader .yui-overlay {
    background-color: #FFEE69;
    border-color: #D4C237 #A6982B #A6982B;
    border-style: solid;
    border-width: 1px;
    left: 0;
    padding: 2px 5px;
    font-size: 0.7em;
}
*/

.grade-report-grader .yui-overlay .fullname {
    color: #5F3E00;
    font-weight: bold;
}
.grade-report-grader .yui-overlay .itemname {
    color: #194F3E;
    font-weight: bold;
}
.grade-report-grader .yui-overlay .feedback {
    color: #5F595E;
}
/* .grade-report-grader table#user-grades td */
/* .grader-report-grader table#user-grades td .yui-panel div.hd { */
#tooltipPanel {
  text-align: left;
}


/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
.yui-overlay,.yui-panel-container{visibility:hidden;position:absolute;z-index:2;}.yui-panel-container form{margin:0;}.mask{z-index:1;display:none;position:absolute;top:0;left:0;right:0;bottom:0;}.mask.block-scrollbars{overflow:auto;}.masked select,.drag select,.hide-select select{_visibility:hidden;}.yui-panel-container select{_visibility:inherit;}.hide-scrollbars,.hide-scrollbars *{overflow:hidden;}.hide-scrollbars select{display:none;}.show-scrollbars{overflow:auto;}.yui-panel-container.show-scrollbars,.yui-tt.show-scrollbars{overflow:visible;}.yui-panel-container.show-scrollbars .underlay,.yui-tt.show-scrollbars .yui-tt-shadow{overflow:auto;}.yui-panel-container.shadow .underlay.yui-force-redraw{padding-bottom:1px;}.yui-effect-fade .underlay{display:none;}.yui-tt-shadow{position:absolute;}.yui-override-padding{padding:0 !important;}.yui-panel-container .container-close{overflow:hidden;text-indent:-10000em;text-decoration:none;}.yui-skin-sam .mask{background-color:#000;opacity:.25;*filter:alpha(opacity=25);}.yui-skin-sam .yui-panel-container{padding:0 1px;*padding:2px;}.yui-skin-sam .yui-panel{position:relative;left:0;top:0;border-style:solid;border-width:1px 0;border-color:#808080;z-index:1;*border-width:1px;*zoom:1;_zoom:normal;}.yui-skin-sam .yui-panel .hd,.yui-skin-sam .yui-panel .bd,.yui-skin-sam .yui-panel .ft{border-style:solid;border-width:0 1px;border-color:#808080;margin:0 -1px;*margin:0;*border:0;}.yui-skin-sam .yui-panel .hd{border-bottom:solid 1px #ccc;}.yui-skin-sam .yui-panel .bd,.yui-skin-sam .yui-panel .ft{background-color:#F2F2F2;}.yui-skin-sam .yui-panel .hd{padding:0 10px;font-size:93%;line-height:2;*line-height:1.9;font-weight:bold;color:#000;background:url(../../../../assets/skins/sam/sprite.png) repeat-x 0 -200px;}.yui-skin-sam .yui-panel .bd{padding:10px;}.yui-skin-sam .yui-panel .ft{border-top:solid 1px #808080;padding:5px 10px;font-size:77%;}.yui-skin-sam .yui-panel-container.focused .yui-panel .hd{}.yui-skin-sam .container-close{position:absolute;top:5px;right:6px;width:25px;height:15px;background:url(../../../../assets/skins/sam/sprite.png) no-repeat 0 -300px;cursor:pointer;}.yui-skin-sam .yui-panel-container .underlay{right:-1px;left:-1px;}.yui-skin-sam .yui-panel-container.matte{padding:9px 10px;background-color:#fff;}.yui-skin-sam .yui-panel-container.shadow{_padding:2px 4px 0 2px;}.yui-skin-sam .yui-panel-container.shadow .underlay{position:absolute;top:2px;left:-3px;right:-3px;bottom:-3px;*top:4px;*left:-1px;*right:-1px;*bottom:-1px;_top:0;_left:0;_right:0;_bottom:0;_margin-top:3px;_margin-left:-1px;background-color:#000;opacity:.12;*filter:alpha(opacity=12);}.yui-skin-sam .yui-dialog .ft{border-top:none;padding:0 10px 10px 10px;font-size:100%;}.yui-skin-sam .yui-dialog .ft .button-group{display:block;text-align:right;}.yui-skin-sam .yui-dialog .ft button.default{font-weight:bold;}.yui-skin-sam .yui-dialog .ft span.default{border-color:#304369;background-position:0 -1400px;}.yui-skin-sam .yui-dialog .ft span.default .first-child{border-color:#304369;}.yui-skin-sam .yui-dialog .ft span.default button{color:#fff;}.yui-skin-sam .yui-dialog .ft span.yui-button-disabled{background-position:0pt -1500px;border-color:#ccc;}.yui-skin-sam .yui-dialog .ft span.yui-button-disabled .first-child{border-color:#ccc;}.yui-skin-sam .yui-dialog .ft span.yui-button-disabled button{color:#a6a6a6;}.yui-skin-sam .yui-simple-dialog .bd .yui-icon{background:url(../../../../assets/skins/sam/sprite.png) no-repeat 0 0;width:16px;height:16px;margin-right:10px;float:left;}.yui-skin-sam .yui-simple-dialog .bd span.blckicon{background-position:0 -1100px;}.yui-skin-sam .yui-simple-dialog .bd span.alrticon{background-position:0 -1050px;}.yui-skin-sam .yui-simple-dialog .bd span.hlpicon{background-position:0 -1150px;}.yui-skin-sam .yui-simple-dialog .bd span.infoicon{background-position:0 -1200px;}.yui-skin-sam .yui-simple-dialog .bd span.warnicon{background-position:0 -1900px;}.yui-skin-sam .yui-simple-dialog .bd span.tipicon{background-position:0 -1250px;}.yui-skin-sam .yui-tt .bd{position:relative;top:0;left:0;z-index:1;color:#000;padding:2px 5px;border-color:#D4C237 #A6982B #A6982B #A6982B;border-width:1px;border-style:solid;background-color:#FFEE69;}.yui-skin-sam .yui-tt.show-scrollbars .bd{overflow:auto;}.yui-skin-sam .yui-tt-shadow{top:2px;right:-3px;left:-3px;bottom:-3px;background-color:#000;}.yui-skin-sam .yui-tt-shadow-visible{opacity:.12;*filter:alpha(opacity=12);}
.yui-skin-sam .yui-panel .hd{padding:0 10px;font-size:93%;line-height:2;*line-height:1.9;font-weight:bold;color:#000;background:url(http://openlearn.open.ac.uk/lib/yui/assets/skins/sam/sprite.png) repeat-x 0 -200px;}
.yui-skin-sam .container-close{border-color: #45c;position:absolute;top:5px;right:6px;width:25px;height:15px;background:url(http://openlearn.open.ac.uk/lib/yui/assets/skins/sam/sprite.png) no-repeat 0 -300px;cursor:pointer;}
.yui-skin-sam .yui-simple-dialog .bd .yui-icon{background:url(http://openlearn.open.ac.uk/lib/yui/assets/skins/sam/sprite.png) no-repeat 0 0;width:16px;height:16px;margin-right:10px;float:left;}

.grade-report-grader .yui-overlay a.container-close {
  margin-top: -3px;
}

#hiddentooltiproot, .tooltipDiv {
  display: none;
}

/***** /grade/report/grader/styles.php end *****/

/***** /grade/report/ouuser/styles.php start *****/


.grade-report-ouuser table#user-grade .datesubmitted {
  font-size: 0.7em;
}

.grade-report-ouuser table#user-grade .courseitem {
  color: #00008B;
  font-weight: bold
}

.grade-report-ouuser table#user-grade .categoryitem {
  color: #006400;
  font-weight: bold
}

.grade-report-ouuser table#user-grade td.cell {
  padding-left: 5px;
  padding-right: 5px;
}

/* this must be last if we want to override other category and course item colors */
.grade-report-ouuser table#user-grade .hidden,
.grade-report-ouuser table#user-grade .hidden a {
  color:#aaaaaa;
}
/***** /grade/report/ouuser/styles.php end *****/

/***** /grade/report/user/styles.php start *****/

.grade-report-user table.user-grade .datesubmitted {
  font-size: 0.7em;
}

.grade-report-user table.user-grade .courseitem,
.grade-report-user table.user-grade .categoryitem {
  font-weight: bold;
}

.grade-report-user table.user-grade td.cell {
  padding-left: 5px;
  padding-right: 5px;
}

#graded_users_selector {
  float: right;
  text-align: right;
}

/* this must be last if we want to override other category and course item colors */
.grade-report-user table.user-grade .hidden,
.grade-report-user table.user-grade .hidden a {
  color:#aaaaaa;
}

table.user-grade {
   border: 1px solid black;
   margin: auto;
   padding: 0.25em;
   font-size: 0.8em;
}
table.user-grade td {
   margin: 1px;
   padding: 0.25em;
}
table.user-grade thead {
   border-bottom: 3px double black;
}
table.user-grade thead th {
   padding: 0.25em 0.75em 0.25em 0.75em;
}

table.user-grade td.oddd1 {
   background-color: #f3dfd0;
}
table.user-grade td.oddd2 {
   background-color: #d0dbf3;
}
table.user-grade td.oddd3 {
   background-color: #d0f3d6;
}
table.user-grade td.oddd4 {
   background-color: #f0f0aa;
}

table.user-grade td.evend2 {
   background-color: #b0bbd3;
}
table.user-grade td.evend3 {
   background-color: #b0dfb6;
}
table.user-grade td.evend4 {
   background-color: #cac8be;
}

table.user-grade td.b1t {
   border-top: 1px solid black;
}
table.user-grade td.b1r {
   border-right: 1px solid black;
}
table.user-grade td.b1b {
   border-bottom: 1px solid black;
}
table.user-grade td.b1l {
   border-left: 1px solid black;
}

table.user-grade td.b2t {
   border-top: 2px solid black;
}
table.user-grade td.b2r {
   border-right: 2px solid black;
}
table.user-grade td.b2b {
   border-bottom: 2px solid black;
}
table.user-grade td.b2l {
   border-left: 2px solid black;
}

table.user-grade td.baggt,
table.user-grade td.baggb {
   font-style: italic;
   font-weight: bold;
}
table.user-grade td.baggt {
   border-top: 3px double black;
}
table.user-grade td.baggb {
   border-bottom: 3px double black;
}

table.user-grade td.item {
   border-left: 1px solid gray;
   border-right: 1px solid gray;
}
table.user-grade td.excluded {
   /*text-decoration: line-through;*/
   background-color: #666;
}
table.user-grade td.hidden {
   color: #aaa;
}

table.user-grade td {
   min-width: 0.5em;
   vertical-align: top;
}


/***** /grade/report/user/styles.php end *****/
