// navbar-a toggling
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.n');
let inputbox = document.querySelector('.input-box-a');


menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('open');
	inputbox.classList.toggle('open');
};
//packagejs

var swiper = new Swiper(".slide-content", {
	slidesPerView: 3,
	spaceBetween: 25,
	loop: true,
	centerSlide: 'true',
	fade: 'true',
	grabCursor: 'true',
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
		dynamicBullets: true,
	},
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},

	breakpoints: {
		0: {
			slidesPerView: 1,
		},
		520: {
			slidesPerView: 2,
		},
		950: {
			slidesPerView: 3,
		},
	},
});