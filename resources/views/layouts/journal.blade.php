<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ request()->route('abbr') }}</title>
    @stack('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v1.0.3">
    @stack('style')
</head>

<body>
    <div class="container">
        @include('includes.header')
        @include('includes.banner')
        @include('includes.filter-bar')



        <!-- body -->
        <div class="row bg-light">
            <!-- Left Side -->
            <div class="col-lg-3">
                @include('includes.journal.left-bar')
            </div>

            <!-- Center Content -->

            <div class="col-lg-9">
                {{-- @include('includes.slider') --}}
                @yield('content')
            </div>

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
