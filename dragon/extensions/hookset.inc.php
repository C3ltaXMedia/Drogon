<?php
/**
 *
 * @file
 * @Wikibyte.org - Skining extensions for Axomicversion: Dragon Skin
 * @skin Wikibyte Dragon
 * @author Michael McCouman jr.
 * @copyright Copyright © 2012 Michael McCouman jr.
 * @license Copyright © 2012 Michael McCouman jr.
 *
 */

// If this is run directly from the web die as this is 
// not a valid entry point of dragon wiki.
if( !defined( 'MEDIAWIKI' ) ) 
	die( 'Invalid entry point for Dragon Skin.' );

// Extension credits
$wgExtensionCredits[ 'other' ][] = array(
	'path'           => __FILE__,
	'name'           => 'Skin Dragon Editorily',
	'author'         => 'Michael McCouman jr.',
	'url'            => 'http://www.wikibyte.org',
	'version'        => '0.1.7',
);

// integrate Dragon Hook to skining
$wgHooks['EditPage::showEditForm:initial' ][] = 'operation';
	# creates a transfer function in Dragon skin
	function operation( $ausgabe ) {
	# var for gloable skin path in dragon
	global $wgLocalStylePath;
	# transfer of the function in a variable Dragon
	$ausgabe->editFormPageTop.= "<style type=\"text/css\">a#no_editor,li#but-ed_it,li#but-sysop,div.subnav,img#wb-doc-shadow { display:block!important;}</style>";	
	//out grant expenditure if properly
	return true;
}
