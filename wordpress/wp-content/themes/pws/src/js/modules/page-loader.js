import { disablePageScroll, enablePageScroll } from 'scroll-lock'

const PageLoader = {
  init() {
    const DOM = {
      loader: $('[data-page-progress]'),
      body: $('body'),
      value: $('[data-page-progress-value]')
    }

    disablePageScroll()

    function loadbar() {
      var img = document.images,
        c = 0,
        tot = img.length

      if (tot == 0) return doneLoading()

      function imgLoaded() {
        c += 1
        var perc = ((100 / tot) * c) << 0
        DOM.value.text(`${perc}%`)
        DOM.loader.css('width', `${perc}%`)
        if (c === tot) return doneLoading()
      }

      function doneLoading() {
        setTimeout(() => {
          const eventLodaded = new Event('page-loaded')
          const eventHidden = new Event('page-loader-hidden')

          DOM.loader.addClass('loaded')
          DOM.body.addClass('page-loaded')

          window.dispatchEvent(eventLodaded)

          setTimeout(() => {
            DOM.body.addClass('page-loader-hidden')

            setTimeout(() => {
              DOM.body.addClass('page-introduced')
              window.dispatchEvent(eventHidden)
              enablePageScroll()
            }, 1800)
          }, 500)
        }, 100)
      }

      for (var i = 0; i < tot; i++) {
        var tImg = new Image()
        tImg.onload = imgLoaded
        tImg.onerror = imgLoaded
        tImg.src = img[i].src
      }
    }

    document.addEventListener('DOMContentLoaded', loadbar, false)
  }
}

export default PageLoader
