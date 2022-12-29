<!DOCTYPE HTML>
<html>


<?php include '../test-php/db.php'; // Lấy File DATABASE gốc
?>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="form-dangky">
        <div class="box-title">
            <h2><?php echo $bacsic_10['dangky_name']?></h2>
        </div>
        <div class="box-from">
            <form method="post" class="box-form">

                <?php echo $bacsic_10['name']?>
                <input type="text" name="ten">
                <span class="error error-ten"><?php echo $bacsic_10['name_error']?></span>

                <?php echo $bacsic_10['name_dangnhap']?>
                <input type="text" name="tendangnhap">
                <span class="error error-tendangnhap"><?php echo $bacsic_10['name_dn_error']?></span>

                <?php echo $bacsic_10['pass_name']?>
                <input type="password" name="matkhau">
                <span class="error error-matkhau"><?php echo $bacsic_10['pass_name_error']?></span>

                <?php echo $bacsic_10['email_name']?>
                <input type="text" name="emaildk">
                <span class="error error-emaildk"><?php echo $bacsic_10['email_name_error']?></span>

                <div class="box-gioitinh">
                    <label for=""><?php echo $bacsic_10['grender']?></label>
                    <input type="radio" name="gioitinh" value="female" id="female">
                    <?php echo $bacsic_10['nam']?>
                    <input type="radio" name="gioitinh" value="male" id="male">
                    <?php echo $bacsic_10['nu']?>
                </div>
                <span class="error error-gioitinh"><?php echo $bacsic_10['grender_error']?></span>
                <?php echo $bacsic_10['adress_name']?>
                <input type="text" name="diachi">
                <span class="error error-diachi"><?php echo $bacsic_10['adress_name_error']?></span>

                <?php echo $bacsic_10['content_name']?>
                <textarea name="noidung" rows="5" cols="40"></textarea>
                <span class="error error-noidung"><?php echo $bacsic_10['content_name_error']?></span>

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

.form-dangky {
    background: antiquewhite;
    text-align: initial;
    margin: 4vw auto;
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
        var input_name = document.querySelector("input[name='ten']").value;
        var input_tendangnhap = document.querySelector("input[name='tendangnhap']").value;
        var input_matkhau = document.querySelector("input[name='matkhau']").value;
        var input_emaildk = document.querySelector("input[name='emaildk']").value;
        var input_diachi = document.querySelector("input[name='diachi']").value;
        var textarea_noidung = document.querySelector("textarea[name='noidung']").value;
        var input_gioitinh = document.querySelector("input[name='gioitinh']").value;

        var warnning = $(".error");
        if (input_name == '') {
            $(".error").hide();
            $(".error-ten").show();
        } else if (input_tendangnhap == '') {
            $(".error").hide();
            $(".error-tendangnhap").show();
        } else if (input_matkhau == '') {
            $(".error").hide();
            $(".error-matkhau").show();
        } else if (input_emaildk == '') {
            $(".error").hide();
            $(".error-emaildk").show();
        } else if (input_diachi == '') {
            $(".error").hide();
            $(".error-diachi").show();
        } else if (textarea_noidung == '') {
            $(".error").hide();
            $(".error-noidung").show();
        } else if (input_gioitinh == '') {
            $(".error").hide();
            $(".error-gioitinh").show();
        } else {

            $.ajax({
                type: "GET",
                url: 'reg.php',
                contentType: "json",
                data: ({
                    input_name: input_name,
                    input_tendangnhap: input_tendangnhap,
                    input_matkhau: input_matkhau,
                    input_emaildk: input_emaildk,
                    input_diachi: input_diachi,
                    input_gioitinh: input_gioitinh,
                    textarea_noidung: textarea_noidung,
                }),
                success: function(data) {
                    alert('Đăng ký thành công !');
                },
                error: function(e) {
                    alert('fail');
                }
            });

        }
    });
});
</script>

</html>