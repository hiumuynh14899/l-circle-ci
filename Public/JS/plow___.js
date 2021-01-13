$(document).ready(function () {

    var startRank = $('#start-Rank').val();
    var endRank = $('#end-Rank').val();

    if (parseInt(endRank) > parseInt(startRank)) {
        $('#total-money').val(function () {
            return sum_Pay(parseInt(startRank), parseInt(endRank)) + 'đ';
        })
    }
    else {
        $('#total-money').val(function () {
            return 0 + 'đ';
        })
    }

    $('#start-Rank').change(function () {
        startRank = $('#start-Rank').val();
        if (parseInt(endRank) <= parseInt(startRank)) {
            $('#end-Rank').val(parseInt(startRank) + 1);
        }
        endRank = $('#end-Rank').val();
        if (parseInt(endRank) > parseInt(startRank)) {
            $('#total-money').val(function () {
                return sum_Pay(parseInt(startRank), parseInt(endRank)) + 'đ';
            })
        }
        else {
            $('#total-money').val(function () {
                return 0 + 'đ';
            })
        }
    })

    $('#end-Rank').change(function () {
        endRank = $('#end-Rank').val();
        if (parseInt(endRank) > parseInt(startRank)) {
            $('#total-money').val(function () {
                return sum_Pay(parseInt(startRank), parseInt(endRank)) + 'đ';
            })
        }
        else {
            $('#total-money').val(function () {
                return 0 + 'đ';
            })
        }
    })

    function sum_Pay($st, $ed) {
        var i;
        var sum = 0;
        for (i = $st+1; i <= $ed; i++){
            if (i == 1 || i == 2 || i == 3 || i == 4){
                sum += 60000;
            }
            if(i == 5 || i == 6 || i == 7 || i == 8 || i == 9){
                sum += 80000;
            }
            if(i == 10 || i == 11 || i == 12 || i == 13 || i == 14){
                sum += 100000;
            }
            if(i == 15){
                sum += 150000;
            }
            if(i == 16){
                sum += 200000;
            }
            if(i == 17){
                sum += 250000;
            }
            if(i == 18){
                sum += 320000;
            }
            if(i == 19){
                sum += 420000;
            }
            if(i == 20){
                sum += 600000;
            }
        }
        return sum;
    }

    $('#send-order').click(function () {
        var price = $('#total-money').val();
        var customerName = $('#customer-name').val();
        var customerAccount = $('#customer-account').val();
        var customerPass = $('#customer-pass').val();
        var customerPhone = $('#customer-phone').val();
        var stRank = $('#start-Rank').val();
        var edRank = $('#end-Rank').val();
        var errorRank = $('#errorRank');
        var errorName3 = $('#errorName3');
        var errorAccount3 = $('#errorAccount3');
        var errorPassword3 = $('#errorPassword3');
        var errorPhone3 = $('#errorPhone3');

        errorRank.html("");
        errorName3.html("");
        errorAccount3.html("");
        errorPassword3.html("");
        errorPhone3.html("");

        const isPercentage = string => {
            return /^\w\S+?$/.test(string);
        };

        if (customerName == "") {
            errorName3.html('<span style="color: red">Tên không hợp lệ</span>');
            return false;
        }
        // Kiểm tra nếu account rỗng thì báo lỗi
        if (customerAccount == "") {
            errorAccount3.html('<span style="color: red">Tên đăng nhập không hợp lệ</span>');
            return false;
        }
        // Kiểm tra nếu password rỗng thì báo lỗi
        if (customerPass == "") {
            errorPassword3.html('<span style="color: red">Mật khẩu không hợp lệ</span>');
            return false;
        }
        if (customerPhone == "") {
            errorPhone3.html('<span style="color: red">Số điện thoại không hợp lệ</span>');
            return false;
        }

        if (price == '0đ' || !isPercentage(customerAccount)){
            if (price == '0đ'){
                errorRank.html('<span style="color: red">Vui lòng chọn lại Rank muốn cày</span>');
            }else {
                errorAccount3.html('<span style="color: red">Tài khoản không được có khoảng trắng</span>');
            }
        }
        else {
            $.ajax({
                url: "PROCESS/process_Plow.php",
                method: "POST",
                data: {priceM: sum_Pay(parseInt(startRank), parseInt(endRank)), customerNameM: customerName, customerAccountM: customerAccount,
                    customerPassM: customerPass, customerPhoneM: customerPhone, stRankM: stRank, edRankM: edRank},
                success: function (data) {
                    if (data == "1") {
                        $('#myModalNotifSuccess').modal('show');
                        $('#customer-name, #customer-account, #customer-pass, #customer-phone').val(function () {
                            return '';
                        })
                    } else {
                        errorAccount3.html('<span style="color: red;">Tài Khoản Đã có trong đơn hàng</span>');
                    }
                },
                error: function () {
                    alert('Gui ajax That Bai');

                }
            });
        }
    })
});