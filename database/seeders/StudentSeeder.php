<?php 
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'age' => $faker
            ]);
        }
    }
}