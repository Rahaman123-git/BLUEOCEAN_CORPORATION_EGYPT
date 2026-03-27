//About Us page

// vision slider
let visionSlider = document.querySelector(".visionSlider");
if(visionSlider) {
    var slider = tns({
        container: visionSlider,
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        controls: false,
        nav: true,
        navPosition: 'bottom',
        speed: 5000,
        autoplayTimeout: 8000,
        mode: 'carousel',
        speed: 5000,
        mode: 'gallery',
        animateIn: 'tns-fadeIn',
        animateOut: 'tns-fadeOut',

    });
}

// awards slider
let awardsSlider = document.querySelector(".awardsSlider");
if(awardsSlider) {
    var slider = tns({
      container: '.awardsSlider',
      swipeAngle: false,
      speed: 400,
      loop: true,
      items: 1,
      slideBy: '1',
      nav: false,
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      lazyload: true,
      mode: 'carousel',
      controlsContainer: "#custom-control",
      responsive: {
        769: {
          items: 1
        }
      }
    });

    // Update caption text when slide changes
    slider.events.on('indexChanged', function (info) {
      const currentSlide = info.slideItems[info.index];
      const caption = currentSlide.getAttribute('data-caption') || '';
      document.getElementById('award-caption').textContent = caption;
    });
}