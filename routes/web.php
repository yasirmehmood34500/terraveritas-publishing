<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Journal\JournalPageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('journals', 'journals')->name('journals');
    Route::get('information-for-reviewer', 'information_for_reviewer')->name('information_for_reviewer');
    Route::get('guide-for-reviewer', 'guide_for_author')->name('guide_for_author');
    Route::get('job', 'job')->name('job');
    Route::get('librarians', 'librarians')->name('librarians');
    Route::get('societies', 'societies')->name('societies');
    Route::get('policy', 'policy')->name('policy');
    Route::get('editorial-support', 'editorial_support')->name('editorial_support');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('journal-proposal', 'journal_proposal')->name('journal_proposal');
    Route::get('editors', 'editors')->name('editors');
    Route::get('pay-an-invoice', 'pay_an_invoice')->name('pay_an_invoice');
});
Route::post('contact', [ContactUsController::class, 'send_email'])->name('contact_send');

Route::controller(SearchController::class)->group(function () {
    Route::get('search', 'search')->name('search');
});

Route::prefix('journal/{abbr}')->name('journal.')->controller(JournalPageController::class)->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('issue/{issue_id?}', 'issue')->name('issue');
    Route::get('volume/{id}', 'volume')->name('volume');
    Route::get('editor', 'editor')->name('editor');
    Route::get('information-for-reviewer', 'information_for_reviewer')->name('information_for_reviewer');
    Route::get('guide-for-reviewer', 'guide_for_author')->name('guide_for_author');
    Route::get('policy', 'policy')->name('policy');
    Route::get('aim-scope', 'aim_scope')->name('aim_scope');
    Route::get('imprint', 'imprint')->name('imprint');
    Route::get('view-paper/{id}', 'view_paper')->name('view_paper');
    Route::get('reviewer-database', 'reviewer_database')->name('reviewer_database');
});
