<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use App\Models\Option;
use App\Models\Vote;


class VoteController extends Controller
{
    public function storeVote(Request $request, Poll $poll)
    {
        if (now()->greaterThan($poll->end_at)) {
            return redirect()->back()->with('error', 'The poll has ended. You cannot submit a vote.');
        }
        $validatedData = $request->validate([
            'option_id' => 'required|exists:options,id',

        ]);
        $ipAddress = $request->ip();
        $existingVote = Vote::where('poll_id', $poll->id)
                            ->where('ip_address', $ipAddress)
                            ->first();

        if ($existingVote) {
            return redirect()->back()->with('error', 'You have already voted on this poll.');
        }
        Vote::create([
            'poll_id' => $poll->id,
            'option_id' => $validatedData['option_id'],
            'ip_address' => $ipAddress,
        ]);

        return back()->with('success', 'Thank you for your vote!');
    }
    public function showResults(Poll $poll)
    {
        $poll->load('options.votes');

        $totalVotes = $poll->votes->count();
        $options = $poll->options->map(function ($option) use ($totalVotes) {
            $optionVotes = $option->votes->count();
            $percentage = $totalVotes > 0 ? ($optionVotes / $totalVotes) * 100 : 0;
            return [
                'content' => $option->content,
                'votes' => $optionVotes,
                'percentage' => number_format($percentage, 2),
            ];
        });

        return view('vote.results', compact('poll', 'options', 'totalVotes'));
    }
    // public function pollResults(POll $poll)
    // {
    //     $poll->load('options.votes');

    //     $totalVotes = $poll->votes->count();
    //     $options = $poll->options->map(function ($option) use ($totalVotes) {
    //         $optionVotes = $option->votes->count();
    //         $percentage = $totalVotes > 0 ? ($optionVotes / $totalVotes) * 100 : 0;
    //         return [
    //             'content' => $option->content,
    //             'votes' => $optionVotes,
    //             'percentage' => number_format($percentage, 2),
    //         ];
    //     });

    //     return view('layouts.frontend.master', compact('poll', 'options', 'totalVotes'));

    // }


}
