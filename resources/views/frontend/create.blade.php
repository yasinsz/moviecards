@extends('frontend/layouts/app')

@section('content')

<div class="container">
    <form class="tile create-form" method="POST" action="{{ route('frontend.home.store') }}" enctype="multipart/form-data">
        @csrf

        <h4 class="text-white mt-1">Create a movie card</h4>

        <div class="form-group">
            <input type="text" required="required" @error('name') is-invalid @enderror" type="text" name="title" value="">
            <label class="control-label" for="input">Movie title</label><i class="bar"></i>
            @error('title')
            <p class="invalid-feedback">{{ $errors->first('title') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" required="required" @error('average_voting') is-invalid @enderror" rows="3" name="vote_average">{{ old('vote_average') }}</input>
            <label class="control-label" for="input">Rating</label><i class="bar"></i>
            @error('vote_average')
            <p class="invalid-feedback">{{ $errors->first('vote_average') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" required="required" @error('release_date') is-invalid @enderror" type="text" name="release_date" value="{{ old('release_date') }}">
            <label class="control-label" for="input">Year</label><i class="bar"></i>
            @error('release_date')
            <p class="invalid-feedback">{{ $errors->first('release_date') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" required="required" @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}">
            <label class="control-label" for="input">Genre</label><i class="bar"></i>
            @error('name')
            <p class="invalid-feedback">{{ $errors->first('genre') }}</p>
            @enderror
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" checked="checked" /><i class="helper"></i>Watched?
            </label>
        </div>

        <div class="form-group">
            <label class="control-label" for="input">Image</label><i class="bar"></i>
            <img class="mt-5" src="https://via.placeholder.com/92x136" />
            <input type="file" name="poster_path">
        </div>


        <div class="button-container mb-5">
            <button class="button" type="submit"><span>Save</span></button>
        </div>
</div>
</form>
@endsection