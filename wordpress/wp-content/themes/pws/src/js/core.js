/*
import AgeGate from './modules/age-gate'
import Blog from './modules/blog'
import Images from './modules/images'
import Modal from './modules/modal'
import Navigation from './modules/navigation'
import PageLoader from './modules/page-loader'
*/
import ScrollEffects from './modules/scroll-effects'
import Animations from './modules/animations'
import Scroll from './modules/scroll'

import Scroller from './modules/scroller'

import MmenuModule from './modules/mmenumodule'
import SectionSlider from './modules/section-slider'
import MasonryProjects from './modules/masonryprojects';

//PageLoader.init()

$(() => {
//  Images.init()
//  Navigation.init()
//  AgeGate.init()
//  Blog.init()
  ScrollEffects.init()
  Animations.init()
  
  SectionSlider.init()
  MmenuModule.init()
  MasonryProjects.init();
//  Modal.init()

  // TO DEV:
  // $('#page-loader').hide()
  // PageLoader.init()
//   Scroller.init()
})

/*
window.addEventListener('page-loaded', function() {
  Scroller.init()
})
*/

let scrolled

$(window).on('scroll', function() {
  scrolled = $(window).scrollTop()
  Scroll.handle(scrolled)
  Animations.handle(scrolled, Scroll.direction)
})


$(function(){
	$('#custom_s').on('submit', function(e){
		e.preventDefault();
		var vv = $('.stockist-search-field').val();
		$('.stockist-query-entry').find('.stockist-search-field').val(vv);
		var elem = $('.stockist-search-button').find('button').get(0);
		console.log(elem);
		var simulateClick = function (elem) {
			// Create our event (with options)
			var evt = new MouseEvent('click', {
				bubbles: true,
				cancelable: true,
				view: window
			});
			// If cancelled, don't dispatch our event
			var canceled = !elem.dispatchEvent(evt);
		};
		simulateClick(elem);
	});
});