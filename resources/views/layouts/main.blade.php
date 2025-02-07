<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litera</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    @include('partials.navbar')
    
    <div class="w-full mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
<footer class="bg-gray-100 text-gray-800 p-8">
    <div class="container mx-auto">
        <!-- Logo dan Slogan -->
        <div class="flex justify-between items-center border-b pb-4">
            <div class="flex items-center space-x-2">
                <img src="/img/Logo.svg" alt="Logo" class="h-8">
                <h2 class="text-xl font-bold text-gray-900">Litera.co.id</h2>
            </div>
            <p class="text-gray-600 font-semibold">Ini slogan, Lorem Ipsum</p>
        </div>


        <!-- Copyright & Social Media -->
        <div class="mt-6 border-t pt-4 flex justify-between items-center">
            <p class="text-sm text-gray-600">&copy; 2025 Litera. All rights reserved.</p>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-600 hover:text-gray-900 text-2xl"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-gray-600 hover:text-gray-900 text-2xl"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-gray-600 hover:text-gray-900 text-2xl"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>


     <!-- Swiper.js -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Swiper untuk Hero Section (Auto-slide)
    var heroSwiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000, // Ganti gambar setiap 3 detik
            disableOnInteraction: false, // Tetap autoplay meski user interaksi
        },
    });

    // Swiper untuk Featured Books (Drag dan Prev/Next tanpa infinite loop)
var featuredSwiper = new Swiper(".featuredSwiper", {
    slidesPerView: 6,
    spaceBetween: 20,
    navigation: {
        nextEl: ".featured-next",
        prevEl: ".featured-prev",
    },
    freeMode: false, // Matikan freeMode agar tidak bisa digeser tanpa batas
});

  var swiperReviews = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        loop: false,
    });


    // Swiper untuk Recommended Books (Drag dan Prev/Next tanpa infinite loop)
    var recommendedSwiper = new Swiper(".recommendedSwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: ".recommended-next",
            prevEl: ".recommended-prev",
        },
        freeMode: true, // Bisa di-drag manual
    });

    var reviewSwiper = new Swiper(".reviewSwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: ".review-next",
        prevEl: ".review-prev",
    },
    breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    },
});


    // Dark Mode Toggle (Fix)
    const toggle = document.getElementById('dark-mode-toggle');
    const icon = document.getElementById('dark-mode-icon');
    const htmlElement = document.documentElement;

    function setTheme(isDark) {
        if (isDark) {
            htmlElement.classList.add('dark');
            icon.classList.replace('fa-sun', 'fa-moon');
            localStorage.setItem('theme', 'dark');
        } else {
            htmlElement.classList.remove('dark');
            icon.classList.replace('fa-moon', 'fa-sun');
            localStorage.setItem('theme', 'light');
        }
    }

    // Load theme dari localStorage
    setTheme(localStorage.getItem('theme') === 'dark');

    // Toggle theme saat diklik
    toggle.addEventListener('click', () => {
        setTheme(!htmlElement.classList.contains('dark'));
    });
});

</script>


</body>
</html>