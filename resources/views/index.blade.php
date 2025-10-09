@extends('layouts.main')
@section('content')
    <div class="bg-white mt-3">
        <!-- Slider -->
        <div class="container-fluid px-0">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://dummyimage.com/400x200/cccccc/000000.png&text=400x200" class="d-block w-100"
                            alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/400x200/cccccc/000000.png&text=400x201" class="d-block w-100"
                            alt="Slide 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <!-- Artilces -->
        <div class="m-2 p-2">
            <h3>Recent Articles </h3>
            @for ($i = 1; $i < 5; $i++)
                <div class="mt-3">
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <span class="badge bg-dark rounded-0 fw-normal">Open Access</span>
                            <span class="badge bg-danger me-2 rounded-0 fw-normal">Article</span>
                        </div>
                        <div>
                            <span>14 pages, 4701 KiB <i class="fa-regular fa-file-pdf"></i> <i
                                    class="fa-solid fa-paperclip"></i></span>
                        </div>
                    </div>

                    <small><a class="text-dark underline-hover" href=""><b>A QS21+ CpG-Adjuvanted
                                Rabies Virus G Subunit Vaccine Elicits Superior Humoral and Moderate Cellular
                                Immunity</b></a></small><br>
                    <small>by <b>Han Cao</b> and <b>Cunbao Liu</b></small><br>
                    <small class="text-muted">Vaccines 2025, 13(8), 887;
                        https://doi.org/10.3390/vaccines13080887 (registering DOI) - 21 Aug 2025</small><br>
                    <small><b>Abstract</b> Background: Rabies remains a fatal zoonotic disease caused by rabies
                        virus (RABV), posing substantial global health challenges. Current vaccine production
                        faces challenges in manufacturing efficiency and cost-effectiveness. The RABV
                        glycoprotein (RABV-G) serves as the key antigen for eliciting protective immunity.
                        Methods: We developed <a class="text-decoration-none fw-medium text-dark" href="">[...] Read
                            more</a>. </small><br>
                    <small>(This article belongs to the Section<a class="text-decoration-none fw-medium text-dark"
                            href=""> Vaccine Design,
                            Development, and Delivery</a>)</small>
                    <a class="d-block text-decoration-none menu-btn collapsed text-dark mt-2" data-bs-toggle="collapse"
                        href="#articleImage" role="button" aria-expanded="false" aria-controls="articleImage">
                        <span class="me-2 menu-arrow text-dark">►</span> Show Figures
                    </a>
                    <div class="collapse mt-2" id="articleImage">
                        <img src="https://dummyimage.com/540x400/cccccc/000000.png&text=540x400" alt=""
                            srcset="">
                    </div>
                </div>
                <hr class="mt-2 mb-2">
            @endfor
            <a class="text-decoration-none fw-medium text-dark mt-2" href="#">More Articles...</a>
        </div>
    </div>
@endsection
