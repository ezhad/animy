<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{

    public function index()
    {
//        $data = array(
//            'title' => 'Series',
//            'shows' =>[
//                [
//                    'id' => 1,
//                    'name' => 'Mechamato',
//                    'seasonCount' => 4,
//                    'description' => 'This is mechamato',
//
//                ],
//                [
//                    'id' => 2,
//                    'name' => 'Upin & Ipin',
//                    'seasonCount' => 15,
//                    'description' => 'This is upin & Ipin',
//                ]
//            ],
//
//        );
//        $seriesShow = Arr::first($data['seriesShows'], fn($seriesShow) => $seriesShow['id']==$id);

        $movies = Movie::all();

        return view('pages.movies')->with('movies', $movies);
    }
    public function show($id)
    {
//        $data = [
//            'title' => 'Series',
//            'shows' => [
//                [
//                    'id' => 1,
//                    'name' => 'Mechamato',
//                    'seasonCount' => 4,
//                    'description' => 'This is mechamato'
//                ],
//                [
//                    'id' => 2,
//                    'name' => 'Upin & Ipin',
//                    'seasonCount' => 15,
//                    'description' => 'This is upin & Ipin'
//                ]
//            ]
//        ];

        // find the selected show by ID
        $movie = Movie::findOrFail($id);

        if (! $movie) {
            abort(404);
        }

        return view('pages.movies-show')->with('movie', $movie);
    }
}
