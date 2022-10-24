<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $threads = Thread::all();
        return view('threads.index',compact('threads'));
    }

    public function create(){
        return view('threads.create');
    }

    public function store(Request $request)
    {
        $thread = Thread::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect($thread->path());
    }

    public function show($categoryId, Thread $thread)
    {
        return view('threads.show', compact('thread'));
    }
}
