<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pusat Kelola Kekayaan Intelektual ITERA</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Scripts -->
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #DAA520; height: 39px;">
            <div class="container">
                <a class="navbar-brand" href="https://lp3m.itera.ac.id/" target="_blank">
                    <span class="brand-left">ITERA.AC.ID | LP3M ITERA </span>
                </a>
                <!-- Gunakan class "d-flex align-items-center" untuk menyatukan elemen secara horizontal -->
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="https://pkkiitera.com/" target="_blank">
                        <span class="brand-left">pkkiitera.com |</span>
                    </a>
        
                    <!-- Tambahkan ikon Instagram menggunakan Font Awesome -->
                    <a href="https://www.instagram.com/hkiitera/?hl=en" target="_blank" class="navbar-text ml-5">
                        <i class="fab fa-instagram" style="font-size: 25px; color: #000000;"></i>
                    </a>
                </div>
            </div>
        </nav>
        
    </div>
    
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #B80000;height: 68px;margin-bottom: 0;">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <a class="nav-link" href="{{ route('home') }}">
                        <img src="img/logo.png" alt="logo" style="max-height: 70px; max-width: 200px;">
                    </a>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('home') }}" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="homeDropdown" style="background-color: #B80000">
                                <li><a class="dropdown-item" style="color: white; border-bottom: 1px solid white;" href="/home">Beranda</a></li>
                                <li><a class="dropdown-item" style="color: white; border-bottom: 1px solid white;" href="/usertim">TIM PKKI</a></li>
                                <li><a class="dropdown-item" style="color: white;border-bottom: 1px solid white;" href="/sejarah">Sejarah Pendirian</a></li>
                                <li><a class="dropdown-item" style="color: white;border-bottom: 1px solid white;" href="/home">FAQ</a></li>
                            </ul>
                        </li>                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="layananDropdown" style="background-color: #B80000">
                                <li><a class="dropdown-item" style="color: white;border-bottom: 1px solid white;" href="/layanan">Layanan</a></li>
                                <li><a class="dropdown-item" style="color: white;border-bottom: 1px solid white;" href="/alur">Alur Layanan</a></li>
                                <li><a class="dropdown-item" style="color: white;border-bottom: 1px solid white;" href="/pendaftaran/create">Pendaftaran</a></li>
                                <li><a class="dropdown-item" style="color: white;border-bottom: 1px solid white;" href="/statuspendaftaran">Status Pendaftaran</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/userpanduan">Panduan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/userrekap">Rekap Intelektual</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/beritas">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/userkatalog">Katalog</a>                        
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/userdokumen">Dokumen</a>                        
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                    </ul>
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>


<!-- Setelah konten footer -->
<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31779.175929921414!2d105.33892500000002!3d-5.356238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c3562557fcbb%3A0x70e74e62c557e9!2sGedung%20C%20Institut%20Teknologi%20Sumatera!5e0!3m2!1sid!2sus!4v1694361525711!5m2!1sid!2sus" 
    width="1345" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h5 class="headin5_amrc col_white_amrc pt2" ><img src="img/logo.png" alt="logo" style="max-height: 100px; max-width: 250px;"></h5>
                    <p class="mb10">
                        Pusat Kelola Karya Intelektual (PKKI) ITERA, sebelumnya dikenal sebagai Sentra Hak Kekayaan Intelektual (HKI), adalah sebuah lembaga yang berperan sentral dalam mengelola dan melindungi karya intelektual di lingkungan Institut Teknologi Sumatera (ITERA), Sumatera Indonesia. Mulai dari tahun 2019 hingga 2022, PKKI berada di bawah naungan Lembaga Penelitian dan Pengabdian Kepada Masyarakat (LPPM) ITERA sebelum kemudian dipindahkan ke Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran (LPMPP) pada Juni 2023.
                        <br><br> PKKI ITERA bertujuan untuk mengidentifikasi, melindungi, dan mengembangkan potensi hak kekayaan intelektual (HKI) yang dimiliki oleh para akademisi dan staf ITERA. Tugas utamanya mencakup pengelolaan perlindungan HKI seperti hak cipta, merek, paten, dan lain-lain sesuai dengan peraturan yang berlaku. Selain itu, PKKI juga fokus pada potensi komersial dan pengembangan ilmu pengetahuan dan teknologi yang terkandung dalam karya-karya tersebut. PKKI ITERA juga bertanggung jawab untuk mendokumentasikan karya intelektual yang telah dilindungi dalam bentuk Katalog yang diterbitkan setiap tahunnya mulai tahun 2024. 
                        <br><br>Katalog ini mencakup daftar lengkap karya-karya yang telah diberikan perlindungan hak kekayaan intelektual seperti hak cipta, merek, paten, dan lain-lain. Dokumentasi ini memberikan gambaran komprehensif tentang potensi intelektual yang dimiliki oleh komunitas akademik ITERA dan menjadi referensi penting untuk pengembangan ilmu pengetahuan dan teknologi di lembaga tersebut.
                        </p>
                </div>
    
                <div class="col-md-4 col-12">
                    <h5 class="headin5_amrc col_white_amrc pt2"><br>Karya Intelektual (KI)</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <br>
                        <li class="bullet-list"><a href="#">Paten</a></li>
                        <li class="bullet-list"><a href="#">Paten sederhana</a></li>
                        <li class="bullet-list"><a href="#">Hak Cipta (Copy Right)</a></li>
                        <li class="bullet-list"><a href="#">Rahasia Dagang (Trade Secret)</a></li>
                        <li class="bullet-list"><a href="#">Desain Industri (Industrial Design)</a></li>
                        <li class="bullet-list"><a href="#">Merek Dagang (Trademark)</a></li>
                        <li class="bullet-list"><a href="#">Integrated Circuit</a></li>
                        <li class="bullet-list"><a href="#">Indikasi Geografis</a></li>
                    </ul>
                </div>
    
                <div class="col-md-4 col-12">
                    <h5 class="headin5_amrc col_white_amrc pt2"><br>Contact Info</h5>
                    <br>
                    <p class="mb10">Ruang C102 LP3M-Gedung C <br>Institut Teknologi Sumatera (ITERA) </p>
                    <p><i class="bi bi-geo-alt"></i> Address:<br>Lampung Selatan, Lampung </p>
                    <p><i class="fa fa-phone"></i>  Phone:<br>+62 858-1950-9716  </p>
                    <p><i class="fa fa fa-envelope">  Email:<br> <a href="hki@itera.ac.id" style="color: white">hki@itera.ac.id</a></i></p>
                </div>
            </div>
        </div>
    
        <div class="container">
            <ul class="social_footer_ul">
                <li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
                <li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/hkiitera/?hl=en"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>
    <div id="whatsapp-button">
        <a href="https://wa.me/6289617843241" target="_blank">
            <img src="assets/wa.png" alt="WhatsApp Icon">
        </a>
    </div>
<style>
    #whatsapp-button {
    position: fixed;
    bottom: 20px; /* Atur jarak dari bawah halaman */
    right: 20px; /* Atur jarak dari sisi kanan halaman */
    z-index: 9999; /* Pastikan tombol ini muncul di atas konten lain */
}

#whatsapp-button img {
    width: 60px; /* Atur ukuran gambar ikon WhatsApp */
    height: auto;
}
</style>    
    <nav class="footers">
        © COPYRIGHT 2023 - PUSAT KELOLA KEKAYAAN INTELEKTUAL
    </nav>


    
</body>
</html>
