<?php 
/**
 * Dragon Skin Extension wbavmini v2
 * THE DRAGON EXTENSIONS ARE NOT MEDIA WIKI!
 * by Michael McCouman jr
 * Copyright 2012 Wikibyte.org
 * MediaWiki Skin
 */
 
echo '<style type="text/css"> #avimini { background: url("/panel.jpg") repeat scroll 0 0 transparent; margin-bottom: -30px; margin-left: -30px; padding: 5px; width: 968px; border-radius: 0 0 8px 8px; font-size: 12px; } #nouseravatar { border: 1px solid #eee; height:90px; width:90px; background: url('.$avataruri.'/DerGraueKerl.png) center center no-repeat transparent; } .tip-wikibyte { opacity:0.8; z-index:1000; text-align:left; border-radius:4px; -moz-border-radius:4px; -webkit-border-radius:4px; padding:8px 8px; max-width:200px; color:#fff; background-color:#000; } .tip-wikibyte .tip-inner { font:bold 11px/14px "Lucida Grande",sans-serif; } .tip-wikibyte .tip-arrow-top { margin-top:-5px; margin-left:-5px; top:0; left:50%; width:9px; height:5px; background:url('.$avataruri.'/tip-wikibyte_arrows.gif) no-repeat; } .tip-wikibyte .tip-arrow-right { margin-top:-4px; margin-left:0; top:50%; left:100%; width:5px; height:9px; background:url('.$avataruri.'/tip-wikibyte_arrows.gif) no-repeat -9px 0; } .tip-wikibyte .tip-arrow-bottom { margin-top:0; margin-left:-5px; top:100%; left:50%; width:9px; height:5px; background:url('.$avataruri.'/tip-wikibyte_arrows.gif) no-repeat -18px 0; } .tip-wikibyte .tip-arrow-left { margin-top:-4px; margin-left:-5px; top:50%; left:0; width:5px; height:9px; background:url('.$avataruri.'/tip-wikibyte_arrows.gif) no-repeat -27px 0; } div#flattr { background:#fff; border:1px solid #222; border-radius: 4px; color:#000; padding:3px; margin:-5px; } div.fl{ font-size:15px; color:#777; padding:3px; text-align:center; margin-top:5px; } div.fla{ font-size:12px; padding:5px; margin-left:10px; } </style>'
$mysqldb	= "$wgDBname"; 
$username 	= "$wgDBuser";
$password 	= "$wgDBpassword";
$host 		= "$wgDBserver";		
$connection = mysql_connect(
$host, $username, $password) or 
	die (MASSORNO);
mysql_select_db($mysqldb, $connection) or 
	die(MASSORDB);
global $wgTitle;
$siteuser_ext_meta = "SELECT pageid, wbuser, wbborder FROM ext_meta WHERE pageid = '".$wgTitle->getArticleID()."'";
	//avatar inus
	$siteuser_ext_meta_info = mysql_query($siteuser_ext_meta) 
		or die ("Error: Anfrage siteuser aus DB nicht erfolgreich!");	
	#Json out as { <=.input.> }
	while ($adr = mysql_fetch_array($siteuser_ext_meta_info)){ 	
?>
<script type="text/javascript">
//<![CDATA[
		$(function(){
				$('#personalinfo').poshytip({
					className: 'tip-wikibyte',
					content: function(updateCallback) {
						window.setTimeout(function() {
							updateCallback("<a href=\"<? global $wgServer; echo $wgServer; ?>/wiki/User:<?=$adr['wbuser']?>\"><div id=\"nouseravatar\"><img width=\"90px\"src=\"http://avatar.wikibyte.org/<?=$adr['wbuser']?>\"/></div></a>");
						}, 2000);
						return 'Lade... Avatar...';
					}
				});
		});
//]]>
</script>
<div id="avimini">
	<p style="padding-left:12px;"> 
		Diese Seite wurde zuletzt bearbeitet von: 
			<a id="personalinfo" href="<? global $wgServer; echo $wgServer; ?>/wiki/User:<?=$adr['wbuser']?>">
				<?=$adr['wbuser']?>
			</a> 
			
	 
<? #flattrQR Code ?>
<script type="text/javascript">
//<![CDATA[
		$(function(){
				$('#QRcode').poshytip({
					className: 'tip-twitter',
					content: function(updateCallback) {
						window.setTimeout(function() {
							updateCallback("<div id='flattr'><br><div class='fl'>QR Code von Wikibyte</div><br /><div class='fla'>Mit QR-Codes k&ouml;nnen auch Sachen im richtigen Leben geflattrt werden! <br><br /><center><a href=\"<? global $wgServer; echo $wgServer; ?>/images/start/flattr/flattr-mccouman.pdf\"><img src=\"/w/skins/trix/includes/AvatarMini/flattrqr-icon.png\" /></a><br><br /><a href=\"<? global $wgServer; echo $wgServer; ?>/images/start/flattr/flattr-mccouman.pdf\"><img src=\"/w/skins/trix/includes/AvatarMini/pdf.png\" /></a> <a href=\"<? global $wgServer; echo $wgServer; ?>/images/start/flattr/flattr-mccouman.pdf\"> Als PDF Downloaden</a></center><br></div>");
							
						
						}, 1000);
						return 'QRCode...';
					}
				});
		});
//]]>
</script>
<? #flattr Codes ?>
<a id="QRcode" style="float:right;" href="http://flattr.com/thing/785099/Wikibyte-Network-and-Labs" target="_blank"><img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a> 
</p>
</div>
<? } 
# Ende 
?>