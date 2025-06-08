import { disablePageScroll, enablePageScroll } from 'scroll-lock'
import Scroller from './scroller'

const $body = $('body')

const Navigation = {
  $nav: $('#navigation'),
  init() {
    const _ = this
    _.scrollers = $('[data-local-scroll]')
    _.navToggle = $('[data-toggle="navigation"]')

    _.scrollers.on('click', function() {
      const $self = $(this)
      const id = $self.attr('href')

      if (id !== '#') {
        _.scrollTo(id)
        return false
      } else {
        return false
      }
    })

    // Navigation Toggle
    _.navToggle.on('click', function() {
      const $self = $(this)
      if (!$body.hasClass('navigation-open')) {
        $self.addClass('open')
        $body.addClass('navigation-open')
        disablePageScroll(_.$nav[0])
      } else {
        $self.removeClass('open')
        $body.removeClass('navigation-open')
        enablePageScroll(_.$nav[0])
      }
      return false
    })
  },
  scrollTo(id) {
    const _ = this
    const $target = $(id)

    _.scrollOffset = 0

    if ($target.length) {
      Scroller.scroll.scrollTo($target[0])
      _.hide()
    } else {
      console.log('Wrong href...')
    }
  },
  hide: function() {
    var _ = this
    $body.removeClass('navigation-open')
    _.navToggle.removeClass('open')
  }
}

export default Navigation
