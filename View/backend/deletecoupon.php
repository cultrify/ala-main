<?php
include '../../Controller/CouponC.php';
$couponc = new CouponC();
$couponc->deleteCoupon($_GET["IDCoupon"]);
header('Location:coupon.php');
?>