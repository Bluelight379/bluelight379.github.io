@charset "UTF-8";

/* --- bb_code.css --- */

/* .bbCodeX classes are designed to exist inside .baseHtml. ie: they have no CSS reset applied */

.bbCodeBlock
{
	margin: 1em  1em 0;
border: 1px solid rgb(24, 24, 12);
border-radius: 6px;
overflow: auto;

}

	.bbCodeBlock .bbCodeBlock,
	.hasJs .bbCodeBlock .bbCodeSpoilerText,
	.messageList.withSidebar .bbCodeBlock
	{
		margin-right: 0;
	}

	/* mini CSS reset */
	.bbCodeBlock pre,
	.bbCodeBlock blockquote
	{
		margin: 0;
	}
	
	.bbCodeBlock img
	{
		border: none;
	}

.bbCodeBlock .type
{
	font-size: 12px;
font-family: "Open Sans",Verdana,Tahoma,Arial,"Trebuchet MS",sans-serif,Georgia,Courier,"Times New Roman",serif;
color: rgb(255, 255, 255);
background-color: rgb(24, 24, 12);
padding: 6px 8px;
border-bottom: 1px solid rgb(24, 24, 12);
border-top-left-radius: 6px;
border-top-right-radius: 6px;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#3f3f1f+0,212110+100 */
background: rgb(63,63,31); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(63,63,31,1) 0%, rgba(33,33,16,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(63,63,31,1) 0%,rgba(33,33,16,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(63,63,31,1) 0%,rgba(33,33,16,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3f3f1f', endColorstr='#212110',GradientType=0 ); /* IE6-9 */

}

.bbCodeBlock pre,
.bbCodeBlock .code
{
	font-size: 12px;
font-family: Consolas, 'Courier New', Courier, monospace;
background-color: rgb(24, 24, 12);
padding: 10px;
border-bottom-right-radius: 6px;
border-bottom-left-radius: 6px;
word-wrap: normal;
overflow: auto;
line-height: 1.24;
min-height: 30px;
max-height: 500px;
_width: 600px;
direction: ltr;

}

.bbCodeBlock .code
{
	white-space: nowrap;
}

.bbCodeQuote
{
	overflow: auto;

}

.bbCodeQuote .attribution
{
	
}

.bbCodeQuote .quoteContainer
{
	overflow: hidden;
	position: relative;
	
	font-style: italic;
font-size: 12px;
background-color: rgb(24, 24, 12);
padding: 10px;
border-radius: 6px;

}


	.bbCodeQuote .quoteContainer .quote
	{
		max-height: 150px;
		overflow: hidden;
		padding-bottom: 1px;
	}
	
		.NoJs .bbCodeQuote .quoteContainer .quote
		{
			max-height: none;
		}

	.bbCodeQuote .quoteContainer .quoteExpand
	{		
		display: none;
		box-sizing: border-box;
		position: absolute;
		height: 80px;
		top: 90px;
		left: 0;
		right: 0;
		
		font-size: 11px;
		line-height: 1;
		text-align: center;
		color: rgb(156, 156, 156);
		cursor: pointer;
		padding-top: 65px;
		background: -webkit-linear-gradient(top, rgba(24, 24, 12, 0) 0%, rgb(24, 24, 12) 80%);
		background: -moz-linear-gradient(top, rgba(24, 24, 12, 0) 0%, rgb(24, 24, 12) 80%);
		background: -o-linear-gradient(top, rgba(24, 24, 12, 0) 0%, rgb(24, 24, 12) 80%);
		background: linear-gradient(to bottom, rgba(24, 24, 12, 0) 0%, rgb(24, 24, 12) 80%);
		
		border-bottom-left-radius: 6px;
		border-bottom-right-radius: 6px;
	}
	
	.bbCodeQuote .quoteContainer .quoteExpand.quoteCut
	{
		display: block;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quote
	{
		max-height: none;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quoteExpand
	{
		display: none;
	}


	.bbCodeQuote img
	{
		max-height: 150px;
	}
	
	.bbCodeQuote iframe,
	.bbCodeQuote .fb_iframe_widget,
	.bbCodeQuote object,
	.bbCodeQuote embed
	{
		max-width: 200px;
		max-height: 150px;
	}
	
	.bbCodeQuote iframe:-webkit-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-moz-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-ms-fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
.bbCodeSpoilerButton
{
	margin: 5px 0;
	max-width: 99%;
}

	.bbCodeSpoilerButton > span
	{
		display: inline-block;
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
.hasJs .bbCodeSpoilerText
{
	display: none;
	background-color: rgb(68, 68, 68);
padding: 5px;
margin-top: 5px;
margin-right: ;
margin-bottom: 5px;
border: 1px solid rgb(24, 24, 12);
border-radius: 6px;
overflow: auto;

}

	.hasJs .bbCodeSpoilerText .bbCodeSpoilerText,
	.hasJs .bbCodeSpoilerText .bbCodeBlock,
	.hasJs .messageList.withSidebar .bbCodeSpoilerText
	{
		margin-right: 0;
	}
	
.NoJs .bbCodeSpoilerContainer
{
	background-color: rgb(255, 255, 255); /* fallback for browsers without currentColor */
	background-color: currentColor;
}

	.NoJs .bbCodeSpoilerContainer > .bbCodeSpoilerText
	{
		visibility: hidden;
	}

	.NoJs .bbCodeSpoilerContainer:hover
	{
		background-color: transparent;
	}
	
		.NoJs .bbCodeSpoilerContainer:hover > .bbCodeSpoilerText
		{
			visibility: visible;
		}


@media (max-width:800px)
{
	.Responsive .bbCodeBlock,
	.Responsive.hasJs .bbCodeSpoilerText
	{
		margin-right: 0;
	}
}
.bbCodePHP ol,
.bbCodeHtml ol,
.bbCodeCode ol {
	color: lightgrey;
	-moz-user-select: -moz-none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.bbCodePHP li > div,
.bbCodeHtml li > div,
.bbCodeCode li > div {
	color: grey;
	-moz-user-select: text;
	-khtml-user-select: text;
	-webkit-user-select: text;
	-ms-user-select: text;
	user-select: text;
}

/* --- dark_postrating.css --- */

.message .dark_postrating.likesSummary, .dark_postrating { margin-top: 10px; padding-bottom: 2px; min-height: 19px; } 
.messageSimple .dark_postrating { background: transparent; border-bottom: none; /*margin-left: 65px;*/ margin-top: 6px !important; /*border-top: 1px solid rgb(68, 68, 68);*/ }
dd.dark_postrating_bar_dd {
    max-width: 100% !important;
}
.dark_postrating_table { border-spacing: 5px; border-collapse: separate; }
.dark_postrating_detail { background: rgb(24, 24, 24); font-family: 'Trebuchet MS',Helvetica,Arial,sans-serif; color:rgb(202, 202, 202); font-size: 11px; padding: 4px !important; }
.dark_postrating_column { vertical-align: top; padding: 0; margin: 3px; width: 155px; border: 1px solid rgb(24, 24, 12); }
.dark_postrating_column > div { display: block; max-height: 105px; overflow: auto; padding: 7px; }
.dark_postrating_delete { display: block; visibility: hidden; float: left; height: 13px; margin-right: 3px; width: 12px; color: #FF30F2; background: url(styles/dark/cross_small.png) center no-repeat; }
.dark_postrating_column:hover .dark_postrating_moderator { visibility: visible !important; }
.dark_postrating_header strong { font-weight: bold; color:rgb(202, 202, 202);  }
.dark_postrating_header img { vertical-align: middle; position: relative; top: -2px; }
.dark_postrating_header { font-size: 14px; margin-bottom: 2px; padding-bottom: 3px; border-bottom: 1px dotted rgb(24, 24, 12); }
.dark_postrating_column a.username { display: block; /*float: left; clear: left;*/ }
/*.dark_postrating_delete + a.username { width: 125px; }*/

.dark_postrating_member { border-spacing: 0; border-collapse: separate; border-width: 0 1px 0px 1px; border-style: solid; border-color: rgb(24, 24, 12); color: rgb(255, 255, 255); width: 100%; padding: 5px 25px; }
.dark_postrating_member td, .dark_postrating_member th { padding: 2px 4px 1px; text-align: center; }
.dark_postrating_member td { border-width: 1px 0px 0 0; border-style: solid; border-color: rgb(24, 24, 12); }
.dark_postrating_member tr:nth-child(2) td { border-width: 0; }
.dark_postrating_member th { color: rgb(202, 202, 202); font-size: 11px; }
.dark_postrating_member img { vertical-align: text-top; }
.dark_postrating_positive { color: #62A201; }
.dark_postrating_negative { color: #D90B00; }
.dark_postrating_bar { width: 80px; height: 10px; background: transparent; border: 1px solid #ddd; border-radius: 2px; padding: 1px; font-size: 0; }
.dark_postrating_bar_positive { height: 10px; background: #62A201; display: inline-block; opacity: 0.4; font-size: 0; }
.dark_postrating_bar_neutral { height: 10px; background: #bbb; display: inline-block; opacity: 0.4; font-size: 0; }
.dark_postrating_bar_negative { height: 10px; background: #D90B00; display: inline-block; opacity: 0.4; font-size: 0; }
.dark_postrating_bar:hover > div { opacity: 1.0; }
.profilePage .infoBlock dd.dark_postrating_bar_dd:last-child { margin-bottom: 0; }

.dark_postrating_inputlist { display: block; cursor: default; float: right; opacity: 1.0; font-size: 11px; -ms-filter:'alpha(opacity=100)'; filter:alpha(opacity=100) }
.dark_postrating_inputlist.dark_postrating_inputlist_undo li { opacity: 1.0; -ms-filter:'alpha(opacity=100)'; filter:alpha(opacity=100) }
.dark_postrating_inputlist li { display: inline; opacity: 0.5; -ms-filter:'alpha(opacity=50)'; filter:alpha(opacity=50); zoom:1; }
.dark_postrating_ie8 .dark_postrating_inputlist li { display: inline-block }
.dark_postrating_inputlist li:hover { opacity: 1.0; -ms-filter:'alpha(opacity=100)'; filter:alpha(opacity=100) }
li.dark_postrating_textonly { vertical-align: top; display: inline-block; margin: 1px 4px 0 4px; }

.dark_postrating_outputlist { display: block; margin-left: 3px; float: left; font-family: 'Trebuchet MS',Helvetica,Arial,sans-serif; color: rgb(202, 202, 202); font-size: 11px; }
.dark_postrating_outputlist li { display: inline; margin-right: 6px; }
.dark_postrating_outputlist li strong, .dark_postrating_thread_rating strong { font-weight: bold; color: rgb(202, 202, 202); }
.dark_postrating_outputlist li img, .dark_postrating_thread_rating img { vertical-align: text-top; }
.dark_postrating_thread_rating { float: right; font-family: 'Trebuchet MS',Helvetica,Arial,sans-serif; color: rgb(202, 202, 202); font-size: 11px; margin-left: 10px; }
.discussionListItem .iconKey span ~ .dark_postrating_thread_rating { margin-right: 10px; }


.dark_postrating_hide_post { display: none }
.message > .dark_postrating_hide_post { display: block !important }

.pairsJustified .dark_postrating_bar_dd { width: 100%; }
.pairsJustified .dark_postrating_bar_dd div { margin: 1px auto 5px auto; }
.pairsJustified .dark_postrating_bar_dd + dd { float: left; width: 100%; text-align: left; }

/* fix above sig float bug */
.message .messageMeta { margin: 0 !important;}


@media (max-width:480px)
{
	.dark_postrating_column { display: block; float: left; }
}


/* --- login_bar.css --- */

/** Login bar basics **/

#loginBar
{
	color: rgb(255, 255, 255);
background-color: rgb(45, 45, 45);
border-bottom: 0px solid rgb(88, 88, 88);
position: relative;
z-index: 1000;

}

	#loginBar .ctrlWrapper
	{
		margin: 0 10px;
	}

	#loginBar .pageContent
	{
		padding-top: 0px;
		position: relative;
		_height: 0px;
	}

	#loginBar a
	{
		color: rgb(255, 131, 0);

	}

	#loginBar form
	{
		padding: 5px 0;
margin: 0 auto;
display: none;
line-height: 20px;
position: relative;

	}
	
		#loginBar .xenForm .ctrlUnit,		
		#loginBar .xenForm .ctrlUnit > dt label
		{
			margin: 0;
			border: none;
		}
	
		#loginBar .xenForm .ctrlUnit > dd
		{
			position: relative;
		}
	
	#loginBar .lostPassword,
	#loginBar .lostPasswordLogin
	{
		font-size: 11px;
	}
	
	#loginBar .rememberPassword
	{
		font-size: 11px;
	}

	#loginBar .textCtrl
	{
		color: rgb(202, 202, 202);
background-color: rgb(50, 50, 50);
border-color: rgb(88, 88, 88);

	}
	
	#loginBar .textCtrl[type=text]
	{
		font-weight: bold;
font-size: 18px;

	}

	#loginBar .textCtrl:-webkit-autofill /* http://code.google.com/p/chromium/issues/detail?id=1334#c35 */
	{
		background: rgb(50, 50, 50) !important;
		color: rgb(202, 202, 202);
	}

	#loginBar .textCtrl:focus
	{
		background: black none;

	}
	
	#loginBar input.textCtrl.disabled
	{
		color: rgb(122, 122, 122);
background-color: rgb(45, 45, 45);
border-style: dashed;

	}
	
	#loginBar .button
	{
		min-width: 85px;
		*width: 85px;
	}
	
		#loginBar .button.primary
		{
			font-weight: bold;
		}
		
/** changes when eAuth is present **/

#loginBar form.eAuth
{
	-x-max-width: 700px; /* normal width + 170px */
}

	#loginBar form.eAuth .ctrlWrapper
	{
		border-right: 1px dotted rgb(70, 70, 70);
		margin-right: 200px;
		box-sizing: border-box;
	}

	#loginBar form.eAuth #eAuthUnit
	{
		position: absolute;
		top: 0px;
		right: 10px;
	}

		#eAuthUnit li
		{
			margin-top: 10px;
			line-height: 0;
		}
	
/** handle **/

#loginBar #loginBarHandle
{
	font-size: 12px;
color: rgb(202, 202, 202);
background-color: rgb(45, 45, 45);
padding: 0 10px;
margin-right: 20px;
border-bottom-right-radius: 8px;
border-bottom-left-radius: 8px;
position: absolute;
right: 0px;
bottom: -20px;
text-align: center;
z-index: 1;
line-height: 20px;
box-shadow: 0px 2px 5px rgb(45, 45, 45);

}


@media (max-width:800px)
{
	.Responsive #loginBar form.eAuth .ctrlWrapper
	{
		border-right: none;
		margin-right: 10px;
	}

	.Responsive #loginBar form.eAuth #eAuthUnit
	{
		position: static;
		width: 180px;
		margin: 0 auto 10px;
	}
}


/* --- message.css --- */



.messageList
{
	
}

.messageList .message
{
	background-color: rgb(16, 16, 16);
padding: 10px;
margin-bottom: 10px;
border-top: 1px solid rgb(24, 24, 12);
border-radius: 6px;

}

/* clearfix */ .messageList .message { zoom: 1; } .messageList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/*** Message block ***/

.message .messageInfo
{
	background: url(rgba.php?r=0&g=0&b=0&a=0); background: rgba(0, 0, 0, 0); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00000000,endColorstr=#00000000);
padding: 0 0 0 5px;
border-bottom: 1px none black;

	zoom: 1;
}

	.message .newIndicator
	{
		font-size: 12px;
color: rgb(255, 255, 255);
background-color: rgb(206, 39, 39);
padding: 1px 5px;
margin: -5px -5px 5px 5px;
border: 1px solid rgb(206, 39, 39);
border-radius: 4px;
border-top-right-radius: 0px;
display: block;
float: right;
position: relative;
box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);

		
		margin-right: -5px;
	}
	
		.message .newIndicator span
		{
			background-color: rgb(206, 39, 39);
border-top-right-radius: 4px;
position: absolute;
top: -4px;
right: -1px;
width: 5px;
height: 4px;

		}

	.message .messageContent
	{
		padding-bottom: 2px;
min-height: 100px;
overflow: hidden;
*zoom: 1;

	}
	
	.message .messageTextEndMarker
	{
		height: 0;
		font-size: 0;
		overflow: hidden;
	}
	
	.message .editDate
	{
		text-align: right;
		margin-top: 5px;
		font-size: 11px;
		color: rgb(202, 202, 202);
	}

	.message .signature
	{
		font-size: 90%;
color: rgb(202, 202, 202);
padding: 5px 0 0;
margin-top: 5px;
border-top: 1px dashed rgb(24, 24, 12);

	}

	.message .messageMeta
	{
		font-size: 12px;
padding: 15px 5px 5px;
margin: -5px;
overflow: hidden;
zoom: 1;

	}

		.message .privateControls
		{
			float: left;

		}

		.message .publicControls
		{
			float: right;

		}
		
			.message .privateControls .item
			{
				margin-right: 10px;
				float: left;
			}

				.message .privateControls .item:last-child
				{
					margin-right: 0;
				}

			.message .publicControls .item
			{
				margin-left: 10px;
				float: left;
			}
	
				.message .messageMeta .control
				{
					
				}
				
					.message .messageMeta .control:focus
					{
						
					}
				
					.message .messageMeta .control:hover
					{
						
					}
				
					.message .messageMeta .control:active
					{
						
					}
	/*** multiquote +/- ***/
			
	.message .publicControls .MultiQuoteControl
	{
		padding-left: 4px;
		padding-right: 4px;
		border-radius: 2px;
		margin-left: 6px;
		margin-right: -4px;
	}
	
	
	.message .publicControls .MultiQuoteControl.active
	{
		background-color: rgb(24, 24, 12);
	}
	
		.messageNotices li
	{
		font-size: 12px;
color: rgb(202, 202, 202);
background-color: rgb(16, 16, 16);
padding: 5px;
margin: 10px 0;
border: 1px solid rgb(24, 24, 12);
border-radius: 4px;
line-height: 16px;

	}
	
		.messageNotices .icon
		{
			float: right;
		}
	
	.message .likesSummary
	{
		padding: 5px;
margin-top: 10px;
border: 1px solid rgb(24, 24, 12);
border-radius: 6px;

	}
	
	.message .messageText > *:first-child
	{
		margin-top: 0;
	}

/* inline moderation changes */

.InlineModChecked .messageUserBlock,
.InlineModChecked .messageInfo,
.InlineModChecked .messageNotices,
.InlineModChecked .bbCodeBlock .type,
.InlineModChecked .bbCodeBlock blockquote,
.InlineModChecked .attachedFiles .attachedFilesHeader,
.InlineModChecked .attachedFiles .attachmentList
{
	background-color: rgb(51, 51, 51);

}

.InlineModChecked .messageUserBlock div.avatarHolder,
.InlineModChecked .messageUserBlock .extraUserInfo
{
	background: transparent;
}

.InlineModChecked .messageUserBlock .arrow span
{
	border-left-color: rgb(51, 51, 51);
}

/* message list */

.messageList .newMessagesNotice
{
	margin: 10px auto;
	padding: 5px 10px;
	border-radius: 5px;
	border: 1px solid rgb(38, 38, 38);
	background: rgb(24, 24, 12) url(styles/sonicretroxf/xenforo/gradients/category-23px-light.png) repeat-x top;
	font-size: 11px;
}

/* deleted / ignored message placeholder */

.messageList .message.placeholder
{
}

.messageList .placeholder .placeholderContent
{	
	overflow: hidden; zoom: 1;
	color: rgb(88, 88, 88);
	font-size: 11px;
}

	.messageList .placeholder a.avatar
	{
		float: left;
		display: block;
	}
	
		.messageList .placeholder a.avatar img
		{
			display: block;
			width: 32px;
			height: 32px;
		}
		
	.messageList .placeholder .privateControls
	{
		margin-top: -5px;
	}
	

/* messages remaining link */

.postsRemaining a,
a.postsRemaining
{
	font-size: 11px;
	color: rgb(202, 202, 202);
}


@media (max-width:800px)
{
	.Responsive .message .newIndicator
	{
		margin-right: 0;
		border-top-right-radius: 4px;
	}
	
		.Responsive .message .newIndicator span
		{
			display: none;
		}
}

@media (max-width:480px)
{
	.Responsive .message .messageInfo
	{
		margin-left: 0;
		padding: 0 10px;
	}

	.Responsive .message .messageContent
	{
		min-height: 0;
	}	

	.Responsive .message .newIndicator
	{
		margin-right: -5px;
		margin-top: -16px;
	}

	.Responsive .message .postNumber,
	.Responsive .message .authorEnd
	{
		display: none;
	}
	
	.Responsive .message .signature
	{
		display: none;
	}
	
	.Responsive .messageList .placeholder a.avatar
	{
		margin-right: 10px;
	}
}


/* --- message_user_info.css --- */



.messageUserBlock .extraUserInfo.xbBoxedFA .xbMessages,
.messageUserBlock .extraUserInfo.xbBoxedFA .xbLikes,
.messageUserBlock .extraUserInfo.xbBoxedFA .xbTrophyPoints
{
        font-size: 120%;
margin: 2px 0px;
border: 1px solid rgb(24, 24, 12);
border-radius: 2px;
display: inline-block;
box-sizing: border-box;
min-width: 29%;

}
.messageUserBlock .extraUserInfo.xbBoxedFA
{
	text-align: center;
}

.messageUserBlock .extraUserInfo.xbBoxedFA .xbMessages dt,
.messageUserBlock .extraUserInfo.xbBoxedFA .xbLikes dt,
.messageUserBlock .extraUserInfo.xbBoxedFA .xbTrophyPoints dt
{
	font-size: 14px;
color: rgb(70, 70, 70);
margin-right: 0px;
float: none;
text-align: center;
display: inline-block !important;
width: auto;

}
.messageUserBlock .extraUserInfo.xbBoxedFA .xbMessages dd,
.messageUserBlock .extraUserInfo.xbBoxedFA .xbLikes dd,
.messageUserBlock .extraUserInfo.xbBoxedFA .xbTrophyPoints dd
{	
	margin-right: 0px;
float: none;
text-align: center;
width: auto;

}
.Responsive .messageUserBlock .extraUserInfo .fa
{
	color: rgb(70, 70, 70);
	font-size: 14px;
}

.dark_postrating_bar
{
	padding: 0px 1px 2px;
}

.messageUserInfo
{
	float: left;
max-width: 175px;

}

	.messageUserBlock
	{
		background-color: rgb(16, 16, 16);
border: 1px solid rgb(24, 24, 12);
border-radius: 4px;

		
		position: relative;
	}
		
		.messageUserBlock div.avatarHolder
		{
			background-color: rgb(16, 16, 16);
padding: 10px;
border-radius: 4px;
text-align: center;
	
			position: relative;	
		}
		
			.messageUserBlock div.avatarHolder .avatar
			{
				display: block;
				font-size: 0;
			}
			
	
			
		.messageUserBlock h3.userText
		{
			background-color: rgb(24, 24, 12);
padding: 6px;

		}
		
		.messageUserBlock .userBanner
		{
			display: block;
			margin-bottom: 5px;
			margin-left: -12px;
			margin-right: -12px;
		}
		
		.messageUserBlock .userBanner:last-child
		{
			margin-bottom: 0;
		}
	
		.messageUserBlock a.username
		{
			font-weight: bold;
font-size: 13px;
display: block;
overflow: hidden;
line-height: 18px;
text-align: center;

			
		}
		
		.messageUserBlock .userTitle
		{
			font-size: 12px;
padding-bottom: 5px;
display: block;
text-align: center;

		}
		
		.messageUserBlock .extraUserInfo
		{
			font-size: 12px;
background-color: rgb(16, 16, 16);
padding: 4px 6px;
border-radius: 4px;

		}
		
			.messageUserBlock .extraUserInfo dl
			{
				margin: 2px 0 0;
			}
							
			.messageUserBlock .extraUserInfo img
			{
				max-width: 100%;
			}
		
		.messageUserBlock .arrow
		{
			position: absolute;
			top: 10px;
			right: -10px;
			
			display: block;
			width: 0px;
			height: 0px;
			line-height: 0px;
			
			border: 10px solid transparent;
			border-left-color: rgb(24, 24, 12);
			-moz-border-left-colors: rgb(24, 24, 12);
			border-right: none;
			
			/* Hide from IE6 */
			_display: none;
		}
		
			.messageUserBlock .arrow span
			{
				position: absolute;
				top: -10px;
				left: -11px;
				
				display: block;
				width: 0px;
				height: 0px;
				line-height: 0px;
				
				border: 10px solid transparent;
				border-left-color: rgb(16, 16, 16);
				-moz-border-left-colors: rgb(16, 16, 16);
				border-right: none;
			}


@media (max-width:480px)
{
	.Responsive .messageUserInfo
	{
		float: none;
		width: auto; 
	}

	.Responsive .messageUserBlock
	{
		overflow: hidden;
		margin-bottom: 5px;
		position: relative;
	}

	.Responsive .messageUserBlock div.avatarHolder
	{
		float: left;
		padding: 5px;
	}

		.Responsive .messageUserBlock div.avatarHolder .avatar img
		{
			width: 48px;
			height: 48px;
		}
	.Responsive .messageUserBlock h3.userText
	{
		margin-left: 64px;
	}
	
	.Responsive .messageUserBlock .userBanner
	{
		max-width: 150px;
		margin-left: 0;
		margin-right: 0;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		position: static;
		display: inline-block;
	}
	
		.Responsive .messageUserBlock .userBanner span
		{
			display: none;
		}

	.Responsive .messageUserBlock .extraUserInfo
	{
		display: none;
	}

	.Responsive .messageUserBlock .arrow
	{
		display: none;
	}
}


/* --- thread_view.css --- */

.thread_view .threadAlerts
{
	font-size: 12px;
background-color: rgb(16, 16, 16);
padding: 5px;
margin: 10px 0;
border: 1px solid rgb(24, 24, 12);
border-radius: 4px;

}
	
	.thread_view .threadAlerts dt
	{
		color: rgb(112, 112, 112);
display: inline;

	}
	
	.thread_view .threadAlerts dd
	{
		font-weight: bold;
color: rgb(255, 255, 255);
display: inline;

	}
	
		.thread_view .threadAlerts .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			margin-left: 5px;
			color: ;
		}
		
	
.thread_view .threadAlerts + * > .messageList
{
	border-top: none;
}

.thread_view .threadNotices
{
	background-color: rgb(16, 16, 16);
	border: 1px solid rgb(24, 24, 12);
	border-radius: 4px;
	padding: 10px;
	margin: 10px auto;
}

.thread_view .InlineMod
{
	overflow: hidden; zoom: 1;
}

/* --- xb.css --- */

.alerts .xbVisitorText, .inbox .xbVisitorText
{
	display: none;
}
.accountUsername
{
	max-width: none !important;
}
#logo
{
	display: none;
}
.bgcolor2 a {
    color: rgba(255,255,255,0.666);
}
#retro_title a.current {
    background-color: rgba(255,255,255,0.15);
    margin: 0 -6px 0 6px;
    padding: 4px 6px;
}
#retro_title {
    background-image: url(styles/sonicretroxf/xenforo/sources/logo.png);
    image-rendering: auto !important;
    background-position: 0 center;
    background-repeat: no-repeat;
    background-size: auto 200%;
    clear: both;
    height: 24px;
    padding: 24px 0 24px 20px;
    position: relative;
    text-align: right;
}
#retro_title > div {
    display: inline-block;
    position: relative;
    padding-left: 20px;
}
#logoBlock
{
	background-color: rgb(48,48,24);
}
.bgcolor2 {
    color: rgba(255,255,255,0.666);
}
#retro_title a {
    font-size: 11pt;
    text-decoration: none;
    display: inline-block;
    margin: 0 0 0 12px;
    padding: 4px 2px;
}
.bgcolor2 a:hover, .bgcolor2 a.current {
    color: rgba(255,255,255,0.875);
}

.navTabs .navTab .SplitCtrl
{
	box-shadow: none !important;
}
.catHelper, .cmgForumList
{
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#787848+0,606030+100 */
background: rgb(120,120,72); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(120,120,72,1) 0%, rgba(96,96,48,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(120,120,72,1) 0%,rgba(96,96,48,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(120,120,72,1) 0%,rgba(96,96,48,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#787848', endColorstr='#606030',GradientType=0 ); /* IE6-9 */

	padding: 5px 10px;
	display: block;
	border: 1px solid #a0a070;
	border-bottom-color: #505028;
	border-radius: 0px;
}
.catHelper .catHelperLast
{
	float: right;
	margin-right: 159px;
}
.catHelper .catHelperForums
{
	margin-left: 46px;
}
.XenBase .messageHeading span a:hover
{
	color: rgb(255, 255, 255);
}
.noticeContent a
{
	text-decoration: underline;
}
.Menu.subForumsMenu
{
	box-shadow: 0px 0px 5px rgba(0,0,0, 0.3);
	margin-top: 5px;
}
.navigationSideBar .heading
{
	padding-top: 9px;
	padding-bottom: 9px;
	font-weight: normal;
}
.inbox .fa:before
{
	content: "\f0e0";
}
.nodeList .categoryStrip .nodeTitle:before
{
	content: "\f07c";
	display: inline-block;
	font-family: "Font Awesome 5 Free";
	font-size: 15px;
	font-style: normal;
	font-weight: normal;
	margin-right: 10px;
}
.XenBase .footerBlock .xbSocialLinks a
{
	color: rgb(24, 24, 24) !important;
}
.xbslFacebook .fa:before
{
	content: "\f082";
}
.xbslYoutube .fa:before
{
	content: "\f167";
}

.sidebar
{
	padding-left: 10px;
}



.messageHeading
{
	margin-bottom: 10px;
}


.footerLegal .pageContent
{
	color: rgb(254, 254, 254);
	padding: 12px 20px;
}
.footerLegal .pageContent a
{
	color: rgb(254, 254, 254) !important;
}
#XenForo .peCopyright.Tooltip
{
    color: #a6abab !important;
}
#XenForo .peCopyright.Tooltip .fa
{
	color: rgb(47, 47, 24);
}
#logoBlock
{
	background-image: url(data:image/png;base64,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),
						  url(data:image/png;base64,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);
	image-rendering: auto !important;
	background-position: 0 center;
	background-repeat: no-repeat;
	background-size: auto 200%;
	clear: both;
	position: relative;
	text-align: right;
	font-family: "Open Sans","Open Sans Regular","Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif;
	}
#retro_title a{font-size:11pt;text-decoration:none;display:inline-block;margin:0 0 0 12px;padding:4px 2px;}
#retro_title a.current{background-color:rgba(255,255,255,0.15);margin:0 -6px 0 6px;padding:4px 6px;}
#retro_title > div > div{display:inline-block;}
#retro_title > div > div > ul{position:absolute;top:32px;right:0;width:128px;margin:0;padding:0;}
#retro_title > div > div > a{-webkit-transform: scale(1,0.66667); -ms-transform: scale(1,0.66667);transform:scale(1,0.66667);transform-origin:50% 50%;-webkit-transform:scale(1,0.66667);-webkit-transform-origin:50% 50%;position:relative;top:1px;margin:0 0 0 12px !important;}
#retro_title > div > div > ul > li{list-style:outside none none;font-size:11pt;width:100%;text-align:left;margin:0;padding:0;}
#retro_title > div > div > ul > li > a{padding:8px 20px 8px 8px !important;}
#retro_menu{font-family:sans-serif;font-size:10pt;display:block;padding:14px;}
#retro_menu a{text-decoration:none;margin:0 0 0 16px;}
.bgcolor1{background-color:rgb(16,16,16);color:rgba(255,255,255,0.666);}.bgcolor1 a{color:rgba(255,255,255,0.666);}.bgcolor1 a:hover,.bgcolor1 a.current{color:rgba(255,255,255,0.875);}.bgcolor1 a:active,.bgcolor1 a.current:hover,.bgcolor1 a.current:active{color:rgba(255,255,255,1);}.bgcolor1 a.disabled{color:rgba(255,255,255,0.333);}.bgcolor2 a{color:rgba(255,255,255,0.666);}.bgcolor2 a:hover,.bgcolor2 a.current{color:rgba(255,255,255,0.875);}.bgcolor2 a:active,.bgcolor2 a.current:hover,.bgcolor2 a.current:active{color:rgba(255,255,255,1);}.bgcolor2 a.disabled{color:rgba(255,255,255,0.333);}.bgcolor3{background-color:rgb(72,72,36);}.bgcolor3 a{color:rgba(255,255,255,0.666);}.bgcolor3 a:hover,.bgcolor3 a.current{color:rgba(255,255,255,0.875);}.bgcolor3 a:active,.bgcolor3 a.current:hover,.bgcolor3 a.current:active{color:rgba(255,255,255,1);}.bgcolor3 a.disabled{color:rgba(255,255,255,0.333);}.bgcolor4{background-color:rgb(96,96,48);}.bgcolor4 a{color:rgba(255,255,255,0.666);}.bgcolor4 a:hover,.bgcolor4 a.current{color:rgba(255,255,255,0.875);}.bgcolor4 a:active,.bgcolor4 a.current:hover,.bgcolor4 a.current:active{color:rgba(255,255,255,1);}.bgcolor4 a.disabled{color:rgba(255,255,255,0.333);}.bgcolor5{background-color:rgb(8,8,8);color:rgba(255,255,255,0.75);}.bgcolor5 a{color:rgba(255,248,0,1);}.bgcolor5 a:hover,.bgcolor5 a.current{color:rgba(255,255,128,1);}.bgcolor5 a:active,.bgcolor5 a.current:hover,.bgcolor5 a.current:active{color:rgba(255,255,192,1);}.bgcolor5 a.disabled{color:rgba(255,248,0,0.5);}tr.bordered td{border-bottom:1px solid rgb(24,24,12);}tr:last-child.bordered td{border-bottom:0 none;}tbody{border-bottom:1px solid rgb(72,72,36);}tr.bordered td:first-child{border-left:1px solid rgb(72,72,36);}tr.bordered td:last-child{border-right:1px solid rgb(72,72,36);}
@font-face {
    font-family: AdobeBlank;
    src:
    url("data:font/opentype;base64,T1RUTwAKAIAAAwAgQ0ZGIDTeCDQAACFkAAAZPERTSUcAAAABAABKqAAAAAhPUy8yAF+xmwAAARAAAABgY21hcCRDbtEAAAdcAAAZ6GhlYWQFl9tDAAAArAAAADZoaGVhB1oD7wAAAOQAAAAkaG10eAPoAHwAADqgAAAQBm1heHAIAVAAAAABCAAAAAZuYW1lIE0HkgAAAXAAAAXrcG9zdP+4ADIAACFEAAAAIAABAAAAAQuFfcPHtV8PPPUAAwPoAAAAANFMRfMAAAAA0UxF8wB8/4gDbANwAAAAAwACAAAAAAAAAAEAAANw/4gAAAPoAHwAfANsAAEAAAAAAAAAAAAAAAAAAAACAABQAAgBAAAAAwPoAZAABQAAAooCWAAAAEsCigJYAAABXgAyANwAAAAAAAAAAAAAAAD3/67/+9///w/gAD8AAAAAQURCTwBAAAD//wNw/4gAAANwAHhgLwH/AAAAAAAAAAAAAAAgAAAAAAARANIAAQAAAAAAAQALAAAAAQAAAAAAAgAHAAsAAQAAAAAAAwAbABIAAQAAAAAABAALAAAAAQAAAAAABQA6AC0AAQAAAAAABgAKAGcAAwABBAkAAACUAHEAAwABBAkAAQAWAQUAAwABBAkAAgAOARsAAwABBAkAAwA2ASkAAwABBAkABAAWAQUAAwABBAkABQB0AV8AAwABBAkABgAUAdMAAwABBAkACAA0AecAAwABBAkACwA0AhsAAwABBAkADQKWAk8AAwABBAkADgA0BOVBZG9iZSBCbGFua1JlZ3VsYXIxLjA0NTtBREJPO0Fkb2JlQmxhbms7QURPQkVWZXJzaW9uIDEuMDQ1O1BTIDEuMDQ1O2hvdGNvbnYgMS4wLjgyO21ha2VvdGYubGliMi41LjYzNDA2QWRvYmVCbGFuawBDAG8AcAB5AHIAaQBnAGgAdAAgAKkAIAAyADAAMQAzACwAIAAyADAAMQA1ACAAQQBkAG8AYgBlACAAUwB5AHMAdABlAG0AcwAgAEkAbgBjAG8AcgBwAG8AcgBhAHQAZQBkACAAKABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBkAG8AYgBlAC4AYwBvAG0ALwApAC4AQQBkAG8AYgBlACAAQgBsAGEAbgBrAFIAZQBnAHUAbABhAHIAMQAuADAANAA1ADsAQQBEAEIATwA7AEEAZABvAGIAZQBCAGwAYQBuAGsAOwBBAEQATwBCAEUAVgBlAHIAcwBpAG8AbgAgADEALgAwADQANQA7AFAAUwAgADEALgAwADQANQA7AGgAbwB0AGMAbwBuAHYAIAAxAC4AMAAuADgAMgA7AG0AYQBrAGUAbwB0AGYALgBsAGkAYgAyAC4ANQAuADYAMwA0ADAANgBBAGQAbwBiAGUAQgBsAGEAbgBrAEEAZABvAGIAZQAgAFMAeQBzAHQAZQBtAHMAIABJAG4AYwBvAHIAcABvAHIAYQB0AGUAZABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBkAG8AYgBlAC4AYwBvAG0ALwB0AHkAcABlAC8AVABoAGkAcwAgAEYAbwBuAHQAIABTAG8AZgB0AHcAYQByAGUAIABpAHMAIABsAGkAYwBlAG4AcwBlAGQAIAB1AG4AZABlAHIAIAB0AGgAZQAgAFMASQBMACAATwBwAGUAbgAgAEYAbwBuAHQAIABMAGkAYwBlAG4AcwBlACwAIABWAGUAcgBzAGkAbwBuACAAMQAuADEALgAgAFQAaABpAHMAIABGAG8AbgB0ACAAUwBvAGYAdAB3AGEAcgBlACAAaQBzACAAZABpAHMAdAByAGkAYgB1AHQAZQBkACAAbwBuACAAYQBuACAAIgBBAFMAIABJAFMAIgAgAEIAQQBTAEkAUwAsACAAVwBJAFQASABPAFUAVAAgAFcAQQBSAFIAQQBOAFQASQBFAFMAIABPAFIAIABDAE8ATgBEAEkAVABJAE8ATgBTACAATwBGACAAQQBOAFkAIABLAEkATgBEACwAIABlAGkAdABoAGUAcgAgAGUAeABwAHIAZQBzAHMAIABvAHIAIABpAG0AcABsAGkAZQBkAC4AIABTAGUAZQAgAHQAaABlACAAUwBJAEwAIABPAHAAZQBuACAARgBvAG4AdAAgAEwAaQBjAGUAbgBzAGUAIABmAG8AcgAgAHQAaABlACAAcwBwAGUAYwBpAGYAaQBjACAAbABhAG4AZwB1AGEAZwBlACwAIABwAGUAcgBtAGkAcwBzAGkAbwBuAHMAIABhAG4AZAAgAGwAaQBtAGkAdABhAHQAaQBvAG4AcwAgAGcAbwB2AGUAcgBuAGkAbgBnACAAeQBvAHUAcgAgAHUAcwBlACAAbwBmACAAdABoAGkA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wwDEAMUAxgDHAMgAyQDKAMsAzADNAM4AzwDQANEA0gDTANQA1QDWANcA2ADZANoA2wDcAN0A3gDfAOAA4QDiAOMA5ADlAOYA5wDoAOkA6gDrAOwA7QDuAO8A8ADxAPIA8wD0APUA9gD3APgA+QD6APsA/AD9AP4A/wEAAQEBAgEDAQQBBQEGAQcBCAEJAQoBCwEMAQ0BDgEPARABEQESARMBFAEVARYBFwEYARkBGgEbARwBHQEeAR8BIAEhASIBIwEkASUBJgEnASgBKQEqASsBLAEtAS4BLwEwATEBMgEzATQBNQE2ATcBOAE5AToBOwE8AT0BPgE/AUABQQFCAUMBRAFFAUYBRwFIAUkBSgFLAUwBTQFOAU8BUAFRAVIBUwFUAVUBVgFXAVgBWQFaAVsBXAFdAV4BXwFgAWEBYgFjAWQBZQFmAWcBaAFpAWoBawFsAW0BbgFvAXABcQFyAXMBdAF1AXYBdwF4AXkBegF7AXwBfQF+AX8BgAGBAYIBgwGEAYUBhgGHAYgBiQGKAYsBjAGNAY4BjwGQAZEBkgGTAZQBlQGWAZcBmAGZAZoBmwGcAZ0BngGfAaABoQGiAaMBpAGlAaYBpwGoAakBqgGrAawBrQGuAa8BsAGxAbIBswG0AbUBtgG3AbgBuQG6AbsBvAG9Ab4BvwHAAcEBwgHDAcQBxQHGAccByAHJAcoBywHMAc0BzgHPAdAB0QHSAdMB1AHVAdYB1wHYAdkB2gHbAdwB3QHeAd8B4AHhAeIB4wHkAeUB5gHnAegB6QHqAesB7AHtAe4B7wHwAfEB8gHzAfQB9QH2AfcB+AH5AfoB+wH8Af0B/gH/AgACAQICAgMCBAIFAgYCBwIIAgkCCgILAgwCDQIOAg8CEAIRAhICEwIUAhUCFgIXAhgCGQIaAhsCHAIdAh4CHwIgAiECIgIjAiQCJQImAicCKAIpAioCKwIsAi0CLgIvAjACMQIyAjMCNAI1AjYCNwI4AjkCOgI7AjwCPQI+Aj8CQAJBAkICQwJEAkUCRgJHAkgCSQJKAksCTAJNAk4CTwJQAlECUgJTAlQCVQJWAlcCWAJZAloCWwJcAl0CXgJfAmACYQJiAmMCZAJlAmYCZwJoAmkCagJrAmwCbQJuAm8CcAJxAnICcwJ0AnUCdgJ3AngCeQJ6AnsCfAJ9An4CfwKAAoECggKDAoQChQKGAocCiAKJAooCiwKMAo0CjgKPApACkQKSApMClAKVApYClwKYApkCmgKbApwCnQKeAp8CoAKhAqICowKkAqUCpgKnAqgCqQKqAqsCrAKtAq4CrwKwArECsgKzArQCtQK2ArcCuAK5AroCuwK8Ar0CvgK/AsACwQLCAsMCxALFAsYCxwLIAskCygLLAswCzQLOAs8C0ALRAtIC0wLUAtUC1gLXAtgC2QLaAtsC3ALdAt4C3wLgAuEC4gLjAuQC5QLmAucC6ALpAuoC6wLsAu0C7gLvAvAC8QLyAvMC9AL1AvYC9wL4AvkC+gL7AvwC/QL+Av8DAAMBAwIDAwMEAwUDBgMHAwgDCQMKAwsDDAMNAw4DDwMQAxEDEgMTAxQDFQMWAxcDGAMZAxoDGwMcAx0DHgMfAyADIQMiAyMDJAMlAyYDJwMoAykDKgMrAywDLQMuAy8DMAMxAzIDMwM0AzUDNgM3AzgDOQM6AzsDPAM9Az4DPwNAA0EDQgNDA0QDRQNGA0cDSANJA0oDSwNMA00DTgNPA1ADUQNSA1MDVANVA1YDVwNYA1kDWgNbA1wDXQNeA18DYANhA2IDYwNkA2UDZgNnA2gDaQNqA2sDbANtA24DbwNwA3EDcgNzA3QDdQN2A3cDeAN5A3oDewN8A30DfgN/A4ADgQOCA4MDhAOFA4YDhwOIA4kDigOLA4wDjQOOA48DkAORA5IDkwOUA5UDlgOXA5gDmQOaA5sDnAOdA54DnwOgA6EDogOjA6QDpQOmA6cDqAOpA6oDqwOsA60DrgOvA7ADsQOyA7MDtAO1A7YDtwO4A7kDugO7A7wDvQO+A78DwAPBA8IDwwPEA8UDxgPHA8gDyQPKA8sDzAPNA84DzwPQA9ED0gPTA9QD1QPWA9cD2APZA9oD2wPcA90D3gPfA+AD4QPiA+MD5APlA+YD5wPoA+kD6gPrA+wD7QPuA+8D8APxA/ID8wP0A/UD9gP3A/gD+QP6A/sD/AP9A/4D/wQABAEEAgQDBAQEBQQGBAcECAQJBAoECwQMBA0EDgQPBBAEEQQSBBMEFAQVBBYEFwQYBBkEGgQbBBwEHQQeBB8EIAQhBCIEIwQkBCUEJgQnBCgEKQQqBCsELAQtBC4ELwQwBDEEMgQzBDQENQQ2BDcEOAQ5BDoEOwQ8BD0EPgQ/BEAEQQRCBEMERARFBEYERwRIBEkESgRLBEwETQROBE8EUARRBFIEUwRUBFUEVgRXBFgEWQRaBFsEXARdBF4EXwRgBGEEYgRjBGQEZQRmBGcEaARpBGoEawRsBG0EbgRvBHAEcQRyBHMEdAR1BHYEdwR4BHkEegR7BHwEfQR+BH8EgASBBIIEgwSEBIUEhgSHBIgEiQSKBIsEjASNBI4EjwSQBJEEkgSTBJQElQSWBJcEmASZBJoEmwScBJ0EngSfBKAEoQSiBKMEpASlBKYEpwSoBKkEqgSrBKwErQSuBK8EsASxBLIEswS0BLUEtgS3BLgEuQS6BLsEvAS9BL4EvwTABMEEwgTDBMQExQTGBMcEyATJBMoEywTMBM0EzgTPBNAE0QTSBNME1ATVBNYE1wTYBNkE2gTbBNwE3QTeBN8E4AThBOIE4wTkBOUE5gTnBOgE6QTqBOsE7ATtBO4E7wTwBPEE8gTzBPQE9QT2BPcE+AT5BPoE+wT8BP0E/gT/BQAFAQUCBQMFBAUFBQYFBwUIBQkFCgULBQwFDQUOBQ8FEAURBRIFEwUUBRUFFgUXBRgFGQUaBRsFHAUdBR4FHwUgBSEFIgUjBSQFJQUmBScFKAUpBSoFKwUsBS0FLgUvBTAFMQUyBTMFNAU1BTYFNwU4BTkFOgU7BTwFPQU+BT8FQAVBBUIFQwVEBUUFRgVHBUgFSQVKBUsFTAVNBU4FTwVQBVEFUgVTBVQFVQVWBVcFWAVZBVoFWwVcBV0FXgVfBWAFYQViBWMFZAVlBWYFZwVoBWkFagVrBWwFbQVuBW8FcAVxBXIFcwV0BXUFdgV3BXgFeQV6BXsFfAV9BX4FfwWABYEFggWDBYQFhQWGBYcFiAWJBYoFiwWMBY0FjgWPBZAFkQWSBZMFlAWVBZYFlwWYBZkFmgWbBZwFnQWeBZ8FoAWhBaIFowWkBaUFpgWnBagFqQWqBasFrAWtBa4FrwWwBbEFsgWzBbQFtQW2BbcFuAW5BboFuwW8Bb0FvgW/BcAFwQXCBcMFxAXFBcYFxwXIBckFygXLBcwFzQXOBc8F0AXRBdIF0wXUBdUF1gXXBdgF2QXaBdsF3AXdBd4F3wXgBeEF4gXjBeQF5QXmBecF6AXpBeoF6wXsBe0F7gXvBfAF8QXyBfMF9AX1BfYF9wX4BfkF+gX7BfwF/QX+Bf8GAAYBBgIGAwYEBgUGBgYHBggGCQYKBgsGDAYNBg4GDwYQBhEGEgYTBhQGFQYWBhcGGAYZBhoGGwYcBh0GHgYfBiAGIQYiBiMGJAYlBiYGJwYoBikGKgYrBiwGLQYuBi8GMAYxBjIGMwY0BjUGNgY3BjgGOQY6BjsGPAY9Bj4GPwZABkEGQgZDBkQGRQZGBkcGSAZJBkoGSwZMBk0GTgZPBlAGUQZSBlMGVAZVBlYGVwZYBlkGWgZbBlwGXQZeBl8GYAZhBmIGYwZkBmUGZgZnBmgGaQZqBmsGbAZtBm4GbwZwBnEGcgZzBnQGdQZ2BncGeAZ5BnoGewZ8Bn0GfgZ/BoAGgQaCBoMGhAaFBoYGhwaIBokGigaLBowGjQaOBo8GkAaRBpIGkwaUBpUGlgaXBpgGmQaaBpsGnAadBp4GnwagBqEGogajBqQGpQamBqcGqAapBqoGqwasBq0GrgavBrAGsQayBrMGtAa1BrYGtwa4BrkGuga7BrwGvQa+Br8GwAbBBsIGwwbEBsUGxgbHBsgGyQbKBssGzAbNBs4GzwbQBtEG0gbTBtQG1QbWBtcG2AbZBtoG2wbcBt0G3gbfBuAG4QbiBuMG5AblBuYG5wboBukG6gbrBuwG7QbuBu8G8AbxBvIG8wb0BvUG9gb3BvgG+Qb6BvsG/Ab9Bv4G/wcABwEHAgcDBwQHBQcGBwcHCAcJBwoHCwcMBw0HDgcPBxAHEQcSBxMHFAcVBxYHFwcYBxkHGgcbBxwHHQceBx8HIAchByIHIwckByUHJgcnBygHKQcqBysHLActBy4HLwcwBzEHMgczBzQHNQc2BzcHOAc5BzoHOwc8Bz0HPgc/B0AHQQdCB0MHRAdFB0YHRwdIB0kHSgdLB0wHTQdOB08HUAdRB1IHUwdUB1UHVgdXB1gHWQdaB1sHXAddB14HXwdgB2EHYgdjB2QHZQdmB2cHaAdpB2oHawdsB20HbgdvB3AHcQdyB3MHdAd1B3YHdwd4B3kHegd7B3wHfQd+B38HgAeBB4IHgweEB4UHhgeHB4gHiQeKB4sHjAeNB44HjweQB5EHkgeTB5QHlQeWB5cHmAeZB5oHmwecB50HngefB6AHoQeiB6MHpAelB6YHpweoB6kHqgerB6wHrQeuB68HsAexB7IHswe0B7UHtge3B7gHuQe6B7sHvAe9B74HvwfAB8EHwgfDB8QHxQfGB8cHyAfJB8oHywfMB80HzgfPB9AH0QfSB9MH1AfVB9YH1wfYB9kH2gfbB9wH3QfeB98H4AfhB+IH4wfkB+UH5gfnB+gH6QfqB+sH7AftB+4H7wfwB/EH8gfzB/QH9Qf2B/cH+Af5B/oH+wf8B/0H/gf/CAAIAQgCCAMIBAgFCAYIBwgICAkICggLCAwIDQgOCA8IEAgRCBIIEwgUCBUIFggXCBgIGQgaCBsIHAgdCB4IHwggCCEIIggjCCQIJQgmCCcIKAgpCCoIKwgsCC0ILggvCDAIMQgyCDMINAg1CDYINwg4CDkIOgg7CDwIPQg+CD8IQAhBCEIIQwhECEUIRghHCEgISQhKCEsg+wy3+iS3AfcQt/kstwP3EPoEFf58+YT6fAf9WP4nFfnSB/fF/DMFprAV+8X4NwX49gamYhX90gf7xfgzBXBmFffF/DcF/PYGDg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4OAAEBAQr4HwwmmhwZLRL7joscBUaLBr0KvQv65xUD6AB8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAAAAA==");
}
@media (max-width:610px)
{
	#logo { float: none; text-align: center; }
	.catHelperLast { display: none; }
}

.xenOverlay a.close:before, #redactor_modal_close:before
{
	content: "\f057";
	display: inline-block;
	font-family: "Font Awesome 5 Free";
	font-style: normal;
	font-weight: normal;
	color: rgb(173, 51, 53);
	position: relative;
	top: -6px;
	right: 1px;
}
/* iOS fixes */
.button.primary, .submitUnit .button, input.button, input[type="button"]
{
	-webkit-appearance: none;
	-webkit-border-radius: 4px; 
}

.Popup .PopupOpen .arrowWidget:before
{
	content: "\f077";
	color: rgb(47, 47, 24);
}
.Popup .arrowWidget:before
{
	color: rgb(50, 50, 50);
	content: "\f078";
	display: block;
	font-family: "Font Awesome 5 Free";
	line-height: 13px;
	margin-left: 2px;
}
.navTabs .navTab.PopupClosed:hover .SplitCtrl:before
{
	color: rgb(254, 254, 254);
	content: "\f0d7";
	display: block;
	font-family: "Font Awesome 5 Free";
	line-height: 50px;
}
.navTabs .navTab.PopupClosed:hover .SplitCtrl:before
{
	color: rgb(254, 254, 254);
}
.navTabs .navTab.PopupClosed:hover .SplitCtrl:hover
{
	text-decoration: none;
}
.iconKey .fa:hover
{
	cursor: help;
}

@media (max-width:610px)
{
	.Responsive .xenOverlay a.close
	{
		width: 16px;
		height: 16px;
		top: 5px;
		right: 6px;
	}
}





.avatarHolder img {
    width: 150px !important;
}
.XenBase .userBanner
{
	font-size: 12px;
	font-weight: bold;
	border-radius: 2px;
	padding: 3px 5px;
}

.XenBase .userBanner.bannerStaff
{
	background: #234A71;
	color: #FFF;
	border: 0;	
}

.XenBase .userBanner.adminBanner
{
	background: #712323;
	color: #FFF;
	border: 0;	
}




.XenBase .userBanner.bannerStaff.wrapped span
{
	background-color: #3B6188;

}
.XenBase .userBanner.adminBanner.wrapped span
{
	background-color: #793A3A;
}
.XenBase .userBanner.wrapped span.before
{
	top: -3px;
	left: 0px;
}

.XenBase .userBanner.wrapped span.after
{
	top: -3px;
	right: 0px;
}



#logoBlock img
{
	max-height: 70px;
}
.pollBlock .buttons .button { margin-right: 5px; }



.xbMaxwidth
{
	max-width: 90%;
	margin: 0 auto;
}
.Menu .xbMaxwidth
{
	max-width: 100%;
}


/* === Login CSS === */

#loginBar #loginBarHandle
{
	display: none;
}
	

#xb_eAuthUnit li
{
	margin-top: 5px;
}



/* === Misc Pages === */
.XenBase .news_feed_page_global .eventList:first-of-type, .XenBase .messageSimpleList.topBorder
{
	border-top-color: rgb(24, 24, 12);
}
.help_bb_codes .bbCode > dl > dd, .smilieList .smilieText, .smilieList .smilieText:hover
{
		
}
.titleBar
{
	
}
.textCtrl .arrowWidget:before
{
	font-size: 14px;
}
.XenBase .navigationSideBar a
{
	font-size: 12px !important;

}
.XenBase .navigationSideBar a:hover
{
	color: rgb(255, 131, 0);
background: rgb(16, 16, 16) none;

}
.sharePage .textHeading
{
        color: rgb(206, 39, 39);

}

.profilePage .textWithCount.subHeading .text
{
        color: rgb(255, 255, 255);

}
.profilePage .textWithCount.subHeading .count
{
        
}
.XenBase .mediaContainer .statsSection, .XenBase .mediaContainer .statsSection i, .XenBase .mediaLabel.labelStandard
{
	color: rgb(202, 202, 202);
}




.displaynone
{
	visibility: hidden;
}

/* MAGICAL WONDERFUL BREADCRUMB */
.pageContent .breadcrumb .crust .arrow, .pageContent .breadcrumb .crust .arrow span
{
	border-top-width: 18px;
	border-bottom-width: 18px;
	border-left-width: 8px;
}
.pageContent .breadcrumb .crust .arrow
{
	right: -8px;
}
.pageContent .breadcrumb
{
	height: 36px;
}
.pageContent .breadcrumb .crust a.crumb
{
	line-height: 36px;
}
.pageContent .breadcrumb .crust .arrow span
{
	top: -18px;
	left: -9px;
}
.pageContent .breadcrumb.showAll
{
	height: auto;
}



/* Magical Page Nav */
.PageNav a, .PageNav .pageNavHeader
{
	height: 26px;
	line-height: 26px;
}
.PageNav .scrollable
{
	height: 28px;
}







.profilePostListItem
{
	border-top: 1px solid rgb(24, 24, 12);
}
.xenForm .ctrlUnit
{
	padding-top: 10px;
}
.breadBoxTop 
{
	
}
.breadBoxBottom
{
	
}
.XenBase .messageSimple, .XenBase .profilePage .eventList li, .XenBase .searchResult
{
	
}
.nodeList .categoryStrip .nodeTitle a, .navTabs .navTab .navLink, .sidebar .section .primaryContent h3 a, .profilePage .mast .section.infoBlock h3, .sidebar .section .primaryContent h3, .sidebar .section .secondaryContent h3, .sidebar .section .secondaryContent h3 a,
 .discussionList .sectionHeaders a, .discussionList .sectionHeaders a span, a.callToAction span, .button, #SignupButton .inner
{
	
}
.XenBase .discussionListItem .noteRow
{
	color: rgb(255, 255, 255);
}






.search_form .xenForm, .search_form_post .xenForm, .search_form_profile_post .xenForm,
.search_form_resource_update .xenForm, .tag_search .xenForm, .xengallery_search_form_media .xenForm,
.nflj_showcase_search_form .xenForm, .nflj_sportsbook_search_form .xenForm
{
	background-color: rgb(16, 16, 16);
padding: 10px;
border: 1px solid rgb(24, 24, 12);
border-radius: 6px;

}


.topCtrl.xbTopCtrl
{
	display: block;
	float: none;
	margin-bottom: 10px;
	text-align: right;
}
.sectionMain.insideSidebar .sectionHeader
{
	color: rgb(202, 202, 202);
}

/* Responsive Settings */

@media (max-width:800px)
{
	
	
}
@media (max-width:800px)
{
	
}
@media (max-width:610px)
{
	.XenBase .visitorTabs .navLink .miniMe
	{
		
		margin: 0;
	}
	
	.navLink .accountUsername .xbVisitorText
	{
		display: none;
	}
	#goTop
	{
		opacity: 0.5;
		right: 5%;
	}	
	
		
}

@media (max-width:480px)
{
	.Responsive .navigationSideBar .heading span:before
	{
		content: "\f0c9";
		font-family: "Font Awesome 5 Free";
		font-weight: normal;
		color: rgb(255, 255, 255);
		font-size: 14px;
	}
	.XenBase.Responsive .navigationSideBar .heading span
	{
		position: relative;
		top: -4px;
	}
	.XenBase .item.control.like:before 
	{
    		display: none;
	}
	.XenBase .item.control.reply:before 
	{
    		display: none;
	}
}


.group-admin { background: url('styles/groups/userbars.png') 0 0; width: 120px; height: 15px }
.group-banned { background: url('styles/groups/userbars.png') 0 -45px; width: 120px; height: 15px }
.group-member { background: url('styles/groups/userbars.png') 0 -30px; width: 120px; height: 15px }
.group-moderator { background: url('styles/groups/userbars.png') 0 -60px; width: 120px; height: 15px }
.group-oldbie { background: url('styles/groups/userbars.png') 0 -75px; width: 120px; height: 15px }
.group-pendapproval { background: url('styles/groups/userbars.png') 0 -90px; width: 120px; height: 15px }
.group-pendmember { background: url('styles/groups/userbars.png') 0 -105px; width: 120px; height: 15px }
.group-queen { background: url('styles/groups/userbars.png') 0 -120px; width: 80px !important; height: 15px }
.group-eternalqueen { background: url('styles/groups/userbars.png') 0 -135px; width: 128px !important; height: 15px }
.group-researcher { background: url('styles/groups/userbars.png') 0 -150px; width: 120px; height: 15px }
.group-sitestaff { background: url('styles/groups/userbars.png') 0 -195px; width: 120px; height: 15px }
.group-techmember { background: url('styles/groups/userbars.png') 0 -225px; width: 120px; height: 15px }
.group-eternaltechie { background: url('styles/groups/userbars.png') 0 -240px; width: 128px !important; height: 15px }
.group-trialmember { background: url('styles/groups/userbars.png') 0 -255px; width: 120px; height: 15px }
.group-sysop { background: url('styles/groups/userbars.png') 0 -270px; width: 120px; height: 15px }

.group-jester { background: url('styles/groups/userbars.png') 0 -165px; width: 120px; height: 15px }
.group-jester span.after {
    background-image: url('styles/groups/residentjester_hat.png');
    background-color: transparent;
    position: absolute;
    width: 33px;
    height: 24px;
    right: 16px;
    margin-top: -9px;
    /*-webkit-transform: rotate(-60deg) scale(.75); -ms-transform: rotate(-60deg) scale(.75);transform: rotate(-60deg) scale(.75);*/
}

.userStats dt, .userStats dl {
    display: inline-block;
    width: 48%;
}
.messageUserInfo {
    float: left;
    padding-right: 10px;
    margin-right: 10px;
}
.thread_view .messageList .messageUserInfo a.avatar img, .thread_view .quickReply .messageUserInfo a.avatar img, .conversation_view .messageList .messageUserInfo a.avatar img, .conversation_view .quickReply .messageUserInfo a.avatar img {
    width: 150px;
    height: auto;
}
.message .messageInfo, #QuickReply {
        border-left:  1px solid rgb(63,63,31); border-left:  1px solid rgba(63,63,31, 1); _border-left:  1px solid rgb(63,63,31);
        padding-left: 15px;
}
.xbStickyBar {
    background: linear-gradient(to bottom, rgba(120,120,72,1) 0%,rgba(96,96,48,1) 100%);
    padding: 10px 0;
    margin-left: 1px;
    width: calc(100% - 1px);
        height: auto !important;
}
.xbStickyBar span {
    margin-left: 62px;
}
@media (max-width:480px) {
#retro_title > div > div > ul {
    position: absolute;
    top: 32px;
    right: 0;
    width: 128px;
    margin-top: 10px;
    padding: 10px;
    z-index: 100;
    background-color: rgb(48,48,24);
}
.messageUserInfo {
    float: none;
    width: auto !important;
    border-bottom:  1px solid rgb(120,120,72); border-bottom:  1px solid rgba(120,120,72, 1); _border-bottom:  1px solid rgb(120,120,72);
}
.Responsive .message .messageInfo {
    margin-left: 0 !important;
    padding: 10px;
}
.Responsive #QuickReply {
    margin-left: 0 !important;
}
.thread_view .messageList .messageUserInfo a.avatar img, .thread_view .quickReply .messageUserInfo a.avatar img, .conversation_view .messageList .messageUserInfo a.avatar img, .conversation_view .quickReply .messageUserInfo a.avatar img {
    width: 64px;
    height: auto;
}
.message .messageInfo, #QuickReply { border-left: 0 }
.Responsive .messageUserBlock h3.userText {
    margin-left: 80px;
}
em[class^="group-"] {text-align:left;}
}

@media (max-width:800px) {
#content {margin: 0 3% }
.mainContainer {max-width: 100%}

}
.xbSearchNav #QuickSearch {margin-right:8px;}

/* --- xb_message.css --- */


.messageUserBlock.xbOnlineRegular div.avatarHolder .onlineMarker
{
	position: absolute;
top: 0px;
left: 0px;

				
	border: 7px solid transparent;
border-top-color: rgb(127, 185, 0);
border-left-color: rgb(127, 185, 0);
border-top-left-radius: 4px;

			}
			
/* Animated Online Marker */

/* End Animated Online Marker */


.messageUserBlock.xbOnlineAnimated div.avatarHolder .onlineMarker
{
	right: 9px;
	top: 8px;
}
@media (max-width:480px)
{
	.messageUserBlock.xbOnlineAnimated div.avatarHolder .onlineMarker
	{
		right: 3px;
		top: 4px;
	}
}






@media (max-width:480px)
{
	.Responsive .messageUserBlock.xbOnlineRegular div.avatarHolder .onlineMarker
	{
		top: 4px;
		left: 4px;
		border-width: 6px;
	}
}
.XenBase .attachment .thumbnail .genericAttachment, .XenBase .AttachmentEditor .AttachedFile .Thumbnail .genericAttachment
{
	background-image: none;
	line-height: 40px;
	text-align: center;
}
.XenBase .attachment .thumbnail .genericAttachment:before, .XenBase .AttachmentEditor .AttachedFile .Thumbnail .genericAttachment:before
{
	color: rgb(255, 255, 255);
	content: "\f019";
	font-family: "Font Awesome 5 Free";
	font-weight: normal;
	font-size: 32px;
	margin-left: 5px;
}
.XenBase .AttachmentEditor .AttachedFile .Thumbnail .genericAttachment:before
{
	content: "\f093";
}
.XenBase .message .publicControls .MultiQuoteControl
{
	border-radius: 4px
}
.message .messageInfo, #QuickReply
{
	margin-left: 16px;
}


.item.control.like:before,
.item.control.reply:before,
.item.control.bookmarks:before,
.item.control.edit:before,
.item.control.report:before,
.item.control.warn:before,
.item.control.ip:before,
.item.control.deleteSpam:before,
.item.control.history:before,
.item.control.delete:before
{
	display: inline-block;
	font-family:"Font Awesome 5 Free";
	font-weight: 900 !important;
	font-size: inherit;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	margin-right: 5px;
}
.item.control.like:before	{ content: "\f087"; }
.item.control.reply:before	{ content: "\f122"; }
.item.control.bookmarks:before	{ content: "\f02e"; }
.item.control.edit:before	{ content: "\f044"; }
.item.control.report:before	{ content: "\f071"; }
.item.control.warn:before	{ content: "\f12a"; }
.item.control.ip:before		{ content: "\f002"; }
.item.control.deleteSpam:before	{ content: "\f024"; }
.item.control.history:before	{ content: "\f1da"; }
.item.control.delete:before	{ content: "\f00d"; }


/* ALT Layout */

.XenBase .conversation_view .messageList
{
	border-width: 0px;
	padding-right: 0;
}
.messageHeading .leftSide { float: left; }
.messageHeading .rightSide { float: right; }
html .messageHeading span a { color: rgb(255, 255, 255); }
.messageHeading
{
	font-size: 12px;
color: rgb(255, 255, 255);
background-color: rgb(47, 47, 24);
padding: 8px 10px;
margin: -10px -10px 10px;
border-top-left-radius: 6px;
border-top-right-radius: 6px;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#3f3f1f+0,212110+100 */
background: rgb(63,63,31); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(63,63,31,1) 0%, rgba(33,33,16,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(63,63,31,1) 0%,rgba(33,33,16,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(63,63,31,1) 0%,rgba(33,33,16,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3f3f1f', endColorstr='#212110',GradientType=0 ); /* IE6-9 */

overflow: hidden;
position: relative;

}





.XenBase .attachedFiles .attachmentList
{
	border-radius: ;
	background-color: rgb(24, 24, 12);
	background-image: none;
}
.XenBase .attachedFiles .attachedFilesHeader
{
	padding-top: 6px;
	padding-bottom: 6px;
}

/* Message CSS */

.pollBlock .questionMark
{
	background: none;
	color: rgb(202, 202, 202);
}
.pollBlock .question .questionText
{
	color: rgb(202, 202, 202);
}
.privateControls .Popup a
{
	color: rgb(70, 70, 70) !important;
	padding: 5px 5px;
	margin-top: -3px;
	line-height: 8px;
}
.privateControls .Popup .arrowWidget { display: none; }
.Menu.privateControlsLinks { min-width: 175px; }

.message .menuIcon
{
	position: relative;
	font-size:18px;
	width: .9em;
	display: inline-block;
	text-indent: -9999px;
}

.message .PopupOpen .menuIcon:before
{
	zoom: 1;
}

.message .menuIcon:before
{
	content: "";
	font-size: 18px;
	position: absolute;
	top: 0;
	left: 0;
	width: 16px;
	height: 2px;
	border-top: 6px double currentColor;
	border-bottom: 2px solid currentColor;
}

.xenOverlay .dataTable.diffVersions
{
	background-color: rgb(24, 24, 24);
	margin-top: 0;
}

.message .newIndicator
{
	
}

.messageList .message:nth-child(odd)
{
	background-color: rgb(8, 8, 8);

}

.messageList .message:nth-child(even)
{
	background-color: rgb(16, 16, 16);

}

.messageList .message:last-child
{
	
}

.messageList .newMessagesNotice
{
	font-size: 12px;
background-color: rgb(16, 16, 16);
padding: 5px;
margin: 10px 0;
border: 1px solid rgb(24, 24, 12);
border-radius: 4px;

}
.XenBase .messageList .placeholder .placeholderContent
{
	color: rgb(255, 255, 255);
}
.messageList .message.deleted
{
	border: 1px solid rgb(24, 24, 12);
	background-color: rgb(16, 16, 16);
	padding: 15px 10px;
	margin-bottom: 10px;
}
.message.deleted .messageInfo
{
	min-height: 0;
	background-color: transparent;
}
/** XenBase Styling **/




@media (max-width:480px)
{
	.Responsive .messageUserBlock a.username,
	.Responsive .messageUserBlock .userTitle,
	.Responsive .messageUserBlock h3.userText
	{
		text-align: left;
	}
}
@media (max-width:610px)
{
	.Responsive #QuickReply .submitUnit
	{
		margin-top: 10px;
	}
}

/* --- xb_scroll_buttons.css --- */

.xbScrollButtons
{
	position: fixed;
right: 2%;
bottom: 80px;
z-index: 1000;

}

.xbScrollUpButton, .xbScrollDownButton
{
	color: rgb(255, 255, 255);
background-color: rgb(47, 47, 24);
padding: 10px;
border: 1px solid rgb(47, 47, 24);
border-radius: 2px;
white-space: nowrap;
cursor: pointer;
text-align: center;
opacity: 0.3;
transition: opacity 0.3s ease-in-out;

}
.xbScrollUpButton:hover, .xbScrollDownButton:hover
{
	color: rgb(255, 255, 255);
opacity: 1;

}
@media (max-width:800px)
{
	.xbScrollUpButton
	{
		padding: 7px;
		right: 1%;
	}
	.xbScrollDownButton
	{
		padding: 7px;
		right: 1%;
		bottom: 68px;
	}
}
