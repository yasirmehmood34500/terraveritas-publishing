<div class="container my-3">
    <form action="{{ route('search') }}" method="GET" id="search-form">
        <div class="d-flex align-items-center flex-nowrap w-100">
            <strong class="me-2">Search for Articles:</strong>
            <input type="text" class="form-control me-3" name="query" id="query" placeholder="Title / Keyword" style="max-width: 220px;">
            <input type="text" class="form-control me-3" name="author" id="author" placeholder="Author / Affiliation / Email"
                style="max-width: 220px;">

            <select class="form-select me-3" name="journal_id" style="max-width: 220px;">
                <option value="">Select Journal</option>
                @foreach ($journals as $key => $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary me-3">Search</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.getElementById('search-form');
        const queryInput = document.getElementById('query');
        const authorInput = document.getElementById('author');

        searchForm.addEventListener('submit', function(event) {
            const queryValue = queryInput.value.trim();
            const authorValue = authorInput.value.trim();

            if (queryValue === '' && authorValue === '') {
                event.preventDefault();
                queryInput.focus();
            } else if (queryValue !== '') {
                authorInput.disabled = true;
            } else if (authorValue !== '') {
                queryInput.disabled = true;
            }
        });
    });
</script>
