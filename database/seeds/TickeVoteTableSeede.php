<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TeachMe\Entities\TicketVote;
use Faker\Factory as Faker;

class TickeVoteTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	     
             $this->createTickeVote(50);
		 
	}

  

     private function createTickeVote($total)
    {
       $faker =Faker::create();
	      for ($i=1; $i <=$total; $i++)
	      {

	      	TicketVote::create([
               'user_id'=> rand(1,51),
               'ticket_id'=> rand(1,51)

	      		]);
	      }

    }




}
