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
                                    <input type="text" class="form-control" id="nlink-img" readonly hidden>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <label class="form-label">Ảnh lớn sản phẩm</label>
                                    <input type="file" id="n-lg-img" class="form-control" required>
                                    <input type="text" class="form-control" id="nlink-lg-img" readonly hidden>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="n-category" class="form-label">Danh mục cho sản phẩm</label>
                                <select class="form-control" id="n-category" required>
                                    @foreach ($catgories as $category)
                                        <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
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
                                <label class="form-label" for="e-group">ID sản phẩm lớn</label>
                                <input type="number" class="form-control" id="e-group" placeholder="ID sản phẩm lớn">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" id="e-id" hidden>
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
                                    <input type="text" class="form-control" id="link-img" readonly hidden>

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <label class="form-label">Ảnh lớn sản phẩm</label>
                                    <input type="file" id="e-lg-img" class="form-control">
                                    <input type="text" class="form-control" id="link-lg-img" readonly hidden>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="e-category" class="form-label">Danh mục cho sản phẩm</label>
                                <select class="form-control" id="e-category" required>
                                    @foreach ($catgories as $category)
                                        <option value="{{ $category->category_id }}">{{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
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
                                            <th>ID</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên</th>
                                            <th>Mô tả</th>
                                            <th>Giá</th>
                                            <th>Danh mục</th>

                                            <th>Số lượng</th>
                                            <th>Lượt xem</th>
                                            <th>Lượt bán</th>
                                            <th>Hoạt động</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product['product']->product_id }} </td>
                                                <td><img src="{{ URL($product['product']->product_img) }}"
                                                        class="img-thumbnail"></td>
                                                <td style="min-width:200px">{{ $product['product']->product_name }}</td>
                                                <td style="min-width:400px">{!! $product['product']->product_des !!}</td>
                                                <td>{{ $product['product']->product_price }}</td>
                                                <td>{{ $product['category']->category_name }}</td>

                                                <td style="min-width:150px">{{ $product['product']->product_count }} (S)
                                                    {{ $product['product']->product_count_m }} (M)
                                                    {{ $product['product']->product_count_l }} (L)
                                                    {{ $product['product']->product_count_xl }} (XL) </th>

                                                <td>{{ $product['product']->view_count }}</td>
                                                <td>{{ $product['product']->sell_count }}</td>
                                                <td>
                                                    <button class="btn btn-primary e-btn"
                                                        data-id="{{ $product['product']->product_id }}"
                                                        onclick="eBtn({{ $product['product']->product_id }})">Sửa</button>
                                                    <button class="btn btn-danger d-btn"
                                                        data-id="{{ $product['product']->product_id }}"
                                                        onclick="dBtn({{ $product['product']->product_id }})">Xóa</button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên</th>
                                            <th>Mô tả</th>
                                            <th>Giá</th>
                                            <th>Danh mục</th>

                                            <th>Số lượng</th>

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
        function dBtn(id) {
            Swal.fire({
                title: 'Xác nhận xóa?',
                text: "Bạn sẽ mất sản phẩm này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '{{ route('deleteProduct') }}',
                        type: 'GET',
                        data: {
                            product_id: id,
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

                        $("#e-category").val(response.product_data.category_linker_id);

                        $("#e-group").val(response.product_data.product_group);


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


            $('#e-img').on('change', function() {

                var file = this.files[0];
                var formData = new FormData();

                if (file) {

                    Swal.fire({
                        title: 'Đang upload ảnh ...',
                        text: 'Vui lòng chờ 1 chút nhé',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });


                    if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)) {
                        Swal.close();
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Hãy chọn đúng file định dạng ảnh",

                        });
                        this.value = '';
                        return;
                    }


                    formData.append('file', file);

                    $.ajax({
                        url: '{{ route('apiUpload') }}',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {

                            Swal.close();

                            if (response.status == "success") {
                                $("#link-img").val(response.file);
                                $("#link-img").removeAttr("hidden");
                                $("#link-img").show();


                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Lỗi...",
                                    text: response.message,

                                });
                                return false;
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.close();
                            Swal.fire({
                                icon: "error",
                                title: "Lỗi...",
                                text: error,

                            });
                        }
                    });


                }
            });

            $('#e-lg-img').on('change', function() {

                var file = this.files[0];
                var formData = new FormData();

                if (file) {

                    Swal.fire({
                        title: 'Đang upload ảnh ...',
                        text: 'Vui lòng chờ 1 chút nhé',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });


                    if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)) {
                        Swal.close();
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Hãy chọn đúng file định dạng ảnh",

                        });
                        this.value = '';
                        return;
                    }


                    formData.append('file', file);

                    $.ajax({
                        url: '{{ route('apiUpload') }}',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {

                            Swal.close();

                            if (response.status == "success") {
                                $("#link-lg-img").val(response.file);
                                $("#link-lg-img").removeAttr("hidden");
                                $("#link-lg-img").show();


                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Lỗi...",
                                    text: response.message,

                                });
                                return false;
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.close();
                            Swal.fire({
                                icon: "error",
                                title: "Lỗi...",
                                text: error,

                            });
                        }
                    });


                }
            });



            $('#n-img').on('change', function() {

                var file = this.files[0];
                var formData = new FormData();

                if (file) {

                    Swal.fire({
                        title: 'Đang upload ảnh ...',
                        text: 'Vui lòng chờ 1 chút nhé',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });


                    if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)) {
                        Swal.close();
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Hãy chọn đúng file định dạng ảnh",

                        });
                        this.value = '';
                        return;
                    }


                    formData.append('file', file);

                    $.ajax({
                        url: '{{ route('apiUpload') }}',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {

                            Swal.close();

                            if (response.status == "success") {
                                $("#nlink-img").val(response.file);
                                $("#nlink-img").removeAttr("hidden");
                                $("#nlink-img").show();


                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Lỗi...",
                                    text: response.message,

                                });
                                return false;
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.close();
                            Swal.fire({
                                icon: "error",
                                title: "Lỗi...",
                                text: error,

                            });
                        }
                    });


                }
            });

            $('#n-lg-img').on('change', function() {

                var file = this.files[0];
                var formData = new FormData();

                if (file) {

                    Swal.fire({
                        title: 'Đang upload ảnh ...',
                        text: 'Vui lòng chờ 1 chút nhé',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });


                    if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)) {
                        Swal.close();
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Hãy chọn đúng file định dạng ảnh",

                        });
                        this.value = '';
                        return;
                    }


                    formData.append('file', file);

                    $.ajax({
                        url: '{{ route('apiUpload') }}',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {

                            Swal.close();

                            if (response.status == "success") {
                                $("#nlink-lg-img").val(response.file);
                                $("#nlink-lg-img").removeAttr("hidden");
                                $("#nlink-lg-img").show();


                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Lỗi...",
                                    text: response.message,

                                });
                                return false;
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.close();
                            Swal.fire({
                                icon: "error",
                                title: "Lỗi...",
                                text: error,

                            });
                        }
                    });


                }
            });



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

                var e_id = $("#e-id").val();
                var e_name = $("#e-name").val();
                var e_des = $("#e-des").val();
                var e_price = $("#e-price").val();
                var e_s = $("#e-s").val();
                var e_m = $("#e-m").val();
                var e_l = $("#e-l").val();
                var e_xl = $("#e-xl").val();
                var e_category = $("#e-category").val();

                var link_img = $("#link-img").val();
                var link_lg_img = $("#link-lg-img").val();

                var e_group = $("#e-group").val();

                $.ajax({
                    type: "get",
                    url: "{{ route('setProductInfo') }}",
                    data: {
                        product_id: e_id,
                        user_token: getCookie("user_token"),
                        e_name: e_name,
                        e_des: e_des,
                        e_price: e_price,
                        e_s: e_s,
                        e_m: e_m,
                        e_l: e_l,
                        e_xl: e_xl,
                        e_category: e_category,
                        e_group: e_group,
                        link_img: link_img,
                        link_lg_img: link_lg_img
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
                    title: 'Đang tạo sản phẩm ...',
                    text: 'Vui lòng chờ 1 chút nhé',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });


                var n_name = $("#n-name").val();
                var n_des = $("#n-des").val();
                var n_price = $("#n-price").val();
                var n_s = $("#n-s").val();
                var n_m = $("#n-m").val();
                var n_l = $("#n-l").val();
                var n_xl = $("#n-xl").val();
                var n_category = $("#n-category").val();
                var link_img = $("#nlink-img").val();
                var link_lg_img = $("#nlink-lg-img").val();



                $.ajax({
                    type: "get",
                    url: "{{ route('addProduct') }}",
                    data: {

                        user_token: getCookie("user_token"),
                        n_name: n_name,
                        n_des: n_des,
                        n_price: n_price,
                        n_s: n_s,
                        n_m: n_m,
                        n_l: n_l,
                        n_xl: n_xl,
                        n_category: n_category,
                        link_img: link_img,
                        link_lg_img: link_lg_img
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
