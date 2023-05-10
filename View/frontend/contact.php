<?php
  function renderHeader($pageTitle) {
    //$loggedin = $_COOKIE['loggedin'];
    $loggedin = isset($_COOKIE['loggedin']) ? $_COOKIE['loggedin'] : null;

    $fullname = '';
if (isset($_COOKIE['firstname'])) {
    $fullname .= $_COOKIE['firstname'];
}
if (isset($_COOKIE['lastname'])) {
    $fullname .= ' '.$_COOKIE['lastname'];
}
    extract([
      'pageTitle' => $pageTitle,
      'loggedIn' => $loggedin,
      'fullname' => $fullname
    ]);

    include './partials/header.php';
  }

  renderHeader('Cultrify - Contact');
?>
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">Contact Us</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
<!-- contact-form -->
<section class="w3l-contact" id="contact">
  <div class="contact-infubd py-5">
    <div class="container py-lg-3">
      <div class="contact-grids row">
        <div class="col-lg-6 contact-left">
          <div class="partners">
            <div class="cont-details">
              <h5>Get in touch</h5>
              <p class="mt-3 mb-4">Hi there, We are available 24/7 by fax, e-mail or by phone. Drop us line so we can talk
                futher about that.</p>
            </div>
            <div class="hours">
              <h6 class="mt-4">Email:</h6>
              <p> <a href="mailto:mail@traversal.com">
                mail@Cultrify.com</a></p>
              <h6 class="mt-4">Visit Us:</h6>
              <p> 1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala.</p>
              <h6 class="mt-4">Contact:</h6>
              <p class="margin-top"><a href="tel:+21655915907">+216-55-915-907</a></p>
            </div>
          </div>
        </div>
       
        <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
          <form id="AddForm" method="post">
            <div class="input-grids">
              <div class="form-group">
                <input type="text"type="text" name="client" placeholder="client" class="contact-input" />
              </div>
              
              <div class="form-group">
                <input type="text" type="text" name="subject" placeholder="subject" class="contact-input" />
              </div>
            </div>
            <div class="form-group">
              <textarea name="content" placeholder="content"  required=""></textarea>
            </div>
            <div class="text-right">
              <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>

      </div>
      <div class="map mt-5 pt-md-5">
        <h5>Map</h5>
        <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJUe3GVHTL4hIRV9NcVrU6O2g&key=AIzaSyANPKRchsPOLXhaZzrtjl5T41Bl63YlMzI"></iframe> 
      </div>
    </div>
</section>
<!-- /contact-form -->
  <?php include './partials/footer.php' ?>

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>
  <script src="./reclamation.js"> </script>
</body>

</html>