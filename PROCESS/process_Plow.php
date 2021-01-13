<?php
require '../DAO/Connect/Connect.php';

$tenkh = $_POST["customerNameM"];
$tentk = $_POST["customerAccountM"];
$matkhau = $_POST["customerPassM"];
$rankbd = $_POST["stRankM"];
$rankkt = $_POST["edRankM"];
$gia = $_POST["priceM"];

$checkresult = ktra_TK_Order($tentk);

// Nếu tài khoản đăng ký chưa tồn tại trong csdl, trả về giá trị là 1,
// và thêm thông tin đăng ký vào csdl
if ($tentk != $checkresult['TenTK']) {
    add_Order($tenkh, $tentk, $matkhau, $rankbd, $rankkt, $gia);
    echo 1;
    exit();
}
else

// Nếu thông tin đăng nhập sai, trả về giá trị là 0
    echo 0;
exit();