<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PruebaController
{

    public function __invoke()
    {


        $posts = [

            ['title' => 'first post'],
            ['title' => 'second post'],
            ['title' => 'third post'],
            ['title' => 'fourth post'],
            ['title' => 'fifth post'],
            ['title' => 'sixth post']

        ];
        return view('pruebas', ['posts' => $posts]);
    }
    public function index()
    {


        $posts = [

            ['title' => 'first post'],
            ['title' => 'second post'],
            ['title' => 'third post'],
            ['title' => 'fourth post'],
            ['title' => 'fifth post'],
            ['title' => 'sixth post']

        ];
        return view('pruebas', ['posts' => $posts]);
    }

    public function indexDB()
    {
        $postsDB = DB::table('clinics')->get();

        return view('pruebas', ['postsDB' => $postsDB]);
    }
}
