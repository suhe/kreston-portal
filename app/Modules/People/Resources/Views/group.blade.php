@extends('kreston::page')
@section('breadcrumbs', Breadcrumbs::render('people-office',$slug))
@section('content')
    <div class="row">
		<article class="content col-sm-12 col-md-9">
			@foreach($peoples as $key => $people) 
				<div class="row">
					<div class="col-md-12">
						<h4 class="title">{!! isset($people) ? $people->name : null !!}</h4>
						<img class="img-responsive" src="{!! url(ImageManager::getImagePath($people->photo_storage_location, 200, 300, 'crop')) !!}" style="float:left;margin:0 20px 20px" />
						{!! $people->description !!}
						
					</div>
				</div>
				<div class="horizontal_dotted_line"></div>
			@endforeach	
		  </article><!-- .content -->
		  
        <div id="sidebar" class="sidebar col-sm-12 col-md-3">
            <aside class="widget menu">
                <header>
                    <h3 class="title">{!! Lang::get('people::app.our people') !!}</h3>
                </header>
                <nav>
                    <ul>
						@foreach($our_contacts as $key => $contact)
							<li class="{!! Request::segment(3) == $contact->slug ? 'active' : '' !!}"><a href="{!! url('people/office/'.$contact->slug) !!}">{!! $contact->name !!}</a></li>
						@endforeach
                        
                    </ul>
                </nav>
            </aside><!-- .menu-->
        </div><!-- .sidebar -->
    </div>
@endsection


