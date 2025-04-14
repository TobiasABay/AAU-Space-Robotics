<?php
function renderImageCarousel($images = []) {
    // Default images if none provided
    if (empty($images)) {
        $images = [
            '/assets/images/carousel/image1.jpg',
            '/assets/images/carousel/image2.jpg',
            '/assets/images/carousel/image3.jpg'
        ];
    }

    return '
    <link rel="stylesheet" href="/app/components/ImageCarousel/ImageCarousel.css">
    
    <div class="carousel-container">
        <button class="carousel-button prev" aria-label="Previous image">
            <i class="fas fa-chevron-left"></i>
        </button>
        
        <div class="carousel">
            <div class="carousel-track">
                ' . implode('', array_map(function($image, $index) {
                    return '
                    <div class="carousel-slide" data-index="' . $index . '">
                        <img src="' . $image . '" alt="Carousel image ' . ($index + 1) . '" class="carousel-image">
                    </div>';
                }, $images, array_keys($images))) . '
            </div>
            
            <button class="carousel-button prev" aria-label="Previous image">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <button class="carousel-button next" aria-label="Next image">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <div class="carousel-dots">
            ' . implode('', array_map(function($index) {
                return '<button class="carousel-dot" data-index="' . $index . '" aria-label="Go to slide ' . ($index + 1) . '"></button>';
            }, array_keys($images))) . '
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector(".carousel");
            const track = carousel.querySelector(".carousel-track");
            const slides = Array.from(track.children);
            const dots = Array.from(document.querySelectorAll(".carousel-dot"));
            const prevButton = document.querySelector(".prev");
            const nextButton = document.querySelector(".next");
            
            let currentIndex = 0;
            
            // Function to update carousel position
            function updateCarousel() {
                track.style.transform = `translateX(-${currentIndex * 100}%)`;
                dots.forEach((dot, index) => {
                    dot.classList.toggle("active", index === currentIndex);
                });
            }
            
            // Event listeners for buttons
            prevButton.addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                updateCarousel();
            });
            
            nextButton.addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % slides.length;
                updateCarousel();
            });
            
            // Event listeners for dots
            dots.forEach((dot, index) => {
                dot.addEventListener("click", () => {
                    currentIndex = index;
                    updateCarousel();
                });
            });
            
            // Initialize carousel
            updateCarousel();
        });
    </script>';
}
?>