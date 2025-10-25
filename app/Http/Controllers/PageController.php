<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\JournalIssuePaper;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        view()->share('journals', Journal::get());
    }
    public function index()
    {
        return view('index')->with([
            'recent_papers' => JournalIssuePaper::inRandomOrder()->limit(10)->get(),
        ]);
    }
    public function journals()
    {
        return view('journals')->with([
            'journal_list' => Journal::withCount('journal_issue_papers')->get(),
        ]);
    }
}
