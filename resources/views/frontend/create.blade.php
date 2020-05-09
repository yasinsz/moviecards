@extends('frontend/layouts/app')

@section('content')

<div class="container">
    <form>
        <h3>Create a movie card</h3>

        <div class="form-group">
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
        </div>
    </form>
    <div class="button-container">
        <button class="button" type="button"><span>Submit</span></button>
    </div>
</div>

@endsection