<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\User;
use App\Models\Option;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\CreatePollRequest;

class PollController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('poll.create', compact('categories'));
    }
    public function store(CreatePollRequest $request)
    {
        $poll = new Poll();
        $poll->title = $request->get('title');
        $poll->category = $request->get('category');
        $poll->start_at = $request->get('start_at');
        $poll->end_at = $request->get('end_at');
        $poll->save();

        foreach ($request->options as $option) {
            $poll->options()->create([
                'content' => $option['content'],
            ]);
        }

        return redirect()->route('poll.create')->with('success', 'Poll created successfully!');
    }

    public function list(Poll $poll)
    {
        $polls = Poll::with('options')->get();
        return view('poll.list', compact('polls'));
    }

    public function filterByCategory($id)
    {
        $categories = Category::all();

        $polls = Poll::where('category', $id)->get();
        //dd($id);
        return view('poll.index', compact('polls', 'categories'));
    }
    public function edit($id)
    {
        $poll = Poll::with('options')->findOrFail($id);
        $categories = Category::all();

        return view('poll.edit', compact('poll', 'categories'));
    }
    public function update(CreatePollRequest $request, $id)
    {
        $poll = Poll::findOrFail($id);
        $poll->title = $request->get('title');
        $poll->category = $request->get('category');
        $poll->start_at = $request->get('start_at');
        $poll->end_at = $request->get('end_at');
        $poll->save();

        // Update or add options
        foreach ($request->options as $index => $option) {
            if (isset($option['id'])) {
                // Update existing option
                $pollOption = Option::findOrFail($option['id']);
                $pollOption->content = $option['content'];
                $pollOption->save();
            } else {
                // Create new option
                $poll->options()->create([
                    'content' => $option['content'],
                ]);
            }
        }

        return redirect()->route('poll.list')->with('success', 'Poll updated successfully!');
    }
    public function destroy($id)
    {
        $poll = Poll::findOrFail($id);
        $poll->options()->delete(); // Delete associated options
        $poll->delete(); // Delete the poll

        return redirect()->route('poll.list')->with('success', 'Poll deleted successfully!');
    }
}
