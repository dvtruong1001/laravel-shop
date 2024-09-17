@extends("layouts.app")
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
                                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ URL("dist/img/quankakinam1-lg.png") }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ URL("dist/img/quankakinam1-lg.png") }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ URL("dist/img/quankakinam1-lg.png") }}" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                </div>
                                <div class="col-8"></div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <img src="{{ URL("dist/img/quannam1.png") }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col">
                                    <img src="{{ URL("dist/img/quannam1.png") }}" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col">
                                    <img src="{{ URL("dist/img/quannam1.png") }}" class="img-thumbnail" alt="...">
                                </div>
                            </div>

                        </div>

                        <div class="col-8">
                            <div class="row align-items-center">
                                <div class="col-12 pe-0">
                                    <span class="fw-bold">Quần Kaki Slimfit Trơn QK018 Màu Xanh Đen</span>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-sm-3 col-md-3 col-lg-3 text-nowrap">Giá bán :</div>
                                        <div class="col-12 col-sm-9 col-md-9 col-lg-9 text-start ps-3"><span class="text-danger fw-bold fs-5">249.000 VND</span></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <span>Tình trạng : </span>
                                    <span class="text-success fw-bold">Còn hàng</span>
                                    <hr>
                                </div>
                                <div class="col-12">
                                    <span>Điểm nổi bật : </span>
                                </div>
                                <div class="col-12">
                                    <span class="fw-bold">Quần Kaki Slimfit Trơn QK018 Màu Xanh Đen : </span>

                                </div>
                                <div class="col-12">
                                    <span>Thông tin sản phẩm: <br>
                                        - Mã sản phẩm: SM158 <br>
                                        - Chất liệu: Oxford <br>
                                        - Họa tiết: Trơn <br>
                                        - Form: Regular <br>
                                        - Màu: Trắng / Be / Xanh biển / Xanh đen <br>
                                        ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn quốc.</span>
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
                                            <button class="btn btn-danger w-100"><i class="fa-solid fa-cart-shopping"></i><span class="ps-2 text-uppercase">Đăng ký mua</span></button>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6">
                                            <button class="btn btn-outline text-danger"><i class="fa-solid fa-plus"></i><span class="ps-2">Thêm vào giỏ hàng</span></button>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row gy-1">
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100"><i class="fa-solid fa-angles-right"></i><span class="ps-2">Xem chi tiết</span></button>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-white btn-outline border border-2 border-radius-lg w-100" data-bs-dismiss="modal">Close</button>
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
                <div class="row my-5 product-preview ">
                    <div
                        class="image-product-preview col-12 col-sm-12 col-lg-6 border border-5 border-bottom-0 border-top-0 border-start-0 border-danger-subtle">
                        <a href="#"><img src="/dist/img/Áo sơ mi nam dài tay vải trơn.png" width="100%"></a>
                        <button class="btn btn-danger rounded-circle p-3 shoping-card-buy-btn"><i
                                class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="/dist/img/Áo sơ mi nam dài tay vải trơn.png" height="100px">
                                <hr>
                            </div>
                            <div class="col-12 my-4">
                                <strong>Áo sơ mi nam dài tay vải trơn</strong>
                            </div>
                            <div class="col-12">
                                <span class="fs-3 text-danger">249.000 VND</span>
                            </div>
                            <div class="col-12">
                                <span class="fs-6 fw-bold">
                                    Áo sơ mi nam dài tay vải trơn :
                                </span>
                            </div>
                            <div class="col-12">
                                Thông tin sản phẩm: <br>
                                - Mã sản phẩm: SM158 <br>
                                - Chất liệu: Oxford <br>
                                - Họa tiết: Trơn <br>
                                - Form: Regular <br>
                                - Màu: Trắng / Be / Xanh biển / Xanh đen <br>
                                ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn quốc.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 border-bottom mt-4 mb-4 text-dark opacity-25" style="border: 1px dashed;">
                </div>

                <div class="row my-5 product-preview ">
                    <div
                        class="image-product-preview col-12 col-sm-12 col-lg-6 border border-5 border-bottom-0 border-top-0 border-start-0 border-danger-subtle">
                        <a href="#"><img src="/dist/img/Áo sơ mi nam dài tay vải trơn.png" width="100%"></a>
                        <button class="btn btn-danger rounded-circle p-3 shoping-card-buy-btn"><i
                                class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="/dist/img/Áo sơ mi nam dài tay vải trơn.png" height="100px">
                                <hr>
                            </div>
                            <div class="col-12 my-4">
                                <strong>Áo sơ mi nam dài tay vải trơn</strong>
                            </div>
                            <div class="col-12">
                                <span class="fs-3 text-danger">249.000 VND</span>
                            </div>
                            <div class="col-12">
                                <span class="fs-6 fw-bold">
                                    Áo sơ mi nam dài tay vải trơn :
                                </span>
                            </div>
                            <div class="col-12">
                                Thông tin sản phẩm: <br>
                                - Mã sản phẩm: SM158 <br>
                                - Chất liệu: Oxford <br>
                                - Họa tiết: Trơn <br>
                                - Form: Regular <br>
                                - Màu: Trắng / Be / Xanh biển / Xanh đen <br>
                                ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn quốc.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 border-bottom mt-4 mb-4 text-dark opacity-25" style="border: 1px dashed;">
                </div>


                <div class="row my-5 product-preview ">
                    <div
                        class="image-product-preview col-12 col-sm-12 col-lg-6 border border-5 border-bottom-0 border-top-0 border-start-0 border-danger-subtle">
                        <a href="#"><img src="/dist/img/Áo sơ mi nam dài tay vải trơn.png" width="100%"></a>
                        <button class="btn btn-danger rounded-circle p-3 shoping-card-buy-btn"><i
                                class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="/dist/img/Áo sơ mi nam dài tay vải trơn.png" height="100px">
                                <hr>
                            </div>
                            <div class="col-12 my-4">
                                <strong>Áo sơ mi nam dài tay vải trơn</strong>
                            </div>
                            <div class="col-12">
                                <span class="fs-3 text-danger">249.000 VND</span>
                            </div>
                            <div class="col-12">
                                <span class="fs-6 fw-bold">
                                    Áo sơ mi nam dài tay vải trơn :
                                </span>
                            </div>
                            <div class="col-12">
                                Thông tin sản phẩm: <br>
                                - Mã sản phẩm: SM158 <br>
                                - Chất liệu: Oxford <br>
                                - Họa tiết: Trơn <br>
                                - Form: Regular <br>
                                - Màu: Trắng / Be / Xanh biển / Xanh đen <br>
                                ** Sản phẩm hiện có tại Website, Facebook và hệ thống cửa hàng DVTMOD toàn quốc.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 border-bottom mt-4 mb-4 text-dark opacity-25" style="border: 1px dashed;">
                </div>


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
                                <div class="input-group">
                                    <input type="search" placeholder="Từ khóa tìm kiếm" class="form-control">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary bg-white"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                </div>
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
                                            <li><i class="fa fa-stop-circle me-1 text-dark"
                                                    aria-hidden="true"></i><a href="#"
                                                    class="text-dark text-decoration-none">Áo sơ mi nam</a></li>
                                            <li><i class="fa fa-stop-circle me-1 text-dark"
                                                    aria-hidden="true"></i><a href="#"
                                                    class="text-dark text-decoration-none">Áo thun nam</a></li>
                                            <li><i class="fa fa-stop-circle me-1 text-dark"
                                                    aria-hidden="true"></i><a href="#"
                                                    class="text-dark text-decoration-none">Áo polo nam</a></li>
                                            <li><i class="fa fa-stop-circle me-1 text-dark"
                                                    aria-hidden="true"></i><a href="#"
                                                    class="text-dark text-decoration-none">Áo khoác nam</a></li>
                                            <li><i class="fa fa-stop-circle me-1 text-dark"
                                                    aria-hidden="true"></i><a href="#"
                                                    class="text-dark text-decoration-none">Áo len nam</a></li>
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
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>


<script>
    $(document).ready(function() {

        $(".shoping-card-buy-btn").click(function(e) {
            $("#buy-product-modal").modal("show");
        });

    });
</script>

@endsection