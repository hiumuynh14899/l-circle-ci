<?php
global $conn;
function connect()
{
    global $conn;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "qlbhbc5shop";

// Create connection
    if (!$conn) {
        $conn = mysqli_connect($servername, $username, $password, $databasename);
        mysqli_set_charset($conn,'utf8');
    }
}

// Ham ngat ket noi
function disConnect(){
    global $conn;
    if ($conn) {
        mysqli_close($conn);
    }
}

// function lay toan bo data
function get_all_product(){
    global $conn;
    connect();
    $sql = "SELECT * FROM sanpham";
    $result = mysqli_query($conn,$sql);
    $list_product = array();
    while ($row = mysqli_fetch_assoc($result)){
        array_push($list_product,$row);
    }
    return $list_product;
}

// function lay du lieu san pham theo id
function get_Product_ID($id){
    global $conn;
    connect();
    $sql = "SELECT * FROM sanpham  WHERE ID_SP = {$id}";
    $query = mysqli_query($conn, $sql);
    $result = array();
    if (mysqli_num_rows($query) > 0)
    {
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    return $result;
}

// function lay du lieu chi tiet Tuong theo id
function get_detail_product_T($id){
    global $conn;
    connect();
    $sql = "SELECT * FROM chitiettuong WHERE ID_SP = {$id}";
    $result = mysqli_query($conn,$sql);
    $list_product = array();
    while ($row = mysqli_fetch_assoc($result)){
        array_push($list_product,$row);
    }
    return $list_product;
}

// function lay du lieu chi tiet Trang Phuc theo id
function get_detail_product_TP($id){
    global $conn;
    connect();
    $sql = "SELECT * FROM chitiettrangphuc WHERE ID_SP = {$id}";
    $result = mysqli_query($conn,$sql);
    $list_product = array();
    while ($row = mysqli_fetch_assoc($result)){
        array_push($list_product,$row);
    }
    return $list_product;
}

// Ham Kiem Tra Account và Password
function ktraUser($account, $password){
    global $conn;
    connect();
    $sql = "select TenTaiKhoan, MatKhau from taikhoan
            WHERE TenTaiKhoan = '$account' AND MatKhau = '$password'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

// Ham kiem tra Account đã tồn tại trong csdl chưa
function ktra_TK_User($account){
    global $conn;
    connect();
    $sql = "select TenTaiKhoan from taikhoan
            WHERE TenTaiKhoan = '$account'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

// Thêm tài khoản vào csdl sau khi kiểm tra là đúng
function add_TaiKhoan($hoten, $taikhoan, $matkhau, $sdt){
    global $conn;
    connect();
    $sql = "Insert into taikhoan(HoTen,TenTaiKhoan,MatKhau,SDT) 
              VALUES ('$hoten', '$taikhoan', '$matkhau', '$sdt')";
    mysqli_query($conn,$sql);
}

// Ham kiem tra Account Order đã tồn tại trong csdl chưa
function ktra_TK_Order($account){
    global $conn;
    connect();
    $sql = "select TenTK from donhangcaythue
            WHERE TenTK = '$account'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

// Thêm đơn hàng vào csdl
function add_Order($tenkh, $tentk, $matkhau, $rankbd, $rankkt, $gia){
    global $conn;
    connect();
    // Rank Bắt Đầu
    if ($rankbd == '0'){
        $rankbd = 'Bạc V';
    }
    if ($rankbd == '1'){
        $rankbd = 'Bạc IV';
    }
    if ($rankbd == '2'){
        $rankbd = 'Bạc III';
    }
    if ($rankbd == '3'){
        $rankbd = 'Bạc II';
    }
    if ($rankbd == '4'){
        $rankbd = 'Bạc I';
    }
    if ($rankbd == '5'){
        $rankbd = 'Vàng V';
    }
    if ($rankbd == '6'){
        $rankbd = 'Vàng IV';
    }
    if ($rankbd == '7'){
        $rankbd = 'Vàng III';
    }
    if ($rankbd == '8'){
        $rankbd = 'Vàng II';
    }
    if ($rankbd == '9'){
        $rankbd = 'Vàng I';
    }
    if ($rankbd == '10'){
        $rankbd = 'Bạch Kim V';
    }
    if ($rankbd == '11'){
        $rankbd = 'Bạch Kim IV';
    }
    if ($rankbd == '12'){
        $rankbd = 'Bạch Kim III';
    }
    if ($rankbd == '13'){
        $rankbd = 'Bạch Kim II';
    }
    if ($rankbd == '14'){
        $rankbd = 'Bạch Kim I';
    }
    if ($rankbd == '15'){
        $rankbd = 'Kim Cương V';
    }
    if ($rankbd == '16'){
        $rankbd = 'Kim Cương IV';
    }
    if ($rankbd == '17'){
        $rankbd = 'Kim Cương III';
    }
    if ($rankbd == '18'){
        $rankbd = 'Kim Cương II';
    }
    if ($rankbd == '19'){
        $rankbd = 'Kim Cương I';
    }
    // Rank Kết Thúc

    if ($rankkt == '1'){
        $rankkt = 'Bạc IV';
    }
    if ($rankkt == '2'){
        $rankkt = 'Bạc III';
    }
    if ($rankkt == '3'){
        $rankkt = 'Bạc II';
    }
    if ($rankkt == '4'){
        $rankkt = 'Bạc I';
    }
    if ($rankkt == '5'){
        $rankkt = 'Vàng V';
    }
    if ($rankkt == '6'){
        $rankkt = 'Vàng IV';
    }
    if ($rankkt == '7'){
        $rankkt = 'Vàng III';
    }
    if ($rankkt == '8'){
        $rankkt = 'Vàng II';
    }
    if ($rankkt == '9'){
        $rankkt = 'Vàng I';
    }
    if ($rankkt == '10'){
        $rankkt = 'Bạch Kim V';
    }
    if ($rankkt == '11'){
        $rankkt = 'Bạch Kim IV';
    }
    if ($rankkt == '12'){
        $rankkt = 'Bạch Kim III';
    }
    if ($rankkt == '13'){
        $rankkt = 'Bạch Kim II';
    }
    if ($rankkt == '14'){
        $rankkt = 'Bạch Kim I';
    }
    if ($rankkt == '15'){
        $rankkt = 'Kim Cương V';
    }
    if ($rankkt == '16'){
        $rankkt = 'Kim Cương IV';
    }
    if ($rankkt == '17'){
        $rankkt = 'Kim Cương III';
    }
    if ($rankkt == '18'){
        $rankkt = 'Kim Cương II';
    }
    if ($rankkt == '19'){
        $rankkt = 'Kim Cương I';
    }
    if ($rankkt == '20'){
        $rankkt = 'Cao Thủ';
    }

    $sql = "Insert into donhangcaythue(TenKH,TenTK,MatKhau,RankBD,RankKT,Gia) 
              VALUES ('$tenkh', '$tentk', '$matkhau', '$rankbd', '$rankkt', {$gia})";
    mysqli_query($conn,$sql);
}

// Kiem tra ID còn tồn tại trong csdl không
function ktra_ID($id){
    global $conn;
    connect();
    $sql = "select ID_SP from sanpham
            WHERE ID_SP = {$id}";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

// Truy vấn hiển thị số tài khoản chưa được bán
function get_Count_Product_UnSold(){
    global $conn;
    connect();
    $sql = "SELECT * FROM sanpham";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_num_rows($query);
    return $result;
}

// Truy vấn hiển thị số tài khoản đã bán
function get_Count_Product_Sold(){
    global $conn;
    connect();
    $sql = "SELECT * FROM sanphamban";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_num_rows($query);
    return $result;
}

// Truy vấn hiển thị số thành viên của trang Web
function get_Count_Account(){
    global $conn;
    connect();
    $sql = "SELECT ID_TK FROM taikhoan";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_num_rows($query);
    return $result;
}

// Lấy số tiền hiện có của Tài Khoản đăng đăng nhập
function get_Money_Account($account){
    global $conn;
    connect();
    $sql = "select SoTien from taikhoan
            WHERE TenTaiKhoan = '$account'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

// Truy vấn dữ liệu theo lựa chọn tìm kiếm khách hàng
function search_Product($rank, $khung, $gia){
    global $conn;
    connect();

    $filter = array(
        'rank' => $rank,
        'khung' => $khung,
        'gia' => $gia
    );

    $where = array();
    $gia50k = 50000;
    $gia100k = 100000;
    $gia200k = 200000;
    $gia500k = 500000;
    $gia1tr = 1000000;
    if ($filter['rank']){
        $where[] = " Rank = '{$filter['rank']}'";
    }
    if ($filter['khung']){
        $where[] = " Khung = '{$filter['khung']}'";
    }
    if ($filter['gia'] == '1'){
        $where[] = " Gia <= {$gia50k}";
    }
    if ($filter['gia'] == '2'){
        $where[] = " Gia >= {$gia50k} AND Gia <= {$gia100k}";
    }
    if ($filter['gia'] == '3'){
        $where[] = " Gia  >= {$gia100k} AND Gia <= {$gia200k} ";
    }
    if ($filter['gia'] == '4'){
        $where[] = " Gia >= {$gia200k} AND Gia <= {$gia500k} ";
    }
    if ($filter['gia'] == '5'){
        $where[] = " Gia >= {$gia500k} AND Gia <= {$gia1tr} ";
    }
    if ($filter['gia'] == '6'){
        $where[] = " Gia >= {$gia1tr} ";
    }


    $sql = 'SELECT * FROM sanpham ';
    if ($where){
        $sql .= ' WHERE ' .implode(' AND ' , $where);
    }

    $result = mysqli_query($conn,$sql);
    $list_product = array();
    while ($row = mysqli_fetch_assoc($result)){
        array_push($list_product,$row);
    }
    return $list_product;
}