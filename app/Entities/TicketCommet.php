<?php namespace TeachMe\Entities;

use Illuminate\Database\Eloquent\Model;
use TeachMe\Entities\Entity;

class TicketCommet extends Entity {

    public function ticket ()
    {
        return $this->belongsTo(Ticket::getClass());
    }
    
    public function user()
    {
        return $this->belongsTo(User::getClass());
    }
    
    

}
