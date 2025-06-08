import Cookies from 'js-cookie'

const AgeGate = {
  $popup: $('#age-gate'),
  $accept: $('[data-accept="age"]'),
  init() {
    let _ = this

    if (Cookies.get('age_accepted')) {
      _.$popup.remove()
      $('body').addClass('age-accepted')
    } else {
      setTimeout(() => {
        _.$popup.addClass('visible')
      }, 500)

      _.$accept.on('click', () => _.accept())
    }
  },
  accept() {
    let _ = this

    Cookies.set('age_accepted', true)
    _.$popup.removeClass('visible')
    setTimeout(() => {
      $('body').addClass('age-accepted')
    }, 300)
  }
}

export default AgeGate
