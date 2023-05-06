<?php
  include_once dirname(__FILE__). '/../../Controller/CouponC.php';

  $couponc = new CouponC();
  $list = $couponc->listCoupon();
?>
<?php include './partials/header.php' ?>
<?php include './partials/sidebar.php' ?>

        <!-- Content Start -->
        <div class="content">
        <?php include './partials/navbar.php' ?>

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="addcoupon.php">Add Coupons</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">IDCoupon</th>
                                    <th scope="col">Influencer</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Percentage</th>
                                    <th scope="col">Coupons Left</th>
                                    <th scope="col"> Delete </th>
                                    <th scope="col"> Refresh </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($list as $coupon) {
                                ?>
                                <tr>
                                    <td><?= $coupon['IDCoupon']; ?></td>
                                    <td><?= $coupon['NomInf']; ?></td>
                                    <td><?= $coupon['Number']; ?></td>
                                    <td><?= $coupon['Percentage']; ?></td>
                                    <td><?= $coupon['usage_count']; ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="deletecoupon.php?IDCoupon=<?php echo $coupon['IDCoupon']; ?>">Delete</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="editcoupon.php?IDCoupon=<?php echo $coupon['IDCoupon']; ?>">Edit</a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php include './partials/footer.php' ?>