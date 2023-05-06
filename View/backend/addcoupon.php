<?php
//include 'C:/xampp/htdocs/web/Controller/CouponC.php';
include_once dirname(__FILE__). '/../../Controller/CouponC.php';


$error = "";

$couponController = new CouponC();

if (
    isset($_GET['IDCoupon']) &&
    isset($_GET['NomInf']) &&
    isset($_GET['Number']) &&
    isset($_GET['Percentage'])
) {
    if (
        !empty($_GET['IDCoupon']) &&
        !empty($_GET['NomInf']) &&
        !empty($_GET['Number']) &&
        !empty($_GET['Percentage'])
    ) {
        $coupon = new Coupon($_GET['IDCoupon'],$_GET['NomInf'],$_GET['Number'],$_GET['Percentage']);
        
        $couponController->addCoupon($coupon);
        header('Location:coupon.php');
    } else {
        $error = "Missing information";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cultrify</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?php include './partials/sidebar.php' ?>    


        <!-- Content Start -->
        <div class="content">
        <?php include './partials/navbar.php' ?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Coupon</h6>
                            <form  method="get" onsubmit="return validateForm()">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">IDCoupon</label>
                                    <input type="text" class="form-control" id="IDCoupon" name="IDCoupon">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name of Influencer</label>
                                    <input type="text" class="form-control" id="NomInf" name="NomInf" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Number</label>
                                    <input type="text" class="form-control" id="Number" name="Number">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Percentage</label>
                                    <input type="text" class="form-control" id="Percentage" name="Percentage">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Coupon</button>
                            </form>
                            <script>
                                function validateForm() {
                                    var IDCoupon = document.getElementById("IDCoupon").value;
                                    var NomInf = document.getElementById("NomInf").value;
                                    var Number = document.getElementById("Number").value;
                                    var Percentage = document.getElementById("Percentage").value;

                                    // Perform form validation here
                                    // Example: Check if any of the fields are empty
                                    if (IDCoupon === "" || NomInf === "" || Number === "" || Percentage === "") {
                                        alert("Please fill in all fields.");
                                        return false;
                                    }
                                    // Add additional validation logic as needed

                                    // If form is valid, return true to allow form submission
                                    return true;
                                }
                            </script>






                        </div>
                    </div>
        

                    
                    </div>
                   
                   
                    </div>
          
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Cultrify</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/chart/chart.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>
</html>