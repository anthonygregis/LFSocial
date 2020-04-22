@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row p-3 mt-3 rounded" style="background-color: grey;">
        <div class="col-12">
            <div class="row d-flex">
                <div class="col-1 pl-5">
                    <img src="{{ $post->user->profile->image }}" width="45px" height="45px" alt="" class="rounded-circle">
                </div>
                <div class="col-11">
                    <a href="/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->name }}</span></a>
                    <div>{{ $post->created_at->diffForHumans() }} · <img class="p-1" src="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/axobuTi734a.png" alt="Public" height="18" width="18"></div>
                </div>
            </div>
            <div class="row pl-5 pr-5 pt-3">
                <div class="pt-2">{{ $post->body }}</div>
                <div class="pt-2"><img src="{{ $post->image }}" class="w-100"></div>

            </div>
            <div class="pt-4 pl-4"><img class="j1lvzwm4" height="18" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e" width="18"> 8</div>
            <hr>
            <div class="row pl-5 pr-5">
                <div class="col-4"><center><a style="color: black;" class="nav-link" href="#"><img class="" src="/image/like.png" alt="" height="16" width="16"> Like</center></a></div>
                <div class="col-4"><center><a style="color: black;" class="nav-link" href="/p/{{ $post->id }}"><img src="/image/comment.png" alt="" height="16" width="16"> Comment</center></a></div>
                <div class="col-4"><center><a style="color: black;" class="nav-link" href="#"><img src="/image/share.png" alt="" height="16" width="16"> Share</center></a></div>
            </div>
            <hr>
            <div class="row pl-4 pt-2 pr-5 d-flex">
                <div class="col-1"><img src="{{ $post->user->profile->image }}" width="30px" height="30px" alt="" class="rounded-circle"></div>
                <input class="col-11 rounded" placeholder="Write a comment.." type="text">
            </div>
        </div>

    </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex py-4 justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
