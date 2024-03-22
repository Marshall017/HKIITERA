@extends('layouts.app')
@section('content')
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/alur.css">
        <style>
            .alurs {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 95vh;
            }
        
            img {
                max-width: 100%;
                max-height: 100%;
                object-fit: contain;
            }
        </style>
    </head>
    <body>

    <h1 style="text-align: center">Alur Layanan</h1>
    <div class="alurs">
        <img src="assets/alur.png" alt="Alur">
    </div>
    {{-- <div class="contain"style="margin-left:150px;margin-right:150px;border-radius: 15px;background-color:#DAA520">
        <section class="iq-features">
            <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-3 col-md-12"></div>
            <div class="col-lg-6 col-md-12">
             <div class="holderCircle">
            <div class="round"></div>
            <div class="dotCircle">
                <span class="itemDot active itemDot1" data-tab="1">
                    1 
                    <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot2" data-tab="2">
                    2 
                    <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot3" data-tab="3">
                    3 
                    <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot4" data-tab="4">
                    4 
                    <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot5" data-tab="5">
                    5 
                    <span class="forActive"></span>
                </span>
                <span class="itemDot itemDot6" data-tab="6">
                    6 
                    <span class="forActive"></span>
                </span>
            </div>
            
            
            <div class="contentCircle">
            <div class="CirItem title-box active CirItem1">
            <h2 class="title"><span>Buka Website </span></h2>
            <p>Kunjungi Halaman Website https://hki.itera.ac.id/</p>
            <i class="fa fa-globe"></i>
            </div>
            <div class="CirItem title-box CirItem2">
            <h2 class="title"><span>Isi Dokumen </span></h2>
            <p>Isi Form yang tersedia di halaman pendaftaran website</p>
            <i class="fa fa-file-text-o"></i> 
            </div>
            <div class="CirItem title-box CirItem3">
            <h2 class="title"><span>Unggah Berkas</span></h2>
            <p>Lengkapi Berkas Berkas ynag dibutuhkan lagi upload pada halaman pendaftaran</p>
            <i class="fa fa-upload"></i>
            </div>
            <div class="CirItem title-box CirItem4">
            <h2 class="title"><span>Pembayaran</span></h2>
            <p>Setlah mengisi formulir pendaftaran maka anda akan dibawa ke halaman invoice atau pembayaran,lakukan pembayaran dan upload bukti pembayaran</p>
            <i class="fa fa-credit-card"></i>
            </div>
            <div class="CirItem title-box CirItem5">
            <h2 class="title"><span>Proses Oleh DJKI</span></h2>
            <p>Pendaftaran anda sedang diproses oleh Direktorat Jenderal Kekayaan Intelektual</p>
            <i class="fa fa-refresh"></i>
            </div>
            <div class="CirItem title-box CirItem6">
            <h2 class="title"><span>Selesai</span></h2>
            <p>Selmat Hak Kekayaan Intelektual anda telah terdaftar</p>
            <i class="fa fa-check-circle"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-12"></div>
                           </div>
                        </div>
                    </section>



        <script>
            
                let i=2;

                
            $(document).ready(function(){
                var radius = 200;
                var fields = $('.itemDot');
                var container = $('.dotCircle');
                var width = container.width();
            radius = width/2.5;

                var height = container.height();
                var angle = 0, step = (2*Math.PI) / fields.length;
                fields.each(function() {
                    var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
                    var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
                    if(window.console) {
                        console.log($(this).text(), x, y);
                    }
                    
                    $(this).css({
                        left: x + 'px',
                        top: y + 'px'
                    });
                    angle += step;
                });
                
                
                $('.itemDot').click(function(){
                    
                    var dataTab= $(this).data("tab");
                    $('.itemDot').removeClass('active');
                    $(this).addClass('active');
                    $('.CirItem').removeClass('active');
                    $( '.CirItem'+ dataTab).addClass('active');
                    i=dataTab;
                    
                    $('.dotCircle').css({
                        "transform":"rotate("+(360-(i-1)*36)+"deg)",
                        "transition":"2s"
                    });
                    $('.itemDot').css({
                        "transform":"rotate("+((i-1)*36)+"deg)",
                        "transition":"1s"
                    });
                    
                    
                });
                
                setInterval(function(){
                    var dataTab= $('.itemDot.active').data("tab");
                    if(dataTab>6||i>6){
                    dataTab=1;
                    i=1;
                    }
                    $('.itemDot').removeClass('active');
                    $('[data-tab="'+i+'"]').addClass('active');
                    $('.CirItem').removeClass('active');
                    $( '.CirItem'+i).addClass('active');
                    i++;
                    
                    
                    $('.dotCircle').css({
                        "transform":"rotate("+(360-(i-2)*36)+"deg)",
                        "transition":"2s"
                    });
                    $('.itemDot').css({
                        "transform":"rotate("+((i-2)*36)+"deg)",
                        "transition":"1s"
                    });
                    
                    }, 2000);
                
            });



        </script>
    </div> --}}
    <br><br>
</body>
</html>
@endsection

        
        
