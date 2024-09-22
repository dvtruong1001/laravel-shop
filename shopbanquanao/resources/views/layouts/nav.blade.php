<div class="modal" id="login-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Đăng nhập</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="login-form">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="login-username" class="form-label">Tên tài khoản</label>
                                    <input type="text" class="form-control" id="login-username"
                                        placeholder="Tên tài khoản" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="login-password" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="login-password"
                                        placeholder="Mật khẩu" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span>Không muốn đăng nhập ?</span><a
                                    href="{{ request()->fullUrlWithQuery(['new_guest' => 1]) }}"> Dùng tài khoản một
                                    lần</a>
                            </div>
                            <div class="col-12">
                                <span>Chưa có tài khoản ?</span><a class="register-btn" href="#"> Đăng ký ngay</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-login">Đăng nhập</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                </div>

            </form>

        </div>
    </div>
</div>


<div class="modal" id="register-modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Đăng ký tài khoản</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="register-form">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="register-fullname" class="form-label">Họ và tên *</label>
                                    <input type="text" class="form-control" id="register-fullname"
                                        placeholder="Họ và tên" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="register-numberphone" class="form-label">Số điện thoại *</label>
                                    <input type="text" class="form-control" id="register-numberphone"
                                        placeholder="Số điện thoại" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="register-email" class="form-label">Địa chỉ email</label>
                                    <input type="email" class="form-control" id="register-email"
                                        placeholder="Địa chỉ email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="register-username" class="form-label">Tên tài khoản *</label>
                                    <input type="text" class="form-control" id="register-username"
                                        placeholder="Tên tài khoản" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="register-password" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="register-password"
                                        placeholder="Mật khẩu" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span>Đã có tài khoản ?</span><a class="login-btn" href="#"> Đăng nhập</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-register">Đăng ký</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                </div>

            </form>

        </div>
    </div>
</div>


<nav class="navbar navbar-expand-xl bg-light sticky-top">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="navbar-brand">DVTMOD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <?php

            
            if (empty($authenticatedUser)) {
                ?>

                <li class="nav-item">
                    <a class="nav-link login-btn" href="#">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link register-btn" href="#">Đăng ký</a>
                </li>


                <?php
            } else {



                ?>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Xin chào : <span class="fs-5 fw-bold">{{ $authenticatedUser->user_full_name }}</span>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if ($authenticatedUser->level == 1)
                                <li><a class="dropdown-item" href="#">Trang dành cho admin</a></li>

                            @endif

                            <li><a class="dropdown-item" href="{{ route("cart") }}">Giỏ hàng của tôi</a></li>
                            <li><a class="dropdown-item logout-btn" href="#">Đăng xuất</a></li>

                        </ul>
                    </li>
                </ul>



                <?php
            }
            ?>

            </ul>


            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item fw-bold text-uppercase">
                    <a class="nav-link" href="#">Hàng mới về</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold text-uppercase" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Áo nam
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Áo sơ mi</a></li>
                        <li><a class="dropdown-item" href="#">Áo thun</a></li>
                        <li><a class="dropdown-item" href="#">Áo thun</a></li>
                        <li><a class="dropdown-item" href="#">Áo khoác</a></li>
                        <li><a class="dropdown-item" href="#">Áo hoodie</a></li>
                        <li><a class="dropdown-item" href="#">Áo len</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold text-uppercase" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Quần nam
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Quần jean</a></li>
                        <li><a class="dropdown-item" href="#">Quần tây</a></li>
                        <li><a class="dropdown-item" href="#">Quần kaki</a></li>

                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold text-uppercase" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Phụ kiện
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Thắt lưng</a></li>
                        <li><a class="dropdown-item" href="#">Ví da</a></li>
                        <li><a class="dropdown-item" href="#">Cà vạt</a></li>

                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold text-uppercase" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Giày dép
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Giày</a></li>
                        <li><a class="dropdown-item" href="#">Dép nam</a></li>

                    </ul>
                </li>



            </ul>

            <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm danh mục, sản phẩm"
                    aria-label="Search" name="kw">
                <button class="btn btn-outline-success me-2" type="submit">Search</button>
                @if (!empty($authenticatedUser))
                    <a href="{{ route('cart') }}" class="btn btn-danger"><i
                            class="fa-solid fa-cart-shopping"></i></a>
                @endif


            </form>

        </div>
    </div>
</nav>


<script>
    $(document).ready(function() {

        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('#backtotop').fadeIn();
            } else {
                $('#backtotop').fadeOut();
            }
        });

        $('#backtotop').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        $(".logout-btn").click(function(e) {
            e.preventDefault();
            eraseCookie("user_token");
            window.location.href = "{{ request()->fullUrlWithQuery(['new_guest' => 0]) }}";
        });


        $(".login-btn").click(function(e) {
            e.preventDefault();
            $("#register-modal").modal("hide");
            $("#login-modal").modal("show");
        });

        $(".register-btn").click(function(e) {
            e.preventDefault();
            $("#login-modal").modal("hide");
            $("#register-modal").modal("show");
        });


        $("#register-form").submit(function(e) {
            e.preventDefault();

            const fullname_field = $("#register-fullname");
            const numberphone_field = $("#register-numberphone");
            const email_field = $("#register-email");
            const username_field = $("#register-username");
            const password_field = $("#register-password");

            if (!fullname_field.val()) {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Không được bỏ trống họ và tên",

                });
                return false;
            }

            if (!numberphone_field.val()) {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Không được bỏ trống số điện thoại",

                });
                return false;
            }

            if (!username_field.val()) {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Không được bỏ trống tên tài khoản"
                });
                return false;
            }

            if (username_field.val().length < 6) {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Tên tài khoản phải từ 6 kí tự trở lên"
                });
                return false;
            }


            if (!password_field.val()) {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Không được bỏ trống tên mật khẩu"
                });
                return false;
            }

            if (password_field.val().length < 6) {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Mật khẩu phải từ 6 kí tự trở lên"
                });
                return false;
            }

            $.ajax({
                url: "{{ route('apiregister') }}",
                type: 'POST',
                data: {
                    fullname: fullname_field.val(),
                    numberphone: numberphone_field.val(),
                    email: email_field.val(),
                    username: username_field.val(),
                    password: password_field.val()
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

                        setCookie("user_token", res_json.token, 99);
                        window.location.reload();
                    } else {
                        console.log(response);

                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Đã xảy ra lỗi khi đăng ký tài khoản",

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



        });

        $("#login-form").submit(function(e) {
            e.preventDefault();
            const username_field = $("#login-username");
            const password_field = $("#login-password");


            if (username_field.val() == "") {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Không được bỏ trống tên tài khoản",

                });
                return false;
            }

            if (username_field.val().length < 6) {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Tên tài khoản phải lớn hơn 6 kí tự",

                });
                return false;
            }




            if (password_field.val() == "") {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Không được bỏ trống Mật khẩu",

                });
                return false;
            }


            if (password_field.val().length < 6) {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Mật khẩu phải lớn hơn 6 kí tự",

                });
                return false;
            }

            $.ajax({
                url: "{{ route('apilogin') }}",
                type: 'POST',
                data: {
                    username: username_field.val(),
                    password: password_field.val()
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

                        setCookie("user_token", res_json.token, 99);
                        window.location.reload();
                    } else {
                        console.log(response);

                        Swal.fire({
                            icon: "error",
                            title: "Lỗi...",
                            text: "Đã xảy ra lỗi khi đăng nhập",

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


        });
    });
</script>
