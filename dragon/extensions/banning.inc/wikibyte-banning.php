<div class="row-fluid" id="wb-banning">
<?php
/**
 *
 * @file
 * @Wikibyte.org - Skining extensions for Axomicversion: Dragon Skin
 * @skin Wikibyte Dragon 
 * @modul Banning
 * @author Michael McCouman jr.
 * @copyright Copyright © 2012 Michael McCouman jr.
 * @license Copyright © 2012 Michael McCouman jr.
 *
 */
	$linkuri = ':WIKIBANNING:'://':TRIGER:'/':LASUSDRAGON:';
	$banningcss = "height: 150px; border-radius:7px;";
	$anzahl = 2;					
	$wburl[0] = $banningcss.'/'.$linkuri;		
	$wburl[1] = $banningcss.'/'.$linkuri;		
	srand(time());
	$random = rand(0,$anzahl - 1);
	echo $url[$random];
?>
</div>