@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            {{ $post->body }}
            <img src="{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <h2>
                <img src="{{ $post->user->profile->image }}" width="45px" alt="" class="rounded-circle">
                <strong>
                    <a href="/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->name }}</span>
                    </a>
                </strong>
                <button class="btn btn-primary">Follow</button>
            </h2>
            {{ $post->user->posts->count() }} Posts | 2.5k Followers | 100 Following
            <hr>
            <strong>{{ $post->user->profile->title }}</strong>
            <br>{{ $post->user->profile->description }}
        </div>
    </div>
</div>
@endsection
