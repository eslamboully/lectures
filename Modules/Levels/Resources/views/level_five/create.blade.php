@extends('adminpanel::layouts.master')

@section('content')
    <section class="content-header">
        <h1 style="font-family: 'Cairo', sans-serif;">
            @lang('levels::level.level_five')
            <small>@lang('admin::admin.control_panel')</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> @lang('admin::admin.home')</a></li>
            <li><a href="{{ route('level_fives.index') }}"><i class="fa fa-500px"></i> @lang('levels::level.level_five')</a></li>
            <li class="active">@lang('admin::admin.add')</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                <div class="box-header">
                  <h3 style="font-family: 'Cairo', sans-serif;" class="box-title">@lang('admin::admin.add_question')</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  {!! Form::open(['route' => 'level_fives.store' ]) !!}
                  <div class="form-group">
                    {!! Form::label('title' ,  trans('levels::level.title')) !!}
                    {!! Form::text('title' , old('full_name') , ['class' => 'form-control'] ) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::label('description' ,  trans('levels::level.description') ) !!}
                    {!! Form::textarea('description' , old('email') , ['class' => 'form-control'] ) !!}
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