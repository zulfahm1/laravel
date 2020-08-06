<?php

use Illuminate\Database\Seeder;
use App\Model\Student;
use App\Model\Guardian;
use Faker\Factory;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();

        $faker = Factory::create('id_ID');
        $guardians_count = Guardian::count();
        $this->command->getOutput()->progressStart(200);
        for ($i=0; $i <=200 ; $i++) { 
        	 $is_male = rand(0,1);
        	Student::create([
        		'guardian_id' => ($i % $guardians_count) + 1 ,
        		'name'        => $faker->firstName($is_male ? 'male' : 'female'). ''.$faker->lastName,
        		'nis' 		  =>$faker->nik,
        		'gender' 	  =>$is_male ? 'l': 'p',
        		'birth_date'  => $faker->date('Y-m-d','2003-01-01'),
        		'address'     =>$faker->address,
        		'class'       =>$faker->randomElement(['10', '11', '12']),
        		'majors'      =>$faker->randomElement(['i','s','a','b']),
        		'height'      =>rand(100, 200),
        		'Weight'      =>rand(30, 70),
        	]);
        		$this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
