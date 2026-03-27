
const slider = document.querySelector(".slider-smooth");
const cards = document.querySelectorAll(".card-smooth");
const ease = 0.1;

let currentX = 0;
let targetX = 0;
const totalCards = cards.length;
const visibleCards = 4; // Number of cards visible at once
const maxScrollSteps = totalCards - visibleCards;
const step = 100 / totalCards;
let currentStep = 0;

const autoSlideInterval = 3000; // in ms
let autoSlideTimer;

const lerp = (start, end, t) => {
    return start + (end - start) * t;
};

const getScaleFactor = (position, viewportWidth) => {
    const quarterWidth = viewportWidth / 4;
    if (position < 0 || position > viewportWidth) {
        return 0;
    } else if (position < quarterWidth) {
        return lerp(0, 0.45, position / quarterWidth);
    } else if (position < 2 * quarterWidth) {
        return lerp(0.45, 1.5, (position - quarterWidth) / quarterWidth);
    } else if (position < 3 * quarterWidth) {
        return lerp(1.5, 0.45, (position - 2 * quarterWidth) / quarterWidth);
    } else {
        return lerp(0.45, 0, (position - 3 * quarterWidth) / quarterWidth);
    }
};

const updateScales = () => {
    const viewportWidth = window.innerWidth;
    let closestCard = null;
    let maxScale = 0;

    cards.forEach((card) => {
        const cardRect = card.getBoundingClientRect();
        const cardCenter = cardRect.left + cardRect.width / 2;
        const scaleFactor = getScaleFactor(cardCenter, viewportWidth);
        const imgScaleFactor = scaleFactor * 1.1;
        const img = card.querySelector("img");

        card.style.transform = `scale(${scaleFactor})`;
        img.style.transform = `scale(${imgScaleFactor})`;

        // Track the card with the highest scale factor (the one closest to the center)
        if (scaleFactor > maxScale) {
            maxScale = scaleFactor;
            closestCard = card;
        }
    });

    // Add active class to the closest card
    cards.forEach((card) => card.classList.remove("active")); // Remove active class from all cards
    if (closestCard) {
        closestCard.classList.add("active"); // Add active class to the closest card
    }
};

const update = () => {
    currentX = lerp(currentX, targetX, ease);
    slider.style.transform = `translateX(${currentX}%)`;
    updateScales();
    requestAnimationFrame(update);
};

const slideRight = () => {
    if (currentStep < maxScrollSteps) {
        currentStep++;
    } else {
        currentStep = 0; // Loop back to start
    }
    targetX = -step * currentStep;
};

const slideLeft = () => {
    if (currentStep > 0) {
        currentStep--;
        targetX = -step * currentStep;
    }
};

// Button Controls
const leftBtn = document.querySelector(".slider-left");
const rightBtn = document.querySelector(".slider-right");

leftBtn.addEventListener("click", () => {
    slideLeft();
    resetAutoSlide();
});

rightBtn.addEventListener("click", () => {
    slideRight();
    resetAutoSlide();
});

// Auto Slide
const startAutoSlide = () => {
    autoSlideTimer = setInterval(() => {
        slideRight();
    }, autoSlideInterval);
};

const resetAutoSlide = () => {
    clearInterval(autoSlideTimer);
    startAutoSlide();
};

startAutoSlide();
update();
