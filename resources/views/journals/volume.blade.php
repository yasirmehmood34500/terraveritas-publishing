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
                                <a
                                    href="{{ route('journal.issue', ['abbr' => request()->route('abbr'), 'issue_id' => @$value?->id ?? 0]) }}">
                                    <img src="https://control.terraveritaspublishing.com/upload/{{ request()->route('abbr', 'NNNN') }}/img/{{ @$value?->journal?->cover_copy_img_name ?? '' }}"
                                        style="margin: 0px; width: 100%;" alt="Issue Cover">
                                </a>
                            </div>
                            <a href="{{ route('journal.issue', ['abbr' => request()->route('abbr'), 'issue_id' => @$value?->id ?? 0]) }}"
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
