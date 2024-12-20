function ibg() {
	let ibg = document.querySelectorAll(".ibg")
	for (var i = 0; i < ibg.length; i++) {
		if (ibg[i].querySelector("img")) {
			ibg[i].style.backgroundImage =
				"url(" + ibg[i].querySelector("img").getAttribute("src") + ")"
		}
	}
}

ibg()

$(".header__mobile-btn").on("click", function () {
	$(".mobile-navbar").toggleClass("active")
})

$(".mobile-navbar__close").on("click", function () {
	$(".mobile-navbar").removeClass("active")
})

var swiper = new Swiper(".clientsSlider", {
	slidesPerView: 4,
	spaceBetween: 30,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	autoplay: {
		delay: 2000,
	},
})

var swiper = new Swiper(".clientsMobileSlider", {
	slidesPerView: 2,
	spaceBetween: 30,
	pagination: {
		el: ".clients__mobile-pagination",
		clickable: true,
	},
	autoplay: {
		delay: 2000,
	},
})

var swiper = new Swiper(".partnersSlider", {
	slidesPerView: 4,
	spaceBetween: 30,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	autoplay: {
		delay: 2000,
	},
})

var swiper = new Swiper(".partnersMobileSlider", {
	slidesPerView: 2,
	spaceBetween: 30,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	autoplay: {
		delay: 2000,
	},
})

// var swiper = new Swiper(".reviewsSlider", {
// 	spaceBetween: 30,
// 	pagination: {
// 		el: ".swiper-pagination",
// 		clickable: true,
// 	},
// })

var swiper = new Swiper(".reviewsSlider", {
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
})

const btnUp = {
	el: document.querySelector(".btn-up"),
	addEventListener() {
		// при прокрутке содержимого страницы
		window.addEventListener("scroll", () => {
			// определяем величину прокрутки
			const scrollY = window.scrollY || document.documentElement.scrollTop
			// если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
		})
		// при нажатии на кнопку .btn-up
		document.querySelector(".btn-up").onclick = () => {
			// переместим в начало страницы
			window.scrollTo({
				top: 0,
				left: 0,
				behavior: "smooth",
			})
		}
	},
}

btnUp.addEventListener()
