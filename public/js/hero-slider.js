document.addEventListener("DOMContentLoaded", function () {
    let myCarousel = new bootstrap.Carousel(document.getElementById('hero'), {
        interval: 3000,
      ride: 'carousel',
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth < 768) {
        myCarousel.pause();
      } else {
        myCarousel.cycle();
      }
    });
});