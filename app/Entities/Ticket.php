<?php namespace TeachMe\Entities;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 use TeachMe\Entities\Ticket;
// use Faker\Factory as Faker;



class Ticket extends Model {
    protected $fillable = [];
	protected $table = 'tickets';

}
