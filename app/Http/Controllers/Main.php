<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// db class
use Illuminate\Support\Facades\DB;


class Main extends Controller
{
    function index()
    {
        return view('index');
    }
    
    function db()
    {
        $users = DB::select('select * from users');
        foreach ($users as $user) {
            echo "$user->id) $user->name. ";
            echo "<br>";
        }
    }
}
