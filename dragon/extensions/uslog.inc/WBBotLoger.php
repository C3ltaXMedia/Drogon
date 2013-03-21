<?php
/**
 *
 * @file WBBotloger for Wikibyte API
 * @Wikibyte.org - Skining extensions for Axomicversion: Dragon Skin
 * @skin Wikibyte Dragon
 * @author Michael McCouman jr.
 * @copyright Copyright © 2012 Michael McCouman jr.
 * @license Copyright © 2012 Michael McCouman jr.
 *
 */

if( !defined( 'MEDIAWIKI' ) ) die( 'Not an entry point.' );
define( 'WB_LOGIN_LOG_VERSION', '1, 2012-15-17' );
$wgServerWBUser = 1; 
// User ID to use for logging if no user exists
$wgExtensionMessagesFiles['UserLoginLog'] = dirname( __FILE__ ) . '/' . 'WBBotLoger.i18n.php';
// Add a new log type
$wgLogTypes[]                      = 'userlogin';
$wgLogNames  ['userlogin']         = 'userloginlogpage';
$wgLogHeaders['userlogin']         = 'userloginlogpagetext';
$wgLogActions['userlogin/success'] = 'userlogin-success';
$wgLogActions['userlogin/error']   = 'userlogin-error';
$wgLogActions['userlogin/logout']  = 'userlogin-logout';
// Add hooks to the login/logout events
$wgHooks['UserLoginForm'][]      = 'wfUserLoginLogError';
$wgHooks['UserLoginComplete'][]  = 'wfUserLoginLogSuccess';
$wgHooks['UserLogout'][]         = 'wfUserLoginLogout';
$wgHooks['UserLogoutComplete'][] = 'wfUserLoginLogoutComplete';
function wfUserLoginLogSuccess( &$user ) {
        $log = new LogPage( 'userlogin', false );
        $log->addEntry( 'success', $user->getUserPage(), wfGetIP() );
        return true;
}
function wfUserLoginLogError( &$tmpl ) {
        global $wgUser, $wgServerUser;
        if( $tmpl->data['message'] && $tmpl->data['messagetype'] == 'error' ) {
                $log = new LogPage( 'userlogin', false );
                $tmp = $wgUser->mId;
                if( $tmp == 0 ) $wgUser->mId = $wgServerUser;
                $log->addEntry( 'error', $wgUser->getUserPage(), $tmpl->data['message'], array( wfGetIP() ) );
                $wgUser->mId = $tmp;
        }
        return true;
}
function wfUserLoginLogout( $user ) {
        global $wgUserBeforeLogout;
        $wgUserBeforeLogout = User::newFromId( $user->getID() );
        return true;
}
function wfUserLoginLogoutComplete( $user ) {
        global $wgUser, $wgUserBeforeLogout;
        $tmp = $wgUser->mId;
        $wgUser->mId = $wgUserBeforeLogout->getId();
        $log = new LogPage( 'userlogin', false );
        $log->addEntry( 'logout', $wgUserBeforeLogout->getUserPage(), $user->getName() );
        $wgUser->mId = $tmp;
        return true;
}