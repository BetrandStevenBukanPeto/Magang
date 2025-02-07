@extends('layouts.main')

@section('content')
<div class="container mx-auto p-6">
<a href="javascript:history.back()" class="text-gray-600 hover:text-gray-800 flex items-center gap-1">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
    </svg>
    <span>Back</span>
</a>

    </a>

    <div class="grid grid-cols-3 gap-8 mt-6">
        <!-- Book Image -->
        <div class="col-span-1 flex justify-center items-start">
            <img src="{{ asset('/img/' . $bookDetail['image']) }}" alt="{{ $bookDetail['title'] }}" class="w-64 h-auto border border-gray-300 shadow">
        </div>

        <!-- Book Details -->
        <div class="col-span-2">
            <div class="flex items-center gap-2">
    <h1 class="text-3xl font-bold">{{ $bookDetail['title'] }}</h1>
    <span class="px-3 py-1 text-md bg-gray-300 text-gray-700 items-center rounded-lg">Hard</span>
</div>

            <p class="text-gray-600">By {{ $bookDetail['author'] }}</p>

            <h2 class="mt-2 text-xl font-semibold">Synopsis</h2>
            <p class="text-gray-700 mt-2 leading-relaxed">
                {{ $bookDetail['synopsis'] }}
            </p>

            <!-- Book Details Table -->
            <div class="mt-6">
                <table class="w-full border-collapse border border-gray-300">
                    @foreach ($bookDetail['details'] as $key => $value)
                        <tr class="border border-gray-300">
                            <td class="p-2 font-semibold bg-gray-200">{{ $key }}</td>
                            <td class="p-2">{{ $value }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
