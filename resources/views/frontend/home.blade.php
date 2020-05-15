@extends('frontend/layouts/app')

@section('content')


<div class="card-container">
    @foreach($cards as $card)
    <div class="card">
        <span class="card-bookmark"></span>
        <img class="card-poster" src="https://images-na.ssl-images-amazon.com/images/I/71wbalyU7tL._AC_SL1481_.jpg"></img>
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