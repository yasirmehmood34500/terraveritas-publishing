@extends('layouts.main')

@section('left-bar')
    @include('includes.left-bars.index')
@endsection

@section('content')
    <div class="bg-white mt-3">
        <div class="m-2 p-2">
            <h3>Search Results for "{{ $search }}"</h3>
            @if ($papers->isEmpty())
                <p>No search record found.</p>
            @else
                @foreach ($papers as $key => $value)
                    <div class="mt-3">
                        <small class="title-paper"><a class="text-dark underline-hover title-paper"
                                href="{{ route('journal.view_paper', ['abbr' => @$value?->journal?->abbreviation ?? 'AASB', 'id' => $value->id]) }}"><b>{{ $value->title }}</b></a></small><br>
                        <small>by <b>{{ $value->corresponding_author }}</b></small><br>
                        <small class="text-muted">{{ $value->doi_no }}</small><br>
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
                    </div>
                    <hr class="mt-2 mb-2">
                @endforeach
                {{ $papers->links() }}
            @endif
        </div>
    </div>
@endsection

@push('script')
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
@endpush
