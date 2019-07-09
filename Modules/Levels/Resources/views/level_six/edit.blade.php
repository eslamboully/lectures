@extends('adminpanel::layouts.master')

@section('content')

    <section class="content-header">
        <h1 style="font-family: 'Cairo', sans-serif;">
            @lang('levels::level.level_six')
            <small>@lang('admin::admin.control_panel')</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> @lang('admin::admin.home')</a></li>
            <li><a href="{{ route('level_sixs.index') }}"><i class="fa fa-user"></i> @lang('levels::level.level_six')</a></li>
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
              {!! Form::open(['route' => ['level_sixs.update' , $row->id]  , 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('title' ,  trans('levels::level.title')) !!}
                    {!! Form::text('title' , $row->title , ['class' => 'form-control'] ) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description' ,  trans('levels::level.description') ) !!}
                    {!! Form::textarea('description' , $row->description, ['class' => 'form-control'] ) !!}
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