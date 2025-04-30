window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    // When the user scrolls down 50px from the top, add the scrolled class
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// const hamburger = document.getElementById('hamburger');
// const nav = document.getElementById('nav');

// hamburger.addEventListener('click', () => {
//     nav.classList.toggle('active');
// });

const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    nav.classList.toggle('active');
});

// Close mobile menu when clicking outside
document.addEventListener('click', (event) => {
    if (!event.target.closest('nav') && !event.target.closest('.hamburger') && nav.classList.contains('active')) {
        nav.classList.remove('active');
    }
});

// Check window resize to reset mobile nav
window.addEventListener('resize', () => {
    if (window.innerWidth > 768 && nav.classList.contains('active')) {
        nav.classList.remove('active');
    }
});


 // Books carousel functionality
 const carousel = document.getElementById('books-carousel');
 const items = carousel.querySelectorAll('.carousel-item');
 const prevBtn = document.querySelector('.prev-btn');
 const nextBtn = document.querySelector('.next-btn');
 const indicatorsContainer = document.getElementById('carousel-indicators');
 
 let currentIndex = 0;
 const totalItems = items.length;
 let intervalId;
 
 // Create indicators
 for (let i = 0; i < totalItems; i++) {
     const indicator = document.createElement('div');
     indicator.classList.add('indicator');
     if (i === 0) indicator.classList.add('active');
     indicator.dataset.index = i;
     indicatorsContainer.appendChild(indicator);
     
     // Add click event to indicators
     indicator.addEventListener('click', () => {
         goToSlide(i);
         resetInterval();
     });
 }
 
 const indicators = document.querySelectorAll('.indicator');
 
 // Function to update carousel position
 function updateCarousel() {
     carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
     
     // Update active indicator
     indicators.forEach((ind, index) => {
         if (index === currentIndex) {
             ind.classList.add('active');
         } else {
             ind.classList.remove('active');
         }
     });
 }
 
 // Go to specific slide
 function goToSlide(index) {
     currentIndex = index;
     updateCarousel();
 }
 
 // Next slide function
 function nextSlide() {
     currentIndex = (currentIndex + 1) % totalItems;
     updateCarousel();
 }
 
 // Previous slide function
 function prevSlide() {
     currentIndex = (currentIndex - 1 + totalItems) % totalItems;
     updateCarousel();
 }
 
 // Event listeners for buttons
 nextBtn.addEventListener('click', () => {
     nextSlide();
     resetInterval();
 });
 
 prevBtn.addEventListener('click', () => {
     prevSlide();
     resetInterval();
 });
 
 // Function to start auto-scroll interval
 function startInterval() {
     intervalId = setInterval(nextSlide, 5000); // Change slide every 5 seconds
 }
 
 // Reset interval when manually changing slides
 function resetInterval() {
     clearInterval(intervalId);
     startInterval();
 }
 
 // Start auto-scroll
 startInterval();
 
 // Pause auto-scroll when hovering over carousel
 carousel.addEventListener('mouseenter', () => {
     clearInterval(intervalId);
 });
 
 // Resume auto-scroll when mouse leaves carousel
 carousel.addEventListener('mouseleave', () => {
     startInterval();
 });
 
 // Keyboard navigation
 document.addEventListener('keydown', (e) => {
     if (e.key === 'ArrowLeft') {
         prevSlide();
         resetInterval();
     } else if (e.key === 'ArrowRight') {
         nextSlide();
         resetInterval();
     }
 });
 
 // Touch events for mobile
 let touchStartX = 0;
 let touchEndX = 0;
 
 carousel.addEventListener('touchstart', (e) => {
     touchStartX = e.changedTouches[0].screenX;
 }, {passive: true});
 
 carousel.addEventListener('touchend', (e) => {
     touchEndX = e.changedTouches[0].screenX;
     handleSwipe();
 }, {passive: true});
 
 function handleSwipe() {
     const minSwipeDistance = 50;
     if (touchEndX < touchStartX - minSwipeDistance) {
         // Swipe left
         nextSlide();
         resetInterval();
     } else if (touchEndX > touchStartX + minSwipeDistance) {
         // Swipe right
         prevSlide();
         resetInterval();
     }
 }