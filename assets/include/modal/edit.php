
<div class="modal fade" id="edit<?=$each_stores['id']?>" tabindex="-1" role="dialog" aria-labelledby="signinLabel">

    <div id="login-modal" class="modal-dialog" role="document">

        <div class="modal-content con">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                <img class="img img-responsive center"src="" alt="E-Stores" />

                <h4 class="modal-title text-center" id="signinLabel"><b>EDIT <?=strtoupper($each_stores['name'])?></b></h4>

            </div>
            <h4 class="text-center" id="message">Changes successful</h4>

            <div class="modal-body" id="edit-modal">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-offset-1 col-md-10">

                            <h5 class="edit-modal-h5 text-center">Edit details you wish to change</h5>

                            <form class="" action="../script.php" method="post" class="form-group" id="edit-form">

                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Name  </span>
                                  <input type="text" class="form-control" placeholder="Enter store name" name="name" id="name" aria-describedby="basic-addon1" value="<?=$each_stores['name']?>">
                              </div>

                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Address</span>
                                  <input type="text" class="form-control" placeholder="Enter store address" name="address" id="address" aria-describedby="basic-addon1" value="<?=$each_stores['address']?>">
                              </div>

                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">Mobile</span>
                                  <input type="text" class="form-control" placeholder="Enter phone number" name="mobile" id="mobile" aria-describedby="basic-addon1" value="<?=$each_stores['mobile']?>">
                              </div>

                              <div class="input-group" id="store-id">
                                  <span class="input-group-addon" id="basic-addon1">ID</span>
                                  <input type="text" class="form-control" placeholder="Enter phone number" name="id" id="id" aria-describedby="basic-addon1" value="<?=$each_stores['id']?>">
                              </div>

                              <div class="input-group" id="store-id">
                                  <span class="input-group-addon" id="basic-addon1">Token</span>
                                  <input type="text" class="form-control" placeholder="Enter phone number" name="token" id="id" aria-describedby="basic-addon1" value="<?=$_SESSION['edit_token']?>">
                              </div>


                              <div class="col-md-12">


                                  <div class="col-md-5">
                                      <button class="delete-action btn btn-info btn-block" type="submit" name="back" id="back">Back</button>
                                  </div>
                                  <div class="col-md-2">

                                  </div>
                                  <div class="col-md-5">
                                      <button class="delete-action btn btn-info btn-block" type="submit" name="change" id="edit-store">Complete</button>
                                  </div>
                              </div>


                            </form>



                        </div>

                    </div>

                </div>

            </div>



        </div>

    </div>

</div>
