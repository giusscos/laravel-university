<?php

use App\Course;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        $periods = collect(['I Semestre', 'II Semestre']);
        $min_cfus = 1;
        $max_cfus = 30;
        
        for($i=0; $i<100; $i++){
            Course::create([
                'name' => $faker->unique()->name,
                'description' => $faker->text,
                'period' => $periods->random(), 
                'year' => $faker->year('now'),
                'cfu' => random_int($min_cfus, $max_cfus),
            ]);
        }
    }
}
