@extends('frontend/layouts/app')

@section('content')

<div>
    <livewire:search-dropdown>

        <div class="popular-movies">
            <h6 class="font-weight-bold text-uppercase">Popular movies</h6>

            <div class="grid-container">
                <div class="grid-row">

                    @foreach($popularMovies as $movie)
                    <div class="movie" mt-8>
                        <a href="{{ route('show', $movie['id']) }}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w154/'.$movie['poster_path'] }}" alt="poster">
                        </a>
                        <a href="{{ route('show', $movie['id']) }}" class="text-lg text-white mt-1">{{ $movie['title'] }}</a>
                        <div class="movie-info items-center text-secondary small">
                            <svg class="star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="18px" height="18px">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                <path d="M0 0h24v24H0z" fill="none" /></svg>
                            <span class="text-white">{{ $movie['vote_average'] * 10 .'%' }}</span>
                            <span class="text-white">|</span>
                            <span class="text-white">{{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        </div>
                        <div class="small text-secondary">
                            @foreach($movie['genre_ids'] as $genre)
                            {{ $genres->get($genre) }}@if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</div>
@endsection