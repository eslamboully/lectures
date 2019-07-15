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
                {!! Form::label('email' ,  trans('user::user.email') ) !!}
                {!! Form::email('email' , $user->email , ['class' => 'form-control'] ) !!}
              </div>

                <div class="form-group">
                    <label>@lang('user::user.level')</label>
                    <select class="form-control" name="level">
                        <option {{ $user->level == 1 ? 'selected' : '' }} value="1">One</option>
                        <option {{ $user->level == 2 ? 'selected' : '' }} value="2">Two</option>
                        <option {{ $user->level == 3 ? 'selected' : '' }} value="3">Three</option>
                        <option {{ $user->level == 4 ? 'selected' : '' }} value="4">Four</option>
                        <option {{ $user->level == 5 ? 'selected' : '' }} value="5">Five</option>
                        <option {{ $user->level == 6 ? 'selected' : '' }} value="6">Six</option>
                        <option {{ $user->level == 7 ? 'selected' : '' }} value="7">Seven</option>
                        <option {{ $user->level == 8 ? 'selected' : '' }} value="8">Eight</option>
                        <option {{ $user->level == 9 ? 'selected' : '' }} value="9">Nine</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>@lang('user::user.status')</label>
                    <select class="form-control" name="status">

                        <option {{ $user->status == '' ? 'selected' : '' }} value=""></option>
                        <option {{ $user->status == 'fail' ? 'selected' : '' }} value="fail">@lang('user::user.fail')</option>
                        <option {{ $user->status == 'success' ? 'selected' : '' }}value="success">@lang('user::user.success')</option>

                    </select>
                </div>

              <div class="form-group">
                {!! Form::label('image' ,  trans('user::user.image') ) !!}
                {!! Form::file('image' , ['id' => 'image' , 'class' => 'form-control'] ) !!}
              </div>

              <div class="form-group">
                <img id="blah" width="100px" height="100px" class="img-thumbnail" src="{{ asset($user->image) }}" alt="your image" />
              </div>

              <div class="form-group">
                {!! Form::label('password' ,  trans('user::user.password') ) !!}
                {!! Form::password('password' , ['class' => 'form-control'] ) !!}
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