   
document.addEventListener('DOMContentLoaded', function () {
    // @ts-ignore
    const sliderSaminarN = tns({
      container: '.seminorpage-slider',
      loop: true,
      items: 2,
      slideBy: 'page',
      nav: false,
      autoplay: true,
      speed: 400,
      autoplayButtonOutput: false,
      mouseDrag: true,
      lazyload: true,
      controlsContainer: '#custom-controlnew',
      controls: true,
     responsive: {
        640: { items: 2 },
        768: { items: 3 }
    },
    
    });
  });  
 
 document.addEventListener('DOMContentLoaded', function () {
    // @ts-ignore
    const sliderSaminar = tns({
      container: '.seminorpage-slider-training',
      loop: true,
      items: 2,
      slideBy: 'page',
      nav: false,
      autoplay: false,
      speed: 400,
      autoplayButtonOutput: false,
      mouseDrag: true,
      lazyload: true,
      controlsContainer: '#customize-controls',
      controls: true,
      gutter: 0 ,
         responsive: {
        640: {  gutter: 20 },
    },
     
    });
  });  
 
 //BOC Corporate Voices of Success Slider Start
// Voice Success Slider
let voiceSuccessSlider = document.querySelector(".voic-sucess-slider");

if (voiceSuccessSlider) {
 const sliderVideo = tns({
     container: voiceSuccessSlider,
     items: 1,
     loop: true,
     autoplay: false, //true,
     autoplayTimeout: 3000,
     speed: 1000,
     gutter: 20,
     controls: false,
     nav: false,
     autoplayButton: false,
     autoplayButtonOutput: false,
      responsive: {
        1024: { items: 1 },
        1200: { items: 2 },
        1300: { items: 2 }
    },
 });

 const prevButton = document.getElementById('prev-voice');
 const nextButton = document.getElementById('next-voice');

 if (prevButton && nextButton) {
     prevButton.addEventListener('click', () => sliderVideo.goTo('prev'));
     nextButton.addEventListener('click', () => sliderVideo.goTo('next'));
 }
}


 
let supplyChain = document.querySelector(".supply-chain-slider");
if (supplyChain) {
  var slider = tns({
    container: supplyChain,
    items: 1,
    slideBy: "page",
    autoplay: true,
    autoplayButtonOutput: false,
    controlsContainer: "#custom-controls",
    nav: false,
    speed: 2000,
    autoplayTimeout: 3000,
    speed: 1000,
    mode: 'gallery',
    animateIn: 'tns-fadeIn',
    animateOut: 'tns-fadeOut',
    responsive: {
        1024: { items: 1 },
        1200: { items: 2 },
        1300: { items: 2 }
    },
    onInit: function (info) {
        // Ensure only the first active slide gets the 'first-active' class on init
        applyFirstActiveClass(info.index);
      },
      onIndexChanged: function (info) {
        // Ensure only the first active slide gets the 'first-active' class on index change
        applyFirstActiveClass(info.index);
      }
    });
  
    function applyFirstActiveClass(index) {
      // Remove 'first-active' class from all slides first
      document.querySelectorAll('.supply-chain-slider .tns-item').forEach(function (item) {
        item.classList.remove('first-active');
      });
  
      // Get the slides and apply the 'first-active' class to the first active one
      let slides = document.querySelectorAll('.supply-chain-slider .tns-item');
      let firstActiveSlide = slides[index]; // The current active slide
  
      // Make sure the class is only added to the first visible (non-cloned) active slide
      if (firstActiveSlide && !firstActiveSlide.classList.contains('tns-slide-cloned')) {
        firstActiveSlide.classList.add('first-active');
      }
    }
  }
 // Video Success Slider
let videsucSlider = document.querySelector(".video-sucess-slider");

if (videsucSlider) {
 const sliderVideo = tns({
     container: videsucSlider,
     items: 1,
     loop: true,
     autoplay: false, //true,
     autoplayTimeout: 3000,
     speed: 1000,
     gutter: 20,
     controls: false,
     nav: false,
     autoplayButton: false,
     autoplayButtonOutput: false
 });

 const prevButton = document.getElementById('prev-video');
 const nextButton = document.getElementById('next-video');

 if (prevButton && nextButton) {
     prevButton.addEventListener('click', () => sliderVideo.goTo('prev'));
     nextButton.addEventListener('click', () => sliderVideo.goTo('next'));
 }
}


  
  
    // Ihrc Home Slider

 let ihrcSlider = document.querySelector(".ihrcSlider");
      if (ihrcSlider) {
      var slider = tns({
      container: ihrcSlider,
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 2000,
      speed: 1000,
      gutter: 20,
      controls: false,
      nav: false,
      autoplayButton: false,
      autoplayButtonOutput: false,
      
      });
      }
           
     // Ihrc Home Slider  END
        // IPSC  Home Slider 
     let ipscSlider = document.querySelector(".ipschomeSlider");
if (ipscSlider) {
    var slider = tns({
        container: ipscSlider,
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        controls: false,
        nav: false,
        navPosition: 'bottom',
        speed: 1000,
        autoplayTimeout: 3000,
        mode: 'carousel',
        speed: 1000,
        mode: 'gallery',
        animateIn: 'tns-fadeIn',
        animateOut: 'tns-fadeOut',
    });}

       // CXO  Home Slider END 
 let cxoSlider = document.querySelector(".cxo-slider");
 if (cxoSlider) {
 var slider = tns({
 container: cxoSlider,
 items: 1,
 loop: true,
 autoplay: true,
 autoplayTimeout: 2000,
 speed: 1000,
 gutter: 20,
 controls: true,
 nav: false,
 autoplayButton: false,
 autoplayButtonOutput: false,
 controlsContainer: "#customize-controls",
 
 });
 }
 



     // IPSC  Home Slider END






  


  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".dubai-image").forEach(function(image) {
        image.addEventListener("click", function(event) {
            event.stopPropagation(); // Prevents click from bubbling to the document

            var locationView = this.nextElementSibling;

            // Hide all other open locations
            document.querySelectorAll(".map-location_view").forEach(function(view) {
                if (view !== locationView) {
                    view.classList.remove("active");
                }
            });

            // Toggle the active class on the clicked one
            locationView.classList.toggle("active");
        });
    });

    // Click outside to remove all active location views
    document.addEventListener("click", function(event) {
        if (!event.target.closest(".map-location_view, .dubai-image")) {
            document.querySelectorAll(".map-location_view").forEach(function(view) {
                view.classList.remove("active");
            });
        }
    });
});


  