<head>
    <title>KSGROUP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../libraries-aos/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../libraries/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../libraries/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="../libraries/OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js"></script>
    <script src="../libraries/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

    <script src="../libraries-aos/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js"></script>
    <link rel="stylesheet" href="../test-php/index.css">

</head>

<?php include '../test-php/db.php'; // Lấy File DATABASE gốc
?>

<body>
    <?php // for($i=1; $i <= $dangnhap->num_rows; $i++) : ?>
    <?php //  $login = $dangnhap->fetch_assoc(); ?>

    <?php // echo 'ten dang nhap: '.$login['tendangnhap']; ?>
    <?php // echo 'password: ' . $login['matkhau']; ?>

    <?php // endfor; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="home-page pc-home-page-template">
        <header>
            <div class="menu-header">
                <div class="img-logo">
                    <img class="logo-ksg" src="<?php echo $basic_2['logo']?>" alt="">
                </div>
                <ul class="menu-list">
                    <li>
                        <a href="#home"><?php echo $basic_2['menu1']?></a>
                    </li>
                    <li>
                        <a href="#news"><?php echo $basic_2['menu2']?></a>
                    </li>
                    <li>
                        <a href="#contact"><?php echo $basic_2['menu3']?></a>
                    </li>
                    <li>
                        <a href="#about"><?php echo $basic_2['menu4']?></a>
                    </li>
                    <li>
                        <a href="#about"><?php echo $basic_2['menu5']?></a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="row-banner">
            <div class="banner-logo">
                <img class="logo-banner-ksg" src="<?php echo $basic_2['banner']?>">
            </div>
            <div class="title-ksg">
                <div class="box-text">
                    <p>
                        <?php echo $basic_2['text-banner-1']?>
                    </p>
                    <h1>
                        <span>
                            <?php echo $basic_2['text-banner-2']?>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="Row-1">
            <div class="group-flex">
                <div class="left-cloumb box-text-thong-diep">
                    <img src="<?php echo $basic_3['banner1'] ?>" class="logo-ksg-row-1" alt="">
                    <div class="box-text-td">
                        <h1 class="title"><?php echo $basic_3['tieude1'] ?></h1>
                        <p class="title-p"><?php echo $basic_3['tieude2'] ?></p>
                    </div>
                </div>
                <div class="right-cloumb image-next-list">
                    <img src="<?php echo $basic_3['banner2'] ?>" class="logo-ksg-row-1" alt="">
                </div>
            </div>
        </div>

        <div class="Row-2">
            <div class="group-flex">
                <div class="left-cloumb box-text-thong-diep">
                    <img src="<?php echo $basic_4['banner1']?>" class="logo-ksg-row-1" alt="">
                </div>
                <div class="right-cloumb image-next-list">
                    <img src="<?php echo $basic_4['banner2']?>" class="logo-ksg-row-1" alt="">
                    <div class="box-text-td">
                        <h1 class="title"><?php echo $basic_4['tieude1']?></h1>
                        <p class="title-p"><?php echo $basic_4['tieude2']?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="Row-3 Row-1">
            <div class="group-flex">
                <div class="left-cloumb box-text-thong-diep">
                    <img src="<?php echo $basic_5['banner2']?>" class="logo-ksg-row-1" alt="">
                    <div class="box-text-td">
                        <h1 class="title"><?php echo $basic_5['tieude1']?></h1>
                        <p class="title-p"><?php echo $basic_5['tieude2']?></p>
                    </div>
                </div>
                <div class="right-cloumb image-next-list">
                    <img src="<?php echo $basic_5['banner1']?>" class="logo-ksg-row-1" alt="">
                </div>
            </div>
        </div>

        <div class="Row-4">

            <div class="Group-tintuc">
                <h1 class="title-h1-tintuc"><?php echo $basic_6_['title']?></h1>
                <ul class="list-tintuc">
                    <?php for($i=1; $i <= $result6->num_rows; $i++) : ?>
                    <?php $basic_6 = $result6->fetch_assoc();?>
                    <li class="list">
                        <div class="box-text-tintuc">
                            <img src="<?php echo $basic_6['hinhanh']?>" class="banner-tintuc" alt="">
                        </div>
                        <h2 class="title-news"><?php echo $basic_6['tieude']?></h2>
                        <p class="title-p-news"><?php echo $basic_6['mota']?></p>
                        <span class="date-time"><?php echo $basic_6['ngaythang']?></span>
                    </li>
                    <?php endfor; ?>
                </ul>
            </div>

        </div>

        <footer class="footer">
            <div class="footer-ksg">
                <div class="footer-class">
                    <div class="row-footer">
                        <div class="col-row-start logo-footer">
                            <img src="<?php echo $basic_7['logo'] ?>" class="footer-image" alt="">
                        </div>
                        <div class="col-row-left">
                            <h1 class="title">
                                <?php echo $basic_7['danhmuc1'] ?>
                            </h1>
                            <div class="list-category">
                                <ul class="list">
                                    <?php for($i=1; $i <= $result9->num_rows; $i++) :  ?>
                                    <?php $basic_9 = $result9->fetch_assoc();?>
                                    <li>
                                        <a href="#"><?php echo $basic_9['danhmuccon2']?></a>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-row-right">
                            <h1 class="title">
                                <?php echo $basic_7['danhmuc2'] ?>
                            </h1>
                            <div class="phone phone-number-1">
                                <span class="ph-bg gb-1">
                                    <?php echo $basic_7['phone1']?>
                                </span>
                            </div>
                            <div class="phone phone-number-2">
                                <span class="ph-bg gb-2">
                                    <?php echo $basic_7['phone2']?>
                                </span>
                            </div>
                            <div class="email">
                                <span><?php echo $basic_7['email']?></span>
                            </div>
                            <div class="lien-he-icon">
                                <ul class="list-icon">
                                    <li class="list icon1">
                                        <img src="<?php echo $basic_7['icon1']?>">
                                    </li>
                                    <li class="list icon2">
                                        <img src="<?php echo $basic_7['icon2']?>">
                                    </li>
                                    <li class="list icon3">
                                        <img src="<?php echo $basic_7['icon3']?>">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-row-end">
                            <h1 class="title">
                                <?php echo $basic_7['danhmuc3'] ?>
                            </h1>
                            <form class="form-input">
                                <input type="text" class="emain-buton" id="subscribe_email" value=""
                                    placeholder="Nhập email">
                                <button type="button_name" class="submit-btn">Đăng ký</button>
                                <div class="error error-ten"> Vui lòng nhập Email</div>
                                <div class="thanh-cong" id="thanh33cong">Bạn đã đăng ký thành công !
                                    <button class="button-now1" id="click-none">X</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Copright">
                <span><?php echo $basic_7['copyright']?></span>
            </div>
        </footer>
    </div>
</body>
<script>
$(document).ready(function() {
    $('button').click(function() {
        event.preventDefault();
        var gia_tri = document.getElementById('subscribe_email').value; //
        if (gia_tri == '') { //
            $(".error").hide();
            $(".error-ten").show();
        } else { //
            $.ajax({
                type: "GET",
                url: 'reg.php',
                contentType: "json",
                data: ({
                    gia_tri: gia_tri,
                }),
                success: function(e) {
                    $("#thanh33cong").show();
                    $(".error-ten").hide();
                },
                error: function(e) {
                    alert('Lỗi đăng ký');
                }
            });
            $('#click-none').click(function() {
                $("#thanh33cong").addClass("none-button");
            });
        }
    });
});
</script>