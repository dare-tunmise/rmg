class BackgroundSlider {
  constructor(selector, images, interval = 5000) {
    this.container = document.querySelector(selector);
    this.images = images;
    this.interval = interval;
    this.currentIndex = 0;
    this.nextIndex = 1;
    
    this.init();
    this.startSlideshow();
  }

  init() {
    // Create overlay
    const overlay = document.createElement('div');
    overlay.className = 'overlay';
    this.container.appendChild(overlay);

    // Create image elements
    this.images.forEach((image, index) => {
      const div = document.createElement('div');
      div.className = `background-image ${index === 0 ? 'active' : ''}`;
      div.style.backgroundImage = `url(${image})`;
      this.container.appendChild(div);
    });
  }

  startSlideshow() {
    setInterval(() => {
      const images = this.container.querySelectorAll('.background-image');
      
      // Set next image to transition in
      images[this.nextIndex].classList.add('next');
      
      // After transition completes
      setTimeout(() => {
        // Remove active class from current image
        images[this.currentIndex].classList.remove('active');
        // Remove next class and add active class to next image
        images[this.nextIndex].classList.remove('next');
        images[this.nextIndex].classList.add('active');
        
        // Update indices
        this.currentIndex = this.nextIndex;
        this.nextIndex = (this.nextIndex + 1) % this.images.length;
      }, 1000);
    }, this.interval);
  }
}

// Initialize the slider when the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  const images = [
    "https://i0.wp.com/www.wrr.ng/wp-content/uploads/2021/01/RASAQ-MALIK-GHOLAHAN-4.jpg?resize=720%2C730&ssl=1",
    "http://daretunmise.com/wp-content/uploads/2025/05/PXL_20240613_161235904-scaled.jpg",
    "http://daretunmise.com/wp-content/uploads/2025/05/IMG-20241129-WA0027.jpg"
  ];

  new BackgroundSlider('.background-slider', images);
});