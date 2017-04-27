<?php

namespace App\models;


class FunHobbies extends CoreModel
{
    protected $table = 'fun_hobbies';

    protected $fillable = ['id', 'name', 'description'];
}
