<?php

  include_once dirname(__FILE__). '/../../Controller/AdminC.php';

  if(!$_COOKIE['adminLoggedin']) {
    $uri = str_replace('admins.php', 'auth/login.php', $_SERVER['REQUEST_URI']);
    header('Location: '.$uri);
    exit();
  }

  $adminC = new AdminC();

  $clientAccounts = $adminC->getAdminClientAccounts();
  $allAdmins = $adminC->listAdmin();

?>

        <?php include './partials/header.php' ?>
        <?php include './partials/sidebar.php' ?>


        <!-- Content Start -->
        <div class="content">

        <?php include './partials/navbar.php' ?>

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
          <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Admins</h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $i = 1;
                        if (is_array($allAdmins)) {
                          foreach ($allAdmins as $admin) {
                            echo '<tr>';
                            echo '<th scope="row">'.$i.'</th>';
                            echo '<td>'.$admin['firstName'].'</td>';
                            echo '<td>'.$admin['lastName'].'</td>';
                            echo '<td>'.$admin['email'].'</td>';
                            echo '</tr>';
                            $i++;
                          }
                        }
                        
                      ?>
                    </tbody>
                </table>
            </div>
          </div>
        </div>

        <div class="container-fluid pt-4 px-4">
          <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Client Accounts of Admins</h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                      
                      $i = 1;
                      if (is_array($clientAccounts)) {
                        foreach ($clientAccounts as $acc) {
                          echo '<tr>';
                          echo '<th scope="row">'.$i.'</th>';
                          echo '<td>'.$acc['firstName'].'</td>';
                          echo '<td>'.$acc['lastName'].'</td>';
                          echo '<td>'.$acc['email'].'</td>';
                          echo '</tr>';
                          $i++;
                        }
                      }
                      
                    ?>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
            <!-- Recent Sales End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Cultrify</a>, All Right Reserved. 
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

    <?php include './partials/footer.php' ?>