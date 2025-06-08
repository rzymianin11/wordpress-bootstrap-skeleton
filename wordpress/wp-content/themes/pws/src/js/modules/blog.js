import 'slick-carousel'

const Blog = {
  $carousel: $('.carousel-blog'),
  init() {
    const _ = this

    _.$carousel.slick({
      arrows: false,
      dots: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1
    })
  }
}

export default Blog
