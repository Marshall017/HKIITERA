<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
                    .holderCircle { width: 500px; height: 500px; border-radius: 100%; margin: 60px auto; position: relative; }


                .dotCircle { width: 100%; height: 100%; position: absolute; margin: auto; top: 0; left: 0; right: 0; bottom: 0; border-radius: 100%; z-index: 20; }
                .dotCircle  .itemDot { display: block; width: 80px; height: 80px; position: absolute; background: #ffffff; color: #7d4ac7; border-radius: 20px; text-align: center; line-height: 80px; font-size: 30px; z-index: 3; cursor: pointer; border: 2px solid #e6e6e6; }
                .dotCircle  .itemDot .forActive { width: 56px; height: 56px; position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: none; }
                .dotCircle  .itemDot .forActive::after { content: ''; width: 5px; height: 5px; border: 3px solid #7d4ac7; bottom: -31px; left: -14px; filter: blur(1px); position: absolute; border-radius: 100%; }
                .dotCircle  .itemDot .forActive::before { content: ''; width: 6px; height: 6px; filter: blur(5px); top: -15px; position: absolute; transform: rotate(-45deg); border: 6px solid #a733bb; right: -39px; }
                .dotCircle  .itemDot.active .forActive { display: block; }
                .round { position: absolute; left: 40px; top: 45px; width: 410px; height: 410px; border: 2px dotted #a733bb; border-radius: 100%; -webkit-animation: rotation 100s infinite linear; }
                .dotCircle .itemDot:hover, .dotCircle .itemDot.active { color: #ffffff; transition: 0.5s;   /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7d4ac7+0,a733bb+100 */ background: #7d4ac7; /* Old browsers */ background: -moz-linear-gradient(left, #7d4ac7 0%, #a733bb 100%); /* FF3.6-15 */ background: -webkit-linear-gradient(left, #7d4ac7 0%, #a733bb 100%); /* Chrome10-25,Safari5.1-6 */ background: linear-gradient(to right, #7d4ac7 0%, #a733bb 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */ filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d4ac7', endColorstr='#a733bb', GradientType=1); /* IE6-9 */ border: 2px solid #ffffff; -webkit-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); -moz-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); }
                .dotCircle .itemDot { font-size: 40px; }
                .contentCircle { width: 250px; border-radius: 100%; color: #222222; position: relative; top: 150px; left: 50%; transform: translate(-50%, -50%); }
                .contentCircle .CirItem { border-radius: 100%; color: #222222; position: absolute; text-align: center; bottom: 0; left: 0; opacity: 0; transform: scale(0); transition: 0.5s; font-size: 15px; width: 100%; height: 100%; top: 0; right: 0; margin: auto; line-height: 250px; }
                .CirItem.active { z-index: 1; opacity: 1; transform: scale(1); transition: 0.5s; }
                .contentCircle .CirItem i { font-size: 180px; position: absolute; top: 0; left: 50%; margin-left: -90px; color: #000000; opacity: 0.1; }
                @media only screen and (min-width:300px) and (max-width:599px) {
                    .holderCircle {/* width: 300px; height: 300px;*/ margin: 110px auto; }
                    .holderCircle::after { width: 100%; height: 100%; }
                    .dotCircle { width: 100%; height: 100%; top: 0; right: 0; bottom: 0; left: 0; margin: auto; }
                }
                @media only screen and (min-width:600px) and (max-width:767px) { }
                @media only screen and (min-width:768px) and (max-width:991px) { }
                @media only screen and (min-width:992px) and (max-width:1199px) { }
                @media only screen and (min-width:1200px) and (max-width:1499px) { }
                .title-box .title { font-weight: 600; letter-spacing: 2px; position: relative; z-index: -1; }
                        .title-box span { text-shadow: 0 10px 10px rgba(0, 0, 0, .15); font-weight: 800; color: #640178; }
                        .title-box p {font-size: 17px; line-height: 2em; }
        </style>
    </head>
    <body>
        <section class="iq-features">
            <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-3 col-md-12"></div>
            <div class="col-lg-6 col-md-12">
             <div class="holderCircle">
            <div class="round"></div>
            <div class="dotCircle">
            <span class="itemDot active itemDot1" data-tab="1">
                <i class="fa-sharp fa-regular fa-globe-pointer"></i>
             <span class="forActive"></span>
            </span>
            <span class="itemDot itemDot2" data-tab="2">
                <i class="fa-solid fa-file-signature"></i>
            <span class="forActive"></span>
            </span>
            <span class="itemDot itemDot3" data-tab="3">
                <i class="fa-sharp fa-solid fa-file-arrow-up"></i>
            <span class="forActive"></span>
            </span>
            <span class="itemDot itemDot4" data-tab="4">
                <i class="fa-duotone fa-money-bill"></i>
            <span class="forActive"></span>
            </span>
            <span class="itemDot itemDot5" data-tab="5">
                <i class="fa-solid fa-hourglass-clock"></i>
            <span class="forActive"></span>
            </span>
            <span class="itemDot itemDot6" data-tab="6">
                <i class="fa-solid fa-octagon-check"></i>
            <span class="forActive"></span>
            </span>
            </div>
            <div class="contentCircle">
            <div class="CirItem title-box active CirItem1">
            <h2 class="title"><span>Buka Website </span></h2>
            <p>Kunjungi Halaman Website https://hki.itera.ac.id/</p>
            <i class="fa-sharp fa-regular fa-globe-pointer"></i>
            </div>
            <div class="CirItem title-box CirItem2">
            <h2 class="title"><span>Isi Dokumen </span></h2>
            <p>Isi Form yang tersedia di halaman pendaftaran website</p>
            <i class="fa-solid fa-file-signature"></i>
            </div>
            <div class="CirItem title-box CirItem3">
            <h2 class="title"><span>Unggah Berkas</span></h2>
            <p>Lengkapi Berkas Berkas ynag dibutuhkan lagi upload pada halaman pendaftaran</p>
            <i class="fa-sharp fa-solid fa-file-arrow-up"></i>
            </div>
            <div class="CirItem title-box CirItem4">
            <h2 class="title"><span>Pembayaran</span></h2>
            <p>Setlah mengisi formulir pendaftaran maka anda akan dibawa ke halaman invoice atau pembayaran,lakukan pembayaran dan upload bukti pembayaran</p>
            <i class="fa-duotone fa-money-bill"></i>
            </div>
            <div class="CirItem title-box CirItem5">
            <h2 class="title"><span>Proses Oleh DJKI</span></h2>
            <p>Pendaftaran anda sedang diproses oleh Direktorat Jenderal Kekayaan Intelektual</p>
            <i class="fa-solid fa-hourglass-clock"></i>
            </div>
            <div class="CirItem title-box CirItem6">
            <h2 class="title"><span>Selesai</span></h2>
            <p>Selmat Hak Kekayaan Intelektual anda telah terdaftar</p>
            <i class="fa-solid fa-octagon-check"></i>
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
        
    </body>
</html>