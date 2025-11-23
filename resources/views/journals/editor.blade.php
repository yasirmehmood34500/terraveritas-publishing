@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">Editorial Board</h2>
            {{-- <p class="mb-3">Please note that the order in which the Editors appear on this page is alphabetical, and
                follows the structure of the editorial board presented on the MDPI website under information for editors: <a
                    class="text-decoration-none text-dark" href="">editorial board responsibilities</a>.</p> --}}

            <div class="row">
                <div class="col-lg-6">
                    <h4>Member</h4>
                </div>
                <div class="col-lg-6">
                    <input type="text" placeholder="search..." class="form-control">
                </div>
            </div>
            <div class="mt-3">
                @foreach ($journal_editorial_boards as $key => $value)
                    <div class="d-flex align-items-start gap-3">

                        <!-- Profile Image -->
                        <img src="https://control.terraveritaspublishing.com/upload/{{ request()->route('abbr', 'NNNN') }}/editorial/{{ @$value->img_name }}" alt=""
                            class="rounded-circle img-fluid" style="width:100px; height:100px; object-fit:cover;">

                        <!-- Profile Info -->
                        <div>
                            <p class="mb-1">
                                <a href="#" class="fw-semibold text-decoration-none text-dark">{{ $value->name }}</a>
                                &nbsp;
                                {{-- <a href="#" class="text-decoration-none text-dark">Website</a> --}}
                            </p>
                            <p class="fst-italic mb-1">{{ @$value?->journal_editorial_board_type?->name ?? '' }}</p>
                            <p>{!! $value->detail !!}</p>
                            {{-- <p class="mb-0">Department of Law, University of Naples Parthenope, Naples, Italy</p>
                            <p class="mb-0">
                                <span class="fw-semibold">Interests:</span> sustainability accounting; supply chain
                                digitalization;
                                sustainable business models; blockchain and digital platforms; carbon accounting;
                                sustainability reporting; integrated reporting; GHG protocol
                            </p>
                            <p class="mb-0">
                                <a href="#" class="fw-semibold text-decoration-none text-dark">Special Issues,
                                    Collections
                                    and Topics in MDPI journals</a>
                            </p> --}}
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
