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
                                        <label class="col-form-label text-nowrap" for="">Họ và tên * : </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <input class="form-control" type="text" value="<?php
                                        if (isset($user_data)) {
                                            echo htmlspecialchars($user_data['user_full_name']);
                                        }
                                        ?>"
                                            id="">
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <label class="col-form-label text-nowrap" for="">Email : </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <input class="form-control" type="email" placeholder="Không bắt buộc"
                                            value="<?php
                                            if (isset($user_data)) {
                                                echo htmlspecialchars($user_data['user_email']);
                                            }
                                            ?>" id="">
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <label class="col-form-label text-nowrap" for="">Số điện thoại * : </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-auto">
                                        <input class="form-control" type="email" value="<?php
                                        if (isset($user_data)) {
                                            echo htmlspecialchars($user_data['user_number_phone']);
                                        }
                                        ?>"
                                            id="">
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
                                        <select class="form-control" name="" id="phuong">
                                        </select>
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <label class="col-form-label text-nowrap" for="">Số nhà, tên đường * :
                                        </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-8">
                                        <input class="form-control" type="text" name="" id="">
                                    </div>

                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-4">
                                        <label class="col-form-label text-nowrap" for="">Ghi chú : </label>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-8">
                                        <textarea class="form-control" name="" id="" minlength="3"></textarea>
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
                            <button class="btn btn-danger w-100">Thanh toán ngay</button>
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
                    <div class="col-12">


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
                                @php
                                    foreach ($products as $product) {
                                        echo '
                                        <tr>
                                            <th scope="row"><img src="'. $product['product']->product_img. '" class="img-thumbnail"></th>
                                            <td>'. $product['product']->product_name .'</td>
                                            <td><input type="number" class="form-control cart-count" data-id="'.$product['cart']->cart_id.'" max="10" value="'. $product['cart']->cart_count .'"></td>
                                            ';
                                        echo '<td>'. $product['cart']->product_size .'</td>
                                            <td>'. $product['product']->product_price * $product['cart']->cart_count .' VND</td>
                                            <td>'. $product['cart']->create_at. '</td>
                                            <td><button class="btn btn-danger">Xóa</button></td>
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
                                    <div class="col-6 text-end">299.000 VND</div>
                                </div>

                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6"><span>Chi tiết mã giảm giá</span></div>
                                    <div class="col-6 text-end text-success">-10%</div>
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
                                    <div class="col-6 text-end text-warning">30.000 VND</div>
                                </div>

                                <hr>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6"><span>Tổng thanh toán</span></div>
                                    <div class="col-6 text-end fw-bold text-danger">320.000 VND</div>
                                </div>
                                <hr>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function() {
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


                                                    <?php

                                            if (isset($user_data)) {
                                                ?>
                                                    $("#phuong").val(
                                                        "<?= $user_data['user_ward_location'] ?>"
                                                    );


                                                    <?php
                                            }
                                            ?>
                                                }
                                            });
                                    });

                                    <?php

                                if (isset($user_data)) {
                                    ?>
                                    $("#quan").val(
                                        "<?= $user_data['user_district_location'] ?>");
                                    $("#quan").change();

                                    <?php
                                }
                                ?>

                                }
                            });
                        });

                        <?php

                    if (isset($user_data)) {
                        ?>
                        $("#tinh").val("<?= $user_data['user_province_location'] ?>");
                        $("#tinh").change();

                        <?php
                    }
                    ?>

                    }
                });



            });
        </script>
    @endsection
