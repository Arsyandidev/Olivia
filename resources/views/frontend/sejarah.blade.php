<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style/profile-sejarah-style.css') }}">
    <title>EduMind - Sejarah</title>

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
                        <a class="nav-link active" href="{{ route('sejarah') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="program-page.html">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="discuss-page.html">Diskusi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article') }}">Artikel</a>
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
        <img class="vector-below img-fluid" src="{{ asset('frontend/assets/bg/vector-2.png') }}" alt="" width="600px">
        <img class="vector-above img-fluid d-none d-lg-block" src="{{ asset('frontend/assets/bg/vector-1.png') }}"
            alt="" width="600px">
        <div class="container">
            <div class="row">
                <div class="header-text col-6 d-flex align-items-center">
                    <div class="text">
                        <h1>EDUMIND</h1>
                        <h4 style="margin-top: -50px;">Sejarah</h4>
                    </div>
                </div>
                <div class="header-img col-6 d-none d-lg-flex align-self-end">
                    <img class="img-fluid ms-auto" src="frontend/assets/illustration/ill-6.png" alt="" width="500px">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container">
            <h5 class="text-white text-center">Beranda > Profie > Sejarah </h5>
        </div>
    </section>
    <!-- End of Breadcrumb -->

    <!-- History -->
    <section class="history">
        <div class="container mt-3">
            <div class="history-heading mx-auto text-center mb-5">
                <h1>Sejarah</h1>
            </div>
            <div class="history-body">
                <div class="history-body-img text-center mb-5">
                    <img src="{{ asset('frontend/assets/ic/sejarah.png') }}" alt="gedung vokasi IPB" width="700px">
                </div>
                <div class="history-body-text">
                    <p>Program pendidikan Diploma dibuka pertama kali oleh IPB pada tahun 1979. Pada tahun
                        1980 program tersebut berubah nama menjadi Fakultas Politeknik Pertanian. Berdasarkan Peraturan
                        Pemerintah No. 30 Tahun 1990 Fakultas Politeknik Pertanian ditiadakan dan program-program
                        diploma yang berada dibawahnya harus diintegrasikan dalam fakultas yang relevan. Selanjutnya
                        sejak
                        tahun 1992 Program Studi Pendidikan Diploma di IPB dikelola oleh jurusan atau fakultas yang ada
                        di
                        lingkungan IPB. Sampai dengan tahun 2004 terdapat 32 Program Studi Diploma yang bernaung di
                        bawah 7 fakultas yang berbeda.
                        Seiring dengan perkembangan dunia pendidikan yang dinamis, IPB melalui Peraturan
                        Pemerintah Nomor 154 Tahun 2000 telah ditetapkan sebagai Badan Hukum Milik Negara. Status
                        tersebut
                        memberi peluang pada IPB untuk terus mengembangkan diri untuk mendukung pengembangan
                        bidang pertanian dalam arti luas termasuk mengembangkan program pendidikan diploma.
                    </p>
                    <p>Pada tahun 2004 berdasarkan ketetapan Majelis Wali Amanat (MWA) IPB No. 17/MWA- IPB/2003 tentang
                        Anggaran Rumah Tangga IPB yang mengamanatkan politeknik sebagai wadah yang mengelola
                        pendidikan vokasi, maka IPB melakukan penataan dan restrukturisasi terhadap penyelenggaraan
                        pendidikan program diploma di IPB. Berdasar Surat Keputusan Rektor No. 124/ K13/OT/2004 tanggal
                        13
                        Juli 2004 dibentuk Direktorat Program Diploma IPB sebagai unit kerja yang diberi mandat
                        mengelola
                        penyelenggaraan pendidikan program diploma di IPB pada masa transisi menuju pengelolaan yang
                        mandiri.</p>
                    <p>Pada awal dibuka tahun 2004 Program Diploma IPB menyelenggarakan 13 Program Keahlian
                        sesuai dengan SK Rektor Nomor 073/K13/PP/2005 tanggal 17 Juni 2005. Pada tahun 2006 dibuka
                        Program Keahlian Akuntansi (SK Rektor Nomor 176/K13/PP/2006 tanggal 29 Desember 2006). Pada
                        tahun 2007 dibuka 2 program keahlian lagi yang merupakan program taylor made yaitu Program
                        Keahlian Perkebunan Kelapa Sawit (kerjasama dengan PT. Sinar Mas Agrotechnology ) dan Program
                        Keahlian Teknik Komputer Jaringan (kerjasama dengan Departemen Pendidikan Nasional). Selanjutnya
                        pada tahun 2009/2010 dibuka Program Keahlian Teknologi Produksi dan Pengembangan Masyarakat
                        Pertanian yang merupakan program taylor made kerjasama dengan Pemerintah Provinsi Jawa Barat.
                        Pada tahun 2010/2011 dibuka program keahlian ke-17 yaitu Program Keahlian Teknologi dan
                        Manajemen
                        Produksi Perkebunan. Pada tahun 2011/2012 program diploma membuka Program Keahlian Paramedik
                        Veteriner sebagai program keahlian ke-18.8Pendahuluan</p>
                    <p>Dalam rangka penjaminan mutu proses pendidikan dan pengajaran di Program Diploma IPB
                        pada tahun 2009 dilakukan akreditasi terhadap 14 program keahlian oleh Badan Akreditasi Nasional
                        Perguruan Tinggi. Ke-14 program keahlian tersebut telah memperoleh akreditasi. Penjaminan mutu
                        pada Sekolah Vokasi IPB saat ini masih mengacu pada dokumen Sistem Penjaminan Mutu Internal dan
                        Standar Mutu Program Pendidikan Diploma sebagai Peraturan Rektor IPB Nomor 06/IT3/DT/2013 pada
                        tanggal 12 September 2013. Pelaksanaan penjaminan mutu di Sekolah Vokasi IPB dipadukan dengan
                        Sistem Manajemen Mutu ISO 9001. Sistem Manajemen Mutu ISO 9001:2008 diberlakukan sejak tanggal
                        7 Juli 2009. Penerapan SM ISO merupakan bagian dari penjaminan mutu eksternal, dan setiap tahun
                        diaudit oleh auditor eksternal dari PT Sucofindo. Tujuan audit ini adalah untuk menjamin mutu
                        dan
                        implementasi penerapan SM ISO. Diharapkan dengan menerapkan SM. ISO ini, penjaminan mutu di
                        Sekolah Vokasi IPB menjadi lebih terarah, konsisten dan terukur.</p>
                    <p>
                        Pada tahun 2017 berdasarkan Keputusan Rektor IPB Nomor 228/IT3/OT/2017, tentang
                        Pembentukan Sekolah Vokasi Institut Pertanian Bogor, maka dibentuk Sekolah Vokasi Institut
                        Pertanian
                        Bogor. Berdasarkan SK Dekan Sekolah Vokasi IPB Nomor: 4036/IT3.53/KP/2020 dibentuk empat Divisi
                        yaitu:
                        1. Divisi Teknik Produksi, terdiri atas enam prodi. (Teknologi Industri Benih, Teknologi
                        Produksi
                        dan Manajemen Perikanan Budidaya, Teknologi dan Manajemen Ternak, Teknologi dan Manajemen
                        Produksi Perkebunan, Teknologi Produksi dan Pengembangan Masyarakat Pertanian, Paramedik
                        Veteriner)
                        2. Divisi Sistem Manajemen dan Rekayasa Terapan terdiri dari atas lima prodi. (Manajemen
                        Industri, Akuntansi, Supervisor Jaminan Mutu Pangan, Manajemen Industri Jasa Makanan dan Gizi).
                        3. Divisi Ekosistem, Lingkungan, dan Komunikasi Terapan, terdiri atas tiga prodi 4 prodi (Teknik
                        dan
                        Manajemen LIngkungan, KOmunikasi, Ekowisata, Analisis Kimia) 4. Divisi Teknik Digital Terapan,
                        terdiri
                        atas dua prodi (Manajemen informatika dan Teknik Komputer)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of History -->

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
</body>

</html>
