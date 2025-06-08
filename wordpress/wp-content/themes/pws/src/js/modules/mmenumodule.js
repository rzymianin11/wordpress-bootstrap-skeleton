import Mmenu from 'mmenu-js'
import 'mburger-webcomponent'

const MmenuModule = {
  init() {
    const _ = this
        new Mmenu( "#menu", 
			{
	           "offCanvas": {
	              "position": "right-front"
	           },
	           "theme": "dark"
	        }
        );
  }
}

export default MmenuModule
