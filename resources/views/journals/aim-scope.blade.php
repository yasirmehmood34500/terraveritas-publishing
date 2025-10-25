@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">About {{ $journal->name }}</h2>
            @foreach ($journal_overviews as $key => $value)
                <h4 class="mb-3">{{ $value->heading }}</h4>
                <p class="mb-3">{!! $value->detail !!}</p>
            @endforeach
        </div>
    </div>
@endsection
