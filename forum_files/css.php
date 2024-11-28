@charset "UTF-8";

/* --- xenforo.css --- */

/*
 * YUI reset-fonts.css
 *
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;text-decoration:none}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}

/*
 * Firefox broken image placeholder support.
 *
http://lab.gmtplusone.com/image-placeholder/
*/ 
img:-moz-broken, img:-moz-user-disabled { -moz-force-broken-image-icon: 1; }
img:-moz-broken:not([width]), img:-moz-user-disabled:not([width]) { width: 50px; }
img:-moz-broken:not([height]), img:-moz-user-disabled:not([height]) { height: 50px; }

/*
 * XenForo Core CSS
 *
 */

html
{
	background-color: rgb(24, 24, 24);

	overflow-y: scroll !important;
}

body
{
	-webkit-text-size-adjust: 100%;
	-moz-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	text-size-adjust: 100%;

	font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
color: rgb(255, 255, 255);
word-wrap: break-word;
line-height: 1.4;

}

/* counteract the word-wrap setting in 'body' */
pre, textarea
{
	word-wrap: normal;
}

[dir=auto] { text-align: left; }

a:link,
a:visited
{
	color: rgb(255, 255, 0);
text-decoration: none;

}

	a[href]:hover
	{
		color: rgb(255, 255, 170);
text-decoration: underline;

	}
	
	a:hover
	{
		_text-decoration: underline;
	}
	
	a.noOutline
	{
		outline: 0 none;
	}
	
	.emCtrl,
	.messageContent a
	{
		border-radius: 5px;
	}
	
		.emCtrl:hover,
		.emCtrl:focus,
		.ugc a:hover,
		.ugc a:focus
		{
			/*position: relative;
			top: -1px;*/
			text-decoration: none;
			box-shadow: 5px 5px 7px #CCCCCC;
			outline: 0 none;
		}
		
			.emCtrl:active,
			.ugc a:active
			{
				position: relative;
				top: 1px;
				box-shadow: 2px 2px 7px #CCCCCC;
				outline: 0 none;
			}

	.ugc a:link,
	.ugc a:visited
	{
		color: rgb(255, 131, 0);
padding: 0 3px;
margin: 0 -3px;
border-radius: 6px;

	}
	
		.ugc a:hover,
		.ugc a:focus
		{
			color: rgb(202, 202, 202);
box-shadow: none;

		}
		
img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}
		
/** title bar **/

.titleBar
{
	margin-bottom: 10px;
}

/* clearfix */ .titleBar { zoom: 1; } .titleBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.titleBar h1
{
	font-size: 18pt;
overflow: hidden;
zoom: 1;

}

	.titleBar h1 em
	{
		color: rgb(202, 202, 202);
	}
		
	.titleBar h1 .Popup
	{
		float: left;
	}

#pageDescription
{
	font-size: 12px;
color: rgb(202, 202, 202);
margin-top: 2px;

}

.topCtrl
{
	float: right;
}
	
	.topCtrl h2
	{
		font-size: 12pt;
	}
		
/** images **/

img
{
	-ms-interpolation-mode: bicubic;
}

a.avatar 
{ 
	*cursor: pointer; /* IE7 refuses to do this */ 
} 

.avatar img,
.avatar .img,
.avatarCropper
{
	background-color: rgb(24, 24, 24);
padding: 2px;
border: 1px solid rgb(24, 24, 12);
border-radius: 4px;

}

.avatar.plainImage img,
.avatar.plainImage .img
{
	border: none;
	border-radius: 0;
	padding: 0;
	background-position: left top;
}

	.avatar .img
	{
		display: block;
		background-repeat: no-repeat;
		background-position: 2px 2px;
		text-indent: 1000px;
		overflow: hidden;
		white-space: nowrap;
		word-wrap: normal;
	}

	.avatar .img.s { width: 48px;  height: 48px;  }
	.avatar .img.m { width: 96px;  height: 96px;  }
	.avatar .img.l { width: 150px; height: 150px; }

.avatarCropper
{
	width: 150px;
	height: 150px;
	direction: ltr;
}

.avatarCropper a,
.avatarCropper span,
.avatarCropper label
{
	overflow: hidden;
	position: relative;
	display: block;
	width: 150px;
	height: 150px;
}

.avatarCropper img
{
	padding: 0;
	border: none;
	border-radius: 0;

	position: relative;
	display: block;
}

.avatarScaler img
{
	max-width: 150px;
	_width: 150px;
}

/* ***************************** */

body .dimmed, body a.dimmed, body .dimmed a { color: rgb(202, 202, 202); }
body .muted, body a.muted, body .muted a { color: rgb(202, 202, 202); }
body .faint, body a.faint, body .faint a { color: rgb(202, 202, 202); }

.highlight { font-weight: bold; }

.concealed,
.concealed a,
.cloaked,
.cloaked a
{
	text-decoration: inherit !important;
	color: inherit !important;
	*clear:expression( style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

a.concealed:hover,
.concealed a:hover
{
	text-decoration: underline !important;
}

/* ***************************** */

.xenTooltip
{
	font-size: 12px;
color: rgb(255, 255, 255);
background: url(rgba.php?r=0&g=0&b=0&a=204); background: rgba(0, 0, 0, 0.8); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#CC000000,endColorstr=#CC000000);
padding: 5px 10px;
border-radius: 6px;
display: none;
z-index: 15000;
cursor: default;

}

.xenTooltip a,
.xenTooltip a:hover
{
	color: rgb(255, 255, 255);
	text-decoration: underline;
}

	.xenTooltip .arrow
	{
		border-top:  6px solid rgb(0, 0, 0); border-top:  6px solid rgba(0, 0, 0, 0.8); _border-top:  6px solid rgb(0, 0, 0);
border-right: 6px solid transparent;
border-bottom: 1px none black;
border-left: 6px solid transparent;
position: absolute;
bottom: -6px;
line-height: 0px;
width: 0px;
height: 0px;

		left: 9px;
		
		/* Hide from IE6 */
		_display: none;
	}

	.xenTooltip.flipped .arrow
	{
		left: auto;
		right: 9px;
	}

.xenTooltip.statusTip
{
	/* Generated by XenForo.StatusTooltip JavaScript */
	padding: 5px 10px;
line-height: 17px;
width: 250px;
height: auto;

}

	.xenTooltip.statusTip .arrow
	{
		border: 6px solid transparent;
border-right-color:  rgb(0, 0, 0); border-right-color:  rgba(0, 0, 0, 0.8); _border-right-color:  rgb(0, 0, 0);
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;
right: auto;

	}
			
.xenTooltip.iconTip { margin-left: -6px; }
.xenTooltip.iconTip.flipped { margin-left: 7px; }

/* ***************************** */

#PreviewTooltip
{
	display: none;
}

.xenPreviewTooltip
{
	border: 10px solid rgb(45, 45, 45);
border-radius: 8px;
position: relative;
box-shadow: 0px 12px 25px rgba(0,0,0, 0.5);
width: 400px;

	
	display: none;	
	z-index: 15000;
	cursor: default;
	
	border-color:  rgb(45, 45, 45); border-color:  rgba(45, 45, 45, 0.5); _border-color:  rgb(45, 45, 45);
}

	.xenPreviewTooltip .arrow
	{
		border-top:  15px solid rgb(3,42,70); border-top:  15px solid rgba(3,42,70, 0.25); _border-top:  15px solid rgb(3,42,70);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
bottom: -15px;
left: 22px;

		
		_display: none;
	}
	
		.xenPreviewTooltip .arrow span
		{
			border-top: 15px solid rgb(16, 16, 16);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
top: -17px;
left: -15px;

		}

	.xenPreviewTooltip .section,
	.xenPreviewTooltip .sectionMain,
	.xenPreviewTooltip .primaryContent,
	.xenPreviewTooltip .secondaryContent
	{
		margin: 0;
	}
	
		.xenPreviewTooltip .previewContent
		{
			overflow: hidden; zoom: 1;
			min-height: 1em;
		}

/* ***************************** */

.importantMessage
{
	margin: 10px 0;
	color: rgb(55, 55, 55);
	background-color: rgb(232, 232, 232);
	text-align: center;
	padding: 5px;
	border-radius: 5px;
	border: solid 1px rgb(156, 156, 156);
}

.importantMessage a
{
	font-weight: bold;
	color: rgb(55, 55, 55);
}

/* ***************************** */

.section
{
	margin: 10px auto;

}

.sectionMain
{
	background-color: rgb(16, 16, 16);
padding: 10px;
margin: 10px auto;
border: 1px solid rgb(24, 24, 12);
border-radius: 6px;

}

.heading,
.xenForm .formHeader
{
	font-weight: bold;
font-size: 14px;
color: rgb(255, 255, 255);
background-color: rgb(47, 47, 24);
padding: 5px 10px;
margin-bottom: 3px;
border-bottom: 1px solid rgb(47, 47, 24);
border-top-left-radius: 6px;
border-top-right-radius: 6px;

}

	.heading a { color: rgb(255, 255, 255); }

.subHeading
{
	font-weight: bold;
font-size: 13px;
font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
color: rgb(255, 255, 255);
background-color: rgb(47, 47, 24);
padding: 9px 10px;
margin: 3px auto 0;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#5b5b33+0,414121+100 */
background: rgb(91,91,51); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(91,91,51,1) 0%, rgba(65,65,33,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(91,91,51,1) 0%,rgba(65,65,33,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(91,91,51,1) 0%,rgba(65,65,33,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5b5b33', endColorstr='#414121',GradientType=0 ); /* IE6-9 */

}

	.subHeading a { color: rgb(255, 255, 255); }

.textHeading,
.xenForm .sectionHeader
{
	font-weight: bold;
color: rgb(255, 255, 255);
padding-bottom: 2px;
margin: 10px auto 5px;
border-bottom: 1px solid rgb(24, 24, 12);

}

.xenForm .sectionHeader,
.xenForm .formHeader
{
	margin: 10px 0;
}

.primaryContent > .textHeading:first-child,
.secondaryContent > .textHeading:first-child
{
	margin-top: 0;
}

.larger.textHeading,
.xenForm .sectionHeader
{
	color: rgb(38, 38, 38);
	font-size: 11pt;
	margin-bottom: 6px;
}

	.larger.textHeading a,
	.xenForm .sectionHeader a
	{
		color: rgb(38, 38, 38);
	}

.primaryContent
{
	background-color: rgb(16, 16, 16);
padding: 10px;
border-bottom: 1px solid rgb(24, 24, 12);

}

	.primaryContent a
	{
		color: rgb(255, 255, 0);

	}

.secondaryContent
{
	background-color: rgb(16, 16, 16);
padding: 10px;
border-bottom: 1px solid rgb(24, 24, 12);

}

	.secondaryContent a
	{
		color: rgb(255, 255, 0);

	}

.sectionFooter
{
	overflow: hidden; zoom: 1;
	font-size: 12px;
color: rgb(202, 202, 202);
background-color: rgb(48, 48, 24);
padding: 9px 10px;
border-bottom: 1px solid rgb(24, 24, 12);
line-height: 16px;

}

	.sectionFooter a { color: rgb(202, 202, 202); }

	.sectionFooter .left
	{
		float: left;
	}

	.sectionFooter .right
	{
		float: right;
	}

/* used for section footers with central buttons, esp. in report viewing */

.actionList
{
	text-align: center;
}

/* left-right aligned options */

.opposedOptions
{
	overflow: hidden; zoom: 1;
}
	
	.opposedOptions .left
	{
		float: left;
	}
	
	.opposedOptions .right
	{
		float: right;
	}

.columns
{
	overflow: hidden; zoom: 1;
}

	.columns .columnContainer
	{
		float: left;
	}
	
		.columns .columnContainer .column
		{
			margin-left: 3px;
		}
		
		.columns .columnContainer:first-child .column
		{
			margin-left: 0;
		}

.c50_50 .c1,
.c50_50 .c2 { width: 49.99%; }

.c70_30 .c1 { width: 70%; }
.c70_30 .c2 { width: 29.99%; }

.c60_40 .c1 { width: 60%; }
.c60_40 .c2 { width: 39.99%; }

.c40_30_30 .c1 { width: 40%; }
.c40_30_30 .c2,
.c40_30_30 .c3 { width: 29.99%; }

.c50_25_25 .c1 { width: 50%; }
.c50_25_25 .c2,
.c50_25_25 .c3 { width: 25%; }

/* ***************************** */
/* Basic Tabs */

.tabs
{
	font-size: 12px;
background-color: rgb(33, 33, 17);
padding: 0 10px;
border-bottom: 1px solid rgb(24, 24, 12);
word-wrap: normal;
min-height: 23px;
_height: 23px;

	
	display: table;
	width: 100%;
	*width: auto;
	box-sizing: border-box;
}

.tabs li
{
	float: left;
}

.tabs li a,
.tabs.noLinks li
{
	color: rgb(255, 255, 255);
text-decoration: none;
background-color: rgb(24, 24, 12);
padding: 0 8px;
margin-right: -1px;
margin-bottom: -1px;
border: 1px solid rgb(24, 24, 12);
border-top-left-radius: 6px;
border-top-right-radius: 6px;
display: inline-block;
line-height: 40px;
cursor: pointer;
outline: 0 none;
white-space: nowrap;
word-wrap: normal;
height: 40px;

}

.tabs li:hover a,
.tabs.noLinks li:hover
{
	color: rgb(202, 202, 202);
text-decoration: none;
background-color: rgb(16, 16, 16);
		
}

.tabs li.active a,
.tabs.noLinks li.active
{
	color: rgb(255, 131, 0);
background-color: rgb(24, 24, 24);
padding-bottom: 1px;
border-bottom: 1px none black;

}

/* Tabs inside forms */

.xenForm .tabs,
.xenFormTabs
{
	padding: 5px 30px 0;
}


@media (max-width:480px)
{
	.Responsive .tabs li
	{
		float: none;
	}

	.Responsive .tabs li a,
	.Responsive .tabs.noLinks li
	{
		display: block;
	}
	
	.Responsive .tabs
	{
		display: flex;
		display: -webkit-flex;
		flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
	}
	
	.Responsive .tabs li
	{
		flex-grow: 1;
		-webkit-flex-grow: 1;
		text-align: center;
	}
	
	.Responsive .xenForm .tabs,
	.Responsive .xenFormTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}
}


/* ***************************** */
/* Popup Menus */

.Popup
{
	position: relative;
}

	.Popup.inline
	{
		display: inline;
	}
	
/** Popup menu trigger **/

.Popup .arrowWidget
{
	/* circle-arrow-down */
	color: rgb(50, 50, 50);
background-color: transparent;
margin-top: -2px;
margin-left: 2px;
display: inline-block;
*margin-top: 0;
vertical-align: middle;
width: 13px;
height: 14px;

}

.PopupOpen .arrowWidget
{
	/* circle-arrow-up */
	
}

.Popup .PopupControl,
.Popup.PopupContainerControl
{
	display: inline-block;
	cursor: pointer;
}

	.Popup .PopupControl:hover,
	.Popup.PopupContainerControl:hover
	{
		color: rgb(70, 70, 70);
text-decoration: none;
background-color: rgb(24, 24, 12);

	}

	.Popup .PopupControl:focus,
	.Popup .PopupControl:active,
	.Popup.PopupContainerControl:focus,
	.Popup.PopupContainerControl:active
	{
		outline: 0;
	}
	
	.Popup .PopupControl.PopupOpen,
	.Popup.PopupContainerControl.PopupOpen
	{
		color: rgb(47, 47, 24);
background-color: rgb(255, 255, 255);
border-top-left-radius: 4px;
border-top-right-radius: 4px;
border-bottom-right-radius: 0px;
border-bottom-left-radius: 0px;

	}
	
	.Popup .PopupControl.BottomControl.PopupOpen,
	.Popup.PopupContainerControl.BottomControl.PopupOpen
	{
		border-top-left-radius: 0px;
		border-top-right-radius: 0px;
		border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
	}
		
		.Popup .PopupControl.PopupOpen:hover,
		.Popup.PopupContainerControl.PopupOpen:hover
		{
			text-decoration: none;
		}
		
/** Menu body **/

.Menu
{
	/*background-color: rgb(59, 59, 59);*/
	
	font-size: 12px;
background-color: rgb(16, 16, 16);
border: 1px solid rgb(16, 16, 16);
overflow: hidden;
box-shadow: 0px 5px 5px rgba(0,0,0, 0.3);

	
	min-width: 200px;
	*width: 200px;
	
	/* makes menus actually work... */
	position: absolute;
	z-index: 7500;
	display: none;
}

/* allow menus to operate when JS is disabled */
.Popup:hover .Menu
{
	display: block;
}

.Popup:hover .Menu.JsOnly
{
	display: none;
}

.Menu.BottomControl
{
	border-top-width: 1px;
	border-bottom-width: 3px;
	box-shadow: 0px 0px 0px transparent;
}

	.Menu > li > a,
	.Menu .menuRow
	{
		display: block;
	}
	
.Menu.inOverlay
{
	z-index: 10000;
}
		
/* Menu header */

.Menu .menuHeader
{
	overflow: hidden; zoom: 1;
}

.Menu .menuHeader h3
{
	font-size: 14px;

}

.Menu .menuHeader .muted
{
	font-size: 12px;

}

/* Standard menu sections */

.Menu .primaryContent
{
	background-color: rgba(16, 16, 16, 0.96);
}

.Menu .secondaryContent
{
	background-color: rgba(16, 16, 16, 0.96);
}

.Menu .sectionFooter
{
	background-color: rgba(48, 48, 24, 0.9);
}

/* Links lists */

.Menu .blockLinksList
{	
	max-height: 400px;
	overflow: auto;
}

/* form popups */

.formPopup
{
	width: 250px;
	background-color: rgb(24, 24, 24);
}

	.formPopup form,
	.formPopup .ctrlUnit
	{
		margin: 5px auto;
	}
	
		.formPopup .ctrlUnit
		{
		}
		
	.formPopup .textCtrl,
	.formPopup .button
	{
		width: 232px;
	}
		
	.formPopup .ctrlUnit > dt label
	{
		display: block;
		margin-bottom: 2px;
	}
		
	.formPopup .submitUnit dd
	{
		text-align: center;
	}
	
		.formPopup .ctrlUnit > dd .explain
		{
			margin: 2px 0 0;
		}
	
	.formPopup .primaryControls
	{
		zoom: 1;
		white-space: nowrap;
		word-wrap: normal;
		padding: 0 5px;
	}
	
		.formPopup .primaryControls input.textCtrl
		{
			margin-bottom: 0;
		}
	
	.formPopup .secondaryControls
	{
		padding: 0 5px;
	}
	
		.formPopup .controlsWrapper
		{
			background-color: rgb(24, 24, 12);
			border-radius: 5px;
			padding: 5px;
			margin: 5px 0;
			font-size: 11px;
		}

			.formPopup .controlsWrapper .textCtrl
			{
				width: 222px;
			}
	
	.formPopup .advSearchLink
	{
		display: block;
		text-align: center;
		padding: 5px;
		font-size: 11px;
		border-radius: 5px;
		border: 1px solid rgb(24, 24, 12);
		background-color: rgb(68, 68, 68);
	}
	
		.formPopup .advSearchLink:hover
		{
			background-color: rgb(24, 24, 12);
			text-decoration: none;
		}

/* All overlays must have this */
.xenOverlay
{
	display: none;
	z-index: 10000;
	width: 90%;
	box-sizing: border-box;
	max-width: 690px; /*calc: 90=overlay padding+borders*/
}

	.xenOverlay .overlayScroll
	{
		max-height: 400px;
		overflow: auto;
	}
	
	.xenOverlay .overlayScroll.ltr
	{
		direction: ltr;
	}
	
	.xenOverlay .overlayScroll .sortable-placeholder
	{
		background-color: rgb(38, 38, 38);
	}
	
	.xenOverlay .overlayContain
	{
		overflow-x: auto;
	}
	
	.xenOverlay .overlayContain.ltr
	{
		direction: ltr;
	}

.overlayOnly /* needs a bit more specificity over regular buttons */
{
	display: none !important;
}

	.xenOverlay .overlayOnly
	{
		display: block !important;
	}
	
	.xenOverlay input.overlayOnly,
	.xenOverlay button.overlayOnly,
	.xenOverlay a.overlayOnly
	{
		display: inline !important;
	}
	
	.xenOverlay a.close 
	{
		font-size: 23px;
color: rgb(173, 51, 53);
background-color: rgb(255, 255, 255);
border-radius: 50%;
position: absolute;
right: 10px;
top: 8px;
cursor: pointer;
text-indent: 0;
text-align: center;
line-height: 1.20;
width: 16px;
height: 16px;

	}
	
.xenOverlay .nonOverlayOnly
{
	display: none !important;
}

/* Generic form overlays */

.xenOverlay .formOverlay
{
	color: #eee;
background: url(rgba.php?r=0&g=0&b=0&a=191); background: rgba(0,0,0, 0.75); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#BF000000,endColorstr=#BF000000);
padding: 15px 25px;
border:  20px solid rgb(0,0,0); border:  20px solid rgba(0,0,0, 0.25); _border:  20px solid rgb(0,0,0);
border-radius: 20px;
box-shadow: 0px 25px 50px rgba(0,0,0, 0.5);
_zoom: 1;

	margin: 0;
}

	.Touch .xenOverlay .formOverlay
	{
		background: rgb(0, 0, 0);
		box-shadow: none;
	}

	.xenOverlay .formOverlay a.muted,
	.xenOverlay .formOverlay .muted a
	{
		color: rgb(202, 202, 202);
	}

	.xenOverlay .formOverlay .heading
	{
		font-weight: bold;
font-size: 13px;
color: rgb(255, 255, 255);
background-color: rgb(47, 47, 24);
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid rgb(47, 47, 24);
border-radius: 6px;

	}

	.xenOverlay .formOverlay .subHeading
	{
		font-weight: bold;
font-size: 12px;
color: rgb(255, 255, 255);
background-color: rgb(50, 50, 50);
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid rgb(70, 70, 70);
border-radius: 4px;

	}
	
	.xenOverlay .formOverlay .textHeading
	{
		color: rgb(255, 255, 255);

	}
	
	.xenOverlay .formOverlay > p
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	.xenOverlay .formOverlay .textCtrl
	{
		color: rgb(202, 202, 202);
background-color: black;
border-color: rgb(38, 38, 38);

	}

	.xenOverlay .formOverlay .textCtrl option
	{
		background-color: black;
	}

	.xenOverlay .formOverlay .textCtrl:focus,
	.xenOverlay .formOverlay .textCtrl.Focus
	{
		background: rgb(45, 45, 45) none;

	}

	.xenOverlay .formOverlay .textCtrl:focus option
	{
		background: rgb(45, 45, 45) none;
	}

	.xenOverlay .formOverlay .textCtrl.disabled
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);

	}

	.xenOverlay .formOverlay .textCtrl.disabled option
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);
	}

	.xenOverlay .formOverlay .textCtrl.prompt
	{
		color: rgb(160,160,160);

	}

	.xenOverlay .formOverlay .ctrlUnit > dt dfn,
	.xenOverlay .formOverlay .ctrlUnit > dd li .hint,
	.xenOverlay .formOverlay .ctrlUnit > dd .explain
	{
		color: #bbb;

	}

	.xenOverlay .formOverlay a
	{
		color: #fff;

	}

		.xenOverlay .formOverlay a.button
		{
			color: rgb(138, 79, 16);

		}

	.xenOverlay .formOverlay .avatar img,
	.xenOverlay .formOverlay .avatar .img,
	.xenOverlay .formOverlay .avatarCropper
	{
		background-color: transparent;
	}
	
	/* tabs in form overlay */
	
	.xenOverlay .formOverlay .tabs /* the actual tabs */
	{
		background: transparent none;
border-color: rgb(38, 38, 38);

	}

		.xenOverlay .formOverlay .tabs a
		{
			background: transparent none;
border-color: rgb(38, 38, 38);

		}
		
			.xenOverlay .formOverlay .tabs a:hover
			{
				background: url(rgba.php?r=255&g=255&b=255&a=63); background: rgba(255,255,255, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3FFFFFFF,endColorstr=#3FFFFFFF);

			}
			
			.xenOverlay .formOverlay .tabs .active a
			{
				background-color: black;

			}
			
	.xenOverlay .formOverlay .tabPanel /* panels switched with the tab controls */
	{
		background: transparent url('styles/sonicretroxf/xenforo/color-picker/panel.png') repeat-x top;
border: 1px solid rgb(38, 38, 38);

	}


/* Generic overlays */

.xenOverlay .section,
.xenOverlay .sectionMain
{
	padding: 0px;
border: 20px solid rgb(45, 45, 45);
border-radius: 8px;
box-shadow: 0px 25px 50px rgba(0,0,0, 0.5);

	
	border-color:  rgb(45, 45, 45); border-color:  rgba(45, 45, 45, 0.5); _border-color:  rgb(45, 45, 45);
}

	.Touch .xenOverlay .section,
	.Touch .xenOverlay .sectionMain
	{
		border-color: rgb(45, 45, 45);
		box-shadow: none;
	}

.xenOverlay > .section,
.xenOverlay > .sectionMain
{
	background: none;
	margin: 0;
}

	.xenOverlay .section .heading,
	.xenOverlay .sectionMain .heading
	{
		border-radius: 0;
		margin-bottom: 0;
	}

	.xenOverlay .section .subHeading,
	.xenOverlay .sectionMain .subHeading
	{
		margin-top: 0;
	}

	.xenOverlay .section .sectionFooter,
	.xenOverlay .sectionMain .sectionFooter
	{
		overflow: hidden; zoom: 1;
	}
		
		.xenOverlay .sectionFooter .buttonContainer
		{
			line-height: 31px;
		}
	
		.xenOverlay .sectionFooter .button,
		.xenOverlay .sectionFooter .buttonContainer
		{
			min-width: 75px;
			*min-width: 0;
			float: right;
			margin-left: 5px;
		}
		
			.xenOverlay .sectionFooter .buttonContainer .button
			{
				float: none;
				margin-left: 0;
			}

/* The AJAX progress indicator overlay */

#AjaxProgress.xenOverlay
{
	width: 100%;
	max-width: none;
	overflow: hidden; zoom: 1;
}

	#AjaxProgress.xenOverlay .content
	{
		background: rgb(0, 0, 0) url('styles/sonicretroxf/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center; background: rgba(0,0,0, 0.5) url('styles/sonicretroxf/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center;
border-bottom-left-radius: 10px;
float: right;
width: 85px;
height: 30px;

	}
	
		.Touch #AjaxProgress.xenOverlay .content
		{
			background-color: rgb(0, 0, 0);
		}

/* Timed message for redirects */

.xenOverlay.timedMessage
{
	color: black;
background: transparent url('styles/sonicretroxf/xenforo/overlay/timed-message.png') repeat-x;
border-bottom: 1px solid black;
max-width: none;
width: 100%;

}

	.xenOverlay.timedMessage .content
	{
		font-size: 18pt;
padding: 30px;
text-align: center;

	}
	
/* Growl-style message */

#StackAlerts
{
	position: fixed;
	bottom: 70px;
	left: 35px;
	z-index: 9999; /* in front of the expose mask */
}

	#StackAlerts .stackAlert
	{
		position: relative;
		width: 270px;
		border: 1px solid rgb(112, 112, 112);
		border-radius: 5px;
		box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4);
		margin-top: 5px;
	}

		#StackAlerts .stackAlertContent
		{
			padding: 10px;
			padding-right: 30px;
			border-radius: 4px;
			border: solid 2px rgb(24, 24, 12);
			background: url(rgba.php?r=68&g=68&b=68&a=229); background: rgba(68, 68, 68, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5444444,endColorstr=#E5444444);
			font-size: 11px;
			font-weight: bold;
		}
	
/* Inline Editor */

.xenOverlay .section .messageContainer
{
	padding: 0;
}

.xenOverlay .section .messageContainer .mceLayout
{
	border: none;	
}

.xenOverlay .section .messageContainer tr.mceFirst td.mceFirst
{
	border-top: none;
}

.xenOverlay .section .messageContainer tr.mceLast td.mceLast,
.xenOverlay .section .messageContaner tr.mceLast td.mceIframeContainer
{
	border-bottom: none;
}

.xenOverlay .section .textCtrl.MessageEditor,
.xenOverlay .section .mceLayout,
.xenOverlay .section .bbCodeEditorContainer textarea
{
	width: 100% !important;
	min-height: 260px;
	_height: 260px;
	box-sizing: border-box;
}


@media (max-width:610px)
{
	.Responsive .xenOverlay
	{
		width: 100%;
	}
	
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain
	{
		border-radius: 10px;
		border-width: 10px;
	}
	
	.Responsive .xenOverlay a.close 
	{
		top: 0;
		right: 0;
		width: 28px;
		height: 28px;
		background-size: 100% 100%;
	}
}


.alerts .alertGroup
{
	margin-bottom: 20px;
}

.alerts .primaryContent
{
	overflow: hidden; zoom: 1;
	padding: 5px;
}

.alerts .avatar
{
	float: left;
}

.alerts .avatar img
{
	width: 32px;
	height: 32px;
}

.alerts .alertText
{
	margin-left: 32px;
	padding: 0 5px;
}

.alerts h3
{
	display: inline;
}

.alerts h3 .subject
{
	font-weight: bold;
}

.alerts .timeRow
{
	font-size: 11px;
	margin-top: 5px;
}
	
	.alerts .newIcon,
	.alertsPopup .newIcon
	{
		display: inline-block;
		vertical-align: baseline;
		margin-left: 2px;
		width: 11px;
		height: 11px;
		background: url('styles/sonicretroxf/xenforo/xenforo-ui-sprite.png') no-repeat -144px -40px;
	}

/** Data tables **/

.dataTableWrapper
{
	overflow-x: auto;
	overflow-y: visible;
}

table.dataTable
{
	width: 100%;
	_width: 99.5%;
	margin: 10px 0;
}

.dataTable caption
{
	font-weight: bold;
font-size: 14px;
color: rgb(255, 255, 255);
background-color: rgb(47, 47, 24);
padding: 5px 10px;
margin-bottom: 3px;
border-bottom: 1px solid rgb(47, 47, 24);
border-top-left-radius: 6px;
border-top-right-radius: 6px;

}

.dataTable tr.dataRow td
{
	border-bottom: 1px solid rgb(24, 24, 12);
	padding: 5px 10px;
	word-wrap: break-word;
}

.dataTable tr.dataRow td.secondary
{
	background: rgb(68, 68, 68) url("styles/sonicretroxf/xenforo/gradients/category-23px-light.png") repeat-x top;
}

.dataTable tr.dataRow th
{
	background: rgb(203, 203, 203) url("styles/sonicretroxf/xenforo/gradients/category-23px-light.png") repeat-x top;
	border-bottom: 1px solid rgb(156, 156, 156);
	border-top: 1px solid rgb(203, 203, 203);
	color: rgb(55, 55, 55);
	font-size: 11px;
	padding: 5px 10px;
}

	.dataTable tr.dataRow th a
	{
		color: inherit;
		text-decoration: underline;
	}

.dataTable .dataRow .dataOptions
{
	text-align: right;
	white-space: nowrap;
	word-wrap: normal;
	padding: 0;
}

.dataTable .dataRow .important,
.dataTable .dataRow.important
{
	font-weight: bold;
}

.dataTable .dataRow .dataOptions a.secondaryContent
{
	display: inline-block;
	border-left: 1px solid rgb(24, 24, 12);
	border-bottom: none;
	padding: 7px 10px 6px;
	font-size: 11px;
}

	.dataTable .dataRow .dataOptions a.secondaryContent:hover
	{
		background-color: rgb(24, 24, 12);
		text-decoration: none;
	}

	.dataTable .dataRow .delete
	{
		padding: 0px;
		width: 26px;
		border-left: 1px solid rgb(24, 24, 12);
		background-color: rgb(16, 16, 16);
	}	
				
		.dataTable .dataRow .delete a
		{
			display: block;
			background: transparent url('styles/sonicretroxf/xenforo/permissions/deny.png') no-repeat center center;
			cursor: pointer;
		
			padding: 5px;
			width: 16px;
			height: 16px;
			
			overflow: hidden;
			white-space: nowrap;
			text-indent: -1000px;
		}

.memberListItem
{
	overflow: hidden;
zoom: 1;

}

	.memberListItem .avatar,
	.memberListItem .icon
	{
		float: left;

	}
	
	/* ----------------------- */
	
	.memberListItem .extra
	{
		font-size: 12px;
float: right;

	}

		.memberListItem .extra .DateTime
		{
			display: block;
		}

		.memberListItem .extra .bigNumber
		{
			font-size: 250%;
			color: rgb(202, 202, 202);
		}
	
	.memberListItem .member
	{
		margin-left: 65px;

	}
	
	/* ----------------------- */
		
		.memberListItem h3.username
		{
			font-weight: bold;
font-size: 13px;
margin-bottom: 3px;

		}
			
		.memberListItem .username.guest
		{
			font-style: italic;
font-weight: normal;

		}
	
	/* ----------------------- */
		
		.memberListItem .userInfo
		{
			font-size: 12px;
margin-bottom: 3px;

		}
		
			.memberListItem .userBlurb
			{
			}
		
				.memberListItem .userBlurb .userTitle
				{
					font-weight: bold;

				}

			.memberListItem .userStats dt,
			.memberListItem .userStats dd
			{
				white-space: nowrap;
			}
				
	
	/* ----------------------- */
		
		.memberListItem .member .contentInfo
		{
			margin-top: 5px;

		}
	
	/* ----------------------- */
	
	
/* extended member list items have a fixed 200px right column */

.memberListItem.extended .extra
{
	width: 200px;
}

.memberListItem.extended .member
{
	margin-right: 210px;
}

/* Styling for hover-dismiss controls */

.DismissParent .DismissCtrl
{
	position: absolute;
	top: 12px;
	right: 5px;
	
	display: block;
	background: transparent url('styles/sonicretroxf/xenforo/xenforo-ui-sprite.png') no-repeat -80px 0;
	color: white;
	width: 15px;
	height: 15px;
	line-height: 15px;
	text-align: center;
	
	opacity: .4;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	
	font-size: 10px;
	
	overflow: hidden;
	white-space: nowrap;
	text-indent: 20000em;
	
	cursor: pointer;
}

	.DismissParent:hover .DismissCtrl,
	.Touch .DismissParent .DismissCtrl
	{
		opacity: 1;
	}
	
		.DismissParent:hover .DismissCtrl:hover
		{
			background-position: -96px 0;
		}
		
			.DismissParent:hover .DismissCtrl:active
			{
				background-position: -112px 0;
			}
			
.DismissParent.notice_-1 .DismissCtrl
{
	display: none;
}

/* ***************************** */
/* un-reset, mostly from YUI */

.baseHtml h1
	{ font-size:138.5%; } 
.baseHtml h2
	{ font-size:123.1%; }
.baseHtml h3
	{ font-size:108%; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3
	{  margin:1em 0; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3, .baseHtml h4, .baseHtml h5, .baseHtml h6, .baseHtml strong
	{ font-weight:bold; } 
.baseHtml abbr, .baseHtml acronym
	{ border-bottom:1px dotted #000; cursor:help; }  
.baseHtml em
	{  font-style:italic; } 
.baseHtml blockquote, .baseHtml ul, .baseHtml ol, .baseHtml dl
	{ margin:1em; } 
.baseHtml ol, .baseHtml ul, .baseHtml dl
	{ margin-left:3em; margin-right:0; } 
.baseHtml ul ul, .baseHtml ul ol, .baseHtml ul dl, .baseHtml ol ul, .baseHtml ol ol, .baseHtml ol dl, .baseHtml dl ul, .baseHtml dl ol, .baseHtml dl dl
	{ margin-top:0; margin-bottom:0; }
.baseHtml ol li
	{ list-style: decimal outside; } 
.baseHtml ul li
	{ list-style: disc outside; } 
.baseHtml ol ul li, .baseHtml ul ul li
	{ list-style-type: circle; }
.baseHtml ol ol ul li, .baseHtml ol ul ul li, .baseHtml ul ol ul li, .baseHtml ul ul ul li
	{ list-style-type: square; }
.baseHtml ul ol li, .baseHtml ul ol ol li, .baseHtml ol ul ol li
	{ list-style: decimal outside; }
.baseHtml dl dd
	{ margin-left:1em; } 
.baseHtml th, .baseHtml td
	{ border:1px solid #000; padding:.5em; } 
.baseHtml th
	{ font-weight:bold; text-align:center; } 
.baseHtml caption
	{ margin-bottom:.5em; text-align:center; } 
.baseHtml p, .baseHtml pre, .baseHtml fieldset, .baseHtml table
	{ margin-bottom:1em; }

.PageNav
{
	font-size: 12px;
padding: 2px 0;
overflow: hidden;
zoom: 1;
line-height: 16px;
word-wrap: normal;
min-width: 150px;
white-space: nowrap;

	
	margin-bottom: -.5em;
}

	.PageNav .hidden
	{
		display: none;
	}
	
	.PageNav .pageNavHeader,
	.PageNav a,
	.PageNav .scrollable
	{
		display: block;
		float: left;
		margin-right: 5px;
		margin-bottom: .5em;
	}
	
	.PageNav .pageNavHeader
	{
		padding: 1px 0;
	}

	.PageNav a
	{		
		color: rgb(255, 255, 255);
text-decoration: none;
background-color: rgb(16, 16, 16);
border: 1px solid rgb(24, 24, 12);
border-radius: 4px;
text-align: center;

		
		
		width: 26px;
	}
		
		.PageNav a[rel=start]
		{
			width: 26px !important;
		}

		.PageNav a.text
		{
			width: auto !important;
			padding: 0 4px;
		}
			
		.PageNav a.currentPage
		{
			color: rgb(138, 79, 16);
background-color: rgb(255, 131, 0);
border-color: rgb(255, 131, 0);
position: relative;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fdbe01+0,ffc100+100 */
background: #fdbe01; /* Old browsers */
background: -moz-linear-gradient(top,  #fdbe01 0%, #ffc100 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #fdbe01 0%,#ffc100 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #fdbe01 0%,#ffc100 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fdbe01', endColorstr='#ffc100',GradientType=0 ); /* IE6-9 */

		}

		a.PageNavPrev,
		a.PageNavNext
		{
			color: rgb(255, 255, 255);
background-color: transparent;
padding: 1px;
border: 1px none black;
cursor: pointer;

			
			width: 26px !important;
		}
		
		.PageNav a:hover,
		.PageNav a:focus
		{
			text-decoration: none;
background-color: rgb(47, 47, 24);
border-color: rgb(47, 47, 24);

		}
		
	.PageNav a.distinct
	{
		margin-left: 5px;
	}
			
	.PageNav .scrollable
	{
		position: relative;
		overflow: hidden;
		width: 160px; /* width of 5 page numbers plus their margin & border */
		height: 18px; /* only needs to be approximate */
	}
	
		.PageNav .scrollable .items
		{
			display: block;
			width: 20000em; /* contains scrolling items, should be huge */
			position: absolute;
		}
		
/** Edge cases - large numbers of digits **/

.PageNav .gt999 
{
	font-size: 9px;
	letter-spacing: -0.05em; 
}

.PageNav.pn5 a { width: 29px; } .PageNav.pn5 .scrollable { width: 175px; }
.PageNav.pn6 a { width: 33px; } .PageNav.pn6 .scrollable { width: 195px; }
.PageNav.pn7 a { width: 37px; } .PageNav.pn7 .scrollable { width: 215px; }


@media (max-width:610px)
{
	.Responsive .PageNav .pageNavHeader
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .PageNav .unreadLink
	{
		display: none;
	}
}


/* ***************************** */
/* DL Name-Value Pairs */

.pairs dt,
.pairsInline dt,
.pairsRows dt,
.pairsColumns dt,
.pairsJustified dt
{
	color: rgb(202, 202, 202);
}

.pairsRows,
.pairsColumns,
.pairsJustified
{
	line-height: 1.5;
}

.pairsInline dl,
.pairsInline dt,
.pairsInline dd
{
	display: inline;
}

.pairsRows dt,
.pairsRows dd
{
	display: inline-block;
	vertical-align: top;

	*display: inline;
	*margin-right: 1ex;
	*zoom: 1;
}

dl.pairsColumns,
dl.pairsJustified,
.pairsColumns dl,
.pairsJustified dl
{
	overflow: hidden; zoom: 1;
}

.pairsColumns dt,
.pairsColumns dd
{
	float: left;
	width: 48%;
}

.pairsJustified dt
{
	float: left;
	max-width: 100%;
	margin-right: 5px;
}
.pairsJustified dd
{
	float: right;
	text-align: right;
	max-width: 100%
}


/* ***************************** */
/* Lists that put all elements on a single line */

.listInline ul,
.listInline ol,
.listInline li,
.listInline dl,
.listInline dt,
.listInline dd
{
	display: inline;
}

/* intended for use with .listInline, produces 'a, b, c, d' / 'a * b * c * d' lists */

.commaImplode li:after,
.commaElements > *:after
{
	content: ', ';
}

.commaImplode li:last-child:after,
.commaElements > *:last-child:after
{
	content: '';
}

.bulletImplode li:before
{
	content: '\2022\a0';
}

.bulletImplode li:first-child:before
{
	content: '';
}

/* Three column list display */

.threeColumnList
{
	overflow: hidden; zoom: 1;
}

.threeColumnList li
{
	float: left;
	width: 32%;
	margin: 2px 1% 2px 0;
}

.twoColumnList
{
	overflow: hidden; zoom: 1;
}

.twoColumnList li
{
	float: left;
	width: 48%;
	margin: 2px 1% 2px 0;
}

/* ***************************** */
/* Preview tooltips (threads etc.) */

.previewTooltip
{
}
		
	.previewTooltip .avatar
	{
		float: left;
	}
	
	.previewTooltip .text
	{
		margin-left: 64px;
	}
	
		.previewTooltip blockquote
		{
			font-size: 13px;
font-family: 'Verdana',Arial,sans-serif;
line-height: 1.6;

			
			font-size: 10pt;
			max-height: 150px;
			overflow: hidden;
		}
	
		.previewTooltip .posterDate
		{
			font-size: 11px;
			padding-top: 5px;
			border-top: 1px solid rgb(24, 24, 12);
			margin-top: 5px;
		}

/* ***************************** */
/* List of block links */

.blockLinksList
{
	font-size: 12px;
padding: 2px;

}
		
	.blockLinksList a,
	.blockLinksList label
	{
		font-weight: bold;
color: rgb(202, 202, 202);
padding: 5px 10px;
border-radius: 6px;
display: block;
outline: 0 none;

	}
	
		.blockLinksList a:hover,
		.blockLinksList a:focus,
		.blockLinksList li.kbSelect a,
		.blockLinksList label:hover,
		.blockLinksList label:focus,
		.blockLinksList li.kbSelect label
		{
			color: rgb(255, 255, 0);
text-decoration: none;

		}
		
		.blockLinksList a:active,
		.blockLinksList li.kbSelect a:active,
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label:active,
		.blockLinksList li.kbSelect label:active,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			color: rgb(47, 47, 24);

		}
		
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			font-weight: bold;
color: rgb(47, 47, 24);
display: block;

		}
		
		.blockLinksList span.depthPad
		{
			display: block;
		}

.blockLinksList .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: rgb(206, 39, 39);
padding: 0 2px;
border-radius: 2px;
position: absolute;
right: 2px;
top: 1px;
line-height: 16px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
z-index: 101;
height: 16px;


	float: right;
	position: relative;
	right: 0;
	top: -1px;
}

	.blockLinksList .itemCount.Zero
	{
		display: none;
	}
	
.bubbleLinksList
{
	overflow: hidden;
}

.bubbleLinksList a
{
	float: left;
	padding: 2px 4px;
	margin-right: 2px;
	border-radius: 3px;
	text-decoration: none;
}
	
	.bubbleLinksList a:hover,
	.bubbleLinksList a:active
	{
		color: rgb(255, 255, 0);
text-decoration: none;

	}
	
	.bubbleLinksList a.active
	{
		color: rgb(47, 47, 24);

		font-weight: bold;
color: rgb(47, 47, 24);
display: block;

	}

/* ***************************** */
/* Normally-indented nested lists */

.indentList ul,
.indentList ol
{
	margin-left: 2em;
}

/* ***************************** */
/* AJAX progress image */

.InProgress
{
	background: transparent url('styles/sonicretroxf/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat right center;
}

/* ***************************** */
/* Hidden inline upload iframe */

.hiddenIframe
{
	display: block;
	width: 500px;
	height: 300px;
}

/* ***************************** */
/* Exception display */

.traceHtml { font-size:11px; font-family:calibri, verdana, arial, sans-serif; }
.traceHtml .function { color:rgb(180,80,80); font-weight:normal; }
.traceHtml .file { font-weight:normal; }
.traceHtml .shade { color:rgb(128,128,128); }
.traceHtml .link { font-weight:bold; }

/* ***************************** */
/* Indenting for options */

._depth0 { padding-left:  0em; }
._depth1 { padding-left:  2em; }
._depth2 { padding-left:  4em; }
._depth3 { padding-left:  6em; }
._depth4 { padding-left:  8em; }
._depth5 { padding-left: 10em; }
._depth6 { padding-left: 12em; }
._depth7 { padding-left: 14em; }
._depth8 { padding-left: 16em; }
._depth9 { padding-left: 18em; }

.xenOverlay .errorOverlay
{
	color: white;
	padding: 25px;
	border-radius: 20px;	
	border:  20px solid rgb(0,0,0); border:  20px solid rgba(0,0,0, 0.25); _border:  20px solid rgb(0,0,0);
	
	background: url(rgba.php?r=0&g=0&b=0&a=191); background: rgba(0,0,0, 0.75); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#BF000000,endColorstr=#BF000000);
}

	.xenOverlay .errorOverlay .heading
	{
		padding: 5px 10px;
		font-weight: bold;
		font-size: 12pt;
		background: rgb(180,0,0);
		color: white;
		margin-bottom: 10px;
		border-radius: 5px;
		border: 1px solid rgb(100,0,0);
	}

	.xenOverlay .errorOverlay li
	{
		line-height: 2;
	}
	
	.xenOverlay .errorOverlay .exceptionMessage
	{
		color: rgb(202, 202, 202);
	}

/*** inline errors ***/

.formValidationInlineError
{
	display: none;
	position: absolute;
	z-index: 5000;
	background-color: white;
	border: 1px solid rgb(180,0,0);
	color: rgb(180,0,0);
	box-shadow: 2px 2px 10px #999;
	border-radius: 3px;
	padding: 2px 5px;
	font-size: 11px;
	width: 175px;
	min-height: 2.5em;
	_height: 2.5em;
	word-wrap: break-word;
}

	.formValidationInlineError.inlineError
	{
		position: static;
		width: auto;
		min-height: 0;
	}

/** Block errors **/

.errorPanel
{
	margin: 10px 0 20px;
	color: rgb(180,0,0);
	background: rgb(255, 235, 235);
	border-radius: 5px;
	border: 1px solid rgb(180,0,0);
}

	.errorPanel .errorHeading
	{
		margin: .75em;
		font-weight: bold;
		font-size: 12pt;
	}
	
	.errorPanel .errors
	{
		margin: .75em 2em;
		display: block;
		line-height: 1.5;
	}


@media (max-width:800px)
{
	.Responsive .formValidationInlineError
	{
		position: static;
		width: auto;
		min-height: auto;
	}
}


/* Undo some nasties */

input[type=search]
{
	-webkit-appearance: textfield;
	box-sizing: content-box;
}

/* ignored content hiding */

.ignored { display: none !important; }

/* Misc */

.floatLeft { float: left; }
.floatRight { float: right; }

.horizontalContain { overflow-x: auto; }

.ltr { direction: ltr; }

/* Square-cropped thumbs */

.SquareThumb
{
	position: relative;
	display: block;
	overflow: hidden;
	padding: 0;
	direction: ltr;
	
	/* individual instances can override this size */
	width: 48px;
	height: 48px;
}

.SquareThumb img
{
	position: relative;
	display: block;
}

/* Basic, common, non-templated BB codes */

.bbCodeImage
{
	max-width: 100%;
}

.bbCodeImageFullSize
{
	position: absolute;
	z-index: 50000;
	background-color: rgb(16, 16, 16);
}

.bbCodeStrike
{
	text-decoration: line-through;
}

img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}

/* smilie sprite classes */


.visibleResponsiveFull { display: inherit !important; }

.visibleResponsiveWide,
.visibleResponsiveMedium,
.visibleResponsiveNarrow { display: none !important; }

.hiddenResponsiveFull { display: none !important; } 

.hiddenResponsiveWide,
.hiddenResponsiveMedium,
.hiddenResponsiveNarrow { display: inherit !important; }


@media (max-width:800px)
{
	.Responsive .visibleResponsiveFull { display: none !important; }
	
	.Responsive .hiddenResponsiveFull { display: inherit !important; }
	
	.Responsive .hiddenWideUnder { display: none !important; }
}
@media (min-width:611px) AND (max-width:800px)
{
	.Responsive .visibleResponsiveWide { display: inherit !important; }
	
	.Responsive .hiddenResponsiveWide { display: none !important; }
	}

@media (min-width:481px) AND (max-width:610px)
{
	.Responsive .visibleResponsiveMedium { display: inherit !important; }
	
	.Responsive .hiddenResponsiveMedium { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder { display: none !important; }
}

@media (max-width:480px)
{
	.Responsive .visibleResponsiveNarrow { display: inherit !important; }
	
	.Responsive .hiddenResponsiveNarrow { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder,
	.Responsive .hiddenNarrowUnder { display: none !important; }
}

@media (max-width:610px)
{
	.Responsive .threeColumnList li
	{
		float: none;
		width: auto;
		margin: 2px 1% 2px 0;
	}
}

@media (max-width:480px)
{
	.Responsive .xenTooltip.statusTip
	{
		width: auto;
	}
	
	.Responsive .xenPreviewTooltip
	{
		box-sizing: border-box;
		width: auto;
		max-width: 100%;
	}
	
	.Responsive .xenPreviewTooltip .arrow
	{
		display: none;
	}
	
	.Responsive .previewTooltip .avatar
	{
		display: none;
	}
	
	.Responsive .previewTooltip .text
	{
		margin-left: 0;
	}
}




/* --- form.css --- */

/** Forms **/

.xenForm
{
	margin: 10px auto;
	max-width: 800px;
}

	.xenOverlay .xenForm
	{
		max-width: 600px;
	}

.xenForm .ctrlUnit > dd
{
	width: 68%;
	box-sizing: border-box;
	padding-right: 30px;
}

.xenForm .ctrlUnit > dd .textCtrl
{
	box-sizing: border-box;
	width: 100%;
}

	.xenForm .ctrlUnit > dd .textCtrl.indented
	{
		width: calc(100% - 16px);
	}

	.xenForm .ctrlUnit > dd .textCtrl[size],
	.xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: auto !important;
		min-width: 0;
	}

	.xenForm .ctrlUnit > dd .textCtrl.number
	{
		width: 150px;
	}


.xenForm > .sectionHeader:first-child,
.xenForm > fieldset > .sectionHeader:first-child
{
	margin-top: 0;
}

/** Sections **/

.xenForm fieldset,
.xenForm .formGroup
{
	border-top: 1px solid rgb(24, 24, 12);
	margin: 20px auto;
}

.xenForm > fieldset:first-child,
.xenForm > .formGroup:first-child
{
	border-top: none;
	margin: auto;
}

.xenForm .PreviewContainer + fieldset,
.xenForm .PreviewContainer + .formGroup
{
	border-top: none;
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit,
.xenForm .submitUnit
{
	border-top: 1px solid rgb(24, 24, 12);
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit
{
	padding-top: 10px;
}

.xenForm .primaryContent + .submitUnit,
.xenForm .secondaryContent + .submitUnit
{
	margin-top: 0;
	border-top: none;
}

.xenForm .ctrlUnit.submitUnit dd
{	
	line-height: 31px;
	padding-top: 0;
}

	.ctrlUnit.submitUnit dd .explain,
	.ctrlUnit.submitUnit dd .text,
	.ctrlUnit.submitUnit dd label
	{
		line-height: 1.28;
	}

/* now undo that */

.xenOverlay .ctrlUnit.submitUnit dd,
.Menu .ctrlUnit.submitUnit dd,
#QuickSearch .ctrlUnit.submitUnit dd
{
	border: none;
	background: none;
}

.xenForm .ctrlUnit
{
	
}

	.xenForm .ctrlUnit.limited
	{
		display: none;
	}

	/** Sections Immediately Following Headers **/

	.xenForm .sectionHeader + fieldset,
	.xenForm .heading + fieldset,
	.xenForm .subHeading + fieldset,
	.xenForm .sectionHeader + .formGroup,
	.xenForm .heading + .formGroup,
	.xenForm .subHeading + .formGroup
	{
		border-top: none;
		margin-top: 0;
	}
	
.xenForm .formHiderHeader
{
	margin: 10px;
	font-size: 15px;
	font-weight: bold;
}


/** *********************** **/
/** TEXT INPUTS             **/
/** *********************** **/

.textCtrl
{
	font-size: 13px;
font-family: Calibri, 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: rgb(232, 232, 232);
background-color: rgb(59, 59, 59);
padding: 5px 3px;
margin-bottom: 2px;
border: 1px solid rgb(24, 24, 12);
border-radius: 4px;
outline: 0;

}

select.textCtrl
{
	word-wrap: normal;
	-webkit-appearance: menulist;
}

select[multiple].textCtrl,
select[size].textCtrl
{
	-webkit-appearance: listbox;
}

select[size="0"].textCtrl,
select[size="1"].textCtrl
{
	-webkit-appearance: menulist;
}

textarea.textCtrl
{
	word-wrap: break-word;
	resize: vertical;
}

	.textCtrl:focus,
	.textCtrl.Focus
	{
		color: rgb(255, 255, 255);
border-color: rgb(24, 24, 12);

	}	

	textarea.textCtrl:focus
	{
		
	}

	input.textCtrl.disabled,
	textarea.textCtrl.disabled,
	.disabled .textCtrl
	{
		font-style: italic;
color: rgb(100,100,100);
background-color: rgb(245,245,245);

	}
	
	.textCtrl.prompt
	{
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl:-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl::-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}

	.textCtrl::-webkit-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl:-ms-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl.autoSize
	{
		width: auto !important;
	}

	.textCtrl.number,
	.textCtrl.number input
	{
		text-align: right;
		width: 150px;
	}
	
	.textCtrl.fillSpace
	{
		width: 100%;
		box-sizing: border-box;
		_width: 95%;
	}

	.textCtrl.code,
	.textCtrl.code input
	{
		font-family: Consolas, "Courier New", Courier, monospace;
white-space: pre;
word-wrap: normal;
direction: ltr;

	}
	
	input.textCtrl[type="password"]
	{
		font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	}

	input[type="email"],
	input[type="url"]
	{
		direction: ltr;
	}

	.textCtrl.titleCtrl,
	.textCtrl.titleCtrl input
	{
		font-size: 18pt;
	}

textarea.textCtrl.Elastic
{
	/* use for jQuery.elastic */
	max-height: 300px;
}

/* for use with wrapped inputs */
.textCtrlWrap
{
	display: inline-block;
}

.textCtrlWrap input.textCtrl
{
	padding: 0 !important;
	margin: 0 !important;
	border: none !important;
	background: transparent !important;
	border-radius: 0 !important;
}

.textCtrlWrap.blockInput input.textCtrl
{
	border-top: 1px solid rgb(24, 24, 12) !important;
	margin-top: 4px !important;
}

.taggingInput.textCtrl
{
	padding-top: 3px;
	min-height: 25px;
}

.taggingInput input
{
	margin: 0px;
	font-size: 12px;
	border: 1px solid transparent;
	padding: 0;
	background: transparent;
	outline: 0;
	color: inherit;
	font-family: inherit;
}

.taggingInput .tag
{
	border: 1px solid rgb(38, 38, 38);
	border-radius: 3px;
	display: inline-block;
	padding: 0 3px;
	text-decoration: none;
	background: rgb(24, 24, 12) url('styles/sonicretroxf/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	color: rgb(70, 70, 70);
	margin-right: 3px;
	margin-top: 2px;
	font-size: 12px;
	max-width: 98%;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
}

.disabled.taggingInput .tag
{
	opacity: 0.7;
}

	.disabled.taggingInput .tag a
	{
		pointer-events: none;
	}

	html .taggingInput .tag a
	{
		color: rgb(112, 112, 112);
		font-weight: bold;
		text-decoration: none;
	}

.taggingInput .addTag
{
	display: inline-block;
	min-width: 150px;
	max-width: 100%;
	margin-top: 2px;
}

.taggingInput .tagsClear
{
	clear: both;
	width: 100%;
	height: 0px;
	float: none;
}

/** *********************** **/
/** BUTTONS                 **/
/** *********************** **/

.button
{
	font-style: normal;
	
	font-weight: bold;
font-size: 12px;
font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
color: rgb(138, 79, 16);
background-color: #fdbe01;
padding: 0px 6px;
border: 1px solid rgb(255, 131, 0);
border-radius: 6px;
text-align: center;
outline: none;
line-height: 25px;
display: inline-block;
cursor: pointer;
box-sizing: border-box;
box-shadow: 0 -3px 0 rgba(0, 0, 0, 0.06) inset;
background: -moz-linear-gradient(top,  #fdbe01 0%, #ffc100 100%);
background: -webkit-linear-gradient(top,  #fdbe01 0%,#ffc100 100%);
background: linear-gradient(to bottom,  #fdbe01 0%,#ffc100 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fdbe01', endColorstr='#ffc100',GradientType=0 );
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fdbe01+0,ffc100+100 */
/* Old browsers */
/* FF3.6-15 */
/* Chrome10-25,Safari5.1-6 */
/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
/* IE6-9 */
height: 27px;

}

.button.smallButton
{
	font-size: 11px;
	padding: 0px 4px;
	line-height: 21px;
	height: 21px;
	border-radius: 5px;
}

.button.primary
{
	
}

input.button.disabled,
a.button.disabled,
input.button.primary.disabled,
a.button.primary.disabled,
html .buttonProxy .button.disabled
{
	opacity: 0.5;

}

	.button::-moz-focus-inner
	{
		border: none;
	}

	a.button
	{
		display: inline-block;
		color: rgb(138, 79, 16);
	}

	.button:hover,
	.button[href]:hover,
	.buttonProxy:hover .button
	{
		color: rgb(60, 34, 7);
text-decoration: none;

	}

	.button:focus
	{
		opacity: 0.9;

	}

	.button:active,
	.button[href]:active,
	.button.ToggleButton.checked,
	.buttonProxy:active .button
	{
		outline: 0;

	}

	.button.ToggleButton
	{
		cursor: default;
		width: auto;
		color: rgb(255, 131, 0);
	}
	
	.button.ToggleButton.checked
	{
		background-color: rgb(255,150,50);
	}

	.button.inputSupplementary
	{
		width: 25px;
		position: absolute;
		top: 0px;
		right: 0px;
	}

	.button.inputSupplementary.add
	{
		color: green;
	}

	.button.inputSupplementary.delete
	{
		color: red;
	}

	.submitUnit .button
	{
		min-width: 100px;
		*min-width: 0;
	}

















/** Control Units **/

.xenForm .ctrlUnit
{
	position: relative;
	margin: 10px auto;
}

/* clearfix */ .xenForm .ctrlUnit { zoom: 1; } .xenForm .ctrlUnit:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.xenForm .ctrlUnit.fullWidth
{
	overflow: visible;
}

/** Control Unit Labels **/

.xenForm .ctrlUnit > dt
{
	padding-top: 5px;
padding-right: 15px;
text-align: right;
vertical-align: top;

	box-sizing: border-box;
	width: 32%;
	float: left;
}

/* special long-text label */
.xenForm .ctrlUnit > dt.explain
{
	font-size: 11px;
	text-align: justify;
}


.xenForm .ctrlUnit.fullWidth dt,
.xenForm .ctrlUnit.submitUnit.fullWidth dt
{
	float: none;
	width: auto;
	text-align: left;
	height: auto;
}

.xenForm .ctrlUnit.fullWidth dt
{
	margin-bottom: 2px;
}

	.xenForm .ctrlUnit > dt label
	{
		margin-left: 30px;
	}

	/** Hidden Labels **/

	.xenForm .ctrlUnit.surplusLabel dt label
	{
		display: none;
	}

	/** Section Links **/

	.ctrlUnit.sectionLink dt
	{
		text-align: left;
		font-size: 11px;
	}

		.ctrlUnit.sectionLink dt a
		{
			margin-left: 11px; /*TODO: sectionHeader padding + border*/
		}		

	/** Hints **/

	.ctrlUnit > dt dfn
	{
		font-style: italic;
font-size: 12px;
color: rgb(202, 202, 202);
margin-left: 30px;
display: block;

	}
	
	.ctrlUnit.fullWidth dt dfn
	{
		display: inline;
		margin: 0;
	}
	
		.ctrlUnit > dt dfn b,
		.ctrlUnit > dt dfn strong
		{
			color: rgb(202, 202, 202);
		}

	/** Inline Errors **/

	.ctrlUnit > dt .error
	{
		font-size: 12px;
color: red;
display: block;

	}
	
	.ctrlUnit > dt dfn,
	.ctrlUnit > dt .error,
	.ctrlUnit > dt a
	{
		font-weight: normal;
	}

.xenForm .ctrlUnit.submitUnit dt
{
	height: 19px;
	display: block;
}

	.ctrlUnit.submitUnit dt.InProgress
	{
		background: transparent url('styles/sonicretroxf/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat center center;
	}

/** Control Holders **/

.xenForm .ctrlUnit > dd
{
	/*todo: kill property */
	
	float: left;
}

.xenForm .ctrlUnit.fullWidth > dd
{
	float: none;
	width: auto;
	padding-left: 30px;
}

/** Explanatory paragraph **/

.ctrlUnit > dd .explain
{
	font-size: 12px;
color: rgb(202, 202, 202);
margin-top: 2px;

	/*TODO:max-width: auto;*/
}
	
	.ctrlUnit > dd .explain b,
	.ctrlUnit > dd .explain strong
	{
		color: rgb(202, 202, 202);
	}

/** List items inside controls **/

.ctrlUnit > dd > * > li
{
	margin: 4px 0 8px;
	padding-left: 1px; /* fix a webkit display bug */
}

.ctrlUnit > dd > * > li:first-child > .textCtrl:first-child
{
	margin-top: -3px;
}

.ctrlUnit > dd .break
{
	margin-bottom: 0.75em;
	padding-bottom: 0.75em;
}

.ctrlUnit > dd .rule
{
	border-bottom: 1px solid rgb(24, 24, 12);
}

.ctrlUnit > dd .ddText
{
	margin-bottom: 2px;
}

/** Hints underneath checkbox / radio controls **/

.ctrlUnit > dd > * > li .hint
{
	font-size: 11px;
	color: rgb(202, 202, 202);
	margin-left: 16px;
	margin-top: 2px;
}

/** DISABLERS **/

.ctrlUnit > dd > * > li > ul,
.ctrlUnit .disablerList,
.ctrlUnit .indented
{
	margin-left: 16px;
}

.ctrlUnit > dd > * > li > ul > li:first-child
{
	margin-top: 6px;
}

.ctrlUnit > dd .disablerList > li,
.ctrlUnit > dd .checkboxColumns > li,
.ctrlUnit > dd .choiceList > li
{
	margin-top: 6px;
}
	
/** Other stuff... **/

.ctrlUnit > dd .helpLink
{
	font-size: 10px;
}

.ctrlUnit.textValue dt
{
	padding-top: 0px;
}

.button.spinBoxButton
{
	font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
	font-size: 11pt;
}

.unitPairsJustified li
{
	overflow: hidden;
}

	.unitPairsJustified li .label
	{
		float: left;
	}
	
	.unitPairsJustified li .value
	{
		float: right;
	}

#calroot
{
	margin-top: -1px;
	width: 198px;
	padding: 2px;
	background-color: rgb(16, 16, 16);
	font-size: 11px;
	border: 1px solid rgb(24, 24, 12);
	border-radius: 6px;
	box-shadow: 0 0 7px rgba(37, 37, 37, 0.46);
	z-index: 7500;
}

#calhead
{	
	padding: 2px 0;
	height: 22px;
} 

	#caltitle {
		font-size: 11pt;
		color: rgb(255, 255, 255);
		float: left;
		text-align: center;
		width: 155px;
		line-height: 20px;
	}
	
	#calnext, #calprev {
		display: block;
		width: 20px;
		height: 20px;
		font-size: 11pt;
		line-height: 20px;
		text-align: center;
		float: left;
		cursor: pointer;
	}

	#calnext {
		float: right;
	}

	#calprev.caldisabled, #calnext.caldisabled {
		visibility: hidden;	
	}

#caldays {
	height: 14px;
	border-bottom: 1px solid rgb(24, 24, 12);
}

	#caldays span {
		display: block;
		float: left;
		width: 28px;
		text-align: center;
		color: rgb(202, 202, 202);
	}

#calweeks {
	margin-top: 4px;
}

.calweek {
	clear: left;
	height: 22px;
}

	.calweek a {
		display: block;
		float: left;
		width: 27px;
		height: 20px;
		text-decoration: none;
		font-size: 11px;
		margin-left: 1px;
		text-align: center;
		line-height: 20px;
		border-radius: 4px;
	} 
	
		.calweek a:hover, .calfocus {
			background-color: rgb(16, 16, 16);
		}

a.caloff {
	color: rgb(202, 202, 202);		
}

a.caloff:hover {
	background-color: rgb(16, 16, 16);		
}

a.caldisabled {
	background-color: #efefef !important;
	color: #ccc	!important;
	cursor: default;
}

#caltoday {
	font-weight: bold;
}

#calcurrent {
	background-color: rgb(47, 47, 24);
	color: rgb(255, 255, 255);
}
ul.autoCompleteList
{
	background-color: rgb(16, 16, 16);
	
	border: 1px solid rgb(112, 112, 112);
	padding: 2px;
	
	font-size: 11px;
	
	min-width: 180px;
	_width: 180px;
	
	z-index: 1000;
}

ul.autoCompleteList li
{
	padding: 3px 3px;
	height: 24px;
	line-height: 24px;
}

ul.autoCompleteList li:hover,
ul.autoCompleteList li.selected
{
	background-color: rgb(24, 24, 12);
	border-radius: 3px;
}

ul.autoCompleteList img.autoCompleteAvatar
{
	float: left;
	margin-right: 3px;
	width: 24px;
	height: 24px;
}

ul.autoCompleteList li strong
{
	font-weight: bold;
}

/** status editor **/

.statusEditorCounter
{
	color: green;
}

.statusEditorCounter.warning
{
	color: orange;
	font-weight: bold;
}

.statusEditorCounter.error
{
	color: red;
	font-weight: bold;
}

.explain .statusHeader
{
	display: inline;
}

.explain .CurrentStatus
{
	color: rgb(255, 255, 255);
	font-style: italic;
	padding-left: 5px;
}

/* BB code-based editor styling */

.xenForm .ctrlUnit.fullWidth dd .bbCodeEditorContainer textarea
{
	margin-left: 0;
	min-height: 200px;
}

.bbCodeEditorContainer a
{
	font-size: 11px;
}

/*
 * Fix silly top padding. This may require additional tags in the padding-top selector.
 */

.xenForm .ctrlUnit > dd
{
	padding-top: 4px;
}

	.xenForm .ctrlUnit.fullWidth > dd
	{
		padding-top: 0;
	}

.xenForm .ctrlUnit > dd > input,
.xenForm .ctrlUnit > dd > select,
.xenForm .ctrlUnit > dd > textarea,
.xenForm .ctrlUnit > dd > ul,
.xenForm .ctrlUnit > dd > .verticalShift
{
	margin-top: -4px;
}

	.xenForm .ctrlUnit.fullWidth > dd > input,
	.xenForm .ctrlUnit.submitUnit > dd > input,
	.xenForm .ctrlUnit.fullWidth > dd > select,
	.xenForm .ctrlUnit.submitUnit > dd > select,
	.xenForm .ctrlUnit.fullWidth > dd > textarea,
	.xenForm .ctrlUnit.submitUnit > dd > textarea,
	.xenForm .ctrlUnit.fullWidth > dd > ul,
	.xenForm .ctrlUnit.submitUnit > dd > ul
	{
		margin-top: 0;
	}
	
/*
 * Multi-column checkboxes
 */
 
.xenForm .checkboxColumns > dd > ul,
ul.checkboxColumns
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

	.xenForm .checkboxColumns > dd > ul li,
	ul.checkboxColumns li
	{
		-webkit-column-break-inside : avoid; -moz-column-break-inside : avoid;column-break-inside: avoid;
		break-inside: avoid-column;
		margin-bottom: 4px;
		padding-left: 1px;
		display: inline-block;
		width: 100%;
	}
	
	.xenForm .checkboxColumns.blockLinksList > dd > ul li,
	ul.checkboxColumns.blockLinksList li
	{
		display: block;
	}

.xenForm .checkboxColumns.multiple > dd > ul
{
	-webkit-column-count : auto; -moz-column-count : auto;column-count: auto;
	-webkit-column-gap : normal; -moz-column-gap : normal;column-gap: normal;
}

.xenForm .checkboxColumns.multiple > dd
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

.xenForm .checkboxColumns.multiple > dd > ul
{
	margin-bottom: 18px;
}

#recaptcha_image
{
	box-sizing: content-box;
	max-width: 100%;
}

#recaptcha_image img
{
	max-width: 100%;
}

#helper_birthday { display: inline-block; }
#helper_birthday > li
{
	display: inline;
}
html[dir=rtl] #helper_birthday input,
html[dir=rtl] #helper_birthday select
{
	direction: rtl;
}


@media (max-width:480px)
{
	.Responsive .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .xenForm .ctrlUnit > dt label,
		.Responsive .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .xenForm .ctrlUnit > dd,
	.Responsive .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 10px;
		padding-right: 10px;
		overflow: hidden;
	}

	.Responsive .xenForm .checkboxColumns > dd > ul,
	.Responsive ul.checkboxColumns
	{
		-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	}
	
	.Responsive #ctrl_upload
	{
		max-width: 200px;
	}
	
	.Responsive .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .xenForm .ctrlUnit > dd > input,
	.Responsive .xenForm .ctrlUnit > dd > select,
	.Responsive .xenForm .ctrlUnit > dd > textarea,
	.Responsive .xenForm .ctrlUnit > dd > ul,
	.Responsive .xenForm .ctrlUnit > dd > .verticalShift
	{
		margin-top: 0;
	}
}

@media (max-width:610px)
{
	.Responsive .insideSidebar .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .insideSidebar .xenForm .ctrlUnit > dt label,
		.Responsive .insideSidebar .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .insideSidebar .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd,
	.Responsive .insideSidebar .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 10px;
		padding-right: 10px;
		overflow: hidden;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > input,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > select,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > textarea,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-device-width:568px)
{
	.Responsive .textCtrl,
	.Responsive .taggingInput input,
	.Responsive .taggingInput .tag
	{
		font-size: 16px;
	}
}


/* --- public.css --- */

#header
{
	
}

/* clearfix */ #header .pageWidth .pageContent { zoom: 1; } #header .pageWidth .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	#logo
	{
		display: block;
		float: left;
		line-height: 66px;
		*line-height: 70px;
		height: 70px;
		max-width: 100%;
		vertical-align: middle;
	}

		/* IE6/7 vertical align fix */
		#logo span
		{
			*display: inline-block;
			*height: 100%;
		}

		#logo a:hover
		{
			text-decoration: none;
		}

		#logo img
		{
			vertical-align: middle;
			max-width: 100%;
		}

	#visitorInfo
	{
		float: right;
		min-width: 250px;
		_width: 250px;
		overflow: hidden; zoom: 1;
		background: rgb(38, 38, 38);
		padding: 5px;
		border-radius: 5px;
		margin: 10px 0;
		border: 1px solid rgb(45, 45, 45);
		color: rgb(45, 45, 45);
	}

		#visitorInfo .avatar
		{
			float: left;
			display: block;
		}

			#visitorInfo .avatar .img
			{
				border-color: rgb(88, 88, 88);
			}

		#visitorInfo .username
		{
			font-size: 18px;
			text-shadow: 1px 1px 10px white;
			color: rgb(45, 45, 45);
			white-space: nowrap;
			word-wrap: normal;
		}

		#alerts
		{
			zoom: 1;
		}

		#alerts #alertMessages
		{
			padding-left: 5px;
		}

		#alerts li.alertItem
		{
			font-size: 11px;
		}

			#alerts .label
			{
				color: rgb(45, 45, 45);
			}

.footer .pageContent
{
	font-size: 12px;
color: rgb(38, 38, 38);
background-color: rgb(16, 16, 16);
padding: 7px 10px;
border-bottom-right-radius: 8px;
border-bottom-left-radius: 8px;
overflow: hidden;
zoom: 1;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#3f3f1f+0,212110+100 */
background: rgb(63,63,31); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(63,63,31,1) 0%, rgba(33,33,16,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(63,63,31,1) 0%,rgba(33,33,16,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(63,63,31,1) 0%,rgba(33,33,16,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3f3f1f', endColorstr='#212110',GradientType=0 ); /* IE6-9 */

}
	
	.footer a,
	.footer a:visited
	{
		color: rgb(254, 254, 254);
padding: 9px 5px;
display: block;

	}
	
		.footer a:hover,
		.footer a:active
		{
			color: rgb(255, 255, 0);

		}

	.footer .choosers
	{
		padding-left: 5px;
float: left;
overflow: hidden;
zoom: 1;

	}
	
		.footer .choosers dt
		{
			display: none;
		}
		
		.footer .choosers dd
		{
			float: left;
			
		}
		
	.footerLinks
	{
		padding-right: 5px;
float: right;
overflow: hidden;
zoom: 1;

	}
	
		.footerLinks li
		{
			float: left;
			
		}
		

.footerLegal .pageContent
{
	font-size: 12px;
	overflow: hidden; zoom: 1;
	padding: 8px;
	text-align: center;
}
	
	#copyright
	{
		color: rgb(202, 202, 202);
		float: left;
	}
	
	#legal
	{
		float: right;
	}
	
		#legal li
		{
			float: left;
			
			margin-left: 10px;
		}


@media (max-width:610px)
{
	.Responsive .footerLinks a.globalFeed,
	.Responsive .footerLinks a.topLink,
	.Responsive .footerLinks a.homeLink
	{
		display: none;
	}

	.Responsive .footerLegal .debugInfo
	{
		clear: both;
	}
}

@media (max-width:480px)
{
	.Responsive #copyright span
	{
		display: none;
	}
}


.breadBoxTop,
.breadBoxBottom
{
	padding: 10px 0;
overflow: hidden;
zoom: 1;
clear: both;
box-sizing: border-box;

}

.breadBoxTop
{
}

.breadBoxTop .topCtrl
{
	margin-left: 5px;
float: right;
line-height: 24px;

}

.breadcrumb
{
	font-size: 12px;
background-color: rgb(16, 16, 16);
border: 1px solid rgb(24, 24, 12);
border-radius: 6px;
overflow: hidden;
zoom: 1;
max-width: 100%;
height: 24px;

}

.breadcrumb.showAll
{
	height: auto;
}

.breadcrumb .boardTitle
{
	display: none;

}

.breadcrumb .crust
{
	display: block;
float: left;
position: relative;
zoom: 1;
max-width: 50%;

}

.breadcrumb .crust a.crumb
{
	cursor: pointer;
	text-decoration: none;
background-color: rgb(16, 16, 16);
padding: 0 10px 0 18px;
margin-bottom: -1px;
border-bottom: 1px solid rgb(24, 24, 12);
outline: 0 none;
-moz-outline-style: 0 none;
display: block;
_border-bottom: none;
line-height: 24px;

}

	.breadcrumb .crust a.crumb > span
	{
		display: block;
		text-overflow: ellipsis;
		word-wrap: normal;
		white-space: nowrap;
		overflow: hidden;
		max-width: 100%;
	}

	.breadcrumb .crust:first-child a.crumb,
	.breadcrumb .crust.firstVisibleCrumb a.crumb
	{
		padding-left: 10px;
border-top-left-radius: 6px;
border-bottom-left-radius: 6px;

	}
	
	.breadcrumb .crust:last-child a.crumb
	{
		font-weight: bold;

	}

.breadcrumb .crust .arrow
{
	border: 12px solid transparent;
border-right: 1px none black;
border-left-color: rgb(24, 24, 12);
-moz-border-right-colors: rgb(24, 24, 12);
display: block;
position: absolute;
right: -12px;
top: 0px;
z-index: 50;
width: 0px;
height: 0px;

}

.breadcrumb .crust .arrow span
{
	border: 12px solid transparent;
border-right: 1px none black;
border-left-color: rgb(16, 16, 16);
-moz-border-right-colors: rgb(16, 16, 16);
display: block;
position: absolute;
left: -13px;
top: -12px;
z-index: 51;
white-space: nowrap;
overflow: hidden;
text-indent: 9999px;
width: 0px;
height: 0px;

}

.breadcrumb .crust:hover a.crumb
{
	color: rgb(255, 255, 255);

}

.breadcrumb .crust:hover .arrow span
{
	border-left-color: ;
}

	.breadcrumb .crust .arrow
	{
		/* hide from IE6 */
		_display: none;
	}

.breadcrumb .jumpMenuTrigger
{
	font-size: 13px;
background-color: transparent;
margin-right: 5px;
margin-left: 5px;
display: block;
float: right;
white-space: nowrap;
overflow: hidden;
line-height: 36px;
width: 16px;
height: 36px;

}


@media (max-width:480px)
{
	.Responsive .breadBoxTop.withTopCtrl
	{
		display: table;
		table-layout: fixed;
		width: 100%;
	}

	.Responsive .breadBoxTop.withTopCtrl nav
	{
		display: table-header-group;
	}

	.Responsive .breadBoxTop.withTopCtrl .topCtrl
	{
		display: table-footer-group;
		margin-top: 5px;
		text-align: right;
	}
}


.xbnavLogo
{
	float: left;
}
.xbnavLogo img
{
	max-height: 50px;
}
.fixed
{
	position: fixed !important;
	z-index: 95;
	top: 0;
	width: 100%;
	z-index: 101;
}
.xbBoxedStyle .fixed
{
	left: 0;
}
.fixed .navTabs .navLink .itemCount
{
	top: 0;
}

.fixed .navTabs
{
	border-radius: 0px;

}
.navTabs .visitorTabs .navLink .fa
{
	line-height: 50px;
	vertical-align: middle;
	font-size: 18px;
}
.navTabs .visitorTabs .navLink .miniMe
{
        margin-right: 10px;
vertical-align: middle;
width: 20px;
height: 20px;

}
.XenBase .navTabs .navTab.selected .tabLinks
{
        background-image: none;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#3f3f1f+0,212110+100 */
background: rgb(63,63,31); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(63,63,31,1) 0%, rgba(33,33,16,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(63,63,31,1) 0%,rgba(33,33,16,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(63,63,31,1) 0%,rgba(33,33,16,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3f3f1f', endColorstr='#212110',GradientType=0 ); /* IE6-9 */

}
.navPopup .listPlaceholder ol.secondaryContent.Unread
{
	
}

.XenBase #AccountMenu
{
	width: 295px;

}

.XenBase #AccountMenu .menuColumns a, .XenBase #AccountMenu .menuColumns label
{
	width: 125px;

}

#logoBlock .pageContent
{
		
}

#logoBlock
{
		
}


.navTabs .navTab.account .navLink .accountUsername
{
	display: inline-block;
}









.XenBase .navTabs
{
	border-radius: 0px;
	border-left-width: 0px;
	border-right-width: 0px;
}







@media (max-width:480px)
{
	.xbVisitorText
	{
		display: none;
	}	
}


#navigation .pageContent
{
	
	height: 50px;
	
	position: relative;
}

#navigation .menuIcon
{
	position: relative;
	font-size:18px;
	width: 16px;
	display: inline-block;
	text-indent: -9999px;
}

#navigation .PopupOpen .menuIcon:before,
#navigation .navLink .menuIcon:before
{
	zoom: 1;
}

#navigation .menuIcon:before
{
	content: "";
	font-size: 18px;
	position: absolute;
	top: 1.1em;
	left: 0;
	width: 16px;
	height: 2px;
	border-top: 6px double currentColor;
	border-bottom: 2px solid currentColor;
}

	.navTabs
	{
		font-size: 14px;
font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
color: rgb(254, 254, 254);
padding: 0 0px;
border-top-left-radius: 8px;
border-top-right-radius: 8px;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#787848+0,606030+100 */
background: rgb(120,120,72); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(120,120,72,1) 0%, rgba(96,96,48,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(120,120,72,1) 0%,rgba(96,96,48,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(120,120,72,1) 0%,rgba(96,96,48,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#787848', endColorstr='#606030',GradientType=0 ); /* IE6-9 */

		
		height: 50px;
	}
	
		.navTabs .publicTabs
		{
			float: left;
			
		}
		
		.navTabs .visitorTabs
		{
			float: right;
			
		}
		
			.navTabs .navTab
			{
				float: left;
				white-space: nowrap;
				word-wrap: normal;
				
			}


/* ---------------------------------------- */
/* Links Inside Tabs */

.navTabs .navLink,
.navTabs .SplitCtrl
{
	font-weight: bold;
color: rgb(254, 254, 254);
display: block;
float: left;
vertical-align: text-bottom;
text-align: center;
outline: 0 none;
text-shadow: -1px -1px 0px rgba(0, 0, 0, 0.5);

	
	
	
	height: 50px;
	line-height: 50px;
}

	.navTabs .publicTabs .navLink
	{
		padding: 0 15px;
	}
	
	.navTabs .visitorTabs .navLink
	{
		padding: 0 10px;
	}
	.navTabs .navTab:hover
	{
		background-color: transparent;
		color: #FFFFFF;
	}
	.navTabs .navLink:hover
	{
		text-decoration: none;
	}
	
	/* ---------------------------------------- */
	/* unselected tab, popup closed */

	.navTabs .navTab.PopupClosed
	{
		position: relative;
	}
		
		.navTabs .navTab.PopupClosed:hover .navLink, .navTabs .navTab.PopupClosed:hover .SplitCtrl
		{
			color: rgb(254, 254, 254);
background-color: rgb(116, 116, 68);
box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.5) inset;

		}
		
			.navTabs .navTab.PopupClosed:hover .navLink
			{
				color: rgb(254, 254, 254);
			}
		
	
	.navTabs .navTab.PopupClosed .SplitCtrl
	{
		margin-left: -14px;
		width: 14px;
	}
		
		.XenBase .navTabs .navTab.PopupClosed:hover .SplitCtrl
		{
			position: relative;
			background-color: transparent;
		}
	
	/* ---------------------------------------- */
	/* selected tab */

	html .navTabs .navTab.selected .navLink
	{
		position: relative;
		color: rgb(254, 254, 254);

	}
	
	
	.navTabs .navTab.selected .SplitCtrl
	{
		display: none;
	}
	
	
	/* ---------------------------------------- */
	/* selected tab, popup open (account) */
	
	html .navTabs .navTab.PopupOpen .navLink
	{
		color: rgb(255, 255, 0);
background-color: rgb(16, 16, 16);

	}
	
/* ---------------------------------------- */
/* Second Row */

.navTabs .navTab.selected .tabLinks
{
	
	
	width: 100%;	
	padding: 0;
	border: none;
	overflow: hidden; zoom: 1;	
	position: absolute;
	left: 0px;	
	top: 50px;
	height: 0px;
	*clear:expression(style.width = document.getElementById('navigation').offsetWidth + 'px', style.clear = "none", 0);
}

	.navTabs .navTab.selected .blockLinksList
	{
		background: none;
		padding: 0;
		border: none;
		margin-left: 8px;
	}
	
	@media(min-width:800px)
	{
		.withSearch .navTabs .navTab.selected .blockLinksList
		{
			margin-right: 275px;
		}
	}

	.navTabs .navTab.selected .tabLinks .menuHeader
	{
		display: none;
	}
	
	.navTabs .navTab.selected .tabLinks li
	{
		float: left;
		padding: 2px 0;
	}
	
		.navTabs .navTab.selected .tabLinks a
		{
			font-weight: bold;
font-size: 12px;
color: rgb(254, 254, 254);
padding: 1px 10px;
display: block;

			
			line-height: -6px;
		}
		
		.navTabs .navTab.selected .tabLinks .PopupOpen a
		{
			color: inherit;
			text-shadow: none;
		}
		
			.navTabs .navTab.selected .tabLinks a:hover,
			.navTabs .navTab.selected .tabLinks a:focus
			{
				color: rgb(255, 255, 255);
text-decoration: none;
background: url(rgba.php?r=0&g=0&b=0&a=0); background: rgba(0, 0, 0, 0); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00000000,endColorstr=#00000000);
border-width: 0px;
outline: 0;

			}
			
			.navTabs .navTab.selected .tabLinks .Popup a:hover,
			.navTabs .navTab.selected .tabLinks .Popup a:focus
			{
				color: inherit;
				background: none;
				border-color: transparent;
				border-radius: 0;
				text-shadow: none;
			}
	
/* ---------------------------------------- */
/* Alert Balloons */
	
.navTabs .navLink .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: rgb(206, 39, 39);
padding: 0 2px;
border-radius: 2px;
position: absolute;
right: 2px;
top: 1px;
line-height: 16px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
z-index: 101;
height: 16px;

}

	.navTabs .navLink .itemCount .arrow
	{
		border: 3px solid transparent;
border-top-color: rgb(206, 39, 39);
border-bottom: 1px none black;
position: absolute;
bottom: -3px;
right: 4px;
line-height: 0px;
text-shadow: none;
_display: none;
/* Hide from IE6 */
width: 0px;
height: 0px;

	}
	
.navTabs .navLink .itemCount.Zero
{
	display: none;
}

.navTabs .navLink .itemCount.ResponsiveOnly
{
	display: none !important;
}

.NoResponsive #VisitorExtraMenu_Counter,
.NoResponsive #VisitorExtraMenu_ConversationsCounter,
.NoResponsive #VisitorExtraMenu_AlertsCounter
{
	display: none !important;
}
	
/* ---------------------------------------- */
/* Account Popup Menu */

	.navTabs .navTab.account .navLink .accountUsername
	{
		display: block;
		max-width: 100px;
		overflow: hidden;
		text-overflow: ellipsis;
	}

#AccountMenu
{
	width: 274px;
}

#AccountMenu .menuHeader
{
	position: relative;
}

	#AccountMenu .menuHeader .avatar
	{
		float: left;
		margin-right: 10px;
	}

	#AccountMenu .menuHeader .visibilityForm
	{
		margin-top: 10px;
		color: rgb(70, 70, 70);
	}
	
	#AccountMenu .menuHeader .links .fl
	{
		position: absolute;
		bottom: 10px;
		left: 116px;
	}

	#AccountMenu .menuHeader .links .fr
	{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}
	
#AccountMenu .menuColumns
{
	overflow: hidden; zoom: 1;
	padding: 2px;
}

	#AccountMenu .menuColumns ul
	{
		float: left;
		padding: 0;
		max-height: none;
		overflow: hidden;
	}

		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label
		{
			width: 115px;
		}

#AccountMenu .statusPoster textarea
{
	width: 245px;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

#AccountMenu .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

	#AccountMenu .statusPoster .submitUnit .statusEditorCounter
	{
		float: left;
		line-height: 23px;
		height: 23px;
	}
	
/* ---------------------------------------- */
/* Inbox, Alerts Popups */

.navPopup
{
	width: 260px;
}
.listItemText .username{color: rgb(202, 202, 202)}
.navPopup a:hover,
.navPopup .listItemText a:hover
{
	background: none;
	text-decoration: underline;
}

	.navPopup .menuHeader .InProgress
	{
		float: right;
		display: block;
		width: 20px;
		height: 20px;
	}

.navPopup .listPlaceholder
{
	max-height: 350px;
	overflow: auto;
}

	.navPopup .listPlaceholder ol.secondaryContent
	{
		padding: 0 10px;
	}

		.navPopup .listPlaceholder ol.secondaryContent.Unread
		{
			background-color: rgb(51, 51, 51);
		}

.navPopup .listItem
{
	overflow: hidden; zoom: 1;
	padding: 5px 0;
	border-bottom: 1px solid rgb(24, 24, 12);
}

.navPopup .listItem:last-child
{
	border-bottom: none;
}

.navPopup .PopupItemLinkActive:hover
{
	margin: 0 -8px;
	padding: 5px 8px;
	border-radius: 5px;
	background-color: rgb(24, 24, 12);
	cursor: pointer;
}

.navPopup .avatar
{
	float: left;
}

	.navPopup .avatar img
	{
		width: 32px;
		height: 32px;
	}

.navPopup .listItemText
{
	margin-left: 37px;
}

	.navPopup .listItemText .muted
	{
		font-size: 12px;
	}

	.navPopup .unread .listItemText .title,
	.navPopup .listItemText .subject
	{
		font-weight: bold;
	}

.navPopup .sectionFooter .floatLink
{
	float: right;
}
.xbSearchNav
{
	float: right;
}

/* clearfix */ #navigation { zoom: 1; } #navigation:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }


@media (max-width:800px)
{
	.Responsive #logoBlock .pageWidth
	{
		padding: 0 10px;
	}
}
@media (max-width:610px)
{
	.Responsive .navTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}
}

@media (max-width:480px)
{
	.Responsive.hasJs .navTabs:not(.showAll) .publicTabs .navTab:not(.selected):not(.navigationHiddenTabs)
	{
		display: none;
	}
}
@media(max-width:800px)
{
	.Responsive .withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 50px;
	}
}


#searchBar
{
	position: relative;
	zoom: 1;
	z-index: 52; /* higher than breadcrumb arrows */
}

	#QuickSearchPlaceholder
	{
		top: --5px;
		
		
		font-size: 17px;
color: rgb(202, 202, 202);
background-color: transparent;
position: absolute;
right: 20px;
display: none;
cursor: pointer;
box-sizing: border-box;
overflow: hidden;

		
	}

	#QuickSearch
	{
		top: -5px;
		background-color: rgb(24, 24, 24);
padding-top: 5px;
padding-bottom: 3px;
margin: 0;
border-width: 0px;
border-radius: 6px;
display: block;
position: absolute;
right: 15px;
_padding-top: 3px;
z-index: 7500;

	}
	#QuickSearch .formPopup 
	{
		background-color: transparent;
	}
	#QuickSearch .formPopup .controlsWrapper .textCtrl
	{
		width: 210px;
	}
	#QuickSearch .formPopup .controlsWrapper
	{
		background-image: none;
padding: 10px;

	}
			
		#QuickSearch .secondaryControls
		{
			display: none;

		}
	
		#QuickSearch.active
		{
			background-color: rgb(16, 16, 16);
padding-bottom: 5px;
box-shadow: 5px 5px 25px rgba(0,0,0, 0.5);

		}
		
	#QuickSearch .submitUnit .button
	{
	min-width: 0;
	}
		
	#QuickSearch input.button.primary
	{

		float: left;
		width: 110px;

	}
	
	#QuickSearch #commonSearches
	{
		float: right;
	}
	
		#QuickSearch #commonSearches .button
		{
			width: 23px;
			padding: 0;
		}
		
			#QuickSearch #commonSearches .arrowWidget
			{
				margin: 0;
				float: left;
				margin-left: 4px;
				margin-top: 0px;
				background: none;
			}
	
	#QuickSearch .moreOptions
	{
		display: block;
		margin: 0 25px 0 112px;
		width: auto;
	}
#QuickSearch #commonSearches:hover .arrowWidget:before
{
	color: rgb(70, 70, 70);
}	
#QuickSearch #commonSearches .arrowWidget:before
{
	display: inline-block;
	content: "\f13a";
	font-family: "Font Awesome 5 Free";
	font-style: normal;
	font-weight: normal;
	font-size: 14px;
	position: relative;
	color: rgb(138, 79, 16);
	line-height: normal;
}

#QuickSearch #commonSearches .PopupControl.PopupOpen .arrowWidget:before
{
	content: "\f139";
	color: rgb(47, 47, 24);
}

#QuickSearch .formPopup .primaryControls
{
	
}

#QuickSearchQuery
{
	border: 1px solid rgb(24, 24, 12);
border-radius: 6px;

}

@media (max-width:800px)
{
	.Responsive #QuickSearchPlaceholder
	{
		display: block;
	}

	.Responsive #QuickSearchPlaceholder.hide
	{
		visibility: hidden;
	}

	.Responsive #QuickSearch
	{
		display: none;
	}

	.Responsive #QuickSearch.show
	{
		display: block;
	}
}



 
.xbSearchNav
{
	min-width: 35px;
}
.xbSearchNav #QuickSearch
{
	right: 0;
	top: 50px;
	background-color: transparent;
	padding-top: 3px;
	padding-bottom: 3px;
	border-radius: 4px 4px 0px 0px;
}
.xbSearchNav #searchBar
{
	height: 50px;
}
@media (min-width:800px)
{
	.xbSearchNav #searchBar #QuickSearch
	{
		position: relative;
		top: 50%;
		right: 0;
		-webkit-transform: translateY(-50%); -ms-transform: translateY(-50%);transform: translateY(-50%);
	}
	.xbSearchNav #QuickSearch .secondaryControls
	{
		position: absolute;
	}
}
.xbSearchNav #QuickSearchPlaceholder
{
	position: relative;
	top: 50%;
	right: 0;
	-webkit-transform: translateY(-50%); -ms-transform: translateY(-50%);transform: translateY(-50%);
	overflow: visible;
	padding: 0 10px;
}
.XenBase.Responsive #QuickSearchPlaceholder.hide
{
	display: block;
}
.xbSearchNav #QuickSearch.active
{
	border-width: 0px;
	padding-bottom: 3px;
}
.xbSearchNav #QuickSearch .formPopup
{
	width: 248px;
}
#QuickSearch .formPopup .primaryControls
{
	position: relative;
	z-index: 1;
}
.XenBase #QuickSearch.active,
.XenBase #QuickSearch.active .secondaryControls
{
	background: rgb(16, 16, 16);
	box-shadow: 0px 20px 25px rgba(0, 0, 0, 0.5);
}


/** move the header to the top again **/

#headerMover
{
	position: relative;
	zoom: 1;
}

	
	#headerMover #headerProxy
	{
		
		
		height: 120px; /* +2 borders */
		
	}
	
	#headerMover #header
	{
		width: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
	}
	


/** Generic page containers **/

.pageWidth
{
	padding-right: 0px;
padding-left: 0px;
margin: 0 auto;
max-width: 90%;
_margin: 0 auto;
box-sizing: border-box;

}

.NoResponsive body
{
	min-width: 976px;
}

#content .pageContent
{
	background-color: rgb(24, 24, 24);
padding: 10px 0px;
position: relative;

}

/* clearfix */ #content .pageContent { zoom: 1; } #content .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/* sidebar structural elements */


.mainContainer
{
	 float: left;
	 margin-right: -300px;
	 width: 100%;
}
.mainContent
{
	margin-right: 300px;
}

.sidebar
{
	float: right;
	font-size: 12px;
box-sizing: border-box;
width: 290px;

}







/* visitor panel */

.sidebar .visitorPanel
{
	overflow: hidden; zoom: 1;
}

	.sidebar .visitorPanel h2 .muted
	{
		display: none;
	}

	.sidebar .visitorPanel .avatar
	{
		margin-right: 5px;
float: left;

		
		width: auto;
		height: auto;
	}
	
		.sidebar .visitorPanel .avatar img
		{
			width: ;
			height: ;
		}
	
	.sidebar .visitorPanel .username
	{
		font-weight: bold;
font-size: 11pt;

	}
	
	.sidebar .visitorPanel .stats
	{
		margin-top: 2px;

	}
	
	.sidebar .visitorPanel .stats .pairsJustified
	{
		line-height: normal;
	}













	
/* generic sidebar blocks */
		
.sidebar .section .primaryContent   h3,
.sidebar .section .secondaryContent h3,
.profilePage .mast .section.infoBlock h3, .XenBase .xengallerySideBarContainer .xengallerySideBar .section h3
{
	font-weight: bold;
font-size: 13px;
font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
color: rgb(254, 254, 254);
background-color: rgb(47, 47, 24);
padding-top: 10px;
padding-bottom: 10px;
padding-left: 10px;
margin: -10px -10px 7px;
border-top-left-radius: 8px;
border-top-right-radius: 8px;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#5b5b33+0,414121+100 */
background: rgb(91,91,51); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(91,91,51,1) 0%, rgba(65,65,33,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(91,91,51,1) 0%,rgba(65,65,33,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(91,91,51,1) 0%,rgba(65,65,33,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5b5b33', endColorstr='#414121',GradientType=0 ); /* IE6-9 */

}

.sidebar .section .primaryContent   h3 a,
.sidebar .section .secondaryContent h3 a
{
	color: rgb(254, 254, 254);
}

.sidebar .section .secondaryContent .footnote,
.sidebar .section .secondaryContent .minorHeading
{
	color: rgb(112, 112, 112);
margin-top: 5px;

}

	.sidebar .section .secondaryContent .minorHeading a
	{
		color: rgb(112, 112, 112);
	}












/* list of users with 32px avatars, username and user title */

.sidebar .avatarList li
{
	margin: 5px 0;
overflow: hidden;
zoom: 1;

}

	.sidebar .avatarList .avatar
	{
		margin-right: 5px;
float: left;
width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
		
	.sidebar .avatarList .avatar img
	{
		width: 32px;
		height: 32px;
	}
	
	.sidebar .avatarList .username
	{
		font-size: 11pt;
margin-top: 2px;
display: block;

	}
	
	.sidebar .avatarList .userTitle
	{
		color: rgb(202, 202, 202);

	}









/* list of users */

.sidebar .userList
{
}

	.sidebar .userList .username
	{
		font-size: 12px;

	}

	.sidebar .userList .username.invisible
	{
		color: rgb(88, 88, 88);

	}
	
	.sidebar .userList .username.followed
	{
		
	}

	.sidebar .userList .moreLink
	{
		display: block;
	}
	
	
	
	
/* people you follow online now */

.followedOnline
{
	margin-top: 3px;
margin-bottom: -5px;
overflow: hidden;
zoom: 1;

}

.followedOnline li
{
	margin-right: 5px;
margin-bottom: 5px;
float: left;

}

	.followedOnline .avatar
	{
		width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
	
		.followedOnline .avatar img
		{
			width: 32px;
			height: 32px;
		}
	
	
	

	
	
/* call to action */

#SignupButton
{
	background-color: rgb(255, 131, 0);
padding: 3px;
margin: 10px 30px;
border: 1px solid rgb(255, 131, 0);
border-radius: 6px;
text-align: center;
line-height: 30px;
display: block;
cursor: pointer;
height: 30px;

}

	#SignupButton .inner
	{
		font-weight: bold;
font-size: 14px;
font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
color: rgb(255, 255, 255);
border-radius: 4px;
display: block;

	}
	
	#SignupButton:hover .inner
	{
		text-decoration: none;

	}
	
	#SignupButton:active
	{
		box-shadow: 0 0 3px rgba(0,0,0, 0.2);
/*position: relative;
		top: 2px;*/

	}


@media (max-width:800px)
{
	.Responsive .mainContainer
	{
		 float: none;
		 margin-right: 0;
		 width: auto;
	}

		.Responsive .mainContent
		{
			margin-right: 0;
		}
	
	.Responsive .sidebar
	{
		float: none;
		margin: 0 auto;
	}

		.Responsive .sidebar .visitorPanel
		{
			display: none;
		}
}

@media (max-width:340px)
{
	.Responsive .sidebar
	{
		width: 100%;
	}
}


/* XenBase Sidebar */
.sidebar .section, .xengallerySideBar .section {
	
}

.sidebar .secondaryContent, .xengallerySideBar .secondaryContent {
	background-color: rgb(16, 16, 16);
border: 1px solid rgb(24, 24, 12);
border-radius: 8px;

}

.sidebar .visitorPanel
{
		
}

.sidebar .visitorPanel .secondaryContent
{
		
}
.sidebar .loginButton .xbSocialLogins
{
		
}
html .profilePage .mast .section.infoBlock
{
	border-color: rgb(24, 24, 12);
}
html .container .xengallerySideBar .section h3
{
	font-weight: bold;
font-size: 13px;
font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
color: rgb(254, 254, 254);
background-color: rgb(47, 47, 24);
padding-top: 10px;
padding-bottom: 10px;
padding-left: 10px;
margin: -10px -10px 7px;
border-top-left-radius: 8px;
border-top-right-radius: 8px;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#5b5b33+0,414121+100 */
background: rgb(91,91,51); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(91,91,51,1) 0%, rgba(65,65,33,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(91,91,51,1) 0%,rgba(65,65,33,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(91,91,51,1) 0%,rgba(65,65,33,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5b5b33', endColorstr='#414121',GradientType=0 ); /* IE6-9 */

}

/** Text used in message bodies **/

.messageText
{
	font-size: 13px;
font-family: 'Verdana',Arial,sans-serif;
line-height: 1.6;

}

	.messageText img,
	.messageText iframe,
	.messageText object,
	.messageText embed
	{
		max-width: 100%;
	}

/** Link groups and pagenav container **/

.pageNavLinkGroup
{
	display: table;
	*zoom: 1;
	table-layout: fixed;
	box-sizing: border-box;
	
	font-size: 12px;
margin: 10px 0;
line-height: 16px;

}

opera:-o-prefocus, .pageNavLinkGroup
{
	display: block;
	overflow: hidden;
}

	.pageNavLinkGroup:after
	{
		content: ". .";
		display: block;
		word-spacing: 99in;
		overflow: hidden;
		height: 0;
		font-size: 0.13em;
		line-height: 0;
	}

	.pageNavLinkGroup .linkGroup
	{
		float: right;
	}

.linkGroup
{
}
	
	.linkGroup a
	{
		padding: 3px 0;

	}

		.linkGroup a.inline
		{
			padding: 0;
		}

	.linkGroup a,
	.linkGroup .Popup,
	.linkGroup .element
	{
		margin-left: 10px;
		display: block;
		float: left;
		
	}
	
		.linkGroup .Popup a
		{
			margin-left: -2px;
			margin-right: -5px;
			*margin-left: 10px;
			padding: 3px 5px;
		}

	.linkGroup .element
	{
		padding: 3px 0;
	}

/** Call to action buttons **/

a.callToAction
{
	padding: 0px;
border: 1px solid rgb(255, 131, 0);
border-radius: 6px;
display: inline-block;
line-height: 34px;
outline: 0 none;
height: 34px;

	
}

	a.callToAction span
	{
		font-weight: bold;
font-size: 13px;
font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
color: rgb(138, 79, 16);
background-color: #fdbe01;
padding: 0 15px;
border-radius: 6px;
display: block;
background: -moz-linear-gradient(top,  #fdbe01 0%, #ffc100 100%);
background: -webkit-linear-gradient(top,  #fdbe01 0%,#ffc100 100%);
background: linear-gradient(to bottom,  #fdbe01 0%,#ffc100 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fdbe01', endColorstr='#ffc100',GradientType=0 );
/*text-shadow: 0px 0px 3px rgb(70, 70, 70);*/
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fdbe01+0,ffc100+100 */
/* Old browsers */
/* FF3.6-15 */
/* Chrome10-25,Safari5.1-6 */
/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
/* IE6-9 */

	}
	
	a.callToAction:hover
	{
		text-decoration: none;
	}

		a.callToAction:hover span
		{
			color: rgb(60, 34, 7);

		}
		
		a.callToAction:active
		{
			/*position: relative;
			top: 2px;*/
		}
		
		a.callToAction:active span
		{
			background-color: rgb(70, 70, 70);

		}

/*********/

.avatarHeap
{
	overflow: hidden; zoom: 1;
}

	.avatarHeap ol
	{
		margin-right: -4px;
		margin-top: -4px;
	}
	
		.avatarHeap li
		{
			float: left;
			margin-right: 4px;
			margin-top: 4px;
		}
		
		.avatarHeap li .avatar
		{
			display: block;
		}
		
/*********/

.fbWidgetBlock .fb_iframe_widget,
.fbWidgetBlock .fb_iframe_widget > span,
.fbWidgetBlock .fb_iframe_widget iframe
{
	width: 100% !important;
}

/*********/

.tagBlock
{
	margin: 10px 0;
	font-size: 11px;
}

.tagList,
.tagList li
{
	display: inline;
}


.tagList .tag
{
	position: relative;
	display: inline-block;
	background: url(rgba.php?r=120&g=120&b=72&a=255); background: rgba(120,120,72,1); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#FF787848,endColorstr=#FF787848);
	margin-left: 9px;
	height: 14px;
	line-height: 14px;
	padding: 1px 4px 1px 6px;
	border:  1px solid rgb(120,120,72); border:  1px solid rgba(120,120,72, 1); _border:  1px solid rgb(120,120,72);
	border-left: none;
	border-radius: 4px;
	border-top-left-radius: 0;
	border-bottom-left-radius: 0;
	color: rgb(255, 255, 255);
	font-size: 11px;
	margin-bottom: 2px;
}

	.tagList .tag:hover
	{
		text-decoration: none;
		background-color: rgb(16, 16, 16);
		color: ;
		border-color: rgb(24, 24, 12);
	}
	
	.tagList .tag:hover .arrow
	{
		border-right-color: rgb(24, 24, 12);
	}

	.tagList .tag .arrow
	{
		content: '';
		position: absolute;
		display: block;
		height: 2px;
		width: 0;
		left: -9px;
		top: -1px;
		border-style: solid;
		border-width: 8px 9px 8px 0;
		border-color: transparent;
		border-right-color:  rgb(120,120,72); border-right-color:  rgba(120,120,72, 1); _border-right-color:  rgb(120,120,72);
	}

		.tagList .tag .arrow:after
		{
			content: '';
			position: absolute;
			display: block;
			height: 2px;
			width: 0;
			left: 1px;
			top: -7px;
			border-style: solid;
			border-width: 7px 8px 7px 0;
			border-color: transparent;
			border-right-color:  rgb(120,120,72); border-right-color:  rgba(120,120,72, 1); _border-right-color:  rgb(120,120,72);
		}

		.tagList .tag:hover .arrow:after
		{
			border-right-color: rgb(16, 16, 16);
		}

	.tagList .tag:after
	{
		content: '';
		position: absolute;
		left: -2px;
		top: 6px;
		display: block;
		height: 3px;
		width: 3px;
		border-radius: 50%;
		border:  rgb(120,120,72); border:  rgba(120,120,72, 1); _border:  rgb(120,120,72);
		background: rgb(24, 24, 24);
	}

/* User name classes */

.username .style3
{
	color: #C60;
}

.username .style38
{
	text-align: center;
  color: rgba(255,215,0,0.5);
  background: -webkit-gradient(linear, left top, right top, from(#FFD700), to(#FFD700), color-stop(0.5, #FFDF00));
  background: -moz-gradient(linear, left top, right top, from(#FFD700), to(#FFD700), color-stop(0.5, #FFDF00));
  background: gradient(linear, left top, right top, from(#FFD700), to(#FFD700), color-stop(0.5, #FFDF00));
  -webkit-background-size: 40px 100%;
  -moz-background-size: 40px 100%;
  background-size: 40px 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  -webkit-animation-name: queen;
  -moz-animation-name: queen;
  animation-name: queen;
  -webkit-animation-duration: 4s;
  -moz-animation-duration: 4s;
  animation-duration: 4s;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  background-repeat: no-repeat;
  background-position: 0 0;
}

.username .style36
{
	color: #390;
}

.username .style39
{
	color: #666
}

.username .style5
{
	color: #333;
}

.username .style4
{
	color: #900;
}

.username .style12
{
	color: #03C;
}

.username .style32
{
	text-align: center;
  color: rgba(255,215,0,0.5);
  background: -webkit-gradient(linear, left top, right top, from(#FFD700), to(#FFD700), color-stop(0.5, #FFDF00));
  background: -moz-gradient(linear, left top, right top, from(#FFD700), to(#FFD700), color-stop(0.5, #FFDF00));
  background: gradient(linear, left top, right top, from(#FFD700), to(#FFD700), color-stop(0.5, #FFDF00));
  -webkit-background-size: 40px 100%;
  -moz-background-size: 40px 100%;
  background-size: 40px 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  -webkit-animation-name: queen;
  -moz-animation-name: queen;
  animation-name: queen;
  -webkit-animation-duration: 4s;
  -moz-animation-duration: 4s;
  animation-duration: 4s;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  background-repeat: no-repeat;
  background-position: 0 0;
}

.username .style34
{
	color: #6E2A64;
}

.username .style37
{
	color: #390;
}

.username .style25
{
	color: #09C;
}

.username .style35
{
	color: #333;
}

.username .style18
{
	color: #390;
}

.username .style9
{
	color: #CC0279;
}


.username .banned
{
	text-decoration: line-through;
}

.prefix
{
	background-color: transparent;
padding: 0px 6px;
margin: -1px 0;
border: 1px solid transparent;
border-radius: 4px;
display: inline-block;

}

a.prefixLink:hover
{
	text-decoration: none;
}

a.prefixLink:hover .prefix
{
	color: rgb(70, 70, 70);
text-decoration: none;
background-color: rgb(68, 68, 68);
padding: 0 6px;
border: 1px solid rgb(38, 38, 38);

}

.prefix a { color: inherit; }

.prefix.prefixPrimary    { color: rgb(70, 70, 70); background-color: rgb(24, 24, 12); border-color: rgb(24, 24, 12); }
.prefix.prefixSecondary  { color: rgb(73, 73, 73); background-color: rgb(203, 203, 203); border-color: rgb(203, 203, 203); }

.prefix.prefixRed        { color: white; background-color: red; border-color: #F88; }
.prefix.prefixGreen      { color: white; background-color: green; border-color: green; }
.prefix.prefixOlive      { color: black; background-color: olive; border-color: olive; }
.prefix.prefixLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.prefix.prefixBlue       { color: white; background-color: blue; border-color: #88F; }
.prefix.prefixRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.prefix.prefixSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.prefix.prefixGray       { color: black; background-color: gray; border-color: #AAA; }
.prefix.prefixSilver     { color: black; background-color: silver; border-color: silver; }
.prefix.prefixYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.prefix.prefixOrange     { color: black; background-color: orange; border-color: #FFC520; }

.discussionListItem .prefix,
.searchResult .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	font-weight: normal;
}

h1 .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	line-height: normal;
}

.breadcrumb span.prefix,
.heading span.prefix
{
	font-style: italic;
font-weight: bold;
padding: 0;
margin: 0;
border: 0 none black;
border-radius: 0;
display: inline;

	color: inherit;
}

.userBanner
{
	font-size: 11px;
	background: transparent url('styles/sonicretroxf/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	padding: 1px 5px;
	border: 1px solid transparent;
	border-radius: 3px;
	box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
	text-align: center;
}

	.userBanner.wrapped
	{
		border-top-right-radius: 0;
		border-top-left-radius: 0;
		position: relative;
	}
		
		.userBanner.wrapped span
		{
			position: absolute;
			top: -4px;
			width: 5px;
			height: 4px;
			background-color: inherit;
		}
		
		.userBanner.wrapped span.before
		{
			border-top-left-radius: 3px;
			left: -1px;
		}
		
		.userBanner.wrapped span.after
		{
			border-top-right-radius: 3px;
			right: -1px;
		}
		
.userBanner.bannerHidden { background: none; box-shadow: none; border: none; }
.userBanner.bannerHidden.wrapped { margin-left: 0; margin-right: 0; }
.userBanner.bannerHidden.wrapped span { display: none; }

.userBanner.bannerStaff { color: rgb(70, 70, 70); background-color: rgb(24, 24, 12); border-color: rgb(38, 38, 38); }
.userBanner.bannerStaff.wrapped span { background-color: rgb(38, 38, 38); }

.userBanner.bannerPrimary { color: rgb(70, 70, 70); background-color: rgb(24, 24, 12); border-color: rgb(38, 38, 38); }
.userBanner.bannerPrimary.wrapped span { background-color: rgb(38, 38, 38); }

.userBanner.bannerSecondary { color: rgb(73, 73, 73); background-color: rgb(203, 203, 203); border-color: rgb(203, 203, 203); }
.userBanner.bannerSecondary.wrapped span { background-color: rgb(203, 203, 203); }

.userBanner.bannerRed        { color: white; background-color: red; border-color: #F88; }
.userBanner.bannerRed.wrapped span { background-color: #F88; }

.userBanner.bannerGreen      { color: white; background-color: green; border-color: green; }
.userBanner.bannerGreen.wrapped span { background-color: green; }

.userBanner.bannerOlive      { color: black; background-color: olive; border-color: olive; }
.userBanner.bannerOlive.wrapped span { background-color: olive; }

.userBanner.bannerLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.userBanner.bannerLightGreen.wrapped span { background-color: lightgreen; }

.userBanner.bannerBlue       { color: white; background-color: blue; border-color: #88F; }
.userBanner.bannerBlue.wrapped span { background-color: #88F; }

.userBanner.bannerRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.userBanner.bannerRoyalBlue.wrapped span { background-color: #81A9E1; }

.userBanner.bannerSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.userBanner.bannerSkyBlue.wrapped span { background-color: skyblue; }

.userBanner.bannerGray       { color: black; background-color: gray; border-color: #AAA; }
.userBanner.bannerGray.wrapped span { background-color: #AAA; }

.userBanner.bannerSilver     { color: black; background-color: silver; border-color: silver; }
.userBanner.bannerSilver.wrapped span { background-color: silver; }

.userBanner.bannerYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.userBanner.bannerYellow.wrapped span { background-color: #E0E000; }

.userBanner.bannerOrange     { color: black; background-color: orange; border-color: #FFC520; }
.userBanner.bannerOrange.wrapped span { background-color: #FFC520; }


@media (max-width:800px)
{
	.Responsive .pageWidth
	{
		max-width: 100%;

	}

	.Responsive #content .pageContent
	{
		padding-left: 0px;
		padding-right: 0px;
	}
}

@media (max-width:610px)
{
	.Responsive .pageWidth
	{
		padding-right: 0;
padding-left: 0;
margin-right: 0;
margin-left: 0;

	}
	
	.Responsive .forum_view #pageDescription,
	.Responsive .thread_view #pageDescription
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .pageWidth
	{
		
	}
	
	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup
	{
		clear: right;
	}
}


@font-face {
  font-family: 'AdobeBlank';
  src: url('blank/AdobeBlank.eot'); /* IE9 Compat Modes */
  src: url('blank/AdobeBlank.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('blank/AdobeBlank.woff2') format('woff2'), /* Super Modern Browsers */
       url('blank/AdobeBlank.woff') format('woff'), /* Pretty Modern Browsers */
       url('blank/AdobeBlank.ttf')  format('truetype'), /* Safari, Android, iOS */
}
.thread_view .messageList .messageUserInfo a.avatar img,
.thread_view .quickReply .messageUserInfo a.avatar img,
.conversation_view .messageList .messageUserInfo a.avatar img,
.conversation_view .quickReply .messageUserInfo a.avatar img
{
	width: 150px !important;
	height: auto;
}
.userStats dt, .userStats dl {display:inline-block;}

.message .messageInfo,
#QuickReply
{
	margin-left: 186px !important;
}
em[class^="group-"] {
text-align:center; width:120px; margin:0 auto; height:15px; display:block;font-family:AdobeBlank
}

span[class^="prefix"], .PrefixMenu .PrefixOption a {
    font-family: AdobeBlank;
    display: inline-flex;
    background-repeat: no-repeat;
    vertical-align:middle;
    width: 54px;
    height: 18px;
}
.prefix.noPrefix {font-size:0.8em !important; font-family:inherit !important;}
.PrefixMenu {width:80px;min-width:80px;max-width:80px}
span[rel="Menu"] {
    background-repeat: no-repeat !important;
}
.PrefixMenu .PrefixOption a {padding: 0 !important}
.prefix-utility {
    background: url('styles/prefix/pre-util.png');
    width: 48px;
    height: 16px;
}
.textCtrl .prefix, .textCtrl .Popup {
    height: 20px !important;
    margin-top: 9px;
}
.Popup .arrowWidget {display:none !important;}
.prefix-asm {background: url('styles/prefix/pre-asm.png'); width:54px; height: 18px;}
.prefix-art {background: url('styles/prefix/pre-art.png');}
.prefix-beta {background: url('styles/prefix/pre-beta.png');}
.prefix-find {background: url('styles/prefix/pre-find.png');}
.prefix-format {background: url('styles/prefix/pre-format.png');}
.prefix-guide {background: url('styles/prefix/pre-guide.png');}
.prefix-hack {background: url('styles/prefix/pre-hack.png');}
.prefix-help {background: url('styles/prefix/pre-help.png');}
.prefix-hex {background: url('styles/prefix/pre-hex.png');}
.prefix-interview {background: url('styles/prefix/pre-intvw.png');}
.prefix-music {background: url('styles/prefix/pre-music.png'); height: 21px !important;}
.prefix-news {background: url('styles/prefix/pre-format.png');}
.prefix-nextgen {background: url('styles/prefix/pre-nextgen.png');}
.prefix-scans {background: url('styles/prefix/pre-scan.png');}
.prefix-system {background: url('styles/prefix/pre-sys.png');}
.prefix-theory {background: url('styles/prefix/pre-theory.png');}
@media only screen and (min-width:1024px) {.xenForm {
    max-width: inherit !important;
}}
.extraUserInfo dd, .extraUserInfo dt {
    display: inline-block;
}
.extraUserInfo dd {float:right;}
.pairsJustified dd {max-width:85% !important;}
.userText a span:not(.style32) {
    color: #FF0 !important;
}
.baseHtml.signature.messageText.ugc {
    border-top: 1px dotted #3f3f1f;
}
@media (max-width:420px) {
#retro_title a {width: auto !important;}
#logoBlock {background-size: 113vw !important;}
}
@media (max-width: 480px){
.thread_view .messageList .messageUserInfo a.avatar img, .thread_view .quickReply .messageUserInfo a.avatar img, .conversation_view .messageList .messageUserInfo a.avatar img, .conversation_view .quickReply .messageUserInfo a.avatar img {
    width: 64px !important;
    height: auto;
}
.userTitle, em[class^="group-"]  {margin-left:86px;}
.messageUserInfo {max-width: 100% !important;}
}
@media (max-width:370px) {
.navTabs .publicTabs {display: none;}
}
.commaImplode a {
    font-weight: bold;
}

@-moz-keyframes queen {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-webkit-keyframes queen {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-o-keyframes queen {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@keyframes queen {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-moz-keyframes queen {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-webkit-keyframes queen {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-o-keyframes queen {
  0% {
    background-position: top left;
  }
    100% {
    background-position: top right;
  }
}
@keyframes queen {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}

.style32::before {
    content: "\01F451";
}
.bbCodeBlock.bbCodeQuote {
    margin-bottom: 0.5em;
}
img[alt="Like"]{height:16px;}
.navicon {width:26px; opacity:.666; position:relative; top: 3px}
.navicon:hover {opacity:1}
/***DISABLE SIDEBAR***/

.sidebar 
{display: none;}
.mainContainer
{float: left;
margin-left: -300px;
width: 100%;}
.mainContent
{margin-left: 300px;
width: 100%;}

/***DISABLE SIDEBAR***/

/***SIDEBAR ON LEFT SIDE***/

/***SIDEBAR ON LEFT SIDE***/

/***SIDEBAR ON LEFT AND DISABLE SIDEBAR FIX***/

/***SIDEBAR ON LEFT AND DISABLE SIDEBAR FIX***/

/***DISABLE SIDEBAR VISITOR PANEL***/

/***DISABLE SIDEBAR VISITOR PANEL***/

/***DISABLE SIDEBAR STAFF ONLINE NOW***/

/***DISABLE SIDEBAR STAFF ONLINE NOW***/

/***DISABLE SIDEBAR MEMBERS ONLINE NOW***/

/***DISABLE SIDEBAR MEMBERS ONLINE NOW***/

/***DISABLE SIDEBAR NEW POSTS***/

/***DISABLE SIDEBAR NEW POSTS***/

/***DISABLE SIDEBAR FORUM STATS***/

/***DISABLE SIDEBAR FORUM STATS***/

/***DISABLE SIDEBAR SHARE NOW***/

/***DISABLE SIDEBAR SHARE NOW***/
