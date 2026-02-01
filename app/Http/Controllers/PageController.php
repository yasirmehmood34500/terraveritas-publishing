<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\JournalIssuePaper;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'recent_papers' => JournalIssuePaper::with('journal')->inRandomOrder()->limit(10)->get(),
        ]);
    }
    public function journals()
    {
        return view('journals')->with([
            'journal_list' => Journal::withCount('journal_issue_papers')->get(),
        ]);
    }
    public function information_for_reviewer()
    {
        return view('information-for-reviewer');
    }

    public function guide_for_author()
    {
        return view('guide-for-author');
    }
    public function job()
    {
        return view('job');
    }
    public function librarians()
    {
        return view('librarians');
    }
    public function societies()
    {
        return view('societies');
    }

    public function policy()
    {
        return view('policy');
    }

    public function editorial_support()
    {
        return view('editorial-support');
    }
    public function about()
    {
        return view('about');
    }

    public function journal_proposal()
    {
        return view('journal-proposal');
    }

    public function contact()
    {
        return view('contact');
    }
}
