@extends('adminpanel::layouts.master')

@section('content')
    <section class="content-header">
        <h1 style="font-family: 'Cairo', sans-serif;">
            @lang('levels::level.level_five')
            <small>@lang('admin::admin.control_panel')</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> @lang('admin::admin.home')</a></li>
            <li class="active">@lang('levels::level.level_five')</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
        <div class="box-header">
            <h3 style="font-family: 'Cairo', sans-serif;" class="box-title">@lang('levels::level.level_five')</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            {!! Form::open(['id' => 'form_data' , 'url' => route('delete_level_five') ]) !!}
            {!! Form::hidden('_method' , 'delete') !!}
            {!! $dataTable->table([
              'class' => 'dataTable table table-bordered table-striped table-hover'
            ], true) !!}
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div id="multipleDelete" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{ trans('admin::admin.delete') }}</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger">

                        <div class="empty_record">
                            <h4>{{ trans('admin::admin.please_check_some_records') }}</h4>
                        </div>

                        <div class="not_empty_record">
                            <h4>{{ trans('admin::admin.ask_delete_item') }} <span class="record_count"></span> ? </h4>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <div class="not_empty_record">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin::admin.no') }}</button>
                        <button type="button" class="btn btn-danger del_all" name="del_all">{{ trans('admin::admin.yes') }}</button>
                    </div>



                </div>
            </div>

        </div>
    </div>

    @push('js')

    <script>
        //delete_all();
    </script>

    {!! $dataTable->scripts() !!}

    @endpush


@stop