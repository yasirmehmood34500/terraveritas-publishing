<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\JournalEditorialBoard;
use App\Models\JournalIssuePaper;
use App\Models\JournalOverview;
use Illuminate\Http\Request;

class JournalPageController extends Controller
{
    public function index(Request $request)
    {
        $abbr = $request->route('abbr');
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $issue_papers = JournalIssuePaper::where('journal_id', $journal->id)
            ->where('journal_archive_issue_id', function ($query) use ($journal) {
                $query->selectRaw('MAX(journal_archive_issue_id)')
                    ->from('journal_issue_papers')
                    ->where('journal_id', $journal->id);
            })
            ->get();

        return view('journals.index')->with([
            'journal' => $journal,
            'issue_papers' => $issue_papers,
        ]);
    }
    public function issue(Request $request)
    {
        $abbr = $request->route('abbr');
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $issue_papers = JournalIssuePaper::where('journal_id', $journal->id)
            ->where('journal_archive_issue_id', function ($query) use ($journal) {
                $query->selectRaw('MAX(journal_archive_issue_id)')
                    ->from('journal_issue_papers')
                    ->where('journal_id', $journal->id);
            })
            ->get();

        return view('journals.issue')->with([
            'journal' => $journal,
            'issue_papers' => $issue_papers,
        ]);
    }
    public function volume(Request $request)
    {
        return view('journals.volume');
    }
    public function editor(Request $request)
    {
        $abbr = $request->route('abbr');
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $journal_editorial_boards = JournalEditorialBoard::with('journal_editorial_board_type')->where('journal_id', $journal->id)->orderBy('journal_editorial_board_type_id', 'ASC')->get();
        return view('journals.editor')->with([
            'journal' => $journal,
            'journal_editorial_boards' => $journal_editorial_boards,
        ]);
    }
    public function aim_scope(Request $request)
    {
        $abbr = $request->route('abbr');
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $journal_overviews = JournalOverview::where('journal_id', $journal->id)->get();
        return view('journals.aim-scope')->with([
            'journal' => $journal,
            'journal_overviews' => $journal_overviews,
        ]);
    }
}
