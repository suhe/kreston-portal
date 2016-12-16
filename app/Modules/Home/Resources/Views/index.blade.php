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
								{!! isset($welcome) ? $welcome->short_content : null !!}
							</div>
						</div>
					</div>	
					
				</div>
				<div class="col-md-3 latest-post">
					<!-- Nav tabs -->
					<div class="card">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">{!! Lang::get('action.news') !!}</a></li>
                            <li role="presentation"><a href="#article" aria-controls="article" role="tab" data-toggle="tab">{!! Lang::get('action.article') !!}</a></li>
							<li role="presentation"><a href="#publication" aria-controls="publication" role="tab" data-toggle="tab">{!! Lang::get('action.publication') !!}</a></li>
                        </ul>
						<!-- Tab panes -->
                       <div class="tab-content" style="padding:5px 10px;">
                           <div role="tabpanel" class="tab-pane active" id="news">
								<ul class="most__wrap clearfix">
									
									@foreach($latest_news as $key => $news)
									<li class="most__item">
										<div class="most__num">{!! ($key + 1) !!}</div>
										<div class="most__title">
											<a target="_blank" class="latest-post" href="{!! url('news/read/'.$news->id.'/'.Str::slug($news->title,'-')) !!}" data-toggle="tooltip" title="{!! $news->title !!}"> {!! str_limit($news->title,35,'') !!} </a>
										</div>	
										
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
							<div role="tabpanel" class="tab-pane" id="publication">
								<ul class="most__wrap clearfix">
									@foreach($latest_publications as $key => $pub)
									<li class="most__item">
										<div class="most__num">{!! ($key + 1) !!}</div>
										<div class="most__title">
											<a target="_blank" class="latest-post" href="{!! url($pub->storage_location) !!}" data-toggle="tooltip" title="{!! $pub->title !!}"> {!! str_limit($pub->title,35,'') !!} </a>
										</div>	
										
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
	@include('home::popup-banner')
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
		@if($popup_banners)
		$('#popup-banner').modal('show');
		@endif
		
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


