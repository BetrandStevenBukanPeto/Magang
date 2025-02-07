@extends('layouts.main')

@section('content')

<?php
$book = [
    "image" => "Book1.jpg",
    "title" => "Kubo Won't Let Me Be Invisible Vol.1",
    "author" => "Nene Yukimori",
    "price" => "45.000"
];
?>

<!-- Hero Section -->
<section class="relative w-screen h-96 flex items-center justify-center mt-4 overflow-hidden">
    <div class="swiper mySwiper rounded-xl overflow-hidden max-w-screen-xl h-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="img/Hero8.jpg" class="w-full h-full object-cover rounded-xl" alt="Hero 1">
            </div>
            <div class="swiper-slide">
                <img src="img/Hero9.jpg" class="w-full h-full object-cover rounded-xl" alt="Hero 2">
            </div>
            <div class="swiper-slide">
                <img src="img/Hero10.jpg" class="w-full h-full object-cover rounded-xl" alt="Hero 3">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Featured Books -->
<section class="mt-8 container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Featured Books</h2>
    <div class="relative">
        <!-- Tombol Prev -->
        <button class="featured-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-3 rounded-full shadow-md z-10">
            <i class="fas fa-chevron-left"></i>
        </button>

        <!-- Swiper Container -->
        <div class="swiper featuredSwiper overflow-hidden mx-auto">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 12; $i++)
                    <div class="swiper-slide bg-white p-3 rounded-lg shadow hover:shadow-lg transition min-w-[180px] max-w-[180px] flex flex-col justify-between h-[300px]">
                        <a href="{{ route('books.show', ['slug' => Str::slug($book['title'])]) }}" class="block">
                            <img src="img/{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-full h-[220px] rounded-md object-cover mb-2">
                            <div class="flex flex-col items-center text-center flex-grow">
                                <h3 class="text-sm font-bold min-h-[40px]">{{ $book['title'] }}</h3>
                                <p class="text-gray-500 text-xs">{{ $book['author'] }}</p>
                            </div>
                            <p class="text-[#3674B5] font-semibold text-center mt-auto">Rp. {{ $book['price'] }}</p>
                        </a>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Tombol Next -->
        <button class="featured-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-3 rounded-full shadow-md z-10">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</section>

<!-- Recommended Books -->
<section class="mt-8 container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Recommended Books</h2>
    <div class="relative">
        <!-- Tombol Prev -->
        <button class="recommended-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-3 rounded-full shadow-md z-10">
            <i class="fas fa-chevron-left"></i>
        </button>

        <!-- Swiper Container -->
        <div class="swiper recommendedSwiper overflow-hidden">
            <div class="swiper-wrapper flex">
                @for ($i = 0; $i < 5; $i++)
                    <div class="swiper-slide bg-white p-4 rounded-lg shadow flex items-center space-x-4 min-w-[400px] max-w-[400px]">
                        <a href="{{ route('books.show', ['slug' => Str::slug($book['title'])]) }}" class="flex items-start space-x-4">
                            <img src="img/{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-48 h-64 object-cover rounded-md">
                            <div class="flex flex-col justify-between h-full w-full">
                                <h3 class="text-lg font-bold min-h-[48px]">{{ $book['title'] }}</h3>
                                <p class="text-gray-500 text-sm">{{ $book['author'] }}</p>
                                <p class="text-gray-700 text-sm mt-2 min-h-[60px] overflow-hidden text-ellipsis max-h-[90px]" id="short-synopsis-{{ $i }}">
                                   When Kubo sits next to Shiraishi in their first year of high school, Shiraishi’s nonexistent social skills get a boost. Speaking up in class is only the beginning for Shiraishi—soon Kubo forces him to be noticed at school, at the bookstore, and all around town. Shiraishi’s once-lackluster life isn’t so dull anymore!
                                </p>
                               
                                <p class="text-gray-700 text-sm mt-2">...</p>
                                <p class="text-[#3674B5] font-semibold text-2xl mt-auto">Rp. {{ $book['price'] }}</p>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Tombol Next -->
        <button class="recommended-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-3 rounded-full shadow-md z-10">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</section>

<!-- Digital Books -->
<section class="mt-8 container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Digital Books</h2>
    <div class="relative">
        <!-- Tombol Prev -->
        <button class="featured-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-3 rounded-full shadow-md z-10">
            <i class="fas fa-chevron-left"></i>
        </button>

        <!-- Swiper Container -->
        <div class="swiper featuredSwiper overflow-hidden mx-auto">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 12; $i++)
                    <div class="swiper-slide bg-white p-3 rounded-lg shadow hover:shadow-lg transition min-w-[180px] max-w-[180px] flex flex-col justify-between h-[300px]">
                       <a href="{{ route('books.digital', ['slug' => Str::slug($book['title'])]) }}" class="block">
                            <img src="img/{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-full h-[220px] rounded-md object-cover mb-2">
                            <div class="flex flex-col items-center text-center flex-grow">
                                <h3 class="text-sm font-bold min-h-[40px]">{{ $book['title'] }}</h3>
                                <p class="text-gray-500 text-xs">{{ $book['author'] }}</p>
                            </div>
                            <p class="text-[#3674B5] font-semibold text-center mt-auto">Rp. {{ $book['price'] }}</p>
                        </a>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Tombol Next -->
        <button class="featured-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-3 rounded-full shadow-md z-10">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</section>


<!-- Reviews Section -->
<section class="mt-8 container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">User Reviews</h2>
    <div class="relative bg-gray-100 p-6 rounded-lg shadow-lg">
        <!-- Tombol Prev -->
        <button class="review-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-300 p-3 rounded-full shadow-md z-10">
            <i class="fas fa-chevron-left"></i>
        </button>

        <!-- Swiper Container -->
        <div class="swiper reviewSwiper overflow-hidden">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 5; $i++)
                    <div class="swiper-slide bg-white p-6 rounded-lg shadow flex flex-col">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center">
                                <span class="text-xs">Foto</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">User {{ $i + 1 }}</h3>
                                <p class="text-sm text-gray-500">⭐⭐⭐⭐⭐</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center space-x-4">
                            <img src="img/{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-24 h-32 object-cover rounded-md">
                            <div>
                                <h4 class="text-md font-bold">{{ $book['title'] }}</h4>
                                <p class="text-gray-500 text-sm">{{ $book['author'] }}</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum."
                        </p>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Tombol Next -->
        <button class="review-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-300 p-3 rounded-full shadow-md z-10">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</section>


<style>
    .swiper-slide p {
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Limit text to 3 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>


@endsection
