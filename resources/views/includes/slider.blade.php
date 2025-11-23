<div class="container-fluid px-0">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/slider-img/s1.jpg') }}{{ config('constants.version') }}" class="d-block w-100" style="height: 200px;"
                    alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/s2.jpg') }}{{ config('constants.version') }}" class="d-block w-100" style="height: 200px;"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/s3.jpg') }}{{ config('constants.version') }}" class="d-block w-100" style="height: 200px;"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/s4.jpg') }}{{ config('constants.version') }}" class="d-block w-100" style="height: 200px;"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/s5.jpg') }}{{ config('constants.version') }}" class="d-block w-100" style="height: 200px;"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/s6.jpg') }}{{ config('constants.version') }}" class="d-block w-100" style="height: 200px;"
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
