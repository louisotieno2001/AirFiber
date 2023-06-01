function toggleMenu() {
  var topnav = document.getElementById("myTopnav");
  if (topnav.className === "topnav") {
    topnav.className += " responsive";
  } else {
    topnav.className = "topnav";
  }
}

//Code for carousel

const carouselContainer = document.querySelector('.carousel-container');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const totalItems = carouselItems.length;
    let currentIndex = 0;

    function showSlide(index) {
      if (index < 0 || index >= totalItems) {
        return;
      }
      carouselContainer.style.transform = `translateX(-${index * 100}%)`;
      currentIndex = index;
    }

    function nextSlide() {
      currentIndex++;
      if (currentIndex >= totalItems) {
        currentIndex = 0;
      }
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = totalItems - 1;
      }
      showSlide(currentIndex);
    }

    setInterval(nextSlide, 3000); 