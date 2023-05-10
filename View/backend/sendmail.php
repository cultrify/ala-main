<?php
include '../../Controller/EvenementC.php';
include_once '../../Model/Evenement.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 

    
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
   

</head>

<body>

 
  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
           
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

  
  </main><!-- End #main -->


<div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Message</h3>
              </div>
              <!-- /.card-header -->
                
                  <div class="card-body">
                    <p style="width: 87%;">
                    <div class="form-group">
<body>
<form class="" action="sending.php" method="post">
                            Email<input type="email" class="form-control" name="email" value=" "><br><br>
                            Subject<input type="text" class="form-control" name="subject" value=""><br><br>
                            Message<input type="text" class="form-control" name="message" value=""><br><br>
                            <button type="submit" name="send" class="btn btn-fill btn-primary">Send</button>
                                    <div class="form-group">
                                      <div class="btn btn-default btn-file">
                                        <i class="fas fa-paperclip"></i> Attachment
                                        <input type="file" name="attachment">
                                      </div>
                                      <p class="help-block">Max. 32MB</p>
                                    </div>
                                  </div></p>
                                  <div class="card-footer">
                <div class="float-right">
</form>
</html>