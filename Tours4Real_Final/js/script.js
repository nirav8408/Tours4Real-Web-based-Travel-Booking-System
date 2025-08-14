// navbar-a toggling
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.n');
let inputbox = document.querySelector('.input-box-a');


menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
    inputbox.classList.toggle('open');
};
// banner slider

var swiper = new Swiper(".home-slider", {
    loop: true,
    grabCursor: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// top destination places
var sw = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

(function($) {
	

	$('.active-gallery-carousel').owlCarousel({
		items: 2,
		// autoplay: 2500,
		loop: true,
		margin: 30,
		nav: true,
		navText: [ "<img src='img/cprev.png'>", "<img src='img/cnext.png'>" ],
		dots: false,
		responsive: {
			0: {
				items: 1
			},
			420: {
				items: 1
			},
			575: {
				items: 1
			},
			768: {
				items: 2
			},
			1200: {
				items: 2
			},
			1680: {
				items: 2
			}
		}
	});
})(jQuery);
// 
const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const paginationBtns = document.querySelectorAll(".pagination-btn");
const prevBtn = document.querySelector("#prev");
const nextBtn = document.querySelector("#next");

let currentSlide = 0;

/* Initialize the slider */
/* updateSlider(); */
/* Add event listener to the pagination buttons */
paginationBtns.forEach((button, index) => {
	button.addEventListener("click", () => {
		currentSlide = index;

		updateSlider();
	});
});

/* Add event listener to the control buttons */

prevBtn.addEventListener("click", () => {
	currentSlide--;
	updateSlider();
});
nextBtn.addEventListener("click", () => {
	currentSlide++;
	updateSlider();
});

function updateSlider() {
	// update slides

	slides.forEach((slide, index) => {
		slide.classList.remove("active");

		if (index === currentSlide) {
			slide.classList.add("active");
		}
	});
	// Update pagination buttons

paginationBtns.forEach((button, index) => {
		button.classList.remove("active");

		if (index === currentSlide) {
			button.classList.add("active");
		}
	});

// Update control buttons

	if (currentSlide === 0) {
		prevBtn.disabled = true;
	} else {
		prevBtn.disabled = false;
	}
	if (currentSlide === slides.length - 1) {
		nextBtn.disabled = true;
	} else {
		nextBtn.disabled = false;
	}
}

/* Image Map Sider */
 
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let myslides = document.getElementsByClassName("mySlides");
  /* let dots = document.getElementsByClassName("dot"); */
  if (n > myslides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = myslides.length}
  for (i = 0; i < myslides.length; i++) {
    myslides[i].style.display = "none"; 
  }
  /* for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  } */
  slides[slideIndex-1].style.display = "block";  
 /*  dots[slideIndex-1].className += "active"; */
}

var path = $('#pathFactory').clone().removeAttr('id');
a