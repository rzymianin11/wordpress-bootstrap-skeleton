import Masonry from 'masonry-layout';
require('fslightbox');

const MasonryProjects = {
  init() {
    const _ = this

		if($('.grid').length){
			var msnry = new Masonry( $('.grid').get(0), {
			  // options
			  columnWidth: '.grid-sizer',
			  itemSelector: '.grid-item',
			  percentPosition: true
//			  columnWidth: 200
			});
			
			$('[data-fslightboxOpen]').on('click', function(e){
				e.preventDefault();
				const lightbox = new FsLightbox();
				var imgs = [];
				$(this).find('.gallery img').each(function(){
					imgs.push($(this).attr('src'));
				});
				console.log(imgs);
				lightbox.props.sources = imgs;
				lightbox.open();
				
			});
		}
		
				    	

  }
}

export default MasonryProjects
