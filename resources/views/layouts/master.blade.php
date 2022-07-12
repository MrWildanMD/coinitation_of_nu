<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.ico') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('layouts.sidebar')
        <div id="main" class='layout-navbar'>
            @include('layouts.navbar')
            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                @yield('heading')
                            </div>
                        </div>
                    </div>
                    <section class="section" id="content">
                        @yield('content')
                    </section>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
