<?php 
require 'db.php';

if(isset($_GET['input_name'])){
  $ten = $_GET['input_name'];
  $tendangnhap = $_GET['input_tendangnhap'];
  $matkhau = $_GET['input_matkhau'];
  $emaildk = $_GET['input_emaildk'];
  $diachi = $_GET['input_diachi'];
  $gioitinh = $_GET['input_gioitinh'];
  $noidung = $_GET['textarea_noidung'];

    $sql= "INSERT INTO `tbl_user` 
    (`tendangnhap123`
    ,`ten`
    ,`matkhau`
    ,`emaildk`
    , `diachi`
    , `gioitinh`
    , `noidung`) 
    VALUES('$tendangnhap',
      '$ten',
      '$matkhau',
      '$emaildk',
      '$diachi',
      '$gioitinh',
       '$noidung')";

    if ($conn->query($sql)===true) {
        echo "Lưu trữ thành công !";
    } else {
        echo "lỗi {$sql}".$conn->error;
    }
}

if(isset($_GET['gia_tri'])){
  $Email_db = $_GET['gia_tri'];
  $sql= "INSERT INTO `tbl_dangky` (`Email_dangky`)
   VALUES('$Email_db')";
  
  if ($conn->query($sql)===true) {
    echo "Lưu trữ thành công !";
  } else {
      echo "lỗi {$sql}".$conn->error;
  }
}



?>