@extends('layouts.app')
@section('content')
    <div class="modal" id="buy-product-modal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-lg-4">

                                <div class="row-11">

                                    <div class="col-12">
                                        <div id="carouselExampleControls" class="carousel carousel-dark slide"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{ URL('dist/img/quankakinam1-lg.png') }}"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ URL('dist/img/quankakinam1-lg.png') }}"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{ URL('dist/img/quankakinam1-lg.png') }}"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="col-8"></div>
                                </div>

                                <div class="row" id="model-child-product">
                                    <div class="col-4 cursor-pointer">
                                        <img src="{{ URL('dist/img/quannam1.png') }}" class="img-thumbnail group-product"
                                            alt="...">
                                    </div>

                                    <div class="col-4 cursor-pointer">
                                        <img src="{{ URL('dist/img/quannam1.png') }}" class="img-thumbnail group-product"
                                            alt="...">
                                    </div>

                                    <div class="col-4 cursor-pointer">
                                        <img src="{{ URL('dist/img/quannam1.png') }}" class="img-thumbnail group-product"
                                            alt="...">
                                    </div>

                                    <div class="col-4 cursor-pointer">
                                        <img src="{{ URL('dist/img/quannam1.png') }}" class="img-thumbnail group-product"
                                            alt="...">
                                    </div>

                                    <div class="col-4 cursor-pointer">
                                        <img src="{{ URL('dist/img/quannam1.png') }}" class="img-thumbnail group-product"
                                            alt="...">
                                    </div>

                                    <div class="col-4 cursor-pointer">
                                        <img src="{{ URL('dist/img/quannam1.png') }}" class="img-thumbnail group-product"
                                            alt="...">
                                    </div>

                                </div>

                            </div>

                            <div class="col-12 col-lg-8">
                                <div class="row align-items-center">
                                    <div class="col-12 pe-0">
                                        <span class="fw-bold" id="model-product-name">Đã xảy ra lỗi</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-sm-3 col-md-3 col-lg-3 text-nowrap">Giá bán :</div>
                                            <div class="col-12 col-sm-9 col-md-9 col-lg-9 text-start ps-3"><span
                                                    class="text-danger fw-bold fs-5" id="model-product-price">999.000
                                                    VND</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span>Tình trạng : </span>
                                        <span class="text-success fw-bold" id="model-product-status">Còn hàng</span>
                                        <hr>
                                    </div>
                                    <div class="col-12">
                                        <span>Điểm nổi bật : </span>
                                    </div>
                                    <div class="col-12">
                                        <span class="fw-bold" id="model-product-des">Đã xảy ra lỗi</span>

                                    </div>
                                    <div class="col-12">
                                        <span id="model-product-des2">Đã xảy ra lỗi</span>
                                        <hr>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="" class="form-label">Size *</label>
                                                <select id="model-product-size" class="form-select">

                                                </select>
                                                <span class="fw-bold text-danger">Nếu bạn không thấy size muốn chọn thì do
                                                    size đó đã hết hàng. Cảm ơn</span>
                                            </div>

                                            <div class="col-6">
                                                <label for="" class="form-label">Số lượng *</label>
                                                <select name="" id="model-cart-count" class="form-select">

                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>

                                                </select>
                                            </div>

                                        </div>

                                        <hr>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <a class="btn btn-danger w-100" href="{{ route('cart') }}"><i
                                                        class="fa-solid fa-cart-shopping"></i><span
                                                        class="ps-2 text-uppercase">Kiểm tra giỏ hàng</span></a>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <button class="btn btn-outline text-danger btn-addtocart"><i
                                                        class="fa-solid fa-plus"></i><span class="ps-2">Thêm vào giỏ
                                                        hàng</span></button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row gy-1">
                                        {{-- <div class="col-12">
                                        <button class="btn btn-primary w-100"><i
                                                class="fa-solid fa-angles-right"></i><span class="ps-2">Xem chi
                                                tiết</span></button>
                                    </div> --}}
                                        <div class="col-12">
                                            <button type="button"
                                                class="btn btn-white btn-outline border border-2 border-radius-lg w-100"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>




                                </div>
                            </div>


                        </div>

                    </div>


                </div>
            </div>

        </div>


    </div>


    <div class="wrapper">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ URL('dist/img/slides/bonvoyage.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL('dist/img/slides/bonvoyage.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL('dist/img/slides/bonvoyage.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center fw-bold fs-4 mt-2">
                <span class="text-uppercase w-100">
                    Thời trang hot nhất
                </span>
            </div>
            <div class="col-12">
                <div class="row">

                    @foreach ($hot_products as $product)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="row product-preview">
                                <div class="col-12 image-product-preview">
                                    <img src="{{ URL($product->product_lg_img) }}" class="img-fluid" alt="...">
                                    <button class="btn btn-danger rounded-circle p-3 shoping-card-buy-btn"
                                        data-id=" {{ $product->product_id }}"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></button>
                                </div>
                                <div class="col">
                                    <img src="{{ URL($product->product_img) }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col">
                                    <img src="{{ URL($product->product_img) }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col">
                                    <img src="{{ URL($product->product_img) }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col-12">
                                    <div class="row text-center mt-2">
                                        <div class="col-12">
                                            <span>{{ $product->product_name }}</span>
                                        </div>
                                        <div class="col-12">
                                            <span class="text-danger">{{ $product->product_price }} VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach







                </div>
            </div>


            <div class="d-none d-md-block d-lg-block col-12 col-lg-12 col-md-12 mt-5">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ URL('dist/img/banner/somi-summercollection.png') }}" class="img-fluid"
                            alt="...">
                    </div>
                    <div class="col-6">
                        <img src="{{ URL('dist/img/banner/bonvoyage.png') }}" class="img-fluid" alt="...">
                    </div>
                    <div class="col-3">
                        <img src="{{ URL('dist/img/banner/polo-summercollection.png') }}" class="img-fluid"
                            alt="...">
                    </div>
                </div>
            </div>

            <div class="col-12 text-center fw-bold fs-4 mt-2">
                <span class="text-uppercase w-100">
                    Thời trang mới nhất
                </span>
            </div>
            <div class="col-12">
                <div class="row">

                    @foreach ($new_products as $product)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="row product-preview">
                                <div class="col-12 image-product-preview">
                                    <img src="{{ URL($product->product_lg_img) }}" class="img-fluid" alt="...">
                                    <button class="btn btn-danger rounded-circle p-3 shoping-card-buy-btn"
                                        data-id=" {{ $product->product_id }}"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></button>
                                </div>
                                <div class="col">
                                    <img src="{{ URL($product->product_img) }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col">
                                    <img src="{{ URL($product->product_img) }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col">
                                    <img src="{{ URL($product->product_img) }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col-12">
                                    <div class="row text-center mt-2">
                                        <div class="col-12">
                                            <span>{{ $product->product_name }}</span>
                                        </div>
                                        <div class="col-12">
                                            <span class="text-danger">{{ $product->product_price }} VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach







                </div>
            </div>


            <div class="col-12 text-center fw-bold fs-4 mt-2">
                <span class="text-uppercase w-100">
                    Thời trang bán chảy
                </span>
            </div>
            <div class="col-12">
                <div class="row">

                    @foreach ($top_sell_products as $product)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="row product-preview">
                                <div class="col-12 image-product-preview">
                                    <img src="{{ URL($product->product_lg_img) }}" class="img-fluid" alt="...">
                                    <button class="btn btn-danger rounded-circle p-3 shoping-card-buy-btn"
                                        data-id=" {{ $product->product_id }}"><i class="fa fa-shopping-cart"
                                            aria-hidden="true"></i></button>
                                </div>
                                <div class="col">
                                    <img src="{{ URL($product->product_img) }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col">
                                    <img src="{{ URL($product->product_img) }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col">
                                    <img src="{{ URL($product->product_img) }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col-12">
                                    <div class="row text-center mt-2">
                                        <div class="col-12">
                                            <span>{{ $product->product_name }}</span>
                                        </div>
                                        <div class="col-12">
                                            <span class="text-danger">{{ $product->product_price }} VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach







                </div>
            </div>

            <div class="row mt-4 mb-4 gy-5">
                <div class="col-12 col-md-4 col-lg-3 col-sm-12">
                    <div class="row">
                        <div class="col-1 col-lg-1 col-md-1">
                            <div class="row-2 fs-3">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="ps-4 col-11 col-md-11 col-lg-11 text-nowrap">
                            <span class="text-uppercase fw-bold">THANH TOÁN & GIAO HÀNG</span>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span>
                                Miễn phí vận chuyển cho đơn hàng trên 399.000 VNĐ <br>
                                - Giao hàng và thu tiền tận nơi <br>
                                - Chuyển khoản và giao hàng <br>
                                - Mua hàng tại shop <br>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 col-sm-12">
                    <div class="row">
                        <div class="col-1 col-lg-1 col-md-1">
                            <div class="row-2 fs-3">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="ps-4 col-11 col-md-11 col-lg-11 text-nowrap">
                            <span class="text-uppercase fw-bold">THẺ THÀNH VIÊN</span>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span>
                                Chế độ ưu đãi thành viên VIP: <br>
                                - 5% cho thành viên Bạc <br>
                                - 10% cho thành viên Vàng <br>
                                - 15% cho thành viên Kim cương <br>
                            </span>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4 col-lg-3 col-sm-12">
                    <div class="row">
                        <div class="col-1 col-lg-1 col-md-1">
                            <div class="row-2 fs-3">
                                <i class="fa fa-clock" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="ps-4 col-11 col-md-11 col-lg-11 text-nowrap">
                            <span class="text-uppercase fw-bold">GIỜ MỞ CỬA</span>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span>
                                <strong>8h30 đến 22:00</strong> <br>
                                - Tất cả các ngày trong tuần <br>
                                - Áp dụng cho tất cả các chi nhánh hệ thống cửa hàng DVTMOD <br>
                            </span>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-4 col-lg-3 col-sm-12">
                    <div class="row">
                        <div class="col-1 col-lg-1 col-md-1">
                            <div class="row-2 fs-3">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="ps-4 col-11 col-md-11 col-lg-11 text-nowrap">
                            <span class="text-uppercase fw-bold">Hỗ trợ 24/7</span>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span>
                                Gọi ngay cho chúng tôi khi bạn có thắc mắc <br>
                                - 0332.590.853
                            </span>
                        </div>
                    </div>
                </div>


            </div>


        </div>


        <script>
            $(document).ready(function() {


                function showProduct(id) {


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
                            product_id: id
                        },
                        dataType: "json",
                        success: function(response) {
                            Swal.close();
                            if (response.status == 200) {

                                $("#model-product-name").text(response.product_data
                                    .product_name);
                                $("#model-product-price").text(response.product_data
                                    .product_price);

                                if (response.product_data.product_count > 0 || response
                                    .product_data.product_count_m > 0 || response.product_data
                                    .product_count_l > 0 || response.product_data
                                    .product_count_xl > 0) {
                                    $("#model-product-status").removeClass("text-warning");
                                    $("#model-product-status").addClass("text-success");
                                    $("#model-product-status").text("Còn hàng");
                                } else {
                                    $("#model-product-status").addClass("text-warning");
                                    $("#model-product-status").removeClass("text-success");
                                    $("#model-product-status").text("Hết hàng");
                                }
                                $("#model-product-size").html("");
                                if (response.product_data.product_count > 0) {
                                    $("#model-product-size").append('<option value="S">S (Còn ' + response
                                        .product_data.product_count + ' sản phẩm )</option>');
                                }

                                if (response.product_data.product_count_m > 0) {
                                    $("#model-product-size").append('<option value="M">M (Còn ' + response
                                        .product_data.product_count_m + ' sản phẩm )</option>');
                                }

                                if (response.product_data.product_count_l > 0) {
                                    $("#model-product-size").append('<option value="L">L (Còn ' + response
                                        .product_data.product_count_l + ' sản phẩm )</option>');
                                }

                                if (response.product_data.product_count_xl > 0) {
                                    $("#model-product-size").append('<option value="XL">XL (Còn ' + response
                                        .product_data.product_count_xl + ' sản phẩm )</option>');
                                }


                                $("#model-child-product").html("");
                                response.group_product.forEach(child_product => {
                                    $("#model-child-product").append(`
                    <div class="col-4 cursor-pointer">
                            <img src="` + child_product.product_img +
                                        `" class="img-thumbnail group-product" data-id="` +
                                        child_product.product_id + `">
                        </div> 
                    `);
                                });


                                $(".group-product").click(function(e) {

                                    $(".btn-addtocart").data("id", $(this).data("id"));
                                    showProduct($(this).data("id"));

                                });

                                $("#model-product-des").text(response.product_data.product_name);
                                $("#model-product-des2").html(response.product_data.product_des);
                                $("#buy-product-modal").modal("show");
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

                $(".shoping-card-buy-btn").click(function(e) {


                    $(".btn-addtocart").data("id", $(this).data("id"));
                    showProduct($(this).data("id"));
                });


                $(".btn-addtocart").click(function() {
                    console.log(getCookie("user_token"));

                    Swal.fire({
                        title: 'Đang thêm sản phẩm vào giỏ hàng ...',
                        text: 'Vui lòng chờ 1 chút nhé',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    console.log($("#model-cart-count").val());

                    $.ajax({
                        type: "get",
                        url: "{{ route('addToCart') }}",
                        data: {
                            token: getCookie("user_token"),
                            product_id: $(this).data("id"),
                            cart_count: $("#model-cart-count").val(),
                            product_size: $("#model-product-size").val(),
                        },
                        dataType: "json",
                        success: function(response) {
                            Swal.close();
                            if (response.status == 200) {
                                Swal.fire({
                                    toast: true, // Kích hoạt dạng toast
                                    icon: 'success', // Biểu tượng (success, error, warning, info, question)
                                    title: 'Thêm vào giỏ hàng thành công. Tiếp tục mua sắm nào!', // Tiêu đề thông báo
                                    position: 'top-end', // Vị trí xuất hiện của toast (top, top-end, top-start, center, bottom, ...)
                                    showConfirmButton: false, // Ẩn nút xác nhận
                                    timer: 3000, // Thời gian tồn tại của toast (ms)
                                    timerProgressBar: true, // Hiển thị thanh tiến trình
                                });
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
