@extends('kreston::contact-us')
@section('breadcrumbs', Breadcrumbs::render($index))
@section('content')
	<div id="full-width-box-pricing-second" class="full-width-box">
	  <div class="fwb-bg fwb-fixed band-2"><div class="overlay"></div></div>
	  
	  <div class="container">
		<div class="row">
			@foreach($contacts as $key => $contact)
			 <div class="col-sm-4 col-md-4 contact-list">
				<div class="package">
				  <div class="title"><a href="#">{!! $contact->name !!}</a></div>
				  <div class="price-box">
					<div class="icon bg-white rounded pull-right"><i class="fa fa-map-marker"></i></div>
					<div class="description">
						{!! $contact->address !!} 
					</div>	
					
					<div class="price">{!! $contact->contact_name !!}</div>
					
					<div class="starting"><i class="fa fa-map-marker"></i> {!! $contact->city !!} {!! $contact->zip_code !!}</div>
					<div class="starting"><i class="fa fa-flag"></i> {!! $contact->country !!} </div>
					<div class="starting"><i class="fa fa-phone"></i> {!! $contact->phone_number !!} </div>
					<div class="starting"><i class="fa fa-fax"></i> {!! $contact->fax_number !!} </div>
					<div class="starting"><i class="fa fa-envelope"></i> {!! $contact->email !!} </div>
					<div class="starting"><i class="fa fa-globe"></i> {!! $contact->website !!} </div>
					
				  </div>
				</div><!-- .package -->
			 </div>
			@endforeach 
		  
		  
		</div>
	  </div>
	</div><!-- .full-width-box -->
@endsection

@push('css')
	<link rel="stylesheet" href="{!! Theme::asset('css/jquery.fancybox.css') !!}">
@endpush
@push('scripts')
	<script src="{!! Theme::asset('js/jquery.fancybox.pack.js') !!}"></script>
@endpush


