<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('superuser.index',[
            'pageTitle' => 'Мои Посты'
        ]);
    }

    public function create(){
        return view('superuser.create',[
            'pageTitle' => 'Мои Посты'
        ]);
    }
}
