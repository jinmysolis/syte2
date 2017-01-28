<?php namespace TeachMe\Entities;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use TeachMe\Entities;

use TeachMe\Entities\Entity;
use TeachMe\Entities\TicketCommet;
use TeachMe\Entities\Ticket;
// use Faker\Factory as Faker;



class Ticket extends Entity {
   
   protected $fillable = ['title', 'link', 'status'];
   protected $table = 'tickets';
   
   
   public function author()
   {
       return $this->belongsTo(User::getClass(),'user_id');
   }

   

   public function comments()
   {
       return $this->hasMany(TicketCommet::getClass());
   }
   
   
   public function voters(){
       return $this->belongsToMany(User::getClass(),'ticket_votes');
   }
   

}
