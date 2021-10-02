<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style/article-read-style.css') }}">
    <title>EduMind - Article Read</title>

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
                <div class="header-text col-6 d-flex align-items-center">
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
            <h5 class="text-white text-center">Beranda > Artikel > Detail </h5>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- Article Body -->
    <section class="article-body">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9" s>
                    <div class="article-text">
                        <div class="article-text-title">
                            <h1>Judul Article</h1>
                        </div>
                        <div class="article-text-info d-flex justify-content-between">
                            <h5>Penulis</h5>
                            <h5>Tanggal Terbit</h5>
                        </div>
                        <div class="article-text-img">
                            <img src="{{ asset('frontend/assets/ic/blank.png') }}" alt="">
                        </div>
                        <div class="article-text-paragraph">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia
                                deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia
                                deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia
                                deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="article-text-insight d-flex justify-content-between">
                            <div class="like-comment mt-3">
                                <div class="like d-inline">
                                    <span>19.721</span>
                                    <img class="me-0" src="{{ asset('frontend/assets/ic/like.png') }}"
                                        alt="" width="24px">
                                </div>
                                <div class="comment d-inline mx-3">
                                    <span>31</span>
                                    <img class="me-0" src="{{ asset('frontend/assets/ic/commment.png') }}"
                                        alt="">
                                </div>
                                <span>Kategori</span>
                            </div>
                            <div class="share mt-2">
                                <span>Bagikan</span>
                                <img src="{{ asset('frontend/assets/ic/share.png') }}" alt="">
                            </div>
                        </div>

                        <div class="article-comment mt-3">
                            <div class="article-comment-box">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Komennya yg sopan ya adick-adick</label>
                                </div>
                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary ms-auto">Kirim</button>
                                </div>
                            </div>
                            <div class="article-comment-display mt-3">
                                <div class="comment-info d-flex justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="{{ asset('frontend/assets/ic/person-comment.png') }}"
                                            alt="profile-img" width="48px">
                                        <div class="d-block">
                                            <span class="d-block fw-bold">Nama pengguna</span>
                                            <span class="d-block">Waktu komentar (Mis: 20 jam yang lalu, 1 hari
                                                yang lalu, dst)</span>
                                        </div>
                                    </div>
                                    <a href="">
                                        <img class="" src=" {{ asset('frontend/assets/ic/report.png') }}"
                                            alt="report-img" width="40px">
                                    </a>
                                </div>
                                <div class="comment-text">
                                    <p>
                                        Komentar yang dikirim oleh pengguna lainnya lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua.
                                    </p>
                                </div>
                                <div class="like-comment mt-3 d-flex">
                                    <div class="like d-inline align-self-center">
                                        <span>19.721</span>
                                        <img class="me-0" src="{{ asset('frontend/assets/ic/like.png') }}"
                                            alt="" width="24px">
                                    </div>
                                    <div class="comment d-inline mx-3 align-self-center">
                                        <span>31</span>
                                        <img class="me-0"
                                            src="{{ asset('frontend/assets/ic/commment.png') }}" alt="">
                                    </div>
                                    <div class="ms-auto">
                                        <button type="submit" class="btn btn-primary">Balas</button>
                                    </div>
                                </div>
                            </div>

                            <div class="article-comment-reply mt-3 ps-5">
                                <div class="article-comment-box">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Balasnya yg sopan ya adick-adick</label>
                                    </div>
                                    <div class="d-flex">
                                        <button type="submit" class="btn btn-primary ms-auto">Kirim</button>
                                    </div>
                                </div>
                                <div class="article-comment-display mt-3">
                                    <div class="comment-info d-flex justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="{{ asset('frontend/assets/ic/person-comment.png') }}"
                                                alt="profile-img" width="48px">
                                            <div class="d-block">
                                                <span class="d-block fw-bold">Nama pengguna</span>
                                                <span class="d-block">Waktu komentar (Mis: 20 jam yang lalu, 1
                                                    hari yang lalu, dst)</span>
                                            </div>
                                        </div>
                                        <a class="report" href="">
                                            <img class="" src=" {{ asset('frontend/assets/ic/report.png') }}"
                                                alt="report-img" width="40px">
                                        </a>
                                    </div>
                                    <div class="comment-text">
                                        <p>
                                            Komentar yang dikirim oleh pengguna lainnya lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua.
                                        </p>
                                    </div>
                                    <div class="like-comment mt-3 d-flex">
                                        <div class="like d-inline align-self-center">
                                            <span>19.721</span>
                                            <img class="me-0"
                                                src="{{ asset('frontend/assets/ic/like.png') }}" alt="" width="24px">
                                        </div>
                                        <div class="comment d-inline mx-3 align-self-center">
                                            <span>31</span>
                                            <img class="me-0"
                                                src="{{ asset('frontend/assets/ic/commment.png') }}" alt="">
                                        </div>
                                        <div class="ms-auto">
                                            <button type="submit" class="btn btn-primary">Balas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article Sidebar -->
                <div class="col-12 col-lg-3 sidebar d-none d-lg-block">
                    <div class="article-category mb-4">
                        <div class="article-heading">
                            <img src="{{ asset('frontend/assets/ic/category-article.png') }}" class="d-inline"
                                width="18px">
                            <h4 class="d-inline">Kategori Artikel</h4>
                        </div>
                        <div class="article-list">
                            <ul class="px-0 pb-3">
                                <li class="text-black list-unstyled">Semua</li>
                                <li class="text-black list-unstyled">Kategori</li>
                                <li class="text-black list-unstyled">Kategori</li>
                                <li class="text-black list-unstyled">Kategori</li>
                                <li class="text-black list-unstyled">Kategori</li>
                            </ul>
                        </div>
                    </div>
                    <div class="article-newest mb-4">
                        <div class="article-heading">
                            <img src="{{ asset('frontend/assets/ic/article.png') }}" class="d-inline"
                                width="18px">
                            <h4 class="d-inline">Artikel Terkini</h4>
                        </div>
                        <div class="article-list">
                            <div class="article-card p-3">
                                <img class="img-fluid mx-0 mb-2" src="{{ asset('frontend/assets/ic/blank.png') }}"
                                    alt="">
                                <p>31 Agustus 2021, Admin</p>
                                <h4>Judul artikel yang panjang lebih dari 2 baris</h4>
                                <div class="card-act d-flex justify-content-between mt-3 px-0 pb-3">
                                    <span>Kategori</span>
                                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-category mb-4">
                        <div class="article-heading">
                            <img src="{{ asset('frontend/assets/ic/program.png') }}" class="d-inline"
                                width="18px">
                            <h4 class="d-inline">Program</h4>
                        </div>
                        <div class="article-list">
                            <ul class="px-0 pb-3">
                                <li class="text-black list-unstyled">Program</li>
                                <li class="text-black list-unstyled">Program</li>
                                <li class="text-black list-unstyled">Program</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Article Body -->


    <!-- Tagline buttom -->
    <section class="tagline mt-5">
        <div class="container d-flex justify-content-center text-white">
            <h3 class="m-0">Ingin berpartisipasi dalam suatu event atau diskusi? <span><a href="#">Daftar
                        Sekarang</a></span>
            </h3>
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
                            <img src="{{ asset('frontenfrontend/assets/ic/instagram.png') }}" alt="">
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
</body>

</html>
