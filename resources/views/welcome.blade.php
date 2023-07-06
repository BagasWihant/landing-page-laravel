<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ isset($info->nama_website) ? $info->nama_website : 'Title' }}</title>
    <link rel="shortcut icon" href="{{ isset($info->logo_web) ? $info->logo_web : '' }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Styles -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/css/custom-style-bagas.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <style>
        .back_color_atas {
            background-color: {{ isset($info->back_color_atas) ? $info->back_color_atas : '#fbcf33' }};
        }
        .font_color_atas{
            color: {{ isset($info->font_color_atas) ? $info->font_color_atas : '#fff' }};

        }
        .font_color_foot{
            color: {{ isset($info->font_color_foot) ? $info->font_color_foot : '#fff' }};
        }
        .back_color_foot{
            background-color: {{ isset($info->back_color_foot) ? $info->back_color_foot : '#344767' }};
        }
    </style>
</head>

<body class="g-sidenav-show">


    <main class="main-content position-relative max-height-vh-100 ">
        {{-- Tampilan pertama --}}
        <section class="back_color_atas">

            <nav class="navbar shadow-none navbar-expand-lg  px-0 mx-4">
                <div class="container-fluid">
                    <div class="navbar-brand bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 d-flex">
                        <img src="{{ isset($info->logo_web) ? $info->logo_web : 'https://gas.id/files/images/srvphp_1662943062.png' }}"
                            class="navbar-brand-img">
                        <span
                            class="h2 m-0 align-items-center d-flex font_color_atas">{{ isset($info->nama_website) ? $info->nama_website : 'Title' }}</span>
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
                                <a class="h6 mx-3 text-uppercase active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="h6 mx-3 text-uppercase" href="#fitur">fitur</a>
                            </li>
                            <li class="nav-item">
                                <a class="h6 mx-3 text-uppercase" href="#kategori">kategori</a>
                            </li>
                            @if (isset($info->maps))
                                <li class="nav-item">
                                    <a class="h6 mx-3 text-uppercase" href="#lokasi">lokasi</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="h6 mx-3 text-uppercase" href="#about">about</a>
                            </li>
                            <li class="nav-item show-992">
                                <a href="{{ route('login') }}"
                                    class="btn btn-sm bg-gradient-secondary btn-secondary">masuk</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hide-992">
                        <a href="{{ route('login') }}" class="btn btn-sm bg-gradient-secondary btn-secondary">masuk</a>
                    </div>
                </div>
            </nav>

            <div class=" container py-4" id="home">
                <div class="d-flex flex-row">
                    <div class="d-flex align-items-center row flex-reverse">
                        <div class="col-md-6 text-left">
                            <h1 class="font_color_atas">{{ isset($info->title) ? $info->title : 'Judul utama' }}</h1>
                            <span
                                class="text-dark">{{ isset($info->deskripsi) ? $info->deskripsi : 'Deskripsi Judul utama' }}</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ isset($info->gambar) ? $info->gambar : asset('assets/img/top.jpg') }}"
                                class="img-custom-mode img-fluid">
                        </div>
                    </div>
                </div>

                <div class="icon py-5">
                    @if (isset($sosmed->facebook))
                        <a class="uil uil-facebook h3 mx-1 text-white " href="{{ $sosmed->facebook }}"></a>
                    @endif
                    @if (isset($sosmed->twitter))
                        <a class="uil uil-twitter h3 mx-1 text-white " href="{{ $sosmed->twitter }}"></a>
                    @endif
                    @if (isset($sosmed->youtube))
                        <a class="uil uil-youtube h3 mx-1 text-white " href="{{ $sosmed->youtube }}"></a>
                    @endif
                    @if (isset($sosmed->instagram))
                        <a class="uil uil-instagram h3 mx-1 text-white" href="{{ $sosmed->instagram }}"></a>
                    @endif
                </div>
            </div>
        </section>

        {{-- tampilan Fitur --}}
        <section id="fitur" data-aos="zoom-out-up" data-aos-delay="600" data-aos-duration="3000" class="py-8">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-uppercase">POPULER FITUR</h2>
                    <h6>Beberapa Fitur Kami </h6>
                </div>

                <div class="row d-flex justify-content-center">
                    @foreach ($fitur as $f)
                        <div class="col-md-2 text-center">
                            <div class="card my-3 shadow-md border-radius-xl">
                                <img src="{{ asset($f->gambar) }}" class="img-fluid img-card-fitur px-2">
                            </div>
                            <span class="h6">{{ $f->nama }}</span>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        {{-- tampilan KATEGORI --}}
        <section id="kategori" data-aos="zoom-in-up" data-aos-delay="600" data-aos-duration="3000" class="py-8">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-uppercase">Kategori</h2>
                    <h6>Daftar kategori kami</h6>
                </div>

                <div class="list-group overflow-auto list-group-horizontal d-flex justify-content-center">
                    @foreach ($kategori as $k)
                        <div class="col-md-4 col-lg-3  mx-3 d-flex align-items-stretch">
                            <div class="card my-3 shadow-md">
                                <div class="card-header">
                                    <img src="{{ $k->gambar }}" class="img-fluid img-card-fitur">
                                </div>
                                <div class="card-body d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <span class="h6">{{ $k->title }}</span>
                                        <span class="wrap-anywhere">{{ $k->deskripsi }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="container py-8" id="">
            @foreach ($gambar as $img)
                <div data-aos="{{ $loop->even ? 'zoom-out-up' : 'zoom-in-right' }}" data-aos-delay="600"
                    data-aos-duration="3000" class="d-flex flex-row py-6">
                    <div
                        class="d-flex align-items-center row flex-reverse {{ $img->tampilan == 1 ? 'flex-row-reverse' : '' }}">
                        <div
                            class="col-md-6 d-flex {{ $img->tampilan == 1 ? 'justify-content-end' : 'justify-content-start' }}">
                            <span class="text-dark h1">{{ $img->judul ? $img->judul : 'Judul utama' }}</span>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ $img->gambar ? $img->gambar : asset('assets/img/top.jpg') }}"
                                class="img-custom-mode img-fluid">
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

        @if (isset($info->maps))
            <section id="lokasi" data-aos="zoom-in-up" data-aos-duration="3000" data-aos-delay="600"
                class="py-9 text-center container">
                <h2 class="text-uppercase">lokasi kami</h2>
                <div class="ratio ratio-21x9 ">

                    <iframe src="{{ $info->maps }}" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </section>
        @endif

        <section id='about' data-aos="zoom-in-down" data-aos-delay="600" data-aos-duration="3000"
            class="text-center container py-9">
            <h2 class="text-uppercase">Tentang Kami</h2>
            <span>{{ isset($info->about_us) ? $info->about_us : 'Deskripsikan Perusahaan anda' }}</span>

        </section>

        <section id='kata' data-aos="zoom-in-right" data-aos-duration="3000"
            class="text-center container py-9">
            <h2 class="text-uppercase">{{ isset($slogan->judul) ? $slogan->judul : 'Isi Slogannya' }}</h2>
            <span>{{ isset($slogan->text) ? $slogan->text : 'Isi deskripsi Slogannya' }}</span>

        </section>

        <section id='penutup' data-aos="zoom-out" data-aos-duration="3000" class="text-center container py-9">
            <div class="row d-flex justify-content-center">
                @foreach ($layanan as $lay)
                    <div class="col-md-6">
                        <div class="card-plain d-flex">
                            <div class="">
                                <img src="{{ $lay->gambar ? $lay->gambar : 'https://gas.id/files/images/srvphp_1662943062.png' }}"
                                    class="img-fluid img-card-penutup">
                            </div>
                            <div class="text-start">
                                <h6>{{ $lay->title ? $lay->title : 'Default Layanan Title' }}</h6>
                                <span>
                                    {{ $lay->deskripsi ? $lay->deskripsi : 'Default Layanan deskripsi' }}
                                </span>
                                <button class="float-end btn-sm btn btn-warning bg-gradient-warning">Lihat
                                    selengkapnya</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="back_color_foot font_color_foot">
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
                                    <img src="{{ isset($info->logo_web) ? $info->logo_web : 'https://gas.id/files/images/srvphp_1662943062.png' }}"
                                        class="img-card-penutup mx-2">
                                    <div class="align-items-center d-flex ">

                                        <span
                                            class="h2 m-0 text-white">{{ isset($info->nama_website) ? $info->nama_website : 'Title' }}</span>
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
                                        <a href="#!" class="text-white">Syarat dan ketentuan</a>
                                    </span>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-3 text-white">Hubungi Kami</h6>
                                <span>
                                    <a href="#!" class="text-white">Saran dan Kritik</a>
                                </span>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-3 text-white">Follow Kami</h6>

                                @if (isset($sosmed->facebook))
                                    <a class="uil uil-facebook h3 mx-1 text-white "
                                        href="{{ $sosmed->facebook }}"></a>
                                @endif
                                @if (isset($sosmed->twitter))
                                    <a class="uil uil-twitter h3 mx-1 text-white " href="{{ $sosmed->twitter }}"></a>
                                @endif
                                @if (isset($sosmed->youtube))
                                    <a class="uil uil-youtube h3 mx-1 text-white " href="{{ $sosmed->youtube }}"></a>
                                @endif
                                @if (isset($sosmed->instagram))
                                    <a class="uil uil-instagram h3 mx-1 text-white"
                                        href="{{ $sosmed->instagram }}"></a>
                                @endif
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                                <!-- Links -->
                                <h6 class="text-uppercase mb-3 text-white">Download</h6>
                                <a href="{{ isset($sosmed->playstore) ? $sosmed->playstore : '#' }}">
                                    <img src="{{ asset('assets/img/google-play.png') }}" class="img-fluid">
                                </a>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2023 Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/">Bagas Wihant</a>
                </div>
                <!-- Copyright -->
            </footer>

        </section>
    </main>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
