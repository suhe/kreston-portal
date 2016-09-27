@extends('administrator::layout')
@section('content')
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
                            {!! $users->appends(\Request::except('page'))->render() !!}
                            <div class="btn-group pull-right">
                                <a href="#" class="btn btn-default btn-sm"><i class="fa fa-pencil"></i> Add News</a>
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
                <table class="table">
                    <tr>
                        <th class="col-sm-1">#</th>
                        <th class="col-sm-2">@sortablelink('first_name')</th>
                        <th class="col-sm-2">@sortablelink('last_name')</th>
                        <th class="col-sm-2">@sortablelink('email')</th>
                        <th class="col-sm-1">{!! Lang::get('action.edit') !!}</th>
                    </tr>

                    @foreach ($users as $key => $user)
                    <tr>
                        <td>{!! $key + 1 !!}</td>
                        <td>{!! $user->first_name !!}</td>
                        <td>{!! $user->last_name !!}</td>
                        <td>{!! $user->email !!}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                    <i class="fa fa-pencil"> {!! Lang::get('action.edit') !!}</i>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"> {!! Lang::get('action.view') !!}</a></li>
                                    <li><a href="#"> {!! Lang::get('action.edit') !!}</a></li>
                                    <li><a href="#"> {!! Lang::get('action.remove') !!}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>



            </div>
        </div>
    </div>
@endsection