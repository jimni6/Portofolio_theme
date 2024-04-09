let navLinks = document.querySelectorAll(".carousel .nav-link");
let slides = document.querySelectorAll(".carousel .slides img");
let overlays = document.querySelectorAll(".carousel .bar");
let maxZIndex = navLinks.length;
let easeInOutQuart = "cubic-bezier(0.77, 0, 0.175, 1)";
slides[0].classList.add("active");
navLinks[0].classList.add("active");

navLinks.forEach((navLink, activeIndex) => {
  navLink.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent default link behavior
    
    // Remove active class from all nav links
    navLinks.forEach(navLink => navLink.classList.remove("active"));
    // Add active class to the clicked nav link
    navLink.classList.add("active");
    
    // Fade out the current slide
    let currentSlide = document.querySelector(".carousel .slides img.active");
    let slideFadeOut = currentSlide.animate(
      [
        { transform: "translateX(0)", opacity: 1 },
        { transform: "translateX(5%)", opacity: 0 }
      ],
      {
        duration: 600,
        easing: "ease-in",
        fill: "forwards"
      }
    );
    slideFadeOut.onfinish = () => {
      // Remove active class from all slides
      slides.forEach(slide => slide.classList.remove("active"));
      // Add active class to the new slide
      let activeSlide = slides[activeIndex];
      activeSlide.classList.add("active");
      // Fade in the new slide
      activeSlide.animate(
        [
          {
            transform: "translateX(-5%)",
            opacity: 0
          },
          {
            transform: "translateX(0)",
            opacity: 1
          }
        ],
        { duration: 600, easing: "ease-out", fill: "forwards" }
      );
    };
    
    // Increase z-index for overlay
    maxZIndex += 1;
    let activeOverlay = overlays[activeIndex];
    activeOverlay.style.zIndex = `${maxZIndex}`;
    // Animate overlay
    activeOverlay.animate(
      [{ transform: "scaleX(0)" }, { transform: "scaleX(1)" }],
      { duration: 1200, fill: "forwards", easing: easeInOutQuart }
    );
  });
});