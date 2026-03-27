/* window.addEventListener('load', () => {
    const gallery = document.getElementById('gallery');
    const containerWidth = gallery.clientWidth;

    Array.from(gallery.children).forEach(link => {
        const img = link.querySelector('img');
        if (img && img.naturalWidth / containerWidth > 0.7) {
            link.classList.add('full-width');
        }
    });
}); */

document.addEventListener("DOMContentLoaded", function () {
    let gallerySlider = document.querySelector(".gallery-slider");
    if (gallerySlider) {
        let gallerySliderElement = tns({
            container: gallerySlider,
            items: 1,
            loop: false,
            autoplay: true,
            autoplayTimeout: 3000,
            speed: 1000,
            gutter: 20,
            controls: false,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
        });
    
    	document.querySelector(".prev-btn").addEventListener("click", () => {
        	gallerySliderElement.goTo("prev");
    	});

    	document.querySelector(".next-btn").addEventListener("click", () => {
        	gallerySliderElement.goTo("next");
    	});
    }

    let journeySlider = document.querySelector(".life-boc-ft");
    if (journeySlider) {
        tns({
            container: journeySlider,
            items: 1,
            loop: false,
            autoplay: true,
            autoplayTimeout: 3500,
            speed: 1200,
            gutter: 20,
            controls: false,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
        });
    }

    let conferencesGallerySlider = document.querySelector(".conferences-gallery");
    if (conferencesGallerySlider) {
        tns({
            container: conferencesGallerySlider,
            items: 1,
            loop: false,
            autoplay: true,
            autoplayTimeout: 3800,
            speed: 1500,
            gutter: 20,
            controls: false,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
        });
    }

    let traningGallerySlider = document.querySelector(".traning-gallery");
    if (traningGallerySlider) {
        tns({
            container: traningGallerySlider,
            items: 1,
            loop: false,
            autoplay: true,
            autoplayTimeout: 2800,
            speed: 1800,
            gutter: 20,
            controls: false,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
        });
    }

    let leaderGallerySlider = document.querySelector(".leader-gallery");
    if (leaderGallerySlider) {
        tns({
            container: leaderGallerySlider,
            items: 1,
            slideBy: 'page',
            autoplay: true,
            autoplayTimeout: 3500,
            speed: 2200,
            gutter: 20,
            controls: false,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
            loop: false,
            controlsContainer: ".slider-navigation",
        });
    }

    let bocLifeSlider = document.querySelector(".boclifeSlider");
    if (bocLifeSlider) {
        tns({
            container: bocLifeSlider,
            items: 1,
            slideBy: "page",
            autoplay: true,
            autoplayTimeout: 2000,
            speed: 1000,
            gutter: 20,
            controls: true,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
            rewind: true,
            // Comment or update below line if you don't have a custom control element
            // controlsContainer: "#customize-controls"
        });
    }

    /* const gallery = document.querySelectorAll('.gallery-image img');
    const lightbox = document.querySelector('.lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const close = document.querySelector('.close');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');
    
    let currentIndex = 0;

    function showImage(index) {
        lightboxImg.src = gallery[index].src;
        currentIndex = index;
        lightbox.style.display = 'flex';
    }

    gallery.forEach((img, index) => {
        img.addEventListener('click', () => showImage(index));
    });

    close.addEventListener('click', () => {
        lightbox.style.display = 'none';
    });

    prev.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + gallery.length) % gallery.length;
        showImage(currentIndex);
    });

    next.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % gallery.length;
        showImage(currentIndex);
    });

    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) lightbox.style.display = 'none';
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') lightbox.style.display = 'none';
        if (e.key === 'ArrowLeft') prev.click();
        if (e.key === 'ArrowRight') next.click();
    }); */

    var grid = document.querySelector('.grider');
    var msnry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
    });

    imagesLoaded(grid).on('progress', function () {
        msnry.layout();
    });

    if (document.getElementById("gallery")) {
        lightGallery(document.getElementById("gallery"), {
            plugins: [lgZoom, lgThumbnail, lgFullscreen],
            speed: 500,
            thumbnail: true
        });
    }

    if (document.getElementById("gallery")) {
        lightGallery(document.getElementById("gallery-raydah"), {
            plugins: [lgZoom, lgThumbnail, lgFullscreen],
            speed: 500,
            thumbnail: true
        });
    }

    if (document.getElementById("gallery-raydah-two")) {
        lightGallery(document.getElementById("gallery-raydah-two"), {
            plugins: [lgZoom, lgThumbnail, lgFullscreen],
            speed: 500,
            thumbnail: true
        });
    }

    if (document.getElementById("gallery-raydah-four")) {
        lightGallery(document.getElementById("gallery-raydah-three"), {
            plugins: [lgZoom, lgThumbnail, lgFullscreen],
            speed: 500,
            thumbnail: true
        });
    }

    if (document.getElementById("gallery-raydah-four")) {
        lightGallery(document.getElementById("gallery-raydah-four"), {
            plugins: [lgZoom, lgThumbnail, lgFullscreen],
            speed: 500,
            thumbnail: true
        });
    }
});