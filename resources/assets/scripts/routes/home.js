import Swiper, { Pagination, Autoplay } from "swiper";
Swiper.use([Pagination, Autoplay]);

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    if ($(".swiper-container")) {
      new Swiper(".swiper-container", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay: {
          delay: 5000,
        },
      });
    }
  },
};
