import 'slick-carousel'

const SectionSlider = {
  $carousel: $('.slider-slick'),
  init() {
    const _ = this
    $('.slider-slick').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: false,
      dots: true,
      fade: true,
      rows: 0,
      speed: 500,
	  adaptiveHeight: true,
      slidesToShow: 1,
      slidesToScroll: 1
    })
  }
}

export default SectionSlider
