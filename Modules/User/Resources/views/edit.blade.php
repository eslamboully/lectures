@extends('adminpanel::layouts.master')

@section('content')

    <section class="content-header">
        <h1 style="font-family: 'Cairo', sans-serif;">
            @lang('admin::admin.users')
            <small>@lang('admin::admin.control_panel')</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> @lang('admin::admin.home')</a></li>
            <li><a href="{{ route('users.index') }}"><i class="fa fa-user"></i> @lang('admin::admin.users')</a></li>
            <li class="active">@lang('admin::admin.edit')</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
	<div class="box">
            <div class="box-header">
              <h3 style="font-family: 'Cairo', sans-serif;" class="box-title">@lang('admin::admin.edit')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => ['users.update' , $user->id]  , 'files' => true, 'method' => 'PUT']) !!}
              <div class="form-group">
                {!! Form::label('full_name' ,  trans('user::user.full_name')) !!}
                {!! Form::text('full_name' , $user->full_name , ['class' => 'form-control'] ) !!}
              </div>

                {!! Form::hidden('id' ,  $user->id ) !!}

                  <div class="form-group">
                    {!! Form::label('phone' ,  trans('user::user.phone')) !!}
                    {!! Form::text('phone' , $user->phone , ['class' => 'form-control'] ) !!}
                  </div>

                <div class="form-group">
                    <label>@lang('user::user.level')</label>
                    <select class="form-control" name="level">
                        <option {{ $user->level == 1 ? 'selected' : '' }} value="1">Level 1</option>
                        <option {{ $user->level == 2 ? 'selected' : '' }} value="2">Level 2</option>
                        <option {{ $user->level == 3 ? 'selected' : '' }} value="3">Level 3</option>
                        <option {{ $user->level == 4 ? 'selected' : '' }} value="4">Level 4</option>
                        <option {{ $user->level == 5 ? 'selected' : '' }} value="5">Level 5</option>
                        <option {{ $user->level == 6 ? 'selected' : '' }} value="6">Level 6</option>
                        <option {{ $user->level == 7 ? 'selected' : '' }} value="7">Level 7</option>
                        <option {{ $user->level == 8 ? 'selected' : '' }} value="8">Level 8</option>
                        <option {{ $user->level == 9 ? 'selected' : '' }} value="9">Level 9</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>@lang('user::user.status')</label>
                    <select class="form-control" name="status">

                        <option {{ $user->status == '' ? 'selected' : '' }} value=""></option>
                        <option {{ $user->status == 'fail' ? 'selected' : '' }} value="fail">@lang('user::user.fail')</option>
                        <option {{ $user->status == 'success' ? 'selected' : '' }}value="success">@lang('user::user.success')</option>

                        <option {{ $user->status == 'withdrawal' ? 'selected' : '' }} value="withdrawal">@lang('user::user.withdrawal')</option>
                        <option {{ $user->status == 'disconnected' ? 'selected' : '' }} value="disconnected">@lang('user::user.disconnected')</option>
                        <option {{ $user->status == 'deferred' ? 'selected' : '' }} value="deferred">@lang('user::user.deferred')</option>

                    </select>
                </div>

              <div class="form-group">
                {!! Form::label('image' ,  trans('user::user.image') ) !!}
                {!! Form::file('image' , ['id' => 'image' , 'class' => 'form-control'] ) !!}
              </div>

              <div class="form-group">
                <img id="blah" width="100px" height="100px" class="img-thumbnail" src="{{ asset($user->image) }}" alt="your image" />
              </div>


              {!! Form::submit( trans('adminpanel::adminpanel.edit') , ['class' => 'btn btn-primary'] ) !!}
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
    </div>
            </div>
        </div>
    </section>
@stop