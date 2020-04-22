<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$users = $user->all();

        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'body' => 'required',
            'image' => [
                'URL',
                'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?.(?:jpg|gif|png)$/',
                'nullable'],
        ]);

        auth()->user()->posts()->create($data);

        return redirect('/' . auth()->user()->id);
    }

    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
