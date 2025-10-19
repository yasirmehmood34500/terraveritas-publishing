 <div>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
             <!-- Left side login/signup -->
             <div class="d-flex order-lg-0">
                 <a class="navbar-brand" href="{{ route('index') }}">
                     <img src="{{ asset('assets/imgs/logo.jpg') }}" alt="Logo"
                         class="d-inline-block align-text-top header-logo">
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
                     <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                 </ul>
             </div>

             <!-- Right side logo -->
             <div class="order-lg-2">
                 <a href="#" class="btn btn-outline-primary btn-login">Login</a>
                 <a href="#" class="btn btn-primary btn-signup">Signup</a>
             </div>
         </div>
     </nav>
 </div>
