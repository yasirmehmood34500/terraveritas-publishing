<?php

use App\Http\Controllers\Journal\JournalPageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('journals', 'journals')->name('journals');
});

Route::prefix('journal/{abbr}')->name('journal.')->controller(JournalPageController::class)->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('issue', 'issue')->name('issue');
    Route::get('volume/{id}', 'volume')->name('volume');
    Route::get('editor', 'editor')->name('editor');
    Route::get('aim-scope', 'aim_scope')->name('aim_scope');
    Route::get('view-paper/{id}', 'view_paper')->name('view_paper');
});
