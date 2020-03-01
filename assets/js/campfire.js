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
