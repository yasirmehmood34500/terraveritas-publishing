@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">Volume</h2>
            <div class="row">
                @for ($i = 1; $i < 20; $i++)
                    <div class="col-md-3">
                        <div class="issue-cover">
                            <div>
                                <a href="issue.php">
                                    <img src="https://dummyimage.com/180x250/cccccc/000000.png&text=180x250"
                                        style="margin: 0px;" alt="Issue Cover">
                                </a>
                            </div>
                            <a href="{{ route('journal.issue', ['abbr' => request()->route('abbr')]) }}">
                                <h4>Vol. 5, Iss. 1</h4>
                                <h5>March 2017</h5>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
