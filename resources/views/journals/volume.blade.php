@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">Volume {{ @$volume?->vol_no ?? '' }}</h2>
            <div class="row">
                @foreach ($issues as $key => $value)
                    <div class="col-md-3">
                        <div class="issue-cover">
                            <div>
                                <a href="issue.php">
                                    <img src="https://dummyimage.com/180x250/cccccc/000000.png&text=180x250"
                                        style="margin: 0px;" alt="Issue Cover">
                                </a>
                            </div>
                            <a href="{{ route('journal.issue', ['abbr' => request()->route('abbr')]) }}"
                                style="color: black; text-decoration:none: font-size:14px;">
                                Iss. {{ $value->issue_no }}
                                {{ @$value?->journal_archive_year?->yyear ?? '' }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
