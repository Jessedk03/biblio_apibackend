<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('books')->insert([
            'title' => 'Harry potter',
            'author' => 'J.K. Rowling',
            'isbnNumber'=> '9780747532743',
            'userName'=>'Jesse de Koe',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
