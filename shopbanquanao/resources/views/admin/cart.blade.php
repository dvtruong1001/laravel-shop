@extends('admin.layouts.app')
@section('content')
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-edit">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sửa đơn hàng</h4>
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
                                    <label>Mã đơn hàng</label>
                                    <input type="text" class="form-control" id="e-name"
                                         readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="e-status">Trạng thái đơn hàng</label>
                            <select class="form-control" id="e-status">
                                <option value="0">Chờ xác nhận</option>
                                <option value="1">Đang giao hàng</option>
                                <option value="2">Đã giao hàng</option>
                                <option value="3">Giao hàng thất bại</option>
                            </select>
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
                        <h1>Quản lý đơn hàng</h1>
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
                                        <h3 class="card-title">Danh sách các đơn hàng</h3>

                                    </div>


                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="products" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Hình</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Tên</th>
                                            <th>Giá tiền</th>
                                            <th>Số lượng</th>
                                            <th>Size</th>
                                            <th>Tạo lúc</th>
                                            <th>Trạng thái</th>
                                            <th>Người đặt</th>
                                            <th>Địa chỉ nhận hàng</th>
                                            <th>Hoạt động</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carts as $cart)
                                            <tr>

                                                <td><img src="{{ URL($cart['cart']->product_img) }}" class="img-thumbnail">
                                                </td>
                                                <td>{{ $cart['cart']->cart_token }}</td>
                                                <td style="min-width:200px">{{ $cart['cart']->product_name }}</td>
                                                <td>{{ $cart['cart']->product_price * $cart['cart']->product_count }}</td>
                                                <td>{{ $cart['cart']->product_count }}</th>
                                                <td>{{ $cart['cart']->product_size }}</th>
                                                <td style="min-width:50px">{!! $cart['cart']->created_at !!}</td>

                                                <td>
                                                    @php
                                                        switch ($cart['cart']->status) {
                                                            case 0:
                                                                echo "<span class=\"badge bg-warning\">Đang chờ xác nhận</span>";
                                                                break;
                                                            case 1:
                                                                echo "<span class=\"badge bg-primary\">Đang giao hàng</span>";
                                                                break;
                                                            case 2:
                                                                echo "<span class=\"badge bg-success\">Giao hàng thành công</span>";
                                                                break;
                                                            case 3:
                                                                echo "<span class=\"badge bg-danger\">Giao hàng không thành công</span>";
                                                                break;
                                                            default:
                                                                echo "<span class=\"badge bg-danger\">Không xác định</span>";
                                                                break;
                                                        }
                                                    @endphp
                                                </td>



                                                <td style="min-width:50px">{!! $cart['user']->user_full_name !!}</td>
                                                <td style="min-width:400px">{!! $cart['cart']->location !!}</td>
                                                <td>
                                                    <button class="btn btn-primary e-btn" data-id="{{ $cart['cart']->id }}"
                                                        onclick="eBtn({{ $cart['cart']->id }})">Cập nhật đơn</button>
                                                    <button class="btn btn-danger d-btn" data-id="{{ $cart['cart']->id }}"
                                                        onclick="dBtn({{ $cart['cart']->id }})">Xóa đơn</button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <th>Hình</th>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên</th>
                                        <th>Giá tiền</th>
                                        <th>Số lượng</th>
                                        <th>Size</th>
                                        <th>Tạo lúc</th>
                                        <th>Trạng thái</th>
                                        <th>Người đặt</th>
                                        <th>Địa chỉ nhận hàng</th>
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
                text: "Người đặt hàng có thể sẽ không hài lòng!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '{{ route('deleteCartHistory') }}',
                        type: 'GET',
                        data: {
                            id: id,
                            user_token: getCookie("user_token")
                        },
                        dataType: 'json',
                        success: function(response) {
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
                        error: function(xhr, status, error) {
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
                title: 'Đang lấy thông tin đơn hàng ...',
                text: 'Vui lòng chờ 1 chút nhé',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            $.ajax({
                type: "GET",
                url: "{{ route('getCartHistoryInfo') }}",
                data: {
                    id: id,
                    user_token: getCookie("user_token")
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);

                    Swal.close();
                    if (response.status == "success") {

                        // console.log(response);
                        $("#e-name").val(response.cart.cart_token);
                        $("#e-status").val(response.cart.status);

                        $("#e-id").val(id);
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
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#products_wrapper .col-md-6:eq(0)');



            $("#e-form").submit(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Đang cập nhật đơn hàng ...',
                    text: 'Vui lòng chờ 1 chút nhé',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                var e_id = $("#e-id").val();
                var e_token = $("#e-token").val();
                var e_status = $("#e-status").val();



                $.ajax({
                    type: "GET",
                    url: "{{ route('setCartHistoryInfo') }}",
                    data: {
                        id: e_id,
                        user_token: getCookie("user_token"),
                        e_token: e_token,
                        e_status: e_status,

                    },
                    dataType: "json",
                    success: function(response) {
                        Swal.close();

                        if (response.status == "success") {

                            window.location.reload();

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
            });

            $("#n-form").submit(function(e) {
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
                    success: function(response) {
                        Swal.close();

                        if (response.status == "success") {

                            window.location.reload();

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



            });

        });
    </script>
@endsection
