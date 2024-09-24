@extends('admin.layouts.app')
@section('content')
<div class="modal fade" id="modal-n">
    <div class="modal-dialog modal-n">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm danh mục</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="n-form">
                <div class="modal-body">

                    <div class="row">
                        <div class="col">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control" id="n-name" placeholder="Nhập tên danh mục"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Nhập mô tả danh mục</label>
                                <textarea class="form-control" rows="3" id="n-des" placeholder="Nhập mô tả danh mục"
                                    required></textarea>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-edit">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sửa danh mục</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="e-form">
                <div class="modal-body">

                    <div class="row">
                        <div class="col">
                            <input type="text" id="e-id" hidden>
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control" id="e-name" placeholder="Nhập tên danh mục"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Nhập mô tả danh mục</label>
                                <textarea class="form-control" rows="3" id="e-des" placeholder="Nhập mô tả danh mục"
                                    required></textarea>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('adminIndex') }}">Trang chủ</a></li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">Danh sách các danh mục</h3>

                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-n">Thêm
                                        mới danh mục</button>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="products" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>Tên</th>
                                        <th>Mô tả</th>
                                        <th>Số sản phẩm</th>
                                        <th>Hoạt động</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catgories as $category)
                                    <tr>
                                        
                                        <td style="min-width:200px">{{ $category['category']->category_name }}</td>
                                        <td style="min-width:400px">{!! $category['category']->category_des !!}</td>
                                        
                                        <td>{{ $category['total_product']}}</td>
                                        <td>
                                            <button class="btn btn-primary e-btn"
                                                data-id="{{ $category['category']->category_id }}"
                                                onclick="eBtn({{ $category['category']->category_id }})">Sửa</button>
                                            <button class="btn btn-danger d-btn"
                                                data-id="{{ $category['category']->category_id }}"
                                                onclick="dBtn({{ $category['category']->category_id }})">Xóa</button>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    <th>Số sản phẩm</th>
                                    <th>Hoạt động</th>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script>
    function dBtn(id) {
        Swal.fire({
            title: 'Xác nhận xóa?',
            text: "Bạn sẽ mất danh mục này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: '{{ route('deleteCategory') }}',
                    type: 'GET',
                    data: {
                        category_id: id,
                        user_token: getCookie("user_token")
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.status == "error") {
                            Swal.fire(
                                'Lỗi!',
                                response.message,
                                'error'
                            );

                            return;
                        }

                        window.location.reload();


                    },
                    error: function (xhr, status, error) {
                        Swal.fire(
                            'Lỗi!',
                            error,
                            'error'
                        );
                    }
                });
            }
        });
    }

    function eBtn(id) {
        Swal.fire({
            title: 'Đang lấy thông tin danh mục ...',
            text: 'Vui lòng chờ 1 chút nhé',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });
        $.ajax({
            type: "GET",
            url: "{{ route('getCategoryInfo') }}",
            data: {
                category_id: id,
                user_token: getCookie("user_token")
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
                
                Swal.close();
                if (response.status == "success") {

                    // console.log(response);
                    $("#e-name").val(response.category.category_name);
                    $("#e-des").val(response.category.category_des);

                    $("#e-id").val(id);
                    $("#modal-edit").modal("show");


                }

            },
            error: function (jqXHR, textStatus, errorThrown) {

                Swal.close();
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: jqXHR.responseJSON.message,

                });
                return false;
            }
        });

    }
    $(document).ready(function (e) {


        $("#products").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#products_wrapper .col-md-6:eq(0)');


        
        $("#e-form").submit(function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Đang sửa danh mục ...',
                text: 'Vui lòng chờ 1 chút nhé',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            var e_id = $("#e-id").val();
            var e_name = $("#e-name").val();
            var e_des = $("#e-des").val();
            


            $.ajax({
                type: "GET",
                url: "{{ route('setCategoryInfo') }}",
                data: {
                    category_id: e_id,
                    user_token: getCookie("user_token"),
                    e_name: e_name,
                    e_des: e_des,
                    
                },
                dataType: "json",
                success: function (response) {
                    Swal.close();

                    if (response.status == "success") {

                        window.location.reload();

                    }

                },
                error: function (jqXHR, textStatus, errorThrown) {

                    Swal.close();
                    Swal.fire({
                        icon: "error",
                        title: "Lỗi...",
                        text: jqXHR.responseJSON.message,

                    });
                    return false;
                }
            });
        });

        $("#n-form").submit(function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Đang tạo danh mục ...',
                text: 'Vui lòng chờ 1 chút nhé',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });


            var n_name = $("#n-name").val();
            var n_des = $("#n-des").val();
            


            $.ajax({
                type: "get",
                url: "{{ route('addCategory') }}",
                data: {

                    user_token: getCookie("user_token"),
                    n_name: n_name,
                    n_des: n_des,
                    
                },
                dataType: "json",
                success: function (response) {
                    Swal.close();

                    if (response.status == "success") {

                        window.location.reload();

                    }

                },
                error: function (jqXHR, textStatus, errorThrown) {

                    Swal.close();
                    Swal.fire({
                        icon: "error",
                        title: "Lỗi...",
                        text: jqXHR.responseJSON.message,

                    });
                    return false;
                }
            });



        });

    });
</script>
@endsection