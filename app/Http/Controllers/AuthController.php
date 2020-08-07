<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function me()
    {
        return [
            "NIS" => 3103118095,
            "NAME" => "Muhammad Raihan",
            "GENDER" => "Laki-laki",
            "PHONE" => 6289510506010,
            "CLASS" => "XII RPL 3"
        ];
    }
}
