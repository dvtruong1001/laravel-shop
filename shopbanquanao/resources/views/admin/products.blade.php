@extends('admin.layouts.app')
@section('content')
    <div class="modal fade" id="modal-n">
        <div class="modal-dialog modal-n">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm sản phẩm</h4>
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
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="n-name"
                                        placeholder="Nhập tên sản phẩm" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Nhập mô tả sản phẩm</label>
                                    <textarea class="form-control" rows="3" id="n-des" placeholder="Nhập mô tả sản phẩm" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Nhập giá cho sản phẩm</label>
                                    <input type="number" class="form-control" id="n-price" min="0"
                                        placeholder="Nhập giá sản phẩm" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng sản phẩm size S</label>
                                    <input type="number" class="form-control" id="n-s" min="0"
                                        placeholder="Số lượng sản phẩm size S">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng sản phẩm size M</label>
                                    <input type="number" class="form-control" id="n-m" min="0"
                                        placeholder="Số lượng sản phẩm size M">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng sản phẩm size L</label>
                                    <input type="number" class="form-control" id="n-l" min="0"
                                        placeholder="Số lượng sản phẩm size L">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng sản phẩm size XL</label>
                                    <input type="number" class="form-control" id="n-xl" min="0"
                                        placeholder="Số lượng sản phẩm size XL">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <label class="form-label">Ảnh nhỏ sản phẩm</label>
                                    <input type="file" id="n-img" class="form-control" required>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <label class="form-label">Ảnh lớn sản phẩm</label>
                                    <input type="file" id="n-lg-img" class="form-control" required>

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
                    <h4 class="modal-title">Sửa sản phẩm</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="e-form">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="e-name"
                                        placeholder="Nhập tên sản phẩm" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Nhập mô tả sản phẩm</label>
                                    <textarea class="form-control" rows="3" id="e-des" placeholder="Nhập mô tả sản phẩm" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Nhập giá cho sản phẩm</label>
                                    <input type="number" class="form-control" id="e-price" min="0"
                                        placeholder="Nhập giá sản phẩm" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng sản phẩm size S</label>
                                    <input type="number" class="form-control" id="e-s" min="0"
                                        placeholder="Số lượng sản phẩm size S">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng sản phẩm size M</label>
                                    <input type="number" class="form-control" id="e-m" min="0"
                                        placeholder="Số lượng sản phẩm size M">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng sản phẩm size L</label>
                                    <input type="number" class="form-control" id="e-l" min="0"
                                        placeholder="Số lượng sản phẩm size L">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Số lượng sản phẩm size XL</label>
                                    <input type="number" class="form-control" id="e-xl" min="0"
                                        placeholder="Số lượng sản phẩm size XL">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <label class="form-label">Ảnh nhỏ sản phẩm</label>
                                    <input type="file" id="e-img" class="form-control">

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <label class="form-label">Ảnh lớn sản phẩm</label>
                                    <input type="file" id="e-lg-img" class="form-control">

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
                        <h1>Quản lý sản phẩm</h1>
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
                                        <h3 class="card-title">Danh sách các sản phẩm</h3>

                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-n">Thêm
                                            mới sản phẩm</button>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="products" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <th>Tên</th>
                                            <th>Mô tả</th>
                                            <th>Giá</th>
                                            <th>Trạng thái</th>
                                            <th>Số lượng</th>
                                            <th>Danh mục</th>
                                            <th>Lượt xem</th>
                                            <th>Lượt bán</th>
                                            <th>Hoạt động</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <th><img src="{{ URL($product->product_img) }}" class="img-thumbnail">
                                                </th>
                                                <th style="min-width:200px">{{ $product->product_name }}</th>
                                                <th style="min-width:400px">{!! $product->product_des !!}</th>
                                                <th>{{ $product->product_price }}</th>
                                                <th>{{ $product->product_status }}</th>
                                                <th>{{ $product->product_count }}</th>
                                                <th>{{ $product->category_linker_id }}</th>
                                                <th>{{ $product->view_count }}</th>
                                                <th>{{ $product->sell_count }}</th>
                                                <th>
                                                    <button class="btn btn-primary e-btn"
                                                        data-id="{{ $product->product_id }}"
                                                        onclick="eBtn({{ $product->product_id }})">Sửa</button>
                                                    <button class="btn btn-danger d-btn"
                                                        data-id="{{ $product->product_id }}"
                                                        onclick="eBtn({{ $product->product_id }})">Xóa</button>
                                                </th>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Hình ảnh</th>
                                            <th>Tên</th>
                                            <th>Mô tả</th>
                                            <th>Giá</th>
                                            <th>Trạng thái</th>
                                            <th>Số lượng</th>
                                            <th>Danh mục</th>
                                            <th>Lượt xem</th>
                                            <th>Lượt bán</th>
                                            <th>Hoạt động</th>

                                        </tr>
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
        function eBtn(id) {
            Swal.fire({
                title: 'Đang lấy thông tin sản phẩm ...',
                text: 'Vui lòng chờ 1 chút nhé',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            $.ajax({
                type: "get",
                url: "{{ route('getProductInfo') }}",
                data: {
                    product_id: id,
                    user_token: getCookie("user_token")
                },
                dataType: "json",
                success: function(response) {
                    Swal.close();
                    if (response.status == 200) {

                        // console.log(response);
                        $("#e-name").val(response.product_data.product_name);
                        $("#e-des").val(response.product_data.product_des);
                        $("#e-price").val(response.product_data.product_price);

                        $("#e-s").val(response.product_data.product_count);
                        $("#e-m").val(response.product_data.product_count_m);
                        $("#e-l").val(response.product_data.product_count_l);
                        $("#e-xl").val(response.product_data.product_count_xl);


                        $("#modal-edit").modal("show");


                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {

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
        $(document).ready(function(e) {


            $("#products").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#products_wrapper .col-md-6:eq(0)');


            $("#e-form").submit(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Đang sửa sản phẩm ...',
                    text: 'Vui lòng chờ 1 chút nhé',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });



                
                $.ajax({
                    type: "get",
                    url: "{{ route('getProductInfo') }}",
                    data: {
                        product_id: id,
                        user_token: getCookie("user_token")
                    },
                    dataType: "json",
                    success: function(response) {
                        Swal.close();
                        if (response.status == 200) {

                            // console.log(response);
                            $("#e-name").val(response.product_data.product_name);
                            $("#e-des").val(response.product_data.product_des);
                            $("#e-price").val(response.product_data.product_price);

                            $("#e-s").val(response.product_data.product_count);
                            $("#e-m").val(response.product_data.product_count_m);
                            $("#e-l").val(response.product_data.product_count_l);
                            $("#e-xl").val(response.product_data.product_count_xl);


                            $("#modal-edit").modal("show");


                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {

                        Swal.close();
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: jqXHR.responseJSON.message,

                        });
                        return false;
                    }
                });
            })

        });
    </script>
@endsection
