<?php 
/**
 * Dragon Skin v2
 * by Michael McCouman jr
 * Copyright 2012 - Wikibyte.org
 * MediaWiki Skin
 */
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<input type="file" name="probe" />
<input type="submit" class="flat"value="Jetzt Hochladen" />
</form>
<?php
    error_reporting(E_ALL);
	global $wgUser;
		if (isset($_FILES['probe']) and ! $_FILES['probe']['error']) {
            #integration avatar special
			move_uploaded_file($_FILES['probe']['tmp_name'], "/".$wgUser->getName().".png");
		}
?>