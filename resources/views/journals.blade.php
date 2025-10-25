@extends('layouts.main')
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">MDPI Journal List</h2>
            <h4 class="mb-3">{{ count($journals) }} journals</h4>
            <p class="mb-3">MDPI currently publishes 472 peer-reviewed journals, and 9 conference journals which are
                dedicated to publishing outputs from academic conferences.</p>

            <h2 class="mt-3 mb-3">Journal Proposal</h2>
            <p class="mb-3">MDPI launches new journals, acquires established journals, and welcomes the transfer of society
                journals from other publishers. Submit your proposal here.</p>

            <div class="container-fluid mb-5">

                <!-- Header -->
                <div class="row bg-light border-bottom py-2">
                    <div class="col-1"><small>#</small></div>
                    <div class="col-2">
                        <small>Journal Name</small>
                        <input type="text" class="form-control form-control-sm mt-1">
                    </div>
                    <div class="col-2">
                        <small>ISSN</small>
                        <input type="text" class="form-control form-control-sm mt-1">
                    </div>
                    <div class="col-1">
                        <small>Launched</small>
                        <input type="text" class="form-control form-control-sm mt-1">
                    </div>
                    <div class="col-1"><small>IF</small></div>
                    <div class="col-1"><small>Cite Score</small></div>
                    <div class="col-1"><small>Current Issue</small></div>
                    <div class="col-1"><small>Upcoming</small></div>
                    <div class="col-1"><small>Total</small></div>
                    {{-- <div class="col-1"><small>RSS</small></div> --}}
                </div>

                <!-- Body -->
                @foreach ($journal_list as $key => $value)
                    <div class="row align-items-center border-bottom py-2">
                        <div class="col-1">{{ $key + 1 }}</div>
                        <div class="col-2 d-flex align-items-center">
                            <img src="https://dummyimage.com/40x40/cccccc/000000.png&text=40x40" class="me-2 rounded"
                                alt="">
                            <a href="{{ route('journal.index', ['abbr' => $value->abbreviation]) }}">
                                <small>{{ $value->name }}</small>
                            </a>
                        </div>
                        <div class="col-2"><small>{{ $value->issn_print }}</small></div>
                        <div class="col-1"><small>2025</small></div>
                        <div class="col-1">-</div>
                        <div class="col-1">-</div>
                        <div class="col-1"><small>v1(1), Jun 2025</small></div>
                        <div class="col-1">0</div>
                        <div class="col-1">{{ $value->journal_issue_papers_count }}</div>
                        {{-- <div class="col-1"><i class="fa-solid fa-wifi"></i></div> --}}
                    </div>
                @endforeach

                <p class="mt-5">* Proceedings series journal</p>
            </div>

        </div>
    </div>
@endsection
