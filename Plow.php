<?php
require "DAO/Connect/Connect.php";
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
    <link rel="stylesheet" href="Public/CSS/CSS_Plow.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Cày thuê LMHT</title>
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
                                    <li><a href="#">Cày thuê LMHT</a></li>
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
                <ol class="carousel-indicators" style="z-index: 9">
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

    <div class="row bd-plow">
        <h2>Dịch vụ cày rank LMHT</h2>
        <p>
            Lưu ý: Trong quá trình các Player cày không được vi phạm các hành vi như sau: <br>
            - Đổi pass trước và sau khi giao cho shop. <br>
            - Không thay đổi password trong khi cày <br>
            - Không đăng nhập vào trong thời gian cày <br>
            - Không chơi bất cứ game nào trong thời gian cày <br>
            Nếu vi phạm 1 trong 3 điều trên khách hàng sẽ chịu trách nhiệm hoàn toàn và không hoàn trả 100% phí đã đặt cọc.
        </p>
        <img class="bd-plow-price-info-IMG" src="IMAGE/PlowsIMG/Untitled.png" alt="">

        <form action="#" method="post">
            <div class="form-group col-xs-6 xol-sm-6 col-md-6">
                <label for="">Từ rank:</label>
                <select id="start-Rank" class="form-control">
                    <option value="0">Bạc V</option>
                    <option value="1">Bạc IV</option>
                    <option value="2">Bạc III</option>
                    <option value="3">Bạc II</option>
                    <option value="4">Bạc I</option>
                    <option value="5">Vàng V</option>
                    <option value="6">Vàng IV</option>
                    <option value="7">Vàng III</option>
                    <option value="8">Vàng II</option>
                    <option value="9">Vàng I</option>
                    <option value="10">Bạch Kim V</option>
                    <option value="11">Bạch Kim IV</option>
                    <option value="12">Bạch Kim III</option>
                    <option value="13">Bạch Kim II</option>
                    <option value="14">Bạch Kim I</option>
                    <option value="15">Kim Cương V</option>
                    <option value="16">Kim Cương IV</option>
                    <option value="17">Kim Cương III</option>
                    <option value="18">Kim Cương II</option>
                    <option value="19">Kim Cương I</option>
                </select>
            </div>

            <div class="form-group col-xs-6 xol-sm-6 col-md-6">
                <label for="">Đến rank:</label>
                <select id="end-Rank" class="form-control">
                    <option value="1">Bạc IV</option>
                    <option value="2">Bạc III</option>
                    <option value="3">Bạc II</option>
                    <option value="4">Bạc I</option>
                    <option value="5">Vàng V</option>
                    <option value="6">Vàng IV</option>
                    <option value="7">Vàng III</option>
                    <option value="8">Vàng II</option>
                    <option value="9">Vàng I</option>
                    <option value="10">Bạch Kim V</option>
                    <option value="11">Bạch Kim IV</option>
                    <option value="12">Bạch Kim III</option>
                    <option value="13">Bạch Kim II</option>
                    <option value="14">Bạch Kim I</option>
                    <option value="15">Kim Cương V</option>
                    <option value="16">Kim Cương IV</option>
                    <option value="17">Kim Cương III</option>
                    <option value="18">Kim Cương II</option>
                    <option value="19">Kim Cương I</option>
                    <option value="20">Cao thủ</option>
                </select>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Tổng tiền phải thanh toán:</label>
                <input type="text" class="form-control" name="total-money" id="total-money" readonly="" value="">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Tên:</label>
                <input id="customer-name" type="text" class="form-control" placeholder="Nhập tên bạn...">
                <div id="errorName3"></div>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Tài khoản:</label>
                <input id="customer-account" type="text" class="form-control" placeholder="Nhập tài khoản...">
                <div id="errorAccount3"></div>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Mật khẩu:</label>
                <input id="customer-pass" type="password" class="form-control" placeholder="Nhập mật khẩu...">
                <div id="errorPassword3"></div>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Số điện thoại:</label>
                <input id="customer-phone" type="number" class="form-control" placeholder="Nhập SĐT...">
                <div id="errorPhone3"></div>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <button type="button" id="send-order" class="btn btn-danger">Gửi đơn hàng</button>
                <div id="errorRank"></div>
            </div>

        </form>
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
                            <span id="resultRegister"></span>
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

<!-- Modal - Placing the successful plow -->
<div class="modal fade" id="myModalNotifSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" style="margin-top: 200px">
        <div class="modal-content">
            <div class="modal-body" align="center">
                <h4> <i class="far fa-check-circle fa-2x" style="color: green"></i> Đặt hàng thành công</h4>
                <p>Quản trị viên sẽ liên hệ lại cho bạn trong thời gian sớm</p>
                <button  type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="Public/BOOTSTRAP/bootstrap-3.3.7-dist/js/jquery-3.2.1.js"></script>
<script src="Public/BOOTSTRAP/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="Public/JS/login___register_.js"></script>
<script src="Public/JS/plow___.js"></script>