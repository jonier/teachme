<?php
/**
 * Created by PhpStorm.
 * User: Jonier
 * Date: 2016-07-19
 * Time: 4:07 PM
 */
namespace TeachMe\Entities;


use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    public static function getClass(){
        return get_class(new static);
    }

}