var swiperFlashsale = new Swiper(".slide-container-flashsale", {
    slidesPerView: 4,
    spaceBetween: 20,
    sliderPerGroup: 4,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
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
      768: {
        slidesPerView: 3,
      },
      1000: {
        slidesPerView: 4,
      },
    },
  });

  var swiperGudang = new Swiper(".slide-container-gudang", {
    slidesPerView: 6,
    spaceBetween: 50,
    sliderPerGroup: 6,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
        el: ".swiper-pagination-gudang",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-gudang",
        prevEl: ".swiper-button-prev-gudang",
    },

    breakpoints: {
        0: {
        slidesPerView: 1,
        },
        200: {
        slidesPerView: 2,
        },
        400: {
        slidesPerView: 3,
        },
        600: {
        slidesPerView: 4,
        },
        800: {
        slidesPerView: 5,
        },
        1000: {
        slidesPerView: 6,
        },
    },
});


var swiperRekomendasi = new Swiper(".slide-container-rekomendasi", {
    slidesPerView: 4,
    spaceBetween: 20,
    sliderPerGroup: 4,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
        el: ".swiper-pagination-rekomendasi",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-rekomendasi",
        prevEl: ".swiper-button-prev-rekomendasi",
    },

    breakpoints: {
        0: {
        slidesPerView: 1,
        },
        520: {
        slidesPerView: 2,
        },
        768: {
        slidesPerView: 3,
        },
        1000: {
        slidesPerView: 4,
        },
    },
});

var swiperTransaksi = new Swiper(".slide-container-transaksi", {
  slidesPerView: 4,
  spaceBetween: 20,
  sliderPerGroup: 4,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
      el: ".swiper-pagination-transaksi",
      clickable: true,
      dynamicBullets: true,
  },
  navigation: {
      nextEl: ".swiper-button-next-transaksi",
      prevEl: ".swiper-button-prev-transaksi",
  },

  breakpoints: {
      0: {
      slidesPerView: 1,
      },
      520: {
      slidesPerView: 2,
      },
      768: {
      slidesPerView: 3,
      },
      1000: {
      slidesPerView: 4,
      },
  },
});

var swiperWishlist = new Swiper(".slide-container-wishlist", {
  slidesPerView: 4,
  spaceBetween: 20,
  sliderPerGroup: 4,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
      el: ".swiper-pagination-wishlist",
      clickable: true,
      dynamicBullets: true,
  },
  navigation: {
      nextEl: ".swiper-button-next-wishlist",
      prevEl: ".swiper-button-prev-wishlist",
  },

  breakpoints: {
      0: {
      slidesPerView: 1,
      },
      520: {
      slidesPerView: 2,
      },
      768: {
      slidesPerView: 3,
      },
      1000: {
      slidesPerView: 4,
      },
  },
});