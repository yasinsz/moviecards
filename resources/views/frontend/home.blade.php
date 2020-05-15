@extends('frontend/layouts/app')

@section('content')


<div class="card-container">
    @foreach($movies as $movie)
    <div class="card">
        <span class="card-bookmark"></span>
        <img class="card-poster" src="https://images-na.ssl-images-amazon.com/images/I/71wbalyU7tL._AC_SL1481_.jpg"></img>
        <a class="card-title">{{ $movie->title }}</a>
        <ul class="card-info">
            <li>{{ $movie->rating }}</li>
            <li>{{ $movie->date }}</li>
            <li>{{ $movie->genre }}</li>
        </ul>
    </div>
    @endforeach
</div>


@endsection