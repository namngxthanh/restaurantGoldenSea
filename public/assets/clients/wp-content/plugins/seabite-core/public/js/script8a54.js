(function (jQuery) {
  "use strict";
  var registerDependencies = function () {
    if (null != PluginJsConfig && null != PluginJsConfig.js_dependencies) {
      var js_dependencies = PluginJsConfig.js_dependencies;
      for (var dependency in js_dependencies) {
        asyncloader.register(js_dependencies[dependency], dependency);
      }
    }
      // console.log(PluginJsConfig.js_dependencies);
  },
  timer = function () {
    jQuery('.timer').countTo();
  },
  isotope = function() {
    jQuery('.pt-masonry').isotope({
      itemSelector: '.pt-masonry-items',
      masonry: {
        columnWidth: '.grid-sizer',
                    // gutter: 0
      }
    });
    jQuery('.pt-grid').isotope({
      itemSelector: '.pt-grid-item',
    });
    jQuery('.pt-filter-button-group').on('click', '.pt-filter-btn', function() {
      var filterValue = jQuery(this).attr('data-filter');
                // console.log(filterValue);
      jQuery('.pt-masonry').isotope({
        filter: filterValue
      });
      jQuery('.pt-grid').isotope({
        filter: filterValue
      });
      jQuery('.pt-filter-button-group .pt-filter-btn').removeClass('active');
      jQuery(this).addClass('active');
      updateFilterCounts();
    });
    var initial_items = 5;
    var next_items = 3;
    if (jQuery('.pt-masonry').length > 0) {
      var initial_items = jQuery('.pt-masonry').data('initial_items');
      var next_items = jQuery('.pt-masonry').data('next_items');
    }
    if (jQuery('.pt-grid').length > 0) {
      var initial_items = jQuery('.pt-grid').data('initial_items');
      var next_items = jQuery('.pt-grid').data('next_items');
    }
    function showNextItems(pagination) {
      var itemsMax = jQuery('.visible_item').length;
      var itemsCount = 0;
      jQuery('.visible_item').each(function() {
        if (itemsCount < pagination) {
          jQuery(this).removeClass('visible_item');
          itemsCount++;
        }
      });
      if (itemsCount >= itemsMax) {
        jQuery('#showMore').hide();
      }
      if (jQuery('.pt-masonry').length > 0) {
        jQuery('.pt-masonry').isotope('layout');
      }
      if (jQuery('.pt-grid').length > 0) {
        jQuery('.pt-grid').isotope('layout');
      }
    }
            // function that hides items when page is loaded
    function hideItems(pagination) {
      var itemsMax = jQuery('.pt-filter-itemss').length;
                // console.log(itemsMax);
      var itemsCount = 0;
      jQuery('.pt-filter-itemss').each(function() {
        if (itemsCount >= pagination) {
          jQuery(this).addClass('visible_item');
        }
        itemsCount++;
      });
      if (itemsCount < itemsMax || initial_items >= itemsMax) {
        jQuery('#showMore').hide();
      }
      if (jQuery('.pt-masonry').length > 0) {
        jQuery('.pt-masonry').isotope('layout');
      }
      if (jQuery('.pt-grid').length > 0) {
        jQuery('.pt-grid').isotope('layout');
      }
    }
    jQuery('#showMore').on('click', function(e) {
      e.preventDefault();
      showNextItems(next_items);
    });
    hideItems(initial_items);
    function updateFilterCounts() {
                // get filtered item elements
      if (jQuery('.pt-masonry').length > 0) {
        var itemElems = jQuery('.pt-masonry').isotope('getFilteredItemElements');
      }
      if (jQuery('.pt-grid').length > 0) {
        var itemElems = jQuery('.pt-grid').isotope('getFilteredItemElements');
      }
      var count_items = jQuery(itemElems).length;
                // console.log(count_items);
      if (count_items > initial_items) {
        jQuery('#showMore').show();
      } else {
        jQuery('#showMore').hide();
      }
      if (jQuery('.pt-filter-itemss').hasClass('visible_item')) {
        jQuery('.pt-filter-itemss').removeClass('visible_item');
      }
      var index = 0;
      jQuery(itemElems).each(function() {
        if (index >= initial_items) {
          jQuery(this).addClass('visible_item');
        }
        index++;
      });
      if (jQuery('.pt-masonry').length > 0) {
        jQuery('.pt-masonry').isotope('layout');
      }
      if (jQuery('.pt-grid').length > 0) {
        jQuery('.pt-grid').isotope('layout');
      }
    }
  }, 
  owl_carousel = function () {
    jQuery('.owl-carousel').each(function () {
      var app_slider = jQuery(this);
      var rtl = false;
      var prev = 'ion-ios-arrow-back';
      var next = 'ion-ios-arrow-forward';
      var prev_text = 'Prev';
      var next_text = 'Next';
      if (jQuery('body').hasClass('pt-is-rtl')) {
        rtl = true;
        prev = 'ion-ios-arrow-forward';
        next = 'ion-ios-arrow-back';
      }
      if (app_slider.data('prev_text') && app_slider.data('prev_text') != '') {
        prev_text = app_slider.data('prev_text');
      }
      if (app_slider.data('next_text') && app_slider.data('next_text') != '') {
        next_text = app_slider.data('next_text');
      }
      app_slider.owlCarousel({
        rtl: rtl,
        items: app_slider.data("desk_num"),
        loop: app_slider.data("loop"),
        margin: app_slider.data("margin"),
        nav: app_slider.data("nav"),
        dots: app_slider.data("dots"),
        loop: app_slider.data("loop"),
        autoplay: app_slider.data("autoplay"),
        autoplayHoverPause: true,
        autoplayTimeout: app_slider.data("autoplay-timeout"),
        navText: ["<i class='" + prev + "'></i>", "<i class='" + next + "'></i>"],
        responsiveClass: true,
        responsive: {
            // breakpoint from 0 up
          0: {
            items: app_slider.data("mob_sm"),
            nav: true,
            dots: false
          },
            // breakpoint from 480 up
          480: {
            items: app_slider.data("mob_num"),
            nav: true,
            dots: false
          },
            // breakpoint from 786 up
          786: {
            items: app_slider.data("tab_num")
          },
            // breakpoint from 1023 up
          1023: {
            items: app_slider.data("lap_num")
          },
          1199: {
            items: app_slider.data("desk_num")
          }
        }
      });
    });
  },
  isScrolledIntoView = function(elem) {
    var docViewTop = jQuery(window).scrollTop();
    var docViewBottom = docViewTop + jQuery(window).height();
    var elemTop = jQuery(elem).offset().top;
    var elemBottom = elemTop + jQuery(elem).height();
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  },
  render_svg = function() {
    jQuery(" .pt-svg > svg").each(function() {
                // console.log('in');
                // console.log(jQuery(this).attr('src'));
      var $this = jQuery(this);
                // console.log($this[0]);
                // console.log(jQuery(this)[0]);
      var monitor = new Vivus($this[0], {
        type: 'scenario',
        onReady: function(myVivus) {
                        // `el` property is the SVG element
                        // myVivus.el.setAttribute('height', 'auto');
                       // jQuery($this[0]).find('g path').css("stroke", "white");
        },
        duration: 100,
        animTimingFuction: Vivus.EASE,
        start: 'inViewport'
      }, function() {
                    // console.log(jQuery($this[0]).find('g path').css("stroke", "white"));
      });
      jQuery(window).on('scroll', function() {
        if (isScrolledIntoView(jQuery($this))) {
                        // console.log($this);
          monitor.play();
        }
      });
    });
  },
  slick_slider = function () {
    if ( jQuery('.slick-slider-main').length ) {
      var $slider = jQuery('.slick-slider-main')
      .slick({
        slidesToShow: 1,
        infinite: false,
        arrows: true,
        autoplay: false,
        dots: false,
        lazyLoad: 'ondemand',
        autoplaySpeed: 3000,
        loop: true,
        asNavFor: '.slick-slider-thumb'
      });
      var $slider2 = jQuery('.slick-slider-thumb')
      .slick({
        slidesToShow: 3,
        infinite: false,
        lazyLoad: 'ondemand',
        asNavFor: '.slick-slider-main',
        autoplay: false,
        dots: false,
        Default:'50px',
        arrows: false,
        centerMode: false,
        loop: true,
        focusOnSelect: true
      });
    }
  },
  slick_slider_two = function () {
    if ( jQuery('.service-verticle-slider').length ) {
      var $slider = jQuery('.service-verticle-slider')
      .slick({
        slidesToShow: 6,
        infinite: true,
        arrows: true,
        autoplay: true,
        draggable: true,
        dots: false,
        vertical: true,
        verticalScrolling: true,
        lazyLoad: 'ondemand',
        autoplaySpeed: 1000,
        focusOnSelect: true,
        loop: true
      });
    }
  },
  pop_video = function () {
    jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps, .button-play').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      preloader: true,
    });
  }, 
  parallax = function () {
    var $images = $('.parallax-img');
    var window_h = $(window).height();
    $(window).scroll(function() {
      var windowScrollTop = $(window).scrollTop();
      if (windowScrollTop == 0) {
       TweenLite.to($images, 1.2, {
        yPercent: 0,
        ease: Power1.easeOut,
        overwrite: 0
      });
     }
     else{   
       $images.each(function() {
        var elementOffsetTop = $(this).offset().top,
        element_h = $(this).height(),          
        velocity = $(this).data('velocity');
        if (windowScrollTop + window_h > elementOffsetTop && windowScrollTop  < elementOffsetTop + element_h) {
                //if in view:
         TweenLite.to($(this), 1.2, {
           yPercent: (windowScrollTop + window_h - elementOffsetTop) / window_h * velocity,
           ease: Power1.easeOut,
           overwrite: 0
         });
       }
     });
     }
   });
  },
  Timeline = function(){
    jQuery(' .cntl').each(function() {
      jQuery(this).cntl({
       revealbefore: 300,
       anim_class: 'cntl-animate',
       onreveal: function(e){
        console.log(e);
      }
    });
    });
  },
  circle_progress = function () {
    jQuery('.pt-circle-progress-bar').each(function () {
      var number = jQuery(this).data('skill-level');
      var empty_color = jQuery(this).data('empty-color');
      var fill_color = jQuery(this).data('fill-color');
      var size = jQuery(this).data('size');
      var thickness = jQuery(this).data('thickness');
      jQuery(this).circleProgress({
        value: '0.' + number,
        size: size,
        emptyFill: empty_color,
        fill: {
          color: fill_color
        }
      }).on('circle-animation-progress', function (event, progress) {
        jQuery(this).find('.pt-progress-count').html(Math.round(number * progress) + '%');
      });
    });
  },
  pt_movingGallery = function (jQueryscope, jQuery) {
    gsap.defaults({overwrite: "auto"});
    gsap.registerPlugin(ScrollTrigger, Flip);
    gsap.config({nullTargetWarn: false});
    gsap.utils.toArray('.pt-moving-gallery').forEach((section, index) => {
      const galleryList = section.querySelector('.pt-moving-gallery-list');
      const [x, xEnd] = (index % 2) ? [(section.offsetWidth - galleryList.scrollWidth), 0] : [0, section.offsetWidth - galleryList.scrollWidth];
      gsap.fromTo(galleryList, {  x  }, {
        x: xEnd,
        scrollTrigger: {
          trigger: section,
          scrub: 0.5,
        }
      });
    });
  },
  progress_bar = function() {
    jQuery('.pt-progress-bar > span').each(function() {
      var app_slider = jQuery('.pt-progressbar-box');
      jQuery(this).progressBar({
        shadow: false,
        animation: true,
        height: app_slider.data('h'),
        percentage: false,
        border: false,
        animateTarget: true,
      });
      var progress_bar = jQuery(this);
      var width = jQuery(this).data('percent');
      progress_bar.css({
        'transition': 'width 2s'
      });
      jQuery('.progress-value').css({
        'transition': 'margin 2s'
      });
      setTimeout(function() {
        jQuery(this).show(function() {
          progress_bar.css('width', width + '%');
        });
      }, 500);
      setTimeout(function() {
        jQuery('.pt-progressbar-style-1  .progress-value').show(function() {
          jQuery('.pt-progressbar-style-1  .progress-value').css('margin-left', width + 'px');
        });
      }, 500);
      setTimeout(function() {
        jQuery('.pt-progressbar-style-3 .progress-tooltip').show(function() {
          jQuery('.pt-progressbar-style-3 .progress-tooltip').css('margin-left', width + 'px');
        });
      }, 500);
    });
  },
/*------------------------
                cards js
        --------------------------*/
  card = function () {
    jQuery(document).ready(function($) {
      if (jQuery('.pt-cards').length) {
        jQuery('body').addClass('pt-cards-body');
        jQuery('.pt-cards').closest('.elementor-top-section').addClass('pt-cards-section');
      }
    });
    const { ScrollObserver, valueAtPercentage } = aat
    const cardsContainer = document.querySelector('.pt-cards')
    const cards = document.querySelectorAll('.pt-card')
    cardsContainer.style.setProperty('--cards-count', cards.length - 3)
    cardsContainer.style.setProperty(
      '--card-height',
      `${cards[0].clientHeight}px`
      )
    Array.from(cards).forEach((card, index) => {
      const offsetTop = 20 + index * 20
      card.style.paddingTop = `${offsetTop}px`
      if (index === cards.length - 1) {
        return
      }
      const toScale = 1 - (cards.length - 1 - index) * 0.05
      const nextCard = cards[index + 1]
      const cardInner = card.querySelector('.pt-card-inner')
      ScrollObserver.Element(nextCard, {
        offsetTop,
        offsetBottom: window.innerHeight - card.clientHeight
      }).onScroll(({ percentageY }) => {
        cardInner.style.scale = valueAtPercentage({
          from: 1,
          to: toScale,
          percentage: percentageY
        })
        cardInner.style.filter = `brightness(${valueAtPercentage({
          from: 1,
          to: 0.6,
          percentage: percentageY
        })})`
      })
    })
  },
  counter = function () {
    var counted = 0;
    var Toduration = 0;
    jQuery(window).scroll(function() {
      var oTop = jQuery('#pt-counter-id').offset().top - window.innerHeight;
      if (counted == 0 && jQuery(window).scrollTop() > oTop) {
        jQuery('.pt-count').each(function() {
          var $this = jQuery(this),
          countTo = $this.attr('data-count');
            var Toduration = parseInt($this.attr('pt-duration')); // Parse int to ensure it's a number
            // console.log(Toduration);
            jQuery({
              countNum: $this.text()
            }).animate({
              countNum: countTo
            }, {
              duration: Toduration,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                    //alert('finished');
              }
            });
          });
        counted = 1;
      }
    });
  },
  sevice_accordion = function () {
    var accordion_elem = jQuery('.pt-services-accordion-slide');
    if (jQuery(window).width() >= 1024) {
      if (accordion_elem.length > 0) {
        // Add a click event listener to elements with the class .pt-services-accordion-slide
        jQuery('.pt-services-accordion-slide').on('click', function () {
          var $this = jQuery(this);
            // Add the class 'active' to the clicked element
          $this.addClass('active');
            // Remove the class 'active' from its siblings
          $this.siblings().removeClass('active');
        });
      }
    }
  },
  accordion = function () {
    jQuery('.pt-accordion-block .pt-accordion-box .pt-accordion-details').hide();
    jQuery('.pt-accordion-block .pt-accordion-box:first').addClass('pt-active').children().slideDown('slow');
    jQuery('.pt-accordion-block .pt-accordion-box').on("click", function () {
      if (jQuery(this).children('div.pt-accordion-details').is(':hidden')) {
        jQuery('.pt-accordion-block .pt-accordion-box').removeClass('pt-active').children('div.pt-accordion-details').slideUp('slow');
        jQuery(this).toggleClass('pt-active').children('div.pt-accordion-details').slideDown('slow');
      }
    });
  }
  jQuery(document).ready(function () {
    registerDependencies();
    if (jQuery('.timer').length > 0) {
      asyncloader.require(['jquery.countTo'], function () {
        timer();
      });
    }
    if (jQuery('.pt-masonry , .pt-grid ').length > 0) {
      asyncloader.require(['isotope.pkgd'], function() {
        isotope();
      });
    }
    if (jQuery('.owl-carousel').length > 0) {
      asyncloader.require(['owl.carousel'], function () {
        owl_carousel();
      });
    }
    if (jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps, .button-play').length > 0) {
      asyncloader.require(['jquery.magnific-popup'], function () {
        pop_video();
      });
    }
    if (jQuery('.service-verticle-slider').length > 0) {
     slick_slider_two();
   }   
   if (jQuery('.pt-services-accordion').length > 0) {
    // window.alert("sometext");
     sevice_accordion();
   }
   if (jQuery('.pt-cards').length > 0) {
     card();
   } 
   if (jQuery(' .cntl').length > 0) {
    asyncloader.require(['jquery.cntl'], function() {
      Timeline();
    });
  } 
  if (jQuery('.parallax-img').length > 0) {
        // parallax();
  }
  if (jQuery('.pt-moving-gallery').length > 0) {
    pt_movingGallery();
  }
  if (jQuery('#pt-counter-id').length > 0) {
    counter();
  }
  if (jQuery('.pt-svg').length > 0) {
            // asyncloader.require(['vivus'], function() {
    render_svg();
            // });
  }
  if (jQuery('.pt-progressbar-box').length > 0) {
    asyncloader.require(['progressbar.js'], function() {
      progress_bar();
    });
  }
  if (jQuery('.pt-circle-progress-bar').length > 0) {
    asyncloader.require(['circle-progress'], function () {
      circle_progress();
    });
  }
  jQuery('p:empty').remove();
});
})(jQuery);