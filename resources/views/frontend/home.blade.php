@extends('frontend/layouts/app')

@section('content')


<div class="card-container">
    @foreach($cards as $card)
    <div class="card">
        <span class="card-bookmark"></span>
        <img class="card-poster" src="{{ $card->imageUrl() }}"></img>
        <a class="card-title">{{ $card->title }}</a>
        <ul class="card-info">
            <li>{{ $card->rating }}</li>
            <li>{{ $card->date }}</li>
            <li>{{ $card->genre }}</li>
        </ul>
    </div>
    @endforeach
</div>


@endsection