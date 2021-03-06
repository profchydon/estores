
<?php
    session_start();

    require '../script.php';

    $email = htmlentities(strip_tags(trim($_SESSION['email'])));

    $title = "Add Store";
    $header = "Add a Store";
    include '../assets/include/header.php';
 ?>
 <h5 id="add-success" class="text-center"></h5>
 <section class="store-entry-holder">

    <div class="store-entry-holder=container container">

        <div class="store-entry-holder-row row">

            <div class="store-entry-holder-col1 col-md-6">

                <h4 class="store-entry-holder-h4">Enter Details of your store to register them</h4>
                <h5 class="store-entry-holder-h5">Make your store visible to millions of customers</h5>

                <form class="" action="../script.php" method="post" class="form-group" id="store-form"novalidate=""  name="storeform">

                  <p style="font-size:12px;color:red;" class="text-center" ng-show="storeform.name.$invalid && storeform.name.$touched">Please Provide Store Name</p>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-info" aria-hidden="true"></i> </span>
                      <input type="text" class="form-control" placeholder="Enter store name" name="name" id="name" aria-describedby="basic-addon1" ng-model="store.name" ng-required="true">
                  </div>

                  <p style="font-size:12px;color:red;" class="text-center" ng-show="storeform.address.$invalid && storeform.address.$touched">Please Provide Store Address</p>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" placeholder="Enter store address" name="address" id="address" aria-describedby="basic-addon1" ng-model="store.address" ng-required="true">

                  </div>

                  <p style="font-size:12px;color:red;" class="text-center" ng-show="storeform.mobile.$invalid && storeform.mobile.$touched">Please Enter a Contact Number</p>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" placeholder="Enter phone number" name="mobile" id="mobile" aria-describedby="basic-addon1" ng-model="store.mobile" ng-required="true">
                  </div>

                  <div class="input-group" id="store-id">
                      <span class="input-group-addon" id="basic-addon1">Token</span>
                      <input type="text" class="form-control" placeholder="Enter phone number" name="token" id="id" aria-describedby="basic-addon1" value="<?=$_SESSION['edit_token']?>">
                  </div>


                  <button type="submit" name="add-store" id="add-store" class="btn btn-success btn-block" ng-model="store.add-store" ng-disabled="storeform.$invalid">Add Store</button>


                </form>

                <form class="" action="../script.php" method="post" class="form-group" id="upload-form" enctype="multipart/form-data">
                  <div class="input-group" id="upload-div">

                    <input type="text" name="name" value="<?=$_SESSION['store_name'];?>">

                    <p class="img-h4">Upload Store image to complete registration</p><br>
                    <label id="input-label" for="upload-store-pix">Upload Store Image</label>
                        <span id="label_span"></span>
                        <input type="file" id="upload-store-pix" name="store-image"> <br>
                        <!-- <button type="submit" class="btn btn-primary" id="upload" name="upload">Complete Upload</button> -->
                  </div>
                    <button type="submit" class="btn btn-success btn-block" id="upload" name="upload">Complete</button>
                </form>

            </div>

            <div class="col-md-2">

            </div>

            <div class="store-entry-holder-col2 col-md-4">

                <h4 class="store-entry-holder-faq">Frequently Asked Questions</h4>
                <hr id="faq-hr">

                <div class="row">

                    <div class="faq-row row">

                        <h5><b>Q: Question 1</b></h5>
                        <h5>A: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  </h5>

                    </div>

                    <div class="faq-row row">

                        <h5><b>Q: Question 1</b></h5>
                        <h5>A: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  </h5>

                    </div>

                    <div class="faq-row row">

                        <h5><b>Q: Question 1</b></h5>
                        <h5>A: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  </h5>

                    </div>

                    <div class="faq-row row">

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
