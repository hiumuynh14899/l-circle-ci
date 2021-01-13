$(document).ready(function () {

    $('#come-back-page1').click(function () {
        $.ajax({
            url: 'PROCESS/process_move_page.php',
            method: 'post',
            data:{pageid: 'come-back-page1'},
            success : function (data) {
                $('.w-body-product').html(data);
                document.getElementById("page1").className = "active";
                document.getElementById("page3").className = null;
                document.getElementById("page4").className = null;
                document.getElementById("page5").className = null;
                document.getElementById("page2").className = null;
            },
            error : function (err) {
                alert(err);
            }
        })
    });

    $('#page1').click(function () {
        $.ajax({
            url: 'PROCESS/process_move_page.php',
            method: 'post',
            data:{pageid: 'page1'},
            success : function (data) {
                $('.w-body-product').html(data);
                document.getElementById("page1").className = "active";
                document.getElementById("page3").className = null;
                document.getElementById("page4").className = null;
                document.getElementById("page5").className = null;
                document.getElementById("page2").className = null;
            },
            error : function (err) {
                alert(err);
            }
        })
    });

    $('#page2').click(function () {
        $.ajax({
            url: 'PROCESS/process_move_page.php',
            method: 'post',
            data:{pageid: 'page2'},
            success : function (data) {
                $('.w-body-product').html(data);
                document.getElementById("page1").className = null;
                document.getElementById("page3").className = null;
                document.getElementById("page4").className = null;
                document.getElementById("page5").className = null;
                document.getElementById("come-back-page1").className = null;
                document.getElementById("go-to-page5").className = null;
                document.getElementById("page2").className = "active";
            },
            error : function (err) {
                alert(err);
            }
        })
    });

    $('#page3').click(function () {
        $.ajax({
            url: 'PROCESS/process_move_page.php',
            method: 'post',
            data:{pageid: 'page3'},
            success : function (data) {
                $('.w-body-product').html(data);
                document.getElementById("page1").className = null;
                document.getElementById("page3").className = "active";
                document.getElementById("page4").className = null;
                document.getElementById("page5").className = null;
                document.getElementById("page2").className = null;
            },
            error : function (err) {
                alert(err);
            }
        })
    });

    $('#page4').click(function () {
        $.ajax({
            url: 'PROCESS/process_move_page.php',
            method: 'post',
            data:{pageid: 'page4'},
            success : function (data) {
                $('.w-body-product').html(data);
                document.getElementById("page1").className = null;
                document.getElementById("page3").className = null;
                document.getElementById("page4").className = "active";
                document.getElementById("page5").className = null;
                document.getElementById("page2").className = null;
            },
            error : function (err) {
                alert(err);
            }
        })
    });

    $('#page5').click(function () {
        $.ajax({
            url: 'PROCESS/process_move_page.php',
            method: 'post',
            data:{pageid: 'page5'},
            success : function (data) {
                $('.w-body-product').html(data);
                document.getElementById("page1").className = null;
                document.getElementById("page3").className = null;
                document.getElementById("page4").className = null;
                document.getElementById("page5").className = "active";
                document.getElementById("page2").className = null;
            },
            error : function (err) {
                alert(err);
            }
        })
    });

    $('#go-to-page5').click(function () {
        $.ajax({
            url: 'PROCESS/process_move_page.php',
            method: 'post',
            data:{pageid: 'go-to-page5'},
            success : function (data) {
                $('.w-body-product').html(data);
                document.getElementById("page1").className = null;
                document.getElementById("page3").className = null;
                document.getElementById("page4").className = null;
                document.getElementById("page5").className = "active";
                document.getElementById("page2").className = null;
            },
            error : function (err) {
                alert(err);
            }
        })
    })

});