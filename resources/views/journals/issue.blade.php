@extends('layouts.journal')
@section('content')
    <div class="bg-white mt-3">
        <!-- Artilces -->
        <div class="m-2 p-2">
            <h2 class="mb-3">Special Issues</h2>
            <p class="mb-3">
                Accounting and Auditing publishes Special Issues to create collections of papers on specific topics, with
                the aim of building a community of authors and readers to discuss the latest research and develop new ideas
                and research directions. Special Issues are led by Guest Editors, who are experts on the topic and all
                Special Issue submissions follow MDPI's standard editorial process. The journal’s Editor-in-Chief and/or
                designated Editorial Board Member will oversee Guest Editor appointments and Special Issue proposals,
                checking their content for relevance and ensuring the suitability of the material for the journal. The
                papers published in a Special Issue will be collected and displayed on a dedicated page of the journal’s
                website. Further information on MDPI's Special Issue policies and Guest Editor responsibilities can be found
                here. For any inquiries related to a Special Issue, please contact the Editorial Office.
            </p>

            <div class="row mb-3">

                <div class="col-lg-4">
                    <label for="">Search by Title/Keyword</label>
                    <input type="text" placeholder="search..." class="form-control">
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4 mt-4"><button type="button" class="btn btn-outline-dark w-100">Go</button></div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-4">
                    <label for="">Order results</label>
                    <select name="" id="" class="form-select">
                        <option value="">Submission Deadline</option>
                        <option value="">2</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="">Display</label>
                    <select name="" id="" class="form-select">
                        <option value="">Open Special Issue</option>
                        <option value="">2</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="">Results Per Page</label>
                    <select name="" id="" class="form-select">
                        <option value="">50</option>
                        <option value="">2</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="mt-4">
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