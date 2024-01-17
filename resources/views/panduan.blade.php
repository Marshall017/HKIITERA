@extends('layouts.app')

@section('content')
<head>
        <br>
        <h1 style="text-align: center">Panduan</h1><br>
        <script type="text/javascript" src="https://dgip.go.id/frontend/assets/js/fancybox/jquery-1.10.1.min.js"></script>
        <link rel="stylesheet" href="https://dgip.go.id/frontend/assets/css/style-starter.css">
        <link rel="stylesheet" href="https://dgip.go.id/frontend/assets/css/style.css">
        
</head>
        <body>
                <section>
                        <div class="container" style="background-color: white"> 
                                <div class="row no-gutters">
                                        <div class="col-md-3 sidebar-menu">
                                                <ul class="" id="list-slug">
                                                <li class=""><a href="javascript:void(0);" id="kategori-slug" data="json/paten.json">Paten</a></li>
                                                <li class=""><a href="javascript:void(0);" id="kategori-slug" data="json/merek.json">Merek</a></li>
                                                <li class=""><a href="javascript:void(0);" id="kategori-slug" data="json/di.json">Desain Industri</a></li>
                                                <li class=""><a href="javascript:void(0);" id="kategori-slug" data="json/hc.json">Hak Cipta</a></li>
                                                <li class=""><a href="javascript:void(0);" id="kategori-slug" data="json/ig.json">Indikasi Geografis</a></li>
                                                <li class=""><a href="javascript:void(0);" id="kategori-slug" data="json/rd.json">Rahasia Dagang</a></li>
                                                <li class=""><a href="javascript:void(0);" id="kategori-slug" data="json/dtlst.json">DTLST</a></li>
                                         </ul>
                                        </div>
                                        <div class="content col-md-9 sub-container gutter">
                                                <h4 class="heading-block" id="title-data"></h4>
                                                <img src="" id="image-data" class="mt-3" style="display: none;">
                                                <iframe id="video-data" width="100%" class="mt-3" height="450" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="display: none;"></iframe>
                                                <div id="content-data" class="content"></div>
                                        </div>
                                </div>
                        </div>
                </section>
 
                <script>
                        $(document).ready(function(){
                                list_slug[0].classList.add('active');
                                $.ajax({
                                        url: "json/paten.json", 
                                        success: function(result){
                                                $("#title-data").html(result.title);
                                                if (result.content != null) {
                                                        $("#content-data").show();
                                                        $("#content-data").html(result.content);
                                                } else {
                                                        $("#content-data").hide();
                                                        $("#content-data").html('');
                                                }

                                                if (result.image != null) {
                                                        $("#image-data").show();
                                                        $("#image-data").attr('src', result.image);
                                                } else {
                                                        $("#image-data").hide();
                                                        $("#image-data").attr('src', '');
                                                }

                                                if (result.video != null) {
                                                        $("#video-data").show();
                                                        $("#video-data").attr('src', result.video);
                                                } else {
                                                        $("#video-data").hide();
                                                        $("#video-data").attr('src', '');
                                                }
                                        }
                                });
                        });

                        var list_slug = [].slice.call(document.querySelectorAll('#list-slug > li'));
                        for (var y = 0; y < list_slug.length; y++) {
                        list_slug[y].addEventListener('click', setActiveSlugList);
                        }

                        function setActiveSlugList(event) {
                        list_slug.forEach(el => el.classList.remove('active'));
                        event.currentTarget.classList.add('active');
                        }

                        $('body').on('click', '#kategori-slug', function(e) {
                                var data = $(this).attr('data');
                                
                                e.preventDefault();
                                $.ajax({
                                        url: data, 
                                        success: function(result){
                                        $("#title-data").html(result.title);
                                        if (result.content != null) {
                                                $("#content-data").show();
                                                $("#content-data").html(result.content);
                                        } else {
                                                $("#content-data").hide();
                                                $("#content-data").html('');
                                        }

                                        if (result.image != null) {
                                                $("#image-data").show();
                                                $("#image-data").attr('src', result.image);
                                        } else {
                                                $("#image-data").hide();
                                                $("#image-data").attr('src', '');
                                        }

                                        if (result.video != null) {
                                                $("#video-data").show();
                                                $("#video-data").attr('src', result.video);
                                        } else {
                                                $("#video-data").hide();
                                                $("#video-data").attr('src', '');
                                        }
                                }
                        });
                        });
                </script>
        </body>
	
<br><br><br>
@endsection
