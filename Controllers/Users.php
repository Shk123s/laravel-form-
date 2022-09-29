<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    function index(Request $request)
    {var_dump($request->input());}
}
