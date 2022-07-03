<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    protected $table = 'humans';
    protected  $primaryKey = "human_id";
    protected $fillable = ['human_name', 'human_surname', 'human_password'];
}
