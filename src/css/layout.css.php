<?php

/**
* @version 1.0
* @package kaiser
* @copyright (C) 2012 by Robin Jungermann
* @license Released under the terms of the GNU General Public License
**/

$max_sitewidth = $_GET['max_sitewidth'];
$max_sitewidth_switch = floor($max_sitewidth*0.8);

header("content-type: text/css");


echo("
html,body
{
    width: 100%;
    height: auto;
    margin: 0px;
    padding: 0px;
}

#siteWrapper {
	width: 100%;
    height: 100%;
    padding: 0px;
	margin:0 auto;
}

#siteTop {
	position: relative;
	padding-top: 10px;
	padding-bottom: 30px;
}

.wrapper {
	width: auto;
	margin: 0 auto 0 auto;
	padding: 25px;
}

header,
#system-message-container {
   height: auto;
   max-width: ".$max_sitewidth."px;
   margin-left: auto;
   margin-right: auto;
   padding: 0;
}

#ct_headerTools {
    display: inline;
    margin:15px 0;
    min-height:25px;
}

#ct_headerLogin, 
#ct_headerSearch {
    float:right;
    margin-left:25px;
    position:relative;
    width:auto;
}


.ct_breadcrumbs {
	height: auto;
	min-height: 12px;
	padding: 10px 25px;
}

#main {
	position: relative;
	display: block;
	height:auto;
	max-width: ".$max_sitewidth."px;
	overflow: visible;
	padding: 0;
	margin-left: auto;
	margin-right: auto;
	top: -38px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
}

#main section {
	margin-bottom: 0;
	padding: 0;
}

.container:after {
  content: ".";
  display: block;
  clear: both;
  font-size: 0;
  height: 0;
  visibility: hidden;
}

footer {
	display: block;
	height:auto;
	overflow: visible;
}

footer section {
	display: block;
	height:auto;
	max-width: ".($max_sitewidth-50)."px;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
} 

.footerCopyright {
	min-height: 18px;
	padding: 10px 20px;
	-webkit-border-radius: 0 0 2px 2px;
	-moz-border-radius: 0 0 2px 2px;
	border-radius: 0 0 2px 2px;
}

.footerCopyright p {
	margin: 0;
	padding: 0;
}

.siteLogo {
	display: inline;
	float: left;
	width: auto;
	height: auto;
	min-height: 30px;
	margin-bottom:-20px;
}

.siteLogo img {
	max-width: 100%;
}

/*- GRID */

.row {
	display: block;
	height:auto;
	width: 100%;
}

.row > div {
	display: table-cell;
	vartical-align: top;
	float: left;
	position:relative;
	height: auto;
	margin-right: 1.875%;
	margin-bottom: 1.875%;
	padding-top: 1%;
}

.row > .moduletable_ct_darkBox,
.row > .moduletable_ct_lightBox {
	padding: 1%;
}

.moduleContent {
	display: block;
}

.moduleContent h1,
.moduleContent h2,
.moduleContent h3,
.moduleContent h4,
.moduleContent h5,
.moduleContent h6 {
	margin-top: 0;
}

.columnWidth_1 div { width: 100%; }
.columnWidth_2 div { width: 49.0625%; }
.columnWidth_3 div { width: 32.0833333333%; }
.columnWidth_4 div { width: 23.59375%; }
.columnWidth_5 div { width: 18.5%; }
.columnWidth_6 div { width: 15.10416666666667%; }

.columnWidth_1 .moduletable_ct_darkBox,
.columnWidth_1 .moduletable_ct_lightBox 		{ width: 98%; }
.columnWidth_2 .moduletable_ct_darkBox,
.columnWidth_2 .moduletable_ct_lightBox 		{ width: 47.0625%; }
.columnWidth_3 .moduletable_ct_darkBox,
.columnWidth_3 .moduletable_ct_lightBox			{ width: 30.0833333333%; }
.columnWidth_4 .moduletable_ct_darkBox,
.columnWidth_4 .moduletable_ct_lightBox 		{ width: 21.59375%; }
.columnWidth_5 > div.moduletable_ct_darkBox,
.columnWidth_5 > div.moduletable_ct_lightBox 	{ width: 16.5%;}
.columnWidth_6 > div.moduletable_ct_darkBox,
.columnWidth_6 .moduletable_ct_lightBox			{ width: 13.10416666666667%; }


.row > div.span_6 							{ width: 100%; }
.row > .moduletable_ct_darkBox > .span_6,
.row > .moduletable_ct_lightBox > .span_6 	{ width: 98%; }

.row > div.span_5 							{ width: 83.020833333%; }
.row > .moduletable_ct_darkBox > .span_5,
.row > .moduletable_ct_lightBox > .span_5 	{ width: 81.020833333%; }

.row > div.span_4 							{ width: 66.025%; }
.row > .moduletable_ct_darkBox > .span_5,
.row > .moduletable_ct_lightBox > .span_5 	{ width: 64.025%; }

.row > div.span_3 							{ width: 49.05%; }
.row > .moduletable_ct_darkBox > .span_3,
.row > .moduletable_ct_lightBox > .span_3 	{ width: 47.05%; }

.row > div.span_2 							{ width: 32.08333333333334%; }
.row > .moduletable_ct_darkBox > .span_2,
.row > .moduletable_ct_lightBox > .span_2 	{ width: 28.08333333333334%; }

.row > div.span_1 							{width: 15.10416666666667%; }
.row > .moduletable_ct_darkBox > .span_1,
.row > .moduletable_ct_lightBox > .span_1 	{ 13,10416666666667%; }


.row div:last-child,
.end,
.span_6 {
        margin-right: 0%;
}

.row > div > div {
	width: 100% !important;
}

.row div img {
	max-width: 100%;
	display: inline;
}


.ct_left, .ct_right {
	width: 25%;
	margin-bottom: 1.875%;
	padding: 0;
}

.ct_left {
	margin-right: 1.875%;	
}

.ct_right {
	margin-right: 0% !important;	
}

.ct_componentContent {
	position: relative;
	display: inline;
	float: left;
	height: auto;
	z-index: 0;
	margin-right: 1.875%;
	margin-bottom: 1.875%;
	padding: 0;
}

.ct_componentWidth_2 { width: 46.25% !important }

.ct_componentWidth_3 { width: 71.25% !important }

.ct_componentWidth_4 { width: 100% !important }

.ct_componentContent p:first-child {
	margin-top: 0px;
}

.pretext {
	width: 100% !important;
}


/* SLIDER -------------------------------------*/

#ct_sliderWrapper, #ct_sliderShadow {
	max-width: ".$max_sitewidth."px;*/
	overflow: hidden;
}

#ct_sliderWrapper 
{
	position: relative;
	z-index: 300;
	height: auto;
	margin: auto;
}
#ct_sliderShadow
{
	width: auto;
	height: auto;
	margin-left: auto;
	margin-righ: auto;
}
#ct_sliderShadow img {
	vertical-align: top;
	position: relative;
	top: 0;
}
#ct_sliderContent
{
	height: 100%;
	margin: auto;
}
#ct_sliderContent .moduletable
{
	background-color: transparent !important;
}

.flex-control-nav li a {
	height: 10px;
	width: 20px;
	border-radius: 2px;
}

/* BANNERS -----*/

.banneritem img {
	width: 100%;
}



/* Smartphones (portrait and landscape) ----------- */

@media only screen
and (min-width : 320px)
and (max-width : 480px) {

	.wrapper {
		padding: 5px;
	}
	
	.ct_breadcrumbs {
		padding: 10px 10px;
	}
	
	#main {
		padding: 0;
	}
	
  	.row > div {
		margin: 0 0 6% 1%; 
	}
	.columnWidth_6 div, 
	.columnWidth_5 div,
	.columnWidth_4 div, 
	.columnWidth_3 div,
	.columnWidth_2 div,
	.columnWidth_1 div { 
		width: 99%;
	}
	
	.row > div.span_6,
	.row > div.span_5,
	.row > div.span_4,
	.row > div.span_3,
	.row > div.span_2, 
	.row > div.span_1 { 
		width: 99% !important;
	}
	
	.moduletable_ct_darkBox .span_6,
	.moduletable_ct_lightBox .span_6,
	.moduletable_ct_darkBox .span_5,
	.moduletable_ct_lightBox .span_5,
	.moduletable_ct_darkBox .span_4,
	.moduletable_ct_lightBox .span_4,
	.moduletable_ct_darkBox .span_3,
	.moduletable_ct_lightBox .span_3,
	.moduletable_ct_darkBox .span_2,
	.moduletable_ct_lightBox .span_2,
	.moduletable_ct_darkBox .span_1,
	.moduletable_ct_lightBox .span_1 {
		width: 95% !important;
		background: #00ff00;
	}
	
	.moduletable_ct_darkBox,
	.moduletable_ct_lightBox {
		padding: 2% !important;
	}

	#ct_sliderWrapper, #ct_sliderShadow {
		width: 98%;
		overflow: hidden;
	}
	
	.flex-caption {
		line-height: 18px !important;
		margin-bottom: 8px !important;
		margin-left: 8px !important;
		padding: 0 0 5px 0 !important;
		width:auto !important;
	}
	
	.flex-caption-text {
		font-size: 18px;
	}
	
	.flex-direction-nav {
		display: none;
	}
	
	.flex-control-nav li a {
		height: 20px;
		width: 30px;
		border-radius: 2px;
	}
	
	.siteLogo {
		display: block;
		width: 100%;
		float: none;
		position: relative;
		text-align: center;
		margin-top: 20px;
	}
	
	#navigation {
		float: none;
		display: block:
	}
	
	#ct_headerSearch,
	#ct_headerLogin {
		display: block;
		float: none;
		position: relative !important;
		top: 0;
		right: auto;
		width: 100%;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 0;
		margin-top: 10px;
	}
	
	#ct_headerSearch input,
	#ct_headerLogin .moduletable,
	#navigation select
	{
		display: block !important;
		float: none;
		width: 300px !important;
		position: relative;
		margin-left: auto !important;
		margin-right: auto !important;
	}
	
	#ct_headerLogin input[type='text'] {
		width: 128px !important;
	}
	
	ul.autocompleter-choices {
		width: 300px !important;
		margin-left: 0 !important;
	}
	
    .row > div {
		margin-left: 0%;
		margin-right: 1%;
	}
	
	#main section {
		padding: 2%;
		padding-top: 3%;
	}
	
	.columnWidth_6 div, 
	.columnWidth_5 div,
	.columnWidth_4 div, 
	.columnWidth_3 div,
	.columnWidth_2 div,
	.columnWidth_1 div { width: 99%;}
	
	.row > div.span_6,
	.row > div.span_5,
	.row > div.span_4,
	.row > div.span_3,
	.row > div.span_2, 
	.row > div.span_1 { width: 99% !important }
	
	.row > div { 
		margin-bottom: 6%;
	}
	
	.ct_left, .ct_right { 
		width: 99%; 
		margin-bottom: 1.875%;
		padding: 0;
	}
	
	.ct_componentContent {
		position: relative;
		display: inline;
		float: left;
		height: auto;
		z-index: 0;
		margin-right: 1.875%;
		margin-bottom: 1.875%;
	}
	
	.ct_componentWidth_2 { width: 98% !important }
	
	.ct_componentWidth_3 { width: 98% !important }
	
	.ct_componentWidth_4 { width: 98% !important }
	
	.moduletable_ct_darkBox,
	.moduletable_ct_lightBox {
		width: 94% !important;
		padding: 3% !important;
	}
	
	.siteLogo {
		display: block;
		width: 100%;
		float: none;
		position: relative;
		text-align: center;
	}
  
	#ct_sliderWrapper, #ct_sliderShadow {
		width: 98%;
		overflow: hidden;
	}
	
}


/* iPad in portrait mode ------------------*/
@media only screen
and (min-width : 481px)
and (max-width : 786px) {
	
	.wrapper {
		padding: 10px;
	}
	
	.ct_breadcrumbs {
		padding: 10px 15px;
	}
	
	.siteLogo {
		display: block;
		width: 100%;
		float: none;
		position: relative;
		text-align: center;
		margin-top: 20px;
	}
	
	#navigation {
		float: none;
		display: block:
	}
	
	#ct_headerSearch,
	#ct_headerLogin {
		display: block;
		float: none;
		position: relative !important;
		top: 0;
		right: auto;
		width: 100%;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 0;
		margin-top: 10px;
	}
	
	#ct_headerSearch input,
	#ct_headerLogin .moduletable,
	#navigation select
	{
		display: block !important;
		float: none;
		width: 300px !important;
		position: relative;
		margin-left: auto !important;
		margin-right: auto !important;
	}
	
	#ct_headerLogin input[type='text'] {
		width: 128px !important;
	}
	
	ul.autocompleter-choices {
		width: 300px !important;
		margin-left: 0 !important;
	}

	
	#main section {
		margin-left: 0;
		margin-right: 0;
	}
  
  	.row > div {
		margin-left: 0.9375%;
		margin-right: 0.9375%;
	}
	
	.columnWidth_1 div, 
	.columnWidth_2 div { 
		width: 98%; 
	}
	
	.columnWidth_3 div, 
	.columnWidth_4 div,
	.columnWidth_5 div, 
	.columnWidth_6 div { 
		width: 48.125%; 
	}
	
	.row > div.span_1, 
	.row > div.span_2 { 
		width: 98% !important;
	}
	
	.row > div.span_3, 
	.row > div.span_4,
	.row > div.span_5, 
	.row > div.span_6 { 
		width: 48.125% !important;
	}
		
	.columnWidth_1 div > .moduletable_ct_darkBox, 
	.columnWidth_1 div > .moduletable_ct_lightBox, 
	.columnWidth_2 div > .moduletable_ct_darkBox, 
	.columnWidth_2 div > .moduletable_ct_lightBox { 
		width: 96%;
	}
	
	.columnWidth_3 > .moduletable_ct_darkBox, 
	.columnWidth_3 > .moduletable_ct_lightBox,
	.columnWidth_4 > .moduletable_ct_darkBox, 
	.columnWidth_4 > .moduletable_ct_lightBox,
	.columnWidth_5 > .moduletable_ct_darkBox, 
	.columnWidth_5 > .moduletable_ct_lightBox,
	.columnWidth_6 > .moduletable_ct_darkBox, 
	.columnWidth_6 > .moduletable_ct_lightBox { 
		width: 46.125% !important;
	}
	
	.row div:last-child,
	.end,
	.span_1 {	
		margin-right: 0%;
	}
	
	.columnWidth_6 > div, 
	.columnWidth_5 > div,
	.columnWidth_4 > div, 
	.columnWidth_3 > div,
	.columnWidth_2 > div,
	.columnWidth_1 > div { 
		border-bottom: none;
		margin-bottom: 1,875%;
	}
	
	.ct_left, 
	.ct_right { 
		width: 98%; 
		margin-bottom: 1.875%;
		padding: 0;
	}

	.ct_left {
		margin-left: 0;
		margin-right: 0;
	}
	
	.ct_componentContent {
		position: relative;
		display: inline;
		float: left;
		height: auto;
		z-index: 0;
		margin-right: 1.875%;
		margin-bottom: 1.875%;
	}
	
	.ct_componentWidth_2 { width: 98% !important }
	.ct_componentWidth_3 { width: 98% !important }
	.ct_componentWidth_4 { width: 98% !important }
  
	#ct_sliderWrapper, #ct_sliderShadow {
		width: 98%;
		overflow: hidden;
	}
}

div.img_caption {
	background: -moz-linear-gradient(center top , #FAFAFA 0%, #F0F0F0 100%) repeat scroll 0 0 transparent;
	border-radius: 2px 2px 2px 2px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
    #padding: 12px 10px 20px;
    width: auto;
	
	font-weight:bold;
	text-align:center;
	line-hight:1em;
	#background: none repeat scroll 0 0 #E8E8E8;
	margin-top: 0px; 
	margin-bottom: 0px;
	padding-bottom: 5px;
	text-decoration:none;
	color: #4C4C4C;
}
p.img_caption {
	padding-bottom: 0px;
	text-decoration:none;
	margin:0px
}	
");
?>