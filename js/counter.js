import counterUp from '../node_modules/counterup2/index.js';

const callback = entries => {
	entries.forEach(entry => {
		const el = entry.target;
		if (entry.isIntersecting) {
			counterUp(el, {
				duration: 800,
				delay: 16,
			});
			IO.unobserve(el);
		}
	});
};

const IO = new IntersectionObserver(callback, { threshold: 1 });

document.querySelectorAll('.counter').forEach(element => {
	IO.observe(element);
});
