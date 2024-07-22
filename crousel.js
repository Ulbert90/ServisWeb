document.addEventListener('DOMContentLoaded', function() {
    const carouselItems = document.querySelectorAll('[data-carousel-item]');
    let currentIndex = 0;

    function showSlide(index) {
        carouselItems.forEach((item, i) => {
            item.classList.add('hidden');
            if (i === index) {
                item.classList.remove('hidden');
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % carouselItems.length;
        showSlide(currentIndex);
    }

    setInterval(nextSlide, 3000); // Change slide every 3 seconds

    // Initial display
    showSlide(currentIndex);

    // Add event listeners for prev and next buttons
    const prevButton = document.querySelector('[data-carousel-prev]');
    const nextButton = document.querySelector('[data-carousel-next]');

    prevButton.addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
        showSlide(currentIndex);
    });

    nextButton.addEventListener('click', function() {
        nextSlide();
    });
});
