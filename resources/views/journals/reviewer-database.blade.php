@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Articles -->
        <div class="m-2 p-2">
            <h2 class="mb-3">Reviewer Database</h2>

            <div>
                @forelse ($reviewers as $reviewer)
                    <div class="reviewer-list-item py-3">

                        {{-- Name --}}
                        <div class="fw-bold mb-1" style="font-size: 1rem;">{{ $reviewer->name }}</div>

                        {{-- Department --}}
                        @if(!empty($reviewer->department))
                            <div class="text-muted mb-1" style="font-size: 0.92rem;">{{ $reviewer->department }}</div>
                        @endif

                        {{-- Email --}}
                        @if(!empty($reviewer->email))
                            <div class="mb-1" style="font-size: 0.92rem;">
                                <strong>Email:</strong>
                                <a href="mailto:{{ $reviewer->email }}" class="text-decoration-none">{{ $reviewer->email }}</a>
                            </div>
                        @endif

                        {{-- Official URL --}}
                        @if(!empty($reviewer->official_url))
                            <div style="font-size: 0.92rem;">
                                <strong>Official URL:</strong>
                                <a href="{{ $reviewer->official_url }}" target="_blank" class="text-decoration-none">{{ $reviewer->official_url }}</a>
                            </div>
                        @endif

                    </div>
                    <hr class="my-0">
                @empty
                    <div class="text-center text-muted py-5">
                        No reviewers found in the database.
                    </div>
                @endforelse
            </div>

            <style>
                .reviewer-list-item:first-child {
                    border-top: 1px solid #dee2e6;
                }
            </style>
        </div>
    </div>
@endsection
