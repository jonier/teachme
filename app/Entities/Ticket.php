<?php

namespace TeachMe\Entities;

//use Illuminate\Database\Eloquent\Model;

class Ticket extends Entity
{
    public function author(){
        return $this->belongsTo(User::getClass());
    }
    /**
     * Si miramos la relacion de la base de datos,
     * esto quiere decir que un tickete tiene muchos comentarios(TicketComment).
     *
     * Entonces el nombre del metodo debe llevar parte del nombre de la TABLA CON LA CUAL SE RELACIONARA.
     * En este caso sera el nombre 'comments' de la tabla 'ticket_comments'.
     *
     * El nombre del metodo sera 'hasMany'
     */

    public function comments(){
        return $this->hasMany(TicketComment::getClass());
    }


    public function voters(){
        return $this->belongsToMany(User::getClass(), 'ticket_votes');
    }

    public function getOpenAttribute(){
        return $this->status == 'open';
    }

}
