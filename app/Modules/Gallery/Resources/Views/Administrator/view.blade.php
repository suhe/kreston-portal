@extends('administrator::layout')
@section('content')
    <!-- Panel Header -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel p-xs">
                <div class="panel-heading clearfix">
                    <div class="col-md-2">
                        <h4 class="panel-title pull-left" style="padding-top: 7.5px;"><i class="fa fa-user-md"></i>  {!! Lang::get('gallery::app.event name') !!}</h4>
                    </div>

                    <div class="col-md-10">
                        <div class="pull-right">
                            <div class="btn-group pull-right">
								<a href="{!! url('gallery/administrator/create') !!}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> {!! Lang::get("action.create") !!}</a>
                                <a href="{!! url('gallery/administrator/upload/'.Crypt::encrypt($event->id)) !!}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> {!! Lang::get("action.upload") !!}</a>
								<a href="{!! url('gallery/administrator/status/'.Crypt::encrypt($event->id)) !!}" class="btn btn-primary btn-sm"><i class="fa fa-flag"></i> {!! isset($event) && $event->is_active == 1 ? Lang::get("action.set inactive"): Lang::get("action.set active")!!}</a>
								<a href="{!! url('gallery/administrator/edit/'.Crypt::encrypt($event->id)) !!}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> {!! Lang::get("action.edit") !!}</a>
								<a href="{!! url('gallery/administrator') !!}" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> {!! Lang::get("action.back") !!}</a>
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
						<table class="table">
							<tr>
								<th>{!! Lang::get('gallery::app.name') !!}</th>
								<td>{!!  $event->name !!}</td>
							</tr>

						</table>
					</div>

                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>{!! Lang::get('gallery::app.from date') !!}</th>
                                <td>{!! $event->date_from !!}</td>
                            </tr>
							<tr>
                                <th>{!! Lang::get('gallery::app.to date') !!}</th>
                                <td>{!! $event->date_to !!}</td>
                            </tr>
                        </table>
                    </div>
				</div>

            </div>
        </div>
    </div>
@endsection