import * as ScrollMagic from 'scrollmagic'
import { TweenMax, TimelineMax, Power1 } from 'gsap'
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap'

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax)

const controller = new ScrollMagic.Controller()

const ScrollEffects = {
  init() {
    const _ = this

    _.horizontalWatermark()
    _.verticalWatermark()
    _.imageDouble()
    _.dynamicMap()
  },
  horizontalWatermark() {
    const elements = document.querySelectorAll('.section-watermark.horizontal')

    elements.forEach(el => {
      const scene = new ScrollMagic.Scene({
        triggerElement: el,
        triggerHook: 0.95,
        duration: $(window).height() * 1.5
      }).setTween(el, { x: '5%', y: '-15%', scale: 1.11, ease: Power1.easeOut })

      controller.addScene(scene)
    })
  },
  verticalWatermark() {
    const elements = document.querySelectorAll('.section-watermark.vertical')

    elements.forEach(el => {
      const scene = new ScrollMagic.Scene({
        triggerElement: el,
        triggerHook: 0.95,
        duration: $(window).height() * 2
      }).setTween(el, { y: '20%', scale: 1.11, ease: Power1.easeOut })

      controller.addScene(scene)
    })
  },
  imageDouble() {
    const elements = document.querySelectorAll('.section-image-edge .section-image, .image-double')

    elements.forEach(el => {
      const img1 = el.querySelectorAll('img, .bg-image')[0]
      const img2 = el.querySelectorAll('img, .bg-image')[1]

      const scene1 = new ScrollMagic.Scene({
        triggerElement: img1,
        triggerHook: 0.85,
        duration: $(window).height() * 1.75
      }).setTween(img1, { x: '3%', ease: Power1.easeOut })

      const scene2 = new ScrollMagic.Scene({
        triggerElement: img2,
        triggerHook: 0.85,
        duration: $(window).height() * 1.75
      }).setTween(img2, { x: '-3%', ease: Power1.easeOut })

      controller.addScene([scene1, scene2])
    })
  },
  dynamicMap() {
    const elements = document.querySelectorAll('.map')

    elements.forEach(el => {
      const img1 = el.querySelectorAll('img')[0]
      const img2 = el.querySelectorAll('img')[1]

      const scene1 = new ScrollMagic.Scene({
        triggerElement: img1,
        triggerHook: 1,
        duration: $(window).height() * 1.5
      }).setTween(img1, { x: '-20%', ease: Power1.easeOut })

      const scene2 = new ScrollMagic.Scene({
        triggerElement: img2,
        triggerHook: 1,
        duration: $(window).height() * 1.5
      }).setTween(img2, { x: '20%', ease: Power1.easeOut })

      controller.addScene([scene1, scene2])
    })
  }
}

export default ScrollEffects
