<?php
require '../DAO/Connect/Connect.php';

$fullname = $_POST["fullnameM"];
$account = $_POST["accountM"];
$password = $_POST["passwordM"];
$phone = $_POST["phoneM"];

$check_result = ktra_TK_User($account);

// Nếu tài khoản đăng ký chưa tồn tại trong csdl, trả về giá trị là 1,
// và thêm thông tin đăng ký vào csdl
if ($account != $check_result['TenTaiKhoan']) {
    add_TaiKhoan($fullname, $account, $password, $phone);
    echo 1;
    exit();
}
else

// Nếu thông tin đăng nhập sai, trả về giá trị là 0
echo 0;
exit();