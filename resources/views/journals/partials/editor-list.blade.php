@if($members->isEmpty())
    <p class="text-muted">No members found in this category.</p>
@else
    @foreach ($members as $key => $value)
        <div class="d-flex align-items-start gap-3">
            <!-- Profile Image -->
            <img src="https://control.terraveritaspublishing.com/upload/{{ request()->route('abbr', 'NNNN') }}/editorial/{{ @$value->img_name }}"
                alt="" class="rounded-circle img-fluid" style="width:100px; height:100px; object-fit:cover;">

            <!-- Profile Info -->
            <div>
                <p class="mb-1">
                    <a href="#" class="fw-semibold text-decoration-none text-dark">{{ $value->name }}</a>
                </p>
                <p class="fst-italic mb-1">{{ @$value?->journal_editorial_board_type?->name ?? '' }}</p>
                <div class="member-detail">{!! $value->detail !!}</div>
            </div>
        </div>
        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
@endif