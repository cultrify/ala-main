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

  renderHeader('Cultrify - Destinations');
?>
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Destinations </h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Destinations </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
 <!--  Work gallery section -->
 <section class="grids-1 py-5">
  <div class="grids py-lg-5 py-md-4">
      <div class="container">
          <h3 class="hny-title mb-5">Destinations</h3>
          <div class="row">
              <div class="col-lg-4 col-md-4 col-6">
                  <div class="column">
                      <a href="./ticket/ticket purchasse/index.html"><img src="assets/images/g1.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Cheb Bechir</a></h4>
                          <p>3Days, 4 Nights </p>
                          <div class="dst-btm">
                            <h6 class="">Start From </h6>
                            <span>$1750</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-md-0">
                  <div class="column">
                      <a href="./ticket/ticket purchasse/index.html"><img src="assets/images/g2.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Bankok</a></h4>
                          <p>3Days, 4 Nights </p>
                          <div class="dst-btm">
                            <h6 class="">Start From </h6>
                            <span>$1690</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-md-0 mt-4">
                  <div class="column">
                      <a href="./ticket/ticket purchasse/index.html"><img src="assets/images/g3.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Maldives</a></h4>
                          <p>3Days, 4 Nights </p>
                          <div class="dst-btm">
                            <h6 class="">Start From </h6>
                            <span>$1650</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                  <div class="column">
                      <a href="./ticket/ticket purchasse/index.html"><img src="assets/images/g4.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Greece</a></h4>
                          <p>3Days, 4 Nights</p>
                          <div class="dst-btm">
                            <h6 class=""> Start From </h6>
                            <span>$1950</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                  <div class="column">
                      <a href="./ticket/ticket purchasse/index.html"><img src="assets/images/g5.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">London</a></h4>
                          <p>3Days, 4 Nights</p>
                          <div class="dst-btm">
                            <h6 class=""> Start From </h6>
                            <span>$1850</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                  <div class="column">
                      <a href="./ticket/ticket purchasse/index.html"><img src="assets/images/g6.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Julian Alps</a></h4>
                          <p>3Days, 4 Nights</p>
                          <div class="dst-btm">
                          <h6 class=""> Start From </h6>
                          <span>$1750</span>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                <div class="column">
                    <a href="./ticket/ticket purchasse/index.html"><img src="assets/images/g7.jpg" alt="" class="img-fluid"></a>
                    <div class="info">
                        <h4><a href="blog-single.html">Thailand</a></h4>
                        <p>3Days, 4 Nights</p>
                        <div class="dst-btm">
                          <h6 class=""> Start From </h6>
                          <span>$1650</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                <div class="column">
                    <a href="./ticket/ticket purchasse/index.html"><img src="assets/images/g8.jpg" alt="" class="img-fluid"></a>
                    <div class="info">
                        <h4><a href="blog-single.html">Singapore</a></h4>
                        <p>3Days, 4 Nights</p>
                        <div class="dst-btm">
                          <h6 class=""> Start From </h6>
                          <span>$1950</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                <div class="column">
                    <a href="./ticket/ticket purchasse/index.html"><img src="assets/images/g9.jpg" alt="" class="img-fluid"></a>
                    <div class="info">
                        <h4><a href="blog-single.html">Egypt</a></h4>
                        <p>3Days, 4 Nights</p>
                        <div class="dst-btm">
                        <h6 class=""> Start From </h6>
                        <span>$1450</span>
                      </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
</div></section>
<!--  //Work gallery section -->
<!-- grids block 5 -->
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

</body>

</html>