<?php

use Illuminate\Database\Seeder;
use App\Exammocks;

class ExamMocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        foreach(range(1,50) as $index)
        {
            Exammocks::create([
                'template_id'=>1,
                'title'=>$faker->name,
                'noofquestions'=>20,
                'time'=>20,
                'created_by'=>1,
                'modified_by'=>1,
                'status'=>1
            ]);
        }
    }
}
