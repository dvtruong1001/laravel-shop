function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('#backtotop').fadeIn();
        } else {
            $('#backtotop').fadeOut();
        }
    });


    $('#backtotop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 600);
        return false;
    });


    $(".login-btn").click(function (e) {
        e.preventDefault();
        $("#login-modal").modal("show");
    });

    $("#login-form").submit(function (e) {
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
            url: '/api/auth/login.php',
            type: 'POST',
            data: {
                username: username_field.val(),
                password: password_field.val()
            },
            
            success: function (response) {
                console.log(response)
                if (response) {
                    let res_json = JSON.parse(response);
                    if (res_json.status == 0) {
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
            error: function (jqXHR, textStatus, errorThrown) {
                Swal.fire({
                    icon: "error",
                    title: "Lỗi...",
                    text: "Đã xảy ra lỗi khi đăng nhập",

                });
                return false;
            }
        });


    });
});
