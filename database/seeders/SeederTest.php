<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Fake\Generator as Fake;

class SeederTest extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Movido a inserção para fora do bloco if
        DB::table('products')->insert([
            'name' => fake()->userName(),
            'description' => fake()->text(),
            'category' => 'Computer',
            'quantity' => rand(1, 100), // Gera um número aleatório entre 1 e 100
            'price' => rand(10000, 1000000) / 100, // Gera um valor aleatório entre 1.00 e 100.00
            'image'  => fake()->image_url(300,300),
        ]);
    }
}