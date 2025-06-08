function isinViewport(elem) {
  var bounding = elem.getBoundingClientRect()
  return bounding.top >= 0 && bounding.left >= 0
}

const Scroller = {
  init() {
    const _ = this
    const body = document.getElementsByTagName('body')[0]
    const customContainer = document.querySelector('#page')


    _.scroll.on('scroll', args => {
      const items = document.querySelectorAll('[data-scroll-call="animation"], [data-scroll-call="custom-animation"]')

      if (args.scroll.y > 120) {
        body.classList.add('scrolled')
      } else {
        body.classList.remove('scrolled')
      }

      if (args.direction === 'up') {
        items.forEach(el => {
          const animation = el.dataset.animation
          const bounds = el.getBoundingClientRect()

          if (args.scroll.y + window.innerHeight < bounds.top + args.scroll.y) {
            el.classList.remove(animation)
            el.classList.remove('visible')
          }
        })
      }
    })

    _.scroll.on('call', (type, event, el) => {
      if (el) {
        const target = el.el
        const animation = target.dataset.animation
        const delay = target.dataset.animationDelay || 0

        if (type === 'animation') {
          setTimeout(() => {
            target.classList.add('visible')
            target.classList.add(animation)
          }, Number(delay))
        } else if (type === 'custom-animation') {
          setTimeout(() => {
            target.classList.add('visible')
          }, Number(delay))
        } else if (type === 'count-up') {
          const countUp = new CountUp(target, target.dataset.to).start()
        }
      }
    })
  }
}

export default Scroller
