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
        Book::factory(100)->create([
            'title' => 'Ronald weasley the story',
            'author' => 'J.K. Rowling',
            'isbnNumber' => '9780747532743',
            'userName' => null,
        ]);
    }
}
