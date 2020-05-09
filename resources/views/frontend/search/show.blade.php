@extends('frontend/layouts/app')

@section('content')

<div class="movie-info">
    <div class="container-movie-info">
        <img src="https://images-na.ssl-images-amazon.com/images/I/81iwrVUc5GL._AC_SY741_.jpg" width="140px" height="200px" alt="">
        <h6>Parasite (2019)</h6>
        <div class="flex items-center text-secondary small">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" width="18px" height="18px">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                <path d="M0 0h24v24H0z" fill="none" /></svg>
            <span>85%</span>
            <span>|</span>
            <span>Feb 20, 2020</span>
            <span>|</span>
            <span>Action, Thriller, Drama</span>
        </div>
        <p>Lorem ipsum, doloplicabo veritanctio, blanditiis amet dolor id veniam mollitia nemo minus nihil cum sequi, provident et ea. Sit dolore vitae quasi id necessitatibus ut error suscipit beatae laudantium?</p>
        <div>
            <p class="semi-bold">Featured Cast</p>
            <div>
                <div>Boong Joon-ho</div>
                <div>Screenplay, Director, Story</div>
            </div>

            <div>
                <div>Han Jin-won</div>
                <div>Screenplay</div>
            </div>

            <div>
                <button>
                    <svg>
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" /></svg>
                    <span class="ml-2">Play Trailer</span>
                </button>
            </div>


        </div>
    </div>
</div>



@endsection