<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topping;

class ToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toppings = [
            ['name' => 'No Sugar', 'price' => 0],
            ['name' => 'Low Sugar', 'price' => 0],
            ['name' => 'Extra Sugar', 'price' => 0],
            ['name' => '2 Shots Espresso', 'price' => 5000],
            ['name' => '3 Shots Espresso', 'price' => 8000],
            ['name' => 'Whipped Cream', 'price' => 3000],
            ['name' => 'Oreo Crumble', 'price' => 4000],
            ['name' => 'Brown Sugar Jelly', 'price' => 3500],
            ['name' => 'Cheese Foam', 'price' => 5000],
            ['name' => 'Extra Ice', 'price' => 0],
            ['name' => 'Less Ice', 'price' => 0],
        ];

        foreach ($toppings as $topping) {
            Topping::create($topping);
        }
    }
}
