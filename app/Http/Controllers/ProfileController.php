<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donald Trump";
        $age = "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        // Set the cookie
        $cookie = cookie(
            'access_token',
            '123-XYZ',
            1, 
            '/',
            $_SERVER['http://127.0.0.1:8000/'],
            false,
            true 
        );

        return response()->json($data, 200)->cookie($cookie);
    }
}
