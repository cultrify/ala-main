<?php
include 'C:/xampp/htdocs/zeineb-main/Controller/CouponC.php';
$couponc = new CouponC();
$couponc->deleteCoupon($_GET["IDCoupon"]);
header('Location:coupon.php');
?>