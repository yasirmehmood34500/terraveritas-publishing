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
                <li><img class="me-2" style="width: 50px; height:100px;" src="{{ asset('storage/uploads/journals/') }}/{{ $value->cover_copy_img_name }}"
                        alt="{{ $value->name }}" srcset=""><a class="text-dark underline-hover"
                        href="{{ route('journal.index', ['abbr' => $value->abbreviation]) }}">{{ $value->name }}</a></li>
                <hr class="mt-1 mb-1">
            @endforeach
        </ul>
    </div>
    <a class="text-decoration-none fw-medium text-dark mt-2" href="{{ route('journals') }}">Explore All Journals...</a>
</div>

<!-- Articles -->
{{-- <div class="m-3 p-3 bg-white">
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
        <h1>MDPI <span class="text-success">BOOKs</span></h1>
        <small class="text-danger">Open Access Book</small><br>
        <small class="fw-medium p-0"><a class="text-dark underline-hover" href="">IMU, ICM, Medals, Prizes,
                and Laureates</a></small>
        <small class="text-muted">Author: Ravi P. Agarwal</small>
        <div class="p-5 bg-light">
            <img class="mt-2" src="https://dummyimage.com/140x200/cccccc/000000.png&text=140x200" alt="">
        </div>
    </div>
    <hr class="mt-2 mb-2">
    <a class="text-decoration-none fw-medium text-dark mt-2" href="#">Explore All Books...</a>
</div> --}}
