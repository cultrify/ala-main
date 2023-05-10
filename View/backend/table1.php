<!DOCTYPE html>
<html lang="en">

<head>
<style>
  .o  #hero {

        width: 117.2%;
        margin-left :-8.6%;
        margin-top:-2%;
    }
  .o  section {
        width: 117.2%;
        margin-left :-8.6%;
    }
.o #footer {
  background: black;
  width: 117.2%;
  margin-left :-8.6%;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
  top :10%;

}

.o .calendar {
  width: 35rem;
  height: 39rem;
  background-color: #222227;
  box-shadow: 0 0.5rem 3rem rgb(255 255 255 / 40%);
}

.o .month {
  width: 100%;
  height: 6.5rem;
  background-color: #41a3ab;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 2rem;
  text-align: center;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
}

.o .month i {
  font-size: 2.5rem;
  cursor: pointer;
}

.o .month h1 {
  font-size: 1.5rem;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
  margin-bottom: 1rem;
}

.o .month p {
  font-size: 1.6rem;
}

.o .weekdays {
  width: 100%;
  height: 5rem;
  padding: 0 0.4rem;
  display: flex;
  align-items: center;
}

.o .weekdays div {
  font-size: 1.2rem;
  font-weight: 400;
  letter-spacing: 0.1rem;
  width: calc(44.2rem / 7);
  display: flex;
  justify-content: center;
  align-items: center;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
}

.o .days {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  padding: 0.2rem;
}

.o.days div {
  font-size: 1rem;
  margin: 0.3rem;
  width: calc(40.2rem / 7);
  height: 2rem;
  display: flex;
  justify-content: center;
  align-items: center;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
  transition: background-color 0.2s;
}

.o .days div:hover:not(.today) {
  background-color: #262626;
  border: 0.2rem solid #777;
  cursor: pointer;
}

.o .prev-date,
.o .next-date {
  opacity: 0.5;
}

.o .today {
  background-color: #41a3ab;
}
</style>

            <!-- Navbar End -->
            <?php include './partials/header.php' ?>

<?php include './partials/sidebar.php' ?>

<!-- Content Start -->
<div class="content">

<?php include './partials/navbar.php' ?>

            <!-- Table Start -->
            
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                    
               
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4" id="cname">Responsive Table</h6>
                            <div class="table-responsive" >
                                <table class="table"  >
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">ZIP</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="recList">
                                    <div class="date">
                                    <?php 


include './dbconnect.php';
$query= $pdo->prepare("SELECT * FROM events ORDER BY date_event ");
$query->execute();
// var_dump($query);
    
$events = $query->fetchAll();
//var_dump($etudiant);



                                    $con = mysqli_connect("localhost","root","","cultrify");
                                   //include './dbconnect.php';

                                    if(!isset($_GET['search']))
                                    {
                                     foreach ($events as $event) : ?>
                                        <tr>
                                            <td class="<?= $event['Nom'] ?  : '' ?>"><?= $event['Nom'] ?></td>
                                            <td class="<?= $event['date_event'] ?  : '' ?>"><?= $event['date_event'] ?></td>
                                            <td class="<?= $event['Duree'] ?  : '' ?>"><?= $event['Duree'] ?></td>
                                            <td>
                        
                                                <!-- lien vers la page edit_todo.php -->
                                                <a href="etudiant_edit.php?id=<?= $event['id'] ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                <!-- lien vers la page delete_todo.php -->
                                                <a href="etudiant_delete.php?id=<?= $event['id'] ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                                
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <?php
                                    } else
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM  `events` WHERE CONCAT(`Nom`) LIKE  '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
                                        $query2 = "SELECT * FROM  `events` ORDER BY date_event";
                                        $query_run2 = mysqli_query($con, $query2);

                                        if(mysqli_num_rows($query_run) >0)
                                        {

                                            
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                               <tr>
                                                <td class="<?= $items['Nom'] ?  : '' ?>"><?= $items['Nom'] ?></td>
                                                <td class="<?= $items['date_event'] ?  : '' ?>"><?= $items['date_event'] ?></td>
                                                <td class="<?= $items['Duree'] ?  : '' ?>"><?= $items['Duree'] ?></td>
                                                <td>

                                                    <!-- lien vers la page edit_todo.php -->
                                                    <a href="etudiant_edit.php?id=<?= $items['id'] ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                    <!-- lien vers la page delete_todo.php -->
                                                    <a href="etudiant_delete.php?id=<?= $items['id'] ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                                    
                                                </td>
                                                 </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        { 
                                            ?>
                                            <tr>
                                                <td colspan="4">No show Found</td>
                                            </tr>
                                        <?php
                                        }
                                    }
                                ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


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
            <o class="o">
            <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
      </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="fst-italic">
          In addition to displaying events, a calendar on a website may also include other features such as color coding, reminders, and integration with other applications or services. For example, a calendar 
          may sync with a user's email or mobile device to provide reminders and notifications for upcoming events.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Celebrities Attend Red Carpet Premiere of Highly Anticipated Movie.</li>
            <li><i class="ri-check-double-line"></i> New Study Shows Surprising Benefits of Meditation for Stress Relief.</li>
            <li><i class="ri-check-double-line"></i> Breaking News: Major Tech Company Announces Launch of Revolutionary New Product.</li>
          </ul>
          <p>
          Overall, a calendar is an essential element of a website that helps users stay organized and on top of their schedules. It provides a
           user-friendly way to view and manage events, and can improve the overall user experience of a website.  
        </p>
        </div>
      </div>
      </div>
                                </o>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  
</body>

</html>