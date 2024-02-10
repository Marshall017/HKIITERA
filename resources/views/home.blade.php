@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Bootstrap</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Carousel Bagian Pertama -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('img/bg1.png');">
                <div class="carousel-caption d-none d-md-block text-center" style="position: absolute; top: 0; left: 0; right: 0;">
                    <h1 style="background-color: rgba(0, 0, 0, 0); padding: 10px;color:black;">Selamat Datang di Website <br> Pusat Kelola Karya Intelektual <br> Institut Teknologi Sumatera</h1>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('img/bg3.png');">
                <div class="carousel-caption d-none d-md-block text-center" style="position: absolute; top: 0; left: 0; right: 0;">
                    <h1 style="background-color: rgba(0, 0, 0, 0); padding: 10px;color:black;">Selamat Datang di Website <br> Pusat Kelola Karya Intelektual <br> Institut Teknologi Sumatera</h1>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('img/bg2.png');">
                <div class="carousel-caption d-none d-md-block text-center" style="position: absolute; top: 0; left: 0; right: 0;">
                    <h1 style="background-color: rgba(0, 0, 0, 0); padding: 10px;color:black;">Selamat Datang di Website <br> Pusat Kelola Karya Intelektual <br> Institut Teknologi Sumatera</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<div class="contain">
    <!-- Carousel Bagian Kedua -->
    
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Berita Terkini</h3>
                </div>
    
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @php $active = true; @endphp
                            @foreach ($berita->chunk(3) as $chunk)
                                <div class="carousel-item{{ $active ? ' active' : '' }}">
                                    <div class="row">
                                        @foreach ($chunk as $news)
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280" src="{{ asset('assets/berita/'.$news->upload_gambar) }} ">
                                                    <div class="card-body" style="background-color:#F1F1F1;">
                                                        <h4 class="card-title">{{ $news->judul }}</h4>
                                                        <p class="card-text">{{ Str::limit($news->isi_berita, 150) }}</p>
                                                        <a href="{{ route('isiberita.show',$news->id) }}" class="btn btn-danger" style="background-color: #B80000;">Baca Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @php $active = false; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <!-- Tombol "prev" untuk Carousel Kedua -->
                <a class="btn btn-primary mb-3 mx-auto" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev" style="background-color:#B80000;">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <!-- Tombol "next" untuk Carousel Kedua -->
                <a class="btn btn-primary mb-3 mx-auto" href="#carouselExampleIndicators2" role="button" data-bs-slide="next" style="background-color:#B80000;">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    
    </div>
    <div class="your-div" style="background-image: url('https://www.itera.ac.id/wp-content/uploads/2021/06/Gedung-Laboratorium-Teknik-2-1536x864.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: auto; padding-top: 20px;">
        <section id="why-us">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <header class="section-header text-center" style="font-weight: bold; color: black; font-size: 3rem;">
                    <h3><strong>Rekap Intelektual</strong></h3>
                </header>
    
                <div class="row row-eq-height justify-content-center">
    
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100" style="background-color: #B80000; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            <div style="display: flex; justify-content: center; align-items: center; height: 150px;">
                                <img src="https://hki.unimugo.ac.id/wp-content/uploads/2021/11/logo-hak-cipta-unimugo.png" alt="Hak Cipta" style="max-width: 80%; max-height: 80%; object-fit: contain;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title" style="color: rgb(0, 0, 0); font-size: 1.5rem;"><strong>Hak Cipta</strong></h5>
                                <a href="#" class="readmore" style="color: white; text-decoration: underline; position: relative; font-size: 1rem;">Lihat Detail ></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100" style="background-color: #B80000; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            <div style="display: flex; justify-content: center; align-items: center; height: 150px;">
                                <img src="https://hki.unimugo.ac.id/wp-content/uploads/2021/11/logo-paten-unimugo.png" alt="Paten" style="max-width: 80%; max-height: 80%; object-fit: contain;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title" style="color: rgb(0, 0, 0); font-size: 1.5rem;"><strong>Paten</strong></h5>
                                <a href="#" class="readmore" style="color: white; text-decoration: underline; position: relative; font-size: 1rem;">Lihat Detail ></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100" style="background-color: #B80000; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            <div style="display: flex; justify-content: center; align-items: center; height: 150px;">
                                <img src="https://hki.unimugo.ac.id/wp-content/uploads/2021/11/logo-merek-unimugo.png" alt="Merk" style="max-width: 80%; max-height: 80%; object-fit: contain;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title" style="color: rgb(0, 0, 0); font-size: 1.5rem;"><strong>Merk</strong></h5>
                                <a href="#" class="readmore" style="color: white; text-decoration: underline; position: relative; font-size: 1rem;">Lihat Detail ></a>
                            </div>
                        </div>
                    </div>
    
                </div>
    
                <div class="row counters aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div style="font-weight: bold; color: black; font-size: 5rem;margin-left:13rem;">
                            <span data-toggle="counter-up">182</span>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div style="font-weight: bold; color: black; font-size: 5rem;margin-left:13rem;">
                            <span data-toggle="counter-up">76</span>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div style="font-weight: bold; color: black; font-size: 5rem;margin-left:13rem;">
                            <span data-toggle="counter-up">29</span>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
    </div>
    



    
<div class="contain" style="background-color: #F0B41E;"><br>
    <div class="col-12">
        <div style="display: flex; justify-content: center;">
            <h3 class="mb-3">Tim Pusat Kelola Karya Intelektual</h3>
        </div>
    </div>    
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @php $count = 0 @endphp
                            @foreach ($tim as $tims)
                                @if ($count % 4 == 0)
                                    <div class="carousel-item @if ($count == 0) active @endif">
                                        <div class="row">
                                @endif
                                            <div class="col-md-3 mb-3" >
                                                <div class="card" style="background-color:#000000;">
                                                    <img class="img-fluid" style="background-color: #00000000; width: 200px; height: 250px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('assets/tim/'.$tims->file_foto) }}">
                                                    <div class="card-body" style="background-color:#000000;">
                                                        <h4 class="card-title" style="font-size:18px;color:white;max-width:200px;">{{ $tims->nama }}</h4>
                                                        <p class="card-text" style="color: #898B18; border-bottom: 1px solid white;">{{ $tims->jabatan }}</p>
                                                        <p class="card-text" style="color: white;">{{ $tims->prodi }}</p>
                                                        <div style="margin-top: 10px;">
                                                            <!-- Tambahkan ikon media sosial di sini -->
                                                            <a class="btn btn-primary" style="background-color: #3b5998;" href="{{ $tims->scopus }}" role="button"
                                                                ><i class="fab fa-scribd"></i
                                                                ></a>
                                                                <a class="btn btn-primary" style="background-color: #55acee;" href="{{ $tims->scholar }}" role="button"
                                                                ><i class="fab fa-leanpub"></i
                                                                ></a>
                                                                <a class="btn btn-primary" style="background-color: #ac2bac;" href="{{ $tims->sinta }}" role="button"
                                                                ><i class="fab fa-researchgate"></i
                                                                ></a>
                                                                <a class="btn btn-primary" style="background-color: #0082ca;" href="{{ $tims->linkedin}}" role="button"
                                                                ><i class="fab fa-linkedin-in"></i
                                                                ></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                @php $count++ @endphp
                                @if ($count % 4 == 0 || $loop->last)
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <!-- Tombol "prev" untuk Carousel Kedua -->
                        <a class="btn btn-primary mb-3 mx-auto" href="#carouselExampleIndicators3" role="button" data-bs-slide="prev" style="background-color:#B80000;">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <!-- Tombol "next" untuk Carousel Kedua -->
                        <a class="btn btn-primary mb-3 mx-auto" href="#carouselExampleIndicators3" role="button" data-bs-slide="next" style="background-color:#B80000;">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>

</body>
</html>


    <div id="faq" style="background-color: #B80000; padding: 20px;">
        <div style="border: 1px solid #fff; padding: 20px;">
            <h2 class="text-center text-white mb-4">FAQ</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item" style="background-color: #B80000>
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       <strong>Bagaimana prosedur pengajuan HKI?</strong> 
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Prosedur pengajuan HKI baik itu Hak Cipta 
                        maupun Hak Paten bisa dilihat pada halaman Alur Layanan
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <strong>Apa saja lampiran yang perlu disiapkan untuk pengajuan HKI?</strong>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <Strong>Apakah ajuan saya sudah diproses?</Strong>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    
</div>

@endsection
