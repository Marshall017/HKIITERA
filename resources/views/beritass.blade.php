@extends('layouts.app')

@section('content')
<head>
    <br>
        <h1 style="text-align: center">Berita</h1>
        <link rel="stylesheet" id="oe-widgets-style-css" href="https://hki.itera.ac.id/wp-content/plugins/ocean-extra/assets/css/widgets.css?ver=6.4.2" media="all">
        <link rel="stylesheet" href="css/beritas.css">
    </head>

<body >

<div id="content-wrap" class="container clr" style="background-color: aliceblue;height:3250px">
            <div id="primary" class="content-area clr">
                <div id="content" class="site-content clr">
                <div id="blog-entries" class="entries clr">

                    <article id="post-2196" class="blog-entry clr large-entry post-2196 post type-post status-publish format-standard has-post-thumbnail hentry category-recent-news tag-djki tag-hkiitera tag-itera tag-iteraforsumatera tag-kekayaanintelektual tag-kumhamlampung tag-ppkiitera tag-rapatpimpinan tag-lp3mitera entry has-media">
                        <div>
                            @foreach ($beritass as $berita)   
                            <div class="blog-entry-inner clr with-border">   
                                <div class="thumbnail">
                                    <a href="{{ route('isiberita.show',$berita->id) }}" class="thumbnail-link no-lightbox">
                                        <img width="750px" height="750px" src="{{ asset('assets/berita/'.$berita->upload_gambar) }}" >			
                                        <span class="overlay"></span>		
                                    </a>
                                </div><!-- .thumbnail -->
                    
                                <header class="blog-entry-header clr" style="color: black">
                                    <h3 class="blog-entry-title entry-title" >
                                        <a href="{{ route('isiberita.show',$berita->id) }}" rel="bookmark" style="color: black" >{{ $berita->judul }}</a>
                                    </h3><!-- .blog-entry-title -->
                                </header><!-- .blog-entry-header -->
                    <br>
                                <ul class="meta obem-stylish clr" aria-label="Post details:">
                                    <li class="meta-author" itemprop="name">
                                        <span class="screen-reader-text">Post author:</span>
                                        <i class="fas fa-user-circle" aria-hidden="true" role="img"></i>
                                        <a href="#" title="Posts by admin" rel="author" itemprop="author" itemscope="itemscope" itemtype="https://schema.org/Person">{{ $berita->author }}</a>
                                    </li>
                                    <li class="meta-mod-date" itemprop="dateModified">
                                        <span class="screen-reader-text">Post last modified:</span>
                                        <i class="far fa-calendar-check" aria-hidden="true" role="img"></i>
                                        {{ $berita->tanggal_unggah }}
                                    </li>
                                    <li class="meta-comments">
                                        <span class="screen-reader-text">Post comments:</span>
                                        <i class="far fa-comments" aria-hidden="true" role="img"></i>
                                        <a href="#" class="comments-link">0 Comments</a>
                                    </li>
                                </ul>
                    
                                <div class="blog-entry-summary clr" itemprop="text">
                                    <p>
                                        {{ Str::limit($berita->isi_berita, 200) }}
                                    </p>
                                </div><!-- .blog-entry-summary -->
                    
                                <div class="blog-entry-readmore clr">
                                    <a href="{{ route('isiberita.show',$berita->id) }}">
                                        Continue Reading<span class="screen-reader-text"></span>
                                        <i class="fa fa-angle-right" aria-hidden="true" role="img"></i>
                                    </a>
                                </div><!-- .blog-entry-readmore -->
                            </div><!-- .blog-entry-inner -->
                            @endforeach
                        </div>
                    </article>
                    <!-- #post-## -->
								

						
		</div><!-- #blog-entries -->
        
        {{-- //Pagenation --}}
 
        
        <nav aria-label="...">
            <ul class="pagination">
                @if ($beritass->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $beritass->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                @endif
        
                @foreach ($beritass->getUrlRange(1, $beritass->lastPage()) as $page => $url)
                    <li class="page-item {{ $beritass->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
        
                @if ($beritass->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $beritass->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @endif
            </ul>
        </nav>
        
        <br>
		</div><!-- #content -->	
		</div><!-- #primary -->

        <aside id="right-sidebar" class="sidebar-container widget-area sidebar-primary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar" role="complementary" aria-label="Primary Sidebar">

                    <div id="right-sidebar-inner" class="clr">
                    <div id="block-2" class="sidebar-box widget_block widget_search clr">
                        <form role="search" method="get" action="#" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
                            <label class="wp-block-search__label" for="wp-block-search__input-1">Search</label>
                            <div class="wp-block-search__inside-wrapper " style="width: 75%">
                            <input class="wp-block-search__input" id="wp-block-search__input-1" placeholder="" value="" type="search" name="s" required="">
                            <button aria-label="Search" class="wp-block-search__button wp-element-button" type="submit">Search</button></div>
                        </form>
                    </div>
                    <div id="block-3" class="sidebar-box widget_block clr"></div>

                    <div id="ocean_recent_posts-1" class="sidebar-box widget-oceanwp-recent-posts recent-posts-widget clr">
                        <h4 class="widget-title">Recent Posts</h4>
                            <ul class="oceanwp-recent-posts clr">
                                @foreach ($latestBerita as $list)
                                <li class="clr">
                                    <a href="{{ route('isiberita.show',$list->id) }}" title="PENDAFTAR PATEN ITERA 2023" class="recent-posts-thumbnail">
                                            <img width="200" height="100" src="{{ asset('assets/berita/'.$list->upload_gambar) }} "
                                            sizes="(max-width: 150px) 100vw, 150px">
                                            <span class="overlay"></span>
                                    </a>
                                                    
                                    <div class="recent-posts-details clr">
                                        <div class="recent-posts-details-inner clr">
                                            <a href="{{ route('isiberita.show',$list->id) }}" class="recent-posts-title">
                                                {{ $list->judul }}
                                            </a>
                                            <div class="recent-posts-info clr">
                                                <div class="recent-posts-date">{{ $list->tanggal_unggah }}<span class="sep">/</span></div>
                                                <div class="recent-posts-comments"><a href="#">0 Comments</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            
                            </ul>              
                    </div>
                    <div id="calendar-1" class="sidebar-box widget_calendar clr">
                        <div id="calendar_wrap" class="calendar_wrap">
                            <table id="wp-calendar" class="wp-calendar-table">
                                <caption id="calendar-caption"></caption>
                                <thead>
                                    <tr>
                                        <th scope="col" title="Monday">M</th>
                                        <th scope="col" title="Tuesday">T</th>
                                        <th scope="col" title="Wednesday">W</th>
                                        <th scope="col" title="Thursday">T</th>
                                        <th scope="col" title="Friday">F</th>
                                        <th scope="col" title="Saturday">S</th>
                                        <th scope="col" title="Sunday">S</th>
                                    </tr>
                                </thead>
                                <tbody id="calendar-body">
                                    <!-- Isi kalender akan ditambahkan melalui JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            updateCalendar();
                        });
                    
                        function updateCalendar() {
                            var today = new Date();
                            var currentYear = today.getFullYear();
                            var currentMonth = today.getMonth();
                            var currentDay = today.getDate();
                    
                            var calendarCaption = document.getElementById('calendar-caption');
                            calendarCaption.textContent = new Intl.DateTimeFormat('en-US', { month: 'long', year: 'numeric' }).format(today);
                    
                            var calendarBody = document.getElementById('calendar-body');
                            calendarBody.innerHTML = '';
                    
                            var firstDayOfMonth = new Date(currentYear, currentMonth, 1);
                            var lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
                            var startDate = new Date(firstDayOfMonth);
                    
                            while (startDate.getDay() > 0) {
                                startDate.setDate(startDate.getDate() - 1);
                            }
                    
                            for (var i = 0; i < 6; i++) {
                                var row = document.createElement('tr');
                    
                                for (var j = 0; j < 7; j++) {
                                    var cell = document.createElement('td');
                                    var link = document.createElement('a');
                    
                                    link.textContent = startDate.getDate();
                                    link.href = 'https://hki.itera.ac.id/' + currentYear + '/' + (currentMonth + 1) + '/' + startDate.getDate();
                                    link.classList.add('day-link');
                    
                                    if (startDate.getMonth() !== currentMonth) {
                                        link.classList.add('other-month');
                                    }
                    
                                    if (startDate.getFullYear() === currentYear && startDate.getMonth() === currentMonth && startDate.getDate() === currentDay) {
                                        link.classList.add('today');
                                    }
                    
                                    cell.appendChild(link);
                                    row.appendChild(cell);
                    
                                    startDate.setDate(startDate.getDate() + 1);
                                }
                    
                                calendarBody.appendChild(row);
                            }
                        }
                    </script>
                    

            </div><!-- #sidebar-inner -->
        </aside><!-- #right-sidebar -->

</div>
</body>
<br><br><br>
@endsection
