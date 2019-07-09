<?php

namespace App\DataTables;

use Modules\User\Repositories\UserRepository;
use URL;
use Yajra\DataTables\Services\DataTable;

class UserDatatable extends DataTable {
	/**
	 * Build DataTable class.
	 *
	 * @param mixed $query Results from query() method.
	 * @return \Yajra\DataTables\DataTableAbstract
	 */
	public function dataTable($query) {
		return datatables($query)
            ->addColumn('checkbox', 'admin::datatables.btn.checkbox')
			->addColumn('control', 'user::datatables.control')
			->addColumn('image', 'user::datatables.image')
			->addColumn('level', 'user::datatables.level')
			->rawColumns(['level','control', 'image','checkbox']);
	}

	/**
	 * Get query source of dataTable.
	 *
	 * @param \App\User $model
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function query(UserRepository $userRepository) {
		return $userRepository->query();
	}

	/**
	 * Optional method if you want to use html builder.
	 *
	 * @return \Yajra\DataTables\Html\Builder
	 */
	public function html() {
		return $this->builder()
			->columns($this->getColumns())
			->minifiedAjax()
			->parameters([
                'dom' => 'Blfrtip',
                'lengthMenu' => [[10, 25, 50, 100, -1], [10, 25, 50, 100, trans('adminpanel::adminpanel.all')]],
                'buttons' => [
                    $permission = auth()->guard('admin')->user()->can('add_users') ?
                        [
                            'text' => trans('adminpanel::adminpanel.add'),
                            'className' => 'btn btn-info',
                            'action' => "function(){
                                    window.location.href ='" . URL::Current() . "/create';
                                }",
                        ] : [
                            'text' => trans('adminpanel::adminpanel.add'),
                            'className' => 'btn btn-info disabled',
                        ],
                    [
                        'extend'=>'export','text'=>'<i class="fa fa-file-archive-o"></i>'.__('admin::admin.export'),'className'=>'btn btn-primary','init' => 'function(api, node, config) {$(node).removeClass("dt-button")}'
                    ],
                    [
                        'extend'=>'print','text'=>'<i class="fa fa-print"></i>'.__('admin::admin.print'),'className'=>'btn btn-success','init' => 'function(api, node, config) {$(node).removeClass("dt-button")}'
                    ],
                    [
                        'extend'=>'reset','text'=>'<i class="fa fa-refresh"></i>','className'=>'btn btn-info','init' => 'function(api, node, config) {$(node).removeClass("dt-button")}'
                    ],
                    $permission = auth()->guard('admin')->user()->can('delete_users') ?
                        [
                            'text'=>'<i class="fa fa-trash-o"></i>'.__('admin::admin.delete_all'),'className'=>'btn btn-danger delBtn','init' => 'function(api, node, config) {$(node).removeClass("dt-button")}'
                        ] :
                        [
                            'text'=>'<i class="fa fa-trash-o"></i>'.__('admin::admin.delete_all'),'className'=>'btn btn-danger disabled','init' => 'function(api, node, config) {$(node).removeClass("dt-button")}'
                        ],
                ],
                'language' => yajra_lang(),
            ]);
	}

	/**
	 * Get columns.
	 *
	 * @return array
	 */
	protected function getColumns() {
		return [
            [
                'name'=>'checkbox',
                'data'=>'checkbox',
                'title'=>'<input type="checkbox" name="check_all" class="form-check check_all">',
                'sortable'=>false,
                'printable'=>false,
                'exportable'=>false,
                'orderable'=>false,
            ],
			[
				'name' => 'id',
				'data' => 'id',
				'title' => trans('admin::admin.id'),
			],
			[
				'name' => 'full_name',
				'data' => 'full_name',
				'title' => trans('admin::admin.full_name'),
			],
			[
				'name' => 'email',
				'data' => 'email',
				'title' => trans('admin::admin.email'),
			],
			[
				'name' => 'image',
				'data' => 'image',
				'title' => trans('admin::admin.image'),
				'printable' => false,
				'searchable' => false,
				'orderable' => false,
			],
            [
                'name' => 'level',
                'data' => 'level',
                'title' => trans('levels::level.level'),
            ],

			[
				'name' => 'control',
				'data' => 'control',
				'title' => trans('adminpanel::adminpanel.control'),
				'printable' => false,
				'searchable' => false,
				'orderable' => false,
			],

		];
	}

	/**
	 * Get filename for export.
	 *
	 * @return string
	 */
	protected function filename() {
		return 'User_' . date('YmdHis');
	}
}
