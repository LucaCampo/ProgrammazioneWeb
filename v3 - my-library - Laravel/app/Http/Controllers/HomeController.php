<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome() {
        $countBooks = 4;
        $countAuthors = 2;
        return  view('index', [
            'countBooks' => $countBooks,
            'countAuthors'=> $countAuthors
        ]);
    }

    public function sayHello($saluto = "Ciao"){
        return $saluto;
    }
}
