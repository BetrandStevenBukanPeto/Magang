@extends('layouts.main')

@section('content')

<?php
$book = [
    "image" => "Book1.jpg",
    "title" => "Kubo Won't Let Me Be Invisible Vol.1",
    "author" => "Nene Yukimori",
    "price" => "45.000",
    "genre" => "Comedy, Romance, Slice of Life",
    "synopsis" => "When Kubo sits next to Shiraishi in their first year of high school, Shiraishi’s nonexistent social skills get a boost. Speaking up in class is only the beginning for Shiraishi—soon Kubo forces him to be noticed at school, at the bookstore, and all around town. Shiraishi’s once-lackluster life isn’t so dull anymore!"
];
?>

<div class="container mx-auto px-4 py-8">
    <!-- Back Button -->
    <a href="javascript:history.back()" class="text-gray-600 hover:text-gray-800 flex items-center gap-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
        </svg>
        <span>Back</span>
    </a>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
        <!-- Book Image -->
        <div class="relative">
            <img src="/img/{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-80 rounded-lg shadow-md mx-auto">
        </div>

        <!-- Book Details -->
        <div>
            <h1 class="text-3xl font-bold flex items-center gap-2">
                {{ $book['title'] }}
                <span class="text-lg text-gray-500">({{ $book['genre'] }})</span>
            </h1>
            <p class="text-sm text-gray-500 mt-2">⭐⭐⭐⭐⭐</p>
            <p class="text-lg text-gray-600 mt-2">By {{ $book['author'] }}</p>
            <p class="text-4xl font-semibold text-[#3674B5]">Rp. {{ $book['price'] }}</p>
            <p class="text-sm text-gray-700 mt-2">{{ $book['synopsis'] }}</p>
            <div class="mt-4">
   <a href="{{ route('books.detail', ['slug' => Str::slug($book['title'])]) }}">
        <button class="px-4 py-2 bg-[#578FCA] text-white rounded-lg hover:bg-[#3674B5] transition mt-4">
            View Details
        </button>
    </a>
</div>
            <div class="mt-4 flex space-x-2">
                <button class="px-4 py-2 bg-gray-300 text-black rounded-lg hover:bg-[#3674B5] hover:text-white transition">Buy</button>
                <button class="px-4 py-2 bg-gray-300 text-black rounded-lg hover:bg-[#3674B5] hover:text-white transition ">Rent</button>
            </div>
        </div>
    </div>

    <!-- Related Books Section -->
    <section class="mt-8 container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Related Books</h2>
        <div class="relative">
            <!-- Prev Button -->
            <button class="featured-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-3 rounded-full shadow-md z-10">
                <i class="fas fa-chevron-left"></i>
            </button>

            <!-- Swiper Container -->
            <div class="swiper featuredSwiper overflow-hidden mx-auto">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 12; $i++)
                        <div class="swiper-slide bg-white p-3 rounded-lg shadow hover:shadow-lg transition min-w-[180px] max-w-[180px] flex flex-col justify-between h-[300px]">
                             <a href="{{ route('books.digital', ['slug' => Str::slug($book['title'])]) }}" class="block">
                                <img src="/img/{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-full h-[220px] rounded-md object-cover mb-2">
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

            <!-- Next Button -->
            <button class="featured-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-3 rounded-full shadow-md z-10">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </section>

    <!-- Maybe you like it -->
    <section class="mt-8 container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Maybe you like it</h2>
        <div class="relative">
            <!-- Prev Button -->
            <button class="featured-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-200 p-3 rounded-full shadow-md z-10">
                <i class="fas fa-chevron-left"></i>
            </button>

            <!-- Swiper Container -->
            <div class="swiper featuredSwiper overflow-hidden mx-auto">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 12; $i++)
                        <div class="swiper-slide bg-white p-3 rounded-lg shadow hover:shadow-lg transition min-w-[180px] max-w-[180px] flex flex-col justify-between h-[300px]">
                            <a href="{{ route('books.digital', ['slug' => Str::slug($book['title'])]) }}" class="block">
                                <img src="/img/{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-full h-[220px] rounded-md object-cover mb-2">
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

            <!-- Next Button -->
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




@endsection
