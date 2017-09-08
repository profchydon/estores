
<?php
    session_start();

    require '../script.php';

    $email = $_SESSION['email'];

    $title = "Stores";
    $header = "List of Stores";
    include '../assets/include/header.php';
 ?>

 <section class="store-list">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

              <div class="store-list-header">
                  <h4>You have 4 Listed Stores</h4>
              </div>

              <div class="store-list-details">

                  <div class="store-list-details-row row">

                      <div class="col-md-6">

                        <div class="store-list-details-img col-md-7">
                            <img src="../assets/img/store1.jpg" alt="" class="store-list-img img-responsive">
                        </div>

                        <div class="store-list-details-main col-md-5">
                          <p class="store-list-name"><b>Eni Stores</b></p>
                          <p class="store-list-address">23, GRA Road off Obi imo</p>
                          <p class="store-list-phone"> 070383845768</p>

                          <div class="store-button col-md-12">
                            <button type="submit" class="btn btn-primary" name="button">Edit Store</button>
                            <button type="submit" class="btn btn-primary" name="button">Edit Store</button>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">

                        <div class="store-list-details-img col-md-7">
                            <img src="../assets/img/store1.jpg" alt="" class="store-list-img img-responsive">
                        </div>

                        <div class="store-list-details-main col-md-5">
                          <p class="store-list-name"><b>Eni Stores</b></p>
                          <p class="store-list-address">23, GRA Road off Obi imo</p>
                          <p class="store-list-phone"> 070383845768</p>

                          <div class="store-button col-md-12">
                            <button type="submit" class="btn btn-primary" name="button">Edit Store</button>
                            <button type="submit" class="btn btn-primary" name="button">Edit Store</button>
                          </div>
                        </div>
                      </div>

                  </div>

              </div>

            </div>

        </div>

    </div>

 </section>

 <?php

     include '../assets/include/footer.php';

  ?>
