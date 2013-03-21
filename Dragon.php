<?php
/**
 * Dragon Skin v2.7.1rc (0.3)
 * by Michael McCouman jr
 * Copyright 2012 Wikibyte.org
 * MediaWiki Skin 2012-2013(c) v0.1-0.3
 */
 
if( !defined( 'MEDIAWIKI' ) ) { die( -1 ); }
class SkinDragon extends SkinTemplate { var $skinname = 'dragon', $stylename = 'dragon', $template = 'DragonTemplate', $useHeadElement = true; public function initPage( OutputPage $out ) { global $wgLocalStylePath; parent::initPage( $out ); //Dragon on mody css $out->addHeadItem( 'bootdragon', '<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/dragon/css/fix.css">' ); $out->addHeadItem( 'bootresdragon', '<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/dragon/screen.css">' ); } }
class DragonTemplate extends BaseTemplate { public function execute() { global $wgDragonWatch;

# Build additional attributes for Dragon navigation urls
$nav = $this->data['content_navigation']; if ( $wgDragonWatch ) { $mode = $this->getSkin()->getTitle()->userIsWatching() ? 'unwatch' : 'watch'; if ( isset( $nav['actions'][$mode] ) ) { $nav['views'][$mode] = $nav['actions'][$mode]; $nav['views'][$mode]['class'] = rtrim( 'icon ' . $nav['views'][$mode]['class'], ' ' ); $nav['views'][$mode]['primary'] = true; unset( $nav['actions'][$mode] ); } } $xmlID = '';
foreach ( $nav as $section => $links ) { foreach ( $links as $key => $link ) { if ( $section == 'views' && !( isset( $link['primary'] ) && $link['primary'] ) ) { $link['class'] = rtrim( 'collapsible ' . $link['class'], ' ' ); } $xmlID = isset( $link['id'] ) ? $link['id'] : 'ca-' . $xmlID; $nav[$section][$key]['attributes'] = ' id="' . Sanitizer::escapeId( $xmlID ) . '"'; if ( $link['class'] ) { $nav[$section][$key]['attributes'] .= ' class="' . htmlspecialchars( $link['class'] ) . '"'; unset( $nav[$section][$key]['class'] ); } if ( isset( $link['tooltiponly'] ) && $link['tooltiponly'] ) { $nav[$section][$key]['key'] = Linker::tooltip( $xmlID ); } else { $nav[$section][$key]['key'] = Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs( $xmlID ) ); } } }
$this->data['namespace_urls'] = $nav['namespaces']; $this->data['view_urls'] = $nav['views']; $this->data['action_urls'] = $nav['actions']; $this->data['variant_urls'] = $nav['variants'];

# Reverse horizontally rendered navigation elements
if ( $this->data['rtl'] ) { $this->data['view_urls'] = array_reverse( $this->data['view_urls'] ); $this->data['namespace_urls'] = array_reverse( $this->data['namespace_urls'] ); $this->data['personal_urls'] = array_reverse( $this->data['personal_urls'] ); } /* Output HTML page*/ $this->html( 'headelement' ); /* Dragon vars init settings*/ include('dragon/var.php'); 
?><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" type="text/css" href="<?php echo $SCSSpfad; ?>/dragon/dragon.css"> <?php include ("$SCSSPHP/css.php"); include ("$SCSSPHP/$SKINCOLOR-css.php"); ?> <link rel="stylesheet" type="text/css" href="<?php echo $SCSSpfad; ?>/dragon/dragon-responsive.css"> <link rel="stylesheet" type="text/css" href="<?php echo $SCSSpfad; ?>/dragon/dragondocs.css"> <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> <body> <?php include ("$SOSeite/panel.php"); ?> <div class="container"> <div class="row-fluid"> <div class="span12"> <?php  include ("$SOSeite/userpage.php"); include ("$SOSeite/heading.php"); ?> <div class="row-fluid" id="wb-page-content"> <?php include ("$SOSeite/page.php"); ?> </div> <center><img src="<?php echo $SImg; ?>/over<?php echo $wgSkinColor; ?>.png"></center> <?php  include ("$SOSeite/seiteninfos.php"); ?> <?php if($this->data['loggedin']) { echo '<!-- include id banning on -->'; } else { echo '<center><img src="' .$SImg. '/under' .$wgSkinColor. '.png"></center>'; include ("$SISeite/Banner.php"); echo '<center><img src="' .$SImg. '/over' .$wgSkinColor. '.png"></center>'; } ?> <center> <?php if ( $this->data['copyrightico'] ) { ?><?php $this->html('copyrightico') ?><?php } ?> <?php if ( $this->data['poweredbyico'] ) { ?><?php $this->html('poweredbyico') ?><?php } ?> </center> </div> </div> <?php include ("$SO134id/Site/footer.php"); ?> </div> </div> </body> </html>
<?php } private function renderPortals( $portals ) {
# Force the rendering of the following portals 
if ( !isset( $portals['SEARCH'] ) ) { $portals['SEARCH'] = true; } if ( !isset( $portals['TOOLBOX'] ) ) { $portals['TOOLBOX'] = true; } if ( !isset( $portals['LANGUAGES'] ) ) { $portals['LANGUAGES'] = true; }

# Render portals Dragon Wiki
foreach ( $portals as $name => $content ) { if ( $content === false ) continue; echo "\n<!-- {$name} -->\n"; switch( $name ) { case 'SEARCH': break; case 'TOOLBOX': if($this->data['loggedin']) { $this->renderPortal( 'tb', $this->getToolbox(), 'toolbox', 'SkinTemplateToolboxEnd' ); } break; case 'LANGUAGES': if ( $this->data['language_urls'] ) { $this->renderPortal( 'lang', $this->data['language_urls'], 'otherlanguages' ); } break; default: $this->renderPortal( $name, $content ); break; } echo "\n<!-- /{$name} -->\n"; }
} private function renderPortal( $name, $content, $msg = null, $hook = null ) { if ( $msg === null ) { $msg = $name; }?>
<li class="dropdown"><a class="<?php global $wgNavPannel; echo $wgNavPannel; ?>" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php $msgObj = wfMessage( $msg ); echo htmlspecialchars( $msgObj->exists() ? $msgObj->text() : $msg ); ?><!--<b class="caret"></b>--></a><ul class="dropdown-menu">
<?php if ( is_array( $content ) ): foreach( $content as $key => $val ): echo $this->makeListItem( $key, $val ); endforeach; if ( isset( $hook ) ) { wfRunHooks( $hook, array( &$this, true ) ); } ?>
</ul><?php else: echo $content; endif; ?></li><li class="divider-vertical<?php global $wgNavPannel; echo $wgNavPannel; ?>"></li>
<?php } private function renderNavigation( $elements ) { if ( !is_array( $elements ) ) { $elements = array( $elements ); 

# If there's a series of elements, reverse them when in RTL mode 
} elseif ( $this->data['rtl'] ) { $elements = array_reverse( $elements ); } 

# Render action elements in Dragon 
foreach ( $elements as $name => $element ) { echo "\n<!-- {$name} -->\n"; switch ( $element ) { case 'NAMESPACES':
?><?php foreach ( $this->data['namespace_urls'] as $link ): ?><li <?php echo $link['attributes'] ?>><a href="<?php echo htmlspecialchars( $link['href'] ) ?>" <?php echo $link['key'] ?>><i class="icon-<?php echo htmlspecialchars( $link['text'] ) ?>"></i><span><?php echo htmlspecialchars( $link['text'] ) ?></span></a></li>
<?php endforeach; break; case 'VARIANTS': break; case 'VIEWS': break; case 'ACTIONS': ?><?php foreach ( $this->data['action_urls'] as $link ): ?>
<li><a <?php echo $link['attributes'] ?> href="<?php echo htmlspecialchars( $link['href'] ) ?>" <?php echo $link['key'] ?>> <span <?php echo $link['attributes'] ?>> <?php echo htmlspecialchars( $link['text'] ) ?> </span> </a></li>
<?php endforeach; 

#Personal elements to Dragon
?><?php break; case 'PERSONAL': ?><div style="float:left; width:180px;"><ul<?php $this->html( 'userlangattributes' ) ?>><?php foreach( $this->getPersonalTools() as $key => $item ) { ?><?php echo $this->makeListItem( $key, $item ); ?><?php } ?>
</ul></div><?php break; case 'SEARCH': ?><form method="get" class="navbar-search pull-right" action="<?php $this->text('searchaction') ?>">
<input name="search" type="text" placeholder="Suche" onfocus="if (this.value == '') {this.value = ''}" name="s" id="s" class="search-query" /><input name="go" type="hidden" tabindex="5" value="Go" />
</form><?php break; } echo "\n<!-- /{$name} -->\n"; } } }