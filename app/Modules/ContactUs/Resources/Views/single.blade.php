@extends('kreston::contact-us')
@section('breadcrumbs', Breadcrumbs::render($index,$contact->slug))
@section('content')
	<header class="page-header">
    <div class="container">
      <h1 class="title">{!! $contact->name !!}</h1>
    </div>	
  </header>
  
	  <div class="container">
		<div class="row">
		  <div class="content col-sm-9 col-md-9">
			<div class="row">
			  <div class="col-sm-12 col-md-12 contact-info bottom-padding">
				<address>
				  <div class="title">{!! Lang::get('contact-us::app.address') !!}</div>
					  {!! $contact->address !!} {!! $contact->city !!} {!! $contact->zip_code !!} {!! $contact->country !!}
				</address>
				<div class="row">
				  <address class="col-sm-6 col-md-6">
					<div class="title">{!! Lang::get('contact-us::app.contact') !!}</div>
					<div>{!! Lang::get('contact-us::app.phone number') !!} : {!! $contact->phone_number !!}</div>
					<div>{!! Lang::get('contact-us::app.fax number') !!} : {!! $contact->fax_number !!}</div>
				  </address>
				  
				  <address class="col-sm-6 col-md-6">
					<div class="title">{!! Lang::get('contact-us::app.other contact') !!}</div>
					<div>{!! Lang::get('contact-us::app.email') !!} : {!! $contact->email !!}</div>
					<div>{!! Lang::get('contact-us::app.website') !!} : {!! $contact->website !!}</div>
				  </address>
				</div>
			</div>
			  
			  
			</div>
		  </div>
		  
		  <div id="sidebar" class="sidebar col-sm-3 col-md-3">
			<aside class="widget list">
			  <header>
				<h3 class="title">{!! Lang::get('contact-us::app.contact us') !!}</h3>
			  </header>
			  <ul>
				@foreach($contacts as $key => $row)
					<li class="{!! Request::segment(3) == $row->slug ? 'active' : '' !!}"><a href="{!! url('contact-us/office/'.$row->slug) !!}">{!! $row->name !!}</a></li>
				@endforeach

			  </ul>
			</aside><!-- .list -->
	  </div><!-- .sidebar -->
	  
    </div>
  </div><!-- .container -->
@endsection

@push('css')
	<link rel="stylesheet" href="{!! Theme::asset('css/jquery.fancybox.css') !!}">
@endpush
@push('scripts')
	<script src="{!! Theme::asset('js/jquery.fancybox.pack.js') !!}"></script>
@endpush


