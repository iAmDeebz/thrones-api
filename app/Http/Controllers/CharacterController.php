<?php

namespace App\Http\Controllers;

class CharacterController extends Controller
{
    public function getOne(int $id): int
    {
        return $id;
    }
}
