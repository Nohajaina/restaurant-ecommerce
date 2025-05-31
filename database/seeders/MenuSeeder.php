<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
        'nom' => 'Pizza Fromage',
        'prix' => 25000,
        'image' => 'pizza.jpg',
        ]);

        Menu::create([
            'nom' => 'Burger Classique',
            'prix' => 20000,
            'image' => 'burger.jpg',
        ]);
        }
}
