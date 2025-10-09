<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JournalPageController extends Controller
{
    public function index()
    {
        return view('journals.index');
    }
    public function issue()
    {
        return view('journals.issue');
    }
    public function volume()
    {
        return view('journals.volume');
    }
    public function editor()
    {
        return view('journals.editor');
    }
    public function aim_scope()
    {
        return view('journals.aim-scope');
    }
}
