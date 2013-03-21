<?php
/**
*
*	Multipage arrangement for Dragon style
*	by wikibyte color vars
*
*   @file $wgNavColor
*   @settings $wgSkinColor
*   @global $wgLocalStylePath
*   @global $wgWByteSTARTWIKI
*   
*   @user Michael McCouman jr.
*   @lizenz Copyright 2012-2013(c)
*   @developing wikibyte.org
*   @mod is ingrypted for spezial users
*
**/

# wiki global vars for the dragon design
global $wgLocalStylePath;
global $wgWByteSTARTWIKI;

# Skin dynamic color minderings:
global $wgNavColor; 	//LS: $wgNavColor ="navbar-inverse";
global $wgSkinColor; 	//LS: $wgSkinColor =".dark";

# Standard:
$wgNavColor ="";
$wgSkinColor ="";

# dark:
//$wgNavColor ="navbar-inverse";
//$wgSkinColor =".dark";

# white:
//$wgNavColor ="";
//$wgSkinColor ="-hell";

# site atforming spezial:
global $SKINCOLOR;
global $wgNavPannel;

//$SKINCOLOR = "spezial";
//$wgNavColor ="navbar-spezial";
//$wgNavPannel ="a-spezial";
//$wgSkinColor ="-hell";

# ORD:
$SO = "dragon";
# ORD Page:
$SOSeite = "dragon/Site";
# ORD Skining:
$SIpfad = "".$wgLocalStylePath. "/" . $SO . "";
# ORD Images:
$SImg = "".$wgLocalStylePath. "/" . $SO . "/images";
# Sup JavaScript:
$SJSpfad = "".$wgLocalStylePath. "/" . $SO . "/js";
# Sup CSS:
$SCSSpfad = "".$wgLocalStylePath. "/" . $SO . "/css";
# Sup dyn CSS.PHP
$SCSSPHP = "dragon/css/php";

# Elementar essets module
//$indexpa = 'w/index.php/';
//$indexpa = 'wiki/';

#Backgroundcolor:
$wgSkinBackground ='fafafa';

?>
