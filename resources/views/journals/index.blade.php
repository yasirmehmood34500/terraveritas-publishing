@extends('layouts.journal')
@section('content')
    <div class="mb-3 mt-3">
        <div class="bg-white p-2">
            <h3>{{ $journal->name }}</h3>
            <p class="mt-3 mb-3">Accounting and Auditing is an international, peer-reviewed, open access journal on
                informetrics published quarterly online by MDPI.</p>

            <ul>
                <li><span class="badge bg-dark rounded-0 fw-normal">Open Access</span> — free for readers, with <b>article
                        processing charges (APC)</b> paid by authors or their institutions</li>
                <li><b>Rapid Publication: </b> first decisions in 19 days; acceptance to publication in 4 days (median
                    values for MDPI journals in the first half of 2025).</li>
                <li><b>Recognition of Reviewers: </b> APC discount vouchers, optional signed peer review, and reviewer names
                    published annually in the journal.</li>
                <li><b>Accounting and Auditing is a companion journal of Sustainability.</b></li>
            </ul>

            <div>
                <span><i class="fa-solid fa-bars"></i> <a class="text-decoration-none text-dark" href="">Imprint
                        Information</a></span>
                <span><i class="fa-solid fa-arrow-down"></i> <a class="text-decoration-none text-dark" href="">Journal
                        Flyer</a></span>
                <span><i class="fa-solid fa-lock-open text-warning"></i> <a class="text-decoration-none text-warning"
                        href="">Open Access</a></span>
                <span><b>ISSN: 3042-6618</b></span>
            </div>
        </div>
    </div>
    <div class="bg-white mt-3">

        <!-- Artilces -->
        <div class="m-2 p-2">
            <div>
                <h3>Latest Articles </h3>

                @foreach ($issue_papers as $key => $value)
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

                        <small><a class="text-decoration-none text-dark"
                                href="{{ route('journal.view_paper', ['abbr' => request()->route('abbr'), 'id' => $value->id]) }}"><b>{{ $value->title }}</b></a></small><br>
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
                        <small>by {!! $output !!}</small><br>
                        <small class="text-muted">{{ $value->do_no }}</small><br>
                        <small style="text-align: justify; display: block;">
                            <b>Abstract:</b>
                            <span class="abstract-text">
                                {{ Str::substr(strip_tags($value->abstract), 0, 300) }}
                            </span>

                            @if (strlen(strip_tags($value->abstract)) > 300)
                                <span class="more-text d-none">{{ substr(strip_tags($value->abstract), 300) }}</span>
                                <a href="javascript:void(0)"
                                    class="read-more text-decoration-none fw-medium text-dark">[...]
                                    Read more</a>
                            @endif
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
                @endforeach


                {{-- <a class="text-decoration-none fw-medium text-dark mt-2" href="#">More Articles...</a> --}}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.read-more').on('click', function() {
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
@endsection
