<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	     $this->createAdmin();
             $this->createUsers(50);
		 
	}

    private function createAdmin()
    {
        User::create([
        	'name'=>'jinmy solis',
        	'email'=>'solisjinmy@gmail.com',
        	'password'=>bcrypt('137525627jinmy'),

        	]);

    }

     private function createUsers($total)
    {
       $faker =Faker::create();
	      for ($i=1; $i <=$total; $i++)
	      {

	      	User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>bcrypt('bebe'),

	      		]);
	      }

    }




}






