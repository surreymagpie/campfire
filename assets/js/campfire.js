// Campfire JavaScript 

/*
===============================
Detect if JavaScript is available
===============================
*/

document.addEventListener('DOMContentLoaded', function () {
	const html = document.getElementsByTagName('html').item(0);
	html.classList.remove('no-js');
	html.classList.add('js')
});

/*
===============================
Toggle navigation menu
===============================
*/

const menu = document.getElementById('menu-main');
const toggle = document.getElementById('menu-toggle');

toggle.addEventListener('click', function() {
	menu.classList.toggle('is-open');
	setTimeout(() => {
		toggle.classList.toggle('inverted');
	}, 400);
});
