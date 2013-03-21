<?php 
/**
 *
 * @file Dragon docles
 * @Labs.Wikibyte.org
 * @skin Wikibyte Dragon
 * @author Michael McCouman jr.
 * @copyright Copyright © 2012 Michael McCouman jr.
 * @license Copyright © 2012 Michael McCouman jr.
 *
 */
if($this->data['loggedin']) { ?><div class="subnav"><ul class="nav nav-pills"> <?php $this->renderNavigation( array( 'NAMESPACES' ) ); ?> <li id="but-spezi"> <a href="<?php global $wgServer; echo $wgServer; ?>/<?php echo $indexpa; ?>Spezial:Spezialseiten"><i class="icon-star"></i> Spezialseiten</a> </li> <li id="but-up_togo"> <a href="<?php global $wgServer; echo $wgServer; ?>/<?php echo $indexpa; ?>Spezial:Hochladen"><i class="icon-picture"></i> Hochladen</a> </li> <li id="but-ed_it" class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-flag"></i> Admins <b class="caret"></b></a> <ul class="dropdown-menu"> <?php $this->renderNavigation( 'ACTIONS' ); ?> </ul> </li> <li id="but-sysop" class="dropdown"> <a href="<?php global $wgServer; echo $wgServer; ?>/w/index.php?title=<?php $this->html( 'title' ) ?>&action=edit" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-edit"></i> Bearbeiten <b class="caret"></b></a> <ul class="dropdown-menu"> <?php $this->renderNavigation( 'VIEWS' ); ?> <!--<li class="divider"></li>--> <?php $this->renderNavigation( 'VARIANTS' ); ?> </ul> </li> </ul> <div style="float:right; margin-right: 5px; margin-top: -33px;"> <a id="no_editor" class="btn btn-primary" href="<?php global $wgServer; echo $wgServer; ?>/w/index.php?title=<?php $this->html( 'title' ) ?>&action=edit" ><i class="icon-pencil icon-white"></i></a></div></div><?php } ?>