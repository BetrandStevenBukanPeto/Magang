<?php

namespace Database\Seeders;

use App\Models\Book_status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book_status::insert([
            ['name' => 'Full relase'],
            ['name' => 'Sold Out']
        ]);
    }
}
