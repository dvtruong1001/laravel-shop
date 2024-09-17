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


<nav class="navbar bg-light sticky-top">
    <div class="container-fluid">
        <a href="#" class="navbar-brand" href="#">DVTMOD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php

            $user_token = $_COOKIE["user_token"] ?? null;
            if (empty($user_token)) {
                ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/pages/home">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="#">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register-btn" href="#">Đăng ký</a>
                    </li>

                </ul>

                <?php
            } else {



                // $user_data = json_decode(base64_decode($user_token), true);

                // require_once $_SERVER["DOCUMENT_ROOT"]."/php/database/config.php";

                // $check = $DATABASE->prepare("select * from user_data where username = ? and password = ?");
                // $check->bind_param("ss", $user_data["username"], $user_data["password"]);
                // $check->execute();

                // $check = $check->get_result();
                // if ($check->num_rows <= 0) {
                //     setcookie("user_token", "", time() + 0);
                //     header("location: /pages/home");
                //     exit;
                // }
                ?>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/pages/home">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="#"><?= $user_data["user_full_name"];?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register-btn" href="#">Đăng xuất</a>
                    </li>

                </ul>



                <?php
            }
            ?>

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

            <form class="d-flex" role="search" action="pages/search" method="POST">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm danh mục, sản phẩm"
                    aria-label="Search">
                <button class="btn btn-outline-success me-2" type="submit">Search</button>
                <a href="/pages/shopping-cart" class="btn btn-danger"><i class="fa-solid fa-cart-shopping"></i></a>

            </form>

        </div>
    </div>
</nav>