@extends('kreston::home')
@section('home-banner')
	<div class="slider progressive-slider load">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="pgwSlider">
						@foreach($home_banners as $key => $row)
							<li><img src="{!! url($row->storage_location) !!}" alt="{!! $row->name !!}" data-description="{!! $row->description !!}"></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>

@endsection
