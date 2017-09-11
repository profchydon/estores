
<?php
    session_start();

    require '../script.php';

    $email = htmlentities(strip_tags(trim($_SESSION['email'])));

    $title = "Stores";
    $header = "List of Stores";
    include '../assets/include/header.php';
 ?>

 <section class="store-list">

    <div class="container">

        <div class="row">

            <div class="main-store-holder col-md-12">

              <div class="store-list-header">
                  <h4>You have <?php echo count($stores)?> Listed Stores</h4>
              </div>

              <div class="store-list-details">

                  <div class="store-list-details-row row">

                      <?php

                        foreach ($stores as $key => $each_stores) { ?>

                          <div class="col-md-6 store-col6">

                            <div class="store-list-details-img col-md-5">
                                <img src="<?=$store->escape($each_stores['image']);?>" alt="" class="store-list-img img-responsive">

                            </div>



                            <div class="store-list-details-main col-md-5">
                              <p class="store-list-name"><b><?=$store->escape($each_stores['name']);?></b></p>
                              <p class="store-list-address"><?=$store->escape($each_stores['address']);?></p>
                              <p class="store-list-phone"> <?=$store->escape($each_stores['mobile']);?></p>

                              <div class="store-button col-md-12">
                                <a href="#edit<?=$store->escape($each_stores['id']);?>" data-toggle="modal" data-target="#edit<?=$store->escape($each_stores['id']);?>" class="edit-a"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Store</a></li>
                                <a href="#delete<?=$store->escape($each_stores['id']);?>" data-toggle="modal" data-target="#delete<?=$store->escape($each_stores['id']);?>" class="delete-a"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a></li>
                              </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                          </div>


                      <?php
                          include '../assets/include/modal/delete.php';
                          include '../assets/include/modal/edit.php';
                        }

                       ?>

                  </div>

              </div>

            </div>

        </div>

    </div>

 </section>

 <?php

     include '../assets/include/footer.php';


  ?>
