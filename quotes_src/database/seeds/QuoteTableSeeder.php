<?php

use App\Models\Quote;  
use App\Models\Category;  
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB;

class QuoteTableSeeder extends Seeder  
{
    public function run()
    {

        Category::create([
            'id' => 5,
            'name' => 'Technology',
            'key' => 'tech'
        ]);

        Category::create([
            'id' => 2,
            'name' => 'Music Lyrics',
            'key' => 'music'
        ]);
        
        Category::create([
            'id' => 3,
            'name' => 'Literature',
            'key' => 'literature'
        ]);

        Category::create([
            'id' => 4,
            'name' => 'Movies',
            'key' => 'movies'
        ]);

        Category::create([
            'id' => 1,
            'name' => 'Other',
            'key' => 'other'
        ]);

        Quote::create([
            'text' => 'Success is going from failure to failure without losing your enthusiasm',
            'author' => 'Winston Churchill',
            'background' => '1.jpg',
            'category_id' => 1
        ]);

        Quote::create([
            'text' => 'Dream big and dare to fail',
            'author' => 'Norman Vaughan',
            'background' => '2.jpg',
            'category_id' => 1
        ]);

        Quote::create([
            'text' => 'It does not matter how slowly you go as long as you do not stop',
            'author' => 'Confucius',
            'background' => '3.jpg',
            'category_id' => 1
        ]);
    }
}
