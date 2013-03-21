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
?>
<div <?php $this->html( 'userlangattributes' ) ?> > <center> <?php // generate additional footer links $footerlinks = array( 'lastmod', 'viewcount', 'numberofwatchingusers', ); ?> <?php foreach ( $footerlinks as $aLink ) { ?> <?php if ( isset( $this->data[$aLink] ) && $this->data[$aLink] ) { ?> <?php $this->html( $aLink ) ?> <center> <?php } ?> <?php } ?> </div> <!-- Info --> <?php $this->printTrail(); ?>