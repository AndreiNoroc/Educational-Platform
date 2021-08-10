<?php

namespace App\Http\Controllers;

use App\Models\Replies;
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

    public function store()
    {
        $em = session('username');

        \request() -> validate([
            'title' => 'required|min:6|max:30|',
            'text' => 'required|min:12|max:300'
        ]);

        $data = request()->all();

        $topic = new Topics();
        $topic->username = $em;
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
            'title' => 'required|min:6|max:30',
            'text' => 'required|min:12|max:300'
        ]);

        $data = \request()->all();

        $topic->username = $em;
        $topic->title = $data['title'];
        $topic->text = $data['text'];
        $topic->save();

        session()->flash('success', 'Topic updated!');

        return redirect('/forum');
    }

    public function destroy(Topics $topic)
    {

        $replies = Replies::all();

        foreach($replies as $reply) {
            if($topic->id == $reply->parent_id) {
                $reply->delete();
            }
        }

        $topic->delete();

        session()->flash('success', 'Topic deleted!');

        return redirect('/forum');
    }
}
