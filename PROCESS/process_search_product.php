<?php
require '../DAO/Connect/Connect.php';
$rank = $_POST['rank'];
$khung = $_POST['khung'];
$gia = $_POST['gia'];
$output = '';

//$result = get_data_product($rank, $khung, $gia, $sapxep, $tuong, $trangphuc);
$result = search_Product($rank, $khung, $gia);

if (count($result) > 0) {
    foreach ($result as $row) {
        $gia = $row['Gia'];
        $output .= '<div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 w-body-panel-product-1">
                <div class="col-xs-12 col-sm-12 col-md-12 w-body-panel-product">
                <form method="post" action="index.php?action=add&id=<?php echo $result[$i][\'ID_SP\'] ?>">
                    <img class="pic1" src="https://pe-images.s3.amazonaws.com/basics/cc/gradients/essentials/gradient-wide-transition.jpg" alt="">
                    <ul class="drop-hover-detail">
                        <li>Rank: ' . $row['Rank'] . '</li>
                        <li>Khung: ' . $row['Khung'] . '</li>
                        <li>Tướng: ' . $row['SLTuong'] . '</li>
                        <li>Trang Phục: ' . $row['SLTrangPhuc'] . '</li>
                        <li>Bảng Ngọc: ' . $row['BangNgoc'] . '</li>
                    </ul>
                    <div class="panel">
                        <div class="panel-heading">
                            <span>#' . $row['ID_SP'] . ' - ' . $row['Rank'] . '</span>
                        </div>
                        <div class="panel-body">
                            <img src="' . $row['AnhSP'] . '" alt="" width="265" height="150">
                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <th>Tướng: ' . $row['SLTuong'] . '</th>
                                    <th>Ngọc: ' . $row['BangNgoc'] . '</th>
                                </tr>
                                <tr>
                                    <th>Skin: ' . $row['SLTrangPhuc'] . '</th>
                                    <th>Giảm giá: ' . $row['GiamGia'] . '%</th>
                                </tr>
                            </table>
                            <span class="span-price">' . number_format($gia) . '<sup>đ</sup></span>
                        </div>
                        <div class="panel-footer">
                            <button onclick="window.location=\'Detail.php?id='. $row['ID_SP'] .'\'" type="button" class="btn btn-hover-detail">CHI TIẾT</button>
                            <button onclick="window.location=\'Shopping_Cart.php?id='. $row['ID_SP'] .'\'" type="button" class="btn btn-hover-buy btn-buy-now">THÊM VÀO GIỎ</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>';
    }
    echo $output;
}
echo '';