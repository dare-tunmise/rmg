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


document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('books-carousel');
    const items = document.querySelectorAll('.carousel-item');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const indicatorsContainer = document.getElementById('carousel-indicators');
    
    let currentIndex = 0;
    const itemCount = items.length;
    
    // Create indicators
    function createIndicators() {
        for (let i = 0; i < itemCount; i++) {
            const indicator = document.createElement('div');
            indicator.classList.add('carousel-indicator');
            if (i === 0) indicator.classList.add('active');
            indicator.addEventListener('click', () => goToIndex(i));
            indicatorsContainer.appendChild(indicator);
        }
    }
    
    // Update carousel position
    function updateCarousel() {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update indicators
        const indicators = document.querySelectorAll('.carousel-indicator');
        indicators.forEach((indicator, index) => {
            if (index === currentIndex) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }
    
    // Go to specific index
    function goToIndex(index) {
        if (index < 0) {
            currentIndex = itemCount - 1;
        } else if (index >= itemCount) {
            currentIndex = 0;
        } else {
            currentIndex = index;
        }
        updateCarousel();
    }
    
    // Next slide
    function nextSlide() {
        goToIndex(currentIndex + 1);
    }
    
    // Previous slide
    function prevSlide() {
        goToIndex(currentIndex - 1);
    }
    
    // Event listeners
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
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
        const difference = touchStartX - touchEndX;
        if (difference > 50) { // Swipe left
            nextSlide();
        } else if (difference < -50) { // Swipe right
            prevSlide();
        }
    }
    
    // Initialize
    createIndicators();
    
    // Auto-advance (optional)
    // const autoAdvanceInterval = setInterval(nextSlide, 5000);
    
    // Pause auto-advance on hover
    // carousel.addEventListener('mouseenter', () => clearInterval(autoAdvanceInterval));
    // carousel.addEventListener('mouseleave', () => {
    //     autoAdvanceInterval = setInterval(nextSlide, 5000);
    // });
});
