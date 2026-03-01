@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.index')
@endsection
@section('content')
    <div class="bg-white mt-3">
        <!-- Slider -->
        @include('includes.slider')

        <!-- Artilces -->
        <div class="m-2 p-2">
            <h1>Recent Articles </h1>
            @foreach ($recent_papers as $key => $value)
                <div class="mt-3">
                    {{-- <div class="d-flex justify-content-between mb-2">
                        <div>
                            <span class="badge bg-dark rounded-0 fw-normal">Open Access</span>
                            <span class="badge bg-danger me-2 rounded-0 fw-normal">Article</span>
                        </div>
                        <div>
                            <span>14 pages, 4701 KiB <i class="fa-regular fa-file-pdf"></i> <i
                                    class="fa-solid fa-paperclip"></i></span>
                        </div>
                    </div> --}}
                    <span class="os-header">Article</span> <img src="{{ asset('assets/imgs/oa.png') }}" class="oa-icon"
                        alt=""><br>
                    <small class="title-paper"><a class="text-dark underline-hover title-paper"
                            href="{{ route('journal.view_paper', ['abbr' => @$value?->journal?->abbreviation ?? 'AASB', 'id' => $value->id]) }}"><b>{{ $value->title }}</b></a></small><br>
                    @php
                        $authors = str_replace(' and ', ', ', $value->authors);
                        $authorList = array_map('trim', explode(',', $authors));
                        $bolded = array_map(fn($name) => "<b>$name</b>", $authorList);
                        if (count($bolded) > 1) {
                            $last = array_pop($bolded);
                            $output = implode(', ', $bolded) . ' and ' . $last;
                        } else {
                            $output = $bolded[0];
                        }
                    @endphp
                    <small style="color: #6c757d; font-weight: 100;">by <i>{!! $output !!}</i></small><br>
                    <small class="text-muted"><a href="{{ $value->doi_no }}"
                            target="_blank">{{ $value->doi_no }}</a></small><br>
                    <small style="text-align: justify; display: block;">
                        <b>Abstract:</b>
                        <span class="abstract-text">
                            {{ Str::substr(strip_tags($value->abstract), 0, 300) }}
                        </span>

                        @if (strlen(strip_tags($value->abstract)) > 300)
                            <span class="more-text d-none">{{ substr(strip_tags($value->abstract), 300) }}</span>
                            <a href="javascript:void(0)" class="read-more text-decoration-none fw-medium text-dark">[...]
                                Read more</a>
                        @endif
                    </small><br>

                    {{-- <small>(This article belongs to the Section<a class="text-decoration-none fw-medium text-dark" href="">
                            Vaccine Design,
                            Development, and Delivery</a>)</small> --}}
                    {{-- <a class="d-block text-decoration-none menu-btn collapsed text-dark mt-2" data-bs-toggle="collapse"
                        href="#articleImage" role="button" aria-expanded="false" aria-controls="articleImage">
                        <span class="me-2 menu-arrow text-dark">►</span> Show Figures
                    </a>
                    <div class="collapse mt-2" id="articleImage">
                        <img src="https://dummyimage.com/540x400/cccccc/000000.png&text=540x400" alt="" srcset="">
                    </div> --}}
                </div>
                <hr class="mt-2 mb-2">
            @endforeach
            {{-- <a class="text-decoration-none fw-medium text-dark mt-2" href="#">More Articles...</a> --}}
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function () {
            $('.read-more').on('click', function () {
                const moreText = $(this).prev('.more-text');
                const isHidden = moreText.hasClass('d-none');

                if (isHidden) {
                    moreText.removeClass('d-none');
                    $(this).text(' Show less');
                } else {
                    moreText.addClass('d-none');
                    $(this).text('[...] Read more');
                }
            });
        });
    </script>
@endpush