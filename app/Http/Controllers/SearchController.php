<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Models\JournalEditorialBoard;
use App\Models\JournalIssuePaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('query', $request->input('author', ''));
        $journal_id = $request->input('journal_id');

        $papers = JournalIssuePaper::query();

        if ($request->filled('query')) {
            $papers->where('title', 'LIKE', "%{$search}%");
        }

        if ($request->filled('author')) {
            $papers->where('authors', 'LIKE', "%{$search}%");
        }

        if ($request->filled('journal_id')) {
            $papers->where('journal_id', $journal_id);
        }

        $papers = $papers->paginate(20);

        return view('results_paper')->with([
            'papers' => $papers,
            'search' => $search,
        ]);
    }
}
