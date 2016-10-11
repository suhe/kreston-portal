@extends('kreston::page')
@section('breadcrumbs', Breadcrumbs::render('people-single',$people->slug))
@section('content')
    <div class="row">
		<article class="content col-sm-12 col-md-9">
			<h1 class="title">{!! isset($people) ? $people->name : null !!}</h1>
			<img class="img-responsive" src="{!! url(ImageManager::getImagePath($people->photo_storage_location, 200, 300, 'crop')) !!}" style="float:left;margin:0 20px 20px" />
			{!! $people->description !!}
			
		  </article><!-- .content -->
		  
        <div id="sidebar" class="sidebar col-sm-12 col-md-3">
            <aside class="widget menu">
                <header>
                    <h3 class="title">{!! Lang::get('people::app.our people') !!}</h3>
                </header>
                <nav>
                    <ul>
						@foreach($our_peoples as $key => $row)
							<li class="{!! Request::segment(2) == $row->slug ? 'active' : '' !!}"><a href="{!! url('people/'.$row->slug) !!}">{!! $row->name !!}</a></li>
						@endforeach
                        
                    </ul>
                </nav>
            </aside><!-- .menu-->
        </div><!-- .sidebar -->
    </div>
@endsection


