@extends('frontend/layouts/app')

@section('content')


<div class="card-container">
    @foreach($cards as $card)
    <div class="card">
        <span class="card-bookmark"></span>
        <img class="card-poster" src="{{ $card->poster_path }}"></img>
        <a class="card-title">{{ $card->title }}</a>
        <ul class="card-info">
            <li><svg class="star-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="18px" height="18px">
                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    <path d="M0 0h24v24H0z" fill="none" /></svg>{{ $card->vote_average }}</li>
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