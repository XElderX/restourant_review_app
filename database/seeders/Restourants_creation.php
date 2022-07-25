<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Restourants_creation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restourant = new \App\Models\Restourant();
        $restourant->r_name = "Hollywood Café";
        $restourant->city = "Priginia";
        $restourant->address = "5010 S Columbia Pike";
        $restourant->working_hours = "6-20";
        $restourant->save();

        $restourant2 = new \App\Models\Restourant();
        $restourant2->r_name = "Kitchen On Fire";
        $restourant2->city = "Edomont";
        $restourant2->address = "732 Hartford Ln";
        $restourant2->working_hours = "10-24";
        $restourant2->save();

        $restourant3 = new \App\Models\Restourant();
        $restourant3->r_name = "Full Moon";
        $restourant3->city = "Yeeburg";
        $restourant3->address = "7 Broux Blvd";
        $restourant3->working_hours = "9-21";
        $restourant3->save();

        $restourant4 = new \App\Models\Restourant();
        $restourant4->r_name = "The Black Pearl";
        $restourant4->city = "Yeeburg";
        $restourant4->address = "1004 W Madison St";
        $restourant4->working_hours = "8-23";
        $restourant4->save();
    }
}
