<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\JournalArchiveIssue;
use App\Models\JournalArchiveVolume;
use App\Models\JournalEditorialBoard;
use App\Models\JournalImprint;
use App\Models\JournalIndexing;
use App\Models\JournalIssuePaper;
use App\Models\JournalOverview;
use Illuminate\Http\Request;

class JournalPageController extends Controller
{
    public function __construct(Request $request)
    {
        parent::__construct();
        $abbr = $request->route('abbr');
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $indexing = JournalIndexing::where('journal_id', $journal->id)->get();
        view()->share('journal', $journal);
        view()->share('indexing', $indexing);
        view()->share('volumes', JournalArchiveVolume::with('journal_archive_year')->where('journal_id', $journal->id)->get());
    }
    public function index(Request $request, $abbr)
    {
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $issue_papers = JournalIssuePaper::with('journal')->where('journal_id', $journal->id)
            ->where('journal_archive_issue_id', function ($query) use ($journal) {
                $query->selectRaw('MAX(journal_archive_issue_id)')
                    ->from('journal_issue_papers')
                    ->where('journal_id', $journal->id);
            })
            ->get();
        $journal_overviews = JournalOverview::where('journal_id', $journal->id)->get();

        return view('journals.index')->with([
            'journal' => $journal,
            'issue_papers' => $issue_papers,
            'journal_overviews' => $journal_overviews,
        ]);
    }
    public function issue(Request $request, $abbr, int $issue_id = 0)
    {
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $issue_papers = JournalIssuePaper::with(['journal_archive_volume', 'journal_archive_issue'])->where('journal_id', $journal->id);
        $issue_heading = "";
        if ((int) $issue_id > 0) {
            $issue_papers = $issue_papers->where('journal_archive_issue_id', $issue_id);
        } else {
            $issue_papers = $issue_papers->where('journal_archive_issue_id', function ($query) use ($journal) {
                $query->selectRaw('MAX(journal_archive_issue_id)')
                    ->from('journal_issue_papers')
                    ->where('journal_id', $journal->id);
            });
            $issue_heading = "Current Issue";
        }
        $issue_papers = $issue_papers->get();

        if ($issue_heading == "") {
            $volume = "Vol. " . ($issue_papers->first()?->journal_archive_volume?->vol_no ?? '');
            $issue = "Issue (" . ($issue_papers->first()?->journal_archive_issue?->issue_no ?? '') . ")";
            $issue_heading = $volume . " " . $issue;
        }

        return view('journals.issue')->with([
            'journal' => $journal,
            'issue_papers' => $issue_papers,
            'issue_heading' => $issue_heading
        ]);
    }
    public function volume(Request $request, $abbr, $id)
    {
        $issues = JournalArchiveIssue::with('journal_archive_year', 'journal')->where('journal_archive_volume_id', $id)->get();
        return view('journals.volume')->with([
            'volume' => JournalArchiveVolume::where('id', $id)->first(),
            'issues' => $issues,
        ]);
    }
    public function editor(Request $request, $abbr)
    {
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $journal_editorial_boards = JournalEditorialBoard::with('journal_editorial_board_type')->where('journal_id', $journal->id)->orderBy('journal_editorial_board_type_id', 'ASC')->get();
        return view('journals.editor')->with([
            'journal' => $journal,
            'journal_editorial_boards' => $journal_editorial_boards,
        ]);
    }
    public function aim_scope(Request $request, $abbr)
    {
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $journal_overviews = JournalOverview::where('journal_id', $journal->id)->get();
        return view('journals.aim-scope')->with([
            'journal' => $journal,
            'journal_overviews' => $journal_overviews,
        ]);
    }
    public function view_paper(Request $request, $abbr, $id)
    {
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $paper = JournalIssuePaper::where('id', $id)->first();
        return view('journals.view-paper')->with([
            'journal' => $journal,
            'paper' => $paper,
        ]);
    }
    public function imprint(Request $request, $abbr)
    {
        $journal = Journal::where('abbreviation', $abbr)->firstOrFail();
        $imprint = JournalImprint::where('journal_id', $journal->id)->get();
        return view('journals.imprint')->with([
            'imprint' => $imprint,
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

    public function policy()
    {
        return view('policy');
    }
}
