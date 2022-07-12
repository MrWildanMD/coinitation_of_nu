<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Koin NU</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                                <p>Ranting Mejono</p>
                            </a>
                        </div>
                        <a href="#" class="d-inline-block align-text-start mt-1 fs-3">Koin NU</a>

                        <div class="header-top-right">
                            <div class="dropdown">
                                <a href="#" class="user-dropdown d-flex" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="assets/images/faces/1.jpg" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">Welcome, <br> Tamu</h6>
                                        <p class="user-dropdown-status text-sm text-muted">Guest</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="dropdownMenuButton1" style="min-width: 11rem;">
                                    <li><a class="dropdown-item" href="#"><i
                                                class="icon-mid bi bi-box-arrow-right me-2"></i>
                                            Masuk</a></li>
                                </ul>
                            </div>
                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul class="justify-content-center">
                            <li class="menu-item">
                                <a href="#beranda" class='menu-link'>
                                    <i class="bi bi-house-fill mb-2"></i>
                                    <span>Beranda</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#pengguna" class='menu-link'>
                                    <i class="bi bi-people-fill mb-2"></i>
                                    <span>Daftar Pengguna</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#galeri" class='menu-link'>
                                    <i class="bi bi-images mb-2"></i>
                                    <span>Galeri</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#faq" class='menu-link'>
                                    <i class="bi bi-question-circle-fill mb-2"></i>
                                    <span>FAQ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="content-wrapper container">
                <div class="page-content">
                    <section id="beranda">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Apa itu Koin NU?</h4>
                                    </div>
                                    <div class="card-body text-center">
                                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo"
                                            width="200" height="200">
                                        <h5>KOIN NU (KOtak INfaq NU) adalah implementasi pelaksanaan Zakat, Infaq,
                                            Shodaqoh (ZIS) yang didalamnya mencakup pelaksanaan perintah Allah SWT dalam
                                            mewujudkan masyarakat yang sejahtera melalui pembiasaan berinfaq dan
                                            bershodaqoh, sekaligus membantu program pemerintah dalam upaya pengentasan
                                            kemiskinan.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="pengguna">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Daftar Pengguna Yang Sudah Terdaftar</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1>Will be filled with table of registered user</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="galeri">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Galeri Ranting Mejono</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1>Will be filled with proof of collection</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="faq">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Pertanyaan yang sering ditanyakan</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1>Will be filled with list answer of faq</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer UI</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('assets/js/pages/horizontal-layout.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
