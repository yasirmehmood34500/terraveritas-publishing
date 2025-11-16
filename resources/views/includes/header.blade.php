<style>
    .logo-text.modern {
        font-family: 'Poppins', sans-serif;
        color: #002b5c;
        /* Strong navy */
        font-size: 1.2rem;
        font-weight: 600;
        /* text-transform: uppercase; */
        letter-spacing: 1px;
    }
</style>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Left side login/signup -->
            <div class="d-flex align-items-center order-lg-0">
                <a class="navbar-brand d-flex align-items-center text-decoration-none" href="{{ route('index') }}">
                    <img src="{{ asset('assets/imgs/logo-3.jpg') }}" alt="Logo" class="header-logo me-2"
                        style="width: 50px; height: auto;">
                    <span class="logo-text modern">
                        TerraVeritas Publishing
                    </span>
                </a>
            </div>




            <!-- Center menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center order-lg-1" id="navbarMenu">
                <ul class="navbar-nav mb-2 mb-lg-0 text-center">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('journals') }}">Journals</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('information_for_reviewer') }}">For
                            Reviewer</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('guide_for_author') }}">Guide for Author</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('policy') }}">Policy</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('editorial_support') }}">Editorial
                            Support</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#">Services</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                </ul>
            </div>

            @if (request()->route('abbr'))
                <!-- Right side logo -->
                <div class="order-lg-2">
                    <a href="#" class="btn btn-outline-primary btn-login">Login</a>
                    <a href="#" class="btn btn-primary btn-signup">Signup</a>
                </div>
            @endif
        </div>
    </nav>
</div>
