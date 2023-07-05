<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Styles -->
    <link href="{{ asset('assets/css/custom-style-bagas.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</head>

<body class="g-sidenav-show">


    <main class="main-content position-relative max-height-vh-100 ">
        {{-- Tampilan pertama --}}
        <section class="bg-warning">

            <nav class="navbar shadow-none navbar-expand-lg bg-warning px-0 mx-4">
                <div class="container-fluid">

                    <div class="navbar-brand bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 d-flex">
                        <img src="https://gas.id/files/images/srvphp_1662943062.png" class="navbar-brand-img">
                        <span class="h2 m-0 align-items-center d-flex">title</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <i class="uil uil-bars h4 text-white"></i>
                        </a>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="h6 mx-3 active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="h6 mx-3" href="#">fitur</a>
                            </li>
                            <li class="nav-item">
                                <a class="h6 mx-3" href="#">kategori</a>
                            </li>
                            <li class="nav-item">
                                <a class="h6 mx-3">lokasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="h6 mx-3">about</a>
                            </li>
                        </ul>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('login') }}" class="btn btn-sm bg-gradient-secondary btn-secondary">masuk</a>
                    </div>
                </div>
            </nav>

            <div class=" container">
                <div class="d-flex flex-row">
                    <div class="d-flex align-items-center row flex-reverse">
                        <div class="col-md-6 text-left">
                            <h1 class="text-white">Bergabung</h1>
                            <span class="text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/top.jpg') }}" class="img-custom-mode img-fluid">
                        </div>
                    </div>
                </div>

                <div class="icon py-3">
                    <a class="uil uil-instagram h4 text-white" href="#"></a>
                    <a class="uil uil-facebook h4 text-white " href="#"></a>
                </div>
            </div>
        </section>

        {{-- tampilan kedua --}}
        <section id="fitur" class="my-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="">POPULER FITUR</h2>
                    <h6>Beberapa kategori </h6>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-2 text-center">
                        <div class="card my-3 shadow-md border-radius-xl">
                            <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                class="img-fluid img-card-fitur px-2">
                        </div>
                        <span class="h6">Kategori 1</span>
                    </div>

                    <div class="col-md-2 text-center">
                        <div class="card my-3 shadow-md border-radius-xl">
                            <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                class="img-fluid img-card-fitur px-2">
                        </div>
                        <span class="h6">Kategori 1</span>
                    </div>

                    <div class="col-md-2 text-center">
                        <div class="card my-3 shadow-md border-radius-xl">
                            <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                class="img-fluid img-card-fitur px-2">
                        </div>
                        <span class="h6">Kategori 1</span>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="card my-3 shadow-md border-radius-xl">
                            <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                class="img-fluid img-card-fitur px-2">
                        </div>
                        <span class="h6">Kategori 1</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- tampilan ketiga --}}
        <section id="kategori" class="my-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="">Kategoti</h2>
                    <h6>Beberapa kategori </h6>
                </div>

                <div class="list-group overflow-auto list-group-horizontal">
                    <div class="  mx-2">
                        <div class="card my-3 shadow-md">
                            <div class="card-header">
                                <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                    class="img-fluid img-card-fitur">
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <span class="h6">Kategori 1</span>
                                    <span class="">Lorem ipsum dolor sit amet consectetur.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="  mx-2">
                        <div class="card my-3 shadow-md">
                            <div class="card-header">
                                <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                    class="img-fluid img-card-fitur">
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <span class="h6">Kategori 1</span>
                                    <span class="">Lorem ipsum dolor sit amet consectetur.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="  mx-2">
                        <div class="card my-3 shadow-md">
                            <div class="card-header">
                                <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                    class="img-fluid img-card-fitur">
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <span class="h6">Kategori 1</span>
                                    <span class="">Lorem ipsum dolor sit amet consectetur.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="  mx-2">
                        <div class="card my-3 shadow-md">
                            <div class="card-header">
                                <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                    class="img-fluid img-card-fitur">
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <span class="h6">Kategori 1</span>
                                    <span class="">Lorem ipsum dolor sit amet consectetur.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" ">
                        <div class="card my-3 shadow-md">
                            <div class="card-header">
                                <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                    class="img-fluid img-card-fitur">
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <span class="h6">Kategori 1</span>
                                    <span class="">Lorem ipsum dolor sit amet consectetur.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="lokasi" class="my-5 text-center container">
            <h1>lokasi kami</h1>
            <div class="ratio ratio-21x9 ">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7911.47275402587!2d110.57543399528495!3d-7.494331232856047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6e5767782227%3A0xdd4612e99e1629ba!2sDusun%203%2C%20Penggung%2C%20Boyolali%2C%20Boyolali%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1688475451278!5m2!1sen!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            {{-- MAPS INSRT FULL I FRAME TAPI MENGKO DI PARSING DI JUPUK SRC --}}
        </section>

        <section id='about' class="text-center container my-5">
            <h2>Tentang Kami</h2>
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque sunt natus vero repudiandae eaque illo
                vitae.</span>

        </section>

        <section id='kata' class="text-center container my-5">
            <h2>Kata2</h2>
            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque sunt natus vero repudiandae eaque illo
                vitae.</span>

        </section>

        <section id='penutup' class="text-center container my-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card-plain d-flex">
                        <div class="">
                            <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                class="img-fluid img-card-penutup">
                        </div>
                        <div class="text-start">
                            <h6>judul</h6>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nobis esse adipisci
                                beatae soluta blanditiis nemo fuga optio quidem alias nostrum sunt explicabo neque?
                            </span>
                            <button class="float-end btn-sm btn btn-warning bg-gradient-warning">Lihat
                                selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-plain d-flex">
                        <div class="">
                            <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                class="img-fluid img-card-penutup">
                        </div>
                        <div class="text-start">
                            <h6>judul</h6>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, nobis esse adipisci
                                beatae soluta blanditiis nemo fuga optio quidem alias nostrum sunt explicabo neque?
                            </span>
                            <button class="float-end btn-sm btn btn-warning bg-gradient-warning">Lihat
                                selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark">
            {{-- <div class="container">
                <footer class="row row-cols-5 py-5 my-5 border-top">

                  <div class="col">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <p class="text-muted">© 2021</p>
                  </div>

                  <div class="col">

                  </div>

                  <div class="col">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                  </div>

                  <div class="col">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                  </div>

                  <div class="col">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                  </div>
                </footer>
              </div> --}}

            <footer class="text-center text-lg-start text-white border-top">

                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div
                                class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 align-items-center d-flex justify-content-center">
                                <!-- Content -->
                                <div class="d-flex jystify-content-center">
                                    <img src="https://gas.id/files/images/srvphp_1662943062.png"
                                        class="navbar-brand-img mx-2">
                                    <div class="align-items-center d-flex ">

                                        <span class="h2 m-0 text-white">title</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-3 text-white">Tentang Kami</h6>
                                <div class="d-flex flex-column">
                                    <span>
                                        <a href="#!" class="text-white">MDBootstrap</a>
                                    </span>
                                    <span>
                                        <a href="#!" class="text-white">BrandFlow</a>
                                    </span>
                                    <span>
                                        <a href="#!" class="text-white">Bootstrap Angular</a>
                                    </span>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-3 text-white">Hubungi Kami</h6>
                                <span>
                                    <a href="#!" class="text-white">MDBootstrap</a>
                                </span>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-3 text-white">Follow Kami</h6>
                                <span>
                                    <a href="#!" class="uil uil-facebook h4 text-white"></a>
                                </span>
                                <span>
                                    <a href="#!" class=" uil uil-instagram h4 text-white"></a>
                                </span>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-3 text-white">Download</h6>
                                <span>
                                    <img src="{{ asset('assets/img/google-play.png') }}" class="img-fluid">
                                </span>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2020 Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
            </footer>

        </section>
    </main>

</body>

</html>
