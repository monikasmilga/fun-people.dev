<?php

namespace App\models;


class FunPeople extends CoreModel
{
    protected $table = 'fun_people';

    protected $fillable = ['id', 'city_id', 'name', 'age' ];
}
