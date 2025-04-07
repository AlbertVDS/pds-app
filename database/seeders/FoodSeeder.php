<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 500) as $index) {

            $data_l = [
                'fructose_l' => $this->generateWeightedValue(),
                'lactose_l' => $this->generateWeightedValue(),
                'mannitol_l' => $this->generateWeightedValue(),
                'sorbitol_l' => $this->generateWeightedValue(),
                'gos_l' => $this->generateWeightedValue(),
                'fructan_l' => $this->generateWeightedValue(),
            ];

            $data_m = [
                'fructose_m' => $this->generateWeightedValue($data_l['fructose_l']),
                'lactose_m' => $this->generateWeightedValue($data_l['lactose_l']),
                'mannitol_m' => $this->generateWeightedValue($data_l['mannitol_l']),
                'sorbitol_m' => $this->generateWeightedValue($data_l['sorbitol_l']),
                'gos_m' => $this->generateWeightedValue($data_l['gos_l']),
                'fructan_m' => $this->generateWeightedValue($data_l['fructan_l']),
            ];

            $data_h = [
                'fructose_h' => $this->generateWeightedValue($data_m['fructose_m']),
                'lactose_h' => $this->generateWeightedValue($data_m['lactose_m']),
                'mannitol_h' => $this->generateWeightedValue($data_m['mannitol_m']),
                'sorbitol_h' => $this->generateWeightedValue($data_m['sorbitol_m']),
                'gos_h' => $this->generateWeightedValue($data_m['gos_m']),
                'fructan_h' => $this->generateWeightedValue($data_m['fructan_m']),
            ];

            $data = array_merge($data_l, $data_m, $data_h);

            DB::table('foods')->insert([
                'name' => $faker->asciify(str_repeat('*', rand(4, 12))),
                'type' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]),
                'low' => $faker->numberBetween(5, 15),
                'fructose_l' => $data['fructose_l'],
                'lactose_l' => $data['lactose_l'],
                'mannitol_l' => $data['mannitol_l'],
                'sorbitol_l' => $data['sorbitol_l'],
                'gos_l' => $data['gos_l'],
                'fructan_l' => $data['fructan_l'],
                'medium' => $faker->numberBetween(20, 30),
                'fructose_m' => $data['fructose_m'],
                'lactose_m' => $data['lactose_m'],
                'mannitol_m' => $data['mannitol_m'],
                'sorbitol_m' => $data['sorbitol_m'],
                'gos_m' => $data['gos_m'],
                'fructan_m' => $data['fructan_m'],
                'high' => $faker->numberBetween(60, 125),
                'fructose_h' => $data['fructose_h'],
                'lactose_h' => $data['lactose_h'],
                'mannitol_h' => $data['mannitol_h'],
                'sorbitol_h' => $data['sorbitol_h'],
                'gos_h' => $data['gos_h'],
                'fructan_h' => $data['fructan_h'],
            ]);
        }
    }

    private function generateWeightedValue($min = 0)
    {
        $random = mt_rand() / mt_getrandmax();

        if ($random < 0.7 && $min < 1) {
            return 0;
        } elseif ($random < 0.9 && $min < 2) {
            return 1;
        } else {
            return 2;
        }
    }
}
