<style type="text/css">
<?php 
######################################################### STANDARD ######################################################### 
/**
 * Dragon Skin v2
 * by Michael McCouman jr
 * Copyright 2012 Wikibyte.org
 * MediaWiki Skin
 */
?>
body {
	<?php #/*padding-top: 50px;*/ ?>
    padding-bottom: 10px;
	background: url("<?php echo $SImg; ?>/bg<?php echo $wgSkinColor; ?>.png") transparent;
}

<?php #Seite Hintergrund ?>
#wb-page-content {
	border-radius: 7px; <?php #Rundung 
	/*background: url("<?php echo $SImg; ?>/bg-w.png") repeat-x #fff; */ ?>
	background: #fff;
}

<?php #Seiten Content ?>
#wb-content { 
	padding:10px;
	border-radius: 7px; <? #Rundung ?>
	border: 1px solid #ddd;
}

<?php #Banner Content ?>
#wb-banner-page { margin-top:-12px; }
#wb-banner {
	background:#fff; 
	border: 1px solid #ddd;
	border-radius: 7px; <? #Rundung ?>
}

<?php #Sitenotice Zusatz ?>
#wb-notice {
	<?php if($this->data['loggedin']) { ?>
	display:none;
	<?php } ?>
}

<?php #Logo ?>
.navbar .brand {
	padding: 0px;
	padding-left: 20px;
	padding-right: 10px;
}
</style>