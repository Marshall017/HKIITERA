@extends('layouts.app')

@section('content')

<head>
	<link rel="stylesheet" id="oceanwp-style-css" href="https://hki.itera.ac.id/wp-content/themes/oceanwp/assets/css/style.min.css?ver=3.4.6" media="all">
	
</head>
 
<body>  
    <div id="content-wrap" class="container clr" style="background-color: rgb(255, 255, 255)"><br>
		<div id="primary" class="content-area clr" style="margin-left: 150px;text-align:center">
			<div id="content" class="site-content clr">
				
				<article id="post-2045">
					
						<div class="thumbnail">
							<img width="1890" height="1890" src="{{ asset('assets/berita/'.$berita->upload_gambar) }}"
							sizes="(max-width: 1890px) 100vw, 1890px">
						</div><!-- .thumbnail -->

						<header class="entry-header clr">
							<h2 class="single-post-title entry-title" itemprop="headline">{{ $berita->judul }}</h2><!-- .single-post-title -->
						</header><!-- .entry-header -->

						<ul class="meta ospm-stylish clr">
								<li class="meta-author" itemprop="name"><span class="screen-reader-text">Post author:</span><i class=" fas fa-user-circle" aria-hidden="true" role="img">
									</i><a href="https://hki.itera.ac.id/author" title="Posts by " rel="author" itemprop="author" itemscope="itemscope" itemtype="https://schema.org/Person">{{ $berita->author }}</a>
								</li>
								<li class="meta-mod-date" itemprop="dateModified"><span class="screen-reader-text">Post last modified:</span>
									<i class=" far fa-calendar-check" aria-hidden="true" role="img">
									</i>{{ $berita->tanggal_unggah }}
								</li>
								<li class="meta-comments"><span class="screen-reader-text">Post comments:</span>
									<i class=" far fa-comments" aria-hidden="true" role="img"></i>
									<a href="https://hki.itera.ac.id/rektor-itera-dorong-sivitas-akademika-aktif-hasilkan-karya-intelektual-paten/#respond" class="comments-link">0 Comments</a>
								</li>
						</ul>



						<div class="entry-content clr" itemprop="text">	
							<style>
								.news-content {
									text-align: justify;
									margin: 0 auto;
									max-width: 800px; /* Adjust the max-width as needed */
								}
							
								.news-content p {
									margin-bottom: 15px; /* Adjust the margin between paragraphs as needed */
								}
							
								.indent {
									text-indent: 30px; /* Adjust the indentation size as needed */
								}
							</style>
							
							<div class="news-content">
								{!! nl2br(e($berita->isi_berita)) !!}
							</div>
							
								

								<figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-1 is-layout-flex wp-block-gallery-is-layout-flex">
									<figure class="wp-block-image"><img decoding="async" src="blob:https://hki.itera.ac.id/0b3e56a8-2795-44a2-97cc-96b65e1bcbcb" alt=""></figure>
									<figure class="wp-block-image"><img decoding="async" src="blob:https://hki.itera.ac.id/1f78d561-2ea7-41e0-a8e6-e64ef5960239" alt=""></figure>
									<figure class="wp-block-image"><img decoding="async" src="blob:https://hki.itera.ac.id/a3ebaae6-0ed5-4065-8ec2-c522125fe9bd" alt=""></figure>
								</figure>

						</div><!-- .entry -->

						<div class="post-tags clr">
							<span class="owp-tag-text">Tags: </span><a href="https://hki.itera.ac.id/tag/djki/" rel="tag">#djki</a>
							<span class="owp-sep">,</span> <a href="https://hki.itera.ac.id/tag/hkiitera/" rel="tag">#hkiitera</a>
							<span class="owp-sep">,</span> <a href="https://hki.itera.ac.id/tag/itera/" rel="tag">#itera</a>
							<span class="owp-sep">,</span> <a href="https://hki.itera.ac.id/tag/iteraforsumatera/" rel="tag">#iteraforsumatera</a>
							<span class="owp-sep">,</span> <a href="https://hki.itera.ac.id/tag/kekayaanintelektual/" rel="tag">#kekayaanintelektual</a><span class="owp-sep">,
							</span> <a href="https://hki.itera.ac.id/tag/kumhamlampung/" rel="tag">#kumhamlampung</a>
							<span class="owp-sep">,</span> <a href="https://hki.itera.ac.id/tag/ppkiitera/" rel="tag">#ppkiitera</a>
							<span class="owp-sep">,</span> <a href="https://hki.itera.ac.id/tag/rapatpimpinan/" rel="tag">#rapatpimpinan</a>
							<span class="owp-sep">,</span> <a href="https://hki.itera.ac.id/tag/lp3mitera/" rel="tag">lp3mitera</a>
						</div>

						<nav class="navigation post-navigation" aria-label="Read more articles">
							<h2 class="screen-reader-text">Read more articles</h2>
							<div class="nav-links"><div class="nav-previous"><a href="https://hki.itera.ac.id/rapat-reguler-3-pusat-pengelolaan-kekayaan-intelektual/" rel="prev">
								<span class="title"><i class=" fas fa-long-arrow-alt-left" aria-hidden="true" role="img"></i> Previous Post</span>
								<span class="post-title">RAPAT REGULER 3 (Pusat Pengelolaan Kekayaan Intelektual)</span></a></div><div class="nav-next"><a href="https://hki.itera.ac.id/open-magang-pkki-itera/" rel="next">
								<span class="title"><i class=" fas fa-long-arrow-alt-right" aria-hidden="true" role="img"></i> Next Post</span><span class="post-title">OPEN MAGANG PKKI ITERA</span></a></div>	
							</div>
						</nav>

						<section id="related-posts" class="clr">
							<h3 class="theme-heading related-posts-title">
								<span class="text">You Might Also Like</span>
							</h3>
							<div class="oceanwp-row clr">
								@foreach ($latestBerita as $list)
								<article class="related-post clr col span_1_of_3 col-1 post-1322 post type-post status-publish format-standard has-post-thumbnail hentry category-recent-news tag-hkiitera tag-itera tag-iteraforsumatera tag-kekayaanintelektual tag-kumhamlampung tag-ppkiitera tag-rapatpimpinan tag-lp3mitera tag-tricks entry has-media">
									<figure class="related-post-media clr">
										<a href="{{ route('isiberita.show',$list->id) }}" class="related-thumb no-lightbox">
											<img width="768" height="768" src="{{ asset('assets/berita/'.$list->upload_gambar) }} " sizes="(max-width: 768px) 100vw, 768px">							
										</a>
									</figure>
									<h3 class="related-post-title">
										<a href="{{ route('isiberita.show',$list->id) }}" rel="bookmark">{{ $list->judul }}</a>
									</h3><!-- .related-post-title -->
									<time class="published" datetime="2023-07-06T15:03:12+00:00">
										<i class=" far fa-calendar-alt" aria-hidden="true" role="img"></i>{{ $list->tanggal_unggah }}
									</time>
								</article><!-- .related-post -->
								@endforeach	
							</div><!-- .oceanwp-row -->
						</section><!-- .related-posts -->
						<style>
							.meta.ospm-stylish.clr {
									display: flex;
									justify-content: center;
									padding: 10px 0; /* Add padding as needed for spacing */
									list-style: none;
								}

								.meta.ospm-stylish.clr li {
									margin-right: 20px; /* Adjust the spacing between items as needed */
								}

								.meta.ospm-stylish.clr li:last-child {
									margin-right: 0; /* Remove margin for the last item to avoid extra space */
								}

							#related-posts {
								margin-top: 20px; /* Atur margin sesuai kebutuhan */
							}
						
							.oceanwp-row {
								display: flex;
								flex-wrap: wrap;
								margin: -15px; /* Margin negatif untuk mengkompensasi padding pada artikel */
							}
						
							.related-post {
								width: calc(33.333% - 30px); /* 33.333% agar tiga kolom sejajar, 30px untuk margin dan padding */
								margin: 15px; /* Sesuaikan margin sesuai kebutuhan */
								box-sizing: border-box;
							}
						
							.related-post-media img {
								max-width: 100%; /* Pastikan gambar tidak melebihi lebar kontennya */
								height: auto;
							}
						
							.related-post-title {
								margin-top: 10px; /* Sesuaikan margin sesuai kebutuhan */
							}
						
							.published {
								display: block;
								margin-top: 10px; /* Sesuaikan margin sesuai kebutuhan */
								font-style: italic;
							}
						</style>
						




						<section id="comments" class="comments-area clr has-comments">
							<div id="respond" class="comment-respond">
								<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small>
									<a rel="nofollow" id="cancel-comment-reply-link" href="/rektor-itera-dorong-sivitas-akademika-aktif-hasilkan-karya-intelektual-paten/#respond" 
									style="display:none;">Cancel reply</a></small>
								</h3>
								<form action="https://hki.itera.ac.id/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate=""><div class="comment-textarea"><label for="comment" class="screen-reader-text">Comment</label><textarea name="comment" id="comment" cols="39" rows="4" tabindex="0" class="textarea-comment" placeholder="Your comment here..."></textarea></div><div class="comment-form-author"><label for="author" class="screen-reader-text">Enter your name or username to comment</label><input type="text" name="author" id="author" value="" placeholder="Name (required)" size="22" tabindex="0" aria-required="true" class="input-name"></div>
									<div class="comment-form-email">
										<label for="email" class="screen-reader-text">Enter your email address to comment</label>
										<input type="text" name="email" id="email" value="" placeholder="Email (required)" size="22" tabindex="0" aria-required="true" class="input-email">
									</div>
									<div class="comment-form-url">
										<label for="url" class="screen-reader-text">Enter your website URL (optional)</label>
										<input type="text" name="url" id="url" value="" placeholder="Website" size="22" tabindex="0" class="input-website">
									</div>
									<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
									<p class="form-submit"><input name="submit" type="submit" id="comment-submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="2045" id="comment_post_ID">
										<input type="hidden" name="comment_parent" id="comment_parent" value="0">
									</p>
								</form>	
							</div><!-- #respond -->
						</section><!-- #comments -->
					
				</article>		
			</div><!-- #content -->		
		</div><!-- #primary -->
	</div>
</body>

<br><br><br>


<br><br><br><br><br>
@endsection
