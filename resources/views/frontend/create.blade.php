@extends('frontend/layouts/app')

@section('content')

<div class="container">
    <form class="tile" method="POST" action="{{ route('frontend.home.store') }}">
        @csrf

        <h3>Create a movie card</h3>

        <div class="form-group">
            <label class="control-label">Title</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}">
            @error('title')
            <p class="invalid-feedback">{{ $errors->first('title') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="control-label">Rating</label>
            <input class="form-control @error('rating') is-invalid @enderror" rows="3" name="rating">{{ old('rating') }}</input>
            @error('rating')
            <p class="invalid-feedback">{{ $errors->first('rating') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="control-label">Date</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" name="date" value="{{ old('date') }}">
            @error('date')
            <p class="invalid-feedback">{{ $errors->first('date') }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label class="control-label">Genre</label>
            <input class="form-control @error('msrp') is-invalid @enderror" type="text" name="genre" value="{{ old('genre') }}">
            @error('genre')
            <p class="invalid-feedback">{{ $errors->first('genre') }}</p>
            @enderror
        </div>
        <!-- <div class="form-group">
            <input type="text" required="required" />
            <label class="control-label" for="input">Movie title</label><i class="bar"></i>
        </div>

        <div class="form-group">
            <input type="text" required="required" />
            <label class="control-label" for="input">Year</label><i class="bar"></i>
        </div>

        <div class="form-group">
            <input type="text" required="required" />
            <label class="control-label" for="input">Genre</label><i class="bar"></i>
        </div>

        <div class="form-group">
            <input type="text" required="required" />
            <label class="control-label" for="input">IMDB Rating</label><i class="bar"></i>
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox" checked="checked" /><i class="helper"></i>Watched?
            </label>
        </div> -->


        <div class="button-container">
            <button class="button" type="submit"><span>Save</span></button>
        </div>
</div>
</form>
@endsection