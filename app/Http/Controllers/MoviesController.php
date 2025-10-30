<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Series',
            'shows' =>[
                [
                    'id' => 1,
                    'name' => 'Mechamato',
                    'seasonCount' => 4,
                    'description' => 'This is mechamato',

                ],
                [
                    'id' => 2,
                    'name' => 'Upin & Ipin',
                    'seasonCount' => 15,
                    'description' => 'This is upin & Ipin',
                ]
            ],

        );
//        $seriesShow = Arr::first($data['seriesShows'], fn($seriesShow) => $seriesShow['id']==$id);


        return view('pages.movies')->with($data);
    }
    public function show($id)
    {
        $data = [
            'title' => 'Series',
            'shows' => [
                [
                    'id' => 1,
                    'name' => 'Mechamato',
                    'seasonCount' => 4,
                    'description' => 'This is mechamato'
                ],
                [
                    'id' => 2,
                    'name' => 'Upin & Ipin',
                    'seasonCount' => 15,
                    'description' => 'This is upin & Ipin'
                ]
            ]
        ];

        // find the selected show by ID
        $selectedShow = collect($data['shows'])->firstWhere('id', $id);

        if (! $selectedShow) {
            abort(404);
        }

        return view('pages.series-show', [
            'show' => $selectedShow
        ]);
    }
}
