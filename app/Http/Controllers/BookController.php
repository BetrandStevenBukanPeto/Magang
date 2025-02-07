<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function show($slug)
    {
        $books = [
            [
                "image" => "Book1.jpg",
                "title" => "Kubo Won't Let Me Be Invisible Vol.1",
                "author" => "Nene Yukimori",
                "price" => "45.000",
                "slug" => Str::slug("Kubo Won't Let Me Be Invisible Vol.1")
            ],
        ];

        // Cari buku berdasarkan slug
        $book = collect($books)->firstWhere('slug', $slug);

        if (!$book) {
            abort(404);
        }

        return view('books.show', compact('book'));
    }

    public function detail($slug)
    {
        // Data buku detail
        $bookDetail = [
            "image" => "Book1.jpg",
            "title" => "Kubo Won't Let Me Be Invisible Vol.1",
            "author" => "Nene Yukimori",
            "synopsis" => "When Kubo sits next to Shiraishi in their first year of high school, Shiraishi’s nonexistent social skills get a boost. Speaking up in class is only the beginning for Shiraishi—soon Kubo forces him to be noticed at school, at the bookstore, and all around town. Shiraishi’s once-lackluster life isn’t so dull anymore!",
            "rating" => "5 &#9733; &#9733; &#9733; &#9733; &#9733; ",
            "details" => [
                "Page number" => "170",
                "Publisher" => "Litera",
                "Publication date" => "14 Feb 2025",
                "Language" => "ID",
                "ISBN" => "1974732746, 9781974732746",
                "Weight" => "300g",
                "Width" => "6 inches",
                "Length" => "9 inches",
                "Price" => "Rp. 45.000",
                "Stock" => "12351"
            ],
            "slug" => Str::slug("Kubo Won't Let Me Be Invisible Vol.1") // Tambahkan slug
        ];

        // Validasi slug agar sesuai dengan buku yang tersedia
        if ($bookDetail['slug'] !== $slug) {
            abort(404);
        }

        return view('books.detail', compact('bookDetail'));
    }

    public function digital($slug)
    {
        $books = [
            [
                "image" => "Book1.jpg",
                "title" => "Kubo Won't Let Me Be Invisible Vol.1",
                "author" => "Nene Yukimori",
                "price" => "45.000",
                "synopsis" => "When Kubo sits next to Shiraishi in their first year of high school...",
                "slug" => Str::slug("Kubo Won't Let Me Be Invisible Vol.1")
            ],
        ];

        // Cari buku berdasarkan slug
        $book = collect($books)->firstWhere('slug', $slug);

        if (!$book) {
            abort(404);
        }

        return view('books.digital', compact('book'));
    }

}
