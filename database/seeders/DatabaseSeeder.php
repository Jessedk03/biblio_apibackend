<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory(1)->create([
            'title' => 'Test Data',
            'author' => 'Test Author',
            'isbnNumber' => '1234567890',
            'userName' => null,
        ]);
    }
}
