(function ($) {
	"use strict";

	function sliders() {
		/***************************

	  sliders

	  ***************************/
		var swiper_1 = new Swiper('.elementor-editor-active .sb-short-menu-slider-3i', {
	    slidesPerView: 3,
	    spaceBetween: 30,
	    parallax: true,
	    speed: 1000,
	    preventClicks: false,
	    preventClicksPropagation: false,
	    navigation: {
	      prevEl: '.sb-short-menu-prev',
	      nextEl: '.sb-short-menu-next',
	    },
	    breakpoints: {
	      0: {
	        slidesPerView: 1,
	      },
	      768: {
	        slidesPerView: 2,
	      },
	      992: {
	        slidesPerView: 3,
	      }
	    }
	  });
	  var swiper_2 = new Swiper('.elementor-editor-active .sb-short-menu-slider-2-3i', {
	    slidesPerView: 3,
	    spaceBetween: 30,
	    parallax: true,
	    speed: 1000,
	    preventClicks: false,
	    preventClicksPropagation: false,
	    navigation: {
	      prevEl: '.sb-short-menu-prev-2',
	      nextEl: '.sb-short-menu-next-2',
	    },
	    breakpoints: {
	      0: {
	        slidesPerView: 1,
	      },
	      768: {
	        slidesPerView: 2,
	      },
	      992: {
	        slidesPerView: 3,
	      }
	    }
	  });
	  var swiper_3 = new Swiper('.elementor-editor-active .sb-short-menu-slider-4i', {
	    slidesPerView: 4,
	    spaceBetween: 30,
	    parallax: true,
	    speed: 1000,
	    preventClicks: false,
	    preventClicksPropagation: false,
	    navigation: {
	      prevEl: '.sb-short-menu-prev',
	      nextEl: '.sb-short-menu-next',
	    },
	    breakpoints: {
	      0: {
	        slidesPerView: 1,
	      },
	      768: {
	        slidesPerView: 2,
	      },
	      992: {
	        slidesPerView: 4,
	      }
	    }
	  });
	  var swiper_4 = new Swiper('.elementor-editor-active .sb-short-menu-slider-2-4i', {
	    slidesPerView: 4,
	    spaceBetween: 30,
	    parallax: true,
	    speed: 1000,
	    preventClicks: false,
	    preventClicksPropagation: false,
	    navigation: {
	      prevEl: '.sb-short-menu-prev-2',
	      nextEl: '.sb-short-menu-next-2',
	    },
	    breakpoints: {
	      0: {
	        slidesPerView: 1,
	      },
	      768: {
	        slidesPerView: 2,
	      },
	      992: {
	        slidesPerView: 4,
	      }
	    }
	  });
	  var swiper_5 = new Swiper('.elementor-editor-active .sb-reviews-slider', {
	    slidesPerView: 2,
	    spaceBetween: 30,
	    parallax: true,
	    speed: 1000,
	    preventClicks: false,
	    preventClicksPropagation: false,
	    navigation: {
	      prevEl: '.sb-reviews-prev',
	      nextEl: '.sb-reviews-next',
	    },
	    breakpoints: {
	      0: {
	        slidesPerView: 1,
	      },
	      768: {
	        slidesPerView: 2,
	      },
	      992: {
	        slidesPerView: 2,
	      }
	    }
	  });
	  var swiper_6 = new Swiper('.elementor-editor-active .sb-blog-slider-2i', {
	    slidesPerView: 2,
	    spaceBetween: 30,
	    parallax: true,
	    speed: 1000,
	    preventClicks: false,
	    preventClicksPropagation: false,
	    navigation: {
	      prevEl: '.sb-blog-prev',
	      nextEl: '.sb-blog-next',
	    },
	    breakpoints: {
	      0: {
	        slidesPerView: 1,
	      },
	      768: {
	        slidesPerView: 2,
	      },
	      992: {
	        slidesPerView: 2,
	      }
	    }
	  });
	  var swiper_7 = new Swiper('.elementor-editor-active .sb-blog-slider-3i', {
	    slidesPerView: 3,
	    spaceBetween: 30,
	    parallax: true,
	    speed: 1000,
	    preventClicks: false,
	    preventClicksPropagation: false,
	    navigation: {
	      prevEl: '.sb-blog-prev',
	      nextEl: '.sb-blog-next',
	    },
	    breakpoints: {
	      0: {
	        slidesPerView: 1,
	      },
	      768: {
	        slidesPerView: 2,
	      },
	      992: {
	        slidesPerView: 3,
	      }
	    }
	  });
	  var swiper_8 = new Swiper('.elementor-editor-active .sb-blog-slider-4i', {
	    slidesPerView: 4,
	    spaceBetween: 30,
	    parallax: true,
	    speed: 1000,
	    preventClicks: false,
	    preventClicksPropagation: false,
	    navigation: {
	      prevEl: '.sb-blog-prev',
	      nextEl: '.sb-blog-next',
	    },
	    breakpoints: {
	      0: {
	        slidesPerView: 1,
	      },
	      768: {
	        slidesPerView: 2,
	      },
	      992: {
	        slidesPerView: 4,
	      }
	    }
	  });
	}

	/* Init Elementor Front Scripts */
	$(window).on('elementor/frontend/init', function () {

		// Widgets
		elementorFrontend.hooks.addAction( 'frontend/element_ready/starbelly-hero-slider.default', function() {
			//sliders();
		} );

		elementorFrontend.hooks.addAction( 'frontend/element_ready/starbelly-cta.default', function() {

		} );

		// Global
		elementorFrontend.hooks.addAction( 'frontend/element_ready/global', function( $scope ) {

		} );
		elementorFrontend.hooks.addAction( 'frontend/element_ready/widget', function( $scope ) {
			sliders();
		} );
	});
})(jQuery);
