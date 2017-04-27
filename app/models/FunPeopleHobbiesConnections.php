<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class FunPeopleHobbiesConnections extends CoreModel
{
    protected $table = 'fun_people_hobbies_connections';

    protected $fillable = ['id', 'people_id', 'hobby_id'];
}
