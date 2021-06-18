<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            'trainer_name' => Str::random(10),
            'is_leader' => 1,
            'company_id' => 1,
            'user_id' => 1,
            'trainer_email' => Str::random(5) . '@gmail.com',
            'trainer_phone' => random_int(900000000, 999999999)
        ]);
        $isleader =0;
        for ($i = 0; $i < 10000; $i++) {
            DB::table('trainers')->insert([
                'trainer_name' => Str::random(10),
                'is_leader' => (Int)$isleader,
                'company_id' => $i,
                'user_id' => $i,
                'trainer_email' => Str::random(5) . '@gmail.com',
                'trainer_phone' => random_int(900000000, 999999999)
            ]);
        }
    }
}
