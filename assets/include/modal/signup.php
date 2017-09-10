
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

                              <form id="signup-form" action="script.php" method="post" novalidate="" name="sigupform">

                                  <div class="col-md-12">

                                      <div class="row">

                                        <div class="form-group has-feedback">
                                            <p style="font-size:12px;color:red;" class="text-center" ng-show="sigupform.name.$invalid && sigupform.name.$touched">Please enter your name</p>
                                            <label for="reg_firstname"><b>Name</b></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-user" aria-hidden="true"></i> </span>
                                                <input class="form-control" type="text" name="name" id="name" ng-model="user.name" ng-required="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                          <p style="font-size:12px;color:red;" class="text-center" ng-show="sigupform.email.$invalid && sigupform.email.$touched">Please provide an email address</p>
                                            <label for="reg_email"><b>Email Address</b></label>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                                <input class="form-control" type="text" name="email" id="email" ng-model="user.email" ng-required="true">
                                            </div>
                                       </div>

                                       <div class="form-group">
                                         <p style="font-size:12px;color:red;" class="text-center" ng-show="sigupform.password.$invalid && sigupform.password.$touched">Password Field cannot be blank</p>
                                           <label for="reg_password"><b>Password</b></label>
                                           <div class="input-group">
                                               <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-key" aria-hidden="true"></i> </span>
                                               <input class="form-control" type="password" name="password" id="password" ng-model="user.password" ng-required="true">
                                           </div>
                                      </div>

                                       <div class="form-group">
                                         <p style="font-size:12px;color:red;" class="text-center" ng-show="sigupform.confirm_password.$invalid && sigupform.confirm_password.$dirty">Passwords do not match</p>
                                           <label for="reg_confirm_password"><b>Confirm Password</b></label>
                                           <div class="input-group">
                                               <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-key" aria-hidden="true"></i> </span>
                                               <input class="form-control" type="password" name="confirm_password" id="confirm_password" ng-model="user.confirm_password" ng-required="true" ng-match="user.password">
                                           </div>
                                      </div>

                                      </div>

                                  </div>

                                  <div class="container-container text-center">
                                      <button class="btn btn-primary btn-block" id="signup_button" type="submit" name="signup" ng-disabled="sigupform.$invalid">Submit</button>
                                  </div>

                              </form>

                        </div>

                    </div>

                </div>

                <div id="seeker-modal" class="modal-footer text-center">



                </div>

            </div>

        </div>

    </div><!-- Sign up modal ends-->
