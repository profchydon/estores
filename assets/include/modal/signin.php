<!-- Sign in modal for job seeker -->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="signinLabel">

    <div id="signin-modal" class="modal-dialog" role="document">

        <div class="modal-content con">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                <img class="img img-responsive center"src="" alt="E-Stores" />

                <h4 class="modal-title text-center" id="signinLabel"><b>Log in</b></h4>

            </div>

            <div class="modal-body">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-offset-1 col-md-10">

                            <p style="font-size:13px;color:red;font-weight:500;" class="sign-in-error text-center" id="signin-error"></p>
                            <p style="font-size:14px;" class="text-center"></p>

                            <form id="signin-form" class="" action="script.php" method="post" novalidate="" name="siginform">



                                <div class="form-group">
                                  <p style="font-size:13px;color:red;font-weight:500;" class="sign-in-error text-center" ng-show="siginform.email.$invalid && siginform.email.$touched">Please enter your email to sign in</p>
                                    <label for=""><b>Email</b></label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-envelope" aria-hidden="true"></i> </span>
                                        <input class="form-control" type="text" name="email" id="email" ng-model="user.email" ng-required="true">
                                    </div>

                                </div>



                                <div class="form-group">
                                  <p style="font-size:13px;color:red;font-weight:500;" class="sign-in-error text-center" ng-show="siginform.password.$invalid && siginform.password.$touched">Password field cannot be blank</p>
                                  <label for=""><b>Password</b></label>
                                  <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-key" aria-hidden="true"></i> </span>
                                      <input class="form-control" type="password" name="password" id="password" ng-model="user.password" ng-required="true">

                                  </div>

                                </div>

                                <button class="btn btn-primary btn-block" id="sign_in_button" type="submit" name="signin" ng-model="user.password" ng-disabled="siginform.$invalid">Log in</button>

                        </div>

                    </div>

                </div>

            </div>

            <div id="seeker-modal" class="modal-footer text-center">

                 <div class="container-container text-center">

                 </div>

            </div>

              </form>

        </div>

    </div>

</div>
