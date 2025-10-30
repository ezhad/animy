<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PagesController extends Controller
{
    public function home(){
        $title = 'Home';
//        return view('pages.home', compact('title'));
        return view('pages.home')->with('title', $title);
    }

    public function genre(){
        $data = array(
            'title' => 'Genre',
            'genres' => ['Adventure', 'Comedy', 'Fantasy','Sport','Slice of Life','Drama','Horror']
        );

        return view('pages.genre')->with($data);
    }

    public function age(){
        $title = 'Age';
        return view('pages.age')->with('title', $title);
    }

}
