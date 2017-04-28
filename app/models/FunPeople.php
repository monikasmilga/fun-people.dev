<?php

namespace App\models;


class FunPeople extends CoreModel
{
    protected $table = 'fun_people';

    protected $fillable = ['id', 'city_id', 'name', 'age' ];

    public function hobbies ()
    {
        return $this->hasMany(FunHobbies::class, 'hobby_id', 'id');
    }
}
