<div class="container-fluid px-0">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/slider-img/1.jpg') }}{{ config('constants.version') }}" class="d-block w-100"
                    alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/2.jpg') }}{{ config('constants.version') }}" class="d-block w-100"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/3.jpg') }}{{ config('constants.version') }}" class="d-block w-100"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/4.jpg') }}{{ config('constants.version') }}" class="d-block w-100"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/5.jpg') }}{{ config('constants.version') }}" class="d-block w-100"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/slider-img/6.jpg') }}{{ config('constants.version') }}" class="d-block w-100"
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
