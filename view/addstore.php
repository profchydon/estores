
<?php
    session_start();

    require '../script.php';

    $email = $_SESSION['email'];

    $title = "Add Store";
    $header = "Add a Store";
    include '../assets/include/header.php';
 ?>
 <h5 id="add-success" class="text-center"></h5>
 <section class="store-entry-holder">

    <div class="store-entry-holder=container container">

        <div class="store-entry-holder-row row">

            <div class="store-entry-holder-col1 col-md-7">

                <h4 class="store-entry-holder-h4">Enter Details of your store to register them</h4>
                <h5 class="store-entry-holder-h5">Make your store visible to millions of customers</h5>

                <form class="" action="../script.php" method="post" class="form-group" id="store-form">

                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Name  </span>
                      <input type="text" class="form-control" placeholder="Enter store name" name="name" id="name" aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Address</span>
                      <input type="text" class="form-control" placeholder="Enter store address" name="address" id="address" aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Mobile</span>
                      <input type="text" class="form-control" placeholder="Enter phone number" name="mobile" id="mobile" aria-describedby="basic-addon1">
                  </div>

                  <button type="submit" name="add-store" id="add-store" class="btn btn-success pull-right">Add Store</button>

                </form>

            </div>

            <div class="col-md-1">

            </div>

            <div class="store-entry-holder-col2 col-md-4">

                <h4 class="store-entry-holder-faq">Frequently Asked Questions</h4>

                <div class="row">

                    <div class="row">

                        <h5><b>Q: Question 1</b></h5>
                        <h5>A: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  </h5>

                    </div>

                    <div class="row">

                        <h5><b>Q: Question 1</b></h5>
                        <h5>A: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  </h5>

                    </div>

                    <div class="row">

                        <h5><b>Q: Question 1</b></h5>
                        <h5>A: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  </h5>

                    </div>

                    <div class="row">

                        <h5><b>Q: Question 1</b></h5>
                        <h5>A: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  </h5>

                    </div>

                </div>

            </div>



        </div>

    </div>

 </section>


 <?php

     include '../assets/include/footer.php';

  ?>
