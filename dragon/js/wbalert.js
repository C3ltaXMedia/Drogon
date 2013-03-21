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
!function ($) { "use strict"; var dismiss = '[data-dismiss="alert"]' , Alert = function (el) { $(el).on('click', dismiss, this.close) } Alert.prototype.close = function (e) { var $this = $(this) , selector = $this.attr('data-target') , $parent if (!selector) { selector = $this.attr('href') selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') } $parent = $(selector) e && e.preventDefault() $parent.length || ($parent = $this.hasClass('alert') ? $this : $this.parent()) $parent.trigger(e = $.Event('close')) if (e.isDefaultPrevented()) return $parent.removeClass('in') function removeElement() { $parent .trigger('closed') .remove() } $.support.transition && $parent.hasClass('fade') ? $parent.on($.support.transition.end, removeElement) : removeElement() } $.fn.alert = function (option) { return this.each(function () { var $this = $(this) , data = $this.data('alert') if (!data) $this.data('alert', (data = new Alert(this))) if (typeof option == 'string') data[option].call($this) }) } $.fn.alert.Constructor = Alert $(function () { $('body').on('click.alert.data-api', dismiss, Alert.prototype.close) })}(window.jQuery);