@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label"><strong>Title</strong></label>

                    <input id="title"
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        name="title"
                        value="{{ old('title') ?? $user->profile->title }}"
                        autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label"><strong>Description</strong></label>

                    <input id="description"
                        type="text"
                        class="form-control @error('description') is-invalid @enderror"
                        name="description"
                        value="{{ old('description') ?? $user->profile->description }}"
                        autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label"><strong>Profile Image</strong></label>

                    <input id="image"
                        type="text"
                        class="form-control @error('image') is-invalid @enderror"
                        name="image"
                        value="{{ old('image') }}"
                        autocomplete="image" autofocus>

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save Profile</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
