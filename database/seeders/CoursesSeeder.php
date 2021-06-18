<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10000; $i++) { 
            DB::table('courses')->insert([
                'course_name' => Str::random(10),
                'cource_semester' => random_int(1, 4),
                'cource_year' =>random_int(2000, 2021),
            ]);
        }
    }
}
