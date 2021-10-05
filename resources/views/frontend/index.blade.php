<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EduMind</title>

</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('frontend/assets/ic/logo-horizontal.png') }}" width="120px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i title="" class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(Auth::user())
                      @include('frontend.nav-loged');
                    @else
                      @include('frontend.nav')
                    @endif
                </ul>
                <div class="box-container">
                    <table class="element-container">
                        <tr>
                            <td>
                                <form action="">
                                    <input type="text" placeholder="Cari.." class="search">
                                </form>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/ic/search-white.png') }}" width="14px"
                                        alt="search">
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navigation Bar -->

    <!-- Header -->
    <section class="header mb-0">
        <img class="vector-below img-fluid" src="{{ asset('frontend/assets/bg/vector-2.png') }}" width="600px">
        <img class="vector-above img-fluid" src="{{ asset('frontend/assets/bg/vector-1.png') }}" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text text-center text-lg-start">
                        <h4 class="text-uppercase">Selamat Datang di Situs</h4>
                        <img class="img-fluid" src="{{ asset('frontend/assets/ic/edumind-header.png') }}"
                            alt="Edumind-heading" width="450px">
                        <p>Edumind adalah sebuah situs yang berisi kumpulan event online seperti webinar, workshop,
                            ataupun kursus
                            dan juga terdapat ruang untuk diskusi.</p>
                        @if(Auth::user())
                        @else
                          <form action="{{ route('register') }}" method="get">
                            @csrf
                            <button type="submit" class="btn text-white fw-bold">Daftar Akun</button>
                          </form>
                        @endif
                    </div>
                </div>
                <div class="header-img col-12 col-lg-6 d-none d-lg-flex align-items-end">
                    <img class="img-fluid" src="{{ asset('frontend/assets/illustration/ill-1.png') }}"
                        alt="illustration" width="600px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Statistic -->
    <section class="statistic mt-0">
        <div class="container">
            <div class="row statistic-row">
                <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                    <div class="row">
                        <div class="col-5 img-column">
                            <img class="img-fluid float-end" src="{{ asset('frontend/assets/ic/person.png') }}"
                                width="60px">
                        </div>
                        <div class="col-7 text-column text-white">
                            <h3>310.901</h3>
                            <h6>Akun Terdaftar</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                    <div class="row">
                        <div class="col-5 img-column">
                            <img class="img-fluid float-end" src="{{ asset('frontend/assets/ic/event.png') }}"
                                width="60px">
                        </div>
                        <div class="col-7 text-column text-white">
                            <h3>310.901</h3>
                            <h6>Event Terdaftar</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                    <div class="row">
                        <div class="col-5 img-column">
                            <img class="img-fluid float-end" src="{{ asset('frontend/assets/ic/world.png') }}"
                                width="60px">
                        </div>
                        <div class="col-7 text-column text-white">
                            <h3>310.901</h3>
                            <h6>Pengunjung Situs</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 my-3 mb-lg-2 my-lg-0">
                    <div class="row">
                        <div class="col-5 img-column">
                            <img class="img-fluid float-end" src="{{ asset('frontend/assets/ic/handshake.png') }}"
                                width="60px">
                        </div>
                        <div class="col-7 text-column text-white">
                            <h3>310.901</h3>
                            <h6>Partnerships</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Statistic -->

    <!-- 2W Questions Section -->
    <section class="TwoWQuestions mt-5 px-4 p-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 px-5 pt-5">
                    <img class="img-fluid" src="{{ asset('frontend/assets/illustration/ill-2.png') }}"
                        alt="illustration" width="500px">
                </div>
                <div class="col-12 col-lg-6 text-what">
                    <h4>What</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-lg-6 text-why">
                    <h4>Why</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur.</p>
                </div>
                <div class="col-12 col-lg-6 px-5 pt-5">
                    <img class="img-fluid" src="{{ asset('frontend/assets/illustration/ill-3.png') }}"
                        alt="illustration" width="500px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of 2W Questions Section -->

    <!-- Our Features -->
    <section class="our-features mt-5">
        <div class="container">
            <div class="our-features-header d-flex justify-content-center text-white">
                <img class="img-fluid mx-5 d-none d-lg-block" src="{{ asset('frontend/assets/ic/arrow-left.png') }}">
                <h1>FITUR KAMI</h1>
                <img class="img-fluid mx-5 d-none d-lg-block"
                    src="{{ asset('frontend/assets/ic/arrow-right.png') }}">
            </div>
            <div class="our-features-cards">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="card mx-auto mb-4 mb-lg-0" style="width: 18rem;">
                            <img src="{{ asset('frontend/assets/illustration/card-ill-1.png') }}"
                                class="card-img-top m-0 p-4" alt="illustration" width="200px">
                            <div class="card-body">
                                <h5 class="card-title">Forum Diskusi</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod </p>
                                <div class="float-end">
                                    <a href="#" class="btn">Selengkapnya <span> <img
                                                src="{{ asset('frontend/assets/ic/arrow-mini-right.png') }}">
                                        </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card mx-auto mb-4 mb-lg-0" style="width: 18rem;">
                            <img src="{{ asset('frontend/assets/illustration/card-ill-2.png') }}"
                                class="card-img-top m-0 p-4" alt="illustration" width="200px">
                            <div class="card-body">
                                <h5 class="card-title">Forum Diskusi</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod </p>
                                <div class="float-end">
                                    <a href="#" class="btn">Selengkapnya <span> <img
                                                src="{{ asset('frontend/assets/ic/arrow-mini-right.png') }}" alt="">
                                        </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card mx-auto mb-4 mb-lg-0" style="width: 18rem;">
                            <img src="{{ asset('frontend/assets/illustration/card-ill-3.png') }}"
                                class="card-img-top m-0 p-4" alt="illustration" width="200px">
                            <div class="card-body">
                                <h5 class="card-title">Forum Diskusi</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod </p>
                                <div class="float-end">
                                    <a href="#" class="btn">Selengkapnya <span> <img
                                                src="{{ asset('frontend/assets/ic/arrow-mini-right.png') }}" alt="">
                                        </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card mx-auto mb-4 mb-lg-0" style="width: 18rem;">
                            <img src="{{ asset('frontend/assets/illustration/card-ill-4.png') }}"
                                class="card-img-top m-0 p-4" alt="illustration" width="200px">
                            <div class="card-body">
                                <h5 class="card-title">Forum Diskusi</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod </p>
                                <div class="float-end">
                                    <a href="#" class="btn">Selengkapnya <span> <img
                                                src="{{ asset('frontend/assets/ic/arrow-mini-right.png') }}">
                                        </span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Features -->

    <!-- FAQ -->
    <section class="faq-dropdown">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 d-none d-lg-block">
                    <div class="d-flex justify-content-end align-self-lg-center">
                        <img class="img-fluid" src="{{ asset('frontend/assets/illustration/ill-4.png') }}"
                            alt="illustration" width="450px">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="question-col">
                        <h2 class="title text-center text-lg-start">Frequently Asked Questions</h2>
                        <div class="quetion-list">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Bagaimana cara mengikuti webinar, workshop, dan kursus di Edumind?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Bagaimana cara daftar di Edumind?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Bagaimana cara mengunggah program di Edumind?
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of FAQ -->

    <!-- Tagline -->
    <section class="tagline">
        <div class="container d-flex justify-content-center text-white">
            <h3 class="m-0">Tagline</h3>
        </div>
    </section>
    <!-- ENnd of Tagline -->

    <!-- Testimonial & Article -->
    <section class="testimonial-article">
        <div class="container mt-3">
            <div class="testimonial-heading mx-auto text-center">
                <h1>Apa kata mereka?</h1>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper mt-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card" style="width: 650px; min-height: 380px;">
                            <div class="card-img d-flex justify-content-center py-4">
                                <img src="{{ asset('frontend/assets/profile/profile-1.jpeg') }}"
                                    class="img-fluid" alt="Photo-profile" width="150px">
                            </div>
                            <div class="card-body text-center p-4">
                                <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                <h5 class="card-title">- yung Bram</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 650px; min-height: 380px;">
                            <div class="card-img d-flex justify-content-center py-4">
                                <img src="{{ asset('frontend/assets/profile/profile-1.jpeg') }}"
                                    class="img-fluid" alt="Photo-profile" width="150px">
                            </div>
                            <div class="card-body text-center p-4">
                                <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                <h5 class="card-title">- yung Bram</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 650px; min-height: 380px;">
                            <div class="card-img d-flex justify-content-center py-4">
                                <img src="{{ asset('frontend/assets/profile/profile-1.jpeg') }}"
                                    class="img-fluid" alt="Photo-profile" width="150px">
                            </div>
                            <div class="card-body text-center p-4">
                                <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                <h5 class="card-title">- yung Bram</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 650px; min-height: 380px;">
                            <div class="card-img d-flex justify-content-center py-4">
                                <img src="{{ asset('frontend/assets/profile/profile-1.jpeg') }}"
                                    class="img-fluid" alt="Photo-profile" width="150px">
                            </div>
                            <div class="card-body text-center p-4">
                                <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                <h5 class="card-title">- yung Bram</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 650px; min-height: 380px;">
                            <div class="card-img d-flex justify-content-center py-4">
                                <img src="{{ asset('frontend/assets/profile/profile-1.jpeg') }}"
                                    class="img-fluid" alt="Photo-profile" width="150px">
                            </div>
                            <div class="card-body text-center p-4">
                                <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                <h5 class="card-title">- yung Bram</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card" style="width: 650px; min-height: 380px;">
                            <div class="card-img d-flex justify-content-center py-4">
                                <img src="{{ asset('frontend/assets/profile/profile-1.jpeg') }}"
                                    class="img-fluid" alt="Photo-profile" width="150px">
                            </div>
                            <div class="card-body text-center p-4">
                                <p class="card-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et nostrud exercitation ullac.”</p>
                                <h5 class="card-title">- yung Bram</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonial -->

    <!-- Article -->
    <section class="article">
        <div class="container mt-3">
            <div class="article-heading mx-auto">
                <h1>Artikel Terkini</h1>
            </div>
            <div class="article-cards mt-5">
                <div class="row slider">
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{ asset('frontend/assets/illustration/no-photo.png') }}"
                                class="card-img-top" alt="illustration">
                            <div class="card-body">
                                <p class="card-date">31 Agustus 2021, Admin</p>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris ut enim in massa
                                    fringilla </h5>
                                <div class="card-act d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                    <h5 class="card-date">Kategori</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{ asset('frontend/assets/illustration/no-photo.png') }}"
                                class="card-img-top" alt="illustration">
                            <div class="card-body">
                                <p class="card-date">31 Agustus 2021, Admin</p>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris ut enim in massa
                                    fringilla </h5>
                                <div class="card-act d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                    <h5 class="card-date">Kategori</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{ asset('frontend/assets/illustration/no-photo.png') }}"
                                class="card-img-top" alt="illustration">
                            <div class="card-body">
                                <p class="card-date">31 Agustus 2021, Admin</p>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris ut enim in massa
                                    fringilla </h5>
                                <div class="card-act d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                    <h5 class="card-date">Kategori</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{ asset('frontend/assets/illustration/no-photo.png') }}"
                                class="card-img-top" alt="illustration">
                            <div class="card-body">
                                <p class="card-date">31 Agustus 2021, Admin</p>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris ut enim in massa
                                    fringilla </h5>
                                <div class="card-act d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                    <h5 class="card-date">Kategori</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Article -->

    <!-- Tagline buttom -->
    <section class="tagline mt-5">
        <div class="container d-flex justify-content-center text-white">
            <h3 class="m-0">Ingin berpartisipasi dalam suatu event atau diskusi? <span><a href="#">Daftar
                        Sekarang</a></span>
            </h3>
        </div>
    </section>
    <!-- ENd of Tagline buttom -->

    <!-- Footer -->
    <footer>
        <div class="container py-5">
            <div class="row text-white">
                <div class="col-6 col-lg-4">
                    <div class="footer-text">
                        <h4>Tentang Kami</h4>
                        <p>Edumind adalah sebuah situs untuk kumpulan event online seperti webinar, workshop, ataupun
                            kursus dan
                            juga terdapat ruang untuk diskusi.</p>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h4>Media Sosial</h4>
                    <div class="social-list text-white">
                        <div class="social-item">
                            <img src="{{ asset('frontend/assets/ic/instagram.png') }}">
                            <a href="#">instagram</a>
                        </div>
                        <div class="social-item">
                            <img src="{{ asset('frontend/assets/ic/facebook.png') }}">
                            <a href="#">facebook</a>
                        </div>
                        <div class="social-item">
                            <img src="{{ asset('frontend/assets/ic/twitter.png') }}">
                            <a href="#">twitter</a>
                        </div>
                        <div class="social-item">
                            <img src="{{ asset('frontend/assets/ic/web.png') }}">
                            <a href="#">web</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <h4>Kontak</h4>
                    <div class="contact-list text-white">
                        <div class="contact-item">
                            <img src="{{ asset('frontend/assets/ic/phone.png') }}">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="{{ asset('frontend/assets/ic/whatsapp.png') }}">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="{{ asset('frontend/assets/ic/telegram.png') }}">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="{{ asset('frontend/assets/ic/email.png') }}">
                            <a href="#">edumindindonedia@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <img src="{{ asset('frontend/assets/ic/logo-vertical.png') }}" alt="EduMind-Logo" width="120px">
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Copyright -->
    <section class="copyright">
        <div class="container text-center p-2">
            <p class="text-white m-0">Edumind @2021. All rights reserved.</p>
        </div>
    </section>
    <!-- End of Copyright -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/b3b03a4327.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "2",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: false,
            },
            loop: true,
            breakpoints: {

                // when window width is >= 320px
                320: {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "1",
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 100,
                        modifier: 2,
                        slideShadows: false,
                    },
                    loop: true,
                },
                // when window width is >= 320px
                992: {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "2",
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 100,
                        modifier: 2,
                        slideShadows: false,
                    },
                    loop: true,
                },
            }
        });
    </script>

    <script>
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 1200,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
</body>

</html>
