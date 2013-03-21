/**
 * Fixles Sets
 * Dragon Skin v2
 * by Michael McCouman jr
 * Copyright 2012 Wikibyte.org
 * MediaWiki Skin
 */
/** Rewit in special:all pages **/
div.allpagesredirect a{
	color:#999;
}
/**Login Page**/
div.clear {
	margin-top:-32px;
}

#pagename:hover {
	text-decoration:none!important;
}

/**usermasage**/
div.usermessage {
	border:0; 
	-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.35); 
	-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.35); 
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.35); 
	background-color: #FFC54A; 
	background-image: -moz-linear-gradient(top, #FFC54A, #EBAB07 75%, #DB9E01); 
	background-image: -ms-linear-gradient(top, #FFC54A, #EBAB07 75%, #DB9E01); 
	background-image: -o-linear-gradient(top, #FFC54A, #EBAB07 75%, #DB9E01); 
	background-image: -webkit-gradient(linear, left top, left bottom, from(#FFC54A), to(#DB9E01), color-stop(75%, #EBAB07)); 
	height:auto; 
	padding:15px 15px;
	color:#fff;
	margin-bottom:10px;
	text-align:center;
}
div.usermessage a{
	color:#fff;
	font-weight:bold;
	text-decoration: underline;
}

/** Editor FIX ***/
.wikiEditor-ui-text,
textarea#wpTextbox1 {
	width:100%;
}


/*Editbutton & Hochladen in Spezialseiten - ausschalten*/
.ns--1 li#but-page,
.ns--1 li#but-ed_it,
.ns--1 li#but-up_togo,
.ns--1 li#but-sysop,
.ns--1 a#no_editor,
.ns--1 li.selected,
.ns--1 li.selected a,
li#ca-view,
div#jump-to-nav,
div#siteSub,
div.printfooter {
	display: none !important;
}

/*fixed bootstrap mini Tabs - M.C.*/
div#tabcon {
	margin-top:-12px; 
	border-left:1px solid #ddd; 
	border-right:1px solid #ddd; 
	border-bottom:1px solid #ddd;
}
div.tab-pane{
	padding:20px; 
	background:#fff;
}
ul#tabul {
	margin-left:0 !important;
	margin-bottom:12px !important;
}
ul.nav.nav-tabs li.active {
   -moz-border-bottom-colors: none!important;
    -moz-border-image: none!important;
    -moz-border-left-colors: none!important;
    -moz-border-right-colors: none!important;
    -moz-border-top-colors: none!important;
    background-color: #FFFFFF!important;
    border-color: #DDDDDD #DDDDDD transparent!important;
    border-style: solid!important;
    border-width: 1px!important;
    color: #555555!important;
	border-radius: 4px 4px 0 0!important;
	font-weight: bold;
}
ul.nav.nav-tabs li#tabli {
	padding-left: 15px!important;
	padding-right: 15px!important;
	padding-top: 8px!important;
	padding-bottom: 10px!important;
	line-height: 18px!important;
	cursor: default!important;
	color: #08C;
}

/*** MC
* ANMELDUNG Name 
* EDIT Zusammenfassung
***/
input#wpReason,
input#wpUsername,
input#wpRealName,
input#offset,
input#wpEmail,
input#wpName1,
input#wpName2,
input#wpSummary{
  background-color: #ffffff;
  border: 1px solid #cccccc;
  -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
          border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
     -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
      -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
       -o-transition: border linear 0.2s, box-shadow linear 0.2s;
          transition: border linear 0.2s, box-shadow linear 0.2s;
  display: inline-block;
  height: 18px;
  padding: 4px;
  margin-bottom: 9px;
  font-size: 13px;
  line-height: 18px;
  color: #555555;
}
input#wpName1:focus,
input#wpSummary:focus {
  border-color: rgba(82, 168, 236, 0.8);
  outline: 0;
  outline: thin dotted \9;
  /* IE6-9 */
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
} 
input#wpSummary { width: 90%;}
 


/** Wikistandard Button**/
input[type="submit"] {
  display: inline-block;
  *display: inline;
  padding: 4px 10px 4px;
  margin-bottom: 0;
  *margin-left: .3em;
  font-size: 13px;
  line-height: 18px;
  *line-height: 20px;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  *background-color: #e6e6e6;
  background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border: 1px solid #cccccc;
  *border: 0;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-bottom-color: #b3b3b3;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}
input[type="submit"]:hover {
  color: #333333;
  text-decoration: none;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
  /* Buttons in IE7 don't get borders, so darken on hover */

  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
     -moz-transition: background-position 0.1s linear;
      -ms-transition: background-position 0.1s linear;
       -o-transition: background-position 0.1s linear;
          transition: background-position 0.1s linear;
}


/** EDIT BUTTON Speichern **/
input#wpSave {
margin-top: -2px;
  color: #FFFFFF;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #5bb75b;
  *background-color: #51a351;
  background-image: -ms-linear-gradient(top, #62c462, #51a351);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
  background-image: -webkit-linear-gradient(top, #62c462, #51a351);
  background-image: -o-linear-gradient(top, #62c462, #51a351);
  background-image: -moz-linear-gradient(top, #62c462, #51a351);
  background-image: linear-gradient(top, #62c462, #51a351);
  background-repeat: repeat-x;
  border-color: #51a351 #51a351 #387038;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#62c462', endColorstr='#51a351', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
input#wpSave:hover,
input#wpSave:active {
  background-color: #51a351;
  *background-color: #499249;}
input#wpSave:active {  background-color: #408140 \9; }



/** EDIT BUTTON Änderungen zeigen **/
input#wpDiff {
margin-top: -2px;
  color: #FFFFFF;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #0074cc;
  *background-color: #0055cc;
  background-image: -ms-linear-gradient(top, #0088cc, #0055cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0055cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0055cc);
  background-image: -o-linear-gradient(top, #0088cc, #0055cc);
  background-image: -moz-linear-gradient(top, #0088cc, #0055cc);
  background-image: linear-gradient(top, #0088cc, #0055cc);
  background-repeat: repeat-x;
  border-color: #0055cc #0055cc #003580;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#0088cc', endColorstr='#0055cc', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
input#wpDiff:hover,
input#wpDiff:active {
  background-color: #0055cc;
  *background-color: #004ab3;}
input#wpDiff:active {  background-color: #004099 \9; }




/** EDIT BUTTON Vorschau **/
input#wpPreview {
margin-top: -2px;
  color: #FFFFFF;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #faa732;
  *background-color: #f89406;
  background-image: -ms-linear-gradient(top, #fbb450, #f89406);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fbb450), to(#f89406));
  background-image: -webkit-linear-gradient(top, #fbb450, #f89406);
  background-image: -o-linear-gradient(top, #fbb450, #f89406);
  background-image: -moz-linear-gradient(top, #fbb450, #f89406);
  background-image: linear-gradient(top, #fbb450, #f89406);
  background-repeat: repeat-x;
  border-color: #f89406 #f89406 #ad6704;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fbb450', endColorstr='#f89406', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
input#wpPreview:hover,
input#wpPreview:active {
  background-color: #f89406;
  *background-color: #df8505;}
input#wpPreview:active { background-color: #c67605 \9; }



/** EDIT BUTTON Abbrechen **/
a#mw-editform-cancel {
  color: #FFFFFF;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  text-decoration:none;
  background-color: #da4f49;
  *background-color: #bd362f;
  background-image: -ms-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#bd362f));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -o-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: -moz-linear-gradient(top, #ee5f5b, #bd362f);
  background-image: linear-gradient(top, #ee5f5b, #bd362f);
  background-repeat: repeat-x;
  padding: 4px 10px;
  border-radius: 4px 4px 4px 4px;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
  border-color: #bd362f #bd362f #802420;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ee5f5b', endColorstr='#bd362f', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
a#mw-editform-cancel:hover,
a#mw-editform-cancel:active {
  background-color: #bd362f;
  *background-color: #a9302a;}
a#mw-editform-cancel:active {
  background-color: #942a25 \9;}