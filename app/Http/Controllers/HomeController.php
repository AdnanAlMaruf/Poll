<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Poll;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['home']);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('layouts.backend.app');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome(): View
    {
        return view('adminHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome(): View
    {
        return view('managerHome');
    }
    public function home()
    {
        $polls = Poll::with(['options.votes'])->get();

        foreach ($polls as $poll) {
            $totalVotes = $poll->options->sum(function ($option) {
                return $option->votes->count();
            });

            $poll->options->each(function ($option) use ($totalVotes) {
                $optionVotes = $option->votes->count();
                $option->votes_count = $optionVotes; // Store vote count for chart
                $option->percentage = $totalVotes > 0 ? number_format(($optionVotes / $totalVotes) * 100, 2) : 0;
            });
        }

        $categories = Category::all();
        return view('layouts.frontend.home', compact('polls', 'categories'));
    }

}
