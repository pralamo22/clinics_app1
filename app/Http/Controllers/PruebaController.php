<?php

namespace App\Http\Controllers;


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
    public function method()
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
}
