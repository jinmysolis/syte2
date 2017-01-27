<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TeachMe\Entities\Ticket;
use Faker\Factory as Faker;

class TickeTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	     
             $this->createTicke(50);
		 
	}

  

     private function createTicke($total)
    {
       $faker =Faker::create();
	      for ($i=1; $i <=$total; $i++)
	      {

	      	Ticket::create([
                'title'=>$faker->sentence(),
                'status'=>$faker->randomElement(['open','open','closed']),
                'user_id'=> rand(1,51)

	      		]);
	      }

    }




}
