<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.list', [
            'cards' => Card::paginate(4),
        ]);
    }

    public function currentPage()
    {
        return view('frontend.list', [
            'cards' => Card::currentPage()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Card $card)
    {

        $data = $this->validateData();

        // if ($request->has('poster_path')) {
        //     $path = $request->get('poster_path');
        //     // $path->urlencode();
        //     $data['poster_path'] = $path;
        //     //$data->save();
        // }

        $card->create($data);

        return redirect()->route('frontend.home');
    }







    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookmark(Request $request, Card $card)
    {



        $card->bookmarked = true;

        $card->save();




        return view('frontend.bookmarks', [
            'cards' => Card::where('bookmarked', true),
        ]);
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }

    private function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'vote_average' => 'required',
            'release_date' => 'required',
            'name' => 'required',
            'poster_path' => 'required'
        ]);
    }
}
