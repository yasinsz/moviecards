@extends('frontend/layouts/app')

@section('content')

<div class="container">
    <form class="tile" method="POST" action="{{ route('frontend.home.store') }}">
        @csrf

        <h3>Create a movie card</h3>

        <div class="form-group">
            <input type="text" required="required" @error('name') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}">
            <label class="control-label" for="input">Movie title</label><i class="bar"></i>
            @error('title')
            <p class="invalid-feedback">{{ $errors->first('title') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" required="required" @error('rating') is-invalid @enderror" rows="3" name="rating">{{ old('rating') }}</input>
            <label class="control-label" for="input">Rating</label><i class="bar"></i>
            @error('rating')
            <p class="invalid-feedback">{{ $errors->first('rating') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" required="required" @error('date') is-invalid @enderror" type="text" name="date" value="{{ old('date') }}">
            <label class="control-label" for="input">Year</label><i class="bar"></i>
            @error('date')
            <p class="invalid-feedback">{{ $errors->first('date') }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" required="required" @error('genre') is-invalid @enderror" type="text" name="genre" value="{{ old('genre') }}">
            <label class="control-label" for="input">Genre</label><i class="bar"></i>
            @error('genre')
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
            <input type="file">
        </div>


        <div class="button-container mb-5">
            <button class="button" type="submit"><span>Save</span></button>
        </div>
</div>
</form>
@endsection