$(document).ready(function () {
    var rank = "";
    var khung = "";
    var gia = "";

    $('#select-rank').change(function () {
        rank = $(this).val();

        $.ajax({
            url: 'PROCESS/process_search_product.php',
            method: 'post',
            data:{rank: rank, khung: khung, gia: gia},
            success : function (data) {
                $('.w-body-product').html(data);
                $('.w-body-move-page').hide();
            },
            error : function (err) {
                alert(err);
            }
        })
    })

    $('#select-khung').change(function () {
        khung = $(this).val();

        $.ajax({
            url: 'PROCESS/process_search_product.php',
            method: 'post',
            data:{rank: rank, khung: khung, gia: gia},
            success : function (data) {
                $('.w-body-product').html(data);
                $('.w-body-move-page').hide();
            },
            error : function (err) {
                alert(err);
            }
        })
    })

    $('#select-gia').change(function () {
        gia = $(this).val();

        $.ajax({
            url: 'PROCESS/process_search_product.php',
            method: 'post',
            data:{rank: rank, khung: khung, gia: gia},
            success : function (data) {
                $('.w-body-product').html(data);
                $('.w-body-move-page').hide();
            },
            error : function (err) {
                alert(err);
            }
        })
    })

});