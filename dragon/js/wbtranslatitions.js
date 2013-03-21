/**
 *
 * @file is grypticle!
 * @Wikibyte.org - Skining extensions for Axomicversion: Dragon Skin
 * @skin Wikibyte Dragon
 * @author Michael McCouman jr.
 * @copyright Copyright © 2012 Michael McCouman jr.
 * @license Copyright © 2012 Michael McCouman jr.
 *
 */
 !function ($) { $(function () { "use strict"; $.support.transition = (function () { var transitionEnd = (function () { var el = document.createElement('bootstrap') , transEndEventNames = { 'WebkitTransition' : 'webkitTransitionEnd' , 'MozTransition' : 'transitionend' , 'OTransition' : 'oTransitionEnd' , 'msTransition' : 'MSTransitionEnd' , 'transition' : 'transitionend' } , name for (name in transEndEventNames){ if (el.style[name] !== undefined) { return transEndEventNames[name] } } }()) return transitionEnd && { end: transitionEnd } })() })}(window.jQuery);