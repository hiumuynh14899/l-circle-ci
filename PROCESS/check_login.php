<?php
require '../DAO/Connect/Connect.php';
session_start();

$account = $_POST["accountM"];
$password = $_POST["passwordM"];
$level = 0;

$result = ktraUser($account, $password);

// Nếu thông tin đăng nhập chính xác, trả về giá trị là 1
if ($account == $result['TenTaiKhoan'] && $password == $result['MatKhau'] ) {
    $_SESSION['user'] = $account;
    if ($account == 'admin')
    {
        $level = 5;
        $_SESSION['level'] = $level;
        echo 5;
        exit();
    }
    else{
        $level = 1;
        $_SESSION['level'] = $level;
        echo 1;
        exit();
    }
}

// Nếu thông tin đăng nhập sai, trả về giá trị là 0
echo 0;
exit();