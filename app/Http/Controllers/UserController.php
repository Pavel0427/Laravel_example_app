<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = "Avel Panaligan";
        return view('user.index', ['name' => $name]);
    }

    public function show($id)
    {
        $idnum = $id;
        return view('user.identify')->with('id', $idnum);
    }

    public function another()
    {
        $another = "another";
        return view('user.another', compact('another'));
    }
}
