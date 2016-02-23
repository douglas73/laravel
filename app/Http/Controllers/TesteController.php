<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TesteController extends Controller
{

    function lista()
    {
        $usuarios = \App\User::orderBy('name', 'asc')->get();

        $teste = factory(\App\User::class, 3)->make();
        foreach($usuarios as $usuario)
        {
            echo "<p>Nome: $usuario->name</p>";
        }

        dd($teste);
    }


}
