{{-- @push('style') --}}
<style>
    .text-decoration {
        text-decoration: none;
        font-size: 14px;
    }

    .footer-text {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
    }
</style>
{{-- @endpush --}}
<footer class="text-center text-lg-start text-white" style="background-color: #45526e">
    <div class="container p-4 pb-0">
        <section class="">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    {{-- <h6 class="text-uppercase mb-4 font-weight-bold"> --}}
                    <a class="navbar-brand d-flex align-items-center text-decoration-none" href="{{ route('index') }}">
                        <img src="{{ asset('assets/imgs/logo-new.jpg') }}" alt="Logo" class="header-logo me-2"
                            style="width: 110px; height: auto;">

                    </a>
                    <div class="footer-text text-decoration">
                        <span>TerraVeritas Publishing (Private) Limited</span>
                        <span>H # 355 St # 10, Umar Block, Riaz ul Jannah</span>
                        <span>Faisalabad - 38000, Pakistan</span>
                        <span>E-mail: <a
                                href="mailto:director@terraveritaspublishing.com" style="color: white;">director@terraveritaspublishing.com</a></span>
                    </div>
                    {{-- </h6> --}}
                    {{-- <p>
                       TerraVeritas Publishing
                    </p> --}}
                </div>

                <hr class="w-100 clearfix d-md-none" />

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Further Information</h6>

                    <a href="" class="text-decoration text-white">Article Processing Charges</a><br>


                    <a href="" class="text-decoration text-white">Pay an Invoice</a><br>


                    <a href="{{ route('policy') }}#open-access" class="text-decoration text-white">Open Access
                        Policy</a><br>


                    <a href="" class="text-decoration text-white">Contact</a><br>


                    <a href="" class="text-decoration text-white">Jobs</a><br>

                </div>

                <hr class="w-100 clearfix d-md-none" />

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                        Guidelines
                    </h6>

                    <a href="{{ route('guide_for_author') }}" class="text-decoration text-white"> For Authors</a><br>


                    <a href="{{ route('information_for_reviewer') }}" class="text-decoration text-white">For
                        Reviewers</a><br>


                    <a href="" class="text-decoration text-white">For Editors</a><br>


                    <a href="" class="text-decoration text-white">For Librarians</a><br>


                    <a href="" class="text-decoration text-white">For Publishers</a><br>


                    <a href="" class="text-decoration text-white">For Societies</a><br>


                    <a href="" class="text-decoration text-white">For Conference Organizers</a><br>

                </div>

                <hr class="w-100 clearfix d-md-none" />

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">
                        Follow
                    </h6>

                    <a href="" class="text-decoration text-white"> LinkedIn</a><br>


                    <a href="" class="text-decoration text-white">Facebook</a><br>


                    <a href="" class="text-decoration text-white">Twitter</a><br>

                </div>
                {{-- <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div> --}}
            </div>
        </section>

        <hr class="my-3">

        <section class="pt-0">
            <div class="row d-flex align-items-center">
                <div class="col-md-7 col-lg-8 text-center text-md-start">
                    <div class="">
                        © 2020 Copyright
                        <a class="text-white" href="https://terraveritaspublishing.com/">TerraVeritas Publishing</a>
                    </div>
                </div>

                <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                            class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                            class="fab fa-twitter"></i></a>

                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                            class="fab fa-google"></i></a>

                    <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
    </div>
</footer>
