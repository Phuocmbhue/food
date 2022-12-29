<!DOCTYPE HTML>
<html>

<?php include '../test-php/db.php'; // Lấy File DATABASE gốc
?>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="form-login">
        <div class="box-title">
            <h2>Đăng nhập</h2>
        </div>
        <div class="box-from">
            <form method="post" action="#" class="box-form">

                Tên đăng nhập
                <input type="text" name="tendangnhap">
                <span class="error error-tendangnhap">Vui lòng nhập tên đăng nhập</span>

                Mật Khẩu
                <input type="password" name="matkhau">
                <span class="error error-matkhau">Vui lòng nhập mật khẩu</span>

                <input type="submit" name="btn-reg" value="Submit" class="sb-button">
            </form>
        </div>
    </div>

</body>
<style>
body {
    padding: 0;
    font-family: monospace;
    margin: 0;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    background: currentColor;
}

.error {
    color: #FF0000;
    padding: 0;
    margin: 0;
    display: none;
}

.form-login {
    background: antiquewhite;
    text-align: initial;
    margin: 10vw auto;
    padding: 2vw;
    border-radius: 15px;
}

.box-title h2 {
    font-family: sans-serif;
    font-size: 27px;
    text-align: center;
}

.sb-button {
    padding: 10px 2vw;
    text-align: center;
    background: burlywood;
    color: #ffffff;
    border: none;
    border-radius: 15px;
}

.box-form {
    color: black;
    font-size: 18px;
    display: grid;
    margin: 0;
    padding: 0;
}

.box-form input {
    border: none;
    font-family: sans-serif;
    margin-top: 5px;
    margin-bottom: 5px;
    padding: 15px 10px;
}

.box-form textarea {
    border: none;
    font-family: sans-serif;
    margin-top: 5px;
    margin-bottom: 5px;

}

.box-gioitinh {
    padding: 30px 0;
}
</style>

<script>
$(document).ready(function() {
    $('input[type="submit"]').click(function(e) {
        event.preventDefault();
        var input_tendangnhap = document.querySelector("input[name='tendangnhap']").value;
        var input_matkhau = document.querySelector("input[name='matkhau']").value;

        var warnning = $(".error");
        if (input_tendangnhap == '') {
            $(".error").hide();
            $(".error-tendangnhap").show();
        } else if (input_matkhau == '') {
            $(".error").hide();
            $(".error-matkhau").show();
        } else {
            <?php for($i=1; $i <= $dangnhap->num_rows; $i++) : ?>
            <?php $login = $dangnhap->fetch_assoc(); ?>

            if ((input_tendangnhap != '<?php echo $login['tendangnhap']; ?>') && (input_matkhau !=
                    '<?php echo $login['matkhau']; ?>')) {
                alert('Bạn đã đăng nhập thành công !');
            } else {
                window.location.href = 'http://localhost/test-php/php-basic-2.php';
            }
            <?php endfor; ?>

        }
    });
});
</script>

</html>