<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TeachMe\Entities\TicketCommet;
use Faker\Factory as Faker;

class TickeCommentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	     
             $this->createTickeComment(50);
		 
	}

  

     private function createTickeComment($total)
    {
       $faker =Faker::create();
	      for ($i=1; $i <=$total; $i++)
	      {

	      	TicketCommet::create([
               'user_id'    => rand(1,51),
               'ticket_id'  => rand(1,51),
               'comment'    => $faker->paragraph(),
                'link'      => $faker->randomElement(['','',$faker->url]),

	      		]);
	      }

    }




}
