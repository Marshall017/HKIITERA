
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
    
</head>

<body>
    <div class="container bg-splatter-x">
        <div class="header-title my-5">
            <div
                class="bg-white rounded-1 border border-black d-inline-block text-center px-3 pt-2 mb-3">
                <h3 class="fw-bold font-mono text-center" style="text-align: center">Scrape Media <span style="color:#FF2690;">Instagram </h3>
            </div>
        </div>
        <div class="row at-3">
            <div class="col-xl-12">
                <div class="owl-carousel media owl-theme">
                    @forelse ($mediaData as $media)
                    <a style="text-decoration: none;" class="detail_media" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="item">
                            <div class="card-show" style="border: 1px solid #000000; overflow: hidden; margin: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
                                @if ($media['media_type'] == 'VIDEO')
                                    <div style="padding: 70px; background-color: #000000; ">
                                        <img src="{{ $media['thumbnail_url'] }}" class="card-img-top">
                                    </div>
                                @else
                                    <div style=" width: 450px; height: 450px;">
                                        <img src="{{ $media['media_url'] }}" class="card-img-top" style="width: 100%; height: 100%;">
                                    </div>
                                @endif
                                <div class="card-body">
                                    <h3 class="card-title" style="margin: 0;margin-left: 10px;">{{ $media['username'] }}</h3>
                                    <p class="card-text" style="text-align: left; margin: 1;margin-left: 10px;width: 400px;">
                                        {{ Str::limit($media['caption'], 300) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                        @empty
                            <p>Tidak ada media yang tersedia.</p>
                        @endforelse
                    </div>
            </div>
        </div>
    </div> 
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".media").slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: '<button type="button" class="slick-prev">&#8592;</button>',
                nextArrow: '<button type="button" class="slick-next">&#8594;</button>',
            });
        });
    </script>  
</body>

</html>




