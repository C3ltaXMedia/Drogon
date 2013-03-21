<?php 
/**
 *
 * @file Dragon Panel Starting
 * @Labs.Wikibyte.org
 * @skin Wikibyte Dragon
 * @author Michael McCouman jr.
 * @copyright Copyright © 2012 Michael McCouman jr.
 * @license Copyright © 2012 Michael McCouman jr.
 *
 */

if($this->data['loggedin']) { ?> <? #Userpage ?> <div id="demo" class="collapse"> <? #Fluid ?> <div class="well sidebar-nav"> <h3>Mein Avatar (<?php global $wgUser; echo $wgUser; ?>) </h3> <div class="row-fluid"> <div class="span3"> <center> <ul class="thumbnails"> <li style="width:150px; height:150px;"> <a href="<?php global $wgServer; echo $wgServer; ?>/<?php echo $indexpa; ?>User:<?php global $wgUser; echo $wgUser; ?>" class="thumbnail"> <img style="width:150px; height:150px;" src="<?php global $wgServer; echo $wgServer; ?>/avatar/<?php global $wgUser; echo $wgUser; ?>.png" alt="<?php global $wgUser; echo $wgUser; ?>"> </a> </li> </ul> </center> </div> <div class="span9"> <!--Benutzer Avatar --> <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"> <h4>Dein Avatar hochladen</h4> <input type="file" name="probe" /> <br> <br> <input type="submit" class="btn" value="Jetzt Hochladen" /> </form> <?php error_reporting(E_ALL); global $wgUser; if (isset($_FILES['probe']) and ! $_FILES['probe']['error']) { move_uploaded_file($_FILES['probe']['tmp_name'], "/avatar/".$wgUser->getName().".png"); } ?> </div> </div> <center> <div style="margin-top:-15px;"> <hr /> <a class="btn btn-info" style="cursor: pointer;" data-toggle="collapse" data-target="#demo"> <i class="icon-chevron-up icon-white"></i></a> </div> </center> </div> </div> <?php } ?>