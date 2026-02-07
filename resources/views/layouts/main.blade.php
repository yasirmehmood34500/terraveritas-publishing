<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terra Veritas Publishing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v1.0.5">
    @stack('style')
</head>

<body>
    <div class="container">

        @include('includes.header')
        {{-- @if (request()->route()->getName() == 'index') --}}
            @include('includes.banner')
        {{-- @endif --}}
        @include('includes.filter-bar')



        <!-- body -->
        <div class="row bg-light">
            <!-- Left Side -->
            <div class="col-lg-3">
                @yield('left-bar')
            </div>

            <!-- Center Content -->
            @if (request()->route()->getName() == 'index')
                <div class="col-lg-6">
                @else
                    <div class="col-lg-9">
            @endif
            @yield('content')
        </div>

        @if (request()->route()->getName() == 'index')
            <!-- Right Side -->
            <div class="col-lg-3">
                <!-- News -->
                @include('includes.right-bar')

            </div>
        @endif
    </div>

    <!-- Footer -->
    <div class="row">
        <!-- Last Footer -->
        @include('includes.footer')
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
</script>
@stack('script')

</html>
