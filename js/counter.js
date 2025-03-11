import counterUp from '../node_modules/counterup2/index.js';

const callback = entries => {
	entries.forEach( entry => {
		const el = entry.target
		if ( entry.isIntersecting ) {
			counterUp( el, {
				duration: 2000,
				delay: 16,
			} )
		}
	} )
}

const IO = new IntersectionObserver( callback, { threshold: 1 } )

const el = document.querySelectorAll( '.counter' )

el.forEach( element => {
    IO.observe( element )
});
