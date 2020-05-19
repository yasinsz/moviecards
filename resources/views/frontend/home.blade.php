@extends('frontend/layouts/app')

@section('content')


<div class="card-container">
    @foreach($cards as $card)
    <div class="card">
        <span class="card-bookmark"></span>
        <img class="card-poster" src="{{ $card->poster_path }}"></img>
        <a class="card-title">{{ $card->title }}</a>
        <ul class="card-info">
            <li>{{ $card->vote_average }}</li>
            <li>{{ $card->release_date }}</li>
            <li>{{ $card->name }}</li>
        </ul>
    </div>
    @endforeach
    <div class="pagination justify-content-center">
        {{ $cards->links() }}
    </div>
</div>

@endsection