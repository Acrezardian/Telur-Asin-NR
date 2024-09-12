document.addEventListener('DOMContentLoaded', function() {
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
    }
    
    const slider = document.querySelector('.testimonials-list');
    const testimonials = document.querySelectorAll('.testimonial');
    const totalTestimonials = testimonials.length;
    const slideWidth = testimonials[0].offsetWidth + 20; // Width + margin
    let index = 0;

    // Get navigation buttons
    const prevButton = document.querySelector('.slider-btn.left');
    const nextButton = document.querySelector('.slider-btn.right');

    function updateButtons() {
        // Disable "previous" button if at the start
        prevButton.disabled = index === 0;

        // Disable "next" button if at the end
        nextButton.disabled = index === totalTestimonials - 1;
    }

    function moveToSlide(newIndex) {
        slider.style.transform = `translateX(-${newIndex * slideWidth}px)`;
        index = newIndex;
        updateButtons();
    }

    function moveToNextSlide() {
        const nextIndex = index + 1;
        if (nextIndex < totalTestimonials) {
            moveToSlide(nextIndex);
        }
    }

    function moveToPrevSlide() {
        const prevIndex = index - 1;
        if (prevIndex >= 0) {
            moveToSlide(prevIndex);
        }
    }

    // Add event listeners for the navigation buttons
    prevButton.addEventListener('click', moveToPrevSlide);
    nextButton.addEventListener('click', moveToNextSlide);

    // Set initial position
    slider.style.transform = `translateX(-${index * slideWidth}px)`;
    updateButtons();

});

