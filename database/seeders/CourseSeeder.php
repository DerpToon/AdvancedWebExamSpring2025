<?php 
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class YourSeederName extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('courses')->insert([
                'name' => $faker->name,
                'description' => $faker
            ]);
        }
    }
}