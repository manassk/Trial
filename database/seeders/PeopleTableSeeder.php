<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $p1 = new People;
        $p1->name="Mayya";
        $p1->age=23;
        $p1->email="jjbidbf";
        $p1->save();

        People::factory()->count(50)->create();
    }
}
