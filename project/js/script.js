// // Basic slider JS - adjust as needed
// document.addEventListener('DOMContentLoaded', function () {
//     const slider = document.querySelector('.carousel-slider');
//     const nav = document.querySelector('.carousel-nav');
//     const dots = document.querySelectorAll('.dot');
//     let currentIndex = 0;
//     const totalSlides = 2; // Number of images in slider

//     function updateSlider() {
//         slider.style.transform = `translateX(-${currentIndex * (100 / totalSlides)}%)`;
//         dots.forEach((dot, index) => dot.classList.toggle('active', index === currentIndex));
//     }

//     nav.addEventListener('click', () => {
//         currentIndex = (currentIndex + 1) % totalSlides;
//         updateSlider();
//     });

//     dots.forEach((dot, index) => {
//         dot.addEventListener('click', () => {
//             currentIndex = index;
//             updateSlider();
//         });
//     });

//     // Auto-advance (optional)
//     setInterval(() => {
//         currentIndex = (currentIndex + 1) % totalSlides;
//         updateSlider();
//     }, 5000);
// });