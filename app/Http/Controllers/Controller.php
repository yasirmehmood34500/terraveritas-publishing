<?php

namespace App\Http\Controllers;

use App\Models\Journal;

abstract class Controller
{
     public function __construct()
    {
        view()->share('journals', Journal::get());
    }
}
