<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSubstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = DB::table('foods')->get();
        $sortedByType = [];

        foreach ($foods as $f) {
            $sortedByType[$f->type][] = $f;
        }

        foreach ($sortedByType as $types) {
            foreach ($types as $s) {
                $typeIds = array_filter($types, function ($item) use ($s) {
                    return $s->id != $item->id;
                });

                DB::table('food_substitutes')->insert([
                    'food_id' => $s->id,
                    'substitute_id' => array_rand($typeIds, 1),
                ]);
            }
        }
    }
}
