@extends('kreston::page')
@section('breadcrumbs', Breadcrumbs::render($index))
@section('content')
	<div class="row">
		<article class="content col-sm-12 col-md-9">
			<div class="row">
				<h4 class="title">{!! $page_title !!} </h4>
				<div class="content gallery col-sm-12 col-md-12">
					<div class="row">
					  @foreach($photos as $key => $photo)
					  <div class="images-box col-sm-4 col-md-4">
						<a class="gallery-images" rel="fancybox" href="{!! url($photo->photo_storage_location) !!}">
						  <img class="replace-2x img-responsive" src="{{ url(ImageManager::getImagePath($photo->photo_storage_location, 297, 157, 'crop')) }}"  alt="">
						  <span class="bg-images"><i class="fa fa-search"></i></span>
						</a>
					  </div><!-- .images-box -->
					  @endforeach
		  
					  <div class="col-sm-12 col-md-12">
						<div class="pagination-box">
						   {!! $photos->appends(\Request::except('page'))->render() !!}
						</div><!-- .pagination-box -->
					  </div>
					</div>
				</div><!-- .content -->
			</div>
		</article><!-- .content -->
		  
		 <div id="sidebar" class="sidebar col-sm-12 col-md-3">
            <aside class="widget menu">
                <header>
                    <h3 class="title">{!! Lang::get('gallery::app.event') !!}</h3>
                </header>
                <nav>
                    <ul>
						@foreach($link_events as $key => $event)
							<li class="{!! Request::segment(3) == $event->id ? 'active' : '' !!}"><a href="{!! url('gallery/event/'.$event->id.'/'.Str::slug($event->name,'-')) !!}">{!! $event->name !!}</a></li>
						@endforeach
                        
                    </ul>
                </nav>
            </aside><!-- .menu-->
        </div><!-- .sidebar -->
		
	</div>
@endsection

@push('css')
	<link rel="stylesheet" href="{!! Theme::asset('css/jquery.fancybox.css') !!}">
@endpush
@push('scripts')
	<script src="{!! Theme::asset('js/jquery.fancybox.pack.js') !!}"></script>
@endpush


