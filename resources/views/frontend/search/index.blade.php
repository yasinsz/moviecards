@extends('frontend/layouts/app')

@section('content')

<!-- <section class="webdesigntuts-workshop">
    <form action="" method="">
        <input type="search" placeholder="Search for a movie title?">
        <button>Search</button>
    </form>
</section> -->

<div>

    <livewire:search-dropdown>

        <div class="popular-movies">
            <h6>Popular movies</h6>

            <div class="grid-container">
                <div class="grid-row">

                    @foreach($popularMovies as $movie)
                    <div class="movie" mt-8>
                        <a href="{{ route('show', $movie['id']) }}">
                            <img src="{{ 'https://image.tmdb.org/t/p/w154/'.$movie['poster_path'] }}" alt="poster">
                        </a>
                        <div class="mt-2"></div>
                        <a href="{{ route('show', $movie['id']) }}" class="text-lg mt-2 text-secondary">{{ $movie['title'] }}</a>
                        <div class="flex items-center text-secondary small">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="18px" height="18px">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                <path d="M0 0h24v24H0z" fill="none" /></svg>
                            <span>{{ $movie['vote_average'] * 10 .'%' }}</span>
                            <span>|</span>
                            <span>{{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        </div>
                        <div class="small">
                            @foreach($movie['genre_ids'] as $genre)
                            {{ $genres->get($genre) }}@if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>




            <!-- imput movie api -->







        </div>






</div>

@endsection