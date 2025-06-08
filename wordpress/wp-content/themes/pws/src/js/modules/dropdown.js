const Dropdown = {
  $toggle: $('.dropdown-toggle'),
  init() {
    const _ = this

    _.$toggle.on('click', function(e) {
      const $self = $(this)

      $self.parent('.dropdown').toggleClass('show')
      e.stopPropagation()

      return false
    })
  },
  handleClick() {
    $('.dropdown.show').removeClass('show')
  }
}

export default Dropdown
