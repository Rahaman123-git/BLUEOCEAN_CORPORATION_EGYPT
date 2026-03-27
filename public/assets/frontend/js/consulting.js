document.querySelectorAll(".dropdown-arrow").forEach(btn => {
  btn.addEventListener("click", function () {
    const wrapper = this.closest(".sec-impact");
    const toggleTarget = wrapper?.querySelector(".under-sec-impact");

    if (toggleTarget) {
      toggleTarget.classList.toggle("view_data");
    }
  });
});

let testimonial = document.querySelector(".testimonial-slider");
if (testimonial) {
  var slider = tns({
    container: testimonial,
    items: 1,
    slideBy: "page",
    autoplay: false,
    autoplayButtonOutput: false,
    controlsContainer: "#custom-controls-second",
    nav: false,
    speed: 1000,
    autoplayTimeout: 3000,
    mode: "carousel",
    speed: 0,
  });
}