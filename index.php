<?php
require "DAO/Connect/Connect.php";
$result = get_all_product();
session_start();
$CountProductUnsold = get_Count_Product_UnSold();
$CountProductSold = get_Count_Product_Sold();
$CountAccount = get_Count_Account();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Public/BOOTSTRAP/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Public/CSS/CSS_Index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>BC5SHOP.VN</title>
</head>
<body>
                                                    <!--Header-->
    <div class="w-head">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php"><img src="https://bc5shop.vn/logos.png" width="250" height="100" alt=""></a>
                    </div>
                    <div class="navbar-collapse collapse" id="menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button type="button" class="btn-group w-head-style-home"><a href="index.php"><i>Trang chủ</i></a></button>
                            </li>
                            <li class="w-head-menu">
                                <div class="btn-group">
                                    <button type="button" class="dropdown-toggle w-head-style" data-toggle="dropdown">
                                        Cày thuê <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="Plow.php">Cày thuê LMHT</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <div>
                                    <?php
                                        if (isset($_SESSION['user'])){
                                            $GetMoneyAccount = get_Money_Account($_SESSION['user']);
                                            ?>
                                            <?php if ($_SESSION['level'] == 5) {
                                                header("location: .php");
                                             }
                                            else{ ?>
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                                        Xin chao: <?php echo $_SESSION['user'] ?> | <span>Bạn có: <span style="color: darkred; font-weight: bold"><?php echo number_format($GetMoneyAccount['SoTien']) ?> VND</span></span>
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                        <li role="presentation" ><a onclick="window.location='Shopping_Cart.php?checkSC=<?php echo 'SC' ?>'" role="menuitem" tabindex="-1" href="#">Giỏ hàng</a></li>
                                                        <li role="presentation" class="divider"></li>
                                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="PROCESS/delete_session.php">Đăng xuất</a></li>
                                                    </ul>
                                                </div>
                                            <?php } ?>
                                     <?php }else{ ?>
                                            <button type="button" class="btn-group  btn btn-danger" data-toggle="modal" data-target="#myModal-login">Đăng nhập</button>
                                            <button type="button" class="btn-group  btn btn-success" data-toggle="modal" data-target="#myModal-register">Đăng ký</button>
                                      <?php } ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

                                                     <!--Body-->
    <div class="container">
        <div class="row w-body">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">TOP NẠP THẺ THÁNG</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            <i class="fas fa-star fa-2x color-star"></i>
                            <span class="number-rank"> 1 </span>
                            <span class="sp-name"> Minh Hiếu</span>
                            <button class="btn btn-danger">500,000<sup>đ</sup></button>
                        </p>
                        <p>
                            <i class="fas fa-circle fa-2x"></i>
                            <span class="number-rank"> 2 </span>
                            <span class="sp-name">Tấn Phát</span>
                            <button class="btn btn-danger">450,000<sup>đ</sup></button>
                        </p>
                        <p>
                            <i class="fas fa-circle fa-2x"></i>
                            <span class="number-rank"> 3 </span>
                            <span class="sp-name">Trịnh Khải</span>
                            <button class="btn btn-danger">300,000<sup>đ</sup></button>
                        </p>
                        <p>
                            <i class="fas fa-circle fa-2x"></i>
                            <span class="number-rank"> 4 </span>
                            <span class="sp-name">Trọng Đạt</span>
                            <button class="btn btn-danger">170,000<sup>đ</sup></button>
                        </p>
                        <p>
                            <i class="fas fa-circle fa-2x"></i>
                            <span class="number-rank"> 5 </span>
                            <span class="sp-name">Hữu Chiến</span>
                            <button class="btn btn-danger">100,000<sup>đ</sup></button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators move-slide">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <iframe width="100%" height="340" src="https://www.youtube.com/embed/sWGbhVTQg3o"
                                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                        picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="item">
                            <iframe width="100%" height="340" src="https://www.youtube.com/embed/T8UY-Oq2_yE"
                                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                                     picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 w-body-search-select">

                <div class="col-xs-12 col-sm-6 col-md-3 div-search-dropdown">
                    <select class="form-control" id="select-rank">
                        <option disabled selected  value="Tìm Theo Rank"><a role="menuitem" tabindex="-1" href="#">Tìm Theo Rank</a></option>
                        <option  value="K.Rank"><a role="menuitem" tabindex="-1" href="#">Chưa Rank</a></option>
                        <option  value="Sắt"><a role="menuitem" tabindex="-1" href="#">Rank Sắt</a></option>
                        <option  value="Đồng"><a role="menuitem" tabindex="-1" href="#">Rank Đồng</a></option>
                        <option  value="Bạc"><a role="menuitem" tabindex="-1" href="#">Rank Bạc</a></option>
                        <option  value="Vàng"><a role="menuitem" tabindex="-1" href="#">Rank Vàng</a></option>
                        <option  value="Bạch Kim"><a role="menuitem" tabindex="-1" href="#">Rank Bạch Kim</a></option>
                        <option  value="Kim Cương"><a role="menuitem" tabindex="-1" href="#">Rank Kim Cương</a></option>
                        <option  value="Cao Thủ"><a role="menuitem" tabindex="-1" href="#">Rank Cao Thủ</a></option>
                        <option  value="Đại Cao Thủ"><a role="menuitem" tabindex="-1" href="#">Rank Đại Cao Thủ</a></option>
                        <option  value="Thách Đấu"><a role="menuitem" tabindex="-1" href="#">Rank Thách Đấu</a></option>
                    </select>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 div-search-dropdown">
                    <select class="form-control" id="select-khung">
                        <option disabled selected><a role="menuitem" tabindex="-1" href="#">Tìm Theo Khung</a></option>
                        <option value="Không Khung"><a role="menuitem" tabindex="-1" href="#">Không Khung</a></option>
                        <option value="Khung Sắt"><a role="menuitem" tabindex="-1" href="#">Khung Sắt</a></option>
                        <option value="Khung Đồng"><a role="menuitem" tabindex="-1" href="#">Khung Đồng</a></option>
                        <option value="Khung Bạc"><a role="menuitem" tabindex="-1" href="#">Khung Bạc</a></option>
                        <option value="Khung Vàng"><a role="menuitem" tabindex="-1" href="#">Khung Vàng</a></option>
                        <option value="Khung Bạch Kim"><a role="menuitem" tabindex="-1" href="#">Khung Bạch Kim</a></option>
                        <option value="Khung Kim Cương"><a role="menuitem" tabindex="-1" href="#">Khung Kim Cương</a></option>
                        <option value="Khung Cao Thủ"><a role="menuitem" tabindex="-1" href="#">Khung Cao thủ</a></option>
                        <option value="Khung Đại Cao Thủ"><a role="menuitem" tabindex="-1" href="#">Khung Đại Cao Thủ</a></option>
                        <option value="Khung Thách Đấu"><a role="menuitem" tabindex="-1" href="#">Khung Thách Đấu</a></option>
                    </select>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 div-search-dropdown">
                    <select class="form-control" id="select-gia">
                        <option disabled selected><a role="menuitem" tabindex="-1" href="#">Tìm Theo Giá</a></option>
                        <option value="1"><a role="menuitem" tabindex="-1" href="#">50k trở xuống</a></option>
                        <option value="2"><a role="menuitem" tabindex="-1" href="#">Từ 50k đến 100k</a></option>
                        <option value="3"><a role="menuitem" tabindex="-1" href="#">Từ 100k đến 200k</a></option>
                        <option value="4"><a role="menuitem" tabindex="-1" href="#">Từ 200k đến 500k</a></option>
                        <option value="5"><a role="menuitem" tabindex="-1" href="#">Từ 500k đến 1 Triệu</a></option>
                        <option value="6"><a role="menuitem" tabindex="-1" href="#">1 Triệu trở lên</a></option>
                    </select>
                </div>

            </div>
        </div>
        <div class="row w-body-product">
            <?php for ($i = 0; $i < 12; $i++) {
                $gia = $result[$i]["Gia"];
                ?>
            <div class="col-xs-10 col-sm-4 col-md-3 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 w-body-panel-product-1">
                <div class="col-xs-12 col-sm-12 col-md-12 w-body-panel-product">
                    <form method="post" action="index.php?action=add&id=<?php echo $result[$i]['ID_SP'] ?>">
                        <a onclick="onclick="window.location='Detail.php?id=<?php echo $result[$i]['ID_SP'] ?>'"" href="#"><img class="pic1" src="https://pe-images.s3.amazonaws.com/basics/cc/gradients/essentials/gradient-wide-transition.jpg" alt=""></a>
                    <ul class="drop-hover-detail">
                        <li>Rank: <?php echo $result[$i]['Rank'] ?></li>
                        <li>Khung: <?php echo $result[$i]['Khung'] ?></li>
                        <li>Tướng: <?php echo $result[$i]['SLTuong'] ?></li>
                        <li>Trang Phục: <?php echo $result[$i]['SLTrangPhuc'] ?></li>
                        <li>Bảng Ngọc: <?php echo $result[$i]['BangNgoc'] ?></li>
                    </ul>
                    <div class="panel">
                        <div class="panel-heading">
                            <span>#<?php echo $result[$i]['ID_SP'] ?> - <?php echo $result[$i]['Rank'] ?></span>
                        </div>
                        <div class="panel-body">
                            <img src="<?php echo $result[$i]['AnhSP'] ?>" alt="" width="265" height="150">
                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <th>Tướng: <?php echo $result[$i]['SLTuong'] ?></th>
                                    <th>Ngọc: <?php echo $result[$i]['BangNgoc'] ?></th>
                                </tr>
                                <tr>
                                    <th>Skin: <?php echo $result[$i]['SLTrangPhuc'] ?></th>
                                    <th>Giảm giá: <?php echo $result[$i]['GiamGia'] ?>%</th>
                                </tr>
                            </table>
                            <span class="span-price"><?php echo number_format($gia) ?><sup>đ</sup></span>
                        </div>
                        <div class="panel-footer">
                            <button onclick="window.location='Detail.php?id=<?php echo $result[$i]['ID_SP'] ?>'" type="button" class="btn btn-hover-detail">CHI TIẾT</button>
                            <?php if (isset($_SESSION['user'])){ ?>
                                <button onclick="window.location='Shopping_Cart.php?id=<?php echo $result[$i]['ID_SP'] ?>'" type="button" class="btn btn-hover-buy btn-buy-now">THÊM VÀO GIỎ</button>
                            <?php }
                            else {
                                ?>
                                <button data-toggle="modal" data-target="#myModalNotLoggedIn" type="button" class="btn btn-hover-buy btn-buy-now">THÊM VÀO GIỎ</button>
                            <?php } ?>
                         </div>
                    </div>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 w-body-move-page">
            <ul class="pagination">
                <li id="come-back-page1"><a href="#">&laquo;</a></li>
                <li id="page1" class="active"><a href="#">1</a></li>
                <li id="page2"><a href="#">2</a></li>
                <li id="page3"><a href="#">3</a></li>
                <li id="page4"><a href="#">4</a></li>
                <li id="page5"><a href="#">5</a></li>
                <li id="go-to-page5"><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
                                                    <!--Footer-->
    <div class="f-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-7">
                    <div class="f-contact">
                        <i class="fas fa-headset fa-3x"></i>
                        <p class="f-vertical">
                            <span>Hotline: 0967130845</span> <br>
                            <a href="https://www.facebook.com/love.hovarspar">Minh Hiếu</a>
                        </p>
                        <p class="f-time-work">Thời gian làm việc: <b>7h-22h</b> các ngày trong tuần</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-2">
                    <p class="f-info">
                        Acc đã bán ra: <?php echo $CountProductSold ?> <br>
                        Acc đang bán: <?php echo $CountProductUnsold ?> <br>
                        Tổng số thành viên: <?php echo $CountAccount ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- Modal - Login -->
    <div id="myModal-login"  class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
         <div class="modal-dialog" role="document">
              <div class="modal-content">
                   <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h3 class="modal-title" align="center">ĐĂNG NHẬP</h3>
                   </div>
                   <div class="modal-body">
                   <form action="#" method="post" class="form-horizontal" role="form">
                   <div class="form-group">
                       <label for="inputAccount1" class="col-sm-3 control-label">Tài khoản:</label>
                       <div class="col-sm-8">
                           <input type="text" class="form-control" name="user" id="inputAccount1" placeholder="Nhập tài khoản...">
                           <div id="errorAccount"></div>
                       </div>
                   </div>
                   <div class="form-group">
                       <label for="inputPassword1" class="col-sm-3 control-label">Mật khẩu:</label>
                       <div class="col-sm-8">
                           <input type="password" class="form-control" name="pass" id="inputPassword1" placeholder="Nhập mật khẩu...">
                           <div id="errorPassword"></div>
                       </div>
                   </div>
                       <div class="form-group">
                           <div align="center">
                               <button id="_Login" name="_Login" type="button" class="btn btn-primary">Đăng Nhập</button>
                               <span id="resultLogin"></span>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <p>Bạn chưa có tài khoản? <a href="#" data-toggle="modal" data-target="#myModal-register" data-dismiss="modal">Đăng ký tại đây</a></p>
                       </div>
                   </form>
                   </div>
              </div>
         </div>
    </div>

                                                    <!-- Modal - Register -->

    <div id="myModal-register"  class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h3 class="modal-title" align="center">ĐĂNG KÝ</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-3 control-label">Họ và tên:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputName" placeholder="Nhập họ và tên...">
                                <div id="errorfullname"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAccount2" class="col-sm-3 control-label">Tài khoản:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputAccount2" placeholder="Nhập tài khoản...">
                                <div id="errorAccount1"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword2" class="col-sm-3 control-label">Mật khẩu:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Nhập mật khẩu...">
                                <div id="errorPassword1"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone" class="col-sm-3 control-label">Điện thoại:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="inputPhone" placeholder="Nhập SĐT...">
                                <div id="errorPhone"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div align="center">
                                <button id="_register" type="button" class="btn btn-success">Đăng Ký</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Modal - Register Success -->
    <div class="modal fade" id="myModaltest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"> <i class="far fa-check-circle fa-2x" style="color: green"></i> Đăng ký thành công</h4>
                </div>
                <div class="modal-body">
                    <p>Bạn muốn đi đến đăng nhập?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left">Đóng</button>
                    <button data-toggle="modal" data-target="#myModal-login" type="button" class="btn btn-primary" data-dismiss="modal" style="float: right">Đăng nhập</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal - Not logged in -->
    <div class="modal fade" id="myModalNotLoggedIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-sm" style="margin-top: 200px">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel" align="center"> <i class="fas fa-exclamation-circle fa-2x" style="color: darkred;"></i> Bạn chưa đăng nhập</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left">Đóng</button>
                    <button data-toggle="modal" data-target="#myModal-login" type="button" class="btn btn-primary" data-dismiss="modal" style="float: right">Đăng nhập</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="Public/BOOTSTRAP/bootstrap-3.3.7-dist/js/jquery-3.2.1.js"></script>
<script src="Public/BOOTSTRAP/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="Public/JS/page___.js"></script>
<script src="Public/JS/search___.js"></script>
<script src="Public/JS/login___register_.js"></script>