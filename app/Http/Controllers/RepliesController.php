<?php

namespace App\Http\Controllers;

use App\Models\Replies;
use App\Models\Topics;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function store(Topics $topic)
    {
        $em = session('username');

        \request() -> validate([
            'text' => 'required|min:3|max:300',
        ]);

        $data = request()->all();
        $reply = new Replies();
        $reply->parent_id = $topic->id;
        $reply->username = $em;
        $reply->text = $data['text'];

        $reply->save();

        session()->flash('success_reply', 'Reply created!');

        return back()->with('topics', $topic);
    }

    public function update(Replies $reply)
    {
        $em = session('username');

        \request() -> validate([
            'text' => 'required|min:3|max:300'
        ]);

        $data = \request()->all();

        $reply->username = $em;
        $reply->text = $data['text'];
        $reply->save();

        $topic = Topics::find($reply->parent_id);

        session()->flash('success_reply', 'Reply updated!');

        return back()->with(['topics' => $topic, 'replies' => Replies::all()]);
    }

    public function destroy(Replies $reply)
    {
        $topic = Topics::find($reply->parent_id);

        $reply->delete();

        session()->flash('success_reply', 'Reply deleted!');

        return back()->with(['topics' => $topic, 'replies' => Replies::all()]);
    }

}
