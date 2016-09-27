@extends('administrator::layout')
@section('content')
	{!! Form::open(['url' => 'user/administrator/update','id'=>'user_form','class'=>'form-horizontal']) !!}
	{!! Form::hidden('id', isset($user) ?  Crypt::encrypt($user->id) : null, ['id' => 'id']) !!}
    <!-- Panel Header -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel p-xs">
                <div class="panel-heading clearfix">
                    <div class="col-md-2">
                        <h4 class="panel-title pull-left" style="padding-top: 7.5px;"><i class="fa fa-user"></i>  {!! Lang::get('app.user') !!}</h4>
                    </div>

                    <div class="col-md-10">
                        <div class="pull-right">
                            <div class="btn-group pull-right">
								<button class="btn btn-primary btn-sm" type="submit" id="btn-submit"><i class="fa fa-save"></i> {!! Lang::get('action.save') !!}</button>
								<a href="{!! url('user/administrator') !!}" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> {!! Lang::get("action.back") !!}</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Panel Header -->
    <div class="row">
        <div class="col-md-12">
            <div class="widget p-lg">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="first_name" class="col-sm-3 control-label text-left">{!! Lang::get('user::app.first name') !!}</label>
                            <div class="col-sm-9">
								{!! Form::text('first_name',isset($user)?$user->first_name:null, ['class' => 'form-control input-md','id'=>'first_name','placeholder'=>lang::get('user::app.first name'),'maxlength'=>100]) !!}
							</div>
                        </div>
						<div class="form-group">
							<label for="#" class="col-sm-3 control-label text-left">{!! Lang::get('user::app.email') !!}</label>
                            <div class="col-sm-9">
								{!! Form::text('email',isset($user)?$user->email:null, ['class' => 'form-control input-md','id'=>'email','placeholder'=>lang::get('user::app.email'),'maxlength'=>100]) !!}
							</div>
                        </div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="last_name" class="col-sm-3 control-label text-left">{!! Lang::get('user::app.last name') !!}</label>
                            <div class="col-sm-9">
								{!! Form::text('last_name',isset($user)?$user->last_name:null, ['class' => 'form-control input-md','id'=>'last_name','placeholder'=>lang::get('user::app.last name'),'maxlength'=>100]) !!}
							</div>
                        </div>
						@if(!isset($user))
						<div class="form-group">
							<label for="#" class="col-sm-3 control-label text-left">{!! Lang::get('user::app.password') !!}</label>
                            <div class="col-sm-9">
								{!! Form::password('password', ['class' => 'form-control input-md','id'=>'email','placeholder'=>lang::get('user::app.password'),'maxlength'=>100]) !!}
							</div>
                        </div>
						@endif
					</div>
					
				</div>
            </div>
        </div>
    </div>
	{!! Form::close() !!}
@endsection

@push('scripts')
    <script type="text/javascript">
		$(function() {
			$('#user_form').on('submit', function(event) {
				event.preventDefault();
				$("div#divLoading").addClass('show');
				$.ajax({
					type : $(this).attr('method'),
					url : $(this).attr('action'),
					data : $(this).serialize(),
					dataType : "json",
					cache : false,
					beforeSend : function() { console.log($(this).serialize());},
					success : function(response) {
						if(response.success == true) {
							window.location = response.redirect;	
						}
						
						$("div#divLoading").removeClass('show');
					},
					error : function() {
						$("div#divLoading").removeClass('show');
					}
				});
				return false;
			});
		});
	</script>
@endpush
