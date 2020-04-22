@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add New Post</h1>
                </div>

                <div class="form-group row">
                    <label for="body" class="col-md-4 col-form-label">What are you thinking?</label>

                    <input id="body"
                        type="text"
                        class="form-control @error('body') is-invalid @enderror"
                        name="body"
                        body="body" value="{{ old('body') }}"
                        autocomplete="body"
                        autofocus>

                    @error('body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Add a picture (optional)</label>

                    <input type="url", class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" id="image" name="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>

            </div>
        </div>
    </form>

</div>
@endsection
