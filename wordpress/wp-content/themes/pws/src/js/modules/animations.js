import 'is-in-viewport'
import 'jquery.appear'
import imagesLoaded from 'imagesloaded'

imagesLoaded.makeJQueryPlugin($)

const $body = $('body')

const Animations = {
  init: function() {
    const _ = this
    const dy = -$(window).height() / 4

    $('[data-animation]:not(img), [data-animate]').each(function() {
      const $self = $(this)
      const animation = $self.data('animation')
      const animateType = $self.data('animate')
      const delay = Number($self.data('animation-delay') || 0)

      if ($self.is(':in-viewport')) {
        setTimeout(() => {
          if ($self.data('animation')) {
            $self.addClass('visible ' + animation)
          } else {
            $self.addClass('visible')
          }
        }, delay)
      }
    })
    $body.imagesLoaded().progress(function(instance, image) {
      var $img = $(image.img)
      if ($img.data('animation')) {
        $img.appear(
          function() {
            var delay = $img.data('animation-delay')
            setTimeout(function() {
              $img.addClass($img.data('animation')).addClass('visible')
            }, delay)
          },
          { accY: dy }
        )
      }
    })
  },
  handle: function(scrolled, direction) {
    const _ = this

    $('[data-animation]:not(img), [data-animate]').each(function() {
      const $self = $(this)
      const selfOffset = $self.offset().top
      const animation = $self.data('animation')
      const animateType = $self.data('animate')
      const delay = Number($self.data('animation-delay') || 0)
      const offset = $(window).height() * 0.95

      if (direction === 'DOWN' && scrolled >= selfOffset - offset && !$self.hasClass('visible')) {
        setTimeout(() => {
          if ($self.data('animation')) {
            $self.addClass('visible ' + animation)
          } else {
            $self.addClass('visible')
          }
        }, delay)
      } else if (direction === 'UP' && $self.is(`:in-viewport(${-offset})`) && !$self.hasClass('visible')) {
        setTimeout(() => {
          if ($self.data('animation')) {
            $self.addClass('visible ' + animation)
          } else {
            $self.addClass('visible')
          }
        }, delay)
      } else if (direction === 'UP' && !$self.is(':in-viewport') && $self.offset().top > scrolled && $self.hasClass('visible')) {
        $self.removeClass('visible ' + animation)
      }
    })
  }
}

export default Animations
