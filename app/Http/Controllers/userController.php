<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function show($id)
    {
        $age = 10;
        $info = ["muhammad", "faraz", "2", "muhammadfaraz991@gmail.com"];
        return view('profile', ['myid' => $id, 'info' => $info, 'age' => $age]);
    }
    function welcome()
    {
        $name = request('name');
        return $name;
    }
}
