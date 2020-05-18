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
        return view('frontend.home', [
            'cards' => Card::paginate(4),
        ]);
    }

    public function currentPage()
    {
        return view('frontend.home', [
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

        if ($request->has('image')) {
            $path = $request->file('image')->store('/cards/images', 'public');
            $data['image'] = $path;
            //$data->save();
        }

        $card->create($data);

        return redirect()->route('frontend.home');
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
            'rating' => 'required',
            'date' => 'required',
            'genre' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    }
}
