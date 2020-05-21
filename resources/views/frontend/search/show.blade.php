@extends('frontend/layouts/app')

@section('content')



<div class="movie-info">
    <div class="container-movie-info">
        <img src="{{ 'https://image.tmdb.org/t/p/w154/'.$movie['poster_path'] }}" alt="">
        <h4 class="mt-2 mb-2 font-weight-bold text-white">{{ $movie['title'] }}</h4>
        <div class="flex items-center text-secondary small">
            <svg class="star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="18px" height="18px">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                <path d="M0 0h24v24H0z" fill="none" /></svg>
            <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
            <span class="mx-2">|</span>
            <span>{{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
            <span class="mx-2">|</span>
            <span>
                @foreach($movie['genres'] as $genre)
                {{ $genre['name'] }}@if (!$loop->last), @endif
                @endforeach
            </span>
        </div>
        <p class="mt-2 text-white">{{ $movie['overview'] }}</p>
        <div>
            <h5 class="semi-bold mt-4 text-white">Featured Cast</h5>
            <div class="feature-cast text-white">
                @foreach($movie['credits']['crew'] as $crew)
                @if ($loop->index < 2) <div class="text-white">{{$crew['name']}}</div>
            <div class="text small text-secondary">{{$crew['job']}}</div>
        </div>
        @endif

        @endforeach

        <div>
            @if (count($movie['videos']['results']) > 0)
            <a href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}">
                <button type="submit" class="play btn btn-outline-success mt-4 text-center">Play Trailer</button>
            </a>
            @endif

            <form class="add-form" method="POST" action="{{ route('frontend.home.store', [
                  'title' => $movie['title'],
                  'vote_average' => $movie['vote_average'],
                  'release_date' => $movie['release_date'],
                  'name' => $genre['name'],
                  'poster_path' => 'https://image.tmdb.org/t/p/w154/'.$movie['poster_path']
                ]) }}">
                @csrf
                <button type="submit" class="card-add btn btn-outline-danger mb-4 text-center">Create a Card</button>
            </form>
        </div>

        <!-- movie cast starts here  -->


        <div class="cast-container">

            <h5 class="semi-bold text-white">Cast</h5>

            <div class="grid-cast">
                @foreach($movie['credits']['cast'] as $cast)
                @if ($loop->index < 4) <div class="cast-card">
                    <img src="{{ 'https://image.tmdb.org/t/p/w154/'.$cast['profile_path'] }}" alt="actor">
                    <div class="font-weight-bold mt-1 text-white">{{ $cast['name'] }}</div>

                    <div class="text small text-secondary">
                        {{ $cast['character'] }}
                    </div>
            </div>

            @endif
            @endforeach
        </div>
    </div>
    <!-- end of movie-cast -->

    <div class="movie-images mt-3">

        <div class="image-container">
            <h5 class="mb-2 text-white">Images</h5>
            <div class="grid-images">
                @foreach($movie['images']['backdrops'] as $image)
                @if ($loop->index < 4) <a href="#">
                    <img class="movie-images" src="{{ 'https://image.tmdb.org/t/p/w300/'.$image['file_path'] }}" width="330px" alt="movie-image">
                    </a>
                    @endif
                    @endforeach
            </div>
        </div>
    </div>






</div>
</div>








<?php /*




                <template x-if="isOpen">
                    <div style="background-color: rgba(0, 0, 0, .5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button @click="isOpen = false" @keydown.escape.window="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                        <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
                @endif


            </div>

        </div>
    </div>
</div> <!-- end movie-info -->

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($movie['cast'] as $cast)
            <div class="mt-8">
                <a href="{{ route('actors.show', $cast['id']) }}">
                    <img src="{{ $cast['profile_path'] }}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="{{ route('actors.show', $cast['id']) }}" class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</a>
                    <div class="text-sm text-gray-400">
                        {{ $cast['character'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> <!-- end movie-cast -->

<div class="movie-images" x-data="{ isOpen: false, image: ''}">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($movie['images'] as $image)
            <div class="mt-8">
                <a @click.prevent="
                                isOpen = true
                                image='{{ 'https://image.tmdb.org/t/p/original/'.$image['file_path'] }}'
                            " href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
            </div>
            @endforeach
        </div>

        <div style="background-color: rgba(0, 0, 0, .5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show="isOpen">
            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                <div class="bg-gray-900 rounded">
                    <div class="flex justify-end pr-4 pt-2">
                        <button @click="isOpen = false" @keydown.escape.window="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times;
                        </button>
                    </div>
                    <div class="modal-body px-8 py-8">
                        <img :src="image" alt="poster">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end movie-images -->

*/ ?> @endsection