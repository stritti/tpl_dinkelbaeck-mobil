<?php

/**
* @version 1.0
* @package kaiser
* @copyright (C) 2012 by Robin Jungermann
* @license Released under the terms of the GNU General Public License
**/

header("content-type: text/css");

$templateUrl = str_replace('_','/',$_GET['templateurl']);

include_once("hsv_color.php");
include_once("functions.php");
include_once("prepare_colors.php");

$templateUrl = str_replace('_','/',$_GET['templateurl']);


ereg('MSIE ([0-9].[0-9])',$_SERVER['HTTP_USER_AGENT'],$reg);

if(!isset($reg[1])) { $ieVersion = 'none'; } 
else {
	if(floatval($reg[1]) == '9'){ $ieVersion = '9'; }				
	if(floatval($reg[1]) == '8'){ $ieVersion = '8'; }
}


echo("
@charset 'utf-8';
/* CSS Document */


#ct_errorWrapper, #ct_errorWrapper a {
	color: ".$menuTextColor.";
}

body, 
a,
#errorboxheader,
#errorboxoutline,
ul.autocompleter-choice,
ul.autocompleter-choices li.autocompleter-selected span.autocompleter-queried {
	color: ".$textColor.";
}

#siteTop {
	".ct_bgImageGradient('bg_sitetop.png', 'left top', 'repeat', $header_gradient_top, $header_gradient_bottom)."
	border-bottom: 1px rgba(0,0,0,0.15) solid;
}

#main {
	background: ".$baseColor.";
	-webkit-box-shadow:  0px 5px 12px 0px rgba(0, 0, 0, 0.45);
    box-shadow:  0px 5px 12px 0px rgba(0, 0, 0, 0.45);
}

.ct_breadcrumbs {
	background: ".$bodyGradientDark.";
	border-bottom: 1px solid ".$bodyGradientLight.";
	
	-webkit-border-radius: 2px 2px 0 0;
	-moz-border-radius: 2px 2px 0 0;
	border-radius: 2px 2px 0 0;
}
/* BASIC ELEMENTS ------------------------------*/

a:hover,
h1 a:hover,
h2 a:hover,
h3 a:hover,
h4 a:hover,
h5 a:hover,
#ct_loginHelpers li:hover a,
ul.latestnews li:hover a,
.ct_breadcrumbs a:hover,
a.readmore:hover, 
p.readmore a:hover,
.categories-list span.item-title a:hover,
.category td a:hover,
.category th a:hover,
.registration legend,
.search-results .result-title:hover,
.search-results .result-title:hover a,
ul.circleList li, 
ul.circleList li ul li,
.errorNumber
{
	color: ".$accentColor.";
}


h1[class^='icon-'],
h1[class*=' icon-'],
h2[class^='icon-'],
h2[class*=' icon-'],
h3[class^='icon-'],
h3[class*=' icon-'],
h4[class^='icon-'],
h4[class*=' icon-'],
h5[class^='icon-'],
h5[class*=' icon-'],
.row > div > h1:first-child,
.row > div > h2:first-child,
.row > div > h3:first-child,
.row > div > h4:first-child,
.row > div > h5:first-child,
.row .moduletable_ct_lightBox > div > h1:first-child,
.row .moduletable_ct_lightBox > div > h2:first-child,
.row .moduletable_ct_lightBox > div > h3:first-child,
.row .moduletable_ct_lightBox > div > h4:first-child,
.row .moduletable_ct_lightBox > div > h5:first-child,
.row .moduletable_ct_darkBox > div > h1:first-child,
.row .moduletable_ct_darkBox > div > h2:first-child,
.row .moduletable_ct_darkBox > div > h3:first-child,
.row .moduletable_ct_darkBox > div > h4:first-child,
.row .moduletable_ct_darkBox > div > h5:first-child,
.hlUnderline {
	border-bottom: 2px solid ".$accentColor.";
	padding-bottom: 5px;
}


/* SITE AREAS ------------------------------*/

body{
	background-position: center;
	".ct_bgImageGradient('bg_site_01.png', 'left', 'repeat', $baseColor, $baseColor)."
}

footer {
	".ct_bgGradient($footerGradientLight, $footerGradientDark)."	
}

footer, 
footer a, 
footer label {
	color: ".$footer_text_color.";
}

.footerCopyright {
	background: ".$copyrightColor.";
	color: ".$copyright_text_color.";
}

.tip {
	".ct_bgImageGradient('bg_tooltip.png', 'left', 'no-repeat', $darkboxGradientLight, $darkboxGradientDark)."
	}


/* NAVIGATION ------------------------------*/

ul.menu li > a,
ul.menu li > span {
	color: ".$textColor.";
	opacity: 0.5;
	text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.5);
}

#navigation ul.menu li > a,
#navigation ul.menu li > span {
	color: ".$menuTextColor.";
	opacity: 0.5;
	text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.5);
}

ul.menu ul,
ul.menu ul ul {
	background: ".$baseColor.";
}

ul.menu ul li a,
ul.menu ul li span,
#navigation ul.menu ul li a,
#navigation ul.menu ul li span {
	color: ".$textColor.";
	opacity: 1;
	text-shadow: none;
}

ul.menu li:hover > a,
ul.menu li:hover > span,
ul.menu li.current > a,
ul.menu li.current > span, 
ul.menu li.active > a,
ul.menu li.active > span {
	color: ".$textColor." !important;
	opacity: 1;
}



ul.menu li ul li:hover > a,
ul.menu li ul li:hover > span,
ul.menu li ul li.current > a, 
ul.menu li ul li.current > span, 
ul.menu li ul li.active > a,
ul.menu li ul li.active > span,
ul.menu li ul li ul li:hover > a,
ul.menu li ul li ul li:hover > span,
ul.menu li ul li ul li.current > a, 
ul.menu li ul li ul li.current > span, 
ul.menu li ul li ul li.active > a,
ul.menu li ul li ul li.active > span,
ul.autocompleter-choices li.autocompleter-selected {
	color: ".$textColor." !important;
	opacity: 1;
}

#navigation ul.menu li:hover > a,
#navigation ul.menu li:hover > span,
#navigation ul.menu li.current > a,
#navigation ul.menu li.current > span, 
#navigation ul.menu li.active > a,
#navigation ul.menu li.active > span { 
	color: ".$menuTextColor." !important;
	opacity: 1;
}

#navigation ul.menu li ul li:hover > a,
#navigation ul.menu li ul li:hover > span,
#navigation ul.menu li ul li.current > a, 
#navigation ul.menu li ul li.current > span, 
#navigation ul.menu li ul li.active > a,
#navigation ul.menu li ul li.active > span,
#navigation ul.menu li ul li ul li:hover > a,
#navigation ul.menu li ul li ul li:hover > span,
#navigation ul.menu li ul li ul li.current > a, 
#navigation ul.menu li ul li ul li.current > span, 
#navigation ul.menu li ul li ul li.active > a,
#navigation ul.menu li ul li ul li.active > span,
#navigation ul.autocompleter-choices li.autocompleter-selected { 
	color: ".$buttonTextColor." !important;
	opacity: 1;
}

ul.menu li ul li:hover > a,
ul.menu li ul li:hover > span,
ul.menu li ul li.current > a, 
ul.menu li ul li.current > span, 
ul.menu li ul li.active > a,
ul.menu li ul li.active > span,
ul.menu li ul li ul li:hover > a,
ul.menu li ul li ul li:hover > span,
ul.menu li ul li ul li.current > a, 
ul.menu li ul li ul li.current > span, 
ul.menu li ul li ul li.active > a,
ul.menu li ul li ul li.active > span,
ul.autocompleter-choices li.autocompleter-selected { 
	background: ".$accentColor.";
	text-shadow: none !important;
	-webkit-border-radius: 1px;
	-moz-border-radius: 1px;
	border-radius: 1px;
}

ul.menu li:hover > a,
ul.menu li:hover > span,
ul.menu li.current > a,
ul.menu li.current > span, 
ul.menu li.active > a,
ul.menu li.active > span { 
	text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.5);
}

ul.autocompleter-choices li.autocompleter-selected,
ul.menu ul li:hover > a,
ul.menu ul li:hover > span,
ul.menu ul li.current, 
ul.menu ul li.active > a,
ul.menu ul li.active > span { 
	text-shadow: 0px -1px 0px rgba(255, 255, 255, 0.3);
}

ul.menu ul li:hover,
ul.menu ul li.current, 
ul.menu ul li.active {
	border: none;
}



/* SLIDER ELEMENTS ---------------------------*/

.flex-direction-nav li .next {
background: url('../images/slider_next.png') no-repeat center;

}

.flex-direction-nav li .prev {
		background: url('../images/slider_prev.png') no-repeat center;
}

.flex-control-nav li a {
	background: ".$header_gradient_top.";
	-webkit-box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 2px 0px rgba(0, 0, 0, 0.5); 
}


.flex-control-nav li a.active,
.flex-control-nav li a:hover {
	".ct_bgGradient($accentGradientLight, $accentGradientDark)."
	
	-webkit-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.7), 0px 1px 2px 0px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.7), 0px 1px 2px 0px rgba(0, 0, 0, 0.5); 
}


/*
.pane-sliders div.panel {
	-webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.5); 
	
	border-radius: 3px;
	padding: 5px 10px;
	margin-bottom: 2px;
}
*/


/* TEXT ------------------------------*/
h1, h1 a, h1 span, 
h2, h2 a, h2 span, 
h3, h3 a, h3 span,
h4, h4 a, h4 span,
h5, h5 a, h5 span,
.tip-title {
	color: ".$textColor.";
}

footer h1, footer h1 a, footer h1 span,
footer h2, footer h2 a, footer h2 span,
footer h3, footer h3 a, footer h3 span,
footer h4, footer h4 a, footer h4 span,
footer h5, footer h5 a, footer h5 span {
	color: ".$footer_text_color.";
}

.contact-address,
.contact-emailto,
.contact-telephone,
.contact-fax,
.contact-mobile,
.contact-webpage,
.contact-vcard {
	background-image: url(../images/icons_contactdetails_".$themeColor.".png);
	font-size: 14px;
}


/* BUTTONS, LINKS & FORM ELEMENTS ------------------------------*/

input,
button, 
#errorboxoutline a,
ul.pagenav li a,
input:hover,
button:hover, 
.ct_buttonAccent:hover,
#errorboxoutline a:hover,
ul.pagenav li a:hover {
	color: ".$buttonTextColor." !important;
}

.ct_buttonYellow, 
.ct_buttonRed, 
.ct_buttonBlue,
.ct_buttonGreen,
.ct_buttonPink,
.ct_buttonWhite,
.ct_buttonAccent,
.ct_buttonYellow:hover, 
.ct_buttonRed:hover, 
.ct_buttonBlue:hover,
.ct_buttonGreen:hover,
.ct_buttonPink:hover,
.ct_buttonWhite:hover,
.ct_buttonAccent:hover {
	color: #000000;
}

.ct_buttonBlack,
.ct_buttonBlack: hover {
	color: #cccccc;
}

input.button, 
button,
#errorboxoutline a {
	".ct_bgImageGradient('bg_btn.png', 'right', 'no-repeat', $accentGradientLight, $accentGradientDark)."
}

ul.pagenav li a,
.ct_PaginationStart,
.ct_PaginationPrevious,
.ct_PaginationNext,
.ct_PaginationEnd,
.ct_PaginationPageActive,
.content_vote input,
.ct_buttonAccent {
	".ct_bgGradient($accentGradientLight, $accentGradientDark)."
	color: ".$buttonTextColor." !important;
}

.ct_buttonYellow 
{
	color: #777 !important;
	".ct_bgGradient('#ffe400', '#af9417')."
} 

.ct_buttonRed 
{
	".ct_bgGradient('#ed0000', '#9e1815')."
} 

.ct_buttonBlue 
{
	".ct_bgGradient('#0072ff', '#29487a')."
} 

.ct_buttonGreen 
{
	".ct_bgGradient('#58d000', '#477d1d')."
} 

.ct_buttonPink 
{
	".ct_bgGradient('#ff00ea', '#af0577')."
} 

.ct_buttonBlack 
{
	".ct_bgGradient('#474747', '#000')."
} 

.ct_buttonWhite 
{
	color: #777;	
	".ct_bgGradient('#fff', '#bababa')."
} 

input[type='text'], 
input[type='password'], 
input[type='email'],
input[type='text'],
select,
textarea {
	background: ".$inputColorLight.";	
}

.moduletable_ct_darkBox input[type='text'], 
.moduletable_ct_darkBox input[type='password'], 
.moduletable_ct_darkBox input[type='email'],
.moduletable_ct_darkBox input[type='text'],
.moduletable_ct_darkBox select,
.moduletable_ct_darkBox textarea {
	background: ".$baseColor." !important;	
}



input[type='text']:hover, 
input[type='password']:hover, 
input[type='email']:hover, 
input[type='text']:focus, 
input[type='password']:focus, 
input[type='email']:focus,
select:focus, 
textarea:focus {
	-moz-box-shadow: 0px 0px 3px 0px ".$accentColor.", 0px 0px 3px 0px ".$accentColor.", 0px 0px 3px 0px ".$accentColor.", inset 1px 1px 1px rgba(0, 0, 0, 0.5);
	-webkit-box-shadow: 0px 0px 3px 0px ".$accentColor.", 0px 0px 3px 0px ".$accentColor.", 0px 0px 3px 0px ".$accentColor.", inset 1px 1px 1px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 0px 3px 0px ".$accentColor.", 0px 0px 3px 0px ".$accentColor.", 0px 0px 3px 0px ".$accentColor.", inset 1px 1px 1px rgba(0, 0, 0, 0.5);
}

/* MODULE BOX STYLES -------------------------------------*/

.moduletable_ct_darkBox {
	".ct_bgGradient($darkboxGradientLight, $darkboxGradientDark)."
}

.moduletable_ct_lightBox {	
	".ct_bgGradient($lightboxGradientLight, $lightboxGradientDark)."
}


/* SEARCH HEADER ------------------------------*/

#ct_headerSearch .search input, 
#ct_headerSearch .finder input {
	background: ".$inputColorLight.";
	background-image:url(../images/bg_inputfield_search_".$themeColor.".png);
	");
	
	if($ieVersion == "8") {
		echo("background-image:url(../images/bg_inputfield_search_".$themeColor."_ie.png);");
	}
	
	echo("
	background-repeat: no-repeat;
}

.autocompleter-choices {
	background: ".$bodyGradientLight.";
	-webkit-box-shadow: #111 0 3px 4px;
	box-shadow: #111 0 3px 4px;
}

/* LOGIN HEADER ------------------------------*/

#login-form.compact .button,
#ct_headerLogin .button {
	".ct_bgImageGradient('bg_btn_login.png', 'left', 'no-repeat', $accentGradientLight, $accentGradientDark).");
}


/* TABLES ------------------------------*/

.cat-list-row0 {
	background: rgba(".$tableRow0RGB[0].",".$tableRow0RGB[1].",".$tableRow0RGB[2].",0.25);
}
		
table.category th {
	background-color: ".$tabelHeaderBG." 
}

table.category  tr.cat-list-row0 td {
	background-color: ".$tabelRowOddBG."
}

table.category  tr.cat-list-row1 td {
	background-color: ".$tabelRowEvenBG."
}

span.highlight {
	background-color: ".ct_hsvShade($base_color, 0.25, 0)." !important;
}

/* LINK LIST ------------------------------*/

ul.latestnews li, 
ul.latestnews li:first-child {
	border-bottom: 1px dotted ".$fontColorBright1.";
}


/* TEXT COLORS ------------------------------*/
	

body {
	color: ".$fontColorBase.";
}

.title a span {
	color: ".$fontColorBase." !important;
}

label, legend {
	color: ".$fontColorBase.";
}

.moduletable_ct_linkList a {
	color: ".$fontColorBright1.";
}

.ct_tip, 
.ct_alert, 
.ct_info, 
.ct_video,
.ct_contact,
.ct_checklist,
.ct_calendar,
.ct_settings,
.ct_cart,
.ct_delivery,
.ct_sound,
.ct_map {
	color: ".$fontColorBase.";
	border-top: 1px dotted ".$fontColorBright1.";
	border-bottom: 1px dotted ".$fontColorBright1.";
}

#ct_headerSearch .search input, #ct_headerSearch .finder input {
	background-image: url(../images/bg_inputfield_search_".$themeColor.".png);
}

.ct_inlineLink {
	background-image: url(../images/icon_link_arrow_small_".$themeColor.".png);
}
.ct_inlineLink:hover {
	background-image: url(../images/icon_link_arrow_small_hover.png);
}


#ct_headerSearch .search input,
input[type='text'], 
input[type='password'],
input[type='email'], 
input[type='text'], 
input[type='password'], 
input[type='email'],
select,
textarea {
	color: ".$fontColorBase.";
}

#ct_headerSearch .search input:focus,
input[type='text']:hover, 
input[type='password']:hover,
input[type='email']:hover, 
input[type='text']:focus, 
input[type='password']:focus, 
input[type='email']:focus,
select:focus, textarea:focus {
	color: ".$fontColorBase.";
}

table.category th, 
table.category th a,
.categories-list span.item-title a,
.category .item-title a {
	color: ".$fontColorBase.";
}

#system-message dd.message ul,
#system-message dd.error ul,
#system-message dd.warning ul,
#system-message dd.notice ul,
.bfErrorMessage {
	background-color: #fff !important; 
}

.tip {
	-webkit-box-shadow: 2px 4px 5px 0px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 2px 4px 5px 0px rgba(0, 0, 0, 0.5);
	box-shadow: 2px 4px 5px 0px rgba(0, 0, 0, 0.5);
}

.tip-title {
	color: #fff;
}

.tip-text {
	color: #ddd;
}

ul.latestnews li, ul.latestnews li:first-child {
	border-bottom: 1px dotted ".$fontColorBright1.";
}

.panel {
	border-top: 1px dotted ".$fontColorBright1.";
}

ul.latestnews a {
	color: ".$fontColorBase.";
}

.article-info dd, .article-info dd a {
	color: ".$fontColorBright1.";
}

.ct_breadcrumbs span, .ct_breadcrumbs a {
	color: ".$fontColorBright1.";
}

.showHere {
	color: ".$fontColorDark1." !important;
}

a.readmore, p.readmore a {
	color: ".$fontColorDark1.";
}

ul.pagenav {
	border-top: 1px dotted ".$fontColorBright1.";
}

/*
.print-icon {
	background: url(../images/bg_icon_print_".$themeColor.".png);
}

.email-icon {
	background: url(../images/bg_icon_mail_".$themeColor.".png);
}

.edit-icon {
	background: url(../images/bg_icon_edit_".$themeColor.".png);
}
*/
");?>