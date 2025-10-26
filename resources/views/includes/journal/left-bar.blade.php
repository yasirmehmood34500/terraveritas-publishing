    <div class="m-3 p-3 bg-white">
        <h5>Journal Menu</h5>
        <div class="mt-3">

            <ul>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Home</a></li>

                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.editor', ['abbr' => request()->route('abbr')]) }}">Editorial Board</a>
                </li>
                {{-- <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.aim_scope', ['abbr' => request()->route('abbr')]) }}">Aim & Scope</a> --}}
                </li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Guide for Authors </a>
                </li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Archive</a></li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.issue', ['abbr' => request()->route('abbr')]) }}">Current Issue</a></li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.issue', ['abbr' => request()->route('abbr')]) }}">In Press</a></li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Journal Policy</a>
                </li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Journal Reviewer's</a>
                </li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Journal Imprint</a>
                </li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Journal History</a>
                </li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Affiliated
                        Society</a></li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Track Your
                        Submission</a></li>
            </ul>
        </div>



        <div class="mt-3">
            <h3>Journal Browser</h3>
            <div class="mb-3">
                <select name="" id="" class="form-select">
                    <option value="">volume</option>
                    <option value="">2</option>
                </select>
            </div>

            <div class="mb-3">
                <select name="" id="" class="form-select">
                    <option value="">Issue</option>
                    <option value="">2</option>
                </select>
            </div>

            <button type="button" class="btn btn-secondary w-100">Go</button>
        </div>
        <div class="mt-3">
            @foreach ($volumes as $key => $value)
                <div class="mt-3"><a class="text-decoration-none text-dark"
                        href="{{ route('journal.volume', ['abbr' => request()->route('abbr'), 'id' => $value->id]) }}">Vol.
                        {{ $value->vol_no }} ({{ @$value?->journal_archive_year?->yyear ?? '' }})</a>
                </div>
            @endforeach

        </div>

    </div>
