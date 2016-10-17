@extends('kreston::home')
@section('home-banner')
	<div class="slider progressive-slider load">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<ul class="pgwSlideshow">
						@foreach($home_banners as $key => $row)
							<li><img src="{!! url($row->storage_location) !!}" alt="{!! $row->name !!}" data-description="{!! $row->description !!}"></li>
						@endforeach
					</ul>
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
											<a href="{!! url('news/read/'.$news->id.'/'.Str::slug($news->title,'-')) !!}"> {!! $news->title !!} </a>
										</div>	
										<span class="most__info">Reading : {!! $news->total_view !!} viewer</span>
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
											<a href="{!! url('article/read/'.$article->id.'/'.Str::slug($article->title,'-')) !!}"> {!! $article->title !!} </a>
										</div>	
										<span class="most__info">Reading : {!! $article->total_view !!} viewer</span>
									</li>
									@endforeach
								</ul>
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection


@section('content')
	<!--<div class="row">
		<div class="col-sm-4 col-md-4">
			<h5 class="title text-center">ACHIEVEMENTS</h5>
			<img class="img-responsive" src="{!! Theme::asset('content/img/about-us/a1.png') !!}" />
			<div class="text-small">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.
				<div class="clearfix"></div><br>
				<div class="text-center">
					<button class="btn btn-default">Read more</button>
				</div>
			</div>
		</div>
		<div class="col-sm-4 col-md-4">
			<h5 class="title text-center">TESTIMONIALS</h5>
			<img class="img-responsive" src="{!! Theme::asset('content/img/about-us/a2.png') !!}" />
			<div class="text-small">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.
				<div class="clearfix"></div><br>
				<div class="text-center">
					<button class="btn btn-default">Read more</button>
				</div>
			</div>
		</div>
		<div class="col-sm-4 col-md-4">
			<h5 class="title text-center">OUR DIVISIONS</h5>
			<img class="img-responsive" src="{!! Theme::asset('content/img/about-us/a3.png') !!}" />
			<div class="text-small">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.
				<div class="clearfix"></div><br>
				<div class="text-center">
					<button class="btn btn-default">Read more</button>
				</div>
			</div>
		</div>
	</div>-->
@endsection

@section('latest-post')
	<!--<div class="slider progressive-slider load">
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="box_style_1">
                    <div><span style="font-size:24px;font-weight:500">Article</span><span class="pull-right"><a href="{!! url('/article') !!}">See all <i class="icon-right-dir"></i></a></span></div>
                    <hr>
					<ul class="list_1">
						@foreach($latest_article as $key => $article)
							<li><a href="{!! url('article/read/'.$article->id.'/'.Str::slug($article->title,'-')) !!}"><i class="fa fa-caret-right"></i> {!! $article->title !!}</a></li>
						@endforeach
                    </ul>		
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="box_style_1">
                    <div><span style="font-size:24px;font-weight:500"> News</span><span class="pull-right"><a href="{!! url('/news') !!}">See all <i class="icon-right-dir"></i></a></span></div>
                    <hr>
                    <ul class="list_1">
						@foreach($latest_news as $key => $news)
							<li><a href="{!! url('news/read/'.$news->id.'/'.Str::slug($news->title,'-')) !!}"><i class="fa fa-caret-right"></i> {!! $news->title !!}</a></li>
						@endforeach
                    </ul>
                     
           </div>
			</div>
		</div>
	</div>
</div>-->
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
		});
		
		$('.tab-content').perfectScrollbar();
	});
</script
@endpush


