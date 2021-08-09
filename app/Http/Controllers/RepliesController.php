<?php

namespace App\Http\Controllers;

use App\Models\Replies;
use App\Models\Topics;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function create(Topics $topic)
    {
        return view('Forum.reply')->with('topics', $topic);
    }

    public function store(Topics $topic)
    {
        $em = session('username');

        \request() -> validate([
            'username' => 'required|in:'.$em,
            'text' => 'required|min:12|max:300'
        ]);

        $data = request()->all();
        $reply = new Replies();
        $reply->parent_id = $topic->id;
        $reply->username = $data['username'];
        $reply->text = $data['text'];

        $reply->save();

        return view('Forum.show')->with(['topics' => $topic, 'replies' => Replies::all()]);
    }

    public function edit(Replies $reply)
    {
        return view("Forum.edit-reply")->with('reply', $reply);
    }

    public function update(Replies $reply)
    {
        $em = session('username');

        \request() -> validate([
            'username' => 'required|in:'.$em,
            'text' => 'required|min:12|max:300'
        ]);

        $data = \request()->all();

        $reply->username = $data['username'];
        $reply->text = $data['text'];
        $reply->save();

        $topic = Topics::find($reply->parent_id);

        return view('Forum.show')->with(['topics' => $topic, 'replies' => Replies::all()]);
    }

    public function destroy(Replies $reply)
    {
        $topic = Topics::find($reply->parent_id);

        $reply->delete();

        return view('Forum.show')->with(['topics' => $topic, 'replies' => Replies::all()]);
    }

}
