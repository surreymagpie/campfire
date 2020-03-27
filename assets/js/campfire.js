// Campfire JavaScript 

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
