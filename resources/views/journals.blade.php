@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.journals')
@endsection
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h1 class="mb-3">TerraVeritas Journal List</h1>
            <h4 class="mb-3">{{ count($journals) }} journals</h4>
            <p class="mb-3">TerraVeritas currently publishes {{ count($journals) }} peer-reviewed journals.</p>

            <h2 class="mt-3 mb-3">Journal Proposal</h2>
            <p class="mb-3">TerraVeritas launches new journals, acquires established journals, and welcomes the transfer of
                society
                journals from other publishers. Submit your proposal <a href="{{ route('journal_proposal') }}"> here.</a></p>

            <div class="container-fluid mb-5">

                <!-- Header -->
                <div class="row bg-light border-bottom py-2">
                    <div class="col-1"><small>#</small></div>
                    <div class="col-4">
                        <small>Journal Name</small>
                        {{-- <input type="text" class="form-control form-control-sm mt-1"> --}}
                    </div>
                    <div class="col-2">
                        <small>ISSN</small>
                        {{-- <input type="text" class="form-control form-control-sm mt-1"> --}}
                    </div>
                    <div class="col-1">
                        <small>Launched</small>
                        {{-- <input type="text" class="form-control form-control-sm mt-1"> --}}
                    </div>
                    <div class="col-1"><small>IF</small></div>
                    <div class="col-1"><small>Cite Score</small></div>
                    <div class="col-1"><small>Current Issue</small></div>
                    {{-- <div class="col-1"><small>Upcoming</small></div> --}}
                    <div class="col-1"><small>Total</small></div>
                    {{-- <div class="col-1"><small>RSS</small></div> --}}
                </div>

                <!-- Body -->
                @foreach ($journal_list as $key => $value)
                    <div class="row align-items-center border-bottom py-2">
                        <div class="col-1">{{ $key + 1 }}</div>
                        <div class="col-4 d-flex align-items-start">
                            <img style="width:100px; height:100px;"
                                src="https://control.terraveritaspublishing.com/upload/{{ @$value?->abbreviation ?? 'NNNN' }}/img/{{ @$value->cover_copy_img_name }}"
                                class="me-2 rounded flex-shrink-0" alt="">
                            <a href="{{ route('journal.index', ['abbr' => $value->abbreviation]) }}"
                                class="text-decoration-none text-dark" style="word-wrap: break-word; white-space: normal;">
                                <small>{{ $value->name }}</small>
                            </a>
                        </div>
                        <div class="col-2"><small>{{ str_replace('ISSN (Print):', '', $value->issn_print) }}</small></div>
                        <div class="col-1"><small>2024</small></div>
                        <div class="col-1">-</div>
                        <div class="col-1">-</div>
                        <div class="col-1"><small>v. 2(1), 2024</small></div>
                        {{-- <div class="col-1">0</div> --}}
                        <div class="col-1">{{ $value->journal_issue_papers_count }}</div>
                        {{-- <div class="col-1"><i class="fa-solid fa-wifi"></i></div> --}}
                    </div>
                @endforeach

            </div>

        </div>
    </div>
@endsection
