<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style/article-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EduMind - Article</title>

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
            <div class="collapse navbar-collapse" " id=" navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sejarah') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="program-page.html">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="discuss-page.html">Diskusi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('article') }}">Artikel</a>
                    </li>
                    <li class="nav-item log-in">
                        <a class="nav-link text-center text-black fw-bold" href="login-page.html">Masuk</a>
                    </li>
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
    <section class="header">
        <img class="vector-above img-fluid" src="{{ asset('frontend/assets/bg/vector-1.png') }}" alt="" width="600px">
        <img class="vector-below img-fluid d-none d-lg-block" src="{{ asset('frontend/assets/bg/vector-2.png') }}"
            alt="" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-12 col-lg-6 d-flex align-items-center">
                    <div class="text">
                        <h1>EDUMIND</h1>
                        <h4>Artikel</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="{{ asset('frontend/assets/illustration/ill-5.png') }}" alt=""
                        width="500px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container">
            <h5 class="text-white text-center">Beranda > Artikel > Semua </h5>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Article -->
    <section class="article">
        <div class="container mt-3">
            <div class="article-categories mt-5">
                <div class="row slider">
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category-active text-white">
                            Semua
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                    <div class="category-item d-flex justify-content-center">
                        <a type="submit" href="#" class="btn btn-category text-white">
                            Kategori
                        </a>
                    </div>
                </div>
            </div>
            <div class="article-cards mt-5">
                <div class="row">
                    <div class="col-12 col-lg-4 mt-4">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{ asset('frontend/assets/illustration/no-photo.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-date">31 Agustus 2021, Admin</p>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris ut enim in massa fringilla </h5>
                                <div class="card-act d-flex justify-content-between mt-3">
                                    <a href="{{ route('detailarticle') }}" class="btn btn-primary">Selengkapnya</a>
                                    <h5 class="card-date">Kategori</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mt-4">
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{ asset('frontend/assets/illustration/no-photo.png') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-date">31 Agustus 2021, Admin</p>
                                <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Mauris ut enim in massa fringilla </h5>
                                <div class="card-act d-flex justify-content-between mt-3">
                                    <a href="{{ route('detailarticle') }}" class="btn btn-primary">Selengkapnya</a>
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
                        Sekarang</a></span></h3>
        </div>
    </section>
    <!-- ENnd of Tagline buttom -->

    <!-- Footer -->
    <footer>
        <div class="container py-5">
            <div class="row text-white">
                <div class="col-6 col-lg-4">
                    <div class="footer-text">
                        <h4>Tentang Kami</h4>
                        <p>Edumind adalah sebuah situs untuk kumpulan event online seperti webinar, workshop, ataupun
                            kursus dan juga terdapat ruang untuk diskusi.</p>
                    </div>
                </div>
                <div class="col-6 col-lg-2">
                    <h4>Media Sosial</h4>
                    <div class="social-list text-white">
                        <div class="social-item">
                            <img src="{{ asset('frontend/assets/ic/instagram.png') }}" alt="">
                            <a href="#">instagram</a>
                        </div>
                        <div class="social-item">
                            <img src="{{ asset('frontend/assets/ic/facebook.png') }}" alt="">
                            <a href="#">facebook</a>
                        </div>
                        <div class="social-item">
                            <img src="{{ asset('frontend/assets/ic/twitter.png') }}" alt="">
                            <a href="#">twitter</a>
                        </div>
                        <div class="social-item">
                            <img src="{{ asset('frontend/assets/ic/web.png') }}" alt="">
                            <a href="#">web</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <h4>Kontak</h4>
                    <div class="contact-list text-white">
                        <div class="contact-item">
                            <img src="{{ asset('frontend/assets/ic/phone.png') }}" alt="">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="{{ asset('frontend/assets/ic/whatsapp.png') }}" alt="">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="{{ asset('frontend/assets/ic/telegram.png') }}" alt="">
                            <a href="#">089632101841</a>
                        </div>
                        <div class="contact-item">
                            <img src="{{ asset('frontend/assets/ic/email.png') }}" alt="">
                            <a href="#">edumindindonedia@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <img src="{{ asset('frontend/assets/ic/logo-vertical.png') }}" alt="" width="120px">
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
        $('.slider').slick({
            dots: false,
            infinite: true,
            speed: 1200,
            slidesToShow: 5,
            slidesToScroll: 1,
            prevArrow: '<span class="prev-arrow"><i class="fas fa-chevron-left"></i></span>',
            nextArrow: '<span class="next-arrow"><i class="fas fa-chevron-right"></i></span>',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
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
