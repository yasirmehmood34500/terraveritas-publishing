<div class="m-3 p-3 bg-white">
    <h5>Open Access Journals</h5>
    <!-- First menu -->
    {{-- <a class="d-block text-decoration-none menu-btn collapsed" data-bs-toggle="collapse" href="#indexingMenu" role="button"
        aria-expanded="false" aria-controls="indexingMenu">
        <span class="me-2 menu-arrow text-dark">►</span> Browse by Indexing
    </a>

    <div class="collapse mt-2" id="indexingMenu">
        <ul class="list-group list-unstyled">
            <li><a class="text-dark underline-hover" href="#">Biology & Life Sciences</a></li>
            <li><a class="text-dark underline-hover" href="#">Business & Economics</a></li>
            <li><a class="text-dark underline-hover" href="#">Chemistry & Materials Science</a></li>
            <li><a class="text-dark underline-hover" href="#">Computer Science & Mathematics</a></li>
            <li><a class="text-dark underline-hover" href="#">Engineering</a></li>
            <li><a class="text-dark underline-hover" href="#">Environmental & Earth Sciences</a></li>
            <li><a class="text-dark underline-hover" href="#">Medicine & Pharmacology</a></li>
            <li><a class="text-dark underline-hover" href="#">Physical Sciences</a></li>
            <li><a class="text-dark underline-hover" href="#">Public Health & Healthcare</a></li>
            <li><a class="text-dark underline-hover" href="#">Social Sciences, Arts and Humanities</a></li>
        </ul>
    </div>

    <!-- Second menu -->
    <a class="d-block text-decoration-none menu-btn collapsed" data-bs-toggle="collapse" href="#subjectMenu"
        role="button" aria-expanded="false" aria-controls="subjectMenu">
        <span class="me-2 menu-arrow text-dark">►</span> Browse by Subject
    </a>

    <div class="collapse mt-2" id="subjectMenu">
        <ul class="list-group list-unstyled">
            <li><a class="text-dark underline-hover" href="#">Biology & Life Sciences</a></li>
            <li><a class="text-dark underline-hover" href="#">Business & Economics</a></li>
            <li><a class="text-dark underline-hover" href="#">Chemistry & Materials Science</a></li>
            <li><a class="text-dark underline-hover" href="#">Computer Science & Mathematics</a></li>
            <li><a class="text-dark underline-hover" href="#">Engineering</a></li>
            <li><a class="text-dark underline-hover" href="#">Environmental & Earth Sciences</a></li>
            <li><a class="text-dark underline-hover" href="#">Medicine & Pharmacology</a></li>
            <li><a class="text-dark underline-hover" href="#">Physical Sciences</a></li>
            <li><a class="text-dark underline-hover" href="#">Public Health & Healthcare</a></li>
            <li><a class="text-dark underline-hover" href="#">Social Sciences, Arts and Humanities</a></li>
        </ul>
    </div> --}}

    <div class="mt-3">
        <ul class="list-unstyled">
            @foreach (@$journals ?? [] as $key => $value)
                <li class="d-flex align-items-start mb-2">
                    <img src="{{ asset('storage/uploads/journals/' . $value->cover_copy_img_name) }}" alt=""
                        class="me-2 rounded flex-shrink-0" style="width: 50px; height: 50px; object-fit: cover;">
                    <a href="{{ route('journal.index', ['abbr' => $value->abbreviation]) }}"
                        class="text-dark underline-hover"
                        style="white-space: normal; word-wrap: break-word; overflow-wrap: break-word; line-height: 1.2;">
                        {{ $value->name }}
                    </a>
                </li>
                <hr class="mt-1 mb-1">
            @endforeach

        </ul>
    </div>
    <a class="text-decoration-none fw-medium text-dark mt-2" href="{{ route('journals') }}">Explore All Journals...</a>
</div>

<!-- Articles -->
<div class="m-3 p-3 bg-white">
    <h5>Highly Accessed Articles</h5>
    <small class="text-danger">Article</small><br>
    <small class="fw-medium p-0"><a class="text-dark underline-hover" href=""> Research on Acoustic Properties
            of Artificial Inhomogeneities in Calibration Samples for Ultrasonic Testing of Polyethylene Pipe Welds
        </a></small>
    <div class="mt-2">
        <small class="p-0">by <span class="fw-medium">Seong-Uk Baek</span> </small>
    </div>
    <small class="text-muted">Nutrients <span class="fw-medium">2025</span>, 17(14), 2372;</small>
    <small><a class="fw-medium text-decoration-none text-dark"
            href="">https://doi.org/10.3390/nu17142372</a></small>
    <small class="text-muted">Published: 20 July 2025</small>
    <img class="mt-2" src="https://dummyimage.com/240x300/cccccc/000000.png&text=240x300" alt="">
</div>

<!-- Books -->
<div class="m-3 p-3 bg-white">
    <div>
        <h4>TerraVeritas <span class="text-success">BOOKs</span></h4>
        <small class="text-danger">Open Access Book</small><br>
        {{-- <small class="fw-medium p-0"><a class="text-dark underline-hover" href="">IMU, ICM, Medals, Prizes,
                and Laureates</a></small> --}}
        {{-- <small class="text-muted">Author: Ravi P. Agarwal</small> --}}
        <div class="p-1 bg-light">
            <img class="mt-2" src="{{ asset('assets/imgs/book.jpg') }}" style="width: 100%; height:200px;"
                alt="">
        </div>
        <p id="about-text" class="text-justify" style="text-align: justify;">
            As a long-standing academic publisher and advocate of open access, <b>TerraVeritas Publishing</b> recognizes
            that the growing movement toward freely available and rapidly shared knowledge in academia should go beyond
            journal publishing to include books as well.
            Through <b>TerraVeritas Books</b>, we provide scholars with the opportunity to publish their academic
            contributions in diverse book formats. While journals often capture the most recent findings within specific
            fields, we view books as a space for deeper reflection and broader discussion.
            This intellectual reflection can emerge through short or full-length monographs, revised doctoral theses, or
            collaborative edited volumes that bring together experts across different disciplines. Edited collections
            serve as a bridge for cross-disciplinary and transdisciplinary dialogue—an essential approach for addressing
            the multifaceted global challenges of our time.
        </p>

        <a href="javascript:void(0);" id="toggle-text" class="text-decoration-none fw-medium text-primary">
            Read more
        </a>

    </div>
    <hr class="mt-2 mb-2">
    {{-- <a class="text-decoration-none fw-medium text-dark mt-2" href="#">Explore All Books...</a> --}}
</div>
@push('script')
    <script>
        $(document).ready(function() {
            const fullText = $('#about-text').html().trim();
            const shortText = fullText.substring(0, 300) + '...';

            // Show only short text initially
            $('#about-text').html(shortText);

            $('#toggle-text').on('click', function() {
                if ($(this).text() === 'Read more') {
                    $('#about-text').html(fullText);
                    $(this).text('Show less');
                } else {
                    $('#about-text').html(shortText);
                    $(this).text('Read more');
                }
            });
        });
    </script>
@endpush
