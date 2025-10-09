    <div class="m-3 p-3 bg-white">
        <h5>Journal Menu</h5>
        <div class="mt-3">

            <ul>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.index', ['abbr' => request()->route('abbr')]) }}">Index</a></li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.aim_scope', ['abbr' => request()->route('abbr')]) }}">Aim & Scope</a>
                </li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.editor', ['abbr' => request()->route('abbr')]) }}">Editor</a></li>
                <li><a class="text-decoration-none text-dark"
                        href="{{ route('journal.issue', ['abbr' => request()->route('abbr')]) }}">Issue </a></li>
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
            <div><i class="fa-solid fa-chevron-right"></i> <a class="text-decoration-none text-dark"
                    href="{{ route('journal.issue', ['abbr' => request()->route('abbr')]) }}">Forthcoming issue</a>
            </div>
            <div><i class="fa-solid fa-chevron-right"></i> <a class="text-decoration-none text-dark"
                    href="{{ route('journal.issue', ['abbr' => request()->route('abbr')]) }}">Current issue</a></div>
            <div class="mt-3"><a class="text-decoration-none text-dark"
                    href="{{ route('journal.volume', ['abbr' => request()->route('abbr')]) }}">Vol. 1 (2025)</a></div>
        </div>
    </div>
