<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dishes_creation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $dish = new \App\Models\Dish();
        $dish->dish_name = "Masala Chai";
        $dish->price = 8.99;
        $dish->foto_url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIdONnxL3zmWskj72OHEh0qUwCNTnIxmCHEg&usqp=CAU";
        $dish->restourant_id = 1;
        $dish->save();

        $dish2 = new \App\Models\Dish();
        $dish2->dish_name = "Kitchen On Fire";
        $dish2->price = 11.50;
        $dish2->foto_url = "https://images.immediate.co.uk/production/volatile/sites/30/2022/05/Tacos-5d95ed0.jpg?quality=90&fit=700,466";
        $dish2->restourant_id = 2;
        $dish2->save();

        $dish3 = new \App\Models\Dish();
        $dish3->dish_name = "Full Moon";
        $dish3->price = 7.99;
        $dish3->foto_url = "https://imageproxy.wolt.com/menu/menu-images/a0585c7e-8610-11e9-9978-0a5864602536_Kalimera_10_didele_lekste_horizont.jpeg";
        $dish3->restourant_id = 2;
        $dish3->save();

        $dish4 = new \App\Models\Dish();
        $dish4->dish_name = "The Black Pearl";
        $dish4->price = 14.99;
        $dish4->foto_url = "https://img.theculturetrip.com/1440x807/smart/wp-content/uploads/2019/07/hwhxn4.jpg";
        $dish4->restourant_id = 1;
        $dish4->save();
    }
}
