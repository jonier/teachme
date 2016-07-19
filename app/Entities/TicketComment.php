<?php

namespace TeachMe\Entities;

//use Illuminate\Database\Eloquent\Model;

class TicketComment extends Entity
{
    public function user(){
        return $this->belongsTo(User::getClass());
    }

    public function ticket(){
        return $this->belongsTo(Ticket::getClass());
    }

}
