import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';
const SwipeArea = document.querySelector(".js-swipeArea");
const iconPickup = document.querySelector(".js-iconPickUp");
function initSwiper() {
  if (SwipeArea == null) {
    return;
  }
  const mySwiper = new Swiper('.swiper-container', {
    loop: true,
    speed: 1200,
    direction: "horizontal",
    centeredSlides : true,
    watchOverflow: true,
    loop: false,
    /*autoplay: {
      delay: 5000,
    },*/
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      1159: {
        slidesPerView: 1.5,
        spaceBetween: 40,
      }
    }
  });
  mySwiper.on('slideChangeTransitionStart', function () {
    iconPickup.classList.toggle("is-hide");
  });
  mySwiper.on('slideChangeTransitionEnd', function () {
    iconPickup.classList.toggle("is-hide");
  });
}
export default { initSwiper }

