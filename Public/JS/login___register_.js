$(document).ready(function () {

    $('.close').click(function () {
        // Làm mới các thông báo nhập sai
        var errorAccount = $("#errorAccount");
        var errorPassword = $("#errorPassword");
        var resultLogin = $("#resultLogin");

        resultLogin.html("");

        errorAccount.html("");
        errorPassword.html("");

        var errorfullname = $("#errorfullname");
        var errorAccount1 = $("#errorAccount1");
        var errorPassword1 = $("#errorPassword1");
        var errorPhone = $("#errorPhone");

        errorfullname.html("");
        errorAccount1.html("");
        errorPassword1.html("");
        errorPhone.html("");

        // Làm mới các ô input
        $('#inputAccount1, #inputPassword1, #inputAccount2, #inputPassword2, #inputName, #inputPhone').val(function () {
            return '';
        })
    })

    $('#_Login').click(function () {
        var account = $("#inputAccount1").val();
        var password = $("#inputPassword1").val();
        var errorAccount = $("#errorAccount");
        var errorPassword = $("#errorPassword");
        var resultLogin = $("#resultLogin");

        errorAccount.html("");
        errorPassword.html("");

        const isPercentage = string => {
            return /^\w\S+?$/.test(string);
        };

        // Kiểm tra nếu account rỗng thì báo lỗi
        if (account == "") {
            errorAccount.html('<span style="color: red">Tên đăng nhập không đúng</span>');
            return false;
        }
        // Kiểm tra nếu password rỗng thì báo lỗi
        if (password == "") {
            errorPassword.html('<span style="color: red">Mật khẩu không đúng</span>');
            return false;
        }

        if (!isPercentage(account)){
            errorAccount.html('<span style="color: red">Tài khoản không được có khoảng trắng</span>');
        }
        else {
            $.ajax({
                url: "PROCESS/check_login.php",
                method: "POST",
                data: {accountM: account, passwordM: password},
                success: function (data) {
                    if (data == "1") {
                        window.location = "../../index.php";
                    }
                    else if (data == "5") {
                        window.location = ".php";
                    }
                    else {
                        resultLogin.html('<br><span style="color: red;">Đăng Nhập Thất Bại. Sai tài khoản hoặc mật khẩu?</span>');
                    }
                },
                error: function () {
                    alert('Gui ajax That Bai');

                }
            });
        }
    })

    $('#_register').click(function () {
        var fullname = $("#inputName").val();
        var account = $("#inputAccount2").val();
        var password = $("#inputPassword2").val();
        var phone = $("#inputPhone").val();
        var errorfullname = $("#errorfullname");
        var errorAccount1 = $("#errorAccount1");
        var errorPassword1 = $("#errorPassword1");
        var errorPhone = $("#errorPhone");

        errorfullname.html("");
        errorAccount1.html("");
        errorPassword1.html("");
        errorPhone.html("");

        const isPercentage = string => {
            return /^\w\S+?$/.test(string);
        };

        if (fullname == "") {
            errorfullname.html('<span style="color: red">Họ và tên không hợp lệ</span>');
            return false;
        }
        // Kiểm tra nếu account rỗng thì báo lỗi
        if (account == "") {
            errorAccount1.html('<span style="color: red">Tên đăng nhập không hợp lệ</span>');
            return false;
        }
        // Kiểm tra nếu password rỗng thì báo lỗi
        if (password == "") {
            errorPassword1.html('<span style="color: red">Mật khẩu không hợp lệ</span>');
            return false;
        }
        if (phone == "") {
            errorPhone.html('<span style="color: red">Số điện thoại không hợp lệ</span>');
            return false;
        }

        if (!isPercentage(account)){
            errorAccount1.html('<span style="color: red">Tài khoản không được có khoảng trắng</span>');
        }
        else {
            $.ajax({
                url: "PROCESS/check_register.php",
                method: "POST",
                data: {fullnameM: fullname, accountM: account, passwordM: password, phoneM: phone},
                success: function (data) {
                    if (data == "1") {
                        $('#myModaltest').modal('show');
                        $("#myModal-register .close").click()
                    } else {
                        errorAccount1.html('<span style="color: red;">Tài Khoản Đã Tồn Tại</span>');
                    }
                },
                error: function () {
                    alert('Gui ajax That Bai');

                }
            });
        }
    })
});