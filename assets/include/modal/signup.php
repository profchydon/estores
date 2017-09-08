
   <!-- Sign up modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                    <img class="img img-responsive center"src="" alt="E-Stores" />

                    <h4 class="modal-title text-center" id="signupLabel"><b>Account Information</b></h4>

                </div>

                <div id="signup-modal-body" class="modal-body">

                    <div class="container-fluid">

                        <div class="row">

                              <p style="font-size:14px;color:green;" id="signup-success" class="text-center"></p>
                              <p style="font-size:14px;color:red;" id="signup-error" class="text-center"></p>

                              <form id="signup-form" action="script.php" method="post" novalidate="">

                                  <div class="col-md-12">

                                      <div class="row">

                                        <div class="form-group has-feedback">
                                            <label for="reg_firstname"><b>Name</b></label>
                                            <input type="text" name="name" id="name" value="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="reg_email"><b>Email Address</b></label>
                                            <input type="email" name="email" id="email" value="" class="form-control">
                                            <p style="font-size:11px;color:red;" id="email-error" class="text-center"></p>
                                       </div>

                                       <div class="form-group">
                                           <label for="reg_password"><b>Password</b></label>
                                           <input type="password" name="password" id="password" value="" class="form-control">
                                       </div>

                                       <div class="form-group">
                                           <label for="confirm_password"><b>Confirm Password</b></label>
                                           <input type="password" name="confirm_password" id="confirm_password" value="" class="form-control">
                                       </div>

                                      </div>

                                  </div>



                              </form>

                        </div>

                    </div>

                </div>

                <div id="seeker-modal" class="modal-footer text-center">

                     <div class="container-container text-center">
                         <button class="btn btn-primary btn-block" id="signup_button" type="submit" name="signup">Submit</button>
                     </div>

                </div>

            </div>

        </div>

    </div><!-- Sign up modal ends-->
