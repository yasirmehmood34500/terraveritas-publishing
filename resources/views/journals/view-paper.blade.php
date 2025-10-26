@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">

        <!-- Artilces -->
        <div class="m-2 p-2">
            <div>
                <div class="mt-3">

                    <small>
                        <h4>{{ $paper->title }}</h4>
                    </small><br>
                    @php
                        $authors = str_replace(' and ', ', ', $paper->authors);
                        $authorList = array_map('trim', explode(',', $authors));
                        $bolded = array_map(fn($name) => "<b>$name</b>", $authorList);
                        if (count($bolded) > 1) {
                            $last = array_pop($bolded);
                            $output = implode(', ', $bolded) . ' and ' . $last;
                        } else {
                            $output = $bolded[0];
                        }
                    @endphp
                    <small>by {!! $output !!}</small><br>
                    <small class="text-muted">{{ $paper->do_no }}</small><br>
                    <small style="text-align: justify; display: block;"><b>Abstract:</b>
                        {{ strip_tags($paper->abstract) }}
                        {{-- <a
                                class="text-decoration-none fw-medium text-dark" href="">[...] Read more</a>. --}}
                    </small><br>
                    {{-- <small>(This article belongs to the Section<a class="text-decoration-none fw-medium text-dark"
                                href=""> Vaccine Design, Development, and Delivery</a>)</small>
                        <a class="d-block text-decoration-none menu-btn collapsed text-dark mt-2" data-bs-toggle="collapse"
                            href="#articleImage" role="button" aria-expanded="false" aria-controls="articleImage">
                            <span class="me-2 menu-arrow text-dark">►</span> Show Figures
                        </a>
                        <div class="collapse mt-2" id="articleImage">
                            <img src="https://dummyimage.com/540x400/cccccc/000000.png&text=540x400" alt=""
                                srcset="">
                        </div> --}}
                </div>
                <hr class="mt-2 mb-2">


                {{-- <a class="text-decoration-none fw-medium text-dark mt-2" href="#">More Articles...</a> --}}
            </div>
        </div>
    </div>
@endsection
