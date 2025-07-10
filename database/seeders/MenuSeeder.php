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
            'name' => 'Pizza Margherita',
            'description' => 'Tomate, mozzarella, basilic',
            'price' => 9000,
            'image' => 'pizza.jpg'
        ]);

        Menu::create([
            'name' => 'Pizza Simple',
            'description' => 'Tomate, mozzarella, basilic',
            'price' => 10000,
            'image' => 'pizza.jpg'
        ]);

        }
}
