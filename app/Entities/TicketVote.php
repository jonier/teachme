<?php
/**
 * Esta tabla es una tabla pivote o intermediaria entre la tabla ticket y user, para decir que un usuario pude
 * votar por muchos ticketes o viseversa, que un tiquete puede ser votado por muchos usuarios.
 */
namespace TeachMe\Entities;

//use Illuminate\Database\Eloquent\Model;

class TicketVote extends Entity
{
    /**
     * Si miramos la relacion de la base de datos,
     * esto quiere decir que un tickete ha sido votado por muchos usuarios.
     *
     * Entonces el nombre del metodo debe llevar le nombre de la TABLA CON LA CUAL SE RELACIONARA.
     * En este caso sera el nombre de la tabla 'ticket'.
     *
     * El nombre del metodo sera 'belongsTo'
     */

    public function ticket(){
        return $this->belongsTo(Ticket::getClass());
    }

    /**
     * Si miramos la relacion de la base de datos,
     * esto quiere decir que un tickete ha sido votado por muchos usuarios.
     *
     * Entonces el nombre del metodo debe llevar le nombre de la TABLA CON LA CUAL SE RELACIONARA.
     * En este caso sera el nombre de la tabla 'user'.
     *
     * El nombre del metodo sera 'belongsTo'
     */

    public function user(){
        return $this->belongsTo(User::getClass());
    }
}
