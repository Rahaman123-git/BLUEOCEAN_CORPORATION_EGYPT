const popup = document.getElementById('popup');
const popupImg = document.getElementById('popup-img');

// Function to open the popup with the clicked image
function openPopup(imgContainer) {
  const img = imgContainer.querySelector('img');
  popupImg.src = img.src;  // Display the same image in popup
  popup.style.display = 'flex';
}

// Function to close the popup
function closePopup() {
  popup.style.display = 'none';
}

// Close popup when clicking outside the image
popup.addEventListener('click', (e) => {
  if (e.target === popup) {
    closePopup();
  }
});


// awards slider
let awardsSlider = document.querySelector(".awardsSlider");
if(awardsSlider) {
  var slider = tns({
    container: awardsSlider,
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