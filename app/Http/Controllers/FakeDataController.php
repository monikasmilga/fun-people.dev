<?php


namespace App\Http\Controllers;


class FakeDataController extends Controller
{

    public function generateCity(int $count=20)
    {

        dd($count);
    }
}