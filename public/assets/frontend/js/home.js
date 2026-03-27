// Home page Menu





// EVENT 
const sliderEvent = tns({
    container: '.event-slider',
    loop: true,
    items: 2,
    slideBy: 'page',
    nav: false,
    speed: 400,
    autoplayButtonOutput: false,
    mouseDrag: true,
    lazyload: true,
    mode: 'carousel',
    controlsContainer: "#customize-controls",
    responsive: {
        640: {
            items: 2,
            gutter: 20,
        },

        768: {
            items: 2
        }
    }
});



//  Certificate Slider
const slidernew = tns({
    container: '.certificate-slider',
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
    gutter: 50,
    mode: 'carousel',
    controlsContainer: "#custom-control",

});



// window.addEventListener('scroll', function () {
//   const scrollTop = window.scrollY || document.documentElement.scrollTop;
//   const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
//   const scrollPercent = (scrollTop / docHeight) * 100;

//   const footer = document.querySelector('.footer-bottom');
//   if (scrollPercent >= 50) {
//     footer.classList.add('fixed-footer');
//   } else {
//     footer.classList.remove('fixed-footer');
//   }
// });





// Initialize the Tiny Slider without using 'import'
var countSlider = tns({
    container: '.homecounter-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    mode: "gallery",
    controls: false,
    loop: true,
    nav: false,
    autoplay: true,
    speed: 400,
    autoplayButtonOutput: false,
    mouseDrag: true,
    lazyload: true,
});


function toggleBenefit(benefitNumber) {
    // Hide all the benefit boxes first
    var allBenefits = document.querySelectorAll('.benefit-box');
    allBenefits.forEach(function (benefit) {
        benefit.style.display = 'none';
    });

    // Show the selected benefit
    var benefitBox = document.getElementById("benefit-" + benefitNumber);
    benefitBox.style.display = 'block';
}



