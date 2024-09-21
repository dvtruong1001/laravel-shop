@extends('layouts.app')
@section('content')
    <div class="modal" id="buy-product-modal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-4">

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

                                <div class="row">
                                    <div class="col">
                                        <img src="{{ URL('dist/img/quannam1.png') }} " class="img-thumbnail" alt="...">
                                    </div>
                                    <div class="col">
                                        <img src="{{ URL('dist/img/quannam1.png') }}" class="img-thumbnail" alt="...">
                                    </div>
                                    <div class="col">
                                        <img src="{{ URL('dist/img/quannam1.png') }}" class="img-thumbnail" alt="...">
                                    </div>
                                </div>

                            </div>

                            <div class="col-8">
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
                                                <select name="" id="" class="form-select">
                                                    <option value="">S</option>
                                                    <option value="">M</option>
                                                    <option value="">L</option>
                                                    <option value="">XL</option>

                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <label for="" class="form-label">Số lượng *</label>
                                                <select name="" id="" class="form-select">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                    <option value="">4</option>
                                                    <option value="">5</option>
                                                    <option value="">6</option>
                                                    <option value="">7</option>
                                                    <option value="">8</option>
                                                    <option value="">9</option>
                                                    <option value="">10</option>

                                                </select>
                                            </div>

                                        </div>

                                        <hr>
                                    </div>

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <button class="btn btn-danger w-100"><i
                                                        class="fa-solid fa-cart-shopping"></i><span
                                                        class="ps-2 text-uppercase">Đăng ký mua</span></button>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <button class="btn btn-outline text-danger"><i
                                                        class="fa-solid fa-plus"></i><span class="ps-2">Thêm vào giỏ
                                                        hàng</span></button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row gy-1">
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100"><i
                                                    class="fa-solid fa-angles-right"></i><span class="ps-2">Xem chi
                                                    tiết</span></button>
                                        </div>
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



    <div class="container">
        <div class="row">
            <div class="col">
                <span class="fs-4 fw-bold">SHOP BÁN QUẦN ÁO ONLINE</span>
            </div>
            <div class="col-12 border-bottom mt-4 mb-4 text-dark opacity-50" style="border: 1px dashed;">
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-6 col-sm-12">

                    @if (count($products) <= 0)
                        <span class="fw-bold text-warning fs-2">Không tìm thấy sản phẩm nào</span>
                    @endif
                    @foreach ($products as $product)
                        <div class="row my-5 product-preview ">
                            <div
                                class="image-product-preview col-12 col-sm-12 col-lg-6 border border-5 border-bottom-0 border-top-0 border-start-0 border-danger-subtle">
                                <a href="#"><img src="{{ URL($product->product_lg_img) }}" width="100%"></a>
                                <button class="btn btn-danger rounded-circle p-3 shoping-card-buy-btn"
                                    data-id="{{ $product->product_id }}"><i class="fa fa-shopping-cart"
                                        aria-hidden="true"></i></button>
                            </div>
                            <div class="col-12 col-sm-12 col-lg-6">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="{{ URL($product->product_img) }}" height="100px">
                                        <hr>
                                    </div>
                                    <div class="col-12 my-4">
                                        <strong>{{ $product->product_name }}</strong>
                                    </div>
                                    <div class="col-12">
                                        <span class="fs-3 text-danger">{{ $product->product_price }} VND</span>
                                    </div>
                                    <div class="col-12">
                                        <span class="fs-6 fw-bold">
                                            {{ $product->product_name }} :
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        {!! $product->product_des !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 border-bottom mt-4 mb-4 text-dark opacity-25" style="border: 1px dashed;">
                        </div>
                    @endforeach




                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <strong class="text-nowrap">TÌM KIẾM</strong>
                                </div>
                                <div class="col-8">
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <span>Sản phẩm tại DVTMOD</span>
                                    <form>
                                        <div class="input-group">

                                            <input type="search" placeholder="Từ khóa tìm kiếm" class="form-control"
                                                name="kw" value="@php echo $_GET["kw"] ?? "" @endphp">

                                            <input hidden name="cg" value="@php echo $_GET["cg"] ?? "" @endphp">

                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-outline-secondary bg-white"><i
                                                        class="fa fa-search"></i></button>
                                            </span>

                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="row">
                                        <div class="col-4">
                                            <strong class="text-nowrap">DANH MỤC</strong>
                                        </div>
                                        <div class="col-8">
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <ul class="list-unstyled">
                                                @foreach ($categories as $category)
                                                    <li><i class="fa fa-stop-circle me-1 text-dark"
                                                            aria-hidden="true"></i><a
                                                            href="?cg={{ $category->category_id }}"
                                                            class="text-dark text-decoration-none">
                                                            {{ $category->category_name }} </a></li>
                                                @endforeach


                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-5">
                                            <strong class="text-nowrap text-uppercase">Sản phẩm hot</strong>
                                        </div>
                                        <div class="col-7">
                                            <hr>
                                        </div>

                                        <div class="col-12">
                                            @foreach ($hot_products as $hot_product)
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="{{ URL($hot_product->product_img) }}"
                                                            class="img-thumbnail">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span class="fs-5"> {{ $hot_product->product_name }}
                                                                </span>
                                                            </div>
                                                            <div class="col-12">
                                                                <span class="text-danger">
                                                                    {{ $hot_product->product_price }} VND </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach



                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="row">
                                        <div class="col-7">
                                            <strong class="text-nowrap text-uppercase">Sản phẩm đã xem</strong>
                                        </div>
                                        <div class="col-5">
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="/dist/img/Áo sơ mi nam dài tay vải trơn.png"
                                                        class="img-thumbnail">
                                                </div>
                                                <div class="col-8">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="fs-5"> Áo sơ mi nam dài tay vải trơn </span>
                                                        </div>
                                                        <div class="col-12">
                                                            <span class="text-danger"> 249.000 VND </span>
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
                </div>
                <div class="col-12 d-flex justify-content-center text-center mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">

                            @php
                                $count_page = ceil($count_product / 5);

                            @endphp
                            @if (($_GET['page'] ?? 1) > 1)
                                <li class="page-item"><a class="page-link"
                                        href="{{ request()->fullUrlWithQuery(['page' => $_GET['page'] - 1]) }}">Previous</a>
                                </li>
                            @endif

                            @for ($i = 1; $i < $count_page; $i++)
                                <li class="page-item @php if(($_GET['page'] ?? 1) == $i) echo "active"; @endphp"><a class="page-link"
                                        href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">{{ $i }}</a>
                                </li>
                            @endfor


                            @if (($_GET['page'] ?? 1) < $count_page - 1)
                                <li class="page-item"><a class="page-link"
                                        href="{{ request()->fullUrlWithQuery(['page' => ($_GET['page'] ?? 1) + 1]) }}">Next</a></li>
                            @endif

                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>


    <script>
        $(document).ready(function() {

            $(".shoping-card-buy-btn").click(function(e) {

                $.ajax({
                    type: "get",
                    url: "{{ route('getProductInfo') }}",
                    data: {
                        product_id: $(this).data("id")
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.status == 200) {

                            $("#model-product-name").text(response.product_data[0]
                                .product_name);
                            $("#model-product-price").text(response.product_data[0]
                                .product_price);

                            if (response.product_data[0].product_count > 0) {
                                $("#model-product-status").removeClass("text-warning");
                                $("#model-product-status").addClass("text-success");
                                $("#model-product-status").text("Còn hàng");
                            } else {
                                $("#model-product-status").addClass("text-warning");
                                $("#model-product-status").removeClass("text-success");
                                $("#model-product-status").text("Hết hàng");
                            }

                            $("#model-product-des").text(response.product_data[0].product_name);
                            $("#model-product-des2").html(response.product_data[0].product_des);
                            $("#buy-product-modal").modal("show");
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

            });

        });
    </script>
@endsection
