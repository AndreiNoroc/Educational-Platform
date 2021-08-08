<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index()
    {
        return view('Forum.forum')->with('topics', Topics::all());
    }

    public function show(Topics $topic)
    {
        return view('Forum.show')->with('topics', $topic);
    }

    public function create() {
        return view('Forum.create');
    }

    public function store()
    {
        $em = session('username');

        \request() -> validate([
            'username' => 'required|in:'.$em,
            'title' => 'required|min:6|max:30|',
            'text' => 'required|min:12|max:300'
        ]);

        $data = request()->all();

        $topic = new Topics();
        $topic->username = $data['username'];
        $topic->title = $data['title'];
        $topic->text = $data['text'];

        $topic->save();

        session()->flash('success', 'Topic created!');

        return redirect('/forum');
    }

    public function edit(Topics $topic)
    {
        return view("Forum.edit")->with('topic', $topic);
    }

    public function update(Topics $topic)
    {
        $em = session('username');

        \request() -> validate([
            'username' => 'required|in:'.$em,
            'title' => 'required|min:6|max:30|',
            'text' => 'required|min:12|max:300'
        ]);

        $data = \request()->all();

        $topic->username = $data['username'];
        $topic->title = $data['title'];
        $topic->text = $data['text'];
        $topic->save();

        session()->flash('success', 'Topic updated!');

        return redirect('/forum');
    }

    public function destroy(Topics $topic)
    {
        $topic->delete();

        session()->flash('success', 'Topic deleted!');

        return redirect('/forum');
    }
}
