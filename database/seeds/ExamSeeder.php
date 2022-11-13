<?php

use App\Course;
use App\Exam;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $coursesId = Course::all()->pluck('id');

        for($i=0; $i<25; $i++){
            Exam::create([
                'course_id' => $faker->randomElement($coursesId),
                'date' => $faker->date(),
                'hour' => $faker->time(),
                'location' => $faker->buildingNumber(),
                'address' => $faker->address()
            ]);
        }
    }
}
