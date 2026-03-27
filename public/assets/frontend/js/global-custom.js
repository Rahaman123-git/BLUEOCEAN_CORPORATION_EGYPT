
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
    autoplay: true,
    autoplayTimeout: 3000,
    speed: 1000,
  });
}

// Conference Sponsors Slider Start

let sponsorsSlider = document.querySelector(".conf-sponsors-slider");
if(sponsorsSlider) {
    var slider = tns({
        container: sponsorsSlider,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        speed: 1000,
        gutter: 20,
        controls: false,
        nav: false,
        autoplayButton: false,
        autoplayButtonOutput: false,
        responsive: {
            1024: {
                items: 2,
            },
            1200: {
                items: 3,
            },
            1300: {
                items: 4,
            }
        }
    });
}
// Conference Sponsors Slider End

// Affiliation Slider Start

let affiliateSlider = document.querySelector(".affiliate-slider");
if(affiliateSlider) {
    var slider = tns({
        container: affiliateSlider,
        items: 1,
        loop: true,
        autoplay: false,
        autoplayTimeout: 3000,
        speed: 1000,
        gutter: 20,
        controls: false,
        nav: false,
        mouseDrag: true,
        autoplayButton: false,
        autoplayButtonOutput: false,
        responsive: {
            1024: {
                items: 2,
            },
            1200: {
                items: 3,
            },
            1300: {
                items: 4,
            }
        }
    });
}
// Affiliation Slider End




// Collapse End

// Event Slider Start


// Event Slider End

// Sponsor-2 Slider Start

let sponsorViewSlider = document.querySelector(".sponsor-slider-2");
if(sponsorViewSlider) {
    var slider = tns({
        container: sponsorViewSlider,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        speed: 1000,
        gutter: 20,
        controls: true,
        nav: false,
        autoplayButton: false,
        autoplayButtonOutput: false,
        controlsText: ['<div class="slider-control"><img src="./images/arrow-left.svg" width="20" height="20"></div>', '<div class="slider-control"><img src="./images/arrow-right.svg" width="20" height="20"></div>'],
        responsive: {
            1024: {
                items: 2,
            },
            1200: {
                items: 4,
            },
            1300: {
                items:5,
            }
        }
    });
}

// Sponsor-2 End

//
//   CountDown


// Upcoming Event 

 
//Footer Top Tab

// Date Range Picker
document.addEventListener("DOMContentLoaded", function() {
    const datepickers = ['daterange1', 'daterange2',];

    datepickers.forEach(id => {
        new Litepicker({
            element: document.getElementById(id),
            singleMode: false, // False means date range picker enabled
            format: 'DD/MM/YYYY', // Custom date format
            autoApply: true, // Automatically apply selected range
            allowRepick: true, // Allow repicking dates
            dropdowns: { // Enable Year & Month selection
                minYear: 2000,
                maxYear: 2030,
                months: true,
                years: true
            }
        });
    });
});

//  Multi Select Dropdown

function multiSelectDropdown(label, options) {
    return {
        open: false,
        options: options,
        selected: [],

        dropdown: {
            class: "relative"
        },

        toggleButton: {
            type: "button",
            class: "w-full flex justify-between items-center bg-white border border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500",
            "@click": "open = !open"
        },

        menu: {
            "x-show": "open",
            "@click.away": "open = false",
            class: "absolute z-10 w-full mt-2 bg-white border border-gray-300 rounded-lg shadow-lg max-h-48 overflow-y-auto"
        },

        menuItem: {
            class: "flex items-center space-x-2 px-2 py-2 hover:bg-gray-100 cursor-pointer"
        },

        toggleAll(event) {
            if (event.target.checked) {
                this.selected = [...this.options];
            } else {
                this.selected = [];
            }
        }
    };
}

// BLOG HOMEPAGE 
let insideBO = document.querySelector(".Inside-BO");
if(insideBO) {
    var slider = tns({
        container: insideBO,
        items: 1,
        slideBy: "page",
        autoplay: false,
        autoplayButtonOutput: false,
        controlsContainer: ".inside-BO-nav",
        nav: false,
        speed: 1000,
        autoplayTimeout: 3000,
        mode: 'carousel',
        speed: 1000
    });
}

let expertEdgeInsights = document.querySelector(".expertEdgeInsights");
if(expertEdgeInsights) {
    var slider = tns({
        container: expertEdgeInsights,
        items: 1,
        slideBy: "page",
        autoplay: false,
        autoplayButtonOutput: false,
        controlsContainer: ".expertEdgeInsights-nav",
        nav: false,
        speed: 1000,
        autoplayTimeout: 3000,
        mode: 'carousel',
        speed: 1000
    });
}

// BLOG CATEGORY PAGE
let blogCatBanner = document.querySelector(".blogCatBanner");
if(blogCatBanner) {
    var slider = tns({
        container: blogCatBanner,
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        controls: false,
        nav: true,
        navPosition: 'bottom',
        speed: 1000,
        autoplayTimeout: 3000,
        mode: 'carousel',
        speed: 1000
    });
}

let blogCatSlider = document.querySelector(".blogCatSlider");
if(blogCatSlider) {
    var slider = tns({
        container: blogCatSlider,
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        controls: false,
        nav: true,
        navPosition: 'bottom',
        speed: 1000,
        autoplayTimeout: 3000,
        mode: 'carousel',
        speed: 1000
    });
}

// Blog Details Slider

let blogDetailSlider = document.querySelector(".blogDetailSlider");
if(blogDetailSlider) {
    var slider = tns({
        container: blogDetailSlider,
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        controls: false,
        nav: true,
        navPosition: 'bottom',
        speed: 1000,
        autoplayTimeout: 3000,
        mode: 'carousel',
        speed: 1000
    });
}
// Blog End


//   BOC Corporate gallery popup END
// // Tarning Voice
//Home Page slider





const slider = tns({
    container: '.my-sliderfvdfgbdfbv',
    loop: true,
    items: 1,
    slideBy: 'page',
    nav: false,
    autoplay: true,
    speed: 400,
    autoplayButtonOutput: false,
    mouseDrag: true,
    lazyload: true,
    controlsContainer: "#customize-controls",
});




// Collapse Start
document.querySelectorAll('.collapse-btn').forEach(button => {
    button.addEventListener('click', function() {

      const targetClass = this.getAttribute('data-collapse-target');
      
      const content = document.querySelector(`.collapse-content.${targetClass}`);
      
      content.classList.toggle('hidden');
    });
  });
   // Seminer page slider




   