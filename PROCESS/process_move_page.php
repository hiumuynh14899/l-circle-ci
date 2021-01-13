<?php
require '../DAO/Connect/Connect.php';
$pageid = $_POST['pageid'];
$output = '';
$result = get_all_product();

if (count($result) > 0) {
    if (count($result) > 0 && $pageid == 'page1' || $pageid == 'come-back-page1') {
        for ($i = 0; $i < 12; $i++) {
            $gia = $result[$i]['Gia'];
            $output .= '<div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 w-body-panel-product-1">
                <div class="col-xs-12 col-sm-12 col-md-12 w-body-panel-product">
                <form method="post" action="index.php?action=add&id=<?php echo $result[$i][\'ID_SP\'] ?>">
                    <img class="pic1" src="https://pe-images.s3.amazonaws.com/basics/cc/gradients/essentials/gradient-wide-transition.jpg" alt="">
                    <ul class="drop-hover-detail">
                        <li>Rank: ' . $result[$i]['Rank'] . '</li>
                        <li>Khung: ' . $result[$i]['Khung'] . '</li>
                        <li>Tướng: ' . $result[$i]['SLTuong'] . '</li>
                        <li>Trang Phục: ' . $result[$i]['SLTrangPhuc'] . '</li>
                        <li>Bảng Ngọc: ' . $result[$i]['BangNgoc'] . '</li>
                    </ul>
                    <div class="panel">
                        <div class="panel-heading">
                            <span>#' . $result[$i]['ID_SP'] . ' - ' . $result[$i]['Rank'] . '</span>
                        </div>
                        <div class="panel-body">
                            <img src="' . $result[$i]['AnhSP'] . '" alt="" width="265" height="150">
                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <th>Tướng: ' . $result[$i]['SLTuong'] . '</th>
                                    <th>Ngọc: ' . $result[$i]['BangNgoc'] . '</th>
                                </tr>
                                <tr>
                                    <th>Skin: ' . $result[$i]['SLTrangPhuc'] . '</th>
                                    <th>Giảm giá: ' . $result[$i]['GiamGia'] . '%</th>
                                </tr>
                            </table>
                            <span class="span-price">' . number_format($gia) . '<sup>đ</sup></span>
                        </div>
                        <div class="panel-footer">
                            <button onclick="window.location=\'Detail.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-detail">CHI TIẾT</button>
                            <button onclick="window.location=\'Shopping_Cart.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-buy btn-buy-now">THÊM VÀO GIỎ</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>';
        }
        echo $output;
    }
    else if ($pageid == 'page2') {
        for ($i = 12; $i < 24; $i++) {
            $gia = $result[$i]['Gia'];
            $output .= '<div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 w-body-panel-product-1">
                <div class="col-xs-12 col-sm-12 col-md-12 w-body-panel-product">
                <form method="post" action="index.php?action=add&id=<?php echo $result[$i][\'ID_SP\'] ?>">
                    <img class="pic1" src="https://pe-images.s3.amazonaws.com/basics/cc/gradients/essentials/gradient-wide-transition.jpg" alt="">
                    <ul class="drop-hover-detail">
                        <li>Rank: ' . $result[$i]['Rank'] . '</li>
                        <li>Khung: ' . $result[$i]['Khung'] . '</li>
                        <li>Tướng: ' . $result[$i]['SLTuong'] . '</li>
                        <li>Trang Phục: ' . $result[$i]['SLTrangPhuc'] . '</li>
                        <li>Bảng Ngọc: ' . $result[$i]['BangNgoc'] . '</li>
                    </ul>
                    <div class="panel">
                        <div class="panel-heading">
                            <span>#' . $result[$i]['ID_SP'] . ' - ' . $result[$i]['Rank'] . '</span>
                        </div>
                        <div class="panel-body">
                            <img src="' . $result[$i]['AnhSP'] . '" alt="" width="265" height="150">
                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <th>Tướng: ' . $result[$i]['SLTuong'] . '</th>
                                    <th>Ngọc: ' . $result[$i]['BangNgoc'] . '</th>
                                </tr>
                                <tr>
                                    <th>Skin: ' . $result[$i]['SLTrangPhuc'] . '</th>
                                    <th>Giảm giá: ' . $result[$i]['GiamGia'] . '%</th>
                                </tr>
                            </table>
                            <span class="span-price">' . number_format($gia) . '<sup>đ</sup></span>
                        </div>
                        <div class="panel-footer">
                            <button onclick="window.location=\'Detail.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-detail">CHI TIẾT</button>
                            <button onclick="window.location=\'Shopping_Cart.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-buy btn-buy-now">THÊM VÀO GIỎ</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>';
        }
        echo $output;
    }
    else if ($pageid == 'page3') {
        for ($i = 24; $i < 36; $i++) {
            $gia = $result[$i]['Gia'];
            $output .= '<div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 w-body-panel-product-1">
                <div class="col-xs-12 col-sm-12 col-md-12 w-body-panel-product">
                <form method="post" action="index.php?action=add&id=<?php echo $result[$i][\'ID_SP\'] ?>">
                    <img class="pic1" src="https://pe-images.s3.amazonaws.com/basics/cc/gradients/essentials/gradient-wide-transition.jpg" alt="">
                    <ul class="drop-hover-detail">
                        <li>Rank: ' . $result[$i]['Rank'] . '</li>
                        <li>Khung: ' . $result[$i]['Khung'] . '</li>
                        <li>Tướng: ' . $result[$i]['SLTuong'] . '</li>
                        <li>Trang Phục: ' . $result[$i]['SLTrangPhuc'] . '</li>
                        <li>Bảng Ngọc: ' . $result[$i]['BangNgoc'] . '</li>
                    </ul>
                    <div class="panel">
                        <div class="panel-heading">
                            <span>#' . $result[$i]['ID_SP'] . ' - ' . $result[$i]['Rank'] . '</span>
                        </div>
                        <div class="panel-body">
                            <img src="' . $result[$i]['AnhSP'] . '" alt="" width="265" height="150">
                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <th>Tướng: ' . $result[$i]['SLTuong'] . '</th>
                                    <th>Ngọc: ' . $result[$i]['BangNgoc'] . '</th>
                                </tr>
                                <tr>
                                    <th>Skin: ' . $result[$i]['SLTrangPhuc'] . '</th>
                                    <th>Giảm giá: ' . $result[$i]['GiamGia'] . '%</th>
                                </tr>
                            </table>
                            <span class="span-price">' . number_format($gia) . '<sup>đ</sup></span>
                        </div>
                        <div class="panel-footer">
                            <button onclick="window.location=\'Detail.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-detail">CHI TIẾT</button>
                            <button onclick="window.location=\'Shopping_Cart.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-buy btn-buy-now">THÊM VÀO GIỎ</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>';
        }
        echo $output;
    }
    else if ($pageid == 'page4') {
        for ($i = 36; $i < 48; $i++) {
            $gia = $result[$i]['Gia'];
            $output .= '<div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 w-body-panel-product-1">
                <div class="col-xs-12 col-sm-12 col-md-12 w-body-panel-product">
                <form method="post" action="index.php?action=add&id=<?php echo $result[$i][\'ID_SP\'] ?>">
                    <img class="pic1" src="https://pe-images.s3.amazonaws.com/basics/cc/gradients/essentials/gradient-wide-transition.jpg" alt="">
                    <ul class="drop-hover-detail">
                        <li>Rank: ' . $result[$i]['Rank'] . '</li>
                        <li>Khung: ' . $result[$i]['Khung'] . '</li>
                        <li>Tướng: ' . $result[$i]['SLTuong'] . '</li>
                        <li>Trang Phục: ' . $result[$i]['SLTrangPhuc'] . '</li>
                        <li>Bảng Ngọc: ' . $result[$i]['BangNgoc'] . '</li>
                    </ul>
                    <div class="panel">
                        <div class="panel-heading">
                            <span>#' . $result[$i]['ID_SP'] . ' - ' . $result[$i]['Rank'] . '</span>
                        </div>
                        <div class="panel-body">
                            <img src="' . $result[$i]['AnhSP'] . '" alt="" width="265" height="150">
                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <th>Tướng: ' . $result[$i]['SLTuong'] . '</th>
                                    <th>Ngọc: ' . $result[$i]['BangNgoc'] . '</th>
                                </tr>
                                <tr>
                                    <th>Skin: ' . $result[$i]['SLTrangPhuc'] . '</th>
                                    <th>Giảm giá: ' . $result[$i]['GiamGia'] . '%</th>
                                </tr>
                            </table>
                            <span class="span-price">' . number_format($gia) . '<sup>đ</sup></span>
                        </div>
                        <div class="panel-footer">
                            <button onclick="window.location=\'Detail.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-detail">CHI TIẾT</button>
                            <button onclick="window.location=\'Shopping_Cart.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-buy btn-buy-now">THÊM VÀO GIỎ</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>';
        }
        echo $output;
    }
    else {
        for ($i = 48; $i < 53; $i++) {
            $output .= '<div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 w-body-panel-product-1">
                <div class="col-xs-12 col-sm-12 col-md-12 w-body-panel-product">
                <form method="post" action="index.php?action=add&id=<?php echo $result[$i][\'ID_SP\'] ?>">
                    <img class="pic1" src="https://pe-images.s3.amazonaws.com/basics/cc/gradients/essentials/gradient-wide-transition.jpg" alt="">
                    <ul class="drop-hover-detail">
                        <li>Rank: ' . $result[$i]['Rank'] . '</li>
                        <li>Khung: ' . $result[$i]['Khung'] . '</li>
                        <li>Tướng: ' . $result[$i]['SLTuong'] . '</li>
                        <li>Trang Phục: ' . $result[$i]['SLTrangPhuc'] . '</li>
                        <li>Bảng Ngọc: ' . $result[$i]['BangNgoc'] . '</li>
                    </ul>
                    <div class="panel">
                        <div class="panel-heading">
                            <span>#' . $result[$i]['ID_SP'] . ' - ' . $result[$i]['Rank'] . '</span>
                        </div>
                        <div class="panel-body">
                            <img src="' . $result[$i]['AnhSP'] . '" alt="" width="265" height="150">
                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <th>Tướng: ' . $result[$i]['SLTuong'] . '</th>
                                    <th>Ngọc: ' . $result[$i]['BangNgoc'] . '</th>
                                </tr>
                                <tr>
                                    <th>Skin: ' . $result[$i]['SLTrangPhuc'] . '</th>
                                    <th>Giảm giá: ' . $result[$i]['GiamGia'] . '%</th>
                                </tr>
                            </table>
                            <span class="span-price">' . number_format($result[$i]['Gia']) . '<sup>đ</sup></span>
                        </div>
                        <div class="panel-footer">
                            <button onclick="window.location=\'Detail.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-detail">CHI TIẾT</button>
                            <button onclick="window.location=\'Shopping_Cart.php?id='. $result[$i]['ID_SP'] .'\'" type="button" class="btn btn-hover-buy btn-buy-now">THÊM VÀO GIỎ</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>';
        }
        echo $output;
    }
}
echo '';