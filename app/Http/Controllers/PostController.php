<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
    {
        return view('posts');
    }

    public function fetch()
    {
        return response()->json([
            'posts' => Post::latest()->get()
        ], Response::HTTP_OK);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
       return response()->json([$request->all()]);
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}
