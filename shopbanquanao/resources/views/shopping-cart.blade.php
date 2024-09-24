@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-4 col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <span class="fw-bold">Thông tin liên hệ giao hàng</span>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <label class="col-form-label text-nowrap" for="fullname">Họ và tên * : </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <input class="form-control" type="text"
                                            value="{{ $authenticatedUser->user_full_name }}" id="fullname">
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <label class="col-form-label text-nowrap" for="email">Email : </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <input class="form-control" type="email" placeholder="Không bắt buộc"
                                            value="{{ $authenticatedUser->user_email }}" id="email">
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <label class="col-form-label text-nowrap" for="number-phone">Số điện thoại * :
                                        </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <input class="form-control" type="text"
                                            value="{{ $authenticatedUser->user_number_phone }}" id="number-phone">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <span class="fw-bold">Địa chỉ giao hàng</span>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <label class="col-form-label text-nowrap" for="tinh">Chọn tỉnh thành * :
                                        </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-8">
                                        <select class="form-control" name="" id="tinh">
                                            
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <label class="col-form-label text-nowrap" for="quan">Chọn quận huyện * :
                                        </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-8">
                                        <select class="form-control" name="" id="quan">
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <label class="col-form-label text-nowrap" for="phuong">Chọn phường xã * : </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-8">
                                        <select class="form-control" id="phuong">
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <label class="col-form-label text-nowrap" for="other-location">Số nhà, tên đường * :
                                        </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-8">
                                        <input class="form-control" type="text" id="other-location" value="{{ $authenticatedUser->user_other_location }}">
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <label class="col-form-label text-nowrap" for="note-cart">Ghi chú : </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-8">
                                        <textarea class="form-control" id="note-cart" minlength="3"></textarea>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-12">
                        <span class="fw-bold">Hình thức thanh toán</span>
                        <hr>
                    </div>

                    <div class="row pb-3">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 border border-2 py-3 px-1">
                            <div class="row">
                                <div class="col-1">
                                    <input class="" type="radio" name="" id="" checked>
                                </div>
                                <div class="col-3">
                                    <label class="form-check-label" for="">
                                        <i class="fa-solid fa-truck-moving fs-1 ps-2"></i>
                                    </label>
                                </div>

                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <span>COD</span>
                                        </div>
                                        <div class="col-12">
                                            <span>Thanh toán khi nhận hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row pb-3">
                        <div class="col-6"></div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 border border-2 py-3 px-1">
                            <div class="row">
                                <div class="col-1">
                                    <input class="" type="radio" name="" id="" disabled>
                                </div>
                                <div class="col-3">
                                    <label class="form-check-label" for="">
                                        <i class="fa-solid fa-money-bill-wave fs-1 ps-2"></i>
                                    </label>
                                </div>

                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <span>Tiền mặt</span>
                                        </div>
                                        <div class="col-12">
                                            <span class="text-danger fw-bold">Chỉ áp dụng khi mua hàng tại shop</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-danger w-100 pay-btn"
                                @if (count($products) <= 0) disabled @endif>Đặt hàng ngay</button>
                        </div>
                    </div>


                </div>


            </div>

            <div class="col-12 col-md-8 col-lg-8">

                <div class="row">
                    <div class="col-12">
                        <span class="fw-bold">Giỏ hàng của bạn</span>
                        <hr>
                    </div>
                    <div class="col-12 table-responsive">


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Hình</th>
                                    <th scope="col">Thông tin sản phẩm</th>
                                    <th scope="col">SL</th>
                                    <th scope="col">SIZE</th>
                                    <th scope="col">Tổng</th>
                                    <th scope="col">Tạo lúc </th>

                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($products) <= 0)
                                    <span class="fs-1 fw-bold text-warning">Chưa có đơn hàng nào. <a
                                            href="{{ route('home') }}">Mua ngay</a></span>
                                @endif
                                @php
                                    $total = 0;

                                    foreach ($products as $product) {
                                        $total += $product['product']->product_price;
                                        echo '
                                        <tr>
                                            <th scope="row"><img src="' .
                                            $product['product']->product_img .
                                            '" class="img-thumbnail"></th>
                                            <td class="w-100 text-nowrap">' .
                                            $product['product']->product_name .
                                            '</td>
                                            <td>' .
                                            $product['cart']->cart_count .
                                            '</td>
                                            ';
                                        echo '<td>' .
                                            $product['cart']->product_size .
                                            '</td>
                                            <td>' .
                                            number_format(
                                                $product['product']->product_price * $product['cart']->cart_count,
                                                0,
                                                ',',
                                                '.',
                                            ) .
                                            ' ₫</td>
                                            <td>' .
                                            $product['cart']->create_at .
                                            '</td>
                                            
                                            <td><button data-id="' .
                                            $product['cart']->cart_id .
                                            '" class="btn btn-danger btn-remove">Xóa</button></td>
                                        </tr>
                                    
                                    ';
                                    }
                                @endphp



                            </tbody>
                        </table>


                    </div>

                </div>


                <div class="row">
                    <div class="col-12">
                        <span class="fw-bold">Mã giảm giá (nếu có)</span>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 d-flex">
                                <input class="form-control me-2" type="text" placeholder="Nhập mã giảm giá nếu có">
                                <button class="btn btn-outline-success" type="button">Áp dụng</button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <span class="fw-bold">Tổng :</span>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6"><span>Số tiền mua sản phẩm</span></div>
                                    <div class="col-6 text-end">{{ number_format($total, 0, ',', '.') }} ₫</div>
                                </div>

                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6"><span>Chi tiết mã giảm giá</span></div>
                                    <div class="col-6 text-end text-success">-0%</div>
                                </div>

                                <hr>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-12">
                                <span class="fw-bold">Vận chuyển :</span>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6"><span>Tổng trọng lượng sản phẩm</span></div>
                                    <div class="col-6 text-end">250 gram</div>
                                </div>

                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6"><span>Phí vận chuyển</span></div>
                                    <div class="col-6 text-end text-warning">{{ number_format(30000, 0, ',', '.') }} ₫
                                    </div>
                                </div>

                                <hr>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6"><span>Tổng thanh toán</span></div>
                                    <div class="col-6 text-end fw-bold text-danger">
                                        {{ number_format($total + 30000, 0, ',', '.') }} ₫</div>
                                </div>
                                <hr>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">


            <div class="row">
                <div class="col-12">
                    <span class="fw-bold">Lịch sử đặt hàng của bạn</span>
                    <hr>
                </div>
                <div class="col-12 table-responsive">


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Hình</th>
                                <th scope="col">Mã đơn</th>
                                <th scope="col">Thông tin sản phẩm</th>
                                <th scope="col">SL</th>
                                <th scope="col">SIZE</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Đặt lúc </th>
                                <th scope="col">Địa chỉ nhận hàng</th>
                                <th scope="col">Trạng thái</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php

                                foreach ($history as $product) {
                                    echo '
                                    <tr>
                                        <td scope="row"><img src="' .
                                        $product->product_img .
                                        '" class="img-thumbnail"></td>
                                        <td>'. $product->cart_token.'
                                        <td class="w-100 text-nowrap">' .
                                        $product->product_name .
                                        '</td>
                                        <td>' .
                                        $product->product_count .
                                        '</td>
                                        ';
                                    echo '<td>' .
                                        $product->product_size .
                                        '</td>
                                        <td>' .
                                        number_format($product->product_price * $product->product_count, 0, ',', '.') .
                                        ' ₫</td>
                                        <td>' .
                                        $product->created_at .
                                        '</td>
                                        <td class="w-100 text-nowrap">' .
                                        $product->location .
                                        '</td>
                                        ';
                                    switch ($product->status) {
                                        case 0:
                                            echo '<td><span class="badge bg-warning">Chờ xác nhận đơn</span></td>';
                                            break;
                                        case 1:
                                            echo '<td><span class="badge bg-primary">Đang giao hàng</span></td>';
                                            break;
                                        case 2:
                                            echo '<td><span class="badge bg-success">Đã giao hàng</span></td>';
                                            break;
                                        case 3:
                                            echo '<td><span class="badge bg-danger">Giao hàng không thành công</span></td>';
                                            break;
                                        default:
                                            break;
                                    }
                                    echo '
                                        
                                    </tr>
                                
                                ';
                                }
                            @endphp



                        </tbody>
                    </table>


                </div>

            </div>
        </div>


        <script>
            $(document).ready(function() {

                $(".pay-btn").click(function(e) {
                    e.preventDefault();



                    const fullname = $("#fullname").val();

                    const email = $("#email").val();

                    const numberphone = $("#number-phone").val();

                    const tinh = $("#tinh option:selected").text();

                    const huyen = $("#quan option:selected").text();

                    const phuong = $("#phuong option:selected").text();

                    const tinh_code = $("#tinh").val();

                    const huyen_code = $("#quan").val();

                    const phuong_code = $("#phuong").val();

                    
                    const other_location = $("#other-location").val();

                    const notes_cart = $("#note-cart").val();

                    if (!fullname) {
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Không được bỏ trống họ và tên",

                        });
                        return false;
                    }

                    if (!numberphone) {
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Không được bỏ trống số điện thoại",

                        });
                        return false;
                    }


                    if (!tinh_code) {
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Vui lòng nhập địa chỉ nhận hàng (Tỉnh)",

                        });
                        return false;
                    }

                    if (!huyen_code) {
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Vui lòng nhập địa chỉ nhận hàng (Huyện/Thành phố)",

                        });
                        return false;
                    }


                    if (!phuong_code) {
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Vui lòng nhập địa chỉ nhận hàng (Phường/Xã)",

                        });
                        return false;
                    }


                    if (!other_location) {
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Vui lòng nhập địa chỉ nhận hàng (Số nhà, tên đường)",

                        });
                        return false;
                    }

                    Swal.fire({
                        title: 'Đang đặt hàng ...',
                        text: 'Vui lòng chờ 1 chút nhé',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });


                    $.ajax({
                        type: "GET",
                        url: "{{ route('cartConfirm') }}",
                        data: {
                            user_token: getCookie("user_token"),
                            fullname: fullname,
                            email: email,
                            numberphone: numberphone,
                            tinh: tinh,
                            huyen: huyen,
                            phuong: phuong,

                            tinh_code: tinh_code,
                            huyen_code: huyen_code,
                            phuong_code: phuong_code,


                            otherlocation: other_location,
                            notescart: notes_cart
                        },
                        dataType: "json",
                        success: function(response) {

                            Swal.close();
                            if (response.status == "success") {
                                Swal.fire({
                                    toast: true,
                                    icon: 'success',
                                    title: 'Đặt hàng. Tiếp tục mua sắm nào!',
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                });
                                setTimeout(() => {
                                    window.location.reload();
                                }, 3000);
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

                $(".btn-remove").click(function(e) {

                    console.log($(this).data("id"));

                    $.ajax({
                        url: "{{ route('cartRemove') }}",
                        type: 'GET',
                        data: {
                            user_token: getCookie("user_token"),
                            cart_id: $(this).data("id"),
                        },

                        success: function(response) {
                            console.log(response)
                            if (response) {
                                let res_json = response;

                                if (res_json.status == "error") {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Lỗi...",
                                        text: res_json.message,

                                    });
                                    return false;
                                }

                                window.location.reload();
                            } else {

                                Swal.fire({
                                    icon: "error",
                                    title: "Lỗi...",
                                    text: "Đã xảy ra lỗi khi xóa sản phẩm khỏi giỏ hàng",

                                });
                                return false;
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                            console.log(jqXHR);
                            Swal.fire({
                                icon: "error",
                                title: "Lỗi...",
                                text: jqXHR.responseJSON.message,

                            });
                            return false;
                        }
                    });

                    $(this).closest('tr').remove();
                });
                //Lấy tỉnh thành
                $.getJSON('https://esgoo.net/api-tinhthanh/1/0.htm', function(data_tinh) {
                    if (data_tinh.error == 0) {
                        $.each(data_tinh.data, function(key_tinh, val_tinh) {
                            $("#tinh").append('<option value="' + val_tinh.id + '">' + val_tinh
                                .full_name + '</option>');

                        });


                        $("#tinh").change(function(e) {
                            var idtinh = $(this).val();
                            //Lấy quận huyện
                            $.getJSON('https://esgoo.net/api-tinhthanh/2/' + idtinh + '.htm', function(
                                data_quan) {
                                if (data_quan.error == 0) {
                                    $("#quan").html('<option value="0">Quận Huyện</option>');
                                    $("#phuong").html('<option value="0">Phường Xã</option>');
                                    $.each(data_quan.data, function(key_quan, val_quan) {
                                        $("#quan").append('<option value="' + val_quan
                                            .id + '">' + val_quan.full_name +
                                            '</option>');
                                    });
                                    //Lấy phường xã  
                                    $("#quan").change(function(e) {
                                        var idquan = $(this).val();
                                        $.getJSON('https://esgoo.net/api-tinhthanh/3/' +
                                            idquan + '.htm',
                                            function(data_phuong) {
                                                if (data_phuong.error == 0) {
                                                    $("#phuong").html(
                                                        '<option value="0">Phường Xã</option>'
                                                    );
                                                    $.each(data_phuong.data,
                                                        function(key_phuong,
                                                            val_phuong) {
                                                            $("#phuong").append(
                                                                '<option value="' +
                                                                val_phuong
                                                                .id + '">' +
                                                                val_phuong
                                                                .full_name +
                                                                '</option>');
                                                        });


                                                    @if ($authenticatedUser)
                                                        {

                                                            $("#phuong").val(
                                                                "{{ $authenticatedUser->user_ward_location }}"
                                                            );
                                                            $("#phuong").change();

                                                        }
                                                    @endif
                                                    
                                                }
                                            });
                                    });

                                    @if ($authenticatedUser)
                                        {

                                            $("#quan").val(
                                                "{{ $authenticatedUser->user_district_location }}"
                                            );
                                            $("#quan").change();

                                        }
                                    @endif

                                }
                            });
                        });


                        @if ($authenticatedUser)
                            {

                                $("#tinh").val("{{ $authenticatedUser->user_province_location }}");
                                $("#tinh").change();

                            }
                        @endif

                    }
                });



            });
        </script>
    @endsection
