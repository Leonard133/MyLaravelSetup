<?php

namespace App\DataTables;

use App\Test;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TestsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $action = "<a href='" . route('admin.test.index') . "' class='btn btn-sm btn-clean btn-icon'><i class='fas fa-cog tw-p-1'></i></a>";
                if ($item->status === 0) {
                    // Restore
                    $action .= "<a href='javascript:void(0);' data-id='" . $item->id . "' class='btn btn-sm btn-clean btn-icon resFunc'><i class='fas fa-check-circle tw-text-green-500'></i></a>";
                    $action .= "<form class='restore_$item->id d-none' method='POST' action='" . route('admin.test.index') . "' style='visibility:hidden'>" . csrf_field() . method_field('PUT') . "</form>";

                    // Force Delete
                    $action .= "<a href='javascript:void(0);' data-id='" . $item->id . "' class='btn btn-sm btn-clean btn-icon desFunc'><i class='fas fa-trash-alt tw-text-red-500'></i></a>";
                    $action .= "<form class='destroy_$item->id d-none' method='POST' action='" . route('admin.test.index') . "' style='visibility:hidden'>" . csrf_field() . method_field('DELETE') . "</form>";

                } else {
                    // Delete
                    $action .= "<a href='javascript:void(0);' data-id='$item->id' class='btn btn-sm btn-clean btn-icon delFunc'><i class='fas fa-times-circle tw-text-red-500'></i></a>";
                    $action .= "<form class='delete_$item->id d-none' method='POST' action='" . route('admin.test.index') . "' style='visibility:hidden'>" . csrf_field() . method_field('DELETE') . "</form>";
                    $action .= "<span class='tw-w-10'></span>";
                }
                return $action;
            })
            ->addColumn('status', function ($item) {
                return "<button type='button' class='btn " . (($item->status === 1) ? 'btn-outline-success' : 'btn-outline-danger') . " tw-p-1 tw-text-sm'>" . $item->status_name . "</button>";
            })
            ->rawColumns(['status', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Test $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Test $model)
    {
        return $model->localsearch(request());
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('test-table')
            ->columns($this->getColumns())
            ->ajax([
                'url' => route('admin.test.index'),
                'data' => 'function(d) {
                    d.name = $("#branch").val();
                    d.address = $("#address").val();
                    d.status = $("#status").val();
                }',
            ])
            ->dom("<'d-flex justify-content-end tw-py-2'><'row tw-overflow-x-auto'<'col-sm-12' t>><'row'<'col-lg-12' <'tw-py-3 col-lg-12 d-flex flex-column flex-sm-row align-items-center justify-content-between tw-space-y-5 md:tw-space-y-0' ip>r>>")
            ->initComplete('function() {
                    $("#subBtn").on("click",function () {
                        $("#test-table").DataTable().ajax.reload();
                    });
                    $("#clearBtn").on("click",function () {
                        $("#name").val(null);
                        $("#address").val(null);
                        $("#test-table").DataTable().ajax.reload();
                    });
                    $("#test-table").on("click", ".desFunc", function(e) {
                        var del_id = ".destroy_" + $(this).attr("data-id");
                        Swal.fire({
                            title: "Are you sure?",
                            //text: "You won\"t be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, destroy it!"
                        }).then(function(result) {
                            if (result.value) {
                                $(del_id).submit();
                            }
                        });
                    });
                    $("#test-table").on("click", ".delFunc", function(e) {
                        var del_id = ".delete_" + $(this).attr("data-id");
                        Swal.fire({
                            title: "Are you sure?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, deactivate it!"
                        }).then(function(result) {
                            if (result.value) {
                                $(del_id).submit();
                            }
                        });
                    });
                    $("#test-table").on("click", ".resFunc", function(e) {
                        var del_id = ".restore_" + $(this).attr("data-id");
                        Swal.fire({
                            title: "Are you sure?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, activate it!"
                        }).then(function(result) {
                            if (result.value) {
                                $(del_id).submit();
                            }
                        });
                    });
                }');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::make('status'),
            Column::make('action')->addClass('d-flex justify-content-around')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Tests_' . date('YmdHis');
    }
}
