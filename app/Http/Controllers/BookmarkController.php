<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Card;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{

    public function index()
    {

        return view('frontend.list', [
            'cards' => Card::where('bookmarked', true)->paginate(4)
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookmark(Request $request, Card $card)
    {
        $card->bookmarked = !$card->bookmarked;

        $card->save();

        return redirect()->route('frontend.bookmarks.index');
    }
}
