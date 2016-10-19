@extends('kreston::home')
@section('home-banner')
	<div class="slider progressive-slider load">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<ul class="pgwSlideshow">
								@foreach($home_banners as $key => $row)
									<li><img src="{!! url($row->storage_location) !!}" alt="{!! $row->name !!}" data-description="{!! $row->description !!}"></li>
								@endforeach
							</ul>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="content" style="background:#fff;padding:15px;margin-top:20px;margin-bottom:10px">
								<h1 class="title">Welcome to Kreston Indonesia</h1>
								<p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
							</div>
						</div>
					</div>	
					
				</div>
				<div class="col-md-3 latest-post">
					<!-- Nav tabs -->
					<div class="card">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">News</a></li>
                            <li role="presentation"><a href="#article" aria-controls="article" role="tab" data-toggle="tab">Article</a></li>
                        </ul>
						<!-- Tab panes -->
                       <div class="tab-content" style="padding:5px 10px;">
                           <div role="tabpanel" class="tab-pane active" id="news">
								<ul class="most__wrap clearfix">
									@foreach($latest_news as $key => $news)
									<li class="most__item">
										<div class="most__num">{!! ($key + 1) !!}</div>
										<div class="most__title">
											<a class="latest-post" href="{!! url('news/read/'.$news->id.'/'.Str::slug($news->title,'-')) !!}" data-toggle="tooltip" title="{!! $news->title !!}"> {!! str_limit($news->title,35,'') !!} </a>
										</div>	
										<!--<span class="most__info">Reading : {!! $news->total_view !!} viewer</span>-->
									</li>
									@endforeach
								</ul>
							</div>
                            <div role="tabpanel" class="tab-pane" id="article">
								<ul class="most__wrap clearfix">
									@foreach($latest_article as $key => $article)
									<li class="most__item">
										<div class="most__num">{!! ($key + 1) !!}</div>
										<div class="most__title">
											<a class="latest-post" href="{!! url('article/read/'.$article->id.'/'.Str::slug($article->title,'-')) !!}" data-toggle="tooltip" title="{!! $article->title !!}"> {!! str_limit($article->title,35,'') !!} </a>
										</div>	
										<!--<span class="most__info">Reading : {!! $article->total_view !!} viewer</span>-->
									</li>
									@endforeach
								</ul>
							</div>
                        </div>
					</div>
					
					<div class="banner" style="margin-top:20px;">
						<div class="row">
							@foreach($advertisings as $key => $row)
							<div class="col-md-12">
								<div class="panel panel-primary">
								  <div class="panel-heading">{!! $row->name !!}</div>
								  <div class="panel-body" style="padding:0px">
									<img class="img-responsive" src="{!! asset($row->storage_location) !!}" />
								  </div>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
					
				</div>
			</div>			
		</div>
	</div>
@endsection

@push('css')
	<link rel='stylesheet' href="{!! asset('vendor/pgwslideshow/pgwslideshow.min.css') !!}">
	<link rel='stylesheet' href="{!! asset('vendor/pgwslideshow/pgwslideshow_light.min.css') !!}">
	<link rel='stylesheet' href="{!! asset('vendor/perfect-scrollbar/css/perfect-scrollbar.min.css') !!}">
@endpush
@push('scripts')
	
	<script src="{!! asset('vendor/pgwslideshow/pgwslideshow.min.js') !!}"></script>
	<script src="{!! asset('vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') !!}"></script>
	<script>
    
	$(document).ready(function() {
		$('.pgwSlideshow').pgwSlideshow({
			maxHeight:550,
			autoSlide:true,
		});
		$('[data-toggle="tooltip"]').tooltip({
			placement:"bottom",
			
		}); 
		$('.tab-content').perfectScrollbar();
	});
</script
@endpush


