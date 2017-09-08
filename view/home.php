
<?php
    session_start();

    require '../script.php';

    $email = $_SESSION['email'];
    $title = "Dashboard";
    $header = "Welcome to your Dashboard";
    include '../assets/include/header.php';
 ?>

   <section class="store-holder">

          <!-- <h3 class="store-holder-h3 text-center">Best Stores In Town</h3>

          <div class="container">

              <div class="row">

                  <div class="store-holder-col col-md-4">
                      <div class="store-img-holder">
                        <img src="../assets/img/store1.jpg" alt="" class="store-img img-responsive">
                      </div>
                      <div class="store-details">
                          <p class="store-name">Name: Eni Stores</p>
                          <p class="store-address">Address: 23, GRA Road off Obi imo</p>
                          <p class="store-phone">Mobile: 070383845768</p>
                      </div>
                  </div>

                  <div class="store-holder-col col-md-4">
                      <div class="store-img-holder">
                        <img src="../assets/img/save.png" alt="" class="store-img img-responsive">
                      </div>
                      <div class="store-details">
                          <p class="store-name">Name: Eni Stores</p>
                          <p class="store-address">Address: 23, GRA Road off Obi imo</p>
                          <p class="store-phone">Mobile: 070383845768</p>
                      </div>
                  </div>

                  <div class="store-holder-col col-md-4">
                      <div class="store-img-holder">
                        <img src="../assets/img/save.png" alt="" class="store-img img-responsive">
                      </div>
                      <div class="store-details">
                          <p class="store-name">Name: Eni Stores</p>
                          <p class="store-address">Address: 23, GRA Road off Obi imo</p>
                          <p class="store-phone">Mobile: 070383845768</p>
                      </div>
                  </div>

              </div>

              <div class="view-more-row row text-center">
                <a href="#" class="view-more">View More</a>
              </div>

          </div>
        </div> -->

   </section>

<?php

    include '../assets/include/footer.php';

 ?>
