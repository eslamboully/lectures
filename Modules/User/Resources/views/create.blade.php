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
            <li class="active">@lang('admin::admin.add')</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                <div class="box-header">
                  <h3 style="font-family: 'Cairo', sans-serif;" class="box-title">@lang('admin::admin.add')</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  {!! Form::open(['route' => 'users.store' , 'files' => true]) !!}
                  <div class="form-group">
                    {!! Form::label('full_name' ,  trans('admin::admin.full_name')) !!}
                    {!! Form::text('full_name' , old('full_name') , ['class' => 'form-control'] ) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('email' ,  trans('admin::admin.email') ) !!}
                    {!! Form::email('email' , old('email') , ['class' => 'form-control'] ) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('phone' ,  trans('user::user.phone')) !!}
                    {!! Form::text('phone' , old('phone') , ['class' => 'form-control'] ) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('password' ,  trans('admin::admin.password') ) !!}
                    {!! Form::password('password' , ['class' => 'form-control'] ) !!}
                  </div>

                    <div class="form-group">
                        <label>@lang('user::user.level')</label>
                        <select class="form-control" name="level">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('user::user.status')</label>
                        <select class="form-control" name="status">
                            <option value=""></option>
                            <option value="fail">@lang('user::user.fail')</option>
                            <option value="success">@lang('user::user.success')</option>
                        </select>
                    </div>

                  <div class="form-group">
                    {!! Form::label('image' ,  trans('admin::admin.image') ) !!}
                    {!! Form::file('image' , ['id' => 'image' , 'class' => 'form-control'] ) !!}
                  </div>

                  <div class="form-group">
                    <img id="blah" width="100px" height="100px" class="img-thumbnail" src="{{ url('public/upload/users/default.png') }}" alt="your image" />
                  </div>

                  {!! Form::submit( trans('adminpanel::adminpanel.add_new') , ['class' => 'btn btn-primary'] ) !!}
                  {!! Form::close() !!}
                </div>
                <!-- /.box-body -->
          </div>
            </div>
        </div>
    </section>
@endsection